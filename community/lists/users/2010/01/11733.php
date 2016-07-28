<?
$subject_val = "Re: [OMPI users] problem restarting multiprocess mpi application";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 16:34:11 2010" -->
<!-- isoreceived="20100111213411" -->
<!-- sent="Mon, 11 Jan 2010 16:34:08 -0500" -->
<!-- isosent="20100111213408" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem restarting multiprocess mpi application" -->
<!-- id="345A61DE-18F9-4544-8229-55220BC11BEE_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="905903.61489.qm_at_web31007.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem restarting multiprocess mpi application<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-11 16:34:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11734.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Previous message:</strong> <a href="11732.php">Josh Hursey: "Re: [OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11525.php">Kritiraj Sajadah: "[OMPI users] problem restarting multiprocess mpi application"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 13, 2009, at 3:57 PM, Kritiraj Sajadah wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;            I am running a simple mpi application which looks as  
</span><br>
<span class="quotelev1">&gt; follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ######################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;signal.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; int rank,size;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt; printf(&quot;Hello\n&quot;);
</span><br>
<span class="quotelev1">&gt; sleep(15);
</span><br>
<span class="quotelev1">&gt; printf(&quot;Hello again\n&quot; );
</span><br>
<span class="quotelev1">&gt; sleep(15);
</span><br>
<span class="quotelev1">&gt; printf(&quot;Final Hello\n&quot;);
</span><br>
<span class="quotelev1">&gt; sleep(15);
</span><br>
<span class="quotelev1">&gt; printf(&quot;bye \n&quot;);
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; #################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run my application as follows, it checkpoint correctly but  
</span><br>
<span class="quotelev1">&gt; when i try to restart it if gives the following errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ######################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi-restart ompi_global_snapshot_380.ckpt
</span><br>
<span class="quotelev1">&gt; Hello again
</span><br>
<span class="quotelev1">&gt; [sun06:00381] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [sun06:00381] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [sun06:00381] Signal code:  (2)
</span><br>
<span class="quotelev1">&gt; [sun06:00381] Failing at address: 0xae7cb054
</span><br>
<span class="quotelev1">&gt; [sun06:00381] [ 0] [0xb7f8640c]
</span><br>
<span class="quotelev1">&gt; [sun06:00381] [ 1] /home/raj/openmpisof/lib/libopen-pal.so. 
</span><br>
<span class="quotelev1">&gt; 0(opal_progress+0x123) [0xb7b95456]
</span><br>
<span class="quotelev1">&gt; [sun06:00381] [ 2] /home/raj/openmpisof/lib/libopen-pal.so.0  
</span><br>
<span class="quotelev1">&gt; [0xb7bcb093]
</span><br>
<span class="quotelev1">&gt; [sun06:00381] [ 3] /home/raj/openmpisof/lib/libopen-pal.so.0  
</span><br>
<span class="quotelev1">&gt; [0xb7bcae97]
</span><br>
<span class="quotelev1">&gt; [sun06:00381] [ 4] /home/raj/openmpisof/lib/libopen-pal.so. 
</span><br>
<span class="quotelev1">&gt; 0(opal_crs_blcr_checkpoint+0x187) [0xb7bca69b]
</span><br>
<span class="quotelev1">&gt; [sun06:00381] [ 5] /home/raj/openmpisof/lib/libopen-pal.so. 
</span><br>
<span class="quotelev1">&gt; 0(opal_cr_inc_core+0xc3) [0xb7b970bd]
</span><br>
<span class="quotelev1">&gt; [sun06:00381] [ 6] /home/raj/openmpisof/lib/libopen-rte.so.0  
</span><br>
<span class="quotelev1">&gt; [0xb7cab06f]
</span><br>
<span class="quotelev1">&gt; [sun06:00381] [ 7] /home/raj/openmpisof/lib/libopen-pal.so. 
</span><br>
<span class="quotelev1">&gt; 0(opal_cr_test_if_checkpoint_ready+0x129) [0xb7b96fca]
</span><br>
<span class="quotelev1">&gt; [sun06:00381] [ 8] /home/raj/openmpisof/lib/libopen-pal.so.0  
</span><br>
<span class="quotelev1">&gt; [0xb7b97698]
</span><br>
<span class="quotelev1">&gt; [sun06:00381] [ 9] /lib/libpthread.so.0 [0xb7ac4f3b]
</span><br>
<span class="quotelev1">&gt; [sun06:00381] [10] /lib/libc.so.6(clone+0x5e) [0xb7a4bbee]
</span><br>
<span class="quotelev1">&gt; [sun06:00381] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 399 on node sun06 exited  
</span><br>
<span class="quotelev1">&gt; on signal 7 (Bus error).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #####################################################################
</span><br>
<p>This could be caused by a variety of things, including a bad BLCR  
<br>
installation. :/
<br>
<p>Are you sure that your application was between MPI_Init() and  
<br>
MPI_Finalize() when you checkpointed?
<br>
<p><span class="quotelev1">&gt; I am running it as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ################################################################
</span><br>
<span class="quotelev1">&gt; mpirun -am ft-enable-cr -np 2 -mca btl ^openib -mca  
</span><br>
<span class="quotelev1">&gt; snapc_base_global_snapshot_dir /tmp mpisleepbas.
</span><br>
<span class="quotelev1">&gt; ################################################################
</span><br>
<p>Try specifying the MCA parameters in your $HOME/.openmpi/mca- 
<br>
params.conf file.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once a checkpoint it taken, I have to copy it to the home directory  
</span><br>
<span class="quotelev1">&gt; and try to restart it.
</span><br>
<p>The manual movement of the checkpoint file is not currently supported.  
<br>
I filed a bug about it if you want to track it:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2161">https://svn.open-mpi.org/trac/ompi/ticket/2161</a>
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; please not that if i used - np 1, it works fine when i restart it.  
</span><br>
<span class="quotelev1">&gt; The problem is mainly when the application has more than one process  
</span><br>
<span class="quotelev1">&gt; running.
</span><br>
<p>Are the processes on the same machines or different machines?
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help will be very appreciated
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Raj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11734.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Previous message:</strong> <a href="11732.php">Josh Hursey: "Re: [OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11525.php">Kritiraj Sajadah: "[OMPI users] problem restarting multiprocess mpi application"</a>
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
