<?
$subject_val = "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  4 08:17:46 2011" -->
<!-- isoreceived="20111104121746" -->
<!-- sent="Fri, 4 Nov 2011 08:17:40 -0400" -->
<!-- isosent="20111104121740" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()" -->
<!-- id="E1089B06-5DAE-4A11-91D5-02A45197DF2E_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="30D41149-6683-41C2-ACE0-776C64E5C83C_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-04 08:17:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17700.php">Jeff Squyres: "Re: [OMPI users] Technical details of various MPI APIs"</a>
<li><strong>Previous message:</strong> <a href="17698.php">Jeff Squyres: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/10/17617.php">Ralph Castain: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19308.php">Jeff Squyres: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After some discussion on the devel list, I opened <a href="https://svn.open-mpi.org/trac/ompi/ticket/2904">https://svn.open-mpi.org/trac/ompi/ticket/2904</a> to track the issue.
<br>
<p><p>On Oct 25, 2011, at 12:08 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; FWIW: I have tracked this problem down. The fix is a little more complicated then I'd like, so I'm going to have to ping some other folks to ensure we concur on the approach before doing something.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 25, 2011, at 8:20 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I still see it failing the test George provided on the trunk. I'm unaware of anyone looking further into it, though, as the prior discussion seemed to just end.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 25, 2011, at 7:01 AM, orel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dears,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I try from several days to use advanced MPI2 features in the following scenario :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) a master code A (of size NPA) spawns (MPI_Comm_spawn()) two slave
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   codes B (of size NPB) and C (of size NPC), providing intercomms A-B and A-C ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) i create intracomm AB and AC by merging intercomms ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) then i create intercomm AB-C by calling MPI_Intercomm_create() by using AC as bridge...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm intercommABC; A: MPI_Intercomm_create(intracommAB, 0, intracommAC, NPA, TAG,&amp;intercommABC);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; B: MPI_Intercomm_create(intracommAB, 0, MPI_COMM_NULL, 0,TAG,&amp;intercommABC);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C: MPI_Intercomm_create(intracommC, 0, intracommAC, 0, TAG,&amp;intercommABC);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    In these calls, A0 and C0 play the role of local leader for AB and C respectively.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    C0 and A0 play the roles of remote leader in bridge intracomm AC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3)  MPI_Barrier(intercommABC);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4)  i merge intercomm AB-C into intracomm ABC$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5)  MPI_Barrier(intracommABC);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My BUG: These calls success, but when i try to use intracommABC for a collective communication like MPI_Barrier(),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             i got the following error :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** on communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I try with OpenMPI trunk, 1.5.3, 1.5.4 and Mpich2-1.4.1p1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My code works perfectly if intracomm A, B and C are obtained by MPI_Comm_split() instead of MPI_Comm_spawn() !!!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I found same problem in a previous thread of the OMPI Users mailing list :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/06/16711.php">http://www.open-mpi.org/community/lists/users/2011/06/16711.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is that bug/problem is currently under investigation ? :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i can give detailed code, but the one provided by George Bosilca in this previous thread provides same error...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you to help me...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aur&#233;lien Esnard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University Bordeaux 1 / LaBRI / INRIA (France)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17700.php">Jeff Squyres: "Re: [OMPI users] Technical details of various MPI APIs"</a>
<li><strong>Previous message:</strong> <a href="17698.php">Jeff Squyres: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/10/17617.php">Ralph Castain: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19308.php">Jeff Squyres: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
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
