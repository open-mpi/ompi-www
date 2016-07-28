<?
$subject_val = "[OMPI devel] simple ./configure doesn't work on master/HEAD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 18 12:41:02 2014" -->
<!-- isoreceived="20141218174102" -->
<!-- sent="Thu, 18 Dec 2014 10:41:02 -0700" -->
<!-- isosent="20141218174102" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] simple ./configure doesn't work on master/HEAD" -->
<!-- id="CAF1Cqj6F4_94O=cLppP4bPzMEiUhNyh7FPttY4qzZ8a+ktSduA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] simple ./configure doesn't work on master/HEAD<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-18 12:41:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16675.php">Howard Pritchard: "[OMPI devel] commit be6d4649"</a>
<li><strong>Previous message:</strong> <a href="16673.php">Nathan Hjelm: "Re: [OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>I just tried to run
<br>
<p>./configure
<br>
<p>on an updated master and its failing with hwloc header file issues:
<br>
<p>checking components to build statically...  noos xml synthetic custom
<br>
xml_nolibxml linux linuxpci x86
<br>
<p>checking components to build as plugins...
<br>
<p>checking whether hwloc configure succeeded... yes
<br>
<p>checking infiniband/verbs.h usability... no
<br>
<p>checking infiniband/verbs.h presence... no
<br>
<p>checking for infiniband/verbs.h... no
<br>
<p>checking if MCA component hwloc:hwloc191 can compile... yes
<br>
<p>checking for winning hwloc component header file... missing
<br>
<p>configure: WARNING: Missing implementation header
<br>
<p>configure: error: Cannot continue
<br>
<p><p>This is on a linux/x86_64/open suse box.
<br>
<p><p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16674/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16675.php">Howard Pritchard: "[OMPI devel] commit be6d4649"</a>
<li><strong>Previous message:</strong> <a href="16673.php">Nathan Hjelm: "Re: [OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream"</a>
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
