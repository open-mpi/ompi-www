<?
$subject_val = "Re: [OMPI users] control openmpi or force to use pbs?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 10:45:23 2013" -->
<!-- isoreceived="20130206154523" -->
<!-- sent="Wed, 06 Feb 2013 22:45:12 +0700" -->
<!-- isosent="20130206154512" -->
<!-- name="Duke Nguyen" -->
<!-- email="duke.lists_at_[hidden]" -->
<!-- subject="Re: [OMPI users] control openmpi or force to use pbs?" -->
<!-- id="51127A88.1050107_at_gmx.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CC9800_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-02-06 10:45:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21318.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Previous message:</strong> <a href="21316.php">Gus Correa: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>In reply to:</strong> <a href="21315.php">Jeff Squyres (jsquyres): "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21318.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Reply:</strong> <a href="21318.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/6/13 10:06 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Feb 6, 2013, at 5:11 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Reuti and Jeff, you are right, users should not be allowed to ssh to all nodes, which is how our cluster was set up: users can even password-less ssh to any node. I know this is not appropriate question in OpenMPI forum, but how can we setup so that user can only ssh (with password) to nodes that are allocated to them at the time of qsub'ing? I am still new to all of this cluster thing :)
</span><br>
<span class="quotelev2">&gt;&gt; I even disallow this. Only admin staff is allowed to login to the nodes. This forces also the admin to look for a tight integration of the user's software into the queuing system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, that makes one-more-thing that you have to setup and maintain (because it doesn't happen by default -- you'd have to add some extra scripting in the ssh authentication stuff to enable that functionality).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Thanks, that what I want to do too, but I thought if it is impossible
<br>
because ssh is needed for seting up a cluster. From what I understand:
<br>
<p>&nbsp;* for an user to run pbs jobs, master and clients should have that user
<br>
on their passwd/shadow/group files
<br>
&nbsp;* configure ssh server on clients to prohibit certain users
<br>
<p>Is that right?
<br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21317/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21318.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Previous message:</strong> <a href="21316.php">Gus Correa: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>In reply to:</strong> <a href="21315.php">Jeff Squyres (jsquyres): "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21318.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Reply:</strong> <a href="21318.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
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
