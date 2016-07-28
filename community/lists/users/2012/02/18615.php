<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 14:36:38 2012" -->
<!-- isoreceived="20120229193638" -->
<!-- sent="Wed, 29 Feb 2012 14:36:33 -0500" -->
<!-- isosent="20120229193633" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1" -->
<!-- id="27473648-770D-4AA4-B90C-4D9132EB8035_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOf_+-UxyvVDA4xy153oL3AZmvQDorgr=JU7zxoQzKBy+XDzDw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 14:36:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18616.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Previous message:</strong> <a href="18614.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="18613.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18616.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Reply:</strong> <a href="18616.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 29, 2012, at 2:30 PM, Jingcha Joba wrote:
<br>
<p><span class="quotelev1">&gt; Squyres,
</span><br>
<span class="quotelev1">&gt; I thought RDMA read and write are implemented as one side communication using get and put respectively..
</span><br>
<span class="quotelev1">&gt; Is it not so? 
</span><br>
<p>Yes and no.
<br>
<p>Keep in mind the difference between two things here:
<br>
<p>- An an underlying transport's one-sided capabilities (e.g., using InfiniBand RDMA reads/writes)
<br>
- MPI one-sided and/or two-sided message passing
<br>
<p>Most OpenFabrics-capable MPI's use OF RDMA reads and writes for sending large messages (both one and two sided).  But it's not always the case.  For example, it may not be worth it to use RDMA for short messages because of the cost of registering memory, negotiating the target address for the RDMA read/write (which may require a round-tip ACK), etc.
<br>
<p>So OF-capable MPI's basically divorce the two issues.  The underlying transport will choose the &quot;best&quot; method (whether it's a send/recv style exchange, an RDMA-stle exchange, or a mixture of the two).
<br>
<p>Make sense?
<br>
<p><p><span class="quotelev1">&gt; On Wed, Feb 29, 2012 at 10:49 AM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; FWIW, if Brian says that our one-sided stuff is a bit buggy, I believe him (because he wrote it).  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The fact is that the MPI-2 one-sided stuff is extremely complicated and somewhat open to interpretation.  In practice, I haven't seen the MPI-2 one-sided stuff used much in the wild.  The MPI-3 working group just revamped the one-sided support and generally made it much mo'betta.  Brian is re-implementing that stuff, and I believe it'll also be much mo'betta.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My point: I wouldn't worry if not all one-sided benchmarks run with OMPI.  No one uses them (yet) anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 29, 2012, at 1:42 PM, Jingcha Joba wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When I ran my osu tests , I was able to get the numbers out of all the tests except latency_mt (which was obvious, as I didnt compile open-mpi with multi threaded support).
</span><br>
<span class="quotelev2">&gt; &gt; A good way to know if the problem is with openmpi or with your custom OFED stack would be to use some other device like tcp instead of ib and rerun these one sided comm tests.
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Feb 29, 2012 at 10:04 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I'm pretty sure that they are correct.  Our one-sided implementation is
</span><br>
<span class="quotelev2">&gt; &gt; buggier than I'd like (indeed, I'm in the process of rewriting most of it
</span><br>
<span class="quotelev2">&gt; &gt; as part of Open MPI's support for MPI-3's revised RDMA), so it's likely
</span><br>
<span class="quotelev2">&gt; &gt; that the bugs are in Open MPI's onesided support.  Can you try a more
</span><br>
<span class="quotelev2">&gt; &gt; recent release (something from the 1.5 tree) and see if the problem
</span><br>
<span class="quotelev2">&gt; &gt; persists?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 2/29/12 10:56 AM, &quot;Jeffrey Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;FWIW, I'm immediately suspicious of *any* MPI application that uses the
</span><br>
<span class="quotelev3">&gt; &gt; &gt;MPI one-sided operations (i.e., MPI_PUT and MPI_GET).  It looks like
</span><br>
<span class="quotelev3">&gt; &gt; &gt;these two OSU benchmarks are using those operations.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Is it known that these two benchmarks are correct?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;On Feb 29, 2012, at 11:33 AM, Venkateswara Rao Dokku wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Sorry, i forgot to introduce the system.. Ours is the customized OFED
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;stack implemented to work on the specific hardware.. We tested the stack
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;with the q-perf and Intel Benchmarks(IMB-3.2.2).. they went fine.. We
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;want to execute the osu_benchamark3.1.1 suite on our OFED..
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Wed, Feb 29, 2012 at 9:57 PM, Venkateswara Rao Dokku
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&lt;dvrao.584_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hiii,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I tried executing osu_benchamarks-3.1.1 suite with the openmpi-1.4.3...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;I could run 10 bench-mark tests (except osu_put_bibw,osu_put_bw,osu_
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; get_bw,osu_latency_mt) out of 14 tests in the bench-mark suite... and
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;the remaining tests are hanging at some message size.. the output is
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;shown below
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [root_at_test2 ~]# mpirun --prefix /usr/local/ -np 2 --mca btl
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;openib,self,sm -H 192.168.0.175,192.168.0.174 --mca
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;orte_base_help_aggregate 0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;/root/ramu/ofed_pkgs/osu_benchmarks-3.1.1/osu_put_bibw
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; failed to create doorbell file /dev/plx2_char_dev
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; WARNING: No preset parameters were found for the device that Open MPI
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; detected:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Local host:            test1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Device name:           plx2_0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Device vendor ID:      0x10b5
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Device vendor part ID: 4277
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Default device parameters will be used, which may result in lower
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; performance.  You can edit any of the files specified by the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; btl_openib_device_param_files MCA parameter to set values for your
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; device.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       btl_openib_warn_no_device_params_found to 0.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; failed to create doorbell file /dev/plx2_char_dev
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; WARNING: No preset parameters were found for the device that Open MPI
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; detected:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Local host:            test2
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Device name:           plx2_0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Device vendor ID:      0x10b5
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Device vendor part ID: 4277
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Default device parameters will be used, which may result in lower
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; performance.  You can edit any of the files specified by the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; btl_openib_device_param_files MCA parameter to set values for your
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; device.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       btl_openib_warn_no_device_params_found to 0.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; # OSU One Sided MPI_Put Bi-directional Bandwidth Test v3.1.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; # Size     Bi-Bandwidth (MB/s)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 1                         0.00
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 2                         0.00
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 4                         0.01
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 8                         0.03
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 16                        0.07
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 32                        0.15
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 64                        0.11
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 128                       0.21
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 256                       0.43
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 512                       0.88
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 1024                      2.10
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 2048                      4.21
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 4096                      8.10
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 8192                     16.19
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 16384                     8.46
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 32768                    20.34
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 65536                    39.85
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 131072                   84.22
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 262144                  142.23
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 524288                  234.83
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mpirun noticed that process rank 0 with PID 7305 on node test2 exited
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;on signal 0 (Unknown signal 0).
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [root_at_test2 ~]# mpirun --prefix /usr/local/ -np 2 --mca btl
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;openib,self,sm -H 192.168.0.175,192.168.0.174 --mca
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;orte_base_help_aggregate 0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;/root/ramu/ofed_pkgs/osu_benchmarks-3.1.1/osu_put_bw
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; failed to create doorbell file /dev/plx2_char_dev
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; WARNING: No preset parameters were found for the device that Open MPI
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; detected:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Local host:            test1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Device name:           plx2_0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Device vendor ID:      0x10b5
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Device vendor part ID: 4277
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Default device parameters will be used, which may result in lower
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; performance.  You can edit any of the files specified by the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; btl_openib_device_param_files MCA parameter to set values for your
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; device.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       btl_openib_warn_no_device_params_found to 0.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; failed to create doorbell file /dev/plx2_char_dev
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; WARNING: No preset parameters were found for the device that Open MPI
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; detected:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Local host:            test2
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Device name:           plx2_0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Device vendor ID:      0x10b5
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Device vendor part ID: 4277
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Default device parameters will be used, which may result in lower
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; performance.  You can edit any of the files specified by the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; btl_openib_device_param_files MCA parameter to set values for your
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; device.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       btl_openib_warn_no_device_params_found to 0.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; # OSU One Sided MPI_Put Bandwidth Test v3.1.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 1                         0.02
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 2                         0.05
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 4                         0.10
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 8                         0.19
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 16                        0.39
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 32                        0.77
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 64                        1.53
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 128                       2.57
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 256                       4.16
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 512                       8.30
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 1024                     16.62
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 2048                     33.22
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 4096                     66.51
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 8192                     42.45
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 16384                    11.99
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 32768                    18.20
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 65536                    76.04
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 131072                   98.64
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 262144                  407.66
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 524288                  489.84
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mpirun noticed that process rank 0 with PID 7314 on node test2 exited
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;on signal 0 (Unknown signal 0).
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;-
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I even checked the logs but i couldn't see any errors...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Could you suggest a way to overcome/debug this issue..
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thanks for the kind reply..
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; D.Venkateswara Rao,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Software Engineer,One Convergence Devices Pvt Ltd.,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Jubille Hills,Hyderabad.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; D.Venkateswara Rao,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Software Engineer,One Convergence Devices Pvt Ltd.,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Jubille Hills,Hyderabad.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;--
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt;users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;  Brian W. Barrett
</span><br>
<span class="quotelev2">&gt; &gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt; &gt;  Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18616.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Previous message:</strong> <a href="18614.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="18613.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18616.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Reply:</strong> <a href="18616.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
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
