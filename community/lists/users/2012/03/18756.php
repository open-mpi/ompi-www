<?
$subject_val = "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 22:51:03 2012" -->
<!-- isoreceived="20120314025103" -->
<!-- sent="Tue, 13 Mar 2012 22:50:57 -0400" -->
<!-- isosent="20120314025057" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler" -->
<!-- id="884CB30F-7B8C-4261-8569-DBC6592707C2_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9157A89C-AFD5-43B3-9102-442F3625DFDB_at_nd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-13 22:50:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18757.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18755.php">Gustavo Correa: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18740.php">Timothy Stitt: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18761.php">Jeffrey Squyres: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<li><strong>Reply:</strong> <a href="18761.php">Jeffrey Squyres: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_TAG_UB is not a constant, it is a predefined attribute. As such it should be accessed using the attribute accessors (MPI_COMM_GET_ATTR page 229 in the MPI 2.2 standard).
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Mar 13, 2012, at 13:51 , Timothy Stitt wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I went through the procedure of compiling and running, then copied the procedure verbatim from the command line (see below). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ********
</span><br>
<span class="quotelev1">&gt; [tstitt_at_memtfe] /pscratch/tstitt &gt; more mpitag.f90
</span><br>
<span class="quotelev1">&gt; program mpitag
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   use mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   implicit none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   integer :: err
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call MPI_INIT(err)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   print *,MPI_TAG_UB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call MPI_FINALIZE(err)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; end program mpitag
</span><br>
<span class="quotelev1">&gt; [tstitt_at_memtfe] /pscratch/tstitt &gt; mpif90 --version
</span><br>
<span class="quotelev1">&gt; ifort (IFORT) 12.0.2 20110112
</span><br>
<span class="quotelev1">&gt; Copyright (C) 1985-2011 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [tstitt_at_memtfe] /pscratch/tstitt &gt; mpiexec --version
</span><br>
<span class="quotelev1">&gt; mpiexec (OpenRTE) 1.4.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; [tstitt_at_memtfe] /pscratch/tstitt &gt; mpif90 -o mpitag mpitag.f90 
</span><br>
<span class="quotelev1">&gt; [tstitt_at_memtfe] /pscratch/tstitt &gt; mpiexec -n 2 ./mpitag 
</span><br>
<span class="quotelev1">&gt;            0
</span><br>
<span class="quotelev1">&gt;            0
</span><br>
<span class="quotelev1">&gt; **********
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know if you need any further information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 13, 2012, at 1:39 PM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tim -- 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am unable to replicate this problem with a 1.4 build with icc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you share your test code?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 10, 2012, at 7:30 PM, Timothy Stitt wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was experimenting with MPI_TAG_UB in my code recently and found that its value is set to 0 in my v1.4.3 and v1.4.5 builds (these are the only builds I have available to test). 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oddly it only happens with my builds compiled with the Intel compiler. The PGI builds do produce a non-zero value. Has anyone else experienced this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; Tim Stitt PhD (User Support Manager).
</span><br>
<span class="quotelev1">&gt; Center for Research Computing | University of Notre Dame | 
</span><br>
<span class="quotelev1">&gt; P.O. Box 539, Notre Dame, IN 46556 | Phone:  574-631-5287 | Email: tstitt_at_[hidden] 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18756/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18757.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18755.php">Gustavo Correa: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18740.php">Timothy Stitt: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18761.php">Jeffrey Squyres: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<li><strong>Reply:</strong> <a href="18761.php">Jeffrey Squyres: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
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
