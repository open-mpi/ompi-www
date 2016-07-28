<?
$subject_val = "Re: [OMPI users] Segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 08:20:24 2007" -->
<!-- isoreceived="20071107132024" -->
<!-- sent="Wed, 7 Nov 2007 05:20:11 -0800 (PST)" -->
<!-- isosent="20071107132011" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault" -->
<!-- id="841990.23586.qm_at_web57612.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EA4F850B-4B80-4090-8A50-E35EF66BD67C_at_cisco.com" -->
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
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 08:20:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4435.php">Jeff Squyres: "Re: [OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0"</a>
<li><strong>Previous message:</strong> <a href="4433.php">Adrian Knoth: "Re: [OMPI users] Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="4432.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4441.php">Francesco Pietra: "Re: [OMPI users] Segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff:
<br>
I understand that my question was posed in extremely vague terms. Though,
<br>
pointing MPICH to the installation of OpenMPI was suggested by the author of
<br>
DOCK and it performed perfectly for a long while, until yesterday. Perhaps,
<br>
could you please instruct me how to verify beyond doubt if the &quot;apt-get update&quot;
<br>
has modified the version of OpenMPI that was originally installed (1.2.3)? On
<br>
its side, Debian Linux is a perfectly standard Linux.
<br>
<p>francesco
<br>
<p><p><p>--- Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm not familiar with DOCK or Debian, but you will definitely have  
</span><br>
<span class="quotelev1">&gt; problems if you mix-n-match MPI implementations.  Specifically, the  
</span><br>
<span class="quotelev1">&gt; mpi.h files are not compatible between MPICH and Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additionally, you may run into problems if you compile your app with  
</span><br>
<span class="quotelev1">&gt; one version of Open MPI and then run it with another.  We have not  
</span><br>
<span class="quotelev1">&gt; [yet] done anything in terms of binary compatibility between versions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 7, 2007, at 8:05 AM, Francesco Pietra wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I wonder whether any suggestion can be offered about segmentation  
</span><br>
<span class="quotelev2">&gt; &gt; fault
</span><br>
<span class="quotelev2">&gt; &gt; occurring on running a docking program (DOCK 6.1, written in C) on  
</span><br>
<span class="quotelev2">&gt; &gt; Debian Linux
</span><br>
<span class="quotelev2">&gt; &gt; amd64 etch, i.e. dual opterons machine. Running DOCK6.1 parallel was  
</span><br>
<span class="quotelev2">&gt; &gt; OK until
</span><br>
<span class="quotelev2">&gt; &gt; yesterday. I vaguely remember that before these problems I carried  
</span><br>
<span class="quotelev2">&gt; &gt; out a
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; apt-get upgrade
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and something was done for OpenMPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; DOCK 6.1 was compiled:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure gnu parallel
</span><br>
<span class="quotelev2">&gt; &gt; MPICH_HOME=/usr/local
</span><br>
<span class="quotelev2">&gt; &gt; export MPICH_HOME
</span><br>
<span class="quotelev2">&gt; &gt; make dock
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; by pointing MPICH (for which DOCK 6.1 is configured, to my  
</span><br>
<span class="quotelev2">&gt; &gt; installation of
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI 1.2.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In my .bashrc:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; DOCK_HOME=/usr/local/dock6
</span><br>
<span class="quotelev2">&gt; &gt; PATH=$PATH:$DOCK_HOME/bib; export DOCK_HOME PATH
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_HOME=/usr/local
</span><br>
<span class="quotelev2">&gt; &gt; export MPI_home
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; which mpicxx
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/bin/mpicxx
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; updatedb
</span><br>
<span class="quotelev2">&gt; &gt; locate mpi.h
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/sc/util/group/memmtmpi.h
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/sc/util/group/messmpi.h
</span><br>
<span class="quotelev2">&gt; &gt; /usr/dock6/src/dock/base_mpi.h
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/include/mpi.h
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmpi-1.2.3/ompi/include/mpi.h
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmpi-1.2.3/ompi/include/mpi.h.in
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmpi-1.2.3/ompi/mpi/f77/prototypes_mpi.h
</span><br>
<span class="quotelev2">&gt; &gt; -------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On these basis, running:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 4 dock6.mpi -i dock.in -o dock.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the process halted with error message:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Initialing MPI routines ....
</span><br>
<span class="quotelev2">&gt; &gt; [deb64:03540] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [deb64:03540] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [deb64:03540] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [deb64:03540] Failing at address: 0x2b9ef5691000
</span><br>
<span class="quotelev2">&gt; &gt; dock6.mpi[3540]: segfault at 00002b9ef56910000 rip 0000000000447b1b  
</span><br>
<span class="quotelev2">&gt; &gt; rsp
</span><br>
<span class="quotelev2">&gt; &gt; 00007fff43c137b0 error 6
</span><br>
<span class="quotelev2">&gt; &gt; [deb64:03540] [0] /lib/libthread.so.0 [0x2b9e681bc410]
</span><br>
<span class="quotelev2">&gt; &gt; [deb64:03540] [1] dock6.mpi (_ZN60rient12match_ligandER7DOCKMol+0x40b)
</span><br>
<span class="quotelev2">&gt; &gt; [0x447b1b]
</span><br>
<span class="quotelev2">&gt; &gt; [deb64:03540] [2] dock6.mpi (main+0xaf5) [0x42cc75]
</span><br>
<span class="quotelev2">&gt; &gt; [deb64:03540] [3] dock6.mpi /lib/libc.so.6(__libc_start_main+0xda)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2b9e682e14ca]
</span><br>
<span class="quotelev2">&gt; &gt; [deb64:03540] [4] dock6.mpi (__gxx_personality_v0+0xc2) [0x41b4ea]
</span><br>
<span class="quotelev2">&gt; &gt; [deb64:03540] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that jpb rank 0 with PID 3537 on node deb64 exited on  
</span><br>
<span class="quotelev2">&gt; &gt; signal 15
</span><br>
<span class="quotelev2">&gt; &gt; (Terminated).
</span><br>
<span class="quotelev2">&gt; &gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; francesco pietra
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; __________________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Do You Yahoo!?
</span><br>
<span class="quotelev2">&gt; &gt; Tired of spam?  Yahoo! Mail has the best spam protection around
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4435.php">Jeff Squyres: "Re: [OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0"</a>
<li><strong>Previous message:</strong> <a href="4433.php">Adrian Knoth: "Re: [OMPI users] Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="4432.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4441.php">Francesco Pietra: "Re: [OMPI users] Segmentation fault"</a>
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
