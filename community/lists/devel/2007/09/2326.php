<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 18 11:58:41 2007" -->
<!-- isoreceived="20070918155841" -->
<!-- sent="Tue, 18 Sep 2007 08:58:40 -0700" -->
<!-- isosent="20070918155840" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] &amp;quot;basic&amp;quot; dlopen() example?" -->
<!-- id="46EFF5B0.4010405_at_lbl.gov" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-18 11:58:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2327.php">Jeff Squyres: "[OMPI devel] Prep for 1.2.4 release"</a>
<li><strong>Previous message:</strong> <a href="2325.php">Gleb Natapov: "Re: [OMPI devel] Commit r16105"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As developer of BLCR (used for checkpointing in OMPI) I am currently 
<br>
working on some changes for the next release (about 6 months away) that 
<br>
could accidentally break usage of the BLCR library as a dynamically 
<br>
opened object.  I know that at least once in the past, changes I made 
<br>
broke dlopen() use of our library by LAM/MPI, and the problem was not 
<br>
noticed until after BLCR was released.
<br>
<p>I certainly don't *want* to break dlopen() (or similar) but currently 
<br>
lack a simple test case suitable for inclusion in &quot;make check&quot; 
<br>
(configure &amp; make of neither OMPI nor LAM/MPI qualify) to help me detect 
<br>
such breakage.  So, I was hoping that rather than me trying to 
<br>
understand the details of the MCA module loading code, one of you might 
<br>
be able to provide a simple example of how module loading is done in 
<br>
OMPI, or at a minimum point me at which OMPI source files I should be 
<br>
studying.
<br>
<p>Thanks,
<br>
Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2327.php">Jeff Squyres: "[OMPI devel] Prep for 1.2.4 release"</a>
<li><strong>Previous message:</strong> <a href="2325.php">Gleb Natapov: "Re: [OMPI devel] Commit r16105"</a>
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
