<?
$subject_val = "Re: [OMPI users] possible bug exercised by mpi4py";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 11:58:22 2012" -->
<!-- isoreceived="20120524155822" -->
<!-- sent="Thu, 24 May 2012 12:57:36 -0300" -->
<!-- isosent="20120524155736" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible bug exercised by mpi4py" -->
<!-- id="CAEcYPwBeUVZL-iBNWhWBE91uGN8otT2oUs1Zabr6aE_RDyro7A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9DA8CCA3-B2CE-4BC7-82D2-904539C5BB8F_at_eecs.utk.edu" -->
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
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-24 11:57:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19374.php">Orion Poplawski: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19372.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19372.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19377.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19377.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19378.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 24 May 2012 12:40, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On May 24, 2012, at 11:22 , Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 24, 2012, at 11:10 AM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So I checked them all, and I found SCATTERV, GATHERV, and REDUCE_SCATTER all had the issue. &#194;&#160;Now fixed on the trunk, and will be in 1.6.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please be careful with REDUCE_SCATTER[_BLOCK] . My understanding of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the MPI standard is that the the length of the recvcounts array is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local group size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (<a href="http://www.mpi-forum.org/docs/mpi22-report/node113.htm#Node113">http://www.mpi-forum.org/docs/mpi22-report/node113.htm#Node113</a>)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I read that this morning and it made my head hurt.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I read it to be: reduce the data in the local group, scatter the results to the remote group.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As such, the reduce COUNT is sum(recvcounts), and is used for the reduction in the local group. &#194;&#160;Then use recvcounts to scatter it to the remote group.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#166;right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right, you reduce locally but you scatter remotely. As such the size of the recvcounts buffer is the remote size. As in the local group you do a reduce (where every process participate with the same amount of data) you only need a total count which in this case is the sum of all recvcounts. This requirement is enforced by the fact that the input buffer is of size sum of all recvcounts, which make sense only if you know the remote group receives counts.
</span><br>
<p>The standard says this:
<br>
<p>&quot;Within each group, all processes provide the same recvcounts
<br>
argument, and provide input vectors of  sum_i^n recvcounts[i] elements
<br>
stored in the send buffers, where n is the size of the group&quot;
<br>
<p>So, I read &quot; Within each group, ... where n is the size of the group&quot;
<br>
as being the LOCAL group size.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see much difference with the other collective. The generic behavior is that you apply the operation on the local group but the result is moved into the remote group.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Well, for me this one DO IS different (for example, SCATTER is
<br>
unidirectional for intercomunicators, but REDUCE_SCATTER is
<br>
bidirectional). The &quot;recvbuff&quot; is a local buffer, but you understand
<br>
&quot;recvcounts&quot; as remote.
<br>
<p>Mmm, the standard is really confusing in this point...
<br>
<p><pre>
-- 
Lisandro Dalcin
---------------
CIMEC (INTEC/CONICET-UNL)
Predio CONICET-Santa Fe
Colectora RN 168 Km 472, Paraje El Pozo
3000 Santa Fe, Argentina
Tel: +54-342-4511594 (ext 1011)
Tel/Fax: +54-342-4511169
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19374.php">Orion Poplawski: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19372.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19372.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19377.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19377.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19378.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
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
