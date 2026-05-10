import java.util.Scanner;

public class KonversiNilai {
    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        int nilai;

        System.out.print("Masukkan nilai 0 - 100 : ");
        nilai = input.nextInt();

        if (nilai >= 80 && nilai <= 100) {
            System.out.println("Nilai Huruf : A");
        }
        else if (nilai >= 65 && nilai <= 79) {
            System.out.println("Nilai Huruf : B");
        }
        else if (nilai >= 40 && nilai <= 64) {
            System.out.println("Nilai Huruf : C");
        }
        else if (nilai >= 21 && nilai <= 39) {
            System.out.println("Nilai Huruf : D");
        }
        else if (nilai >= 0 && nilai <= 20) {
            System.out.println("Nilai Huruf : E");
        }
        else {
            System.out.println("Nilai tidak valid");
        }


    }
}