<?
$subject_val = "Re: [OMPI users] possible bug exercised by mpi4py";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 23:03:22 2012" -->
<!-- isoreceived="20120525030322" -->
<!-- sent="Thu, 24 May 2012 22:03:16 -0500" -->
<!-- isosent="20120525030316" -->
<!-- name="Dave Goodell" -->
<!-- email="goodell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible bug exercised by mpi4py" -->
<!-- id="352E7D13-69E6-44A4-AB31-E101ED7EB892_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwBeUVZL-iBNWhWBE91uGN8otT2oUs1Zabr6aE_RDyro7A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] possible bug exercised by mpi4py<br>
<strong>From:</strong> Dave Goodell (<em>goodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-24 23:03:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19379.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19377.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19373.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19357.php">Bennet Fauber: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2012, at 10:57 AM CDT, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; On 24 May 2012 12:40, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't see much difference with the other collective. The generic behavior is that you apply the operation on the local group but the result is moved into the remote group.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, for me this one DO IS different (for example, SCATTER is
</span><br>
<span class="quotelev1">&gt; unidirectional for intercomunicators, but REDUCE_SCATTER is
</span><br>
<span class="quotelev1">&gt; bidirectional). The &quot;recvbuff&quot; is a local buffer, but you understand
</span><br>
<span class="quotelev1">&gt; &quot;recvcounts&quot; as remote.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mmm, the standard is really confusing in this point...
</span><br>
<p>Don't think of it like an intercommunicator-scatter, think of it more like an intercommunicator-allreduce.  The allreduce is also bidirectional.  The only difference is that instead of an allreduce (logically reduce+bcast), you instead have a reduce_scatter (logically reduce+scatterv).
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19379.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19377.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19373.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19357.php">Bennet Fauber: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
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
