<?
$subject_val = "[OMPI devel] autogen broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 01:57:41 2014" -->
<!-- isoreceived="20141209065741" -->
<!-- sent="Tue, 9 Dec 2014 01:57:38 -0500" -->
<!-- isosent="20141209065738" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] autogen broken" -->
<!-- id="675551B8-9A50-49AD-8817-E8417365DCF9_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] autogen broken<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 01:57:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16456.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
<li><strong>Previous message:</strong> <a href="16454.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16456.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
<li><strong>Reply:</strong> <a href="16456.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After updating to the latest master (3a14c8e), I start having issues with the VPATH build on Mac OS X. The autogen.pl and configure succeeded but when make is invoked I got the following error:
<br>
<p>Making all in opal
<br>
Making all in include
<br>
/Applications/Xcode.app/Contents/Developer/usr/bin/make  all-am
<br>
Making all in libltdl
<br>
CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd ../../../ompi/opal/libltdl &amp;&amp; /bin/sh /Users/bosilca/unstable/ompi/trunk/ompi/config/missing aclocal-1.14 -I ../../config
<br>
aclocal-1.14: error: ../../config/autogen_found_items.m4:312: file &#226;&#128;&#152;opal/mca/backtrace/configure.m4&#226;&#128;&#153; does not exist
<br>
<p>I tried to wipe out everything and start from scratch but to no avail. Any ideas what&#226;&#128;&#153;s going wrong and/or how to fix this?
<br>
<p>&nbsp;&nbsp;George.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16456.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
<li><strong>Previous message:</strong> <a href="16454.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16456.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
<li><strong>Reply:</strong> <a href="16456.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
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
