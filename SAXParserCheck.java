import org.xml.sax.*;
import org.xml.sax.helpers.*;
import java.io.*;
public class SAXParserCheck
{
public static void main(String args[]) throws IOException
{
BufferedReader bf=new BufferedReader(new InputStreamReader(System.in));
System.out.println("enter XML file name:");
String xmlfile=bf.readLine();
SAXParserCheck par=new SAXParserCheck(xmlfile);
}
public SAXParserCheck(String str)
{
try
{
File file=new File(str);
if(file.exists())
{
XMLReader reader=XMLReaderFactory.createXMLReader();
reader.parse(str);
System.out.println(str+"is well-formed!!!!");
}
else
{
System.out.println("File not found:"+str);
}
}
catch(SAXException sax)
{
System.out.println(str+"isn't well formed");
}
catch(IOException io)
{
System.out.println(str+"isn't well-formed");
}
}
}