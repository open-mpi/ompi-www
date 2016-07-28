<?
$subject_val = "Re: [OMPI users] MPI_WAITALL error when running between two virtual machines";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 09:01:43 2011" -->
<!-- isoreceived="20110816130143" -->
<!-- sent="Tue, 16 Aug 2011 09:01:38 -0400" -->
<!-- isosent="20110816130138" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_WAITALL error when running between two virtual machines" -->
<!-- id="384803F1-A274-414A-93B9-FD6DDC290CA3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1313463473.16246.97.camel_at_rightknee.leftknee.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_WAITALL error when running between two virtual machines<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-16 09:01:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17061.php">Hoot Thompson: "Re: [OMPI users] MPI_WAITALL error when running between two virtual machines"</a>
<li><strong>Previous message:</strong> <a href="17059.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="17055.php">Hoot Thompson: "[OMPI users] MPI_WAITALL error when running between two virtual machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17061.php">Hoot Thompson: "Re: [OMPI users] MPI_WAITALL error when running between two virtual machines"</a>
<li><strong>Reply:</strong> <a href="17061.php">Hoot Thompson: "Re: [OMPI users] MPI_WAITALL error when running between two virtual machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you able to run other TCP-based applications between the two VM's, such as the TCP version of NetPIPE?
<br>
<p><p>On Aug 15, 2011, at 10:57 PM, Hoot Thompson wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to run openmpi between two 11.04 virtual machines, each on each own physical node. Each VM has three network interfaces, one is the base (eth0) which is in the same subnet as the hypervisor bridge and the other two are Intel SR-IOV VFs. I can ping across all the interfaces. Bottom line is that I'm trying to run the OSU benchmarks between the two VMs and I get the following error. It's also shown that I can run the two processes on the same VM and it works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hoot_at_u1-1104:~$ mpirun -host 10.10.10.1,10.10.10.2 osu_bw
</span><br>
<span class="quotelev1">&gt; [u2-1104:1946] *** An error occurred in MPI_Waitall
</span><br>
<span class="quotelev1">&gt; [u2-1104:1946] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [u2-1104:1946] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; [u2-1104:1946] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; # OSU MPI Bandwidth Test v3.3
</span><br>
<span class="quotelev1">&gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 1946 on
</span><br>
<span class="quotelev1">&gt; node 10.10.10.2 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; hoot_at_u1-1104:~$ mpirun -host 10.10.10.1,10.10.10.1 osu_bw
</span><br>
<span class="quotelev1">&gt; # OSU MPI Bandwidth Test v3.3
</span><br>
<span class="quotelev1">&gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 1                         2.87
</span><br>
<span class="quotelev1">&gt; 2                         5.88
</span><br>
<span class="quotelev1">&gt; 4                        11.21
</span><br>
<span class="quotelev1">&gt; 8                        22.53
</span><br>
<span class="quotelev1">&gt; 16                       46.84
</span><br>
<span class="quotelev1">&gt; 32                       91.84
</span><br>
<span class="quotelev1">&gt; 64                      176.93
</span><br>
<span class="quotelev1">&gt; 128                     278.83
</span><br>
<span class="quotelev1">&gt; 256                     537.92
</span><br>
<span class="quotelev1">&gt; 512                     888.02
</span><br>
<span class="quotelev1">&gt; 1024                   1602.69
</span><br>
<span class="quotelev1">&gt; 2048                   2757.05
</span><br>
<span class="quotelev1">&gt; 4096                   2510.99
</span><br>
<span class="quotelev1">&gt; 8192                   3504.59
</span><br>
<span class="quotelev1">&gt; 16384                  4487.80
</span><br>
<span class="quotelev1">&gt; 32768                  4097.11
</span><br>
<span class="quotelev1">&gt; 65536                  4100.36
</span><br>
<span class="quotelev1">&gt; 131072                 4058.36
</span><br>
<span class="quotelev1">&gt; 262144                 4090.21
</span><br>
<span class="quotelev1">&gt; 524288                 7335.43
</span><br>
<span class="quotelev1">&gt; 1048576                7523.41
</span><br>
<span class="quotelev1">&gt; 2097152                7165.27
</span><br>
<span class="quotelev1">&gt; 4194304                7548.46
</span><br>
<span class="quotelev1">&gt; hoot_at_u1-1104:~$ mpirun -host 10.10.10.2,10.10.10.2 osu_bw
</span><br>
<span class="quotelev1">&gt; # OSU MPI Bandwidth Test v3.3
</span><br>
<span class="quotelev1">&gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 1                         4.54
</span><br>
<span class="quotelev1">&gt; 2                         9.20
</span><br>
<span class="quotelev1">&gt; 4                        18.70
</span><br>
<span class="quotelev1">&gt; 8                        37.40
</span><br>
<span class="quotelev1">&gt; 16                       74.68
</span><br>
<span class="quotelev1">&gt; 32                      144.03
</span><br>
<span class="quotelev1">&gt; 64                      262.93
</span><br>
<span class="quotelev1">&gt; 128                     523.46
</span><br>
<span class="quotelev1">&gt; 256                     977.52
</span><br>
<span class="quotelev1">&gt; 512                    1732.71
</span><br>
<span class="quotelev1">&gt; 1024                   2981.65
</span><br>
<span class="quotelev1">&gt; 2048                   4853.07
</span><br>
<span class="quotelev1">&gt; 4096                   5493.16
</span><br>
<span class="quotelev1">&gt; 8192                   7357.55
</span><br>
<span class="quotelev1">&gt; 16384                  9300.16
</span><br>
<span class="quotelev1">&gt; 32768                  4879.94
</span><br>
<span class="quotelev1">&gt; 65536                  4596.26
</span><br>
<span class="quotelev1">&gt; 131072                 4471.06
</span><br>
<span class="quotelev1">&gt; 262144                 4559.58
</span><br>
<span class="quotelev1">&gt; 524288                 4501.23
</span><br>
<span class="quotelev1">&gt; 1048576                4541.63
</span><br>
<span class="quotelev1">&gt; 2097152                4504.08
</span><br>
<span class="quotelev1">&gt; 4194304                4493.76
</span><br>
<span class="quotelev1">&gt; hoot_at_u1-1104:~$ mpirun -host 10.10.10.2,10.10.10.2 osu_bw
</span><br>
<span class="quotelev1">&gt; # OSU MPI Bandwidth Test v3.3
</span><br>
<span class="quotelev1">&gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 1                         4.50
</span><br>
<span class="quotelev1">&gt; 2                         9.14
</span><br>
<span class="quotelev1">&gt; 4                        18.51
</span><br>
<span class="quotelev1">&gt; 8                        36.47
</span><br>
<span class="quotelev1">&gt; 16                       74.05
</span><br>
<span class="quotelev1">&gt; 32                      142.71
</span><br>
<span class="quotelev1">&gt; 64                      256.99
</span><br>
<span class="quotelev1">&gt; 128                     516.84
</span><br>
<span class="quotelev1">&gt; 256                     972.40
</span><br>
<span class="quotelev1">&gt; 512                    1709.23
</span><br>
<span class="quotelev1">&gt; 1024                   2937.36
</span><br>
<span class="quotelev1">&gt; 2048                   4903.72
</span><br>
<span class="quotelev1">&gt; 4096                   5550.57
</span><br>
<span class="quotelev1">&gt; 8192                   7297.00
</span><br>
<span class="quotelev1">&gt; 16384                  8908.34
</span><br>
<span class="quotelev1">&gt; 32768                  8640.99
</span><br>
<span class="quotelev1">&gt; 65536                  8424.97
</span><br>
<span class="quotelev1">&gt; 131072                 8059.00
</span><br>
<span class="quotelev1">&gt; 262144                 4541.50
</span><br>
<span class="quotelev1">&gt; 524288                 4560.11
</span><br>
<span class="quotelev1">&gt; 1048576                4554.80
</span><br>
<span class="quotelev1">&gt; 2097152                4527.91
</span><br>
<span class="quotelev1">&gt; 4194304                4493.71
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17061.php">Hoot Thompson: "Re: [OMPI users] MPI_WAITALL error when running between two virtual machines"</a>
<li><strong>Previous message:</strong> <a href="17059.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="17055.php">Hoot Thompson: "[OMPI users] MPI_WAITALL error when running between two virtual machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17061.php">Hoot Thompson: "Re: [OMPI users] MPI_WAITALL error when running between two virtual machines"</a>
<li><strong>Reply:</strong> <a href="17061.php">Hoot Thompson: "Re: [OMPI users] MPI_WAITALL error when running between two virtual machines"</a>
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
