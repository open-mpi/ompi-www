<?
$subject_val = "Re: [OMPI users] Mpirun don't execute";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 17:03:15 2008" -->
<!-- isoreceived="20080922210315" -->
<!-- sent="Mon, 22 Sep 2008 23:03:10 +0200" -->
<!-- isosent="20080922210310" -->
<!-- name="Santolo Felaco" -->
<!-- email="ahuramazda10_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun don't execute" -->
<!-- id="5f76eef60809221403u2743954fo3d1f451e63a5a227_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C2206CE7-DF8F-473C-92CD-5FC95422F4E6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mpirun don't execute<br>
<strong>From:</strong> Santolo Felaco (<em>ahuramazda10_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 17:03:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6671.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>Previous message:</strong> <a href="6669.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<li><strong>In reply to:</strong> <a href="6648.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6671.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>Reply:</strong> <a href="6671.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, this is my  openmpi-default-hostfile:
<br>
127.0.0.1 slots=2
<br>
<p>If I invoke comand CTRL+C the application is not killed.
<br>
With mpirun -np 1 uptime the comand is ever blocked.
<br>
<p>The comand is blocked with any comand, also comands not existent.
<br>
<p>Thanks.
<br>
<p><p>2008/9/22 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On Sep 19, 2008, at 6:50 PM, Santolo Felaco wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi, I try to be clearer:
</span><br>
<span class="quotelev2">&gt;&gt; osa_at_libertas:~$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib:/home/osa/blcr/lib
</span><br>
<span class="quotelev2">&gt;&gt; osa_at_libertas:~$ echo $PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/home/osa/blcr/bin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I compile the file with mpicc, then:
</span><br>
<span class="quotelev2">&gt;&gt; osa_at_libertas:~/prove/openmpi$ mpirun -np 2 es1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The comand is blocked. Don't run. CTRL+X  does not end the program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try ctrl-c -- that's usually the way to kill applications that appear to
</span><br>
<span class="quotelev1">&gt; have been hung.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This is ps output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; osa_at_libertas:~/prove/openmpi$ mpirun -np 2 es1 &amp;
</span><br>
<span class="quotelev2">&gt;&gt; [1] 6151
</span><br>
<span class="quotelev2">&gt;&gt; osa_at_libertas:~/prove/openmpi$ ps
</span><br>
<span class="quotelev2">&gt;&gt;  PID TTY          TIME CMD
</span><br>
<span class="quotelev2">&gt;&gt;  6135 pts/2    00:00:00 bash
</span><br>
<span class="quotelev2">&gt;&gt;  6151 pts/2    00:00:00 mpirun
</span><br>
<span class="quotelev2">&gt;&gt;  6153 pts/2    00:00:00 ssh
</span><br>
<span class="quotelev2">&gt;&gt;  6161 pts/2    00:00:00 ps
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is your program doing?  Can you tell if it's getting past MPI_INIT, or
</span><br>
<span class="quotelev1">&gt; even launching at all?  Can you mpirun non-MPI applications, such as
</span><br>
<span class="quotelev1">&gt; &quot;hostname&quot; and &quot;uptime&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you launching this es1 application locally or remotely?  From your
</span><br>
<span class="quotelev1">&gt; command line and previous description, I *assume* that it's local, but I see
</span><br>
<span class="quotelev1">&gt; an &quot;ssh&quot; in your ps output, possibly meaning that mpirun has launched the
</span><br>
<span class="quotelev1">&gt; application remotely (e.g., if you specified a default hostfile or
</span><br>
<span class="quotelev1">&gt; somesuch).
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6670/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6671.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>Previous message:</strong> <a href="6669.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<li><strong>In reply to:</strong> <a href="6648.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6671.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>Reply:</strong> <a href="6671.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
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
