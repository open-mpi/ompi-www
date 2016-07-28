<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  1 13:52:44 2010" -->
<!-- isoreceived="20100601175244" -->
<!-- sent="Tue, 1 Jun 2010 13:52:39 -0400" -->
<!-- isosent="20100601175239" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="0FBB40AD-22D5-45B1-AB6C-F9648B50D3FD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6D97031E-0C1A-4485-BC10-D891D3EC3487_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-01 13:52:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8013.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8011.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/8007.php">Ralph Castain: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8016.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8016.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 31, 2010, at 10:27 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Just curious - your proposed fix sounds exactly like what was done in the OPAL SOS work. Are you therefore proposing to use SOS to provide a more informational status return?
</span><br>
<p>No, I think Sylvain's talking about slightly modifying the existing mechanism:
<br>
<p>1. Return OMPI_SUCCESS: bml then obeys whatever is in the connectivity bitmask -- even if the bitmask indicates that this BTL can't talk to anyone.
<br>
<p>2. Return != OMPI_SUCCESS: treat the problem as a fatal error.
<br>
<p>I think Sylvain's point is that OMPI_SUCCESS can be returned for non-fatal errors if a BTL just wants to be ignored.  In such cases, the BTL can just set its connectivity mask to 0. This will allow OMPI to continue the job.  
<br>
<p>For example, if verbs is borked (e.g., can't create CQ's), it can return a connectivity mask of 0 and OMPI_SUCCESS.  The BML is then free to fail over to some other BTL.
<br>
<p>But if a malloc() fails down in some BTL, then the job is hosed anyway -- so why not return != OMPI_SUCCESS and try to abort cleanly?
<br>
<p>For sites that want to treat verbs failures as fatal, we can add a new MCA param either in the openib BTL that says &quot;treat all init failures as fatal to the job&quot; or perhaps a new MCA param in R2 that says &quot;if the connectivity map for BTL &lt;list&gt; is empty, abort the job&quot;.  Or something like that.
<br>
<p><span class="quotelev1">&gt; If so, then it would seem the only real dispute here is: is there -any- condition whereby a given BTL should have the authority to tell OMPI to terminate an application, even if other BTLs could still function?
</span><br>
<p>I think his cited example was if malloc() fails.
<br>
<p>I could see some sites wanting to abort if their high-speed network was down (e.g., MX or openib BTLs failed to init) -- they wouldn't want OMPI to fail over to TCP.  The flip side of this argument is that the sysadmin could set &quot;btl = ^tcp&quot; in the system file, and then if openib/mx fails, the BML will abort because some peers won't be reachable.
<br>
<p><span class="quotelev1">&gt; I understand that the current code may not yet support that operation, but I do believe that was the intent of the design. So only the case where -all- BTLs say &quot;I can't do it&quot; would result in termination. Rather than change that design, I believe the intent is to work towards completing that implementation. In the interim, it would seem most sensible to me that we add an MCA param that specifies the termination behavior (i.e., attempt to continue or terminate on first fatal BTL error).
</span><br>
<p>Agreed.
<br>
<p>I think that there are multiple different exit conditions from a BTL init:
<br>
<p>1. BTL succeeded in initializing, and some peers are reachable
<br>
2. BTL succeeded in initializing, and no peers are reachable
<br>
3. BTL failed to initialize, but that failure is localized to the BTL (e.g., openib failed to create a CQ)
<br>
4. BTL failed to initialize, and the error is global in nature (e.g., malloc() fail)
<br>
<p>I think it might be a site-specific decision as to whether to abort the job for condition 3 or not.  Today we default to not failing and pair that with an indirect method of failing (i.e., setting btl=^tcp).
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="8013.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8011.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/8007.php">Ralph Castain: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8016.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8016.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
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
