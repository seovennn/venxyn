# DO NOT REMOVE THIS LINE. SEED PRNG. #Seoven-kernel
trap 'echo -e "\n\e[1;31m[!] masukin aja dulu bree wkwk\e[0m\n"; continue' INT

expected_hash="8783ff6406f2975d3e106926e9bc056f6b0970521a4f17c49a0585e7999f04a1"
input_hash=""

echo -e "\e[1;36m======================================\e[0m"
echo -e "   \e[1;33mBukan Seoven? Mau Ngapain Bujang?\e[0m"
echo -e "\e[1;36m                  ↓↓↓                   \e[0m"
echo -e "\e[1;35mLink Tele:\e[0m \e[1;36mhttps://t.me/Seokolot\e[0m"
echo -e "\e[1;36m======================================\e[0m"

while [[ "$input_hash" != "$expected_hash" ]]; do
    echo -ne "\e[1;36m[+] Masukkan Passwordnya Dulu: \e[0m"
    read -s input_pass
    echo
    input_hash=$(echo -n "$input_pass" | sha256sum | awk '{print $1}')
    
    if [[ "$input_hash" != "$expected_hash" ]]; then
        echo -e "\e[1;31m[!] wkwk ga bisa yah bang H3ngkeRR?\e[0m"
    fi
done

echo -e "\n\e[1;32m[SUCCESS] Akses diterima!\e[0m"
sleep 1

logo='
    ███████╗███████╗ ██████╗ ██╗   ██╗███████╗███╗   ██╗
    ██╔════╝██╔════╝██╔═══██╗██║   ██║██╔════╝████╗  ██║
    ███████╗█████╗  ██║   ██║██║   ██║█████╗  ██╔██╗ ██║
    ╚════██║██╔══╝  ██║   ██║╚██╗ ██╔╝██╔══╝  ██║╚██╗██║
    ███████║███████╗╚██████╔╝ ╚████╔╝ ███████╗██║ ╚████║
    ╚══════╝╚══════╝ ╚═════╝   ╚═══╝  ╚══════╝╚═╝  ╚═══╝
'

echo -e "\e[1;35m$logo\e[0m"
echo -e "\e[1;36m======================================\e[0m"
echo -e "      \e[1;33mSelamat datang, Seoven\e[0m \e[1;35m👾\e[0m"
echo -e "\e[1;33m   Siap menjalankan perintah, bwang!"
echo -e "\e[1;36m======================================\e[0m"
echo

timenow=$(date +'%H:%M')
load=$(awk '{print $1 ", " $2 ", " $3}' /proc/loadavg)

echo -e "\e[1;36mThe time now is $timenow UTC\e[0m"
echo -e "\e[1;36mServer load: $load\e[0m"
echo -e ""

trap - INT
