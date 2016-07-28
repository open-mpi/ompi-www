<?
$subject_val = "Re: [OMPI users] Mpirun don't execute";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 17:14:57 2008" -->
<!-- isoreceived="20080922211457" -->
<!-- sent="Mon, 22 Sep 2008 17:14:52 -0400" -->
<!-- isosent="20080922211452" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun don't execute" -->
<!-- id="2F81948C-6026-4A2C-9EEA-DA28D33CAD0A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5f76eef60809221403u2743954fo3d1f451e63a5a227_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-09-22 17:14:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6672.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6670.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>In reply to:</strong> <a href="6670.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6724.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>Reply:</strong> <a href="6724.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Exactly what version of Open MPI are you using?  You mentioned &quot;1.3&quot;  
<br>
-- did you download a nightly tarball at some point, or do you have an  
<br>
SVN checkout?  Since you have a development copy of Open MPI, it is  
<br>
possible that your copy is simply broken (sorry; we *do* break the  
<br>
development head every once in a while...).  Can you update?
<br>
<p>Note that Josh just made some FT fixes on the trunk today that aren't  
<br>
on the v1.3 branch yet; they'll likely take a day or three to get there.
<br>
<p><p><p>On Sep 22, 2008, at 5:03 PM, Santolo Felaco wrote:
<br>
<p><span class="quotelev1">&gt; Hi, this is my  openmpi-default-hostfile:
</span><br>
<span class="quotelev1">&gt; 127.0.0.1 slots=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I invoke comand CTRL+C the application is not killed.
</span><br>
<span class="quotelev1">&gt; With mpirun -np 1 uptime the comand is ever blocked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The comand is blocked with any comand, also comands not existent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/9/22 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 19, 2008, at 6:50 PM, Santolo Felaco wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi, I try to be clearer:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try ctrl-c -- that's usually the way to kill applications that  
</span><br>
<span class="quotelev1">&gt; appear to have been hung.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is ps output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; osa_at_libertas:~/prove/openmpi$ mpirun -np 2 es1 &amp;
</span><br>
<span class="quotelev1">&gt; [1] 6151
</span><br>
<span class="quotelev1">&gt; osa_at_libertas:~/prove/openmpi$ ps
</span><br>
<span class="quotelev1">&gt;  PID TTY          TIME CMD
</span><br>
<span class="quotelev1">&gt;  6135 pts/2    00:00:00 bash
</span><br>
<span class="quotelev1">&gt;  6151 pts/2    00:00:00 mpirun
</span><br>
<span class="quotelev1">&gt;  6153 pts/2    00:00:00 ssh
</span><br>
<span class="quotelev1">&gt;  6161 pts/2    00:00:00 ps
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is your program doing?  Can you tell if it's getting past  
</span><br>
<span class="quotelev1">&gt; MPI_INIT, or even launching at all?  Can you mpirun non-MPI  
</span><br>
<span class="quotelev1">&gt; applications, such as &quot;hostname&quot; and &quot;uptime&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you launching this es1 application locally or remotely?  From  
</span><br>
<span class="quotelev1">&gt; your command line and previous description, I *assume* that it's  
</span><br>
<span class="quotelev1">&gt; local, but I see an &quot;ssh&quot; in your ps output, possibly meaning that  
</span><br>
<span class="quotelev1">&gt; mpirun has launched the application remotely (e.g., if you specified  
</span><br>
<span class="quotelev1">&gt; a default hostfile or somesuch).
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
<li><strong>Next message:</strong> <a href="6672.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6670.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>In reply to:</strong> <a href="6670.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6724.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>Reply:</strong> <a href="6724.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
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
