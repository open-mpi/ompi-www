<?
$subject_val = "Re: [OMPI users] Infiniband performance Problem and stalling";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 02:25:44 2012" -->
<!-- isoreceived="20120830062544" -->
<!-- sent="Wed, 29 Aug 2012 23:25:37 -0700 (PDT)" -->
<!-- isosent="20120830062537" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband performance Problem and stalling" -->
<!-- id="1346307937.27490.YahooMailNeo_at_web121005.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1346291165.63257.YahooMailNeo_at_web121001.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Infiniband performance Problem and stalling<br>
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-30 02:25:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20060.php">Ammar Ahmad Awan: "[OMPI users] Accessing data member of MPI_File struct"</a>
<li><strong>Previous message:</strong> <a href="20058.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>In reply to:</strong> <a href="20058.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20100.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul I tried NetPipeMPI - (belatedly because their site was down down for a couple of days)

The results show a max of 7.4 Gb/s at 8388605 bytes which seems fine.

But my program still runs slowly and stalls occasionally.
I've using 1 buffer per process - I assume this is ok.
Is it of any significance that the&#160;&#160;log_num_mtt and&#160;log_mtts_per_seg params where not set?
Is this a symptom of a broken install?

Reposting original message for clarity - its been a few days...
2nd posts are below this 1st section
========================================================================================
I have a test rig comprising 2 i7 systems 8GB RAM with Melanox III HCA 10G cards
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


________________________________
 From: Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;
To: Paul Kapinos &lt;kapinos_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Thursday, 30 August 2012 11:46 AM
Subject: Re: [OMPI users] Infiniband performance Problem and stalling
 

Interesting, the&#160;log_num_mtt and&#160;log_mtts_per_seg params where not set.
Setting them to utilise 2*8G of my RAM resulted in no change to the stalls or run time ie; (19,3) (20,2) (21,1) or (6,16).&#160;
In all cases, OpenIB runs in twice the time it takes TCP,except if I push the small message max to 64K and force short messages. &#160;Then the openib times are the same as TCP and no faster.

I'ms till at a loss as to why...


________________________________
 From: Paul Kapinos &lt;kapinos_at_[hidden]&gt;
To: Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Tuesday, 28 August 2012 6:13 PM
Subject: Re: [OMPI users] Infiniband performance Problem and stalling
 
Randolph,
after reading this:

On 08/28/12 04:26, Randolph Pullen wrote:
&gt; - On occasions it seems to stall indefinately, waiting on a single receive.

... I
 would make a blind guess: are you aware about IB card parameters for registered memory?
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>

&quot;Waiting forever&quot; for a single operation is one of symptoms of the problem especially in 1.5.3.


best,
Paul

P.S. the lower performance with 'big' chinks is known phenomenon, cf.
<a href="http://www.scl.ameslab.gov/netpipe/">http://www.scl.ameslab.gov/netpipe/</a>
(image on bottom of the page). But the chunk size of 64k is fairly small




-- Dipl.-Inform. Paul Kapinos&#160;  -&#160;  High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,&#160; D 52074&#160; Aachen (Germany)
Tel: +49 241/80-24915




_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20059/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20060.php">Ammar Ahmad Awan: "[OMPI users] Accessing data member of MPI_File struct"</a>
<li><strong>Previous message:</strong> <a href="20058.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>In reply to:</strong> <a href="20058.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20100.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
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
