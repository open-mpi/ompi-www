<?
$subject_val = "[OMPI users] Infiniband performance Problem and stalling";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 31 03:53:07 2012" -->
<!-- isoreceived="20120831075307" -->
<!-- sent="Fri, 31 Aug 2012 00:53:02 -0700 (PDT)" -->
<!-- isosent="20120831075302" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="[OMPI users] Infiniband performance Problem and stalling" -->
<!-- id="1346399582.58899.YahooMailNeo_at_web121002.mail.ne1.yahoo.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Infiniband performance Problem and stalling<br>
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-31 03:53:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20080.php">Jeff Squyres: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
<li><strong>Previous message:</strong> <a href="20078.php">Ammar Ahmad Awan: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20099.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20099.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(reposted with&#194;&#160;consolidated&#194;&#160;information)
I have a test rig comprising 2 i7 systems 8GB RAM with Melanox III
HCA 10G cards
running Centos 5.7 Kernel 2.6.18-274
Open MPI 1.4.3
MLNX_OFED_LINUX-1.5.3-1.0.0.2 (OFED-1.5.3-1.0.0.2):
On a Cisco 24 pt switch
&#194;&#160;
Normal performance is:
$ mpirun --mca btl openib,self -n 2 -hostfile mpi.hosts
&#194;&#160;PingPong
results in:
&#194;&#160;Max rate = 958.388867 MB/sec &#194;&#160;Min latency = 4.529953
usec
and:
$ mpirun --mca btl tcp,self -n 2 -hostfile mpi.hosts
&#194;&#160;PingPong
Max rate = 653.547293 MB/sec &#194;&#160;Min latency = 19.550323 usec
&#194;&#160;
NetPipeMPI&#194;&#160; results
show a max of 7.4 Gb/s at 8388605 bytes which seems fine.
log_num_mtt =20 and&#194;&#160;log_mtts_per_seg params
=2
&#194;&#160;
My application exchanges about a gig of data between the processes
with 2 sender and 2 consumer processes on each node with 1 additional controller
process on the starting node. 
The program splits the data into 64K blocks and uses non blocking
sends and receives with busy/sleep loops to monitor progress until completion.
Each process owns a single buffer for these 64K blocks.
&#194;&#160;
&#194;&#160;
My problem is I see better performance under IPoIB then I do on
native IB (RDMA_CM).
My understanding is that IPoIB is limited to about 1G/s so I am at
a loss to know why it is faster.
&#194;&#160;
These 2 configurations are equivelant (about 8-10 seconds per
cycle)
mpirun --mca btl_openib_flags 2 --mca mpi_leave_pinned 1 --mca btl
tcp,self -H vh2,vh1 -np 9 --bycore prog
mpirun --mca btl_openib_flags 3 --mca mpi_leave_pinned 1 --mca btl
tcp,self -H vh2,vh1 -np 9 --bycore prog
&#194;&#160;
And this one produces similar run times but seems to degrade with
repeated cycles:
mpirun --mca btl_openib_eager_limit 64 --mca mpi_leave_pinned 1
--mca btl openib,self -H vh2,vh1 -np 9 --bycore &#194;&#160;prog
&#194;&#160;
Other &#194;&#160;btl_openib_flags settings result in much lower
performance.&#194;&#160;
Changing the first of the above configs to use openIB results in a
21 second run time at best. &#194;&#160;Sometimes it takes up to 5 minutes.
In all cases, OpenIB runs in twice the time it takes TCP,except if
I push the small message max to 64K and force short messages. &#194;&#160;Then the
openib times are the same as TCP and no faster.
&#194;&#160;
With openib:
- Repeated cycles during a single run seem to slow down with each
cycle
(usually by about 10 seconds).
- On occasions it seems to stall indefinitely, waiting on a single
receive.&#194;&#160;
&#194;&#160;
I'm &#194;&#160;still at a loss
as to why.&#194;&#160; I can&#226;&#128;&#153;t find any errors
logged during the runs.
Any ideas appreciated.
&#194;&#160;
Thanks in advance,
Randolph
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20079/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20080.php">Jeff Squyres: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
<li><strong>Previous message:</strong> <a href="20078.php">Ammar Ahmad Awan: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20099.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20099.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
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
