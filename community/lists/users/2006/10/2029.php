<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 23 04:56:08 2006" -->
<!-- isoreceived="20061023085608" -->
<!-- sent="Mon, 23 Oct 2006 14:26:01 +0530 (IST)" -->
<!-- isosent="20061023085601" -->
<!-- name="Jayanta Roy" -->
<!-- email="jroy_at_[hidden]" -->
<!-- subject="[OMPI users] dual Gigabit ethernet support" -->
<!-- id="Pine.LNX.4.61.0610231415530.1895_at_dhruva1.ncra.tifr.res.in" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="26FE1C0C-F0CF-411A-9581-E9B7BC41D8B0_at_cs.utk.edu" -->
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
<strong>From:</strong> Jayanta Roy (<em>jroy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-23 04:56:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2030.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2028.php">Tobias Graf: "Re: [OMPI users] Problem with C++ Binding&quot;"</a>
<li><strong>In reply to:</strong> <a href="2012.php">George Bosilca: "Re: [OMPI users] problem abut openmpi running"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2030.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2030.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2031.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2033.php">George Bosilca: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2034.php">Lisandro Dalcin: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Sometime before I have posted doubts about using dual gigabit support 
<br>
fully. See I get ~140MB/s full duplex transfer rate in each of following 
<br>
runs.....
<br>
<p>mpirun --mca btl_tcp_if_include eth0 -n 4 -bynode -hostfile host a.out
<br>
<p>mpirun --mca btl_tcp_if_include eth1 -n 4 -bynode -hostfile host a.out
<br>
<p>How to combine these two port or use a proper routing table in place host 
<br>
file? I am using openmpi-1.1 version.
<br>
<p>-Jayanta
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2030.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2028.php">Tobias Graf: "Re: [OMPI users] Problem with C++ Binding&quot;"</a>
<li><strong>In reply to:</strong> <a href="2012.php">George Bosilca: "Re: [OMPI users] problem abut openmpi running"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2030.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2030.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2031.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2033.php">George Bosilca: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2034.php">Lisandro Dalcin: "Re: [OMPI users] dual Gigabit ethernet support"</a>
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
