<?
$subject_val = "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 09:17:09 2009" -->
<!-- isoreceived="20090407131709" -->
<!-- sent="Tue, 7 Apr 2009 08:16:51 -0500" -->
<!-- isosent="20090407131651" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac 1857: SM btl hangs when msg &amp;gt;=4k" -->
<!-- id="9B72CF4F-6E8D-47F2-A87C-ABEA9C86C2E1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990904070507i73499baela855dbfe07127c9d_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 09:16:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5803.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5801.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>In reply to:</strong> <a href="5801.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5803.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5803.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW:
<br>
<p>- running osu_bw with mpool_sm_min_size==0 hangs for me on x86_64,  
<br>
RHEL4U4/6
<br>
- running osu_bw with mpool_sm_min_size==&lt;large&gt; works for me on  
<br>
x86_64, RHEL4U4/6
<br>
<p>Tested this morning with trunk r
<br>
<p><p>On Apr 7, 2009, at 7:07 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; r20948 still hangs, changing mpool_sm_min_size solves it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 7, 2009 at 3:42 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're right, the sentence was messed-up. My intent was to say that  
</span><br>
<span class="quotelev1">&gt; I  found the problem, made a fix and once this fix applied to the  
</span><br>
<span class="quotelev1">&gt; trunk I  was not able to reproduce the deadlock.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But you were able to reproduce the deadlock before you made the fix?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyhow, if I get fresh bits (through r20947) and I back out r20944  
</span><br>
<span class="quotelev1">&gt; (either in the source code or simply by setting the  
</span><br>
<span class="quotelev1">&gt; mpool_sm_min_size MCA parameter to 0), I get deadlock.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Based on your description of the bug I forced osu_bw to send 1024  
</span><br>
<span class="quotelev1">&gt; non- blocking sends (instead of the default 64), and I still don't  
</span><br>
<span class="quotelev1">&gt; get the  deadlock. I'm trilled ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, that's a good test.  You're sure you had mpool_sm_min_size set  
</span><br>
<span class="quotelev1">&gt; to 0?  I just don't have the same luck you do.  I get the hang even  
</span><br>
<span class="quotelev1">&gt; with your fixes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 6, 2009, at 19:56 , Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got some free time (yeh haw) and took a look at the OB1 PML in   
</span><br>
<span class="quotelev1">&gt; order  to fix the issue. I think I found the problem, as I'm unable   
</span><br>
<span class="quotelev1">&gt; to reproduce this error.
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
<span class="quotelev1">&gt;  % setenv OMPI_MCA_mpool_sm_min_size 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; B)  Check that osu_bw.c hangs when using sm and you reach  
</span><br>
<span class="quotelev1">&gt; rendezvous  message size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C)  Introduce your changes and make sure that osu_bw.c runs to   
</span><br>
<span class="quotelev1">&gt; completion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you please give it a try with 20946 and  20947 but without 20944?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; osu_bw.c hangs for me.  The PML fix did not seem to work.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5803.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5801.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>In reply to:</strong> <a href="5801.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5803.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5803.php">George Bosilca: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
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
