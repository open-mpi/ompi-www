<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 27 12:19:24 2007" -->
<!-- isoreceived="20070527161924" -->
<!-- sent="Sun, 27 May 2007 10:19:09 -0600" -->
<!-- isosent="20070527161909" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768" -->
<!-- id="22C8FA94-BAED-47D8-91CC-FCF818CC366A_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-05-27 12:19:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1581.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1579.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1579.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1585.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1585.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/06/1632.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; With current code this is not the case. Order tag is set during a  
</span><br>
<span class="quotelev1">&gt; fragment
</span><br>
<span class="quotelev1">&gt; allocation. It seems wrong according to your description. Attached  
</span><br>
<span class="quotelev1">&gt; patch fixes
</span><br>
<span class="quotelev1">&gt; this. If no specific ordering tag is provided to allocation  
</span><br>
<span class="quotelev1">&gt; function order of
</span><br>
<span class="quotelev1">&gt; the fragment is set to be MCA_BTL_NO_ORDER. After call to send/put/ 
</span><br>
<span class="quotelev1">&gt; get order
</span><br>
<span class="quotelev1">&gt; is set to whatever QP was used for communication. If order is set  
</span><br>
<span class="quotelev1">&gt; before send call
</span><br>
<span class="quotelev1">&gt; it is used to choose QP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I do set the order tag during allocation/prepare, but the defined  
<br>
semantics are that the tag is only valid after send/put/get. We can  
<br>
set them up any where we wish in the BTL, the PML however cannot rely  
<br>
on anything until after the send/put/get call. So really this is an  
<br>
issue of semantics versus implementation. The implementation I  
<br>
believe does conform to the semantics as the upper layer (PML)  
<br>
doesn't use the tag value until after a call to send/put/get.
<br>
<p>I will look over the patch however, might make more sense to delay  
<br>
setting the value until the actual send/put/get call.
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p><p><p><p><p><span class="quotelev1">&gt; --
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
<li><strong>Next message:</strong> <a href="1581.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1579.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1579.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1585.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1585.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/06/1632.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
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
