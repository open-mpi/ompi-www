<?
$subject_val = "Re: [OMPI users] configure with cuda";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 27 14:45:08 2011" -->
<!-- isoreceived="20111027184508" -->
<!-- sent="Thu, 27 Oct 2011 11:45:02 -0700" -->
<!-- isosent="20111027184502" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure with cuda" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F34B7C8B56A2_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FA2DD786-CB2F-440F-8258-4F5492AA6A30_at_open-mpi.org" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-27 14:45:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17640.php">Durga Choudhury: "Re: [OMPI users] configure with cuda"</a>
<li><strong>Previous message:</strong> <a href="17638.php">Ralph Castain: "Re: [OMPI users] configure with cuda"</a>
<li><strong>In reply to:</strong> <a href="17638.php">Ralph Castain: "Re: [OMPI users] configure with cuda"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17640.php">Durga Choudhury: "Re: [OMPI users] configure with cuda"</a>
<li><strong>Reply:</strong> <a href="17640.php">Durga Choudhury: "Re: [OMPI users] configure with cuda"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, that is not quite right.  From the FAQ:
<br>
<p>&quot;This feature currently only exists in the trunk version of the Open MPI library.&quot;
<br>
<p>You need to download and use the trunk version for this to work.
<br>
<p><a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
<p>Rolf
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Thursday, October 27, 2011 11:43 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] configure with cuda
<br>
<p><p>I'm pretty sure cuda support was never moved to the 1.4 series. You will, however, find it in the 1.5 series. I suggest you get the latest tarball from there.
<br>
<p><p>On Oct 27, 2011, at 12:38 PM, Peter Wells wrote:
<br>
<p><p><p>I am attempting to configure OpenMPI 1.4.3 with cuda support on a Redhat 5 box. When I try to run configure with the following command:
<br>
<p>&nbsp;./configure --prefix=/opt/crc/sandbox/pwells2/openmpi/1.4.3/intel-12.0-cuda/ FC=ifort F77=ifort CXX=icpc CC=icc --with-sge --disable-dlopen --enable-static --enable-shared --disable-openib-connectx-xrc --disable-openib-rdmacm --without-openib --with-cuda=/opt/crc/cuda/4.0/cuda --with-cuda-libdir=/opt/crc/cuda/4.0/cuda/lib64
<br>
<p>I receive the warning that '--with-cuda' and '--with-cuda-libdir' are unrecognized options. According to the FAQ these options are supported in this version of OpenMPI. I attempted the same thing with v.1.4.4 downloaded directly from open-mpi.org&lt;<a href="http://open-mpi.org">http://open-mpi.org</a>&gt; with similar results. Attached are the results of configure and make on v.1.4.3. Any help would be greatly appreciated.
<br>
<p>Peter Wells
<br>
HPC Intern
<br>
Center for Research Computing
<br>
University of Notre Dame
<br>
pwells2_at_[hidden]&lt;mailto:pwells2_at_[hidden]&gt;
<br>
&lt;ompi-output.tar.bz2&gt;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17639/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17640.php">Durga Choudhury: "Re: [OMPI users] configure with cuda"</a>
<li><strong>Previous message:</strong> <a href="17638.php">Ralph Castain: "Re: [OMPI users] configure with cuda"</a>
<li><strong>In reply to:</strong> <a href="17638.php">Ralph Castain: "Re: [OMPI users] configure with cuda"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17640.php">Durga Choudhury: "Re: [OMPI users] configure with cuda"</a>
<li><strong>Reply:</strong> <a href="17640.php">Durga Choudhury: "Re: [OMPI users] configure with cuda"</a>
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
