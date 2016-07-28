<?
$subject_val = "Re: [OMPI devel] Impossible to find static-compoents.h";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  4 08:06:31 2012" -->
<!-- isoreceived="20120104130631" -->
<!-- sent="Wed, 4 Jan 2012 08:06:26 -0500" -->
<!-- isosent="20120104130626" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Impossible to find static-compoents.h" -->
<!-- id="C027C9AB-CEE3-47E3-8B62-0AE6D3931C64_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAANzjEnteBS9cJf2f_QzQam7D2LZqMHkyRhaRGRu2-XDkcNMNw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Impossible to find static-compoents.h<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-04 08:06:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10205.php">Sebastian Rinke: "[OMPI devel] RDMA with non-contiguous payload"</a>
<li><strong>Previous message:</strong> <a href="10203.php">Josh Hursey: "Re: [OMPI devel] 2012 MTT results"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10201.php">Josh Hursey: "Re: [OMPI devel] Impossible to find static-compoents.h"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you care, this mechanism is an artifact of Open MPI's build system: we made the choice to allow our plugins to be built and loaded dynamically (i.e., each plugin as its own dynamic shared object) or built statically (i.e., each plugin is physically part of, for example, libmpi.so or libmpi.a).
<br>
<p>OMPI's configure script makes the choice of static vs. dynamic on a plugin-by-plugin basis.  It records these results in various static-component.h files throughout the tree.  This allows OMPI to know, at run-time, which plugins are already included in the library (and therefore do not need to be dynamically opened).
<br>
<p><p>On Dec 28, 2011, at 10:33 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; That file is auto-generated during configuration time. So after you
</span><br>
<span class="quotelev1">&gt; run configure it should appear in the designated directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, Dec 25, 2011 at 6:57 PM, Louis Valmeras &lt;valmlouis_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I downloaded openmpi 1.4.4 to include the source files in a windows
</span><br>
<span class="quotelev2">&gt;&gt; application I am developing. The c file pml_base_open.c includes
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/pml/base/static-components.h. But I cannot find this header file in
</span><br>
<span class="quotelev2">&gt;&gt; the source files I downloaded. Where can I downloaded this file?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="10205.php">Sebastian Rinke: "[OMPI devel] RDMA with non-contiguous payload"</a>
<li><strong>Previous message:</strong> <a href="10203.php">Josh Hursey: "Re: [OMPI devel] 2012 MTT results"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10201.php">Josh Hursey: "Re: [OMPI devel] Impossible to find static-compoents.h"</a>
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
