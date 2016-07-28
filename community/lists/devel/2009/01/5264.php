<?
$subject_val = "Re: [OMPI devel] Fortran 90 Interface";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 17:30:06 2009" -->
<!-- isoreceived="20090121223006" -->
<!-- sent="Wed, 21 Jan 2009 17:29:58 -0500" -->
<!-- isosent="20090121222958" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran 90 Interface" -->
<!-- id="24515C06-5B6A-48B6-9073-CBA9E5290EDB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4977A0D3.6030704_at_marine.rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fortran 90 Interface<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 17:29:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5265.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5263.php">David Robertson: "[OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5263.php">David Robertson: "[OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5271.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Jan 21, 2009, at 5:25 PM, David Robertson wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having a problem with MPI_COMM_WORLD in Fortran 90. I have tried  
</span><br>
<span class="quotelev1">&gt; with OpenMPI versions 1.2.6, 1.2.8 and 1.3. Both versions are  
</span><br>
<span class="quotelev1">&gt; compiled with the PGI 8.0-2 suite. I've run the program in a  
</span><br>
<span class="quotelev1">&gt; debugger and with &quot;USE mpi&quot; and MPI_COMM_WORLD returns 'Cannot find  
</span><br>
<span class="quotelev1">&gt; name &quot;MPI_COMM_WORLD&quot;'. If I use &quot;include mpif.h&quot; results are a  
</span><br>
<span class="quotelev1">&gt; little better: MPI_COMM_WORLD returns 0 (the initial value assigned  
</span><br>
<span class="quotelev1">&gt; by mpif-common.h). The MPI functions don't seem to be affected by  
</span><br>
<span class="quotelev1">&gt; the fact that MPI_COMM_WORLD is unset or equal to 0. For example,  
</span><br>
<span class="quotelev1">&gt; the following works just fine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         CALL mpi_init (MyError)
</span><br>
<span class="quotelev1">&gt;         CALL mpi_comm_rank (MPI_COMM_WORLD, MyRank, MyError)
</span><br>
<span class="quotelev1">&gt;         CALL mpi_comm_size (MPI_COMM_WORLD, Nnodes, MyError)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; even though, in the debugger, MPI_COMM_WORLD is unset or zero every  
</span><br>
<span class="quotelev1">&gt; step of the way. However, when I try to us MPI_COMM_WORLD in a non  
</span><br>
<span class="quotelev1">&gt; MPI standard function (Netcdf-4 in this case):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; status=nf90_create_par(TRIM(ncname),                           &amp;
</span><br>
<span class="quotelev1">&gt;     &amp;                         OR(nf90_clobber,  
</span><br>
<span class="quotelev1">&gt; nf90_netcdf4),                       &amp;
</span><br>
<span class="quotelev1">&gt;     &amp;                         MPI_COMM_WORLD, info, ncid)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I get the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [daggoo:07640] *** An error occurred in MPI_Comm_dup
</span><br>
<span class="quotelev1">&gt; [daggoo:07640] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [daggoo:07640] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [daggoo:07640] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried the exact same code compiled and run with MPICH2 (also  
</span><br>
<span class="quotelev1">&gt; PGI
</span><br>
<span class="quotelev1">&gt; 8.0-2) and the problem does not occur.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I have forgotten any details needed to debug this issue, please let
</span><br>
<span class="quotelev1">&gt; me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; David Robertson
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="5265.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5263.php">David Robertson: "[OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5263.php">David Robertson: "[OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5271.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
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
