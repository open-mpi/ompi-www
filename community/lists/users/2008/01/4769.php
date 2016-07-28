<?
$subject_val = "Re: [OMPI users] Tracing the library using gdb and xterm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  1 11:23:00 2008" -->
<!-- isoreceived="20080101162300" -->
<!-- sent="Tue, 01 Jan 2008 10:26:15 -0600" -->
<!-- isosent="20080101162615" -->
<!-- name="Jeff Pummill" -->
<!-- email="jpummil_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tracing the library using gdb and xterm" -->
<!-- id="477A69A7.5010609_at_uark.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b1a9299d0801010811n355b466ci214147f6636b1672_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Tracing the library using gdb and xterm<br>
<strong>From:</strong> Jeff Pummill (<em>jpummil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-01 11:26:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4770.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="4768.php">Krishna Chaitanya: "[OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>In reply to:</strong> <a href="4768.php">Krishna Chaitanya: "[OMPI users] Tracing the library using gdb and xterm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4771.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Krishna,
<br>
<p>When you log in to the remote system, use ssh -X or ssh -Y which will 
<br>
export the xterm back thru the ssh connection.
<br>
<p>Jeff Pummill
<br>
University of Arkansas
<br>
<p><p>Krishna Chaitanya wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;                I have been tracing the interactions between the PERUSE 
</span><br>
<span class="quotelev1">&gt; and MPI library,on one machine. I have been using gdb along with xterm 
</span><br>
<span class="quotelev1">&gt; to have two windows open at the same time as I step through the code. 
</span><br>
<span class="quotelev1">&gt; I wish to get a better glimpse of the working of the point to point 
</span><br>
<span class="quotelev1">&gt; calls, by launching the job on two machines and by tracing the flow in 
</span><br>
<span class="quotelev1">&gt; a similar manner. This is where I stand as of now :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /usr/local -hostfile machines  -np 2 xterm -e gdb 
</span><br>
<span class="quotelev1">&gt; peruse_ex1
</span><br>
<span class="quotelev1">&gt; xterm Xt error: Can't open display:
</span><br>
<span class="quotelev1">&gt; xterm:  DISPLAY is not set
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                I tried using the display option for xterm and setting 
</span><br>
<span class="quotelev1">&gt; the value as 0.0, that was not of much help.
</span><br>
<span class="quotelev1">&gt;                If someone can guide me as to where the DISPLAY 
</span><br>
<span class="quotelev1">&gt; parameter has to be set to allow the remote machine to open the xterm 
</span><br>
<span class="quotelev1">&gt; window, it will be of great help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Krishna
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; In the middle of difficulty, lies opportunity
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4769/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4770.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="4768.php">Krishna Chaitanya: "[OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>In reply to:</strong> <a href="4768.php">Krishna Chaitanya: "[OMPI users] Tracing the library using gdb and xterm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4771.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
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
