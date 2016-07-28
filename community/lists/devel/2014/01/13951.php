<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  SPARC V8+ question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 29 18:45:19 2014" -->
<!-- isoreceived="20140129234519" -->
<!-- sent="Wed, 29 Jan 2014 23:45:11 +0000" -->
<!-- isosent="20140129234511" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  SPARC V8+ question" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD6D7987AE_at_EXMB01.srn.sandia.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] [EXTERNAL]  SPARC V8+ question" -->
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
<strong>Date:</strong> 2014-01-29 18:45:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13952.php">Jeff Squyres (jsquyres): "[OMPI devel] Still getting 100% trunk failure on 32 bit platform: coll ml"</a>
<li><strong>Previous message:</strong> <a href="13950.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.4rc3 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul -
<br>

<br>
Can you send me the config.log from this failure?
<br>

<br>
Thanks,
<br>

<br>
Brian
<br>

<br>

<br>

<br>
Sent with Good (www.good.com)
<br>

<br>

<br>
-----Original Message-----
<br>
From: Paul Hargrove [phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;]
<br>
Sent: Wednesday, January 29, 2014 04:11 PM Mountain Standard Time
<br>
To: Open MPI Developers
<br>
Subject: [EXTERNAL] [OMPI devel] SPARC V8+ question
<br>

<br>
I know Open MPI dropped support for the SPARC V8 ABI some time ago.
<br>
So, I configured with CC=&quot;gcc -mv8plus&quot;, but I still get:
<br>

<br>
checking if have Sparc v8+/v9 support... no
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

<br>
So, I am wondering if there is something flawed in the &quot;have Sparc v8+/v9 support&quot; or if gcc's &quot;-mv8plus&quot; is flawed.
<br>
Of course, I will follow the advise in the warning and use -mcpu=v9 instead of -mv8plus, but don't see why the later didn't work.  Any ideas what is going on?
<br>

<br>
And since this was found in 1.7.4rc2:
<br>
WOULD SOMEBODY PLEASE REMOVE &quot;FFLAGS&quot; FROM THAT MESSAGE!!
<br>

<br>
-Paul
<br>

<br>
--
<br>
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
<br>
Future Technologies Group
<br>
Computer and Data Sciences Department     Tel: +1-510-495-2352
<br>
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13951/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13952.php">Jeff Squyres (jsquyres): "[OMPI devel] Still getting 100% trunk failure on 32 bit platform: coll ml"</a>
<li><strong>Previous message:</strong> <a href="13950.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.4rc3 released"</a>
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
