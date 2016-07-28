<?
$subject_val = "Re: [OMPI devel] Fortran issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 14:28:58 2015" -->
<!-- isoreceived="20150220192858" -->
<!-- sent="Fri, 20 Feb 2015 11:28:53 -0800" -->
<!-- isosent="20150220192853" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran issue" -->
<!-- id="0B3DD7A4-7F54-46E9-A768-59B0CD653B6B_at_usgs.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51804B8B-087D-47C7-B45F-3EA620DB0724_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fortran issue<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-20 14:28:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17014.php">Paul Hargrove: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17012.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>In reply to:</strong> <a href="17012.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17014.php">Paul Hargrove: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17014.php">Paul Hargrove: "Re: [OMPI devel] Fortran issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent, Mr. Fortran.  Thank you.
<br>
<p>By the way, I meant to write Branch ON Low Bit Set/Clear.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p><p><p>On 20 Feb 2015, at 11:22 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 20, 2015, at 2:12 PM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Beware, this has/may not always be the case.  This is due to C's historical confusion/misuse of integers as boolean data types.  On VAX hardware, the low bit was the only significant part of a Fortran LOGICAL data type, owing to the architectural support (Branch of Low Bit Set/Clear) for the low bit in a status word meaning success/failure.  I doubt anyone uses VAXes and MPI, so this is not likely to cause users problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that this comment was referring to two things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. 0/1 array index issues
</span><br>
<span class="quotelev1">&gt; 2. .true./.false. issues
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We actually check for the value of .true. in configure, and use that everywhere.  I believe this particular portion of the code simply looks for .false.==(C int)0, and .true. is anything else.  That was deemed good enough because this portion of the code is simply *checking* for true/false.  Where we *assign* true/false in the Fortran boolean sense, we use the value determined by configure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17012.php">http://www.open-mpi.org/community/lists/devel/2015/02/17012.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17013/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17014.php">Paul Hargrove: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17012.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>In reply to:</strong> <a href="17012.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17014.php">Paul Hargrove: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17014.php">Paul Hargrove: "Re: [OMPI devel] Fortran issue"</a>
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
