<?
$subject_val = "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 13 13:51:05 2008" -->
<!-- isoreceived="20080913175105" -->
<!-- sent="Sat, 13 Sep 2008 22:20:37 +0330 (IRST)" -->
<!-- isosent="20080913185037" -->
<!-- name="rahmani" -->
<!-- email="m_rahmani56_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?" -->
<!-- id="10020031.20371221331837714.JavaMail.root_at_mta.iut.ac.ir" -->
<!-- charset="utf-8" -->
<!-- inreplyto="845f51b10809130550l194e798bx4a3031f6f978f794_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?<br>
<strong>From:</strong> rahmani (<em>m_rahmani56_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-13 14:50:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6528.php">arun dhakne: "[OMPI users] dumping checkpoint at customized locations"</a>
<li><strong>Previous message:</strong> <a href="6526.php">Eric Thibodeau: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>In reply to:</strong> <a href="6525.php">Enrico Barausse: "[OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6532.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- Original Message -----
<br>
From: &quot;Enrico Barausse&quot; &lt;enrico.barausse_at_[hidden]&gt;
<br>
To: users_at_[hidden]
<br>
Sent: Saturday, September 13, 2008 8:50:50 AM (GMT-0500) America/New_York
<br>
Subject: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?
<br>
<p>Hello,
<br>
<p>I apologize in advance if my question is naive, but I started to use
<br>
open-mpi only one week ago.
<br>
I have a complicated fortran 90 code which is giving me a segmentation
<br>
fault (address not mapped). I tracked down the problem to the
<br>
following lines:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call
<br>
MPI_Send(toroot,3,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call
<br>
MPI_RECV(tonode,4,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD,status,ierr)
<br>
<p>the MPI_send is executed by a process (say 1) which sends the array
<br>
toroot to another process (say 0). Process 0 successfully receives the
<br>
array toroot (I print out its components and they are correct), does
<br>
some calculations on it and sends back an array tonode to process 1.
<br>
Nevertheless, the MPI_Send routine above never returns controls to
<br>
process 1 (although the array toroot seems to have been transmitted
<br>
alright) and gives a segmentation fault (Signal code: Address not
<br>
mapped (1))
<br>
<p>Now, if replace the two lines above with
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call
<br>
MPI_sendrecv(toroot,3,MPI_DOUBLE_PRECISION,root,n,tonode,4,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD,status,ierr)
<br>
<p>I get no errors and the code works perfectly (I tested it vs the
<br>
serial version from which I started). But, and here is my question,
<br>
shouldn't MPI_sendrecv be equivalent to MPI_Send followed by MPI_RECV?
<br>
<p>thank you in advance for helping with this
<br>
<p>cheers
<br>
<p>enrico
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>Hi,
<br>
I think if you use MPI_Isend it work correctly!
<br>
test this and write me what happen!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6528.php">arun dhakne: "[OMPI users] dumping checkpoint at customized locations"</a>
<li><strong>Previous message:</strong> <a href="6526.php">Eric Thibodeau: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>In reply to:</strong> <a href="6525.php">Enrico Barausse: "[OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6532.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
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
