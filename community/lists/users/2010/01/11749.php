<?
$subject_val = "Re: [OMPI users] execution problem on remote nodes with MPI 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 07:58:29 2010" -->
<!-- isoreceived="20100113125829" -->
<!-- sent="Wed, 13 Jan 2010 07:58:24 -0500" -->
<!-- isosent="20100113125824" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] execution problem on remote nodes with MPI 1.3" -->
<!-- id="33605480-441B-4162-B4DF-1D0E06830ECA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="14176976.697831263380774571.JavaMail.defaultUser_at_defaultHost" -->
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
<strong>Subject:</strong> Re: [OMPI users] execution problem on remote nodes with MPI 1.3<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-13 07:58:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11750.php">Jeff Squyres: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11748.php">gina.scorre1979_at_[hidden]: "[OMPI users] execution problem on remote nodes with MPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="11748.php">gina.scorre1979_at_[hidden]: "[OMPI users] execution problem on remote nodes with MPI 1.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you get a core dump of your application on the 2nd node?  You might want to look at it and see exactly where the seg fault occurred.  The stack trace that is shown below does not include any MPI functions, suggesting that this might be an error in your application.
<br>
<p><p>On Jan 13, 2010, at 6:06 AM, &lt;gina.scorre1979_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I've a problem with a parallel execution of my personal mpi program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I execute it on localhost it works fine, but when I try to run it with two
</span><br>
<span class="quotelev1">&gt; machines I receive this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pietro_at_pietro-laptop:~/Scrivania$ mpirun --
</span><br>
<span class="quotelev1">&gt; prefix /home/user/MPI/ -np 4 --host user_at_xxx.yyy.zzz.kkk algo1.exe a2.txt b2.
</span><br>
<span class="quotelev1">&gt; txt
</span><br>
<span class="quotelev1">&gt; user_at_xxx.yyy.zzz.kkk's password:
</span><br>
<span class="quotelev1">&gt; [user:04778] *** Process received signal
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; [user:04778] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [user:04778] Signal code:
</span><br>
<span class="quotelev1">&gt; Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [user:04778] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [user:04778] [ 0]
</span><br>
<span class="quotelev1">&gt; [0xe10410]
</span><br>
<span class="quotelev1">&gt; [user:04778] [ 1] algo1.exe(main+0xb9) [0x8048c8d]
</span><br>
<span class="quotelev1">&gt; [user:04778] [ 2]
</span><br>
<span class="quotelev1">&gt; /lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xe6) [0xba5b56]
</span><br>
<span class="quotelev1">&gt; [user:04778] [
</span><br>
<span class="quotelev1">&gt; 3] algo1.exe [0x8048b41]
</span><br>
<span class="quotelev1">&gt; [user:04778] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 4778 on node user_at_xxx.yyy.zzz.kkk
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where:
</span><br>
<span class="quotelev1">&gt; -&gt; xxx.yyy.zzz.kkk is the IP of the other machine.
</span><br>
<span class="quotelev1">&gt; -&gt; /home/user/MPI/
</span><br>
<span class="quotelev1">&gt; is the installation path of MPI 1.3 of the other machine
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope that someone
</span><br>
<span class="quotelev1">&gt; can give me a some advices to solve this problem.
</span><br>
<span class="quotelev1">&gt; Thanks for your time
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11750.php">Jeff Squyres: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11748.php">gina.scorre1979_at_[hidden]: "[OMPI users] execution problem on remote nodes with MPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="11748.php">gina.scorre1979_at_[hidden]: "[OMPI users] execution problem on remote nodes with MPI 1.3"</a>
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
