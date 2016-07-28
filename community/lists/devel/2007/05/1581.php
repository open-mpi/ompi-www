<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 27 12:23:34 2007" -->
<!-- isoreceived="20070527162334" -->
<!-- sent="Sun, 27 May 2007 10:23:23 -0600" -->
<!-- isosent="20070527162323" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768" -->
<!-- id="C40DC68E-E8FA-485A-B6C8-C1EF11D6C6BF_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070527134911.GB4715_at_minantech.com" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-27 12:23:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1582.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1580.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1579.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1582.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1582.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1586.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that MCA_BTL_DES_FLAGS_PRIORITY  was meant to indicate
</span><br>
<span class="quotelev2">&gt;&gt; that the fragment was higher priority, but the fragment isn't higher
</span><br>
<span class="quotelev2">&gt;&gt; priority. It simply needs to be ordered w.r.t. a previous fragment,
</span><br>
<span class="quotelev2">&gt;&gt; an RDMA in this case.
</span><br>
<span class="quotelev1">&gt; But after the change priority flags is totally ignored.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>So the priority flag was broken I think, in OpenIB we used the  
<br>
priority flag to choose a QP on which to send the fragment, but there  
<br>
was no checking for if the fragment could be sent on the specified  
<br>
QP. So a max send size fragment could be set as priority and the BTL  
<br>
would use the high priority QP and we would go bang. This is how I  
<br>
read the code, I might have missed something.
<br>
<p>If the priority flag is simply a &quot;hint&quot; and has hard requirements  
<br>
than we can still use it in the OpenIB BTL but it won't have any  
<br>
effect as only eager size fragments can be marked high priority and  
<br>
we already send these over the high priority QP.
<br>
<p>- Galen
<br>
<p><p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; &lt;patch.diff&gt;
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
<li><strong>Next message:</strong> <a href="1582.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1580.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1579.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1582.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1582.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1586.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
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
