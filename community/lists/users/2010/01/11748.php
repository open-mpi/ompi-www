<?
$subject_val = "[OMPI users] execution problem on remote nodes with MPI 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 06:06:19 2010" -->
<!-- isoreceived="20100113110619" -->
<!-- sent="Wed, 13 Jan 2010 12:06:14 +0100 (CET)" -->
<!-- isosent="20100113110614" -->
<!-- name="gina.scorre1979_at_[hidden]" -->
<!-- email="gina.scorre1979_at_[hidden]" -->
<!-- subject="[OMPI users] execution problem on remote nodes with MPI 1.3" -->
<!-- id="14176976.697831263380774571.JavaMail.defaultUser_at_defaultHost" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] execution problem on remote nodes with MPI 1.3<br>
<strong>From:</strong> <a href="mailto:gina.scorre1979_at_[hidden]?Subject=Re:%20[OMPI%20users]%20execution%20problem%20on%20remote%20nodes%20with%20MPI%201.3"><em>gina.scorre1979_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-01-13 06:06:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11749.php">Jeff Squyres: "Re: [OMPI users] execution problem on remote nodes with MPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="11747.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11749.php">Jeff Squyres: "Re: [OMPI users] execution problem on remote nodes with MPI 1.3"</a>
<li><strong>Reply:</strong> <a href="11749.php">Jeff Squyres: "Re: [OMPI users] execution problem on remote nodes with MPI 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I've a problem with a parallel execution of my personal mpi program.
<br>
<p>When I execute it on localhost it works fine, but when I try to run it with two 
<br>
machines I receive this error:
<br>
<p>pietro_at_pietro-laptop:~/Scrivania$ mpirun --
<br>
prefix /home/user/MPI/ -np 4 --host user_at_xxx.yyy.zzz.kkk algo1.exe a2.txt b2.
<br>
txt
<br>
user_at_xxx.yyy.zzz.kkk's password:
<br>
[user:04778] *** Process received signal 
<br>
***
<br>
[user:04778] Signal: Segmentation fault (11)
<br>
[user:04778] Signal code: 
<br>
Address not mapped (1)
<br>
[user:04778] Failing at address: (nil)
<br>
[user:04778] [ 0] 
<br>
[0xe10410]
<br>
[user:04778] [ 1] algo1.exe(main+0xb9) [0x8048c8d]
<br>
[user:04778] [ 2] 
<br>
/lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xe6) [0xba5b56]
<br>
[user:04778] [ 
<br>
3] algo1.exe [0x8048b41]
<br>
[user:04778] *** End of error message ***
<br>
<p>--------------------------------------------------------------------------
<br>
<p>mpirun noticed that process rank 0 with PID 4778 on node user_at_xxx.yyy.zzz.kkk 
<br>
exited on signal 11 (Segmentation fault).
<br>
<p>--------------------------------------------------------------------------
<br>
<p><p>where:
<br>
-&gt; xxx.yyy.zzz.kkk is the IP of the other machine. 
<br>
-&gt; /home/user/MPI/ 
<br>
is the installation path of MPI 1.3 of the other machine
<br>
<p>I hope that someone 
<br>
can give me a some advices to solve this problem.
<br>
Thanks for your time
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11749.php">Jeff Squyres: "Re: [OMPI users] execution problem on remote nodes with MPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="11747.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11749.php">Jeff Squyres: "Re: [OMPI users] execution problem on remote nodes with MPI 1.3"</a>
<li><strong>Reply:</strong> <a href="11749.php">Jeff Squyres: "Re: [OMPI users] execution problem on remote nodes with MPI 1.3"</a>
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
