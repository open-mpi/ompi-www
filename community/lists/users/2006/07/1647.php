<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 18 14:00:48 2006" -->
<!-- isoreceived="20060718180048" -->
<!-- sent="Tue, 18 Jul 2006 20:00:30 +0200" -->
<!-- isosent="20060718180030" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why should the attached code wait on MPI_Bcast" -->
<!-- id="44BD21BE.3030707_at_informatik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3e3c86f90607181049h74a148a1t3945420e27df1794_at_mail.gmail.com" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-18 14:00:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1648.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="1646.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="1646.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1648.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>Reply:</strong> <a href="1648.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi,
<br>
<p>s anwar wrote:
<br>
<span class="quotelev1">&gt; Thank you for the clarification. Why is MPI_COMM_SELF not the correct
</span><br>
<span class="quotelev1">&gt; communicator for MPI_Comm_spawn(). My application will have a single
</span><br>
<span class="quotelev1">&gt; master only.
</span><br>
yes for a single master this should be the same, but never try this.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, can I merge the intercommunicator into an intracommunicator via
</span><br>
<span class="quotelev1">&gt; MPI_Intercomm_merge(intercomm, 0, &amp;intracomm) and use MPI_Bcast(..., 0,
</span><br>
<span class="quotelev1">&gt; intracomm) instead of sending MPI_ROOT or 0 (root's rank in local group).
</span><br>
dito, never try this, but it should work
<br>
<p>bye
<br>
bert wesarg
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/18/06, *Bert Wesarg* &lt;wesarg_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:wesarg_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     yes sorry for my first reply, my words were to rough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     a bcast for a intercomm works this way (in your words):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     - your masters want to send a buffer to your slaves
</span><br>
<span class="quotelev1">&gt;     - one of the masters must provide the MPI_ROOT as root in the
</span><br>
<span class="quotelev1">&gt;     MPI_BCAST call
</span><br>
<span class="quotelev1">&gt;     - all slaves must provide the rank of this MPI_ROOT as the root argument
</span><br>
<span class="quotelev1">&gt;     - all others ranks from the masters, must provide MPI_PROC_NULL as root
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     so the buffer will be send from MPI_ROOT to all slaves
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if this isn't that clear, you should understand the concept of mpi
</span><br>
<span class="quotelev1">&gt;     intercomms. a good starting point could be the standard:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.mpi-forum.org/docs/mpi-11-html/node111.html">http://www.mpi-forum.org/docs/mpi-11-html/node111.html</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.mpi-forum.org/docs/mpi-11-html/node111.html">http://www.mpi-forum.org/docs/mpi-11-html/node111.html</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     by the way:
</span><br>
<span class="quotelev1">&gt;     * your one_int is never intitialized
</span><br>
<span class="quotelev1">&gt;     * i don't know if the MPI_COMM_SELF is the right comm for the
</span><br>
<span class="quotelev1">&gt;     MPI_COMM_SPAWN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     by
</span><br>
<span class="quotelev1">&gt;     bert wesarg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     s anwar wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; I don't think I blamed the implementation in any way in my original
</span><br>
<span class="quotelev2">&gt;     &gt; email. My intent is to gain understanding of why my code
</span><br>
<span class="quotelev1">&gt;     does/should not
</span><br>
<span class="quotelev2">&gt;     &gt; work. I assumed that I was not passing the correct intercommunicator.
</span><br>
<span class="quotelev2">&gt;     &gt; However, I am at a loss on how to construct a proper
</span><br>
<span class="quotelev1">&gt;     intercommunicator
</span><br>
<span class="quotelev2">&gt;     &gt; in this case. You have mentioned that I haven't defined any group
</span><br>
<span class="quotelev1">&gt;     to be
</span><br>
<span class="quotelev2">&gt;     &gt; the root group. Could you care to elaborate on how can I make a
</span><br>
<span class="quotelev1">&gt;     group a
</span><br>
<span class="quotelev2">&gt;     &gt; root group?
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Thanks.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; On 7/18/06, *Bert Wesarg* &lt; wesarg_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:wesarg_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &lt;mailto:wesarg_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:wesarg_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     Hi,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     s anwar wrote:
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; Please see attached source file.
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; According to my understanding of MPI_Comm_spawn(), the
</span><br>
<span class="quotelev2">&gt;     &gt;     intercommunicator
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; returned is the same as it is returned by
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_get_parent() in
</span><br>
<span class="quotelev2">&gt;     &gt;     the
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; spawned processes. I am assuming that there is one
</span><br>
<span class="quotelev1">&gt;     intercommunicator
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; which contains all the (spawned) child processes as well as
</span><br>
<span class="quotelev1">&gt;     the parent
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; process. If this is the case, then why does an MPI_Bcast()
</span><br>
<span class="quotelev1">&gt;     using
</span><br>
<span class="quotelev2">&gt;     &gt;     such an
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; intercommunicator wait indefinately?
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     your code from line 75:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;             MPI_Bcast(&amp;one_int, 1, MPI_INT, 0, intercomm);
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     from the mpi 2 standard &quot; 7.3.2.1 &lt;<a href="http://7.3.2.1">http://7.3.2.1</a>&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://7.3.2.1">http://7.3.2.1</a>&gt;. Broadcast&quot;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     &quot;If comm is an intercommunicator, then the call involves all
</span><br>
<span class="quotelev2">&gt;     &gt;     processes in
</span><br>
<span class="quotelev2">&gt;     &gt;     the intercommunicator, but with one group (group A) defining
</span><br>
<span class="quotelev1">&gt;     the root
</span><br>
<span class="quotelev2">&gt;     &gt;     process. All processes in the other group (group B) pass the same
</span><br>
<span class="quotelev2">&gt;     &gt;     value in
</span><br>
<span class="quotelev2">&gt;     &gt;     argument root, which is the rank of the root in group A. The
</span><br>
<span class="quotelev1">&gt;     root passes
</span><br>
<span class="quotelev2">&gt;     &gt;     the value MPI_ROOT in root. All other processes in group A
</span><br>
<span class="quotelev1">&gt;     pass the
</span><br>
<span class="quotelev2">&gt;     &gt;     value
</span><br>
<span class="quotelev2">&gt;     &gt;     MPI_PROC_NULL in root. Data is broadcast from the root to all
</span><br>
<span class="quotelev2">&gt;     &gt;     processes in
</span><br>
<span class="quotelev2">&gt;     &gt;     group B. The receive buffer arguments of the processes in group B
</span><br>
<span class="quotelev2">&gt;     &gt;     must be
</span><br>
<span class="quotelev2">&gt;     &gt;     consistent with the send buffer argument of the root.&quot;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     so, you define no group to be the root group (group A). i
</span><br>
<span class="quotelev1">&gt;     don't know
</span><br>
<span class="quotelev2">&gt;     &gt;     what
</span><br>
<span class="quotelev2">&gt;     &gt;     schould happen, when no root group is defined, but your code
</span><br>
<span class="quotelev1">&gt;     firstly
</span><br>
<span class="quotelev2">&gt;     &gt;     don't
</span><br>
<span class="quotelev2">&gt;     &gt;     conform to the standard, so don't blame the implementation first.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     by
</span><br>
<span class="quotelev2">&gt;     &gt;     bert wesarg
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; &lt;mailto:
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="1648.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="1646.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="1646.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1648.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>Reply:</strong> <a href="1648.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
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
