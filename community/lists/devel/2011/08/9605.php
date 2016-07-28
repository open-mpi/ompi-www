<?
$subject_val = "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  3 20:24:53 2011" -->
<!-- isoreceived="20110804002453" -->
<!-- sent="Wed, 3 Aug 2011 20:24:47 -0400" -->
<!-- isosent="20110804002447" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI + HWLOC + Static build  issue" -->
<!-- id="897D6C20-0382-4A74-955D-2A7C42461F7F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5C691E518F345F4882FAB9E9839E60BA0BCA462302_at_EXCHMB.ornl.gov" -->
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
<strong>Date:</strong> 2011-08-03 20:24:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9606.php">Júlio Hoffimann: "[OMPI devel] Warnings within C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="9604.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9604.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9609.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9609.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 3, 2011, at 6:58 PM, Shamis, Pavel wrote:
<br>
<p><span class="quotelev1">&gt; 1. We do not have libnuma.a in our setup. So if you want to reproduce the problem, I would suggest to move it to some .bk.
</span><br>
<p>I don't have it, either.
<br>
<p><span class="quotelev1">&gt; 2. Build open mpi    
</span><br>
<span class="quotelev1">&gt; ./configure --enable-static --disable-shared
</span><br>
<span class="quotelev1">&gt; --with-wrapper-ldflags=-static --disable-dlopen --enable-contrib-no-build=vt
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;    make -j 8 orted_LDFLAGS=-all-static all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Open MPI compilation fails in orte. Hwloc adds -lnuma to list of libs, as result when orted links the static binary it fails to find 
</span><br>
<span class="quotelev1">&gt; Static version of  libnuma and wits with error. 
</span><br>
<p>I think the issue is what I posted earlier today: you're telling configure one thing and then telling make another.  I.e., you're passing in different LDFLAGS to configure and make.  That seems like a Bad Idea.
<br>
<p>Brice pointed out to me that -all-static is a libtool flag.  I don't know of any way to pass in specific flags to libtool other than what you did, but consider that libtool is not used for the majority of compiler/linker tests in configure.  So I don't think passing a Libtool flag in via LDFLAGS to make is going to do what you want.
<br>
<p>Libtool's -all-static flag probably resolves to some gcc flag(s), right?  Can you just pass those in via CFLAGS / LDFLAGS to configure and then not pass anything in via make?
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
<li><strong>Next message:</strong> <a href="9606.php">Júlio Hoffimann: "[OMPI devel] Warnings within C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="9604.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9604.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9609.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9609.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
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
