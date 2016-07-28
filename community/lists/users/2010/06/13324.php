<?
$subject_val = "Re: [OMPI users] A problem with 'mpiexec -launch-agent'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 14 20:24:43 2010" -->
<!-- isoreceived="20100615002443" -->
<!-- sent="Tue, 15 Jun 2010 10:24:31 +1000" -->
<!-- isosent="20100615002431" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A problem with 'mpiexec -launch-agent'" -->
<!-- id="1276561471.15253.4.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="77AC221D-A325-4FD1-8632-FDFC3BA40F1C_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-14 20:24:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13325.php">Ralph Castain: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Previous message:</strong> <a href="13323.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>In reply to:</strong> <a href="13321.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13325.php">Ralph Castain: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Reply:</strong> <a href="13325.php">Ralph Castain: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Reply:</strong> <a href="13326.php">Jeff Squyres: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2010-06-15 at 00:13 +0200, Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 13.06.2010 um 09:02 schrieb Zhang Linbo:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm new to OpenMPI and have encountered a problem with mpiexec.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Since I need to set up the execution environment for OpenMPI programs
</span><br>
<span class="quotelev2">&gt; &gt; on the execution nodes, I use the following command line to launch an
</span><br>
<span class="quotelev2">&gt; &gt; OMPI program:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   mpiexec -launch-agent /some_path/myscript ....
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The problem is: the above command works fine if I invoke 'mpiexec'
</span><br>
<span class="quotelev2">&gt; &gt; without an absolute path just like above (assuming the PATH variable
</span><br>
<span class="quotelev2">&gt; &gt; is properly set), but if I prepend an absolute path to 'mpiexec',  
</span><br>
<span class="quotelev2">&gt; &gt; e.g.:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   /OMPI_dir/bin/mpiexec -launch-agent /some_path/myscript ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using an absolute path is equivalent to use the --prefix option to  
</span><br>
<span class="quotelev1">&gt; `mpiexec`. Both ways lead obviously to the erroneous behavior you  
</span><br>
<span class="quotelev1">&gt; encounter.
</span><br>
<p>Hi folks
<br>
<p>Speaking as no more than an uneducated user, having the behaviour change
<br>
depending on invoking by an absolute path or invoking by some
<br>
unspecified (potentially shell-dependent) path magic seems like a bad
<br>
idea.
<br>
<p>As a long-time *nix user, this just rubs me the wrong way.
<br>
<p>Ciao
<br>
Terry
<br>
<p><p><pre>
-- 
Dr. Terry Frankcombe
Research School of Chemistry, Australian National University
Ph: (+61) 0417 163 509    Skype: terry.frankcombe
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13325.php">Ralph Castain: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Previous message:</strong> <a href="13323.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>In reply to:</strong> <a href="13321.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13325.php">Ralph Castain: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Reply:</strong> <a href="13325.php">Ralph Castain: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Reply:</strong> <a href="13326.php">Jeff Squyres: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
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
