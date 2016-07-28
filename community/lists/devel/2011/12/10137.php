<?
$subject_val = "Re: [OMPI devel] Totalview broken with 1.5/trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 13:42:16 2011" -->
<!-- isoreceived="20111215184216" -->
<!-- sent="Thu, 15 Dec 2011 13:42:11 -0500" -->
<!-- isosent="20111215184211" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Totalview broken with 1.5/trunk" -->
<!-- id="78618A8C-2DA6-43FC-8954-91FB934C6D0A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2EB454BD-4A3E-4174-B6B9-DD0F4E7767B2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Totalview broken with 1.5/trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 13:42:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10138.php">Ashley Pittman: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="10136.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>In reply to:</strong> <a href="10136.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10142.php">Nathan Hjelm: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Reply:</strong> <a href="10142.php">Nathan Hjelm: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, here's what I did:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/changeset/25660">https://svn.open-mpi.org/trac/ompi/changeset/25660</a>
<br>
--&gt; pulls in symbols like MPIR_Breakpoint via a different dummy function
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/changeset/25661">https://svn.open-mpi.org/trac/ompi/changeset/25661</a>
<br>
--&gt; Fixes the ORTE_DECLSPEC typos that George found
<br>
<p>LANL: Can you verify that this (still) works for you with totalview and stat?
<br>
<p><p><p>On Dec 15, 2011, at 1:35 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 15, 2011, at 10:28 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have had the chance now to test it with totalview and stat 1.1.0. Looks good. I pushed the fix to the trunk and it will need to be CMRed to 1.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph and I just talked about this on the phone some more -- I don't think <a href="https://svn.open-mpi.org/trac/ompi/changeset/25654">https://svn.open-mpi.org/trac/ompi/changeset/25654</a> was the right fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We still need to ensure that all the symbols in orte/debugger/base/debugger_base_fns.o are pulled in from shared libraries at run-time.  Totalview may well have gotten confused if we used the actual MPIR_Breakpoint symbol to pull it in (i.e., it actually broke right there, rather than when we actually invoked MPIR_Breakpoint, later). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A better way might be to use another dummy function to pull in all the symbols from that .o file.  I.e., instead of doing foo=MPIR_Breakpoint, call some other dummy function that lives in debugger_base_fns.c.  It's only purpose in life would be to ensure that all the symbols -- including MPIR_Breakpoint -- are pulled in at run time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll go do that on the trunk right now...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="10138.php">Ashley Pittman: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="10136.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>In reply to:</strong> <a href="10136.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10142.php">Nathan Hjelm: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Reply:</strong> <a href="10142.php">Nathan Hjelm: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
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
