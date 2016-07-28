<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 16 12:41:07 2006" -->
<!-- isoreceived="20060316174107" -->
<!-- sent="Thu, 16 Mar 2006 18:34:37 +0100" -->
<!-- isosent="20060316173437" -->
<!-- name="Jean Latour" -->
<!-- email="latour_at_[hidden]" -->
<!-- subject="[OMPI users] Performance of ping-pong using OpenMPI over Infiniband" -->
<!-- id="4419A1AD.9040805_at_fujitsu.fr" -->
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
<strong>From:</strong> Jean Latour (<em>latour_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-16 12:34:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0873.php">Galen M. Shipman: "Re: [OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<li><strong>Previous message:</strong> <a href="0871.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0873.php">Galen M. Shipman: "Re: [OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<li><strong>Reply:</strong> <a href="0873.php">Galen M. Shipman: "Re: [OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<li><strong>Reply:</strong> <a href="0874.php">George Bosilca: "Re: [OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;Testing performance of OpenMPI over Infiniband I have the following 
<br>
result :
<br>
<p>1) Hardware is  : SilversStorm interface
<br>
<p>2) Openmpi version is : (from ompi_info)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.0.2a9r9159
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r9159
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.0.2a9r9159
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r9159
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.0.2a9r9159
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r9159
<br>
<p>3) Cluster with Bi-processors Opteron 248   2.2 GHz
<br>
<p>Configure has been run with option --with-mvapi=path-to-mvapi
<br>
<p>4) a C coded pinpong gives the following values :
<br>
<p>LOOPS: 1000 BYTES: 4096 SECONDS: 0.085557  MBytes/sec: 95.749051
<br>
LOOPS: 1000 BYTES: 8192 SECONDS: 0.050657  MBytes/sec: 323.429912
<br>
LOOPS: 1000 BYTES: 16384 SECONDS: 0.084038  MBytes/sec: 389.918757
<br>
LOOPS: 1000 BYTES: 32768 SECONDS: 0.163161  MBytes/sec: 401.665104
<br>
LOOPS: 1000 BYTES: 65536 SECONDS: 0.306694  MBytes/sec: 427.370561
<br>
LOOPS: 1000 BYTES: 131072 SECONDS: 0.529589  MBytes/sec: 494.995011
<br>
LOOPS: 1000 BYTES: 262144 SECONDS: 0.952616  MBytes/sec: 550.366583
<br>
LOOPS: 1000 BYTES: 524288 SECONDS: 1.927987  MBytes/sec: 543.870859
<br>
LOOPS: 1000 BYTES: 1048576 SECONDS: 3.673732  MBytes/sec: 570.850562
<br>
LOOPS: 1000 BYTES: 2097152 SECONDS: 9.993185  MBytes/sec: 419.716435
<br>
LOOPS: 1000 BYTES: 4194304 SECONDS: 18.211958  MBytes/sec: 460.609893
<br>
LOOPS: 1000 BYTES: 8388608 SECONDS: 35.421490  MBytes/sec: 473.645124
<br>
<p>My questions are :
<br>
a)  Is OpenMPI doing in this case TCP/IP over IB ? (I guess so)
<br>
b) Is it possible to improve significantly these values by changing the 
<br>
defaults ?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I have used several mca btl parameters but without improving the 
<br>
maximum bandwith.
<br>
&nbsp;&nbsp;&nbsp;For example :  --mca btl mvapi   --mca btl_mvapi_max_send_size 8388608
<br>
<p>c) Is it possible that other IB hardware implementations  have better
<br>
&nbsp;&nbsp;&nbsp;&nbsp;performances with OpenMPI ?
<br>
<p>d) Is it possible to use specific IB drivers  for optimal performance  ? 
<br>
(should reach almost 800 MB/sec)
<br>
<p>Thank you very much for your help
<br>
Best Regards,
<br>
Jean Latour
<br>
<p><p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0873.php">Galen M. Shipman: "Re: [OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<li><strong>Previous message:</strong> <a href="0871.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0873.php">Galen M. Shipman: "Re: [OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<li><strong>Reply:</strong> <a href="0873.php">Galen M. Shipman: "Re: [OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<li><strong>Reply:</strong> <a href="0874.php">George Bosilca: "Re: [OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
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
