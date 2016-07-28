<?
$subject_val = "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 09:29:06 2012" -->
<!-- isoreceived="20121219142906" -->
<!-- sent="Wed, 19 Dec 2012 15:22:02 +0100 (CET)" -->
<!-- isosent="20121219142202" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI] #3351: JAVA scatter error" -->
<!-- id="201212191422.qBJEM2hs005209_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2012-12-19 09:22:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21011.php">Shamis, Pavel: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>Previous message:</strong> <a href="21009.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Maybe in reply to:</strong> <a href="20966.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21045.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Reply:</strong> <a href="21045.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I shortend this email so that you get earlier to my comments.
<br>
<p><span class="quotelev2">&gt; &gt; In my opinion Datatype.Vector must set the size of the
</span><br>
<span class="quotelev2">&gt; &gt; base datatype as extent of the vector and not the true extent, because
</span><br>
<span class="quotelev2">&gt; &gt; MPI-Java doesn't provide a function to resize a datatype.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, I think Datatype.Vector is doing the Right Thing in that it acts
</span><br>
<span class="quotelev1">&gt; just like MPI_Type_vector.  We do want these to be *bindings*, after
</span><br>
<span class="quotelev1">&gt; all -- meaning that they should be pretty much a 1:1 mapping to the
</span><br>
<span class="quotelev1">&gt; C bindings.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the real shortcoming is that there is no Datatype.Resized
</span><br>
<span class="quotelev1">&gt; function.  That can be fixed.
</span><br>
<p>Are you sure? That would at least solve one problem.
<br>
<p><p><span class="quotelev2">&gt; &gt; We should forget
</span><br>
<span class="quotelev2">&gt; &gt; ObjectScatterMain.java for the moment and concentrate on
</span><br>
<span class="quotelev2">&gt; &gt; ObjectBroadcastMain.java, which I have sent three days ago to the list,
</span><br>
<span class="quotelev2">&gt; &gt; because it has the same problem.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1) ColumnSendRecvMain.java
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I create a 2D-matrix with (Java books would use &quot;double[][] matrix&quot;
</span><br>
<span class="quotelev2">&gt; &gt; which is the same in my opinion, but I like C notation)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; double matrix[][] = new double[P][Q];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I noticed that if I used [][] in my version of the Scatter program,
</span><br>
<span class="quotelev1">&gt; I got random results.  But if I used [] and did my own offset
</span><br>
<span class="quotelev1">&gt; indexing, it worked.
</span><br>
<p>I think if you want a 2D-matrix you should use a Java matrix and not
<br>
a special one with your own offset indexing. In my opinion that is
<br>
something a C programmer can/would do (I'm a C programmer myself with
<br>
a little Java knowledge), but the benefit of Java is that the programmer
<br>
should not know about addresses, memory layouts and similar things. Now
<br>
I sound like my colleagues who always claim that my Java programs look
<br>
more like C programs than Java programs :-(. I know nothing about the
<br>
memory layout of a Java matrix or if the layout is stable during the
<br>
lifetime of the object, but I think that the Java interface should deal
<br>
with all these things if that is possible. I suppose that Open MPI will
<br>
not succeed in the Java world if it requires &quot;special&quot; matrices and a
<br>
special offset indexing. Perhaps some members of this list have very
<br>
good Java knowledge or even know the exact layout of Java matrices so
<br>
that Datatype.Vector can build a Java column vector from a Java matrix
<br>
which even contains valid values.
<br>
<p><p><span class="quotelev1">&gt; If double[][] is a fundamentally different type (and storage format)
</span><br>
<span class="quotelev1">&gt; than double[], what is MPI to do?  How can it tell the difference?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It is easy to see that process 1 doesn't get column 0. Your
</span><br>
<span class="quotelev2">&gt; &gt; suggestion to allocate enough memory for a matrix (without defining
</span><br>
<span class="quotelev2">&gt; &gt; a matrix) and doing all index computations yourself is in my opinion
</span><br>
<span class="quotelev2">&gt; &gt; not applicable for a &quot;normal&quot; Java programmer (it's even hard for
</span><br>
<span class="quotelev2">&gt; &gt; most C programmers :-) ). Hopefully you have an idea how to solve
</span><br>
<span class="quotelev2">&gt; &gt; this problem so that all processes receive correct column values.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm afraid I don't, other than defining your own class which
</span><br>
<span class="quotelev1">&gt; allocates memory contiguously, but overrides [] and [][]
</span><br>
<span class="quotelev1">&gt; (I'm *assuming* you can do that in Java...?).
</span><br>
<p>Does anybody else in this list know how it can be done?
<br>
<p><p><span class="quotelev2">&gt; &gt; 2) ObjectBroadcastMain.java
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As I said above, it is my understanding, that I can send a Java object
</span><br>
<span class="quotelev2">&gt; &gt; when I use MPI.OBJECT and that the MPI implementation must perform all
</span><br>
<span class="quotelev2">&gt; &gt; necessary tasks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Remember: there is no standard for MPI and Java.  So there is no
</span><br>
<span class="quotelev1">&gt; &quot;must&quot;.  :-)
</span><br>
<p>I know and I'm grateful that you try nevertheless to offer a Java
<br>
interface. Hopefully you will not misunderstand my &quot;must&quot;. It wasn't
<br>
complaining, but trying to express that a &quot;normal&quot; Java user would
<br>
expect that he can implement an MPI program without special knowledge
<br>
about data layouts.
<br>
<p><p><span class="quotelev1">&gt; This is one research implementation that was created.  We can update
</span><br>
<span class="quotelev1">&gt; it and try to make it better, but we're somewhat crafting the rules
</span><br>
<span class="quotelev1">&gt; as we go along here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (BTW, if we continue detailed discussions about implementation,
</span><br>
<span class="quotelev1">&gt; this conversation should probably move to the devel list...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Your interface for derived datatypes provides only
</span><br>
<span class="quotelev2">&gt; &gt; methods for discontiguous data and no method to create an MPI.OBJECT,
</span><br>
<span class="quotelev2">&gt; &gt; so that I have no idea what I would have to do to create one. The
</span><br>
<span class="quotelev2">&gt; &gt; object must be serializable so that you get the same values in a
</span><br>
<span class="quotelev2">&gt; &gt; heterogeneous environment. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 146 mpiexec -np 2 java ObjectBroadcastMain
</span><br>
<span class="quotelev2">&gt; &gt; Exception in thread &quot;main&quot; java.lang.ClassCastException:
</span><br>
<span class="quotelev2">&gt; &gt;  MyData cannot be cast to [Ljava.lang.Object;
</span><br>
<span class="quotelev2">&gt; &gt;        at mpi.Comm.Object_Serialize(Comm.java:207)
</span><br>
<span class="quotelev2">&gt; &gt;        at mpi.Comm.Send(Comm.java:292)
</span><br>
<span class="quotelev2">&gt; &gt;        at mpi.Intracomm.Bcast(Intracomm.java:202)
</span><br>
<span class="quotelev2">&gt; &gt;        at ObjectBroadcastMain.main(ObjectBroadcastMain.java:44)
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After rooting around in the code a bit, I think I understand this
</span><br>
<span class="quotelev1">&gt; stack trace a bit better now..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code line in question is in the Object_Serialize method, where
</span><br>
<span class="quotelev1">&gt; it calls:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	Object buf_els [] = (Object[])buf;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it's trying to cast an (Object) to an (Object[]).  Apparently,
</span><br>
<span class="quotelev1">&gt; this works for intrinsic Java types (e.g., int).  But it doesn't
</span><br>
<span class="quotelev1">&gt; seem to work with your own class.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, here's my disclaimer that I'm not a Java guy... :-)  But does
</span><br>
<span class="quotelev1">&gt; this mean you need to define an operator[] method on your class, and
</span><br>
<span class="quotelev1">&gt; that would allow this casting to work?  (not that I'm sure what this
</span><br>
<span class="quotelev1">&gt; method would need to *do*, but this is a first step...)
</span><br>
<p>Alternatively the buffer parameter type could be changed from &quot;Object&quot;
<br>
to &quot;Object[]&quot;. Then everybody would know that an array is expected
<br>
(even for a single value). However, I don't know if that has a
<br>
consequence which breaks other things. Is a different parameter type
<br>
possible or out-of any question?
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21011.php">Shamis, Pavel: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>Previous message:</strong> <a href="21009.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Maybe in reply to:</strong> <a href="20966.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21045.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Reply:</strong> <a href="21045.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
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
