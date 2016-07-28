<?
$subject_val = "Re: [OMPI users] Mpirun don't execute";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 08:48:18 2008" -->
<!-- isoreceived="20080922124818" -->
<!-- sent="Mon, 22 Sep 2008 08:48:12 -0400" -->
<!-- isosent="20080922124812" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun don't execute" -->
<!-- id="C2206CE7-DF8F-473C-92CD-5FC95422F4E6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5f76eef60809191550h16893de6o2f0ded76f20f6681_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 08:48:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6649.php">Robert Kubrick: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Previous message:</strong> <a href="6647.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6630.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6670.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>Reply:</strong> <a href="6670.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 19, 2008, at 6:50 PM, Santolo Felaco wrote:
<br>
<p><span class="quotelev1">&gt; Hi, I try to be clearer:
</span><br>
<span class="quotelev1">&gt; osa_at_libertas:~$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /usr/local/lib:/home/osa/blcr/lib
</span><br>
<span class="quotelev1">&gt; osa_at_libertas:~$ echo $PATH
</span><br>
<span class="quotelev1">&gt; /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/ 
</span><br>
<span class="quotelev1">&gt; games:/home/osa/blcr/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compile the file with mpicc, then:
</span><br>
<span class="quotelev1">&gt; osa_at_libertas:~/prove/openmpi$ mpirun -np 2 es1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The comand is blocked. Don't run. CTRL+X  does not end the program.
</span><br>
<p>Try ctrl-c -- that's usually the way to kill applications that appear  
<br>
to have been hung.
<br>
<p><span class="quotelev1">&gt; This is ps output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; osa_at_libertas:~/prove/openmpi$ mpirun -np 2 es1 &amp;
</span><br>
<span class="quotelev1">&gt; [1] 6151
</span><br>
<span class="quotelev1">&gt; osa_at_libertas:~/prove/openmpi$ ps
</span><br>
<span class="quotelev1">&gt;   PID TTY          TIME CMD
</span><br>
<span class="quotelev1">&gt;  6135 pts/2    00:00:00 bash
</span><br>
<span class="quotelev1">&gt;  6151 pts/2    00:00:00 mpirun
</span><br>
<span class="quotelev1">&gt;  6153 pts/2    00:00:00 ssh
</span><br>
<span class="quotelev1">&gt;  6161 pts/2    00:00:00 ps
</span><br>
<p><p>What is your program doing?  Can you tell if it's getting past  
<br>
MPI_INIT, or even launching at all?  Can you mpirun non-MPI  
<br>
applications, such as &quot;hostname&quot; and &quot;uptime&quot;?
<br>
<p>Are you launching this es1 application locally or remotely?  From your  
<br>
command line and previous description, I *assume* that it's local, but  
<br>
I see an &quot;ssh&quot; in your ps output, possibly meaning that mpirun has  
<br>
launched the application remotely (e.g., if you specified a default  
<br>
hostfile or somesuch).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6649.php">Robert Kubrick: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Previous message:</strong> <a href="6647.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6630.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6670.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>Reply:</strong> <a href="6670.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
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
