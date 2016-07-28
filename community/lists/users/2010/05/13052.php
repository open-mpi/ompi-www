<?
$subject_val = "Re: [OMPI users] MPI_FILE_SET_ERRHANDLER returns an error withMPI_FILE_NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 15 09:11:08 2010" -->
<!-- isoreceived="20100515131108" -->
<!-- sent="Sat, 15 May 2010 09:11:03 -0400" -->
<!-- isosent="20100515131103" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_FILE_SET_ERRHANDLER returns an error withMPI_FILE_NULL" -->
<!-- id="58641F1D-0DFE-4E7D-B075-765589CE6DA5_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0DA854E5D5F4C8428ABC1701AE2621CD011F5B07C53A_at_INRSEXCH02.AD.INRS.CA" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_FILE_SET_ERRHANDLER returns an error withMPI_FILE_NULL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-15 09:11:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13053.php">Ralph Castain: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>Previous message:</strong> <a href="13051.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault at program end with 2+ processes"</a>
<li><strong>In reply to:</strong> <a href="12976.php">Secretan Yves: "[OMPI users] MPI_FILE_SET_ERRHANDLER returns an error with MPI_FILE_NULL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, this is a bug.  Thanks for identifying the issue!
<br>
<p>I have committed a fix to our development tree and have filed to have it moved into the 1.4 and 1.5 series.  You can download a patch for the specific fix here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/23145">https://svn.open-mpi.org/trac/ompi/changeset/23145</a>
<br>
<p><p>On May 7, 2010, at 4:52 PM, Secretan Yves wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; According to my understanding of the documentation, it should be possible to set the default error handler for files with MPI_FILE_SET_ERRHANDLER. However, the following small Fortran77 program fails, MPI_FILE_SET_ERRHANDLER returns an error.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; =================================
</span><br>
<span class="quotelev1">&gt;       PROGRAM H2D2_MAIN
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;       INCLUDE 'mpif.h'
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;       EXTERNAL HNDLR
</span><br>
<span class="quotelev1">&gt; C------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;       CALL MPI_INIT(I_ERR)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;       I_HDLR = 0
</span><br>
<span class="quotelev1">&gt;       CALL MPI_FILE_CREATE_ERRHANDLER(HNDLR1, I_HDLR, I_ERR)
</span><br>
<span class="quotelev1">&gt;       WRITE(*,*) 'MPI_FILE_CREATE_ERRHANDLER: ', I_ERR
</span><br>
<span class="quotelev1">&gt;       CALL MPI_FILE_SET_ERRHANDLER   (MPI_FILE_NULL, I_HDLR, I_ERR)
</span><br>
<span class="quotelev1">&gt;       WRITE(*,*) 'MPI_FILE_SET_ERRHANDLER: ', I_ERR
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;       END
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;       SUBROUTINE HNDLR(I_CNTX, I_ERR)
</span><br>
<span class="quotelev1">&gt;       WRITE(*,*) 'In HNDLR: MPI Error detected'
</span><br>
<span class="quotelev1">&gt;       RETURN
</span><br>
<span class="quotelev1">&gt;       END
</span><br>
<span class="quotelev1">&gt; ============================
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Did I miss something obvious?
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Yves Secretan
</span><br>
<span class="quotelev1">&gt; Professeur
</span><br>
<span class="quotelev1">&gt; Yves.Secretan_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;image001.gif&gt; Avant d'imprimer, pensez &#224; l'environnement
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
<li><strong>Next message:</strong> <a href="13053.php">Ralph Castain: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>Previous message:</strong> <a href="13051.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault at program end with 2+ processes"</a>
<li><strong>In reply to:</strong> <a href="12976.php">Secretan Yves: "[OMPI users] MPI_FILE_SET_ERRHANDLER returns an error with MPI_FILE_NULL"</a>
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
