<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Sep 17 20:31:27 2006" -->
<!-- isoreceived="20060918003127" -->
<!-- sent="Sun, 17 Sep 2006 20:31:09 -0400" -->
<!-- isosent="20060918003109" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] portability problem in ompi_info" -->
<!-- id="ED0E9987-ACA4-4D48-8B69-D003F54B061D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C12C1021.264D6%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-17 20:31:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1072.php">Jeff Squyres: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #183: DR deadlock"</a>
<li><strong>Previous message:</strong> <a href="1070.php">Gil Bloch: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<li><strong>In reply to:</strong> <a href="1063.php">Jeff Squyres: "Re: [OMPI devel] portability problem in ompi_info"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I ran into a situation (I don't remember the exact details,  
<br>
unfortunately), where the C compiler supports asprintf() but the C++  
<br>
compiler doesn't.  I believe this came up when I was compiling with  
<br>
gcc (C) and xlC (C++).  But it might have been another set of  
<br>
compilers -- I unfortunately don't have the notes on the issue with  
<br>
me right now.
<br>
<p>I think the simple solution is to not use asprintf in C++  
<br>
applications and avoid the issue of C/C++ incompatibilities.
<br>
<p>Brian
<br>
<p>On Sep 12, 2006, at 7:20 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; We actually have a portable version of asprintf() in the OMPI code  
</span><br>
<span class="quotelev1">&gt; base.  On
</span><br>
<span class="quotelev1">&gt; platforms that don't support asprintf(), the configure magically  
</span><br>
<span class="quotelev1">&gt; swaps in
</span><br>
<span class="quotelev1">&gt; the OMPI equivalent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See opal/util/printf.c.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/12/06 6:07 AM, &quot;Christian Siebert&quot;
</span><br>
<span class="quotelev1">&gt; &lt;christian.siebert_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi again,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; there is a tiny portability problem located in ompi/tools/ 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info/param.cc.
</span><br>
<span class="quotelev2">&gt;&gt; This code uses the asprintf() function, which is a GNU extension and
</span><br>
<span class="quotelev2">&gt;&gt; therefore not very portable. Fortunately, it is not hard to exchange
</span><br>
<span class="quotelev2">&gt;&gt; the line
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    asprintf(&amp;value_string, &quot;%d&quot;, value_int);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with a separate buffer allocation and the ANSI C function sprintf()
</span><br>
<span class="quotelev2">&gt;&gt; (although I'd prefer a pre-allocated buffer). Tip: an integer  
</span><br>
<span class="quotelev2">&gt;&gt; (whether
</span><br>
<span class="quotelev2">&gt;&gt; signed or unsigned) has at most ceil(sizeof(int)*2.41) decimal digits
</span><br>
<span class="quotelev2">&gt;&gt; (don't forget the trailing null byte!).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Christian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS: Thanks Jeff for filing the last bug I've mailed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="1072.php">Jeff Squyres: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #183: DR deadlock"</a>
<li><strong>Previous message:</strong> <a href="1070.php">Gil Bloch: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<li><strong>In reply to:</strong> <a href="1063.php">Jeff Squyres: "Re: [OMPI devel] portability problem in ompi_info"</a>
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
