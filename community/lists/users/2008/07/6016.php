<?
$subject_val = "Re: [OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  2 13:16:09 2008" -->
<!-- isoreceived="20080702171609" -->
<!-- sent="Wed, 02 Jul 2008 11:15:57 -0600" -->
<!-- isosent="20080702171557" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid" -->
<!-- id="C49113ED.E185%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4911092.E183%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-02 13:15:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6017.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Previous message:</strong> <a href="6015.php">Ralph H Castain: "Re: [OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid"</a>
<li><strong>In reply to:</strong> <a href="6015.php">Ralph H Castain: "Re: [OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry - went to one of your links to get that info.
<br>
<p>We know OMPI 1.2.x isn't thread safe. This is unfortunately another example
<br>
of it. Hopefully, 1.3 will be better.
<br>
<p>Ralph
<br>
<p><p><p>On 7/2/08 11:01 AM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Out of curiosity - what version of OMPI are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/2/08 10:46 AM, &quot;Steve Johnson&quot; &lt;steve_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If mpirun is given an application that isn't in the PATH, then instead of
</span><br>
<span class="quotelev2">&gt;&gt; exiting it prints the error that it failed to find the executable and then
</span><br>
<span class="quotelev2">&gt;&gt; proceeds spins up cpu time.  strace shows an endless stream of sched_yield().
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For example, if &quot;blah&quot; doesn't exist:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 16 blah
</span><br>
<span class="quotelev2">&gt;&gt; Ditto if ./blah doesn't exist and mpirun is called as
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 16 ./blah
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OS: CentOS 5.1
</span><br>
<span class="quotelev2">&gt;&gt; Kernel: 2.6.18-92.1.1.el5.centos.plus
</span><br>
<span class="quotelev2">&gt;&gt; Arch: x86_64
</span><br>
<span class="quotelev2">&gt;&gt; glibc/pthread: glibc-2.5-18.el5_1.1
</span><br>
<span class="quotelev2">&gt;&gt; GCC: 4.1.2-14.el5
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; CC=gcc
</span><br>
<span class="quotelev2">&gt;&gt; CXX=g++
</span><br>
<span class="quotelev2">&gt;&gt; F77=gfortran
</span><br>
<span class="quotelev2">&gt;&gt; FC=gfortran
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --with-tm --prefix=$HOME/openmpi --libdir=$HOME/openmpi/lib64
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A qsig -s 15 will terminate the mpirun processes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info is at <a href="http://isc.tamu.edu/~steve/ompi_info.txt">http://isc.tamu.edu/~steve/ompi_info.txt</a>
</span><br>
<span class="quotelev2">&gt;&gt; config.log.bz is at <a href="http://isc.tamu.edu/~steve/ompi_config.log.bz2">http://isc.tamu.edu/~steve/ompi_config.log.bz2</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also confirmed this on openSUSE 10.2, 2.6.18.8-0.9-default, x86_64,
</span><br>
<span class="quotelev2">&gt;&gt; glibc-2.5-34.7, gcc-4.1.3-29.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; // Steve
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6017.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Previous message:</strong> <a href="6015.php">Ralph H Castain: "Re: [OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid"</a>
<li><strong>In reply to:</strong> <a href="6015.php">Ralph H Castain: "Re: [OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid"</a>
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
