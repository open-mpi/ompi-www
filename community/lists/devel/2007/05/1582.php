<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 27 12:26:44 2007" -->
<!-- isoreceived="20070527162644" -->
<!-- sent="Sun, 27 May 2007 10:26:33 -0600" -->
<!-- isosent="20070527162633" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768" -->
<!-- id="5485842A-FD34-4B68-AB6B-376118200FC5_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-27 12:26:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1583.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14780"</a>
<li><strong>Previous message:</strong> <a href="1581.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1581.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1586.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
doh,, correction..
<br>
<p>On May 27, 2007, at 10:23 AM, Galen Shipman wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is that MCA_BTL_DES_FLAGS_PRIORITY  was meant to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; indicate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that the fragment was higher priority, but the fragment isn't higher
</span><br>
<span class="quotelev3">&gt;&gt;&gt; priority. It simply needs to be ordered w.r.t. a previous fragment,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an RDMA in this case.
</span><br>
<span class="quotelev2">&gt;&gt; But after the change priority flags is totally ignored.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the priority flag is simply a &quot;hint&quot; and has
</span><br>
*NO*
<br>
<span class="quotelev1">&gt; hard requirements
</span><br>
<span class="quotelev1">&gt; than we can still use it in the OpenIB BTL but it won't have any
</span><br>
<span class="quotelev1">&gt; effect as only eager size fragments can be marked high priority and
</span><br>
<span class="quotelev1">&gt; we already send these over the high priority QP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Galen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; 			Gleb.
</span><br>
<span class="quotelev2">&gt;&gt; &lt;patch.diff&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="1583.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14780"</a>
<li><strong>Previous message:</strong> <a href="1581.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1581.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1586.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
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
