<?
$subject_val = "Re: [OMPI users] ORTE_ERROR_LOG Timeout";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 12:52:14 2008" -->
<!-- isoreceived="20080604165214" -->
<!-- sent="Wed, 4 Jun 2008 12:51:45 -0400" -->
<!-- isosent="20080604165145" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE_ERROR_LOG Timeout" -->
<!-- id="9E5015B3-0BEA-449D-8150-7A33049ED81F_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="02A30774E66E464D90D15CB71C40544E06E381E9FA_at_exch-mb2.AD.NCCU.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] ORTE_ERROR_LOG Timeout<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 12:51:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5802.php">Jeff Squyres: "Re: [OMPI users] --bynode vs --byslot"</a>
<li><strong>Previous message:</strong> <a href="5800.php">Jeff Squyres: "Re: [OMPI users] openmpi 32-bit g++ compilation issue"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5710.php">Rudd, James: "[OMPI users] ORTE_ERROR_LOG Timeout"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
James --
<br>
<p>Sorry for the delay in replying.
<br>
<p>Do you have any firewall software running on your nodes (e.g.,  
<br>
iptables)?  OMPI uses random TCP ports to connect between nodes for  
<br>
control messages.  If they can't reach each other because TCP ports  
<br>
are blocked, Bad Things will happen (potentially even a hang, because  
<br>
firewalls can cause packets to be silently dropped).
<br>
<p><p>On May 20, 2008, at 12:17 PM, Rudd, James wrote:
<br>
<p><span class="quotelev1">&gt; I have been trying to compile a molecular dynamics program with the  
</span><br>
<span class="quotelev1">&gt; Openmpi 1.2.5 included in OFED 1.3.  I am running Fedora Core 6; the  
</span><br>
<span class="quotelev1">&gt; output of uname &#150;r is 2.6.18-1.2798.fc6.  I&#146;ve traced the problems  
</span><br>
<span class="quotelev1">&gt; I&#146;ve been having back to openmpi because I&#146;m unable to run the test  
</span><br>
<span class="quotelev1">&gt; programs such as glob on more than one node.  I currently have 2  
</span><br>
<span class="quotelev1">&gt; nodes connected to an infiniband switch with opensm running on  
</span><br>
<span class="quotelev1">&gt; node1.  The nodes can ping each other and I am able to ssh between  
</span><br>
<span class="quotelev1">&gt; them without a password.  My openmpi-default-hostfile  includes the  
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node1 slots=2 max-slots=4
</span><br>
<span class="quotelev1">&gt; node2 slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run &#147;mpirun -np 4 --debug-daemons ./glob&#148; I get:
</span><br>
<span class="quotelev1">&gt; Daemon [0,0,1] checking in as pid 21341 on host node1
</span><br>
<span class="quotelev1">&gt; And the program appears to hang.  Once I CTRL+C it a couple of times  
</span><br>
<span class="quotelev1">&gt; I get the contents of error.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Per the instructions in the FAQ I&#146;ve included the output of  
</span><br>
<span class="quotelev1">&gt; &#147;ibv_devinfo&#148;, &#147;ifconfig&#148;, and &#147;ulimit &#150;l&#148; in the  
</span><br>
<span class="quotelev1">&gt; infiniband_info.txt file. The results of &#147;ompi_info &#150;all is in the  
</span><br>
<span class="quotelev1">&gt; ompi_info.txt file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;ve been tearing my hear out over this, any help would be greatly  
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; James Rudd
</span><br>
<span class="quotelev1">&gt; JLC-Biomedical/Biotechnology Research Institute
</span><br>
<span class="quotelev1">&gt; North Carolina Central University
</span><br>
<span class="quotelev1">&gt; 700 George Street
</span><br>
<span class="quotelev1">&gt; Durham, NC 27707
</span><br>
<span class="quotelev1">&gt; Phone:  (919) 530-7015
</span><br>
<span class="quotelev1">&gt; Email:  jrudd_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://ariel.acc.nccu.edu/Academics/BBRI/personnel/rudd.htm">http://ariel.acc.nccu.edu/Academics/BBRI/personnel/rudd.htm</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;error.txt&gt;&lt;infiniband_info.txt&gt;&lt;ompi_info.txt&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5802.php">Jeff Squyres: "Re: [OMPI users] --bynode vs --byslot"</a>
<li><strong>Previous message:</strong> <a href="5800.php">Jeff Squyres: "Re: [OMPI users] openmpi 32-bit g++ compilation issue"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5710.php">Rudd, James: "[OMPI users] ORTE_ERROR_LOG Timeout"</a>
<!-- nextthread="start" -->
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
