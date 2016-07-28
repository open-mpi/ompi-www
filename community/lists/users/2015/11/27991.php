<?
$subject_val = "[OMPI users] How to send and receive an array correctly with java open-mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 12:57:24 2015" -->
<!-- isoreceived="20151104175724" -->
<!-- sent="Wed, 4 Nov 2015 17:57:19 +0000" -->
<!-- isosent="20151104175719" -->
<!-- name="Ibrahim Ikhlawi" -->
<!-- email="ibrahim_22s_at_[hidden]" -->
<!-- subject="[OMPI users] How to send and receive an array correctly with java open-mpi" -->
<!-- id="DUB125-W375C9011A8CAB18F5A5FC0972A0_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] How to send and receive an array correctly with java open-mpi<br>
<strong>From:</strong> Ibrahim Ikhlawi (<em>ibrahim_22s_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-04 12:57:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27992.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Previous message:</strong> <a href="27990.php">George Bosilca: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27993.php">Gilles Gouaillardet: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<li><strong>Reply:</strong> <a href="27993.php">Gilles Gouaillardet: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I want to send an array from process to another one. I send the array but I get only the first element of the array.
<br>
This is a section from my code:
<br>
<p>int[] m1= new int[5];
<br>
if (0 == myrank) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int i= 0; i&lt;m1.length ; i++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m1[i] = 100;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(&quot;m1[&quot;+i+&quot;]&quot;+m1[i]);    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.send(m1, 1, MPI.INT, 1, tag);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}else{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.recv(m1 , 1 , MPI.INT , 0 ,tag);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int i= 0; i&lt;m1.length ; i++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m2[i] = 3*m1[i];    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(&quot;m1[&quot;+i+&quot;]&quot;+m1[i]+&quot; m2[&quot;+i+&quot;]&quot;+m2[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.send(m2, 1 , MPI.INT, 0, tag);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if(0 == myrank){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.recv(m2, 1 , MPI.INT, 1 ,tag);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(Arrays.toString(m2));    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>the result of this program is:
<br>
m1[0]100
<br>
m1[1]100
<br>
m1[2]100
<br>
m1[3]100
<br>
m1[4]100
<br>
[300, 0, 0, 0, 0]
<br>
m1[0]100  m2[0]300
<br>
m1[1]0  m2[1]0
<br>
m1[2]0  m2[2]0
<br>
m1[3]0  m2[3]0
<br>
m1[4]0  m2[4]0
<br>
<p><p>Thanks in advance
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27991/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27992.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Previous message:</strong> <a href="27990.php">George Bosilca: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27993.php">Gilles Gouaillardet: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<li><strong>Reply:</strong> <a href="27993.php">Gilles Gouaillardet: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
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
