<?
$subject_val = "Re: [OMPI devel] non-portable code in examples/Makefile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 04:52:50 2012" -->
<!-- isoreceived="20120221095250" -->
<!-- sent="Tue, 21 Feb 2012 02:52:41 -0700" -->
<!-- isosent="20120221095241" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] non-portable code in examples/Makefile" -->
<!-- id="76EE6682-3C0F-483D-A326-9993A677628C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F4353DD.4040606_at_lbl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 04:52:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10533.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Previous message:</strong> <a href="10531.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>In reply to:</strong> <a href="10531.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10533.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Reply:</strong> <a href="10533.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I went ahead and applied this, with a tweak. There is no reason to call our flag &quot;FC&quot; as all we use it for is to call the write wrapper. So I renamed it to something less problematic.
<br>
<p>On Feb 21, 2012, at 1:20 AM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; And while we are looking at examples/Makefile on Solaris-10, why are the F77 examples getting built w/ mpif90?
</span><br>
<span class="quotelev1">&gt; Because w/ the Solaris make setting FC also silently sets F77 (yes, I am NOT kidding)!
</span><br>
<span class="quotelev1">&gt; So, reordering the F77= and FC= lines in Makefile resolves that mis-behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached is my patch to fix both F77/FC and the &quot;better&quot; ompi_info queries mentioned in my previous post.
</span><br>
<span class="quotelev1">&gt; This REPLACES the patch in the previous post.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/20/2012 11:36 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The addition on Monday of the Java cases to examples/Makefile has shown that the default &quot;make&quot; in Solaris-10 will stop on the first failed grep command in the &quot;all&quot; rule: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ make 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc -g   -o hello_c hello_c.c 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc -g   -o ring_c ring_c.c 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc -g   -o connectivity_c connectivity_c.c 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpic++ -g   -o hello_cxx hello_cxx.cc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpic++ -g   -o ring_cxx ring_cxx.cc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif90 -g hello_f77.f -o hello_f77 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif90 -g ring_f77.f -o ring_f77 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif90 -g hello_f90.f90 -o hello_f90 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif90 -g ring_f90.f90 -o ring_f90 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Error code 1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The following command caused the error: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if test &quot;`ompi_info --parsable | grep bindings:java:yes`&quot; != &quot;&quot;; then \ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     make Hello.class; \ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fi 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: Fatal error: Command failed for target `all' 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The addition of java did NOT break anything, but exposed a pre-existing problem which  was not evident in my prior testing because all language bindings were being build prior to adding java. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The attached patch resolves the problem in my (admittedly minimal) testing with the smallest possible change. 
</span><br>
<span class="quotelev2">&gt;&gt; However an entirely different avoids both &quot;test&quot; and &quot;true&quot; and simply looks like: 
</span><br>
<span class="quotelev2">&gt;&gt;     @ if ompi_info --parsable | grep bindings:cxx:yes &gt;/dev/null; then 
</span><br>
<span class="quotelev2">&gt;&gt; I have *also* tested that approach, and it works fine too. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I *did* warn that the introduction of the java bindings would bring collateral damage. 
</span><br>
<span class="quotelev2">&gt;&gt; I just didn't anticipate encountering it personally. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; &lt;example_makefile.diff2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10532/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10533.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Previous message:</strong> <a href="10531.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>In reply to:</strong> <a href="10531.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10533.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Reply:</strong> <a href="10533.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
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
