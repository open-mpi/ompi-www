<?
$subject_val = "Re: [OMPI users] Where is the error? (MPI program in fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 08:30:57 2014" -->
<!-- isoreceived="20140416123057" -->
<!-- sent="Wed, 16 Apr 2014 09:30:56 -0300" -->
<!-- isosent="20140416123056" -->
<!-- name="Oscar Mojica" -->
<!-- email="o_mojical_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Where is the error? (MPI program in fortran)" -->
<!-- id="BLU405-EAS5154FF543712FA70B15E7490530_at_phx.gbl" -->
<!-- charset="utf-8" -->
<!-- inreplyto="534DA28D.5050500_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Oscar Mojica (<em>o_mojical_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 08:30:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24216.php">Ralph Castain: "Re: [OMPI users] FW: Performance issue of mpirun/mpi_init"</a>
<li><strong>Previous message:</strong> <a href="24214.php">Muhammad Ansar Javed: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>In reply to:</strong> <a href="24209.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24218.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Reply:</strong> <a href="24218.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How would be the command line to compile with the option -g ? What debugger can I use?
<br>
Thanks
<br>

<br>
Enviado desde mi iPad
<br>

<br>
<span class="quotelev1">&gt; El 15/04/2014, a las 18:20, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; escribi&#195;&#179;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or just compiling with -g or -traceback (depending on the compiler) will
</span><br>
<span class="quotelev1">&gt; give you more information about the point of failure
</span><br>
<span class="quotelev1">&gt; in the error message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 04/15/2014 04:25 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried using a debugger to look at the resulting core file? It
</span><br>
<span class="quotelev2">&gt;&gt; will probably point you right at the problem. Most likely a case of
</span><br>
<span class="quotelev2">&gt;&gt; overrunning some array when #temps &gt; 5
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Apr 15, 2014 at 10:46 AM, Oscar Mojica &lt;o_mojical_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:o_mojical_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Hello everybody
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    I implemented a parallel simulated annealing algorithm in fortran.
</span><br>
<span class="quotelev2">&gt;&gt;      The algorithm is describes as follows
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    1. The MPI program initially generates P processes that have rank
</span><br>
<span class="quotelev2">&gt;&gt;    0,1,...,P-1.
</span><br>
<span class="quotelev2">&gt;&gt;    2. The MPI program generates a starting point and sends it  for all
</span><br>
<span class="quotelev2">&gt;&gt;    processes set T=T0
</span><br>
<span class="quotelev2">&gt;&gt;    3. At the current temperature T, each process begins to execute
</span><br>
<span class="quotelev2">&gt;&gt;    iterative operations
</span><br>
<span class="quotelev2">&gt;&gt;    4. At end of iterations, process with rank 0 is responsible for
</span><br>
<span class="quotelev2">&gt;&gt;    collecting the solution obatined by
</span><br>
<span class="quotelev2">&gt;&gt;    5. Each process at current temperature and broadcast the best
</span><br>
<span class="quotelev2">&gt;&gt;    solution of them among all participating
</span><br>
<span class="quotelev2">&gt;&gt;    process
</span><br>
<span class="quotelev2">&gt;&gt;    6. Each process cools the temperatue and goes back to step 3, until
</span><br>
<span class="quotelev2">&gt;&gt;    the maximum number of temperatures
</span><br>
<span class="quotelev2">&gt;&gt;    is reach
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    I compiled with: mpif90 -o exe mpivfsa_version2.f
</span><br>
<span class="quotelev2">&gt;&gt;    and run with: mpirun -np 4 ./exe in a single machine
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    So I have 4 processes, 1 iteration per temperature and for example
</span><br>
<span class="quotelev2">&gt;&gt;    15 temperatures. When I run the program
</span><br>
<span class="quotelev2">&gt;&gt;    with just 5 temperatures it works well, but when the number of
</span><br>
<span class="quotelev2">&gt;&gt;    temperatures is higher than 5 it doesn't write the
</span><br>
<span class="quotelev2">&gt;&gt;    ouput files and I get the following error message:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06740] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06741] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06741] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06741] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06741] Failing at address: 0xad6af
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06742] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06740] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06740] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06740] Failing at address: 0xad6af
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06742] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06742] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06742] Failing at address: 0xad6af
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06740] [ 0]
</span><br>
<span class="quotelev2">&gt;&gt;    /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7f49ee2224a0]
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06740] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt;    /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c) [0x7f49ee26f54c]
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06740] [ 2] ./exe() [0x406742]
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06740] [ 3] ./exe(main+0x34) [0x406ac9]
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06740] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt;    /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7f49ee20d76d]
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06742] [ 0]
</span><br>
<span class="quotelev2">&gt;&gt;    /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7f6877fdc4a0]
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06742] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt;    /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c) [0x7f687802954c]
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06742] [ 2] ./exe() [0x406742]
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06742] [ 3] ./exe(main+0x34) [0x406ac9]
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06742] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt;    /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7f6877fc776d]
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06742] [ 5] ./exe() [0x401399]
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06742] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06740] [ 5] ./exe() [0x401399]
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06740] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06741] [ 0]
</span><br>
<span class="quotelev2">&gt;&gt;    /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7fa6c4c6e4a0]
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06741] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt;    /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c) [0x7fa6c4cbb54c]
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06741] [ 2] ./exe() [0x406742]
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06741] [ 3] ./exe(main+0x34) [0x406ac9]
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06741] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt;    /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7fa6c4c5976d]
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06741] [ 5] ./exe() [0x401399]
</span><br>
<span class="quotelev2">&gt;&gt;    [oscar-Vostro-3550:06741] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;    mpirun noticed that process rank 0 with PID 6917 on node
</span><br>
<span class="quotelev2">&gt;&gt;    oscar-Vostro-3550 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;    2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    If there is a segmentation fault in no case it must work .
</span><br>
<span class="quotelev2">&gt;&gt;    I checked the program and didn't find the error. Why does the
</span><br>
<span class="quotelev2">&gt;&gt;    program work with five temperatures?
</span><br>
<span class="quotelev2">&gt;&gt;    Could someone help me to find the error and answer my question please.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    The program and the necessary files to run it  are attached
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    _Oscar Fabian Mojica Ladino_
</span><br>
<span class="quotelev2">&gt;&gt;    Geologist M.S. in  Geophysics
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24216.php">Ralph Castain: "Re: [OMPI users] FW: Performance issue of mpirun/mpi_init"</a>
<li><strong>Previous message:</strong> <a href="24214.php">Muhammad Ansar Javed: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>In reply to:</strong> <a href="24209.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24218.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Reply:</strong> <a href="24218.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
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
