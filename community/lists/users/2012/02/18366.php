<?
$subject_val = "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 12:16:08 2012" -->
<!-- isoreceived="20120201171608" -->
<!-- sent="Wed, 1 Feb 2012 10:16:01 -0700" -->
<!-- isosent="20120201171601" -->
<!-- name="Daniel Milroy" -->
<!-- email="Daniel.Milroy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2" -->
<!-- id="CAJyx1QHOHOSBHb6RjDjdUCBTAymVOn1wQZqnYJpThzxMgCt47g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="206BE4CD-8E50-4D4B-9DE3-25F4B5FB8921_at_cisco.com" -->
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
<strong>From:</strong> Daniel Milroy (<em>Daniel.Milroy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 12:16:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18367.php">Daniel Milroy: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>Previous message:</strong> <a href="18365.php">Frank: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18346.php">Jeff Squyres: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18353.php">G&#246;tz Waschk: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Pending further testing, your suggestion seems to have fixed the
<br>
issue.  Thank you very much.
<br>
<p><p>Dan Milroy
<br>
<p><p>2012/1/31 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; We have heard reports of failures with the Intel 12.1 compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try with rc4 (that was literally just released) with the --without-memory-manager configure option?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 31, 2012, at 2:19 PM, Daniel Milroy wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have built OpenMPI 1.4.5rc2 with Intel 12.1 compilers in an HPC
</span><br>
<span class="quotelev2">&gt;&gt; environment. &#160;We are running RHEL 5, kernel 2.6.18-238 with Intel Xeon
</span><br>
<span class="quotelev2">&gt;&gt; X5660 cpus. &#160;You can find my build options below. &#160;In an effort to
</span><br>
<span class="quotelev2">&gt;&gt; test the OpenMPI build, I compiled &quot;Hello world&quot; with an mpi_init call
</span><br>
<span class="quotelev2">&gt;&gt; in C and Fortran. &#160;Mpirun of both versions on a single node results in
</span><br>
<span class="quotelev2">&gt;&gt; a segfault. &#160;I have attached the pertinent portion of gdb's output of
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;Hello world&quot; core dump. &#160;Submitting a parallel &quot;Hello world&quot; job
</span><br>
<span class="quotelev2">&gt;&gt; to torque results in segfaults across the respective nodes. &#160;However,
</span><br>
<span class="quotelev2">&gt;&gt; if I execute mpirun of C or Fortran &quot;Hello world&quot; following a segfault
</span><br>
<span class="quotelev2">&gt;&gt; the program will exit successfully. &#160;Additionally, if I strace mpirun
</span><br>
<span class="quotelev2">&gt;&gt; on either a single node or on multiple nodes in parallel &quot;Hello world&quot;
</span><br>
<span class="quotelev2">&gt;&gt; runs successfully. &#160;I am unsure how to proceed- any help would be
</span><br>
<span class="quotelev2">&gt;&gt; greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dan Milroy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Build options:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;source /ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/iccvars.sh intel64
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;source /ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/ifortvars.sh
</span><br>
<span class="quotelev2">&gt;&gt; intel64
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;export CC=/ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64/icc
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;export CXX=/ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64/icpc
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;export F77=/ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64/ifort
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;export F90=/ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64/ifort
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;export FC=/ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64/ifort
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;./configure --prefix=/openmpi-1.4.5rc2_intel-12.1
</span><br>
<span class="quotelev2">&gt;&gt; --with-tm=/torque-2.5.8/ --enable-shared --enable-static --without-psm
</span><br>
<span class="quotelev2">&gt;&gt; &lt;GDB_hello.c_core_dump&gt;_______________________________________________
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="18367.php">Daniel Milroy: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>Previous message:</strong> <a href="18365.php">Frank: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18346.php">Jeff Squyres: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18353.php">G&#246;tz Waschk: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
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
