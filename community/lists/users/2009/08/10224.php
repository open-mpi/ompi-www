<?
$subject_val = "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  6 13:53:08 2009" -->
<!-- isoreceived="20090806175308" -->
<!-- sent="Thu, 6 Aug 2009 13:53:03 -0400" -->
<!-- isosent="20090806175303" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)" -->
<!-- id="015F320C-DED2-4218-9832-06A7D6812198_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C199A1B3AACF2946BF3E11F97D4E295A7CCF4C_at_hagmxbe02.hagenberg.fhooe.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-06 13:53:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10225.php">Jeff Squyres: "Re: [OMPI users] Kerberos ticket forwarding"</a>
<li><strong>Previous message:</strong> <a href="10223.php">Jeff Squyres: "Re: [OMPI users] mpicxx and LD_RUN_PATH"</a>
<li><strong>In reply to:</strong> <a href="10200.php">Hoelzlwimmer Andreas - S0810595005: "[OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10235.php">vipin kumar: "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<li><strong>Reply:</strong> <a href="10235.php">vipin kumar: "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Any chance you could re-try the experiment with Open MPI 1.3.3?
<br>
<p>On Aug 4, 2009, at 11:10 AM, Hoelzlwimmer Andreas - S0810595005 wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;ve wanted to run MPI on a couple of PS3 here. According to a  
</span><br>
<span class="quotelev1">&gt; colleague who set it up, I had to set several HugePages. As the PS3  
</span><br>
<span class="quotelev1">&gt; RAM is limited I had to allocate 2 HugePages. I ran HPL at first  
</span><br>
<span class="quotelev1">&gt; with the following command (out of a tutorial):
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_openib_want_fork_support 0 -np 1 numactl -- 
</span><br>
<span class="quotelev1">&gt; physcpubind=0 ./xhpl : -np 1 numactl --physcpubind=1 ./xhpl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now as I had very little memory I had to disable some services. I  
</span><br>
<span class="quotelev1">&gt; did so (Wifi Service, Bluetooth, printing, unneeded). After running  
</span><br>
<span class="quotelev1">&gt; the same command again, I got the an error message (see below). Can  
</span><br>
<span class="quotelev1">&gt; anyone help me here, I have no idea what the error message actually  
</span><br>
<span class="quotelev1">&gt; means, and I can&#146;t find anything useful about it. It&#146;s running on  
</span><br>
<span class="quotelev1">&gt; Yellow Dog Linux, using OpenMPI 1.2.8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Andreas Hoelzlwimmer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error Message:
</span><br>
<span class="quotelev1">&gt; [PS02:04815] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [PS02:04815] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [PS02:04815] Signal code:  (2)
</span><br>
<span class="quotelev1">&gt; [PS02:04815] Failing at address: 0x4000ca78008
</span><br>
<span class="quotelev1">&gt; [PS02:04816] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [PS02:04816] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [PS02:04816] Signal code:  (2)
</span><br>
<span class="quotelev1">&gt; [PS02:04816] Failing at address: 0x4000ca78008
</span><br>
<span class="quotelev1">&gt; [PS02:04816] [ 0] [0x1003e8]
</span><br>
<span class="quotelev1">&gt; [PS02:04816] [ 1] ./xhpl(HPL_hpalloc-0x17cc8c) [0x1001103c]
</span><br>
<span class="quotelev1">&gt; [PS02:04816] [ 2] ./xhpl(HPL_pdtest-0x17da40) [0x100101f8]
</span><br>
<span class="quotelev1">&gt; [PS02:04816] [ 3] ./xhpl(main-0x182f2c) [0x1000acdc]
</span><br>
<span class="quotelev1">&gt; [PS02:04816] [ 4] /lib64/libc.so.6 [0x80ca0e966c]
</span><br>
<span class="quotelev1">&gt; [PS02:04816] [ 5] /lib64/libc.so.6(__libc_start_main-0x1473e0)  
</span><br>
<span class="quotelev1">&gt; [0x80ca0e98e8]
</span><br>
<span class="quotelev1">&gt; [PS02:04816] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [PS02:04815] [ 0] [0x1003e8]
</span><br>
<span class="quotelev1">&gt; [PS02:04815] [ 1] ./xhpl(HPL_hpalloc-0x17cc8c) [0x1001103c]
</span><br>
<span class="quotelev1">&gt; [PS02:04815] [ 2] ./xhpl(HPL_pdtest-0x17da40) [0x100101f8]
</span><br>
<span class="quotelev1">&gt; [PS02:04815] [ 3] ./xhpl(main-0x182f2c) [0x1000acdc]
</span><br>
<span class="quotelev1">&gt; [PS02:04815] [ 4] /lib64/libc.so.6 [0x80ca0e966c]
</span><br>
<span class="quotelev1">&gt; [PS02:04815] [ 5] /lib64/libc.so.6(__libc_start_main-0x1473e0)  
</span><br>
<span class="quotelev1">&gt; [0x80ca0e98e8]
</span><br>
<span class="quotelev1">&gt; [PS02:04815] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 4815 on node PS02 exited on  
</span><br>
<span class="quotelev1">&gt; signal 7 (Bus error).
</span><br>
<span class="quotelev1">&gt; 1 additional process aborted (not shown)
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10225.php">Jeff Squyres: "Re: [OMPI users] Kerberos ticket forwarding"</a>
<li><strong>Previous message:</strong> <a href="10223.php">Jeff Squyres: "Re: [OMPI users] mpicxx and LD_RUN_PATH"</a>
<li><strong>In reply to:</strong> <a href="10200.php">Hoelzlwimmer Andreas - S0810595005: "[OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10235.php">vipin kumar: "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<li><strong>Reply:</strong> <a href="10235.php">vipin kumar: "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
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
