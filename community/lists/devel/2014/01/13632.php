<?
$subject_val = "Re: [OMPI devel] hcoll destruction via MPI attribute";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 12:05:37 2014" -->
<!-- isoreceived="20140109170537" -->
<!-- sent="Thu, 9 Jan 2014 17:05:31 +0000" -->
<!-- isosent="20140109170531" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hcoll destruction via MPI attribute" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A3EC16CEB_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="394226F3-ADDB-4C55-84C4-9A0612BE5F90_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] hcoll destruction via MPI attribute<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 12:05:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13633.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Previous message:</strong> <a href="13631.php">Jeff Squyres (jsquyres): "[OMPI devel] Paul H build on Solaris"</a>
<li><strong>In reply to:</strong> <a href="13630.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13633.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13633.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13685.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See inline...
<br>
<p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: Thursday, January 09, 2014 11:53 AM
<br>
To: Open MPI Developers
<br>
Cc: Devendar Bureddy; valentin (valentin.petrov_at_[hidden]) (valentin.petrov_at_[hidden]); Mike Dubman
<br>
Subject: Re: [OMPI devel] hcoll destruction via MPI attribute
<br>
<p>On Jan 9, 2014, at 11:00 AM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hcoll uses the PML as an &quot;OOB&quot; to bootstrap itself. When a communicator is destroyed, by the time we destroy the hcoll module, the communicator context is no longer valid and any pending operations that rely on its existence will fail. In particular, we have a non-blocking synchronization barrier that may be in progress when the communicator is destroyed.
</span><br>
<p>Can you explain this a little more?  Do you mean you have a pending MPI_Ibarrier running on that communicator?  (i.e., the ibarrier has started but not completed)  Or you have some started-but-not-completed MPI_Isends/MPI_Irecvs?
<br>
<p>(using the PML/coll equivalents of these of course -- not the top-level MPI_* foo functions)
<br>
<p>Or are you saying that you need the destruction of the hcoll module on a given communicator to be synchronous between all processes in that communicator?
<br>
<p>[Josh] We have a recursive doubling algorithm in progress implemented with PML send/recvs, more accurately , with &quot;RTE_isend/RTE_irecv&quot; functions, which, in the case of OMPI are PML calls.
<br>
<p><span class="quotelev1">&gt; Registering the delete callback allows us to finish these operations because the context is still valid inside of this callback. The commented out code is the &quot;prototype&quot; protocol that attempted to handle this scenario in an entirely different (and more complex) way. It is not needed now. We don't want to introduce solutions that are OMPI specific, because we need to be able to integrate hcoll into other runtimes. We considered approaching the community about changing the comm destroy flow in OMPI to keep the context alive long enough to complete our synchronization barriers, but then the solution is tied to a particular MPI
</span><br>
<p>I'm not quite sure I understand -- the hcoll module (where this code is located) is completely OMPI-specific.  I thought that libhcoll was your independent-of-MPI-implementations portion of this code...?
<br>
<p>[Josh] The hcoll module is the integration layer. HCOLL is completely standalone. When you create a new communicator, you create a new hcoll module whih in turn creates a new &quot;hcoll context&quot;.  We have defined what we call the RTE interface, which is an API that runtimes need to implement in order to use HCOLL. Basically, the runtime needs to provide HCOLL with a handle to a non-blocking send and receive, implement some callbacks, and pass in a group handle. HCOLL is completely MPI agnostic. 
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13633.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Previous message:</strong> <a href="13631.php">Jeff Squyres (jsquyres): "[OMPI devel] Paul H build on Solaris"</a>
<li><strong>In reply to:</strong> <a href="13630.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13633.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13633.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13685.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
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
