<?
$subject_val = "Re: [OMPI users] Where is the error? (MPI program in fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 17:20:21 2014" -->
<!-- isoreceived="20140415212021" -->
<!-- sent="Tue, 15 Apr 2014 17:20:13 -0400" -->
<!-- isosent="20140415212013" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Where is the error? (MPI program in fortran)" -->
<!-- id="534DA28D.5050500_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMD57oeL14EaQXMKfcLVtkD_pFOXpELsjaAOQvsMuzBx6pHurw_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-15 17:20:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24210.php">Muhammad Ansar Javed: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Previous message:</strong> <a href="24208.php">Ralph Castain: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>In reply to:</strong> <a href="24208.php">Ralph Castain: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24215.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Reply:</strong> <a href="24215.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Or just compiling with -g or -traceback (depending on the compiler) will
<br>
give you more information about the point of failure
<br>
in the error message.
<br>
<p>On 04/15/2014 04:25 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Have you tried using a debugger to look at the resulting core file? It
</span><br>
<span class="quotelev1">&gt; will probably point you right at the problem. Most likely a case of
</span><br>
<span class="quotelev1">&gt; overrunning some array when #temps &gt; 5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 15, 2014 at 10:46 AM, Oscar Mojica &lt;o_mojical_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:o_mojical_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello everybody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I implemented a parallel simulated annealing algorithm in fortran.
</span><br>
<span class="quotelev1">&gt;       The algorithm is describes as follows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     1. The MPI program initially generates P processes that have rank
</span><br>
<span class="quotelev1">&gt;     0,1,...,P-1.
</span><br>
<span class="quotelev1">&gt;     2. The MPI program generates a starting point and sends it  for all
</span><br>
<span class="quotelev1">&gt;     processes set T=T0
</span><br>
<span class="quotelev1">&gt;     3. At the current temperature T, each process begins to execute
</span><br>
<span class="quotelev1">&gt;     iterative operations
</span><br>
<span class="quotelev1">&gt;     4. At end of iterations, process with rank 0 is responsible for
</span><br>
<span class="quotelev1">&gt;     collecting the solution obatined by
</span><br>
<span class="quotelev1">&gt;     5. Each process at current temperature and broadcast the best
</span><br>
<span class="quotelev1">&gt;     solution of them among all participating
</span><br>
<span class="quotelev1">&gt;     process
</span><br>
<span class="quotelev1">&gt;     6. Each process cools the temperatue and goes back to step 3, until
</span><br>
<span class="quotelev1">&gt;     the maximum number of temperatures
</span><br>
<span class="quotelev1">&gt;     is reach
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I compiled with: mpif90 -o exe mpivfsa_version2.f
</span><br>
<span class="quotelev1">&gt;     and run with: mpirun -np 4 ./exe in a single machine
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     So I have 4 processes, 1 iteration per temperature and for example
</span><br>
<span class="quotelev1">&gt;     15 temperatures. When I run the program
</span><br>
<span class="quotelev1">&gt;     with just 5 temperatures it works well, but when the number of
</span><br>
<span class="quotelev1">&gt;     temperatures is higher than 5 it doesn't write the
</span><br>
<span class="quotelev1">&gt;     ouput files and I get the following error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06740] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06741] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06741] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06741] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06741] Failing at address: 0xad6af
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06742] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06740] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06740] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06740] Failing at address: 0xad6af
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06742] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06742] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06742] Failing at address: 0xad6af
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06740] [ 0]
</span><br>
<span class="quotelev1">&gt;     /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7f49ee2224a0]
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06740] [ 1]
</span><br>
<span class="quotelev1">&gt;     /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c) [0x7f49ee26f54c]
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06740] [ 2] ./exe() [0x406742]
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06740] [ 3] ./exe(main+0x34) [0x406ac9]
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06740] [ 4]
</span><br>
<span class="quotelev1">&gt;     /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7f49ee20d76d]
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06742] [ 0]
</span><br>
<span class="quotelev1">&gt;     /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7f6877fdc4a0]
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06742] [ 1]
</span><br>
<span class="quotelev1">&gt;     /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c) [0x7f687802954c]
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06742] [ 2] ./exe() [0x406742]
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06742] [ 3] ./exe(main+0x34) [0x406ac9]
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06742] [ 4]
</span><br>
<span class="quotelev1">&gt;     /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7f6877fc776d]
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06742] [ 5] ./exe() [0x401399]
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06742] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06740] [ 5] ./exe() [0x401399]
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06740] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06741] [ 0]
</span><br>
<span class="quotelev1">&gt;     /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7fa6c4c6e4a0]
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06741] [ 1]
</span><br>
<span class="quotelev1">&gt;     /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c) [0x7fa6c4cbb54c]
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06741] [ 2] ./exe() [0x406742]
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06741] [ 3] ./exe(main+0x34) [0x406ac9]
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06741] [ 4]
</span><br>
<span class="quotelev1">&gt;     /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7fa6c4c5976d]
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06741] [ 5] ./exe() [0x401399]
</span><br>
<span class="quotelev1">&gt;     [oscar-Vostro-3550:06741] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     mpirun noticed that process rank 0 with PID 6917 on node
</span><br>
<span class="quotelev1">&gt;     oscar-Vostro-3550 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     If there is a segmentation fault in no case it must work .
</span><br>
<span class="quotelev1">&gt;     I checked the program and didn't find the error. Why does the
</span><br>
<span class="quotelev1">&gt;     program work with five temperatures?
</span><br>
<span class="quotelev1">&gt;     Could someone help me to find the error and answer my question please.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The program and the necessary files to run it  are attached
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _Oscar Fabian Mojica Ladino_
</span><br>
<span class="quotelev1">&gt;     Geologist M.S. in  Geophysics
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24210.php">Muhammad Ansar Javed: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Previous message:</strong> <a href="24208.php">Ralph Castain: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>In reply to:</strong> <a href="24208.php">Ralph Castain: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24215.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Reply:</strong> <a href="24215.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
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
