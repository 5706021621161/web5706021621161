import java.util.Scanner;

public class Skocimis {

	public static void main(String[] args) {
		
		int num1, num2, num3;
		Scanner scan = new Scanner(System.in);
		
		do{
			do{
				
			System.out.print("Enter 3 Number (0 < NumberA < NumberB < NumberC < 100) : ");
			num1 = scan.nextInt();
			num2 = scan.nextInt();
			num3 = scan.nextInt();
			
			if (num1 <= 0 || num1 >= 100) {System.out.println("NumberA = 1-99 : Enter Number again");}
			else if (num2 <= 0 || num2 >= 100) {System.out.println("NumberB = 1-99 :Enter Number again");} 
			else if (num3 <= 0 || num3 >= 100) {System.out.println("NumberC = 1-99 :Enter Number again");} 
			else if (num2 <= num1) {System.out.println("NumberA < NumberB : Enter Number again");}
			else if (num3 <= num2) {System.out.println("NumberB < NumberC : Enter Number again");}
			System.out.println();
			
		}while(num1==num2||num1==num3||num2==num3);
		}while(num1<=0||num1>=100||num2<=0||num2>=100||num3<= 0||num3>=100||num3<num1||num3<num2||
				num2<num1||num1>num2||num1>num3);
		
		
		System.out.println("Most Played : " + ((num3 - num2) - 1) + " Time.");

	}

}