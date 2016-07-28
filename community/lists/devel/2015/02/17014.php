<?
$subject_val = "Re: [OMPI devel] Fortran issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 14:49:31 2015" -->
<!-- isoreceived="20150220194931" -->
<!-- sent="Fri, 20 Feb 2015 11:49:01 -0800" -->
<!-- isosent="20150220194901" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran issue" -->
<!-- id="CAAvDA16Knu-JjWWA5qY2WTNUrP31i0i_eH+QToZtRCag_eQ-9Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0B3DD7A4-7F54-46E9-A768-59B0CD653B6B_at_usgs.gov" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-20 14:49:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17015.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17013.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>In reply to:</strong> <a href="17013.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17015.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17015.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17016.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER JEFF(3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATA JEFF/4HMR. ,4HFORT,3HRAN/
<br>
<p>If you can understand that, you should probably pretend you can't :-)
<br>
<p>-Paul [who has actually used Computed GO TO and Arithmetic IF]
<br>
<p>On Fri, Feb 20, 2015 at 11:28 AM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Excellent, Mr. Fortran.  Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, I meant to write Branch ON Low Bit Set/Clear.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 20 Feb 2015, at 11:22 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 20, 2015, at 2:12 PM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Beware, this has/may not always be the case.  This is due to C's
</span><br>
<span class="quotelev1">&gt; historical confusion/misuse of integers as boolean data types.  On VAX
</span><br>
<span class="quotelev1">&gt; hardware, the low bit was the only significant part of a Fortran LOGICAL
</span><br>
<span class="quotelev1">&gt; data type, owing to the architectural support (Branch of Low Bit Set/Clear)
</span><br>
<span class="quotelev1">&gt; for the low bit in a status word meaning success/failure.  I doubt anyone
</span><br>
<span class="quotelev1">&gt; uses VAXes and MPI, so this is not likely to cause users problems.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; We actually check for the value of .true. in configure, and use that
</span><br>
<span class="quotelev1">&gt; everywhere.  I believe this particular portion of the code simply looks for
</span><br>
<span class="quotelev1">&gt; .false.==(C int)0, and .true. is anything else.  That was deemed good
</span><br>
<span class="quotelev1">&gt; enough because this portion of the code is simply *checking* for
</span><br>
<span class="quotelev1">&gt; true/false.  Where we *assign* true/false in the Fortran boolean sense, we
</span><br>
<span class="quotelev1">&gt; use the value determined by configure.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17012.php">http://www.open-mpi.org/community/lists/devel/2015/02/17012.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17013.php">http://www.open-mpi.org/community/lists/devel/2015/02/17013.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17014/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17015.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17013.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>In reply to:</strong> <a href="17013.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17015.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17015.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17016.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
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
