<?
$subject_val = "[OMPI users] Infiniband performance Problem and stalling";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 27 22:26:07 2012" -->
<!-- isoreceived="20120828022607" -->
<!-- sent="Mon, 27 Aug 2012 19:26:02 -0700 (PDT)" -->
<!-- isosent="20120828022602" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="[OMPI users] Infiniband performance Problem and stalling" -->
<!-- id="1346120762.63356.YahooMailNeo_at_web121006.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Date:</strong> 2012-08-27 22:26:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20022.php">Paul Kapinos: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20020.php">Lloyd Brown: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20022.php">Paul Kapinos: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Reply:</strong> <a href="20022.php">Paul Kapinos: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20100.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20137.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a test rig comprising 2 i7 systems with Melanox III HCA 10G cards

running Centos 5.7 Kernel 2.6.18-274
Open MPI 1.4.3
MLNX_OFED_LINUX-1.5.3-1.0.0.2 (OFED-1.5.3-1.0.0.2):
On a Cisco 24 pt switch

Normal performance is:
$ mpirun --mca btl openib,self -n 2 -hostfile mpi.hosts &#160;PingPong
results in:
&#160;Max rate = 958.388867 MB/sec &#160;Min latency = 4.529953 usec
and:
$ mpirun --mca btl tcp,self -n 2 -hostfile mpi.hosts &#160;PingPong
Max rate = 653.547293 MB/sec &#160;Min latency = 19.550323 usec


My application exchanges about a gig of data between the processes with 2 sender and 2 consumer processes on each node with 1 additional controler process on the starting node.
The program splits the data into 64K blocks and uses non blocking sends and receives with busy/sleep loops to monitor progress until completion.

My problem is I see better performance under IPoIB then I do on native IB (RDMA_CM).
My understanding is that IPoIB is limited to about 1G/s so I am at a loss to know why it is faster.

These 2 configurations are equivelant (about 8-10 seconds per cycle)
mpirun --mca btl_openib_flags 2 --mca mpi_leave_pinned 1 --mca btl tcp,self -H vh2,vh1 -np 9 --bycore prog
mpirun --mca btl_openib_flags 3 --mca mpi_leave_pinned 1 --mca btl tcp,self -H vh2,vh1 -np 9 --bycore prog

And this one produces similar run times but seems to degrade with repeated cycles:
mpirun --mca btl_openib_eager_limit 64 --mca mpi_leave_pinned 1 --mca btl openib,self -H vh2,vh1 -np 9 --bycore &#160;prog

Other &#160;btl_openib_flags settings result in much lower performance.&#160;
Changing the first of the above configs to use openIB results in a 21 second run time at best. &#160;Sometimes it takes up to 5 minutes.
With openib:

- Repeated cycles during a single run seem to slow down with each cycle.
- On occasions it seems to stall indefinately, waiting on a single receive.&#160;

Any ideas appreciated.

Thanks in advance,
Randolph

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20021/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20022.php">Paul Kapinos: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20020.php">Lloyd Brown: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20022.php">Paul Kapinos: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Reply:</strong> <a href="20022.php">Paul Kapinos: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20100.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20137.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
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
