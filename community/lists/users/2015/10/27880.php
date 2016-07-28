<?
$subject_val = "Re: [OMPI users] openMPI programs not using IB network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 16 09:02:31 2015" -->
<!-- isoreceived="20151016130231" -->
<!-- sent="Fri, 16 Oct 2015 22:02:27 +0900" -->
<!-- isosent="20151016130227" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI programs not using IB network" -->
<!-- id="CAAkFZ5twAvbwDr9JSqbHaOkBuOQuX6OMgXbs-tTwnfJMBCGDbg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAH7aX8gG1-t79i-8qK52tnSFrqwEPi=pb2hxom_f2Vxp2A9CPA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI programs not using IB network<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-16 09:02:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27881.php">John Marshall: "[OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Previous message:</strong> <a href="27879.php">David Arnold: "[OMPI users] openMPI programs not using IB network"</a>
<li><strong>In reply to:</strong> <a href="27879.php">David Arnold: "[OMPI users] openMPI programs not using IB network"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David,
<br>
<p>ib0 means IP over IB
<br>
this is *not* what you want to use since it is way slower than native
<br>
infiniband.
<br>
if you
<br>
mpirun --mca self,sm,openib ...
<br>
on more than one node, the only btl usable for inter node communication is
<br>
openib,
<br>
so if communication happen, that means opening is used.
<br>
<p>in order to monitor native infiniband traffic, you can use
<br>
perfquery -x
<br>
you will see some traffic with this
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, October 16, 2015, David Arnold &lt;darnoldx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We appear to have a correctly setup Mellanox IB network (ibdiagnet, ibstat,
</span><br>
<span class="quotelev1">&gt; iblinkinfo, ibqueryerrors(*)).  It's operating at Rate 40 FDR10.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But openMPI programs (test and user) that are specifying the
</span><br>
<span class="quotelev1">&gt; 'openib,self,sm'
</span><br>
<span class="quotelev1">&gt; paramenters do not seem to be using the IB network according to network-
</span><br>
<span class="quotelev1">&gt; monitoring tools (dstat/tcpdump/ifconfig counters).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ib0 is the interface to the IB network, em1 is our general network.  It's
</span><br>
<span class="quotelev1">&gt; just a plain CentOS 6.5 system with openMPI 1.8.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is anyone able to advise if this is normal behaviour ?
</span><br>
<span class="quotelev1">&gt; How can I explictly verify user and tests programs are using the IB
</span><br>
<span class="quotelev1">&gt; network ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've done alot of google and FAQ searching, but my case does not seem to
</span><br>
<span class="quotelev1">&gt; come up in either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1) no traffic on ib0 at all
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.8.1/bin/mpirun --mca btl_openib_verbose 1 \
</span><br>
<span class="quotelev1">&gt; --mca btl openib,self,sm -host max140,max141 -n 8 \
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/bin/mpitests-IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Monitoring with below shows no traffic at all on ib0:
</span><br>
<span class="quotelev1">&gt; dstat -n -N ib0,em1,total
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --net/ib0-----net/em1----net/total-
</span><br>
<span class="quotelev1">&gt;  recv  send: recv  send: recv  send
</span><br>
<span class="quotelev1">&gt;    0     0 :   0     0 :   0     0
</span><br>
<span class="quotelev1">&gt;    0     0 : 864B    0 : 864B    0
</span><br>
<span class="quotelev1">&gt;    0     0 : 452B  832B: 452B  832B
</span><br>
<span class="quotelev1">&gt;    0     0 :3554B  230B:3554B  230B
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Monitoring with the below is showing no traffic at all on ib0:
</span><br>
<span class="quotelev1">&gt; sudo tcpdump -i ib0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (2) Roughly shared network usage between ib0 and em1
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.8.1/bin/mpirun --mca btl_openib_verbose 1 \
</span><br>
<span class="quotelev1">&gt; --mca btl tcp,vader,self -host max140,max141 -n 8 \
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/bin/mpitests-IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --net/ib0-----net/em1----net/total-
</span><br>
<span class="quotelev1">&gt;  recv  send: recv  send: recv  send
</span><br>
<span class="quotelev1">&gt;    0     0 :   0     0 :   0     0
</span><br>
<span class="quotelev1">&gt; 1061k 1129k:  97M   96M:  98M   97M
</span><br>
<span class="quotelev1">&gt;   46M   45M:9356k   11M:  56M   56M
</span><br>
<span class="quotelev1">&gt;   84M   82M:  12M   12M:  96M   93M
</span><br>
<span class="quotelev1">&gt;  160k  167k:  82M   82M:  82M   82M
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tcpdump -i ib0 # shows lots of network traffic
</span><br>
<span class="quotelev1">&gt; ifconfig ib0 # shows increasing packet counters
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (3) mostly uses ib0, &quot;feels&quot; fast
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.8.1/bin/mpirun --mca btl_openib_verbose 1 \
</span><br>
<span class="quotelev1">&gt; --mca btl tcp,vader,self --mca btl_tcp_if_include ib0 -host max140,max141
</span><br>
<span class="quotelev1">&gt; -n 8
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/bin/mpitests-IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_[hidden]:/home/darnold] $ dstat -n -N ib0,em1,total
</span><br>
<span class="quotelev1">&gt; --net/ib0-----net/em1----net/total-
</span><br>
<span class="quotelev1">&gt;  recv  send: recv  send: recv  send
</span><br>
<span class="quotelev1">&gt;    0     0 :   0     0 :   0     0
</span><br>
<span class="quotelev1">&gt;  506k  538k:2472B 3880B: 508k  542k
</span><br>
<span class="quotelev1">&gt;  371M  362M:5628B   11k: 371M  362M
</span><br>
<span class="quotelev1">&gt; 1000M  972M:8517B 5328B:1000M  972M
</span><br>
<span class="quotelev1">&gt;   62M   63M:1248B 1424B:  62M   63M
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tcpdump -i ib0 # shows lots of network traffic
</span><br>
<span class="quotelev1">&gt; ifconfig ib0 # shows increasing packet counters
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27880/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27881.php">John Marshall: "[OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Previous message:</strong> <a href="27879.php">David Arnold: "[OMPI users] openMPI programs not using IB network"</a>
<li><strong>In reply to:</strong> <a href="27879.php">David Arnold: "[OMPI users] openMPI programs not using IB network"</a>
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
