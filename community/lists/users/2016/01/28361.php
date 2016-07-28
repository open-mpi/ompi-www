<?
$subject_val = "Re: [OMPI users] segmentation fault with java MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 04:32:23 2016" -->
<!-- isoreceived="20160125093223" -->
<!-- sent="Mon, 25 Jan 2016 10:32:21 +0100" -->
<!-- isosent="20160125093221" -->
<!-- name="Marko Blatzheim" -->
<!-- email="Marko-Blatzheim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault with java MPI" -->
<!-- id="trinity-1a1d700d-e745-43ab-a129-b4283b39bfd6-1453714341395_at_3capp-webde-bap22" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56A566AB.7050202_at_rist.or.jp" -->
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
<strong>From:</strong> Marko Blatzheim (<em>Marko-Blatzheim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 04:32:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28362.php">Mark Santcroos: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>Previous message:</strong> <a href="28360.php">Gilles Gouaillardet: "Re: [OMPI users] segmentation fault with java MPI"</a>
<li><strong>In reply to:</strong> <a href="28360.php">Gilles Gouaillardet: "Re: [OMPI users] segmentation fault with java MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28363.php">Gilles Gouaillardet: "Re: [OMPI users] segmentation fault with java MPI"</a>
<li><strong>Reply:</strong> <a href="28363.php">Gilles Gouaillardet: "Re: [OMPI users] segmentation fault with java MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<head></head><body><div style="font-family: Verdana;font-size: 12.0px;"><div>
<div>Hi Gilles,</div>

<div>&nbsp;</div>

<div>I checked out openMPI Master 2 weeks ago.</div>

<div>JVM is: java version &quot;1.7.0_25&quot;<br/>
Java(TM) SE Runtime Environment (build 1.7.0_25-b15)<br/>
Java HotSpot(TM) 64-Bit Server VM (build 23.25-b01, mixed mode)</div>

<div>command line is: mpirun -np 2 java -jar MPI_open.jar</div>

<div>
<div>&nbsp;</div>

<div>The segmentation fault is in the line with: test = is.readObject();</div>

<div>&nbsp;</div>

<div>
<div><br/>
package mpi_open;</div>

<div>import java.io.ByteArrayInputStream;<br/>
import java.io.FileOutputStream;<br/>
import java.io.IOException;<br/>
import java.io.ObjectInputStream;<br/>
import java.io.ObjectOutputStream;<br/>
import java.io.Serializable;<br/>
import java.util.ArrayList;<br/>
import java.util.Random;<br/>
import mpi.File;<br/>
import mpi.MPI;<br/>
import mpi.MPIException;<br/>
import mpi.Status;</div>

<div><br/>
public class MPI_open {</div>

<div><br/>
&nbsp;&nbsp;&nbsp; public static void main(String[] args) throws MPIException, IOException, ClassNotFoundException {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MPI.Init(args);<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; int myRank = MPI.COMM_WORLD.getRank();<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if (myRank == 0) {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // create file<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; int num = 1000000;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Random r = new Random(1234);<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ArrayList&lt;Serializable&gt; obj0 = new ArrayList&lt;&gt;(num);<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; double[] obj1 = new double[num];<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; for (int j = 0; j &lt; num; j++) {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; double d = r.nextGaussian();<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; obj0.add(d);<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; obj1[j] = d;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; obj0.trimToSize();</div>

<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;objects created&quot;);</div>

<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; java.io.File f = new java.io.File(&quot;testfile0&quot;);<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ObjectOutputStream out = null;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; try {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; out = new ObjectOutputStream(new FileOutputStream(f));<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;out1&quot;);<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; out.writeObject(obj1);<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;out2&quot;);<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; } catch (java.lang.ClassCastException x) {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; throw x;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; } finally {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if (out != null) {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; out.close();<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }</div>

<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;file 1 done&quot;);</div>

<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; java.io.File f1 = new java.io.File(&quot;testfile1&quot;);<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ObjectOutputStream out1 = null;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; try {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; out1 = new ObjectOutputStream(new FileOutputStream(f1));<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; out1.writeObject(obj0);<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; } catch (java.lang.ClassCastException x) {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; throw x;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; } finally {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if (out1 != null) {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; out1.close();<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;file 2 done&quot;);</div>

<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; String filename = &quot;testfile1&quot;;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; byte[] readbuf;</div>

<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; File myfile = new File(MPI.COMM_SELF, filename, MPI.MODE_RDONLY);<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; int filesize = (int) myfile.getSize();<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; readbuf = new byte[filesize];<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Status status = myfile.read(readbuf, filesize, MPI.BYTE);<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Object test = null;</div>

<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ByteArrayInputStream in = new ByteArrayInputStream(readbuf);<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ObjectInputStream is = new ObjectInputStream(in);<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;Program fine until this line!&quot;);<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; test = is.readObject();<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }</div>

<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MPI.Finalize();<br/>
&nbsp;&nbsp;&nbsp; }<br/>
}</div>
</div>

<div>&nbsp;</div>

<div>Thanks</div>

<div>Marko</div>

<div>&nbsp;</div>

<div name="quote" style="margin:10px 5px 5px 10px; padding: 10px 0 10px 10px; border-left:2px solid #C3D9E5; word-wrap: break-word; -webkit-nbsp-mode: space; -webkit-line-break: after-white-space;">
<div style="margin:0 0 10px 0;"><b>Gesendet:</b>&nbsp;Montag, 25. Januar 2016 um 01:04 Uhr<br/>
<b>Von:</b>&nbsp;&quot;Gilles Gouaillardet&quot; &lt;gilles@rist.or.jp&gt;<br/>
<b>An:</b>&nbsp;&quot;Open MPI Users&quot; &lt;users@open-mpi.org&gt;<br/>
<b>Betreff:</b>&nbsp;Re: [OMPI users] segmentation fault with java MPI</div>

<div name="quoted-content">Marko,<br/>
<br/>
i wrote a test program based on your code snippet and it works for me.<br/>
<br/>
could you please :<br/>
- post a standalone test case that is ready to be compiled and ran<br/>
- which version of OpenMPI are you using ?<br/>
- which JVM are you using ? (vendor and version)<br/>
- post your full command line<br/>
<br/>
Cheers,<br/>
<br/>
Gilles<br/>
<br/>
On 1/25/2016 8:23 AM, Marko Blatzheim wrote:<br/>
&gt; String filename = &quot;testfile&quot;;<br/>
&gt; byte[] readbuf;<br/>
&gt;<br/>
&gt; File myfile = new File(MPI.COMM_SELF, filename, MPI.MODE_RDONLY);<br/>
&gt; int filesize = (int) myfile.getSize();<br/>
&gt; readbuf = new byte[filesize];<br/>
&gt;<br/>
&gt; byte[] copyarray = new byte[filesize];<br/>
&gt; Status status = myfile.read(readbuf, filesize, MPI.BYTE);<br/>
&gt; Object test = null;<br/>
&gt; if (myrank == 0) {<br/>
&gt; ByteArrayInputStream in = new ByteArrayInputStream(readbuf);<br/>
&gt; ObjectInputStream is = new ObjectInputStream(in);<br/>
&gt; test = is.readObject(); // This line causes a<br/>
&gt; segmnentation fault<br/>
&gt; }<br/>
<br/>
_______________________________________________<br/>
users mailing list<br/>
users@open-mpi.org<br/>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users" target="_blank">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br/>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28360.php" target="_blank">http://www.open-mpi.org/community/lists/users/2016/01/28360.php</a></div>
</div>
</div>
</div></div></body>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28362.php">Mark Santcroos: "Re: [OMPI users] how to benchmark a server with openmpi?"</a>
<li><strong>Previous message:</strong> <a href="28360.php">Gilles Gouaillardet: "Re: [OMPI users] segmentation fault with java MPI"</a>
<li><strong>In reply to:</strong> <a href="28360.php">Gilles Gouaillardet: "Re: [OMPI users] segmentation fault with java MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28363.php">Gilles Gouaillardet: "Re: [OMPI users] segmentation fault with java MPI"</a>
<li><strong>Reply:</strong> <a href="28363.php">Gilles Gouaillardet: "Re: [OMPI users] segmentation fault with java MPI"</a>
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
