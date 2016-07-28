<?
$subject_val = "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 21:11:02 2012" -->
<!-- isoreceived="20121218021102" -->
<!-- sent="Mon, 17 Dec 2012 21:10:53 -0500" -->
<!-- isosent="20121218021053" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI] #3351: JAVA scatter error" -->
<!-- id="B30E2E32-290E-4C40-A6A5-A02599F3EB08_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201212151546.qBFFk6Xf024391_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Open MPI] #3351: JAVA scatter error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-17 21:10:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20983.php">Siegmar Gross: "[OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="20981.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>In reply to:</strong> <a href="20966.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20995.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 15, 2012, at 10:46 AM, Siegmar Gross wrote:
<br>
<p><span class="quotelev1">&gt; If I misunderstood the mpiJava specification and I must create a special
</span><br>
<span class="quotelev1">&gt; MPI object from my Java object: How do I create it? Thank you very much
</span><br>
<span class="quotelev1">&gt; for any help in advance.
</span><br>
<p><p>You sent me a source code listing off-list, but I want to reply on-list for a few reasons:
<br>
<p>1. We actively do want feedback on these Java bindings
<br>
2. There is some documentation about this, but these bindings *are* different than the C bindings (and Java just behaves differently from Java), so it's worth documenting here in a Google-able location
<br>
<p>I attached the source code listing you sent.
<br>
<p>It is closer to correct, but I still don't think it's quite right.  There's two issues here:
<br>
<p>1. I have no idea how Java stores 2D arrays of doubles.  I.e., you're using &quot;double matrix[][]&quot;.  I don't know if all P*Q values are stored contiguously in memory (or, more specifically, if the Java language *guarantees* that that will always be so).
<br>
<p>2. Your MPI vector is almost right, but there's a subtle issue about MPI vectors that you're missing.
<br>
<p><pre>
----
Because of #1, I changed your program to use matrix[], and have it malloc a single P*Q array.  Then I always accessed the {i,j} element via matrix[i * Q + j].  In this way, Java seems to keep all the values contiguously in memory.
That leads to this conversion of your program:
-----
import mpi.*;
public class ColumnScatterMain {
    static final int P = 4;
    static final int Q = 6;
    static final int NUM_ELEM_PER_LINE = 6;
    
    public static void main (String args[]) throws MPIException, InterruptedException
    {
	int      ntasks, mytid, i, j, tmp;
	double   matrix[], column[];
	Datatype column_t;
	
	MPI.Init (args);
	matrix = new double[P * Q];
	column = new double[P];
	mytid  = MPI.COMM_WORLD.Rank ();
	ntasks = MPI.COMM_WORLD.Size ();
	if (mytid == 0) {
	    if (ntasks != Q) {
		System.err.println (&quot;\n\nI need exactly &quot; + Q +
				    &quot; processes.\n\n&quot; +
				    &quot;Usage:\n&quot; +
				    &quot;  mpiexec -np &quot; + Q + 
				    &quot; java &lt;program name&gt;\n&quot;);
	    }
	}
	if (ntasks != Q) {
	    MPI.Finalize ();
	    System.exit (0);
	}
	column_t = Datatype.Vector (P, 1, Q, MPI.DOUBLE);
	column_t.Commit ();
	if (mytid == 0) {
	    tmp = 1;
	    System.out.println (&quot;\nmatrix:\n&quot;);
	    for (i = 0; i &lt; P; ++i) {
		for (j = 0; j &lt; Q; ++j) {
		    matrix[i * Q + j] = tmp++;
		    System.out.printf (&quot;%10.2f&quot;, matrix[i * Q + j]);
		}
		System.out.println ();
	    }
	    System.out.println ();
	}
	MPI.COMM_WORLD.Scatter (matrix, 0, 1, column_t,
				column, 0, P, MPI.DOUBLE, 0);
	Thread.sleep(1000 * mytid); // Sleep to get ordered output
	System.out.println (&quot;\nColumn of process &quot; + mytid + &quot;\n&quot;);
	for (i = 0; i &lt; P; ++i) {
	    if (((i + 1) % NUM_ELEM_PER_LINE) == 0) {
		System.out.printf (&quot;%10.2f\n&quot;, column[i]);
	    } else {
		System.out.printf (&quot;%10.2f&quot;, column[i]);
	    }
	}
	System.out.println ();
	column_t.finalize ();
	MPI.Finalize();
    }
}
-----
Notice that the output for process 0 after the scatter is correct -- it shows that it received values 1, 7, 13, 19 for its column.  But all other processes are wrong.
Why?
Because of #2.  Notice that process 1 got values 20, 0, 0, 0 (or, more specifically, 20, junk, junk, junk).
That's because the vector datatype you created ended right at element 19.  So it started the next vector (i.e., to send to process 1) at the next element -- element 20.  And then went on in the same memory pattern from there, but that was already beyond the end of the array.  
Go google a tutorial on MPI_Type_vector and you'll see what I mean.
In C or Fortran, the solution would be to use an MPI_TYPE_UB at the end of the vector to artificially make the &quot;next&quot; vector be at element 1 (vs. element 20).  By the description in 3.12, it looks like they explicitly disallowed this (or, I guess, they didn't implement LB/UB properly -- but MPI_LB and MPI_UB are deprecated in MPI-3.0, anyway).  But I think it could be done with MPI_TYPE_CREATE_RESIZED, which, unfortunately, doesn't look like it is implemented in these java bindings yet.
Make sense?
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20982/ColumnScatterMain.java">ColumnScatterMain.java</a>
</ul>
<!-- attachment="ColumnScatterMain.java" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20983.php">Siegmar Gross: "[OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="20981.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>In reply to:</strong> <a href="20966.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20995.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
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
