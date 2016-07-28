<?
$subject_val = "Re: [OMPI users] Gridengine + Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  6 14:08:44 2008" -->
<!-- isoreceived="20080706180844" -->
<!-- sent="Sun, 06 Jul 2008 14:08:34 -0400" -->
<!-- isosent="20080706180834" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Gridengine + Open MPI" -->
<!-- id="48710A22.2000301_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4870DFFA.2000401_at_icps.u-strasbg.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Gridengine + Open MPI<br>
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-06 14:08:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6027.php">Romaric David: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Previous message:</strong> <a href="6025.php">Romaric David: "[OMPI users] Gridengine + Open MPI"</a>
<li><strong>In reply to:</strong> <a href="6025.php">Romaric David: "[OMPI users] Gridengine + Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6027.php">Romaric David: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Reply:</strong> <a href="6027.php">Romaric David: "Re: [OMPI users] Gridengine + Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Romaric David wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to use Open MPI with Sun Grid Engine 6.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With Open MPI 1.2.6 or 1.2.7, Open MPI processes are perfectly started 
</span><br>
<span class="quotelev1">&gt; or killed by Sun Grid Engine.
</span><br>
<span class="quotelev1">&gt; Suspend does not work (looks like a know issue
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/03/2790.php">http://www.open-mpi.org/community/lists/users/2007/03/2790.php</a>):
</span><br>
<span class="quotelev1">&gt; Has this issue finally been solved ?
</span><br>
<p>It was fixed at one point in the trunk before v1.3 went official, but 
<br>
while rolling the code from gridengine PLM into the rsh PLM code, this 
<br>
feature was left out because there was some lingering issues that I 
<br>
didn't resolved and I lost track of it. Sorry but thanks for bringing it 
<br>
up, I will need to look at the issue again and reopen this ticket 
<br>
against v1.3:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/1099">https://svn.open-mpi.org/trac/ompi/ticket/1099</a>
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I then tried to use OpenMPI 1.3.x. When adding the --with-sge option at 
</span><br>
<span class="quotelev1">&gt; compile time, SGE
</span><br>
<span class="quotelev1">&gt; pls does not get build, only SGE ras components. Thus openmpi jobs 
</span><br>
<span class="quotelev1">&gt; cannot start
</span><br>
<span class="quotelev1">&gt; in Gridengine. Is this intentionnal that the pls SGE components are not 
</span><br>
<span class="quotelev1">&gt; built ?
</span><br>
<p>For v1.3, you are right to point out that the --with-sge build flag is 
<br>
required to get Open MPI to build with the SGE support. And only the 
<br>
gridengine RAS will be built.
<br>
<p>The new PLM in v1.3 series will include the rsh plm which will be 
<br>
overloaded as the SGE parallel job launcher as well as the rsh/ssh 
<br>
launcher.
<br>
<p>Since there are a lot of overlaps in the functionalities between the 2 
<br>
PLMs, it made sense to merge the gridengine plm into the rsh PLM for the 
<br>
ease of maintainability and of troubleshooting. By setting the runtime 
<br>
flag &quot;--mca plm_rsh_disable_qrsh&quot;, it should allow user to disable the 
<br>
SGE launcher and start the rsh/ssh method under SGE environment.
<br>
<p>So even it is the rsh PLM that starts the parallel job under SGE, the 
<br>
rsh PLM can detect if the Open MPI job is started under the SGE Parallel 
<br>
Environment (via checking some SGE env vars) and use the &quot;qrsh 
<br>
--inherit&quot; command to launch the parallel job the same way as it was 
<br>
before. You can check by setting MCA to something like &quot;--mca 
<br>
plm_base_verbose 10&quot; in your mpirun command and look for the launch 
<br>
commands that mpirun uses.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Regards,
</span><br>
<span class="quotelev1">&gt;     Romaric
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6027.php">Romaric David: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Previous message:</strong> <a href="6025.php">Romaric David: "[OMPI users] Gridengine + Open MPI"</a>
<li><strong>In reply to:</strong> <a href="6025.php">Romaric David: "[OMPI users] Gridengine + Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6027.php">Romaric David: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Reply:</strong> <a href="6027.php">Romaric David: "Re: [OMPI users] Gridengine + Open MPI"</a>
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
