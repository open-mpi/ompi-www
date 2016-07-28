<?
$subject_val = "Re: [OMPI users] mpiexec and iptables";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 18 16:13:01 2009" -->
<!-- isoreceived="20090118211301" -->
<!-- sent="Sun, 18 Jan 2009 22:12:46 +0100" -->
<!-- isosent="20090118211246" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiexec and iptables" -->
<!-- id="47233922-1551-4F89-A71B-C5A8AD0CCBF6_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4973534D.60709_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpiexec and iptables<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-18 16:12:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7724.php">Brock Palen: "[OMPI users] RCE Thank You Open MPI Interview"</a>
<li><strong>Previous message:</strong> <a href="7722.php">Gijsbert Wiesenekker: "[OMPI users] mpiexec and iptables"</a>
<li><strong>In reply to:</strong> <a href="7722.php">Gijsbert Wiesenekker: "[OMPI users] mpiexec and iptables"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 18.01.2009 um 17:05 schrieb Gijsbert Wiesenekker:
<br>
<p><span class="quotelev1">&gt; I am running mpiexec on Fedora Core 10. Where can I find the list  
</span><br>
<span class="quotelev1">&gt; of ports that I have to open if I want to run mpiexec with iptables  
</span><br>
<span class="quotelev1">&gt; enabled?
</span><br>
<span class="quotelev1">&gt; Running mpiexec with debug shows that it uses ports around 50000.  
</span><br>
<span class="quotelev1">&gt; strace does not show a call to getenv, so I am not sure if mpiexec  
</span><br>
<span class="quotelev1">&gt; on Fedora supports MPIEXEC_PORT_RANGE.
</span><br>
<p>this variable is only part of MPICH(2), not Open MPI. Similar  
<br>
discussions were already on the list, and one solution could be:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2007/08/3962.php">http://www.open-mpi.org/community/lists/users/2007/08/3962.php</a>
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7724.php">Brock Palen: "[OMPI users] RCE Thank You Open MPI Interview"</a>
<li><strong>Previous message:</strong> <a href="7722.php">Gijsbert Wiesenekker: "[OMPI users] mpiexec and iptables"</a>
<li><strong>In reply to:</strong> <a href="7722.php">Gijsbert Wiesenekker: "[OMPI users] mpiexec and iptables"</a>
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
