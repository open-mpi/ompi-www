<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  MX and PSM in 1.7.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 16:17:12 2014" -->
<!-- isoreceived="20140110211712" -->
<!-- sent="Fri, 10 Jan 2014 18:27:19 +0000" -->
<!-- isosent="20140110182719" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  MX and PSM in 1.7.4" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD5670626C_at_EXMB01.srn.sandia.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] [EXTERNAL] Re:  MX and PSM in 1.7.4" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re:  MX and PSM in 1.7.4<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 13:27:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13724.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<li><strong>Previous message:</strong> <a href="13722.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not actually sure about MX. I was testing, but since the last release our machine has been retired. So it's possible we're missing coverage there.
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
From: Ralph Castain [rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;]
<br>
Sent: Thursday, January 09, 2014 09:56 PM Mountain Standard Time
<br>
To: Open MPI Developers
<br>
Subject: [EXTERNAL] Re: [OMPI devel] MX and PSM in 1.7.4
<br>

<br>
So far as I know, yes - still being tested and used. Glad to hear you could validate the QLogic stuff - I don't know about Myrinet, but imagine someone will shout if it has an issue
<br>

<br>

<br>

<br>
On Jan 9, 2014, at 5:52 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
<br>

<br>
Is anybody still testing MX and PSM?
<br>
They are both still present in ompi/mca/mtl/
<br>

<br>
I have access to a system w/ QLogic HCAs w/ PSM and have verified that I can:
<br>
$ mpirun -mca btl sm,self -np 2 -host n15,n16 -mca mtl psm examples/ring_c
<br>

<br>
I have an x86 (32-bit) system w/ MX headers and libs that I have successfully configured and built on.
<br>
However, I no longer have Myrinet h/w (well, there is some in a box in the machine room but my dedication to Open MPI rc testing doesn't extend far enough to install the h/w).
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
Computer and Data Sciences Department     Tel: +1-510-495-2352&lt;tel:%2B1-510-495-2352&gt;
<br>
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900&lt;tel:%2B1-510-486-6900&gt;
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13723/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13724.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<li><strong>Previous message:</strong> <a href="13722.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
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
