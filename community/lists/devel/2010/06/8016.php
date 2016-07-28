<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 04:39:05 2010" -->
<!-- isoreceived="20100602083905" -->
<!-- sent="Wed, 2 Jun 2010 10:43:42 +0200 (CEST)" -->
<!-- isosent="20100602084342" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="alpine.DEB.2.00.1006021040450.3819_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0FBB40AD-22D5-45B1-AB6C-F9648B50D3FD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BTL add procs errors<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 04:43:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8017.php">Number Cruncher: "[OMPI devel] Wrong documentation for MPI_Comm_size manual page"</a>
<li><strong>Previous message:</strong> <a href="8015.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8012.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8013.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Couldn't explain it better. Thanks Jeff for the summary !
<br>
<p>On Tue, 1 Jun 2010, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 31, 2010, at 10:27 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just curious - your proposed fix sounds exactly like what was done in 
</span><br>
<span class="quotelev2">&gt;&gt; the OPAL SOS work. Are you therefore proposing to use SOS to provide a 
</span><br>
<span class="quotelev2">&gt;&gt; more informational status return?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, I think Sylvain's talking about slightly modifying the existing 
</span><br>
<span class="quotelev1">&gt; mechanism:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Return OMPI_SUCCESS: bml then obeys whatever is in the connectivity 
</span><br>
<span class="quotelev1">&gt; bitmask -- even if the bitmask indicates that this BTL can't talk to 
</span><br>
<span class="quotelev1">&gt; anyone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Return != OMPI_SUCCESS: treat the problem as a fatal error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think Sylvain's point is that OMPI_SUCCESS can be returned for 
</span><br>
<span class="quotelev1">&gt; non-fatal errors if a BTL just wants to be ignored.  In such cases, the 
</span><br>
<span class="quotelev1">&gt; BTL can just set its connectivity mask to 0. This will allow OMPI to 
</span><br>
<span class="quotelev1">&gt; continue the job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, if verbs is borked (e.g., can't create CQ's), it can return 
</span><br>
<span class="quotelev1">&gt; a connectivity mask of 0 and OMPI_SUCCESS.  The BML is then free to fail 
</span><br>
<span class="quotelev1">&gt; over to some other BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But if a malloc() fails down in some BTL, then the job is hosed anyway 
</span><br>
<span class="quotelev1">&gt; -- so why not return != OMPI_SUCCESS and try to abort cleanly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For sites that want to treat verbs failures as fatal, we can add a new 
</span><br>
<span class="quotelev1">&gt; MCA param either in the openib BTL that says &quot;treat all init failures as 
</span><br>
<span class="quotelev1">&gt; fatal to the job&quot; or perhaps a new MCA param in R2 that says &quot;if the 
</span><br>
<span class="quotelev1">&gt; connectivity map for BTL &lt;list&gt; is empty, abort the job&quot;.  Or something 
</span><br>
<span class="quotelev1">&gt; like that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so, then it would seem the only real dispute here is: is there -any- 
</span><br>
<span class="quotelev2">&gt;&gt; condition whereby a given BTL should have the authority to tell OMPI to 
</span><br>
<span class="quotelev2">&gt;&gt; terminate an application, even if other BTLs could still function?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think his cited example was if malloc() fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could see some sites wanting to abort if their high-speed network was 
</span><br>
<span class="quotelev1">&gt; down (e.g., MX or openib BTLs failed to init) -- they wouldn't want OMPI 
</span><br>
<span class="quotelev1">&gt; to fail over to TCP.  The flip side of this argument is that the 
</span><br>
<span class="quotelev1">&gt; sysadmin could set &quot;btl = ^tcp&quot; in the system file, and then if 
</span><br>
<span class="quotelev1">&gt; openib/mx fails, the BML will abort because some peers won't be 
</span><br>
<span class="quotelev1">&gt; reachable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I understand that the current code may not yet support that operation, 
</span><br>
<span class="quotelev2">&gt;&gt; but I do believe that was the intent of the design. So only the case 
</span><br>
<span class="quotelev2">&gt;&gt; where -all- BTLs say &quot;I can't do it&quot; would result in termination. 
</span><br>
<span class="quotelev2">&gt;&gt; Rather than change that design, I believe the intent is to work towards 
</span><br>
<span class="quotelev2">&gt;&gt; completing that implementation. In the interim, it would seem most 
</span><br>
<span class="quotelev2">&gt;&gt; sensible to me that we add an MCA param that specifies the termination 
</span><br>
<span class="quotelev2">&gt;&gt; behavior (i.e., attempt to continue or terminate on first fatal BTL 
</span><br>
<span class="quotelev2">&gt;&gt; error).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that there are multiple different exit conditions from a BTL 
</span><br>
<span class="quotelev1">&gt; init:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. BTL succeeded in initializing, and some peers are reachable 2. BTL 
</span><br>
<span class="quotelev1">&gt; succeeded in initializing, and no peers are reachable 3. BTL failed to 
</span><br>
<span class="quotelev1">&gt; initialize, but that failure is localized to the BTL (e.g., openib 
</span><br>
<span class="quotelev1">&gt; failed to create a CQ) 4. BTL failed to initialize, and the error is 
</span><br>
<span class="quotelev1">&gt; global in nature (e.g., malloc() fail)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think it might be a site-specific decision as to whether to abort the 
</span><br>
<span class="quotelev1">&gt; job for condition 3 or not.  Today we default to not failing and pair 
</span><br>
<span class="quotelev1">&gt; that with an indirect method of failing (i.e., setting btl=^tcp).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8017.php">Number Cruncher: "[OMPI devel] Wrong documentation for MPI_Comm_size manual page"</a>
<li><strong>Previous message:</strong> <a href="8015.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8012.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8013.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
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
