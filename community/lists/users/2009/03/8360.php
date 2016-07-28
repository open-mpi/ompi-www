<?
$subject_val = "Re: [OMPI users] on-the-fly nodes liberation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 08:39:55 2009" -->
<!-- isoreceived="20090309123955" -->
<!-- sent="Mon, 9 Mar 2009 06:34:47 -0600" -->
<!-- isosent="20090309123447" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] on-the-fly nodes liberation" -->
<!-- id="834F7C51-69D7-42BF-AF74-DF1730C5089F_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 08:34:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8361.php">Reuti: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<li><strong>Previous message:</strong> <a href="8359.php">Marcia Cristina Cera: "[OMPI users] on-the-fly nodes liberation"</a>
<li><strong>In reply to:</strong> <a href="8359.php">Marcia Cristina Cera: "[OMPI users] on-the-fly nodes liberation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8361.php">Reuti: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid not - once started, the orted must stay alive until mpirun  
<br>
terminates. The problem is that the orteds are used to route messages,  
<br>
and there is currently no way to remove an orted without breaking this  
<br>
network.
<br>
<p>I know people are investigating this possibility in support of fault  
<br>
tolerance for when an orted unexpectedly fails, but there is nothing  
<br>
currently in the code base for this capability.
<br>
<p>Ralph
<br>
<p><p>On Mar 9, 2009, at 6:28 AM, Marcia Cristina Cera wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; May I sign one orted daemon to finish its execution on-the-fly?
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
<span class="quotelev1">&gt; In the other hand, performing shrink operations, we need to liberate  
</span><br>
<span class="quotelev1">&gt; nodes to be eventually used by other application/jobs. In other  
</span><br>
<span class="quotelev1">&gt; words, we must terminate all applications processes and also the  
</span><br>
<span class="quotelev1">&gt; orted daemon. In the application side, the solution is easy once we  
</span><br>
<span class="quotelev1">&gt; can notify the processes (by a message or signal) to safety finish  
</span><br>
<span class="quotelev1">&gt; its execution and perform MPI_Finalize. In the orted side, we must  
</span><br>
<span class="quotelev1">&gt; finish its execution in the target node and also update its status  
</span><br>
<span class="quotelev1">&gt; to 'INVALID'.
</span><br>
<span class="quotelev1">&gt; How may I do it? Is there a specific signal or procedure to this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance!
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
<li><strong>Next message:</strong> <a href="8361.php">Reuti: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<li><strong>Previous message:</strong> <a href="8359.php">Marcia Cristina Cera: "[OMPI users] on-the-fly nodes liberation"</a>
<li><strong>In reply to:</strong> <a href="8359.php">Marcia Cristina Cera: "[OMPI users] on-the-fly nodes liberation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8361.php">Reuti: "Re: [OMPI users] on-the-fly nodes liberation"</a>
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
