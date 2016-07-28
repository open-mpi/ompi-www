<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  9 09:04:22 2005" -->
<!-- isoreceived="20050809140422" -->
<!-- sent="Tue, 9 Aug 2005 09:04:52 -0500" -->
<!-- isosent="20050809140452" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="4534EBCF-4D86-46A8-93A9-28F428AAF964_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A388685F814D54CAE412B2DAB7CE91C016A13_at_initexch.topspincom.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-09 09:04:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0107.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0105.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0103.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0107.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 9, 2005, at 8:48 AM, Sridhar Chirravuri wrote:
<br>
<p><span class="quotelev1">&gt; Does r6774 has lot of changes that are related to 3rd generation  
</span><br>
<span class="quotelev1">&gt; point-to-point? I am trying to run some benchmark tests (ex:  
</span><br>
<span class="quotelev1">&gt; pallas) with Open MPI stack and just want to compare the  
</span><br>
<span class="quotelev1">&gt; performance figures with MVAPICH 095 and MVAPICH 092.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to use 3rd generation p2p communication, I have added the  
</span><br>
<span class="quotelev1">&gt; following line in the /openmpi/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pml=ob1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also exported (as double check) OMPI_MCA_pml=ob1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then, I have tried running on the same machine. My machine has got  
</span><br>
<span class="quotelev1">&gt; 2 processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mpirun -np 2 ./PMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I still see the following lines
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce_scatter.c, 79)
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce.c, 193)
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce_scatter.c, 79)
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce.c, 193)
</span><br>
<p>These errors are coming from the collective routines, not the PML/BTL  
<br>
layers.  It looks like the reduction codes are trying to call malloc 
<br>
(0), which doesn't work so well.  We'll take a look as soon as we  
<br>
can.  In the mean time, can you just not run the tests that call the  
<br>
reduction collectives?
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0107.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0105.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0103.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0107.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
