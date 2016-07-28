<?
$subject_val = "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  .";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  8 09:32:52 2012" -->
<!-- isoreceived="20120808133252" -->
<!-- sent="Wed, 8 Aug 2012 09:32:47 -0400" -->
<!-- isosent="20120808133247" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp;amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ." -->
<!-- id="6465797F-3D58-4B14-B1C0-84364BFAAF9D_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50226774.7040605_at_aero.obs-mip.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  .<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-08 09:32:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19911.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Previous message:</strong> <a href="19909.php">ESCOBAR Juan: "[OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>In reply to:</strong> <a href="19909.php">ESCOBAR Juan: "[OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19911.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Reply:</strong> <a href="19911.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah -- interesting.  Thank you for the patch!  I'm unfamiliar with this Fortran style of splitting strings.  Would it be better to split this up into multiple print * statements?
<br>
<p>You sent:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendcounts and displs arguments!  &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your code may crash or produce incorrect results.  &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;***Your code will fail to compile in future versions of Open MPI*** &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;because this old/incorrect Fortran subroutine binding will be removed. &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please update the type of your sendcounts and displs  parameters &amp; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to make this warning go away (and have correct code!).&quot;
<br>
<p>Should we instead do something like this:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendcounts and displs arguments!&quot;
<br>
&nbsp;&nbsp;print *, &quot;Open MPI WARNING: Your code may crash or produce incorrect results.&quot;
<br>
&nbsp;&nbsp;print *, &quot;Open MPI WARNING: ***Your code will fail to compile in future versions of Open MPI***&quot;
<br>
&nbsp;&nbsp;print *, &quot;Open MPI WARNING: because this old/incorrect Fortran subroutine binding will be removed.&quot;
<br>
&nbsp;&nbsp;print *, &quot;Open MPI WARNING: Please update the type of your sendcounts and dispels  parameters&quot;
<br>
&nbsp;&nbsp;print *, &quot;Open MPI WARNING: to make this warning go away (and have correct code!).&quot;
<br>
<p>This makes the warning a bit more intrusive (since it's multiple lines), but that's good.  :-)
<br>
<p><p>On Aug 8, 2012, at 9:19 AM, ESCOBAR Juan wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The 'warning print' statement introduced in the correction made since version 1.5.4 and 1.6.X on this script :
</span><br>
<span class="quotelev1">&gt; openmpi-1.6.1rc2/ompi/mpi/f90/scripts/mpi_scatterv_f90.f90.sh :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendcounts and displs arguments! 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; generate a compilation error when compiling with PGI compiler ( last version 12.6 tested )
</span><br>
<span class="quotelev1">&gt; because the 'print' line if far to long for a 'standard/normed ' fortran compiler = 132 characters max  by lines .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =&gt; splitting the 'print' line with &quot;&amp;&quot; solve the problem .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Find the suggested script ( version 1.6.1rc2 ) in the mail
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A+
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Juan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Juan ESCOBAR
</span><br>
<span class="quotelev1">&gt; Support MESONH
</span><br>
<span class="quotelev1">&gt; Laboratoire d'A&#233;rologie, O.M.P.
</span><br>
<span class="quotelev1">&gt; 14 avenue Edouard Belin
</span><br>
<span class="quotelev1">&gt; 31400 - TOULOUSE
</span><br>
<span class="quotelev1">&gt; Tel : +33 (0)5-61-33-27-49
</span><br>
<span class="quotelev1">&gt; Fax : +33 (0)5-61-33-27-90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;mpi_scatterv_f90.f90.sh&gt;_______________________________________________
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19911.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Previous message:</strong> <a href="19909.php">ESCOBAR Juan: "[OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>In reply to:</strong> <a href="19909.php">ESCOBAR Juan: "[OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19911.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Reply:</strong> <a href="19911.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
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
