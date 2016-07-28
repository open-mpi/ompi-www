<?
$subject_val = "Re: [OMPI users] Infiniband error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 12 10:45:15 2010" -->
<!-- isoreceived="20101112154515" -->
<!-- sent="Fri, 12 Nov 2010 10:45:11 -0500" -->
<!-- isosent="20101112154511" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband error" -->
<!-- id="DA887CA0-5CD0-4EC7-968E-DF183918DC1E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTim16LV_akYct0HumYaowAtxAE-Mbc=MJqmFRtOu_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Infiniband error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-12 10:45:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14743.php">Jeff Squyres: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<li><strong>Previous message:</strong> <a href="14741.php">Jeff Squyres: "[OMPI users] Open MPI at SC'10"</a>
<li><strong>In reply to:</strong> <a href="14695.php">Ondrej Marsalek: "[OMPI users] Infiniband error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It would be best if an IB vendor replies (hint hint!), but it is likely that you have some kind of hardware issue on that node (e.g., a bad / flakey HCA, etc.).  You should probably run a full set of layer-0 diagnostics on your fabric to make sure it's clean.
<br>
<p>I say this because back when Cisco was an IB vendor, when I ran into weird-o problems like this, they were almost always due to hardware issues (e.g., replace the HCA and then all was fine).
<br>
<p>Consult your IB vendor's documentation on how to run layer-0 diagnostics.  
<br>
<p><p>On Nov 4, 2010, at 7:39 PM, Ondrej Marsalek wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to ask for help with understanding an error message I get
</span><br>
<span class="quotelev1">&gt; when communication using Open MPI 1.4.1 over Infiniband fails. After
</span><br>
<span class="quotelev1">&gt; several hours of operation, communication with one particular node
</span><br>
<span class="quotelev1">&gt; (f24) fails with something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [[20265,1],79][btl_openib_component.c:2951:handle_wc] from f05 to: f24
</span><br>
<span class="quotelev1">&gt; error polling LP CQ with status INVALID REQUEST ERROR status number 9
</span><br>
<span class="quotelev1">&gt; for wr_id 309134592 opcode 1  vendor error 138 qp_idx 2
</span><br>
<span class="quotelev1">&gt; [[20265,1],39][btl_openib_component.c:2951:handle_wc] from f24 to: f05
</span><br>
<span class="quotelev1">&gt; error polling LP CQ with status WORK REQUEST FLUSHED ERROR status
</span><br>
<span class="quotelev1">&gt; number 5 for wr_id 313731584 opcode 1  vendor error 249 qp_idx 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is reproducible in the sense that it happens repeatedly, but so
</span><br>
<span class="quotelev1">&gt; far I was not able to create a test case that would trigger the
</span><br>
<span class="quotelev1">&gt; problem. It happens after hours of smooth operation. One of the nodes
</span><br>
<span class="quotelev1">&gt; involved is always f24. When I leave it out of the job, I get stable a
</span><br>
<span class="quotelev1">&gt; run with no trouble. Is this a hardware error or something else? Is
</span><br>
<span class="quotelev1">&gt; there something I can do try to locate the problem better? Where can I
</span><br>
<span class="quotelev1">&gt; find what the error codes mean?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ondrej Marsalek
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14743.php">Jeff Squyres: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<li><strong>Previous message:</strong> <a href="14741.php">Jeff Squyres: "[OMPI users] Open MPI at SC'10"</a>
<li><strong>In reply to:</strong> <a href="14695.php">Ondrej Marsalek: "[OMPI users] Infiniband error"</a>
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
