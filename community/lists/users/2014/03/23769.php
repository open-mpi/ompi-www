<?
$subject_val = "Re: [OMPI users] bind-to core warning even with numactl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 10:03:39 2014" -->
<!-- isoreceived="20140304150339" -->
<!-- sent="Tue, 4 Mar 2014 15:03:38 +0000" -->
<!-- isosent="20140304150338" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bind-to core warning even with numactl" -->
<!-- id="A72AFEA1-5E1C-444F-BF58-88C81027408F_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+ssbKWq_AfbJoHmmvcnCwVDLsfiuNV-nk=v43RbvRwY6nrFAg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] bind-to core warning even with numactl<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-04 10:03:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23770.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23768.php">Saliya Ekanayake: "[OMPI users] bind-to core warning even with numactl"</a>
<li><strong>In reply to:</strong> <a href="23768.php">Saliya Ekanayake: "[OMPI users] bind-to core warning even with numactl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23771.php">Saliya Ekanayake: "Re: [OMPI users] bind-to core warning even with numactl"</a>
<li><strong>Reply:</strong> <a href="23771.php">Saliya Ekanayake: "Re: [OMPI users] bind-to core warning even with numactl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you rebuild / re-install Open MPI after these packages were installed?  I believe that the assumption is that Open MPI didn't find the headers / libraries it needed to do the binding when it was built.
<br>
<p>If that still didn't solve your issue, please send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p><p>On Mar 4, 2014, at 6:57 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In an earlier thread I mentioned getting the following error when trying --bind-to core option with mpirun. I was told that numactl and numactl-devel need to be installed. The sys admins have installed these in our cluster and I've rebuilt OpenMPI, but I still get the same warning. I wonder if there's anything more I need to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev1">&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Node:  192.168.0.19
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev1">&gt; be degraded.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23770.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23768.php">Saliya Ekanayake: "[OMPI users] bind-to core warning even with numactl"</a>
<li><strong>In reply to:</strong> <a href="23768.php">Saliya Ekanayake: "[OMPI users] bind-to core warning even with numactl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23771.php">Saliya Ekanayake: "Re: [OMPI users] bind-to core warning even with numactl"</a>
<li><strong>Reply:</strong> <a href="23771.php">Saliya Ekanayake: "Re: [OMPI users] bind-to core warning even with numactl"</a>
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
