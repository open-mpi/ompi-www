<?
$subject_val = "[OMPI users] Need advice on performance problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  9 16:59:58 2013" -->
<!-- isoreceived="20130609205958" -->
<!-- sent="Sun, 9 Jun 2013 20:59:53 +0000" -->
<!-- isosent="20130609205953" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Need advice on performance problem" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CA153D3_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Need advice on performance problem<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-09 16:59:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22067.php">Ralph Castain: "Re: [OMPI users] Need advice on performance problem"</a>
<li><strong>Previous message:</strong> <a href="22065.php">Gary Lu: "[OMPI users] Ompi-BLCR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22067.php">Ralph Castain: "Re: [OMPI users] Need advice on performance problem"</a>
<li><strong>Reply:</strong> <a href="22067.php">Ralph Castain: "Re: [OMPI users] Need advice on performance problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having some trouble getting good scaling with OpenMPI 1.6.4 and I don't know where to start looking. This is an Infiniband FDR network with Sandy Bridge nodes.  I am using affinity (--bind-to-core) but no other options. As the number of cores goes up, the message sizes are typically going down. There seem to be lots of options in the FAQ, and I would welcome any advice on where to start.  All these timings are on a completely empty system except for me.
<br>
<p>Thanks
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;MPI              # cores   Ave. Rate   Std. Dev. %  # timings   Speedup    Efficiency
<br>
================================================================================================
<br>
MVAPICH            |   16   |    8.6783  |   0.995 % |       2  |   16.000  |  1.0000
<br>
MVAPICH            |   48   |    8.7665  |   1.937 % |       3  |   47.517  |  0.9899
<br>
MVAPICH            |   80   |    8.8900  |   2.291 % |       3  |   78.095  |  0.9762
<br>
MVAPICH            |  160   |    8.9897  |   2.409 % |       3  |  154.457  |  0.9654
<br>
MVAPICH            |  320   |    8.9780  |   2.801 % |       3  |  309.317  |  0.9666
<br>
MVAPICH            |  480   |    8.9704  |   2.316 % |       3  |  464.366  |  0.9674
<br>
MVAPICH            |  640   |    9.0792  |   1.138 % |       3  |  611.739  |  0.9558
<br>
MVAPICH            |  720   |    9.1328  |   1.052 % |       3  |  684.162  |  0.9502
<br>
MVAPICH            |  800   |    9.1945  |   0.773 % |       3  |  755.079  |  0.9438
<br>
OpenMPI            |   16   |    8.6743  |   2.335 % |       2  |   16.000  |  1.0000
<br>
OpenMPI            |   48   |    8.7826  |   1.605 % |       2  |   47.408  |  0.9877
<br>
OpenMPI            |   80   |    8.8861  |   0.120 % |       2  |   78.093  |  0.9762
<br>
OpenMPI            |  160   |    8.9774  |   0.785 % |       2  |  154.598  |  0.9662
<br>
OpenMPI            |  320   |   12.0585  |  16.950 % |       2  |  230.191  |  0.7193
<br>
OpenMPI            |  480   |   14.8330  |   1.300 % |       2  |  280.701  |  0.5848
<br>
OpenMPI            |  640   |   17.1723  |   2.577 % |       3  |  323.283  |  0.5051
<br>
OpenMPI            |  720   |   18.2153  |   2.798 % |       3  |  342.868  |  0.4762
<br>
OpenMPI            |  800   |   19.3603  |   2.254 % |       3  |  358.434  |  0.4480
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22066/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22067.php">Ralph Castain: "Re: [OMPI users] Need advice on performance problem"</a>
<li><strong>Previous message:</strong> <a href="22065.php">Gary Lu: "[OMPI users] Ompi-BLCR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22067.php">Ralph Castain: "Re: [OMPI users] Need advice on performance problem"</a>
<li><strong>Reply:</strong> <a href="22067.php">Ralph Castain: "Re: [OMPI users] Need advice on performance problem"</a>
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
