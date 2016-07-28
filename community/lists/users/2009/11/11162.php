<?
$subject_val = "Re: [OMPI users] mpirun noticed that process rank 1 ... exited on signal 13 (Broken pipe).";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 11:58:16 2009" -->
<!-- isoreceived="20091111165816" -->
<!-- sent="Wed, 11 Nov 2009 08:58:10 -0800" -->
<!-- isosent="20091111165810" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun noticed that process rank 1 ... exited on signal 13 (Broken pipe)." -->
<!-- id="1199B8B0-B436-4393-BAC8-B8C1DB7FBE5A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="812745.57131.qm_at_web31006.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun noticed that process rank 1 ... exited on signal 13 (Broken pipe).<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 11:58:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11163.php">amjad ali: "[OMPI users] MPI Derived datatype + Persistent communication"</a>
<li><strong>Previous message:</strong> <a href="11161.php">Josh Hursey: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>In reply to:</strong> <a href="11092.php">Kritiraj Sajadah: "[OMPI users] mpirun noticed that process rank 1 ... exited on signal 13 (Broken pipe)."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 6, 2009, at 7:59 AM, Kritiraj Sajadah wrote:
<br>
<p><span class="quotelev1">&gt; Hi Everyone,
</span><br>
<span class="quotelev1">&gt;              I have install openmpi 1.3 and blcr 0.81 on my laptop (single processor).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to checkpoint a small test application:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###########
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include&lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include&lt;signal.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; int rank,size;
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt; printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
</span><br>
<span class="quotelev1">&gt; system(&quot;sleep 10&quot;);
</span><br>
<span class="quotelev1">&gt; printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
</span><br>
<span class="quotelev1">&gt; system(&quot;sleep 10&quot;);
</span><br>
<span class="quotelev1">&gt; printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
</span><br>
<span class="quotelev1">&gt; system(&quot;sleep 10&quot;);
</span><br>
<span class="quotelev1">&gt; printf(&quot;mpisleep bye \n&quot;);
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ###################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compile it as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc mpisleep.c -o mpisleep
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and i run it as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -am ft-enable-cr -np 2 mpisleep.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When i try checkpointing ( ompi-checkpoint -v 8118) it, it checkpoints fine but when i restart it, i get the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am processor no 0 of a total of 2 procs 
</span><br>
<span class="quotelev1">&gt; I am processor no 1 of a total of 2 procs 
</span><br>
<span class="quotelev1">&gt; mpisleep bye 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 8118 on node raj-laptop exited on signal 13 (Broken pipe).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p>Does the behavior change if you remove the 'system()' calls and replace them with 'sleep()'. The 'system()' call is a shorthand for fork/exec. fork/exec has been known to cause problems when called my an MPI process.
<br>
<p>Give that a try and let me know if it helps.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions is very much appreciated
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
<li><strong>Next message:</strong> <a href="11163.php">amjad ali: "[OMPI users] MPI Derived datatype + Persistent communication"</a>
<li><strong>Previous message:</strong> <a href="11161.php">Josh Hursey: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>In reply to:</strong> <a href="11092.php">Kritiraj Sajadah: "[OMPI users] mpirun noticed that process rank 1 ... exited on signal 13 (Broken pipe)."</a>
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
