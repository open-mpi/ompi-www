<?
$subject_val = "Re: [OMPI users] what order do I get messages coming to MPI Recv from MPI_ANY_SOURCE?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 12:40:23 2014" -->
<!-- isoreceived="20141111174023" -->
<!-- sent="Tue, 11 Nov 2014 12:40:21 -0500" -->
<!-- isosent="20141111174021" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] what order do I get messages coming to MPI Recv from MPI_ANY_SOURCE?" -->
<!-- id="8FAD8E99-EBC5-4137-A4A0-10AB4AFFD3AC_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54616307.5020703_at_slac.stanford.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] what order do I get messages coming to MPI Recv from MPI_ANY_SOURCE?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 12:40:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25756.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25754.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to	hosts file"</a>
<li><strong>In reply to:</strong> <a href="25738.php">David A. Schneider: "[OMPI users] what order do I get messages coming to MPI Recv from MPI_ANY_SOURCE?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using MPI_ANY_SOURCE will extract one message from the queue of unexpected messages. The fairness is not guaranteed by the MPI standard, thus it is impossible to predict the order between servers. 
<br>
<p>If you need fairness your second choice is the way to go.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt; On Nov 10, 2014, at 20:14 , David A. Schneider &lt;davidsch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am implementing a hub/servers MPI application. Each of the servers can get tied up waiting for some data, then they do an MPI Send to the hub. It is relatively simple for me to have the hub waiting around doing a Recv from ANY_SOURCE. The hub can get busy working with the data. What I'm worried about is skipping data from one of the servers. How likely is this scenario:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    server 1 and 2 do Send's
</span><br>
<span class="quotelev1">&gt;    hub does Recv and ends up getting data from server 1
</span><br>
<span class="quotelev1">&gt;    while hub busy, server 1 gets more data, does another Send
</span><br>
<span class="quotelev1">&gt;    when hub does its next Recv, it gets the more recent server 1 data rather than the older server2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't need a guarantee that the order the Send's occur is the order the ANY_SOURCE processes them (though it would be nice), but if I new in practice it will be close to the order they are sent, I may go with the above. However if it is likely I could skip over data from one of the servers, I need to implement something more complicated. Which I think would be this pattern:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    servers each do Send's
</span><br>
<span class="quotelev1">&gt;    hub does an Irecv for each server
</span><br>
<span class="quotelev1">&gt;    hub does a Waitany on all server requests
</span><br>
<span class="quotelev1">&gt;    upon completion of one server request, hub does a Test on all the others
</span><br>
<span class="quotelev1">&gt;    of all the Irecv's that have completed, hub selects the oldest server data (there is timing tag in the server data)
</span><br>
<span class="quotelev1">&gt;    hub communicates with the server it just chose, has it start a new Send, hub a new Irecv
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This requires more complex code, and my first effort crashed inside the Waitany call in a way that I'm finding difficult to debug. I am using the Python bindings mpi4py - so I have less control over buffers being used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just posted this on stackoverflow also, but maybe this is a better place to post?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25738.php">http://www.open-mpi.org/community/lists/users/2014/11/25738.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25756.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25754.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to	hosts file"</a>
<li><strong>In reply to:</strong> <a href="25738.php">David A. Schneider: "[OMPI users] what order do I get messages coming to MPI Recv from MPI_ANY_SOURCE?"</a>
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
