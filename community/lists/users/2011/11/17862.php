<?
$subject_val = "Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 29 13:57:35 2011" -->
<!-- isoreceived="20111129185735" -->
<!-- sent="Tue, 29 Nov 2011 13:57:29 -0500" -->
<!-- isosent="20111129185729" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE" -->
<!-- id="292A55BF-E8AA-477C-A30D-ED384A4E457D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A0AF0895-FBA2-4435-B14F-A2BD48124C9E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-29 13:57:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17863.php">Rob Latham: "Re: [OMPI users] MPI_File_Write"</a>
<li><strong>Previous message:</strong> <a href="17861.php">Jeff Squyres: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>In reply to:</strong> <a href="17852.php">Jeff Squyres: "Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ask and you shall receive!
<br>
<p>I got a tip from the MPICH2 guys about how they handle this stuff; it seems that the magic gfortran compiler flag is -Wl,-commons,use_dylibs.  Thanks Dave Goodell!
<br>
<p>I will commit this to the OMPI SVN trunk tonight (because it's an autotools-level change, which we try not to do during the workday), and will file tickets to get this change over to v1.4 and v1.5.
<br>
<p>While you're waiting for a release with this fix, you can either manually add -Wl,-commons,use_dylibs to your mpif77/mpif90 command lines, or edit your $prefix/share/ompi/mpif77-wrapper-data.txt file (and mpif90-wrapper-data.txt file) to set the &quot;compiler_flags&quot; line to include -Wl,-commons,use_dylibs.  For example:
<br>
<p>compiler_flags=-Wl,-commons,use_dylibs
<br>
<p>Woo hoo!
<br>
<p><p><p>On Nov 28, 2011, at 8:11 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Unfortunately, this is a known issue.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have not found a reliable way to deduce that MPI_IN_PLACE has been passed as the parameter to MPI_REDUCE (and friends) on OS X.  There's something very strange going on with regards to the Fortran compiler and common block variables (which is where we have MPI_IN_PLACE and other sentinel-value MPI constants defined).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have a very old ticket open on this issue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/1982">https://svn.open-mpi.org/trac/ompi/ticket/1982</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions would be welcome.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 23, 2011, at 1:20 PM, Arjen van Elteren wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear All,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm running a complex program with a number of MPI_REDUCE calls, every call uses MPI_IN_PLACE as the first parameter (the send buffer).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm currently testing this program on Mac 10.6 with macports installed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately all MPI_REDUCE calls with MPI_IN_PLACE, seem to fail. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've pinpointed the problem to the MPI_IN_PLACE parameter location, it seems to matter if it is the first or the second parameter to the MPI_REDUCE call.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is specific for fortran, in C the sequence does not matter!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A simple program to test this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PROGRAM MAIN
</span><br>
<span class="quotelev2">&gt;&gt;  implicit none
</span><br>
<span class="quotelev2">&gt;&gt;  include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;  integer :: x(10)
</span><br>
<span class="quotelev2">&gt;&gt;  integer :: provided,ioerror
</span><br>
<span class="quotelev2">&gt;&gt;  call MPI_INIT(ioerror)
</span><br>
<span class="quotelev2">&gt;&gt;  x = 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  print *, x
</span><br>
<span class="quotelev2">&gt;&gt;  call MPI_REDUCE(x, MPI_IN_PLACE,10, MPI_INTEGER, MPI_SUM, 0,MPI_COMM_WORLD,  ioerror)
</span><br>
<span class="quotelev2">&gt;&gt;  print *, x
</span><br>
<span class="quotelev2">&gt;&gt;  call MPI_REDUCE(MPI_IN_PLACE, x,10, MPI_INTEGER, MPI_SUM, 0,MPI_COMM_WORLD,  ioerror)
</span><br>
<span class="quotelev2">&gt;&gt;  print *, x
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  call MPI_FINALIZE(ioerror)
</span><br>
<span class="quotelev2">&gt;&gt; END PROGRAM
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I run this on one process (mpiexec ./a.out)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm running with openmpi version 1.5.4 (macports)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The openmpi is compiled with gfortran 4.4.6
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is this a bug in openmpi or is my understanding of MPI_REDUCE wrong?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Arjen
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="17863.php">Rob Latham: "Re: [OMPI users] MPI_File_Write"</a>
<li><strong>Previous message:</strong> <a href="17861.php">Jeff Squyres: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>In reply to:</strong> <a href="17852.php">Jeff Squyres: "Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE"</a>
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
