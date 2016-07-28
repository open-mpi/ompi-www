<?
$subject_val = "Re: [OMPI users] Question about Lost Messages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 21 13:22:57 2012" -->
<!-- isoreceived="20121221182257" -->
<!-- sent="Fri, 21 Dec 2012 19:22:51 +0100" -->
<!-- isosent="20121221182251" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about Lost Messages" -->
<!-- id="A2D4F2F7-0CA4-4FB3-B316-1C6DFA696A5D_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALv0Z8Um1+6bL9yRrOqaJjmDMLS0eD==x9Va0kh5LiZ1fDX_Uw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about Lost Messages<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-21 13:22:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21038.php">George Bosilca: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="21036.php">Jeff Squyres: "Re: [OMPI users] Open MPI planned outage"</a>
<li><strong>In reply to:</strong> <a href="21026.php">Corey Allen: "[OMPI users] Question about Lost Messages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Corey,
<br>
<p>The communication pattern looks legit, it is very difficult to see what is going wrong with a code to look at. Can you provide a simple case (maybe the skeleton of your application) we can work from?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Dec 20, 2012, at 22:07 , Corey Allen &lt;corey.allen_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to confirm that I am using OpenMPI in a correct way. I
</span><br>
<span class="quotelev1">&gt; seem to be losing messages but I don't like to assume there's a bug
</span><br>
<span class="quotelev1">&gt; when I'm still new to MPI in general.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have multiple processes in a master / slaves type setup, and I am
</span><br>
<span class="quotelev1">&gt; trying to have multiple persistent non-blocking message requests
</span><br>
<span class="quotelev1">&gt; between them to prevent starvation. (Tech detail: 4-core Intel running
</span><br>
<span class="quotelev1">&gt; Ubuntu 64-bit and OpenMPI 1.4. Everything is local. Total processes is
</span><br>
<span class="quotelev1">&gt; 5. One master, four slaves. The problem only surfaces on the slowest
</span><br>
<span class="quotelev1">&gt; slave - the one with the most work.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The setup is like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Master:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Create 3 persistent send requests, with three different buffers (in a 2D array)
</span><br>
<span class="quotelev1">&gt; Load data into each buffer
</span><br>
<span class="quotelev1">&gt; Start each send request
</span><br>
<span class="quotelev1">&gt; In a loop:
</span><br>
<span class="quotelev1">&gt; TestSome on the 3 sends
</span><br>
<span class="quotelev1">&gt; for each send that's completed
</span><br>
<span class="quotelev1">&gt; load new data into the buffer
</span><br>
<span class="quotelev1">&gt; restart that send
</span><br>
<span class="quotelev1">&gt; loop
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Slave:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Create 3 persistent receive requests, with three different buffers (in
</span><br>
<span class="quotelev1">&gt; a 2D array)
</span><br>
<span class="quotelev1">&gt; Start each receive request
</span><br>
<span class="quotelev1">&gt; In a loop:
</span><br>
<span class="quotelev1">&gt; WaitAny on the 3 receives
</span><br>
<span class="quotelev1">&gt; Consume data from the one receive buffer from WaitAny
</span><br>
<span class="quotelev1">&gt; Start that receive again
</span><br>
<span class="quotelev1">&gt; loop
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Basically what I'm seeing is that the master gets a &quot;completed&quot; send
</span><br>
<span class="quotelev1">&gt; request from TestSome and loads new data, restarts, etc. but the slave
</span><br>
<span class="quotelev1">&gt; never sees that particular message. I was under the impression that
</span><br>
<span class="quotelev1">&gt; WaitAny should return only one message but also should eventually
</span><br>
<span class="quotelev1">&gt; return every message sent in this situation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am operating under the assumption that even if the send request is
</span><br>
<span class="quotelev1">&gt; completed and the buffer overwritten in the master, the receive for
</span><br>
<span class="quotelev1">&gt; that message eventually occurs with the correct data in the slave. I
</span><br>
<span class="quotelev1">&gt; did not think I had to advise the master that the slave was finished
</span><br>
<span class="quotelev1">&gt; reading data out of the receive buffer before the master could reuse
</span><br>
<span class="quotelev1">&gt; the send buffer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What it LOOKS like to me is that WaitAny is marking more than one send
</span><br>
<span class="quotelev1">&gt; completed, so the master sends the next message, but I can't see it in
</span><br>
<span class="quotelev1">&gt; the slave.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this is making sense. Any input on whether I'm doing this wrong
</span><br>
<span class="quotelev1">&gt; or a way to see if the message is really being lost would be helpful.
</span><br>
<span class="quotelev1">&gt; If there's a good example code of multiple simultaneous asynchronous
</span><br>
<span class="quotelev1">&gt; messages to avoid starvation that is set up better than my approach,
</span><br>
<span class="quotelev1">&gt; I'd like to see it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Corey
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
<li><strong>Next message:</strong> <a href="21038.php">George Bosilca: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="21036.php">Jeff Squyres: "Re: [OMPI users] Open MPI planned outage"</a>
<li><strong>In reply to:</strong> <a href="21026.php">Corey Allen: "[OMPI users] Question about Lost Messages"</a>
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
