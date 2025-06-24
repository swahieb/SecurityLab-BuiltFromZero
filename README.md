# 🛡️ Security Lab: Built from Scratch

A fully self-built cybersecurity lab designed to simulate real-world ethical hacking scenarios in a secure, offline environment. This project demonstrates my ability to plan, configure, troubleshoot, and operate a penetration testing lab — entirely from scratch — using real tools, real methods, and real vulnerable machines.

---

## 🚀 Why I Built This Lab

Most people rely on pre-configured platforms. I chose a different path:  
**No step-by-step tutorials. No automation. Just hands-on learning.**

This lab was built entirely by me, from the ground up:

- ⚙️ No pre-configured labs or bootcamps  
- 💡 No dependencies on paid platforms  
- 🧠 Just real-world learning by doing  

I handled every aspect of the environment — from planning the topology to resolving system errors, configuring networks, and launching attacks.

---

## 🧰 Tools & Technologies

- 🐱‍💻 **Kali Linux** — Attacker VM  
- 👤 **Mr. Robot OVA** — Vulnerable machine (from VulnHub)  
- 💻 **Oracle VirtualBox** — Virtualization platform  
- 🛠️ **VBoxManage** (CLI) — Custom DHCP and network config  
- 🔍 **nmap**, **ping**, **netcat**, **hydra** — Network recon & brute force  
- 📊 **Draw.io** — Network architecture diagrams  

---

## 🏗️ Lab Setup Highlights

- 🛡️ Created a host-only internal network (`loki`) to isolate VMs  
- 📡 Manually configured a DHCP server using `VBoxManage`  
- 🧩 Resolved Kali install bugs by resizing the disk and tuning memory  
- 🧪 Verified isolation with `ping` and internal routing  
- 🔍 Scanned the vulnerable VM using `nmap` to enumerate services

---

## 🔎 Early Enumeration Example

```bash
sudo nmap -sS -T4 10.38.1.110-120
