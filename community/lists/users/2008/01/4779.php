<?
$subject_val = "Re: [OMPI users] Tracing the library using gdb and xterm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 11:33:03 2008" -->
<!-- isoreceived="20080103163303" -->
<!-- sent="Thu, 3 Jan 2008 11:32:57 -0500" -->
<!-- isosent="20080103163257" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tracing the library using gdb and xterm" -->
<!-- id="D1EDBA41-B9D6-49C4-AE63-78928222A9AC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5F828F86-6687-401C-BF58-442534B6590E_at_rain.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-03 11:32:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4780.php">Jim Kusznir: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Previous message:</strong> <a href="4778.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>In reply to:</strong> <a href="4778.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4781.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Reply:</strong> <a href="4781.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per my previous mail, Open MPI (by default) closes its ssh sessions  
<br>
after the remote processes are launched, so X forwarding through ssh  
<br>
will not work.
<br>
<p>If it is possible (and I think it is, based on your subsequent  
<br>
replies), you might be best served with unencrypted X forwarding.
<br>
<p><p>On Jan 3, 2008, at 11:02 AM, Doug Reeder wrote:
<br>
<p><span class="quotelev1">&gt; Krishna,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Review the ssh and sshd man pages. When using ssh -X it takes care  
</span><br>
<span class="quotelev1">&gt; of defining the DISPLAY and sending the X11 images to your screen.  
</span><br>
<span class="quotelev1">&gt; Defining DISPLY directly generally won't work (that is how you do it  
</span><br>
<span class="quotelev1">&gt; with rlogin but not with ssh).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On Jan 3, 2008, at 1:54 AM, Krishna Chaitanya wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Rolf,
</span><br>
<span class="quotelev2">&gt;&gt;             Thanks for that. There is still one minor problem,  
</span><br>
<span class="quotelev2">&gt;&gt; though. The xwindow is getting spawned on the remote machine and  
</span><br>
<span class="quotelev2">&gt;&gt; not on my local machine. It now looks like,
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --prefix /usr/local -hostfile machines -x DISPLAY -x PATH  - 
</span><br>
<span class="quotelev2">&gt;&gt; np 2 xterm -e gdb peruse_ex1
</span><br>
<span class="quotelev2">&gt;&gt;             Please let me know what i can do to have it displayed  
</span><br>
<span class="quotelev2">&gt;&gt; on my machine. I have the DISPLAY variable set to 0.0 on both the  
</span><br>
<span class="quotelev2">&gt;&gt; machines and I am ssh-ing into the other machine by using the -X  
</span><br>
<span class="quotelev2">&gt;&gt; switch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Krishna Chaitanya
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 1/2/08, Rolf Vandevaart &lt;Rolf.Vandevaart_at_[hidden]&gt; wrote: Krishna  
</span><br>
<span class="quotelev2">&gt;&gt; Chaitanya wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                I have been tracing the interactions between the  
</span><br>
<span class="quotelev2">&gt;&gt; PERUSE
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and MPI library,on one machine. I have been using gdb along with  
</span><br>
<span class="quotelev2">&gt;&gt; xterm
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to have two windows open at the same time as I step through the  
</span><br>
<span class="quotelev2">&gt;&gt; code. I
</span><br>
<span class="quotelev3">&gt;&gt; &gt; wish to get a better glimpse of the working of the point to point  
</span><br>
<span class="quotelev2">&gt;&gt; calls,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; by launching the job on two machines and by tracing the flow in a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; similar manner. This is where I stand as of now :
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun --prefix /usr/local -hostfile machines  -np 2 xterm -e gdb  
</span><br>
<span class="quotelev2">&gt;&gt; peruse_ex1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; xterm Xt error: Can't open display:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; xterm:  DISPLAY is not set
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                I tried using the display option for xterm and  
</span><br>
<span class="quotelev2">&gt;&gt; setting
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the value as 0.0, that was not of much help.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                If someone can guide me as to where the DISPLAY  
</span><br>
<span class="quotelev2">&gt;&gt; parameter
</span><br>
<span class="quotelev3">&gt;&gt; &gt; has to be set to allow the remote machine to open the xterm  
</span><br>
<span class="quotelev2">&gt;&gt; window, it
</span><br>
<span class="quotelev3">&gt;&gt; &gt; will be of great help.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Krishna
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also do the the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -x DISPLAY -x PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this way, both your DISPLAY and PATH settings make it to the  
</span><br>
<span class="quotelev2">&gt;&gt; remote node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =========================
</span><br>
<span class="quotelev2">&gt;&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 781-442-3043
</span><br>
<span class="quotelev2">&gt;&gt; =========================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; In the middle of difficulty, lies opportunity
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4780.php">Jim Kusznir: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Previous message:</strong> <a href="4778.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>In reply to:</strong> <a href="4778.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4781.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Reply:</strong> <a href="4781.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
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
