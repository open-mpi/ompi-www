<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 15:10:08 2013" -->
<!-- isoreceived="20130128201008" -->
<!-- sent="Mon, 28 Jan 2013 20:10:03 +0000" -->
<!-- isosent="20130128201003" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CB9223_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD317D7ED7_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 15:10:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12033.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc2 released"</a>
<li><strong>Previous message:</strong> <a href="12031.php">Ralph Castain: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>In reply to:</strong> <a href="12027.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12036.php">David Beer: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll +1 what Brian said: we *really* don't want to have to link Open MPI with a C++ compiler.
<br>
<p>Can't you rpath in whatever support libraries you need (e.g., the g++ libraries with the cxx_personality symbol), such that when we -ltorque, it just pulls in whatever other dependencies it needs?
<br>
<p>(I'm assuming that you're extern &quot;C&quot;'ing all the tm_*() function calls so that they can be called from C code, not C++ code)
<br>
<p><p>On Jan 28, 2013, at 2:14 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 1/28/13 11:54 AM, &quot;David Beer&quot; &lt;dbeer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; checking for tm_init in -ltorque... no
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: TM support requested but not found.  Aborting
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Oddly enough, if you have already configured with an older version of TORQUE, you can build open-mpi with TORQUE 4.2 installed, so it can find the function definitions when compiling, its just for some reason it doesn't find them in the configure script. This is why I think that something in the configure script is assuming that libtorque was compiled with gcc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right, the configure output to stdout/stderr isn't very useful in diagnosing why a test failed.  The config.log file generated by configure will have much more information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;   Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;   Sandia National Laboratories
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12033.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc2 released"</a>
<li><strong>Previous message:</strong> <a href="12031.php">Ralph Castain: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>In reply to:</strong> <a href="12027.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12036.php">David Beer: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
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
