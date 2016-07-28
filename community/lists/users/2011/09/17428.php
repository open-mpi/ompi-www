<?
$subject_val = "Re: [OMPI users] on cluster job slowdown near end";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 24 08:51:36 2011" -->
<!-- isoreceived="20110924125136" -->
<!-- sent="Sat, 24 Sep 2011 08:51:31 -0400" -->
<!-- isosent="20110924125131" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] on cluster job slowdown near end" -->
<!-- id="EC6E1A4B-3679-4127-9B71-CE8D3F9B1768_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E7BAC2B.5070305_at_colostate.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] on cluster job slowdown near end<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-24 08:51:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17429.php">Jeff Squyres: "Re: [OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="17427.php">Jeff Squyres: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>In reply to:</strong> <a href="17401.php">Tom Hilinski: "[OMPI users] on cluster job slowdown near end"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to run some profiling / timing to see what parts of the application start running slower over time.
<br>
<p>Also check for memory leaks.
<br>
<p><p>On Sep 22, 2011, at 5:44 PM, Tom Hilinski wrote:
<br>
<p><span class="quotelev1">&gt; Hi, A job I am running slows down as it approaches the end. I'd
</span><br>
<span class="quotelev1">&gt; appreciate any ideas you may have on possible cause or what else I can
</span><br>
<span class="quotelev1">&gt; look at for diagnostic info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Environment:
</span><br>
<span class="quotelev1">&gt; * Linux cluster, very recent version of Fedora.
</span><br>
<span class="quotelev1">&gt; * openmpi 1.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Characteristics of job:
</span><br>
<span class="quotelev1">&gt; * Tasks are all the same size and duration.
</span><br>
<span class="quotelev1">&gt; * 56K tasks, but multiple tasks given to each process.
</span><br>
<span class="quotelev1">&gt; * Typically run 120 processes.
</span><br>
<span class="quotelev1">&gt; * Slowdown starts at ~52K completed, then rate of completion of each
</span><br>
<span class="quotelev1">&gt; task declines geometrically from ~1k/minute to 4/minute at 54K.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are some queries done when the slowdown occurs:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * &quot;ps&quot; on master node - most processes in suspend state:
</span><br>
<span class="quotelev1">&gt; F S   UID   PID  PPID  C PRI  NI ADDR SZ WCHAN  TTY          TIME CMD
</span><br>
<span class="quotelev1">&gt; 0 S  3348 27933 15675  0  80   0 - 13608 poll_s pts/0    00:00:00 mpiexec
</span><br>
<span class="quotelev1">&gt; 0 S  3348 28009 27933 14  80   0 - 227632 epoll_ pts/0   00:08:13 C5MPI
</span><br>
<span class="quotelev1">&gt; 0 S  3348 28011 27933 14  80   0 - 227672 epoll_ pts/0   00:08:17 C5MPI
</span><br>
<span class="quotelev1">&gt; 0 S  3348 28013 27933 13  80   0 - 227713 epoll_ pts/0   00:08:06 C5MPI
</span><br>
<span class="quotelev1">&gt; 0 S  3348 28015 27933 13  80   0 - 227844 epoll_ pts/0   00:08:02 C5MPI
</span><br>
<span class="quotelev1">&gt; 0 S  3348 28017 27933 14  80   0 - 227849 epoll_ pts/0   00:08:13 C5MPI
</span><br>
<span class="quotelev1">&gt; 0 S  3348 28019 27933 13  80   0 - 227892 epoll_ pts/0   00:08:07 C5MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * file handles (allocated handle count is ~constant):
</span><br>
<span class="quotelev1">&gt; $ cat /proc/sys/fs/file-nr
</span><br>
<span class="quotelev1">&gt; 3968    0       801014
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Processes in a suspend or run state (varies):
</span><br>
<span class="quotelev1">&gt; $ orte-top -pid 27933 | grep ' S |' | wc -l
</span><br>
<span class="quotelev1">&gt; 124
</span><br>
<span class="quotelev1">&gt; $ orte-top -pid 27933 | grep ' R |'
</span><br>
<span class="quotelev1">&gt; Rank |  Nodename | Command |   Pid | State |   Time | Pri | #threads | 
</span><br>
<span class="quotelev1">&gt; Vsize |    RSS | Peak Vsize | Shr Size |
</span><br>
<span class="quotelev1">&gt;   0 | rubel-001 |   C5MPI | 14700 |     R |   2.2H |  20 |        1 |
</span><br>
<span class="quotelev1">&gt; 246208 |  12660 |     246208 |    17664 |
</span><br>
<span class="quotelev1">&gt;   1 | rubel-001 |   C5MPI | 14702 |     R |   2.2H |  20 |        1 |
</span><br>
<span class="quotelev1">&gt; 245360 |  44860 |     245360 |    17664 |
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17429.php">Jeff Squyres: "Re: [OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="17427.php">Jeff Squyres: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>In reply to:</strong> <a href="17401.php">Tom Hilinski: "[OMPI users] on cluster job slowdown near end"</a>
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
