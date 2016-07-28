<?
$subject_val = "Re: [OMPI users] possible bug exercised by mpi4py";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 17:02:28 2012" -->
<!-- isoreceived="20120523210228" -->
<!-- sent="Wed, 23 May 2012 15:02:20 -0600" -->
<!-- isosent="20120523210220" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible bug exercised by mpi4py" -->
<!-- id="24DA89B6-5FB3-44BB-BAFF-826174DBFA2E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.64.1205231540290.5917_at_goldenaxe.gpcc.itd.umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] possible bug exercised by mpi4py<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 17:02:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19347.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Previous message:</strong> <a href="19345.php">Bennet Fauber: "[OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19345.php">Bennet Fauber: "[OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19349.php">Bennet Fauber: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19349.php">Bennet Fauber: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't honestly think many of us have any knowledge of mpi4py. Does this test work with other MPIs?
<br>
<p>MPI_Allgather seems to be passing our tests, so I suspect it is something in the binding. If you can provide the actual test, I'm willing to take a look at it.
<br>
<p><p>On May 23, 2012, at 2:52 PM, Bennet Fauber wrote:
<br>
<p><span class="quotelev1">&gt; I've installed the latest mpi4py-1.3 on several systems, and there is a repeated bug when running
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	$ mpirun -np 5 python test/runtests.py
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where it throws an error on mpigather with openmpi-1.4.4 and hangs with openmpi-1.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It runs to completion and passes all tests when run with -np of 2, 3, 4, 6, 7, 8, 9, 10, 11, and 12.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a thread on this at
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://groups.google.com/group/mpi4py/browse_thread/thread/509ac46af6f79973">http://groups.google.com/group/mpi4py/browse_thread/thread/509ac46af6f79973</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where others report being able to replicate, too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The compiler used first was gcc-4.6.2, with openmpi-1.4.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These are all Red Hat machines, RHEL 5 or 6 and with multiple compilers and versions of openmpi 1.3.0 and 1.4.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lisandro who is the primary developer of mpi4py is able to replicate on Fedora 16.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Someone else is able to reproduce with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ quoting from the groups.google.com page... ]
</span><br>
<span class="quotelev1">&gt; ===============================================================
</span><br>
<span class="quotelev1">&gt; It also happens with the current hg version of mpi4py and
</span><br>
<span class="quotelev1">&gt; $ rpm -qa openmpi gcc python
</span><br>
<span class="quotelev1">&gt; python-2.7.3-6.fc17.x86_64
</span><br>
<span class="quotelev1">&gt; gcc-4.7.0-5.fc17.x86_64
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.4-5.fc17.1.x86_64
</span><br>
<span class="quotelev1">&gt; ===============================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I believe this is a bug to be reported.  Per the advice at
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	<a href="http://www.open-mpi.org/community/help/bugs.php">http://www.open-mpi.org/community/help/bugs.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	If you feel that you do have a definite bug to report but are
</span><br>
<span class="quotelev1">&gt; 	unsure which list to post to, then post to the user's list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please let me know if there is additional information that you need to replicate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some output is included below the signature in case it is useful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 			-- bennet
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; East Hall Technical Services
</span><br>
<span class="quotelev1">&gt; Mathematics and Psychology Research Computing
</span><br>
<span class="quotelev1">&gt; University of Michigan
</span><br>
<span class="quotelev1">&gt; (734) 763-1182
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On RHEL 5, openmpi 1.3, gcc 4.1.2, python 2.7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 5 --mca btl ^sm python test/runtests.py --verbose --no-threads --include cco_obj_inter
</span><br>
<span class="quotelev1">&gt; [0_at_[hidden]] Python 2.7 (/home/bennet/epd7.2.2/bin/python)
</span><br>
<span class="quotelev1">&gt; [0_at_[hidden]] MPI 2.0 (Open MPI 1.3.0)
</span><br>
<span class="quotelev1">&gt; [0_at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.7/mpi4py)
</span><br>
<span class="quotelev1">&gt; [1_at_[hidden]] Python 2.7 (/home/bennet/epd7.2.2/bin/python)
</span><br>
<span class="quotelev1">&gt; [1_at_[hidden]] MPI 2.0 (Open MPI 1.3.0)
</span><br>
<span class="quotelev1">&gt; [1_at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.7/mpi4py)
</span><br>
<span class="quotelev1">&gt; [2_at_[hidden]] Python 2.7 (/home/bennet/epd7.2.2/bin/python)
</span><br>
<span class="quotelev1">&gt; [2_at_[hidden]] MPI 2.0 (Open MPI 1.3.0)
</span><br>
<span class="quotelev1">&gt; [2_at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.7/mpi4py)
</span><br>
<span class="quotelev1">&gt; [3_at_[hidden]] Python 2.7 (/home/bennet/epd7.2.2/bin/python)
</span><br>
<span class="quotelev1">&gt; [3_at_[hidden]] MPI 2.0 (Open MPI 1.3.0)
</span><br>
<span class="quotelev1">&gt; [3_at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.7/mpi4py)
</span><br>
<span class="quotelev1">&gt; [4_at_[hidden]] Python 2.7 (/home/bennet/epd7.2.2/bin/python)
</span><br>
<span class="quotelev1">&gt; [4_at_[hidden]] MPI 2.0 (Open MPI 1.3.0)
</span><br>
<span class="quotelev1">&gt; [4_at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.7/mpi4py)
</span><br>
<span class="quotelev1">&gt; testAllgather (test_cco_obj_inter.TestCCOObjInter) ... testAllgather (test_cco_obj_inter.TestCCOObjInter) ... testAllgather (test_cco_obj_inter.TestCCOObjInter) ... testAllgather (test_cco_obj_inter.TestCCOObjInter) ... testAllgather (test_cco_obj_inter.TestCCOObjInter) ...
</span><br>
<span class="quotelev1">&gt; [ hangs ]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; RHEL5
</span><br>
<span class="quotelev1">&gt; ===================================================
</span><br>
<span class="quotelev1">&gt; $ python
</span><br>
<span class="quotelev1">&gt; Python 2.6.6 (r266:84292, Sep 12 2011, 14:03:14)
</span><br>
<span class="quotelev1">&gt; [GCC 4.4.5 20110214 (Red Hat 4.4.5-6)] on linux2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ gcc -v
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; COLLECT_GCC=gcc
</span><br>
<span class="quotelev1">&gt; COLLECT_LTO_WRAPPER=/home/software/rhel6/gcc/4.7.0/libexec/gcc/x86_64-
</span><br>
<span class="quotelev1">&gt; unknown-linux-gnu/4.7.0/lto-wrapper
</span><br>
<span class="quotelev1">&gt; Target: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; Configured with: ../gcc-4.7.0/configure --prefix=/home/software/rhel6/
</span><br>
<span class="quotelev1">&gt; gcc/4.7.0 --with-mpfr=/home/software/rhel6/gcc/mpfr-3.1.0/ --with-mpc=/
</span><br>
<span class="quotelev1">&gt; home/software/rhel6/gcc/mpc-0.9/ --with-gmp=/home/software/rhel6/gcc/
</span><br>
<span class="quotelev1">&gt; gmp-5.0.5/ --disable-multilib
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.7.0 (GCC)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 5 python test/runtests.py --verbose --no-threads --include cco_obj_inter
</span><br>
<span class="quotelev1">&gt; [4..._at_[hidden]] Python 2.6 (/usr/bin/python)
</span><br>
<span class="quotelev1">&gt; [4..._at_[hidden]] MPI 2.1 (Open MPI 1.6.0)
</span><br>
<span class="quotelev1">&gt; [4..._at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.6/mpi4py)
</span><br>
<span class="quotelev1">&gt; [2..._at_[hidden]] Python 2.6 (/usr/bin/python)
</span><br>
<span class="quotelev1">&gt; [2..._at_[hidden]] MPI 2.1 (Open MPI 1.6.0)
</span><br>
<span class="quotelev1">&gt; [2..._at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.6/mpi4py)
</span><br>
<span class="quotelev1">&gt; [1..._at_[hidden]] Python 2.6 (/usr/bin/python)
</span><br>
<span class="quotelev1">&gt; [1..._at_[hidden]] MPI 2.1 (Open MPI 1.6.0)
</span><br>
<span class="quotelev1">&gt; [1..._at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.6/mpi4py)
</span><br>
<span class="quotelev1">&gt; [0..._at_[hidden]] Python 2.6 (/usr/bin/python)
</span><br>
<span class="quotelev1">&gt; [0..._at_[hidden]] MPI 2.1 (Open MPI 1.6.0)
</span><br>
<span class="quotelev1">&gt; [0..._at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.6/mpi4py)
</span><br>
<span class="quotelev1">&gt; [3..._at_[hidden]] Python 2.6 (/usr/bin/python)
</span><br>
<span class="quotelev1">&gt; [3..._at_[hidden]] MPI 2.1 (Open MPI 1.6.0)
</span><br>
<span class="quotelev1">&gt; [3..._at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.6/mpi4py)
</span><br>
<span class="quotelev1">&gt; testAllgather (test_cco_obj_inter.TestCCOObjInter) ... testAllgather
</span><br>
<span class="quotelev1">&gt; (test_cco_obj_inter.TestCCOObjInter) ... testAllgather
</span><br>
<span class="quotelev1">&gt; (test_cco_obj_inter.TestCCOObjInter) ... testAllgather
</span><br>
<span class="quotelev1">&gt; (test_cco_obj_inter.TestCCOObjInter) ... testAllgather
</span><br>
<span class="quotelev1">&gt; (test_cco_obj_inter.TestCCOObjInter) ... ERROR
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19347.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Previous message:</strong> <a href="19345.php">Bennet Fauber: "[OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19345.php">Bennet Fauber: "[OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19349.php">Bennet Fauber: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19349.php">Bennet Fauber: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
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
