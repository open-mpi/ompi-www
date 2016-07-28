<?
$subject_val = "[OMPI users] Problem with running MPI programs on machines with multiple interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 24 10:22:40 2011" -->
<!-- isoreceived="20110124152240" -->
<!-- sent="Mon, 24 Jan 2011 15:22:39 +0000" -->
<!-- isosent="20110124152239" -->
<!-- name="Avinash Malik" -->
<!-- email="amalik_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with running MPI programs on machines with multiple interfaces" -->
<!-- id="m2oc7672dc.fsf_at_malik.cs.tcd.ie" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Problem with running MPI programs on machines with multiple interfaces<br>
<strong>From:</strong> Avinash Malik (<em>amalik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-24 10:22:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15408.php">amalik_at_[hidden]: "Re: [OMPI users] Problem with running MPI programs on machines withmultiple interfaces"</a>
<li><strong>Previous message:</strong> <a href="15406.php">Staffan Ronnas: "[OMPI users] Are there limitations on MPI_Alloc_mem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15408.php">amalik_at_[hidden]: "Re: [OMPI users] Problem with running MPI programs on machines withmultiple interfaces"</a>
<li><strong>Reply:</strong> <a href="15408.php">amalik_at_[hidden]: "Re: [OMPI users] Problem with running MPI programs on machines withmultiple interfaces"</a>
<li><strong>Reply:</strong> <a href="15409.php">Avinash Malik: "Re: [OMPI users] Problem with running MPI programs on machines with	multiple interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have two mahcines each having 3 live interfaces: lo, eth0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(interanet) and usb0 (internet). eth0 cannot access usb0 on the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;other machine (and vice-veras). Now, when I try to run the MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program with these two hosts I cannot get any output, even --mca
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_base_verbose 30 does not give any output. If I set hostfile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to have only localhost, then everything runs fine.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I tried out the same code and hostfile with two other machines
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;with two interfaces: lo and eth1, which can access each
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;other. The program runs fine on these machines.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Next, I setup btl_tcp_if_exclude to lo,usb0 (on the first arch)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and also the ip-address/mask, but this does not work
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;either. When I run the program on one machine and do &quot;ps aux |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;grep mpi&quot; on the other I can see --hnp-uri being set to the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;usb0's ip-address, which it should not, because I have set usb0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to be exluded in the btl_tcp_if_exclude list. So, what exactly
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am I doing wrong here? 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I read the otimization FAQ and saw how openmpi builds the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bipartite graphs for connection. But, as I said before, eth0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cannot access usb0's ip and vice-versa, how can I get rid of the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;usb0 ip-address showing up in --hnp-uri, because this is the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;only difference between the working and the non-working archs.
<br>
<p>Regards,
<br>
<pre>
-- 
Avinash Malik
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15408.php">amalik_at_[hidden]: "Re: [OMPI users] Problem with running MPI programs on machines withmultiple interfaces"</a>
<li><strong>Previous message:</strong> <a href="15406.php">Staffan Ronnas: "[OMPI users] Are there limitations on MPI_Alloc_mem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15408.php">amalik_at_[hidden]: "Re: [OMPI users] Problem with running MPI programs on machines withmultiple interfaces"</a>
<li><strong>Reply:</strong> <a href="15408.php">amalik_at_[hidden]: "Re: [OMPI users] Problem with running MPI programs on machines withmultiple interfaces"</a>
<li><strong>Reply:</strong> <a href="15409.php">Avinash Malik: "Re: [OMPI users] Problem with running MPI programs on machines with	multiple interfaces"</a>
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
