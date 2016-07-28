<?
$subject_val = "Re: [OMPI users] A problem with 'mpiexec -launch-agent'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 14 20:30:17 2010" -->
<!-- isoreceived="20100615003017" -->
<!-- sent="Mon, 14 Jun 2010 18:30:07 -0600" -->
<!-- isosent="20100615003007" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A problem with 'mpiexec -launch-agent'" -->
<!-- id="F2F9D0F1-3A78-4FA7-BEC5-FDDD77B239CB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1276561471.15253.4.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] A problem with 'mpiexec -launch-agent'<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-14 20:30:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13326.php">Jeff Squyres: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Previous message:</strong> <a href="13324.php">Terry Frankcombe: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>In reply to:</strong> <a href="13324.php">Terry Frankcombe: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13326.php">Jeff Squyres: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It isn't our intention either - still looking at this to see what is going on.
<br>
<p><p>On Jun 14, 2010, at 6:24 PM, Terry Frankcombe wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 2010-06-15 at 00:13 +0200, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 13.06.2010 um 09:02 schrieb Zhang Linbo:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm new to OpenMPI and have encountered a problem with mpiexec.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since I need to set up the execution environment for OpenMPI programs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the execution nodes, I use the following command line to launch an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI program:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpiexec -launch-agent /some_path/myscript ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is: the above command works fine if I invoke 'mpiexec'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without an absolute path just like above (assuming the PATH variable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is properly set), but if I prepend an absolute path to 'mpiexec',  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e.g.:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /OMPI_dir/bin/mpiexec -launch-agent /some_path/myscript ....
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; using an absolute path is equivalent to use the --prefix option to  
</span><br>
<span class="quotelev2">&gt;&gt; `mpiexec`. Both ways lead obviously to the erroneous behavior you  
</span><br>
<span class="quotelev2">&gt;&gt; encounter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Speaking as no more than an uneducated user, having the behaviour change
</span><br>
<span class="quotelev1">&gt; depending on invoking by an absolute path or invoking by some
</span><br>
<span class="quotelev1">&gt; unspecified (potentially shell-dependent) path magic seems like a bad
</span><br>
<span class="quotelev1">&gt; idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a long-time *nix user, this just rubs me the wrong way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ciao
</span><br>
<span class="quotelev1">&gt; Terry
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dr. Terry Frankcombe
</span><br>
<span class="quotelev1">&gt; Research School of Chemistry, Australian National University
</span><br>
<span class="quotelev1">&gt; Ph: (+61) 0417 163 509    Skype: terry.frankcombe
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
<li><strong>Next message:</strong> <a href="13326.php">Jeff Squyres: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Previous message:</strong> <a href="13324.php">Terry Frankcombe: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>In reply to:</strong> <a href="13324.php">Terry Frankcombe: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13326.php">Jeff Squyres: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
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
