<?
$subject_val = "Re: [OMPI users] A problem with 'mpiexec -launch-agent'";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 15 08:52:12 2010" -->
<!-- isoreceived="20100615125212" -->
<!-- sent="Tue, 15 Jun 2010 05:52:05 -0700" -->
<!-- isosent="20100615125205" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A problem with 'mpiexec -launch-agent'" -->
<!-- id="2EFB9388-87D9-4EE8-BCCE-A42B14F59805_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-15 08:52:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13330.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Previous message:</strong> <a href="13328.php">Ralph Castain: "Re: [OMPI users] mpirun jobs only one single node"</a>
<li><strong>In reply to:</strong> <a href="13321.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13330.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Reply:</strong> <a href="13330.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 14, 2010, at 3:13 PM, Reuti wrote:
<br>
<p><span class="quotelev2">&gt; &gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev2">&gt; &gt; bash: -c: line 0: ` PATH=/OMPI_dir/bin:$PATH ; export PATH ; 
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH=/OMPI_dir/lib:$LD_LIBRARY_PATH ; export 
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH ; /some_path/myscript /OMPI_dir/bin/(null) --
</span><br>
<span class="quotelev2">&gt; &gt; daemonize -mca ess env -mca orte_ess_jobid 1978662912 -mca 
</span><br>
<span class="quotelev2">&gt; &gt; orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;1978662912.0;tcp://180.0.14.12:54844;tcp://190.0.14.12:54844&quot;'
</span><br>
<p>The problem is that &quot;(null)&quot; in the middle.  We'll have to dig into how that got there...  Reuti's probably right that something is somehow NULL in there, and glibc is snprintf'ing (null) instead of SEGV'ing.
<br>
<p>Ralph and I are talking about this issue, but we're hindered by the fact that I'm at the MPI Forum this week (i.e., meetings are taking up all my days).  I haven't had a chance to look at the code in depth yet.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="13330.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Previous message:</strong> <a href="13328.php">Ralph Castain: "Re: [OMPI users] mpirun jobs only one single node"</a>
<li><strong>In reply to:</strong> <a href="13321.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13330.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Reply:</strong> <a href="13330.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
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
