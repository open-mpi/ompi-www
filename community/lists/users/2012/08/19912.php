<?
$subject_val = "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  .";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  8 10:31:51 2012" -->
<!-- isoreceived="20120808143151" -->
<!-- sent="Wed, 8 Aug 2012 10:31:47 -0400" -->
<!-- isosent="20120808143147" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp;amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ." -->
<!-- id="5DE0CE98-A331-4FA0-AC37-D5C8E290EC23_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50226B63.8060701_at_aero.obs-mip.fr" -->
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
<strong>Date:</strong> 2012-08-08 10:31:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19913.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Previous message:</strong> <a href="19911.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>In reply to:</strong> <a href="19911.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19913.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Reply:</strong> <a href="19913.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Reply:</strong> <a href="19914.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perfect; fixed in:
<br>
<p>&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/26971">https://svn.open-mpi.org/trac/ompi/changeset/26971</a>
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/26972">https://svn.open-mpi.org/trac/ompi/changeset/26972</a>
<br>
<p>It'll be in the 1.6 nightly tarballs starting tonight.
<br>
<p>Many thanks for the patch.
<br>
<p><p><p>On Aug 8, 2012, at 9:36 AM, ESCOBAR Juan wrote:
<br>
<p><span class="quotelev1">&gt; On 08/08/2012 03:32 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ah -- interesting.  Thank you for the patch!  I'm unfamiliar with this Fortran style of splitting strings.  Would it be better to split this up into multiple print * statements?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You sent:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendcounts and displs arguments!  &amp;
</span><br>
<span class="quotelev2">&gt;&gt;             Your code may crash or produce incorrect results.  &amp;
</span><br>
<span class="quotelev2">&gt;&gt;             ***Your code will fail to compile in future versions of Open MPI*** &amp;
</span><br>
<span class="quotelev2">&gt;&gt;             because this old/incorrect Fortran subroutine binding will be removed. &amp;
</span><br>
<span class="quotelev2">&gt;&gt;             Please update the type of your sendcounts and displs  parameters &amp;
</span><br>
<span class="quotelev2">&gt;&gt;             to make this warning go away (and have correct code!).&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Should we instead do something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; :-) It's OK to .
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendcounts and displs arguments!&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   print *, &quot;Open MPI WARNING: Your code may crash or produce incorrect results.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   print *, &quot;Open MPI WARNING: ***Your code will fail to compile in future versions of Open MPI***&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   print *, &quot;Open MPI WARNING: because this old/incorrect Fortran subroutine binding will be removed.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   print *, &quot;Open MPI WARNING: Please update the type of your sendcounts and dispels  parameters&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   print *, &quot;Open MPI WARNING: to make this warning go away (and have correct code!).&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This makes the warning a bit more intrusive (since it's multiple lines), but that's good.  :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 8, 2012, at 9:19 AM, ESCOBAR Juan wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The 'warning print' statement introduced in the correction made since version 1.5.4 and 1.6.X on this script :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.6.1rc2/ompi/mpi/f90/scripts/mpi_scatterv_f90.f90.sh :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendcounts and displs arguments!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; generate a compilation error when compiling with PGI compiler ( last version 12.6 tested )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because the 'print' line if far to long for a 'standard/normed ' fortran compiler = 132 characters max  by lines .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =&gt; splitting the 'print' line with &quot;&amp;&quot; solve the problem .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Find the suggested script ( version 1.6.1rc2 ) in the mail
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A+
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Juan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Juan ESCOBAR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Support MESONH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Laboratoire d'A&#233;rologie, O.M.P.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 14 avenue Edouard Belin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31400 - TOULOUSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel : +33 (0)5-61-33-27-49
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax : +33 (0)5-61-33-27-90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mpi_scatterv_f90.f90.sh&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19913.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Previous message:</strong> <a href="19911.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>In reply to:</strong> <a href="19911.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19913.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Reply:</strong> <a href="19913.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Reply:</strong> <a href="19914.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
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
