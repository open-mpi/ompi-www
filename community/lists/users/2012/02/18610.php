<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 13:43:22 2012" -->
<!-- isoreceived="20120229184322" -->
<!-- sent="Wed, 29 Feb 2012 10:42:58 -0800" -->
<!-- isosent="20120229184258" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1" -->
<!-- id="CAOf_+-UX35RX+b7zK8ehyoH26JvuuHEBLCEXhaP92CcKRWSdmQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CB73B5FE.C5A3%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1<br>
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 13:42:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18611.php">Jingcha Joba: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>Previous message:</strong> <a href="18609.php">Eric Chamberland: "[OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
<li><strong>In reply to:</strong> <a href="18607.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18612.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Reply:</strong> <a href="18612.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When I ran my osu tests , I was able to get the numbers out of all the
<br>
tests except latency_mt (which was obvious, as I didnt compile open-mpi
<br>
with multi threaded support).
<br>
A good way to know if the problem is with openmpi or with your custom OFED
<br>
stack would be to use some other device like tcp instead of ib and rerun
<br>
these one sided comm tests.
<br>
On Wed, Feb 29, 2012 at 10:04 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I'm pretty sure that they are correct.  Our one-sided implementation is
</span><br>
<span class="quotelev1">&gt; buggier than I'd like (indeed, I'm in the process of rewriting most of it
</span><br>
<span class="quotelev1">&gt; as part of Open MPI's support for MPI-3's revised RDMA), so it's likely
</span><br>
<span class="quotelev1">&gt; that the bugs are in Open MPI's onesided support.  Can you try a more
</span><br>
<span class="quotelev1">&gt; recent release (something from the 1.5 tree) and see if the problem
</span><br>
<span class="quotelev1">&gt; persists?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/29/12 10:56 AM, &quot;Jeffrey Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;FWIW, I'm immediately suspicious of *any* MPI application that uses the
</span><br>
<span class="quotelev2">&gt; &gt;MPI one-sided operations (i.e., MPI_PUT and MPI_GET).  It looks like
</span><br>
<span class="quotelev2">&gt; &gt;these two OSU benchmarks are using those operations.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Is it known that these two benchmarks are correct?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Feb 29, 2012, at 11:33 AM, Venkateswara Rao Dokku wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sorry, i forgot to introduce the system.. Ours is the customized OFED
</span><br>
<span class="quotelev3">&gt; &gt;&gt;stack implemented to work on the specific hardware.. We tested the stack
</span><br>
<span class="quotelev3">&gt; &gt;&gt;with the q-perf and Intel Benchmarks(IMB-3.2.2).. they went fine.. We
</span><br>
<span class="quotelev3">&gt; &gt;&gt;want to execute the osu_benchamark3.1.1 suite on our OFED..
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, Feb 29, 2012 at 9:57 PM, Venkateswara Rao Dokku
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&lt;dvrao.584_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hiii,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I tried executing osu_benchamarks-3.1.1 suite with the openmpi-1.4.3...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I could run 10 bench-mark tests (except osu_put_bibw,osu_put_bw,osu_
</span><br>
<span class="quotelev3">&gt; &gt;&gt; get_bw,osu_latency_mt) out of 14 tests in the bench-mark suite... and
</span><br>
<span class="quotelev3">&gt; &gt;&gt;the remaining tests are hanging at some message size.. the output is
</span><br>
<span class="quotelev3">&gt; &gt;&gt;shown below
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [root_at_test2 ~]# mpirun --prefix /usr/local/ -np 2 --mca btl
</span><br>
<span class="quotelev3">&gt; &gt;&gt;openib,self,sm -H 192.168.0.175,192.168.0.174 --mca
</span><br>
<span class="quotelev3">&gt; &gt;&gt;orte_base_help_aggregate 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;/root/ramu/ofed_pkgs/osu_benchmarks-3.1.1/osu_put_bibw
</span><br>
<span class="quotelev3">&gt; &gt;&gt; failed to create doorbell file /dev/plx2_char_dev
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WARNING: No preset parameters were found for the device that Open MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; detected:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Local host:            test1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Device name:           plx2_0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Device vendor ID:      0x10b5
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Device vendor part ID: 4277
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Default device parameters will be used, which may result in lower
</span><br>
<span class="quotelev3">&gt; &gt;&gt; performance.  You can edit any of the files specified by the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btl_openib_device_param_files MCA parameter to set values for your
</span><br>
<span class="quotelev3">&gt; &gt;&gt; device.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       btl_openib_warn_no_device_params_found to 0.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; failed to create doorbell file /dev/plx2_char_dev
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WARNING: No preset parameters were found for the device that Open MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; detected:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Local host:            test2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Device name:           plx2_0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Device vendor ID:      0x10b5
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Device vendor part ID: 4277
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Default device parameters will be used, which may result in lower
</span><br>
<span class="quotelev3">&gt; &gt;&gt; performance.  You can edit any of the files specified by the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btl_openib_device_param_files MCA parameter to set values for your
</span><br>
<span class="quotelev3">&gt; &gt;&gt; device.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       btl_openib_warn_no_device_params_found to 0.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # OSU One Sided MPI_Put Bi-directional Bandwidth Test v3.1.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # Size     Bi-Bandwidth (MB/s)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev3">&gt; &gt;&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev3">&gt; &gt;&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev3">&gt; &gt;&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1                         0.00
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2                         0.00
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 4                         0.01
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 8                         0.03
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 16                        0.07
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 32                        0.15
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 64                        0.11
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 128                       0.21
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 256                       0.43
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 512                       0.88
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1024                      2.10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2048                      4.21
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 4096                      8.10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 8192                     16.19
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 16384                     8.46
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 32768                    20.34
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 65536                    39.85
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 131072                   84.22
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 262144                  142.23
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 524288                  234.83
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun noticed that process rank 0 with PID 7305 on node test2 exited
</span><br>
<span class="quotelev3">&gt; &gt;&gt;on signal 0 (Unknown signal 0).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [root_at_test2 ~]# mpirun --prefix /usr/local/ -np 2 --mca btl
</span><br>
<span class="quotelev3">&gt; &gt;&gt;openib,self,sm -H 192.168.0.175,192.168.0.174 --mca
</span><br>
<span class="quotelev3">&gt; &gt;&gt;orte_base_help_aggregate 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;/root/ramu/ofed_pkgs/osu_benchmarks-3.1.1/osu_put_bw
</span><br>
<span class="quotelev3">&gt; &gt;&gt; failed to create doorbell file /dev/plx2_char_dev
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WARNING: No preset parameters were found for the device that Open MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; detected:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Local host:            test1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Device name:           plx2_0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Device vendor ID:      0x10b5
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Device vendor part ID: 4277
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Default device parameters will be used, which may result in lower
</span><br>
<span class="quotelev3">&gt; &gt;&gt; performance.  You can edit any of the files specified by the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btl_openib_device_param_files MCA parameter to set values for your
</span><br>
<span class="quotelev3">&gt; &gt;&gt; device.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       btl_openib_warn_no_device_params_found to 0.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; failed to create doorbell file /dev/plx2_char_dev
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WARNING: No preset parameters were found for the device that Open MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; detected:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Local host:            test2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Device name:           plx2_0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Device vendor ID:      0x10b5
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Device vendor part ID: 4277
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Default device parameters will be used, which may result in lower
</span><br>
<span class="quotelev3">&gt; &gt;&gt; performance.  You can edit any of the files specified by the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btl_openib_device_param_files MCA parameter to set values for your
</span><br>
<span class="quotelev3">&gt; &gt;&gt; device.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       btl_openib_warn_no_device_params_found to 0.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # OSU One Sided MPI_Put Bandwidth Test v3.1.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev3">&gt; &gt;&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev3">&gt; &gt;&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev3">&gt; &gt;&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1                         0.02
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2                         0.05
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 4                         0.10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 8                         0.19
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 16                        0.39
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 32                        0.77
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 64                        1.53
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 128                       2.57
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 256                       4.16
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 512                       8.30
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1024                     16.62
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2048                     33.22
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 4096                     66.51
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 8192                     42.45
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 16384                    11.99
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 32768                    18.20
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 65536                    76.04
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 131072                   98.64
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 262144                  407.66
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 524288                  489.84
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun noticed that process rank 0 with PID 7314 on node test2 exited
</span><br>
<span class="quotelev3">&gt; &gt;&gt;on signal 0 (Unknown signal 0).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I even checked the logs but i couldn't see any errors...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Could you suggest a way to overcome/debug this issue..
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for the kind reply..
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; D.Venkateswara Rao,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Software Engineer,One Convergence Devices Pvt Ltd.,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jubille Hills,Hyderabad.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; D.Venkateswara Rao,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Software Engineer,One Convergence Devices Pvt Ltd.,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jubille Hills,Hyderabad.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;--
</span><br>
<span class="quotelev2">&gt; &gt;Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18610/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18611.php">Jingcha Joba: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>Previous message:</strong> <a href="18609.php">Eric Chamberland: "[OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
<li><strong>In reply to:</strong> <a href="18607.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18612.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Reply:</strong> <a href="18612.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
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
