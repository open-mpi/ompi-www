<?
$subject_val = "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 20:08:17 2009" -->
<!-- isoreceived="20090407000817" -->
<!-- sent="Mon, 6 Apr 2009 20:08:06 -0400" -->
<!-- isosent="20090407000806" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac 1857: SM btl hangs when msg &amp;gt;=4k" -->
<!-- id="6CB6DFB1-EF26-4D13-990E-D2FEA244C014_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49DA96AE.6080801_at_sun.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 20:08:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5800.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5798.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>In reply to:</strong> <a href="5798.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5800.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5800.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're right, the sentence was messed-up. My intent was to say that I  
<br>
found the problem, made a fix and once this fix applied to the trunk I  
<br>
was not able to reproduce the deadlock.
<br>
<p>Based on your description of the bug I forced osu_bw to send 1024 non- 
<br>
blocking sends (instead of the default 64), and I still don't get the  
<br>
deadlock. I'm trilled ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 6, 2009, at 19:56 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got some free time (yeh haw) and took a look at the OB1 PML in  
</span><br>
<span class="quotelev2">&gt;&gt; order  to fix the issue. I think I found the problem, as I'm unable  
</span><br>
<span class="quotelev2">&gt;&gt; to reproduce this error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, this sentence has me baffled.  Are you unable to reproduce  
</span><br>
<span class="quotelev1">&gt; the problem before the fixes or afterwards?  The first step is to  
</span><br>
<span class="quotelev1">&gt; reproduce the problem, right?  To do so:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A) Back out r20944.  Easy way to do that is just
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   % setenv OMPI_MCA_mpool_sm_min_size 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; B)  Check that osu_bw.c hangs when using sm and you reach rendezvous  
</span><br>
<span class="quotelev1">&gt; message size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C)  Introduce your changes and make sure that osu_bw.c runs to  
</span><br>
<span class="quotelev1">&gt; completion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you please give it a try with 20946 and  20947 but without 20944?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; osu_bw.c hangs for me.  The PML fix did not seem to work.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5800.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5798.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>In reply to:</strong> <a href="5798.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5800.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5800.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
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
