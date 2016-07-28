<?
$subject_val = "Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 07:31:46 2010" -->
<!-- isoreceived="20100210123146" -->
<!-- sent="Wed, 10 Feb 2010 07:31:40 -0500" -->
<!-- isosent="20100210123140" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL" -->
<!-- id="D3555ADF-DC6F-4B6C-A406-47386E3EE066_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="e7ba66e41002091401q78b80007tdf4dc4ac9e9d5716_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 07:31:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7393.php">Lisandro Dalcín: "Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7391.php">Lisandro Dalc&#195;&#173;n: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7391.php">Lisandro Dalc&#195;&#173;n: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7393.php">Lisandro Dalcín: "Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7393.php">Lisandro Dalcín: "Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reminder.
<br>
<p>Note that from a standards perspective, note that MPI_REDUCE *does* require at least one element -- MPI-2.2 p163:34-35:
<br>
<p>&nbsp;&nbsp;&nbsp;&quot;Each process can provide one element, or a sequence of elements...&quot;
<br>
<p>So I think that George's assertion is correct: your test code is incorrect.
<br>
<p>But that's not what is causing your example to fail.  Here's the issue in OMPI's MPI_Reduce:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if ((ompi_comm_rank(comm) != root &amp;&amp; MPI_IN_PLACE == sendbuf) ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ompi_comm_rank(comm) == root &amp;&amp; ((MPI_IN_PLACE == recvbuf) || (sendbuf == recvbuf)))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = MPI_ERR_ARG;
<br>
<p>The &quot;sendbuf == recvbuf&quot; check is what causes the MPI exception.  I would say that we're not consistent about disallowing that (e.g., such checks are not in MPI_SCAN and the others you cited).  
<br>
<p>But FWIW, we do have logic in there because a popular benchmark (IMB) gets it wrong and calls MPI_REDUCE with a zero count (or at least, it used to -- I don't know if it has been checked).  This is a case where we were backed into a corner because users kept complaining that OMPI was broken because it would fail to run IMB (although the opposite was actually true).  So even though we didn't want to add the exception, we pretty much had to.  :-\
<br>
<p>Hence, we're not failing your example because of a 0 count -- we're failing your example because you didn't use MPI_IN_PLACE.  The following works (because of the IMB exception), for example:
<br>
<p>&nbsp;&nbsp;ierr = MPI_Reduce(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void*) 1, (void*) 2,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SUM,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD);
<br>
<p><p><p><p><p>On Feb 9, 2010, at 5:01 PM, Lisandro Dalc&#237;n wrote:
<br>
<p><span class="quotelev1">&gt; BUMP. See <a href="http://code.google.com/p/mpi4py/issues/detail?id=14">http://code.google.com/p/mpi4py/issues/detail?id=14</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12 December 2009 00:31, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Dec 10, 2009 at 4:26 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Lisandro,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This code is not correct from the MPI standard perspective. The reason is independent of the datatype or count, it is solely related to the fact that the MPI_Reduce cannot accept a sendbuf equal to the recvbuf (or one has to use MPI_IN_PLACE).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; George, I have to disagree. Zero-length buffers are a very special
</span><br>
<span class="quotelev2">&gt; &gt; case, and the MPI std is not very explicit about this limit case. Try
</span><br>
<span class="quotelev2">&gt; &gt; the code pasted at the end.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) In Open MPI, the only one of these failing for sbuf=rbuf=NULL is MPI_Reduce()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) As reference, all the calls succeed in MPICH2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main( int argc, char ** argv ) {
</span><br>
<span class="quotelev2">&gt; &gt;  int ierr;
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;  ierr = MPI_Scan(
</span><br>
<span class="quotelev2">&gt; &gt;                  NULL, NULL,
</span><br>
<span class="quotelev2">&gt; &gt;                  0,
</span><br>
<span class="quotelev2">&gt; &gt;                  MPI_INT,
</span><br>
<span class="quotelev2">&gt; &gt;                  MPI_SUM,
</span><br>
<span class="quotelev2">&gt; &gt;                  MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;  ierr = MPI_Exscan(
</span><br>
<span class="quotelev2">&gt; &gt;                    NULL, NULL,
</span><br>
<span class="quotelev2">&gt; &gt;                    0,
</span><br>
<span class="quotelev2">&gt; &gt;                    MPI_INT,
</span><br>
<span class="quotelev2">&gt; &gt;                    MPI_SUM,
</span><br>
<span class="quotelev2">&gt; &gt;                    MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;  ierr = MPI_Allreduce(
</span><br>
<span class="quotelev2">&gt; &gt;                       NULL, NULL,
</span><br>
<span class="quotelev2">&gt; &gt;                       0,
</span><br>
<span class="quotelev2">&gt; &gt;                       MPI_INT,
</span><br>
<span class="quotelev2">&gt; &gt;                       MPI_SUM,
</span><br>
<span class="quotelev2">&gt; &gt;                       MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt; #if 1
</span><br>
<span class="quotelev2">&gt; &gt;  ierr = MPI_Reduce(
</span><br>
<span class="quotelev2">&gt; &gt;                    NULL, NULL,
</span><br>
<span class="quotelev2">&gt; &gt;                    0,
</span><br>
<span class="quotelev2">&gt; &gt;                    MPI_INT,
</span><br>
<span class="quotelev2">&gt; &gt;                    MPI_SUM,
</span><br>
<span class="quotelev2">&gt; &gt;                    0,
</span><br>
<span class="quotelev2">&gt; &gt;                    MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;  return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev2">&gt; &gt; ---------------
</span><br>
<span class="quotelev2">&gt; &gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev2">&gt; &gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev2">&gt; &gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev2">&gt; &gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev2">&gt; &gt; Tel/Fax: +54-(0)342-451.1594
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7393.php">Lisandro Dalcín: "Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7391.php">Lisandro Dalc&#195;&#173;n: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7391.php">Lisandro Dalc&#195;&#173;n: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7393.php">Lisandro Dalcín: "Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7393.php">Lisandro Dalcín: "Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL"</a>
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
