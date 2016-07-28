<?
$subject_val = "Re: [OMPI users] A problem with 'mpiexec -launch-agent'";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 15 08:59:23 2010" -->
<!-- isoreceived="20100615125923" -->
<!-- sent="Tue, 15 Jun 2010 14:59:10 +0200" -->
<!-- isosent="20100615125910" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A problem with 'mpiexec -launch-agent'" -->
<!-- id="F51DE5C2-841B-4930-A51E-E59EBD6F831F_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2EFB9388-87D9-4EE8-BCCE-A42B14F59805_at_cisco.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-15 08:59:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13331.php">Govind Songara: "Re: [OMPI users] mpirun jobs only one single node"</a>
<li><strong>Previous message:</strong> <a href="13329.php">Jeff Squyres: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>In reply to:</strong> <a href="13329.php">Jeff Squyres: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 15.06.2010 um 14:52 schrieb Jeff Squyres:
<br>
<p><span class="quotelev1">&gt; On Jun 14, 2010, at 3:13 PM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bash: -c: line 0: ` PATH=/OMPI_dir/bin:$PATH ; export PATH ; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=/OMPI_dir/lib:$LD_LIBRARY_PATH ; export 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH ; /some_path/myscript /OMPI_dir/bin/(null) --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemonize -mca ess env -mca orte_ess_jobid 1978662912 -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;1978662912.0;tcp://180.0.14.12:54844;tcp://190.0.14.12:54844&quot;'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that &quot;(null)&quot; in the middle.  We'll have to dig into how that got there...  Reuti's probably right that something is somehow NULL in there, and glibc is snprintf'ing (null) instead of SEGV'ing.
</span><br>
<p>I think the problem is not only the (null) itself, but also the output &quot;prefix_dir&quot; and &quot;bin_base&quot; (unless the launch-agent would have ignore/interpret $1 $2 in a proper way). The (null) is then the content of &quot;orted_cmd&quot;.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph and I are talking about this issue, but we're hindered by the fact that I'm at the MPI Forum this week (i.e., meetings are taking up all my days).  I haven't had a chance to look at the code in depth yet.
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
<li><strong>Next message:</strong> <a href="13331.php">Govind Songara: "Re: [OMPI users] mpirun jobs only one single node"</a>
<li><strong>Previous message:</strong> <a href="13329.php">Jeff Squyres: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>In reply to:</strong> <a href="13329.php">Jeff Squyres: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
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
