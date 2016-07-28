<?
$subject_val = "Re: [OMPI devel] Missing symbol with DR PML";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 15:27:40 2008" -->
<!-- isoreceived="20080311192740" -->
<!-- sent="Tue, 11 Mar 2008 14:27:31 -0500" -->
<!-- isosent="20080311192731" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Missing symbol with DR PML" -->
<!-- id="45C09BFD-13D5-4036-A499-DE086D1A40AB_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47D6D770.1060708_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-11 15:27:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3431.php">Andrew Friedley: "Re: [OMPI devel] Missing symbol with DR PML"</a>
<li><strong>Previous message:</strong> <a href="3429.php">Andrew Friedley: "[OMPI devel] Missing symbol with DR PML"</a>
<li><strong>In reply to:</strong> <a href="3429.php">Andrew Friedley: "[OMPI devel] Missing symbol with DR PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3431.php">Andrew Friedley: "Re: [OMPI devel] Missing symbol with DR PML"</a>
<li><strong>Reply:</strong> <a href="3431.php">Andrew Friedley: "Re: [OMPI devel] Missing symbol with DR PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess that as now we have visibility turned on by default, this  
<br>
symbol is missing as it is not exported. Commit 17810 should fix the  
<br>
problem.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 11, 2008, at 2:03 PM, Andrew Friedley wrote:
<br>
<p><span class="quotelev1">&gt; I'm running a several different trunk checkouts and I always see this
</span><br>
<span class="quotelev1">&gt; error when running with the DR PML:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 -mca pml dr ./NPmpi
</span><br>
<span class="quotelev1">&gt; 0: sif
</span><br>
<span class="quotelev1">&gt; 1: sif
</span><br>
<span class="quotelev1">&gt; ./NPmpi: symbol lookup error:
</span><br>
<span class="quotelev1">&gt; /u/afriedle/local/x86_64/ompi-trunk3/lib/openmpi/mca_pml_dr.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: ompi_seq_tracker_check_duplicate
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 21139 on
</span><br>
<span class="quotelev1">&gt; node sif.cs.indiana.edu calling &quot;abort&quot;. This may have caused other
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev1">&gt; in the application to be terminated by signals sent by mpirun
</span><br>
<span class="quotelev1">&gt; (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm looking at the code and I see no explanation for this.  Seems  
</span><br>
<span class="quotelev1">&gt; like a
</span><br>
<span class="quotelev1">&gt; build/installation error, but I'm seeing this on a clean trunk  
</span><br>
<span class="quotelev1">&gt; checkout
</span><br>
<span class="quotelev1">&gt; on two different machines.  Anyone know what's going on?  Can anyone
</span><br>
<span class="quotelev1">&gt; reproduce this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3430/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3431.php">Andrew Friedley: "Re: [OMPI devel] Missing symbol with DR PML"</a>
<li><strong>Previous message:</strong> <a href="3429.php">Andrew Friedley: "[OMPI devel] Missing symbol with DR PML"</a>
<li><strong>In reply to:</strong> <a href="3429.php">Andrew Friedley: "[OMPI devel] Missing symbol with DR PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3431.php">Andrew Friedley: "Re: [OMPI devel] Missing symbol with DR PML"</a>
<li><strong>Reply:</strong> <a href="3431.php">Andrew Friedley: "Re: [OMPI devel] Missing symbol with DR PML"</a>
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
