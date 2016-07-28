<?
$subject_val = "[OMPI users] MPI_WAITALL error when running between two virtual machines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 15 22:57:59 2011" -->
<!-- isoreceived="20110816025759" -->
<!-- sent="Mon, 15 Aug 2011 22:57:53 -0400" -->
<!-- isosent="20110816025753" -->
<!-- name="Hoot Thompson" -->
<!-- email="hoot_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_WAITALL error when running between two virtual machines" -->
<!-- id="1313463473.16246.97.camel_at_rightknee.leftknee.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI_WAITALL error when running between two virtual machines<br>
<strong>From:</strong> Hoot Thompson (<em>hoot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-15 22:57:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17056.php">Simone Pellegrini: "[OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="17054.php">Jeff Squyres: "[OMPI users] open-mpi.org scheduled outage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17060.php">Jeff Squyres: "Re: [OMPI users] MPI_WAITALL error when running between two virtual machines"</a>
<li><strong>Reply:</strong> <a href="17060.php">Jeff Squyres: "Re: [OMPI users] MPI_WAITALL error when running between two virtual machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to run openmpi between two 11.04 virtual machines, each on
<br>
each own physical node. Each VM has three network interfaces, one is the
<br>
base (eth0) which is in the same subnet as the hypervisor bridge and the
<br>
other two are Intel SR-IOV VFs. I can ping across all the interfaces.
<br>
Bottom line is that I'm trying to run the OSU benchmarks between the two
<br>
VMs and I get the following error. It's also shown that I can run the
<br>
two processes on the same VM and it works fine.
<br>
<p><p>hoot_at_u1-1104:~$ mpirun -host 10.10.10.1,10.10.10.2 osu_bw
<br>
[u2-1104:1946] *** An error occurred in MPI_Waitall
<br>
[u2-1104:1946] *** on communicator MPI_COMM_WORLD
<br>
[u2-1104:1946] *** MPI_ERR_TRUNCATE: message truncated
<br>
[u2-1104:1946] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
# OSU MPI Bandwidth Test v3.3
<br>
# Size        Bandwidth (MB/s)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 1946 on
<br>
node 10.10.10.2 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
hoot_at_u1-1104:~$ mpirun -host 10.10.10.1,10.10.10.1 osu_bw
<br>
# OSU MPI Bandwidth Test v3.3
<br>
# Size        Bandwidth (MB/s)
<br>
1                         2.87
<br>
2                         5.88
<br>
4                        11.21
<br>
8                        22.53
<br>
16                       46.84
<br>
32                       91.84
<br>
64                      176.93
<br>
128                     278.83
<br>
256                     537.92
<br>
512                     888.02
<br>
1024                   1602.69
<br>
2048                   2757.05
<br>
4096                   2510.99
<br>
8192                   3504.59
<br>
16384                  4487.80
<br>
32768                  4097.11
<br>
65536                  4100.36
<br>
131072                 4058.36
<br>
262144                 4090.21
<br>
524288                 7335.43
<br>
1048576                7523.41
<br>
2097152                7165.27
<br>
4194304                7548.46
<br>
hoot_at_u1-1104:~$ mpirun -host 10.10.10.2,10.10.10.2 osu_bw
<br>
# OSU MPI Bandwidth Test v3.3
<br>
# Size        Bandwidth (MB/s)
<br>
1                         4.54
<br>
2                         9.20
<br>
4                        18.70
<br>
8                        37.40
<br>
16                       74.68
<br>
32                      144.03
<br>
64                      262.93
<br>
128                     523.46
<br>
256                     977.52
<br>
512                    1732.71
<br>
1024                   2981.65
<br>
2048                   4853.07
<br>
4096                   5493.16
<br>
8192                   7357.55
<br>
16384                  9300.16
<br>
32768                  4879.94
<br>
65536                  4596.26
<br>
131072                 4471.06
<br>
262144                 4559.58
<br>
524288                 4501.23
<br>
1048576                4541.63
<br>
2097152                4504.08
<br>
4194304                4493.76
<br>
hoot_at_u1-1104:~$ mpirun -host 10.10.10.2,10.10.10.2 osu_bw
<br>
# OSU MPI Bandwidth Test v3.3
<br>
# Size        Bandwidth (MB/s)
<br>
1                         4.50
<br>
2                         9.14
<br>
4                        18.51
<br>
8                        36.47
<br>
16                       74.05
<br>
32                      142.71
<br>
64                      256.99
<br>
128                     516.84
<br>
256                     972.40
<br>
512                    1709.23
<br>
1024                   2937.36
<br>
2048                   4903.72
<br>
4096                   5550.57
<br>
8192                   7297.00
<br>
16384                  8908.34
<br>
32768                  8640.99
<br>
65536                  8424.97
<br>
131072                 8059.00
<br>
262144                 4541.50
<br>
524288                 4560.11
<br>
1048576                4554.80
<br>
2097152                4527.91
<br>
4194304                4493.71
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17055/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17056.php">Simone Pellegrini: "[OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="17054.php">Jeff Squyres: "[OMPI users] open-mpi.org scheduled outage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17060.php">Jeff Squyres: "Re: [OMPI users] MPI_WAITALL error when running between two virtual machines"</a>
<li><strong>Reply:</strong> <a href="17060.php">Jeff Squyres: "Re: [OMPI users] MPI_WAITALL error when running between two virtual machines"</a>
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
