<?
$subject_val = "[OMPI users] MPI_Comm_connect";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 09:03:50 2008" -->
<!-- isoreceived="20080910130350" -->
<!-- sent="Wed, 10 Sep 2008 09:02:22 -0400" -->
<!-- isosent="20080910130222" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_connect" -->
<!-- id="73CDE97D-C288-48C4-8BD4-452C257B753D_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Comm_connect<br>
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-10 09:02:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6496.php">Amidu Oloso: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6494.php">Daniel Sp&#229;ngberg: "[OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to connect a client MPI app to a server with  
<br>
MPI_Comm_connect. I get this error:
<br>
<p>$ mpiexec -n 1 client 0.1.0:2000
<br>
Processor 0 (1193, Sender) initialized
<br>
Processor 0 connecting to '0.1.0:2000'
<br>
[local:01193] *** Process received signal ***
<br>
[local:01193] Signal: Bus error (10)
<br>
[local:01193] Signal code:  (0)
<br>
[local:01193] Failing at address: 0x74730000
<br>
[ 1] [0xbffff048, 0x00000000] (-P-)
<br>
[ 2] (ompi_parse_port + 0x8f) [0xbffff0b8, 0x0021030a]
<br>
[ 3] (MPI_Comm_connect + 0x18a) [0xbffff128, 0x002343ce]
<br>
[ 4] (main + 0x12c) [0xbffff3b8, 0x00001c7e]
<br>
[ 5] (_start + 0xd8) [0xbffff3f8, 0x00001b36]
<br>
[ 6] (start + 0x29) [0xbffff410, 0x00001a5d]
<br>
[ 7] [0x00000000, 0x00000002] (FP-)
<br>
[iMac:01193] *** End of error message ***
<br>
mpiexec noticed that job rank 0 with PID 1193 on node iMac.local  
<br>
exited on signal 10 (Bus error).
<br>
<p><p>$ ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.2.6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r17946
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.2.6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r17946
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.2.6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r17946
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /opt/local/openmpi-1.2.6/
<br>
&nbsp;&nbsp;Configured architecture: i386-apple-darwin8.11.1
<br>
...
<br>
<p>My client code:
<br>
<p>&nbsp;&nbsp;&nbsp;while( 1 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d connecting to '%s'\n&quot;, rank, argv[1]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( MPI_Comm_connect(myservice, MPI_INFO_NULL, 0,  
<br>
MPI_COMM_WORLD, &amp;intercomm) == MPI_SUCCESS )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(1);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d connected\n&quot;, rank);
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6496.php">Amidu Oloso: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6494.php">Daniel Sp&#229;ngberg: "[OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
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
