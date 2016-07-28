<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 16 09:00:44 2006" -->
<!-- isoreceived="20060616130044" -->
<!-- sent="Fri, 16 Jun 2006 09:00:25 -0400" -->
<!-- isosent="20060616130025" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTM interface" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFA4338F_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTM interface" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-16 09:00:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1431.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTM interface"</a>
<li><strong>Previous message:</strong> <a href="1429.php">Martin Schaff&#246;ner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1431.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTM interface"</a>
<li><strong>Reply:</strong> <a href="1431.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTM interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try two things:
<br>
<p>1. Use the pbsdsh command to try to launch a trivial non-MPI application (e.g., hostname):
<br>
<p>(inside a PBS job)
<br>
pbsdsh -&lt;N&gt; -v hostname
<br>
<p>where &lt;N&gt; is the number of vcpu's in your job.
<br>
<p>2. If that works, try mpirun'ing a trivial non-MPI application (e.g., hostname):
<br>
<p>(inside a PBS job)
<br>
mpirun -np &lt;N&gt; -d --mca pls_tm_debug 1 hostname  
<br>
<p>If #1 fails, then there is something wrong with your Torque installation (pbsdsh uses the same PBS API that Open MPI does), and Open MPI's failure is a symptom of the underlying problem.  If #1 succeeds and #2 fails, send back the details and let's go from there.
<br>
<p>Thanks!
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Martin Schaff&#246;ner
</span><br>
<span class="quotelev1">&gt; Sent: Friday, June 16, 2006 3:27 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Openmpi 1.0.3svn10374 not launching 
</span><br>
<span class="quotelev1">&gt; apps throughTM interface
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thursday 15 June 2006 16:08, Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Jezz i really cant read this morning,  you are using torque and the
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec is the one with openmpi.   I cant help you then someone else
</span><br>
<span class="quotelev2">&gt; &gt; is going to have to.  Sorry
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would it be much of a hassle to run a very simple mpi job 
</span><br>
<span class="quotelev1">&gt; (may even in an 
</span><br>
<span class="quotelev1">&gt; interactive PBS session?)  with mpiexec arguments -d --mca 
</span><br>
<span class="quotelev1">&gt; pls_tm_debug 1 ? 
</span><br>
<span class="quotelev1">&gt; Could you then post the output so that I (and maybe others) 
</span><br>
<span class="quotelev1">&gt; have a reference?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Martin Schaff&#246;ner
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cognitive Systems Group, Institute of Electronics, Signal 
</span><br>
<span class="quotelev1">&gt; Processing and 
</span><br>
<span class="quotelev1">&gt; Communication Technologies, Department of Electrical Engineering, 
</span><br>
<span class="quotelev1">&gt; Otto-von-Guericke University Magdeburg
</span><br>
<span class="quotelev1">&gt; Phone: +49 391 6720063
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1431.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTM interface"</a>
<li><strong>Previous message:</strong> <a href="1429.php">Martin Schaff&#246;ner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1431.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTM interface"</a>
<li><strong>Reply:</strong> <a href="1431.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTM interface"</a>
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
