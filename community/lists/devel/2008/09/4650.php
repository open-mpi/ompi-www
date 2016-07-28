<?
$subject_val = "Re: [OMPI devel] -display-map and mpi_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 16 14:52:11 2008" -->
<!-- isoreceived="20080916185211" -->
<!-- sent="Tue, 16 Sep 2008 14:52:06 -0400" -->
<!-- isosent="20080916185206" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] -display-map and mpi_spawn" -->
<!-- id="73521A9E-08A6-4E5C-9130-ECC6A7B64CCE_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D4F66DF2-F033-4758-BC1E-2F82C720E1EA_at_lanl.gov" -->
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
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-16 14:52:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4651.php">Roland Dreier: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>Previous message:</strong> <a href="4649.php">Lenny Verkhovsky: "[OMPI devel] mtt IBM reduce_scatter_in_place test failure"</a>
<li><strong>In reply to:</strong> <a href="4646.php">Ralph Castain: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4651.php">Roland Dreier: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>Reply:</strong> <a href="4651.php">Roland Dreier: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>Reply:</strong> <a href="4675.php">Ralph Castain: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>No I'm happy to get a map at the beginning and at every spawn. Do you  
<br>
send the whole map again, or only an update?
<br>
<p>Regards,
<br>
<p>Greg
<br>
<p>On Sep 11, 2008, at 9:09 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; It already somewhat does. If you use --display-map at mpirun, you  
</span><br>
<span class="quotelev1">&gt; automatically get display-map whenever MPI_Spawn is called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We didn't provide a mechanism by which you could only display-map  
</span><br>
<span class="quotelev1">&gt; for MPI_Spawn (and not for the original mpirun), but it would be  
</span><br>
<span class="quotelev1">&gt; trivial to do so - just have to define an info-key for that purpose.  
</span><br>
<span class="quotelev1">&gt; Is that what you need?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 11, 2008, at 5:35 AM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At the moment -display-map shows the process mapping when mpirun  
</span><br>
<span class="quotelev2">&gt;&gt; first starts, but I'm wondering about processes created  
</span><br>
<span class="quotelev2">&gt;&gt; dynamically. Would it be possible to trigger a map update when  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Spawn is called?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4651.php">Roland Dreier: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>Previous message:</strong> <a href="4649.php">Lenny Verkhovsky: "[OMPI devel] mtt IBM reduce_scatter_in_place test failure"</a>
<li><strong>In reply to:</strong> <a href="4646.php">Ralph Castain: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4651.php">Roland Dreier: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>Reply:</strong> <a href="4651.php">Roland Dreier: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>Reply:</strong> <a href="4675.php">Ralph Castain: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
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
