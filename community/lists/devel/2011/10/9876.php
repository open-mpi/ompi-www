<?
$subject_val = "Re: [OMPI devel] Problem-Bug with MPI_Intercomm_create()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 26 11:23:13 2011" -->
<!-- isoreceived="20111026152313" -->
<!-- sent="Wed, 26 Oct 2011 10:23:06 -0500" -->
<!-- isosent="20111026152306" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem-Bug with MPI_Intercomm_create()" -->
<!-- id="4BBC49BC-6A03-447A-8DA6-296E21A8B2B1_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CB997D2D-3682-46BC-8E65-250A8DBEBACF_at_comcast.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem-Bug with MPI_Intercomm_create()<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-26 11:23:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9877.php">Eugene Loh: "[OMPI devel] ibm/io/file_status_get_count"</a>
<li><strong>Previous message:</strong> <a href="9875.php">Pedro Gonnet: "[OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>In reply to:</strong> <a href="9874.php">Ralph Castain: "Re: [OMPI devel] Problem-Bug with MPI_Intercomm_create()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Executing a new modex is a little bit extreme. We can solve this by an approach similar to what we use for connect/accept.
<br>
<p>Step 1. the two leaders of the groups prepare a buffer with all the modex information they have about their own group peers (if they don't have it they can do a gather).
<br>
<p>Step 2. the leaders create the communicator, and they exchange the buffer prepared at 1 with each other.
<br>
<p>Step 3. They broadcast this buffer to each local process, which will then include it in their known local modex information.
<br>
<p>I'll came up with the code next week.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Oct 25, 2011, at 11:19 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; This problem resurfaced on the user list, so I dug around a bit and think I've figured it out using George's test code. The problem lies in the fact that the intercomm &quot;merge&quot; function can create a linkage between procs that was not reflected anywhere in a modex, and so at least some of the procs in the resulting communicator don't know how to talk to some of the new communicator's peers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, consider the case where:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. parent job A comm_spawns a process (job B) - these processes exchange modex and can communicate
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. parent job A now comm_spawns another process (job C) - again, these can communicate, but the proc in C knows nothing of B
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. do an intercomm merge across the communicators created by the two comm_spawns. This puts B and C into the same communicator, but they know nothing about how to talk to each other as they were not involved in any exchange of contact info. Hence, collectives on that communicator now fail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried adding all known contact info (not just your own) into the modex, but that doesn't resolve the problem. It resulted in C knowing how to talk to B (because A knew when the comm_spawn was done), but B still has no idea how to talk to C as it didn't participate in the modex associated with step 2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems to me that the solution is to have intercomm &quot;merge&quot; actually execute a modex to ensure that all procs in the new communicator know how to communicate with each other, but I readily admit I might be missing something.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyone have thoughts on this? It has come up twice now, so probably something worth addressing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: October 25, 2011 10:08:00 AM MDT
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: I have tracked this problem down. The fix is a little more complicated then I'd like, so I'm going to have to ping some other folks to ensure we concur on the approach before doing something.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 25, 2011, at 8:20 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I still see it failing the test George provided on the trunk. I'm unaware of anyone looking further into it, though, as the prior discussion seemed to just end.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 25, 2011, at 7:01 AM, orel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dears,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I try from several days to use advanced MPI2 features in the following scenario :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) a master code A (of size NPA) spawns (MPI_Comm_spawn()) two slave
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   codes B (of size NPB) and C (of size NPC), providing intercomms A-B and A-C ;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) i create intracomm AB and AC by merging intercomms ;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3) then i create intercomm AB-C by calling MPI_Intercomm_create() by using AC as bridge...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  MPI_Comm intercommABC; A: MPI_Intercomm_create(intracommAB, 0, intracommAC, NPA, TAG,&amp;intercommABC);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; B: MPI_Intercomm_create(intracommAB, 0, MPI_COMM_NULL, 0,TAG,&amp;intercommABC);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C: MPI_Intercomm_create(intracommC, 0, intracommAC, 0, TAG,&amp;intercommABC);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    In these calls, A0 and C0 play the role of local leader for AB and C respectively.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    C0 and A0 play the roles of remote leader in bridge intracomm AC.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3)  MPI_Barrier(intercommABC);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4)  i merge intercomm AB-C into intracomm ABC$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 5)  MPI_Barrier(intracommABC);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My BUG: These calls success, but when i try to use intracommABC for a collective communication like MPI_Barrier(),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             i got the following error :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** on communicator
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I try with OpenMPI trunk, 1.5.3, 1.5.4 and Mpich2-1.4.1p1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My code works perfectly if intracomm A, B and C are obtained by MPI_Comm_split() instead of MPI_Comm_spawn() !!!!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I found same problem in a previous thread of the OMPI Users mailing list :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/06/16711.php">http://www.open-mpi.org/community/lists/users/2011/06/16711.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is that bug/problem is currently under investigation ? :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i can give detailed code, but the one provided by George Bosilca in this previous thread provides same error...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you to help me...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Aur&#233;lien Esnard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; University Bordeaux 1 / LaBRI / INRIA (France)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9876/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9877.php">Eugene Loh: "[OMPI devel] ibm/io/file_status_get_count"</a>
<li><strong>Previous message:</strong> <a href="9875.php">Pedro Gonnet: "[OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>In reply to:</strong> <a href="9874.php">Ralph Castain: "Re: [OMPI devel] Problem-Bug with MPI_Intercomm_create()"</a>
<!-- nextthread="start" -->
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
