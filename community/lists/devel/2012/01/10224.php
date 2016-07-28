<?
$subject_val = "Re: [OMPI devel] GPUDirect v1 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 18 11:06:54 2012" -->
<!-- isoreceived="20120118160654" -->
<!-- sent="Wed, 18 Jan 2012 09:06:52 -0700" -->
<!-- isosent="20120118160652" -->
<!-- name="Kenneth Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GPUDirect v1 issues" -->
<!-- id="004701ccd5fb$31c82690$955873b0$_at_lloyd@wattsys.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3481B85B-D945-4958-832B-82CBAB6E3BB6_at_grs-sim.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] GPUDirect v1 issues<br>
<strong>From:</strong> Kenneth Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-18 11:06:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10225.php">Jeff Squyres: "[OMPI devel] 1.4.5rc2 now released"</a>
<li><strong>Previous message:</strong> <a href="10223.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>In reply to:</strong> <a href="10223.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10239.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is documented in
<br>
<a href="http://developer.download.nvidia.com/compute/cuda/4_0/docs/GPUDirect_Technol">http://developer.download.nvidia.com/compute/cuda/4_0/docs/GPUDirect_Technol</a>
<br>
ogy_Overview.pdf
<br>
<p>set CUDA_NIC_INTEROP=1 
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Sebastian Rinke
<br>
Sent: Wednesday, January 18, 2012 8:15 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] GPUDirect v1 issues
<br>
<p>&nbsp;
<br>
<p>Setting the environment variable fixed the problem for Open MPI with CUDA
<br>
4.0. Thanks!
<br>
<p>&nbsp;
<br>
<p>However, I'm wondering why this is not documented in the NVIDIA GPUDirect
<br>
package.
<br>
<p>&nbsp;
<br>
<p>Sebastian.
<br>
<p>&nbsp;
<br>
<p>On Jan 18, 2012, at 1:28 AM, Rolf vandeVaart wrote:
<br>
<p><p><p><p><p>Yes, the step outlined in your second bullet is no longer necessary. 
<br>
<p>&nbsp;
<br>
<p>Rolf
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Sebastian Rinke
<br>
Sent: Tuesday, January 17, 2012 5:22 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] GPUDirect v1 issues
<br>
<p>&nbsp;
<br>
<p>Thank you very much. I will try setting the environment variable and if
<br>
required also use the 4.1 RC2 version.
<br>
<p>To clarify things a little bit for me, to set up my machine with GPUDirect
<br>
v1 I did the following:
<br>
<p>* Install RHEL 5.4
<br>
* Use the kernel with GPUDirect support
<br>
* Use the MLNX OFED stack with GPUDirect support
<br>
* Install the CUDA developer driver
<br>
<p>Does using CUDA  &gt;= 4.0  make one of the above steps  redundant?
<br>
<p>I.e., RHEL or different kernel or MLNX OFED stack with GPUDirect support is
<br>
not needed any more?
<br>
<p>Sebastian.
<br>
<p>Rolf vandeVaart wrote:
<br>
<p>I ran your test case against Open MPI 1.4.2 and CUDA 4.1 RC2 and it worked
<br>
fine.  I do not have a machine right now where I can load CUDA 4.0 drivers.
<br>
Any chance you can try CUDA 4.1 RC2?  There were some improvements in the
<br>
support (you do not need to set an environment variable for one)
<br>
&nbsp;<a href="http://developer.nvidia.com/cuda-toolkit-41">http://developer.nvidia.com/cuda-toolkit-41</a>
<br>
&nbsp;
<br>
There is also a chance that setting the environment variable as outlined in
<br>
this link may help you.
<br>
<a href="http://forums.nvidia.com/index.php?showtopic=200629">http://forums.nvidia.com/index.php?showtopic=200629</a>
<br>
&nbsp;
<br>
However, I cannot explain why MVAPICH would work and Open MPI would not.  
<br>
&nbsp;
<br>
Rolf
<br>
&nbsp;
<br>
&nbsp;&nbsp;
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
<br>
On Behalf Of Sebastian Rinke
<br>
Sent: Tuesday, January 17, 2012 12:08 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] GPUDirect v1 issues
<br>
&nbsp;
<br>
I use CUDA 4.0 with MVAPICH2 1.5.1p1 and Open MPI 1.4.2.
<br>
&nbsp;
<br>
Attached you find a little test case which is based on the GPUDirect v1 test
<br>
case (mpi_pinned.c).
<br>
In that program the sender splits a message into chunks and sends them
<br>
separately to the receiver which posts the corresponding recvs. It is a kind
<br>
of
<br>
pipelining.
<br>
&nbsp;
<br>
In mpi_pinned.c:141 the offsets into the recv buffer are set.
<br>
For the correct offsets, i.e. increasing them, it blocks with Open MPI.
<br>
&nbsp;
<br>
Using line 142 instead (offset = 0) works.
<br>
&nbsp;
<br>
The tarball attached contains a Makefile where you will have to adjust
<br>
&nbsp;
<br>
* CUDA_INC_DIR
<br>
* CUDA_LIB_DIR
<br>
&nbsp;
<br>
Sebastian
<br>
&nbsp;
<br>
On Jan 17, 2012, at 4:16 PM, Kenneth A. Lloyd wrote:
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>Also, which version of MVAPICH2 did you use?
<br>
&nbsp;
<br>
I've been pouring over Rolf's OpenMPI CUDA RDMA 3 (using CUDA 4.1 r2)
<br>
vis MVAPICH-GPU on a small 3 node cluster. These are wickedly interesting.
<br>
&nbsp;
<br>
Ken
<br>
-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_open-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>mpi.org]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>On Behalf Of Rolf vandeVaart
<br>
Sent: Tuesday, January 17, 2012 7:54 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] GPUDirect v1 issues
<br>
&nbsp;
<br>
I am not aware of any issues.  Can you send me a test program and I
<br>
can try it out?
<br>
Which version of CUDA are you using?
<br>
&nbsp;
<br>
Rolf
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_open-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>mpi.org]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>On Behalf Of Sebastian Rinke
<br>
Sent: Tuesday, January 17, 2012 8:50 AM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] GPUDirect v1 issues
<br>
&nbsp;
<br>
Dear all,
<br>
&nbsp;
<br>
I'm using GPUDirect v1 with Open MPI 1.4.3 and experience blocking
<br>
MPI_SEND/RECV to block forever.
<br>
&nbsp;
<br>
For two subsequent MPI_RECV, it hangs if the recv buffer pointer of
<br>
the second recv points to somewhere, i.e. not at the beginning, in
<br>
the recv buffer (previously allocated with cudaMallocHost()).
<br>
&nbsp;
<br>
I tried the same with MVAPICH2 and did not see the problem.
<br>
&nbsp;
<br>
Does anybody know about issues with GPUDirect v1 using Open MPI?
<br>
&nbsp;
<br>
Thanks for your help,
<br>
Sebastian
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>----------------------------------------------------------------------------
<br>
-------
<br>
This email message is for the sole use of the intended recipient(s) and may
<br>
contain
<br>
confidential information.  Any unauthorized review, use, disclosure or
<br>
distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the
<br>
sender by
<br>
reply email and destroy all copies of the original message.
<br>
----------------------------------------------------------------------------
<br>
-------
<br>
&nbsp;
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
&nbsp;&nbsp;
<br>
<p>&nbsp;
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p>&nbsp;
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10224/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10225.php">Jeff Squyres: "[OMPI devel] 1.4.5rc2 now released"</a>
<li><strong>Previous message:</strong> <a href="10223.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>In reply to:</strong> <a href="10223.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10239.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
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
