<?
$subject_val = "Re: [OMPI users] errors returned from openmpi-1.2.7 source code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 14:21:52 2008" -->
<!-- isoreceived="20080915182152" -->
<!-- sent="Mon, 15 Sep 2008 14:21:47 -0400" -->
<!-- isosent="20080915182147" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] errors returned from openmpi-1.2.7 source code" -->
<!-- id="1CCB5F86-5D4C-4873-9270-693778F89EE6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="667902.66674.qm_at_web34807.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] errors returned from openmpi-1.2.7 source code<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-15 14:21:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6548.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Previous message:</strong> <a href="6546.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
<li><strong>In reply to:</strong> <a href="6535.php">Shafagh Jafer: "[OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6552.php">Shafagh Jafer: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Reply:</strong> <a href="6552.php">Shafagh Jafer: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 14, 2008, at 1:24 PM, Shafagh Jafer wrote:
<br>
<p><span class="quotelev1">&gt; I installed openmpi-1.2.7 and tested the hello_c and ring_c examples  
</span><br>
<span class="quotelev1">&gt; on single and multiple node and worked fine. However, when I use  
</span><br>
<span class="quotelev1">&gt; openmpi with my simulator (by replacing the old mpich path with the  
</span><br>
<span class="quotelev1">&gt; new openmpi ) I get many errors reported from &quot;/openMPI/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/*.h&quot; . Please see the  
</span><br>
<span class="quotelev1">&gt; following snap shots:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It's not clear exactly what you did here.  Did you just replace  
<br>
MPICH's &quot;mpiCC&quot; with OMPI's &quot;mpiCC&quot;?  FWIW, this is almost always the  
<br>
easiest way to compile MPI applications: use that implementation's  
<br>
&quot;wrapper&quot; compiler (I'm assuming you have a C++ code in this case).
<br>
<p>These errors should not normally happen; they look kinda like you're  
<br>
somehow inadvertently mixing Open MPI and MPICH.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6548.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Previous message:</strong> <a href="6546.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
<li><strong>In reply to:</strong> <a href="6535.php">Shafagh Jafer: "[OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6552.php">Shafagh Jafer: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Reply:</strong> <a href="6552.php">Shafagh Jafer: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
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
