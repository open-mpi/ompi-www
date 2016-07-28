<?
$subject_val = "Re: [OMPI devel] 1.8.5rc1 is ready for testing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 11:16:51 2015" -->
<!-- isoreceived="20150420151651" -->
<!-- sent="Mon, 20 Apr 2015 15:16:49 +0000" -->
<!-- isosent="20150420151649" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc1 is ready for testing" -->
<!-- id="2CE7D188-C186-49D5-9DDA-D9DE6B2403CA_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5532B7BF.3060201_at_gmail.com" -->
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
<strong>Date:</strong> 2015-04-20 11:16:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17275.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17273.php">Elena Elkina: "[OMPI devel]  binding output error"</a>
<li><strong>In reply to:</strong> <a href="17270.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17275.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17275.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I looked at this thread in a little more detail...
<br>

<br>
The question below is a little moot because of the change that was done to v1.8, but please humor me anyway.  :-)
<br>

<br>
Macro: I think you told me before, but I forget, so please refresh my memory: I seem to recall that there's a reason you're invoking autogen in a tarball, but I don't remember what it is.  
<br>

<br>
I ask because in all POSIX cases at least, end users should be able to just untar, configure, make, make install -- they don't/shouldn't run autogen).  I.e., it doesn't matter what version of Libtool end users have installed (or not!) because we bootstrapped the tarball with a Libtool version that we know works.  Even more specifically: the error you're running in to should not have happened with a plain tarball -- the only cases where I can think of it happening would be if you got a git clone and ran autogen, or if you got a tarball and (re-)ran autogen.
<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; On Apr 18, 2015, at 3:59 PM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tomorrow is fine .
</span><br>
<span class="quotelev1">&gt; I am testing octave-4.0.0-rc3 today
</span><br>
<span class="quotelev1">&gt; ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/18/2015 9:13 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am planning on rc2 on Monday, if you&#226;&#128;&#153;d prefer to wait
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 18, 2015, at 9:30 AM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you planning another rc or I should test the git stable repository ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17270.php">http://www.open-mpi.org/community/lists/devel/2015/04/17270.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17275.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17273.php">Elena Elkina: "[OMPI devel]  binding output error"</a>
<li><strong>In reply to:</strong> <a href="17270.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17275.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17275.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
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
