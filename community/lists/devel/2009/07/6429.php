<?
$subject_val = "Re: [OMPI devel] DDT and spawn issue?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 12:30:06 2009" -->
<!-- isoreceived="20090715163006" -->
<!-- sent="Wed, 15 Jul 2009 12:18:09 -0400" -->
<!-- isosent="20090715161809" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] DDT and spawn issue?" -->
<!-- id="D6E1C25F-D3F7-4EFC-B86C-FAB68FA0746D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200907151204.50816.keller_at_ornl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 12:18:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6430.php">George Bosilca: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Previous message:</strong> <a href="6428.php">Eugene Loh: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>In reply to:</strong> <a href="6427.php">Rainer Keller: "Re: [OMPI devel] DDT and spawn issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6432.php">George Bosilca: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Reply:</strong> <a href="6432.php">George Bosilca: "Re: [OMPI devel] DDT and spawn issue?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perhaps we should add a requirement for testing on 2-3 different  
<br>
systems before long-term (or &quot;big change&quot;) branches like this come to  
<br>
the trunk?  I say this because it seems like at least some of these  
<br>
problems were based on bad luck -- i.e., the stuff worked on the  
<br>
platform that it was being tested and developed on, even though there  
<br>
are bugs left.  Having fallen victim to this myself many times  
<br>
(&quot;worked for me on Cisco machines!  I dunno why it's failing for  
<br>
you... :-(&quot;), I think we all recognize the value of just running the  
<br>
same code on someone else's systems -- it has a good tendency to turn  
<br>
up issues that don't show up on yours.  I'm not trying to say that  
<br>
every little trunk commit needs to be validated -- but &quot;big&quot; changes  
<br>
like this could certainly benefit from multiple validations.
<br>
<p>Cisco is very willing to be a 2nd platform for testing for stuff that  
<br>
we can run without too much trouble, especially via MTT (e.g., I  
<br>
already have the right kind of networks to test, etc.).
<br>
<p>BTW, is anyone going to comment about the latency issue that I asked  
<br>
about?
<br>
<p>(in case you can't tell, I'm moderately displeased about how this  
<br>
whole branch came to the trunk... :-\ )
<br>
<p><p><p>On Jul 15, 2009, at 12:04 PM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; Ralph and Edgar send fwd an email about this.
</span><br>
<span class="quotelev1">&gt; We (George and myselve) are currently looking into this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With the changes we have I can get IBM/spawn to work &quot;sometimes&quot;, aka
</span><br>
<span class="quotelev1">&gt; sometimes, it segfaults.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday 15 July 2009 11:50:13 am Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I [very briefly] read about the DDT spawn issues, so I went to  
</span><br>
<span class="quotelev1">&gt; look at
</span><br>
<span class="quotelev2">&gt; &gt; ompi/op/op.c.  I notice that there's a new comment above the op
</span><br>
<span class="quotelev2">&gt; &gt; datatype&lt;--&gt;op map construction area that says:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      /* XXX TODO */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; svn blame says:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   21641   rusraink     /* XXX TODO */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; r21641 is the big merge from the past weekend where the DDT split  
</span><br>
<span class="quotelev1">&gt; came
</span><br>
<span class="quotelev2">&gt; &gt; in.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Has this area been looked at and the comment is out of date?  Or  
</span><br>
<span class="quotelev1">&gt; does
</span><br>
<span class="quotelev2">&gt; &gt; it need to be updated with new mappings?  (I honestly have not  
</span><br>
<span class="quotelev1">&gt; looked
</span><br>
<span class="quotelev2">&gt; &gt; any farther than this -- the new comment caught my eye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev1">&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="6430.php">George Bosilca: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Previous message:</strong> <a href="6428.php">Eugene Loh: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>In reply to:</strong> <a href="6427.php">Rainer Keller: "Re: [OMPI devel] DDT and spawn issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6432.php">George Bosilca: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Reply:</strong> <a href="6432.php">George Bosilca: "Re: [OMPI devel] DDT and spawn issue?"</a>
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
