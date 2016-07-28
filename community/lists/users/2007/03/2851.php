<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 20 18:30:27 2007" -->
<!-- isoreceived="20070320223027" -->
<!-- sent="Tue, 20 Mar 2007 16:30:03 -0600" -->
<!-- isosent="20070320223003" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues with Get/Put and IRecv" -->
<!-- id="265EF55B-E184-471F-A3EE-AA393D558B48_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46004ED9.9090104_at_graphics.stanford.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-20 18:30:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2852.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Previous message:</strong> <a href="2850.php">Mike Houston: "[OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>In reply to:</strong> <a href="2850.php">Mike Houston: "[OMPI users] Issues with Get/Put and IRecv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2852.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Reply:</strong> <a href="2852.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 20, 2007, at 3:15 PM, Mike Houston wrote:
<br>
<p><span class="quotelev1">&gt; If I only do gets/puts, things seem to be working correctly with  
</span><br>
<span class="quotelev1">&gt; version
</span><br>
<span class="quotelev1">&gt; 1.2.  However, if I have a posted Irecv on the target node and issue a
</span><br>
<span class="quotelev1">&gt; MPI_Get against that target, MPI_Test on the posed IRecv causes a  
</span><br>
<span class="quotelev1">&gt; segfaults:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone have suggestions?  Sadly, I need to have IRecv's posted.  I'll
</span><br>
<span class="quotelev1">&gt; attempt to find a workaround, but it looks like the posed IRecv is
</span><br>
<span class="quotelev1">&gt; getting all the data of the MPI_Get from the other node.  It's like  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; message tagging is getting ignored.  I've never tried posting two
</span><br>
<span class="quotelev1">&gt; different IRecv's with different message tags either...
</span><br>
<p>Hi Mike -
<br>
<p>I've spent some time this afternoon looking at the problem and have  
<br>
some ideas on what could be happening.  I don't think it's a data  
<br>
mismatch (the data intended for the IRecv getting delivered to the  
<br>
Get), but more a problem with the call to MPI_Test perturbing the  
<br>
progress flow of the one-sided engine.  I can see one or two places  
<br>
where it's possible this could happen, although I'm having trouble  
<br>
replicating the problem with any test case I can write.  Is it  
<br>
possible for you to share the code causing the problem (or some small  
<br>
test case)?  It would make me feel considerably better if I could  
<br>
really understand the conditions required to end up in a seg fault  
<br>
state.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2852.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Previous message:</strong> <a href="2850.php">Mike Houston: "[OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>In reply to:</strong> <a href="2850.php">Mike Houston: "[OMPI users] Issues with Get/Put and IRecv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2852.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Reply:</strong> <a href="2852.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
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
