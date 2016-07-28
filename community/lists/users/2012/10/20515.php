<?
$subject_val = "Re: [OMPI users] ptmalloc2 problem with ICC 12.1 and OpenMPI 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 21 05:22:50 2012" -->
<!-- isoreceived="20121021092250" -->
<!-- sent="Sun, 21 Oct 2012 18:22:30 +0900" -->
<!-- isosent="20121021092230" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ptmalloc2 problem with ICC 12.1 and OpenMPI 1.6.1" -->
<!-- id="OFE2006067.DFEFAA85-ON49257A9E.00058859-49257A9E.003386FE_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAO2TwbmNh+yOY=f65ee9gEH-zKTtGm6560Gs-BxkCS-BB+tL=w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ptmalloc2 problem with ICC 12.1 and OpenMPI 1.6.1<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20ptmalloc2%20problem%20with%20ICC%2012.1%20and%20OpenMPI%201.6.1"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-10-21 05:22:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20516.php">Eric Chamberland: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<li><strong>Previous message:</strong> <a href="20514.php">Rayson Ho: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<li><strong>In reply to:</strong> <a href="20489.php">Roland Schulz: "[OMPI users] ptmalloc2 problem with ICC 12.1 and OpenMPI 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20542.php">tmishima_at_[hidden]: "[OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Reply:</strong> <a href="20542.php">tmishima_at_[hidden]: "[OMPI users] System CPU of openmpi-1.7rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Roland,
<br>
<p>this is a typical behavior of TSD_DATA_HACK problem I pointed out.
<br>
<p>Please see my previous post entitled &quot;-DUSE_TSD_DATA_HACK problem
<br>
in openmpi's ptmalloc2&quot;.
<br>
<p>The problem will be fixed in the future release.
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my application crashes with
</span><br>
<span class="quotelev1">&gt; /shared/openmpi-1.6.1/intel/lib/libmpi.so.1
</span><br>
(opal_memory_ptmalloc2_int_malloc+0x4b3)[0x7fbef40e1413]
<br>
<span class="quotelev1">&gt; /shared/openmpi-1.6.1/intel/lib/libmpi.so.1
</span><br>
(opal_memory_ptmalloc2_int_memalign+0x8b)[0x7fbef40e494b]
<br>
<span class="quotelev1">&gt; /shared/openmpi-1.6.1/intel/lib/libmpi.so.1
</span><br>
(opal_memory_ptmalloc2_memalign+0x70)[0x7fbef40e4500]
<br>
<span class="quotelev1">&gt; /shared/openmpi-1.6.1/intel/lib/libmpi.so.1(+0x252486)[0x7fbef40e4486]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(posix_memalign+0x5e)[0x348547a18e]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when linked against OpenMPI 1.6.1 compiled with  ICC 12.1 (20110811).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem disappears if I either use &quot;--mca mpi_leave_pinned 0&quot; or
</span><br>
<span class="quotelev1">&gt; if I link against OpenMPI 1.6.1 compiled with gcc or ICC 13.0. It
</span><br>
<span class="quotelev1">&gt; doesn't matter whether I compile with or without
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The allocation which causes the problem is inside an OpenMP region.
</span><br>
<span class="quotelev1">&gt; The problem also disappears if I run with 1 OpenMP thread only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All MPI communication is from OpenMP master (MPI_THREAD_FUNNELED).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Roland
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ORNL/UT Center for Molecular Biophysics cmb.ornl.gov
</span><br>
<span class="quotelev1">&gt; 865-241-1537, ORNL PO BOX 2008 MS6309
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20516.php">Eric Chamberland: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<li><strong>Previous message:</strong> <a href="20514.php">Rayson Ho: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<li><strong>In reply to:</strong> <a href="20489.php">Roland Schulz: "[OMPI users] ptmalloc2 problem with ICC 12.1 and OpenMPI 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20542.php">tmishima_at_[hidden]: "[OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Reply:</strong> <a href="20542.php">tmishima_at_[hidden]: "[OMPI users] System CPU of openmpi-1.7rc1"</a>
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
