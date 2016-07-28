<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 09:09:15 2007" -->
<!-- isoreceived="20070710130915" -->
<!-- sent="Tue, 10 Jul 2007 09:09:14 -0400" -->
<!-- isosent="20070710130914" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-environment builds" -->
<!-- id="469384FA.8010906_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="67483DC4-4670-4089-976F-3EA0457D38AC_at_cisco.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 09:09:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1830.php">Sharon Melamed: "[OMPI devel] ticket 1023"</a>
<li><strong>Previous message:</strong> <a href="1828.php">Ralph H Castain: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1824.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1832.php">Brian Barrett: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1832.php">Brian Barrett: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; 2. The &quot;--enable-mca-no-build&quot; option takes a comma-delimited list of  
</span><br>
<span class="quotelev1">&gt; components that will then not be built.  Granted, this option isn't  
</span><br>
<span class="quotelev1">&gt; exactly intuitive, but it was the best that we could think of at the  
</span><br>
<span class="quotelev1">&gt; time to present a general solution for inhibiting the build of a  
</span><br>
<span class="quotelev1">&gt; selected list of components.  Hence, &quot;--enable-mca-no-build=pls- 
</span><br>
<span class="quotelev1">&gt; slurm,ras-slurm&quot; would inhibit building the SLURM RAS and PLS  
</span><br>
<span class="quotelev1">&gt; components (note that the SLURM components currently do not require  
</span><br>
<span class="quotelev1">&gt; any additional libraries, so a) there is no corresponding --with[out]- 
</span><br>
<span class="quotelev1">&gt; slurm option, and b) they are usually always built).
</span><br>
<p>Actually, there are --with-slurm/--without-slurm options. We default to 
<br>
building slurm support automatically on linux and aix, but not on other 
<br>
platforms.
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1830.php">Sharon Melamed: "[OMPI devel] ticket 1023"</a>
<li><strong>Previous message:</strong> <a href="1828.php">Ralph H Castain: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1824.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1832.php">Brian Barrett: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1832.php">Brian Barrett: "Re: [OMPI devel] Multi-environment builds"</a>
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
