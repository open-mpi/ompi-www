<?
$subject_val = "Re: [OMPI users] Where is the error? (MPI program in fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 16:25:40 2014" -->
<!-- isoreceived="20140415202540" -->
<!-- sent="Tue, 15 Apr 2014 13:25:40 -0700" -->
<!-- isosent="20140415202540" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Where is the error? (MPI program in fortran)" -->
<!-- id="CAMD57oeL14EaQXMKfcLVtkD_pFOXpELsjaAOQvsMuzBx6pHurw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BLU177-W306EC9F35D308408F3635090500_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Where is the error? (MPI program in fortran)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-15 16:25:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24209.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Previous message:</strong> <a href="24207.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>In reply to:</strong> <a href="24204.php">Oscar Mojica: "[OMPI users] Where is the error? (MPI program in fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24209.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Reply:</strong> <a href="24209.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you tried using a debugger to look at the resulting core file? It will
<br>
probably point you right at the problem. Most likely a case of overrunning
<br>
some array when #temps &gt; 5
<br>
<p><p><p><p>On Tue, Apr 15, 2014 at 10:46 AM, Oscar Mojica &lt;o_mojical_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hello everybody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I implemented a parallel simulated annealing algorithm in fortran.  The
</span><br>
<span class="quotelev1">&gt; algorithm is describes as follows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. The MPI program initially generates P processes that have rank
</span><br>
<span class="quotelev1">&gt; 0,1,...,P-1.
</span><br>
<span class="quotelev1">&gt; 2. The MPI program generates a starting point and sends it  for all
</span><br>
<span class="quotelev1">&gt; processes set T=T0
</span><br>
<span class="quotelev1">&gt; 3. At the current temperature T, each process begins to execute iterative
</span><br>
<span class="quotelev1">&gt; operations
</span><br>
<span class="quotelev1">&gt; 4. At end of iterations, process with rank 0 is responsible for collecting
</span><br>
<span class="quotelev1">&gt; the solution obatined by
</span><br>
<span class="quotelev1">&gt; 5. Each process at current temperature and broadcast the best solution of
</span><br>
<span class="quotelev1">&gt; them among all participating
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev1">&gt; 6. Each process cools the temperatue and goes back to step 3, until the
</span><br>
<span class="quotelev1">&gt; maximum number of temperatures
</span><br>
<span class="quotelev1">&gt; is reach
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled with: mpif90 -o exe mpivfsa_version2.f
</span><br>
<span class="quotelev1">&gt; and run with: mpirun -np 4 ./exe in a single machine
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I have 4 processes, 1 iteration per temperature and for example 15
</span><br>
<span class="quotelev1">&gt; temperatures. When I run the program
</span><br>
<span class="quotelev1">&gt; with just 5 temperatures it works well, but when the number of
</span><br>
<span class="quotelev1">&gt; temperatures is higher than 5 it doesn't write the
</span><br>
<span class="quotelev1">&gt; ouput files and I get the following error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06740] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06741] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06741] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06741] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06741] Failing at address: 0xad6af
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06742] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06740] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06740] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06740] Failing at address: 0xad6af
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06742] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06742] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06742] Failing at address: 0xad6af
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06740] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x364a0)
</span><br>
<span class="quotelev1">&gt; [0x7f49ee2224a0]
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06740] [ 1] /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c)
</span><br>
<span class="quotelev1">&gt; [0x7f49ee26f54c]
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06740] [ 2] ./exe() [0x406742]
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06740] [ 3] ./exe(main+0x34) [0x406ac9]
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06740] [ 4]
</span><br>
<span class="quotelev1">&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7f49ee20d76d]
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06742] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x364a0)
</span><br>
<span class="quotelev1">&gt; [0x7f6877fdc4a0]
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06742] [ 1] /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c)
</span><br>
<span class="quotelev1">&gt; [0x7f687802954c]
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06742] [ 2] ./exe() [0x406742]
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06742] [ 3] ./exe(main+0x34) [0x406ac9]
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06742] [ 4]
</span><br>
<span class="quotelev1">&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7f6877fc776d]
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06742] [ 5] ./exe() [0x401399]
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06742] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06740] [ 5] ./exe() [0x401399]
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06740] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06741] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x364a0)
</span><br>
<span class="quotelev1">&gt; [0x7fa6c4c6e4a0]
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06741] [ 1] /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c)
</span><br>
<span class="quotelev1">&gt; [0x7fa6c4cbb54c]
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06741] [ 2] ./exe() [0x406742]
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06741] [ 3] ./exe(main+0x34) [0x406ac9]
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06741] [ 4]
</span><br>
<span class="quotelev1">&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7fa6c4c5976d]
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06741] [ 5] ./exe() [0x401399]
</span><br>
<span class="quotelev1">&gt; [oscar-Vostro-3550:06741] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 6917 on node oscar-Vostro-3550
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there is a segmentation fault in no case it must work .
</span><br>
<span class="quotelev1">&gt; I checked the program and didn't find the error. Why does the program
</span><br>
<span class="quotelev1">&gt; work with five temperatures?
</span><br>
<span class="quotelev1">&gt; Could someone help me to find the error and answer my question please.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program and the necessary files to run it  are attached
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Oscar Fabian Mojica Ladino*
</span><br>
<span class="quotelev1">&gt; Geologist M.S. in  Geophysics
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24208/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24209.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Previous message:</strong> <a href="24207.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>In reply to:</strong> <a href="24204.php">Oscar Mojica: "[OMPI users] Where is the error? (MPI program in fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24209.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Reply:</strong> <a href="24209.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
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
