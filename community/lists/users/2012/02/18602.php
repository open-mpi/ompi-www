<?
$subject_val = "Re: [OMPI users] Question regarding osu-benchamarks 3.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 11:33:22 2012" -->
<!-- isoreceived="20120229163322" -->
<!-- sent="Wed, 29 Feb 2012 22:03:17 +0530" -->
<!-- isosent="20120229163317" -->
<!-- name="Venkateswara Rao Dokku" -->
<!-- email="dvrao.584_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question regarding osu-benchamarks 3.1.1" -->
<!-- id="CACiOAOBTANEHs3isdx8LPqbj=mWnrbLdMVjRao-csJAP_w1PhA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CACiOAODYD8zOUK9DMg2i6vBk0gP1HAmg65kjVuUK_u3Z79kCjw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question regarding osu-benchamarks 3.1.1<br>
<strong>From:</strong> Venkateswara Rao Dokku (<em>dvrao.584_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 11:33:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18603.php">Ralph Castain: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>Previous message:</strong> <a href="18601.php">Venkateswara Rao Dokku: "[OMPI users] Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>In reply to:</strong> <a href="18601.php">Venkateswara Rao Dokku: "[OMPI users] Question regarding osu-benchamarks 3.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18605.php">Jeffrey Squyres: "Re: [OMPI users] Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Reply:</strong> <a href="18605.php">Jeffrey Squyres: "Re: [OMPI users] Question regarding osu-benchamarks 3.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, i forgot to introduce the system.. Ours is the customized OFED stack
<br>
implemented to work on the specific hardware.. We tested the stack with the
<br>
q-perf and Intel Benchmarks(IMB-3.2.2).. they went fine.. We want to
<br>
execute the osu_benchamark3.1.1 suite on our OFED..
<br>
<p>On Wed, Feb 29, 2012 at 9:57 PM, Venkateswara Rao Dokku &lt;dvrao.584_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hiii,
</span><br>
<span class="quotelev1">&gt; I tried executing osu_benchamarks-3.1.1 suite with the openmpi-1.4.3... I
</span><br>
<span class="quotelev1">&gt; could run 10 bench-mark tests (except osu_put_bibw,osu_put_bw,osu_
</span><br>
<span class="quotelev1">&gt; get_bw,osu_latency_mt) out of 14 tests in the bench-mark suite... and the
</span><br>
<span class="quotelev1">&gt; remaining tests are hanging at some message size.. the output is shown below
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_test2 ~]# mpirun --prefix /usr/local/ -np 2 --mca btl
</span><br>
<span class="quotelev1">&gt; openib,self,sm -H 192.168.0.175,192.168.0.174 --mca
</span><br>
<span class="quotelev1">&gt; orte_base_help_aggregate 0
</span><br>
<span class="quotelev1">&gt; /root/ramu/ofed_pkgs/osu_benchmarks-3.1.1/osu_put_bibw
</span><br>
<span class="quotelev1">&gt; failed to create doorbell file /dev/plx2_char_dev
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: No preset parameters were found for the device that Open MPI
</span><br>
<span class="quotelev1">&gt; detected:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:            test1
</span><br>
<span class="quotelev1">&gt;   Device name:           plx2_0
</span><br>
<span class="quotelev1">&gt;   Device vendor ID:      0x10b5
</span><br>
<span class="quotelev1">&gt;   Device vendor part ID: 4277
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Default device parameters will be used, which may result in lower
</span><br>
<span class="quotelev1">&gt; performance.  You can edit any of the files specified by the
</span><br>
<span class="quotelev1">&gt; btl_openib_device_param_files MCA parameter to set values for your
</span><br>
<span class="quotelev1">&gt; device.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev1">&gt;       btl_openib_warn_no_device_params_found to 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; failed to create doorbell file /dev/plx2_char_dev
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: No preset parameters were found for the device that Open MPI
</span><br>
<span class="quotelev1">&gt; detected:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:            test2
</span><br>
<span class="quotelev1">&gt;   Device name:           plx2_0
</span><br>
<span class="quotelev1">&gt;   Device vendor ID:      0x10b5
</span><br>
<span class="quotelev1">&gt;   Device vendor part ID: 4277
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Default device parameters will be used, which may result in lower
</span><br>
<span class="quotelev1">&gt; performance.  You can edit any of the files specified by the
</span><br>
<span class="quotelev1">&gt; btl_openib_device_param_files MCA parameter to set values for your
</span><br>
<span class="quotelev1">&gt; device.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev1">&gt;       btl_openib_warn_no_device_params_found to 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev1">&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev1">&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev1">&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev1">&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev1">&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev1">&gt; # OSU One Sided MPI_Put Bi-directional Bandwidth Test v3.1.1
</span><br>
<span class="quotelev1">&gt; # Size     Bi-Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev1">&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev1">&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev1">&gt;  plx2_create_qp line: 415
</span><br>
<span class="quotelev1">&gt; 1                         0.00
</span><br>
<span class="quotelev1">&gt; 2                         0.00
</span><br>
<span class="quotelev1">&gt; 4                         0.01
</span><br>
<span class="quotelev1">&gt; 8                         0.03
</span><br>
<span class="quotelev1">&gt; 16                        0.07
</span><br>
<span class="quotelev1">&gt; 32                        0.15
</span><br>
<span class="quotelev1">&gt; 64                        0.11
</span><br>
<span class="quotelev1">&gt; 128                       0.21
</span><br>
<span class="quotelev1">&gt; 256                       0.43
</span><br>
<span class="quotelev1">&gt; 512                       0.88
</span><br>
<span class="quotelev1">&gt; 1024                      2.10
</span><br>
<span class="quotelev1">&gt; 2048                      4.21
</span><br>
<span class="quotelev1">&gt; 4096                      8.10
</span><br>
<span class="quotelev1">&gt; 8192                     16.19
</span><br>
<span class="quotelev1">&gt; 16384                     8.46
</span><br>
<span class="quotelev1">&gt; 32768                    20.34
</span><br>
<span class="quotelev1">&gt; 65536                    39.85
</span><br>
<span class="quotelev1">&gt; 131072                   84.22
</span><br>
<span class="quotelev1">&gt; 262144                  142.23
</span><br>
<span class="quotelev1">&gt; 524288                  234.83
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 7305 on node test2 exited on
</span><br>
<span class="quotelev1">&gt; signal 0 (Unknown signal 0).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_test2 ~]# mpirun --prefix /usr/local/ -np 2 --mca btl
</span><br>
<span class="quotelev1">&gt; openib,self,sm -H 192.168.0.175,192.168.0.174 --mca
</span><br>
<span class="quotelev1">&gt; orte_base_help_aggregate 0
</span><br>
<span class="quotelev1">&gt; /root/ramu/ofed_pkgs/osu_benchmarks-3.1.1/osu_put_bw
</span><br>
<span class="quotelev1">&gt; failed to create doorbell file /dev/plx2_char_dev
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: No preset parameters were found for the device that Open MPI
</span><br>
<span class="quotelev1">&gt; detected:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:            test1
</span><br>
<span class="quotelev1">&gt;   Device name:           plx2_0
</span><br>
<span class="quotelev1">&gt;   Device vendor ID:      0x10b5
</span><br>
<span class="quotelev1">&gt;   Device vendor part ID: 4277
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Default device parameters will be used, which may result in lower
</span><br>
<span class="quotelev1">&gt; performance.  You can edit any of the files specified by the
</span><br>
<span class="quotelev1">&gt; btl_openib_device_param_files MCA parameter to set values for your
</span><br>
<span class="quotelev1">&gt; device.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev1">&gt;       btl_openib_warn_no_device_params_found to 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; failed to create doorbell file /dev/plx2_char_dev
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: No preset parameters were found for the device that Open MPI
</span><br>
<span class="quotelev1">&gt; detected:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:            test2
</span><br>
<span class="quotelev1">&gt;   Device name:           plx2_0
</span><br>
<span class="quotelev1">&gt;   Device vendor ID:      0x10b5
</span><br>
<span class="quotelev1">&gt;   Device vendor part ID: 4277
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Default device parameters will be used, which may result in lower
</span><br>
<span class="quotelev1">&gt; performance.  You can edit any of the files specified by the
</span><br>
<span class="quotelev1">&gt; btl_openib_device_param_files MCA parameter to set values for your
</span><br>
<span class="quotelev1">&gt; device.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev1">&gt;       btl_openib_warn_no_device_params_found to 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev1">&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev1">&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev1">&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev1">&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev1">&gt; alloc_srq max: 512 wqe_shift: 5
</span><br>
<span class="quotelev1">&gt; # OSU One Sided MPI_Put Bandwidth Test v3.1.1
</span><br>
<span class="quotelev1">&gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev1">&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev1">&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev1">&gt; plx2_create_qp line: 415
</span><br>
<span class="quotelev1">&gt; 1                         0.02
</span><br>
<span class="quotelev1">&gt; 2                         0.05
</span><br>
<span class="quotelev1">&gt; 4                         0.10
</span><br>
<span class="quotelev1">&gt; 8                         0.19
</span><br>
<span class="quotelev1">&gt; 16                        0.39
</span><br>
<span class="quotelev1">&gt; 32                        0.77
</span><br>
<span class="quotelev1">&gt; 64                        1.53
</span><br>
<span class="quotelev1">&gt; 128                       2.57
</span><br>
<span class="quotelev1">&gt; 256                       4.16
</span><br>
<span class="quotelev1">&gt; 512                       8.30
</span><br>
<span class="quotelev1">&gt; 1024                     16.62
</span><br>
<span class="quotelev1">&gt; 2048                     33.22
</span><br>
<span class="quotelev1">&gt; 4096                     66.51
</span><br>
<span class="quotelev1">&gt; 8192                     42.45
</span><br>
<span class="quotelev1">&gt; 16384                    11.99
</span><br>
<span class="quotelev1">&gt; 32768                    18.20
</span><br>
<span class="quotelev1">&gt; 65536                    76.04
</span><br>
<span class="quotelev1">&gt; 131072                   98.64
</span><br>
<span class="quotelev1">&gt; 262144                  407.66
</span><br>
<span class="quotelev1">&gt; 524288                  489.84
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 7314 on node test2 exited on
</span><br>
<span class="quotelev1">&gt; signal 0 (Unknown signal 0).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I even checked the logs but i couldn't see any errors...
</span><br>
<span class="quotelev1">&gt; Could you suggest a way to overcome/debug this issue..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the kind reply..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev1">&gt; D.Venkateswara Rao,
</span><br>
<span class="quotelev1">&gt; Software Engineer,One Convergence Devices Pvt Ltd.,
</span><br>
<span class="quotelev1">&gt; Jubille Hills,Hyderabad.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Thanks &amp; Regards,
D.Venkateswara Rao,
Software Engineer,One Convergence Devices Pvt Ltd.,
Jubille Hills,Hyderabad.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18602/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18603.php">Ralph Castain: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>Previous message:</strong> <a href="18601.php">Venkateswara Rao Dokku: "[OMPI users] Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>In reply to:</strong> <a href="18601.php">Venkateswara Rao Dokku: "[OMPI users] Question regarding osu-benchamarks 3.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18605.php">Jeffrey Squyres: "Re: [OMPI users] Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Reply:</strong> <a href="18605.php">Jeffrey Squyres: "Re: [OMPI users] Question regarding osu-benchamarks 3.1.1"</a>
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
