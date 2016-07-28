<?
$subject_val = "Re: [OMPI users] RDMA GPUDirect CUDA...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 14 17:39:35 2012" -->
<!-- isoreceived="20120814213935" -->
<!-- sent="Tue, 14 Aug 2012 14:39:28 -0700" -->
<!-- isosent="20120814213928" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RDMA GPUDirect CUDA..." -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E8AD1DE5A_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDh_2s-iuD9w1CaDD0aT0FEiO+BWhvMwKd6UtdGTvJ6qaQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] RDMA GPUDirect CUDA...<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-14 17:39:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19946.php">Jeff Squyres: "Re: [OMPI users] [MARKETING] Compiling an OpenMPI application with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="19944.php">Durga Choudhury: "Re: [OMPI users] RDMA GPUDirect CUDA..."</a>
<li><strong>In reply to:</strong> <a href="19944.php">Durga Choudhury: "Re: [OMPI users] RDMA GPUDirect CUDA..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To answer the original questions, Open MPI will look at taking advantage of the RDMA CUDA when it is available.  Obviously, work needs to be done to figure out the best way to integrate into the library.  Much like there are a variety of protocols under the hood to support host transfer of data via IB, we will have to see what works  best for transferring GPU buffers.
<br>
<p>It is unclear how this will affect the send/receive latency.
<br>
<p>Lastly, the support will be for Kepler -class Quadro and Tesla devices.
<br>
<p>Rolf
<br>
<p><p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Durga Choudhury
<br>
Sent: Tuesday, August 14, 2012 4:46 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] RDMA GPUDirect CUDA...
<br>
<p>Dear OpenMPI developers
<br>
<p>I'd like to add my 2 cents that this would be a very desirable feature enhancement for me as well (and perhaps others).
<br>
<p>Best regards
<br>
Durga
<br>
<p>On Tue, Aug 14, 2012 at 4:29 PM, Zbigniew Koza &lt;zzkoza_at_[hidden]&lt;mailto:zzkoza_at_[hidden]&gt;&gt; wrote:
<br>
Hi,
<br>
<p>I've just found this information on  nVidia's plans regarding enhanced support for MPI in their CUDA toolkit:
<br>
<a href="http://developer.nvidia.com/cuda/nvidia-gpudirect">http://developer.nvidia.com/cuda/nvidia-gpudirect</a>
<br>
<p>The idea that two GPUs can talk to each other via network cards without CPU as a middleman looks very promising.
<br>
This technology is supposed to be revealed and released in September.
<br>
<p>My questions:
<br>
<p>1. Will OpenMPI include   RDMA support in its CUDA interface?
<br>
2. Any idea how much can this technology reduce the CUDA Send/Recv latency?
<br>
3. Any idea whether this technology will be available for Fermi-class Tesla devices or only for Keplers?
<br>
<p>Regards,
<br>
<p>Z Koza
<br>
<p><p><p>_______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19945/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19946.php">Jeff Squyres: "Re: [OMPI users] [MARKETING] Compiling an OpenMPI application with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="19944.php">Durga Choudhury: "Re: [OMPI users] RDMA GPUDirect CUDA..."</a>
<li><strong>In reply to:</strong> <a href="19944.php">Durga Choudhury: "Re: [OMPI users] RDMA GPUDirect CUDA..."</a>
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
