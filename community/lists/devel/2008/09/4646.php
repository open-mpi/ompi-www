<?
$subject_val = "Re: [OMPI devel] -display-map and mpi_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 09:09:38 2008" -->
<!-- isoreceived="20080911130938" -->
<!-- sent="Thu, 11 Sep 2008 07:09:31 -0600" -->
<!-- isosent="20080911130931" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] -display-map and mpi_spawn" -->
<!-- id="D4F66DF2-F033-4758-BC1E-2F82C720E1EA_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="28B1D8F1-5A18-4FBA-AC5F-B109795D3B9E_at_computer.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] -display-map and mpi_spawn<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-11 09:09:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4647.php">Lenny Verkhovsky: "Re: [OMPI devel] ticket #1469"</a>
<li><strong>Previous message:</strong> <a href="4645.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="4644.php">Greg Watson: "[OMPI devel] -display-map and mpi_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4650.php">Greg Watson: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>Reply:</strong> <a href="4650.php">Greg Watson: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It already somewhat does. If you use --display-map at mpirun, you  
<br>
automatically get display-map whenever MPI_Spawn is called.
<br>
<p>We didn't provide a mechanism by which you could only display-map for  
<br>
MPI_Spawn (and not for the original mpirun), but it would be trivial  
<br>
to do so - just have to define an info-key for that purpose. Is that  
<br>
what you need?
<br>
<p><p>On Sep 11, 2008, at 5:35 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the moment -display-map shows the process mapping when mpirun  
</span><br>
<span class="quotelev1">&gt; first starts, but I'm wondering about processes created dynamically.  
</span><br>
<span class="quotelev1">&gt; Would it be possible to trigger a map update when MPI_Spawn is called?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4647.php">Lenny Verkhovsky: "Re: [OMPI devel] ticket #1469"</a>
<li><strong>Previous message:</strong> <a href="4645.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="4644.php">Greg Watson: "[OMPI devel] -display-map and mpi_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4650.php">Greg Watson: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>Reply:</strong> <a href="4650.php">Greg Watson: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
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
