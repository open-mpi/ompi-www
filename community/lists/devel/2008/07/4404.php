<?
$subject_val = "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 10:08:42 2008" -->
<!-- isoreceived="20080723140842" -->
<!-- sent="Wed, 23 Jul 2008 16:08:37 +0200" -->
<!-- isosent="20080723140837" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Help on building openmpi with &amp;quot;-Wl, --as-needed	-Wl, --no-undefined&amp;quot;" -->
<!-- id="20080723140837.GC13233_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="148248A4-A827-40A4-9C73-8D73CBD476C3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 10:08:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4405.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>Previous message:</strong> <a href="4403.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>In reply to:</strong> <a href="4402.php">Jeff Squyres: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4406.php">Jeff Squyres: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;"</a>
<li><strong>Reply:</strong> <a href="4406.php">Jeff Squyres: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>* Jeff Squyres wrote on Wed, Jul 23, 2008 at 03:54:50PM CEST:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the attached patch what you're talking about?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, I'll commit to trunk, v1.2, and v1.3.
</span><br>
<p>Can you verify that it work with a pristine build?  The dependencies as
<br>
such look sane to me, also the cruft removal, but I fail to see how
<br>
your directory ordering can work:
<br>
<p>ompi/mpi/f77/libmpi_f77.la      depends on
<br>
ompi/libmpi.la                  depends on 
<br>
ompi/mpi/f77/libmpi_f77_base.la
<br>
<p>The SUBDIRS in ompi/Makefile.am has '.' after 'mpi' so libmpi.la won't
<br>
exist at the time libmpi_f77.la needs it.  Likewise, the C++ and F90
<br>
libraries are built before libmpi.la.
<br>
<p>Am I missing anything?  Fixing this nicely may require some fiddling
<br>
with the source tree layout.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4405.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>Previous message:</strong> <a href="4403.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>In reply to:</strong> <a href="4402.php">Jeff Squyres: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4406.php">Jeff Squyres: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;"</a>
<li><strong>Reply:</strong> <a href="4406.php">Jeff Squyres: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;"</a>
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
