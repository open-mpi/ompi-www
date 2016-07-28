<?
$subject_val = "Re: [OMPI devel] non-portable code in examples/Makefile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 03:21:01 2012" -->
<!-- isoreceived="20120221082101" -->
<!-- sent="Tue, 21 Feb 2012 00:20:45 -0800" -->
<!-- isosent="20120221082045" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] non-portable code in examples/Makefile" -->
<!-- id="4F4353DD.4040606_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F434997.5040408_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] non-portable code in examples/Makefile<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 03:20:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10532.php">Ralph Castain: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Previous message:</strong> <a href="10530.php">Paul H. Hargrove: "[OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>In reply to:</strong> <a href="10530.php">Paul H. Hargrove: "[OMPI devel] non-portable code in examples/Makefile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10532.php">Ralph Castain: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Reply:</strong> <a href="10532.php">Ralph Castain: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And while we are looking at examples/Makefile on Solaris-10, why are the 
<br>
F77 examples getting built w/ mpif90?
<br>
Because w/ the Solaris make setting FC also silently sets F77 (yes, I am 
<br>
NOT kidding)!
<br>
So, reordering the F77= and FC= lines in Makefile resolves that 
<br>
mis-behavior.
<br>
<p>Attached is my patch to fix both F77/FC and the &quot;better&quot; ompi_info 
<br>
queries mentioned in my previous post.
<br>
This REPLACES the patch in the previous post.
<br>
<p>-Paul
<br>
<p>On 2/20/2012 11:36 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; The addition on Monday of the Java cases to examples/Makefile has 
</span><br>
<span class="quotelev1">&gt; shown that the default &quot;make&quot; in Solaris-10 will stop on the first 
</span><br>
<span class="quotelev1">&gt; failed grep command in the &quot;all&quot; rule:
</span><br>
<span class="quotelev2">&gt;&gt; $ make
</span><br>
<span class="quotelev2">&gt;&gt; mpicc -g   -o hello_c hello_c.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc -g   -o ring_c ring_c.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc -g   -o connectivity_c connectivity_c.c
</span><br>
<span class="quotelev2">&gt;&gt; mpic++ -g   -o hello_cxx hello_cxx.cc
</span><br>
<span class="quotelev2">&gt;&gt; mpic++ -g   -o ring_cxx ring_cxx.cc
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 -g hello_f77.f -o hello_f77
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 -g ring_f77.f -o ring_f77
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 -g hello_f90.f90 -o hello_f90
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 -g ring_f90.f90 -o ring_f90
</span><br>
<span class="quotelev2">&gt;&gt; *** Error code 1
</span><br>
<span class="quotelev2">&gt;&gt; The following command caused the error:
</span><br>
<span class="quotelev2">&gt;&gt; if test &quot;`ompi_info --parsable | grep bindings:java:yes`&quot; != &quot;&quot;; then \
</span><br>
<span class="quotelev2">&gt;&gt;     make Hello.class; \
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt; make: Fatal error: Command failed for target `all'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The addition of java did NOT break anything, but exposed a 
</span><br>
<span class="quotelev1">&gt; pre-existing problem which  was not evident in my prior testing 
</span><br>
<span class="quotelev1">&gt; because all language bindings were being build prior to adding java.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The attached patch resolves the problem in my (admittedly minimal) 
</span><br>
<span class="quotelev1">&gt; testing with the smallest possible change.
</span><br>
<span class="quotelev1">&gt; However an entirely different avoids both &quot;test&quot; and &quot;true&quot; and simply 
</span><br>
<span class="quotelev1">&gt; looks like:
</span><br>
<span class="quotelev1">&gt;     @ if ompi_info --parsable | grep bindings:cxx:yes &gt;/dev/null; then
</span><br>
<span class="quotelev1">&gt; I have *also* tested that approach, and it works fine too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I *did* warn that the introduction of the java bindings would bring 
</span><br>
<span class="quotelev1">&gt; collateral damage.
</span><br>
<span class="quotelev1">&gt; I just didn't anticipate encountering it personally.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
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
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10531/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10531/example_makefile.diff2">example_makefile.diff2</a>
</ul>
<!-- attachment="example_makefile.diff2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10532.php">Ralph Castain: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Previous message:</strong> <a href="10530.php">Paul H. Hargrove: "[OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>In reply to:</strong> <a href="10530.php">Paul H. Hargrove: "[OMPI devel] non-portable code in examples/Makefile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10532.php">Ralph Castain: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Reply:</strong> <a href="10532.php">Ralph Castain: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
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
