<?
$subject_val = "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  7 00:12:47 2009" -->
<!-- isoreceived="20090807041247" -->
<!-- sent="Fri, 7 Aug 2009 09:42:42 +0530" -->
<!-- isosent="20090807041242" -->
<!-- name="vipin kumar" -->
<!-- email="vipinkumar41_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)" -->
<!-- id="fa4af8200908062112m369cee8cw632898ccaae33b47_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="015F320C-DED2-4218-9832-06A7D6812198_at_cisco.com" -->
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
<strong>From:</strong> vipin kumar (<em>vipinkumar41_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-07 00:12:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10236.php">neeraj_at_[hidden]: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>Previous message:</strong> <a href="10234.php">Jeff Squyres: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10224.php">Jeff Squyres: "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
may be because of insufficient storage space...............???( I mean hard
<br>
disk space.)
<br>
<p>On Thu, Aug 6, 2009 at 11:23 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Any chance you could re-try the experiment with Open MPI 1.3.3?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 4, 2009, at 11:10 AM, Hoelzlwimmer Andreas - S0810595005 wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;ve wanted to run MPI on a couple of PS3 here. According to a colleague
</span><br>
<span class="quotelev2">&gt;&gt; who set it up, I had to set several HugePages. As the PS3 RAM is limited I
</span><br>
<span class="quotelev2">&gt;&gt; had to allocate 2 HugePages. I ran HPL at first with the following command
</span><br>
<span class="quotelev2">&gt;&gt; (out of a tutorial):
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl_openib_want_fork_support 0 -np 1 numactl --physcpubind=0
</span><br>
<span class="quotelev2">&gt;&gt; ./xhpl : -np 1 numactl --physcpubind=1 ./xhpl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now as I had very little memory I had to disable some services. I did so
</span><br>
<span class="quotelev2">&gt;&gt; (Wifi Service, Bluetooth, printing, unneeded). After running the same
</span><br>
<span class="quotelev2">&gt;&gt; command again, I got the an error message (see below). Can anyone help me
</span><br>
<span class="quotelev2">&gt;&gt; here, I have no idea what the error message actually means, and I can&#146;t find
</span><br>
<span class="quotelev2">&gt;&gt; anything useful about it. It&#146;s running on Yellow Dog Linux, using OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Andreas Hoelzlwimmer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Error Message:
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04815] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04815] Signal: Bus error (7)
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04815] Signal code:  (2)
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04815] Failing at address: 0x4000ca78008
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04816] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04816] Signal: Bus error (7)
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04816] Signal code:  (2)
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04816] Failing at address: 0x4000ca78008
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04816] [ 0] [0x1003e8]
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04816] [ 1] ./xhpl(HPL_hpalloc-0x17cc8c) [0x1001103c]
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04816] [ 2] ./xhpl(HPL_pdtest-0x17da40) [0x100101f8]
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04816] [ 3] ./xhpl(main-0x182f2c) [0x1000acdc]
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04816] [ 4] /lib64/libc.so.6 [0x80ca0e966c]
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04816] [ 5] /lib64/libc.so.6(__libc_start_main-0x1473e0)
</span><br>
<span class="quotelev2">&gt;&gt; [0x80ca0e98e8]
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04816] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04815] [ 0] [0x1003e8]
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04815] [ 1] ./xhpl(HPL_hpalloc-0x17cc8c) [0x1001103c]
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04815] [ 2] ./xhpl(HPL_pdtest-0x17da40) [0x100101f8]
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04815] [ 3] ./xhpl(main-0x182f2c) [0x1000acdc]
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04815] [ 4] /lib64/libc.so.6 [0x80ca0e966c]
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04815] [ 5] /lib64/libc.so.6(__libc_start_main-0x1473e0)
</span><br>
<span class="quotelev2">&gt;&gt; [0x80ca0e98e8]
</span><br>
<span class="quotelev2">&gt;&gt; [PS02:04815] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 4815 on node PS02 exited on signal
</span><br>
<span class="quotelev2">&gt;&gt; 7 (Bus error).
</span><br>
<span class="quotelev2">&gt;&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
-- 
Vipin K.
Research Engineer,
C-DOTB, India
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10235/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10236.php">neeraj_at_[hidden]: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on	IB"</a>
<li><strong>Previous message:</strong> <a href="10234.php">Jeff Squyres: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10224.php">Jeff Squyres: "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<!-- nextthread="start" -->
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
