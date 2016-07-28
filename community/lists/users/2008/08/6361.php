<?
$subject_val = "Re: [OMPI users] bug in MPI_File_get_position_shared ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 16 08:05:20 2008" -->
<!-- isoreceived="20080816120520" -->
<!-- sent="Sat, 16 Aug 2008 08:05:14 -0400" -->
<!-- isosent="20080816120514" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in MPI_File_get_position_shared ?" -->
<!-- id="023F1DB0-8E8D-4C8C-8156-80AE52FF041F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1218668776.6367.5.camel_at_quarmall" -->
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
<strong>Subject:</strong> Re: [OMPI users] bug in MPI_File_get_position_shared ?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-16 08:05:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6362.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6360.php">Jeff Squyres: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>In reply to:</strong> <a href="6336.php">Yvan Fournier: "[OMPI users] bug in MPI_File_get_position_shared ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6553.php">Robert Latham: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6553.php">Robert Latham: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 13, 2008, at 7:06 PM, Yvan Fournier wrote:
<br>
<p><span class="quotelev1">&gt; I seem to have encountered a bug in MPI-IO, in which
</span><br>
<span class="quotelev1">&gt; MPI_File_get_position_shared hangs when called by multiple processes  
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; a communicator. It can be illustrated by the following simple test  
</span><br>
<span class="quotelev1">&gt; case,
</span><br>
<span class="quotelev1">&gt; in which a file is simply created with C IO, and opened with MPI-IO.
</span><br>
<span class="quotelev1">&gt; (defining or undefining MY_MPI_IO_BUG on line 5 enables/disables the
</span><br>
<span class="quotelev1">&gt; bug). From the MPI2 documentation, It seems that all processes  
</span><br>
<span class="quotelev1">&gt; should be
</span><br>
<span class="quotelev1">&gt; able to call MPI_File_get_position_shared, but if more than one  
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev1">&gt; uses it, it fails. Setting the shared pointer helps, but this should  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; be necessary, and the code still hangs (in more complete code, after
</span><br>
<span class="quotelev1">&gt; writing data).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I encounter the same problem with Open MPI 1.2.6 and MPICH2 1.0.7, so
</span><br>
<span class="quotelev1">&gt; I may have misread the documentation, but I suspect a ROMIO bug.
</span><br>
<p>Bummer.  :-(
<br>
<p>It would be best to report this directly to the ROMIO maintainers via romio-maint_at_[hidden] 
<br>
.  They lurk on this list, but they may not be paying attention to  
<br>
every mail.
<br>
<p>If you wouldn't mind, please CC me on the mail to romio-maint.  Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6362.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6360.php">Jeff Squyres: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>In reply to:</strong> <a href="6336.php">Yvan Fournier: "[OMPI users] bug in MPI_File_get_position_shared ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6553.php">Robert Latham: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6553.php">Robert Latham: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
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
