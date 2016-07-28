<?
$subject_val = "Re: [OMPI users] MPIRUN SEGMENTATION FAULT";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 23 01:20:46 2016" -->
<!-- isoreceived="20160423052046" -->
<!-- sent="Sat, 23 Apr 2016 05:20:41 +0000" -->
<!-- isosent="20160423052041" -->
<!-- name="Elio Physics" -->
<!-- email="Elio-Physics_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIRUN SEGMENTATION FAULT" -->
<!-- id="BLUPR10MB07547413152E88B2F60D4F44EA600_at_BLUPR10MB0754.namprd10.prod.outlook.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BLUPR10MB07544159665F369FA2F7DCA2EA600_at_BLUPR10MB0754.namprd10.prod.outlook.com" -->
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
<strong>From:</strong> Elio Physics (<em>Elio-Physics_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-23 01:20:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29004.php">Ralph Castain: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Previous message:</strong> <a href="29002.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>In reply to:</strong> <a href="29002.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29004.php">Ralph Castain: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Reply:</strong> <a href="29004.php">Ralph Castain: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One more thing i forgot to mention in my previous e-mail. In the output file I get the following message:
<br>
<p><p>2 total processes killed (some possibly by mpirun during cleanup)
<br>
<p><p>Thanks
<br>
<p><p><p>________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Elio Physics &lt;Elio-Physics_at_[hidden]&gt;
<br>
Sent: Saturday, April 23, 2016 3:07 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] MPIRUN SEGMENTATION FAULT
<br>
<p><p>I have used valgrind and this is what i got:
<br>
<p><p>valgrind mpirun ~/Elie/SPRKKR/bin/kkrscf6.3MPI Fe_SCF.inp &gt; scf-51551.jlborges.fisica.ufmg.br.out
<br>
==8135== Memcheck, a memory error detector
<br>
==8135== Copyright (C) 2002-2012, and GNU GPL'd, by Julian Seward et al.
<br>
==8135== Using Valgrind-3.8.1 and LibVEX; rerun with -h for copyright info
<br>
==8135== Command: mpirun /home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI Fe_SCF.inp
<br>
==8135==
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 8147 on node jlborges.fisica.ufmg.br exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
==8135==
<br>
==8135== HEAP SUMMARY:
<br>
==8135==     in use at exit: 485,683 bytes in 1,899 blocks
<br>
==8135==   total heap usage: 7,723 allocs, 5,824 frees, 12,185,660 bytes allocated
<br>
==8135==
<br>
==8135== LEAK SUMMARY:
<br>
==8135==    definitely lost: 34,944 bytes in 34 blocks
<br>
==8135==    indirectly lost: 26,613 bytes in 58 blocks
<br>
==8135==      possibly lost: 0 bytes in 0 blocks
<br>
==8135==    still reachable: 424,126 bytes in 1,807 blocks
<br>
==8135==         suppressed: 0 bytes in 0 blocks
<br>
==8135== Rerun with --leak-check=full to see details of leaked memory
<br>
==8135==
<br>
==8135== For counts of detected and suppressed errors, rerun with: -v
<br>
==8135== ERROR SUMMARY: 0 errors from 0 contexts (suppressed: 6 from 6)
<br>
<p><p>What does that supposed to mean?
<br>
<p><p>Regards
<br>
<p>________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Sent: Saturday, April 23, 2016 1:36:50 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] MPIRUN SEGMENTATION FAULT
<br>
<p>All I can say is that your program segfault'd during execution - you might want to look at the core file using a debugger like gdb to see why it failed.
<br>
<p><p>On Apr 22, 2016, at 8:32 PM, Elio Physics &lt;Elio-Physics_at_[hidden]&lt;mailto:Elio-Physics_at_[hidden]&gt;&gt; wrote:
<br>
<p>Dear all,
<br>
<p>I have successfully compiled a code where the executable have been produced. However when I started using the executable with mpirun, the code stopped with the following error:
<br>
<p>&quot;mpirun noticed that process rank 0 with PID 570 on node compute-1-9.local exited on signal 11 (Segmentation fault).&quot;
<br>
<p>What is that error due to? and How can i solve it?
<br>
<p>I will post the make.inc compilation file:
<br>
<p>BUILD_TYPE ?=
<br>
#BUILD_TYPE := debug
<br>
<p>VERSION = 6.3
<br>
<p>ifeq ($(BUILD_TYPE), debug)
<br>
&nbsp;VERSION := $(VERSION)$(BUILD_TYPE)
<br>
endif
<br>
<p>BIN =~/Elie/SPRKKR/bin
<br>
#BIN=~/bin
<br>
#BIN=/tmp/$(USER)
<br>
<p>LIB =  -L/opt/intel/mkl/lib/intel64/libmkl_blas95_ilp64 -L/opt/intel/mkl/lib/intel64/libmkl_lapack95_ilp64 -L/opt/intel/mkl/lib/intel64 -lmkl_scalapack_ilp64 -lmkl_intel_ilp64 -lmkl_core -lmkl_sequential -lmkl_blacs_i
<br>
ntelmpi_ilp64 -lpthread -lm -ldl
<br>
<p>#Include mpif.h
<br>
INCLUDE = -I/opt/intel/mkl/include/intel64/ilp64  -I/opt/intel/mkl/lib/include
<br>
<p>#FFLAGS
<br>
FFLAGS = -O2
<br>
<p>FC   = mpif90 -c $(FFLAGS) $(INCLUDE)
<br>
LINK = mpif90   $(FFLAGS) $(INCLUDE)
<br>
<p>MPI=MPI
<br>
<p>Thanks in advance
<br>
<p>Elio
<br>
University of Rondonia, brazil
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29000.php">http://www.open-mpi.org/community/lists/users/2016/04/29000.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29003/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29004.php">Ralph Castain: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Previous message:</strong> <a href="29002.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>In reply to:</strong> <a href="29002.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29004.php">Ralph Castain: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Reply:</strong> <a href="29004.php">Ralph Castain: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
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
