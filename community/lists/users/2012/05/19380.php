<?
$subject_val = "Re: [OMPI users] possible bug exercised by mpi4py";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 23:32:44 2012" -->
<!-- isoreceived="20120525033244" -->
<!-- sent="Thu, 24 May 2012 23:34:29 -0400" -->
<!-- isosent="20120525033429" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible bug exercised by mpi4py" -->
<!-- id="8A74B1D6-E5F6-42BF-9BFA-21BD5C2A6910_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="97E416E8-C8E1-4EC7-8B68-CE60E7979E96_at_mcs.anl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-24 23:34:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19381.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19379.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19379.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19381.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19381.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2012, at 23:18, Dave Goodell &lt;goodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On May 24, 2012, at 8:13 PM CDT, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 24, 2012, at 11:57 AM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The standard says this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;Within each group, all processes provide the same recvcounts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument, and provide input vectors of  sum_i^n recvcounts[i] elements
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stored in the send buffers, where n is the size of the group&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I read &quot; Within each group, ... where n is the size of the group&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as being the LOCAL group size.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Actually, that seems like a direct contradiction with the prior sentence: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If comm is an intercommunicator, then the result of the reduction of the data provided by processes in one group (group A) is scattered among processes in the other group (group B), and vice versa.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It looks like the implementors of 2 implementations agree that recvcounts should be the size of the remote group.  Sounds like this needs to be brought up in front of the Forum...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I take back my prior &quot;right&quot;.  Upon further inspection of the text and the MPICH2 code I believe it to be true that the number of the elements in the recvcounts array must be equal to the size of the LOCAL group.
</span><br>
<p>This is quite illogical, but it will not be the first time the standard is lacking some. So, if I understand you correctly, in the case of an intercommunicator a process doesn't know how much data it has to reduce, at least not until it receives the array of recvcounts from the remote group. Weird!
<br>
<p>It makes much more sense to read it the other way. That will remove the need for an extra communication, as every rank knows from the beginning everything, what they will have to scatter to the remote group, as well as [based on the remote recvcounts] what they have to reduce in the local group.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt; The text certainly could use a bit of clarification.  I'll bring it up at the meeting next week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19381.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19379.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19379.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19381.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19381.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
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
