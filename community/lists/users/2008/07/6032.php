<?
$subject_val = "Re: [OMPI users] Valgrind Functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  8 05:05:42 2008" -->
<!-- isoreceived="20080708090542" -->
<!-- sent="Tue, 08 Jul 2008 10:05:36 +0100" -->
<!-- isosent="20080708090536" -->
<!-- name="Ashley Pittman" -->
<!-- email="apittman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind Functionality" -->
<!-- id="1215507936.8277.9.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
<!-- inreplyto="845859.25104.qm_at_web55404.mail.re4.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Valgrind Functionality<br>
<strong>From:</strong> Ashley Pittman (<em>apittman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-08 05:05:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6033.php">Alastair Basden: "[OMPI users] ORTE_ERROR_LOG timeout"</a>
<li><strong>Previous message:</strong> <a href="6031.php">Tom Riddle: "[OMPI users] Valgrind Functionality"</a>
<li><strong>In reply to:</strong> <a href="6031.php">Tom Riddle: "[OMPI users] Valgrind Functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6036.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Reply:</strong> <a href="6036.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2008-07-07 at 19:09 -0700, Tom Riddle wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was attempting to get valgrind working with a simple MPI app
</span><br>
<span class="quotelev1">&gt; (osu_latency) on OpenMPI. While it appears to report uninitialized
</span><br>
<span class="quotelev1">&gt; values it fails to report any mallocs or frees that have been
</span><br>
<span class="quotelev1">&gt; conducted. 
</span><br>
<p>The normal reason for this is either using static applications or having
<br>
a very stripped glibc.  It doesn't appear you've done the former as you
<br>
are linking in libpthread but the latter is a possibility, you might
<br>
benefit from installing the glibc-devel package.  I don't recalled RHEL
<br>
being the worst offenders at stripping libc however.
<br>
<p><span class="quotelev1">&gt; I am using RHEL 5, gcc 4.2.3 and a drop from the repo labeled
</span><br>
<span class="quotelev1">&gt; openmpi-1.3a1r18303. configured with  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  $ ../configure --prefix=/opt/wkspace/openmpi-1.3a1r18303 CC=gcc 
</span><br>
<span class="quotelev1">&gt; CXX=g++ --disable-mpi-f77 --enable-debug --enable-memchecker 
</span><br>
<span class="quotelev1">&gt; --with-psm=/usr/include --with-valgrind=/opt/wkspace/valgrind-3.3.0/
</span><br>
<p><span class="quotelev1">&gt; As the FAQ's suggest I am running a later version of valgrind,
</span><br>
<span class="quotelev1">&gt; enabling the memchecker and debug. I tested a slightly modified
</span><br>
<span class="quotelev1">&gt; osu_latency test which has a simple char buffer malloc and free but
</span><br>
<span class="quotelev1">&gt; the valgrind summary shows no malloc/free activity whatsoever. This is
</span><br>
<span class="quotelev1">&gt; running on a dual node system using Infinipath HCAs.  Here is a
</span><br>
<span class="quotelev1">&gt; trimmed output.
</span><br>
<p>Although you configured openmpi with what appears to be valgrind 3.3.0
<br>
the version of valgrind you are using is 3.2.1, perhaps you want to
<br>
specify the full path of valgrind on the mpirun command line?
<br>
<p><span class="quotelev1">&gt; [tom_at_lab01 ~]$ mpirun --mca pml cm -np 2 --hostfile my_hostfile
</span><br>
<span class="quotelev1">&gt; valgrind ./osu_latency1 
</span><br>
<span class="quotelev1">&gt; ==17839== Memcheck, a memory error detector.
</span><br>
<span class="quotelev1">&gt; ==17839== Copyright (C) 2002-2006, and GNU GPL'd, by Julian Seward et
</span><br>
<span class="quotelev1">&gt; al.
</span><br>
<span class="quotelev1">&gt; ==17839== Using LibVEX rev 1658, a library for dynamic binary
</span><br>
<span class="quotelev1">&gt; translation.
</span><br>
<span class="quotelev1">&gt; ==17839== Copyright (C) 2004-2006, and GNU GPL'd, by OpenWorks LLP.
</span><br>
<span class="quotelev1">&gt; ==17839== Using valgrind-3.2.1, a dynamic binary instrumentation
</span><br>
<span class="quotelev1">&gt; framework.
</span><br>
<span class="quotelev1">&gt; ==17839== Copyright (C) 2000-2006, and GNU GPL'd, by Julian Seward et
</span><br>
<span class="quotelev1">&gt; al.
</span><br>
<span class="quotelev1">&gt; ==17839== For more details, rerun with: -v
</span><br>
<p>Ashley Pittman.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6033.php">Alastair Basden: "[OMPI users] ORTE_ERROR_LOG timeout"</a>
<li><strong>Previous message:</strong> <a href="6031.php">Tom Riddle: "[OMPI users] Valgrind Functionality"</a>
<li><strong>In reply to:</strong> <a href="6031.php">Tom Riddle: "[OMPI users] Valgrind Functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6036.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Reply:</strong> <a href="6036.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
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
