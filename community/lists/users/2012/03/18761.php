<?
$subject_val = "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 14 08:22:39 2012" -->
<!-- isoreceived="20120314122239" -->
<!-- sent="Wed, 14 Mar 2012 05:22:34 -0700" -->
<!-- isosent="20120314122234" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler" -->
<!-- id="2F820C14-BAE6-4523-9C6E-3FA5D16FB664_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="884CB30F-7B8C-4261-8569-DBC6592707C2_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-14 08:22:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18762.php">Timothy Stitt: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="18760.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18756.php">George Bosilca: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18762.php">Timothy Stitt: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<li><strong>Reply:</strong> <a href="18762.php">Timothy Stitt: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George is correct.  Try this:
<br>
<p>[5:21] svbu-mpi:~/mpi % cat tag-ub.f90
<br>
program mpitag
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: err
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer (KIND=MPI_ADDRESS_KIND) :: my_tag_ub
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;logical flag
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(err)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_GET_ATTR(MPI_COMM_WORLD, MPI_TAG_UB, my_tag_ub, flag, err)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (flag .eq. .true.) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, &quot;Got tag ub:&quot;, my_tag_ub
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, &quot;Couldn't find tag ub!&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(err)
<br>
end program mpitag
<br>
[5:21] svbu-mpi:~/mpi % mpif90 tag-ub.f90
<br>
[5:22] svbu-mpi:~/mpi % ./a.out 
<br>
&nbsp;Got tag ub:            2147483647
<br>
[5:22] svbu-mpi:~/mpi % 
<br>
<p><p><p>On Mar 13, 2012, at 7:50 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; MPI_TAG_UB is not a constant, it is a predefined attribute. As such it should be accessed using the attribute accessors (MPI_COMM_GET_ATTR page 229 in the MPI 2.2 standard).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 13, 2012, at 13:51 , Timothy Stitt wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I went through the procedure of compiling and running, then copied the procedure verbatim from the command line (see below). 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ********
</span><br>
<span class="quotelev2">&gt;&gt; [tstitt_at_memtfe] /pscratch/tstitt &gt; more mpitag.f90
</span><br>
<span class="quotelev2">&gt;&gt; program mpitag
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   use mpi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   implicit none
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   integer :: err
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   call MPI_INIT(err)
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;   print *,MPI_TAG_UB
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   call MPI_FINALIZE(err)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; end program mpitag
</span><br>
<span class="quotelev2">&gt;&gt; [tstitt_at_memtfe] /pscratch/tstitt &gt; mpif90 --version
</span><br>
<span class="quotelev2">&gt;&gt; ifort (IFORT) 12.0.2 20110112
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 1985-2011 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [tstitt_at_memtfe] /pscratch/tstitt &gt; mpiexec --version
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec (OpenRTE) 1.4.3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt; [tstitt_at_memtfe] /pscratch/tstitt &gt; mpif90 -o mpitag mpitag.f90 
</span><br>
<span class="quotelev2">&gt;&gt; [tstitt_at_memtfe] /pscratch/tstitt &gt; mpiexec -n 2 ./mpitag 
</span><br>
<span class="quotelev2">&gt;&gt;            0
</span><br>
<span class="quotelev2">&gt;&gt;            0
</span><br>
<span class="quotelev2">&gt;&gt; **********
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Let me know if you need any further information.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tim.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 13, 2012, at 1:39 PM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am unable to replicate this problem with a 1.4 build with icc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you share your test code?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 10, 2012, at 7:30 PM, Timothy Stitt wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was experimenting with MPI_TAG_UB in my code recently and found that its value is set to 0 in my v1.4.3 and v1.4.5 builds (these are the only builds I have available to test). 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Oddly it only happens with my builds compiled with the Intel compiler. The PGI builds do produce a non-zero value. Has anyone else experienced this?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; Tim Stitt PhD (User Support Manager).
</span><br>
<span class="quotelev2">&gt;&gt; Center for Research Computing | University of Notre Dame | 
</span><br>
<span class="quotelev2">&gt;&gt; P.O. Box 539, Notre Dame, IN 46556 | Phone:  574-631-5287 | Email: tstitt_at_[hidden] 
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
<li><strong>Next message:</strong> <a href="18762.php">Timothy Stitt: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="18760.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18756.php">George Bosilca: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18762.php">Timothy Stitt: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<li><strong>Reply:</strong> <a href="18762.php">Timothy Stitt: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
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
