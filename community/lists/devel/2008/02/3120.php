<?
$subject_val = "Re: [OMPI devel] More VT warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 03:33:47 2008" -->
<!-- isoreceived="20080204083347" -->
<!-- sent="Mon, 04 Feb 2008 09:33:40 +0100" -->
<!-- isosent="20080204083340" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] More VT warnings" -->
<!-- id="1202114020.5767.18.camel_at_ricolap" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20080201190817.GB13860_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] More VT warnings<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-04 03:33:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3121.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
<li><strong>Previous message:</strong> <a href="3119.php">Ralf Wildenhues: "Re: [OMPI devel] More VT warnings"</a>
<li><strong>In reply to:</strong> <a href="3119.php">Ralf Wildenhues: "Re: [OMPI devel] More VT warnings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The compiler warnings should be fixed... thank for the hint, Tim.
<br>
<p>On Fr, 2008-02-01 at 20:08 +0100, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; * Tim Prins wrote on Fri, Feb 01, 2008 at 04:09:31PM CET:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Note that this indicates that the file vt_metric_papi.c is being 
</span><br>
<span class="quotelev2">&gt; &gt; compiled *3* times. I am not using a parallel make here. Any ideas why 
</span><br>
<span class="quotelev2">&gt; &gt; it is compiling 3 times?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The file is listed as source file to four different libraries, and
</span><br>
<span class="quotelev1">&gt; per-target CFLAGS are used for these.  Between one and four of these
</span><br>
<span class="quotelev1">&gt; libraries are actually built, depending on decisions done at configure
</span><br>
<span class="quotelev1">&gt; time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>That's absolutely correct. 
<br>
These four libraries specify the different parallelization types:
<br>
<p>libvt: for serial applications which use neither MPI nor OpenMP
<br>
libvt.mpi: for MPI parallelized applications
<br>
libvt.omp: for OpenMP parallelized applications
<br>
libvt.ompi: for hybrid applications (MPI and OpenMP)
<br>
<p><p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
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
<p><pre>
--
Matthias Jurenz,
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A106, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-31945, fax +49-351-463-37773
</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3120/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3120/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3121.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17366"</a>
<li><strong>Previous message:</strong> <a href="3119.php">Ralf Wildenhues: "Re: [OMPI devel] More VT warnings"</a>
<li><strong>In reply to:</strong> <a href="3119.php">Ralf Wildenhues: "Re: [OMPI devel] More VT warnings"</a>
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
