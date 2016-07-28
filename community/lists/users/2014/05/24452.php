<?
$subject_val = "[OMPI users] How to run Open MPI over TCP (Ethernet)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 03:31:13 2014" -->
<!-- isoreceived="20140522073113" -->
<!-- sent="Thu, 22 May 2014 12:30:53 +0500" -->
<!-- isosent="20140522073053" -->
<!-- name="Bibrak Qamar" -->
<!-- email="bibrakc_at_[hidden]" -->
<!-- subject="[OMPI users] How to run Open MPI over TCP (Ethernet)" -->
<!-- id="CANFHntAdCfhVqCDNZGR2STLsEZ7dKNuehJRHz8StidU4bG27gQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] How to run Open MPI over TCP (Ethernet)<br>
<strong>From:</strong> Bibrak Qamar (<em>bibrakc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-22 03:30:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24453.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>Previous message:</strong> <a href="24451.php">George Bosilca: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24453.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>Reply:</strong> <a href="24453.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>Reply:</strong> <a href="24475.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am facing problem in running Open MPI using TCP (on 1G Ethernet). In
<br>
practice the bandwidth must not exceed 1000 Mbps but for some data points
<br>
(for point-to-point ping pong) it exceeds this limit. I checked with MPICH
<br>
it works as desired.
<br>
<p>Following is the command I issue to run my program on TCP. Am I missing
<br>
something?
<br>
<p>*-bash-3.2$ mpirun -np 2  -machinefile machines -N 1 --mca btl tcp,self
<br>
./bandwidth.ompi *
<br>
--------------------------------------------------------------------------
<br>
The following command line options and corresponding MCA parameter have
<br>
been deprecated and replaced as follows:
<br>
<p>&nbsp;&nbsp;Command line options:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Deprecated:  --npernode, -npernode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Replacement: --map-by ppr:N:node
<br>
<p>&nbsp;&nbsp;Equivalent MCA parameter:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Deprecated:  rmaps_base_n_pernode, rmaps_ppr_n_pernode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Replacement: rmaps_base_mapping_policy=ppr:N:node
<br>
<p>The deprecated forms *will* disappear in a future version of Open MPI.
<br>
Please update to the new syntax.
<br>
--------------------------------------------------------------------------
<br>
Hello, world.  I am 1 on compute-0-16.local
<br>
Hello, world.  I am 0 on compute-0-15.local
<br>
1    25.66    0.30
<br>
2    25.54    0.60
<br>
4    25.34    1.20
<br>
8    25.27    2.42
<br>
16    25.24    4.84
<br>
32    25.49    9.58
<br>
64    26.44    18.47
<br>
128    26.85    36.37
<br>
256    29.43    66.37
<br>
512    36.02    108.44
<br>
1024    42.03    185.86
<br>
2048    194.30    80.42
<br>
4096    255.21    122.45
<br>
8192    258.85    241.45
<br>
16384    307.96    405.90
<br>
32768    422.78    591.32
<br>
65536    790.11    632.83
<br>
131072    1054.08    948.70
<br>
<p>*262144    1618.20    1235.94 524288    3126.65    1279.33*
<br>
<p>-Bibrak
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24452/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24453.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>Previous message:</strong> <a href="24451.php">George Bosilca: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24453.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>Reply:</strong> <a href="24453.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>Reply:</strong> <a href="24475.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
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
