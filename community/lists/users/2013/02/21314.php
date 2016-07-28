<?
$subject_val = "Re: [OMPI users] control openmpi or force to use pbs?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 08:11:20 2013" -->
<!-- isoreceived="20130206131120" -->
<!-- sent="Wed, 6 Feb 2013 14:11:02 +0100" -->
<!-- isosent="20130206131102" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] control openmpi or force to use pbs?" -->
<!-- id="11D38A68-ABCC-497D-BD18-F252B9C94C88_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51123D4A.6010805_at_gmx.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-06 08:11:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21315.php">Jeff Squyres (jsquyres): "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Previous message:</strong> <a href="21313.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles inopenmpi-1.6.4rc3"</a>
<li><strong>In reply to:</strong> <a href="21310.php">Duke Nguyen: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21315.php">Jeff Squyres (jsquyres): "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Reply:</strong> <a href="21315.php">Jeff Squyres (jsquyres): "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Am 06.02.2013 um 12:23 schrieb Duke Nguyen:
<br>
<p><span class="quotelev1">&gt; On 2/6/13 1:03 AM, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; On 02/05/2013 08:52 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;       &gt;&gt; To add to what Reuti said, if you enable PBS support in
</span><br>
<span class="quotelev1">&gt;       Open MPI, when users &quot;mpirun ...&quot; in a PBS job, Open MPI will
</span><br>
<span class="quotelev1">&gt;       automatically use the PBS native launching mechanism, which won't
</span><br>
<span class="quotelev1">&gt;       let you run outside of the servers allocated to that job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;       &gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;       &gt;&gt; Concrete example: if you qsub a job and are allocated
</span><br>
<span class="quotelev1">&gt;       node A, B, and C, but then try to run with &quot;mpirun --host D,E,F
</span><br>
<span class="quotelev1">&gt;       ...&quot;, you'll get an error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;       &gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;       &gt;&gt; That being said -- keep in mind what Reuti said: if users
</span><br>
<span class="quotelev1">&gt;       are allowed to ssh between nodes that are not allocated to them,
</span><br>
<span class="quotelev1">&gt;       then they can always bypass this behavior and use just Open MPI's
</span><br>
<span class="quotelev1">&gt;       ssh support to launch on nodes D, E, F (etc.).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;       &gt;&gt; On Feb 5, 2013, at 2:46 AM,
</span><br>
<span class="quotelev1">&gt;       Reuti
</span><br>
<span class="quotelev1">&gt; &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Can the users use a plain ssh between the nodes? If they are forced to use the TM of Torque instead, it should be impossible to start a job on a non-granted machine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks Reuti and Jeff, you are right, users should not be allowed to ssh to all nodes, which is how our cluster was set up: users can even password-less ssh to any node. I know this is not appropriate question in OpenMPI forum, but how can we setup so that user can only ssh (with password) to nodes that are allocated to them at the time of qsub'ing? I am still new to all of this cluster thing :)
</span><br>
<p>I even disallow this. Only admin staff is allowed to login to the nodes. This forces also the admin to look for a tight integration of the user's software into the queuing system.
<br>
<p>- -- Reuti
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; Besides Reuti's and Jeff's suggestions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; If you build your own Torque/PBS with PAM support
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; (./configure --with-pam [other configure flags]),
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; you can prevent users that are not running a Torque/PBS job
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; on a node to launch processes in that node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; See this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://docs.adaptivecomputing.com/torque/4-1-3/help.htm#topics/1-installConfig/customizingTheInstall.htm">http://docs.adaptivecomputing.com/torque/4-1-3/help.htm#topics/1-installConfig/customizingTheInstall.htm</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; Of course you will need to rebuild your OpenMPI with Torque
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; support again, after you install a version of Torque with PAM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; This is mostly a Torque/Maui issue, with a bit of an MPI
</span><br>
<span class="quotelev1">&gt;       issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; You may get more help about this on the Torque and Maui
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; mailing lists, and in their archives you may find more
</span><br>
<span class="quotelev1">&gt;       specific
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; guidance on what you need to add to the pam/security
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; files to make it work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for this! I will try this --with-pam when our test job finishes. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; Torque with PAM support is not 100% foolproof,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; because users that *are* running a Torque/PBS job on
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; a node can still cheat and launch more processes there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; but it helps restrict the problem to this case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; Some sys admins also add a cleanup/sweep routine to the
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; Torque epilogue script to kill any processes belonging to
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; the user whose job just finished.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; However, this not very good because that user may have
</span><br>
<span class="quotelev1">&gt;       another
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; legitimate job still running there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; Other cleanup strategies are possible, and you may find some
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; suggestions and even scripts if you google around.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; Moreover, if you configure your scheduler (Maui?) to
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; assign full nodes to jobs (no node sharing),
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; the cheaters will be cheating on
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; themselves, not stepping on other users' toes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; Look for &quot;JOBNODEMATCHPOLICY&quot; here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://docs.adaptivecomputing.com/maui/a.fparameters.php">http://docs.adaptivecomputing.com/maui/a.fparameters.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; Assigning full nodes to jobs (&quot;EXACTNODE&quot;) may or may not be
</span><br>
<span class="quotelev1">&gt;       a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; good choice for you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; E.g. you may consider it wasteful, if there are many serial
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; jobs or parallel jobs running only on a few processors, in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; which case you may want to pack those jobs in the fewest
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; nodes possible (&quot;EXACTPROC&quot;), so as to have a maximum
</span><br>
<span class="quotelev1">&gt;       throughput.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; However, &quot;no node sharing&quot; helps preventing cheaters
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; to bother other users that are running jobs on the same node,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; and it is not bad at all if most of the jobs are parallel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;       &gt; and use many cores (say, &gt;= number of cores per node).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, we use Maui, but I let it at its' default settings since I have no idea and experience about maui's options. I like EXACTPROC option. Our cluster is small so that might be better for us.
</span><br>
<span class="quotelev1">&gt; 
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
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG/MacGPG2 v2.0.18 (Darwin)
<br>
Comment: GPGTools - <a href="http://gpgtools.org">http://gpgtools.org</a>
<br>
<p>iEYEARECAAYFAlESVmoACgkQo/GbGkBRnRpSegCdFyRJFeWa8gbbzfFGIX+MNsu3
<br>
ZLIAn1V2OYH+yZ/2lHE0g7MVdHus1bWi
<br>
=HfkP
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21315.php">Jeff Squyres (jsquyres): "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Previous message:</strong> <a href="21313.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles inopenmpi-1.6.4rc3"</a>
<li><strong>In reply to:</strong> <a href="21310.php">Duke Nguyen: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21315.php">Jeff Squyres (jsquyres): "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Reply:</strong> <a href="21315.php">Jeff Squyres (jsquyres): "Re: [OMPI users] control openmpi or force to use pbs?"</a>
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
