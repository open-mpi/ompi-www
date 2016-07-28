<?
$subject_val = "Re: [OMPI users] mpirun/exec requires ssh?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 24 19:24:40 2009" -->
<!-- isoreceived="20090324232440" -->
<!-- sent="Wed, 25 Mar 2009 00:24:33 +0100" -->
<!-- isosent="20090324232433" -->
<!-- name="Simone Pellegrini" -->
<!-- email="spellegrini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun/exec requires ssh?" -->
<!-- id="49C96BB1.3020201_at_dps.uibk.ac.at" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="16BF98F5-6D3F-47A4-B9C3-05D693EF77A9_at_lanl.gov" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] mpirun/exec requires ssh?<br>
<strong>From:</strong> Simone Pellegrini (<em>spellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-24 19:24:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8569.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Previous message:</strong> <a href="8567.php">&#197;ke Sandgren: "[OMPI users] Possible regression from 1.2 to 1.3 when BLACS is involved"</a>
<li><strong>In reply to:</strong> <a href="8548.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8569.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Reply:</strong> <a href="8569.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Reply:</strong> <a href="8574.php">Jeff Squyres: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
I have the same problem when I try to install openmpi 1.3.1 on my laptop 
<br>
(Ubuntu 8.10 running on a dual core machine).
<br>
<p>I did the same installation on Ubuntu 8.04 and everything works, but 
<br>
here no matter what I do, every time I type mpirun the system prompt for 
<br>
the password.
<br>
<p>Actually, when I install openmpi as a super user and I try to run mpirun 
<br>
(or mpicc) I get the following errors:
<br>
@eNerd:~$ mpicc
<br>
Cannot open configuration file /usr/share/openmpi/mpicc-wrapper-data.txt
<br>
Error parsing data file mpicc: Not found
<br>
@eNerd:~$ mpirun --np 2 ls
<br>
mpirun: symbol lookup error: mpirun: undefined symbol: orted_cmd_line
<br>
<p>mpiexec on the other hand is working but asking for a password:
<br>
<p>@eNerd:~/Desktop/openmpi-1.3.1$ mpiexec --np 2 ls
<br>
@enerd's password:
<br>
acinclude.m4  config.log     Doxyfile  Makefile            ompi    VERSION
<br>
aclocal.m4    config.status  examples  Makefile.am        opal
<br>
...
<br>
<p>cheers, Simone
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; One thing you might want to try is blowing away that prefix dir and 
</span><br>
<span class="quotelev1">&gt; reinstalling OMPI 1.3.1. I'm not confident that &quot;make uninstall&quot; does 
</span><br>
<span class="quotelev1">&gt; an adequate job of cleaning things out. The problem is that there are 
</span><br>
<span class="quotelev1">&gt; major differences between 1.2.x and 1.3.x, and the uninstall may well 
</span><br>
<span class="quotelev1">&gt; miss some things as a result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Easy place to start, at least. ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 23, 2009, at 11:51 AM, Olaf Lenz wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I regularly run jobs like that on 1.3.1 - it has no desire to use 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh to start anything. On a local host such as this command uses, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all mpiexec does is fork/exec the procs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That sounds strange. I'm just going back and forth between OpenMPI 
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.9 and OpenMPI 1.3.1 by using make uninstall/make install, and I 
</span><br>
<span class="quotelev2">&gt;&gt; can always reproduce the behavior.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It sounds like something strange is going on in your environment 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that makes OMPI think it is launching on a remote host. Most likely 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cause is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something in your Ethernet configuration. Can you send us the output 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of ifconfig (or whatever your equivalent is)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, here is some information on my system:
</span><br>
<span class="quotelev2">&gt;&gt; * Kubuntu 9.04 (Jaunty) alpha 6
</span><br>
<span class="quotelev2">&gt;&gt; * Core Duo CPU
</span><br>
<span class="quotelev2">&gt;&gt; * I have compiled both OpenMPI versions (1.2.9 and 1.3.1) myself, using
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure --prefix=$HOME/software --enable-shared --enable-static
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Output of some ifconfig:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ifconfig
</span><br>
<span class="quotelev2">&gt;&gt; eth0      Link encap:Ethernet  HWaddr 00:1e:37:15:1b:70
</span><br>
<span class="quotelev2">&gt;&gt;          inet addr:192.168.1.1  Bcast:192.168.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt;          inet6 addr: fe80::21e:37ff:fe15:1b70/64 Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;          RX packets:34185 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;          TX packets:29386 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;          collisions:0 txqueuelen:100
</span><br>
<span class="quotelev2">&gt;&gt;          RX bytes:25645492 (25.6 MB)  TX bytes:3921545 (3.9 MB)
</span><br>
<span class="quotelev2">&gt;&gt;          Memory:fe000000-fe020000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev2">&gt;&gt;          inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;          inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev2">&gt;&gt;          UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;          RX packets:5372 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;          TX packets:5372 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;          collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt;&gt;          RX bytes:661715 (661.7 KB)  TX bytes:661715 (661.7 KB)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tun0      Link encap:UNSPEC  HWaddr 
</span><br>
<span class="quotelev2">&gt;&gt; 00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev2">&gt;&gt;          inet addr:10.20.143.6  P-t-P:10.20.143.5  Mask:255.255.255.255
</span><br>
<span class="quotelev2">&gt;&gt;          UP POINTOPOINT RUNNING NOARP MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;          RX packets:2234 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;          TX packets:3158 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;          collisions:0 txqueuelen:100
</span><br>
<span class="quotelev2">&gt;&gt;          RX bytes:940549 (940.5 KB)  TX bytes:207091 (207.0 KB)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You need anything else?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Olaf
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8569.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Previous message:</strong> <a href="8567.php">&#197;ke Sandgren: "[OMPI users] Possible regression from 1.2 to 1.3 when BLACS is involved"</a>
<li><strong>In reply to:</strong> <a href="8548.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8569.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Reply:</strong> <a href="8569.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Reply:</strong> <a href="8574.php">Jeff Squyres: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
