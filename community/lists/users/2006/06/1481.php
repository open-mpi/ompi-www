<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 09:10:49 2006" -->
<!-- isoreceived="20060628131049" -->
<!-- sent="Wed, 28 Jun 2006 09:10:41 -0400" -->
<!-- isosent="20060628131041" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI users] FW: mpi_allreduce error" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9604_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-28 09:10:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1482.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<li><strong>Previous message:</strong> <a href="1480.php">shen T.T.: "Re: [OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(this thread started as a LAM question
<br>
[<a href="http://www.lam-mpi.org/MailArchives/lam/2006/06/12497.php">http://www.lam-mpi.org/MailArchives/lam/2006/06/12497.php</a>], and one
<br>
message contained an Open MPI question, so I took the liberty of moving
<br>
it to the OMPI user's list)
<br>
<p><span class="quotelev1">&gt; As for openmpi, I get a lot of messages like this
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; global_ssi(1441) malloc: ***  Deallocation of a pointer not malloced: 
</span><br>
<span class="quotelev1">&gt; 0xbffe9e70; This could be a double free(), or free() called with the 
</span><br>
<span class="quotelev1">&gt; middle of an allocated block; Try setting environment variable 
</span><br>
<span class="quotelev1">&gt; MallocHelp to see tools to help debug
</span><br>
<span class="quotelev1">&gt; global_ssi(1441) malloc: ***  Deallocation of a pointer not malloced: 
</span><br>
<span class="quotelev1">&gt; 0x1; This could be a double free(), or free() called with the 
</span><br>
<span class="quotelev1">&gt; middle of 
</span><br>
<span class="quotelev1">&gt; an allocated block; Try setting environment variable 
</span><br>
<span class="quotelev1">&gt; MallocHelp to see 
</span><br>
<span class="quotelev1">&gt; tools to help debug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then it crashes randomly with a seg fault (no error message).
</span><br>
<p>Yikes.
<br>
<p>Note that these are messages from OSX itself, not Open MPI.  It doesn't
<br>
necessarily mean anything (i.e., the error could still be in your code
<br>
or in Open MPI), but it is certainly an indication of Badness.
<br>
<p>What version of Open MPI did you try?  We just released v1.1 last week
<br>
-- could you give that a whirl if you haven't already?
<br>
<p>I'm also not an OSX expert, but I do know that setting some environment
<br>
variables will cause those messages to be more verbose (potentially
<br>
dumping a stack trace or something...?  I honestly don't remember
<br>
offhand).  If you have the cycles could you set that MallocHelp
<br>
environment variable and try to track down where the error is occurring?
<br>
<p>It would be good to know, for example, if it's happening in your
<br>
application or in Open MPI.  From there, we can try to back-track and
<br>
see where the original problem is located.
<br>
<p>Thanks.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1482.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<li><strong>Previous message:</strong> <a href="1480.php">shen T.T.: "Re: [OMPI users] rsh/ssh is work but mpirun hang ?"</a>
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
