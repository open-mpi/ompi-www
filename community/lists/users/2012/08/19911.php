<?
$subject_val = "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  .";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  8 09:36:40 2012" -->
<!-- isoreceived="20120808133640" -->
<!-- sent="Wed, 08 Aug 2012 15:36:35 +0200" -->
<!-- isosent="20120808133635" -->
<!-- name="ESCOBAR Juan" -->
<!-- email="Juan.Escobar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp;amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ." -->
<!-- id="50226B63.8060701_at_aero.obs-mip.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6465797F-3D58-4B14-B1C0-84364BFAAF9D_at_cisco.com" -->
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
<strong>From:</strong> ESCOBAR Juan (<em>Juan.Escobar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-08 09:36:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19912.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Previous message:</strong> <a href="19910.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>In reply to:</strong> <a href="19910.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19912.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Reply:</strong> <a href="19912.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/08/2012 03:32 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Ah -- interesting.  Thank you for the patch!  I'm unfamiliar with this Fortran style of splitting strings.  Would it be better to split this up into multiple print * statements?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You sent:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendcounts and displs arguments!  &amp;
</span><br>
<span class="quotelev1">&gt;              Your code may crash or produce incorrect results.  &amp;
</span><br>
<span class="quotelev1">&gt;              ***Your code will fail to compile in future versions of Open MPI*** &amp;
</span><br>
<span class="quotelev1">&gt;              because this old/incorrect Fortran subroutine binding will be removed. &amp;
</span><br>
<span class="quotelev1">&gt;              Please update the type of your sendcounts and displs  parameters &amp;
</span><br>
<span class="quotelev1">&gt;              to make this warning go away (and have correct code!).&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should we instead do something like this:
</span><br>
<p>:-) It's OK to .
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendcounts and displs arguments!&quot;
</span><br>
<span class="quotelev1">&gt;    print *, &quot;Open MPI WARNING: Your code may crash or produce incorrect results.&quot;
</span><br>
<span class="quotelev1">&gt;    print *, &quot;Open MPI WARNING: ***Your code will fail to compile in future versions of Open MPI***&quot;
</span><br>
<span class="quotelev1">&gt;    print *, &quot;Open MPI WARNING: because this old/incorrect Fortran subroutine binding will be removed.&quot;
</span><br>
<span class="quotelev1">&gt;    print *, &quot;Open MPI WARNING: Please update the type of your sendcounts and dispels  parameters&quot;
</span><br>
<span class="quotelev1">&gt;    print *, &quot;Open MPI WARNING: to make this warning go away (and have correct code!).&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This makes the warning a bit more intrusive (since it's multiple lines), but that's good.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 8, 2012, at 9:19 AM, ESCOBAR Juan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The 'warning print' statement introduced in the correction made since version 1.5.4 and 1.6.X on this script :
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.6.1rc2/ompi/mpi/f90/scripts/mpi_scatterv_f90.f90.sh :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendcounts and displs arguments!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; generate a compilation error when compiling with PGI compiler ( last version 12.6 tested )
</span><br>
<span class="quotelev2">&gt;&gt; because the 'print' line if far to long for a 'standard/normed ' fortran compiler = 132 characters max  by lines .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =&gt; splitting the 'print' line with &quot;&amp;&quot; solve the problem .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Find the suggested script ( version 1.6.1rc2 ) in the mail
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A+
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Juan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Juan ESCOBAR
</span><br>
<span class="quotelev2">&gt;&gt; Support MESONH
</span><br>
<span class="quotelev2">&gt;&gt; Laboratoire d'A&#233;rologie, O.M.P.
</span><br>
<span class="quotelev2">&gt;&gt; 14 avenue Edouard Belin
</span><br>
<span class="quotelev2">&gt;&gt; 31400 - TOULOUSE
</span><br>
<span class="quotelev2">&gt;&gt; Tel : +33 (0)5-61-33-27-49
</span><br>
<span class="quotelev2">&gt;&gt; Fax : +33 (0)5-61-33-27-90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mpi_scatterv_f90.f90.sh&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Juan ESCOBAR
Support MESONH
Laboratoire d'A&#233;rologie, O.M.P.
14 avenue Edouard Belin
31400 - TOULOUSE
Tel : +33 (0)5-61-33-27-49
Fax : +33 (0)5-61-33-27-90
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19912.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Previous message:</strong> <a href="19910.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>In reply to:</strong> <a href="19910.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19912.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Reply:</strong> <a href="19912.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
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
