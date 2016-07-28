<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul  8 13:45:19 2006" -->
<!-- isoreceived="20060708174519" -->
<!-- sent="Sat, 8 Jul 2006 13:47:05 -0400 (Eastern Daylight Time)" -->
<!-- isosent="20060708174705" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Datatype bug regression from Open MPI 1.0.2 to Open MPI 1.1" -->
<!-- id="Pine.WNT.4.64.0607081344080.2944_at_bosilca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1151706300.12310.6.camel_at_newhon.site" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-08 13:47:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1596.php">Yvan Fournier: "Re: [OMPI users] users Digest, Vol 328, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="1594.php">Justin Bronder: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1519.php">Yvan Fournier: "[OMPI users] Datatype bug regression from Open MPI 1.0.2 to Open MPI 1.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yvan,
<br>
<p>I'm unable to replicate this one with the latest Open MPI trunk version. 
<br>
As there is no difference between the trunk and the latest 1.1 version on 
<br>
the datatype, I think the bug cannot be reproduced using the 1.1 either. I 
<br>
compiled the test twice once using the indexed datatype and once without 
<br>
and the output is exactly the same. I run it on my Apple G5 desktop as 
<br>
well as on a cluster of AMD 64, over shared memory and TCP. Can you please 
<br>
recheck that your error is comming from the type indexed please.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Sat, 1 Jul 2006, Yvan Fournier wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had encountered a bug in Open MPI 1.0.1 using indexed datatypes
</span><br>
<span class="quotelev1">&gt; with MPI_Recv (which seems to be of the &quot;off by one&quot; sort), which
</span><br>
<span class="quotelev1">&gt; was corrected in Open MPI 1.0.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems to have resurfaced in Open MPI 1.1 (I encountered it using
</span><br>
<span class="quotelev1">&gt; different data and did not recognize it immediately, but it seems
</span><br>
<span class="quotelev1">&gt; it can reproduced using the same simplified test I had sent
</span><br>
<span class="quotelev1">&gt; the first time, which I re-attach here just in case).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a summary of the case:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each processor reads a file (&quot;data_p0&quot; or &quot;data_p1&quot;) giving a list of
</span><br>
<span class="quotelev1">&gt; global element ids. Some elements (vertices from a partitionned mesh)
</span><br>
<span class="quotelev1">&gt; may belong to both processors, so their id's may appear on both
</span><br>
<span class="quotelev1">&gt; processors: we have 7178 global vertices, 3654 and 3688 of them being
</span><br>
<span class="quotelev1">&gt; known by ranks 0 and 1 respectively.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this simplified version, we assign coordinates {x, y, z} to each
</span><br>
<span class="quotelev1">&gt; vertex equal to it's global id number for rank 1, and the negative of
</span><br>
<span class="quotelev1">&gt; that for rank 0 (assigning the same values to x, y, and z). After
</span><br>
<span class="quotelev1">&gt; finishing the &quot;ordered gather&quot;, rank 0 prints the global id and
</span><br>
<span class="quotelev1">&gt; coordinates of each vertex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lines should print (for example) as:
</span><br>
<span class="quotelev1">&gt;  6456 ;   6455.00000   6455.00000   6456.00000
</span><br>
<span class="quotelev1">&gt;  6457 ;  -6457.00000  -6457.00000  -6457.00000
</span><br>
<span class="quotelev1">&gt; depending on whether a vertex belongs only to rank 0 (negative
</span><br>
<span class="quotelev1">&gt; coordinates) or belongs to rank 1 (positive coordinates).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With the OMPI 1.0.1 bug (observed on Suse Linux 10.0 with gcc 4.0 and on
</span><br>
<span class="quotelev1">&gt; Debian sarge with gcc 3.4), we have for example for the last vertices:
</span><br>
<span class="quotelev1">&gt;  7176 ;   7175.00000   7175.00000   7176.00000
</span><br>
<span class="quotelev1">&gt;  7177 ;   7176.00000   7176.00000   7177.00000
</span><br>
<span class="quotelev1">&gt; seeming to indicate an &quot;off by one&quot; type bug in datatype handling
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not using an indexed datatype (i.e. not defining USE_INDEXED_DATATYPE
</span><br>
<span class="quotelev1">&gt; in the gather_test.c file), the bug dissapears.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Yvan Fournier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1596.php">Yvan Fournier: "Re: [OMPI users] users Digest, Vol 328, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="1594.php">Justin Bronder: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1519.php">Yvan Fournier: "[OMPI users] Datatype bug regression from Open MPI 1.0.2 to Open MPI 1.1"</a>
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
