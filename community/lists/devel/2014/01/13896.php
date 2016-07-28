<?
$subject_val = "Re: [OMPI devel] out-of-date or missing manpages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 01:50:50 2014" -->
<!-- isoreceived="20140124065050" -->
<!-- sent="Thu, 23 Jan 2014 22:50:49 -0800" -->
<!-- isosent="20140124065049" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] out-of-date or missing manpages" -->
<!-- id="CAAvDA16-YAwJx6F-hvjrNYT7czMhC8+dyLWShVir5QGDepgHPA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA16LRqv0JQpkt_wj3DisR3KQU3o36MMePy=PwP+kFmxJEg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] out-of-date or missing manpages<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 01:50:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13897.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30403 testing report"</a>
<li><strong>Previous message:</strong> <a href="13895.php">Paul Hargrove: "[OMPI devel] 1.7.4 fortran status?"</a>
<li><strong>In reply to:</strong> <a href="13893.php">Paul Hargrove: "[OMPI devel] out-of-date or missing manpages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13904.php">Ralph Castain: "Re: [OMPI devel] out-of-date or missing manpages"</a>
<li><strong>Reply:</strong> <a href="13904.php">Ralph Castain: "Re: [OMPI devel] out-of-date or missing manpages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jan 23, 2014 at 4:17 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Note also the last line out output is due to an orteCC.1 which is a
</span><br>
<span class="quotelev1">&gt; dangling symlink:
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 hargrove PARTS     9 Jan 23 21:53 orteCC.1 -&gt; ortec++.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no manpage for ortec++ (nor otrecc).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>It looks like r22350 changed orte/tools/wrappers/Makefile.am to remove
<br>
installation of ortecc.1 and ortec++.1.
<br>
However, it missed removing the install-data-hook rule for the orteCC.1
<br>
symlink.
<br>
Has this really gone unnoticed for 4 years !?!
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13896/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13897.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30403 testing report"</a>
<li><strong>Previous message:</strong> <a href="13895.php">Paul Hargrove: "[OMPI devel] 1.7.4 fortran status?"</a>
<li><strong>In reply to:</strong> <a href="13893.php">Paul Hargrove: "[OMPI devel] out-of-date or missing manpages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13904.php">Ralph Castain: "Re: [OMPI devel] out-of-date or missing manpages"</a>
<li><strong>Reply:</strong> <a href="13904.php">Ralph Castain: "Re: [OMPI devel] out-of-date or missing manpages"</a>
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
