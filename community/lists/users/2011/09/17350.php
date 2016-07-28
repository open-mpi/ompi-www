<?
$subject_val = "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 20 07:55:34 2011" -->
<!-- isoreceived="20110920115534" -->
<!-- sent="Tue, 20 Sep 2011 07:55:26 -0400" -->
<!-- isosent="20110920115526" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?" -->
<!-- id="911CADEC-4F9B-4197-8ADE-6F731B44B3F3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E787E89.5090205_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-20 07:55:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17351.php">Jeff Squyres: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17349.php">Tim Prince: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>In reply to:</strong> <a href="17349.php">Tim Prince: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17353.php">Reuti: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 20, 2011, at 7:52 AM, Tim Prince wrote:
<br>
<p><span class="quotelev1">&gt; Quoted comment from OP seem to show a somewhat different question: Does OpenMPI implement any operations in a different way from MVAPICH?  I would think it probable that the answer could be affirmative for operations such as allreduce, but this leads well outside my expertise with respect to specific MPI implementations.  It isn't out of the question to suspect that such differences might be aggravated when using excessively aggressive ifort options such as -fast.
</span><br>
<p>This is 'zactly what I was going to say -- reductions between Open MPI and MVAPICH may well perform global arithmetic operations in different orders.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17351.php">Jeff Squyres: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17349.php">Tim Prince: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>In reply to:</strong> <a href="17349.php">Tim Prince: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17353.php">Reuti: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
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
