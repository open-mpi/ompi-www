<?
$subject_val = "[OMPI users] [SPAM:### 82%] RE:  [SPAM:### 89%] OpenMPI LAM ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 05:54:44 2010" -->
<!-- isoreceived="20101217105444" -->
<!-- sent="Fri, 17 Dec 2010 11:54:37 +0100" -->
<!-- isosent="20101217105437" -->
<!-- name="GUBERNATIS Pierre 164999" -->
<!-- email="pierre.gubernatis_at_[hidden]" -->
<!-- subject="[OMPI users] [SPAM:### 82%] RE:  [SPAM:### 89%] OpenMPI LAM ?" -->
<!-- id="16130_1292583284_oBHAseRm030106_B898EB4A4F8E354A80061DC158D05BB78BC2D4_at_TOURVES.intra.cea.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.1012170959260.3424_at_localhost" -->
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
<strong>Subject:</strong> [OMPI users] [SPAM:### 82%] RE:  [SPAM:### 89%] OpenMPI LAM ?<br>
<strong>From:</strong> GUBERNATIS Pierre 164999 (<em>pierre.gubernatis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 05:54:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15186.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="15184.php">GUBERNATIS Pierre 164999: "[OMPI users] [SPAM:### 82%] RE:  [SPAM:### 89%] OpenMPI LAM ?"</a>
<li><strong>In reply to:</strong> <a href="15183.php">Ricardo Reis: "Re: [OMPI users] [SPAM:### 89%] OpenMPI LAM ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oups ! I got it ...
<br>
One of my slaves has been compiled with a bad mpif77 (one mpif77 coming with an old Lam installation provided by Portland PGI).
<br>
So I rectified my Path to have the correct mpif77, and it's much better 
<br>
Sorry for this mistake and thank you for your help
<br>
Pierre
<br>
<p>-----Message d'origine-----
<br>
De&#160;: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] De la part de Ricardo Reis
<br>
Envoy&#233;&#160;: vendredi 17 d&#233;cembre 2010 11:03
<br>
&#192;&#160;: Open MPI Users
<br>
Objet&#160;: Re: [OMPI users] [SPAM:### 89%] OpenMPI LAM ?
<br>
<p>On Fri, 17 Dec 2010, GUBERNATIS Pierre 164999 wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new at Openmpi : I used Lam so far and we have just installed OpenMpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run &quot;mpirun -app schema&quot; , OpenMpi complains about a missing daemon lamd, whereas the documentations says there is no need to run lamboot anymore.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To make sure :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ which mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /export/opt/OPEN-MPI/1.4.3/bin/mpirun
</span><br>
<p>Are you shure your enviroment is the same on all nodes? You say you're 
<br>
running on a cluster, can you do `which mpirun` in the submit script, just 
<br>
before running mpirun and is the result the same?
<br>
<p>What happens if you do `mpirun --version` in the said script (or node)?
<br>
<p>(what I intend to say is how are you sure that is not lam mpirun that is 
<br>
being called in that particular node?)
<br>
<p>&nbsp;&nbsp;best,
<br>
<p>&nbsp;&nbsp;Ricardo Reis
<br>
<p>&nbsp;&nbsp;'Non Serviam'
<br>
<p>&nbsp;&nbsp;PhD candidate @ Lasef
<br>
&nbsp;&nbsp;Computational Fluid Dynamics, High Performance Computing, Turbulence
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt; sent with alpine 2.00 &gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15186.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="15184.php">GUBERNATIS Pierre 164999: "[OMPI users] [SPAM:### 82%] RE:  [SPAM:### 89%] OpenMPI LAM ?"</a>
<li><strong>In reply to:</strong> <a href="15183.php">Ricardo Reis: "Re: [OMPI users] [SPAM:### 89%] OpenMPI LAM ?"</a>
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
