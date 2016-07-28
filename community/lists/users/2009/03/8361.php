<?
$subject_val = "Re: [OMPI users] on-the-fly nodes liberation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 08:56:19 2009" -->
<!-- isoreceived="20090309125619" -->
<!-- sent="Mon, 9 Mar 2009 13:56:03 +0100" -->
<!-- isosent="20090309125603" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] on-the-fly nodes liberation" -->
<!-- id="29069B92-7F8E-4DBB-8EF0-9CB36CEAFA9E_at_staff.uni-marburg.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6546e7be0903090528n23fba75g4be7011d574a832d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] on-the-fly nodes liberation<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 08:56:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8362.php">Marcia Cristina Cera: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<li><strong>Previous message:</strong> <a href="8360.php">Ralph Castain: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<li><strong>In reply to:</strong> <a href="8359.php">Marcia Cristina Cera: "[OMPI users] on-the-fly nodes liberation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8362.php">Marcia Cristina Cera: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<li><strong>Reply:</strong> <a href="8362.php">Marcia Cristina Cera: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 09.03.2009 um 13:28 schrieb Marcia Cristina Cera:
<br>
<p><span class="quotelev1">&gt; May I sign one orted daemon to finish its execution on-the-fly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Context: I intend to use OpenMPI in a dynamic resource environment  
</span><br>
<span class="quotelev1">&gt; as I did with LAM/MPI helped by lamgrow and lamshrink commands.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To perform grow operations (increase the amount of nodes/resources  
</span><br>
<span class="quotelev1">&gt; on-the-fly) OpenMPI enable an incremental resource utilization. All  
</span><br>
<span class="quotelev1">&gt; nodes that can be used are listed in the hostifile file (inform as  
</span><br>
<span class="quotelev1">&gt; mpirun parameter) and according to they are firstly used through  
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn one orded daemon is created in each node. According  
</span><br>
<span class="quotelev1">&gt; to some first tests, this feature is enough to satisfy our goals.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the other hand, performing shrink operations, we need to  
</span><br>
<span class="quotelev1">&gt; liberate nodes to be eventually used by other application/jobs. In  
</span><br>
<span class="quotelev1">&gt; other words, we must terminate all applications processes and also  
</span><br>
<span class="quotelev1">&gt; the orted daemon. In the application side, the solution is easy  
</span><br>
<span class="quotelev1">&gt; once we can notify the processes (by a message or signal) to safety  
</span><br>
<span class="quotelev1">&gt; finish its execution and perform MPI_Finalize. In the orted side,  
</span><br>
<span class="quotelev1">&gt; we must finish its execution in the target node and also update its  
</span><br>
<span class="quotelev1">&gt; status to 'INVALID'.
</span><br>
<span class="quotelev1">&gt; How may I do it? Is there a specific signal or procedure to this?
</span><br>
<p>how are you running your applications usually? This looks like you  
<br>
are running all the jobs without any queuing system. If you had one,  
<br>
it would mean to drain the nodes to exclude (if you want to have a  
<br>
graceful shutdown of the already running jobs) and don't schedule any  
<br>
jobs to this node further on. Or just kill all jobs running on this  
<br>
node which should be excluded - of course, you might lose the  
<br>
computing time spent on this node.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Thank you in advance!
</span><br>
<span class="quotelev1">&gt; m&#225;rcia.
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
<li><strong>Next message:</strong> <a href="8362.php">Marcia Cristina Cera: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<li><strong>Previous message:</strong> <a href="8360.php">Ralph Castain: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<li><strong>In reply to:</strong> <a href="8359.php">Marcia Cristina Cera: "[OMPI users] on-the-fly nodes liberation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8362.php">Marcia Cristina Cera: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<li><strong>Reply:</strong> <a href="8362.php">Marcia Cristina Cera: "Re: [OMPI users] on-the-fly nodes liberation"</a>
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
