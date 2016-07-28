<?
$subject_val = "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 18:37:03 2010" -->
<!-- isoreceived="20100622223703" -->
<!-- sent="Tue, 22 Jun 2010 18:36:58 -0400" -->
<!-- isosent="20100622223658" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction" -->
<!-- id="79AE6774-5420-4C22-8A46-7AEB3657DC7A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="fc7ebd43bf5.4c20ff1f_at_mssm.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 18:36:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13388.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>Previous message:</strong> <a href="13386.php">chan_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>In reply to:</strong> <a href="13385.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13389.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Reply:</strong> <a href="13389.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Reply:</strong> <a href="13390.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Reply:</strong> <a href="13391.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the problem is that you didn't include mpif.h in testsubr().  Hence, the value of MPI_INTEGER was undefined -- I don't think it's a problem with the value of MPI_Comm.
<br>
<p><p>On Jun 22, 2010, at 6:21 PM, Mihaly Mezei wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; attached is mpi0.f (23 lines) and the screen dump of the compilation with the error message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the lightening-speed reaction!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Mihaly Mezei
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Department of Structural and Chemical Biology, Mount Sinai School of Medicine
</span><br>
<span class="quotelev1">&gt; Voice:  (212) 659-5475   Fax: (212) 849-2456
</span><br>
<span class="quotelev1">&gt; WWW (MSSM home): <a href="http://www.mountsinai.org/Find%20A%20Faculty/profile.do?id=0000072500001497192632">http://www.mountsinai.org/Find%20A%20Faculty/profile.do?id=0000072500001497192632</a>
</span><br>
<span class="quotelev1">&gt; WWW (Lab home - software, publications): <a href="http://inka.mssm.edu/~mezei">http://inka.mssm.edu/~mezei</a>
</span><br>
<span class="quotelev1">&gt; WWW (Department): <a href="http://atlas.physbio.mssm.edu">http://atlas.physbio.mssm.edu</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;mpi0.f&gt;&lt;test.out&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="13388.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>Previous message:</strong> <a href="13386.php">chan_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>In reply to:</strong> <a href="13385.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13389.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Reply:</strong> <a href="13389.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Reply:</strong> <a href="13390.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Reply:</strong> <a href="13391.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
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
