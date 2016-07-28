<?
$subject_val = "[OMPI users] Question regarding osu-benchamarks 3.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 11:27:54 2012" -->
<!-- isoreceived="20120229162754" -->
<!-- sent="Wed, 29 Feb 2012 21:57:49 +0530" -->
<!-- isosent="20120229162749" -->
<!-- name="Venkateswara Rao Dokku" -->
<!-- email="dvrao.584_at_[hidden]" -->
<!-- subject="[OMPI users] Question regarding osu-benchamarks 3.1.1" -->
<!-- id="CACiOAODYD8zOUK9DMg2i6vBk0gP1HAmg65kjVuUK_u3Z79kCjw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Question regarding osu-benchamarks 3.1.1<br>
<strong>From:</strong> Venkateswara Rao Dokku (<em>dvrao.584_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 11:27:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18602.php">Venkateswara Rao Dokku: "Re: [OMPI users] Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Previous message:</strong> <a href="18600.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18602.php">Venkateswara Rao Dokku: "Re: [OMPI users] Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Reply:</strong> <a href="18602.php">Venkateswara Rao Dokku: "Re: [OMPI users] Question regarding osu-benchamarks 3.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hiii,
<br>
I tried executing osu_benchamarks-3.1.1 suite with the openmpi-1.4.3... I
<br>
could run 10 bench-mark tests (except osu_put_bibw,osu_put_bw,osu_
<br>
get_bw,osu_latency_mt) out of 14 tests in the bench-mark suite... and the
<br>
remaining tests are hanging at some message size.. the output is shown below
<br>
<p>[root_at_test2 ~]# mpirun --prefix /usr/local/ -np 2 --mca btl openib,self,sm
<br>
-H 192.168.0.175,192.168.0.174 --mca orte_base_help_aggregate 0
<br>
/root/ramu/ofed_pkgs/osu_benchmarks-3.1.1/osu_put_bibw
<br>
failed to create doorbell file /dev/plx2_char_dev
<br>
--------------------------------------------------------------------------
<br>
WARNING: No preset parameters were found for the device that Open MPI
<br>
detected:
<br>
<p>&nbsp;&nbsp;Local host:            test1
<br>
&nbsp;&nbsp;Device name:           plx2_0
<br>
&nbsp;&nbsp;Device vendor ID:      0x10b5
<br>
&nbsp;&nbsp;Device vendor part ID: 4277
<br>
<p>Default device parameters will be used, which may result in lower
<br>
performance.  You can edit any of the files specified by the
<br>
btl_openib_device_param_files MCA parameter to set values for your
<br>
device.
<br>
<p>NOTE: You can turn off this warning by setting the MCA parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_warn_no_device_params_found to 0.
<br>
--------------------------------------------------------------------------
<br>
failed to create doorbell file /dev/plx2_char_dev
<br>
--------------------------------------------------------------------------
<br>
WARNING: No preset parameters were found for the device that Open MPI
<br>
detected:
<br>
<p>&nbsp;&nbsp;Local host:            test2
<br>
&nbsp;&nbsp;Device name:           plx2_0
<br>
&nbsp;&nbsp;Device vendor ID:      0x10b5
<br>
&nbsp;&nbsp;Device vendor part ID: 4277
<br>
<p>Default device parameters will be used, which may result in lower
<br>
performance.  You can edit any of the files specified by the
<br>
btl_openib_device_param_files MCA parameter to set values for your
<br>
device.
<br>
<p>NOTE: You can turn off this warning by setting the MCA parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_warn_no_device_params_found to 0.
<br>
--------------------------------------------------------------------------
<br>
alloc_srq max: 512 wqe_shift: 5
<br>
alloc_srq max: 512 wqe_shift: 5
<br>
alloc_srq max: 512 wqe_shift: 5
<br>
alloc_srq max: 512 wqe_shift: 5
<br>
alloc_srq max: 512 wqe_shift: 5
<br>
alloc_srq max: 512 wqe_shift: 5
<br>
# OSU One Sided MPI_Put Bi-directional Bandwidth Test v3.1.1
<br>
# Size     Bi-Bandwidth (MB/s)
<br>
plx2_create_qp line: 415
<br>
plx2_create_qp line: 415
<br>
plx2_create_qp line: 415
<br>
&nbsp;plx2_create_qp line: 415
<br>
1                         0.00
<br>
2                         0.00
<br>
4                         0.01
<br>
8                         0.03
<br>
16                        0.07
<br>
32                        0.15
<br>
64                        0.11
<br>
128                       0.21
<br>
256                       0.43
<br>
512                       0.88
<br>
1024                      2.10
<br>
2048                      4.21
<br>
4096                      8.10
<br>
8192                     16.19
<br>
16384                     8.46
<br>
32768                    20.34
<br>
65536                    39.85
<br>
131072                   84.22
<br>
262144                  142.23
<br>
524288                  234.83
<br>
mpirun: killing job...
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 7305 on node test2 exited on
<br>
signal 0 (Unknown signal 0).
<br>
--------------------------------------------------------------------------
<br>
2 total processes killed (some possibly by mpirun during cleanup)
<br>
mpirun: clean termination accomplished
<br>
<p>[root_at_test2 ~]# mpirun --prefix /usr/local/ -np 2 --mca btl openib,self,sm
<br>
-H 192.168.0.175,192.168.0.174 --mca orte_base_help_aggregate 0
<br>
/root/ramu/ofed_pkgs/osu_benchmarks-3.1.1/osu_put_bw
<br>
failed to create doorbell file /dev/plx2_char_dev
<br>
--------------------------------------------------------------------------
<br>
WARNING: No preset parameters were found for the device that Open MPI
<br>
detected:
<br>
<p>&nbsp;&nbsp;Local host:            test1
<br>
&nbsp;&nbsp;Device name:           plx2_0
<br>
&nbsp;&nbsp;Device vendor ID:      0x10b5
<br>
&nbsp;&nbsp;Device vendor part ID: 4277
<br>
<p>Default device parameters will be used, which may result in lower
<br>
performance.  You can edit any of the files specified by the
<br>
btl_openib_device_param_files MCA parameter to set values for your
<br>
device.
<br>
<p>NOTE: You can turn off this warning by setting the MCA parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_warn_no_device_params_found to 0.
<br>
--------------------------------------------------------------------------
<br>
failed to create doorbell file /dev/plx2_char_dev
<br>
--------------------------------------------------------------------------
<br>
WARNING: No preset parameters were found for the device that Open MPI
<br>
detected:
<br>
<p>&nbsp;&nbsp;Local host:            test2
<br>
&nbsp;&nbsp;Device name:           plx2_0
<br>
&nbsp;&nbsp;Device vendor ID:      0x10b5
<br>
&nbsp;&nbsp;Device vendor part ID: 4277
<br>
<p>Default device parameters will be used, which may result in lower
<br>
performance.  You can edit any of the files specified by the
<br>
btl_openib_device_param_files MCA parameter to set values for your
<br>
device.
<br>
<p>NOTE: You can turn off this warning by setting the MCA parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_warn_no_device_params_found to 0.
<br>
--------------------------------------------------------------------------
<br>
alloc_srq max: 512 wqe_shift: 5
<br>
alloc_srq max: 512 wqe_shift: 5
<br>
alloc_srq max: 512 wqe_shift: 5
<br>
alloc_srq max: 512 wqe_shift: 5
<br>
alloc_srq max: 512 wqe_shift: 5
<br>
alloc_srq max: 512 wqe_shift: 5
<br>
# OSU One Sided MPI_Put Bandwidth Test v3.1.1
<br>
# Size        Bandwidth (MB/s)
<br>
plx2_create_qp line: 415
<br>
plx2_create_qp line: 415
<br>
plx2_create_qp line: 415
<br>
plx2_create_qp line: 415
<br>
1                         0.02
<br>
2                         0.05
<br>
4                         0.10
<br>
8                         0.19
<br>
16                        0.39
<br>
32                        0.77
<br>
64                        1.53
<br>
128                       2.57
<br>
256                       4.16
<br>
512                       8.30
<br>
1024                     16.62
<br>
2048                     33.22
<br>
4096                     66.51
<br>
8192                     42.45
<br>
16384                    11.99
<br>
32768                    18.20
<br>
65536                    76.04
<br>
131072                   98.64
<br>
262144                  407.66
<br>
524288                  489.84
<br>
mpirun: killing job...
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 7314 on node test2 exited on
<br>
signal 0 (Unknown signal 0).
<br>
--------------------------------------------------------------------------
<br>
2 total processes killed (some possibly by mpirun during cleanup)
<br>
mpirun: clean termination accomplished
<br>
<p>I even checked the logs but i couldn't see any errors...
<br>
Could you suggest a way to overcome/debug this issue..
<br>
<p>Thanks for the kind reply..
<br>
<p><p><pre>
-- 
Thanks &amp; Regards,
D.Venkateswara Rao,
Software Engineer,One Convergence Devices Pvt Ltd.,
Jubille Hills,Hyderabad.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18601/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18602.php">Venkateswara Rao Dokku: "Re: [OMPI users] Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Previous message:</strong> <a href="18600.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18602.php">Venkateswara Rao Dokku: "Re: [OMPI users] Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Reply:</strong> <a href="18602.php">Venkateswara Rao Dokku: "Re: [OMPI users] Question regarding osu-benchamarks 3.1.1"</a>
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
