<?
$subject_val = "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 17:12:24 2012" -->
<!-- isoreceived="20121217221224" -->
<!-- sent="Mon, 17 Dec 2012 17:12:19 -0500" -->
<!-- isosent="20121217221219" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI] #3351: JAVA scatter error" -->
<!-- id="DAEB13B9-60D8-4366-94F0-84C9327C7291_at_cisco.com" -->
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
<strong>Date:</strong> 2012-12-17 17:12:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20980.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Previous message:</strong> <a href="20978.php">Doug Reeder: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>In reply to:</strong> <a href="20966.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20981.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 15, 2012, at 10:46 AM, Siegmar Gross wrote:
<br>
<p><span class="quotelev2">&gt;&gt;  1. The datatypes passed to Scatter are not valid MPI datatypes
</span><br>
<span class="quotelev2">&gt;&gt; (MPI.OBJECT).  You need to construct a datatype that is specific to the
</span><br>
<span class="quotelev2">&gt;&gt; !MyData class, just like you would in C/C++.  I think that this is the
</span><br>
<span class="quotelev2">&gt;&gt; first error that you are seeing (i.e., that OMPI is trying to treat
</span><br>
<span class="quotelev2">&gt;&gt; MPI.OBJECT as an MPI Datatype object, and failing (and therefore throwing
</span><br>
<span class="quotelev2">&gt;&gt; an !ClassCastException exception).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps you are right and my small example program ist not a valid MPI
</span><br>
<span class="quotelev1">&gt; program. The problem is that I couldn't find any good documentation or
</span><br>
<span class="quotelev1">&gt; example programs how to write a program which uses a structured data
</span><br>
<span class="quotelev1">&gt; type.
</span><br>
<p>In Java, that's probably true.  Remember: there are no official MPI Java bindings. What is included in Open MPI is a research project from several years ago.  We picked what appeared to be the best one, freshened it up a little, updated its build system to incorporate into ours, verified its basic functionality, and went with that.
<br>
<p>In C, there should be plenty of google-able examples about how to use Scatter (and friends).  You might want to have a look at a few of those to get an idea how to use MPI_Scatter in general, and then apply that knowledge to a Java program.
<br>
<p>Make sense?
<br>
<p><span class="quotelev1">&gt; Therefore I sticked to the mpiJava specification which states
</span><br>
<span class="quotelev1">&gt; for derived datatypes in chapter 3.12 that the effect for MPI_Type_struct
</span><br>
<span class="quotelev1">&gt; can be achieved by using MPI.OBJECT as the buffer type and relying on
</span><br>
<span class="quotelev1">&gt; Java object serialization. &quot;dataItem&quot; is a serializable Java object and
</span><br>
<span class="quotelev1">&gt; I used MPI.OBJECT as buffer type. How can I create a valid MPI datatype
</span><br>
<span class="quotelev1">&gt; MPI.OBJECT so that I get a working example program?
</span><br>
<p>/me reads some Java implementation code...
<br>
<p>It looks like they allow passing MPI.OBJECT as the datatype argument; sorry, I guess I was wrong about that.
<br>
<p><span class="quotelev1">&gt;    MPI.COMM_WORLD.Scatter (dataItem, 0, 1, MPI.OBJECT,
</span><br>
<span class="quotelev1">&gt;                            objBuffer, 0, 1, MPI.OBJECT, 0);
</span><br>
<p>What I think you're running into here is that you're still using Scatter wrong, per my other point, below:
<br>
<p><span class="quotelev2">&gt;&gt;  1. It looks like you're trying to Scatter a single object to N peers.
</span><br>
<span class="quotelev2">&gt;&gt; That's invalid MPI -- you need to scatter (N*M) objects to N peers, where
</span><br>
<span class="quotelev2">&gt;&gt; M is a positive integer value (e.g., 1 or 2).  Are you trying to
</span><br>
<span class="quotelev2">&gt;&gt; broadcast?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is the very first version of the program where I scatter one object
</span><br>
<span class="quotelev1">&gt; to the process itself (at this point it is not the normal application
</span><br>
<span class="quotelev1">&gt; area for scatter, but should nevertheless work). I didn't continue due
</span><br>
<span class="quotelev1">&gt; to the error. I get the same error when I broadcast my data item.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 116 mpiexec -np 1 java -cp $DIRPREFIX_LOCAL/mpi_classfiles \
</span><br>
<span class="quotelev1">&gt;  ObjectScatterMain
</span><br>
<span class="quotelev1">&gt; Exception in thread &quot;main&quot; java.lang.ClassCastException: MyData cannot
</span><br>
<span class="quotelev1">&gt;  be cast to [Ljava.lang.Object;
</span><br>
<span class="quotelev1">&gt;        at mpi.Intracomm.copyBuffer(Intracomm.java:119)
</span><br>
<span class="quotelev1">&gt;        at mpi.Intracomm.Scatter(Intracomm.java:389)
</span><br>
<span class="quotelev1">&gt;        at ObjectScatterMain.main(ObjectScatterMain.java:45)
</span><br>
<p>I don't know Java, but it looks like it's complaining about the type of dataItem, not the type of MPI.OBJECT.  It says it can't cast dataItem to a Ljava.lang.Object -- which appears to be the type of the first argument to Scatter.
<br>
<p>Do you need to have MyData inherit from the Java base Object type, or some such?
<br>
<p><span class="quotelev1">&gt; &quot;Broadcast&quot; works if I have only a root process and it fails when I have
</span><br>
<span class="quotelev1">&gt; one more process.
</span><br>
<p>If I change MPI.COMM_WORLD.Scatter(...) to 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.Bcast(dataItem, 0, 1, MPI.OBJECT, 0);
<br>
<p>I get the same casting error.
<br>
<p>I'm sorry; I really don't know Java, and don't know how to fix this offhand.
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
<li><strong>Next message:</strong> <a href="20980.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Previous message:</strong> <a href="20978.php">Doug Reeder: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>In reply to:</strong> <a href="20966.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20981.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
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
