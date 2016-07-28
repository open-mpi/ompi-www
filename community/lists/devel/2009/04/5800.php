<?
$subject_val = "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 20:42:34 2009" -->
<!-- isoreceived="20090407004234" -->
<!-- sent="Mon, 06 Apr 2009 17:42:13 -0700" -->
<!-- isosent="20090407004213" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac 1857: SM btl hangs when msg &amp;gt;=4k" -->
<!-- id="49DAA165.2030709_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6CB6DFB1-EF26-4D13-990E-D2FEA244C014_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 20:42:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5801.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5799.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>In reply to:</strong> <a href="5799.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5801.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5801.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; You're right, the sentence was messed-up. My intent was to say that I  
</span><br>
<span class="quotelev1">&gt; found the problem, made a fix and once this fix applied to the trunk 
</span><br>
<span class="quotelev1">&gt; I  was not able to reproduce the deadlock.
</span><br>
<p>But you were able to reproduce the deadlock before you made the fix?
<br>
<p>Anyhow, if I get fresh bits (through r20947) and I back out r20944 
<br>
(either in the source code or simply by setting the mpool_sm_min_size 
<br>
MCA parameter to 0), I get deadlock.
<br>
<p><span class="quotelev1">&gt; Based on your description of the bug I forced osu_bw to send 1024 non- 
</span><br>
<span class="quotelev1">&gt; blocking sends (instead of the default 64), and I still don't get the  
</span><br>
<span class="quotelev1">&gt; deadlock. I'm trilled ... 
</span><br>
<p>Yes, that's a good test.  You're sure you had mpool_sm_min_size set to 
<br>
0?  I just don't have the same luck you do.  I get the hang even with 
<br>
your fixes.
<br>
<p><span class="quotelev1">&gt; On Apr 6, 2009, at 19:56 , Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got some free time (yeh haw) and took a look at the OB1 PML in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; order  to fix the issue. I think I found the problem, as I'm unable  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to reproduce this error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, this sentence has me baffled.  Are you unable to reproduce  
</span><br>
<span class="quotelev2">&gt;&gt; the problem before the fixes or afterwards?  The first step is to  
</span><br>
<span class="quotelev2">&gt;&gt; reproduce the problem, right?  To do so:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A) Back out r20944.  Easy way to do that is just
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   % setenv OMPI_MCA_mpool_sm_min_size 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; B)  Check that osu_bw.c hangs when using sm and you reach rendezvous  
</span><br>
<span class="quotelev2">&gt;&gt; message size.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; C)  Introduce your changes and make sure that osu_bw.c runs to  
</span><br>
<span class="quotelev2">&gt;&gt; completion.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you please give it a try with 20946 and  20947 but without 20944?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; osu_bw.c hangs for me.  The PML fix did not seem to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5801.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5799.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>In reply to:</strong> <a href="5799.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5801.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5801.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
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
