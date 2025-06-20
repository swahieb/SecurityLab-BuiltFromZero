# 🛡️ SecurityLab-BuiltFromZero

A fully self-built cybersecurity lab created to simulate real-world ethical hacking scenarios in a secure, offline environment. This project demonstrates my ability to plan, configure, troubleshoot, and operate a penetration testing lab — entirely from scratch — using real tools and real vulnerable machines.

---

## 🚀 Why I Built This Lab

Most people use pre-packaged labs — I wanted to do it differently.

This lab was built on my own:
- No pre-configured platforms
- No step-by-step course dependencies
- Just learning by doing

I configured the virtual environment, fixed installation issues, created isolated networks, and deployed vulnerable systems to begin real ethical hacking practice.

---

## 🧰 Tools & Technologies

- 🐱‍💻 **Kali Linux** – Attacker VM
- 👤 **Mr. Robot OVA** – Vulnerable target VM (from VulnHub)
- ⚙️ **Oracle VirtualBox** – Virtualization platform
- 🖥️ **VBoxManage via CMD** – Network & DHCP setup
- 🧪 **nmap**, **ping** – Network testing & enumeration
- 📊 **Draw.io** – Visual network diagramming

---

## ⚙️ Key Lab Setup Highlights

- Created a **host-only internal network** called `"loki"` to isolate VMs
- Manually configured a **DHCP server** using VBoxManage
- Resolved **Kali Linux install errors** by resizing the virtual disk and increasing memory
- Used **ping** to verify isolation and internal communication
- Scanned the network using `nmap` to identify open ports and active services

---

## 🔍 Early Enumeration Results

```bash
sudo nmap -sS -T4 10.38.1.110-120
