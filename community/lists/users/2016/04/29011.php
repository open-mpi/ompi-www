<?
$subject_val = "Re: [OMPI users] MPIRUN SEGMENTATION FAULT";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 23 16:19:58 2016" -->
<!-- isoreceived="20160423201958" -->
<!-- sent="Sat, 23 Apr 2016 16:19:56 -0400" -->
<!-- isosent="20160423201956" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIRUN SEGMENTATION FAULT" -->
<!-- id="CAHXxYDi87mdy-+O5+ma4yZLOe9_0CMErk=VUzFUUJdk_vSzJrA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BLUPR10MB07545C2EE0422A05C6A30975EA600_at_BLUPR10MB0754.namprd10.prod.outlook.com" -->
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
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-23 16:19:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29012.php">Gilles Gouaillardet: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Previous message:</strong> <a href="29010.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>In reply to:</strong> <a href="29010.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29012.php">Gilles Gouaillardet: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Elio
<br>
<p>You should ask this question in the forum of the simulation program you are
<br>
using. These failures have most likely nothing to do with MPI (or, at
<br>
least, OpenMPI) so this is the wrong
<br>
place for these questions.
<br>
<p>Here is a bit of suggestion: does your program run without MPI at all?
<br>
(i.e. in a stand-alone mode or perhaps with a different SPMD model such as
<br>
OpenMP). If so, try running it in that
<br>
mode to see if it behaves any better. Even if it does not, the stack trace
<br>
will be more insightful. With OMPI's process launcher getting mixed up with
<br>
your code stack, the source of the crash can be harder to figure out.
<br>
<p>HTH,
<br>
Durga
<br>
<p>1% of the executables have 99% of CPU privilege!
<br>
Userspace code! Unite!! Occupy the kernel!!!
<br>
<p>On Sat, Apr 23, 2016 at 4:10 PM, Elio Physics &lt;Elio-Physics_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Well, I changed the compiler from mpif90 to mpiifort with corresponding
</span><br>
<span class="quotelev1">&gt; flags -i8 -g and recompiled. i am not getting the segmentation fault
</span><br>
<span class="quotelev1">&gt; problem anymore and the program runs but later stops with no errors (except
</span><br>
<span class="quotelev1">&gt; that the Fermi energy was not found!) and with some strange empty files
</span><br>
<span class="quotelev1">&gt; that are produced something like:   fortDgcQe3  fortechvF2  fortMaN6a1
</span><br>
<span class="quotelev1">&gt; fortnxoYy1  fortvR5F8q.  i still feel something is wrong.. Does anybody
</span><br>
<span class="quotelev1">&gt; know what are these files?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users &lt;users-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;
</span><br>
<span class="quotelev1">&gt; rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent:* Saturday, April 23, 2016 1:38 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] MPIRUN SEGMENTATION FAULT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don&#226;&#128;&#153;t see any way this could be compilation related - I suspect there is
</span><br>
<span class="quotelev1">&gt; simply some error in the program (e.g., forgetting to initialize some
</span><br>
<span class="quotelev1">&gt; memory region).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2016, at 8:03 AM, Elio Physics &lt;Elio-Physics_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Andy,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the program is not mine. I have got it from a group upon request. It might
</span><br>
<span class="quotelev1">&gt; be program related because I run other codes such as quantum espresso and
</span><br>
<span class="quotelev1">&gt; work perfectly fine although it is the cluster people who compiled it.
</span><br>
<span class="quotelev1">&gt; Since I have compiled the program I am having problems with, I am thinking
</span><br>
<span class="quotelev1">&gt; that it might be &quot;compilation&quot; related. This is why i wanted some experts'
</span><br>
<span class="quotelev1">&gt; opinion on this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users &lt;users-bounces_at_[hidden]&gt; on behalf of Andy Riebs &lt;
</span><br>
<span class="quotelev1">&gt; andy.riebs_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent:* Saturday, April 23, 2016 12:49 PM
</span><br>
<span class="quotelev1">&gt; *To:* users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] MPIRUN SEGMENTATION FAULT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The challenge for the MPI experts here (of which I am NOT one!) is that
</span><br>
<span class="quotelev1">&gt; the problem appears to be in your program; MPI is simply reporting that
</span><br>
<span class="quotelev1">&gt; your program failed. If you got the program from someone else, you will
</span><br>
<span class="quotelev1">&gt; need to solicit their help. If you wrote it, well, it is never a bad time
</span><br>
<span class="quotelev1">&gt; to learn to use gdb!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Andy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 04/23/2016 10:41 AM, Elio Physics wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not really an expert with gdb. What is the core file? and how to use
</span><br>
<span class="quotelev1">&gt; gdb? I have got three files as an output when the executable is used. One
</span><br>
<span class="quotelev1">&gt; is the actual output which stops and the other two are error files (from
</span><br>
<span class="quotelev1">&gt; which I knew about the segmentation fault).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users &lt;users-bounces_at_[hidden]&gt; &lt;users-bounces_at_[hidden]&gt; on
</span><br>
<span class="quotelev1">&gt; behalf of Ralph Castain &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent:* Saturday, April 23, 2016 11:39 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] MPIRUN SEGMENTATION FAULT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; valgrind isn&#226;&#128;&#153;t going to help here - there are multiple reasons why your
</span><br>
<span class="quotelev1">&gt; application could be segfaulting. Take a look at the core file with gdb and
</span><br>
<span class="quotelev1">&gt; find out where it is failing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 22, 2016, at 10:20 PM, Elio Physics &lt;elio-physics_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One more thing i forgot to mention in my previous e-mail. In the output
</span><br>
<span class="quotelev1">&gt; file I get the following message:
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
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users &lt;users-bounces_at_[hidden]&gt; on behalf of Elio Physics &lt;
</span><br>
<span class="quotelev1">&gt; &lt;Elio-Physics_at_[hidden]&gt;Elio-Physics_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent:* Saturday, April 23, 2016 3:07 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] MPIRUN SEGMENTATION FAULT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have used valgrind and this is what i got:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; valgrind mpirun ~/Elie/SPRKKR/bin/kkrscf6.3MPI Fe_SCF.inp &gt;
</span><br>
<span class="quotelev1">&gt; scf-51551.jlborges.fisica.ufmg.br.out
</span><br>
<span class="quotelev1">&gt; ==8135== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt; ==8135== Copyright (C) 2002-2012, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==8135== Using Valgrind-3.8.1 and LibVEX; rerun with -h for copyright info
</span><br>
<span class="quotelev1">&gt; ==8135== Command: mpirun /home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI
</span><br>
<span class="quotelev1">&gt; Fe_SCF.inp
</span><br>
<span class="quotelev1">&gt; ==8135==
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 8147 on node
</span><br>
<span class="quotelev1">&gt; jlborges.fisica.ufmg.br exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ==8135==
</span><br>
<span class="quotelev1">&gt; ==8135== HEAP SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==8135==     in use at exit: 485,683 bytes in 1,899 blocks
</span><br>
<span class="quotelev1">&gt; ==8135==   total heap usage: 7,723 allocs, 5,824 frees, 12,185,660 bytes
</span><br>
<span class="quotelev1">&gt; allocated
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
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users &lt;users-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;
</span><br>
<span class="quotelev1">&gt; &lt;rhc_at_[hidden]&gt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent:* Saturday, April 23, 2016 1:36:50 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] MPIRUN SEGMENTATION FAULT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All I can say is that your program segfault&#226;&#128;&#153;d during execution - you might
</span><br>
<span class="quotelev1">&gt; want to look at the core file using a debugger like gdb to see why it
</span><br>
<span class="quotelev1">&gt; failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 22, 2016, at 8:32 PM, Elio Physics &lt; &lt;Elio-Physics_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Elio-Physics_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have successfully compiled a code where the executable have been
</span><br>
<span class="quotelev1">&gt; produced. However when I started using the executable with mpirun, the code
</span><br>
<span class="quotelev1">&gt; stopped with the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;mpirun noticed that process rank 0 with PID 570 on node compute-1-9.local
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is that error due to? and How can i solve it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will post the make.inc compilation file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BUILD_TYPE ?=
</span><br>
<span class="quotelev1">&gt; #BUILD_TYPE := debug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; VERSION = 6.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ifeq ($(BUILD_TYPE), debug)
</span><br>
<span class="quotelev1">&gt;  VERSION := $(VERSION)$(BUILD_TYPE)
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BIN =~/Elie/SPRKKR/bin
</span><br>
<span class="quotelev1">&gt; #BIN=~/bin
</span><br>
<span class="quotelev1">&gt; #BIN=/tmp/$(USER)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LIB =  -L/opt/intel/mkl/lib/intel64/libmkl_blas95_ilp64
</span><br>
<span class="quotelev1">&gt; -L/opt/intel/mkl/lib/intel64/libmkl_lapack95_ilp64
</span><br>
<span class="quotelev1">&gt; -L/opt/intel/mkl/lib/intel64 -lmkl_scalapack_ilp64 -lmkl_intel_ilp64
</span><br>
<span class="quotelev1">&gt; -lmkl_core -lmkl_sequential -lmkl_blacs_i
</span><br>
<span class="quotelev1">&gt; ntelmpi_ilp64 -lpthread -lm -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #Include mpif.h
</span><br>
<span class="quotelev1">&gt; INCLUDE = -I/opt/intel/mkl/include/intel64/ilp64
</span><br>
<span class="quotelev1">&gt; -I/opt/intel/mkl/lib/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #FFLAGS
</span><br>
<span class="quotelev1">&gt; FFLAGS = -O2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FC   = mpif90 -c $(FFLAGS) $(INCLUDE)
</span><br>
<span class="quotelev1">&gt; LINK = mpif90   $(FFLAGS) $(INCLUDE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI=MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Elio
</span><br>
<span class="quotelev1">&gt; University of Rondonia, brazil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription:  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/04/29000.php">http://www.open-mpi.org/community/lists/users/2016/04/29000.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/29000.php">http://www.open-mpi.org/community/lists/users/2016/04/29000.php</a>
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
<span class="quotelev1">&gt; Subscription:  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/04/29003.php">http://www.open-mpi.org/community/lists/users/2016/04/29003.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/29003.php">http://www.open-mpi.org/community/lists/users/2016/04/29003.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29005.php">http://www.open-mpi.org/community/lists/users/2016/04/29005.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/29007.php">http://www.open-mpi.org/community/lists/users/2016/04/29007.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/29010.php">http://www.open-mpi.org/community/lists/users/2016/04/29010.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29011/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29012.php">Gilles Gouaillardet: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Previous message:</strong> <a href="29010.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>In reply to:</strong> <a href="29010.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29012.php">Gilles Gouaillardet: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
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
