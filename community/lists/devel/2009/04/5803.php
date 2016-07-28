<?
$subject_val = "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 13:00:45 2009" -->
<!-- isoreceived="20090407170045" -->
<!-- sent="Tue, 7 Apr 2009 13:00:33 -0400" -->
<!-- isosent="20090407170033" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac 1857: SM btl hangs when msg &amp;gt;=4k" -->
<!-- id="A5601627-4717-4982-B554-57277DB12A02_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9B72CF4F-6E8D-47F2-A87C-ABEA9C86C2E1_at_cisco.com" -->
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
<strong>Date:</strong> 2009-04-07 13:00:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5804.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5802.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>In reply to:</strong> <a href="5802.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5804.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5804.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is interesting. I cannot trigger this deadlock on my AMD cluster  
<br>
even when I set the sm_min_size to zero. However, on a Intel cluster  
<br>
this can be triggered pretty easily.
<br>
<p>Anyway, I think I finally understood where the problem is coming from.  
<br>
r20952 and r20953 are commits that, in addition to the ones from  
<br>
yesterday, fix the problem. Please read the log on r20953 to see how  
<br>
this happens.
<br>
<p>Of course, please stress it before we move it to the 1.3 branch.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 7, 2009, at 09:16 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; FWIW:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - running osu_bw with mpool_sm_min_size==0 hangs for me on x86_64,  
</span><br>
<span class="quotelev1">&gt; RHEL4U4/6
</span><br>
<span class="quotelev1">&gt; - running osu_bw with mpool_sm_min_size==&lt;large&gt; works for me on  
</span><br>
<span class="quotelev1">&gt; x86_64, RHEL4U4/6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tested this morning with trunk r
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 7, 2009, at 7:07 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; r20948 still hangs, changing mpool_sm_min_size solves it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Apr 7, 2009 at 3:42 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You're right, the sentence was messed-up. My intent was to say that  
</span><br>
<span class="quotelev2">&gt;&gt; I  found the problem, made a fix and once this fix applied to the  
</span><br>
<span class="quotelev2">&gt;&gt; trunk I  was not able to reproduce the deadlock.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But you were able to reproduce the deadlock before you made the fix?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyhow, if I get fresh bits (through r20947) and I back out r20944  
</span><br>
<span class="quotelev2">&gt;&gt; (either in the source code or simply by setting the  
</span><br>
<span class="quotelev2">&gt;&gt; mpool_sm_min_size MCA parameter to 0), I get deadlock.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Based on your description of the bug I forced osu_bw to send 1024  
</span><br>
<span class="quotelev2">&gt;&gt; non- blocking sends (instead of the default 64), and I still don't  
</span><br>
<span class="quotelev2">&gt;&gt; get the  deadlock. I'm trilled ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, that's a good test.  You're sure you had mpool_sm_min_size set  
</span><br>
<span class="quotelev2">&gt;&gt; to 0?  I just don't have the same luck you do.  I get the hang even  
</span><br>
<span class="quotelev2">&gt;&gt; with your fixes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 6, 2009, at 19:56 , Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got some free time (yeh haw) and took a look at the OB1 PML in   
</span><br>
<span class="quotelev2">&gt;&gt; order  to fix the issue. I think I found the problem, as I'm  
</span><br>
<span class="quotelev2">&gt;&gt; unable  to reproduce this error.
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
<span class="quotelev2">&gt;&gt; % setenv OMPI_MCA_mpool_sm_min_size 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; B)  Check that osu_bw.c hangs when using sm and you reach  
</span><br>
<span class="quotelev2">&gt;&gt; rendezvous  message size.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; C)  Introduce your changes and make sure that osu_bw.c runs to   
</span><br>
<span class="quotelev2">&gt;&gt; completion.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you please give it a try with 20946 and  20947 but without 20944?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; osu_bw.c hangs for me.  The PML fix did not seem to work.
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5804.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5802.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>In reply to:</strong> <a href="5802.php">Jeff Squyres: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5804.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5804.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
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
