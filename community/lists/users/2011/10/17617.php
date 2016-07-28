<?
$subject_val = "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 25 12:08:08 2011" -->
<!-- isoreceived="20111025160808" -->
<!-- sent="Tue, 25 Oct 2011 10:08:00 -0600" -->
<!-- isosent="20111025160800" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()" -->
<!-- id="30D41149-6683-41C2-ACE0-776C64E5C83C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200A69C0-5A0A-44B0-9EF9-11305E1B1B99_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-25 12:08:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17618.php">Josh Hursey: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<li><strong>Previous message:</strong> <a href="17616.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>In reply to:</strong> <a href="17610.php">Ralph Castain: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17699.php">Jeff Squyres: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17699.php">Jeff Squyres: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I have tracked this problem down. The fix is a little more complicated then I'd like, so I'm going to have to ping some other folks to ensure we concur on the approach before doing something.
<br>
<p>On Oct 25, 2011, at 8:20 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I still see it failing the test George provided on the trunk. I'm unaware of anyone looking further into it, though, as the prior discussion seemed to just end.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 25, 2011, at 7:01 AM, orel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dears,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I try from several days to use advanced MPI2 features in the following scenario :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1) a master code A (of size NPA) spawns (MPI_Comm_spawn()) two slave
</span><br>
<span class="quotelev2">&gt;&gt;    codes B (of size NPB) and C (of size NPC), providing intercomms A-B and A-C ;
</span><br>
<span class="quotelev2">&gt;&gt; 2) i create intracomm AB and AC by merging intercomms ;
</span><br>
<span class="quotelev2">&gt;&gt; 3) then i create intercomm AB-C by calling MPI_Intercomm_create() by using AC as bridge...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm intercommABC; A: MPI_Intercomm_create(intracommAB, 0, intracommAC, NPA, TAG,&amp;intercommABC);
</span><br>
<span class="quotelev2">&gt;&gt; B: MPI_Intercomm_create(intracommAB, 0, MPI_COMM_NULL, 0,TAG,&amp;intercommABC);
</span><br>
<span class="quotelev2">&gt;&gt; C: MPI_Intercomm_create(intracommC, 0, intracommAC, 0, TAG,&amp;intercommABC);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     In these calls, A0 and C0 play the role of local leader for AB and C respectively.
</span><br>
<span class="quotelev2">&gt;&gt;     C0 and A0 play the roles of remote leader in bridge intracomm AC.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3)  MPI_Barrier(intercommABC);
</span><br>
<span class="quotelev2">&gt;&gt; 4)  i merge intercomm AB-C into intracomm ABC$
</span><br>
<span class="quotelev2">&gt;&gt; 5)  MPI_Barrier(intracommABC);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My BUG: These calls success, but when i try to use intracommABC for a collective communication like MPI_Barrier(),
</span><br>
<span class="quotelev2">&gt;&gt;              i got the following error :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev2">&gt;&gt; *** on communicator
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I try with OpenMPI trunk, 1.5.3, 1.5.4 and Mpich2-1.4.1p1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My code works perfectly if intracomm A, B and C are obtained by MPI_Comm_split() instead of MPI_Comm_spawn() !!!!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I found same problem in a previous thread of the OMPI Users mailing list :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; =&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/06/16711.php">http://www.open-mpi.org/community/lists/users/2011/06/16711.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is that bug/problem is currently under investigation ? :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; i can give detailed code, but the one provided by George Bosilca in this previous thread provides same error...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you to help me...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Aur&#233;lien Esnard
</span><br>
<span class="quotelev2">&gt;&gt; University Bordeaux 1 / LaBRI / INRIA (France)
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17618.php">Josh Hursey: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<li><strong>Previous message:</strong> <a href="17616.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>In reply to:</strong> <a href="17610.php">Ralph Castain: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17699.php">Jeff Squyres: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17699.php">Jeff Squyres: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
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
