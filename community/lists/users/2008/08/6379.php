<?
$subject_val = "Re: [OMPI users] memory leak in alltoallw";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 14:46:40 2008" -->
<!-- isoreceived="20080818184640" -->
<!-- sent="Mon, 18 Aug 2008 14:46:35 -0400" -->
<!-- isosent="20080818184635" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory leak in alltoallw" -->
<!-- id="ea86ce220808181146q3e588f41g5fa7933dae1b3aed_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1247907E-FF17-470F-86C1-A6FEAEFF127F_at_eecs.utk.edu" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-18 14:46:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6380.php">Jon Mason: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Previous message:</strong> <a href="6378.php">Ralph Castain: "Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<li><strong>In reply to:</strong> <a href="6374.php">George Bosilca: "Re: [OMPI users] memory leak in alltoallw"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6383.php">Dave Grote: "Re: [OMPI users] memory leak in alltoallw"</a>
<li><strong>Reply:</strong> <a href="6383.php">Dave Grote: "Re: [OMPI users] memory leak in alltoallw"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The fix for this bug is in the 1.2 branch as of r19360, and will be in the
<br>
upcoming 1.2.7 release.
<br>
<p>On Sun, Aug 17, 2008 at 6:10 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your report. As you discovered we had a memory leak in the
</span><br>
<span class="quotelev1">&gt; MPI_Alltoallw. A very small one, but it was there. Basically, we didn't
</span><br>
<span class="quotelev1">&gt; release two internal arrays of data-types, used to convert from the Fortran
</span><br>
<span class="quotelev1">&gt; data-types (as supplied by the user) to their C version (as required by the
</span><br>
<span class="quotelev1">&gt; implementation of the alltoallw function).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The good news is that this should not a problem anymore. Commit 19314 fix
</span><br>
<span class="quotelev1">&gt; this for the trunk, while commit 19315 fix it for the upcoming 1.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks again for your report.
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 7, 2008, at 1:21 AM, Dave Grote wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I've been enhancing my code and have started using the nice routine
</span><br>
<span class="quotelev2">&gt;&gt; alltoallw. The code works fine except that there seems to be a memory leak
</span><br>
<span class="quotelev2">&gt;&gt; in alltoallw. I've eliminated all other possible causes and have reduced the
</span><br>
<span class="quotelev2">&gt;&gt; code down to a bare minimum. I've included fortran source code which
</span><br>
<span class="quotelev2">&gt;&gt; produces the problem. This code just keeps calling alltoallw, but with all
</span><br>
<span class="quotelev2">&gt;&gt; of the send and receive counts set to zero, so it shouldn't be doing
</span><br>
<span class="quotelev2">&gt;&gt; anything. And yet I can watch the memory continue to grow. As a sanity
</span><br>
<span class="quotelev2">&gt;&gt; check, I change the code to call alltoallv instead, and there is no memory
</span><br>
<span class="quotelev2">&gt;&gt; leak. If it helps, I am using OpenMPI on an AMD system running Chaos linux.
</span><br>
<span class="quotelev2">&gt;&gt; I tried the latest nightly build of version 1.3 from Aug 5. I run four
</span><br>
<span class="quotelev2">&gt;&gt; processors on one quad core node so it should be using shared memory
</span><br>
<span class="quotelev2">&gt;&gt; communication.
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;    Dave
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    program testalltoallw
</span><br>
<span class="quotelev2">&gt;&gt;    real(kind=8):: phi(-3:3200+3)
</span><br>
<span class="quotelev2">&gt;&gt;    real(kind=8):: phi2(-3:3200+3)
</span><br>
<span class="quotelev2">&gt;&gt;    integer(4):: izproc,ii
</span><br>
<span class="quotelev2">&gt;&gt;    integer(4):: nzprocs
</span><br>
<span class="quotelev2">&gt;&gt;    integer(4):: zrecvtypes(0:3),zsendtypes(0:3)
</span><br>
<span class="quotelev2">&gt;&gt;    integer(4):: zsendcounts(0:3),zrecvcounts(0:3)
</span><br>
<span class="quotelev2">&gt;&gt;    integer(4):: zdispls(0:3)
</span><br>
<span class="quotelev2">&gt;&gt;    integer(4):: mpierror
</span><br>
<span class="quotelev2">&gt;&gt;    include &quot;mpif.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    phi = 0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_INIT(mpierror)
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_COMM_SIZE(MPI_COMM_WORLD,nzprocs,mpierror)
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_COMM_RANK(MPI_COMM_WORLD,izproc,mpierror)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    zsendcounts=0
</span><br>
<span class="quotelev2">&gt;&gt;    zrecvcounts=0
</span><br>
<span class="quotelev2">&gt;&gt;    zdispls=0
</span><br>
<span class="quotelev2">&gt;&gt;    zdispls=0
</span><br>
<span class="quotelev2">&gt;&gt;    zsendtypes=MPI_DOUBLE_PRECISION
</span><br>
<span class="quotelev2">&gt;&gt;    zrecvtypes=MPI_DOUBLE_PRECISION
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    do ii=1,1000000000
</span><br>
<span class="quotelev2">&gt;&gt;      if (mod(ii,1000000_4) == 0) print*,&quot;loop &quot;,ii,izproc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      call MPI_ALLTOALLW(phi,zsendcounts,zdispls,zsendtypes,
</span><br>
<span class="quotelev2">&gt;&gt;   &amp;                     phi2,zrecvcounts,zdispls,zrecvtypes,
</span><br>
<span class="quotelev2">&gt;&gt;   &amp;                     MPI_COMM_WORLD,mpierror)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    enddo
</span><br>
<span class="quotelev2">&gt;&gt;    return
</span><br>
<span class="quotelev2">&gt;&gt;    end
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
 I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6380.php">Jon Mason: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Previous message:</strong> <a href="6378.php">Ralph Castain: "Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<li><strong>In reply to:</strong> <a href="6374.php">George Bosilca: "Re: [OMPI users] memory leak in alltoallw"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6383.php">Dave Grote: "Re: [OMPI users] memory leak in alltoallw"</a>
<li><strong>Reply:</strong> <a href="6383.php">Dave Grote: "Re: [OMPI users] memory leak in alltoallw"</a>
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
