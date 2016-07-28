<?
$subject_val = "Re: [OMPI devel] Fortran issue";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 21 07:25:09 2015" -->
<!-- isoreceived="20150221122509" -->
<!-- sent="Sat, 21 Feb 2015 12:25:05 +0000" -->
<!-- isosent="20150221122505" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran issue" -->
<!-- id="89B8C426-590B-498D-9B7C-35A4E81A1B56_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16Knu-JjWWA5qY2WTNUrP31i0i_eH+QToZtRCag_eQ-9Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-02-21 07:25:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Previous message:</strong> <a href="17015.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>In reply to:</strong> <a href="17014.php">Paul Hargrove: "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thankfully, I didn't understand it.  :-)
<br>
<p><span class="quotelev1">&gt; On Feb 20, 2015, at 2:49 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        INTEGER JEFF(3)
</span><br>
<span class="quotelev1">&gt;        DATA JEFF/4HMR. ,4HFORT,3HRAN/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you can understand that, you should probably pretend you can't :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul [who has actually used Computed GO TO and Arithmetic IF]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 20, 2015 at 11:28 AM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Excellent, Mr. Fortran.  Thank you.
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
<span class="quotelev2">&gt;&gt; On Feb 20, 2015, at 2:12 PM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Beware, this has/may not always be the case.  This is due to C's historical confusion/misuse of integers as boolean data types.  On VAX hardware, the low bit was the only significant part of a Fortran LOGICAL data type, owing to the architectural support (Branch of Low Bit Set/Clear) for the low bit in a status word meaning success/failure.  I doubt anyone uses VAXes and MPI, so this is not likely to cause users problems.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note that this comment was referring to two things:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. 0/1 array index issues
</span><br>
<span class="quotelev2">&gt;&gt; 2. .true./.false. issues
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We actually check for the value of .true. in configure, and use that everywhere.  I believe this particular portion of the code simply looks for .false.==(C int)0, and .true. is anything else.  That was deemed good enough because this portion of the code is simply *checking* for true/false.  Where we *assign* true/false in the Fortran boolean sense, we use the value determined by configure.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17012.php">http://www.open-mpi.org/community/lists/devel/2015/02/17012.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17013.php">http://www.open-mpi.org/community/lists/devel/2015/02/17013.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17014.php">http://www.open-mpi.org/community/lists/devel/2015/02/17014.php</a>
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
<li><strong>Next message:</strong> <a href="17017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Previous message:</strong> <a href="17015.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>In reply to:</strong> <a href="17014.php">Paul Hargrove: "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
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
