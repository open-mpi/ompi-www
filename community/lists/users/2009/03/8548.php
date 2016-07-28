<?
$subject_val = "Re: [OMPI users] mpirun/exec requires ssh?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 14:02:00 2009" -->
<!-- isoreceived="20090323180200" -->
<!-- sent="Mon, 23 Mar 2009 12:01:45 -0600" -->
<!-- isosent="20090323180145" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun/exec requires ssh?" -->
<!-- id="16BF98F5-6D3F-47A4-B9C3-05D693EF77A9_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49C7CC30.9040909_at_mpip-mainz.mpg.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 14:01:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8549.php">Rene Salmon: "[OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="8547.php">Olaf Lenz: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>In reply to:</strong> <a href="8547.php">Olaf Lenz: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8568.php">Simone Pellegrini: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Reply:</strong> <a href="8568.php">Simone Pellegrini: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One thing you might want to try is blowing away that prefix dir and  
<br>
reinstalling OMPI 1.3.1. I'm not confident that &quot;make uninstall&quot; does  
<br>
an adequate job of cleaning things out. The problem is that there are  
<br>
major differences between 1.2.x and 1.3.x, and the uninstall may well  
<br>
miss some things as a result.
<br>
<p>Easy place to start, at least. ;-)
<br>
<p><p>On Mar 23, 2009, at 11:51 AM, Olaf Lenz wrote:
<br>
<p><span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I regularly run jobs like that on 1.3.1 - it has no desire to use  
</span><br>
<span class="quotelev2">&gt;&gt; ssh to start anything. On a local host such as this command uses,  
</span><br>
<span class="quotelev2">&gt;&gt; all mpiexec does is fork/exec the procs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That sounds strange. I'm just going back and forth between OpenMPI  
</span><br>
<span class="quotelev1">&gt; 1.2.9 and OpenMPI 1.3.1 by using make uninstall/make install, and I  
</span><br>
<span class="quotelev1">&gt; can always reproduce the behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It sounds like something strange is going on in your environment  
</span><br>
<span class="quotelev2">&gt;&gt; that makes OMPI think it is launching on a remote host. Most likely  
</span><br>
<span class="quotelev2">&gt;&gt; cause is
</span><br>
<span class="quotelev2">&gt;&gt; something in your Ethernet configuration. Can you send us the  
</span><br>
<span class="quotelev2">&gt;&gt; output of ifconfig (or whatever your equivalent is)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, here is some information on my system:
</span><br>
<span class="quotelev1">&gt; * Kubuntu 9.04 (Jaunty) alpha 6
</span><br>
<span class="quotelev1">&gt; * Core Duo CPU
</span><br>
<span class="quotelev1">&gt; * I have compiled both OpenMPI versions (1.2.9 and 1.3.1) myself,  
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure --prefix=$HOME/software --enable-shared --enable-static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Output of some ifconfig:
</span><br>
<span class="quotelev2">&gt; &gt; ifconfig
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:1e:37:15:1b:70
</span><br>
<span class="quotelev1">&gt;          inet addr:192.168.1.1  Bcast:192.168.1.255  Mask: 
</span><br>
<span class="quotelev1">&gt; 255.255.255.0
</span><br>
<span class="quotelev1">&gt;          inet6 addr: fe80::21e:37ff:fe15:1b70/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:34185 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:29386 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:100
</span><br>
<span class="quotelev1">&gt;          RX bytes:25645492 (25.6 MB)  TX bytes:3921545 (3.9 MB)
</span><br>
<span class="quotelev1">&gt;          Memory:fe000000-fe020000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;          inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;          inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;          UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:5372 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:5372 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;          RX bytes:661715 (661.7 KB)  TX bytes:661715 (661.7 KB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tun0      Link encap:UNSPEC  HWaddr  
</span><br>
<span class="quotelev1">&gt; 00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt;          inet addr:10.20.143.6  P-t-P:10.20.143.5  Mask: 
</span><br>
<span class="quotelev1">&gt; 255.255.255.255
</span><br>
<span class="quotelev1">&gt;          UP POINTOPOINT RUNNING NOARP MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:2234 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:3158 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:100
</span><br>
<span class="quotelev1">&gt;          RX bytes:940549 (940.5 KB)  TX bytes:207091 (207.0 KB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need anything else?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Olaf
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
<li><strong>Next message:</strong> <a href="8549.php">Rene Salmon: "[OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="8547.php">Olaf Lenz: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>In reply to:</strong> <a href="8547.php">Olaf Lenz: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8568.php">Simone Pellegrini: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Reply:</strong> <a href="8568.php">Simone Pellegrini: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
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
