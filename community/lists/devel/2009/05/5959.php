<?
$subject_val = "Re: [OMPI devel] Inherent limit on #communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 11:46:12 2009" -->
<!-- isoreceived="20090505154612" -->
<!-- sent="Tue, 05 May 2009 10:46:14 -0500" -->
<!-- isosent="20090505154614" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Inherent limit on #communicators?" -->
<!-- id="4A005F46.2010008_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090504114147.20546wpwiambbvq3_at_mail.tu-chemnitz.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Inherent limit on #communicators?<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-05 11:46:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5960.php">Jeff Squyres: "[OMPI devel] renaming / v1.5 branch"</a>
<li><strong>Previous message:</strong> <a href="5958.php">Jeff Squyres: "Re: [OMPI devel] Branching for 1.5.0"</a>
<li><strong>In reply to:</strong> <a href="5949.php">Christian Siebert: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christian Siebert wrote:
<br>
<span class="quotelev1">&gt; Hi Edgar,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cid's are in fact not recycled in the block algorithm. The problem is 
</span><br>
<span class="quotelev2">&gt;&gt; that comm_free is not collective, so you can not make any assumptions 
</span><br>
<span class="quotelev2">&gt;&gt; whether other procs have also released that communicator.
</span><br>
<span class="quotelev1">&gt; well, that's not quite correct. The MPI standard says the following 
</span><br>
<span class="quotelev1">&gt; about MPI_Comm_free (MPI 2.1, p 201, l 43): &quot;This collective operation 
</span><br>
<span class="quotelev1">&gt; marks the communication object for deallocation.&quot;. So MPI_Comm_free is 
</span><br>
<span class="quotelev1">&gt; collective which makes the prescribed problem(s) easier so solve.
</span><br>
<p>Christian,
<br>
<p>you are right, but unfortunately it doesn't help in this scenario. 
<br>
Consider the following test case, which fulfills the MPI spec:
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_dup ( MPI_COMM_WORLD, &amp;comm1 );
<br>
&nbsp;&nbsp;&nbsp;if ( rank == 0 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend ( dest=1, comm1, &amp;req );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait ( req, stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free ( comm1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_dup ( MPI_COMM_WORLD, &amp;comm 2);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;if ( rank == 1 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv ( src=0, comm1, &amp;req );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free ( &amp;comm1 );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_dup ( MPI_COMM_WORLD, comm1 );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait ( &amp;req, stat);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>In this case, rank=0 thinks that the CID of comm1 can be reused, but 
<br>
rank=1 can not reuse that CID yet, since the pending communication 
<br>
operation still has to finish. If you want determine the communicator id 
<br>
without communication (which is the goal of the block algorithm), you 
<br>
can not do that based on your local information. Collective != 
<br>
synchronous...
<br>
<p>Thanks
<br>
Edgar
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I admit that there exist an advice to implementors that 
</span><br>
<span class="quotelev1">&gt; anticipates a local implementation. Personally I find this advice rather 
</span><br>
<span class="quotelev1">&gt; strange and (if nobody can give a good reason for it) would encourage 
</span><br>
<span class="quotelev1">&gt; its removal...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;    Christian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5960.php">Jeff Squyres: "[OMPI devel] renaming / v1.5 branch"</a>
<li><strong>Previous message:</strong> <a href="5958.php">Jeff Squyres: "Re: [OMPI devel] Branching for 1.5.0"</a>
<li><strong>In reply to:</strong> <a href="5949.php">Christian Siebert: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
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
