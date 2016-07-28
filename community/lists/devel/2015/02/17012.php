<?
$subject_val = "Re: [OMPI devel] Fortran issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 14:22:07 2015" -->
<!-- isoreceived="20150220192207" -->
<!-- sent="Fri, 20 Feb 2015 19:22:05 +0000" -->
<!-- isosent="20150220192205" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran issue" -->
<!-- id="51804B8B-087D-47C7-B45F-3EA620DB0724_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="6DD01DBC-D695-41FF-B9D7-ADD9AFA0DC7F_at_usgs.gov" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-20 14:22:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17013.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17011.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>In reply to:</strong> <a href="17011.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17013.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17013.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 20, 2015, at 2:12 PM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Beware, this has/may not always be the case.  This is due to C's historical confusion/misuse of integers as boolean data types.  On VAX hardware, the low bit was the only significant part of a Fortran LOGICAL data type, owing to the architectural support (Branch of Low Bit Set/Clear) for the low bit in a status word meaning success/failure.  I doubt anyone uses VAXes and MPI, so this is not likely to cause users problems.
</span><br>
<p>Note that this comment was referring to two things:
<br>
<p>1. 0/1 array index issues
<br>
2. .true./.false. issues
<br>
<p>We actually check for the value of .true. in configure, and use that everywhere.  I believe this particular portion of the code simply looks for .false.==(C int)0, and .true. is anything else.  That was deemed good enough because this portion of the code is simply *checking* for true/false.  Where we *assign* true/false in the Fortran boolean sense, we use the value determined by configure.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17013.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17011.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>In reply to:</strong> <a href="17011.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17013.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17013.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
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
