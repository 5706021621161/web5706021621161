import java.util.Scanner;
import java.util.Scanner;
public class Trik {
public static void main(String args[]){
		
		String input;
		int a=1, b=0, c=0;
		int glass;
		
		Scanner scan = new Scanner(System.in);
		
			System.out.print("Enter (a b c) : ");
			input = scan.nextLine();
			
			
		for (int i = 0; i < input.length(); i++) {
			
			if (input.charAt(i)=='a') {
				glass=c;
				c=b;
				b=glass;
				
			} else if (input.charAt(i)=='b') {
				glass=b;
				b=c;
				c=glass;
				
			} else if (input.charAt(i)=='c') {
				glass=a;
				a=c;
				c=glass;
			}
			else{
				glass=0;
				a=glass;
				b=glass;
				c=glass;
			}
		}
		if(a==1){
			System.out.println("ball in glass 1");
		}
		else if (b==1){
			System.out.println("ball in glass 2");
		}
		else if (c==1){
			System.out.println("ball in glass 3");
		}
		else{
			System.out.println("Error...");
		}
	}


}