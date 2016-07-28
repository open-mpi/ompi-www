<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul 16 18:13:40 2006" -->
<!-- isoreceived="20060716221340" -->
<!-- sent="Sun, 16 Jul 2006 18:13:13 -0400" -->
<!-- isosent="20060716221313" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR" -->
<!-- id="200607161813.14134.kyron_at_neuralbs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E89704A0-4F55-49E3-9C60-E91FD4C418DD_at_open-mpi.org" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-16 18:13:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1631.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Previous message:</strong> <a href="1629.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>In reply to:</strong> <a href="1627.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1631.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Reply:</strong> <a href="1631.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
/me blushes in shame, it would seem that all I needed to do since the begining was to run a make distclean. I apprantly had some old compiled files lying around. Now I get:
<br>
<p>kyron_at_headless ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2 $ mpirun  --hostfile hostlist -np 4 uname -a
<br>
Linux headless 2.6.17-ck1-r1 #1 SMP Tue Jul 11 16:39:18 EDT 2006 x86_64 AMD Opteron(tm) Processor 244 GNU/Linux
<br>
Linux headless 2.6.17-ck1-r1 #1 SMP Tue Jul 11 16:39:18 EDT 2006 x86_64 AMD Opteron(tm) Processor 244 GNU/Linux
<br>
Linux node0 2.6.16-gentoo-r7 #5 Tue Jul 11 12:30:41 EDT 2006 i686 AMD Athlon(TM) XP 2500+ GNU/Linux
<br>
Linux node1 2.6.16-gentoo-r7 #5 Tue Jul 11 12:30:41 EDT 2006 i686 AMD Athlon(TM) XP 2500+ GNU/Linux
<br>
<p>Which is correct. Sorry for the misfire, I hadn't thought of cleaning up the compilation dir...
<br>
<p>Now that I have that out of the way, I'd like to know how I am supposed to compile my apps so that they can run on an homogenous network with mpi. Here is an example:
<br>
kyron_at_headless ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2 $ mpicc -L/usr/X/lib -lm -lX11 -O3 mandelbrot-mpi.c -o mandelbrot-mpi
<br>
kyron_at_headless ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2 $ mpirun --hostfile hostlist -np 3 ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2/mandelbrot-mpi
<br>
--------------------------------------------------------------------------
<br>
Could not execute the executable &quot;/home/kyron/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2/mandelbrot-mpi&quot;: Exec format error
<br>
<p>This could mean that your PATH or executable name is wrong, or that you do not
<br>
have the necessary permissions.  Please ensure that the executable is able to be
<br>
found and executed.
<br>
--------------------------------------------------------------------------
<br>
As can be seen with the uname -a that was run previously, I have 2 &quot;local nodes&quot; on the x86_64 and two i686 nodes. I tried to find examples in the Doc on howto compile applications correctly for such a setup without compromising performance but I came short of an example.
<br>
<p>Thanks,
<br>
<p>Eric
<br>
PS: I know..maybe I should start another thread ;)
<br>
<p>Le dimanche 16 juillet 2006 14:31, Brian Barrett a &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; On Jul 15, 2006, at 2:58 PM, Eric Thibodeau wrote:
</span><br>
<span class="quotelev2">&gt; &gt; But, for some reason, on the Athlon node (in their image on the  
</span><br>
<span class="quotelev2">&gt; &gt; server I should say) OpenMPI still doesn't seem to be built  
</span><br>
<span class="quotelev2">&gt; &gt; correctly since it crashes as follows:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; kyron_at_node0 ~ $ mpirun -np 1 uptime
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Failing at addr:(nil)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [0] func:/home/kyron/openmpi_i686/lib/libopal.so.0 [0xb7f6258f]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [1] func:[0xffffe440]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [2] func:/home/kyron/openmpi_i686/lib/liborte.so.0(orte_init_stage1 
</span><br>
<span class="quotelev2">&gt; &gt; +0x1d7) [0xb7fa0227]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [3] func:/home/kyron/openmpi_i686/lib/liborte.so.0(orte_system_init 
</span><br>
<span class="quotelev2">&gt; &gt; +0x23) [0xb7fa3683]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [4] func:/home/kyron/openmpi_i686/lib/liborte.so.0(orte_init+0x5f)  
</span><br>
<span class="quotelev2">&gt; &gt; [0xb7f9ff7f]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [5] func:mpirun(orterun+0x255) [0x804a015]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [6] func:mpirun(main+0x22) [0x8049db6]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [7] func:/lib/tls/libc.so.6(__libc_start_main+0xdb) [0xb7de8f0b]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [8] func:mpirun [0x8049d11]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The crash happens both in the chrooted env and on the nodes. I  
</span><br>
<span class="quotelev2">&gt; &gt; configured both systems to have Linux and POSIX threads, though I  
</span><br>
<span class="quotelev2">&gt; &gt; see openmpi is calling the POSIX version (a message on the mailling  
</span><br>
<span class="quotelev2">&gt; &gt; list had hinted on keeping the Linux threads around...I have to  
</span><br>
<span class="quotelev2">&gt; &gt; anyways since sone apps like Matlab extensions still depend on  
</span><br>
<span class="quotelev2">&gt; &gt; this...). The following is the output for the libc info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's interesting...  We regularly build Open MPI on 32 bit Linux  
</span><br>
<span class="quotelev1">&gt; machines (and in 32 bit mode on Opteron machines) without too much  
</span><br>
<span class="quotelev1">&gt; issue.  It looks like we're jumping into a NULL pointer, which  
</span><br>
<span class="quotelev1">&gt; generally means that a ORTE framework failed to initialize itself  
</span><br>
<span class="quotelev1">&gt; properly.  It would be useful if you could rebuild with debugging  
</span><br>
<span class="quotelev1">&gt; symbols (just add -g to CFLAGS when configuring) and run mpirun in  
</span><br>
<span class="quotelev1">&gt; gdb.  If we can determine where the error is occurring, that would  
</span><br>
<span class="quotelev1">&gt; definitely help in debugging your problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Eric Thibodeau
Neural Bucket Solutions Inc.
T. (514) 736-1436
C. (514) 710-0517
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1630/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1631.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Previous message:</strong> <a href="1629.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>In reply to:</strong> <a href="1627.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1631.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Reply:</strong> <a href="1631.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
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
