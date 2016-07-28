<?
$subject_val = "Re: [OMPI users] build failed using intel compilers on mac os x";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  9 17:28:44 2008" -->
<!-- isoreceived="20081009212844" -->
<!-- sent="Thu, 9 Oct 2008 17:28:38 -0400" -->
<!-- isosent="20081009212838" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] build failed using intel compilers on mac os x" -->
<!-- id="897C21DB-CB73-430C-B306-8E492B247B34_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8F22AA1A-2A8A-408C-BB27-8757C7A08CAC_at_unile.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] build failed using intel compilers on mac os x<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-09 17:28:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6930.php">Rene Salmon: "[OMPI users] --enable-static --enable-shared using intel compilers"</a>
<li><strong>Previous message:</strong> <a href="6928.php">Sean Davis: "[OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>In reply to:</strong> <a href="6880.php">Massimo Cafaro: "[OMPI users] build failed using intel compilers on mac os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6933.php">Massimo Cafaro: "Re: [OMPI users] build failed using intel compilers on mac os x"</a>
<li><strong>Reply:</strong> <a href="6933.php">Massimo Cafaro: "Re: [OMPI users] build failed using intel compilers on mac os x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The CXX compiler should be icpc, not icc.
<br>
<p><p>On Oct 7, 2008, at 11:08 AM, Massimo Cafaro wrote:
<br>
<p><span class="quotelev1">&gt; &lt;openmpi build&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to build the latest v1.2.7 open-mpi version on Mac OS X  
</span><br>
<span class="quotelev1">&gt; 10.5.5 using the intel c, c++ and fortran compilers v10.1.017 (the  
</span><br>
<span class="quotelev1">&gt; latest ones released by intel). Before starting the build I have  
</span><br>
<span class="quotelev1">&gt; properly configured the CC, CXX, F77 and FC environment variables  
</span><br>
<span class="quotelev1">&gt; (to icc and ifort). The build failed due to undefined symbols.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am attaching a log of the failed build process.
</span><br>
<span class="quotelev1">&gt; Any clue? Am I doing something wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, to build a 64 bit version it is enough to supply in the  
</span><br>
<span class="quotelev1">&gt; corresponding environment variables the -m64 option ?
</span><br>
<span class="quotelev1">&gt; Thank you in advance and best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Massimo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *******************************************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Massimo Cafaro, Ph.D.                              Additional  
</span><br>
<span class="quotelev1">&gt; affiliations:
</span><br>
<span class="quotelev1">&gt; Assistant Professor                                     National  
</span><br>
<span class="quotelev1">&gt; Nanotechnology Laboratory (NNL/CNR-INFM)
</span><br>
<span class="quotelev1">&gt; Dept. of Engineering for Innovation         Euro-Mediterranean  
</span><br>
<span class="quotelev1">&gt; Centre for Climate Change
</span><br>
<span class="quotelev1">&gt; University of Salento, Lecce, Italy            SPACI Consortium
</span><br>
<span class="quotelev1">&gt; Via per Monteroni
</span><br>
<span class="quotelev1">&gt; 73100 Lecce, Italy
</span><br>
<span class="quotelev1">&gt; Voice  +39 0832 297371
</span><br>
<span class="quotelev1">&gt; Fax +39 0832 298173
</span><br>
<span class="quotelev1">&gt; Web     <a href="http://sara.unile.it/~cafaro">http://sara.unile.it/~cafaro</a>
</span><br>
<span class="quotelev1">&gt; E-mail massimo.cafaro_at_[hidden]
</span><br>
<span class="quotelev1">&gt;              cafaro_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *******************************************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mime-attachment.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6930.php">Rene Salmon: "[OMPI users] --enable-static --enable-shared using intel compilers"</a>
<li><strong>Previous message:</strong> <a href="6928.php">Sean Davis: "[OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>In reply to:</strong> <a href="6880.php">Massimo Cafaro: "[OMPI users] build failed using intel compilers on mac os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6933.php">Massimo Cafaro: "Re: [OMPI users] build failed using intel compilers on mac os x"</a>
<li><strong>Reply:</strong> <a href="6933.php">Massimo Cafaro: "Re: [OMPI users] build failed using intel compilers on mac os x"</a>
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
