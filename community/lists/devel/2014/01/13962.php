<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  SPARC V8+ question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 30 14:58:08 2014" -->
<!-- isoreceived="20140130195808" -->
<!-- sent="Thu, 30 Jan 2014 19:57:53 +0000" -->
<!-- isosent="20140130195753" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  SPARC V8+ question" -->
<!-- id="CF0FFC76.176C8%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA15uv6J0Hi1W7EARbHSCYcQ-uXT5GxTf0CCU8Wag4fmbZw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  SPARC V8+ question<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-30 14:57:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13963.php">Ralph Castain: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>Previous message:</strong> <a href="13961.php">Rolf vandeVaart: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>In reply to:</strong> <a href="13949.php">Paul Hargrove: "[OMPI devel] SPARC V8+ question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Following up on the mailing list, Paul and I think this is gcc being silly; it didn't pass the right architecture flag to the assembler, which barfed at the Sparc V9 instruction (compare and swap).  So the test worked as it should and we'll figure out the gcc thing as we go.
<br>
<p>I've filed a change for v1.7 to fix the warning message.  The reference to FFLAGS wasn't the only problem, so it's a slightly more generic error message now.
<br>
<p>Brian
<br>
<p>On 1/29/14 4:10 PM, &quot;Paul Hargrove&quot; &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
<br>
<p>I know Open MPI dropped support for the SPARC V8 ABI some time ago.
<br>
So, I configured with CC=&quot;gcc -mv8plus&quot;, but I still get:
<br>
<p>checking if have Sparc v8+/v9 support... no
<br>
configure: WARNING: Sparc v8 target is not supported in this release of Open MPI.
<br>
configure: WARNING: You must specify the target architecture v8plus
<br>
configure: WARNING: (cc: -xarch=v8plus, gcc: -mcpu=v9) for CFLAGS, CXXFLAGS,
<br>
configure: WARNING: FFLAGS, and FCFLAGS to compile Open MPI in 32 bit mode on
<br>
configure: WARNING: Sparc processors
<br>
configure: error: Can not continue.
<br>
<p>So, I am wondering if there is something flawed in the &quot;have Sparc v8+/v9 support&quot; or if gcc's &quot;-mv8plus&quot; is flawed.
<br>
Of course, I will follow the advise in the warning and use -mcpu=v9 instead of -mv8plus, but don't see why the later didn't work.  Any ideas what is going on?
<br>
<p>And since this was found in 1.7.4rc2:
<br>
WOULD SOMEBODY PLEASE REMOVE &quot;FFLAGS&quot; FROM THAT MESSAGE!!
<br>
<p>-Paul
<br>
<p><pre>
--
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13962/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13963.php">Ralph Castain: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>Previous message:</strong> <a href="13961.php">Rolf vandeVaart: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<li><strong>In reply to:</strong> <a href="13949.php">Paul Hargrove: "[OMPI devel] SPARC V8+ question"</a>
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
