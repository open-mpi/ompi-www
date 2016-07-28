<?
$subject_val = "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 13 11:33:38 2008" -->
<!-- isoreceived="20080213163338" -->
<!-- sent="Wed, 13 Feb 2008 08:33:10 -0800" -->
<!-- isosent="20080213163310" -->
<!-- name="James A. Peltier" -->
<!-- email="jpeltier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS" -->
<!-- id="47B31BC6.6030906_at_cs.sfu.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7AEC29D79CDD2646955922C34AFF197329E032_at_USMLVV1EXCTV06.ww005.siemens.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS<br>
<strong>From:</strong> James A. Peltier (<em>jpeltier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-13 11:33:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5030.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Previous message:</strong> <a href="5028.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>In reply to:</strong> <a href="5028.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5030.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Reply:</strong> <a href="5030.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hsieh, Pei-Ying (MED US) wrote:
<br>
<span class="quotelev1">&gt; Hi, Mark,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; When I installed HYPRE, I simply did &quot;./configure 
</span><br>
<span class="quotelev1">&gt; --prefix=/usr/local/hypre2.0&quot;, then make, make install.  All libraries 
</span><br>
<span class="quotelev1">&gt; seems to be static libraries. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; As for openmpi, I did &quot;./configure --prefix=/usr/local/openmpi 
</span><br>
<span class="quotelev1">&gt; --enable-static --disable-shared&quot;, then, make all install (elmer prefers 
</span><br>
<span class="quotelev1">&gt; statically linked).  So, all openmpi static library should resides in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi.  A simple hello_mpi.c (.f90) ran fine.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; During elmer configuration, one of the steps is to build blas/parpack 
</span><br>
<span class="quotelev1">&gt; libraries.  Which was successful (I got libparpack.a under 
</span><br>
<span class="quotelev1">&gt; ELMER_HOME/lib).  It is not clear to me why at the final step of elmer 
</span><br>
<span class="quotelev1">&gt; configuration, it complains about not finding HYPRE and parpack.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I also suspect about the /usr/lib64 business.  Trying to sort out 
</span><br>
<span class="quotelev1">&gt; whether this is an openMPI issue (on 64 bit SuSE) or elmer issue.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks a lot!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Pei
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Did you ensure that all of the applications were built using the OpenMPI 
<br>
compilers?  Sometimes you *have* to define the CC, CXX, etc when building.
<br>
<p><pre>
-- 
James A. Peltier
Technical Director, RHCE
SCIRF | GrUVi @ Simon Fraser University - Burnaby Campus
Phone   : 778-782-3610
Fax     : 778-782-3045
Mobile  : 778-840-6434
E-Mail  : jpeltier_at_[hidden]
Website : <a href="http://gruvi.cs.sfu.ca">http://gruvi.cs.sfu.ca</a> | <a href="http://scirf.cs.sfu.ca">http://scirf.cs.sfu.ca</a>
MSN     : subatomic_spam_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5030.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Previous message:</strong> <a href="5028.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>In reply to:</strong> <a href="5028.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5030.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Reply:</strong> <a href="5030.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
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
