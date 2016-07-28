<?
$subject_val = "Re: [OMPI devel] ompi_info requesting CPUs?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 03:29:12 2009" -->
<!-- isoreceived="20091020072912" -->
<!-- sent="Tue, 20 Oct 2009 01:29:01 -0600" -->
<!-- isosent="20091020072901" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info requesting CPUs?" -->
<!-- id="812D9D76-AF59-4A96-9964-CD2C5F772094_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ADD1CC9.7030302_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi_info requesting CPUs?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-20 03:29:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6975.php">Terry Dontje: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>Previous message:</strong> <a href="6973.php">Eugene Loh: "[OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>In reply to:</strong> <a href="6973.php">Eugene Loh: "[OMPI devel] ompi_info requesting CPUs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6975.php">Terry Dontje: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>Reply:</strong> <a href="6975.php">Terry Dontje: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed in r22111
<br>
<p>Thanks
<br>
<p>On Oct 19, 2009, at 8:13 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Somewhere between r22090 and r22109, ompi_info started (erroneously)  
</span><br>
<span class="quotelev1">&gt; requesting CPUs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E.g., r22090 is good:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % ompi_info | grep Open MPI:
</span><br>
<span class="quotelev1">&gt;               Open MPI: 1.7a1r22090
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But r22109 is bad:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % ompi_info | grep Open MPI:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Your job has requested more cpus per process(rank) than there
</span><br>
<span class="quotelev1">&gt; are cpus in a socket:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cpus/rank: 1
</span><br>
<span class="quotelev1">&gt; #cpus/socket: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please correct one or both of these values and try again.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A component framework failed to open properly.
</span><br>
<span class="quotelev1">&gt; ompi_info will likely not display all configuration information
</span><br>
<span class="quotelev1">&gt;               Open MPI: 1.7a1r22109
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
<li><strong>Next message:</strong> <a href="6975.php">Terry Dontje: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>Previous message:</strong> <a href="6973.php">Eugene Loh: "[OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>In reply to:</strong> <a href="6973.php">Eugene Loh: "[OMPI devel] ompi_info requesting CPUs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6975.php">Terry Dontje: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>Reply:</strong> <a href="6975.php">Terry Dontje: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
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
