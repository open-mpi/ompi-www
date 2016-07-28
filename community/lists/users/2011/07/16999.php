<?
$subject_val = "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots	in	cluster, but nothing more than that";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 27 13:55:26 2011" -->
<!-- isoreceived="20110727175526" -->
<!-- sent="Wed, 27 Jul 2011 19:55:14 +0200" -->
<!-- isosent="20110727175514" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots	in	cluster, but nothing more than that" -->
<!-- id="53084476-AC2F-43BE-A4D9-3ABBE19C2FDD_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF2036D20_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots	in	cluster, but nothing more than that<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-27 13:55:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17000.php">Justin Wood: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<li><strong>Previous message:</strong> <a href="16998.php">Lane, William: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots	in	cluster, but nothing more than that"</a>
<li><strong>In reply to:</strong> <a href="16998.php">Lane, William: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots	in	cluster, but nothing more than that"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16984.php">Ralph Castain: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 27.07.2011 um 19:43 schrieb Lane, William:
<br>
<p><span class="quotelev1">&gt; Thank you for your help Ralph and Reuti,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem turned out to be the number of file descriptors was insufficient.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason given by a sys admin was that since SGE isn't a user it wasn't initially using the new
</span><br>
<span class="quotelev1">&gt; upper bound on the number of file descriptors.
</span><br>
<p>Yes, the sgeexecd inherits either the limit set at startup by the starting user, or the one defined in `qconf -sconf` in the &quot;execd_params&quot; setting as S_DESCRIPTORS and H_DESCRIPTORS. The latter way should be honored on the fly though.
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt; -Bill Lane
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, July 26, 2011 1:22 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in      cluster, but nothing more than that
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 26, 2011, at 1:58 PM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allocation_rule    $fill_up
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here you specify to fill one machine after the other completely before gathering slots from the next machine. You can change this to $round_robin to get one slot form each node before taking a second from particular machines. If you prefer a fixed allocation, you could also put an integer here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Remember, OMPI only uses sge to launch one daemon/node. The placement of MPI procs is totally up to mpirun itself, which doesn't look at any SGE envar.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I thought this is the purpose to use --with-sge during configure as you don't have to provide any hostlist at all and Open MPI will honor it by reading SGE envars to get the granted slots?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We use the envars to determine how many slots were allocated, but not the placement. So we'll look at the envar to get the number of slots allocated on each node, but we then determine the layout of processes against the slots. To the point, we don't look at an sge envar to determine how that layout is to be done.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was only trying to point out the difference. I admit it can be confusing when using sge, especially since sge doesn't actually have visibility into the MPI procs themselves (i.e., the only processes launched by sge are the daemons).
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
<span class="quotelev1">&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation.
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING:  This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by
</span><br>
<span class="quotelev1">&gt; applicable law.  If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you have received this message in error, please notify us immediately
</span><br>
<span class="quotelev1">&gt; by calling (310) 423-6428 and destroy the related message.  Thank You for your cooperation.
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
<li><strong>Next message:</strong> <a href="17000.php">Justin Wood: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<li><strong>Previous message:</strong> <a href="16998.php">Lane, William: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots	in	cluster, but nothing more than that"</a>
<li><strong>In reply to:</strong> <a href="16998.php">Lane, William: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots	in	cluster, but nothing more than that"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16984.php">Ralph Castain: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
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
