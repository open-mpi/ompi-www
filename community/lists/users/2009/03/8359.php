<?
$subject_val = "[OMPI users] on-the-fly nodes liberation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 08:28:24 2009" -->
<!-- isoreceived="20090309122824" -->
<!-- sent="Mon, 9 Mar 2009 13:28:18 +0100" -->
<!-- isosent="20090309122818" -->
<!-- name="Marcia Cristina Cera" -->
<!-- email="marcia.cristina.cera_at_[hidden]" -->
<!-- subject="[OMPI users] on-the-fly nodes liberation" -->
<!-- id="6546e7be0903090528n23fba75g4be7011d574a832d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] on-the-fly nodes liberation<br>
<strong>From:</strong> Marcia Cristina Cera (<em>marcia.cristina.cera_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 08:28:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8360.php">Ralph Castain: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<li><strong>Previous message:</strong> <a href="8358.php">Ralph Castain: "Re: [OMPI users] Run-time problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8360.php">Ralph Castain: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<li><strong>Reply:</strong> <a href="8360.php">Ralph Castain: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<li><strong>Reply:</strong> <a href="8361.php">Reuti: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>May I sign one orted daemon to finish its execution on-the-fly?
<br>
<p>Context: I intend to use OpenMPI in a dynamic resource environment as I did
<br>
with LAM/MPI helped by lamgrow and lamshrink commands.
<br>
<p>To perform grow operations (increase the amount of nodes/resources
<br>
on-the-fly) OpenMPI enable an incremental resource utilization. All nodes
<br>
that can be used are listed in the hostifile file (inform as mpirun
<br>
parameter) and according to they are firstly used through MPI_Comm_spawn one
<br>
orded daemon is created in each node. According to some first tests, this
<br>
feature is enough to satisfy our goals.
<br>
<p>In the other hand, performing shrink operations, we need to liberate nodes
<br>
to be eventually used by other application/jobs. In other words, we must
<br>
terminate all applications processes and also the orted daemon. In the
<br>
application side, the solution is easy once we can notify the processes (by
<br>
a message or signal) to safety finish its execution and perform
<br>
MPI_Finalize. In the orted side, we must finish its execution in the target
<br>
node and also update its status to 'INVALID'.
<br>
How may I do it? Is there a specific signal or procedure to this?
<br>
<p>Thank you in advance!
<br>
m&#225;rcia.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8359/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8360.php">Ralph Castain: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<li><strong>Previous message:</strong> <a href="8358.php">Ralph Castain: "Re: [OMPI users] Run-time problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8360.php">Ralph Castain: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<li><strong>Reply:</strong> <a href="8360.php">Ralph Castain: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<li><strong>Reply:</strong> <a href="8361.php">Reuti: "Re: [OMPI users] on-the-fly nodes liberation"</a>
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
