<?
$subject_val = "Re: [OMPI users] configure with cuda";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 27 16:32:30 2011" -->
<!-- isoreceived="20111027203230" -->
<!-- sent="Fri, 28 Oct 2011 00:32:26 +0400" -->
<!-- isosent="20111027203226" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure with cuda" -->
<!-- id="CAGR4S9HoFWmW7zvKikD6pc4CWTj4cunkHh+AT48bRdXN_3qOJg_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHXxYDjXC--UuiE0Zn=whF=Pzs1U67P+MJo6F_drB6Sho_UKOA_at_mail.gmail.com" -->
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
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-27 16:32:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17642.php">Jonathan Bishop: "[OMPI users] Spawned process do not shut down..."</a>
<li><strong>Previous message:</strong> <a href="17640.php">Durga Choudhury: "Re: [OMPI users] configure with cuda"</a>
<li><strong>In reply to:</strong> <a href="17640.php">Durga Choudhury: "Re: [OMPI users] configure with cuda"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; CUDA is an Nvidia-only technology, so it might be a bit limiting in some cases.
</span><br>
<p>I think here it's more a question of compatibility (that is ~ 1.0 /
<br>
[magnitude of effort]), rather than corporate selfishness &gt;:) Consider
<br>
memory buffers implementation - counter to CUDA in OpenCL they are
<br>
some abstract containers, not plain pointers (cl_mem). So, to combine
<br>
OpenCL with MPI, one first need to propose and adopt suitable API
<br>
design solution. At least this one is not an easy task, IMO.
<br>
<p>- D.
<br>
<p>2011/10/27 Durga Choudhury &lt;dpchoudh_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Is there any provision/future plans to add OpenCL support as well?
</span><br>
<span class="quotelev1">&gt; CUDA is an Nvidia-only technology, so it might be a bit limiting in
</span><br>
<span class="quotelev1">&gt; some cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 27, 2011 at 2:45 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Actually, that is not quite right.&#160; From the FAQ:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#147;This feature currently only exists in the trunk version of the Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; library.&#148;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You need to download and use the trunk version for this to work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, October 27, 2011 11:43 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] configure with cuda
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm pretty sure cuda support was never moved to the 1.4 series. You will,
</span><br>
<span class="quotelev2">&gt;&gt; however, find it in the 1.5 series. I suggest you get the latest tarball
</span><br>
<span class="quotelev2">&gt;&gt; from there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 27, 2011, at 12:38 PM, Peter Wells wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am attempting to configure OpenMPI 1.4.3 with cuda support on a Redhat 5
</span><br>
<span class="quotelev2">&gt;&gt; box. When I try to run configure with the following command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;./configure
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/opt/crc/sandbox/pwells2/openmpi/1.4.3/intel-12.0-cuda/ FC=ifort
</span><br>
<span class="quotelev2">&gt;&gt; F77=ifort CXX=icpc CC=icc --with-sge --disable-dlopen --enable-static
</span><br>
<span class="quotelev2">&gt;&gt; --enable-shared --disable-openib-connectx-xrc --disable-openib-rdmacm
</span><br>
<span class="quotelev2">&gt;&gt; --without-openib --with-cuda=/opt/crc/cuda/4.0/cuda
</span><br>
<span class="quotelev2">&gt;&gt; --with-cuda-libdir=/opt/crc/cuda/4.0/cuda/lib64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I receive the warning that '--with-cuda' and '--with-cuda-libdir' are
</span><br>
<span class="quotelev2">&gt;&gt; unrecognized options. According to the FAQ these options are supported in
</span><br>
<span class="quotelev2">&gt;&gt; this version of OpenMPI. I attempted the same thing with v.1.4.4 downloaded
</span><br>
<span class="quotelev2">&gt;&gt; directly from&#160;open-mpi.org&#160;with similar results. Attached are the results of
</span><br>
<span class="quotelev2">&gt;&gt; configure and make on v.1.4.3. Any help would be greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Peter Wells
</span><br>
<span class="quotelev2">&gt;&gt; HPC Intern
</span><br>
<span class="quotelev2">&gt;&gt; Center for Research Computing
</span><br>
<span class="quotelev2">&gt;&gt; University of Notre Dame
</span><br>
<span class="quotelev2">&gt;&gt; pwells2_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi-output.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________
</span><br>
<span class="quotelev2">&gt;&gt; This email message is for the sole use of the intended recipient(s) and may
</span><br>
<span class="quotelev2">&gt;&gt; contain confidential information.&#160; Any unauthorized review, use, disclosure
</span><br>
<span class="quotelev2">&gt;&gt; or distribution is prohibited.&#160; If you are not the intended recipient,
</span><br>
<span class="quotelev2">&gt;&gt; please contact the sender by reply email and destroy all copies of the
</span><br>
<span class="quotelev2">&gt;&gt; original message.
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________
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
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17642.php">Jonathan Bishop: "[OMPI users] Spawned process do not shut down..."</a>
<li><strong>Previous message:</strong> <a href="17640.php">Durga Choudhury: "Re: [OMPI users] configure with cuda"</a>
<li><strong>In reply to:</strong> <a href="17640.php">Durga Choudhury: "Re: [OMPI users] configure with cuda"</a>
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
