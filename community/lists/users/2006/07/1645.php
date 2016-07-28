<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 18 12:57:25 2006" -->
<!-- isoreceived="20060718165725" -->
<!-- sent="Tue, 18 Jul 2006 18:57:06 +0200" -->
<!-- isosent="20060718165706" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why should the attached code wait on MPI_Bcast" -->
<!-- id="44BD12E2.6050208_at_informatik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3e3c86f90607180936g2d92674l51961dadd806f78a_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-07-18 12:57:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1646.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="1644.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="1644.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1646.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>Reply:</strong> <a href="1646.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi,
<br>
<p>yes sorry for my first reply, my words were to rough.
<br>
<p>a bcast for a intercomm works this way (in your words):
<br>
<p>- your masters want to send a buffer to your slaves
<br>
- one of the masters must provide the MPI_ROOT as root in the MPI_BCAST call
<br>
- all slaves must provide the rank of this MPI_ROOT as the root argument
<br>
- all others ranks from the masters, must provide MPI_PROC_NULL as root
<br>
<p>so the buffer will be send from MPI_ROOT to all slaves
<br>
<p>if this isn't that clear, you should understand the concept of mpi
<br>
intercomms. a good starting point could be the standard:
<br>
<a href="http://www.mpi-forum.org/docs/mpi-11-html/node111.html">http://www.mpi-forum.org/docs/mpi-11-html/node111.html</a>
<br>
<p>by the way:
<br>
* your one_int is never intitialized
<br>
* i don't know if the MPI_COMM_SELF is the right comm for the MPI_COMM_SPAWN
<br>
<p>by
<br>
bert wesarg
<br>
<p>s anwar wrote:
<br>
<span class="quotelev1">&gt; I don't think I blamed the implementation in any way in my original
</span><br>
<span class="quotelev1">&gt; email. My intent is to gain understanding of why my code does/should not
</span><br>
<span class="quotelev1">&gt; work. I assumed that I was not passing the correct intercommunicator.
</span><br>
<span class="quotelev1">&gt; However, I am at a loss on how to construct a proper intercommunicator
</span><br>
<span class="quotelev1">&gt; in this case. You have mentioned that I haven't defined any group to be
</span><br>
<span class="quotelev1">&gt; the root group. Could you care to elaborate on how can I make a group a
</span><br>
<span class="quotelev1">&gt; root group?
</span><br>
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
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     s anwar wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; Please see attached source file.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; According to my understanding of MPI_Comm_spawn(), the
</span><br>
<span class="quotelev1">&gt;     intercommunicator
</span><br>
<span class="quotelev2">&gt;     &gt; returned is the same as it is returned by MPI_Comm_get_parent() in
</span><br>
<span class="quotelev1">&gt;     the
</span><br>
<span class="quotelev2">&gt;     &gt; spawned processes. I am assuming that there is one intercommunicator
</span><br>
<span class="quotelev2">&gt;     &gt; which contains all the (spawned) child processes as well as the parent
</span><br>
<span class="quotelev2">&gt;     &gt; process. If this is the case, then why does an MPI_Bcast() using
</span><br>
<span class="quotelev1">&gt;     such an
</span><br>
<span class="quotelev2">&gt;     &gt; intercommunicator wait indefinately?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     your code from line 75:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             MPI_Bcast(&amp;one_int, 1, MPI_INT, 0, intercomm);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     from the mpi 2 standard &quot;7.3.2.1 &lt;<a href="http://7.3.2.1">http://7.3.2.1</a>&gt;. Broadcast&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     &quot;If comm is an intercommunicator, then the call involves all
</span><br>
<span class="quotelev1">&gt;     processes in
</span><br>
<span class="quotelev1">&gt;     the intercommunicator, but with one group (group A) defining the root
</span><br>
<span class="quotelev1">&gt;     process. All processes in the other group (group B) pass the same
</span><br>
<span class="quotelev1">&gt;     value in
</span><br>
<span class="quotelev1">&gt;     argument root, which is the rank of the root in group A. The root passes
</span><br>
<span class="quotelev1">&gt;     the value MPI_ROOT in root. All other processes in group A pass the
</span><br>
<span class="quotelev1">&gt;     value
</span><br>
<span class="quotelev1">&gt;     MPI_PROC_NULL in root. Data is broadcast from the root to all
</span><br>
<span class="quotelev1">&gt;     processes in
</span><br>
<span class="quotelev1">&gt;     group B. The receive buffer arguments of the processes in group B
</span><br>
<span class="quotelev1">&gt;     must be
</span><br>
<span class="quotelev1">&gt;     consistent with the send buffer argument of the root.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     so, you define no group to be the root group (group A). i don't know
</span><br>
<span class="quotelev1">&gt;     what
</span><br>
<span class="quotelev1">&gt;     schould happen, when no root group is defined, but your code firstly
</span><br>
<span class="quotelev1">&gt;     don't
</span><br>
<span class="quotelev1">&gt;     conform to the standard, so don't blame the implementation first.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     by
</span><br>
<span class="quotelev1">&gt;     bert wesarg
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="1646.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="1644.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="1644.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1646.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>Reply:</strong> <a href="1646.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
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
