#include <string>

using namespace std;

class AnggotaDPR{
    private:
        string id; // Member ID
        string name; // Member Name
        string div_name; // Member Division
        string party_name; // Member Party
    public:
    // Default Constructor
        AnggotaDPR(){
            this->id = "n/a";
            this->name = "n/a";
            this->div_name = "n/a";
            this->party_name = "n/a";
        }
        // Constructor
        AnggotaDPR(string id, string name, string div_name, string party_name){
            this->id = id;
            this->name = name;
            this->div_name = div_name;
            this->party_name = party_name;
        }
        
        // Methods that returns Member attributes
        string getId(){
            return this->id;
        }
        string getName(){
            return this->name;
        }
        string getDiv(){
            return this->div_name;
        }
        string getParty(){
            return this->party_name;
        }
        
        // Methods that sets Member attributes
        void setId(string id){
            this->id = id;
        }
        void setName(string name){
            this->name = name;
        }
        void setDiv(string div_name){
            this->div_name = div_name;
        }
       void setParty(string party_name){
            this->party_name = party_name;
        }
        
       // Deconstructor
        ~AnggotaDPR(){}
};
