<?
$subject_val = "Re: [OMPI users] segmentation fault with java MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 05:34:41 2016" -->
<!-- isoreceived="20160125103441" -->
<!-- sent="Mon, 25 Jan 2016 19:34:39 +0900" -->
<!-- isosent="20160125103439" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault with java MPI" -->
<!-- id="CAAkFZ5skzmiCmMYVse14u_kJYzhbNCMzURfUrgNJCkZphXnc8A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="trinity-1a1d700d-e745-43ab-a129-b4283b39bfd6-1453714341395_at_3capp-webde-bap22" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 05:34:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28364.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28362.php">Mark Santcroos: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>In reply to:</strong> <a href="28361.php">Marko Blatzheim: "Re: [OMPI users] segmentation fault with java MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Marko,
<br>
<p>I will check that tomorrow.
<br>
I did pretty much the same thing, but without testfile0, that looks pretty
<br>
useless here.
<br>
fwiw, in the past we saw some random crashes and the root cause was MPI did
<br>
not retain some objects, and bad things happened when the garbage collector
<br>
ran.
<br>
<p>btw, are you running on an x86_64 arch ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, January 25, 2016, Marko Blatzheim &lt;Marko-Blatzheim_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked out openMPI Master 2 weeks ago.
</span><br>
<span class="quotelev1">&gt; JVM is: java version &quot;1.7.0_25&quot;
</span><br>
<span class="quotelev1">&gt; Java(TM) SE Runtime Environment (build 1.7.0_25-b15)
</span><br>
<span class="quotelev1">&gt; Java HotSpot(TM) 64-Bit Server VM (build 23.25-b01, mixed mode)
</span><br>
<span class="quotelev1">&gt; command line is: mpirun -np 2 java -jar MPI_open.jar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The segmentation fault is in the line with: test = is.readObject();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; package mpi_open;
</span><br>
<span class="quotelev1">&gt; import java.io.ByteArrayInputStream;
</span><br>
<span class="quotelev1">&gt; import java.io.FileOutputStream;
</span><br>
<span class="quotelev1">&gt; import java.io.IOException;
</span><br>
<span class="quotelev1">&gt; import java.io.ObjectInputStream;
</span><br>
<span class="quotelev1">&gt; import java.io.ObjectOutputStream;
</span><br>
<span class="quotelev1">&gt; import java.io.Serializable;
</span><br>
<span class="quotelev1">&gt; import java.util.ArrayList;
</span><br>
<span class="quotelev1">&gt; import java.util.Random;
</span><br>
<span class="quotelev1">&gt; import mpi.File;
</span><br>
<span class="quotelev1">&gt; import mpi.MPI;
</span><br>
<span class="quotelev1">&gt; import mpi.MPIException;
</span><br>
<span class="quotelev1">&gt; import mpi.Status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; public class MPI_open {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     public static void main(String[] args) throws MPIException,
</span><br>
<span class="quotelev1">&gt; IOException, ClassNotFoundException {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI.Init(args);
</span><br>
<span class="quotelev1">&gt;         int myRank = MPI.COMM_WORLD.getRank();
</span><br>
<span class="quotelev1">&gt;         if (myRank == 0) {
</span><br>
<span class="quotelev1">&gt;             // create file
</span><br>
<span class="quotelev1">&gt;             int num = 1000000;
</span><br>
<span class="quotelev1">&gt;             Random r = new Random(1234);
</span><br>
<span class="quotelev1">&gt;             ArrayList&lt;Serializable&gt; obj0 = new ArrayList&lt;&gt;(num);
</span><br>
<span class="quotelev1">&gt;             double[] obj1 = new double[num];
</span><br>
<span class="quotelev1">&gt;             for (int j = 0; j &lt; num; j++) {
</span><br>
<span class="quotelev1">&gt;                 double d = r.nextGaussian();
</span><br>
<span class="quotelev1">&gt;                 obj0.add(d);
</span><br>
<span class="quotelev1">&gt;                 obj1[j] = d;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             obj0.trimToSize();
</span><br>
<span class="quotelev1">&gt;             System.out.println(&quot;objects created&quot;);
</span><br>
<span class="quotelev1">&gt;             java.io.File f = new java.io.File(&quot;testfile0&quot;);
</span><br>
<span class="quotelev1">&gt;             ObjectOutputStream out = null;
</span><br>
<span class="quotelev1">&gt;             try {
</span><br>
<span class="quotelev1">&gt;                 out = new ObjectOutputStream(new FileOutputStream(f));
</span><br>
<span class="quotelev1">&gt;                 System.out.println(&quot;out1&quot;);
</span><br>
<span class="quotelev1">&gt;                 out.writeObject(obj1);
</span><br>
<span class="quotelev1">&gt;                 System.out.println(&quot;out2&quot;);
</span><br>
<span class="quotelev1">&gt;             } catch (java.lang.ClassCastException x) {
</span><br>
<span class="quotelev1">&gt;                 throw x;
</span><br>
<span class="quotelev1">&gt;             } finally {
</span><br>
<span class="quotelev1">&gt;                 if (out != null) {
</span><br>
<span class="quotelev1">&gt;                     out.close();
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             System.out.println(&quot;file 1 done&quot;);
</span><br>
<span class="quotelev1">&gt;             java.io.File f1 = new java.io.File(&quot;testfile1&quot;);
</span><br>
<span class="quotelev1">&gt;             ObjectOutputStream out1 = null;
</span><br>
<span class="quotelev1">&gt;             try {
</span><br>
<span class="quotelev1">&gt;                 out1 = new ObjectOutputStream(new FileOutputStream(f1));
</span><br>
<span class="quotelev1">&gt;                 out1.writeObject(obj0);
</span><br>
<span class="quotelev1">&gt;             } catch (java.lang.ClassCastException x) {
</span><br>
<span class="quotelev1">&gt;                 throw x;
</span><br>
<span class="quotelev1">&gt;             } finally {
</span><br>
<span class="quotelev1">&gt;                 if (out1 != null) {
</span><br>
<span class="quotelev1">&gt;                     out1.close();
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             System.out.println(&quot;file 2 done&quot;);
</span><br>
<span class="quotelev1">&gt;             String filename = &quot;testfile1&quot;;
</span><br>
<span class="quotelev1">&gt;             byte[] readbuf;
</span><br>
<span class="quotelev1">&gt;             File myfile = new File(MPI.COMM_SELF, filename,
</span><br>
<span class="quotelev1">&gt; MPI.MODE_RDONLY);
</span><br>
<span class="quotelev1">&gt;             int filesize = (int) myfile.getSize();
</span><br>
<span class="quotelev1">&gt;             readbuf = new byte[filesize];
</span><br>
<span class="quotelev1">&gt;             Status status = myfile.read(readbuf, filesize, MPI.BYTE);
</span><br>
<span class="quotelev1">&gt;             Object test = null;
</span><br>
<span class="quotelev1">&gt;             ByteArrayInputStream in = new ByteArrayInputStream(readbuf);
</span><br>
<span class="quotelev1">&gt;             ObjectInputStream is = new ObjectInputStream(in);
</span><br>
<span class="quotelev1">&gt;             System.out.println(&quot;Program fine until this line!&quot;);
</span><br>
<span class="quotelev1">&gt;             test = is.readObject();
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         MPI.Finalize();
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Marko
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Gesendet:* Montag, 25. Januar 2016 um 01:04 Uhr
</span><br>
<span class="quotelev1">&gt; *Von:* &quot;Gilles Gouaillardet&quot; &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev1">&gt; *An:* &quot;Open MPI Users&quot; &lt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev1">&gt; *Betreff:* Re: [OMPI users] segmentation fault with java MPI
</span><br>
<span class="quotelev1">&gt; Marko,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i wrote a test program based on your code snippet and it works for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could you please :
</span><br>
<span class="quotelev1">&gt; - post a standalone test case that is ready to be compiled and ran
</span><br>
<span class="quotelev1">&gt; - which version of OpenMPI are you using ?
</span><br>
<span class="quotelev1">&gt; - which JVM are you using ? (vendor and version)
</span><br>
<span class="quotelev1">&gt; - post your full command line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/25/2016 8:23 AM, Marko Blatzheim wrote:
</span><br>
<span class="quotelev2">&gt; &gt; String filename = &quot;testfile&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; byte[] readbuf;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; File myfile = new File(MPI.COMM_SELF, filename, MPI.MODE_RDONLY);
</span><br>
<span class="quotelev2">&gt; &gt; int filesize = (int) myfile.getSize();
</span><br>
<span class="quotelev2">&gt; &gt; readbuf = new byte[filesize];
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; byte[] copyarray = new byte[filesize];
</span><br>
<span class="quotelev2">&gt; &gt; Status status = myfile.read(readbuf, filesize, MPI.BYTE);
</span><br>
<span class="quotelev2">&gt; &gt; Object test = null;
</span><br>
<span class="quotelev2">&gt; &gt; if (myrank == 0) {
</span><br>
<span class="quotelev2">&gt; &gt; ByteArrayInputStream in = new ByteArrayInputStream(readbuf);
</span><br>
<span class="quotelev2">&gt; &gt; ObjectInputStream is = new ObjectInputStream(in);
</span><br>
<span class="quotelev2">&gt; &gt; test = is.readObject(); // This line causes a
</span><br>
<span class="quotelev2">&gt; &gt; segmnentation fault
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28360.php">http://www.open-mpi.org/community/lists/users/2016/01/28360.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28363/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28364.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28362.php">Mark Santcroos: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>In reply to:</strong> <a href="28361.php">Marko Blatzheim: "Re: [OMPI users] segmentation fault with java MPI"</a>
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
