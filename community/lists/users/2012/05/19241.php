<?
$subject_val = "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 16:40:22 2012" -->
<!-- isoreceived="20120509204022" -->
<!-- sent="Wed, 09 May 2012 22:40:11 +0200" -->
<!-- isosent="20120509204011" -->
<!-- name="Jiri Polach" -->
<!-- email="jiri.polach_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with SGE: &amp;quot;-np N&amp;quot; for mpirun needed?" -->
<!-- id="4FAAD62B.9040001_at_seznam.cz" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.1205092121480.3724_at_serodio" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?<br>
<strong>From:</strong> Jiri Polach (<em>jiri.polach_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 16:40:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19242.php">Ricardo Reis: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<li><strong>Previous message:</strong> <a href="19240.php">Ricardo Reis: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<li><strong>In reply to:</strong> <a href="19240.php">Ricardo Reis: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19242.php">Ricardo Reis: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<li><strong>Reply:</strong> <a href="19242.php">Ricardo Reis: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; is &quot;-np N&quot; parameter needed for mpirun when running jobs under SGE
</span><br>
<span class="quotelev2">&gt;&gt; environment? All examples in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge">http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; show that &quot;-np N&quot; is used, but in my opinion it should be redundant:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun should determine all parameters from SGE environment anyway. If
</span><br>
<span class="quotelev2">&gt;&gt; there is &quot;no need to specify what nodes to run on&quot; (as stated in FAQ),
</span><br>
<span class="quotelev2">&gt;&gt; it should not be necessary to specify the number of processors either.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I ran some tests and it seems that mpirun correctly gets number of
</span><br>
<span class="quotelev2">&gt;&gt; processors from SGE, but I would like to have some more solid
</span><br>
<span class="quotelev2">&gt;&gt; confirmation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to use a smaller number of processors than those made
</span><br>
<span class="quotelev1">&gt; available by SGE.
</span><br>
<p>Thanks for replying. I can imagine that in some special cases it might 
<br>
be useful to request N processors from SGE and than use M&lt;N; in such 
<br>
cases I would specify &quot;-np M&quot; for mpirun, of course.
<br>
<p>But this does not answer the question - if I just want to use as many 
<br>
processors as I request from SGE - do I need to specify &quot;-np N&quot; for 
<br>
mpirun or not?
<br>
<p>Jiri Polach
<br>
<p><span class="quotelev1">&gt; Ricardo Reis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 'Non Serviam'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PhD/MSc Mechanical Engineering | Lic. Aerospace Engineering
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Computational Fluid Dynamics, High Performance Computing, Turbulence
</span><br>
<span class="quotelev1">&gt; <a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cultural Instigator @ R&#225;dio Zero
</span><br>
<span class="quotelev1">&gt; <a href="http://www.radiozero.pt">http://www.radiozero.pt</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; contacts: gtalk: kyriusan_at_[hidden] skype: kyriusan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Institutional Address:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ricardo J.N. dos Reis
</span><br>
<span class="quotelev1">&gt; IDMEC, Instituto Superior T&#233;cnico, Technical University of Lisbon
</span><br>
<span class="quotelev1">&gt; Av. Rovisco Pais
</span><br>
<span class="quotelev1">&gt; 1049-001 Lisboa
</span><br>
<span class="quotelev1">&gt; Portugal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - email sent with alpine 2.00 -
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19242.php">Ricardo Reis: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<li><strong>Previous message:</strong> <a href="19240.php">Ricardo Reis: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<li><strong>In reply to:</strong> <a href="19240.php">Ricardo Reis: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19242.php">Ricardo Reis: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<li><strong>Reply:</strong> <a href="19242.php">Ricardo Reis: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
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
