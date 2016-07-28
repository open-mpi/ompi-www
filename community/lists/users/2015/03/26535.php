<?
$subject_val = "Re: [OMPI users] open mpi on blue waters";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 22:11:11 2015" -->
<!-- isoreceived="20150326021111" -->
<!-- sent="Thu, 26 Mar 2015 11:11:30 +0900" -->
<!-- isosent="20150326021130" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on blue waters" -->
<!-- id="55136AD2.2070900_at_iferc.org" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="76DFD9CB-94AB-4432-98A5-C85CBE1D924D_at_rutgers.edu" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-25 22:11:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26536.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26534.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26533.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26536.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Reply:</strong> <a href="26536.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mark,
<br>
<p>munge is an authentication mechanism based
<br>
on a secret key shared between hosts.
<br>
<p>there are both a daemon part and a library/client part.
<br>
<p>it its simplest form, you can run on node0 :
<br>
<p>echo &quot;hello&quot; | munge | ssh node1 unmunge
<br>
(see sample output below)
<br>
<p>if everything is correctly set (e.g. same shared secret key and munge
<br>
daemons are running)
<br>
then node1 will know for sure (well, at least as long as the secret key
<br>
stays secret ...)
<br>
the &quot;hello&quot; message was sent from node0 by this user, at that time and
<br>
was not altered.
<br>
there is also a time-to-live (ttl) for each message and an anti replay
<br>
mechanism
<br>
<p>for example, munge can be used by SLURM in order to authentificate
<br>
messages between compute and head nodes.
<br>
<p><p>so at first glance, it makes little sense to have munge running on some
<br>
nodes and not on others.
<br>
but since blue waters is running torque (at least this is what i found
<br>
on google), munge could be not needed
<br>
(and in this case, it is probably best to have it disabled on all nodes)
<br>
or it could be used by other services.
<br>
<p><p>Ralph,
<br>
<p>the commit log of PR #497 is :
<br>
&quot;Let the initiator of the connection determine the method to be used -
<br>
if the receiver cannot support it, then that's an error that will cause
<br>
the connection attempt to fail.&quot;
<br>
<p>from a security point of view, and imho, that seems wrong to me.
<br>
(it's like entering a bank and asking &quot;i have no credit card, no id but
<br>
i ask you to trust me and give me my money&quot;).
<br>
<p>also, that does not handle all cases :
<br>
/* if munge is not running on some nodes, and those nodes happen *not*
<br>
to be the initiator, that will break,
<br>
a trivial (and dumb) corner case is if mpirun runs on the compute node,
<br>
and the head node is part of the node list ... */
<br>
<p>back to ompi, i d rather have the initiator send its authentication
<br>
method with its authentication key, and have the server
<br>
check it is using the same authentication method, and fail with an user
<br>
friendly error message otherwise.
<br>
(authentication type mismatch : node0 uses munge but node1 uses basic,
<br>
you should contact your sysadmin
<br>
or if you know what you are doing, you can try mpirun -mca sec basic)
<br>
<p>on blue waters, that would mean ompi does not run out of the box, but
<br>
fails with an understandable message.
<br>
that would be less user friendly, but more secure
<br>
<p>any thoughts ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p><p>[gouaillardet_at_node0 ~]$ echo coucou | munge | ssh node1 unmunge
<br>
STATUS:           Success (0)
<br>
ENCODE_HOST:      node0 (10.7.67.3)
<br>
ENCODE_TIME:      2015-03-26 09:55:16 (1427331316)
<br>
DECODE_TIME:      2015-03-26 09:55:16 (1427331316)
<br>
TTL:              300
<br>
CIPHER:           aes128 (4)
<br>
MAC:              sha1 (3)
<br>
ZIP:              none (0)
<br>
UID:              gouaillardet (1011)
<br>
GID:              gouaillardet (1011)
<br>
LENGTH:           7
<br>
<p>coucou
<br>
<p>On 2015/03/26 5:59, Mark Santcroos wrote:
<br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 25 Mar 2015, at 21:25 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think I have this resolved,
</span><br>
<span class="quotelev2">&gt;&gt; though that I still suspect their is something wrong on that system. You shouldn&#226;&#128;&#153;t have some nodes running munge and others not running it.
</span><br>
<span class="quotelev1">&gt; For completeness, it's not &quot;some&quot; nodes, its the MOM (service) nodes that run it, and the compute nodes don't.
</span><br>
<span class="quotelev1">&gt; I don't know munge well enough to judge whether it makes sense to have it there only and not on the compute nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if someone was experimenting and started munge on some of the nodes, and forgot to turn it off afterwards??
</span><br>
<span class="quotelev1">&gt; If the answer to my request for clarification is along the lines of &quot;No!&quot;, then I can ask the admins whats up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, see if this fixes the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/pull/497">https://github.com/open-mpi/ompi/pull/497</a>
</span><br>
<span class="quotelev1">&gt; Will get back to you later how that works for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26533.php">http://www.open-mpi.org/community/lists/users/2015/03/26533.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26536.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26534.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26533.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26536.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Reply:</strong> <a href="26536.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
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
