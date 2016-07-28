<?
$subject_val = "Re: [OMPI users] Today's SVN 1.7a1r22089_svn simple job failure";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 11 19:51:15 2009" -->
<!-- isoreceived="20091011235115" -->
<!-- sent="Sun, 11 Oct 2009 17:51:06 -0600" -->
<!-- isosent="20091011235106" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Today's SVN 1.7a1r22089_svn simple job failure" -->
<!-- id="7890269B-9716-41EC-B665-EC4C3B5AC33D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.GSO.4.64.0910111532180.6299_at_aragorn.brc.West.Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI users] Today's SVN 1.7a1r22089_svn simple job failure<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-11 19:51:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10908.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<li><strong>Previous message:</strong> <a href="10906.php">Mostyn Lewis: "[OMPI users] Today's SVN 1.7a1r22089_svn simple job failure"</a>
<li><strong>In reply to:</strong> <a href="10906.php">Mostyn Lewis: "[OMPI users] Today's SVN 1.7a1r22089_svn simple job failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed in 22090 - thanks!
<br>
<p>On Oct 11, 2009, at 4:37 PM, Mostyn Lewis wrote:
<br>
<p><span class="quotelev1">&gt; Simple job (standard compute pi, cpi.c), one machine  with 4 cores -
</span><br>
<span class="quotelev1">&gt; OpenMPI built with gcc 4.3.2 and using gcc 4.3.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -x FOO --mca btl tcp,self -np 4 -machinefile hosty ./a.out
</span><br>
<span class="quotelev1">&gt; [hosty:11202] [[12796,0],0] ORTE_ERROR_LOG: Not implemented in  
</span><br>
<span class="quotelev1">&gt; file ../../../../.././orte/mca/rmaps/round_robin/rmaps_rr.c at line  
</span><br>
<span class="quotelev1">&gt; 122
</span><br>
<span class="quotelev1">&gt; [hosty:11202] [[12796,0],0] ORTE_ERROR_LOG: Not implemented in  
</span><br>
<span class="quotelev1">&gt; file ../../../.././orte/mca/rmaps/base/rmaps_base_map_job.c at line 88
</span><br>
<span class="quotelev1">&gt; [hosty:11202] [[12796,0],0] ORTE_ERROR_LOG: Not implemented in  
</span><br>
<span class="quotelev1">&gt; file ../../../.././orte/mca/plm/base/plm_base_launch_support.c at  
</span><br>
<span class="quotelev1">&gt; line 103
</span><br>
<span class="quotelev1">&gt; [hosty:11202] [[12796,0],0] ORTE_ERROR_LOG: Not implemented in  
</span><br>
<span class="quotelev1">&gt; file ../../../../.././orte/mca/plm/rsh/plm_rsh_module.c at line 1013
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; DM
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
<li><strong>Next message:</strong> <a href="10908.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<li><strong>Previous message:</strong> <a href="10906.php">Mostyn Lewis: "[OMPI users] Today's SVN 1.7a1r22089_svn simple job failure"</a>
<li><strong>In reply to:</strong> <a href="10906.php">Mostyn Lewis: "[OMPI users] Today's SVN 1.7a1r22089_svn simple job failure"</a>
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
