<?
$subject_val = "Re: [OMPI users] Regarding hyperthreding";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 14 10:15:00 2012" -->
<!-- isoreceived="20120814141500" -->
<!-- sent="Tue, 14 Aug 2012 16:14:56 +0200" -->
<!-- isosent="20120814141456" -->
<!-- name="seshendra seshu" -->
<!-- email="seshu199_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding hyperthreding" -->
<!-- id="CAJ_xm3AFhVH3=6c+A2e1Lw4kWdFK-2cwbyRukQ223rJPpg4O3w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1D05D95A-2BAB-4037-9E0B-93B2FC7C27CC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regarding hyperthreding<br>
<strong>From:</strong> seshendra seshu (<em>seshu199_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-14 10:14:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19943.php">Zbigniew Koza: "[OMPI users] RDMA GPUDirect CUDA..."</a>
<li><strong>Previous message:</strong> <a href="19941.php">Jeff Squyres: "Re: [OMPI users] Regarding hyperthreding"</a>
<li><strong>In reply to:</strong> <a href="19941.php">Jeff Squyres: "Re: [OMPI users] Regarding hyperthreding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19943.php">Zbigniew Koza: "[OMPI users] RDMA GPUDirect CUDA..."</a>
<li><strong>Reply:</strong> <a href="19943.php">Zbigniew Koza: "[OMPI users] RDMA GPUDirect CUDA..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I was about tell that i have written an MPI code in which i have specified
<br>
only for the communication between nodes and i dont whether can i run
<br>
program as per my requirement i.e to use the cores present in my node (all
<br>
4 cores). So my doubt is should i need to include pthreads or the program
<br>
which i have written is sufficient.
<br>
<p>My program gives the output has MPI-size=4
<br>
&nbsp;time at node1:
<br>
time at node 2:
<br>
time at node3:
<br>
time at node 4:
<br>
<p><p>This is what i was explaining.
<br>
<p><p>On Tue, Aug 14, 2012 at 2:17 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 14, 2012, at 7:55 AM, seshendra seshu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I haven't still changed my code to run when threading is  needed
</span><br>
<span class="quotelev1">&gt; (presently working).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm afraid I can't parse that sentence; I don't know what you mean.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have doubt that when i calculate the MPI ranks using the MPI command
</span><br>
<span class="quotelev1">&gt;  it gives only the nodes which have given in a host file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure what this is saying, either.  Sorry!  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are running in a scheduled environment (e.g., under the SLURM or
</span><br>
<span class="quotelev1">&gt; Torque/PBS schedulers), then Open MPI will find out from the schedule how
</span><br>
<span class="quotelev1">&gt; many processors are on that machine and react accordingly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Otherwise, if you are running in an unscheduled environment (e.g., if you
</span><br>
<span class="quotelev1">&gt; just specify a hostfile to tell Open MPI where to run), then you need to
</span><br>
<span class="quotelev1">&gt; tell Open MPI how many processes you want it to launch on each node.  Per
</span><br>
<span class="quotelev1">&gt; Tom's advice, we usually recommend running -- at most -- one MPI process
</span><br>
<span class="quotelev1">&gt; per core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; But how can i calculate the MPI ranks as you have told i.e N=H(
</span><br>
<span class="quotelev1">&gt;  number of CPUs showing on a node ) x M ( number of nodes in a cluster).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Use the Hwloc utility &quot;lstopo&quot; to give you a graphical depiction of the
</span><br>
<span class="quotelev1">&gt; internal topology of your machine(s).
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then you can count how many cores are on your machine and set your
</span><br>
<span class="quotelev1">&gt; hostfile accordingly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; And I would like test like this if have 2 nodes and where I can use up
</span><br>
<span class="quotelev1">&gt; to 50 cores. I would like to scale like 2,4,8,16,32,45 cores and at the
</span><br>
<span class="quotelev1">&gt; same time if use 8 cores then I would like to take the readings as node1-
</span><br>
<span class="quotelev1">&gt; 3cores and node2-5 cores. So in order to do that should I need mention
</span><br>
<span class="quotelev1">&gt; anything in the host file as I have mentioned the No.of nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In general, just list how many slots you have on each machine in the
</span><br>
<span class="quotelev1">&gt; hostfile and then use mpirun's -np and -npernode options to specify how
</span><br>
<span class="quotelev1">&gt; many total processes to run and how many to run per machine.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; shell$ cat hostfile
</span><br>
<span class="quotelev1">&gt; # This hostfile represents 2 Intel Romley-based servers; 16 cores each
</span><br>
<span class="quotelev1">&gt; server1 slots=16
</span><br>
<span class="quotelev1">&gt; server2 slots=16
</span><br>
<span class="quotelev1">&gt; shell$ mpirun --hostfile hostfile -np 4 --npernode 2 my_mpi_executable
</span><br>
<span class="quotelev1">&gt; # ^^ this runs a total of 4 MPI processes, 2 on each node
</span><br>
<span class="quotelev1">&gt; shell$ mpirun --hostfile hostfile -np 16 --npernode 8 my_mpi_executable
</span><br>
<span class="quotelev1">&gt; # ^^ this runs a total of 16 MPI processes, 8 on each node
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...and so on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
 WITH REGARDS
M.L.N.Seshendra
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19942/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19943.php">Zbigniew Koza: "[OMPI users] RDMA GPUDirect CUDA..."</a>
<li><strong>Previous message:</strong> <a href="19941.php">Jeff Squyres: "Re: [OMPI users] Regarding hyperthreding"</a>
<li><strong>In reply to:</strong> <a href="19941.php">Jeff Squyres: "Re: [OMPI users] Regarding hyperthreding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19943.php">Zbigniew Koza: "[OMPI users] RDMA GPUDirect CUDA..."</a>
<li><strong>Reply:</strong> <a href="19943.php">Zbigniew Koza: "[OMPI users] RDMA GPUDirect CUDA..."</a>
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
