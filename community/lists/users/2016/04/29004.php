<?
$subject_val = "Re: [OMPI users] MPIRUN SEGMENTATION FAULT";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 23 09:39:28 2016" -->
<!-- isoreceived="20160423133928" -->
<!-- sent="Sat, 23 Apr 2016 06:39:23 -0700" -->
<!-- isosent="20160423133923" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIRUN SEGMENTATION FAULT" -->
<!-- id="1AFA9778-2134-4836-BAF7-247E1F14AB7A_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="BLUPR10MB07547413152E88B2F60D4F44EA600_at_BLUPR10MB0754.namprd10.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPIRUN SEGMENTATION FAULT<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-23 09:39:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29005.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Previous message:</strong> <a href="29003.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>In reply to:</strong> <a href="29003.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29005.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Reply:</strong> <a href="29005.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
valgrind isn&#226;&#128;&#153;t going to help here - there are multiple reasons why your application could be segfaulting. Take a look at the core file with gdb and find out where it is failing.
<br>
<p><span class="quotelev1">&gt; On Apr 22, 2016, at 10:20 PM, Elio Physics &lt;elio-physics_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One more thing i forgot to mention in my previous e-mail. In the output file I get the following message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users &lt;users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of Elio Physics &lt;Elio-Physics_at_[hidden] &lt;mailto:Elio-Physics_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, April 23, 2016 3:07 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPIRUN SEGMENTATION FAULT
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have used valgrind and this is what i got:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; valgrind mpirun ~/Elie/SPRKKR/bin/kkrscf6.3MPI Fe_SCF.inp &gt; scf-51551.jlborges.fisica.ufmg.br.out
</span><br>
<span class="quotelev1">&gt; ==8135== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt; ==8135== Copyright (C) 2002-2012, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==8135== Using Valgrind-3.8.1 and LibVEX; rerun with -h for copyright info
</span><br>
<span class="quotelev1">&gt; ==8135== Command: mpirun /home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI Fe_SCF.inp
</span><br>
<span class="quotelev1">&gt; ==8135==
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 8147 on node jlborges.fisica.ufmg.br &lt;<a href="http://jlborges.fisica.ufmg.br/">http://jlborges.fisica.ufmg.br/</a>&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ==8135==
</span><br>
<span class="quotelev1">&gt; ==8135== HEAP SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==8135==     in use at exit: 485,683 bytes in 1,899 blocks
</span><br>
<span class="quotelev1">&gt; ==8135==   total heap usage: 7,723 allocs, 5,824 frees, 12,185,660 bytes allocated
</span><br>
<span class="quotelev1">&gt; ==8135==
</span><br>
<span class="quotelev1">&gt; ==8135== LEAK SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==8135==    definitely lost: 34,944 bytes in 34 blocks
</span><br>
<span class="quotelev1">&gt; ==8135==    indirectly lost: 26,613 bytes in 58 blocks
</span><br>
<span class="quotelev1">&gt; ==8135==      possibly lost: 0 bytes in 0 blocks
</span><br>
<span class="quotelev1">&gt; ==8135==    still reachable: 424,126 bytes in 1,807 blocks
</span><br>
<span class="quotelev1">&gt; ==8135==         suppressed: 0 bytes in 0 blocks
</span><br>
<span class="quotelev1">&gt; ==8135== Rerun with --leak-check=full to see details of leaked memory
</span><br>
<span class="quotelev1">&gt; ==8135==
</span><br>
<span class="quotelev1">&gt; ==8135== For counts of detected and suppressed errors, rerun with: -v
</span><br>
<span class="quotelev1">&gt; ==8135== ERROR SUMMARY: 0 errors from 0 contexts (suppressed: 6 from 6)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What does that supposed to mean?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; From: users &lt;users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, April 23, 2016 1:36:50 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPIRUN SEGMENTATION FAULT
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; All I can say is that your program segfault&#226;&#128;&#153;d during execution - you might want to look at the core file using a debugger like gdb to see why it failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 22, 2016, at 8:32 PM, Elio Physics &lt;Elio-Physics_at_[hidden] &lt;mailto:Elio-Physics_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have successfully compiled a code where the executable have been produced. However when I started using the executable with mpirun, the code stopped with the following error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpirun noticed that process rank 0 with PID 570 on node compute-1-9.local exited on signal 11 (Segmentation fault).&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What is that error due to? and How can i solve it?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I will post the make.inc compilation file:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; BUILD_TYPE ?=
</span><br>
<span class="quotelev2">&gt;&gt; #BUILD_TYPE := debug
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; VERSION = 6.3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ifeq ($(BUILD_TYPE), debug)
</span><br>
<span class="quotelev2">&gt;&gt;  VERSION := $(VERSION)$(BUILD_TYPE)
</span><br>
<span class="quotelev2">&gt;&gt; endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; BIN =~/Elie/SPRKKR/bin
</span><br>
<span class="quotelev2">&gt;&gt; #BIN=~/bin
</span><br>
<span class="quotelev2">&gt;&gt; #BIN=/tmp/$(USER)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; LIB =  -L/opt/intel/mkl/lib/intel64/libmkl_blas95_ilp64 -L/opt/intel/mkl/lib/intel64/libmkl_lapack95_ilp64 -L/opt/intel/mkl/lib/intel64 -lmkl_scalapack_ilp64 -lmkl_intel_ilp64 -lmkl_core -lmkl_sequential -lmkl_blacs_i
</span><br>
<span class="quotelev2">&gt;&gt; ntelmpi_ilp64 -lpthread -lm -ldl
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #Include mpif.h
</span><br>
<span class="quotelev2">&gt;&gt; INCLUDE = -I/opt/intel/mkl/include/intel64/ilp64  -I/opt/intel/mkl/lib/include
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #FFLAGS
</span><br>
<span class="quotelev2">&gt;&gt; FFLAGS = -O2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FC   = mpif90 -c $(FFLAGS) $(INCLUDE)
</span><br>
<span class="quotelev2">&gt;&gt; LINK = mpif90   $(FFLAGS) $(INCLUDE)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI=MPI
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Elio
</span><br>
<span class="quotelev2">&gt;&gt; University of Rondonia, brazil
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29000.php">http://www.open-mpi.org/community/lists/users/2016/04/29000.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/04/29000.php">http://www.open-mpi.org/community/lists/users/2016/04/29000.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29003.php">http://www.open-mpi.org/community/lists/users/2016/04/29003.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/04/29003.php">http://www.open-mpi.org/community/lists/users/2016/04/29003.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29004/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29005.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Previous message:</strong> <a href="29003.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>In reply to:</strong> <a href="29003.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29005.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Reply:</strong> <a href="29005.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
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
