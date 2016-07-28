<?
$subject_val = "Re: [OMPI users] Force mpirun to only run under gridengine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  4 14:48:37 2013" -->
<!-- isoreceived="20130604184837" -->
<!-- sent="Tue, 4 Jun 2013 20:48:27 +0200" -->
<!-- isosent="20130604184827" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Force mpirun to only run under gridengine" -->
<!-- id="8A280533-C144-4AA7-A470-7FCEFF5976B0_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8735F402-0460-4D32-8A91-A99875E7DE3C_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Force mpirun to only run under gridengine<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-04 14:48:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22025.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>Previous message:</strong> <a href="22023.php">Ralph Castain: "Re: [OMPI users] Force mpirun to only run under gridengine"</a>
<li><strong>In reply to:</strong> <a href="22023.php">Ralph Castain: "Re: [OMPI users] Force mpirun to only run under gridengine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22026.php">Ralph Castain: "Re: [OMPI users] Force mpirun to only run under gridengine"</a>
<li><strong>Reply:</strong> <a href="22026.php">Ralph Castain: "Re: [OMPI users] Force mpirun to only run under gridengine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 04.06.2013 um 20:38 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; There is an Mca param to require an allocation
</span><br>
<p>But this can be requested (or not) at execution time?
<br>
<p>Even a decicated compilation with a builtin test of an allocation won't give the intended effect, as someone could use his own compilation of Open MPI in his home directory with his own options - even the binaries could have been compiled on a different machine (hence putting a test there inside also won't work).
<br>
<p>Maybe a better way would be to check the running processes and remove `mpiexec`s by a cronjob - unless some renames a copy of `mpiexec`...
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Sent from my iPhone
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 4, 2013, at 11:18 AM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'd like to be able to force mpirun to require being run under a gridengine environment.  Any ideas on how to achieve this, if possible?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Orion Poplawski
</span><br>
<span class="quotelev2">&gt;&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev2">&gt;&gt; NWRA, Boulder/CoRA Office             FAX: 303-415-9702
</span><br>
<span class="quotelev2">&gt;&gt; 3380 Mitchell Lane                       orion_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
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
<li><strong>Next message:</strong> <a href="22025.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>Previous message:</strong> <a href="22023.php">Ralph Castain: "Re: [OMPI users] Force mpirun to only run under gridengine"</a>
<li><strong>In reply to:</strong> <a href="22023.php">Ralph Castain: "Re: [OMPI users] Force mpirun to only run under gridengine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22026.php">Ralph Castain: "Re: [OMPI users] Force mpirun to only run under gridengine"</a>
<li><strong>Reply:</strong> <a href="22026.php">Ralph Castain: "Re: [OMPI users] Force mpirun to only run under gridengine"</a>
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
