class AnggotaDPR:
    # Attribute Declaration
    __id = "" # Private ID
    __name = "" # Private Name
    __div_name = "" # Private Div
    __party_name = "" # Private Party
    
    # Constructor
    def __init__(self, id="n/a", name="n/a", div_name="n/a", party_name="n/a"):
        self.__name = name
        self.__id = id
        self.__div_name = div_name
        self.__party_name = party_name
    
    # Get Method for AnggotaDPR
    def getId(self):
        return self.__id
    def getName(self):
        return self.__name
    def getDiv(self):
        return self.__div_name
    def getParty(self):
        return self.__party_name
    # Set Method for AnggotaDPR
    def setId(self, id):
        self.__id = id 
    def setName(self, name):
        self.__name = name 
    def setDiv(self, div_name):
        self.__div_name = div_name
    def setParty(self, party_name):
        self.__party_name = party_name

