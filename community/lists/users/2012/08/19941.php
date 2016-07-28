<?
$subject_val = "Re: [OMPI users] Regarding hyperthreding";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 14 08:17:20 2012" -->
<!-- isoreceived="20120814121720" -->
<!-- sent="Tue, 14 Aug 2012 08:17:13 -0400" -->
<!-- isosent="20120814121713" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding hyperthreding" -->
<!-- id="1D05D95A-2BAB-4037-9E0B-93B2FC7C27CC_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAJ_xm3BOMuRjQyV=c5yoRTqSwNqQvVvw+xqBQ3UdURxXqOhR9w_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-14 08:17:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19942.php">seshendra seshu: "Re: [OMPI users] Regarding hyperthreding"</a>
<li><strong>Previous message:</strong> <a href="19940.php">seshendra seshu: "Re: [OMPI users] Regarding hyperthreding"</a>
<li><strong>In reply to:</strong> <a href="19940.php">seshendra seshu: "Re: [OMPI users] Regarding hyperthreding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19942.php">seshendra seshu: "Re: [OMPI users] Regarding hyperthreding"</a>
<li><strong>Reply:</strong> <a href="19942.php">seshendra seshu: "Re: [OMPI users] Regarding hyperthreding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 14, 2012, at 7:55 AM, seshendra seshu wrote:
<br>
<p><span class="quotelev1">&gt; I haven't still changed my code to run when threading is  needed (presently working). 
</span><br>
<p>I'm afraid I can't parse that sentence; I don't know what you mean.
<br>
<p><span class="quotelev1">&gt; I have doubt that when i calculate the MPI ranks using the MPI command  it gives only the nodes which have given in a host file.
</span><br>
<p>I'm not sure what this is saying, either.  Sorry!  :-(
<br>
<p>If you are running in a scheduled environment (e.g., under the SLURM or Torque/PBS schedulers), then Open MPI will find out from the schedule how many processors are on that machine and react accordingly.
<br>
<p>Otherwise, if you are running in an unscheduled environment (e.g., if you just specify a hostfile to tell Open MPI where to run), then you need to tell Open MPI how many processes you want it to launch on each node.  Per Tom's advice, we usually recommend running -- at most -- one MPI process per core.
<br>
<p><span class="quotelev1">&gt; But how can i calculate the MPI ranks as you have told i.e N=H(    number of CPUs showing on a node ) x M ( number of nodes in a cluster).
</span><br>
<p>Use the Hwloc utility &quot;lstopo&quot; to give you a graphical depiction of the internal topology of your machine(s).  <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>Then you can count how many cores are on your machine and set your hostfile accordingly.
<br>
<p><span class="quotelev1">&gt; And I would like test like this if have 2 nodes and where I can use up to 50 cores. I would like to scale like 2,4,8,16,32,45 cores and at the same time if use 8 cores then I would like to take the readings as node1- 3cores and node2-5 cores. So in order to do that should I need mention anything in the host file as I have mentioned the No.of nodes.
</span><br>
<p>In general, just list how many slots you have on each machine in the hostfile and then use mpirun's -np and -npernode options to specify how many total processes to run and how many to run per machine.  For example:
<br>
<p>-----
<br>
shell$ cat hostfile
<br>
# This hostfile represents 2 Intel Romley-based servers; 16 cores each
<br>
server1 slots=16
<br>
server2 slots=16
<br>
shell$ mpirun --hostfile hostfile -np 4 --npernode 2 my_mpi_executable
<br>
# ^^ this runs a total of 4 MPI processes, 2 on each node
<br>
shell$ mpirun --hostfile hostfile -np 16 --npernode 8 my_mpi_executable
<br>
# ^^ this runs a total of 16 MPI processes, 8 on each node
<br>
-----
<br>
<p>...and so on.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19942.php">seshendra seshu: "Re: [OMPI users] Regarding hyperthreding"</a>
<li><strong>Previous message:</strong> <a href="19940.php">seshendra seshu: "Re: [OMPI users] Regarding hyperthreding"</a>
<li><strong>In reply to:</strong> <a href="19940.php">seshendra seshu: "Re: [OMPI users] Regarding hyperthreding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19942.php">seshendra seshu: "Re: [OMPI users] Regarding hyperthreding"</a>
<li><strong>Reply:</strong> <a href="19942.php">seshendra seshu: "Re: [OMPI users] Regarding hyperthreding"</a>
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
