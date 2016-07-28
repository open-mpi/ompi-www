<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 31 23:27:34 2005" -->
<!-- isoreceived="20050901042734" -->
<!-- sent="Thu, 1 Sep 2005 00:27:27 -0400 (EDT)" -->
<!-- isosent="20050901042727" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  ltdl.h problem" -->
<!-- id="Pine.LNX.4.58.0509010019130.5104_at_localhost" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.58.0508312352320.5104_at_localhost" -->
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
<strong>Date:</strong> 2005-08-31 23:27:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0282.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0280.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>In reply to:</strong> <a href="0279.php">George Bosilca: "ltdl.h problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0282.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="0282.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I trace this one as far as I could. And the results are mostly unexpected.
<br>
On some of the clusters it compiles without any problems and on some
<br>
others it doesn't. The difference is ... if there is an ltdl.h installed
<br>
in the system directories. I don't think that's the expected behavior for
<br>
the compilation, if we have our own ltdl.h file why should we use the
<br>
system wide one ...
<br>
<p>For some component it work as expected because on the revision 7106 the
<br>
-I$(top_srcdir)/opal/libltdl has been added to the AM_CPPFLAGS in the
<br>
Makefile.am. As most of our code use components there is a dependency
<br>
between nearly every file in the ompi source code and the ldtl.h file.
<br>
Having to modify all the Makefile.am is a herculean task ...
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Wed, 31 Aug 2005, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Starting from yesterday I'm unable to compile on several clusters. I check
</span><br>
<span class="quotelev1">&gt; the version of libtool, automake and autoconf and they all are the latest.
</span><br>
<span class="quotelev1">&gt; However, in all the component I get similar errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi-trunk/opal/mca/maffinity/base/maffinity_base_close.c:21:
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi-trunk/opal/mca/base/base.h:23:18: ltdl.h: No such file
</span><br>
<span class="quotelev1">&gt; or directory
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi-trunk/opal/mca/maffinity/base/maffinity_base_close.c:21:
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi-trunk/opal/mca/base/base.h:136: error: parse error
</span><br>
<span class="quotelev1">&gt; before &quot;lt_dlhandle&quot;
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi-trunk/opal/mca/base/base.h:137: warning: function
</span><br>
<span class="quotelev1">&gt; declaration isn't a prototype
</span><br>
<span class="quotelev1">&gt; make[4]: *** [maffinity_base_close.lo] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Any idea ?
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;We must accept finite disappointment, but we must never lose infinite
</span><br>
<span class="quotelev1">&gt; hope.&quot;
</span><br>
<span class="quotelev1">&gt;                                   Martin Luther King
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
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0282.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0280.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>In reply to:</strong> <a href="0279.php">George Bosilca: "ltdl.h problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0282.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="0282.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
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
