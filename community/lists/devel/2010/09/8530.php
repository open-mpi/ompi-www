<?
$subject_val = "Re: [OMPI devel] Setting AUTOMAKE_JOBS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 16:51:42 2010" -->
<!-- isoreceived="20100922205142" -->
<!-- sent="Wed, 22 Sep 2010 22:51:36 +0200" -->
<!-- isosent="20100922205136" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Setting AUTOMAKE_JOBS" -->
<!-- id="20100922205136.GO21000_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0D00FFAF-C902-4985-8BCB-02313153A236_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Setting AUTOMAKE_JOBS<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 16:51:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8531.php">Jeff Squyres: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8529.php">Kenneth Lloyd: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>In reply to:</strong> <a href="8524.php">Jeff Squyres: "[OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8531.php">Jeff Squyres: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8531.php">Jeff Squyres: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>adding bug-automake in Cc: (non-subscribers can't post to the Open MPI
<br>
list, so please remove that Cc: in case)
<br>
<p>* Jeff Squyres wrote on Wed, Sep 22, 2010 at 03:50:19PM CEST:
<br>
<span class="quotelev1">&gt; $AUTOMAKE_JOBS           Total wall time
</span><br>
<span class="quotelev1">&gt; value                    of autogen.pl
</span><br>
<span class="quotelev1">&gt; 8                        3:01.46
</span><br>
<span class="quotelev1">&gt; 4                        2:55.57
</span><br>
<span class="quotelev1">&gt; 2                        3:28.09
</span><br>
<span class="quotelev1">&gt; 1                        4:38.44
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an older Xeon machine with 2 sockets, each with 2 cores.
</span><br>
<p>Thanks for the measurements!  I'm a bit surprised that the speedup is
<br>
not higher.  Do you have timings as to how much of the autogen.pl time
<br>
is spent inside automake?
<br>
<p>IIRC the pure automake part for OpenMPI would speed up better on bigger
<br>
systems, my old numbers from two years ago are here:
<br>
<a href="http://lists.gnu.org/archive/html/automake-patches/2008-10/msg00055.html">http://lists.gnu.org/archive/html/automake-patches/2008-10/msg00055.html</a>
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8531.php">Jeff Squyres: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8529.php">Kenneth Lloyd: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>In reply to:</strong> <a href="8524.php">Jeff Squyres: "[OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8531.php">Jeff Squyres: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8531.php">Jeff Squyres: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
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
