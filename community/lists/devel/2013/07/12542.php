<?
$subject_val = "Re: [OMPI devel] No such file(s) or directory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 14:28:32 2013" -->
<!-- isoreceived="20130708182832" -->
<!-- sent="Mon, 8 Jul 2013 11:28:25 -0700" -->
<!-- isosent="20130708182825" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] No such file(s) or directory" -->
<!-- id="25FCCA4F-6239-4FFA-8B44-69E15A0A137D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHYyVz4uwf7i4CWn=FH_mxgSTTE5L=m31k95zwr_tsL9Pg_yxQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] No such file(s) or directory<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 14:28:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12543.php">Vasiliy: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Previous message:</strong> <a href="12541.php">Vasiliy: "[OMPI devel] No such file(s) or directory"</a>
<li><strong>In reply to:</strong> <a href="12541.php">Vasiliy: "[OMPI devel] No such file(s) or directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12543.php">Vasiliy: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Reply:</strong> <a href="12543.php">Vasiliy: "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, those headers needed to be deleted - done. I take it you were deliberately trying to build that support? Otherwise, it shouldn't have built.
<br>
<p>On Jul 8, 2013, at 11:11 AM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Could somebody add these required headers to the repository? Thank you
</span><br>
<span class="quotelev1">&gt; in advance:
</span><br>
<span class="quotelev1">&gt; &lt;code&gt;
</span><br>
<span class="quotelev1">&gt; Making all in mca/db/sqlite
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/mca/db/sqlite'
</span><br>
<span class="quotelev1">&gt;  CC       libmca_db_sqlite_la-db_sqlite_component.lo
</span><br>
<span class="quotelev1">&gt;  CC       libmca_db_sqlite_la-db_sqlite.lo
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:23:33:
</span><br>
<span class="quotelev1">&gt; fatal error: opal/util/proc_info.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/util/proc_info.h&quot;
</span><br>
<span class="quotelev1">&gt;                                 ^
</span><br>
<span class="quotelev1">&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt; Makefile:1608: recipe for target
</span><br>
<span class="quotelev1">&gt; 'libmca_db_sqlite_la-db_sqlite_component.lo' failed
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libmca_db_sqlite_la-db_sqlite_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite.c:39:39:
</span><br>
<span class="quotelev1">&gt; fatal error: opal/mca/errmgr/base/base.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/mca/errmgr/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt;                                       ^
</span><br>
<span class="quotelev1">&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt; &lt;/code&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12543.php">Vasiliy: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Previous message:</strong> <a href="12541.php">Vasiliy: "[OMPI devel] No such file(s) or directory"</a>
<li><strong>In reply to:</strong> <a href="12541.php">Vasiliy: "[OMPI devel] No such file(s) or directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12543.php">Vasiliy: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Reply:</strong> <a href="12543.php">Vasiliy: "Re: [OMPI devel] No such file(s) or directory"</a>
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
