<?
$subject_val = "[OMPI users] Problem-Bug with MPI_Intercomm_create()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 25 09:01:34 2011" -->
<!-- isoreceived="20111025130134" -->
<!-- sent="Tue, 25 Oct 2011 15:01:30 +0200" -->
<!-- isosent="20111025130130" -->
<!-- name="orel" -->
<!-- email="aurelien.esnard_at_[hidden]" -->
<!-- subject="[OMPI users] Problem-Bug with MPI_Intercomm_create()" -->
<!-- id="4EA6B32A.8090305_at_labri.fr" -->
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
<strong>Subject:</strong> [OMPI users] Problem-Bug with MPI_Intercomm_create()<br>
<strong>From:</strong> orel (<em>aurelien.esnard_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-25 09:01:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17606.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="17604.php">TERRY DONTJE: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17610.php">Ralph Castain: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<li><strong>Reply:</strong> <a href="17610.php">Ralph Castain: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19308.php">Jeff Squyres: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dears,
<br>
<p>I try from several days to use advanced MPI2 features in the following 
<br>
scenario :
<br>
<p>&nbsp;&nbsp;&nbsp;1) a master code A (of size NPA) spawns (MPI_Comm_spawn()) two slave
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;codes B (of size NPB) and C (of size NPC), providing intercomms 
<br>
A-B and A-C ;
<br>
&nbsp;&nbsp;&nbsp;2) i create intracomm AB and AC by merging intercomms ;
<br>
&nbsp;&nbsp;&nbsp;3) then i create intercomm AB-C by calling MPI_Intercomm_create() by 
<br>
using AC as bridge...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm intercommABC; A: MPI_Intercomm_create(intracommAB, 0, 
<br>
intracommAC, NPA, TAG,&amp;intercommABC);
<br>
B: MPI_Intercomm_create(intracommAB, 0, MPI_COMM_NULL, 
<br>
0,TAG,&amp;intercommABC);
<br>
C: MPI_Intercomm_create(intracommC, 0, intracommAC, 0, TAG,&amp;intercommABC);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In these calls, A0 and C0 play the role of local leader for AB 
<br>
and C respectively.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C0 and A0 play the roles of remote leader in bridge intracomm AC.
<br>
<p>&nbsp;&nbsp;&nbsp;3)  MPI_Barrier(intercommABC);
<br>
&nbsp;&nbsp;&nbsp;4)  i merge intercomm AB-C into intracomm ABC$
<br>
&nbsp;&nbsp;&nbsp;5)  MPI_Barrier(intracommABC);
<br>
<p>My BUG: These calls success, but when i try to use intracommABC for a 
<br>
collective communication like MPI_Barrier(),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i got the following error :
<br>
<p>*** An error occurred in MPI_Barrier
<br>
*** on communicator
<br>
*** MPI_ERR_INTERN: internal error
<br>
*** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
<p><p>I try with OpenMPI trunk, 1.5.3, 1.5.4 and Mpich2-1.4.1p1
<br>
<p>My code works perfectly if intracomm A, B and C are obtained by 
<br>
MPI_Comm_split() instead of MPI_Comm_spawn() !!!!
<br>
<p><p>I found same problem in a previous thread of the OMPI Users mailing list :
<br>
<p>&nbsp;&nbsp;&nbsp;=&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/06/16711.php">http://www.open-mpi.org/community/lists/users/2011/06/16711.php</a>
<br>
<p>Is that bug/problem is currently under investigation ? :-)
<br>
<p>i can give detailed code, but the one provided by George Bosilca in this 
<br>
previous thread provides same error...
<br>
<p>Thank you to help me...
<br>
<p><pre>
-- 
Aur&#233;lien Esnard
University Bordeaux 1 / LaBRI / INRIA (France)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17606.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="17604.php">TERRY DONTJE: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17610.php">Ralph Castain: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<li><strong>Reply:</strong> <a href="17610.php">Ralph Castain: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19308.php">Jeff Squyres: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
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
