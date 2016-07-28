<?
$subject_val = "Re: [OMPI users] Where is the error? (MPI program in fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 13:17:40 2014" -->
<!-- isoreceived="20140416171740" -->
<!-- sent="Wed, 16 Apr 2014 13:17:40 -0400" -->
<!-- isosent="20140416171740" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Where is the error? (MPI program in fortran)" -->
<!-- id="534EBB34.8070402_at_ldeo.columbia.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="534EA0C4.90109_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2014-04-16 13:17:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24223.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="24221.php">flavienne sayou: "[OMPI users] problem with open mpi"</a>
<li><strong>In reply to:</strong> <a href="24218.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24224.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Reply:</strong> <a href="24224.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Oscar
<br>
<p>This is a long shot, but maybe worth trying.
<br>
I am assuming you're using Linux, or some form or Unix, right?
<br>
<p>You may try to increase the stack size.
<br>
The default in Linux is often too small for large programs.
<br>
Sometimes this may cause a segmentation fault, even if the
<br>
program is correct.
<br>
<p>You can check what you have with:
<br>
<p>ulimit -a        (bash)
<br>
<p>or
<br>
<p>limit             (csh or tcsh)
<br>
<p>Then set it to a larger number or perhaps to unlimited,
<br>
e.g.:
<br>
<p>ulimit -s unlimited
<br>
<p>or
<br>
<p>limit stacksize unlimited
<br>
<p>You didn't say anything about the computer(s) you are using.
<br>
Is this a single machine, a cluster, something else?
<br>
<p>Anyway, resetting the statck size may depend a bit on what you
<br>
have in /etc/security/limits.conf,
<br>
and whether it allows you to increase the stack size.
<br>
If it is a single computer that you have root access, you may
<br>
do it yourself.
<br>
There are other limits worth increasing (number of open files,
<br>
max locked memory).
<br>
For instance, this could go in limits.conf:
<br>
<p>*   -   memlock     -1
<br>
*   -   stack       -1
<br>
*   -   nofile      4096
<br>
<p>See 'man limits.conf' for details.
<br>
<p>If it is a cluster, and this should be set on all nodes,
<br>
and you may need to ask your system administrator to do it.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 04/16/2014 11:24 AM, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; On 04/16/2014 08:30 AM, Oscar Mojica wrote:
</span><br>
<span class="quotelev2">&gt;&gt; How would be the command line to compile with the option -g ? What
</span><br>
<span class="quotelev2">&gt;&gt; debugger can I use?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Replace any optimization flags (-O2, or similar) by -g.
</span><br>
<span class="quotelev1">&gt; Check if your compiler has the -traceback flag or similar
</span><br>
<span class="quotelev1">&gt; (man compiler-name).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The gdb debugger is normally available on Linux (or you can install it
</span><br>
<span class="quotelev1">&gt; with yum, apt-get, etc).  An alternative is ddd, with a GUI (can also be
</span><br>
<span class="quotelev1">&gt; installed from yum, etc).
</span><br>
<span class="quotelev1">&gt; If you use a commercial compiler you may have a debugger with a GUI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Enviado desde mi iPad
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; El 15/04/2014, a las 18:20, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; escribi&#195;&#179;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or just compiling with -g or -traceback (depending on the compiler) will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; give you more information about the point of failure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the error message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 04/15/2014 04:25 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Have you tried using a debugger to look at the resulting core file? It
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will probably point you right at the problem. Most likely a case of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; overrunning some array when #temps &gt; 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, Apr 15, 2014 at 10:46 AM, Oscar Mojica &lt;o_mojical_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:o_mojical_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Hello everybody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     I implemented a parallel simulated annealing algorithm in fortran.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       The algorithm is describes as follows
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     1. The MPI program initially generates P processes that have rank
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     0,1,...,P-1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     2. The MPI program generates a starting point and sends it  for all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     processes set T=T0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     3. At the current temperature T, each process begins to execute
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     iterative operations
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     4. At end of iterations, process with rank 0 is responsible for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     collecting the solution obatined by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     5. Each process at current temperature and broadcast the best
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     solution of them among all participating
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     6. Each process cools the temperatue and goes back to step 3, until
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     the maximum number of temperatures
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     is reach
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     I compiled with: mpif90 -o exe mpivfsa_version2.f
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     and run with: mpirun -np 4 ./exe in a single machine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     So I have 4 processes, 1 iteration per temperature and for example
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     15 temperatures. When I run the program
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     with just 5 temperatures it works well, but when the number of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     temperatures is higher than 5 it doesn't write the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ouput files and I get the following error message:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06740] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06741] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06741] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06741] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06741] Failing at address: 0xad6af
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06742] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06740] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06740] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06740] Failing at address: 0xad6af
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06742] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06742] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06742] Failing at address: 0xad6af
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06740] [ 0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7f49ee2224a0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06740] [ 1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c) [0x7f49ee26f54c]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06740] [ 2] ./exe() [0x406742]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06740] [ 3] ./exe(main+0x34) [0x406ac9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06740] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f49ee20d76d]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06742] [ 0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7f6877fdc4a0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06742] [ 1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c) [0x7f687802954c]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06742] [ 2] ./exe() [0x406742]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06742] [ 3] ./exe(main+0x34) [0x406ac9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06742] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7f6877fc776d]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06742] [ 5] ./exe() [0x401399]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06742] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06740] [ 5] ./exe() [0x401399]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06740] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06741] [ 0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7fa6c4c6e4a0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06741] [ 1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c) [0x7fa6c4cbb54c]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06741] [ 2] ./exe() [0x406742]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06741] [ 3] ./exe(main+0x34) [0x406ac9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06741] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x7fa6c4c5976d]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06741] [ 5] ./exe() [0x401399]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [oscar-Vostro-3550:06741] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     mpirun noticed that process rank 0 with PID 6917 on node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     oscar-Vostro-3550 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     If there is a segmentation fault in no case it must work .
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     I checked the program and didn't find the error. Why does the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     program work with five temperatures?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Could someone help me to find the error and answer my question
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; please.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     The program and the necessary files to run it  are attached
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     _Oscar Fabian Mojica Ladino_
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Geologist M.S. in  Geophysics
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24223.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="24221.php">flavienne sayou: "[OMPI users] problem with open mpi"</a>
<li><strong>In reply to:</strong> <a href="24218.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24224.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Reply:</strong> <a href="24224.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
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
