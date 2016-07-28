<?
$subject_val = "Re: [OMPI users] control openmpi or force to use pbs?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 13:03:24 2013" -->
<!-- isoreceived="20130205180324" -->
<!-- sent="Tue, 05 Feb 2013 13:03:19 -0500" -->
<!-- isosent="20130205180319" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] control openmpi or force to use pbs?" -->
<!-- id="51114967.2050002_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CC6ACA_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-05 13:03:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21307.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21305.php">John Hearns: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>In reply to:</strong> <a href="21302.php">Jeff Squyres (jsquyres): "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21310.php">Duke Nguyen: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Reply:</strong> <a href="21310.php">Duke Nguyen: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/05/2013 08:52 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; To add to what Reuti said, if you enable PBS support in Open MPI, when users &quot;mpirun ...&quot; in a PBS job, Open MPI will automatically use the PBS native launching mechanism, which won't let you run outside of the servers allocated to that job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Concrete example: if you qsub a job and are allocated node A, B, and C, but then try to run with &quot;mpirun --host D,E,F ...&quot;, you'll get an error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said -- keep in mind what Reuti said: if users are allowed to ssh between nodes that are not allocated to them, then they can always bypass this behavior and use just Open MPI's ssh support to launch on nodes D, E, F (etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 5, 2013, at 2:46 AM, Reuti&lt;reuti_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev2">&gt;&gt; Hash: SHA1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 05.02.2013 um 11:24 schrieb Duke Nguyen:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please advise me how to force our users to use pbs instead of &quot;mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --hostfile&quot;? Or how do I control mpirun so that any user using &quot;mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --hostfile&quot; will not overload the cluster? We have OpenMPI installed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with Torque/Maui and we can control users's limits (total number of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procs, total nodes, total memories etc) with Torque/Maui, but if a user
</span><br>
<span class="quotelev3">&gt;&gt;&gt; knows the cluster, and creates himself a hostfile with all the available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes then he can use them all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can the users use a plain ssh between the nodes? If they are forced to use the TM of Torque instead, it should be impossible to start a job on a non-granted machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; D.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt;&gt; Version: GnuPG/MacGPG2 v2.0.18 (Darwin)
</span><br>
<span class="quotelev2">&gt;&gt; Comment: GPGTools - <a href="http://gpgtools.org">http://gpgtools.org</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; iEYEARECAAYFAlEQ4w8ACgkQo/GbGkBRnRo/dQCgw/5R9Z0XiVvlp7R0LjNkIjWC
</span><br>
<span class="quotelev2">&gt;&gt; ixkAoJKYXi7fv4xiAVHLkT2rDApI1cXi
</span><br>
<span class="quotelev2">&gt;&gt; =xo+z
</span><br>
<span class="quotelev2">&gt;&gt; -----END PGP SIGNATURE-----
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
<span class="quotelev1">&gt;
</span><br>
<p>Hi Duke
<br>
<p>Besides Reuti's and Jeff's suggestions.
<br>
<p>If you build your own Torque/PBS with PAM support
<br>
(./configure --with-pam [other configure flags]),
<br>
you can prevent users that are not running a Torque/PBS job
<br>
on a node to launch processes in that node.
<br>
<p>See this:
<br>
<a href="http://docs.adaptivecomputing.com/torque/4-1-3/help.htm#topics/1-installConfig/customizingTheInstall.htm">http://docs.adaptivecomputing.com/torque/4-1-3/help.htm#topics/1-installConfig/customizingTheInstall.htm</a>
<br>
<p>Of course you will need to rebuild your OpenMPI with Torque
<br>
support again, after you install a version of Torque with PAM
<br>
support.
<br>
<p>This is mostly a Torque/Maui issue, with a bit of an MPI issue.
<br>
You may get more help about this on the Torque and Maui
<br>
mailing lists, and in their archives you may find more specific
<br>
guidance on what you need to add to the pam/security
<br>
files to make it work.
<br>
<p>Torque with PAM support is not 100% foolproof,
<br>
because users that *are* running a Torque/PBS job on
<br>
a node can still cheat and launch more processes there,
<br>
but it helps restrict the problem to this case.
<br>
<p>Some sys admins also add a cleanup/sweep routine to the
<br>
Torque epilogue script to kill any processes belonging to
<br>
the user whose job just finished.
<br>
However, this not very good because that user may have another
<br>
legitimate job still running there.
<br>
Other cleanup strategies are possible, and you may find some
<br>
suggestions and even scripts if you google around.
<br>
<p>Moreover, if you configure your scheduler (Maui?) to
<br>
assign full nodes to jobs (no node sharing),
<br>
the cheaters will be cheating on
<br>
themselves, not stepping on other users' toes.
<br>
Look for &quot;JOBNODEMATCHPOLICY&quot; here:
<br>
<a href="http://docs.adaptivecomputing.com/maui/a.fparameters.php">http://docs.adaptivecomputing.com/maui/a.fparameters.php</a>
<br>
<p>Assigning full nodes to jobs (&quot;EXACTNODE&quot;) may or may not be a
<br>
good choice for you.
<br>
E.g. you may consider it wasteful, if there are many serial
<br>
jobs or parallel jobs running only on a few processors, in
<br>
which case you may want to pack those jobs in the fewest
<br>
nodes possible (&quot;EXACTPROC&quot;), so as to have a maximum throughput.
<br>
However, &quot;no node sharing&quot; helps preventing cheaters
<br>
to bother other users that are running jobs on the same node,
<br>
and it is not bad at all if most of the jobs are parallel
<br>
and use many cores (say, &gt;= number of cores per node).
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21307.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21305.php">John Hearns: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>In reply to:</strong> <a href="21302.php">Jeff Squyres (jsquyres): "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21310.php">Duke Nguyen: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Reply:</strong> <a href="21310.php">Duke Nguyen: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
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
