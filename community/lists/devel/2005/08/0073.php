<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  4 05:43:07 2005" -->
<!-- isoreceived="20050804104307" -->
<!-- sent="Thu, 4 Aug 2005 06:43:01 -0400" -->
<!-- isosent="20050804104301" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="df91b9040fb32ccc0cabc302323b821f_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-04 05:43:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0072.php">Torsten Hoefler: "Re:  Broken --enable-mpi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; From: &quot;Sridhar Chirravuri \(schirrav\)&quot; &lt;schirrav_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: August 4, 2005 2:07:04 AM EDT
</span><br>
<span class="quotelev1">&gt; Cc: &quot;Sridhar Chirravuri \(schirrav\)&quot; &lt;schirrav_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Regarding MVAPI Component in OpenMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; I got OpenMPI tar ball and could configure and build on AMD x86_64 
</span><br>
<span class="quotelev1">&gt; arch.
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; In our case, we need to enable MVAPI and disable OpenIB. For this, I 
</span><br>
<span class="quotelev1">&gt; have moved .ompi_ignore file from mvapi directory to openib directory. 
</span><br>
<span class="quotelev1">&gt; I could see that OpenIB was disabled as the entire openib tree was 
</span><br>
<span class="quotelev1">&gt; skipped by the autogen.sh script.
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; While running Pallas accross the nodes, I could see that data is 
</span><br>
<span class="quotelev1">&gt; passing over Gigbit ethernet and NOT over Infiniband.&#160; Does anyone has 
</span><br>
<span class="quotelev1">&gt; idea about why data is going through Gig and NOT over infiniband? Do I 
</span><br>
<span class="quotelev1">&gt; have to set any configuration options? Do I have to give any run-time 
</span><br>
<span class="quotelev1">&gt; options? I have tried with mpirun -mca btl mvapi but of no use.
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; I could make out that TCP component is being used and in order to 
</span><br>
<span class="quotelev1">&gt; disable tcp, I have copied .ompi_ignore in to directories 
</span><br>
<span class="quotelev1">&gt; /ompi/orte/mca/oob/tcp and /ompi/ompi/mca/ptl/tcp. But this time 
</span><br>
<span class="quotelev1">&gt; program fails with segmentation fault error.
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; These are the configure options that I have given while configuring 
</span><br>
<span class="quotelev1">&gt; OpenMPI.
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/openmpi --with-btl-mvapi=/usr/local/topspin/ 
</span><br>
<span class="quotelev1">&gt; --with-btl-mvapi-libdir=/usr/local/topspin --with-mvapi
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; Please help me in resolving this.
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; -Sridhar
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0072.php">Torsten Hoefler: "Re:  Broken --enable-mpi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
