<?
$subject_val = "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5	an 1.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 09:50:19 2013" -->
<!-- isoreceived="20130708135019" -->
<!-- sent="Mon, 8 Jul 2013 06:50:12 -0700" -->
<!-- isosent="20130708135012" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5	an 1.7.2" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E9959AB6F_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="136E49A3-29B9-46F8-9E68-F8780247E5D0_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5	an 1.7.2<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 09:50:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22272.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>Previous message:</strong> <a href="22270.php">Ralph Castain: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22270.php">Ralph Castain: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22277.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22277.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With respect to the CUDA-aware support, Ralph is correct.  The ability to send and receive GPU buffers is in the Open MPI 1.7 series.  And incremental improvements will be added to the Open MPI 1.7 series.  CUDA 5.0 is supported.
<br>
<p><p><p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Saturday, July 06, 2013 5:14 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2
<br>
<p>There was discussion of this on a prior email thread on the OMPI devel mailing list:
<br>
<p><a href="http://www.open-mpi.org/community/lists/devel/2013/05/12354.php">http://www.open-mpi.org/community/lists/devel/2013/05/12354.php</a>
<br>
<p><p>On Jul 6, 2013, at 2:01 PM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&lt;mailto:drmichaelt7777_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>thanks,
<br>
Do you guys have any plan to support Intel Phi in the future? That is, running MPI code on the Phi cards or across the multicore and Phi, as Intel MPI does?
<br>
thanks...
<br>
Michael
<br>
<p>On Sat, Jul 6, 2013 at 2:36 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
Rolf will have to answer the question on level of support. The CUDA code is not in the 1.6 series as it was developed after that series went &quot;stable&quot;. It is in the 1.7 series, although the level of support will likely be incrementally increasing as that &quot;feature&quot; series continues to evolve.
<br>
<p><p>On Jul 6, 2013, at 12:06 PM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&lt;mailto:drmichaelt7777_at_[hidden]&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello OpenMPI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am wondering what level of support is there for CUDA and GPUdirect on OpenMPI 1.6.5 and 1.7.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I saw the ./configure --with-cuda=CUDA_DIR option in the FAQ. However, it seems that with configure v1.6.5 it was ignored.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you identify GPU memory and send messages from it directly without copying to host memory first?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or in general, what level of CUDA support is there on 1.6.5 and 1.7.2 ? Do you support SDK 5.0 and above?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers ...
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22271/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22272.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>Previous message:</strong> <a href="22270.php">Ralph Castain: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22270.php">Ralph Castain: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22277.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22277.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
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
