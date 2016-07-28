<?
$subject_val = "Re: [OMPI users] segmentation fault: Address not mapped";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 23 13:54:53 2009" -->
<!-- isoreceived="20091123185453" -->
<!-- sent="Mon, 23 Nov 2009 19:55:18 +0100" -->
<!-- isosent="20091123185518" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault: Address not mapped" -->
<!-- id="87bpitjckp.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAC41CC-49C3-4D33-91B8-D4FD70D37449_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] segmentation fault: Address not mapped<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-23 13:55:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11257.php">Natarajan CS: "[OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="11255.php">George Bosilca: "Re: [OMPI users] Doubt regarding MPI_GATHER"</a>
<li><strong>In reply to:</strong> <a href="11254.php">George Bosilca: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11263.php">Iris Pernille Lohmann: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 23 Nov 2009 10:39:28 -0800, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; In the case of Open MPI we use pointers, which are different than int  
</span><br>
<span class="quotelev1">&gt; on most cases
</span><br>
<p>I just want to comment that Open MPI's opaque (to the user) pointers are
<br>
significantly better than int because it offers type safety.  That is,
<br>
the compiler can distinguish between MPI_Comm, MPI_Group, MPI_Status,
<br>
MPI_Op, etc., and warn you if you mix them up.  When they are all
<br>
typedef'd to int, you get no such warnings, and instead just get runtime
<br>
errors/crashes.
<br>
<p><span class="quotelev1">&gt; (btw int is what MPICH is using I think).
</span><br>
<p>It is.
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11257.php">Natarajan CS: "[OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="11255.php">George Bosilca: "Re: [OMPI users] Doubt regarding MPI_GATHER"</a>
<li><strong>In reply to:</strong> <a href="11254.php">George Bosilca: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11263.php">Iris Pernille Lohmann: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
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
