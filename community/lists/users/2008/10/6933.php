<?
$subject_val = "Re: [OMPI users] build failed using intel compilers on mac os x";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 01:57:56 2008" -->
<!-- isoreceived="20081010055756" -->
<!-- sent="Fri, 10 Oct 2008 07:57:49 +0200" -->
<!-- isosent="20081010055749" -->
<!-- name="Massimo Cafaro" -->
<!-- email="massimo.cafaro_at_[hidden]" -->
<!-- subject="Re: [OMPI users] build failed using intel compilers on mac os x" -->
<!-- id="03945C8A-EAF7-49A2-AB91-4CFAA7A1A1EB_at_unile.it" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="897C21DB-CB73-430C-B306-8E492B247B34_at_cisco.com" -->
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
<strong>From:</strong> Massimo Cafaro (<em>massimo.cafaro_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-10 01:57:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6934.php">Hahn Kim: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="6932.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6929.php">Jeff Squyres: "Re: [OMPI users] build failed using intel compilers on mac os x"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you very much.
<br>
<p>I am going to build again, using the new settings, as suggested.
<br>
Best regards,
<br>
<p>Massimo
<br>
<p>On Oct 9, 2008, at 11:28 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; The CXX compiler should be icpc, not icc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 7, 2008, at 11:08 AM, Massimo Cafaro wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;openmpi build&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to build the latest v1.2.7 open-mpi version on Mac OS X  
</span><br>
<span class="quotelev2">&gt;&gt; 10.5.5 using the intel c, c++ and fortran compilers v10.1.017 (the  
</span><br>
<span class="quotelev2">&gt;&gt; latest ones released by intel). Before starting the build I have  
</span><br>
<span class="quotelev2">&gt;&gt; properly configured the CC, CXX, F77 and FC environment variables  
</span><br>
<span class="quotelev2">&gt;&gt; (to icc and ifort). The build failed due to undefined symbols.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am attaching a log of the failed build process.
</span><br>
<span class="quotelev2">&gt;&gt; Any clue? Am I doing something wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, to build a 64 bit version it is enough to supply in the  
</span><br>
<span class="quotelev2">&gt;&gt; corresponding environment variables the -m64 option ?
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance and best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Massimo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *******************************************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Massimo Cafaro, Ph.D.                              Additional  
</span><br>
<span class="quotelev2">&gt;&gt; affiliations:
</span><br>
<span class="quotelev2">&gt;&gt; Assistant Professor                                     National  
</span><br>
<span class="quotelev2">&gt;&gt; Nanotechnology Laboratory (NNL/CNR-INFM)
</span><br>
<span class="quotelev2">&gt;&gt; Dept. of Engineering for Innovation         Euro-Mediterranean  
</span><br>
<span class="quotelev2">&gt;&gt; Centre for Climate Change
</span><br>
<span class="quotelev2">&gt;&gt; University of Salento, Lecce, Italy            SPACI Consortium
</span><br>
<span class="quotelev2">&gt;&gt; Via per Monteroni
</span><br>
<span class="quotelev2">&gt;&gt; 73100 Lecce, Italy
</span><br>
<span class="quotelev2">&gt;&gt; Voice  +39 0832 297371
</span><br>
<span class="quotelev2">&gt;&gt; Fax +39 0832 298173
</span><br>
<span class="quotelev2">&gt;&gt; Web     <a href="http://sara.unile.it/~cafaro">http://sara.unile.it/~cafaro</a>
</span><br>
<span class="quotelev2">&gt;&gt; E-mail massimo.cafaro_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;             cafaro_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *******************************************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mime-attachment.txt&gt;
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
<p><p><p><pre>
-- 
*******************************************************************************************************
  Massimo Cafaro, Ph.D.                              Additional  
affiliations:
  Assistant Professor                                     National  
Nanotechnology Laboratory (NNL/CNR-INFM)
  Dept. of Engineering for Innovation         Euro-Mediterranean  
Centre for Climate Change
  University of Salento, Lecce, Italy            SPACI Consortium
  Via per Monteroni
  73100 Lecce, Italy
  Voice  +39 0832 297371
  Fax +39 0832 298173
  Web     <a href="http://sara.unile.it/~cafaro">http://sara.unile.it/~cafaro</a>
  E-mail massimo.cafaro_at_[hidden]
               cafaro_at_[hidden]
*******************************************************************************************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6934.php">Hahn Kim: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="6932.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6929.php">Jeff Squyres: "Re: [OMPI users] build failed using intel compilers on mac os x"</a>
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
