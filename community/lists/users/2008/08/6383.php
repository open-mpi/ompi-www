<?
$subject_val = "Re: [OMPI users] memory leak in alltoallw";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 16:47:54 2008" -->
<!-- isoreceived="20080818204754" -->
<!-- sent="Mon, 18 Aug 2008 13:47:49 -0700" -->
<!-- isosent="20080818204749" -->
<!-- name="Dave Grote" -->
<!-- email="dpgrote_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory leak in alltoallw" -->
<!-- id="48A9DFF5.5050003_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ea86ce220808181146q3e588f41g5fa7933dae1b3aed_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] memory leak in alltoallw<br>
<strong>From:</strong> Dave Grote (<em>dpgrote_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-18 16:47:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6384.php">Mostyn Lewis: "Re: [OMPI users] Continuous poll/select using btl sm (svn	1.4a1r18899)"</a>
<li><strong>Previous message:</strong> <a href="6382.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>In reply to:</strong> <a href="6379.php">Tim Mattox: "Re: [OMPI users] memory leak in alltoallw"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
<br>
Great! Thanks for the fix.<br>
&nbsp;&nbsp; Dave<br>
<br>
Tim Mattox wrote:
<blockquote
 cite="mid:ea86ce220808181146q3e588f41g5fa7933dae1b3aed@mail.gmail.com"
 type="cite">
  <pre wrap="">The fix for this bug is in the 1.2 branch as of r19360, and will be in the
upcoming 1.2.7 release.

On Sun, Aug 17, 2008 at 6:10 PM, George Bosilca <a class="moz-txt-link-rfc2396E" href="mailto:bosilca@eecs.utk.edu">&lt;bosilca@eecs.utk.edu&gt;</a> wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap="">Dave,

Thanks for your report. As you discovered we had a memory leak in the
MPI_Alltoallw. A very small one, but it was there. Basically, we didn't
release two internal arrays of data-types, used to convert from the Fortran
data-types (as supplied by the user) to their C version (as required by the
implementation of the alltoallw function).

The good news is that this should not a problem anymore. Commit 19314 fix
this for the trunk, while commit 19315 fix it for the upcoming 1.3.

 Thanks again for your report.
   george.

On Aug 7, 2008, at 1:21 AM, Dave Grote wrote:

    </pre>
    <blockquote type="cite">
      <pre wrap="">Hi,
I've been enhancing my code and have started using the nice routine
alltoallw. The code works fine except that there seems to be a memory leak
in alltoallw. I've eliminated all other possible causes and have reduced the
code down to a bare minimum. I've included fortran source code which
produces the problem. This code just keeps calling alltoallw, but with all
of the send and receive counts set to zero, so it shouldn't be doing
anything. And yet I can watch the memory continue to grow. As a sanity
check, I change the code to call alltoallv instead, and there is no memory
leak. If it helps, I am using OpenMPI on an AMD system running Chaos linux.
I tried the latest nightly build of version 1.3 from Aug 5. I run four
processors on one quad core node so it should be using shared memory
communication.
 Thanks!
   Dave

   program testalltoallw
   real(kind=8):: phi(-3:3200+3)
   real(kind=8):: phi2(-3:3200+3)
   integer(4):: izproc,ii
   integer(4):: nzprocs
   integer(4):: zrecvtypes(0:3),zsendtypes(0:3)
   integer(4):: zsendcounts(0:3),zrecvcounts(0:3)
   integer(4):: zdispls(0:3)
   integer(4):: mpierror
   include "mpif.h"
   phi = 0.

   call MPI_INIT(mpierror)
   call MPI_COMM_SIZE(MPI_COMM_WORLD,nzprocs,mpierror)
   call MPI_COMM_RANK(MPI_COMM_WORLD,izproc,mpierror)

   zsendcounts=0
   zrecvcounts=0
   zdispls=0
   zdispls=0
   zsendtypes=MPI_DOUBLE_PRECISION
   zrecvtypes=MPI_DOUBLE_PRECISION

   do ii=1,1000000000
     if (mod(ii,1000000_4) == 0) print*,"loop ",ii,izproc

     call MPI_ALLTOALLW(phi,zsendcounts,zdispls,zsendtypes,
  &amp;                     phi2,zrecvcounts,zdispls,zrecvtypes,
  &amp;                     MPI_COMM_WORLD,mpierror)

   enddo
   return
   end

_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
      </pre>
    </blockquote>
    <pre wrap="">
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

    </pre>
  </blockquote>
  <pre wrap=""><!---->


  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6384.php">Mostyn Lewis: "Re: [OMPI users] Continuous poll/select using btl sm (svn	1.4a1r18899)"</a>
<li><strong>Previous message:</strong> <a href="6382.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>In reply to:</strong> <a href="6379.php">Tim Mattox: "Re: [OMPI users] memory leak in alltoallw"</a>
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
