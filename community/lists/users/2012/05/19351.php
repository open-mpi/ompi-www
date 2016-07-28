<?
$subject_val = "Re: [OMPI users] possible bug exercised by mpi4py";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 18:04:12 2012" -->
<!-- isoreceived="20120523220412" -->
<!-- sent="Wed, 23 May 2012 18:04:07 -0400" -->
<!-- isosent="20120523220407" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible bug exercised by mpi4py" -->
<!-- id="7B3C592E-70DF-4713-9A69-23E88AC0E974_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.64.1205231730140.5917_at_goldenaxe.gpcc.itd.umich.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 18:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19352.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Previous message:</strong> <a href="19350.php">Bennet Fauber: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19349.php">Bennet Fauber: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19353.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19353.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for all the info!
<br>
<p>But still, can we get a copy of the test in C?  That would make it significantly easier for us to tell if there is a problem with Open MPI -- mainly because we don't know anything about the internals of mpi4py.
<br>
<p><p>On May 23, 2012, at 5:43 PM, Bennet Fauber wrote:
<br>
<p><span class="quotelev1">&gt; Thanks, Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 23 May 2012, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't honestly think many of us have any knowledge of mpi4py. Does this test work with other MPIs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The mpi4py developers have said they've never seen this using mpich2.  I have not been able to test that myself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Allgather seems to be passing our tests, so I suspect it is something in the binding. If you can provide the actual test, I'm willing to take a look at it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The actual test is included in the install bundle for mpi4py, along with the C source code used to create the bindings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	<a href="http://code.google.com/p/mpi4py/downloads/list">http://code.google.com/p/mpi4py/downloads/list</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The install is straightforward and simple.  Unpack the tarball, make sure that mpicc is in your path
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	$ cd mpi4py-1.3
</span><br>
<span class="quotelev1">&gt; 	$ python setup.py build
</span><br>
<span class="quotelev1">&gt; 	$ python setup.py install --prefix=/your/install
</span><br>
<span class="quotelev1">&gt; 	$ export PYTHONPATH=/your/install/lib/pythonN.M/site-packages
</span><br>
<span class="quotelev1">&gt; 	$ mpirun -np 5 python test/runtests.py \
</span><br>
<span class="quotelev1">&gt; 		 --verbose --no-threads --include cco_obj_inter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where N.M are the major.minor numbers of your python distribution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I find most puzzling is that, maybe, 1 out of 10 times it will run to completion with -np 5, and it runs with all other numbers of processors I've tested always.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 			-- bennet
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 23, 2012, at 2:52 PM, Bennet Fauber wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've installed the latest mpi4py-1.3 on several systems, and there is a repeated bug when running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	$ mpirun -np 5 python test/runtests.py
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where it throws an error on mpigather with openmpi-1.4.4 and hangs with openmpi-1.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It runs to completion and passes all tests when run with -np of 2, 3, 4, 6, 7, 8, 9, 10, 11, and 12.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is a thread on this at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://groups.google.com/group/mpi4py/browse_thread/thread/509ac46af6f79973">http://groups.google.com/group/mpi4py/browse_thread/thread/509ac46af6f79973</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where others report being able to replicate, too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The compiler used first was gcc-4.6.2, with openmpi-1.4.4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; These are all Red Hat machines, RHEL 5 or 6 and with multiple compilers and versions of openmpi 1.3.0 and 1.4.4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lisandro who is the primary developer of mpi4py is able to replicate on Fedora 16.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Someone else is able to reproduce with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ quoting from the groups.google.com page... ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===============================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It also happens with the current hg version of mpi4py and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ rpm -qa openmpi gcc python
</span><br>
<span class="quotelev3">&gt;&gt;&gt; python-2.7.3-6.fc17.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc-4.7.0-5.fc17.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.5.4-5.fc17.1.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===============================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I believe this is a bug to be reported.  Per the advice at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	<a href="http://www.open-mpi.org/community/help/bugs.php">http://www.open-mpi.org/community/help/bugs.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	If you feel that you do have a definite bug to report but are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	unsure which list to post to, then post to the user's list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please let me know if there is additional information that you need to replicate.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Some output is included below the signature in case it is useful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 			-- bennet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; East Hall Technical Services
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mathematics and Psychology Research Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Michigan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734) 763-1182
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On RHEL 5, openmpi 1.3, gcc 4.1.2, python 2.7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -np 5 --mca btl ^sm python test/runtests.py --verbose --no-threads --include cco_obj_inter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0_at_[hidden]] Python 2.7 (/home/bennet/epd7.2.2/bin/python)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0_at_[hidden]] MPI 2.0 (Open MPI 1.3.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0_at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.7/mpi4py)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1_at_[hidden]] Python 2.7 (/home/bennet/epd7.2.2/bin/python)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1_at_[hidden]] MPI 2.0 (Open MPI 1.3.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1_at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.7/mpi4py)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [2_at_[hidden]] Python 2.7 (/home/bennet/epd7.2.2/bin/python)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [2_at_[hidden]] MPI 2.0 (Open MPI 1.3.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [2_at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.7/mpi4py)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [3_at_[hidden]] Python 2.7 (/home/bennet/epd7.2.2/bin/python)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [3_at_[hidden]] MPI 2.0 (Open MPI 1.3.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [3_at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.7/mpi4py)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [4_at_[hidden]] Python 2.7 (/home/bennet/epd7.2.2/bin/python)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [4_at_[hidden]] MPI 2.0 (Open MPI 1.3.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [4_at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.7/mpi4py)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; testAllgather (test_cco_obj_inter.TestCCOObjInter) ... testAllgather (test_cco_obj_inter.TestCCOObjInter) ... testAllgather (test_cco_obj_inter.TestCCOObjInter) ... testAllgather (test_cco_obj_inter.TestCCOObjInter) ... testAllgather (test_cco_obj_inter.TestCCOObjInter) ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ hangs ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RHEL5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ python
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Python 2.6.6 (r266:84292, Sep 12 2011, 14:03:14)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [GCC 4.4.5 20110214 (Red Hat 4.4.5-6)] on linux2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ gcc -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using built-in specs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COLLECT_GCC=gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COLLECT_LTO_WRAPPER=/home/software/rhel6/gcc/4.7.0/libexec/gcc/x86_64-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unknown-linux-gnu/4.7.0/lto-wrapper
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Target: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configured with: ../gcc-4.7.0/configure --prefix=/home/software/rhel6/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc/4.7.0 --with-mpfr=/home/software/rhel6/gcc/mpfr-3.1.0/ --with-mpc=/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; home/software/rhel6/gcc/mpc-0.9/ --with-gmp=/home/software/rhel6/gcc/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gmp-5.0.5/ --disable-multilib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc version 4.7.0 (GCC)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -np 5 python test/runtests.py --verbose --no-threads --include cco_obj_inter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [4..._at_[hidden]] Python 2.6 (/usr/bin/python)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [4..._at_[hidden]] MPI 2.1 (Open MPI 1.6.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [4..._at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.6/mpi4py)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [2..._at_[hidden]] Python 2.6 (/usr/bin/python)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [2..._at_[hidden]] MPI 2.1 (Open MPI 1.6.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [2..._at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.6/mpi4py)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1..._at_[hidden]] Python 2.6 (/usr/bin/python)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1..._at_[hidden]] MPI 2.1 (Open MPI 1.6.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1..._at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.6/mpi4py)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0..._at_[hidden]] Python 2.6 (/usr/bin/python)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0..._at_[hidden]] MPI 2.1 (Open MPI 1.6.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0..._at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.6/mpi4py)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [3..._at_[hidden]] Python 2.6 (/usr/bin/python)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [3..._at_[hidden]] MPI 2.1 (Open MPI 1.6.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [3..._at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.6/mpi4py)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; testAllgather (test_cco_obj_inter.TestCCOObjInter) ... testAllgather
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (test_cco_obj_inter.TestCCOObjInter) ... testAllgather
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (test_cco_obj_inter.TestCCOObjInter) ... testAllgather
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (test_cco_obj_inter.TestCCOObjInter) ... testAllgather
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (test_cco_obj_inter.TestCCOObjInter) ... ERROR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19352.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Previous message:</strong> <a href="19350.php">Bennet Fauber: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19349.php">Bennet Fauber: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19353.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19353.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
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
