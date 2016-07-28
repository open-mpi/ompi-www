<?
$subject_val = "Re: [OMPI users] Error with MPI_Register_datarep";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 22:11:36 2016" -->
<!-- isoreceived="20160311031136" -->
<!-- sent="Thu, 10 Mar 2016 22:11:33 -0500" -->
<!-- isosent="20160311031133" -->
<!-- name="&#195;&#137;ric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error with MPI_Register_datarep" -->
<!-- id="56E23765.5090508_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56E21BCE.4030200_at_rist.or.jp" -->
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
<strong>From:</strong> &#195;&#137;ric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-10 22:11:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28681.php">Gilles Gouaillardet: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Previous message:</strong> <a href="28679.php">Gilles Gouaillardet: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>In reply to:</strong> <a href="28679.php">Gilles Gouaillardet: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28681.php">Gilles Gouaillardet: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Reply:</strong> <a href="28681.php">Gilles Gouaillardet: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Gilles!
<br>
<p>it works... I will continue my tests with that command line...
<br>
<p>Until OMPIO supports this, is there a way to put a call into the code to 
<br>
disable ompio the same way --mca io ^ompio does?
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<p>Le 16-03-10 20:13, Gilles Gouaillardet a &#233;crit :
<br>
<span class="quotelev1">&gt; Eric,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will fix the crash (fwiw, it is already fixed in v2.x and master)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; note this program cannot currently run &quot;as is&quot;.
</span><br>
<span class="quotelev1">&gt; by default, there are two frameworks for io : ROMIO and OMPIO.
</span><br>
<span class="quotelev1">&gt; MPI_Register_datarep does try to register the datarep into all frameworks,
</span><br>
<span class="quotelev1">&gt; and successes only if datarep was successfully registered into all 
</span><br>
<span class="quotelev1">&gt; frameworks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPIO does not currently support this
</span><br>
<span class="quotelev1">&gt; (and the stub is missing in v1.10 so the app does not crash)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; your test is successful if you blacklist ompio :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca io ^ompio ./int64
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_io=^romio ./int64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and you do not even need a patch for that :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/11/2016 4:47 AM, &#201;ric Chamberland wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a segfault while trying to use MPI_Register_datarep with 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.10.2:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpic++ -g -o int64 int64.cc
</span><br>
<span class="quotelev2">&gt;&gt; ./int64
</span><br>
<span class="quotelev2">&gt;&gt; [melkor:24426] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [melkor:24426] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [melkor:24426] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [melkor:24426] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt;&gt; [melkor:24426] [ 0] /lib64/libpthread.so.0(+0xf1f0)[0x7f66cfb731f0]
</span><br>
<span class="quotelev2">&gt;&gt; [melkor:24426] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have attached the beginning of a test program that use this function.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (and btw a totally different error occur with mpich: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://lists.mpich.org/pipermail/discuss/2016-March/004586.html">http://lists.mpich.org/pipermail/discuss/2016-March/004586.html</a>)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can someone help me?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eric
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/03/28677.php">http://www.open-mpi.org/community/lists/users/2016/03/28677.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28680/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28681.php">Gilles Gouaillardet: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Previous message:</strong> <a href="28679.php">Gilles Gouaillardet: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>In reply to:</strong> <a href="28679.php">Gilles Gouaillardet: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28681.php">Gilles Gouaillardet: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Reply:</strong> <a href="28681.php">Gilles Gouaillardet: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
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
