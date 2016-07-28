<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 23 12:53:33 2007" -->
<!-- isoreceived="20070423165333" -->
<!-- sent="Mon, 23 Apr 2007 12:53:19 -0400" -->
<!-- isosent="20070423165319" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do you switch off paffinity?" -->
<!-- id="04F2A50A-87FB-4463-8350-3EEAD499C241_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.64.0704221737490.12775_at_aragorn.brc.West.Sun.COM" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-23 12:53:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3118.php">Bert Wesarg: "[OMPI users] Call for Help: CPU topology needed!"</a>
<li><strong>Previous message:</strong> <a href="3116.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>In reply to:</strong> <a href="3116.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3120.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Reply:</strong> <a href="3120.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 22, 2007, at 8:46 PM, Mostyn Lewis wrote:
<br>
<p><span class="quotelev1">&gt; More information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca mpi_paffinity_alone 0
</span><br>
<p>Can you describe how you're verifying that the process is actually  
<br>
bound?
<br>
<p><span class="quotelev1">&gt; May I ask I question about the code, which I scanned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see in ompi/runtime/ompi_mpi_params.c you do a:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mca_base_param_reg_int_name(&quot;mpi&quot;, &quot;paffinity_alone&quot;,
</span><br>
<span class="quotelev1">&gt;                                  &quot;If nonzero, assume that this job  
</span><br>
<span class="quotelev1">&gt; is the only (set of) process(es) r
</span><br>
<span class="quotelev1">&gt; unning on each node and bind processes to processors, starting with  
</span><br>
<span class="quotelev1">&gt; processor ID 0&quot;,
</span><br>
<span class="quotelev1">&gt;                                  false, false,
</span><br>
<span class="quotelev1">&gt;                                  (int) ompi_mpi_paffinity_alone,  
</span><br>
<span class="quotelev1">&gt; &amp;value);
</span><br>
<span class="quotelev1">&gt;      ompi_mpi_paffinity_alone = OPAL_INT_TO_BOOL(value);
</span><br>
<p>You're right that we're not checking the return value here, which is  
<br>
bad.  However, this is a pretty stable portion of the code -- I would  
<br>
be surprised if it is failing.
<br>
<p>Have you stepped through this with a debugger to verify if it is  
<br>
actually failing or not?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3118.php">Bert Wesarg: "[OMPI users] Call for Help: CPU topology needed!"</a>
<li><strong>Previous message:</strong> <a href="3116.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>In reply to:</strong> <a href="3116.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3120.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Reply:</strong> <a href="3120.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
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
