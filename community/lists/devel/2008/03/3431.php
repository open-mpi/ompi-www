<?
$subject_val = "Re: [OMPI devel] Missing symbol with DR PML";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 15:39:13 2008" -->
<!-- isoreceived="20080311193913" -->
<!-- sent="Tue, 11 Mar 2008 15:39:12 -0400" -->
<!-- isosent="20080311193912" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Missing symbol with DR PML" -->
<!-- id="47D6DFE0.7000908_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="45C09BFD-13D5-4036-A499-DE086D1A40AB_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Missing symbol with DR PML<br>
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-11 15:39:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3432.php">Adrian Knoth: "[OMPI devel] Logo as a vector graphic"</a>
<li><strong>Previous message:</strong> <a href="3430.php">George Bosilca: "Re: [OMPI devel] Missing symbol with DR PML"</a>
<li><strong>In reply to:</strong> <a href="3430.php">George Bosilca: "Re: [OMPI devel] Missing symbol with DR PML"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks George.
<br>
<p>Andrew
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; I guess that as now we have visibility turned on by default, this symbol 
</span><br>
<span class="quotelev1">&gt; is missing as it is not exported. Commit 17810 should fix the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 11, 2008, at 2:03 PM, Andrew Friedley wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm running a several different trunk checkouts and I always see this
</span><br>
<span class="quotelev2">&gt;&gt; error when running with the DR PML:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 2 -mca pml dr ./NPmpi
</span><br>
<span class="quotelev2">&gt;&gt; 0: sif
</span><br>
<span class="quotelev2">&gt;&gt; 1: sif
</span><br>
<span class="quotelev2">&gt;&gt; ./NPmpi: symbol lookup error:
</span><br>
<span class="quotelev2">&gt;&gt; /u/afriedle/local/x86_64/ompi-trunk3/lib/openmpi/mca_pml_dr.so:
</span><br>
<span class="quotelev2">&gt;&gt; undefined symbol: ompi_seq_tracker_check_duplicate
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 0 with PID 21139 on
</span><br>
<span class="quotelev2">&gt;&gt; node sif.cs.indiana.edu calling &quot;abort&quot;. This may have caused other
</span><br>
<span class="quotelev2">&gt;&gt; processes
</span><br>
<span class="quotelev2">&gt;&gt; in the application to be terminated by signals sent by mpirun
</span><br>
<span class="quotelev2">&gt;&gt; (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm looking at the code and I see no explanation for this.  Seems like a
</span><br>
<span class="quotelev2">&gt;&gt; build/installation error, but I'm seeing this on a clean trunk checkout
</span><br>
<span class="quotelev2">&gt;&gt; on two different machines.  Anyone know what's going on?  Can anyone
</span><br>
<span class="quotelev2">&gt;&gt; reproduce this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Andrew
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="3432.php">Adrian Knoth: "[OMPI devel] Logo as a vector graphic"</a>
<li><strong>Previous message:</strong> <a href="3430.php">George Bosilca: "Re: [OMPI devel] Missing symbol with DR PML"</a>
<li><strong>In reply to:</strong> <a href="3430.php">George Bosilca: "Re: [OMPI devel] Missing symbol with DR PML"</a>
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
