<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  9 13:32:28 2012" -->
<!-- isoreceived="20120309183228" -->
<!-- sent="Fri, 9 Mar 2012 11:32:24 -0700 (MST)" -->
<!-- isosent="20120309183224" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106" -->
<!-- id="alpine.OSX.2.00.1203091127080.711_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D09D0227-542C-4819-A7AB-273EEB7A0B8C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-09 13:32:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10701.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Previous message:</strong> <a href="10699.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>In reply to:</strong> <a href="10699.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10701.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Reply:</strong> <a href="10701.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Reply:</strong> <a href="10703.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 9 Mar 2012, Jeffrey Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 9, 2012, at 1:14 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The hang occurs because there is nothing on the lru to deregister and ibv_reg_mr (or GNI_MemRegister in the uGNI case) fails. The PML then puts the request on its rdma pending list and continues. If any message comes in the rdma pending list is progressed. If not it hangs indefinitely!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unlike Jeff, I'm not in favor of adding bandages. If the cause is understood, then there _is_ a fix, and that fix should be the target of any efforts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fix that Nathan proposes is not a complete fix -- we can still run out of memory and hang.  You should read the open tickets and prior emails we have sent about this -- Nathan's fix merely delays when we will run out of registered memory.  It does not solve the underlying problem.
</span><br>
<p>Correct.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; In general I have found the underlying cause of the hang is due to an imbalance of registrations between processes on a node. i.e the hung process has an empty lru but other processes could deregister. I am working on a new mpool (grdma) to handle the imbalance. The new mpool will allow a process to request that one of its peers deregisters from it lru if possible. I have a working proof of concept implementation that uses a posix shmem segment and a progress function to handle signaling and dereferencing. With it I no longer see hangs with IMB Alltoall/Alltoallv on uGNI (without putting an artificial limit on the number of registrations). I will test the mpool on infiniband later today.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If a solution already exists I don't see why we have to have the message code. Based on its urgency, I'm confident your patch will make its way into the 1.5 quite easily.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Depending on the timing, this might go to 1.6 (1.5.5 has waited for too long, and this is not a regression).  Keep in mind that the problem has been around for *a long, long time*, which is why I approved the diag message (i.e., because a real solution is still nowhere in sight).  The real issue is that we can still run out of registered memory *and there is nothing left to deregister*.  The real solution there is that the PML should fall back to a different protocol, but I'm told that doesn't happen and will require a bunch of work to make work properly.
</span><br>
<p>An mpool that is aware of local processes lru's will solve the problem in most cases (all that I have seen) but yes, we need to rework the pml to handle the remaining cases. There are two things that need to be changed (from what I can tell):
<br>
<p>&nbsp;&nbsp;1) allow rget to fallback to send/put depending on the failure (I have fallback on put implemented in my branch-- and in my btl).
<br>
&nbsp;&nbsp;2) need to devise new criteria on when we should progress the rdma_pending list to avoid deadlock.
<br>
<p>#1 is fairly simple and I haven't given much though to #2.
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10701.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Previous message:</strong> <a href="10699.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>In reply to:</strong> <a href="10699.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10701.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Reply:</strong> <a href="10701.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Reply:</strong> <a href="10703.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
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
