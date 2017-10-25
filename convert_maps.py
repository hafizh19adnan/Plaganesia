
nama_daerah=input("Masukan Nama Daerah : ")
input_=input()
file_xml = open(nama_daerah+".xml","a")
pattern_1="<point lat='"
pattern_2="' lng='"
pattern_3="'/>"
parse1 = input_.split("), ")
file_xml.write("<state name ='"+nama_daerah+"' colour='green' >")
for x in range(0,len(parse1)-1):
	parse2=parse1[x].split("new google.maps.LatLng(")
	parse3=parse2[1].split(",")
	file_xml.write(pattern_1+parse3[0]+pattern_2+parse3[1]+pattern_3+"\n")
file_xml.write("</state>")
file_xml.close()	