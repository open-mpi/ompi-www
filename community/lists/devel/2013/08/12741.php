<?
$subject_val = "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 15:41:41 2013" -->
<!-- isoreceived="20130819194141" -->
<!-- sent="Mon, 19 Aug 2013 14:41:43 -0500" -->
<!-- isosent="20130819194143" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC" -->
<!-- id="013f01ce9d14$21b28f20$6517ad60$_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="00f801ce9cff$aacb3240$006196c0$_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-19 15:41:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12742.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12740.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>In reply to:</strong> <a href="12740.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12742.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12742.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I confirmed that this is a regression from 1.7.1...
<br>
<p>I'll see if I can figure out what's going on...
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Steve Wise
</span><br>
<span class="quotelev1">&gt; Sent: Monday, August 19, 2013 12:15 PM
</span><br>
<span class="quotelev1">&gt; To: 'Jeff Squyres (jsquyres)'
</span><br>
<span class="quotelev1">&gt; Cc: devel_at_[hidden]; 'Indranil Choudhury'
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres (jsquyres) [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Monday, August 19, 2013 12:06 PM
</span><br>
<span class="quotelev2">&gt; &gt; To: Steve Wise
</span><br>
<span class="quotelev2">&gt; &gt; Cc: &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Not offhand.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Given the lack of iWARP testing in the community, it's not entirely unsurprising that this
</span><br>
broke.
<br>
<span class="quotelev1">&gt; Will
</span><br>
<span class="quotelev2">&gt; &gt; Chelsio setup some Open MPI + MTT to track this kind of stuff regularly?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +Indranil from Chelsio.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They used to run MTT.  They do regularly test OpenMPI, but haven't tested 1.7.2 yet or I would
</span><br>
have
<br>
<span class="quotelev1">&gt; seen an internal bug on this. :)  They have run 1.7.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indranil, do you all still run Open MPI + MTT?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Steve.
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
<li><strong>Next message:</strong> <a href="12742.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12740.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>In reply to:</strong> <a href="12740.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12742.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12742.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
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
