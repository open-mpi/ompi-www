<?
$subject_val = "Re: [OMPI users] Option to use only 7 cores out of 8 on each node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  2 21:08:21 2010" -->
<!-- isoreceived="20100303020821" -->
<!-- sent="Tue, 2 Mar 2010 20:07:23 -0600" -->
<!-- isosent="20100303020723" -->
<!-- name="Addepalli, Srirangam V" -->
<!-- email="srirangam.v.addepalli_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Option to use only 7 cores out of 8 on each node" -->
<!-- id="15F71B097D330B42AA606A4AD8CA9640D0AF2F441B_at_CRATUS.ttu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C552F3DB-4B6D-4DBC-B616-0346CC798ACB_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Option to use only 7 cores out of 8 on each node<br>
<strong>From:</strong> Addepalli, Srirangam V (<em>srirangam.v.addepalli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-02 21:07:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12208.php">Terry Frankcombe: "Re: [OMPI users] running external program on same processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12206.php">abc def: "[OMPI users] running external program on same processor (Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12205.php">Reuti: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12251.php">Dave Love: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Reply:</strong> <a href="12251.php">Dave Love: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It works after creating a new pe and even from the command prompt with out using SGE.
<br>
Thanks
<br>
Rangam
<br>
________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Reuti [reuti_at_[hidden]]
<br>
Sent: Tuesday, March 02, 2010 12:35 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Option to use only 7 cores out of 8 on each node
<br>
<p>Am 02.03.2010 um 19:26 schrieb Eugene Loh:
<br>
<p><span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Addepalli, Srirangam V wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i tried using the following syntax with machinefile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 14 -npernode 7 -machinefile machinefile ven_nw.e
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;coll.dt5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It &quot;works&quot; for me.  I'm not using SGE, though.
</span><br>
<p>When it's tightly integrated with SGE, maybe you need a PE with a
<br>
fixed allocation rule of 7. Then all should work automatically and
<br>
without any need of a machinefile for mpiexec. If you want to use the
<br>
node exclusively for your job although you want only 7 out of 8
<br>
available slots, you also need to request an exclusive resource (e.g.
<br>
named &quot;exclusive&quot;) which is attached to each exechost.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; % cat machinefile
</span><br>
<span class="quotelev2">&gt;&gt; % mpirun -tag-output -np 14 -npernode 7 -machinefile machinefile
</span><br>
<span class="quotelev2">&gt;&gt; hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Incidentally, the key ingredient here is the &quot;-npernode 7&quot; part.
</span><br>
<span class="quotelev1">&gt; The machine file only needs enough slots.  E.g., you could have had:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % cat machinefile
</span><br>
<span class="quotelev1">&gt; node0 slots=20
</span><br>
<span class="quotelev1">&gt; node1 slots=20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun will see that there are enough slots on each node, but load
</span><br>
<span class="quotelev1">&gt; only 7 up per node due to the -npernode switch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That said, I don't know what's going wrong in your case -- only
</span><br>
<span class="quotelev1">&gt; that things work as advertised for me.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12208.php">Terry Frankcombe: "Re: [OMPI users] running external program on same processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12206.php">abc def: "[OMPI users] running external program on same processor (Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12205.php">Reuti: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12251.php">Dave Love: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Reply:</strong> <a href="12251.php">Dave Love: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
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
