<?
$subject_val = "Re: [OMPI users] control openmpi or force to use pbs?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 18 21:49:35 2013" -->
<!-- isoreceived="20130219024935" -->
<!-- sent="Tue, 19 Feb 2013 09:49:20 +0700" -->
<!-- isosent="20130219024920" -->
<!-- name="Duke Nguyen" -->
<!-- email="duke.lists_at_[hidden]" -->
<!-- subject="Re: [OMPI users] control openmpi or force to use pbs?" -->
<!-- id="5122E830.3080703_at_gmx.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7D444B53-385B-4128-B12D-3D6EA4679431_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2013-02-18 21:49:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21427.php">Gus Correa: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Previous message:</strong> <a href="21425.php">Pradeep Jha: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>In reply to:</strong> <a href="21318.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21427.php">Gus Correa: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Reply:</strong> <a href="21427.php">Gus Correa: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the late update. Anyway, per suggestions, here is what I did:
<br>
&nbsp;* prevent ssh-login to the nodes except admins
<br>
&nbsp;* reconfigure torque with --with-pam (then reinstall torque, openmpi
<br>
etc...)
<br>
<p>After testing for a few days with some intensive jobs, everything looks
<br>
fine :)
<br>
<p>Thanks for all the helps/suggestsions/comments,
<br>
<p>D.
<br>
<p>On 2/6/13 10:58 PM, Reuti wrote:
<br>
<span class="quotelev1">&gt; Am 06.02.2013 um 16:45 schrieb Duke Nguyen:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 2/6/13 10:06 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Feb 6, 2013, at 5:11 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks Reuti and Jeff, you are right, users should not be allowed
</span><br>
<span class="quotelev1">&gt; to ssh to all nodes, which is how our cluster was set up: users can
</span><br>
<span class="quotelev1">&gt; even password-less ssh to any node. I know this is not appropriate
</span><br>
<span class="quotelev1">&gt; question in OpenMPI forum, but how can we setup so that user can only
</span><br>
<span class="quotelev1">&gt; ssh (with password) to nodes that are allocated to them at the time of
</span><br>
<span class="quotelev1">&gt; qsub'ing? I am still new to all of this cluster thing :)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I even disallow this. Only admin staff is allowed to login to the
</span><br>
<span class="quotelev1">&gt; nodes. This forces also the admin to look for a tight integration of
</span><br>
<span class="quotelev1">&gt; the user's software into the queuing system.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; FWIW, that makes one-more-thing that you have to setup and maintain
</span><br>
<span class="quotelev1">&gt; (because it doesn't happen by default -- you'd have to add some extra
</span><br>
<span class="quotelev1">&gt; scripting in the ssh authentication stuff to enable that functionality).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, that what I want to do too, but I thought if it is impossible
</span><br>
<span class="quotelev2">&gt; &gt; because ssh is needed for seting up a cluster. From what I understand:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; * for an user to run pbs jobs, master and clients should have that user
</span><br>
<span class="quotelev2">&gt; &gt; on their passwd/shadow/group files
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or use NIS / LDAP to have a central location for this information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; * configure ssh server on clients to prohibit certain users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Correct, like a line in /etc/ssh/sshd_config:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; AllowGroups admin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and only admin staff has this group as one of their secondary groups
</span><br>
<span class="quotelev1">&gt; attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is that right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21426/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21426/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21427.php">Gus Correa: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Previous message:</strong> <a href="21425.php">Pradeep Jha: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>In reply to:</strong> <a href="21318.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21427.php">Gus Correa: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Reply:</strong> <a href="21427.php">Gus Correa: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
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
