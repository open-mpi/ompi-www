<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 27 14:41:46 2007" -->
<!-- isoreceived="20070527184146" -->
<!-- sent="Sun, 27 May 2007 21:41:39 +0300" -->
<!-- isosent="20070527184139" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768" -->
<!-- id="20070527184139.GB23291_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C40DC68E-E8FA-485A-B6C8-C1EF11D6C6BF_at_lanl.gov" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-27 14:41:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1587.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14780"</a>
<li><strong>Previous message:</strong> <a href="1585.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1581.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, May 27, 2007 at 10:23:23AM -0600, Galen Shipman wrote:
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The problem is that MCA_BTL_DES_FLAGS_PRIORITY  was meant to indicate
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that the fragment was higher priority, but the fragment isn't higher
</span><br>
<span class="quotelev3">&gt; &gt;&gt; priority. It simply needs to be ordered w.r.t. a previous fragment,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; an RDMA in this case.
</span><br>
<span class="quotelev2">&gt; &gt; But after the change priority flags is totally ignored.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the priority flag was broken I think, in OpenIB we used the  
</span><br>
<span class="quotelev1">&gt; priority flag to choose a QP on which to send the fragment, but there  
</span><br>
<span class="quotelev1">&gt; was no checking for if the fragment could be sent on the specified  
</span><br>
<span class="quotelev1">&gt; QP. So a max send size fragment could be set as priority and the BTL  
</span><br>
<span class="quotelev1">&gt; would use the high priority QP and we would go bang. This is how I  
</span><br>
<span class="quotelev1">&gt; read the code, I might have missed something.
</span><br>
You a right. We kinda rely on PML here. PML always send &quot;max send&quot; sized
<br>
packets with low priority.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the priority flag is simply a &quot;hint&quot; and has hard requirements  
</span><br>
<span class="quotelev1">&gt; than we can still use it in the OpenIB BTL but it won't have any  
</span><br>
<span class="quotelev1">&gt; effect as only eager size fragments can be marked high priority and  
</span><br>
<span class="quotelev1">&gt; we already send these over the high priority QP.
</span><br>
<p>Sometimes prepare_src may return eager sized fragment and it will be
<br>
sent on low priority QP.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1587.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14780"</a>
<li><strong>Previous message:</strong> <a href="1585.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1581.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
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
