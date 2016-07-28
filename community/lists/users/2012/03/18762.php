<?
$subject_val = "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 14 10:13:43 2012" -->
<!-- isoreceived="20120314141343" -->
<!-- sent="Wed, 14 Mar 2012 10:13:37 -0400" -->
<!-- isosent="20120314141337" -->
<!-- name="Timothy Stitt" -->
<!-- email="Timothy.Stitt.9_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler" -->
<!-- id="106230C3-6CF5-4C18-8910-D2EC76F77F93_at_nd.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2F820C14-BAE6-4523-9C6E-3FA5D16FB664_at_cisco.com" -->
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
<strong>From:</strong> Timothy Stitt (<em>Timothy.Stitt.9_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-14 10:13:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18763.php">Shamis, Pavel: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Previous message:</strong> <a href="18761.php">Jeffrey Squyres: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<li><strong>In reply to:</strong> <a href="18761.php">Jeffrey Squyres: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks guys for the advice. I had initially compiled my code with the PGI compiler which actually returned a large, non-zero, non-negative output, which is why I thought it was valid to use it directly in my code. I'll make sure to use the correct procedure now for querying that 'attribute'.
<br>
<p>Best,
<br>
<p>Tim.
<br>
<p>On Mar 14, 2012, at 8:22 AM, Jeffrey Squyres wrote:
<br>
<p>George is correct.  Try this:
<br>
<p>[5:21] svbu-mpi:~/mpi % cat tag-ub.f90
<br>
program mpitag
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: err
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer (KIND=MPI_ADDRESS_KIND) :: my_tag_ub
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;logical flag
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(err)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_GET_ATTR(MPI_COMM_WORLD, MPI_TAG_UB, my_tag_ub, flag, err)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (flag .eq. .true.) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, &quot;Got tag ub:&quot;, my_tag_ub
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, &quot;Couldn't find tag ub!&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(err)
<br>
end program mpitag
<br>
[5:21] svbu-mpi:~/mpi % mpif90 tag-ub.f90
<br>
[5:22] svbu-mpi:~/mpi % ./a.out
<br>
Got tag ub:            2147483647
<br>
[5:22] svbu-mpi:~/mpi %
<br>
<p><p><p>On Mar 13, 2012, at 7:50 PM, George Bosilca wrote:
<br>
<p>MPI_TAG_UB is not a constant, it is a predefined attribute. As such it should be accessed using the attribute accessors (MPI_COMM_GET_ATTR page 229 in the MPI 2.2 standard).
<br>
<p>&nbsp;george.
<br>
<p>On Mar 13, 2012, at 13:51 , Timothy Stitt wrote:
<br>
<p>Hi Jeff,
<br>
<p>I went through the procedure of compiling and running, then copied the procedure verbatim from the command line (see below).
<br>
<p>********
<br>
[tstitt_at_memtfe] /pscratch/tstitt &gt; more mpitag.f90
<br>
program mpitag
<br>
<p>&nbsp;use mpi
<br>
<p>&nbsp;implicit none
<br>
<p>&nbsp;integer :: err
<br>
<p>&nbsp;call MPI_INIT(err)
<br>
<p>&nbsp;print *,MPI_TAG_UB
<br>
<p>&nbsp;call MPI_FINALIZE(err)
<br>
<p>end program mpitag
<br>
[tstitt_at_memtfe] /pscratch/tstitt &gt; mpif90 --version
<br>
ifort (IFORT) 12.0.2 20110112
<br>
Copyright (C) 1985-2011 Intel Corporation.  All rights reserved.
<br>
<p>[tstitt_at_memtfe] /pscratch/tstitt &gt; mpiexec --version
<br>
mpiexec (OpenRTE) 1.4.3
<br>
<p>Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
[tstitt_at_memtfe] /pscratch/tstitt &gt; mpif90 -o mpitag mpitag.f90
<br>
[tstitt_at_memtfe] /pscratch/tstitt &gt; mpiexec -n 2 ./mpitag
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0
<br>
**********
<br>
<p>Let me know if you need any further information.
<br>
<p>Thanks,
<br>
<p>Tim.
<br>
<p>On Mar 13, 2012, at 1:39 PM, Jeffrey Squyres wrote:
<br>
<p>Tim --
<br>
<p>I am unable to replicate this problem with a 1.4 build with icc.
<br>
<p>Can you share your test code?
<br>
<p><p>On Mar 10, 2012, at 7:30 PM, Timothy Stitt wrote:
<br>
<p>Hi all,
<br>
<p>I was experimenting with MPI_TAG_UB in my code recently and found that its value is set to 0 in my v1.4.3 and v1.4.5 builds (these are the only builds I have available to test).
<br>
<p>Oddly it only happens with my builds compiled with the Intel compiler. The PGI builds do produce a non-zero value. Has anyone else experienced this?
<br>
<p>Regards,
<br>
<p>Tim.
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Tim Stitt PhD (User Support Manager).
Center for Research Computing | University of Notre Dame |
P.O. Box 539, Notre Dame, IN 46556 | Phone:  574-631-5287 | Email: tstitt_at_[hidden]&lt;mailto:tstitt_at_[hidden]&gt;
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Tim Stitt PhD (User Support Manager).
Center for Research Computing | University of Notre Dame |
P.O. Box 539, Notre Dame, IN 46556 | Phone:  574-631-5287 | Email: tstitt_at_[hidden]&lt;mailto:tstitt_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18762/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18763.php">Shamis, Pavel: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Previous message:</strong> <a href="18761.php">Jeffrey Squyres: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<li><strong>In reply to:</strong> <a href="18761.php">Jeffrey Squyres: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
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
