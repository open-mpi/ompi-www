<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 27 14:25:22 2007" -->
<!-- isoreceived="20070527182522" -->
<!-- sent="Sun, 27 May 2007 21:25:15 +0300" -->
<!-- isosent="20070527182515" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768" -->
<!-- id="20070527182515.GA23291_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="22C8FA94-BAED-47D8-91CC-FCF818CC366A_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-05-27 14:25:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1586.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1584.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14782"</a>
<li><strong>In reply to:</strong> <a href="1580.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/06/1632.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, May 27, 2007 at 10:19:09AM -0600, Galen Shipman wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; With current code this is not the case. Order tag is set during a  
</span><br>
<span class="quotelev2">&gt; &gt; fragment
</span><br>
<span class="quotelev2">&gt; &gt; allocation. It seems wrong according to your description. Attached  
</span><br>
<span class="quotelev2">&gt; &gt; patch fixes
</span><br>
<span class="quotelev2">&gt; &gt; this. If no specific ordering tag is provided to allocation  
</span><br>
<span class="quotelev2">&gt; &gt; function order of
</span><br>
<span class="quotelev2">&gt; &gt; the fragment is set to be MCA_BTL_NO_ORDER. After call to send/put/ 
</span><br>
<span class="quotelev2">&gt; &gt; get order
</span><br>
<span class="quotelev2">&gt; &gt; is set to whatever QP was used for communication. If order is set  
</span><br>
<span class="quotelev2">&gt; &gt; before send call
</span><br>
<span class="quotelev2">&gt; &gt; it is used to choose QP.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do set the order tag during allocation/prepare, but the defined  
</span><br>
<span class="quotelev1">&gt; semantics are that the tag is only valid after send/put/get. We can  
</span><br>
<span class="quotelev1">&gt; set them up any where we wish in the BTL, the PML however cannot rely  
</span><br>
<span class="quotelev1">&gt; on anything until after the send/put/get call. So really this is an  
</span><br>
<span class="quotelev1">&gt; issue of semantics versus implementation. The implementation I  
</span><br>
<span class="quotelev1">&gt; believe does conform to the semantics as the upper layer (PML)  
</span><br>
<span class="quotelev1">&gt; doesn't use the tag value until after a call to send/put/get.
</span><br>
<span class="quotelev1">&gt;
</span><br>
With current approach send function doesn't know the difference between
<br>
fragment that should be ordered because PML requested it and regular
<br>
fragment without ordering requirements.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1586.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1584.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14782"</a>
<li><strong>In reply to:</strong> <a href="1580.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/06/1632.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
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
