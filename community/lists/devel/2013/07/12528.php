<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  2 12:17:56 2013" -->
<!-- isoreceived="20130702161756" -->
<!-- sent="Tue, 2 Jul 2013 16:17:21 +0000" -->
<!-- isosent="20130702161721" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument" -->
<!-- id="CDF85918.11D65%bwbarre_at_sandia.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7AAFDBCE-9C2A-4988-A8A0-66C998D26964_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-02 12:17:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12529.php">Nathan Hjelm: "[OMPI devel] RFC: add performance variable interface to the MCA base"</a>
<li><strong>Previous message:</strong> <a href="12527.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>In reply to:</strong> <a href="12527.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12531.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>Reply:</strong> <a href="12531.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff thought it was me and I thought it was you, so I think we're ok :).
<br>
<p>Brian
<br>
<p>On 7/2/13 9:45 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I definitively wonder why ? Whoever was the &quot;resistance&quot; might have had a
</span><br>
<span class="quotelev1">&gt;good (r at least valid) orison. I can't find any trace of your patch, but
</span><br>
<span class="quotelev1">&gt;I would definitively be interested to take a look at it (if you can
</span><br>
<span class="quotelev1">&gt;resend it) to avoid triggering the same type of opposition.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jul 2, 2013, at 17:17 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I submitted a patch like this a while ago, and it met violent
</span><br>
<span class="quotelev2">&gt;&gt;resistance.  :-)  Although no one on the call today remembers exactly
</span><br>
<span class="quotelev2">&gt;&gt;who raised the resistance...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 2, 2013, at 10:40 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 7/2/13 8:22 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Our macros for the OMPI-level free list had one extra argument, a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;possible return value to signal that the operation of retrieving the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;element from the free list failed. However in this case the returned
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;pointer was set to NULL as well, so the error code was redundant.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Moreover, this was a continuous source of warnings when the picky mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;was on.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The attached parch remove the rc argument from the OMPI_FREE_LIST_GET
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;and OMPI_FREE_LIST_WAIT macros, and change to check if the item is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;NULL instead of using the return code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Deadline: July 4th
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Works for me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Brian W. Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Scalable System Software Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories

</pre>
<p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12528/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12529.php">Nathan Hjelm: "[OMPI devel] RFC: add performance variable interface to the MCA base"</a>
<li><strong>Previous message:</strong> <a href="12527.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>In reply to:</strong> <a href="12527.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12531.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>Reply:</strong> <a href="12531.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
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
