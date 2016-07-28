<?
$subject_val = "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 19:56:54 2009" -->
<!-- isoreceived="20090406235654" -->
<!-- sent="Mon, 06 Apr 2009 16:56:30 -0700" -->
<!-- isosent="20090406235630" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac 1857: SM btl hangs when msg &amp;gt;=4k" -->
<!-- id="49DA96AE.6080801_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AB4B8CE2-0860-4F17-9EEF-48CDC1CE9BED_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2009-04-06 19:56:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5799.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5797.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>In reply to:</strong> <a href="5797.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5799.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5799.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I got some free time (yeh haw) and took a look at the OB1 PML in 
</span><br>
<span class="quotelev1">&gt; order  to fix the issue. I think I found the problem, as I'm unable to 
</span><br>
<span class="quotelev1">&gt; reproduce this error.
</span><br>
<p>Sorry, this sentence has me baffled.  Are you unable to reproduce the 
<br>
problem before the fixes or afterwards?  The first step is to reproduce 
<br>
the problem, right?  To do so:
<br>
<p>A) Back out r20944.  Easy way to do that is just
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;% setenv OMPI_MCA_mpool_sm_min_size 0
<br>
<p>B)  Check that osu_bw.c hangs when using sm and you reach rendezvous 
<br>
message size.
<br>
<p>C)  Introduce your changes and make sure that osu_bw.c runs to completion.
<br>
<p><span class="quotelev1">&gt; Can you please give it a try with 20946 and  20947 but without 20944?
</span><br>
<p>osu_bw.c hangs for me.  The PML fix did not seem to work.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5799.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5797.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>In reply to:</strong> <a href="5797.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5799.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5799.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
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
