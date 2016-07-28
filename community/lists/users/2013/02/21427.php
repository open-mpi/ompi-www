<?
$subject_val = "Re: [OMPI users] control openmpi or force to use pbs?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 19 15:57:40 2013" -->
<!-- isoreceived="20130219205740" -->
<!-- sent="Tue, 19 Feb 2013 15:57:34 -0500" -->
<!-- isosent="20130219205734" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] control openmpi or force to use pbs?" -->
<!-- id="5123E73E.4060308_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5122E830.3080703_at_gmx.com" -->
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
<strong>Date:</strong> 2013-02-19 15:57:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21428.php">Gus Correa: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Previous message:</strong> <a href="21426.php">Duke Nguyen: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>In reply to:</strong> <a href="21426.php">Duke Nguyen: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21305.php">John Hearns: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/18/2013 09:49 PM, Duke Nguyen wrote:
<br>
<span class="quotelev1">&gt; Sorry for the late update. Anyway, per suggestions, here is what I did:
</span><br>
<span class="quotelev1">&gt;  * prevent ssh-login to the nodes except admins
</span><br>
<span class="quotelev1">&gt;  * reconfigure torque with --with-pam (then reinstall torque, openmpi 
</span><br>
<span class="quotelev1">&gt; etc...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After testing for a few days with some intensive jobs, everything 
</span><br>
<span class="quotelev1">&gt; looks fine :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for all the helps/suggestsions/comments,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D.
</span><br>
Hi Duke
<br>
<p>I'm glad to know everything worked for you.
<br>
<p>Gus Correa
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/6/13 10:58 PM, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 06.02.2013 um 16:45 schrieb Duke Nguyen:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On 2/6/13 10:06 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Feb 6, 2013, at 5:11 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Thanks Reuti and Jeff, you are right, users should not be 
</span><br>
<span class="quotelev2">&gt;&gt; allowed to ssh to all nodes, which is how our cluster was set up: 
</span><br>
<span class="quotelev2">&gt;&gt; users can even password-less ssh to any node. I know this is not 
</span><br>
<span class="quotelev2">&gt;&gt; appropriate question in OpenMPI forum, but how can we setup so that 
</span><br>
<span class="quotelev2">&gt;&gt; user can only ssh (with password) to nodes that are allocated to them 
</span><br>
<span class="quotelev2">&gt;&gt; at the time of qsub'ing? I am still new to all of this cluster thing :)
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; I even disallow this. Only admin staff is allowed to login to the 
</span><br>
<span class="quotelev2">&gt;&gt; nodes. This forces also the admin to look for a tight integration of 
</span><br>
<span class="quotelev2">&gt;&gt; the user's software into the queuing system.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; +1
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; FWIW, that makes one-more-thing that you have to setup and 
</span><br>
<span class="quotelev2">&gt;&gt; maintain (because it doesn't happen by default -- you'd have to add 
</span><br>
<span class="quotelev2">&gt;&gt; some extra scripting in the ssh authentication stuff to enable that 
</span><br>
<span class="quotelev2">&gt;&gt; functionality).
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks, that what I want to do too, but I thought if it is impossible
</span><br>
<span class="quotelev3">&gt;&gt; &gt; because ssh is needed for seting up a cluster. From what I understand:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; * for an user to run pbs jobs, master and clients should have that user
</span><br>
<span class="quotelev3">&gt;&gt; &gt; on their passwd/shadow/group files
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or use NIS / LDAP to have a central location for this information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; * configure ssh server on clients to prohibit certain users
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Correct, like a line in /etc/ssh/sshd_config:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; AllowGroups admin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and only admin staff has this group as one of their secondary groups 
</span><br>
<span class="quotelev2">&gt;&gt; attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is that right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21428.php">Gus Correa: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Previous message:</strong> <a href="21426.php">Duke Nguyen: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>In reply to:</strong> <a href="21426.php">Duke Nguyen: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21305.php">John Hearns: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
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
