<?
$subject_val = "[OMPI devel] SPARC V8+ question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 29 18:10:56 2014" -->
<!-- isoreceived="20140129231056" -->
<!-- sent="Wed, 29 Jan 2014 15:10:54 -0800" -->
<!-- isosent="20140129231054" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] SPARC V8+ question" -->
<!-- id="CAAvDA15uv6J0Hi1W7EARbHSCYcQ-uXT5GxTf0CCU8Wag4fmbZw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] SPARC V8+ question<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-29 18:10:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13950.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.4rc3 released"</a>
<li><strong>Previous message:</strong> <a href="13948.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13962.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  SPARC V8+ question"</a>
<li><strong>Reply:</strong> <a href="13962.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  SPARC V8+ question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know Open MPI dropped support for the SPARC V8 ABI some time ago.
<br>
So, I configured with CC=&quot;gcc -mv8plus&quot;, but I still get:
<br>
<p>checking if have Sparc v8+/v9 support... no
<br>
configure: WARNING: Sparc v8 target is not supported in this release of
<br>
Open MPI.
<br>
configure: WARNING: You must specify the target architecture v8plus
<br>
configure: WARNING: (cc: -xarch=v8plus, gcc: -mcpu=v9) for CFLAGS, CXXFLAGS,
<br>
configure: WARNING: FFLAGS, and FCFLAGS to compile Open MPI in 32 bit mode
<br>
on
<br>
configure: WARNING: Sparc processors
<br>
configure: error: Can not continue.
<br>
<p>So, I am wondering if there is something flawed in the &quot;have Sparc v8+/v9
<br>
support&quot; or if gcc's &quot;-mv8plus&quot; is flawed.
<br>
Of course, I will follow the advise in the warning and use -mcpu=v9 instead
<br>
of -mv8plus, but don't see why the later didn't work.  Any ideas what is
<br>
going on?
<br>
<p>And since this was found in 1.7.4rc2:
<br>
WOULD SOMEBODY PLEASE REMOVE &quot;FFLAGS&quot; FROM THAT MESSAGE!!
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13949/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13950.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.4rc3 released"</a>
<li><strong>Previous message:</strong> <a href="13948.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13962.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  SPARC V8+ question"</a>
<li><strong>Reply:</strong> <a href="13962.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  SPARC V8+ question"</a>
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
