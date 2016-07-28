<?
$subject_val = "Re: [OMPI users] Where is the error? (MPI program in fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 14:17:52 2014" -->
<!-- isoreceived="20140416181752" -->
<!-- sent="Wed, 16 Apr 2014 15:17:51 -0300" -->
<!-- isosent="20140416181751" -->
<!-- name="Oscar Mojica" -->
<!-- email="o_mojical_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Where is the error? (MPI program in fortran)" -->
<!-- id="BLU405-EAS366339BEE1D8867D890A54790530_at_phx.gbl" -->
<!-- charset="utf-8" -->
<!-- inreplyto="534EBB34.8070402_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2014-04-16 14:17:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24225.php">Mike Dubman: "Re: [OMPI users] probable bug in 1.9a1r31409"</a>
<li><strong>Previous message:</strong> <a href="24223.php">Sasso, John (GE Power &amp; Water, Non-GE): "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="24222.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24235.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Reply:</strong> <a href="24235.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus
<br>
It is a single machine and i have installed Ubuntu 12.04 LTS. I left my computer in the college but  I will try to follow your advice when I can and tell you about it.
<br>

<br>
Thanks 
<br>

<br>
Enviado desde mi iPad
<br>

<br>
<span class="quotelev1">&gt; El 16/04/2014, a las 14:17, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; escribi&#195;&#179;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Oscar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a long shot, but maybe worth trying.
</span><br>
<span class="quotelev1">&gt; I am assuming you're using Linux, or some form or Unix, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may try to increase the stack size.
</span><br>
<span class="quotelev1">&gt; The default in Linux is often too small for large programs.
</span><br>
<span class="quotelev1">&gt; Sometimes this may cause a segmentation fault, even if the
</span><br>
<span class="quotelev1">&gt; program is correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can check what you have with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ulimit -a        (bash)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; limit             (csh or tcsh)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then set it to a larger number or perhaps to unlimited,
</span><br>
<span class="quotelev1">&gt; e.g.:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ulimit -s unlimited
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; limit stacksize unlimited
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You didn't say anything about the computer(s) you are using.
</span><br>
<span class="quotelev1">&gt; Is this a single machine, a cluster, something else?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, resetting the statck size may depend a bit on what you
</span><br>
<span class="quotelev1">&gt; have in /etc/security/limits.conf,
</span><br>
<span class="quotelev1">&gt; and whether it allows you to increase the stack size.
</span><br>
<span class="quotelev1">&gt; If it is a single computer that you have root access, you may
</span><br>
<span class="quotelev1">&gt; do it yourself.
</span><br>
<span class="quotelev1">&gt; There are other limits worth increasing (number of open files,
</span><br>
<span class="quotelev1">&gt; max locked memory).
</span><br>
<span class="quotelev1">&gt; For instance, this could go in limits.conf:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *   -   memlock     -1
</span><br>
<span class="quotelev1">&gt; *   -   stack       -1
</span><br>
<span class="quotelev1">&gt; *   -   nofile      4096
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See 'man limits.conf' for details.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it is a cluster, and this should be set on all nodes,
</span><br>
<span class="quotelev1">&gt; and you may need to ask your system administrator to do it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 04/16/2014 11:24 AM, Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 04/16/2014 08:30 AM, Oscar Mojica wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How would be the command line to compile with the option -g ? What
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debugger can I use?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Replace any optimization flags (-O2, or similar) by -g.
</span><br>
<span class="quotelev2">&gt;&gt; Check if your compiler has the -traceback flag or similar
</span><br>
<span class="quotelev2">&gt;&gt; (man compiler-name).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The gdb debugger is normally available on Linux (or you can install it
</span><br>
<span class="quotelev2">&gt;&gt; with yum, apt-get, etc).  An alternative is ddd, with a GUI (can also be
</span><br>
<span class="quotelev2">&gt;&gt; installed from yum, etc).
</span><br>
<span class="quotelev2">&gt;&gt; If you use a commercial compiler you may have a debugger with a GUI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Enviado desde mi iPad
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; El 15/04/2014, a las 18:20, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; escribi&#195;&#179;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Or just compiling with -g or -traceback (depending on the compiler) will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; give you more information about the point of failure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the error message.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 04/15/2014 04:25 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Have you tried using a debugger to look at the resulting core file? It
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; will probably point you right at the problem. Most likely a case of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; overrunning some array when #temps &gt; 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Apr 15, 2014 at 10:46 AM, Oscar Mojica &lt;o_mojical_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;mailto:o_mojical_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Hello everybody
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    I implemented a parallel simulated annealing algorithm in fortran.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      The algorithm is describes as follows
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    1. The MPI program initially generates P processes that have rank
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    0,1,...,P-1.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    2. The MPI program generates a starting point and sends it  for all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    processes set T=T0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    3. At the current temperature T, each process begins to execute
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    iterative operations
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    4. At end of iterations, process with rank 0 is responsible for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    collecting the solution obatined by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    5. Each process at current temperature and broadcast the best
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    solution of them among all participating
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    6. Each process cools the temperatue and goes back to step 3, until
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    the maximum number of temperatures
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    is reach
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    I compiled with: mpif90 -o exe mpivfsa_version2.f
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    and run with: mpirun -np 4 ./exe in a single machine
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    So I have 4 processes, 1 iteration per temperature and for example
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    15 temperatures. When I run the program
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    with just 5 temperatures it works well, but when the number of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    temperatures is higher than 5 it doesn't write the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    ouput files and I get the following error message:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06740] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06741] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06741] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06741] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06741] Failing at address: 0xad6af
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06742] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06740] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06740] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06740] Failing at address: 0xad6af
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06742] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06742] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06742] Failing at address: 0xad6af
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06740] [ 0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7f49ee2224a0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06740] [ 1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c) [0x7f49ee26f54c]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06740] [ 2] ./exe() [0x406742]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06740] [ 3] ./exe(main+0x34) [0x406ac9]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06740] [ 4]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7f49ee20d76d]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06742] [ 0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7f6877fdc4a0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06742] [ 1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c) [0x7f687802954c]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06742] [ 2] ./exe() [0x406742]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06742] [ 3] ./exe(main+0x34) [0x406ac9]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06742] [ 4]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7f6877fc776d]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06742] [ 5] ./exe() [0x401399]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06742] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06740] [ 5] ./exe() [0x401399]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06740] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06741] [ 0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7fa6c4c6e4a0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06741] [ 1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c) [0x7fa6c4cbb54c]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06741] [ 2] ./exe() [0x406742]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06741] [ 3] ./exe(main+0x34) [0x406ac9]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06741] [ 4]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7fa6c4c5976d]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06741] [ 5] ./exe() [0x401399]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [oscar-Vostro-3550:06741] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mpirun noticed that process rank 0 with PID 6917 on node
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    oscar-Vostro-3550 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    If there is a segmentation fault in no case it must work .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    I checked the program and didn't find the error. Why does the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    program work with five temperatures?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Could someone help me to find the error and answer my question
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; please.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    The program and the necessary files to run it  are attached
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    _Oscar Fabian Mojica Ladino_
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Geologist M.S. in  Geophysics
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="24225.php">Mike Dubman: "Re: [OMPI users] probable bug in 1.9a1r31409"</a>
<li><strong>Previous message:</strong> <a href="24223.php">Sasso, John (GE Power &amp; Water, Non-GE): "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="24222.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24235.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Reply:</strong> <a href="24235.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
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
