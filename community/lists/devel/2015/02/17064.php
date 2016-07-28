<?
$subject_val = "[OMPI devel] printf format warnings on master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 18:22:52 2015" -->
<!-- isoreceived="20150226232252" -->
<!-- sent="Thu, 26 Feb 2015 15:22:50 -0800" -->
<!-- isosent="20150226232250" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] printf format warnings on master" -->
<!-- id="CAAvDA16aAxSA9oBocHs7u79h3Ju1jrwv1O8-=cWdpSq2FWb-7g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] printf format warnings on master<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-26 18:22:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17065.php">Rolf vandeVaart: "[OMPI devel] BML changes"</a>
<li><strong>Previous message:</strong> <a href="17063.php">George Bosilca: "Re: [OMPI devel] opal_verbs_want_fork_support question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17074.php">Ralph Castain: "Re: [OMPI devel] printf format warnings on master"</a>
<li><strong>Reply:</strong> <a href="17074.php">Ralph Castain: "Re: [OMPI devel] printf format warnings on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Clang noted the following on FreeBSD-10/amd64 using the current master
<br>
tarball:
<br>
<p>Making check in threads
<br>
make  opal_thread opal_condition
<br>
&nbsp;&nbsp;CC       opal_thread.o
<br>
&nbsp;&nbsp;CCLD     opal_thread
<br>
&nbsp;&nbsp;CC       opal_condition.o
<br>
/home/phargrov/OMPI/openmpi-master-freebsd10-amd64/openmpi-dev-1118-gdc80863/test/threads/opal_condition.c:72:
<br>
61: warning: format specifies type 'long' but the argument has type 'int'
<br>
[-Wformat]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;thr1: time per iteration: %ld usec\n&quot;, (c2 - c1) /
<br>
TEST_COUNT);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;~~~
<br>
&nbsp;^~~~~~~~~~~~~~~~~~~~~~
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;%d
<br>
/home/phargrov/OMPI/openmpi-master-freebsd10-amd64/openmpi-dev-1118-gdc80863/test/threads/opal_condition.c:89:
<br>
61: warning: format specifies type 'long' but the argument has type 'int'
<br>
[-Wformat]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;thr2: time per iteration: %ld usec\n&quot;, (c2 - c1) /
<br>
TEST_COUNT);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;~~~
<br>
&nbsp;^~~~~~~~~~~~~~~~~~~~~~
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;%d
<br>
2 warnings generated.
<br>
<p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17064/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17065.php">Rolf vandeVaart: "[OMPI devel] BML changes"</a>
<li><strong>Previous message:</strong> <a href="17063.php">George Bosilca: "Re: [OMPI devel] opal_verbs_want_fork_support question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17074.php">Ralph Castain: "Re: [OMPI devel] printf format warnings on master"</a>
<li><strong>Reply:</strong> <a href="17074.php">Ralph Castain: "Re: [OMPI devel] printf format warnings on master"</a>
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
