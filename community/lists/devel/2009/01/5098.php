<?
$subject_val = "Re: [OMPI devel] problem compiling r20196";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 14:20:58 2009" -->
<!-- isoreceived="20090105192058" -->
<!-- sent="Mon, 5 Jan 2009 12:20:49 -0700" -->
<!-- isosent="20090105192049" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem compiling r20196" -->
<!-- id="8DB14E3A-A308-4EE0-83DB-886746C746B9_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D7CD9CCC-D06D-4D3D-BB20-7695D057E4D1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] problem compiling r20196<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-05 14:20:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5099.php">Jim Langston: "Re: [OMPI devel] LOCK_SHARED?"</a>
<li><strong>Previous message:</strong> <a href="5097.php">Jeff Squyres: "Re: [OMPI devel] problem compiling r20196"</a>
<li><strong>In reply to:</strong> <a href="5097.php">Jeff Squyres: "Re: [OMPI devel] problem compiling r20196"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5101.php">Thomas Ropars: "Re: [OMPI devel] problem compiling r20196"</a>
<li><strong>Reply:</strong> <a href="5101.php">Thomas Ropars: "Re: [OMPI devel] problem compiling r20196"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The file is present on the 2.6.19 distribution, which is the most  
<br>
current I have access to.
<br>
<p>However, after looking at the code, I realized that we no longer need  
<br>
that include file anyway - so I have removed it. Hopefully, that  
<br>
should let you build.
<br>
<p>Ralph
<br>
<p>On Jan 5, 2009, at 12:08 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Is there some other file that should be included instead?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 5, 2009, at 1:16 PM, Thomas Ropars wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't manage to compile the code from the svn r20196.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the following error:
</span><br>
<span class="quotelev2">&gt;&gt; pstat_linux_module.c:34:73: error: asm/page.h: No such file or  
</span><br>
<span class="quotelev2">&gt;&gt; directory
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [pstat_linux_module.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that it is because new Linux kernels no longer install asm/ 
</span><br>
<span class="quotelev2">&gt;&gt; page.h (I use a 2.6.27 Linux kernel).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thomas.
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="5099.php">Jim Langston: "Re: [OMPI devel] LOCK_SHARED?"</a>
<li><strong>Previous message:</strong> <a href="5097.php">Jeff Squyres: "Re: [OMPI devel] problem compiling r20196"</a>
<li><strong>In reply to:</strong> <a href="5097.php">Jeff Squyres: "Re: [OMPI devel] problem compiling r20196"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5101.php">Thomas Ropars: "Re: [OMPI devel] problem compiling r20196"</a>
<li><strong>Reply:</strong> <a href="5101.php">Thomas Ropars: "Re: [OMPI devel] problem compiling r20196"</a>
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
