<?
$subject_val = "Re: [OMPI devel] 1.8.5rc1 is ready for testing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 12:51:48 2015" -->
<!-- isoreceived="20150420165148" -->
<!-- sent="Mon, 20 Apr 2015 16:51:03 +0000" -->
<!-- isosent="20150420165103" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc1 is ready for testing" -->
<!-- id="CA89F184-4973-4ADC-85B4-3701E6CFE4C4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="55352AC2.4080401_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.5rc1 is ready for testing<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-20 12:51:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17277.php">Ralph Castain: "[OMPI devel] Master appears broken on the Mac"</a>
<li><strong>Previous message:</strong> <a href="17275.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>In reply to:</strong> <a href="17275.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Got it; I knew there was a reason -- I just couldn't remember what it was.
<br>
<p>If you care, the problem was actually a bug in Libtool's libltdl embedding machinery.  We &quot;fixed&quot; the problem by not embedding libltdl by default any more (and went a different way...).  If you care:
<br>
<p><a href="https://github.com/open-mpi/ompi/issues/311">https://github.com/open-mpi/ompi/issues/311</a> was the initial identification of the issue.
<br>
<p>We tried a few different approaches to fix the problem.
<br>
<p><a href="https://github.com/open-mpi/ompi/pull/410">https://github.com/open-mpi/ompi/pull/410</a> was the final solution.
<br>
<p>(Ralph just recently PR'ed this over to the v1.8 branch)
<br>
<p><p><p><span class="quotelev1">&gt; On Apr 20, 2015, at 12:35 PM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/20/2015 5:16 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I looked at this thread in a little more detail...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The question below is a little moot because of the change that was done to v1.8, but please humor me anyway.  :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Macro: I think you told me before, but I forget, so please refresh my memory: I seem to recall that there's a reason you're invoking autogen in a tarball, but I don't remember what it is.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is a standard best practice for cygwin package build.
</span><br>
<span class="quotelev1">&gt; Our package build system (cygport) has autoreconf as default
</span><br>
<span class="quotelev1">&gt; before configure..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 90% of the time is not really needed, but some packages are really
</span><br>
<span class="quotelev1">&gt; a pain. So to avoid surprise we play safe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I ask because in all POSIX cases at least, end users should be able to just untar, configure, make, make install -- they don't/shouldn't run autogen).  I.e., it doesn't matter what version of Libtool end users have installed (or not!) because we bootstrapped the tarball with a Libtool version that we know works.  Even more specifically: the error you're running in to should not have happened with a plain tarball -- the only cases where I can think of it happening would be if you got a git clone and ran autogen, or if you got a tarball and (re-)ran autogen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is &quot;got a tarball and (re-)ran autogen&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can disable it and test anyway, if it is really needed, but
</span><br>
<span class="quotelev1">&gt; I will prefer that autogen.sh works as expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17275.php">http://www.open-mpi.org/community/lists/devel/2015/04/17275.php</a>
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
<li><strong>Next message:</strong> <a href="17277.php">Ralph Castain: "[OMPI devel] Master appears broken on the Mac"</a>
<li><strong>Previous message:</strong> <a href="17275.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>In reply to:</strong> <a href="17275.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
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
