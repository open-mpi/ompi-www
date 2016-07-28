<?
$subject_val = "Re: [OMPI devel] hcoll destruction via MPI attribute";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 11:52:35 2014" -->
<!-- isoreceived="20140109165235" -->
<!-- sent="Thu, 9 Jan 2014 16:52:33 +0000" -->
<!-- isosent="20140109165233" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hcoll destruction via MPI attribute" -->
<!-- id="394226F3-ADDB-4C55-84C4-9A0612BE5F90_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A3EC16AEB_at_MTIDAG01.mtl.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 11:52:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13631.php">Jeff Squyres (jsquyres): "[OMPI devel] Paul H build on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13629.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>In reply to:</strong> <a href="13627.php">Joshua Ladd: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13632.php">Joshua Ladd: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13632.php">Joshua Ladd: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 9, 2014, at 11:00 AM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hcoll uses the PML as an &quot;OOB&quot; to bootstrap itself. When a communicator is destroyed, by the time we destroy the hcoll module, the communicator context is no longer valid and any pending operations that rely on its existence will fail. In particular, we have a non-blocking synchronization barrier that may be in progress when the communicator is destroyed.
</span><br>
<p>Can you explain this a little more?  Do you mean you have a pending MPI_Ibarrier running on that communicator?  (i.e., the ibarrier has started but not completed)  Or you have some started-but-not-completed MPI_Isends/MPI_Irecvs?
<br>
<p>(using the PML/coll equivalents of these of course -- not the top-level MPI_* foo functions)
<br>
<p>Or are you saying that you need the destruction of the hcoll module on a given communicator to be synchronous between all processes in that communicator?
<br>
<p><span class="quotelev1">&gt; Registering the delete callback allows us to finish these operations because the context is still valid inside of this callback. The commented out code is the &quot;prototype&quot; protocol that attempted to handle this scenario in an entirely different (and more complex) way. It is not needed now. We don't want to introduce solutions that are OMPI specific, because we need to be able to integrate hcoll into other runtimes. We considered approaching the community about changing the comm destroy flow in OMPI to keep the context alive long enough to complete our synchronization barriers, but then the solution is tied to a particular MPI
</span><br>
<p>I'm not quite sure I understand -- the hcoll module (where this code is located) is completely OMPI-specific.  I thought that libhcoll was your independent-of-MPI-implementations portion of this code...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13631.php">Jeff Squyres (jsquyres): "[OMPI devel] Paul H build on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13629.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>In reply to:</strong> <a href="13627.php">Joshua Ladd: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13632.php">Joshua Ladd: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13632.php">Joshua Ladd: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
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
