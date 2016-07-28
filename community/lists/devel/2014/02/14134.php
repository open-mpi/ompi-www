<?
$subject_val = "Re: [OMPI devel] 1.7.5 status";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 20:32:34 2014" -->
<!-- isoreceived="20140213013234" -->
<!-- sent="Thu, 13 Feb 2014 01:32:32 +0000" -->
<!-- isosent="20140213013232" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.5 status" -->
<!-- id="178A3A89-9438-4D55-B2AB-4FFE923F6248_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="41542F3D-D0B3-4D37-ADEF-91943E466794_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.5 status<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-12 20:32:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14135.php">Mike Dubman: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>Previous message:</strong> <a href="14133.php">Ralph Castain: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>In reply to:</strong> <a href="14107.php">Ralph Castain: "[OMPI devel] 1.7.5 status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14136.php">Marco Atzeri: "Re: [OMPI devel] 1.7.5 status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
idx_null is a datatype test, but it makes one datatype call into the MPI_File stuff.  So I wonder if it's failing with the new ROMIO...?
<br>
<p>That being said, I'm unable to get this to fail manually.
<br>
<p><p><p>On Feb 11, 2014, at 10:18 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Things are looking relatively good - I see two recurring failures:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. idx_null - no idea what that test does, but it routinely fails
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. intercomm_create - this is the 3-way connect/accept/merge. Nathan - I believe you had a fix for that?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14135.php">Mike Dubman: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>Previous message:</strong> <a href="14133.php">Ralph Castain: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>In reply to:</strong> <a href="14107.php">Ralph Castain: "[OMPI devel] 1.7.5 status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14136.php">Marco Atzeri: "Re: [OMPI devel] 1.7.5 status"</a>
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
