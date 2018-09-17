import java.io.BufferedReader; 
import java.io.IOException; 
import java.io.InputStreamReader; 
import java.net.ServerSocket; 
import java.net.Socket;
import java.util.Date;

public class SimpleHTTPServer {
	public static void main(String[] args) throws IOException {
		
		//I created a network socket which can accept connection on certain TCP port
	    ServerSocket server = new ServerSocket(8082);
	    System.out.println("Listening for connection on port 8082 ....");
	    while (true){
	    	/*
	    	InputStreamReader isr = new InputStreamReader(clientSocket.getInputStream()); 
	    	BufferedReader reader = new BufferedReader(isr); 
	    	String line = reader.readLine(); 
	    	while (!line.isEmpty()) { 
	    		System.out.println(line); 
	    		line = reader.readLine();
	    	 */
	    	
	    	/*
	    	 Once I ran the above the above code, 
	    	 the server is now running listening for a connection, and reading HTTP requests.
	    	 The server will just send today's date to the client using the following code
	    	 
	    	 */
	    	try (Socket socket = server.accept()) {
                Date today = new Date();
                String httpResponse = "HTTP/1.1 200 OK\r\n\r\n" + today;
                socket.getOutputStream().write(httpResponse.getBytes("UTF-8"));
                // Run he above program and connect using localhost:8082 on your browser and the date will be displayed
            }
	  
	    }
	}
}

