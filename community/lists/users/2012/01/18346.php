<?
$subject_val = "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 14:23:17 2012" -->
<!-- isoreceived="20120131192317" -->
<!-- sent="Tue, 31 Jan 2012 14:23:12 -0500" -->
<!-- isosent="20120131192312" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2" -->
<!-- id="206BE4CD-8E50-4D4B-9DE3-25F4B5FB8921_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJyx1QFEJ5CGempbZJf1-ZkN+hp2FMTAtqd71RDK89FAktpX=A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 14:23:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18347.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18345.php">Daniel Milroy: "[OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>In reply to:</strong> <a href="18345.php">Daniel Milroy: "[OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18366.php">Daniel Milroy: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18366.php">Daniel Milroy: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have heard reports of failures with the Intel 12.1 compilers.
<br>
<p>Can you try with rc4 (that was literally just released) with the --without-memory-manager configure option?
<br>
<p><p>On Jan 31, 2012, at 2:19 PM, Daniel Milroy wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have built OpenMPI 1.4.5rc2 with Intel 12.1 compilers in an HPC
</span><br>
<span class="quotelev1">&gt; environment.  We are running RHEL 5, kernel 2.6.18-238 with Intel Xeon
</span><br>
<span class="quotelev1">&gt; X5660 cpus.  You can find my build options below.  In an effort to
</span><br>
<span class="quotelev1">&gt; test the OpenMPI build, I compiled &quot;Hello world&quot; with an mpi_init call
</span><br>
<span class="quotelev1">&gt; in C and Fortran.  Mpirun of both versions on a single node results in
</span><br>
<span class="quotelev1">&gt; a segfault.  I have attached the pertinent portion of gdb's output of
</span><br>
<span class="quotelev1">&gt; the &quot;Hello world&quot; core dump.  Submitting a parallel &quot;Hello world&quot; job
</span><br>
<span class="quotelev1">&gt; to torque results in segfaults across the respective nodes.  However,
</span><br>
<span class="quotelev1">&gt; if I execute mpirun of C or Fortran &quot;Hello world&quot; following a segfault
</span><br>
<span class="quotelev1">&gt; the program will exit successfully.  Additionally, if I strace mpirun
</span><br>
<span class="quotelev1">&gt; on either a single node or on multiple nodes in parallel &quot;Hello world&quot;
</span><br>
<span class="quotelev1">&gt; runs successfully.  I am unsure how to proceed- any help would be
</span><br>
<span class="quotelev1">&gt; greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dan Milroy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Build options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        source /ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/iccvars.sh intel64
</span><br>
<span class="quotelev1">&gt;        source /ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/ifortvars.sh
</span><br>
<span class="quotelev1">&gt; intel64
</span><br>
<span class="quotelev1">&gt;        export CC=/ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64/icc
</span><br>
<span class="quotelev1">&gt;        export CXX=/ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64/icpc
</span><br>
<span class="quotelev1">&gt;        export F77=/ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64/ifort
</span><br>
<span class="quotelev1">&gt;        export F90=/ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64/ifort
</span><br>
<span class="quotelev1">&gt;        export FC=/ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64/ifort
</span><br>
<span class="quotelev1">&gt;        ./configure --prefix=/openmpi-1.4.5rc2_intel-12.1
</span><br>
<span class="quotelev1">&gt; --with-tm=/torque-2.5.8/ --enable-shared --enable-static --without-psm
</span><br>
<span class="quotelev1">&gt; &lt;GDB_hello.c_core_dump&gt;_______________________________________________
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18347.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18345.php">Daniel Milroy: "[OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>In reply to:</strong> <a href="18345.php">Daniel Milroy: "[OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18366.php">Daniel Milroy: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18366.php">Daniel Milroy: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
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
