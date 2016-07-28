<?
$subject_val = "Re: [OMPI users] possible bug exercised by mpi4py";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 23:18:13 2012" -->
<!-- isoreceived="20120525031813" -->
<!-- sent="Thu, 24 May 2012 22:18:08 -0500" -->
<!-- isosent="20120525031808" -->
<!-- name="Dave Goodell" -->
<!-- email="goodell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible bug exercised by mpi4py" -->
<!-- id="97E416E8-C8E1-4EC7-8B68-CE60E7979E96_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="92B5EB8D-544B-4B1D-B50E-DE9B16850D1D_at_cisco.com" -->
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
<strong>Date:</strong> 2012-05-24 23:18:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19380.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19378.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19377.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19380.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19380.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2012, at 8:13 PM CDT, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 24, 2012, at 11:57 AM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The standard says this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Within each group, all processes provide the same recvcounts
</span><br>
<span class="quotelev2">&gt;&gt; argument, and provide input vectors of  sum_i^n recvcounts[i] elements
</span><br>
<span class="quotelev2">&gt;&gt; stored in the send buffers, where n is the size of the group&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, I read &quot; Within each group, ... where n is the size of the group&quot;
</span><br>
<span class="quotelev2">&gt;&gt; as being the LOCAL group size.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, that seems like a direct contradiction with the prior sentence: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If comm is an intercommunicator, then the result of the reduction of the data provided by processes in one group (group A) is scattered among processes in the other group (group B), and vice versa.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like the implementors of 2 implementations agree that recvcounts should be the size of the remote group.  Sounds like this needs to be brought up in front of the Forum...
</span><br>
<p>So I take back my prior &quot;right&quot;.  Upon further inspection of the text and the MPICH2 code I believe it to be true that the number of the elements in the recvcounts array must be equal to the size of the LOCAL group.
<br>
<p>The text certainly could use a bit of clarification.  I'll bring it up at the meeting next week.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19380.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19378.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19377.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19380.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19380.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
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
