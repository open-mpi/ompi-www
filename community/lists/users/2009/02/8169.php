<?
$subject_val = "Re: [OMPI users] MPI_Gatherv and 0 size?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 16:59:46 2009" -->
<!-- isoreceived="20090223215946" -->
<!-- sent="Mon, 23 Feb 2009 22:59:41 +0100" -->
<!-- isosent="20090223215941" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Gatherv and 0 size?" -->
<!-- id="9b0da5ce0902231359n2ecaaf50n386262cd0fa47b3e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49A30D55.1070407_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Gatherv and 0 size?<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-23 16:59:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8170.php">Tamara Rogers: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="8168.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>In reply to:</strong> <a href="8166.php">Eugene Loh: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, Eugene fomulates my question in a clear way.
<br>
<p>I have indeed been successfully using NULL for all those arguments
<br>
in MPI_Gatherv (for instance) where it is explicitly stated that
<br>
the argument in question is ignored.
<br>
So i have been wondering whether a buffer argument is also ignored
<br>
when the bufcount is 0.
<br>
<p>Jody
<br>
<p>On Mon, Feb 23, 2009 at 9:55 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I think the question is about passing NULL as a buffer pointer. &#160;E.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Send(NULL, 0, mytype,dst, tag,comm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; vs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Send(&amp;dummy,0,mytype,dst,tag,comm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The only restriction the MPI standard impose on the sendcounts and
</span><br>
<span class="quotelev2">&gt;&gt; &#160;recvcounts arrays is that the values be non-negative, so zero is a &#160;legal
</span><br>
<span class="quotelev2">&gt;&gt; value.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't really understand your second question. Where do you want to &#160;use
</span><br>
<span class="quotelev2">&gt;&gt; NULL ? In general NULL is not accepted in MPI as an argument for &#160;any
</span><br>
<span class="quotelev2">&gt;&gt; function ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 23, 2009, at 02:55 , jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have an application in which various processes create different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; amounts of data (including no data at all).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have found that MPI_Scatterv and MPI_Gatherv do work with arrays
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sendcounts or receivecounts containing zeros.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since i didn't find the case of 0 sizes in the descriptions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of these functions in the MPI reference, i wondered whether
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the use of zeroes is legal or if i was simply lucky that it worked.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An other point: currently i use 1-sized buffers in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; case of a 0-sized data transfer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now if 0-sized data transfer is legal, would it be ok to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pass NULL for the buffer?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8170.php">Tamara Rogers: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="8168.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>In reply to:</strong> <a href="8166.php">Eugene Loh: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
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
