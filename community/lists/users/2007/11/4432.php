<?
$subject_val = "Re: [OMPI users] Segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 08:09:22 2007" -->
<!-- isoreceived="20071107130922" -->
<!-- sent="Wed, 7 Nov 2007 08:09:14 -0500" -->
<!-- isosent="20071107130914" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault" -->
<!-- id="EA4F850B-4B80-4090-8A50-E35EF66BD67C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="968890.58665.qm_at_web57602.mail.re1.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 08:09:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4433.php">Adrian Knoth: "Re: [OMPI users] Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="4431.php">Francesco Pietra: "[OMPI users] Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="4431.php">Francesco Pietra: "[OMPI users] Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4433.php">Adrian Knoth: "Re: [OMPI users] Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="4433.php">Adrian Knoth: "Re: [OMPI users] Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="4434.php">Francesco Pietra: "Re: [OMPI users] Segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not familiar with DOCK or Debian, but you will definitely have  
<br>
problems if you mix-n-match MPI implementations.  Specifically, the  
<br>
mpi.h files are not compatible between MPICH and Open MPI.
<br>
<p>Additionally, you may run into problems if you compile your app with  
<br>
one version of Open MPI and then run it with another.  We have not  
<br>
[yet] done anything in terms of binary compatibility between versions.
<br>
<p><p>On Nov 7, 2007, at 8:05 AM, Francesco Pietra wrote:
<br>
<p><span class="quotelev1">&gt; I wonder whether any suggestion can be offered about segmentation  
</span><br>
<span class="quotelev1">&gt; fault
</span><br>
<span class="quotelev1">&gt; occurring on running a docking program (DOCK 6.1, written in C) on  
</span><br>
<span class="quotelev1">&gt; Debian Linux
</span><br>
<span class="quotelev1">&gt; amd64 etch, i.e. dual opterons machine. Running DOCK6.1 parallel was  
</span><br>
<span class="quotelev1">&gt; OK until
</span><br>
<span class="quotelev1">&gt; yesterday. I vaguely remember that before these problems I carried  
</span><br>
<span class="quotelev1">&gt; out a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; apt-get upgrade
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and something was done for OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DOCK 6.1 was compiled:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure gnu parallel
</span><br>
<span class="quotelev1">&gt; MPICH_HOME=/usr/local
</span><br>
<span class="quotelev1">&gt; export MPICH_HOME
</span><br>
<span class="quotelev1">&gt; make dock
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; by pointing MPICH (for which DOCK 6.1 is configured, to my  
</span><br>
<span class="quotelev1">&gt; installation of
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.2.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my .bashrc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DOCK_HOME=/usr/local/dock6
</span><br>
<span class="quotelev1">&gt; PATH=$PATH:$DOCK_HOME/bib; export DOCK_HOME PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_HOME=/usr/local
</span><br>
<span class="quotelev1">&gt; export MPI_home
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which mpicxx
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpicxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; updatedb
</span><br>
<span class="quotelev1">&gt; locate mpi.h
</span><br>
<span class="quotelev1">&gt; /usr/include/sc/util/group/memmtmpi.h
</span><br>
<span class="quotelev1">&gt; /usr/include/sc/util/group/messmpi.h
</span><br>
<span class="quotelev1">&gt; /usr/dock6/src/dock/base_mpi.h
</span><br>
<span class="quotelev1">&gt; /usr/local/include/mpi.h
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.2.3/ompi/include/mpi.h
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.2.3/ompi/include/mpi.h.in
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.2.3/ompi/mpi/f77/prototypes_mpi.h
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On these basis, running:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 dock6.mpi -i dock.in -o dock.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the process halted with error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Initialing MPI routines ....
</span><br>
<span class="quotelev1">&gt; [deb64:03540] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [deb64:03540] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [deb64:03540] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [deb64:03540] Failing at address: 0x2b9ef5691000
</span><br>
<span class="quotelev1">&gt; dock6.mpi[3540]: segfault at 00002b9ef56910000 rip 0000000000447b1b  
</span><br>
<span class="quotelev1">&gt; rsp
</span><br>
<span class="quotelev1">&gt; 00007fff43c137b0 error 6
</span><br>
<span class="quotelev1">&gt; [deb64:03540] [0] /lib/libthread.so.0 [0x2b9e681bc410]
</span><br>
<span class="quotelev1">&gt; [deb64:03540] [1] dock6.mpi (_ZN60rient12match_ligandER7DOCKMol+0x40b)
</span><br>
<span class="quotelev1">&gt; [0x447b1b]
</span><br>
<span class="quotelev1">&gt; [deb64:03540] [2] dock6.mpi (main+0xaf5) [0x42cc75]
</span><br>
<span class="quotelev1">&gt; [deb64:03540] [3] dock6.mpi /lib/libc.so.6(__libc_start_main+0xda)
</span><br>
<span class="quotelev1">&gt; [0x2b9e682e14ca]
</span><br>
<span class="quotelev1">&gt; [deb64:03540] [4] dock6.mpi (__gxx_personality_v0+0xc2) [0x41b4ea]
</span><br>
<span class="quotelev1">&gt; [deb64:03540] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that jpb rank 0 with PID 3537 on node deb64 exited on  
</span><br>
<span class="quotelev1">&gt; signal 15
</span><br>
<span class="quotelev1">&gt; (Terminated).
</span><br>
<span class="quotelev1">&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; francesco pietra
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __________________________________________________
</span><br>
<span class="quotelev1">&gt; Do You Yahoo!?
</span><br>
<span class="quotelev1">&gt; Tired of spam?  Yahoo! Mail has the best spam protection around
</span><br>
<span class="quotelev1">&gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
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
<li><strong>Next message:</strong> <a href="4433.php">Adrian Knoth: "Re: [OMPI users] Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="4431.php">Francesco Pietra: "[OMPI users] Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="4431.php">Francesco Pietra: "[OMPI users] Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4433.php">Adrian Knoth: "Re: [OMPI users] Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="4433.php">Adrian Knoth: "Re: [OMPI users] Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="4434.php">Francesco Pietra: "Re: [OMPI users] Segmentation fault"</a>
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
