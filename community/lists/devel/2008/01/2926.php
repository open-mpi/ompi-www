<?
$subject_val = "Re: [OMPI devel] patch for building gm btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  2 11:27:04 2008" -->
<!-- isoreceived="20080102162704" -->
<!-- sent="Wed, 2 Jan 2008 11:26:51 -0500" -->
<!-- isosent="20080102162651" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] patch for building gm btl" -->
<!-- id="EB9F3A54-225F-4AA0-966E-80F3FBF0FF4B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="004EE916-33AF-4DAF-A6DE-FAE2E4C08CF9_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] patch for building gm btl<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-02 11:26:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2927.php">Gleb Natapov: "[OMPI devel] Common initialization code for IB."</a>
<li><strong>Previous message:</strong> <a href="2925.php">George Bosilca: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>In reply to:</strong> <a href="2925.php">George Bosilca: "Re: [OMPI devel] patch for building gm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2931.php">Patrick Geoffray: "Re: [OMPI devel] patch for building gm btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I'd say that if Paul has GM clusters and is willing to test,  
<br>
let's let him.  :-)
<br>
<p><p>On Jan 2, 2008, at 11:11 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Same here at UTK, no more GM clusters around. I guess I can  
</span><br>
<span class="quotelev1">&gt; reinstall the GM libraries, just to test the ompi compilation step.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 2, 2008, at 9:51 AM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wednesday 02 January 2008 08:52:08 am Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 31, 2007, at 11:42 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried today to build the OMPI trunk on a system w/ GM libs  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; installed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (I tried both GM-2.0.16 and GM-1.6.4) and found that the GM BTL  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; won't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; even compile, due to unbalanced parens.  The patch below  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reintroduces
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the parens that were apparently lost in r16633:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fixed (<a href="https://svn.open-mpi.org/trac/ompi/changeset/17029">https://svn.open-mpi.org/trac/ompi/changeset/17029</a>); thanks  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The fact that this has gone unfixed for 2 months suggests to me  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nobody is building the GM BTL.  So, how would I go about  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a) ...if there exists any periodic build of the GM BTL via MTT?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; treks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I thought that Indiana was doing GM builds, but perhaps they've
</span><br>
<span class="quotelev3">&gt;&gt;&gt; upgraded to MX these days...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is correct. Our GM system was upgraded, and is now running MX  
</span><br>
<span class="quotelev2">&gt;&gt; (although
</span><br>
<span class="quotelev2">&gt;&gt; we have yet to setup MTT on the upgraded system...).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2927.php">Gleb Natapov: "[OMPI devel] Common initialization code for IB."</a>
<li><strong>Previous message:</strong> <a href="2925.php">George Bosilca: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>In reply to:</strong> <a href="2925.php">George Bosilca: "Re: [OMPI devel] patch for building gm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2931.php">Patrick Geoffray: "Re: [OMPI devel] patch for building gm btl"</a>
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
