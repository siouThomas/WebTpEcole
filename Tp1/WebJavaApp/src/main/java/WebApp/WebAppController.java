package WebApp;

import java.sql.*;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.bind.annotation.RequestMapping;

@RestController
public class WebAppController {

    @RequestMapping("/")
    public String index() {
        return "<h1> Java based Web Application </h1>"
                + "Fetching data from DB : "
                + FetchDataFromDB();
    }
    
    private String FetchDataFromDB(){
        String JDBC_DRIVER = "com.mysql.jdbc.Driver";  
        String DB_URL = "jdbc:mysql://localhost/mydb";

        //  Database credentials
        String USER = "root";
        String PASS = "";
        
        Connection conn = null;
        Statement stmt = null;
        
        
        String result = "";
           
        try{
           //STEP 2: Register JDBC driver
           Class.forName("com.mysql.jdbc.Driver");

           //STEP 3: Open a connection
           System.out.println("Connecting to database...");
           conn = DriverManager.getConnection(DB_URL,USER,PASS);

           //STEP 4: Execute a query
           System.out.println("Creating statement...");
           stmt = conn.createStatement();
           String sql;
           sql = "SELECT * FROM esiea_user";
           ResultSet rs = stmt.executeQuery(sql);

           //STEP 5: Extract data from result set
           while(rs.next()){
              //Retrieve by column name
              int id  = rs.getInt("ID");
              int age  = rs.getInt("old");
              int section = rs.getInt("section");
              String name = rs.getString("name");
              String first_name = rs.getString("first_name");
              String city = rs.getString("city");
              String other = rs.getString("other");

              result += "<br/><br/>";
              result += "ID : " + id;
              result += "<br/> Age : " + age;
              result += "<br/> Name : " + first_name + " " + name;
              result += "<br/> City : " + city;
              result += "<br/> Section : " + section;
              result += "Informations complémentaires : " + other;
           }
           //STEP 6: Clean-up environment
           rs.close();
           stmt.close();
           conn.close();
        }catch(SQLException se){
           //Handle errors for JDBC
           se.printStackTrace();
        }catch(Exception e){
           //Handle errors for Class.forName
           e.printStackTrace();
        }finally{
           //finally block used to close resources
           try{
              if(stmt!=null)
                 stmt.close();
           }catch(SQLException se2){
           }// nothing we can do
           try{
              if(conn!=null)
                 conn.close();
           }catch(SQLException se){
              se.printStackTrace();
           }//end finally try
        }//end try

        return result;
    }
}
