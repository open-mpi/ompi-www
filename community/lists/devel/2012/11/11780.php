<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 14 20:41:28 2012" -->
<!-- isoreceived="20121115014128" -->
<!-- sent="Wed, 14 Nov 2012 18:41:23 -0700" -->
<!-- isosent="20121115014123" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk" -->
<!-- id="CAAvDA16OjnahNKUkwfGTstq7CMS6DRROyTobwUSfBBFuWeShGQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="339F74B2-A306-4D5E-BDB5-D8EDE7265F45_at_usgs.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-14 20:41:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11781.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Previous message:</strong> <a href="11779.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>In reply to:</strong> <a href="11778.php">Larry Baker: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11781.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Reply:</strong> <a href="11781.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Reply:</strong> <a href="11783.php">Larry Baker: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov 14, 2012 at 6:26 PM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; m4 --version | sed -n -E -e
</span><br>
<span class="quotelev1">&gt; '1s/^.*[^A-Za-z0-9_-]?([0-9]+[.][0-9]+[.][0-9]+)[^A-Za-z0-9_-]?.*$/\1/p'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>There are STILL problems with this approach as it is TWICE specific to GNU
<br>
software:
<br>
<p>1) M4 on OpenBSD (maybe others) doesn't support a &quot;--version&quot; flag:
<br>
$ m4 --version | sed -n -E -e
<br>
'1s/^.*[^A-Za-z0-9_-]?([0-9]+[.][0-9]+[.][0-9]+)[^A-Za-z0-9_-]?.*$/\1/p'
<br>
m4: unknown option -- -
<br>
usage: m4 [-gPs] [-Dname[=value]] [-d flags] [-I dirname] [-o filename]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[-t macro] [-Uname] [file ...]
<br>
<p>2) sed on Solaris (maybe others) doesn't support a &quot;-E&quot; flag:
<br>
$ m4 --version | sed -n -E -e
<br>
'1s/^.*[^A-Za-z0-9_-]?([0-9]+[.][0-9]+[.][0-9]+)[^A-Za-z0-9_-]?.*$/\1/p'
<br>
/bin/sed: illegal option -- E
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11780/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11781.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Previous message:</strong> <a href="11779.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>In reply to:</strong> <a href="11778.php">Larry Baker: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11781.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Reply:</strong> <a href="11781.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Reply:</strong> <a href="11783.php">Larry Baker: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
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
