<?
$subject_val = "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  3 10:34:13 2011" -->
<!-- isoreceived="20110803143413" -->
<!-- sent="Wed, 3 Aug 2011 10:34:07 -0400" -->
<!-- isosent="20110803143407" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI + HWLOC + Static build  issue" -->
<!-- id="39B635A5-D40A-4794-A5F9-C7EDC2FE21FD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BA9B139C-7A9C-4EF7-87A2-B36BB1235B49_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI + HWLOC + Static build  issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-03 10:34:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9593.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9591.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9558.php">Shamis, Pavel: "[OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9604.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9604.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pasha --
<br>
<p>I'm having trouble reproducing this.  My system (RHEL5) has libnuma.so and no libnuma.a, but when I configure with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;./configure --disable-shared --enable-static ...
<br>
<p>Everything works fine.
<br>
<p>hwloc doesn't specifically look for libnuma.a or libnuma.so -- it just tries to link with -lnuma.  If that works, then it rules that we have libnuma support.
<br>
<p>Can you send more details on exactly what is failing, and how you make that happen?
<br>
<p><p>On Jul 25, 2011, at 5:56 PM, Shamis, Pavel wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been trying to compile Open MPI (trunk) static version with hwloc, the last is enabled by default in trunk.
</span><br>
<span class="quotelev1">&gt; The build platform is AMD machine, that has dynamic libnuma version only.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Problem:
</span><br>
<span class="quotelev1">&gt; Open MPI fails to link orted, because it can't find static version of libnuma.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Workaround:
</span><br>
<span class="quotelev1">&gt; add --without-hwloc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Real solution:
</span><br>
<span class="quotelev1">&gt; Is it a way to keep hwloc enabled when static libnuma isn't presented on the system ? If it's a such way, I would like to know how to enable it.
</span><br>
<span class="quotelev1">&gt; Otherwise, I think configure script should handle such scenario, it means disable hwloc and enable some other alternative.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Application Performance Tools Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="9593.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9591.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9558.php">Shamis, Pavel: "[OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9604.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9604.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
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
