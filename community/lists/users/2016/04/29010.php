<?
$subject_val = "Re: [OMPI users] MPIRUN SEGMENTATION FAULT";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 23 16:10:31 2016" -->
<!-- isoreceived="20160423201031" -->
<!-- sent="Sat, 23 Apr 2016 20:10:18 +0000" -->
<!-- isosent="20160423201018" -->
<!-- name="Elio Physics" -->
<!-- email="Elio-Physics_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIRUN SEGMENTATION FAULT" -->
<!-- id="BLUPR10MB07545C2EE0422A05C6A30975EA600_at_BLUPR10MB0754.namprd10.prod.outlook.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="40B88F62-CFF2-4419-95F3-7548B6D15DF8_at_open-mpi.org" -->
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
<strong>Date:</strong> 2016-04-23 16:10:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29011.php">dpchoudh .: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Previous message:</strong> <a href="29009.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>In reply to:</strong> <a href="29008.php">Ralph Castain: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29011.php">dpchoudh .: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Reply:</strong> <a href="29011.php">dpchoudh .: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Reply:</strong> <a href="29012.php">Gilles Gouaillardet: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, I changed the compiler from mpif90 to mpiifort with corresponding flags -i8 -g and recompiled. i am not getting the segmentation fault problem anymore and the program runs but later stops with no errors (except that the Fermi energy was not found!) and with some strange empty files that are produced something like:   fortDgcQe3  fortechvF2  fortMaN6a1  fortnxoYy1  fortvR5F8q.  i still feel something is wrong.. Does anybody know what are these files?
<br>
<p><p>Regards
<br>
<p><p>________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Sent: Saturday, April 23, 2016 1:38 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] MPIRUN SEGMENTATION FAULT
<br>
<p>I don&#146;t see any way this could be compilation related - I suspect there is simply some error in the program (e.g., forgetting to initialize some memory region).
<br>
<p><p>On Apr 23, 2016, at 8:03 AM, Elio Physics &lt;Elio-Physics_at_[hidden]&lt;mailto:Elio-Physics_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hello Andy,
<br>
<p>the program is not mine. I have got it from a group upon request. It might be program related because I run other codes such as quantum espresso and work perfectly fine although it is the cluster people who compiled it. Since I have compiled the program I am having problems with, I am thinking that it might be &quot;compilation&quot; related. This is why i wanted some experts' opinion on this
<br>
<p><p><p>________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of Andy Riebs &lt;andy.riebs_at_[hidden]&lt;mailto:andy.riebs_at_[hidden]&gt;&gt;
<br>
Sent: Saturday, April 23, 2016 12:49 PM
<br>
To: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] MPIRUN SEGMENTATION FAULT
<br>
<p>The challenge for the MPI experts here (of which I am NOT one!) is that the problem appears to be in your program; MPI is simply reporting that your program failed. If you got the program from someone else, you will need to solicit their help. If you wrote it, well, it is never a bad time to learn to use gdb!
<br>
<p>Best regards
<br>
Andy
<br>
<p>On 04/23/2016 10:41 AM, Elio Physics wrote:
<br>
I am not really an expert with gdb. What is the core file? and how to use gdb? I have got three files as an output when the executable is used. One is the actual output which stops and the other two are error files (from which I knew about the segmentation fault).
<br>
<p><p>thanks
<br>
<p><p>________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&gt;
<br>
Sent: Saturday, April 23, 2016 11:39 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] MPIRUN SEGMENTATION FAULT
<br>
<p>valgrind isn&#146;t going to help here - there are multiple reasons why your application could be segfaulting. Take a look at the core file with gdb and find out where it is failing.
<br>
<p>On Apr 22, 2016, at 10:20 PM, Elio Physics &lt;elio-physics_at_[hidden]&lt;mailto:elio-physics_at_[hidden]&gt;&gt; wrote:
<br>
<p>One more thing i forgot to mention in my previous e-mail. In the output file I get the following message:
<br>
<p><p>2 total processes killed (some possibly by mpirun during cleanup)
<br>
<p>Thanks
<br>
<p><p><p>________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of Elio Physics &lt;&lt;mailto:Elio-Physics_at_[hidden]&gt;Elio-Physics_at_[hidden]&lt;mailto:Elio-Physics_at_[hidden]&gt;&gt;
<br>
Sent: Saturday, April 23, 2016 3:07 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] MPIRUN SEGMENTATION FAULT
<br>
<p>I have used valgrind and this is what i got:
<br>
<p>valgrind mpirun ~/Elie/SPRKKR/bin/kkrscf6.3MPI Fe_SCF.inp &gt; scf-51551.jlborges.fisica.ufmg.br.out
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
mpirun noticed that process rank 0 with PID 8147 on node jlborges.fisica.ufmg.br&lt;<a href="http://jlborges.fisica.ufmg.br/">http://jlborges.fisica.ufmg.br/</a>&gt; exited on signal 11 (Segmentation fault).
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
<p>What does that supposed to mean?
<br>
<p>Regards
<br>
________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;&lt;mailto:rhc_at_[hidden]&gt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;
<br>
Sent: Saturday, April 23, 2016 1:36:50 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] MPIRUN SEGMENTATION FAULT
<br>
<p>All I can say is that your program segfault&#146;d during execution - you might want to look at the core file using a debugger like gdb to see why it failed.
<br>
<p><p>On Apr 22, 2016, at 8:32 PM, Elio Physics &lt;&lt;mailto:Elio-Physics_at_[hidden]&gt;Elio-Physics_at_[hidden]&lt;mailto:Elio-Physics_at_[hidden]&gt;&gt; wrote:
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
Subscription: &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/04/29000.php">http://www.open-mpi.org/community/lists/users/2016/04/29000.php</a>&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/29000.php">http://www.open-mpi.org/community/lists/users/2016/04/29000.php</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/04/29003.php">http://www.open-mpi.org/community/lists/users/2016/04/29003.php</a>&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/29003.php">http://www.open-mpi.org/community/lists/users/2016/04/29003.php</a>
<br>
<p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29005.php">http://www.open-mpi.org/community/lists/users/2016/04/29005.php</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29007.php">http://www.open-mpi.org/community/lists/users/2016/04/29007.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29010/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29011.php">dpchoudh .: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Previous message:</strong> <a href="29009.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>In reply to:</strong> <a href="29008.php">Ralph Castain: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29011.php">dpchoudh .: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Reply:</strong> <a href="29011.php">dpchoudh .: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Reply:</strong> <a href="29012.php">Gilles Gouaillardet: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
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
