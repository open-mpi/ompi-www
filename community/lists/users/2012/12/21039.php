<?
$subject_val = "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 21 14:39:18 2012" -->
<!-- isoreceived="20121221193918" -->
<!-- sent="Fri, 21 Dec 2012 20:32:29 +0100 (CET)" -->
<!-- isosent="20121221193229" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI] #3351: JAVA scatter error" -->
<!-- id="201212211932.qBLJWTbo009837_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2012-12-21 14:32:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21040.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Previous message:</strong> <a href="21038.php">George Bosilca: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="20966.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21083.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p><span class="quotelev1">&gt; (taking the liberty of moving this thread to the devel list...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 19, 2012, at 9:22 AM, Siegmar Gross wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think the real shortcoming is that there is no Datatype.Resized
</span><br>
<span class="quotelev3">&gt; &gt;&gt; function.  That can be fixed.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Are you sure? That would at least solve one problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think so.  We &quot;own&quot; the bindings now, so adding a method is
</span><br>
<span class="quotelev1">&gt; hypothetically possible.  I can have a look at adding that over
</span><br>
<span class="quotelev1">&gt; the holidays, but I make no promises...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I noticed that if I used [][] in my version of the Scatter program,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I got random results.  But if I used [] and did my own offset
</span><br>
<span class="quotelev3">&gt; &gt;&gt; indexing, it worked.
</span><br>
<p>Today I found something about the memory layout of 2D matrices in
<br>
Java (I'm not sure if the information is valid). Java has one 1D array
<br>
with pointers to every 1D row. All elements of a row are stored in
<br>
contiguous memory. Different rows can be stored in &quot;arbitrary&quot; places
<br>
so that a 2D matrix is normally not stored in a contiguous memory area.
<br>
It may even happen that rows with ascending indices are not stored in
<br>
ascending memory locations. If that is true, then Datatype.Vector
<br>
has much more to do in Java to build a column vector of a 2D matrix
<br>
than in C. Furthermore it wouldn't make sense in my opinion that the
<br>
extent of a column type is comparable to the true extent in C, because
<br>
in theory you can have an arbitrary order of the rows in main memory.
<br>
In fact it would be better in that case if the extent of a new column
<br>
type is equal to the extent of the base type of the array. It would also
<br>
be necessary that a new column type is something like an array itself
<br>
pointing for example to the first element of each row (perhaps it is
<br>
even possible to use the Java pointer array of the 2D matrix). To make
<br>
things worse, Java allows non-rectangular matrices (but they could be
<br>
prohibited for MPI). Perhaps this is no news to you, but I wanted to
<br>
mention it in case you also didn't know (as I said I'm not sure if the
<br>
information about 2D Java matrices is true).
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev2">&gt; &gt; I think if you want a 2D-matrix you should use a Java matrix and not
</span><br>
<span class="quotelev2">&gt; &gt; a special one with your own offset indexing. In my opinion that is
</span><br>
<span class="quotelev2">&gt; &gt; something a C programmer can/would do (I'm a C programmer myself with
</span><br>
<span class="quotelev2">&gt; &gt; a little Java knowledge), but the benefit of Java is that the programmer
</span><br>
<span class="quotelev2">&gt; &gt; should not know about addresses, memory layouts and similar things.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Understood, and I agree.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But if Java doesn't give any guarantees about memory layout, then how is MPI 
</span><br>
supposed to handle this?
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Now
</span><br>
<span class="quotelev2">&gt; &gt; I sound like my colleagues who always claim that my Java programs look
</span><br>
<span class="quotelev2">&gt; &gt; more like C programs than Java programs :-(. I know nothing about the
</span><br>
<span class="quotelev2">&gt; &gt; memory layout of a Java matrix or if the layout is stable during the
</span><br>
<span class="quotelev2">&gt; &gt; lifetime of the object, but I think that the Java interface should deal
</span><br>
<span class="quotelev2">&gt; &gt; with all these things if that is possible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's quite possible/likely that Java implementations do deal with this stuff 
</span><br>
-- they *have* to, right?
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But they don't necessarily expose it to external libraries (like MPI), thereby 
</span><br>
making it impossible to do low-level actions, like directly accessing memory.  
<br>
(again, I could be wrong here -- I'm NOT a Java expert!)
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: Fortran 2008 had similar issues.  The MPI Forum had to directly interact 
</span><br>
with the Fortran language standards body to get them to change some of these 
<br>
guarantees so that MPI could access some of Fortran's lower-layer information.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I suppose that Open MPI will
</span><br>
<span class="quotelev2">&gt; &gt; not succeed in the Java world if it requires &quot;special&quot; matrices and a
</span><br>
<span class="quotelev2">&gt; &gt; special offset indexing. Perhaps some members of this list have very
</span><br>
<span class="quotelev2">&gt; &gt; good Java knowledge or even know the exact layout of Java matrices so
</span><br>
<span class="quotelev2">&gt; &gt; that Datatype.Vector can build a Java column vector from a Java matrix
</span><br>
<span class="quotelev2">&gt; &gt; which even contains valid values.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any Java expert input would be welcomed here...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Remember: there is no standard for MPI and Java.  So there is no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;must&quot;.  :-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I know and I'm grateful that you try nevertheless to offer a Java
</span><br>
<span class="quotelev2">&gt; &gt; interface. Hopefully you will not misunderstand my &quot;must&quot;. It wasn't
</span><br>
<span class="quotelev2">&gt; &gt; complaining, but trying to express that a &quot;normal&quot; Java user would
</span><br>
<span class="quotelev2">&gt; &gt; expect that he can implement an MPI program without special knowledge
</span><br>
<span class="quotelev2">&gt; &gt; about data layouts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fair enough.  Don't worry; I greatly appreciate the time and input that you're 
</span><br>
spending on this.  :-)
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...snip...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Again, here's my disclaimer that I'm not a Java guy... :-)  But does
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this mean you need to define an operator[] method on your class, and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that would allow this casting to work?  (not that I'm sure what this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; method would need to *do*, but this is a first step...)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Alternatively the buffer parameter type could be changed from &quot;Object&quot;
</span><br>
<span class="quotelev2">&gt; &gt; to &quot;Object[]&quot;. Then everybody would know that an array is expected
</span><br>
<span class="quotelev2">&gt; &gt; (even for a single value). However, I don't know if that has a
</span><br>
<span class="quotelev2">&gt; &gt; consequence which breaks other things. Is a different parameter type
</span><br>
<span class="quotelev2">&gt; &gt; possible or out-of any question?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got an out-of-band answer from a Java-expert friend yesterday that suggested 
</span><br>
a better way to do this -- he suggested using a ByteArrayOutputStream.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll try to look at this over the holidays.
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
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21040.php">Ralph Castain: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Previous message:</strong> <a href="21038.php">George Bosilca: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="20966.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21083.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
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
