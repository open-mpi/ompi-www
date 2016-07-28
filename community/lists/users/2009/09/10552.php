<?
$subject_val = "Re: [OMPI users] openmpiu 1.3.3. with OpenFOAM";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 03:53:50 2009" -->
<!-- isoreceived="20090902075350" -->
<!-- sent="Wed, 2 Sep 2009 10:53:46 +0300" -->
<!-- isosent="20090902075346" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpiu 1.3.3. with OpenFOAM" -->
<!-- id="81906F9B-15DB-43A3-8E10-EB59408BA720_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A96E8FF.4030202_at_yahoo.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpiu 1.3.3. with OpenFOAM<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-02 03:53:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10553.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous SLURM cluster segfaults on largetransfers"</a>
<li><strong>Previous message:</strong> <a href="10551.php">Jeff Squyres: "Re: [OMPI users] build problems - undefined referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10506.php">Bastil2001_at_[hidden]: "[OMPI users] openmpiu 1.3.3. with OpenFOAM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll let the Myricom guys answer further for message passing  
<br>
optimizations, but some general tips:
<br>
<p>- Yes, using processor affinity might help.  Add &quot;--mca  
<br>
mpi_paffinity_alone 1&quot; to your mpirun command line and see if that  
<br>
helps.
<br>
- I *believe* that HP MPI uses processor affinity by default -- Open  
<br>
MPI does not.
<br>
- If you are using less MPI processes than you have processors, you  
<br>
might want to spread out the MPI processes across computational  
<br>
sockets.  Open MPI 1.3.x does not yet have good controls for this yet;  
<br>
you might need to do this manually with some shell scripting (we're  
<br>
putting better processor affinity controls in future versions).
<br>
<p><p>On Aug 27, 2009, at 11:13 PM, &lt;Bastil2001_at_[hidden]&gt;  
<br>
&lt;Bastil2001_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear openmpi-ers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I lately installed openmpi to run OpenFOAM 1.5 on our myrinet  
</span><br>
<span class="quotelev1">&gt; cluster. I
</span><br>
<span class="quotelev1">&gt; saw great performence improvements compared to openmpi 1.2.6,  
</span><br>
<span class="quotelev1">&gt; however it
</span><br>
<span class="quotelev1">&gt; is still little behind the commerical HPMPI.
</span><br>
<span class="quotelev1">&gt; Are there further tipps for fine-tuning the parameters to run mpirun
</span><br>
<span class="quotelev1">&gt; with for this special application? From my experience the MX-ML should
</span><br>
<span class="quotelev1">&gt; be the quicker one so I currently use:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca mtl mx --mca pml cm ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as given the FAQ.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also thing that processor affinity might be worth trying, I will do
</span><br>
<span class="quotelev1">&gt; this. Some other tipps? Are there special reasons why HPMPI still
</span><br>
<span class="quotelev1">&gt; outperforms openMPI for this kind of tasks? Thanks and regards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BastiL
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10553.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous SLURM cluster segfaults on largetransfers"</a>
<li><strong>Previous message:</strong> <a href="10551.php">Jeff Squyres: "Re: [OMPI users] build problems - undefined referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10506.php">Bastil2001_at_[hidden]: "[OMPI users] openmpiu 1.3.3. with OpenFOAM"</a>
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
