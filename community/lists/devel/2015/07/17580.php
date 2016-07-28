<?
$subject_val = "[OMPI devel] error in test/threads/opal_condition.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 08:42:25 2015" -->
<!-- isoreceived="20150701124225" -->
<!-- sent="Wed, 1 Jul 2015 05:41:59 -0700" -->
<!-- isosent="20150701124159" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] error in test/threads/opal_condition.c" -->
<!-- id="CAAvDA17V-6L-CcgYJPx87oS=A22EXfkGeNm65GvPy4Nxz9p65Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] error in test/threads/opal_condition.c<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 08:41:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17581.php">Paul Hargrove: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Previous message:</strong> <a href="17579.php">Gilles Gouaillardet: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17583.php">Nathan Hjelm: "Re: [OMPI devel] error in test/threads/opal_condition.c"</a>
<li><strong>Reply:</strong> <a href="17583.php">Nathan Hjelm: "Re: [OMPI devel] error in test/threads/opal_condition.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I find that PGI version 9, 10, 11, 12, 13 and 14 all fail &quot;make check&quot; with
<br>
last night's master tarball.  All expect 9 fail with pretty much the same
<br>
message:
<br>
<p>&nbsp;&nbsp;CC       opal_condition.o
<br>
PGC-S-0155-Empty initializer not supported
<br>
&nbsp;(/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2014-gc8730b5/test/threads/opal_condition.c:
<br>
48)
<br>
PGC-S-0155-Empty initializer not supported
<br>
&nbsp;(/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2014-gc8730b5/test/threads/opal_condition.c:
<br>
49)
<br>
PGC-S-0155-Empty initializer not supported
<br>
&nbsp;(/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2014-gc8730b5/test/threads/opal_condition.c:
<br>
50)
<br>
PGC/x86-64 Linux 14.7-0: compilation completed with severe errors
<br>
make[3]: *** [opal_condition.o] Error 2
<br>
<p>Those lines are:
<br>
<p>opal_mutex_t mutex = {};
<br>
opal_condition_t thr1_cond = {};
<br>
opal_condition_t thr2_cond = {};
<br>
<p><p>I have no clue why pgi won't accept that when every other compiler does.
<br>
<p>Tests were on NERSC's Hopper and Carver, where Howard should be able to
<br>
reproduce.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17580/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17581.php">Paul Hargrove: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Previous message:</strong> <a href="17579.php">Gilles Gouaillardet: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17583.php">Nathan Hjelm: "Re: [OMPI devel] error in test/threads/opal_condition.c"</a>
<li><strong>Reply:</strong> <a href="17583.php">Nathan Hjelm: "Re: [OMPI devel] error in test/threads/opal_condition.c"</a>
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
