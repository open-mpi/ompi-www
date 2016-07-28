<?
$subject_val = "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 13:33:52 2013" -->
<!-- isoreceived="20130708173352" -->
<!-- sent="Mon, 8 Jul 2013 12:33:48 -0500" -->
<!-- isosent="20130708173348" -->
<!-- name="Michael Thomadakis" -->
<!-- email="drmichaelt7777_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2" -->
<!-- id="CA+OO3AVuNRzxU2-fm_859FgGEdyoHL9KY61HrAaKRMRh2Q1P-Q_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1182FB2B5679CE4B8BAD97725F014BB73281F752_at_FMSMSX104.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2<br>
<strong>From:</strong> Michael Thomadakis (<em>drmichaelt7777_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 13:33:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22283.php">Siegmar Gross: "[OMPI users] problem with MPI_Iexscan"</a>
<li><strong>Previous message:</strong> <a href="22281.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22281.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22288.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22288.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Tom, that sounds good. I will give it a try as soon as our Phi host
<br>
here host gets installed.
<br>
<p>I assume that all the prerequisite libs and bins on the Phi side are
<br>
available when we download the Phi s/w stack from Intel's site, right ?
<br>
<p>Cheers
<br>
Michael
<br>
<p><p><p><p>On Mon, Jul 8, 2013 at 12:10 PM, Elken, Tom &lt;tom.elken_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;    Do you guys have any plan to support Intel Phi in the future? That is,
</span><br>
<span class="quotelev1">&gt; running MPI code on the Phi cards or across the multicore and Phi, as Intel
</span><br>
<span class="quotelev1">&gt; MPI does?****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *[Tom] *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Michael,****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because a Xeon Phi card acts a lot like a Linux host with an x86
</span><br>
<span class="quotelev1">&gt; architecture, you can build your own Open MPI libraries to serve this
</span><br>
<span class="quotelev1">&gt; purpose.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our team has used existing (an older 1.4.3 version of) Open MPI source to
</span><br>
<span class="quotelev1">&gt; build an Open MPI for running MPI code on Intel Xeon Phi cards over Intel&#146;s
</span><br>
<span class="quotelev1">&gt; (formerly QLogic&#146;s) True Scale InfiniBand fabric, and it works quite well.
</span><br>
<span class="quotelev1">&gt; We have not released a pre-built Open MPI as part of any Intel software
</span><br>
<span class="quotelev1">&gt; release.   But I think if you have a compiler for Xeon Phi (Intel Compiler
</span><br>
<span class="quotelev1">&gt; or GCC) and an interconnect for it, you should be able to build an Open MPI
</span><br>
<span class="quotelev1">&gt; that works on Xeon Phi.  ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Tom Elken****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks...****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Jul 6, 2013 at 2:36 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:***
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf will have to answer the question on level of support. The CUDA code
</span><br>
<span class="quotelev1">&gt; is not in the 1.6 series as it was developed after that series went
</span><br>
<span class="quotelev1">&gt; &quot;stable&quot;. It is in the 1.7 series, although the level of support will
</span><br>
<span class="quotelev1">&gt; likely be incrementally increasing as that &quot;feature&quot; series continues to
</span><br>
<span class="quotelev1">&gt; evolve.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 6, 2013, at 12:06 PM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello OpenMPI,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am wondering what level of support is there for CUDA and GPUdirect on
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.6.5 and 1.7.2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I saw the ./configure --with-cuda=CUDA_DIR option in the FAQ. However,
</span><br>
<span class="quotelev1">&gt; it seems that with configure v1.6.5 it was ignored.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you identify GPU memory and send messages from it directly without
</span><br>
<span class="quotelev1">&gt; copying to host memory first?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Or in general, what level of CUDA support is there on 1.6.5 and 1.7.2 ?
</span><br>
<span class="quotelev1">&gt; Do you support SDK 5.0 and above?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers ...
</span><br>
<span class="quotelev2">&gt; &gt; Michael****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22282/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22283.php">Siegmar Gross: "[OMPI users] problem with MPI_Iexscan"</a>
<li><strong>Previous message:</strong> <a href="22281.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22281.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22288.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22288.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
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
