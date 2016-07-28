<?
$subject_val = "Re: [OMPI users] openmpi/ib noob question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 09:10:07 2009" -->
<!-- isoreceived="20090212141007" -->
<!-- sent="Thu, 12 Feb 2009 09:12:11 -0500" -->
<!-- isosent="20090212141211" -->
<!-- name="Gary Draving" -->
<!-- email="gbd2_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi/ib noob question" -->
<!-- id="49942E3B.3090502_at_calvin.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F29DA001-06B2-4E19-B1EF-32D31D89EF9C_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi/ib noob question<br>
<strong>From:</strong> Gary Draving (<em>gbd2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 09:12:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8036.php">Siegmar Gross: "[OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-4.3.2"</a>
<li><strong>Previous message:</strong> <a href="8034.php">Siegmar Gross: "[OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
<li><strong>In reply to:</strong> <a href="8025.php">Ralph Castain: "Re: [OMPI users] openmpi/ib noob question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, thanks, that seems to have been the problem,
<br>
Gary
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; The ^ applies to everything that follows, so you just turned off all 
</span><br>
<span class="quotelev1">&gt; of the tcp, self, and openib comm paths. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you just wanted to drop tcp from that list, you should just use 
</span><br>
<span class="quotelev1">&gt; -mca btl self,openib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 11, 2009, at 2:01 PM, Gary Draving wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When running the followng program on 4 of my nodes I get the expected 
</span><br>
<span class="quotelev2">&gt;&gt; response:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/usr/local/bin/mpirun --mca btl tcp,self,openib --hostfile ibnodes 
</span><br>
<span class="quotelev2">&gt;&gt; -np 4 hello_c&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 0 of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 2 of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 1 of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 3 of 4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But when I run it with ^TCP &quot;/usr/local/bin/mpirun --mca btl 
</span><br>
<span class="quotelev2">&gt;&gt; ^tcp,self,openib --hostfile ibnodes -np 4 hello_c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the following:.  Does this mean my mpi (openmpi 1.3) is not 
</span><br>
<span class="quotelev2">&gt;&gt; configured properly w/ ib support?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any help you can give me.
</span><br>
<span class="quotelev2">&gt;&gt; Gary
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 ([[7579,1],1]) is on host: compute-0-1.local
</span><br>
<span class="quotelev2">&gt;&gt; Process 2 ([[7579,1],0]) is on host: 11
</span><br>
<span class="quotelev2">&gt;&gt; BTLs attempted: sm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or 
</span><br>
<span class="quotelev2">&gt;&gt; environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-1.local:1763] Abort before MPI_INIT completed 
</span><br>
<span class="quotelev2">&gt;&gt; successfully; not able to guarantee that all other processes were 
</span><br>
<span class="quotelev2">&gt;&gt; killed!
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-0.local:12308] Abort before MPI_INIT completed 
</span><br>
<span class="quotelev2">&gt;&gt; successfully; not able to guarantee that all other processes were 
</span><br>
<span class="quotelev2">&gt;&gt; killed!
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-3.local:14123] Abort before MPI_INIT completed 
</span><br>
<span class="quotelev2">&gt;&gt; successfully; not able to guarantee that all other processes were 
</span><br>
<span class="quotelev2">&gt;&gt; killed!
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-2.local:19185] Abort before MPI_INIT completed 
</span><br>
<span class="quotelev2">&gt;&gt; successfully; not able to guarantee that all other processes were 
</span><br>
<span class="quotelev2">&gt;&gt; killed!
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 1 with PID 1763 on
</span><br>
<span class="quotelev2">&gt;&gt; node 11.2.0.1 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [dahl.calvin.edu:21712] 3 more processes have sent help message 
</span><br>
<span class="quotelev2">&gt;&gt; help-mca-bml-r2.txt / unreachable proc
</span><br>
<span class="quotelev2">&gt;&gt; [dahl.calvin.edu:21712] Set MCA parameter &quot;orte_base_help_aggregate&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; to 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt; [dahl.calvin.edu:21712] 3 more processes have sent help message 
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8036.php">Siegmar Gross: "[OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-4.3.2"</a>
<li><strong>Previous message:</strong> <a href="8034.php">Siegmar Gross: "[OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
<li><strong>In reply to:</strong> <a href="8025.php">Ralph Castain: "Re: [OMPI users] openmpi/ib noob question"</a>
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
