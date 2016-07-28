<?
$subject_val = "Re: [OMPI devel] 1.4.4rc2 is up";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 18 14:35:14 2011" -->
<!-- isoreceived="20110518183514" -->
<!-- sent="Wed, 18 May 2011 11:34:52 -0700" -->
<!-- isosent="20110518183452" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.4rc2 is up" -->
<!-- id="4DD4114C.5070806_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F5FCADB9-10F9-4A08-B693-330F6C98A937_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.4rc2 is up<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-18 14:34:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9264.php">Samuel K. Gutierrez: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9262.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>In reply to:</strong> <a href="9260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9264.php">Samuel K. Gutierrez: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Reply:</strong> <a href="9264.php">Samuel K. Gutierrez: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Below is a sampling of &quot;pgCC -V&quot; outputs in response to Jeff's question.
<br>
The complete output looks like:
<br>
<p>$ pgCC -V
<br>
<p>pgCC 11.1-0 64-bit target on x86-64 Linux -tp nehalem
<br>
Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
<br>
Copyright 2000-2011, STMicroelectronics, Inc.  All Rights Reserved.
<br>
<p>Including the initial blank line.
<br>
<p>Here is the &quot;important&quot; line for a range of versions I can currently access:
<br>
<p>pgCC 7.2-5 64-bit target on x86-64 Linux -tp gh-64
<br>
pgCC 8.0-6 64-bit target on x86-64 Linux -tp gh-64
<br>
pgCC 9.0-3 64-bit target on x86-64 Linux -tp nehalem-64
<br>
pgCC 10.8-0 64-bit target on x86-64 Linux -tp nehalem-64
<br>
pgCC 11.1-0 64-bit target on x86-64 Linux -tp nehalem
<br>
<p>I am afraid my system w/ 5.x and 6.x versions was retired last month 
<br>
(not joking).
<br>
However, I found the following output for the C (not C++) compiler in my 
<br>
bug database:
<br>
<p>pgcc 6.0-8 32-bit target on x86-64 Linux
<br>
<p>And for their MacOSX port, there is a wrinkle.  As anybody who as dealt 
<br>
w/ mpicc vs mpiCC knows, Apple's filesystem  is case PRESERVING but 
<br>
case-insensitive.  So, there PGI's C++ compiler is &quot;pgcpp&quot; and the -V 
<br>
output (also from my bug database) looks like:
<br>
<p>pgcpp 7.1-5 64-bit target on Apple OS/X
<br>
<p><p>-Paul
<br>
<p><p>On 5/18/2011 5:50 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; (addinglibtool-patches_at_[hidden])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this guaranteed to work for all versions of the PGI compiler?  I.e., does &quot;pgCC -V&quot; always return something in the form of (digit)+\. ?
</span><br>
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
<li><strong>Next message:</strong> <a href="9264.php">Samuel K. Gutierrez: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9262.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>In reply to:</strong> <a href="9260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9264.php">Samuel K. Gutierrez: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Reply:</strong> <a href="9264.php">Samuel K. Gutierrez: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
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
