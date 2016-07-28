<?
$subject_val = "Re: [OMPI users] mpi_iprobe not behaving as expect";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  6 14:37:33 2010" -->
<!-- isoreceived="20100606183733" -->
<!-- sent="Sun, 6 Jun 2010 18:36:57 +0000" -->
<!-- isosent="20100606183657" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_iprobe not behaving as expect" -->
<!-- id="1929187089.1275849417370_at_ace.smi" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] mpi_iprobe not behaving as expect" -->
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
<strong>Date:</strong> 2010-06-06 14:36:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13236.php">Gijsbert Wiesenekker: "[OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
<li><strong>Previous message:</strong> <a href="13234.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<li><strong>Maybe in reply to:</strong> <a href="13231.php">David Zhang: "[OMPI users] mpi_iprobe not behaving as expect"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This email contained a .zip file attachment. Raytheon does not allow email attachments that are considered likely to contain malicious code. For your protection this attachment has been removed.
<br>
<p>If this email is from an unknown source, please simply delete this email.
<br>
<p>If this email was expected, and it is from a known sender, you may follow the below suggested instructions to obtain these types of attachments.
<br>
<p>+ Instruct the sender to enclose the file(s) in a &quot;.zip&quot; compressed file, and rename the &quot;.zip&quot; compressed file with a different extension, such as, &quot;.rtnzip&quot;.  Password protecting the renamed &quot;.zip&quot; compressed file adds an additional layer of protection. When you receive the file, please rename it with the extension &quot;.zip&quot;.
<br>
<p>Additional instructions and options on how to receive these attachments can be found at:
<br>
<p><a href="http://security.it.ray.com/antivirus/extensions.html">http://security.it.ray.com/antivirus/extensions.html</a>
<br>
<a href="http://security.it.ray.com/news/2007/zipfiles.html">http://security.it.ray.com/news/2007/zipfiles.html</a>
<br>
<p>Should you have any questions or difficulty with these instructions, please contact the Help Desk at 877.844.4712
<br>
<p><pre>
---
I have modified the code so that all the terminal outputs are done by one
executable.  I have attached the source files, after compiling type &quot;make
go&quot; and the code will execute.
The previous code output was from a supercomputer cluster where the two
processes resides on two different nodes.  When running the same code on a
regular-multiprocessor machine (mac mini in this case), I got this output:
 F
 F
 T
           1
 F
 T
           2
 F
 T
           3
 F
 T
           4
If I'm sending a message every 2 seconds and I'm polling every 0.05 second,
I would expect 39 F and 1 T between each number.  At least when I ran it on
the supercomputer, this is true during the very beginning; however I don't
even see this when I'm running the code on my mac mini.
On Sat, Jun 5, 2010 at 2:44 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
&gt; Dear all:
&gt;
&gt; I'm using mpi_iprobe to serve as a way to send signals between different
&gt; mpi executables. I'm using the following test codes (fortran):
&gt;
&gt; #1
&gt; program send
&gt; implicit none
&gt;         include 'mpif.h'
&gt;
&gt; real*8 :: vec(20000)=1.0
&gt; integer :: ierr,i=0,request(1)
&gt;
&gt;         call mpi_init(ierr)
&gt;         do
&gt;                 call mpi_isend(vec,20000,mpi_real8,
&gt; 0,1,mpi_comm_world,request(1),ierr)
&gt;                 i=i+1
&gt;                 print *,i
&gt;                 vec=-vec
&gt;                 call usleep_fortran(2.d0)
&gt;                 call mpi_wait(request(1),MPI_STATUS_IGNORE,ierr)
&gt;         end do
&gt;
&gt; end program send
&gt; --------------------------------------------------
&gt; #2
&gt; program send
&gt; implicit none
&gt;         include 'mpif.h'
&gt;
&gt; real*8 :: vec(20000)
&gt; integer :: ierr
&gt;
&gt;         call mpi_init(ierr)
&gt;         do
&gt;                 if(key_present()) then
&gt;                         call
&gt; mpi_recv(vec,20000,mpi_real8,1,1,mpi_comm_world,MPI_STATUS_IGNORE,ierr)
&gt;                 end if
&gt;                 call usleep_fortran(0.05d0)
&gt;
&gt;         end do
&gt;
&gt; contains
&gt;
&gt; function key_present()
&gt; implicit none
&gt;   logical :: key_present
&gt;
&gt;         key_present = .false.
&gt;         call
&gt; mpi_iprobe(1,1,mpi_comm_world,key_present,MPI_STATUS_IGNORE,ierr)
&gt;         print *, key_present
&gt;
&gt; end function key_present
&gt;
&gt; end program send
&gt; -----------------------------------
&gt; The usleep_fortran is a routine I've written to pause the program for that
&gt; amount of time (in seconds).  As you can see, on the receiving end I'm
&gt; probing to see whether the message has being received every 0.05 seconds,
&gt; where each probing would result a print of the probing result; while the
&gt; sending is once every 2 seconds.
&gt;
&gt; Doing
&gt; mpirun -np 1 recv : -np 1 send
&gt;  Naturally I expect the output to be something like:
&gt;
&gt; 1
&gt; (fourty or so F)
&gt; T
&gt; 2
&gt; (another fourty or so F)
&gt; T
&gt; 3
&gt;
&gt; however this is the output I get:
&gt;
&gt; 1
&gt; (fourty or so F)
&gt; T
&gt; 2
&gt; (about a two second delay)
&gt; T
&gt; 3
&gt;
&gt; It seems to me that after the first set of probes, once the message was
&gt; received, the non-blocking mpi probe becomes blocking for some strange
&gt; reason.  I'm using mpi_iprobe for the first time, so I'm not sure if I'm
&gt; doing something blatantly wrong.
&gt;
&gt;
&gt; --
&gt; David Zhang
&gt; University of California, San Diego
&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13236.php">Gijsbert Wiesenekker: "[OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
<li><strong>Previous message:</strong> <a href="13234.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<li><strong>Maybe in reply to:</strong> <a href="13231.php">David Zhang: "[OMPI users] mpi_iprobe not behaving as expect"</a>
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
