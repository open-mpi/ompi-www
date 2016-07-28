<?
$subject_val = "Re: [OMPI devel] -display-map and mpi_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 11:32:18 2008" -->
<!-- isoreceived="20080922153218" -->
<!-- sent="Mon, 22 Sep 2008 09:32:09 -0600" -->
<!-- isosent="20080922153209" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] -display-map and mpi_spawn" -->
<!-- id="F5B5F3A7-DE3F-4434-A3CB-EA33544710A6_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="73521A9E-08A6-4E5C-9130-ECC6A7B64CCE_at_computer.org" -->
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
<strong>Date:</strong> 2008-09-22 11:32:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4676.php">Timothy Kaiser: "[OMPI devel] proper way to shut down orted"</a>
<li><strong>Previous message:</strong> <a href="4674.php">Jon Mason: "[OMPI devel] asm/byteorder.h needed in infiniband/cm.h"</a>
<li><strong>In reply to:</strong> <a href="4650.php">Greg Watson: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We always output the entire map, so you'll see the parent procs as  
<br>
well as the child
<br>
<p><p>On Sep 16, 2008, at 12:52 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No I'm happy to get a map at the beginning and at every spawn. Do  
</span><br>
<span class="quotelev1">&gt; you send the whole map again, or only an update?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 11, 2008, at 9:09 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It already somewhat does. If you use --display-map at mpirun, you  
</span><br>
<span class="quotelev2">&gt;&gt; automatically get display-map whenever MPI_Spawn is called.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We didn't provide a mechanism by which you could only display-map  
</span><br>
<span class="quotelev2">&gt;&gt; for MPI_Spawn (and not for the original mpirun), but it would be  
</span><br>
<span class="quotelev2">&gt;&gt; trivial to do so - just have to define an info-key for that  
</span><br>
<span class="quotelev2">&gt;&gt; purpose. Is that what you need?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 11, 2008, at 5:35 AM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At the moment -display-map shows the process mapping when mpirun  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first starts, but I'm wondering about processes created  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dynamically. Would it be possible to trigger a map update when  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Spawn is called?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4676.php">Timothy Kaiser: "[OMPI devel] proper way to shut down orted"</a>
<li><strong>Previous message:</strong> <a href="4674.php">Jon Mason: "[OMPI devel] asm/byteorder.h needed in infiniband/cm.h"</a>
<li><strong>In reply to:</strong> <a href="4650.php">Greg Watson: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
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
