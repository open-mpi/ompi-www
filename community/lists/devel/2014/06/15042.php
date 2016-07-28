<?
$subject_val = "[OMPI devel] Is leave-pinned FAQ entry up-todate?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 22 02:03:06 2014" -->
<!-- isoreceived="20140622060306" -->
<!-- sent="Sat, 21 Jun 2014 23:03:04 -0700" -->
<!-- isosent="20140622060304" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Is leave-pinned FAQ entry up-todate?" -->
<!-- id="CAAvDA16HYbPpKRuUQ-sTk-uTYH80yuH20Ty7x1EiHw7=yefF0Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Is leave-pinned FAQ entry up-todate?<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-22 02:03:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15043.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Agenda for next week"</a>
<li><strong>Previous message:</strong> <a href="15041.php">tmishima_at_[hidden]: "Re: [OMPI devel] trunk hangs when I specify a particular binding	by	rankfile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Today I was looking at the following FAQ entry which claims to describe how
<br>
memory management work with mpi_leave_pinned in ompi-1.3 (and I am
<br>
*assuming* newer):
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#leave-pinned-memory-management-v1.3">http://www.open-mpi.org/faq/?category=openfabrics#leave-pinned-memory-management-v1.3</a>
<br>
<p>I noticed in particular the following sentence:
<br>
&nbsp;&nbsp;&nbsp;&quot;Further, if OpenFabrics networks are being used, Open MPI will use the
<br>
mallopt() system call to disable returning memory to the OS if no other
<br>
hooks are provided, resulting in higher peak bandwidth by default.&quot;
<br>
<p>However, when I went looking I could not find any mallopt() calls in the
<br>
current trunk nor in 1.7.
<br>
<p>Can somebody let me know if this FAQ entry is intended to apply to versions
<br>
newer than 1.3.x?
<br>
If not, where is the correct information for 1.4, 1.5, 1.6, 1.7, and 1.8?
<br>
<p>Thanks,
<br>
-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15042/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15043.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Agenda for next week"</a>
<li><strong>Previous message:</strong> <a href="15041.php">tmishima_at_[hidden]: "Re: [OMPI devel] trunk hangs when I specify a particular binding	by	rankfile"</a>
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
