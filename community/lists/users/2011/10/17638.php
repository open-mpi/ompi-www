<?
$subject_val = "Re: [OMPI users] configure with cuda";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 27 14:42:56 2011" -->
<!-- isoreceived="20111027184256" -->
<!-- sent="Thu, 27 Oct 2011 12:42:47 -0600" -->
<!-- isosent="20111027184247" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure with cuda" -->
<!-- id="FA2DD786-CB2F-440F-8258-4F5492AA6A30_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4233DF0214628A4789B98A2A4B4AE62E42C15829_at_ICE-MBX-2.ice.nd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure with cuda<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-27 14:42:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17639.php">Rolf vandeVaart: "Re: [OMPI users] configure with cuda"</a>
<li><strong>Previous message:</strong> <a href="17637.php">Peter Wells: "[OMPI users] configure with cuda"</a>
<li><strong>In reply to:</strong> <a href="17637.php">Peter Wells: "[OMPI users] configure with cuda"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17639.php">Rolf vandeVaart: "Re: [OMPI users] configure with cuda"</a>
<li><strong>Reply:</strong> <a href="17639.php">Rolf vandeVaart: "Re: [OMPI users] configure with cuda"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm pretty sure cuda support was never moved to the 1.4 series. You will, however, find it in the 1.5 series. I suggest you get the latest tarball from there.
<br>
<p><p>On Oct 27, 2011, at 12:38 PM, Peter Wells wrote:
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am attempting to configure OpenMPI 1.4.3 with cuda support on a Redhat 5 box. When I try to run configure with the following command:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  ./configure --prefix=/opt/crc/sandbox/pwells2/openmpi/1.4.3/intel-12.0-cuda/ FC=ifort F77=ifort CXX=icpc CC=icc --with-sge --disable-dlopen --enable-static --enable-shared --disable-openib-connectx-xrc --disable-openib-rdmacm --without-openib --with-cuda=/opt/crc/cuda/4.0/cuda --with-cuda-libdir=/opt/crc/cuda/4.0/cuda/lib64
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I receive the warning that '--with-cuda' and '--with-cuda-libdir' are unrecognized options. According to the FAQ these options are supported in this version of OpenMPI. I attempted the same thing with v.1.4.4 downloaded directly from open-mpi.org with similar results. Attached are the results of configure and make on v.1.4.3. Any help would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Peter Wells
</span><br>
<span class="quotelev1">&gt; HPC Intern
</span><br>
<span class="quotelev1">&gt; Center for Research Computing
</span><br>
<span class="quotelev1">&gt; University of Notre Dame
</span><br>
<span class="quotelev1">&gt; pwells2_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17638/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17639.php">Rolf vandeVaart: "Re: [OMPI users] configure with cuda"</a>
<li><strong>Previous message:</strong> <a href="17637.php">Peter Wells: "[OMPI users] configure with cuda"</a>
<li><strong>In reply to:</strong> <a href="17637.php">Peter Wells: "[OMPI users] configure with cuda"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17639.php">Rolf vandeVaart: "Re: [OMPI users] configure with cuda"</a>
<li><strong>Reply:</strong> <a href="17639.php">Rolf vandeVaart: "Re: [OMPI users] configure with cuda"</a>
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
