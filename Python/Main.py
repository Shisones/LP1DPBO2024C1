from AnggotaDPR import AnggotaDPR

vec = []
loop = True

while(loop):
    print("\nOpsi :\n[A] Add Record\n[E] Edit Record\n[D] Delete Record\n[S] Show Record\n[ELSE] Exit")

    option = input("> ")[0]
    
    if option != 'A' and option != 'E' and option != 'D' and option != 'S':
        loop = False

    if option == 'A':
        print("\nAnggota DPR Baru : (format = <id> <nama> <bidang> <partai>)")

        id = input("ID > ")
        name = input("Nama > ")
        div_name = input("Bidang > ")
        party_name = input("Partai > ")

        vec.append(AnggotaDPR(id, name, div_name, party_name))
    if option == 'S':
        print("\nDaftar Anggota DPR : ")
        
        idx = 0
        for p in vec:
            print(f"{idx+1}\nID : {p.getId()}\nNama : {p.getName()}\nBidang : {p.getDiv()}\nPartai : {p.getParty()}")
        print()
    if option == 'E':
        chg = int(input("Rubah Index no. "))
        id = input("ID Baru > ")
        name = input("Nama Baru > ")
        div_name = input("Bidang Baru > ")
        party_name = input("Partai Baru > ")

        vec[chg-1].setId(id)
        vec[chg-1].setName(name)
        vec[chg-1].setDiv(div_name)
        vec[chg-1].setParty(party_name)
    if option == 'D':
        rm = int(input("Hapus Index no. "))
        vec.pop(rm-1)

