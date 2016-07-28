<?
$subject_val = "[OMPI users] possible bug exercised by mpi4py";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 16:52:26 2012" -->
<!-- isoreceived="20120523205226" -->
<!-- sent="Wed, 23 May 2012 16:52:22 -0400 (EDT)" -->
<!-- isosent="20120523205222" -->
<!-- name="Bennet Fauber" -->
<!-- email="bennet_at_[hidden]" -->
<!-- subject="[OMPI users] possible bug exercised by mpi4py" -->
<!-- id="Pine.LNX.4.64.1205231540290.5917_at_goldenaxe.gpcc.itd.umich.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] possible bug exercised by mpi4py<br>
<strong>From:</strong> Bennet Fauber (<em>bennet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 16:52:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19346.php">Ralph Castain: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19344.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19346.php">Ralph Castain: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19346.php">Ralph Castain: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19348.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've installed the latest mpi4py-1.3 on several systems, and there is a 
<br>
repeated bug when running
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ mpirun -np 5 python test/runtests.py
<br>
<p>where it throws an error on mpigather with openmpi-1.4.4 and hangs with 
<br>
openmpi-1.3.
<br>
<p>It runs to completion and passes all tests when run with -np of 2, 3, 4, 
<br>
6, 7, 8, 9, 10, 11, and 12.
<br>
<p>There is a thread on this at
<br>
<p><a href="http://groups.google.com/group/mpi4py/browse_thread/thread/509ac46af6f79973">http://groups.google.com/group/mpi4py/browse_thread/thread/509ac46af6f79973</a>
<br>
<p>where others report being able to replicate, too.
<br>
<p>The compiler used first was gcc-4.6.2, with openmpi-1.4.4.
<br>
<p>These are all Red Hat machines, RHEL 5 or 6 and with multiple compilers 
<br>
and versions of openmpi 1.3.0 and 1.4.4.
<br>
<p>Lisandro who is the primary developer of mpi4py is able to replicate on 
<br>
Fedora 16.
<br>
<p>Someone else is able to reproduce with
<br>
<p>[ quoting from the groups.google.com page... ]
<br>
===============================================================
<br>
It also happens with the current hg version of mpi4py and
<br>
$ rpm -qa openmpi gcc python
<br>
python-2.7.3-6.fc17.x86_64
<br>
gcc-4.7.0-5.fc17.x86_64
<br>
openmpi-1.5.4-5.fc17.1.x86_64
<br>
===============================================================
<br>
<p>So, I believe this is a bug to be reported.  Per the advice at
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/bugs.php">http://www.open-mpi.org/community/help/bugs.php</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you feel that you do have a definite bug to report but are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsure which list to post to, then post to the user's list.
<br>
<p>Please let me know if there is additional information that you need to 
<br>
replicate.
<br>
<p>Some output is included below the signature in case it is useful.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- bennet
<br>
<pre>
--
East Hall Technical Services
Mathematics and Psychology Research Computing
University of Michigan
(734) 763-1182
On RHEL 5, openmpi 1.3, gcc 4.1.2, python 2.7
$ mpirun -np 5 --mca btl ^sm python test/runtests.py --verbose 
--no-threads --include cco_obj_inter
[0_at_[hidden]] Python 2.7 
(/home/bennet/epd7.2.2/bin/python)
[0_at_[hidden]] MPI 2.0 (Open MPI 1.3.0)
[0_at_[hidden]] mpi4py 1.3 
(build/lib.linux-x86_64-2.7/mpi4py)
[1_at_[hidden]] Python 2.7 
(/home/bennet/epd7.2.2/bin/python)
[1_at_[hidden]] MPI 2.0 (Open MPI 1.3.0)
[1_at_[hidden]] mpi4py 1.3 
(build/lib.linux-x86_64-2.7/mpi4py)
[2_at_[hidden]] Python 2.7 
(/home/bennet/epd7.2.2/bin/python)
[2_at_[hidden]] MPI 2.0 (Open MPI 1.3.0)
[2_at_[hidden]] mpi4py 1.3 
(build/lib.linux-x86_64-2.7/mpi4py)
[3_at_[hidden]] Python 2.7 
(/home/bennet/epd7.2.2/bin/python)
[3_at_[hidden]] MPI 2.0 (Open MPI 1.3.0)
[3_at_[hidden]] mpi4py 1.3 
(build/lib.linux-x86_64-2.7/mpi4py)
[4_at_[hidden]] Python 2.7 
(/home/bennet/epd7.2.2/bin/python)
[4_at_[hidden]] MPI 2.0 (Open MPI 1.3.0)
[4_at_[hidden]] mpi4py 1.3 
(build/lib.linux-x86_64-2.7/mpi4py)
testAllgather (test_cco_obj_inter.TestCCOObjInter) ... testAllgather 
(test_cco_obj_inter.TestCCOObjInter) ... testAllgather 
(test_cco_obj_inter.TestCCOObjInter) ... testAllgather 
(test_cco_obj_inter.TestCCOObjInter) ... testAllgather 
(test_cco_obj_inter.TestCCOObjInter) ...
[ hangs ]
RHEL5
===================================================
$ python
Python 2.6.6 (r266:84292, Sep 12 2011, 14:03:14)
[GCC 4.4.5 20110214 (Red Hat 4.4.5-6)] on linux2
$ gcc -v
Using built-in specs.
COLLECT_GCC=gcc
COLLECT_LTO_WRAPPER=/home/software/rhel6/gcc/4.7.0/libexec/gcc/x86_64-
unknown-linux-gnu/4.7.0/lto-wrapper
Target: x86_64-unknown-linux-gnu
Configured with: ../gcc-4.7.0/configure --prefix=/home/software/rhel6/
gcc/4.7.0 --with-mpfr=/home/software/rhel6/gcc/mpfr-3.1.0/ --with-mpc=/
home/software/rhel6/gcc/mpc-0.9/ --with-gmp=/home/software/rhel6/gcc/
gmp-5.0.5/ --disable-multilib
Thread model: posix
gcc version 4.7.0 (GCC)
$ mpirun -np 5 python test/runtests.py --verbose --no-threads --include cco_obj_inter
[4..._at_[hidden]] Python 2.6 (/usr/bin/python)
[4..._at_[hidden]] MPI 2.1 (Open MPI 1.6.0)
[4..._at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.6/mpi4py)
[2..._at_[hidden]] Python 2.6 (/usr/bin/python)
[2..._at_[hidden]] MPI 2.1 (Open MPI 1.6.0)
[2..._at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.6/mpi4py)
[1..._at_[hidden]] Python 2.6 (/usr/bin/python)
[1..._at_[hidden]] MPI 2.1 (Open MPI 1.6.0)
[1..._at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.6/mpi4py)
[0..._at_[hidden]] Python 2.6 (/usr/bin/python)
[0..._at_[hidden]] MPI 2.1 (Open MPI 1.6.0)
[0..._at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.6/mpi4py)
[3..._at_[hidden]] Python 2.6 (/usr/bin/python)
[3..._at_[hidden]] MPI 2.1 (Open MPI 1.6.0)
[3..._at_[hidden]] mpi4py 1.3 (build/lib.linux-x86_64-2.6/mpi4py)
testAllgather (test_cco_obj_inter.TestCCOObjInter) ... testAllgather
(test_cco_obj_inter.TestCCOObjInter) ... testAllgather
(test_cco_obj_inter.TestCCOObjInter) ... testAllgather
(test_cco_obj_inter.TestCCOObjInter) ... testAllgather
(test_cco_obj_inter.TestCCOObjInter) ... ERROR
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19346.php">Ralph Castain: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19344.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19346.php">Ralph Castain: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19346.php">Ralph Castain: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19348.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
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
