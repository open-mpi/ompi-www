<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 10 01:37:00 2007" -->
<!-- isoreceived="20071010053700" -->
<!-- sent="Tue, 9 Oct 2007 22:06:56 +0200" -->
<!-- isosent="20071009200656" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem in runing MPI job through XGrid" -->
<!-- id="01EB6BDA-23D5-492C-A48C-513A1D1AC533_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="11a712d60710041429j1a259618v45d8ea5c4d385f94_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-09 16:06:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4188.php">Josh Hursey: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<li><strong>Previous message:</strong> <a href="4186.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<li><strong>In reply to:</strong> <a href="4154.php">Jinhui Qin: "[OMPI users] problem in runing MPI job through XGrid"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Our Mac expert (Brian Barrett) just recently left the project for  
<br>
greener pastures.  He's the guy who typically answered Mac/XGrid  
<br>
questions -- I'm afraid that I have no idea how any of that XGrid  
<br>
stuff works...  :-(
<br>
<p>Is there anyone else around who can answer XGrid questions?  Warner?
<br>
<p><p>On Oct 4, 2007, at 11:29 PM, Jinhui Qin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I have set up an Xgrid including one laptop and 7 Mac mini nodes  
</span><br>
<span class="quotelev1">&gt; (all are duo core machines). I have also installed openMPI (openmpi  
</span><br>
<span class="quotelev1">&gt; 1.2.1) on all nodes. The laptop node (hostname: sib) has three  
</span><br>
<span class="quotelev1">&gt; roles: agent, controller and client, all the other nodes are only  
</span><br>
<span class="quotelev1">&gt; agents.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I started &quot;mpirun -n 8 /bin/hostname&quot; on my laptop node  
</span><br>
<span class="quotelev1">&gt; terminal, it shows all 8 nodes' hostnames correctly. It seems that  
</span><br>
<span class="quotelev1">&gt; xgrid works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I wanted to run a simple mpi code. The source code &quot;Hello.c&quot;  
</span><br>
<span class="quotelev1">&gt; has been compiled (use mpicc) and the excuatalbe &quot;Hello&quot; has been  
</span><br>
<span class="quotelev1">&gt; copied to each node under same path(I have also tested they all run  
</span><br>
<span class="quotelev1">&gt; properly on each of the local nodes.). when I asked for 1 or 2  
</span><br>
<span class="quotelev1">&gt; processors to run the job, xgrid worked fine, but when I asked for  
</span><br>
<span class="quotelev1">&gt; 3 or more processors, all jobs were failed. Following are the  
</span><br>
<span class="quotelev1">&gt; commands and the results/messages that I got.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anybody help me out?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *************************************
</span><br>
<span class="quotelev1">&gt; running &quot;hostname&quot; and the results, they looks good.
</span><br>
<span class="quotelev1">&gt; *************************************
</span><br>
<span class="quotelev1">&gt; sib:sharcnet$ mpirun -n 8 /bin/hostname
</span><br>
<span class="quotelev1">&gt; node2
</span><br>
<span class="quotelev1">&gt; node8
</span><br>
<span class="quotelev1">&gt; node4
</span><br>
<span class="quotelev1">&gt; node5
</span><br>
<span class="quotelev1">&gt; node3
</span><br>
<span class="quotelev1">&gt; node7
</span><br>
<span class="quotelev1">&gt; sib
</span><br>
<span class="quotelev1">&gt; node6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *************************************
</span><br>
<span class="quotelev1">&gt; the simple mpi program Hello.c source code
</span><br>
<span class="quotelev1">&gt; *************************************
</span><br>
<span class="quotelev1">&gt; #include
</span><br>
<span class="quotelev1">&gt; #include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt; int numprocs, rank, namelen;
</span><br>
<span class="quotelev1">&gt; char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; printf(&quot;Process %d on %s out of %d\n&quot;, rank, processor_name,  
</span><br>
<span class="quotelev1">&gt; numprocs);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *************************************
</span><br>
<span class="quotelev1">&gt; ask for 1 and 2 processors to run &quot;Hello&quot;
</span><br>
<span class="quotelev1">&gt; and the results are all good
</span><br>
<span class="quotelev1">&gt; *************************************
</span><br>
<span class="quotelev1">&gt; sib:sharcnet$ mpirun -n 1 ~/openMPI_sutuff/Hello
</span><br>
<span class="quotelev1">&gt; Process 0 on sib out of 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sib:sharcnet$ mpiurun -n 2 ~/openMPI_stuff/Hello
</span><br>
<span class="quotelev1">&gt; Process 1 on node2 out of 2
</span><br>
<span class="quotelev1">&gt; Process 0 on sib out of 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *************************************
</span><br>
<span class="quotelev1">&gt; Here is the problem when
</span><br>
<span class="quotelev1">&gt; ask for 3 processors to run the job,
</span><br>
<span class="quotelev1">&gt; following are all the messages I got
</span><br>
<span class="quotelev1">&gt; *************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sib:sharcnet$ mpirun -n 3 ~/openMPI_stuff/Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process 0.1.1 is unable to reach 0.1.2 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process 0.1.2 is unable to reach 0.1.1 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PML add procs failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PML add procs failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 817 on node xgrid-node-0  
</span><br>
<span class="quotelev1">&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sib:sharcnet$
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4188.php">Josh Hursey: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<li><strong>Previous message:</strong> <a href="4186.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<li><strong>In reply to:</strong> <a href="4154.php">Jinhui Qin: "[OMPI users] problem in runing MPI job through XGrid"</a>
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
