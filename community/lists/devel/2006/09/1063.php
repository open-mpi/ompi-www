<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 12 07:20:09 2006" -->
<!-- isoreceived="20060912112009" -->
<!-- sent="Tue, 12 Sep 2006 07:20:01 -0400" -->
<!-- isosent="20060912112001" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] portability problem in ompi_info" -->
<!-- id="C12C1021.264D6%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060912120724.9rva55fcbogk4c44_at_mail.tu-chemnitz.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-12 07:20:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1064.php">Adrian Knoth: "[OMPI devel] [IPv6] ORTE layer working"</a>
<li><strong>Previous message:</strong> <a href="1062.php">Christian Siebert: "[OMPI devel] portability problem in ompi_info"</a>
<li><strong>In reply to:</strong> <a href="1062.php">Christian Siebert: "[OMPI devel] portability problem in ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1071.php">Brian Barrett: "Re: [OMPI devel] portability problem in ompi_info"</a>
<li><strong>Reply:</strong> <a href="1071.php">Brian Barrett: "Re: [OMPI devel] portability problem in ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We actually have a portable version of asprintf() in the OMPI code base.  On
<br>
platforms that don't support asprintf(), the configure magically swaps in
<br>
the OMPI equivalent.
<br>
<p>See opal/util/printf.c.
<br>
<p><p>On 9/12/06 6:07 AM, &quot;Christian Siebert&quot;
<br>
&lt;christian.siebert_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; there is a tiny portability problem located in ompi/tools/ompi_info/param.cc.
</span><br>
<span class="quotelev1">&gt; This code uses the asprintf() function, which is a GNU extension and
</span><br>
<span class="quotelev1">&gt; therefore not very portable. Fortunately, it is not hard to exchange
</span><br>
<span class="quotelev1">&gt; the line
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    asprintf(&amp;value_string, &quot;%d&quot;, value_int);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with a separate buffer allocation and the ANSI C function sprintf()
</span><br>
<span class="quotelev1">&gt; (although I'd prefer a pre-allocated buffer). Tip: an integer (whether
</span><br>
<span class="quotelev1">&gt; signed or unsigned) has at most ceil(sizeof(int)*2.41) decimal digits
</span><br>
<span class="quotelev1">&gt; (don't forget the trailing null byte!).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Christian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: Thanks Jeff for filing the last bug I've mailed.
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
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1064.php">Adrian Knoth: "[OMPI devel] [IPv6] ORTE layer working"</a>
<li><strong>Previous message:</strong> <a href="1062.php">Christian Siebert: "[OMPI devel] portability problem in ompi_info"</a>
<li><strong>In reply to:</strong> <a href="1062.php">Christian Siebert: "[OMPI devel] portability problem in ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1071.php">Brian Barrett: "Re: [OMPI devel] portability problem in ompi_info"</a>
<li><strong>Reply:</strong> <a href="1071.php">Brian Barrett: "Re: [OMPI devel] portability problem in ompi_info"</a>
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
