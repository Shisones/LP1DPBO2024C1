package Java;

public class AnggotaDPR {
    // Private Attributes
    private String id; // ID for Members
    private String name; // Name for Members
    private String div_name; // Division for Members
    private String party_name; // Party name for members
    
    // Constructors
    public AnggotaDPR() {
        this.id = "n/a";
        this.name = "n/a";
        this.div_name = "n/a";
        this.party_name = "n/a";
    }
    public AnggotaDPR(String id, String name, String div_name, String party_name) {
        this.id = id;
        this.name = name;
        this.div_name = div_name;
        this.party_name = party_name;
    }
    
    // Get Methods
    public String getId() {
        return this.id;
    }
    public String getName() {
        return this.name;
    }
    public String getDiv() {
        return this.div_name;
    }
    public String getParty() {
        return this.party_name;
    }
    
    // Set Methods
    public void setId(String id){
        this.id = id;
    }
    public void setName(String name){
        this.name = name;
    }

    public void setDiv(String div_name){
        this.div_name = div_name;
    }
    public void setParty(String party_name){
        this.party_name = party_name;
    }
}
