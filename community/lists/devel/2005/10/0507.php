<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct 29 04:06:54 2005" -->
<!-- isoreceived="20051029090654" -->
<!-- sent="Sat, 29 Oct 2005 11:06:59 +0200" -->
<!-- isosent="20051029090659" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="libtoolize --ltdl non-failure (was: ppc64 linux bustage?)" -->
<!-- id="20051029090659.GB6195_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20051029083811.GA6195_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-29 04:06:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0508.php">Jeff Squyres: "Re:  ppc64 linux bustage?"</a>
<li><strong>Previous message:</strong> <a href="0506.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
<li><strong>In reply to:</strong> <a href="0506.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0508.php">Jeff Squyres: "Re:  ppc64 linux bustage?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[ This is a bug reported against Debian libtool/libltdl packages,
<br>
&nbsp;&nbsp;uncovered in OpenMPI; see here:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2005/10/0487.php">http://www.open-mpi.org/community/lists/devel/2005/10/0487.php</a>
<br>
&nbsp;&nbsp;It affects Debian packages, Libtool CVS branch-1-5, and CVS HEAD.
<br>
&nbsp;&nbsp;For followups, please remove devel_at_[hidden] (subscribers only).
<br>
]
<br>
<p><span class="quotelev1">&gt; * Troy Benjegerdes wrote on Sat, Oct 29, 2005 at 08:01:08AM CEST:
</span><br>
<span class="quotelev1">&gt;
</span><br>
[ reported this: ]
<br>
<p>* Ralf Wildenhues wrote on Sat, Oct 29, 2005 at 10:38:11AM CEST:
<br>
<span class="quotelev1">&gt; It's a bug when
</span><br>
<span class="quotelev1">&gt;   libtoolize --ltdl
</span><br>
<span class="quotelev1">&gt; succeeds although it did not find the libltdl source files.
</span><br>
<p>To reproduce: uninstall libtldl3-dev on Debian, then see above command
<br>
still succeeding; alternatively, just move `$pkgdatadir/libltdl'
<br>
somewhere else after `make install'.  I'm uncertain whether Debian's
<br>
packaging needs a change, though.
<br>
<p>In any case, OK to apply the patch below to branch-1-5?
<br>
<p>Gary, could you look into a fix for CVS HEAD?  The corresponding code
<br>
looks a bit nonobvious to me.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* libtoolize.in: Fail if libltdl files not present but
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`--ltdl' given.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reported by Troy Benjegerdes &lt;hozer_at_[hidden]&gt;.
<br>
<p>Index: libtoolize.in
<br>
===================================================================
<br>
RCS file: /cvsroot/libtool/libtool/Attic/libtoolize.in,v
<br>
retrieving revision 1.21.2.13
<br>
diff -u -r1.21.2.13 libtoolize.in
<br>
--- libtoolize.in	22 Apr 2005 09:05:40 -0000	1.21.2.13
<br>
+++ libtoolize.in	29 Oct 2005 09:01:33 -0000
<br>
@@ -281,6 +281,10 @@
<br>
&nbsp;if test &quot;x$ltdl&quot; = xyes; then
<br>
&nbsp;&nbsp;&nbsp;test -d libltdl || $mkdir libltdl
<br>
&nbsp;&nbsp;&nbsp;ltdlfiles=`cd $pkgdatadir &amp;&amp; ls libltdl/*`
<br>
+  if test -z &quot;$ltdlfiles&quot;; then
<br>
+    echo &quot;$progname: cannot list files in \`$pkgdatadir/libltdl'&quot; 1&gt;&amp;2
<br>
+    exit 1
<br>
+  fi
<br>
&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;ltdlfiles=
<br>
&nbsp;fi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0508.php">Jeff Squyres: "Re:  ppc64 linux bustage?"</a>
<li><strong>Previous message:</strong> <a href="0506.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
<li><strong>In reply to:</strong> <a href="0506.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0508.php">Jeff Squyres: "Re:  ppc64 linux bustage?"</a>
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
