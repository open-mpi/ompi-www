<?
$subject_val = "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  4 06:11:40 2010" -->
<!-- isoreceived="20101104101140" -->
<!-- sent="Thu, 4 Nov 2010 11:08:39 +0100 (CET)" -->
<!-- isosent="20101104100839" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib" -->
<!-- id="alpine.DEB.2.00.1011041107470.1631_at_jeaugeys" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4C5372B4-20AC-4E22-9867-6B9A6F8910C7_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-04 06:08:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8662.php">Jeff Squyres: "[OMPI devel] Making an Open MPI release series"</a>
<li><strong>Previous message:</strong> <a href="8660.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8639.php">Barrett, Brian W: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian,
<br>
<p>I finally found some time to test your patch and it solves my problem.
<br>
<p>Thanks a lot !
<br>
<p>Sylvain
<br>
<p>On Wed, 27 Oct 2010, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; I found the issue - somehow, we let the priorities used in installdirs get lost when we rewrote part of the configure system a couple months ago.  I have a fix, but it involves changing the configure system, so I won't commit it until this evening.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for pointing out the bug!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 26, 2010, at 8:36 AM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll take a look at fixing this the right way today.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since I wrote both the original autogen.sh that guaranteed static-components was ordered and PREFIX code, I had considered it to be a documented feature that there was strong otdering in the static-components list.  So personally, I'd consider it a bug in autogen.pl, but I think we can work around it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 26, 2010, at 6:01 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, 26 Oct 2010, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't think this is the right way to fix it.  Sorry!  :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't think it is the right way to do it either :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I say this because it worked somewhat by luck before, and now it's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; broken.  If we put in another &quot;it'll work because of a side effect of an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unintentional characteristic of the build system&quot; hack, it'll just
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; likely break again someday if/when we change the build system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I completely agree.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'd prefer a more robust solution that won't break as a side-effect of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the build system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd prefer too, but it would require adding much more logic in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; framework, including component sort with priority. And since no-one except
</span><br>
<span class="quotelev3">&gt;&gt;&gt; me seems to care about this functionality, I'm fine with this patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; More generally, I understand your demand for high quality patches that do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things The Right Way. However, I feel it's sometimes exagerated,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; especially when talking about parts of the code that don't meet these high
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quality standards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the end, my feeling is that we don't replace very bad (broken) code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with bad (working) code because we want to wait for a perfect (never
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happening) code. I don't think it's beneficial to the project.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;  Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt;&gt;  Sandia National Laboratories
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8662.php">Jeff Squyres: "[OMPI devel] Making an Open MPI release series"</a>
<li><strong>Previous message:</strong> <a href="8660.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8639.php">Barrett, Brian W: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
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
