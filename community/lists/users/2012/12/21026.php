<?
$subject_val = "[OMPI users] Question about Lost Messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 16:07:52 2012" -->
<!-- isoreceived="20121220210752" -->
<!-- sent="Thu, 20 Dec 2012 15:07:45 -0600" -->
<!-- isosent="20121220210745" -->
<!-- name="Corey Allen" -->
<!-- email="corey.allen_at_[hidden]" -->
<!-- subject="[OMPI users] Question about Lost Messages" -->
<!-- id="CALv0Z8Um1+6bL9yRrOqaJjmDMLS0eD==x9Va0kh5LiZ1fDX_Uw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Question about Lost Messages<br>
<strong>From:</strong> Corey Allen (<em>corey.allen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-20 16:07:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21027.php">Syed Ahsan Ali: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>Previous message:</strong> <a href="21025.php">Brock Palen: "Re: [OMPI users] 1.6.2 affinity failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21037.php">George Bosilca: "Re: [OMPI users] Question about Lost Messages"</a>
<li><strong>Reply:</strong> <a href="21037.php">George Bosilca: "Re: [OMPI users] Question about Lost Messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to confirm that I am using OpenMPI in a correct way. I
<br>
seem to be losing messages but I don't like to assume there's a bug
<br>
when I'm still new to MPI in general.
<br>
<p>I have multiple processes in a master / slaves type setup, and I am
<br>
trying to have multiple persistent non-blocking message requests
<br>
between them to prevent starvation. (Tech detail: 4-core Intel running
<br>
Ubuntu 64-bit and OpenMPI 1.4. Everything is local. Total processes is
<br>
5. One master, four slaves. The problem only surfaces on the slowest
<br>
slave - the one with the most work.)
<br>
<p>The setup is like this:
<br>
<p>Master:
<br>
<p>Create 3 persistent send requests, with three different buffers (in a 2D array)
<br>
Load data into each buffer
<br>
Start each send request
<br>
In a loop:
<br>
TestSome on the 3 sends
<br>
for each send that's completed
<br>
&nbsp;load new data into the buffer
<br>
&nbsp;restart that send
<br>
loop
<br>
<p>Slave:
<br>
<p>Create 3 persistent receive requests, with three different buffers (in
<br>
a 2D array)
<br>
Start each receive request
<br>
In a loop:
<br>
WaitAny on the 3 receives
<br>
Consume data from the one receive buffer from WaitAny
<br>
Start that receive again
<br>
loop
<br>
<p>Basically what I'm seeing is that the master gets a &quot;completed&quot; send
<br>
request from TestSome and loads new data, restarts, etc. but the slave
<br>
never sees that particular message. I was under the impression that
<br>
WaitAny should return only one message but also should eventually
<br>
return every message sent in this situation.
<br>
<p>I am operating under the assumption that even if the send request is
<br>
completed and the buffer overwritten in the master, the receive for
<br>
that message eventually occurs with the correct data in the slave. I
<br>
did not think I had to advise the master that the slave was finished
<br>
reading data out of the receive buffer before the master could reuse
<br>
the send buffer.
<br>
<p>What it LOOKS like to me is that WaitAny is marking more than one send
<br>
completed, so the master sends the next message, but I can't see it in
<br>
the slave.
<br>
<p>I hope this is making sense. Any input on whether I'm doing this wrong
<br>
or a way to see if the message is really being lost would be helpful.
<br>
If there's a good example code of multiple simultaneous asynchronous
<br>
messages to avoid starvation that is set up better than my approach,
<br>
I'd like to see it.
<br>
<p>Thanks!
<br>
<p>Corey
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21027.php">Syed Ahsan Ali: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>Previous message:</strong> <a href="21025.php">Brock Palen: "Re: [OMPI users] 1.6.2 affinity failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21037.php">George Bosilca: "Re: [OMPI users] Question about Lost Messages"</a>
<li><strong>Reply:</strong> <a href="21037.php">George Bosilca: "Re: [OMPI users] Question about Lost Messages"</a>
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
