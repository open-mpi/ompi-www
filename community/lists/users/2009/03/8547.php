<?
$subject_val = "Re: [OMPI users] mpirun/exec requires ssh?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 13:51:52 2009" -->
<!-- isoreceived="20090323175152" -->
<!-- sent="Mon, 23 Mar 2009 18:51:44 +0100" -->
<!-- isosent="20090323175144" -->
<!-- name="Olaf Lenz" -->
<!-- email="lenzo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun/exec requires ssh?" -->
<!-- id="49C7CC30.9040909_at_mpip-mainz.mpg.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="29EA2D3E-4920-4F4C-9B2A-153F866202A3_at_lanl.gov" -->
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
<strong>From:</strong> Olaf Lenz (<em>lenzo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 13:51:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8548.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Previous message:</strong> <a href="8546.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>In reply to:</strong> <a href="8546.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8548.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Reply:</strong> <a href="8548.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I regularly run jobs like that on 1.3.1 - it has no desire to use ssh to 
</span><br>
<span class="quotelev1">&gt; start anything. On a local host such as this command uses, all mpiexec 
</span><br>
<span class="quotelev1">&gt; does is fork/exec the procs.
</span><br>
<p>That sounds strange. I'm just going back and forth between OpenMPI 1.2.9 
<br>
and OpenMPI 1.3.1 by using make uninstall/make install, and I can always 
<br>
reproduce the behavior.
<br>
<p><span class="quotelev1">&gt; It sounds like something strange is going on in your environment that 
</span><br>
<span class="quotelev1">&gt; makes OMPI think it is launching on a remote host. Most likely cause is
</span><br>
<span class="quotelev1">&gt; something in your Ethernet configuration. Can you send us the output of 
</span><br>
<span class="quotelev1">&gt; ifconfig (or whatever your equivalent is)?
</span><br>
<p>Ok, here is some information on my system:
<br>
* Kubuntu 9.04 (Jaunty) alpha 6
<br>
* Core Duo CPU
<br>
* I have compiled both OpenMPI versions (1.2.9 and 1.3.1) myself, using
<br>
<p>configure --prefix=$HOME/software --enable-shared --enable-static
<br>
<p>Output of some ifconfig:
<br>
<span class="quotelev1"> &gt; ifconfig
</span><br>
eth0      Link encap:Ethernet  HWaddr 00:1e:37:15:1b:70
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.1.1  Bcast:192.168.1.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::21e:37ff:fe15:1b70/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:34185 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:29386 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:25645492 (25.6 MB)  TX bytes:3921545 (3.9 MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memory:fe000000-fe020000
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:5372 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:5372 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:661715 (661.7 KB)  TX bytes:661715 (661.7 KB)
<br>
<p>tun0      Link encap:UNSPEC  HWaddr 
<br>
00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.20.143.6  P-t-P:10.20.143.5  Mask:255.255.255.255
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP POINTOPOINT RUNNING NOARP MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:2234 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:3158 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:940549 (940.5 KB)  TX bytes:207091 (207.0 KB)
<br>
<p>You need anything else?
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Olaf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8548.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Previous message:</strong> <a href="8546.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>In reply to:</strong> <a href="8546.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8548.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Reply:</strong> <a href="8548.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
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
