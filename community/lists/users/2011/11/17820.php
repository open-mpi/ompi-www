<?
$subject_val = "[OMPI users] Accessing OpenMPI processes over Internet using ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 23 22:23:46 2011" -->
<!-- isoreceived="20111124032346" -->
<!-- sent="Thu, 24 Nov 2011 15:26:13 +1100" -->
<!-- isosent="20111124042613" -->
<!-- name="Jaison Paul" -->
<!-- email="jmulerik_at_[hidden]" -->
<!-- subject="[OMPI users] Accessing OpenMPI processes over Internet using ssh" -->
<!-- id="6412_1322105026_pAO3NfPk001039_4ECDC765.2000806_at_cs.anu.edu.au" -->
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
<strong>Subject:</strong> [OMPI users] Accessing OpenMPI processes over Internet using ssh<br>
<strong>From:</strong> Jaison Paul (<em>jmulerik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-23 23:26:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17821.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Previous message:</strong> <a href="17819.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17821.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17821.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am trying to access OpenMPI processes over Internet using ssh and not 
<br>
quite successful, yet. I believe that I should be able to do it.
<br>
<p>I have to run one process on my PC and the rest on a remote cluster over 
<br>
internet. I have set the public keys (at .ssh/authorized_keys) to access 
<br>
remote nodes without a password.
<br>
<p>I use hostfile to run mpi. It will read something like:
<br>
-----------------------------
<br>
localhost
<br>
user_at_[hidden]
<br>
-----------------------------
<br>
But it fails.
<br>
<p>The issue seems to be the user! That is, the user on my PC is different 
<br>
to that of user at remotehosts. That's my assumption.
<br>
<p>Is this the problem? Is there any work-around to solve this issue? Do I 
<br>
need to have same username at all nodes to solve this issue?
<br>
<p>Jaison, ANU
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17821.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Previous message:</strong> <a href="17819.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17821.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17821.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
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
