<?
$subject_val = "Re: [OMPI users] mpi_iprobe not behaving as expect";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  6 14:35:54 2010" -->
<!-- isoreceived="20100606183554" -->
<!-- sent="Sun, 6 Jun 2010 11:35:29 -0700" -->
<!-- isosent="20100606183529" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_iprobe not behaving as expect" -->
<!-- id="15739_1275849354_o56IZn5f009814_AANLkTimVV-BOmw2rKnBQj26VHam0ndEfnk01ALh5LLu6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinW2ijtInUS2HmEQ8UF2X3VLC6aBIxBKVqmWDBM_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-06-06 14:35:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13235.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<li><strong>Previous message:</strong> <a href="13233.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<li><strong>In reply to:</strong> <a href="13231.php">David Zhang: "[OMPI users] mpi_iprobe not behaving as expect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13280.php">Eugene Loh: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<li><strong>Reply:</strong> <a href="13280.php">Eugene Loh: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have modified the code so that all the terminal outputs are done by one
<br>
executable.  I have attached the source files, after compiling type &quot;make
<br>
go&quot; and the code will execute.
<br>
<p>The previous code output was from a supercomputer cluster where the two
<br>
processes resides on two different nodes.  When running the same code on a
<br>
regular-multiprocessor machine (mac mini in this case), I got this output:
<br>
&nbsp;F
<br>
&nbsp;F
<br>
&nbsp;T
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
&nbsp;F
<br>
&nbsp;T
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2
<br>
&nbsp;F
<br>
&nbsp;T
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3
<br>
&nbsp;F
<br>
&nbsp;T
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4
<br>
<p>If I'm sending a message every 2 seconds and I'm polling every 0.05 second,
<br>
I would expect 39 F and 1 T between each number.  At least when I ran it on
<br>
the supercomputer, this is true during the very beginning; however I don't
<br>
even see this when I'm running the code on my mac mini.
<br>
<p>On Sat, Jun 5, 2010 at 2:44 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using mpi_iprobe to serve as a way to send signals between different
</span><br>
<span class="quotelev1">&gt; mpi executables. I'm using the following test codes (fortran):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #1
</span><br>
<span class="quotelev1">&gt; program send
</span><br>
<span class="quotelev1">&gt; implicit none
</span><br>
<span class="quotelev1">&gt;         include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; real*8 :: vec(20000)=1.0
</span><br>
<span class="quotelev1">&gt; integer :: ierr,i=0,request(1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt;         do
</span><br>
<span class="quotelev1">&gt;                 call mpi_isend(vec,20000,mpi_real8,
</span><br>
<span class="quotelev1">&gt; 0,1,mpi_comm_world,request(1),ierr)
</span><br>
<span class="quotelev1">&gt;                 i=i+1
</span><br>
<span class="quotelev1">&gt;                 print *,i
</span><br>
<span class="quotelev1">&gt;                 vec=-vec
</span><br>
<span class="quotelev1">&gt;                 call usleep_fortran(2.d0)
</span><br>
<span class="quotelev1">&gt;                 call mpi_wait(request(1),MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev1">&gt;         end do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end program send
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #2
</span><br>
<span class="quotelev1">&gt; program send
</span><br>
<span class="quotelev1">&gt; implicit none
</span><br>
<span class="quotelev1">&gt;         include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; real*8 :: vec(20000)
</span><br>
<span class="quotelev1">&gt; integer :: ierr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt;         do
</span><br>
<span class="quotelev1">&gt;                 if(key_present()) then
</span><br>
<span class="quotelev1">&gt;                         call
</span><br>
<span class="quotelev1">&gt; mpi_recv(vec,20000,mpi_real8,1,1,mpi_comm_world,MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev1">&gt;                 end if
</span><br>
<span class="quotelev1">&gt;                 call usleep_fortran(0.05d0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         end do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; contains
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; function key_present()
</span><br>
<span class="quotelev1">&gt; implicit none
</span><br>
<span class="quotelev1">&gt;   logical :: key_present
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         key_present = .false.
</span><br>
<span class="quotelev1">&gt;         call
</span><br>
<span class="quotelev1">&gt; mpi_iprobe(1,1,mpi_comm_world,key_present,MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev1">&gt;         print *, key_present
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end function key_present
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end program send
</span><br>
<span class="quotelev1">&gt; -----------------------------------
</span><br>
<span class="quotelev1">&gt; The usleep_fortran is a routine I've written to pause the program for that
</span><br>
<span class="quotelev1">&gt; amount of time (in seconds).  As you can see, on the receiving end I'm
</span><br>
<span class="quotelev1">&gt; probing to see whether the message has being received every 0.05 seconds,
</span><br>
<span class="quotelev1">&gt; where each probing would result a print of the probing result; while the
</span><br>
<span class="quotelev1">&gt; sending is once every 2 seconds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doing
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 recv : -np 1 send
</span><br>
<span class="quotelev1">&gt;  Naturally I expect the output to be something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; (fourty or so F)
</span><br>
<span class="quotelev1">&gt; T
</span><br>
<span class="quotelev1">&gt; 2
</span><br>
<span class="quotelev1">&gt; (another fourty or so F)
</span><br>
<span class="quotelev1">&gt; T
</span><br>
<span class="quotelev1">&gt; 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; however this is the output I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; (fourty or so F)
</span><br>
<span class="quotelev1">&gt; T
</span><br>
<span class="quotelev1">&gt; 2
</span><br>
<span class="quotelev1">&gt; (about a two second delay)
</span><br>
<span class="quotelev1">&gt; T
</span><br>
<span class="quotelev1">&gt; 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems to me that after the first set of probes, once the message was
</span><br>
<span class="quotelev1">&gt; received, the non-blocking mpi probe becomes blocking for some strange
</span><br>
<span class="quotelev1">&gt; reason.  I'm using mpi_iprobe for the first time, so I'm not sure if I'm
</span><br>
<span class="quotelev1">&gt; doing something blatantly wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
*****************************************************************************
**                                                                         **
** WARNING:  This email contains an attachment of a very suspicious type.  **
** You are urged NOT to open this attachment unless you are absolutely     **
** sure it is legitimate.  Opening this attachment may cause irreparable   **
** damage to your computer and your files.  If you have any questions      **
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
**                                                                         **
** This warning was added by the IU Computer Science Dept. mail scanner.   **
*****************************************************************************
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13234/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/zip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13234/send_recv.zip">send_recv.zip</a>
</ul>
<!-- attachment="send_recv.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13235.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<li><strong>Previous message:</strong> <a href="13233.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<li><strong>In reply to:</strong> <a href="13231.php">David Zhang: "[OMPI users] mpi_iprobe not behaving as expect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13280.php">Eugene Loh: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<li><strong>Reply:</strong> <a href="13280.php">Eugene Loh: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
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
