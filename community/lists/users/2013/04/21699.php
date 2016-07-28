<?
$subject_val = "Re: [OMPI users] mpirun error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  9 23:47:39 2013" -->
<!-- isoreceived="20130410034739" -->
<!-- sent="Wed, 10 Apr 2013 12:47:14 +0900" -->
<!-- isosent="20130410034714" -->
<!-- name="Pradeep Jha" -->
<!-- email="pradeep_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun error" -->
<!-- id="CAL_eiiR2SqaWwPUkMjDzZYGF1658qNZS8L708dDU+sdomOibaw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1182FB2B5679CE4B8BAD97725F014BB7305295F5_at_FMSMSX107.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun error<br>
<strong>From:</strong> Pradeep Jha (<em>pradeep_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-09 23:47:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21700.php">Gustavo Correa: "[OMPI users] Is Open MPI 1.6.4 viable on Mac OS X 10.6.8 ?"</a>
<li><strong>Previous message:</strong> <a href="21698.php">Thomas Vacek: "Re: [OMPI users] 1.7 hangs with --preload-binary"</a>
<li><strong>In reply to:</strong> <a href="21647.php">Elken, Tom: "Re: [OMPI users] mpirun error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21716.php">Ray Sheppard: "[OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<li><strong>Reply:</strong> <a href="21716.php">Ray Sheppard: "[OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>thanks for the responses. But I have no idea how to do that. Which
<br>
environment variables should I look at? How do I find out where is the
<br>
openMPI installed and make the mpif90 use the openMPI?
<br>
<p>Thanks,
<br>
Pradeep
<br>
<p><p>2013/4/2 Elken, Tom &lt;tom.elken_at_[hidden]&gt;
<br>
<p><span class="quotelev2">&gt; &gt; The Intel Fortran 2013 compiler comes with support for Intel's MPI
</span><br>
<span class="quotelev1">&gt; runtime and
</span><br>
<span class="quotelev2">&gt; &gt; you are getting that instead of OpenMPI.   You need to fix your path for
</span><br>
<span class="quotelev1">&gt; all the
</span><br>
<span class="quotelev2">&gt; &gt; shells you use.
</span><br>
<span class="quotelev1">&gt; [Tom]
</span><br>
<span class="quotelev1">&gt; Agree with Michael, but thought I would note something additional.
</span><br>
<span class="quotelev1">&gt; If you are using OFED's mpi-selector to select Open MPI, it will set up
</span><br>
<span class="quotelev1">&gt; the path to Open MPI before a startup script like  .bashrc gets processed.
</span><br>
<span class="quotelev1">&gt; So if you source the Intel Compiler's compilervars.sh, you will get
</span><br>
<span class="quotelev1">&gt; Intel's mpirt in your path before the OpenMPI's bin directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One workaround is to source the following _after_ you source the Intel
</span><br>
<span class="quotelev1">&gt; Compiler's compilervars.sh in your start-up scripts:
</span><br>
<span class="quotelev1">&gt; . /var/mpi-selector/data/openmpi_...sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Tom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 1, 2013, at 5:12 AM, Pradeep Jha wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /opt/intel/composer_xe_2013.1.117/mpirt/bin/intel64/mpirun: line 96:
</span><br>
<span class="quotelev2">&gt; &gt; /opt/intel/composer_xe_2013.1.117/mpirt/bin/intel64/mpivars.sh: No such
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev2">&gt; &gt; or directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21699/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21700.php">Gustavo Correa: "[OMPI users] Is Open MPI 1.6.4 viable on Mac OS X 10.6.8 ?"</a>
<li><strong>Previous message:</strong> <a href="21698.php">Thomas Vacek: "Re: [OMPI users] 1.7 hangs with --preload-binary"</a>
<li><strong>In reply to:</strong> <a href="21647.php">Elken, Tom: "Re: [OMPI users] mpirun error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21716.php">Ray Sheppard: "[OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<li><strong>Reply:</strong> <a href="21716.php">Ray Sheppard: "[OMPI users] LDBL_MANT_DIG declaration trouble"</a>
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
