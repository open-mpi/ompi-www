<?
$subject_val = "Re: [OMPI users] memory leak in alltoallw";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 17 18:10:31 2008" -->
<!-- isoreceived="20080817221031" -->
<!-- sent="Mon, 18 Aug 2008 00:10:14 +0200" -->
<!-- isosent="20080817221014" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory leak in alltoallw" -->
<!-- id="1247907E-FF17-470F-86C1-A6FEAEFF127F_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="489A31FC.4040505_at_lbl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-17 18:10:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6375.php">George Bosilca: "Re: [OMPI users] Continuous poll/select using btl sm (svn 1.4a1r18899)"</a>
<li><strong>Previous message:</strong> <a href="6373.php">George Bosilca: "Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<li><strong>In reply to:</strong> <a href="6284.php">Dave Grote: "[OMPI users] memory leak in alltoallw"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6379.php">Tim Mattox: "Re: [OMPI users] memory leak in alltoallw"</a>
<li><strong>Reply:</strong> <a href="6379.php">Tim Mattox: "Re: [OMPI users] memory leak in alltoallw"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>Thanks for your report. As you discovered we had a memory leak in the  
<br>
MPI_Alltoallw. A very small one, but it was there. Basically, we  
<br>
didn't release two internal arrays of data-types, used to convert from  
<br>
the Fortran data-types (as supplied by the user) to their C version  
<br>
(as required by the implementation of the alltoallw function).
<br>
<p>The good news is that this should not a problem anymore. Commit 19314  
<br>
fix this for the trunk, while commit 19315 fix it for the upcoming 1.3.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks again for your report.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 7, 2008, at 1:21 AM, Dave Grote wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I've been enhancing my code and have started using the nice routine  
</span><br>
<span class="quotelev1">&gt; alltoallw. The code works fine except that there seems to be a  
</span><br>
<span class="quotelev1">&gt; memory leak in alltoallw. I've eliminated all other possible causes  
</span><br>
<span class="quotelev1">&gt; and have reduced the code down to a bare minimum. I've included  
</span><br>
<span class="quotelev1">&gt; fortran source code which produces the problem. This code just keeps  
</span><br>
<span class="quotelev1">&gt; calling alltoallw, but with all of the send and receive counts set  
</span><br>
<span class="quotelev1">&gt; to zero, so it shouldn't be doing anything. And yet I can watch the  
</span><br>
<span class="quotelev1">&gt; memory continue to grow. As a sanity check, I change the code to  
</span><br>
<span class="quotelev1">&gt; call alltoallv instead, and there is no memory leak. If it helps, I  
</span><br>
<span class="quotelev1">&gt; am using OpenMPI on an AMD system running Chaos linux. I tried the  
</span><br>
<span class="quotelev1">&gt; latest nightly build of version 1.3 from Aug 5. I run four  
</span><br>
<span class="quotelev1">&gt; processors on one quad core node so it should be using shared memory  
</span><br>
<span class="quotelev1">&gt; communication.
</span><br>
<span class="quotelev1">&gt;  Thanks!
</span><br>
<span class="quotelev1">&gt;     Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     program testalltoallw
</span><br>
<span class="quotelev1">&gt;     real(kind=8):: phi(-3:3200+3)
</span><br>
<span class="quotelev1">&gt;     real(kind=8):: phi2(-3:3200+3)
</span><br>
<span class="quotelev1">&gt;     integer(4):: izproc,ii
</span><br>
<span class="quotelev1">&gt;     integer(4):: nzprocs
</span><br>
<span class="quotelev1">&gt;     integer(4):: zrecvtypes(0:3),zsendtypes(0:3)
</span><br>
<span class="quotelev1">&gt;     integer(4):: zsendcounts(0:3),zrecvcounts(0:3)
</span><br>
<span class="quotelev1">&gt;     integer(4):: zdispls(0:3)
</span><br>
<span class="quotelev1">&gt;     integer(4):: mpierror
</span><br>
<span class="quotelev1">&gt;     include &quot;mpif.h&quot;
</span><br>
<span class="quotelev1">&gt;     phi = 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     call MPI_INIT(mpierror)
</span><br>
<span class="quotelev1">&gt;     call MPI_COMM_SIZE(MPI_COMM_WORLD,nzprocs,mpierror)
</span><br>
<span class="quotelev1">&gt;     call MPI_COMM_RANK(MPI_COMM_WORLD,izproc,mpierror)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     zsendcounts=0
</span><br>
<span class="quotelev1">&gt;     zrecvcounts=0
</span><br>
<span class="quotelev1">&gt;     zdispls=0
</span><br>
<span class="quotelev1">&gt;     zdispls=0
</span><br>
<span class="quotelev1">&gt;     zsendtypes=MPI_DOUBLE_PRECISION
</span><br>
<span class="quotelev1">&gt;     zrecvtypes=MPI_DOUBLE_PRECISION
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     do ii=1,1000000000
</span><br>
<span class="quotelev1">&gt;       if (mod(ii,1000000_4) == 0) print*,&quot;loop &quot;,ii,izproc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       call MPI_ALLTOALLW(phi,zsendcounts,zdispls,zsendtypes,
</span><br>
<span class="quotelev1">&gt;    &amp;                     phi2,zrecvcounts,zdispls,zrecvtypes,
</span><br>
<span class="quotelev1">&gt;    &amp;                     MPI_COMM_WORLD,mpierror)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     enddo
</span><br>
<span class="quotelev1">&gt;     return
</span><br>
<span class="quotelev1">&gt;     end
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6374/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6375.php">George Bosilca: "Re: [OMPI users] Continuous poll/select using btl sm (svn 1.4a1r18899)"</a>
<li><strong>Previous message:</strong> <a href="6373.php">George Bosilca: "Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<li><strong>In reply to:</strong> <a href="6284.php">Dave Grote: "[OMPI users] memory leak in alltoallw"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6379.php">Tim Mattox: "Re: [OMPI users] memory leak in alltoallw"</a>
<li><strong>Reply:</strong> <a href="6379.php">Tim Mattox: "Re: [OMPI users] memory leak in alltoallw"</a>
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
