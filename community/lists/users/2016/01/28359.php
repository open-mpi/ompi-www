<?
$subject_val = "[OMPI users] segmentation fault with java MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 24 18:23:05 2016" -->
<!-- isoreceived="20160124232305" -->
<!-- sent="Mon, 25 Jan 2016 00:23:02 +0100" -->
<!-- isosent="20160124232302" -->
<!-- name="Marko Blatzheim" -->
<!-- email="marko-blatzheim_at_[hidden]" -->
<!-- subject="[OMPI users] segmentation fault with java MPI" -->
<!-- id="56A55CD6.2080709_at_web.de" -->
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
<strong>Subject:</strong> [OMPI users] segmentation fault with java MPI<br>
<strong>From:</strong> Marko Blatzheim (<em>marko-blatzheim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-24 18:23:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28360.php">Gilles Gouaillardet: "Re: [OMPI users] segmentation fault with java MPI"</a>
<li><strong>Previous message:</strong> <a href="28358.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28360.php">Gilles Gouaillardet: "Re: [OMPI users] segmentation fault with java MPI"</a>
<li><strong>Reply:</strong> <a href="28360.php">Gilles Gouaillardet: "Re: [OMPI users] segmentation fault with java MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I want to load a saved object using java mpi. Without MPI there is no 
<br>
problem in reading the file and casting it to the correct type. I tried 
<br>
to open the file as a byte array and convert this to an object. I 
<br>
checked that all bytes are read correctly. Here I have an example where 
<br>
the saved file is a Serializable double array and I tried files with a 
<br>
size up to 120MB without a problem. When trying the same with an 
<br>
ArrayList, a few kb file size leads to segmentation faults.
<br>
<p><p>// creating the file
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int num = 1000000;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Random r = new Random(1234);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ArrayList&lt;Serializable&gt; obj0 = new ArrayList&lt;&gt;(num);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double[] obj1 = new double[num];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int j = 0; j &lt; num; j++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double d = r.nextGaussian();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj0.add(d);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj1[j] = d;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj0.trimToSize();
<br>
<p>################################################
<br>
<p>// trying to read the file
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;String filename = &quot;testfile&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;byte[] readbuf;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;File myfile = new File(MPI.COMM_SELF, filename, MPI.MODE_RDONLY);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int filesize = (int) myfile.getSize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;readbuf = new byte[filesize];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;byte[] copyarray = new byte[filesize];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status status = myfile.read(readbuf, filesize, MPI.BYTE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Object test = null;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (myrank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ByteArrayInputStream in = new ByteArrayInputStream(readbuf);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ObjectInputStream is = new ObjectInputStream(in);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test = is.readObject(); // This line causes a segmnentation 
<br>
fault
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>Thanks for your help
<br>
Marko
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28360.php">Gilles Gouaillardet: "Re: [OMPI users] segmentation fault with java MPI"</a>
<li><strong>Previous message:</strong> <a href="28358.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28360.php">Gilles Gouaillardet: "Re: [OMPI users] segmentation fault with java MPI"</a>
<li><strong>Reply:</strong> <a href="28360.php">Gilles Gouaillardet: "Re: [OMPI users] segmentation fault with java MPI"</a>
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
