<?
$subject_val = "[OMPI devel] trunk and v1.7: xlc and lost atomics patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 00:23:06 2014" -->
<!-- isoreceived="20140123052306" -->
<!-- sent="Wed, 22 Jan 2014 21:23:04 -0800" -->
<!-- isosent="20140123052304" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk and v1.7: xlc and lost atomics patch" -->
<!-- id="CAAvDA15qyOXcwn5Dbc_34wK7rbomyLuNJ_Gz7ueymVVMb9ucEw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] trunk and v1.7: xlc and lost atomics patch<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 00:23:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13868.php">Paul Hargrove: "Re: [OMPI devel] Unknown object files in libmpi.a"</a>
<li><strong>Previous message:</strong> <a href="13866.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13879.php">Ralph Castain: "Re: [OMPI devel] trunk and v1.7: xlc and lost atomics patch"</a>
<li><strong>Reply:</strong> <a href="13879.php">Ralph Castain: "Re: [OMPI devel] trunk and v1.7: xlc and lost atomics patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Testing the trunk w/ xlc-11.1 on a linux/ppc64 system I see two failures
<br>
from &quot;make check&quot;.  Specifically the atomic_cmpset and atomic_spinlock
<br>
tests both get segfaults.
<br>
<p>This is an issue I first reported against 1.5.5rc2 and v1.6.
<br>
<p>It appears that ticket 3040 was opened at the time of my original report,
<br>
and my patch (attached to the ticket) was applied to v1.6 as r26226.
<br>
&nbsp;HOWEVER, the patch never seems to have made into trunk at the time; and
<br>
thus is not in either v1.7 or trunk today.
<br>
<p>Though the ticket indicates (and my testing today confirms) that xlc-11
<br>
will botch the atomic both with and without the patch, there *are* versions
<br>
of xlc which only generate correct atomics with the patch applied.
<br>
<p>So, please CMR r26226 from v1.6 to v1.7(.5?) and trunk.
<br>
The patch still applies cleanly (offset of 1 line).
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13867/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13868.php">Paul Hargrove: "Re: [OMPI devel] Unknown object files in libmpi.a"</a>
<li><strong>Previous message:</strong> <a href="13866.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13879.php">Ralph Castain: "Re: [OMPI devel] trunk and v1.7: xlc and lost atomics patch"</a>
<li><strong>Reply:</strong> <a href="13879.php">Ralph Castain: "Re: [OMPI devel] trunk and v1.7: xlc and lost atomics patch"</a>
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
