<?
$subject_val = "Re: [OMPI users] control openmpi or force to use pbs?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 06:24:07 2013" -->
<!-- isoreceived="20130206112407" -->
<!-- sent="Wed, 06 Feb 2013 18:23:54 +0700" -->
<!-- isosent="20130206112354" -->
<!-- name="Duke Nguyen" -->
<!-- email="duke.lists_at_[hidden]" -->
<!-- subject="Re: [OMPI users] control openmpi or force to use pbs?" -->
<!-- id="51123D4A.6010805_at_gmx.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51114967.2050002_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Duke Nguyen (<em>duke.lists_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-06 06:23:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21311.php">Duke Nguyen: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Previous message:</strong> <a href="21309.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles in	openmpi-1.6.4rc3"</a>
<li><strong>In reply to:</strong> <a href="21306.php">Gus Correa: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21314.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Reply:</strong> <a href="21314.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/6/13 1:03 AM, Gus Correa wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 02/05/2013 08:52 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; To add to what Reuti said, if you enable PBS support in Open MPI,
</span><br>
when users &quot;mpirun ...&quot; in a PBS job, Open MPI will automatically use
<br>
the PBS native launching mechanism, which won't let you run outside of
<br>
the servers allocated to that job.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Concrete example: if you qsub a job and are allocated node A, B, and
</span><br>
C, but then try to run with &quot;mpirun --host D,E,F ...&quot;, you'll get an error.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That being said -- keep in mind what Reuti said: if users are allowed
</span><br>
to ssh between nodes that are not allocated to them, then they can
<br>
always bypass this behavior and use just Open MPI's ssh support to
<br>
launch on nodes D, E, F (etc.).
<br>
<p><span class="quotelev2">&gt;&gt; On Feb 5, 2013, at 2:46 AM, Reuti&lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Can the users use a plain ssh between the nodes? If they are forced to
</span><br>
<span class="quotelev1">&gt; use the TM of Torque instead, it should be impossible to start a job
</span><br>
<span class="quotelev1">&gt; on a non-granted machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Thanks Reuti and Jeff, you are right, users should not be allowed to ssh
<br>
to all nodes, which is how our cluster was set up: users can even
<br>
password-less ssh to any node. I know this is not appropriate question
<br>
in OpenMPI forum, but how can we setup so that user can only ssh (with
<br>
password) to nodes that are allocated to them at the time of qsub'ing? I
<br>
am still new to all of this cluster thing :)
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Besides Reuti's and Jeff's suggestions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you build your own Torque/PBS with PAM support
</span><br>
<span class="quotelev1">&gt; (./configure --with-pam [other configure flags]),
</span><br>
<span class="quotelev1">&gt; you can prevent users that are not running a Torque/PBS job
</span><br>
<span class="quotelev1">&gt; on a node to launch processes in that node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<a href="http://docs.adaptivecomputing.com/torque/4-1-3/help.htm#topics/1-installConfig/customizingTheInstall.htm">http://docs.adaptivecomputing.com/torque/4-1-3/help.htm#topics/1-installConfig/customizingTheInstall.htm</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course you will need to rebuild your OpenMPI with Torque
</span><br>
<span class="quotelev1">&gt; support again, after you install a version of Torque with PAM
</span><br>
<span class="quotelev1">&gt; support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is mostly a Torque/Maui issue, with a bit of an MPI issue.
</span><br>
<span class="quotelev1">&gt; You may get more help about this on the Torque and Maui
</span><br>
<span class="quotelev1">&gt; mailing lists, and in their archives you may find more specific
</span><br>
<span class="quotelev1">&gt; guidance on what you need to add to the pam/security
</span><br>
<span class="quotelev1">&gt; files to make it work.
</span><br>
<p>Thanks for this! I will try this --with-pam when our test job finishes.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Torque with PAM support is not 100% foolproof,
</span><br>
<span class="quotelev1">&gt; because users that *are* running a Torque/PBS job on
</span><br>
<span class="quotelev1">&gt; a node can still cheat and launch more processes there,
</span><br>
<span class="quotelev1">&gt; but it helps restrict the problem to this case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some sys admins also add a cleanup/sweep routine to the
</span><br>
<span class="quotelev1">&gt; Torque epilogue script to kill any processes belonging to
</span><br>
<span class="quotelev1">&gt; the user whose job just finished.
</span><br>
<span class="quotelev1">&gt; However, this not very good because that user may have another
</span><br>
<span class="quotelev1">&gt; legitimate job still running there.
</span><br>
<span class="quotelev1">&gt; Other cleanup strategies are possible, and you may find some
</span><br>
<span class="quotelev1">&gt; suggestions and even scripts if you google around.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Moreover, if you configure your scheduler (Maui?) to
</span><br>
<span class="quotelev1">&gt; assign full nodes to jobs (no node sharing),
</span><br>
<span class="quotelev1">&gt; the cheaters will be cheating on
</span><br>
<span class="quotelev1">&gt; themselves, not stepping on other users' toes.
</span><br>
<span class="quotelev1">&gt; Look for &quot;JOBNODEMATCHPOLICY&quot; here:
</span><br>
<span class="quotelev1">&gt; <a href="http://docs.adaptivecomputing.com/maui/a.fparameters.php">http://docs.adaptivecomputing.com/maui/a.fparameters.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Assigning full nodes to jobs (&quot;EXACTNODE&quot;) may or may not be a
</span><br>
<span class="quotelev1">&gt; good choice for you.
</span><br>
<span class="quotelev1">&gt; E.g. you may consider it wasteful, if there are many serial
</span><br>
<span class="quotelev1">&gt; jobs or parallel jobs running only on a few processors, in
</span><br>
<span class="quotelev1">&gt; which case you may want to pack those jobs in the fewest
</span><br>
<span class="quotelev1">&gt; nodes possible (&quot;EXACTPROC&quot;), so as to have a maximum throughput.
</span><br>
<span class="quotelev1">&gt; However, &quot;no node sharing&quot; helps preventing cheaters
</span><br>
<span class="quotelev1">&gt; to bother other users that are running jobs on the same node,
</span><br>
<span class="quotelev1">&gt; and it is not bad at all if most of the jobs are parallel
</span><br>
<span class="quotelev1">&gt; and use many cores (say, &gt;= number of cores per node).
</span><br>
<p>Yes, we use Maui, but I let it at its' default settings since I have no
<br>
idea and experience about maui's options. I like EXACTPROC option. Our
<br>
cluster is small so that might be better for us.
<br>
<p><p><p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21310/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21310/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21311.php">Duke Nguyen: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Previous message:</strong> <a href="21309.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles in	openmpi-1.6.4rc3"</a>
<li><strong>In reply to:</strong> <a href="21306.php">Gus Correa: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21314.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Reply:</strong> <a href="21314.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
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
