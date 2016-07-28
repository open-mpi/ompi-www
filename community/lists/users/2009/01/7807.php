<?
$subject_val = "[OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 14:36:13 2009" -->
<!-- isoreceived="20090123193613" -->
<!-- sent="Fri, 23 Jan 2009 13:36:07 -0600" -->
<!-- isosent="20090123193607" -->
<!-- name="Hartzman, Leslie D (MS)" -->
<!-- email="Les.Hartzman_at_[hidden]" -->
<!-- subject="[OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend" -->
<!-- id="01B49D24DCA6104D925B3BCAC891D08C118C93_at_XMBTX133.northgrum.com" -->
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
<strong>Subject:</strong> [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend<br>
<strong>From:</strong> Hartzman, Leslie D (MS) (<em>Les.Hartzman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 14:36:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7808.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7806.php">Gijsbert Wiesenekker: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7830.php">Jeff Squyres: "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<li><strong>Reply:</strong> <a href="7830.php">Jeff Squyres: "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<li><strong>Maybe reply:</strong> <a href="7849.php">Hartzman, Leslie D (MS): "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to modify some code that is involved in point-to-point
<br>
communications. Process A has a one way mode of communication with
<br>
Process B. 'A' checks to see if its rank is zero and if so will send a
<br>
&quot;command&quot; to 'B' (MPI_Issend) about what kind of data is going to be
<br>
coming next. After sending the command to 'B', 'A' then issues an
<br>
Issend, sending a block of data to 'B'.
<br>
<p>Process 'B' sets up a number of request instances via MPI_Recv_init and
<br>
then issues an MPI_Startall on the requests. 'B' sits in a &quot;while (1)&quot;
<br>
loop, where the basic processing is a switch statement based on the
<br>
content of the command being sent from 'A'. At the top of the loop, 'B'
<br>
sits at an MPI_Wait until a command comes in. Then at each case in the
<br>
switch, 'B' sits in a MPI_Waitall to make sure that all 'A's have sent
<br>
their data. 'B' then processes the received data, issues an MPI_Startall
<br>
on the receive requests instances, exits the switch statement and then
<br>
issues an MPI_Start on the 'B' command request so it can go back to
<br>
waiting at the top of the loop.
<br>
<p>In the original process 'A' code, prior to sending out a command, 'A'
<br>
will issue an MPI_Wait to make sure that the command request instance is
<br>
free. After which it sends out the command, followed by the data. So
<br>
I've taken this infrastructure and have tried to add a new command from
<br>
within a function called in 'A'. The function is passed the command
<br>
request instance to be used for the MPI_Wait. I check the status of this
<br>
MPI_Wait, and all is good. I then issue my own MPI_Issend (have also
<br>
tried MPI_Ssend) to process 'B'. The status coming back from the send is
<br>
good. At the end of this function I added in another MPI_Wait because
<br>
this function sends several commands from within a loop. None of the
<br>
commands are received by 'B' - at least not at the beginning. After
<br>
process 'A' goes through an outer loop a few times (each time calling my
<br>
new function with the MPI calls in it), process 'B' suddenly gets some
<br>
of the commands for one pass through the function. After that it never
<br>
comes back from the MPI_Wait at the end of the inner function.
<br>
<p>What am I missing about how the MPI calls work?
<br>
<p>Thanks.
<br>
<p>Les
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7807/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7808.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7806.php">Gijsbert Wiesenekker: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7830.php">Jeff Squyres: "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<li><strong>Reply:</strong> <a href="7830.php">Jeff Squyres: "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<li><strong>Maybe reply:</strong> <a href="7849.php">Hartzman, Leslie D (MS): "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
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
