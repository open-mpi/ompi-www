<?
$subject_val = "Re: [OMPI devel] trunk borked -- my fault";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  4 17:50:14 2009" -->
<!-- isoreceived="20090804215014" -->
<!-- sent="Tue, 4 Aug 2009 17:50:08 -0400" -->
<!-- isosent="20090804215008" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk borked -- my fault" -->
<!-- id="43F494F9-95DE-49BC-A802-5CFC69715E6C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DE61FD47-DBAB-455E-A676-A16675896030_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk borked -- my fault<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-04 17:50:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6589.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Previous message:</strong> <a href="6587.php">George Bosilca: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>In reply to:</strong> <a href="6587.php">George Bosilca: "Re: [OMPI devel] trunk borked -- my fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6589.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Reply:</strong> <a href="6589.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah -- I see an AC 2.63b release note:
<br>
<p>** AC_REQUIRE now detects the case of an outer macro which first expands
<br>
&nbsp;&nbsp;&nbsp;&nbsp;then later indirectly requires the same inner macro.  Previously,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;this case led to silent out-of-order expansion (bug present since
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2.50); it now issues a syntax warning, and duplicates the expansion
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of the inner macro to guarantee dependencies have been met.  See
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the manual for advice on how to refactor macros in order to avoid
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the bug in earlier autoconf versions and avoid increased script
<br>
&nbsp;&nbsp;&nbsp;&nbsp;size in the current version.
<br>
<p>This looks related to what I am seeing.
<br>
<p>/me goes to investigate...
<br>
<p><p>On Aug 4, 2009, at 5:47 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Indeed, r21759 solves the problem. ompi compile successfully on Mac OS
</span><br>
<span class="quotelev1">&gt; X with autoconf 2.64.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 4, 2009, at 17:41 , Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 4, 2009, at 5:37 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I used 2.64 for about a week on a bunch of machines. I never had
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problems with it before...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; After checking it turned out that autoconf 2.64 was freshly  
</span><br>
<span class="quotelev1">&gt; installed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; on my Mac, so this might be a problem with autoconf 2.64 and MAC OS
</span><br>
<span class="quotelev3">&gt; &gt;&gt; X ... I'll go back to 2.63 until we figure out a way to solve these
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problems.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; FWIW, I saw the warnings on Linux as well, and then configure failed
</span><br>
<span class="quotelev2">&gt; &gt; later in spectacular and interesting ways (I didn't let it get to
</span><br>
<span class="quotelev2">&gt; &gt; the build because configure was so borked up -- all the individual
</span><br>
<span class="quotelev2">&gt; &gt; POSIX .h file tests said that the file was present but could not be
</span><br>
<span class="quotelev2">&gt; &gt; compiled because somehow it was stuck trying to compile them with
</span><br>
<span class="quotelev2">&gt; &gt; gfortran (!) instead of gcc).  Something changed in AC2.64 with
</span><br>
<span class="quotelev2">&gt; &gt; regards to how they do language REQUIRE'ing, etc. that I don't fully
</span><br>
<span class="quotelev2">&gt; &gt; understand.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Let me know if the workaround in r21759 works for you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6589.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Previous message:</strong> <a href="6587.php">George Bosilca: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>In reply to:</strong> <a href="6587.php">George Bosilca: "Re: [OMPI devel] trunk borked -- my fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6589.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Reply:</strong> <a href="6589.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
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
