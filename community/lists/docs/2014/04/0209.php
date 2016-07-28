<?
$subject_val = "Re: [OMPI docs] One possible typo in MPI_Alltoallv documentation on mac";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 14:14:54 2014" -->
<!-- isoreceived="20140424181454" -->
<!-- sent="Thu, 24 Apr 2014 18:14:53 +0000" -->
<!-- isosent="20140424181453" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] One possible typo in MPI_Alltoallv documentation on mac" -->
<!-- id="6525B212-0B5E-4CD0-8361-69402C0D09E8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEAyHEcy=V9nBbbbUY1aa+rjibsi+gtYhCPZ6YQt6qT2=HJYVA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI docs] One possible typo in MPI_Alltoallv documentation on mac<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-24 14:14:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2014/10/0210.php">Carl Ponder: "[OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK"</a>
<li><strong>Previous message:</strong> <a href="0208.php">Xuankang Lin: "[OMPI docs] One possible typo in MPI_Alltoallv documentation on mac"</a>
<li><strong>In reply to:</strong> <a href="0208.php">Xuankang Lin: "[OMPI docs] One possible typo in MPI_Alltoallv documentation on mac"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch!
<br>
<p>Thanks for the report; I've queued up the fix for 1.8.2.
<br>
<p><p>On Apr 20, 2014, at 11:28 PM, Xuankang Lin &lt;lxk19921205_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using Mac OS X 10.9.2 and there seems to be a typo in the man page of MPI_Alltoallv:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; C Syntax
</span><br>
<span class="quotelev1">&gt;        #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;        int MPI_Alltoallv(const void *sendbuf, const int sendcounts[],
</span><br>
<span class="quotelev1">&gt;             const int sdisplsP, MPI_Datatype sendtype,
</span><br>
<span class="quotelev1">&gt;             void *recvbuf, const int recvcounts[],
</span><br>
<span class="quotelev1">&gt;             const int rdispls[], MPI_Datatype recvtype, MPI_Comm comm)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        int MPI_Ialltoallv(const void *sendbuf, const int sendcounts[],
</span><br>
<span class="quotelev1">&gt;             const int sdisplsP, MPI_Datatype sendtype,
</span><br>
<span class="quotelev1">&gt;             void *recvbuf, const int recvcounts[],
</span><br>
<span class="quotelev1">&gt;             const int rdispls[], MPI_Datatype recvtype, MPI_Comm comm,
</span><br>
<span class="quotelev1">&gt;             MPI_Request *request)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In both definitions there are &quot;const int sdisplsP&quot; which I think is a typo.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Xuankang
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2014/10/0210.php">Carl Ponder: "[OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK"</a>
<li><strong>Previous message:</strong> <a href="0208.php">Xuankang Lin: "[OMPI docs] One possible typo in MPI_Alltoallv documentation on mac"</a>
<li><strong>In reply to:</strong> <a href="0208.php">Xuankang Lin: "[OMPI docs] One possible typo in MPI_Alltoallv documentation on mac"</a>
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
