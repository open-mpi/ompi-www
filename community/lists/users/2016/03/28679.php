<?
$subject_val = "Re: [OMPI users] Error with MPI_Register_datarep";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 20:13:49 2016" -->
<!-- isoreceived="20160311011349" -->
<!-- sent="Fri, 11 Mar 2016 10:13:50 +0900" -->
<!-- isosent="20160311011350" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error with MPI_Register_datarep" -->
<!-- id="56E21BCE.4030200_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56E1CF5E.5060107_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error with MPI_Register_datarep<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-10 20:13:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28680.php">Éric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Previous message:</strong> <a href="28678.php">BRADLEY, PETER C          PW: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>In reply to:</strong> <a href="28677.php">&#195;&#137;ric Chamberland: "[OMPI users] Error with MPI_Register_datarep"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28680.php">Éric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Reply:</strong> <a href="28680.php">Éric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eric,
<br>
<p>I will fix the crash (fwiw, it is already fixed in v2.x and master)
<br>
<p>note this program cannot currently run &quot;as is&quot;.
<br>
by default, there are two frameworks for io : ROMIO and OMPIO.
<br>
MPI_Register_datarep does try to register the datarep into all frameworks,
<br>
and successes only if datarep was successfully registered into all 
<br>
frameworks.
<br>
<p>OMPIO does not currently support this
<br>
(and the stub is missing in v1.10 so the app does not crash)
<br>
<p>your test is successful if you blacklist ompio :
<br>
<p>mpirun --mca io ^ompio ./int64
<br>
or
<br>
OMPI_MCA_io=^romio ./int64
<br>
<p>and you do not even need a patch for that :-)
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/11/2016 4:47 AM, &#201;ric Chamberland wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a segfault while trying to use MPI_Register_datarep with 
</span><br>
<span class="quotelev1">&gt; openmpi-1.10.2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpic++ -g -o int64 int64.cc
</span><br>
<span class="quotelev1">&gt; ./int64
</span><br>
<span class="quotelev1">&gt; [melkor:24426] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [melkor:24426] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [melkor:24426] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [melkor:24426] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [melkor:24426] [ 0] /lib64/libpthread.so.0(+0xf1f0)[0x7f66cfb731f0]
</span><br>
<span class="quotelev1">&gt; [melkor:24426] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached the beginning of a test program that use this function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (and btw a totally different error occur with mpich: 
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.mpich.org/pipermail/discuss/2016-March/004586.html">http://lists.mpich.org/pipermail/discuss/2016-March/004586.html</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone help me?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28677.php">http://www.open-mpi.org/community/lists/users/2016/03/28677.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28679/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28680.php">Éric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Previous message:</strong> <a href="28678.php">BRADLEY, PETER C          PW: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>In reply to:</strong> <a href="28677.php">&#195;&#137;ric Chamberland: "[OMPI users] Error with MPI_Register_datarep"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28680.php">Éric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Reply:</strong> <a href="28680.php">Éric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
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
