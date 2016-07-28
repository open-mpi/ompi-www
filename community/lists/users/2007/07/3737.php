<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 10:15:48 2007" -->
<!-- isoreceived="20070723141548" -->
<!-- sent="Mon, 23 Jul 2007 10:15:38 -0400" -->
<!-- isosent="20070723141538" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sge qdel fails" -->
<!-- id="46A4B80A.2040707_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BDDB7C5009659447B2F1747B53854FE83AC414_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-23 10:15:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3738.php">Jeff Pummill: "[OMPI users] Building OMPI with dated tools &amp; libs"</a>
<li><strong>Previous message:</strong> <a href="3736.php">Andrea: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3730.php">SLIM H.A.: "[OMPI users] sge qdel fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3742.php">SLIM H.A.: "Re: [OMPI users] sge qdel fails"</a>
<li><strong>Reply:</strong> <a href="3742.php">SLIM H.A.: "Re: [OMPI users] sge qdel fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Henk,
<br>
<p>The sge script should not require any extra parameter. The qdel command 
<br>
should send the kill signal to mpirun and also remove the SGE allocated 
<br>
tmp directory (in something like /tmp/174.1.all.q/) which contains the 
<br>
OMPI session dir for the running job, and in turns would cause orted and 
<br>
the user processes to exit.
<br>
<p>Maybe you could try qdel -f &lt;jid&gt; to force delete from the sge_qmaster, 
<br>
in case when sge_execd does not respond to the delete request by the 
<br>
sge_qmaster?
<br>
<p>SLIM H.A. wrote:
<br>
<span class="quotelev1">&gt; I am using OpenMPI 1.2.3 with SGE 6.0u7 over InfiniBand (OFED 1.2),
</span><br>
<span class="quotelev1">&gt; following the recommendation in the OpenMPI FAQ
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge">http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The job runs but when the user wants to delete the job with the qdel
</span><br>
<span class="quotelev1">&gt; command, this fails. Does the mpirun command
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np $NSLOTS ./exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in the sge script require extra parameters?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for any advice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Henk
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
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3738.php">Jeff Pummill: "[OMPI users] Building OMPI with dated tools &amp; libs"</a>
<li><strong>Previous message:</strong> <a href="3736.php">Andrea: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3730.php">SLIM H.A.: "[OMPI users] sge qdel fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3742.php">SLIM H.A.: "Re: [OMPI users] sge qdel fails"</a>
<li><strong>Reply:</strong> <a href="3742.php">SLIM H.A.: "Re: [OMPI users] sge qdel fails"</a>
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
