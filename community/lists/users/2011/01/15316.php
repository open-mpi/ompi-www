<?
$subject_val = "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  7 10:41:44 2011" -->
<!-- isoreceived="20110107154144" -->
<!-- sent="Fri, 7 Jan 2011 16:41:37 +0100" -->
<!-- isosent="20110107154137" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance" -->
<!-- id="AA4179D0-4920-4D86-898E-216557637331_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D272E93.60402_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance<br>
<strong>From:</strong> Gilbert Grosdidier (<em>Gilbert.Grosdidier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-07 10:41:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15317.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>Previous message:</strong> <a href="15315.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15313.php">Tim Prince: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15294.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll very soon give a try to using Hyperthreading with our app,
<br>
and keep you posted about the improvements, if any.
<br>
<p>&nbsp;&nbsp;Our current cluster is made out of 4-core dual-socket Nehalem nodes.
<br>
<p>&nbsp;&nbsp;Cheers,    Gilbert.
<br>
<p><p>Le 7 janv. 11 &#224; 16:17, Tim Prince a &#233;crit :
<br>
<p><span class="quotelev1">&gt; On 1/7/2011 6:49 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My understanding is that hyperthreading can only be activated/ 
</span><br>
<span class="quotelev2">&gt;&gt; deactivated at boot time -- once the core resources are allocated  
</span><br>
<span class="quotelev2">&gt;&gt; to hyperthreads, they can't be changed while running.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Whether disabling the hyperthreads or simply telling Linux not to  
</span><br>
<span class="quotelev2">&gt;&gt; schedule on them makes a difference performance-wise remains to be  
</span><br>
<span class="quotelev2">&gt;&gt; seen.  I've never had the time to do a little benchmarking to  
</span><br>
<span class="quotelev2">&gt;&gt; quantify the difference.  If someone could rustle up a few cycles  
</span><br>
<span class="quotelev2">&gt;&gt; (get it?) to test out what the real-world performance difference is  
</span><br>
<span class="quotelev2">&gt;&gt; between disabling hyperthreading in the BIOS vs. telling Linux to  
</span><br>
<span class="quotelev2">&gt;&gt; ignore the hyperthreads, that would be awesome.  I'd love to see  
</span><br>
<span class="quotelev2">&gt;&gt; such results.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My personal guess is that the difference is in the noise.  But  
</span><br>
<span class="quotelev2">&gt;&gt; that's a guess.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Applications which depend on availability of full size instruction  
</span><br>
<span class="quotelev1">&gt; lookaside buffer would be candidates for better performance with  
</span><br>
<span class="quotelev1">&gt; hyperthreads completely disabled.  Many HPC applications don't  
</span><br>
<span class="quotelev1">&gt; stress ITLB, but some do.
</span><br>
<span class="quotelev1">&gt; Most of the important resources are allocated dynamically between  
</span><br>
<span class="quotelev1">&gt; threads, but the ITLB is an exception.
</span><br>
<span class="quotelev1">&gt; We reported results of an investigation on Intel Nehalem 4-core  
</span><br>
<span class="quotelev1">&gt; hyperthreading where geometric mean performance of standard  
</span><br>
<span class="quotelev1">&gt; benchmarks for certain commercial applications was 2% better with  
</span><br>
<span class="quotelev1">&gt; hyperthreading disabled at boot time, compared with best 1 rank per  
</span><br>
<span class="quotelev1">&gt; core scheduling with hyperthreading enabled.  Needless to say, the  
</span><br>
<span class="quotelev1">&gt; report wasn't popular with marketing.  I haven't seen an equivalent  
</span><br>
<span class="quotelev1">&gt; investigation for the 6-core CPUs, where various strange performance  
</span><br>
<span class="quotelev1">&gt; effects have been noted, so, as Jeff said, the hyperthreading effect  
</span><br>
<span class="quotelev1">&gt; could be &quot;in the noise.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Prince
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
*---------------------------------------------------------------------*
   Gilbert Grosdidier                 Gilbert.Grosdidier_at_[hidden]
   LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
   Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
   B.P. 34, F-91898 Orsay Cedex (FRANCE)
*---------------------------------------------------------------------*
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15316/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15317.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>Previous message:</strong> <a href="15315.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15313.php">Tim Prince: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15294.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
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
