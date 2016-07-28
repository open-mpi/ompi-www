<?
$subject_val = "[OMPI users] Communications problems w/OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 18 03:15:13 2008" -->
<!-- isoreceived="20081218081513" -->
<!-- sent="Thu, 18 Dec 2008 00:15:13 -0800" -->
<!-- isosent="20081218081513" -->
<!-- name="deadchicken_at_[hidden]" -->
<!-- email="deadchicken_at_[hidden]" -->
<!-- subject="[OMPI users] Communications problems w/OpenMPI" -->
<!-- id="494A0691.1090408_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Communications problems w/OpenMPI<br>
<strong>From:</strong> <a href="mailto:deadchicken_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Communications%20problems%20w/OpenMPI"><em>deadchicken_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-12-18 03:15:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7559.php">Jeroen Kleijer: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="7557.php">Jeff Squyres: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7559.php">Jeroen Kleijer: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>Reply:</strong> <a href="7559.php">Jeroen Kleijer: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been trying to get OpenMPI to work on Amazon's EC2 but I've been
<br>
running into a communications problem. Here is the source (typical
<br>
Hello, World):
<br>
<p><p><span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(argc,argv)
</span><br>
<span class="quotelev1">&gt; int argc;
</span><br>
<span class="quotelev1">&gt; char *argv[];
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int myid, numprocs;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     printf (&quot;%d of %d: Hello world!\n&quot;, myid, numprocs);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p><p>After compiling it, I copied it over to the other machine and tried
<br>
running it with:
<br>
<p>mpirun -v --mca btl self,tcp -np 4 --machinefile machines /mnt/mpihw
<br>
<p>which produces:
<br>
<p>--------------------------------------------------------------------------
<br>
Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
<br>
If you specified the use of a BTL component, you may have
<br>
forgotten a component (such as &quot;self&quot;) in the list of
<br>
usable components.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
--------------------------------------------------------------------------
<br>
Process 0.1.3 is unable to reach 0.1.0 for MPI communication.
<br>
If you specified the use of a BTL component, you may have
<br>
forgotten a component (such as &quot;self&quot;) in the list of
<br>
usable components.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[domU-12-31-39-02-F5-13:03965] [0,0,0]-[0,1,0] mca_oob_tcp_msg_recv:
<br>
readv failed: Connection reset by peer (104)
<br>
[domU-12-31-39-02-F5-13:03965] [0,0,0]-[0,1,2] mca_oob_tcp_msg_recv:
<br>
readv failed: Connection reset by peer (104)
<br>
mpirun noticed that job rank 0 with PID 3653 on node
<br>
domU-12-31-39-00-B2-23 exited on signal 15 (Terminated).
<br>
1 additional process aborted (not shown)
<br>
<p><p><p>AFAIK, the machines are able to communicate with each other on any port
<br>
you like, just not with MPI. Any idea what's wrong?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7559.php">Jeroen Kleijer: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="7557.php">Jeff Squyres: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7559.php">Jeroen Kleijer: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>Reply:</strong> <a href="7559.php">Jeroen Kleijer: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
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
