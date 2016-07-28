<?
$subject_val = "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 17:24:09 2010" -->
<!-- isoreceived="20100211222409" -->
<!-- sent="Thu, 11 Feb 2010 17:24:03 -0500" -->
<!-- isosent="20100211222403" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h" -->
<!-- id="8651FA96-6F38-4AFA-B4F2-77D0F116E4D7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="781BE6CE-5231-4714-9988-9DA3181105EA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 17:24:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7427.php">Jeff Squyres: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
<li><strong>Previous message:</strong> <a href="7425.php">Eugene Loh: "[OMPI devel] documenting the PMPI profiling interface"</a>
<li><strong>In reply to:</strong> <a href="7424.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7432.php">Rainer Keller: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 11, 2010, at 3:57 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I wouldn't change the installation location - just thought it would be good to avoid the abstraction break in the source code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Remember - this file doesn't get installed at all unless we built the MPI layer...
</span><br>
<p>Hmm.  That becomes an interesting abstraction break in itself -- a Makefile.am in opal has to know if we're building / installing the MPI layer...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7427.php">Jeff Squyres: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
<li><strong>Previous message:</strong> <a href="7425.php">Eugene Loh: "[OMPI devel] documenting the PMPI profiling interface"</a>
<li><strong>In reply to:</strong> <a href="7424.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7432.php">Rainer Keller: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
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
