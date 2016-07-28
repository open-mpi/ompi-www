<?
$subject_val = "Re: [OMPI users] machinefile and rank";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 01:16:56 2007" -->
<!-- isoreceived="20071107061656" -->
<!-- sent="Wed, 7 Nov 2007 08:16:46 +0200" -->
<!-- isosent="20071107061646" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] machinefile and rank" -->
<!-- id="20071107061646.GL2151_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5D5E6722-A1FA-4787-815F-76C1EEEE6DE1_at_cisco.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 01:16:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4423.php">Åke Sandgren: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="4421.php">Jeff Squyres: "Re: [OMPI users] Node assignment using openmpi for multiple simulations in the same submission script in PBS (GROMACS)"</a>
<li><strong>In reply to:</strong> <a href="4419.php">Jeff Squyres: "Re: [OMPI users] machinefile and rank"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4424.php">Karsten Bolding: "Re: [OMPI users] machinefile and rank"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Nov 06, 2007 at 09:22:50PM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Unfortunately, not yet.  I believe that this kind of functionality is  
</span><br>
<span class="quotelev1">&gt; slated for the v1.3 series -- is that right Ralph/Voltaire?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Yes, the file format will be different, but arbitrary mapping will be
<br>
possible.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 5, 2007, at 11:22 AM, Karsten Bolding wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm using a machinefile like:
</span><br>
<span class="quotelev2">&gt; &gt; n03
</span><br>
<span class="quotelev2">&gt; &gt; n04
</span><br>
<span class="quotelev2">&gt; &gt; n03
</span><br>
<span class="quotelev2">&gt; &gt; n03
</span><br>
<span class="quotelev2">&gt; &gt; n03
</span><br>
<span class="quotelev2">&gt; &gt; n02
</span><br>
<span class="quotelev2">&gt; &gt; n01
</span><br>
<span class="quotelev2">&gt; &gt; ..
</span><br>
<span class="quotelev2">&gt; &gt; ..
</span><br>
<span class="quotelev2">&gt; &gt; ..
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the order of the entries is determined by an external program for load
</span><br>
<span class="quotelev2">&gt; &gt; balancing reasons. When the job is started the ranks do not correspond
</span><br>
<span class="quotelev2">&gt; &gt; to entries in the machinefile. Is there a way to force that entry  
</span><br>
<span class="quotelev2">&gt; &gt; one in
</span><br>
<span class="quotelev2">&gt; &gt; the machinefile gets rank=0, sencond entry gets rank=1 etc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Karsten
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Karsten Bolding                    Bolding &amp; Burchard Hydrodynamics
</span><br>
<span class="quotelev2">&gt; &gt; Strandgyden 25                     Phone: +45 64422058
</span><br>
<span class="quotelev2">&gt; &gt; DK-5466 Asperup                    Fax:   +45 64422068
</span><br>
<span class="quotelev2">&gt; &gt; Denmark                            Email: karsten_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.findvej.dk/Strandgyden25,5466,11,3">http://www.findvej.dk/Strandgyden25,5466,11,3</a>
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4423.php">Åke Sandgren: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="4421.php">Jeff Squyres: "Re: [OMPI users] Node assignment using openmpi for multiple simulations in the same submission script in PBS (GROMACS)"</a>
<li><strong>In reply to:</strong> <a href="4419.php">Jeff Squyres: "Re: [OMPI users] machinefile and rank"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4424.php">Karsten Bolding: "Re: [OMPI users] machinefile and rank"</a>
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
