<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul 16 14:31:42 2006" -->
<!-- isoreceived="20060716183142" -->
<!-- sent="Sun, 16 Jul 2006 12:31:36 -0600" -->
<!-- isosent="20060716183136" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR" -->
<!-- id="E89704A0-4F55-49E3-9C60-E91FD4C418DD_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200607151658.27094.kyron_at_neuralbs.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-16 14:31:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1628.php">Brian Barrett: "Re: [OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="1626.php">Brian Barrett: "Re: [OMPI users] Openmpi, LSF and GM"</a>
<li><strong>In reply to:</strong> <a href="1624.php">Eric Thibodeau: "[OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1629.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Reply:</strong> <a href="1629.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Reply:</strong> <a href="1630.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 15, 2006, at 2:58 PM, Eric Thibodeau wrote:
<br>
<span class="quotelev1">&gt; But, for some reason, on the Athlon node (in their image on the  
</span><br>
<span class="quotelev1">&gt; server I should say) OpenMPI still doesn't seem to be built  
</span><br>
<span class="quotelev1">&gt; correctly since it crashes as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; kyron_at_node0 ~ $ mpirun -np 1 uptime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Failing at addr:(nil)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0] func:/home/kyron/openmpi_i686/lib/libopal.so.0 [0xb7f6258f]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1] func:[0xffffe440]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [2] func:/home/kyron/openmpi_i686/lib/liborte.so.0(orte_init_stage1 
</span><br>
<span class="quotelev1">&gt; +0x1d7) [0xb7fa0227]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [3] func:/home/kyron/openmpi_i686/lib/liborte.so.0(orte_system_init 
</span><br>
<span class="quotelev1">&gt; +0x23) [0xb7fa3683]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [4] func:/home/kyron/openmpi_i686/lib/liborte.so.0(orte_init+0x5f)  
</span><br>
<span class="quotelev1">&gt; [0xb7f9ff7f]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [5] func:mpirun(orterun+0x255) [0x804a015]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [6] func:mpirun(main+0x22) [0x8049db6]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [7] func:/lib/tls/libc.so.6(__libc_start_main+0xdb) [0xb7de8f0b]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [8] func:mpirun [0x8049d11]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The crash happens both in the chrooted env and on the nodes. I  
</span><br>
<span class="quotelev1">&gt; configured both systems to have Linux and POSIX threads, though I  
</span><br>
<span class="quotelev1">&gt; see openmpi is calling the POSIX version (a message on the mailling  
</span><br>
<span class="quotelev1">&gt; list had hinted on keeping the Linux threads around...I have to  
</span><br>
<span class="quotelev1">&gt; anyways since sone apps like Matlab extensions still depend on  
</span><br>
<span class="quotelev1">&gt; this...). The following is the output for the libc info.
</span><br>
<p>That's interesting...  We regularly build Open MPI on 32 bit Linux  
<br>
machines (and in 32 bit mode on Opteron machines) without too much  
<br>
issue.  It looks like we're jumping into a NULL pointer, which  
<br>
generally means that a ORTE framework failed to initialize itself  
<br>
properly.  It would be useful if you could rebuild with debugging  
<br>
symbols (just add -g to CFLAGS when configuring) and run mpirun in  
<br>
gdb.  If we can determine where the error is occurring, that would  
<br>
definitely help in debugging your problem.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1628.php">Brian Barrett: "Re: [OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="1626.php">Brian Barrett: "Re: [OMPI users] Openmpi, LSF and GM"</a>
<li><strong>In reply to:</strong> <a href="1624.php">Eric Thibodeau: "[OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1629.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Reply:</strong> <a href="1629.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Reply:</strong> <a href="1630.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
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
