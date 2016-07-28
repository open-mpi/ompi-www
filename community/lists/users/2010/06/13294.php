<?
$subject_val = "Re: [OMPI users] mpi_iprobe not behaving as expect";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 23:24:34 2010" -->
<!-- isoreceived="20100610032434" -->
<!-- sent="Wed, 9 Jun 2010 20:24:08 -0700" -->
<!-- isosent="20100610032408" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_iprobe not behaving as expect" -->
<!-- id="AANLkTilSM587dCIx8WFmUDGcmrEQqUy4TFunCN3k-gG6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C0FC373.2020002_at_oracle.com" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 23:24:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13295.php">Richard Walsh: "[OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<li><strong>Previous message:</strong> <a href="13293.php">Audet, Martin: "Re: [OMPI users] Unable to connect to a server using MX MTL with TCP"</a>
<li><strong>In reply to:</strong> <a href="13280.php">Eugene Loh: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13235.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reply.  I've somewhat figured it out the reason.  It seems
<br>
that when a non-blocking send is posted, mpi doesn't spawn another process
<br>
that takes care the sending.  The sending occurs only when the processor is
<br>
idle.  Since the data I sent was immense (20000) elements, there wasn't
<br>
sufficient free processor time during the sleep_fortran command to send the
<br>
entire vector.  When I changed the send and receive pair to work only with a
<br>
scalar, I got the expected behavior.
<br>
<p>Eugene, you're absolutely right about Iprobe returning true when the message
<br>
header is received.  Even when Iprobe returns true doesn't mean the message
<br>
buffer can be read.  This is not quite what I wanted, so I think I'll be
<br>
using non-blocking receive and periodic mpi_test polling instead.
<br>
<p>On Wed, Jun 9, 2010 at 9:38 AM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  I'll take a stab at this since I don't remember seeing any other replies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At least in the original code you sent out, you used Isend/sleep/Wait to
</span><br>
<span class="quotelev1">&gt; send messages.  So, I'm guessing that part of the message is sent, Iprobe
</span><br>
<span class="quotelev1">&gt; detects that a matching message is in-coming, and then the receiver goes
</span><br>
<span class="quotelev1">&gt; into MPI_Recv.  This call then can begin to receive the message, but it's
</span><br>
<span class="quotelev1">&gt; stuck waiting for the remainder of the message to arrive.  Off hand, I don't
</span><br>
<span class="quotelev1">&gt; know if that is how MPI_Iprobe is supposed to behave or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mpi-forum.org/docs/mpi-11-html/node50.html#Node50">http://www.mpi-forum.org/docs/mpi-11-html/node50.html#Node50</a>
</span><br>
<span class="quotelev1">&gt; MPI_IPROBE(source, tag, comm, flag, status) returns flag = true if there is
</span><br>
<span class="quotelev1">&gt; a message that can be received and that matches the pattern specified by the
</span><br>
<span class="quotelev1">&gt; arguments source, tag, and comm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suppose this language leaves open the possibility that the message is not
</span><br>
<span class="quotelev1">&gt; yet 100% available to be read, but only that the message header has been
</span><br>
<span class="quotelev1">&gt; received and that it sufficiently matches that specified matching criteria.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David Zhang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have modified the code so that all the terminal outputs are done by one
</span><br>
<span class="quotelev1">&gt; executable.  I have attached the source files, after compiling type &quot;make
</span><br>
<span class="quotelev1">&gt; go&quot; and the code will execute.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The previous code output was from a supercomputer cluster where the two
</span><br>
<span class="quotelev1">&gt; processes resides on two different nodes.  When running the same code on a
</span><br>
<span class="quotelev1">&gt; regular-multiprocessor machine (mac mini in this case), I got this output:
</span><br>
<span class="quotelev1">&gt;  F
</span><br>
<span class="quotelev1">&gt;  F
</span><br>
<span class="quotelev1">&gt;  T
</span><br>
<span class="quotelev1">&gt;            1
</span><br>
<span class="quotelev1">&gt;  F
</span><br>
<span class="quotelev1">&gt;  T
</span><br>
<span class="quotelev1">&gt;            2
</span><br>
<span class="quotelev1">&gt;  F
</span><br>
<span class="quotelev1">&gt;  T
</span><br>
<span class="quotelev1">&gt;            3
</span><br>
<span class="quotelev1">&gt;  F
</span><br>
<span class="quotelev1">&gt;  T
</span><br>
<span class="quotelev1">&gt;            4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I'm sending a message every 2 seconds and I'm polling every 0.05 second,
</span><br>
<span class="quotelev1">&gt; I would expect 39 F and 1 T between each number.  At least when I ran it on
</span><br>
<span class="quotelev1">&gt; the supercomputer, this is true during the very beginning; however I don't
</span><br>
<span class="quotelev1">&gt; even see this when I'm running the code on my mac mini.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Jun 5, 2010 at 2:44 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Dear all:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using mpi_iprobe to serve as a way to send signals between different
</span><br>
<span class="quotelev2">&gt;&gt; mpi executables. I'm using the following test codes (fortran):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #1
</span><br>
<span class="quotelev2">&gt;&gt; program send
</span><br>
<span class="quotelev2">&gt;&gt; implicit none
</span><br>
<span class="quotelev2">&gt;&gt;         include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; real*8 :: vec(20000)=1.0
</span><br>
<span class="quotelev2">&gt;&gt; integer :: ierr,i=0,request(1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         call mpi_init(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;         do
</span><br>
<span class="quotelev2">&gt;&gt;                 call mpi_isend(vec,20000,mpi_real8,
</span><br>
<span class="quotelev2">&gt;&gt; 0,1,mpi_comm_world,request(1),ierr)
</span><br>
<span class="quotelev2">&gt;&gt;                 i=i+1
</span><br>
<span class="quotelev2">&gt;&gt;                 print *,i
</span><br>
<span class="quotelev2">&gt;&gt;                 vec=-vec
</span><br>
<span class="quotelev2">&gt;&gt;                 call usleep_fortran(2.d0)
</span><br>
<span class="quotelev2">&gt;&gt;                 call mpi_wait(request(1),MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;         end do
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; end program send
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #2
</span><br>
<span class="quotelev2">&gt;&gt; program send
</span><br>
<span class="quotelev2">&gt;&gt; implicit none
</span><br>
<span class="quotelev2">&gt;&gt;         include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; real*8 :: vec(20000)
</span><br>
<span class="quotelev2">&gt;&gt; integer :: ierr
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         call mpi_init(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;         do
</span><br>
<span class="quotelev2">&gt;&gt;                 if(key_present()) then
</span><br>
<span class="quotelev2">&gt;&gt;                         call
</span><br>
<span class="quotelev2">&gt;&gt; mpi_recv(vec,20000,mpi_real8,1,1,mpi_comm_world,MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;                 end if
</span><br>
<span class="quotelev2">&gt;&gt;                 call usleep_fortran(0.05d0)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         end do
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; contains
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; function key_present()
</span><br>
<span class="quotelev2">&gt;&gt; implicit none
</span><br>
<span class="quotelev2">&gt;&gt;   logical :: key_present
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         key_present = .false.
</span><br>
<span class="quotelev2">&gt;&gt;         call
</span><br>
<span class="quotelev2">&gt;&gt; mpi_iprobe(1,1,mpi_comm_world,key_present,MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;         print *, key_present
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; end function key_present
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; end program send
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; The usleep_fortran is a routine I've written to pause the program for that
</span><br>
<span class="quotelev2">&gt;&gt; amount of time (in seconds).  As you can see, on the receiving end I'm
</span><br>
<span class="quotelev2">&gt;&gt; probing to see whether the message has being received every 0.05 seconds,
</span><br>
<span class="quotelev2">&gt;&gt; where each probing would result a print of the probing result; while the
</span><br>
<span class="quotelev2">&gt;&gt; sending is once every 2 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doing
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 recv : -np 1 send
</span><br>
<span class="quotelev2">&gt;&gt;  Naturally I expect the output to be something like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1
</span><br>
<span class="quotelev2">&gt;&gt; (fourty or so F)
</span><br>
<span class="quotelev2">&gt;&gt; T
</span><br>
<span class="quotelev2">&gt;&gt; 2
</span><br>
<span class="quotelev2">&gt;&gt; (another fourty or so F)
</span><br>
<span class="quotelev2">&gt;&gt; T
</span><br>
<span class="quotelev2">&gt;&gt; 3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; however this is the output I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1
</span><br>
<span class="quotelev2">&gt;&gt; (fourty or so F)
</span><br>
<span class="quotelev2">&gt;&gt; T
</span><br>
<span class="quotelev2">&gt;&gt; 2
</span><br>
<span class="quotelev2">&gt;&gt; (about a two second delay)
</span><br>
<span class="quotelev2">&gt;&gt; T
</span><br>
<span class="quotelev2">&gt;&gt; 3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems to me that after the first set of probes, once the message was
</span><br>
<span class="quotelev2">&gt;&gt; received, the non-blocking mpi probe becomes blocking for some strange
</span><br>
<span class="quotelev2">&gt;&gt; reason.  I'm using mpi_iprobe for the first time, so I'm not sure if I'm
</span><br>
<span class="quotelev2">&gt;&gt; doing something blatantly wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13294/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13295.php">Richard Walsh: "[OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<li><strong>Previous message:</strong> <a href="13293.php">Audet, Martin: "Re: [OMPI users] Unable to connect to a server using MX MTL with TCP"</a>
<li><strong>In reply to:</strong> <a href="13280.php">Eugene Loh: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13235.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
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
