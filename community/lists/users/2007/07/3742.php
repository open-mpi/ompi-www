<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 14:15:47 2007" -->
<!-- isoreceived="20070723181547" -->
<!-- sent="Mon, 23 Jul 2007 19:15:29 +0100" -->
<!-- isosent="20070723181529" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sge qdel fails" -->
<!-- id="BDDB7C5009659447B2F1747B53854FE83AC41E_at_EXDUR1.mds.ad.dur.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46A4B80A.2040707_at_Sun.COM" -->
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
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-23 14:15:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3743.php">Jeff Dusenberry: "[OMPI users] type_match_size_f always fails?"</a>
<li><strong>Previous message:</strong> <a href="3741.php">Moreland, Kenneth: "Re: [OMPI users] MPI_File_set_view rejecting subarray views."</a>
<li><strong>In reply to:</strong> <a href="3737.php">Pak Lui: "Re: [OMPI users] sge qdel fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3744.php">Pak Lui: "Re: [OMPI users] sge qdel fails"</a>
<li><strong>Reply:</strong> <a href="3744.php">Pak Lui: "Re: [OMPI users] sge qdel fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Pak Lui
<br>
<p>I can delete the (sge) job with qdel -f such that it disappears from the
<br>
job list but the application processes keep running, including the
<br>
shepherds. I have to kill them with -15
<br>
<p>For some reason the kill -15 does not reach mpirun. (We use such a
<br>
parameter to mpirun on our myrinet mx nodes with mpich, that's why I
<br>
asked).
<br>
<p>Just to confirm, there is no configure directive specific to gridengine
<br>
when building openmpi?
<br>
<p>Thanks
<br>
<p>henk
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Pak Lui
</span><br>
<span class="quotelev1">&gt; Sent: 23 July 2007 15:16
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] sge qdel fails
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Henk,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The sge script should not require any extra parameter. The 
</span><br>
<span class="quotelev1">&gt; qdel command should send the kill signal to mpirun and also 
</span><br>
<span class="quotelev1">&gt; remove the SGE allocated tmp directory (in something like 
</span><br>
<span class="quotelev1">&gt; /tmp/174.1.all.q/) which contains the OMPI session dir for 
</span><br>
<span class="quotelev1">&gt; the running job, and in turns would cause orted and the user 
</span><br>
<span class="quotelev1">&gt; processes to exit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe you could try qdel -f &lt;jid&gt; to force delete from the 
</span><br>
<span class="quotelev1">&gt; sge_qmaster, in case when sge_execd does not respond to the 
</span><br>
<span class="quotelev1">&gt; delete request by the sge_qmaster?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SLIM H.A. wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I am using OpenMPI 1.2.3 with SGE 6.0u7 over InfiniBand (OFED 1.2), 
</span><br>
<span class="quotelev2">&gt; &gt; following the recommendation in the OpenMPI FAQ
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge">http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The job runs but when the user wants to delete the job with 
</span><br>
<span class="quotelev1">&gt; the qdel 
</span><br>
<span class="quotelev2">&gt; &gt; command, this fails. Does the mpirun command
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np $NSLOTS ./exe
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; in the sge script require extra parameters?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for any advice
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Henk
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Pak Lui
</span><br>
<span class="quotelev1">&gt; pak.lui_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3743.php">Jeff Dusenberry: "[OMPI users] type_match_size_f always fails?"</a>
<li><strong>Previous message:</strong> <a href="3741.php">Moreland, Kenneth: "Re: [OMPI users] MPI_File_set_view rejecting subarray views."</a>
<li><strong>In reply to:</strong> <a href="3737.php">Pak Lui: "Re: [OMPI users] sge qdel fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3744.php">Pak Lui: "Re: [OMPI users] sge qdel fails"</a>
<li><strong>Reply:</strong> <a href="3744.php">Pak Lui: "Re: [OMPI users] sge qdel fails"</a>
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
