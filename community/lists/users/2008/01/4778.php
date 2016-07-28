<?
$subject_val = "Re: [OMPI users] Tracing the library using gdb and xterm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 11:07:07 2008" -->
<!-- isoreceived="20080103160707" -->
<!-- sent="Thu, 3 Jan 2008 08:02:42 -0800" -->
<!-- isosent="20080103160242" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tracing the library using gdb and xterm" -->
<!-- id="5F828F86-6687-401C-BF58-442534B6590E_at_rain.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b1a9299d0801030154m476560fdv83465de21defd28b_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-01-03 11:02:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4779.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Previous message:</strong> <a href="4777.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>In reply to:</strong> <a href="4776.php">Krishna Chaitanya: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4779.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Reply:</strong> <a href="4779.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Krishna,
<br>
<p>Review the ssh and sshd man pages. When using ssh -X it takes care of  
<br>
defining the DISPLAY and sending the X11 images to your screen.  
<br>
Defining DISPLY directly generally won't work (that is how you do it  
<br>
with rlogin but not with ssh).
<br>
<p>Doug Reeder
<br>
On Jan 3, 2008, at 1:54 AM, Krishna Chaitanya wrote:
<br>
<p><span class="quotelev1">&gt; Hi Rolf,
</span><br>
<span class="quotelev1">&gt;             Thanks for that. There is still one minor problem,  
</span><br>
<span class="quotelev1">&gt; though. The xwindow is getting spawned on the remote machine and  
</span><br>
<span class="quotelev1">&gt; not on my local machine. It now looks like,
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /usr/local -hostfile machines -x DISPLAY -x PATH  - 
</span><br>
<span class="quotelev1">&gt; np 2 xterm -e gdb peruse_ex1
</span><br>
<span class="quotelev1">&gt;             Please let me know what i can do to have it displayed  
</span><br>
<span class="quotelev1">&gt; on my machine. I have the DISPLAY variable set to 0.0 on both the  
</span><br>
<span class="quotelev1">&gt; machines and I am ssh-ing into the other machine by using the -X  
</span><br>
<span class="quotelev1">&gt; switch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Krishna Chaitanya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/2/08, Rolf Vandevaart &lt;Rolf.Vandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Krishna Chaitanya wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;                I have been tracing the interactions between the  
</span><br>
<span class="quotelev1">&gt; PERUSE
</span><br>
<span class="quotelev2">&gt; &gt; and MPI library,on one machine. I have been using gdb along with  
</span><br>
<span class="quotelev1">&gt; xterm
</span><br>
<span class="quotelev2">&gt; &gt; to have two windows open at the same time as I step through the  
</span><br>
<span class="quotelev1">&gt; code. I
</span><br>
<span class="quotelev2">&gt; &gt; wish to get a better glimpse of the working of the point to point  
</span><br>
<span class="quotelev1">&gt; calls,
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
<span class="quotelev2">&gt; &gt;                I tried using the display option for xterm and  
</span><br>
<span class="quotelev1">&gt; setting
</span><br>
<span class="quotelev2">&gt; &gt; the value as 0.0, that was not of much help.
</span><br>
<span class="quotelev2">&gt; &gt;                If someone can guide me as to where the DISPLAY  
</span><br>
<span class="quotelev1">&gt; parameter
</span><br>
<span class="quotelev2">&gt; &gt; has to be set to allow the remote machine to open the xterm  
</span><br>
<span class="quotelev1">&gt; window, it
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
<span class="quotelev1">&gt; In this way, both your DISPLAY and PATH settings make it to the  
</span><br>
<span class="quotelev1">&gt; remote node.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4778/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4779.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Previous message:</strong> <a href="4777.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>In reply to:</strong> <a href="4776.php">Krishna Chaitanya: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4779.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Reply:</strong> <a href="4779.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
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
