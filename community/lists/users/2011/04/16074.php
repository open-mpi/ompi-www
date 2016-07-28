<?
$subject_val = "Re: [OMPI users] OMPI not calling finalize error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  2 11:19:31 2011" -->
<!-- isoreceived="20110402151931" -->
<!-- sent="Sat, 2 Apr 2011 08:19:06 -0700" -->
<!-- isosent="20110402151906" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI not calling finalize error" -->
<!-- id="BANLkTi=EfJf9Ggrf_vd6jjt6+pchbxO2rw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w24CBE500D312F260D6A358CBA10_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI not calling finalize error<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-02 11:19:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16075.php">fah10_at_[hidden]: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Previous message:</strong> <a href="16073.php">Jack Bryan: "[OMPI users] OMPI not calling finalize error"</a>
<li><strong>In reply to:</strong> <a href="16073.php">Jack Bryan: "[OMPI users] OMPI not calling finalize error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;From the error message, there is a segfault in the program, which crashes
</span><br>
the one of the process.  MPI notices one of the process has died and
<br>
terminate the other processes as well.  Because these processes were not
<br>
terminated by calling MPI_finalize, you get the error message on the bottom.
<br>
<p><p>On Sat, Apr 2, 2011 at 8:05 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run a parallel program, I got an error :
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [n333:129522] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [n333:129522] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [n333:129522] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [n333:129522] Failing at address: 0x40
</span><br>
<span class="quotelev1">&gt; [n333:129522] [ 0] /lib64/libpthread.so.0 [0x3c50e0e4c0]
</span><br>
<span class="quotelev1">&gt; [n333:129522] [ 1] /opt/openmpi-1.3.4-gnu/lib/libmpi.so.0 [0x4cd19b1]
</span><br>
<span class="quotelev1">&gt; [n333:129522] [ 2]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.3.4-gnu/lib/libopen-pal.so.0(opal_progress+0x75) [0x52e5165]
</span><br>
<span class="quotelev1">&gt; [n333:129522] [ 3] /opt/openmpi-1.3.4-gnu/lib/libopen-rte.so.0 [0x508565c]
</span><br>
<span class="quotelev1">&gt; [n333:129522] [ 4] /opt/openmpi-1.3.4-gnu/lib/libmpi.so.0 [0x4c653eb]
</span><br>
<span class="quotelev1">&gt; [n333:129522] [ 5] /opt/openmpi-1.3.4-gnu/lib/libmpi.so.0(MPI_Init+0x120)
</span><br>
<span class="quotelev1">&gt; [0x4c84b90]
</span><br>
<span class="quotelev1">&gt; [n333:129522] [ 6] /lustre/jxding/netplan49/nsga2b [0x4497f6]
</span><br>
<span class="quotelev1">&gt; [n333:129522] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3c5021d974]
</span><br>
<span class="quotelev1">&gt; [n333:129522] [ 8]
</span><br>
<span class="quotelev1">&gt; /lustre/jxding/netplan49/nsga2b(__gxx_personality_v0+0x499) [0x4436e9]
</span><br>
<span class="quotelev1">&gt; [n333:129522] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 24 with PID 129522 on
</span><br>
<span class="quotelev1">&gt; node n333 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; But, the program only run for not more than a few of minutes. It should
</span><br>
<span class="quotelev1">&gt; take hours to finish.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How can it reach &quot;finalize&quot; so fast ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jack
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
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16074/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16075.php">fah10_at_[hidden]: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Previous message:</strong> <a href="16073.php">Jack Bryan: "[OMPI users] OMPI not calling finalize error"</a>
<li><strong>In reply to:</strong> <a href="16073.php">Jack Bryan: "[OMPI users] OMPI not calling finalize error"</a>
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
