<?
$subject_val = "Re: [OMPI users] segmentation fault with java MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 24 19:05:05 2016" -->
<!-- isoreceived="20160125000505" -->
<!-- sent="Mon, 25 Jan 2016 09:04:59 +0900" -->
<!-- isosent="20160125000459" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault with java MPI" -->
<!-- id="56A566AB.7050202_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56A55CD6.2080709_at_web.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] segmentation fault with java MPI<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-24 19:04:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28361.php">Marko Blatzheim: "Re: [OMPI users] segmentation fault with java MPI"</a>
<li><strong>Previous message:</strong> <a href="28359.php">Marko Blatzheim: "[OMPI users] segmentation fault with java MPI"</a>
<li><strong>In reply to:</strong> <a href="28359.php">Marko Blatzheim: "[OMPI users] segmentation fault with java MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28361.php">Marko Blatzheim: "Re: [OMPI users] segmentation fault with java MPI"</a>
<li><strong>Reply:</strong> <a href="28361.php">Marko Blatzheim: "Re: [OMPI users] segmentation fault with java MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marko,
<br>
<p>i wrote a test program based on your code snippet and it works for me.
<br>
<p>could you please :
<br>
- post a standalone test case that is ready to be compiled and ran
<br>
- which version of OpenMPI are you using ?
<br>
- which JVM are you using ? (vendor and version)
<br>
- post your full command line
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 1/25/2016 8:23 AM, Marko Blatzheim wrote:
<br>
<span class="quotelev1">&gt; String filename = &quot;testfile&quot;;
</span><br>
<span class="quotelev1">&gt;         byte[] readbuf;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         File myfile = new File(MPI.COMM_SELF, filename, MPI.MODE_RDONLY);
</span><br>
<span class="quotelev1">&gt;         int filesize = (int) myfile.getSize();
</span><br>
<span class="quotelev1">&gt;         readbuf = new byte[filesize];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         byte[] copyarray = new byte[filesize];
</span><br>
<span class="quotelev1">&gt;         Status status = myfile.read(readbuf, filesize, MPI.BYTE);
</span><br>
<span class="quotelev1">&gt;         Object test = null;
</span><br>
<span class="quotelev1">&gt;         if (myrank == 0) {
</span><br>
<span class="quotelev1">&gt;             ByteArrayInputStream in = new ByteArrayInputStream(readbuf);
</span><br>
<span class="quotelev1">&gt;             ObjectInputStream is = new ObjectInputStream(in);
</span><br>
<span class="quotelev1">&gt;             test = is.readObject(); // This line causes a 
</span><br>
<span class="quotelev1">&gt; segmnentation fault
</span><br>
<span class="quotelev1">&gt;         } 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28361.php">Marko Blatzheim: "Re: [OMPI users] segmentation fault with java MPI"</a>
<li><strong>Previous message:</strong> <a href="28359.php">Marko Blatzheim: "[OMPI users] segmentation fault with java MPI"</a>
<li><strong>In reply to:</strong> <a href="28359.php">Marko Blatzheim: "[OMPI users] segmentation fault with java MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28361.php">Marko Blatzheim: "Re: [OMPI users] segmentation fault with java MPI"</a>
<li><strong>Reply:</strong> <a href="28361.php">Marko Blatzheim: "Re: [OMPI users] segmentation fault with java MPI"</a>
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
