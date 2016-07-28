<?
$subject_val = "Re: [OMPI users] mpi_iprobe not behaving as expect";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 12:36:24 2010" -->
<!-- isoreceived="20100609163624" -->
<!-- sent="Wed, 09 Jun 2010 09:38:11 -0700" -->
<!-- isosent="20100609163811" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_iprobe not behaving as expect" -->
<!-- id="4C0FC373.2020002_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="15739_1275849354_o56IZn5f009814_AANLkTimVV-BOmw2rKnBQj26VHam0ndEfnk01ALh5LLu6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_iprobe not behaving as expect<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 12:38:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13281.php">Ralph Castain: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Previous message:</strong> <a href="13279.php">Ralph Castain: "Re: [OMPI users] Specifying slots in rankfile"</a>
<li><strong>In reply to:</strong> <a href="13234.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13294.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<li><strong>Reply:</strong> <a href="13294.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
I'll take a stab at this since I don't remember seeing any other
replies.<br>
<br>
At least in the original code you sent out, you used Isend/sleep/Wait
to send messages.&nbsp; So, I'm guessing that part of the message is sent,
Iprobe detects that a matching message is in-coming, and then the
receiver goes into MPI_Recv.&nbsp; This call then can begin to receive the
message, but it's stuck waiting for the remainder of the message to
arrive.&nbsp; Off hand, I don't know if that is how MPI_Iprobe is supposed
to behave or not.&nbsp; I see<br>
<br>
<a class="moz-txt-link-freetext" href="http://www.mpi-forum.org/docs/mpi-11-html/node50.html#Node50">http://www.mpi-forum.org/docs/mpi-11-html/node50.html#Node50</a><br>
MPI_IPROBE(source, tag, comm, flag, status) returns flag = true if
there is a message that can be received and that matches the pattern
specified by the arguments source, tag, and comm.<br>
<br>
I suppose this language leaves open the possibility that the message is
not yet 100% available to be read, but only that the message header has
been received and that it sufficiently matches that specified matching
criteria.<br>
<br>
David Zhang wrote:
<blockquote
 cite="mid15739_1275849354_o56IZn5f009814_AANLkTimVV-BOmw2rKnBQj26VHam0ndEfnk01ALh5LLu6@mail.gmail.com"
 type="cite">I have modified the code so that all the terminal outputs
are done by one executable.&nbsp; I have attached the source files, after
compiling type "make go" and the code will execute.<br>
  <br>
The previous code output was from a supercomputer cluster where the two
processes resides on two different nodes.&nbsp; When running the same code
on a regular-multiprocessor machine (mac mini in this case), I got this
output:<br>
&nbsp;F<br>
&nbsp;F<br>
&nbsp;T<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1<br>
&nbsp;F<br>
&nbsp;T<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2<br>
&nbsp;F<br>
&nbsp;T<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3<br>
&nbsp;F<br>
&nbsp;T<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4<br>
  <br>
If I'm sending a message every 2 seconds and I'm polling every 0.05
second, I would expect 39 F and 1 T between each number.&nbsp; At least when
I ran it on the supercomputer, this is true during the very beginning;
however I don't even see this when I'm running the code on my mac mini.<br>
  <br>
  <div class="gmail_quote">On Sat, Jun 5, 2010 at 2:44 PM, David Zhang <span
 dir="ltr">&lt;<a href="mailto:solarbikedz@gmail.com">solarbikedz@gmail.com</a>&gt;</span>
wrote:<br>
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
    <div>
    <div class="h5">Dear all:<br>
    <br>
I'm using mpi_iprobe to serve as a way to send signals between
different mpi executables. I'm using the following test codes (fortran):<br>
    <br>
#1<br>
program send<br>
implicit none<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; include 'mpif.h'<br>
    <br>
real*8 :: vec(20000)=1.0<br>
integer :: ierr,i=0,request(1)<br>
    <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call mpi_init(ierr)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; do<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call mpi_isend(vec,20000,mpi_real8,
    <div>0,1,mpi_comm_world,request(1),ierr)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; i=i+1<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; print *,i<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; vec=-vec<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call usleep_fortran(2.d0)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call mpi_wait(request(1),MPI_STATUS_IGNORE,ierr)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; end do<br>
    <br>
end program send<br>
--------------------------------------------------<br>
#2<br>
program send<br>
implicit none<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; include 'mpif.h'<br>
    <br>
real*8 :: vec(20000)<br>
integer :: ierr<br>
    <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call mpi_init(ierr)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; do<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if(key_present()) then<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call
mpi_recv(vec,20000,mpi_real8,1,1,mpi_comm_world,MPI_STATUS_IGNORE,ierr)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; end if<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call usleep_fortran(0.05d0)<br>
    <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; end do<br>
    <br>
contains<br>
    <br>
function key_present()<br>
implicit none<br>
&nbsp; logical :: key_present<br>
    <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; key_present = .false.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call
mpi_iprobe(1,1,mpi_comm_world,key_present,MPI_STATUS_IGNORE,ierr)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; print *, key_present<br>
    <br>
end function key_present<br>
    <br>
end program send<br>
-----------------------------------<br>
The usleep_fortran is a routine I've written to pause the program for
that amount of time (in seconds).&nbsp; As you can see, on the receiving end
I'm probing to see whether the message has being received every 0.05
seconds, where each probing would result a print of the probing result;
while the sending is once every 2 seconds.&nbsp; <br>
    <br>
Doing<br>
mpirun -np 1 recv : -np 1 send<br>
&nbsp;Naturally I expect the output to be something like:<br clear="all">
    <br>
1<br>
(fourty or so F)<br>
T<br>
2<br>
(another fourty or so F)<br>
T<br>
3<br>
    <br>
however this is the output I get:<br>
    <br>
1<br>
(fourty or so F)<br>
T<br>
2<br>
(about a two second delay)<br>
T<br>
3<br>
    <br>
It seems to me that after the first set of probes, once the message was
received, the non-blocking mpi probe becomes blocking for some strange
reason.&nbsp; I'm using mpi_iprobe for the first time, so I'm not sure if
I'm doing something blatantly wrong.</div>
    </div>
    </div>
  </blockquote>
  </div>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13281.php">Ralph Castain: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Previous message:</strong> <a href="13279.php">Ralph Castain: "Re: [OMPI users] Specifying slots in rankfile"</a>
<li><strong>In reply to:</strong> <a href="13234.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13294.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<li><strong>Reply:</strong> <a href="13294.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
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
