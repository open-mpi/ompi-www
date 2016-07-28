<?
$subject_val = "Re: [OMPI users] mpirun error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  1 12:25:34 2013" -->
<!-- isoreceived="20130401162534" -->
<!-- sent="Mon, 1 Apr 2013 16:25:24 +0000" -->
<!-- isosent="20130401162524" -->
<!-- name="Elken, Tom" -->
<!-- email="tom.elken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun error" -->
<!-- id="1182FB2B5679CE4B8BAD97725F014BB7305295F5_at_FMSMSX107.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5254863A-B92C-41FC-8AC0-314650B6836D_at_nrl.navy.mil" -->
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
<strong>From:</strong> Elken, Tom (<em>tom.elken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-01 12:25:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21637.php">Alan Sayre: "[OMPI users] error configuring OpenMPI 1.6.4 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="21635.php">Ralph Castain: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21634.php">Michael Kluskens: "Re: [OMPI users] mpirun error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21688.php">Pradeep Jha: "Re: [OMPI users] mpirun error"</a>
<li><strong>Reply:</strong> <a href="21688.php">Pradeep Jha: "Re: [OMPI users] mpirun error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; The Intel Fortran 2013 compiler comes with support for Intel's MPI runtime and
</span><br>
<span class="quotelev1">&gt; you are getting that instead of OpenMPI.   You need to fix your path for all the
</span><br>
<span class="quotelev1">&gt; shells you use.
</span><br>
[Tom] 
<br>
Agree with Michael, but thought I would note something additional.
<br>
If you are using OFED's mpi-selector to select Open MPI, it will set up the path to Open MPI before a startup script like  .bashrc gets processed.
<br>
So if you source the Intel Compiler's compilervars.sh, you will get Intel's mpirt in your path before the OpenMPI's bin directory.
<br>
<p>One workaround is to source the following _after_ you source the Intel Compiler's compilervars.sh in your start-up scripts:
<br>
. /var/mpi-selector/data/openmpi_...sh
<br>
<p>-Tom
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 1, 2013, at 5:12 AM, Pradeep Jha wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /opt/intel/composer_xe_2013.1.117/mpirt/bin/intel64/mpirun: line 96:
</span><br>
<span class="quotelev1">&gt; /opt/intel/composer_xe_2013.1.117/mpirt/bin/intel64/mpivars.sh: No such file
</span><br>
<span class="quotelev1">&gt; or directory
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
<li><strong>Next message:</strong> <a href="21637.php">Alan Sayre: "[OMPI users] error configuring OpenMPI 1.6.4 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="21635.php">Ralph Castain: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21634.php">Michael Kluskens: "Re: [OMPI users] mpirun error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21688.php">Pradeep Jha: "Re: [OMPI users] mpirun error"</a>
<li><strong>Reply:</strong> <a href="21688.php">Pradeep Jha: "Re: [OMPI users] mpirun error"</a>
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
