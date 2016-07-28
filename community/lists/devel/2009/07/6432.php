<?
$subject_val = "Re: [OMPI devel] DDT and spawn issue?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 15:57:26 2009" -->
<!-- isoreceived="20090715195726" -->
<!-- sent="Wed, 15 Jul 2009 15:57:16 -0400" -->
<!-- isosent="20090715195716" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] DDT and spawn issue?" -->
<!-- id="1391D9A1-D598-4A44-88CB-BD5811A7708F_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D6E1C25F-D3F7-4EFC-B86C-FAB68FA0746D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] DDT and spawn issue?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 15:57:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6433.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Previous message:</strong> <a href="6431.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>In reply to:</strong> <a href="6429.php">Jeff Squyres: "Re: [OMPI devel] DDT and spawn issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6458.php">Jeff Squyres: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Reply:</strong> <a href="6458.php">Jeff Squyres: "Re: [OMPI devel] DDT and spawn issue?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually I don't think this will help. I looked on MTT and there are  
<br>
no errors related to this (logically all reductions should have  
<br>
failed) ... and MTT is supposed to run on several platforms. What  
<br>
happens inside is really strange, but as we do the same mistake when  
<br>
we look-up the op as hen we store it, this works on most cases.  
<br>
Moreover, even with the op corrected we still see segfaults, and it  
<br>
looks more and more as some memory overwrite problem... Before the  
<br>
commit we even test it on a Sicortex machine (which is clearly a  
<br>
different architecture than the x86_64) and this didn't trigger any  
<br>
errors either.
<br>
<p>Regarding the latency issue, there is not much to say about. The  
<br>
platform we tested on is clearly older than what other people test on,  
<br>
but this is all about. The two versions (before and after the data- 
<br>
type move) have the same latency, there is no reason to focus on the  
<br>
latency number.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Jul 15, 2009, at 12:18 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Perhaps we should add a requirement for testing on 2-3 different  
</span><br>
<span class="quotelev1">&gt; systems before long-term (or &quot;big change&quot;) branches like this come  
</span><br>
<span class="quotelev1">&gt; to the trunk?  I say this because it seems like at least some of  
</span><br>
<span class="quotelev1">&gt; these problems were based on bad luck -- i.e., the stuff worked on  
</span><br>
<span class="quotelev1">&gt; the platform that it was being tested and developed on, even though  
</span><br>
<span class="quotelev1">&gt; there are bugs left.  Having fallen victim to this myself many times  
</span><br>
<span class="quotelev1">&gt; (&quot;worked for me on Cisco machines!  I dunno why it's failing for  
</span><br>
<span class="quotelev1">&gt; you... :-(&quot;), I think we all recognize the value of just running the  
</span><br>
<span class="quotelev1">&gt; same code on someone else's systems -- it has a good tendency to  
</span><br>
<span class="quotelev1">&gt; turn up issues that don't show up on yours.  I'm not trying to say  
</span><br>
<span class="quotelev1">&gt; that every little trunk commit needs to be validated -- but &quot;big&quot;  
</span><br>
<span class="quotelev1">&gt; changes like this could certainly benefit from multiple validations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cisco is very willing to be a 2nd platform for testing for stuff  
</span><br>
<span class="quotelev1">&gt; that we can run without too much trouble, especially via MTT (e.g.,  
</span><br>
<span class="quotelev1">&gt; I already have the right kind of networks to test, etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, is anyone going to comment about the latency issue that I asked  
</span><br>
<span class="quotelev1">&gt; about?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (in case you can't tell, I'm moderately displeased about how this  
</span><br>
<span class="quotelev1">&gt; whole branch came to the trunk... :-\ )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 15, 2009, at 12:04 PM, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; Ralph and Edgar send fwd an email about this.
</span><br>
<span class="quotelev2">&gt;&gt; We (George and myselve) are currently looking into this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With the changes we have I can get IBM/spawn to work &quot;sometimes&quot;, aka
</span><br>
<span class="quotelev2">&gt;&gt; sometimes, it segfaults.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Rainer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wednesday 15 July 2009 11:50:13 am Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I [very briefly] read about the DDT spawn issues, so I went to  
</span><br>
<span class="quotelev2">&gt;&gt; look at
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ompi/op/op.c.  I notice that there's a new comment above the op
</span><br>
<span class="quotelev3">&gt;&gt; &gt; datatype&lt;--&gt;op map construction area that says:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      /* XXX TODO */
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; svn blame says:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   21641   rusraink     /* XXX TODO */
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; r21641 is the big merge from the past weekend where the DDT split  
</span><br>
<span class="quotelev2">&gt;&gt; came
</span><br>
<span class="quotelev3">&gt;&gt; &gt; in.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Has this area been looked at and the comment is out of date?  Or  
</span><br>
<span class="quotelev2">&gt;&gt; does
</span><br>
<span class="quotelev3">&gt;&gt; &gt; it need to be updated with new mappings?  (I honestly have not  
</span><br>
<span class="quotelev2">&gt;&gt; looked
</span><br>
<span class="quotelev3">&gt;&gt; &gt; any farther than this -- the new comment caught my eye)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev2">&gt;&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="6433.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Previous message:</strong> <a href="6431.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>In reply to:</strong> <a href="6429.php">Jeff Squyres: "Re: [OMPI devel] DDT and spawn issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6458.php">Jeff Squyres: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Reply:</strong> <a href="6458.php">Jeff Squyres: "Re: [OMPI devel] DDT and spawn issue?"</a>
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
