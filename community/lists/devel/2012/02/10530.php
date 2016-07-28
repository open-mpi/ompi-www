<?
$subject_val = "[OMPI devel] non-portable code in examples/Makefile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 02:37:08 2012" -->
<!-- isoreceived="20120221073708" -->
<!-- sent="Mon, 20 Feb 2012 23:36:55 -0800" -->
<!-- isosent="20120221073655" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] non-portable code in examples/Makefile" -->
<!-- id="4F434997.5040408_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] non-portable code in examples/Makefile<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 02:36:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10531.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Previous message:</strong> <a href="10529.php">Paul H. Hargrove: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10531.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Reply:</strong> <a href="10531.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The addition on Monday of the Java cases to examples/Makefile has shown 
<br>
that the default &quot;make&quot; in Solaris-10 will stop on the first failed grep 
<br>
command in the &quot;all&quot; rule:
<br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; mpicc -g   -o hello_c hello_c.c
</span><br>
<span class="quotelev1">&gt; mpicc -g   -o ring_c ring_c.c
</span><br>
<span class="quotelev1">&gt; mpicc -g   -o connectivity_c connectivity_c.c
</span><br>
<span class="quotelev1">&gt; mpic++ -g   -o hello_cxx hello_cxx.cc
</span><br>
<span class="quotelev1">&gt; mpic++ -g   -o ring_cxx ring_cxx.cc
</span><br>
<span class="quotelev1">&gt; mpif90 -g hello_f77.f -o hello_f77
</span><br>
<span class="quotelev1">&gt; mpif90 -g ring_f77.f -o ring_f77
</span><br>
<span class="quotelev1">&gt; mpif90 -g hello_f90.f90 -o hello_f90
</span><br>
<span class="quotelev1">&gt; mpif90 -g ring_f90.f90 -o ring_f90
</span><br>
<span class="quotelev1">&gt; *** Error code 1
</span><br>
<span class="quotelev1">&gt; The following command caused the error:
</span><br>
<span class="quotelev1">&gt; if test &quot;`ompi_info --parsable | grep bindings:java:yes`&quot; != &quot;&quot;; then \
</span><br>
<span class="quotelev1">&gt;     make Hello.class; \
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; make: Fatal error: Command failed for target `all'
</span><br>
<p>The addition of java did NOT break anything, but exposed a pre-existing 
<br>
problem which  was not evident in my prior testing because all language 
<br>
bindings were being build prior to adding java.
<br>
<p>The attached patch resolves the problem in my (admittedly minimal) 
<br>
testing with the smallest possible change.
<br>
However an entirely different avoids both &quot;test&quot; and &quot;true&quot; and simply 
<br>
looks like:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@ if ompi_info --parsable | grep bindings:cxx:yes &gt;/dev/null; then
<br>
I have *also* tested that approach, and it works fine too.
<br>
<p>I *did* warn that the introduction of the java bindings would bring 
<br>
collateral damage.
<br>
I just didn't anticipate encountering it personally.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900

</pre>
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10530/example_makefile.diff">example_makefile.diff</a>
</ul>
<!-- attachment="example_makefile.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10531.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Previous message:</strong> <a href="10529.php">Paul H. Hargrove: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10531.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Reply:</strong> <a href="10531.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
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
