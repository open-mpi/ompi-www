<?
$subject_val = "Re: [OMPI users] Tracing the library using gdb and xterm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 04:54:44 2008" -->
<!-- isoreceived="20080103095444" -->
<!-- sent="Thu, 3 Jan 2008 15:24:38 +0530" -->
<!-- isosent="20080103095438" -->
<!-- name="Krishna Chaitanya" -->
<!-- email="kris.c1986_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tracing the library using gdb and xterm" -->
<!-- id="b1a9299d0801030154m476560fdv83465de21defd28b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="477BA1CC.7050008_at_Sun.COM" -->
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
<strong>From:</strong> Krishna Chaitanya (<em>kris.c1986_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-03 04:54:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4777.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Previous message:</strong> <a href="4775.php">Jeff Squyres: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Maybe in reply to:</strong> <a href="4768.php">Krishna Chaitanya: "[OMPI users] Tracing the library using gdb and xterm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4777.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Reply:</strong> <a href="4777.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Reply:</strong> <a href="4778.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rolf,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for that. There is still one minor problem, though. The
<br>
xwindow is getting spawned on the remote machine and not on my local
<br>
machine. It now looks like,
<br>
mpirun --prefix /usr/local -hostfile machines -x DISPLAY -x PATH  -np 2
<br>
xterm -e gdb peruse_ex1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please let me know what i can do to have it displayed on my
<br>
machine. I have the DISPLAY variable set to 0.0 on both the machines and I
<br>
am ssh-ing into the other machine by using the -X switch.
<br>
<p>Thanks,
<br>
Krishna Chaitanya
<br>
<p><p>On 1/2/08, Rolf Vandevaart &lt;Rolf.Vandevaart_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Krishna Chaitanya wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;                I have been tracing the interactions between the PERUSE
</span><br>
<span class="quotelev2">&gt; &gt; and MPI library,on one machine. I have been using gdb along with xterm
</span><br>
<span class="quotelev2">&gt; &gt; to have two windows open at the same time as I step through the code. I
</span><br>
<span class="quotelev2">&gt; &gt; wish to get a better glimpse of the working of the point to point calls,
</span><br>
<span class="quotelev2">&gt; &gt; by launching the job on two machines and by tracing the flow in a
</span><br>
<span class="quotelev2">&gt; &gt; similar manner. This is where I stand as of now :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --prefix /usr/local -hostfile machines  -np 2 xterm -e gdb
</span><br>
<span class="quotelev1">&gt; peruse_ex1
</span><br>
<span class="quotelev2">&gt; &gt; xterm Xt error: Can't open display:
</span><br>
<span class="quotelev2">&gt; &gt; xterm:  DISPLAY is not set
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                I tried using the display option for xterm and setting
</span><br>
<span class="quotelev2">&gt; &gt; the value as 0.0, that was not of much help.
</span><br>
<span class="quotelev2">&gt; &gt;                If someone can guide me as to where the DISPLAY parameter
</span><br>
<span class="quotelev2">&gt; &gt; has to be set to allow the remote machine to open the xterm window, it
</span><br>
<span class="quotelev2">&gt; &gt; will be of great help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Krishna
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also do the the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -x DISPLAY -x PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this way, both your DISPLAY and PATH settings make it to the remote
</span><br>
<span class="quotelev1">&gt; node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 781-442-3043
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
In the middle of difficulty, lies opportunity
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4776/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4777.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Previous message:</strong> <a href="4775.php">Jeff Squyres: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Maybe in reply to:</strong> <a href="4768.php">Krishna Chaitanya: "[OMPI users] Tracing the library using gdb and xterm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4777.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Reply:</strong> <a href="4777.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Reply:</strong> <a href="4778.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
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
