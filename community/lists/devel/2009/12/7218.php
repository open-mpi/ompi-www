<?
$subject_val = "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 14:26:30 2009" -->
<!-- isoreceived="20091210192630" -->
<!-- sent="Thu, 10 Dec 2009 14:26:22 -0500" -->
<!-- isosent="20091210192622" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL" -->
<!-- id="1EE82FAB-D6BB-450F-B27F-6BD482E68804_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="e7ba66e40912100902l3cdc68bco47c2f67dd19cd7a6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 14:26:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7219.php">Christoph Konersmann: "[OMPI devel] Changing BTL configs at runtime"</a>
<li><strong>Previous message:</strong> <a href="7217.php">Lisandro Dalcin: "[OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7217.php">Lisandro Dalcin: "[OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7225.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7225.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro,
<br>
<p>This code is not correct from the MPI standard perspective. The reason is independent of the datatype or count, it is solely related to the fact that the MPI_Reduce cannot accept a sendbuf equal to the recvbuf (or one has to use MPI_IN_PLACE).
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Dec 10, 2009, at 12:02 , Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; See the code below. The commented-out combinations for sbuf,rbuf do
</span><br>
<span class="quotelev1">&gt; work, but the one passing sbuf=rbuf=NULL (i.e, the uncommented one
</span><br>
<span class="quotelev1">&gt; show below) makes the call fail with MPI_ERR_ARG.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main( int argc, char ** argv ) {
</span><br>
<span class="quotelev1">&gt;  int ierr;
</span><br>
<span class="quotelev1">&gt;  int sbuf,rbuf;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  ierr = MPI_Reduce(/*&amp;sbuf, &amp;rbuf,*/
</span><br>
<span class="quotelev1">&gt; 		    /*&amp;sbuf, NULL,*/
</span><br>
<span class="quotelev1">&gt; 		    /*NULL, &amp;rbuf,*/
</span><br>
<span class="quotelev1">&gt; 		    NULL, NULL,
</span><br>
<span class="quotelev1">&gt; 		    0, MPI_INT,
</span><br>
<span class="quotelev1">&gt; 		    MPI_SUM, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev1">&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev1">&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-(0)342-451.1594
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7219.php">Christoph Konersmann: "[OMPI devel] Changing BTL configs at runtime"</a>
<li><strong>Previous message:</strong> <a href="7217.php">Lisandro Dalcin: "[OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7217.php">Lisandro Dalcin: "[OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7225.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7225.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
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
