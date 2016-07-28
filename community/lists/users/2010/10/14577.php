<?
$subject_val = "Re: [OMPI users] Running simple MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 23 14:47:44 2010" -->
<!-- isoreceived="20101023184744" -->
<!-- sent="Sat, 23 Oct 2010 19:47:37 +0100" -->
<!-- isosent="20101023184737" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running simple MPI program" -->
<!-- id="3D44605E-475B-47F8-988A-EDB0A4BF4C40_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinxkSx_TboYa_h7RZGaVQF3A+ud1VJNG2rGrb6n_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running simple MPI program<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-23 14:47:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14578.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14576.php">David Zhang: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="14573.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14578.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Reply:</strong> <a href="14578.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 23 Oct 2010, at 17:58, Brandon Fulcher wrote:
<br>
<span class="quotelev1">&gt; So I checked the OMPI package details on both machines, they each are running Open MPI 1.3. . . but then I noticed that the packages are different versions.   Basically, the slave is running the previous Ubuntu release, and the master is running the current one. Both have the most recent packages for their release. . .but perhaps that is enough of a difference? 
</span><br>
<p>You need to have exactly the same version of OpenMPI installed on both machines.  Typically in a cluster all machines are identical in terms of software, if this isn't the case for your systems then the easiest way might be to compile open mpi from source (on the older of the two machines would be best) and to install it to a common directory on both machines.
<br>
<p>Ashley.
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14578.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14576.php">David Zhang: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="14573.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14578.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Reply:</strong> <a href="14578.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
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
