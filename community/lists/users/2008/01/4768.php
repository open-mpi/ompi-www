<?
$subject_val = "[OMPI users] Tracing the library using gdb and xterm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  1 11:11:51 2008" -->
<!-- isoreceived="20080101161151" -->
<!-- sent="Tue, 1 Jan 2008 21:41:46 +0530" -->
<!-- isosent="20080101161146" -->
<!-- name="Krishna Chaitanya" -->
<!-- email="kris.c1986_at_[hidden]" -->
<!-- subject="[OMPI users] Tracing the library using gdb and xterm" -->
<!-- id="b1a9299d0801010811n355b466ci214147f6636b1672_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Tracing the library using gdb and xterm<br>
<strong>From:</strong> Krishna Chaitanya (<em>kris.c1986_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-01 11:11:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4769.php">Jeff Pummill: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Previous message:</strong> <a href="4767.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4769.php">Jeff Pummill: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Reply:</strong> <a href="4769.php">Jeff Pummill: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Reply:</strong> <a href="4771.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Maybe reply:</strong> <a href="4776.php">Krishna Chaitanya: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have been tracing the interactions between the PERUSE and
<br>
MPI library,on one machine. I have been using gdb along with xterm to have
<br>
two windows open at the same time as I step through the code. I wish to get
<br>
a better glimpse of the working of the point to point calls, by launching
<br>
the job on two machines and by tracing the flow in a similar manner. This is
<br>
where I stand as of now :
<br>
<p>mpirun --prefix /usr/local -hostfile machines  -np 2 xterm -e gdb peruse_ex1
<br>
xterm Xt error: Can't open display:
<br>
xterm:  DISPLAY is not set
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I tried using the display option for xterm and setting the
<br>
value as 0.0, that was not of much help.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If someone can guide me as to where the DISPLAY parameter has
<br>
to be set to allow the remote machine to open the xterm window, it will be
<br>
of great help.
<br>
<p>Thanks,
<br>
Krishna
<br>
<p><p><p><pre>
-- 
In the middle of difficulty, lies opportunity
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4768/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4769.php">Jeff Pummill: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Previous message:</strong> <a href="4767.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4769.php">Jeff Pummill: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Reply:</strong> <a href="4769.php">Jeff Pummill: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Reply:</strong> <a href="4771.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Maybe reply:</strong> <a href="4776.php">Krishna Chaitanya: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
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
