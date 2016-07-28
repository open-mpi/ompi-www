<?
$subject_val = "Re: [OMPI users] mpirun/exec requires ssh?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 24 19:44:27 2009" -->
<!-- isoreceived="20090324234427" -->
<!-- sent="Tue, 24 Mar 2009 19:44:23 -0400" -->
<!-- isosent="20090324234423" -->
<!-- name="Divya Navaneetha Krishna" -->
<!-- email="divnavan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun/exec requires ssh?" -->
<!-- id="cbaba4770903241644g7586214dt6aa2e4028e64398b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F1736EBE-7698-4F7F-A157-8A49019D6F8E_at_lanl.gov" -->
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
<strong>From:</strong> Divya Navaneetha Krishna (<em>divnavan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-24 19:44:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8571.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Previous message:</strong> <a href="8569.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>In reply to:</strong> <a href="8569.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8571.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Reply:</strong> <a href="8571.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Ran into the same problem yesterday and was wondering what was wrong.
<br>
Couldn't get that fixed even after I read the users archives. Thanks for this
<br>
response. So, there's no way as of now to get openmpi running on a
<br>
laptop with ubuntu?
<br>
<p>Thanks,
<br>
Divya
<br>
<p>On Tue, Mar 24, 2009 at 7:33 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Yeah, there is something funny about the way Ubuntu is defining their
</span><br>
<span class="quotelev1">&gt; Ethernet interfaces that is causing a problem. I have a patch that will be
</span><br>
<span class="quotelev1">&gt; in 1.3.2 that fixes the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 24, 2009, at 5:24 PM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt;&gt; I have the same problem when I try to install openmpi 1.3.1 on my laptop
</span><br>
<span class="quotelev2">&gt;&gt; (Ubuntu 8.10 running on a dual core machine).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I did the same installation on Ubuntu 8.04 and everything works, but here
</span><br>
<span class="quotelev2">&gt;&gt; no matter what I do, every time I type mpirun the system prompt for the
</span><br>
<span class="quotelev2">&gt;&gt; password.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, when I install openmpi as a super user and I try to run mpirun
</span><br>
<span class="quotelev2">&gt;&gt; (or mpicc) I get the following errors:
</span><br>
<span class="quotelev2">&gt;&gt; @eNerd:~$ mpicc
</span><br>
<span class="quotelev2">&gt;&gt; Cannot open configuration file /usr/share/openmpi/mpicc-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; Error parsing data file mpicc: Not found
</span><br>
<span class="quotelev2">&gt;&gt; @eNerd:~$ mpirun --np 2 ls
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: symbol lookup error: mpirun: undefined symbol: orted_cmd_line
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec on the other hand is working but asking for a password:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @eNerd:~/Desktop/openmpi-1.3.1$ mpiexec --np 2 ls
</span><br>
<span class="quotelev2">&gt;&gt; @enerd's password:
</span><br>
<span class="quotelev2">&gt;&gt; acinclude.m4 &#160;config.log &#160; &#160; Doxyfile &#160;Makefile &#160; &#160; &#160; &#160; &#160; &#160;ompi &#160; &#160;VERSION
</span><br>
<span class="quotelev2">&gt;&gt; aclocal.m4 &#160; &#160;config.status &#160;examples &#160;Makefile.am &#160; &#160; &#160; &#160;opal
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cheers, Simone
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One thing you might want to try is blowing away that prefix dir and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reinstalling OMPI 1.3.1. I'm not confident that &quot;make uninstall&quot; does an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adequate job of cleaning things out. The problem is that there are major
</span><br>
<span class="quotelev3">&gt;&gt;&gt; differences between 1.2.x and 1.3.x, and the uninstall may well miss some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things as a result.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Easy place to start, at least. ;-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 23, 2009, at 11:51 AM, Olaf Lenz wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I regularly run jobs like that on 1.3.1 - it has no desire to use ssh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to start anything. On a local host such as this command uses, all mpiexec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; does is fork/exec the procs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That sounds strange. I'm just going back and forth between OpenMPI 1.2.9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and OpenMPI 1.3.1 by using make uninstall/make install, and I can always
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reproduce the behavior.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It sounds like something strange is going on in your environment that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; makes OMPI think it is launching on a remote host. Most likely cause is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; something in your Ethernet configuration. Can you send us the output of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ifconfig (or whatever your equivalent is)?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ok, here is some information on my system:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Kubuntu 9.04 (Jaunty) alpha 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Core Duo CPU
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * I have compiled both OpenMPI versions (1.2.9 and 1.3.1) myself, using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure --prefix=$HOME/software --enable-shared --enable-static
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Output of some ifconfig:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; ifconfig
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; eth0 &#160; &#160; &#160;Link encap:Ethernet &#160;HWaddr 00:1e:37:15:1b:70
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;inet addr:192.168.1.1 &#160;Bcast:192.168.1.255 &#160;Mask:255.255.255.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;inet6 addr: fe80::21e:37ff:fe15:1b70/64 Scope:Link
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;UP BROADCAST RUNNING MULTICAST &#160;MTU:1500 &#160;Metric:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;RX packets:34185 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;TX packets:29386 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;collisions:0 txqueuelen:100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;RX bytes:25645492 (25.6 MB) &#160;TX bytes:3921545 (3.9 MB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;Memory:fe000000-fe020000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lo &#160; &#160; &#160; &#160;Link encap:Local Loopback
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;inet addr:127.0.0.1 &#160;Mask:255.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;UP LOOPBACK RUNNING &#160;MTU:16436 &#160;Metric:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;RX packets:5372 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;TX packets:5372 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;collisions:0 txqueuelen:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;RX bytes:661715 (661.7 KB) &#160;TX bytes:661715 (661.7 KB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tun0 &#160; &#160; &#160;Link encap:UNSPEC &#160;HWaddr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;inet addr:10.20.143.6 &#160;P-t-P:10.20.143.5 &#160;Mask:255.255.255.255
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;UP POINTOPOINT RUNNING NOARP MULTICAST &#160;MTU:1500 &#160;Metric:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;RX packets:2234 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;TX packets:3158 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;collisions:0 txqueuelen:100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;RX bytes:940549 (940.5 KB) &#160;TX bytes:207091 (207.0 KB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You need anything else?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; Olaf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8571.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Previous message:</strong> <a href="8569.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>In reply to:</strong> <a href="8569.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8571.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Reply:</strong> <a href="8571.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
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
