#include <bits/stdc++.h>
#include "AnggotaDPR.cpp"

int main(){
    vector<AnggotaDPR> vec; // Vector holding DPR Members 
    bool loop = true; // To keep track if the loop should continue
    cout << "Program List Anggota DPR Object oriented\n" << endl;

    do{ // Main loop
        char option; // Option holder variable
        cout << "Opsi :\n"
             << "[A] Add Record\n"
             << "[E] Edit Record\n"
             << "[D] Delete Record\n"
             << "[S] Show Record\n"
             << "[ELSE] Exit\n"
             << "> ";
        cin >> option;
        
        // Condition to exit loop if the user input is not a choice
        if (option != 'A' && option != 'E' && option != 'D' && option != 'S'){
            loop = false;
            return 0;
        }

        if (option == 'A'){ // Condition where the user chooses Add
            cout << "\nAnggota DPR Baru : (format = <id> <nama> <bidang> <partai>)\n" << "> ";
            AnggotaDPR temp; // Temporary variable to store user inout
            
            // Declaration and scanning of variables
            string id, name, div_name, party_name;
            cin >> id >> name >> div_name >> party_name;
            
            // Set the value of the temp variable
            temp.setId(id);
            temp.setName(name);
            temp.setDiv(div_name);
            temp.setParty(party_name);
            
            // Push the variable into a vector
            vec.push_back(temp);
        } else if (option == 'S'){ // Condition where the user chooses Show
            cout << "\nDaftar Anggota DPR : \n";
            int idx = 0; // Index

            // Loop to print 
            for (int i = 0; i < vec.size(); i++){
                cout << idx+1 << '\n' 
                     << "ID : " << vec[i].getId() << '\n'
                     << "Nama : " << vec[i].getName() << '\n'
                     << "Bidang : " << vec[i].getDiv() << '\n'
                     << "Partai : " << vec[i].getParty() << '\n';
                idx++;
            } cout << endl; 
        } else if (option == 'E'){ // Condition where the user chooses Edit
            // Check user input and scan it
            int target;
            cout << "Rubah Index no. ";
            cin >> target;
            
            // Get user choice
            cout << "\nEdit Anggota DPR ke-" << target << " " << ": (format = <id> <nama> <bidang> <partai>)\n" << "> ";
            string id, name, div_name, party_name;
            cin >> id >> name >> div_name >> party_name;
            
            // Set the targeted element with user value
            vec[target-1].setId(id);
            vec[target-1].setName(name);
            vec[target-1].setDiv(div_name);
            vec[target-1].setParty(party_name);
        } else if (option == 'D'){
            // Check user input and scan it
            int target;
            cout << "Hapus Index no. ";
            cin >> target;
            
            vec.erase(vec.begin()+target-1); 

        }
    }while(loop);
    
    return 0;
}
