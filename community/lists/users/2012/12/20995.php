<?
$subject_val = "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 12:12:22 2012" -->
<!-- isoreceived="20121218171222" -->
<!-- sent="Tue, 18 Dec 2012 18:05:23 +0100 (CET)" -->
<!-- isosent="20121218170523" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI] #3351: JAVA scatter error" -->
<!-- id="201212181705.qBIH5NAf002451_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] [Open MPI] #3351: JAVA scatter error" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-18 12:05:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20996.php">JR Cary: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="20994.php">marco atzeri: "Re: [OMPI users] Windows Open MPI question"</a>
<li><strong>Maybe in reply to:</strong> <a href="20966.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21000.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Reply:</strong> <a href="21000.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p><span class="quotelev3">&gt; &gt;&gt;  1. The datatypes passed to Scatter are not valid MPI datatypes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (MPI.OBJECT).  You need to construct a datatype that is specific to the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; !MyData class, just like you would in C/C++.  I think that this is the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; first error that you are seeing (i.e., that OMPI is trying to treat
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI.OBJECT as an MPI Datatype object, and failing (and therefore throwing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; an !ClassCastException exception).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Perhaps you are right and my small example program ist not a valid MPI
</span><br>
<span class="quotelev2">&gt; &gt; program. The problem is that I couldn't find any good documentation or
</span><br>
<span class="quotelev2">&gt; &gt; example programs how to write a program which uses a structured data
</span><br>
<span class="quotelev2">&gt; &gt; type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In Java, that's probably true.  Remember: there are no official MPI
</span><br>
<span class="quotelev1">&gt; Java bindings. What is included in Open MPI is a research project
</span><br>
<span class="quotelev1">&gt; from several years ago.  We picked what appeared to be the best one,
</span><br>
<span class="quotelev1">&gt; freshened it up a little, updated its build system to incorporate
</span><br>
<span class="quotelev1">&gt; into ours, verified its basic functionality, and went with that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In C, there should be plenty of google-able examples about how to
</span><br>
<span class="quotelev1">&gt; use Scatter (and friends).  You might want to have a look at a few
</span><br>
<span class="quotelev1">&gt; of those to get an idea how to use MPI_Scatter in general, and then
</span><br>
<span class="quotelev1">&gt; apply that knowledge to a Java program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<p>I know how to use MPI_Scatter or MPI_Scatterv in C, because I have
<br>
written some small and working example programs myself in the past.
<br>
My first Java program with MPI_Scatter was ColumnScatterMain.java
<br>
which I had sent to the list early October and now once more to you in
<br>
December. October 10th I had sent the program ColumnSendRecvMain.java
<br>
to the list (Subject: Datatype.Vector in mpijava in openmpi-1.9a1r27380),
<br>
because I thought and still think that building a column vector
<br>
doesn't work as expected. At the end of that email I wrote &quot;In my
<br>
opinion Datatype.Vector doesn't work as expected. mpiJava doesn't
<br>
support something similar to MPI_Type_create_resized so how can I use
<br>
column_t in a scatter operation? Will scatter automatically start with
<br>
the next element and not with the element following the extent of
<br>
column_t?&quot;. In my opinion Datatype.Vector must set the size of the
<br>
base datatype as extent of the vector and not the true extent, because
<br>
MPI-Java doesn't provide a function to resize a datatype. Furthermore
<br>
Datatype.Struct allows only a collection of elements of the same type,
<br>
so that you must use a data object, if you want to scatter or broadcast
<br>
data of different types in one operation. We should forget
<br>
ObjectScatterMain.java for the moment and concentrate on
<br>
ObjectBroadcastMain.java, which I have sent three days ago to the list,
<br>
because it has the same problem.
<br>
<p>1) ColumnSendRecvMain.java
<br>
<p>I create a 2D-matrix with (Java books would use &quot;double[][] matrix&quot;
<br>
which is the same in my opinion, but I like C notation)
<br>
<p>double matrix[][] = new double[P][Q];
<br>
<p>Next I create a column vector
<br>
<p>column_t = Datatype.Vector (P, 1, Q, MPI.DOUBLE);
<br>
column_t.Commit ();
<br>
<p>which I can use in a send/recv-operation
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (mytid == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* send one column to each process                                */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; Q; ++i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.Send (matrix, i, 1, column_t, i + 1, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.Recv (column, 0, P, MPI.DOUBLE, 0, 0);
<br>
<p><p>This example doesn't depend on the extent of column_t, because I set
<br>
the &quot;offset&quot; where every column starts (at least I think so :-) ).
<br>
Java doesn't want that a user has any knowledge about memory layouts
<br>
or addresses of data structures. That's the reason why I think that
<br>
all necessary computations and transformations must be done in
<br>
Datatype.Vector, MPI.COMM_WORLD.Send, and MPI.COMM_WORLD.Recv.
<br>
Unfortunately it seems that that is not the case.
<br>
<p>tyr java 125 mpiexec -np 7 -output-filename xx java ColumnSendRecvMain
<br>
tyr java 128 cat xx.1.0 xx.1.1
<br>
<p>matrix:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.00      2.00      3.00      4.00      5.00      6.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.00      8.00      9.00     10.00     11.00     12.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13.00     14.00     15.00     16.00     17.00     18.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;19.00     20.00     21.00     22.00     23.00     24.00
<br>
<p>Column of process 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.00      3.00      7.00      0.00
<br>
<p><p>I get the following output, if I use &quot;int&quot; instead of &quot;double&quot;.
<br>
<p>tyr java 143 mpiexec -np 7 -output-filename xx java ColumnSendRecvIntMain
<br>
tyr java 144 cat xx.1.0 xx.1.1
<br>
<p>matrix:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1       2       3       4       5       6  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7       8       9      10      11      12  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;13      14      15      16      17      18  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;19      20      21      22      23      24  
<br>
<p>Column of process 1
<br>
<p>99731135  1586     5     7
<br>
<p>It is easy to see that process 1 doesn't get column 0. Your
<br>
suggestion to allocate enough memory for a matrix (without defining
<br>
a matrix) and doing all index computations yourself is in my opinion
<br>
not applicable for a &quot;normal&quot; Java programmer (it's even hard for
<br>
most C programmers :-) ). Hopefully you have an idea how to solve
<br>
this problem so that all processes receive correct column values.
<br>
<p><p>2) ObjectBroadcastMain.java
<br>
<p>As I said above, it is my understanding, that I can send a Java object
<br>
when I use MPI.OBJECT and that the MPI implementation must perform all
<br>
necessary tasks. Your interface for derived datatypes provides only
<br>
methods for discontiguous data and no method to create an MPI.OBJECT,
<br>
so that I have no idea what I would have to do to create one. The
<br>
object must be serializable so that you get the same values in a
<br>
heterogeneous environment. 
<br>
<p>tyr java 146 mpiexec -np 2 java ObjectBroadcastMain
<br>
Exception in thread &quot;main&quot; java.lang.ClassCastException:
<br>
&nbsp;&nbsp;MyData cannot be cast to [Ljava.lang.Object;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpi.Comm.Object_Serialize(Comm.java:207)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpi.Comm.Send(Comm.java:292)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpi.Intracomm.Bcast(Intracomm.java:202)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ObjectBroadcastMain.main(ObjectBroadcastMain.java:44)
<br>
...
<br>
<p><p>At least you try to serialize my object, but I have no idea why
<br>
the error occurs. With Google I found:
<br>
<p>[Ljava.lang.Object; is the name for Object[].class, the java.lang.Class 
<br>
representing the class of array of Object.
<br>
<p>Perhaps I must create an array with just one element instead of a pure
<br>
Object. Success! Output for the updated version which I have attached.
<br>
<p>tyr java 157 mpiexec -np 2 java ObjectBroadcastMain
<br>
<p>Process 0 running on tyr.informatik.hs-fulda.de.
<br>
&nbsp;&nbsp;Age:  35
<br>
&nbsp;&nbsp;Name: Smith
<br>
&nbsp;&nbsp;Salary:    2545.75
<br>
<p>Process 1 running on tyr.informatik.hs-fulda.de.
<br>
&nbsp;&nbsp;Age:  35
<br>
&nbsp;&nbsp;Name: Smith
<br>
&nbsp;&nbsp;Salary:    2545.75
<br>
tyr java 158 
<br>
<p><p>Is it possible that you decide in your serialization function/method,
<br>
if the buffer contains just one element/object or an array of
<br>
elements/objects so that you can cast to java.lang.Object or
<br>
Ljava.lang.Object?
<br>
<p><p><span class="quotelev2">&gt; &gt; Therefore I sticked to the mpiJava specification which states
</span><br>
<span class="quotelev2">&gt; &gt; for derived datatypes in chapter 3.12 that the effect for MPI_Type_struct
</span><br>
<span class="quotelev2">&gt; &gt; can be achieved by using MPI.OBJECT as the buffer type and relying on
</span><br>
<span class="quotelev2">&gt; &gt; Java object serialization. &quot;dataItem&quot; is a serializable Java object and
</span><br>
<span class="quotelev2">&gt; &gt; I used MPI.OBJECT as buffer type. How can I create a valid MPI datatype
</span><br>
<span class="quotelev2">&gt; &gt; MPI.OBJECT so that I get a working example program?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /me reads some Java implementation code...
</span><br>
<p>Me too, because I had to know if you changed the mpiJava interface
<br>
in your implementation and which datatypes for parameters and return
<br>
values you used.
<br>
<p><p><span class="quotelev1">&gt; It looks like they allow passing MPI.OBJECT as the datatype argument;
</span><br>
<span class="quotelev1">&gt; sorry, I guess I was wrong about that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    MPI.COMM_WORLD.Scatter (dataItem, 0, 1, MPI.OBJECT,
</span><br>
<span class="quotelev2">&gt; &gt;                            objBuffer, 0, 1, MPI.OBJECT, 0);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I think you're running into here is that you're still using
</span><br>
<span class="quotelev1">&gt; Scatter wrong, per my other point, below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  1. It looks like you're trying to Scatter a single object to N peers.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That's invalid MPI -- you need to scatter (N*M) objects to N peers, where
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M is a positive integer value (e.g., 1 or 2).  Are you trying to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; broadcast?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It is the very first version of the program where I scatter one object
</span><br>
<span class="quotelev2">&gt; &gt; to the process itself (at this point it is not the normal application
</span><br>
<span class="quotelev2">&gt; &gt; area for scatter, but should nevertheless work). I didn't continue due
</span><br>
<span class="quotelev2">&gt; &gt; to the error. I get the same error when I broadcast my data item.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 116 mpiexec -np 1 java -cp $DIRPREFIX_LOCAL/mpi_classfiles \
</span><br>
<span class="quotelev2">&gt; &gt;  ObjectScatterMain
</span><br>
<span class="quotelev2">&gt; &gt; Exception in thread &quot;main&quot; java.lang.ClassCastException: MyData cannot
</span><br>
<span class="quotelev2">&gt; &gt;  be cast to [Ljava.lang.Object;
</span><br>
<span class="quotelev2">&gt; &gt;        at mpi.Intracomm.copyBuffer(Intracomm.java:119)
</span><br>
<span class="quotelev2">&gt; &gt;        at mpi.Intracomm.Scatter(Intracomm.java:389)
</span><br>
<span class="quotelev2">&gt; &gt;        at ObjectScatterMain.main(ObjectScatterMain.java:45)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know Java, but it looks like it's complaining about the type
</span><br>
<span class="quotelev1">&gt; of dataItem, not the type of MPI.OBJECT.  It says it can't cast
</span><br>
<span class="quotelev1">&gt; dataItem to a Ljava.lang.Object -- which appears to be the type of
</span><br>
<span class="quotelev1">&gt; the first argument to Scatter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you need to have MyData inherit from the Java base Object type,
</span><br>
<span class="quotelev1">&gt; or some such?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Broadcast&quot; works if I have only a root process and it fails when I have
</span><br>
<span class="quotelev2">&gt; &gt; one more process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I change MPI.COMM_WORLD.Scatter(...) to 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI.COMM_WORLD.Bcast(dataItem, 0, 1, MPI.OBJECT, 0);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the same casting error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm sorry; I really don't know Java, and don't know how to fix this offhand.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<p><p>Thank you very much for all your help so far and for all the fruitful
<br>
discussions which normally resulted in a solution.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>


<br><hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20995/ColumnSendRecvMain.java">ColumnSendRecvMain.java</a>
</ul>
<!-- attachment="ColumnSendRecvMain.java" -->
<hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20995/ColumnSendRecvIntMain.java">ColumnSendRecvIntMain.java</a>
</ul>
<!-- attachment="ColumnSendRecvIntMain.java" -->
<hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20995/ObjectBroadcastMain.java">ObjectBroadcastMain.java</a>
</ul>
<!-- attachment="ObjectBroadcastMain.java" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20996.php">JR Cary: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="20994.php">marco atzeri: "Re: [OMPI users] Windows Open MPI question"</a>
<li><strong>Maybe in reply to:</strong> <a href="20966.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21000.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Reply:</strong> <a href="21000.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
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
