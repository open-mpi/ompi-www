<?
$subject_val = "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 15 10:52:57 2012" -->
<!-- isoreceived="20121215155257" -->
<!-- sent="Sat, 15 Dec 2012 16:46:06 +0100 (CET)" -->
<!-- isosent="20121215154606" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI] #3351: JAVA scatter error" -->
<!-- id="201212151546.qBFFk6Xf024391_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2012-12-15 10:46:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20967.php">Ralph Castain: "Re: [OMPI users] questions to some open problems"</a>
<li><strong>Previous message:</strong> <a href="20965.php">Jeff Squyres: "Re: [OMPI users] questions to some open problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20979.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Reply:</strong> <a href="20979.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Reply:</strong> <a href="20981.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Reply:</strong> <a href="20982.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Maybe reply:</strong> <a href="20995.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Maybe reply:</strong> <a href="21010.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Maybe reply:</strong> <a href="21039.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21083.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><span class="quotelev1">&gt; #3351: JAVA scatter error
</span><br>
<span class="quotelev1">&gt; ---------------------+-----------------------------
</span><br>
<span class="quotelev1">&gt; Reporter:  rhc       |       Owner:  jsquyres
</span><br>
<span class="quotelev1">&gt;     Type:  defect    |      Status:  closed
</span><br>
<span class="quotelev1">&gt; Priority:  critical  |   Milestone:  Open MPI 1.7.1
</span><br>
<span class="quotelev1">&gt;  Version:  trunk     |  Resolution:  invalid
</span><br>
<span class="quotelev1">&gt; Keywords:            |
</span><br>
<span class="quotelev1">&gt; ---------------------+-----------------------------
</span><br>
<span class="quotelev1">&gt; Changes (by jsquyres):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  * status:  new =&gt; closed
</span><br>
<span class="quotelev1">&gt;  * resolution:   =&gt; invalid
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Comment:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  I do not believe that the sample code provided is a valid MPI program, for
</span><br>
<span class="quotelev1">&gt;  two reasons (disclaimer: I do ''not'' know Java -- I'm just reading the
</span><br>
<span class="quotelev1">&gt;  code and making some assumptions about Java):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   1. The datatypes passed to Scatter are not valid MPI datatypes
</span><br>
<span class="quotelev1">&gt;  (MPI.OBJECT).  You need to construct a datatype that is specific to the
</span><br>
<span class="quotelev1">&gt;  !MyData class, just like you would in C/C++.  I think that this is the
</span><br>
<span class="quotelev1">&gt;  first error that you are seeing (i.e., that OMPI is trying to treat
</span><br>
<span class="quotelev1">&gt;  MPI.OBJECT as an MPI Datatype object, and failing (and therefore throwing
</span><br>
<span class="quotelev1">&gt;  an !ClassCastException exception).
</span><br>
<p>Perhaps you are right and my small example program ist not a valid MPI
<br>
program. The problem is that I couldn't find any good documentation or
<br>
example programs how to write a program which uses a structured data
<br>
type. Therefore I sticked to the mpiJava specification which states
<br>
for derived datatypes in chapter 3.12 that the effect for MPI_Type_struct
<br>
can be achieved by using MPI.OBJECT as the buffer type and relying on
<br>
Java object serialization. &quot;dataItem&quot; is a serializable Java object and
<br>
I used MPI.OBJECT as buffer type. How can I create a valid MPI datatype
<br>
MPI.OBJECT so that I get a working example program?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.Scatter (dataItem, 0, 1, MPI.OBJECT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;objBuffer, 0, 1, MPI.OBJECT, 0);
<br>
<p><p><span class="quotelev1">&gt;   1. It looks like you're trying to Scatter a single object to N peers.
</span><br>
<span class="quotelev1">&gt;  That's invalid MPI -- you need to scatter (N*M) objects to N peers, where
</span><br>
<span class="quotelev1">&gt;  M is a positive integer value (e.g., 1 or 2).  Are you trying to
</span><br>
<span class="quotelev1">&gt;  broadcast?
</span><br>
<p>It is the very first version of the program where I scatter one object
<br>
to the process itself (at this point it is not the normal application
<br>
area for scatter, but should nevertheless work). I didn't continue due
<br>
to the error. I get the same error when I broadcast my data item.
<br>
<p>tyr java 116 mpiexec -np 1 java -cp $DIRPREFIX_LOCAL/mpi_classfiles \
<br>
&nbsp;&nbsp;ObjectScatterMain
<br>
Exception in thread &quot;main&quot; java.lang.ClassCastException: MyData cannot
<br>
&nbsp;&nbsp;be cast to [Ljava.lang.Object;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpi.Intracomm.copyBuffer(Intracomm.java:119)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpi.Intracomm.Scatter(Intracomm.java:389)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ObjectScatterMain.main(ObjectScatterMain.java:45)
<br>
<p><p>&quot;Broadcast&quot; works if I have only a root process and it fails when I have
<br>
one more process.
<br>
<p>tyr java 117 mpiexec -np 1 java -cp $DIRPREFIX_LOCAL/mpi_classfiles \
<br>
&nbsp;&nbsp;ObjectBroadcastMain
<br>
<p>Process 0 running on tyr.informatik.hs-fulda.de.
<br>
&nbsp;&nbsp;Age:  35
<br>
&nbsp;&nbsp;Name: Smith
<br>
&nbsp;&nbsp;Salary:    2545.75
<br>
<p><p>tyr java 118 mpiexec -np 2 java -cp $DIRPREFIX_LOCAL/mpi_classfiles \
<br>
&nbsp;&nbsp;ObjectBroadcastMain
<br>
Exception in thread &quot;main&quot; java.lang.ClassCastException: MyData cannot
<br>
&nbsp;&nbsp;be cast to [Ljava.lang.Object;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpi.Comm.Object_Serialize(Comm.java:207)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpi.Comm.Send(Comm.java:292)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpi.Intracomm.Bcast(Intracomm.java:202)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ObjectBroadcastMain.main(ObjectBroadcastMain.java:44)
<br>
<p><p><span class="quotelev1">&gt;  Short version -- I don't think this bug is valid.  I'm closing the ticket.
</span><br>
<p>If I misunderstood the mpiJava specification and I must create a special
<br>
MPI object from my Java object: How do I create it? Thank you very much
<br>
for any help in advance.
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<p>

<br><hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20966/ObjectBroadcastMain.java">ObjectBroadcastMain.java</a>
</ul>
<!-- attachment="ObjectBroadcastMain.java" -->
<hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20966/MyData.java">MyData.java</a>
</ul>
<!-- attachment="MyData.java" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20967.php">Ralph Castain: "Re: [OMPI users] questions to some open problems"</a>
<li><strong>Previous message:</strong> <a href="20965.php">Jeff Squyres: "Re: [OMPI users] questions to some open problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20979.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Reply:</strong> <a href="20979.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Reply:</strong> <a href="20981.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Reply:</strong> <a href="20982.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Maybe reply:</strong> <a href="20995.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Maybe reply:</strong> <a href="21010.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Maybe reply:</strong> <a href="21039.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21083.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
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
