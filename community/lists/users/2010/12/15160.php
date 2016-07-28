<?
$subject_val = "Re: [OMPI users] Trouble with IPM &amp; OpenMPI on SGI Altix";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 21:20:29 2010" -->
<!-- isoreceived="20101216022029" -->
<!-- sent="Wed, 15 Dec 2010 21:20:24 -0500" -->
<!-- isosent="20101216022024" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with IPM &amp;amp; OpenMPI on SGI Altix" -->
<!-- id="B018A9EC-34ED-4A6A-92D9-AFF0CA37F418_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CFFAB50.9020809_at_cern.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with IPM &amp; OpenMPI on SGI Altix<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 21:20:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15161.php">Tim Prince: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>Previous message:</strong> <a href="15159.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>In reply to:</strong> <a href="15039.php">Gilbert Grosdidier: "[OMPI users] Trouble with IPM &amp; OpenMPI on SGI Altix"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid that we're not conversant with the IPM application here -- have you tried pinging the IPM authors to see if they support what you're trying to do?
<br>
<p>(sorry to give such a weasel answer, but we really have no idea :-( )
<br>
<p><p>On Dec 8, 2010, at 10:59 AM, Gilbert Grosdidier wrote:
<br>
<p><span class="quotelev1">&gt; Bonjour,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have trouble when trying to compile&amp;  run IPM on an SGI Altix cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The issue is: this cluster is providing a default SGI MPT
</span><br>
<span class="quotelev1">&gt; implementation of MPI,
</span><br>
<span class="quotelev1">&gt; but I want to use a private installation of OpenMPI 1.4.3 instead.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) When I compile IPM as recommended, everything works fine, but, clearly
</span><br>
<span class="quotelev1">&gt; the shared lib which is built is aiming at the default SGI-MPT install.
</span><br>
<span class="quotelev1">&gt; The configure command line was:
</span><br>
<span class="quotelev1">&gt; ./configure --with-compiler=INTEL --prefix=/home/myhome/ipm/ipmoicc/ipm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) When trying to run the application with the relevant LD_PRELOAD, this
</span><br>
<span class="quotelev1">&gt; failure occurs:
</span><br>
<span class="quotelev1">&gt; mpiexec: symbol lookup error:
</span><br>
<span class="quotelev1">&gt; /home/myhome/ipm/ipmoicc/ipm/lib/libipm.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; mpi_sgi_status_ignore
</span><br>
<span class="quotelev1">&gt; leading to the diagnostic above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) Of course, if one forces the linking of the application with -lipm,
</span><br>
<span class="quotelev1">&gt; the same kind of culprit is found:
</span><br>
<span class="quotelev1">&gt; undefined reference to &#171; mpi_sgi_status_ignore &#187;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My feeling is I am missing the right way to make IPM pointing at my
</span><br>
<span class="quotelev1">&gt; private install of OpenMPI
</span><br>
<span class="quotelev1">&gt; at IPM compile time. How to achieve this, please ? I found no indication
</span><br>
<span class="quotelev1">&gt; on the Web, unfortunately, looking MPI or IPM ways :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any hint,   Regards,   G.
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15161.php">Tim Prince: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>Previous message:</strong> <a href="15159.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>In reply to:</strong> <a href="15039.php">Gilbert Grosdidier: "[OMPI users] Trouble with IPM &amp; OpenMPI on SGI Altix"</a>
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
