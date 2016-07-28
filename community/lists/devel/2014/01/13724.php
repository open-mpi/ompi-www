<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: 1.7.4rc2r30168 - configure failure on Mac OSX 10.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 16:17:23 2014" -->
<!-- isoreceived="20140110211723" -->
<!-- sent="Fri, 10 Jan 2014 18:30:05 +0000" -->
<!-- isosent="20140110183005" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: 1.7.4rc2r30168 - configure failure on Mac OSX 10.5" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD567062B1_at_EXMB01.srn.sandia.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] [EXTERNAL] Re: 1.7.4rc2r30168 - configure failure on Mac OSX 10.5" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: 1.7.4rc2r30168 - configure failure on Mac OSX 10.5<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 13:30:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13725.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Previous message:</strong> <a href="13723.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MX and PSM in 1.7.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Agreed, let's drop 10.5. I don't want to fix that bug given it's likely customer base...
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
Sent: Friday, January 10, 2014 08:14 AM Mountain Standard Time
<br>
To: Open MPI Developers
<br>
Subject: [EXTERNAL] Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5
<br>

<br>
And we do appreciate your breakage! :-)
<br>

<br>
I think we'll just drop 10.5 from the list as that's very old and likely not worth fixing
<br>

<br>

<br>
On Jan 9, 2014, at 4:50 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
<br>

<br>
Ralph,
<br>

<br>
I can build fine on 10.7 (the system I am typing on now), and on 10.6 too.
<br>

<br>
I have no strong opinion on fix-vs-document, but as Jeff knows quite well if you say you support it I am going to try to make it break :).
<br>

<br>
-Paul
<br>

<br>

<br>
On Thu, Jan 9, 2014 at 4:46 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
I dunno if we really go back that far, Paul - I doubt anyone has tested on anything less than 10.8, frankly. Might be better if we update to not make claims that far back.
<br>

<br>
Were you able to build/run on 10.7?
<br>

<br>
On Jan 9, 2014, at 3:25 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
<br>

<br>
As I noted in another email, 1.7.4's README claims support for Mac OSX versions 10.5 through 10.7.  So, I just now tried (but failed) to build on 10.5 (Leopard):
<br>

<br>
*** Assembler
<br>
checking dependency style of gcc -std=gnu99... gcc3
<br>
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -p
<br>
checking the name lister (/usr/bin/nm -p) interface... BSD nm
<br>
checking for fgrep... /usr/bin/grep -F
<br>
checking if need to remove -g from CCASFLAGS... OS X Leopard - yes ( -O3 -DNDEBUG -finline-functions -fno-strict-aliasing)
<br>
checking whether to enable smp locks... yes
<br>
checking if .proc/endp is needed... no
<br>
checking directive for setting text section... .text
<br>
checking directive for exporting symbols... .globl
<br>
checking for objdump... no
<br>
checking if .note.GNU-stack is needed... no
<br>
checking suffix for labels... :
<br>
checking prefix for global symbol labels... none
<br>
configure: error: Could not determine global symbol label prefix
<br>

<br>
The same failure is seen on a PPC system running OSX Leopard, too.  However, I figure it best to focus on getting x86 working first before worrying any about PPC.
<br>

<br>
The only configure option used was --prefix.
<br>
The bzip2-compressed config.log is attached.
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
&lt;openmpi-1.7-latest-macos10.5-x86.config.log.bz2&gt;_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>

<br>

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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13724/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13725.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Previous message:</strong> <a href="13723.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MX and PSM in 1.7.4"</a>
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
