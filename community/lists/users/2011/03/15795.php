<?
$subject_val = "[OMPI users] OpenMPI 1.2.x segfault as regular user";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  4 07:31:11 2011" -->
<!-- isoreceived="20110304123111" -->
<!-- sent="Fri, 4 Mar 2011 13:31:04 +0100" -->
<!-- isosent="20110304123104" -->
<!-- name="Youri LACAN-BARTLEY" -->
<!-- email="youri.lacan-bartley_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.2.x segfault as regular user" -->
<!-- id="9113A52E1096EB41B1F88DD94C4369D5B2EA6E_at_EXCHSRV.transvalor.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.2.x segfault as regular user<br>
<strong>From:</strong> Youri LACAN-BARTLEY (<em>youri.lacan-bartley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-04 07:31:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15796.php">vaibhav dutt: "[OMPI users] Error in executing NAS Benchmarks"</a>
<li><strong>Previous message:</strong> <a href="15794.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15895.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Reply:</strong> <a href="15895.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;
<br>
<p>This is my first post to this mailing-list so I apologize for maybe
<br>
being a little rough on the edges.
<br>
<p>I've been digging into OpenMPI for a little while now and have come
<br>
across one issue that I just can't explain and I'm sincerely hoping
<br>
someone can put me on the right track here.
<br>
<p>&nbsp;
<br>
<p>I'm using a fresh install of openmpi-1.2.7 and I systematically get a
<br>
segmentation fault at the end of my mpirun calls if I'm logged in as a
<br>
regular user.
<br>
<p>However, as soon as I switch to the root account, the segfault does not
<br>
appear.
<br>
<p>The jobs actually run to their term but I just can't find a good reason
<br>
for this to be happening and I haven't been able to reproduce the
<br>
problem on another machine.
<br>
<p>&nbsp;
<br>
<p>Any help or tips would be greatly appreciated.
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>&nbsp;
<br>
<p>Youri LACAN-BARTLEY
<br>
<p>&nbsp;
<br>
<p>Here's an example running osu_latency locally (I've &quot;blacklisted&quot; openib
<br>
to make sure it's not to blame):
<br>
<p>&nbsp;
<br>
<p>[user_at_server ~]$ mpirun --mca btl ^openib  -np 2
<br>
/opt/scripts/osu_latency-openmpi-1.2.7
<br>
<p># OSU MPI Latency Test v3.3
<br>
<p># Size            Latency (us)
<br>
<p>0                         0.76
<br>
<p>1                         0.89
<br>
<p>2                         0.89
<br>
<p>4                         0.89
<br>
<p>8                         0.89
<br>
<p>16                        0.91
<br>
<p>32                        0.91
<br>
<p>64                        0.92
<br>
<p>128                       0.96
<br>
<p>256                       1.13
<br>
<p>512                       1.31
<br>
<p>1024                      1.69
<br>
<p>2048                      2.51
<br>
<p>4096                      5.34
<br>
<p>8192                      9.16
<br>
<p>16384                    17.47
<br>
<p>32768                    31.79
<br>
<p>65536                    51.10
<br>
<p>131072                   92.41
<br>
<p>262144                  181.74
<br>
<p>524288                  512.26
<br>
<p>1048576                1238.21
<br>
<p>2097152                2280.28
<br>
<p>4194304                4616.67
<br>
<p>[server:15586] *** Process received signal ***
<br>
<p>[server:15586] Signal: Segmentation fault (11)
<br>
<p>[server:15586] Signal code: Address not mapped (1)
<br>
<p>[server:15586] Failing at address: (nil)
<br>
<p>[server:15586] [ 0] /lib64/libpthread.so.0 [0x3cd1e0eb10]
<br>
<p>[server:15586] [ 1] /lib64/libc.so.6 [0x3cd166fdc9]
<br>
<p>[server:15586] [ 2] /lib64/libc.so.6(__libc_malloc+0x167) [0x3cd1674dd7]
<br>
<p>[server:15586] [ 3] /lib64/ld-linux-x86-64.so.2(__tls_get_addr+0xb1)
<br>
[0x3cd120fe61]
<br>
<p>[server:15586] [ 4] /lib64/libselinux.so.1 [0x3cd320f5cc]
<br>
<p>[server:15586] [ 5] /lib64/libselinux.so.1 [0x3cd32045df]
<br>
<p>[server:15586] *** End of error message ***
<br>
<p>[server:15587] *** Process received signal ***
<br>
<p>[server:15587] Signal: Segmentation fault (11)
<br>
<p>[server:15587] Signal code: Address not mapped (1)
<br>
<p>[server:15587] Failing at address: (nil)
<br>
<p>[server:15587] [ 0] /lib64/libpthread.so.0 [0x3cd1e0eb10]
<br>
<p>[server:15587] [ 1] /lib64/libc.so.6 [0x3cd166fdc9]
<br>
<p>[server:15587] [ 2] /lib64/libc.so.6(__libc_malloc+0x167) [0x3cd1674dd7]
<br>
<p>[server:15587] [ 3] /lib64/ld-linux-x86-64.so.2(__tls_get_addr+0xb1)
<br>
[0x3cd120fe61]
<br>
<p>[server:15587] [ 4] /lib64/libselinux.so.1 [0x3cd320f5cc]
<br>
<p>[server:15587] [ 5] /lib64/libselinux.so.1 [0x3cd32045df]
<br>
<p>[server:15587] *** End of error message ***
<br>
<p>mpirun noticed that job rank 0 with PID 15586 on node server exited on
<br>
signal 11 (Segmentation fault).
<br>
<p>1 additional process aborted (not shown)
<br>
<p>[server:15583] *** Process received signal ***
<br>
<p>[server:15583] Signal: Segmentation fault (11)
<br>
<p>[server:15583] Signal code: Address not mapped (1)
<br>
<p>[server:15583] Failing at address: (nil)
<br>
<p>[server:15583] [ 0] /lib64/libpthread.so.0 [0x3cd1e0eb10]
<br>
<p>[server:15583] [ 1] /lib64/libc.so.6 [0x3cd166fdc9]
<br>
<p>[server:15583] [ 2] /lib64/libc.so.6(__libc_malloc+0x167) [0x3cd1674dd7]
<br>
<p>[server:15583] [ 3] /lib64/ld-linux-x86-64.so.2(__tls_get_addr+0xb1)
<br>
[0x3cd120fe61]
<br>
<p>[server:15583] [ 4] /lib64/libselinux.so.1 [0x3cd320f5cc]
<br>
<p>[server:15583] [ 5] /lib64/libselinux.so.1 [0x3cd32045df]
<br>
<p>[server:15583] *** End of error message ***
<br>
<p>Segmentation fault
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15795/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15796.php">vaibhav dutt: "[OMPI users] Error in executing NAS Benchmarks"</a>
<li><strong>Previous message:</strong> <a href="15794.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15895.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Reply:</strong> <a href="15895.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
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
