<?
$subject_val = "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 10:34:14 2015" -->
<!-- isoreceived="20150930143414" -->
<!-- sent="Wed, 30 Sep 2015 14:30:38 +0000" -->
<!-- isosent="20150930143038" -->
<!-- name="Grigory Shamov" -->
<!-- email="Grigory.Shamov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?" -->
<!-- id="D23158D1.7D693%Grigory.Shamov_at_ad.umanitoba.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="874micxl84.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?<br>
<strong>From:</strong> Grigory Shamov (<em>Grigory.Shamov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 10:30:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Previous message:</strong> <a href="27734.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>In reply to:</strong> <a href="27724.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27723.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Absolutely. 
<br>
<p>Quite a lot of quantum chemistry here codes are Fortran, and most would
<br>
use Intel Fortran for performance. While some (VASP) might depend depend
<br>
on -heap-arrays Intel switch being used with a small value, the default
<br>
setting for Intel Fortran is -no-heap-arrays &quot;temporary arrays are
<br>
allocated on the stack (DEFAULT)&quot;. Which leads potentially to the code
<br>
using large stack, way over 10Mb.
<br>
<p><pre>
-- 
Grigory Shamov
Westgrid/ComputeCanada Site Lead
University of Manitoba
E2-588 EITC Building,
(204) 474-9625
On 15-09-30 5:19 AM, &quot;users on behalf of Dave Love&quot;
&lt;users-bounces_at_[hidden] on behalf of d.love_at_[hidden]&gt; wrote:
&gt;Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; writes:
&gt;
&gt;&gt; I would like to add that you may want to play with the value and see
&gt;&gt; what works for your applications. Most applications should be using
&gt;&gt; malloc or similar functions to allocate large memory regions in the heap
&gt;&gt; and not on the stack.
&gt;
&gt;It's long been a Fortran optimization to stack-allocate arrays (from the
&gt;days of all-the-world's-a-VAX when loads of code broke that assumed SAVE
&gt;attributes).  It's an FAQ here for the intel compiler and well-optimized
&gt;gfortran, and there are other good reasons for large stacks compared
&gt;with the 10MB-ish default.
&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;Link to this post:
&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/09/27724.php">http://www.open-mpi.org/community/lists/users/2015/09/27724.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Previous message:</strong> <a href="27734.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>In reply to:</strong> <a href="27724.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27723.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
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
