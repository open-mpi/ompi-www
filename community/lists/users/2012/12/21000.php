<?
$subject_val = "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 13:58:13 2012" -->
<!-- isoreceived="20121218185813" -->
<!-- sent="Tue, 18 Dec 2012 13:58:05 -0500" -->
<!-- isosent="20121218185805" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI] #3351: JAVA scatter error" -->
<!-- id="83368122-2994-4484-906B-6DFC91E8B142_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201212181705.qBIH5NAf002451_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2012-12-18 13:58:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21001.php">Jeff Squyres: "Re: [OMPI users] Windows Open MPI question"</a>
<li><strong>Previous message:</strong> <a href="20999.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>In reply to:</strong> <a href="20995.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21010.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 18, 2012, at 12:05 PM, Siegmar Gross wrote:
<br>
<p><span class="quotelev1">&gt; I know how to use MPI_Scatter or MPI_Scatterv in C, because I have
</span><br>
<span class="quotelev1">&gt; written some small and working example programs myself in the past.
</span><br>
<span class="quotelev1">&gt; My first Java program with MPI_Scatter was ColumnScatterMain.java
</span><br>
<span class="quotelev1">&gt; which I had sent to the list early October and now once more to you in
</span><br>
<span class="quotelev1">&gt; December. October 10th I had sent the program ColumnSendRecvMain.java
</span><br>
<span class="quotelev1">&gt; to the list (Subject: Datatype.Vector in mpijava in openmpi-1.9a1r27380),
</span><br>
<span class="quotelev1">&gt; because I thought and still think that building a column vector
</span><br>
<span class="quotelev1">&gt; doesn't work as expected. At the end of that email I wrote &quot;In my
</span><br>
<span class="quotelev1">&gt; opinion Datatype.Vector doesn't work as expected. mpiJava doesn't
</span><br>
<span class="quotelev1">&gt; support something similar to MPI_Type_create_resized so how can I use
</span><br>
<span class="quotelev1">&gt; column_t in a scatter operation? Will scatter automatically start with
</span><br>
<span class="quotelev1">&gt; the next element and not with the element following the extent of
</span><br>
<span class="quotelev1">&gt; column_t?&quot;.
</span><br>
<p>My mistake for not reading your mails carefully; sorry.  :-(
<br>
<p><span class="quotelev1">&gt; In my opinion Datatype.Vector must set the size of the
</span><br>
<span class="quotelev1">&gt; base datatype as extent of the vector and not the true extent, because
</span><br>
<span class="quotelev1">&gt; MPI-Java doesn't provide a function to resize a datatype.
</span><br>
<p>No, I think Datatype.Vector is doing the Right Thing in that it acts just like MPI_Type_vector.  We do want these to be *bindings*, after all -- meaning that they should be pretty much a 1:1 mapping to the C bindings.  
<br>
<p>I think the real shortcoming is that there is no Datatype.Resized function.  That can be fixed.
<br>
<p><span class="quotelev1">&gt; Furthermore
</span><br>
<span class="quotelev1">&gt; Datatype.Struct allows only a collection of elements of the same type,
</span><br>
<span class="quotelev1">&gt; so that you must use a data object, if you want to scatter or broadcast
</span><br>
<span class="quotelev1">&gt; data of different types in one operation.
</span><br>
<p>Agreed.  I'm not 100% sure why the original project made this design decision (I don't fully grok the explanation given in the paper; I'm not enough of a Java guy to know...), but it would be good if that could be fixed.
<br>
<p><span class="quotelev1">&gt; We should forget
</span><br>
<span class="quotelev1">&gt; ObjectScatterMain.java for the moment and concentrate on
</span><br>
<span class="quotelev1">&gt; ObjectBroadcastMain.java, which I have sent three days ago to the list,
</span><br>
<span class="quotelev1">&gt; because it has the same problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) ColumnSendRecvMain.java
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I create a 2D-matrix with (Java books would use &quot;double[][] matrix&quot;
</span><br>
<span class="quotelev1">&gt; which is the same in my opinion, but I like C notation)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; double matrix[][] = new double[P][Q];
</span><br>
<p>I noticed that if I used [][] in my version of the Scatter program, I got random results.  But if I used [] and did my own offset indexing, it worked.
<br>
<p>See my prior guess about Java contiguous memory storage.
<br>
<p><span class="quotelev1">&gt; Next I create a column vector
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; column_t = Datatype.Vector (P, 1, Q, MPI.DOUBLE);
</span><br>
<span class="quotelev1">&gt; column_t.Commit ();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which I can use in a send/recv-operation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if (mytid == 0)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      /* send one column to each process                                */
</span><br>
<span class="quotelev1">&gt;      for (i = 0; i &lt; Q; ++i)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt;        MPI.COMM_WORLD.Send (matrix, i, 1, column_t, i + 1, 0);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    else
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      MPI.COMM_WORLD.Recv (column, 0, P, MPI.DOUBLE, 0, 0);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This example doesn't depend on the extent of column_t, because I set
</span><br>
<span class="quotelev1">&gt; the &quot;offset&quot; where every column starts (at least I think so :-) ).
</span><br>
<p>Other than the [][] vs. [] thing, I agree.
<br>
<p><span class="quotelev1">&gt; Java doesn't want that a user has any knowledge about memory layouts
</span><br>
<span class="quotelev1">&gt; or addresses of data structures. That's the reason why I think that
</span><br>
<span class="quotelev1">&gt; all necessary computations and transformations must be done in
</span><br>
<span class="quotelev1">&gt; Datatype.Vector, MPI.COMM_WORLD.Send, and MPI.COMM_WORLD.Recv.
</span><br>
<span class="quotelev1">&gt; Unfortunately it seems that that is not the case.
</span><br>
<p>I don't think that MPI can magically figure this out (or perhaps I don't know enough about Java to be correct).
<br>
<p>If double[][] is a fundamentally different type (and storage format) than double[], what is MPI to do?  How can it tell the difference?
<br>
<p><span class="quotelev1">&gt; It is easy to see that process 1 doesn't get column 0. Your
</span><br>
<span class="quotelev1">&gt; suggestion to allocate enough memory for a matrix (without defining
</span><br>
<span class="quotelev1">&gt; a matrix) and doing all index computations yourself is in my opinion
</span><br>
<span class="quotelev1">&gt; not applicable for a &quot;normal&quot; Java programmer (it's even hard for
</span><br>
<span class="quotelev1">&gt; most C programmers :-) ). Hopefully you have an idea how to solve
</span><br>
<span class="quotelev1">&gt; this problem so that all processes receive correct column values.
</span><br>
<p>I'm afraid I don't, other than defining your own class which allocates memory contiguously, but overrides [] and [][] (I'm *assuming* you can do that in Java...?).
<br>
<p><span class="quotelev1">&gt; 2) ObjectBroadcastMain.java
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I said above, it is my understanding, that I can send a Java object
</span><br>
<span class="quotelev1">&gt; when I use MPI.OBJECT and that the MPI implementation must perform all
</span><br>
<span class="quotelev1">&gt; necessary tasks.
</span><br>
<p>Remember: there is no standard for MPI and Java.  So there is no &quot;must&quot;.  :-)
<br>
<p>This is one research implementation that was created.  We can update it and try to make it better, but we're somewhat crafting the rules as we go along here.
<br>
<p>(BTW, if we continue detailed discussions about implementation, this conversation should probably move to the devel list...)
<br>
<p><span class="quotelev1">&gt; Your interface for derived datatypes provides only
</span><br>
<span class="quotelev1">&gt; methods for discontiguous data and no method to create an MPI.OBJECT,
</span><br>
<span class="quotelev1">&gt; so that I have no idea what I would have to do to create one. The
</span><br>
<span class="quotelev1">&gt; object must be serializable so that you get the same values in a
</span><br>
<span class="quotelev1">&gt; heterogeneous environment. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 146 mpiexec -np 2 java ObjectBroadcastMain
</span><br>
<span class="quotelev1">&gt; Exception in thread &quot;main&quot; java.lang.ClassCastException:
</span><br>
<span class="quotelev1">&gt;  MyData cannot be cast to [Ljava.lang.Object;
</span><br>
<span class="quotelev1">&gt;        at mpi.Comm.Object_Serialize(Comm.java:207)
</span><br>
<span class="quotelev1">&gt;        at mpi.Comm.Send(Comm.java:292)
</span><br>
<span class="quotelev1">&gt;        at mpi.Intracomm.Bcast(Intracomm.java:202)
</span><br>
<span class="quotelev1">&gt;        at ObjectBroadcastMain.main(ObjectBroadcastMain.java:44)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<p>After rooting around in the code a bit, I think I understand this stack trace a bit better now..
<br>
<p>The code line in question is in the Object_Serialize method, where it calls:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Object buf_els [] = (Object[])buf;
<br>
<p>So it's trying to cast an (Object) to an (Object[]).  Apparently, this works for intrinsic Java types (e.g., int).  But it doesn't seem to work with your own class.
<br>
<p>Again, here's my disclaimer that I'm not a Java guy... :-)  But does this mean you need to define an operator[] method on your class, and that would allow this casting to work?  (not that I'm sure what this method would need to *do*, but this is a first step...)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21001.php">Jeff Squyres: "Re: [OMPI users] Windows Open MPI question"</a>
<li><strong>Previous message:</strong> <a href="20999.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>In reply to:</strong> <a href="20995.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21010.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
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
