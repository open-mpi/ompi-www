<?
$subject_val = "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 12:34:34 2012" -->
<!-- isoreceived="20120201173434" -->
<!-- sent="Wed, 1 Feb 2012 10:34:13 -0700" -->
<!-- isosent="20120201173413" -->
<!-- name="Daniel Milroy" -->
<!-- email="Daniel.Milroy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2" -->
<!-- id="CAJyx1QGKJAjhbhOQjH7r4+trHxiTvF7JEfktHwU=O6os5-t_jQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CACd6u-pZuWk3Wt_yPN8V9X-pKAgbCE=4hCYzmQLgTBAK9NFkLw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-02-01 12:34:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18368.php">Jeff Squyres: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18366.php">Daniel Milroy: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>In reply to:</strong> <a href="18353.php">G&#246;tz Waschk: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi G&#246;tz,
<br>
<p>I don't know whether we can implement your suggestion; it is dependent
<br>
on the terms of our license with Intel.  I will take this under
<br>
advisement.  Thank you very much.
<br>
<p><p>Dan Milroy
<br>
<p><p>2012/2/1 G&#246;tz Waschk &lt;goetz.waschk_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; On Tue, Jan 31, 2012 at 8:19 PM, Daniel Milroy
</span><br>
<span class="quotelev1">&gt; &lt;Daniel.Milroy_at_[hidden]&gt; wrote:
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
<span class="quotelev2">&gt;&gt; the &quot;Hello world&quot; core dump.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Daniel,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that looks like the problem I had with my intel build of openmpi. I
</span><br>
<span class="quotelev1">&gt; could solve it by upgrading the Intel Compiler version to 12.1.2.273:
</span><br>
<span class="quotelev1">&gt; % icc -v
</span><br>
<span class="quotelev1">&gt; icc version 12.1.2 (gcc version 4.4.5 compatibility)
</span><br>
<span class="quotelev1">&gt; % icc -V
</span><br>
<span class="quotelev1">&gt; Intel(R) C Intel(R) 64 Compiler XE for applications running on
</span><br>
<span class="quotelev1">&gt; Intel(R) 64, Version 12.1 Build 20111128
</span><br>
<span class="quotelev1">&gt; Copyright (C) 1985-2011 Intel Corporation. &#160;All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After a rebuild of the openmpi runtime, the crashes went away. I was
</span><br>
<span class="quotelev1">&gt; using openmpi 1.5.3, but you could still have the same problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards, G&#246;tz
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
<li><strong>Next message:</strong> <a href="18368.php">Jeff Squyres: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18366.php">Daniel Milroy: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>In reply to:</strong> <a href="18353.php">G&#246;tz Waschk: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
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
