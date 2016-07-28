<?
$subject_val = "[OMPI users] openMPI programs not using IB network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 16 08:53:51 2015" -->
<!-- isoreceived="20151016125351" -->
<!-- sent="Fri, 16 Oct 2015 14:53:47 +0200" -->
<!-- isosent="20151016125347" -->
<!-- name="David Arnold" -->
<!-- email="darnoldx_at_[hidden]" -->
<!-- subject="[OMPI users] openMPI programs not using IB network" -->
<!-- id="CAH7aX8gG1-t79i-8qK52tnSFrqwEPi=pb2hxom_f2Vxp2A9CPA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] openMPI programs not using IB network<br>
<strong>From:</strong> David Arnold (<em>darnoldx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-16 08:53:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27880.php">Gilles Gouaillardet: "Re: [OMPI users] openMPI programs not using IB network"</a>
<li><strong>Previous message:</strong> <a href="27878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27880.php">Gilles Gouaillardet: "Re: [OMPI users] openMPI programs not using IB network"</a>
<li><strong>Reply:</strong> <a href="27880.php">Gilles Gouaillardet: "Re: [OMPI users] openMPI programs not using IB network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We appear to have a correctly setup Mellanox IB network (ibdiagnet, ibstat,
<br>
iblinkinfo, ibqueryerrors(*)).  It's operating at Rate 40 FDR10.
<br>
<p>But openMPI programs (test and user) that are specifying the
<br>
'openib,self,sm'
<br>
paramenters do not seem to be using the IB network according to network-
<br>
monitoring tools (dstat/tcpdump/ifconfig counters).
<br>
<p>ib0 is the interface to the IB network, em1 is our general network.  It's
<br>
just a plain CentOS 6.5 system with openMPI 1.8.1.
<br>
<p>Is anyone able to advise if this is normal behaviour ?
<br>
How can I explictly verify user and tests programs are using the IB network
<br>
?
<br>
<p>I've done alot of google and FAQ searching, but my case does not seem to
<br>
come up in either.
<br>
<p>(1) no traffic on ib0 at all
<br>
/usr/local/openmpi-1.8.1/bin/mpirun --mca btl_openib_verbose 1 \
<br>
--mca btl openib,self,sm -host max140,max141 -n 8 \
<br>
/usr/lib64/openmpi/bin/mpitests-IMB-MPI1
<br>
<p>Monitoring with below shows no traffic at all on ib0:
<br>
dstat -n -N ib0,em1,total
<br>
<p>--net/ib0-----net/em1----net/total-
<br>
&nbsp;recv  send: recv  send: recv  send
<br>
&nbsp;&nbsp;&nbsp;0     0 :   0     0 :   0     0
<br>
&nbsp;&nbsp;&nbsp;0     0 : 864B    0 : 864B    0
<br>
&nbsp;&nbsp;&nbsp;0     0 : 452B  832B: 452B  832B
<br>
&nbsp;&nbsp;&nbsp;0     0 :3554B  230B:3554B  230B
<br>
<p>Monitoring with the below is showing no traffic at all on ib0:
<br>
sudo tcpdump -i ib0
<br>
<p>(2) Roughly shared network usage between ib0 and em1
<br>
/usr/local/openmpi-1.8.1/bin/mpirun --mca btl_openib_verbose 1 \
<br>
--mca btl tcp,vader,self -host max140,max141 -n 8 \
<br>
/usr/lib64/openmpi/bin/mpitests-IMB-MPI1
<br>
<p>--net/ib0-----net/em1----net/total-
<br>
&nbsp;recv  send: recv  send: recv  send
<br>
&nbsp;&nbsp;&nbsp;0     0 :   0     0 :   0     0
<br>
1061k 1129k:  97M   96M:  98M   97M
<br>
&nbsp;&nbsp;46M   45M:9356k   11M:  56M   56M
<br>
&nbsp;&nbsp;84M   82M:  12M   12M:  96M   93M
<br>
&nbsp;160k  167k:  82M   82M:  82M   82M
<br>
<p>tcpdump -i ib0 # shows lots of network traffic
<br>
ifconfig ib0 # shows increasing packet counters
<br>
<p>(3) mostly uses ib0, &quot;feels&quot; fast
<br>
/usr/local/openmpi-1.8.1/bin/mpirun --mca btl_openib_verbose 1 \
<br>
--mca btl tcp,vader,self --mca btl_tcp_if_include ib0 -host max140,max141
<br>
-n 8
<br>
/usr/lib64/openmpi/bin/mpitests-IMB-MPI1
<br>
<p>[root_at_[hidden]:/home/darnold] $ dstat -n -N ib0,em1,total
<br>
--net/ib0-----net/em1----net/total-
<br>
&nbsp;recv  send: recv  send: recv  send
<br>
&nbsp;&nbsp;&nbsp;0     0 :   0     0 :   0     0
<br>
&nbsp;506k  538k:2472B 3880B: 508k  542k
<br>
&nbsp;371M  362M:5628B   11k: 371M  362M
<br>
1000M  972M:8517B 5328B:1000M  972M
<br>
&nbsp;&nbsp;62M   63M:1248B 1424B:  62M   63M
<br>
<p>tcpdump -i ib0 # shows lots of network traffic
<br>
ifconfig ib0 # shows increasing packet counters
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27879/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27880.php">Gilles Gouaillardet: "Re: [OMPI users] openMPI programs not using IB network"</a>
<li><strong>Previous message:</strong> <a href="27878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27880.php">Gilles Gouaillardet: "Re: [OMPI users] openMPI programs not using IB network"</a>
<li><strong>Reply:</strong> <a href="27880.php">Gilles Gouaillardet: "Re: [OMPI users] openMPI programs not using IB network"</a>
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
