<?
$subject_val = "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 16:44:03 2010" -->
<!-- isoreceived="20100901204403" -->
<!-- sent="Wed, 1 Sep 2010 15:43:17 -0500" -->
<!-- isosent="20100901204317" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?" -->
<!-- id="AANLkTinOwNMHcYzJvM+z1qjsV2dsDT5Kbx7KFgMw3NeD_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F2D3A958-A633-44C3-A656-DECDA4F18D5A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?<br>
<strong>From:</strong> Rahul Nabar (<em>rpnabar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-01 16:43:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14153.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Previous message:</strong> <a href="14151.php">Brock Palen: "[OMPI users] simplest way to check message queues"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14124.php">Jeff Squyres: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14121.php">John Hearns: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Aug 25, 2010 at 12:14 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; It would simplify testing if you could get all the eth0's to be of one type and on the same subnet, and the same for eth1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once you do that, try using just one of the networks by telling OMPI to use only one of the devices, something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;mpirun --mca btl_tcp_if_include eth0 ...
</span><br>
<p>Thanks for all the suggestions guys! We finally got this figured out.
<br>
It was the result of two different (hardware specific) bugs in the
<br>
RDMA driver. The 10GigE card was advertising a wrong size for the CQ
<br>
stack (as far as I understand!).
<br>
<p>In case anyone wants to know more, the bugfixes are posted here:
<br>
<p><a href="http://www.mail-archive.com/linux-rdma&#64;vger.kernel.org/msg05451.html">http://www.mail-archive.com/linux-rdma&#64;vger.kernel.org/msg05451.html</a>
<br>
<a href="http://www.mail-archive.com/linux-rdma&#64;vger.kernel.org/msg05246.html">http://www.mail-archive.com/linux-rdma&#64;vger.kernel.org/msg05246.html</a>
<br>
<p>Cheers!
<br>
<p><pre>
-- 
Rahul
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14153.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Previous message:</strong> <a href="14151.php">Brock Palen: "[OMPI users] simplest way to check message queues"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14124.php">Jeff Squyres: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14121.php">John Hearns: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
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
