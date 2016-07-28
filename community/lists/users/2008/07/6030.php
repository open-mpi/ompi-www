<?
$subject_val = "Re: [OMPI users] Gridengine + Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  7 16:23:06 2008" -->
<!-- isoreceived="20080707202306" -->
<!-- sent="Mon, 07 Jul 2008 16:22:59 -0400" -->
<!-- isosent="20080707202259" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Gridengine + Open MPI" -->
<!-- id="48727B23.40308_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6C12E636-F0BF-4DBE-867C-6335149DEA04_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2008-07-07 16:22:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6031.php">Tom Riddle: "[OMPI users] Valgrind Functionality"</a>
<li><strong>Previous message:</strong> <a href="6029.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>In reply to:</strong> <a href="6028.php">Reuti: "Re: [OMPI users] Gridengine + Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6029.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 07.07.2008 um 11:31 schrieb Romaric David:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Pak Lui a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It was fixed at one point in the trunk before v1.3 went official, but 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; while rolling the code from gridengine PLM into the rsh PLM code, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this feature was left out because there was some lingering issues 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that I didn't resolved and I lost track of it. Sorry but thanks for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bringing it up, I will need to look at the issue again and reopen 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this ticket against v1.3:
</span><br>
<span class="quotelev2">&gt;&gt; Ok, so I have to wait for a 1.3 version to work with job suspend, or
</span><br>
<span class="quotelev2">&gt;&gt; will it be back-ported to 1.2.6 or 1.2.6 ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So even it is the rsh PLM that starts the parallel job under SGE, the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rsh PLM can detect if the Open MPI job is started under the SGE 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parallel Environment (via checking some SGE env vars) and use the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;qrsh --inherit&quot; command to launch the parallel job the same way as 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it was before. You can check by setting MCA to something like &quot;--mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plm_base_verbose 10&quot; in your mpirun command and look for the launch 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commands that mpirun uses.
</span><br>
<span class="quotelev2">&gt;&gt; It looks like shepherd cannot be started for a reason I couldn't get yet.
</span><br>
<span class="quotelev2">&gt;&gt; /opt/SGE/utilbin/lx24-amd64/rsh exited with exit code 0
</span><br>
<span class="quotelev2">&gt;&gt; reading exit code from shepherd ... 255
</span><br>
<span class="quotelev2">&gt;&gt; [hostname:16745] ----------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you mean with the plain rsh startup, like a loose integration? Isn't in 
</span><br>
<span class="quotelev1">&gt; this case a proper hostlist necessary, which is for other MPI 
</span><br>
<span class="quotelev1">&gt; implementations built in the start_proc_args defined routine? AFAIK you 
</span><br>
<span class="quotelev1">&gt; can disregard the hostlist only with Open MPI's tight SGE support.
</span><br>
<p>I think he's using the tight integration and not using a plain rsh 
<br>
startup. From the output it shows that he's using the bundled rsh from 
<br>
SGE. From my run with a recent trunk, something is indeed broken for 
<br>
tight integration. I am looking at it now.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
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
<li><strong>Next message:</strong> <a href="6031.php">Tom Riddle: "[OMPI users] Valgrind Functionality"</a>
<li><strong>Previous message:</strong> <a href="6029.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>In reply to:</strong> <a href="6028.php">Reuti: "Re: [OMPI users] Gridengine + Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6029.php">Pak Lui: "Re: [OMPI users] Gridengine + Open MPI"</a>
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
