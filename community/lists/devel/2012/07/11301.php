<?
$subject_val = "Re: [OMPI devel] OpenMPI_v1.6-1_win32.exe contains debug version of library?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 18 05:08:29 2012" -->
<!-- isoreceived="20120718090829" -->
<!-- sent="Wed, 18 Jul 2012 11:09:47 +0200" -->
<!-- isosent="20120718090947" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI_v1.6-1_win32.exe contains debug version of library?" -->
<!-- id="50067D5B.1070906_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAB2DcausX+H8AigGiYjjx1KsxnWN27k3+EcFH=YjperMAOW5rw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI_v1.6-1_win32.exe contains debug version of library?<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-18 05:09:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11302.php">Eugene Loh: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<li><strong>Previous message:</strong> <a href="11300.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
<li><strong>In reply to:</strong> <a href="11299.php">Snoweye Chen: "[OMPI devel] OpenMPI_v1.6-1_win32.exe contains debug version of library?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Wei-Chen Chen,
<br>
<p>You are absolutely correct. I'll make a ticket and fix that in the next 
<br>
release. Thanks for reporting that.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p>On 2012-07-17 4:58 PM, Snoweye Chen wrote:
<br>
<span class="quotelev1">&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I currently link my application with &quot;libmpi_f77d.dll&quot; which supposed 
</span><br>
<span class="quotelev1">&gt; to be a Fortran MPI library,
</span><br>
<span class="quotelev1">&gt; but when I load the application that a error message asking for 
</span><br>
<span class="quotelev1">&gt; &quot;msvcr100d.dll&quot; which does
</span><br>
<span class="quotelev1">&gt; not exist in the installation path. &quot;msvcr100.dll&quot; does exist in the 
</span><br>
<span class="quotelev1">&gt; same directory, but does not
</span><br>
<span class="quotelev1">&gt; function correctly with linking. Could you fix this problem in the 
</span><br>
<span class="quotelev1">&gt; next release?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, should &quot;libmpi_f77d.dll&quot; be &quot;libmpi_f77.dll&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Wei-Chen Chen
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
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11301/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11302.php">Eugene Loh: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<li><strong>Previous message:</strong> <a href="11300.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
<li><strong>In reply to:</strong> <a href="11299.php">Snoweye Chen: "[OMPI devel] OpenMPI_v1.6-1_win32.exe contains debug version of library?"</a>
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
