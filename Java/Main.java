package Java; // Package name for the Java CLI Application so that the code can be compiled with linking

import java.util.Scanner; // CLI Scanner
import java.util.ArrayList; // Array List Datatype

public class Main {
    public static void main(String[] args) {
        ArrayList<AnggotaDPR> vec = new ArrayList<>(); // Declare a vector(actually an ArrayList of AnggotaDPR)

        boolean loopValid = true; // Looping Condition
        char opt = 'X'; // A placeholder for user option
        while (loopValid) {
            // Declaring an input variable and prompting user for an option
            Scanner input = new Scanner(System.in);
            System.out.print("Opsi :\n[A] Add Record\n[E] Edit Record\n[D] Delete Record\n[S] Show Record\n[ELSE] Exit\n> ");
            try { opt = input.next().charAt(0); } 
            catch(Exception e) {}

            // Break loop if input is invalid
            if (opt != 'A' && opt != 'D' && opt != 'E' && opt != 'S'){
                loopValid = false;
            }
            if (opt == 'A') { // Condition where user chooses Add
                System.out.print("\nAnggota DPR Baru : (format = <id> <nama> <bidang> <partai>)\n> ");
                String id = input.next();
                String name = input.next();
                String div_name = input.next();
                String party_name = input.next();

                AnggotaDPR temp = new AnggotaDPR(id, name, div_name, party_name);
                vec.add(temp);
            } else if (opt == 'S') { // Condition where user chooses Show
                System.out.println("\nDaftar Anggota DPR : ");
                for (int i = 0; i < vec.size(); i++){
                    AnggotaDPR elmt = vec.get(i);
                    System.out.println(String.format("%d\nID : %s\nNama : %s\nBidang : %s\nPartai : %s\n", i+1, elmt.getId(), elmt.getName(), elmt.getDiv(), elmt.getParty()));
                }
            } else if (opt == 'E') { // Condition where user chooses Edit
                System.out.print("Rubah Index no. ");
                int idx = input.nextInt();
                AnggotaDPR target = vec.get(idx-1);

                System.out.print(String.format("\nEdit anggota DPR ke-%d : (format = <id> <nama> <bidang> <partai>)\n> ", idx));
                String id = input.next();
                String name = input.next();
                String div_name = input.next();
                String party_name = input.next();
                
                target.setId(id);
                target.setName(name);
                target.setDiv(div_name);
                target.setParty(party_name);
                
                vec.set(idx-1, target);
            } else if (opt == 'D') { // Condition where user chooses Delete
                System.out.print("Hapus Index no. ");
                int idx = input.nextInt();
                vec.remove(idx-1);
            }
        }
    }
}
