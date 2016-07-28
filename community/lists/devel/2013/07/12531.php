<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  4 04:35:09 2013" -->
<!-- isoreceived="20130704083509" -->
<!-- sent="Thu, 4 Jul 2013 10:34:54 +0200" -->
<!-- isosent="20130704083454" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument" -->
<!-- id="D798DB95-D3BA-4DCE-9025-FFA922BEDCF0_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CDF85918.11D65%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-04 04:34:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12532.php">Ralph Castain: "[OMPI devel] RFC: update to libevent 2021"</a>
<li><strong>Previous message:</strong> <a href="12530.php">Ralph Castain: "[OMPI devel] RFC: revised ORTE error handling"</a>
<li><strong>In reply to:</strong> <a href="12528.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
RFC completed at revision r28722.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Jul 2, 2013, at 18:17 , &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff thought it was me and I thought it was you, so I think we're ok :).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/2/13 9:45 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I definitively wonder why ? Whoever was the &quot;resistance&quot; might have had a
</span><br>
<span class="quotelev2">&gt;&gt; good (r at least valid) orison. I can't find any trace of your patch, but
</span><br>
<span class="quotelev2">&gt;&gt; I would definitively be interested to take a look at it (if you can
</span><br>
<span class="quotelev2">&gt;&gt; resend it) to avoid triggering the same type of opposition.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 2, 2013, at 17:17 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I submitted a patch like this a while ago, and it met violent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resistance.  :-)  Although no one on the call today remembers exactly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; who raised the resistance...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 2, 2013, at 10:40 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 7/2/13 8:22 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Our macros for the OMPI-level free list had one extra argument, a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; possible return value to signal that the operation of retrieving the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; element from the free list failed. However in this case the returned
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pointer was set to NULL as well, so the error code was redundant.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Moreover, this was a continuous source of warnings when the picky mode
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; was on.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The attached parch remove the rc argument from the OMPI_FREE_LIST_GET
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and OMPI_FREE_LIST_WAIT macros, and change to check if the item is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; NULL instead of using the return code.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Deadline: July 4th
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Works for me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Scalable System Software Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12532.php">Ralph Castain: "[OMPI devel] RFC: update to libevent 2021"</a>
<li><strong>Previous message:</strong> <a href="12530.php">Ralph Castain: "[OMPI devel] RFC: revised ORTE error handling"</a>
<li><strong>In reply to:</strong> <a href="12528.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
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
