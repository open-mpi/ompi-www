<?
$subject_val = "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 16:22:24 2012" -->
<!-- isoreceived="20120509202224" -->
<!-- sent="Wed, 9 May 2012 21:22:18 +0100 (WEST)" -->
<!-- isosent="20120509202218" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with SGE: &amp;quot;-np N&amp;quot; for mpirun needed?" -->
<!-- id="alpine.DEB.2.00.1205092121480.3724_at_serodio" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4FAACFB6.6070401_at_seznam.cz" -->
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
<strong>From:</strong> Ricardo Reis (<em>rreis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 16:22:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19241.php">Jiri Polach: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<li><strong>Previous message:</strong> <a href="19239.php">Jiri Polach: "[OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<li><strong>In reply to:</strong> <a href="19239.php">Jiri Polach: "[OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19241.php">Jiri Polach: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<li><strong>Reply:</strong> <a href="19241.php">Jiri Polach: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 9 May 2012, Jiri Polach wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is &quot;-np N&quot; parameter needed for mpirun when running jobs under SGE 
</span><br>
<span class="quotelev1">&gt; environment? All examples in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge">http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; show that &quot;-np N&quot; is used, but in my opinion it should be redundant: mpirun 
</span><br>
<span class="quotelev1">&gt; should determine all parameters from SGE environment anyway. If there is &quot;no 
</span><br>
<span class="quotelev1">&gt; need to specify what nodes to run on&quot; (as stated in FAQ), it should not be 
</span><br>
<span class="quotelev1">&gt; necessary to specify the number of processors either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran some tests and it seems that mpirun correctly gets number of processors 
</span><br>
<span class="quotelev1">&gt; from SGE, but I would like to have some more solid confirmation.
</span><br>
<p>You might want to use a smaller number of processors than those made 
<br>
available by SGE.
<br>
<p>&nbsp;&nbsp;best,
<br>
<p>&nbsp;&nbsp;Ricardo Reis
<br>
<p>&nbsp;&nbsp;'Non Serviam'
<br>
<p>&nbsp;&nbsp;PhD/MSc Mechanical Engineering | Lic. Aerospace Engineering
<br>
<p>&nbsp;&nbsp;Computational Fluid Dynamics, High Performance Computing, Turbulence
<br>
&nbsp;&nbsp;<a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>
<br>
<p>&nbsp;&nbsp;Cultural Instigator @ R&#225;dio Zero
<br>
&nbsp;&nbsp;<a href="http://www.radiozero.pt">http://www.radiozero.pt</a>
<br>
<p>&nbsp;&nbsp;<a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
<br>
<p>&nbsp;&nbsp;contacts:  gtalk: kyriusan_at_[hidden]  skype: kyriusan
<br>
<p>&nbsp;&nbsp;Institutional Address:
<br>
<p>&nbsp;&nbsp;Ricardo J.N. dos Reis
<br>
&nbsp;&nbsp;IDMEC, Instituto Superior T&#233;cnico, Technical University of Lisbon
<br>
&nbsp;&nbsp;Av. Rovisco Pais
<br>
&nbsp;&nbsp;1049-001 Lisboa
<br>
&nbsp;&nbsp;Portugal
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- email sent with alpine 2.00 -
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19241.php">Jiri Polach: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<li><strong>Previous message:</strong> <a href="19239.php">Jiri Polach: "[OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<li><strong>In reply to:</strong> <a href="19239.php">Jiri Polach: "[OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19241.php">Jiri Polach: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<li><strong>Reply:</strong> <a href="19241.php">Jiri Polach: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
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
