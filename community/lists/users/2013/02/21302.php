<?
$subject_val = "Re: [OMPI users] control openmpi or force to use pbs?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 08:52:35 2013" -->
<!-- isoreceived="20130205135235" -->
<!-- sent="Tue, 5 Feb 2013 13:52:20 +0000" -->
<!-- isosent="20130205135220" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] control openmpi or force to use pbs?" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CC6ACA_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0650741D-AD9B-435D-B073-B69AC48300FE_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] control openmpi or force to use pbs?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-05 08:52:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21303.php">Josh Hursey: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Previous message:</strong> <a href="21301.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>In reply to:</strong> <a href="21301.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21306.php">Gus Correa: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Reply:</strong> <a href="21306.php">Gus Correa: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To add to what Reuti said, if you enable PBS support in Open MPI, when users &quot;mpirun ...&quot; in a PBS job, Open MPI will automatically use the PBS native launching mechanism, which won't let you run outside of the servers allocated to that job.
<br>
<p>Concrete example: if you qsub a job and are allocated node A, B, and C, but then try to run with &quot;mpirun --host D,E,F ...&quot;, you'll get an error.
<br>
<p>That being said -- keep in mind what Reuti said: if users are allowed to ssh between nodes that are not allocated to them, then they can always bypass this behavior and use just Open MPI's ssh support to launch on nodes D, E, F (etc.).
<br>
<p><p><p>On Feb 5, 2013, at 2:46 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 05.02.2013 um 11:24 schrieb Duke Nguyen:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please advise me how to force our users to use pbs instead of &quot;mpirun
</span><br>
<span class="quotelev2">&gt;&gt; --hostfile&quot;? Or how do I control mpirun so that any user using &quot;mpirun
</span><br>
<span class="quotelev2">&gt;&gt; --hostfile&quot; will not overload the cluster? We have OpenMPI installed
</span><br>
<span class="quotelev2">&gt;&gt; with Torque/Maui and we can control users's limits (total number of
</span><br>
<span class="quotelev2">&gt;&gt; procs, total nodes, total memories etc) with Torque/Maui, but if a user
</span><br>
<span class="quotelev2">&gt;&gt; knows the cluster, and creates himself a hostfile with all the available
</span><br>
<span class="quotelev2">&gt;&gt; nodes then he can use them all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can the users use a plain ssh between the nodes? If they are forced to use the TM of Torque instead, it should be impossible to start a job on a non-granted machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; D.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG/MacGPG2 v2.0.18 (Darwin)
</span><br>
<span class="quotelev1">&gt; Comment: GPGTools - <a href="http://gpgtools.org">http://gpgtools.org</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAlEQ4w8ACgkQo/GbGkBRnRo/dQCgw/5R9Z0XiVvlp7R0LjNkIjWC
</span><br>
<span class="quotelev1">&gt; ixkAoJKYXi7fv4xiAVHLkT2rDApI1cXi
</span><br>
<span class="quotelev1">&gt; =xo+z
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21303.php">Josh Hursey: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Previous message:</strong> <a href="21301.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>In reply to:</strong> <a href="21301.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21306.php">Gus Correa: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Reply:</strong> <a href="21306.php">Gus Correa: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
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
