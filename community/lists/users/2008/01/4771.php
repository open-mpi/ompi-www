<?
$subject_val = "Re: [OMPI users] Tracing the library using gdb and xterm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  1 13:44:57 2008" -->
<!-- isoreceived="20080101184457" -->
<!-- sent="Tue, 1 Jan 2008 10:40:34 -0800" -->
<!-- isosent="20080101184034" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tracing the library using gdb and xterm" -->
<!-- id="7B4D950B-5D45-40BC-8242-83E2327F90DB_at_rain.org" -->
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
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-01 13:40:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4772.php">Ralph H Castain: "Re: [OMPI users] orte in persistent mode"</a>
<li><strong>Previous message:</strong> <a href="4770.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>In reply to:</strong> <a href="4768.php">Krishna Chaitanya: "[OMPI users] Tracing the library using gdb and xterm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4774.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Reply:</strong> <a href="4774.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Krishna,
<br>
<p>If you are using ssh to connect to the second machine you need to be  
<br>
sure that ssh X11 forwarding is enabled and you may need to have mpi  
<br>
use ssh -X or ssh -Y to connect to the second machine. That is how  
<br>
the DISPLAY gets set using ssh.
<br>
<p>Doug Reeder
<br>
<p>On Jan 1, 2008, at 8:11 AM, Krishna Chaitanya wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;                I have been tracing the interactions between the  
</span><br>
<span class="quotelev1">&gt; PERUSE and MPI library,on one machine. I have been using gdb along  
</span><br>
<span class="quotelev1">&gt; with xterm to have two windows open at the same time as I step  
</span><br>
<span class="quotelev1">&gt; through the code. I wish to get a better glimpse of the working of  
</span><br>
<span class="quotelev1">&gt; the point to point calls, by launching the job on two machines and  
</span><br>
<span class="quotelev1">&gt; by tracing the flow in a similar manner. This is where I stand as  
</span><br>
<span class="quotelev1">&gt; of now :
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
<span class="quotelev1">&gt;                I tried using the display option for xterm and  
</span><br>
<span class="quotelev1">&gt; setting the value as 0.0, that was not of much help.
</span><br>
<span class="quotelev1">&gt;                If someone can guide me as to where the DISPLAY  
</span><br>
<span class="quotelev1">&gt; parameter has to be set to allow the remote machine to open the  
</span><br>
<span class="quotelev1">&gt; xterm window, it will be of great help.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4771/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4772.php">Ralph H Castain: "Re: [OMPI users] orte in persistent mode"</a>
<li><strong>Previous message:</strong> <a href="4770.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>In reply to:</strong> <a href="4768.php">Krishna Chaitanya: "[OMPI users] Tracing the library using gdb and xterm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4774.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Reply:</strong> <a href="4774.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
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
