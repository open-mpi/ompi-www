<?
$subject_val = "Re: [OMPI devel] ompi_info requesting CPUs?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 11:08:23 2009" -->
<!-- isoreceived="20091020150823" -->
<!-- sent="Tue, 20 Oct 2009 08:09:34 -0700" -->
<!-- isosent="20091020150934" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info requesting CPUs?" -->
<!-- id="4ADDD2AE.9080407_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B738D2DB-D2A1-4E0F-8444-D22AB6C5CDC8_at_open-mpi.org" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-20 11:09:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6979.php">Jeff Squyres: "[OMPI devel] v1.5 plan"</a>
<li><strong>Previous message:</strong> <a href="6977.php">Rainer Keller: "Re: [OMPI devel] Windows FAQ entry out-of-date"</a>
<li><strong>In reply to:</strong> <a href="6976.php">Ralph Castain: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; does it exist in 1.3.4?
</span><br>
<p>Yes, e.g., 22103 and 22104.
<br>
<p><span class="quotelev1">&gt; if so, it was a trivial change - can't see why  it couldn't be added.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 20, 2009, at 3:53 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not that I want to delay 1.3.4 anymore than it has been but this  
</span><br>
<span class="quotelev2">&gt;&gt; seems like a possible blocker.  Can this be CMR'd for 1.3.4 or is  
</span><br>
<span class="quotelev2">&gt;&gt; this truly a 1.4 CMR?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fixed in r22111
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 19, 2009, at 8:13 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Somewhere between r22090 and r22109, ompi_info started  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (erroneously) requesting CPUs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; E.g., r22090 is good:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; % ompi_info | grep Open MPI:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              Open MPI: 1.7a1r22090
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But r22109 is bad:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; % ompi_info | grep Open MPI:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Your job has requested more cpus per process(rank) than there
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are cpus in a socket:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cpus/rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #cpus/socket: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please correct one or both of these values and try again.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A component framework failed to open properly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_info will likely not display all configuration information
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              Open MPI: 1.7a1r22109
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6979.php">Jeff Squyres: "[OMPI devel] v1.5 plan"</a>
<li><strong>Previous message:</strong> <a href="6977.php">Rainer Keller: "Re: [OMPI devel] Windows FAQ entry out-of-date"</a>
<li><strong>In reply to:</strong> <a href="6976.php">Ralph Castain: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
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
