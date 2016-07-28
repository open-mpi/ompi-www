<?
$subject_val = "Re: [OMPI users] open mpi on blue waters";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 22:24:18 2015" -->
<!-- isoreceived="20150326022418" -->
<!-- sent="Wed, 25 Mar 2015 19:24:14 -0700" -->
<!-- isosent="20150326022414" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on blue waters" -->
<!-- id="4E94F37B-5D4A-40D1-91CD-BE6E95E2D8AA_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="55136AD2.2070900_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] open mpi on blue waters<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-25 22:24:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26537.php">Zhisong Fu: "[OMPI users] issue with openmpi + CUDA"</a>
<li><strong>Previous message:</strong> <a href="26535.php">Gilles Gouaillardet: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26535.php">Gilles Gouaillardet: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26538.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Reply:</strong> <a href="26538.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;ve asked Mark to check with the sys admins as to the logic behind their configuration. I would not immediately presume that they are doing something wrong or that munge is not needed - could be used for other purposes.
<br>
<p>I fully recognize that this change doesn&#226;&#128;&#153;t resolve all problems, but it will resolve at least some of them. Barring a two-sided handshake, there isn&#226;&#128;&#153;t much else that can be done. I&#226;&#128;&#153;m not convinced that it represents a security risk, but I am having it reviewed.
<br>
<p>Improving the error message regardless is a good idea and I&#226;&#128;&#153;ll follow up on it.
<br>
<p><span class="quotelev1">&gt; On Mar 25, 2015, at 7:11 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mark,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; munge is an authentication mechanism based
</span><br>
<span class="quotelev1">&gt; on a secret key shared between hosts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; there are both a daemon part and a library/client part.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it its simplest form, you can run on node0 :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; echo &quot;hello&quot; | munge | ssh node1 unmunge
</span><br>
<span class="quotelev1">&gt; (see sample output below)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if everything is correctly set (e.g. same shared secret key and munge
</span><br>
<span class="quotelev1">&gt; daemons are running)
</span><br>
<span class="quotelev1">&gt; then node1 will know for sure (well, at least as long as the secret key
</span><br>
<span class="quotelev1">&gt; stays secret ...)
</span><br>
<span class="quotelev1">&gt; the &quot;hello&quot; message was sent from node0 by this user, at that time and
</span><br>
<span class="quotelev1">&gt; was not altered.
</span><br>
<span class="quotelev1">&gt; there is also a time-to-live (ttl) for each message and an anti replay
</span><br>
<span class="quotelev1">&gt; mechanism
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for example, munge can be used by SLURM in order to authentificate
</span><br>
<span class="quotelev1">&gt; messages between compute and head nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so at first glance, it makes little sense to have munge running on some
</span><br>
<span class="quotelev1">&gt; nodes and not on others.
</span><br>
<span class="quotelev1">&gt; but since blue waters is running torque (at least this is what i found
</span><br>
<span class="quotelev1">&gt; on google), munge could be not needed
</span><br>
<span class="quotelev1">&gt; (and in this case, it is probably best to have it disabled on all nodes)
</span><br>
<span class="quotelev1">&gt; or it could be used by other services.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the commit log of PR #497 is :
</span><br>
<span class="quotelev1">&gt; &quot;Let the initiator of the connection determine the method to be used -
</span><br>
<span class="quotelev1">&gt; if the receiver cannot support it, then that's an error that will cause
</span><br>
<span class="quotelev1">&gt; the connection attempt to fail.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from a security point of view, and imho, that seems wrong to me.
</span><br>
<span class="quotelev1">&gt; (it's like entering a bank and asking &quot;i have no credit card, no id but
</span><br>
<span class="quotelev1">&gt; i ask you to trust me and give me my money&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; also, that does not handle all cases :
</span><br>
<span class="quotelev1">&gt; /* if munge is not running on some nodes, and those nodes happen *not*
</span><br>
<span class="quotelev1">&gt; to be the initiator, that will break,
</span><br>
<span class="quotelev1">&gt; a trivial (and dumb) corner case is if mpirun runs on the compute node,
</span><br>
<span class="quotelev1">&gt; and the head node is part of the node list ... */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; back to ompi, i d rather have the initiator send its authentication
</span><br>
<span class="quotelev1">&gt; method with its authentication key, and have the server
</span><br>
<span class="quotelev1">&gt; check it is using the same authentication method, and fail with an user
</span><br>
<span class="quotelev1">&gt; friendly error message otherwise.
</span><br>
<span class="quotelev1">&gt; (authentication type mismatch : node0 uses munge but node1 uses basic,
</span><br>
<span class="quotelev1">&gt; you should contact your sysadmin
</span><br>
<span class="quotelev1">&gt; or if you know what you are doing, you can try mpirun -mca sec basic)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on blue waters, that would mean ompi does not run out of the box, but
</span><br>
<span class="quotelev1">&gt; fails with an understandable message.
</span><br>
<span class="quotelev1">&gt; that would be less user friendly, but more secure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; any thoughts ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [gouaillardet_at_node0 ~]$ echo coucou | munge | ssh node1 unmunge
</span><br>
<span class="quotelev1">&gt; STATUS:           Success (0)
</span><br>
<span class="quotelev1">&gt; ENCODE_HOST:      node0 (10.7.67.3)
</span><br>
<span class="quotelev1">&gt; ENCODE_TIME:      2015-03-26 09:55:16 (1427331316)
</span><br>
<span class="quotelev1">&gt; DECODE_TIME:      2015-03-26 09:55:16 (1427331316)
</span><br>
<span class="quotelev1">&gt; TTL:              300
</span><br>
<span class="quotelev1">&gt; CIPHER:           aes128 (4)
</span><br>
<span class="quotelev1">&gt; MAC:              sha1 (3)
</span><br>
<span class="quotelev1">&gt; ZIP:              none (0)
</span><br>
<span class="quotelev1">&gt; UID:              gouaillardet (1011)
</span><br>
<span class="quotelev1">&gt; GID:              gouaillardet (1011)
</span><br>
<span class="quotelev1">&gt; LENGTH:           7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; coucou
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2015/03/26 5:59, Mark Santcroos wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 25 Mar 2015, at 21:25 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think I have this resolved,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; though that I still suspect their is something wrong on that system. You shouldn&#226;&#128;&#153;t have some nodes running munge and others not running it.
</span><br>
<span class="quotelev2">&gt;&gt; For completeness, it's not &quot;some&quot; nodes, its the MOM (service) nodes that run it, and the compute nodes don't.
</span><br>
<span class="quotelev2">&gt;&gt; I don't know munge well enough to judge whether it makes sense to have it there only and not on the compute nodes?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wonder if someone was experimenting and started munge on some of the nodes, and forgot to turn it off afterwards??
</span><br>
<span class="quotelev2">&gt;&gt; If the answer to my request for clarification is along the lines of &quot;No!&quot;, then I can ask the admins whats up.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyway, see if this fixes the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://github.com/open-mpi/ompi/pull/497">https://github.com/open-mpi/ompi/pull/497</a>
</span><br>
<span class="quotelev2">&gt;&gt; Will get back to you later how that works for me.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mark
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26533.php">http://www.open-mpi.org/community/lists/users/2015/03/26533.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26535.php">http://www.open-mpi.org/community/lists/users/2015/03/26535.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26537.php">Zhisong Fu: "[OMPI users] issue with openmpi + CUDA"</a>
<li><strong>Previous message:</strong> <a href="26535.php">Gilles Gouaillardet: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26535.php">Gilles Gouaillardet: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26538.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Reply:</strong> <a href="26538.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
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
