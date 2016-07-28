<?
$subject_val = "Re: [OMPI devel] open ib dependency question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  2 20:32:46 2008" -->
<!-- isoreceived="20080703003246" -->
<!-- sent="Wed, 2 Jul 2008 17:32:37 -0700" -->
<!-- isosent="20080703003237" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] open ib dependency question" -->
<!-- id="35B579E9-5083-4851-9DC3-5E4FC773D198_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="486BD0BF.4000409_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] open ib dependency question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-02 20:32:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4263.php">Don Kerr: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4261.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.7rc2 has been posted"</a>
<li><strong>In reply to:</strong> <a href="4260.php">Don Kerr: "[OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4263.php">Don Kerr: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4263.php">Don Kerr: "Re: [OMPI devel] open ib dependency question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is the IBCM library for the IBCM CPC -- IB connection manager  
<br>
stuff.
<br>
<p>It's not *necessary*; you could use the OOB CPC if you want to.
<br>
<p>That being said, OMPI currently builds support for it (and links it  
<br>
in) if it finds the right headers and library files.  We don't  
<br>
currently have configury to disable this behavior (and *not* build  
<br>
RDMACM and/or IBCM support).
<br>
<p>Do you have a problem / need to disable building support for IBCM?
<br>
<p><p><p>On Jul 2, 2008, at 12:02 PM, Don Kerr wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears that the mca_btl_openib.so  has a dependency on  
</span><br>
<span class="quotelev1">&gt; libibcm.so.  Is this necessary?
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4263.php">Don Kerr: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4261.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.7rc2 has been posted"</a>
<li><strong>In reply to:</strong> <a href="4260.php">Don Kerr: "[OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4263.php">Don Kerr: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4263.php">Don Kerr: "Re: [OMPI devel] open ib dependency question"</a>
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
