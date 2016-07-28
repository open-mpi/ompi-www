<?
$subject_val = "Re: [OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 26 09:57:05 2012" -->
<!-- isoreceived="20121026135705" -->
<!-- sent="Fri, 26 Oct 2012 06:56:58 -0700" -->
<!-- isosent="20121026135658" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?" -->
<!-- id="1AF07C6D-305E-42D2-92AA-B158C8F225EA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFEBC82615.FAE6420D-ONC1257AA3.0049859F-C1257AA3.004B8951_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-26 09:56:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11654.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11652.php">Guillaume.Papaure_at_[hidden]: "[OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?"</a>
<li><strong>In reply to:</strong> <a href="11652.php">Guillaume.Papaure_at_[hidden]: "[OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It was replaced with native PMI support. Just configure --with-pmi=&lt;where-pmi.h-is-located&gt;
<br>
<p><p>On Oct 26, 2012, at 6:45 AM, Guillaume.Papaure_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi 
</span><br>
<span class="quotelev1">&gt; We've noticed that, since ticket #3260, the grpcomm hier has been deleted. Unfortunatly it is mandatory to use the ess slurmd. Actually we are using this ess to work with slurm when starting mpi jobs with srun (without mpirun). 
</span><br>
<span class="quotelev1">&gt; In this case the grpcomm hier works fine, even if it is reintroduced in a openmpi 1.6.2. 
</span><br>
<span class="quotelev1">&gt; Do you plan to reintroduce it in a future release ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, 
</span><br>
<span class="quotelev1">&gt; Guillaume 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11653/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11654.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11652.php">Guillaume.Papaure_at_[hidden]: "[OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?"</a>
<li><strong>In reply to:</strong> <a href="11652.php">Guillaume.Papaure_at_[hidden]: "[OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?"</a>
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
