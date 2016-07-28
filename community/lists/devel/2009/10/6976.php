<?
$subject_val = "Re: [OMPI devel] ompi_info requesting CPUs?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 09:03:33 2009" -->
<!-- isoreceived="20091020130333" -->
<!-- sent="Tue, 20 Oct 2009 07:03:20 -0600" -->
<!-- isosent="20091020130320" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info requesting CPUs?" -->
<!-- id="B738D2DB-D2A1-4E0F-8444-D22AB6C5CDC8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ADD8882.3060203_at_sun.com" -->
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
<strong>Date:</strong> 2009-10-20 09:03:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6977.php">Rainer Keller: "Re: [OMPI devel] Windows FAQ entry out-of-date"</a>
<li><strong>Previous message:</strong> <a href="6975.php">Terry Dontje: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>In reply to:</strong> <a href="6975.php">Terry Dontje: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6978.php">Eugene Loh: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>Reply:</strong> <a href="6978.php">Eugene Loh: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
does it exist in 1.3.4? if so, it was a trivial change - can't see why  
<br>
it couldn't be added.
<br>
<p><p>On Oct 20, 2009, at 3:53 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Not that I want to delay 1.3.4 anymore than it has been but this  
</span><br>
<span class="quotelev1">&gt; seems like a possible blocker.  Can this be CMR'd for 1.3.4 or is  
</span><br>
<span class="quotelev1">&gt; this truly a 1.4 CMR?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Fixed in r22111
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 19, 2009, at 8:13 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Somewhere between r22090 and r22109, ompi_info started  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (erroneously) requesting CPUs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; E.g., r22090 is good:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % ompi_info | grep Open MPI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Open MPI: 1.7a1r22090
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But r22109 is bad:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % ompi_info | grep Open MPI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your job has requested more cpus per process(rank) than there
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are cpus in a socket:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cpus/rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #cpus/socket: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please correct one or both of these values and try again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A component framework failed to open properly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info will likely not display all configuration information
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Open MPI: 1.7a1r22109
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="6977.php">Rainer Keller: "Re: [OMPI devel] Windows FAQ entry out-of-date"</a>
<li><strong>Previous message:</strong> <a href="6975.php">Terry Dontje: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>In reply to:</strong> <a href="6975.php">Terry Dontje: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6978.php">Eugene Loh: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>Reply:</strong> <a href="6978.php">Eugene Loh: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
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
