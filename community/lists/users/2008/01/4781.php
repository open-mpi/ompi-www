<?
$subject_val = "Re: [OMPI users] Tracing the library using gdb and xterm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 12:42:14 2008" -->
<!-- isoreceived="20080103174214" -->
<!-- sent="Thu, 3 Jan 2008 09:37:51 -0800" -->
<!-- isosent="20080103173751" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tracing the library using gdb and xterm" -->
<!-- id="9F455052-5829-4C5E-AE1C-1E4D978FF1F1_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D1EDBA41-B9D6-49C4-AE63-78928222A9AC_at_cisco.com" -->
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
<strong>Date:</strong> 2008-01-03 12:37:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4782.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="4780.php">Jim Kusznir: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>In reply to:</strong> <a href="4779.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Krishna,
<br>
<p>Would it work to launch the gdb/ddd process separately on the remote  
<br>
machine and then attaching to the mpi running jobfrom within gdb/ddd.  
<br>
Something like
<br>
<p>ssh -X [hostname|ip address] [ddd|gdb]
<br>
<p>Doug Reeder
<br>
On Jan 3, 2008, at 8:32 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Per my previous mail, Open MPI (by default) closes its ssh sessions
</span><br>
<span class="quotelev1">&gt; after the remote processes are launched, so X forwarding through ssh
</span><br>
<span class="quotelev1">&gt; will not work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it is possible (and I think it is, based on your subsequent
</span><br>
<span class="quotelev1">&gt; replies), you might be best served with unencrypted X forwarding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 3, 2008, at 11:02 AM, Doug Reeder wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Krishna,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Review the ssh and sshd man pages. When using ssh -X it takes care
</span><br>
<span class="quotelev2">&gt;&gt; of defining the DISPLAY and sending the X11 images to your screen.
</span><br>
<span class="quotelev2">&gt;&gt; Defining DISPLY directly generally won't work (that is how you do it
</span><br>
<span class="quotelev2">&gt;&gt; with rlogin but not with ssh).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 3, 2008, at 1:54 AM, Krishna Chaitanya wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Rolf,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Thanks for that. There is still one minor problem,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; though. The xwindow is getting spawned on the remote machine and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not on my local machine. It now looks like,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --prefix /usr/local -hostfile machines -x DISPLAY -x PATH  -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; np 2 xterm -e gdb peruse_ex1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Please let me know what i can do to have it displayed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on my machine. I have the DISPLAY variable set to 0.0 on both the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines and I am ssh-ing into the other machine by using the -X
</span><br>
<span class="quotelev3">&gt;&gt;&gt; switch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Krishna Chaitanya
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 1/2/08, Rolf Vandevaart &lt;Rolf.Vandevaart_at_[hidden]&gt; wrote: Krishna
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chaitanya wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                I have been tracing the interactions between the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PERUSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and MPI library,on one machine. I have been using gdb along with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xterm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to have two windows open at the same time as I step through the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code. I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wish to get a better glimpse of the working of the point to point
</span><br>
<span class="quotelev3">&gt;&gt;&gt; calls,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; by launching the job on two machines and by tracing the flow in a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; similar manner. This is where I stand as of now :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --prefix /usr/local -hostfile machines  -np 2 xterm -e gdb
</span><br>
<span class="quotelev3">&gt;&gt;&gt; peruse_ex1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xterm Xt error: Can't open display:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xterm:  DISPLAY is not set
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                I tried using the display option for xterm and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the value as 0.0, that was not of much help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                If someone can guide me as to where the DISPLAY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; has to be set to allow the remote machine to open the xterm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; window, it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will be of great help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Krishna
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also do the the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -x DISPLAY -x PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In this way, both your DISPLAY and PATH settings make it to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remote node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 781-442-3043
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the middle of difficulty, lies opportunity
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4782.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="4780.php">Jim Kusznir: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>In reply to:</strong> <a href="4779.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
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
