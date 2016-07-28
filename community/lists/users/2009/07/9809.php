<?
$subject_val = "[OMPI users] Problems with MPI_Issend and MX";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 18:05:30 2009" -->
<!-- isoreceived="20090702220530" -->
<!-- sent="Fri, 03 Jul 2009 07:05:14 +0900" -->
<!-- isosent="20090702220514" -->
<!-- name="8mj6tc902_at_[hidden]" -->
<!-- email="8mj6tc902_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with MPI_Issend and MX" -->
<!-- id="4222-69945_at_sneakemail.com" -->
<!-- charset="ISO-2022-JP" -->
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
<strong>Subject:</strong> [OMPI users] Problems with MPI_Issend and MX<br>
<strong>From:</strong> <a href="mailto:8mj6tc902_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problems%20with%20MPI_Issend%20and%20MX"><em>8mj6tc902_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-07-02 18:05:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9810.php">Scott Atchley: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<li><strong>Previous message:</strong> <a href="9808.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9810.php">Scott Atchley: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<li><strong>Reply:</strong> <a href="9810.php">Scott Atchley: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi. I've now spent many many hours tracking down a bug that was causing
<br>
my program to die, as though either its memory were getting corrupted or
<br>
messages were getting clobbered while going through the network, I
<br>
couldn't tell which. I really wish the checksum flag on btl_mx_flags
<br>
were working. But anyway, I think I've managed to recreate the core of
<br>
the problem in a small-ish test case which I've attached
<br>
(verifycontent.cc). This usually segfaults at MPI_Issend after sending
<br>
about 60-90 messages for me while using OpenMPI 1.3.2 with myricom's
<br>
mx-1.2.9 drivers on linux using gcc 4.3.2. Disabling the mx btl (mpirun
<br>
-mca btl ^mx) makes it work (likewise, the same for my own larger
<br>
project (Murasaki)). The MPI_Ssend using version
<br>
(verifycontent-ssend.cc) also works no problem over mx. So I suspect the
<br>
issue lies in OpenMPI 1.3.2's handling of MPI_Issend over mx, but it's
<br>
also possible I've horribly misunderstood something fundamental about
<br>
MPI and it's just my fault, so if that's the case, please let me know
<br>
(but both my this test case and Murasaki work over mpichmx, so OpenMPI
<br>
is definitely doing something different).
<br>
<p>Here's a brief description of verifycontent.cc to make reading it easier:
<br>
* given -np=N, half the nodes will be sending, half will be receiving
<br>
some number of messages (reps)
<br>
* each message consists of buflen (5000) chars, set to some value based
<br>
on the sending node's rank and the sequence number of the message
<br>
* the receiving node starts an irecv for each sending node, tests each
<br>
request until a message arrives
<br>
* the receiver then checks the contents of the message to make sure it
<br>
matches what was supposed to be in there (this is where my real project,
<br>
Murasaki, fails actually. I can't seem to replicate that however).
<br>
* the senders meanwhile keep sending messages and dequeuing them when
<br>
their request tests as completed.
<br>
<p>Testing out the current subversion trunk version, 1.4a1r21594, that
<br>
seems to pass my test case, but also tends to show errors like
<br>
&quot;mca_btl_mx_init: mx_open_endpoint() failed with status 20 (Busy)&quot; on
<br>
start up, and Murasaki still fails (messages turn into zeros about 132KB
<br>
in), so something still isn't right...
<br>
<p>If anyone has any ideas about this test case failing, or my larger issue
<br>
of messages turning into zeros after 132KB (though sadly sometimes it
<br>
isn't at 132KB, but straight from 0KB, which is very confusing) while on
<br>
MX, I'd greatly appreciate it. Even a simple confirmation of &quot;Yes,
<br>
MPI_Issend/Irecv with MX has issues in 1.3.2&quot; would help my sanity.
<br>
<pre>
-- 
Kris Popendorf
Keio University
<a href="http://murasaki">http://murasaki</a>................... &lt;- (Probably too cumbersome to expect
most people to test, but if you feel daring, try putting in some
Human/Mouse chromosomes over MX)


</pre>
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9809/verifycontent.cc">verifycontent.cc</a>
</ul>
<!-- attachment="verifycontent.cc" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9809/verifycontent-ssend.cc">verifycontent-ssend.cc</a>
</ul>
<!-- attachment="verifycontent-ssend.cc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9810.php">Scott Atchley: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<li><strong>Previous message:</strong> <a href="9808.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9810.php">Scott Atchley: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<li><strong>Reply:</strong> <a href="9810.php">Scott Atchley: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
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
