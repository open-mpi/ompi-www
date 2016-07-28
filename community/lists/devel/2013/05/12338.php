<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28435 - in trunk: . conf db db/revprops db/revprops/0 db/revs db/revs/0 db/transactions db/txn-protorevs hooks locks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  1 12:13:26 2013" -->
<!-- isoreceived="20130501161326" -->
<!-- sent="Wed, 1 May 2013 10:13:18 -0600" -->
<!-- isosent="20130501161318" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r28435 - in trunk: . conf db db/revprops db/revprops/0 db/revs db/revs/0 db/transactions db/txn-protorevs hooks locks" -->
<!-- id="20130501161318.GD74301_at_panthera.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130501160608.GC74301_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r28435 - in trunk: . conf db db/revprops db/revprops/0 db/revs db/revs/0 db/transactions db/txn-protorevs hooks locks<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-01 12:13:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12339.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12337.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28435 - in trunk: . conf db db/revprops db/revprops/0 db/revs db/revs/0 db/transactions db/txn-protorevs hooks locks"</a>
<li><strong>In reply to:</strong> <a href="12337.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28435 - in trunk: . conf db db/revprops db/revprops/0 db/revs db/revs/0 db/transactions db/txn-protorevs hooks locks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nevermind. Figured it out.
<br>
<p>-Nathan
<br>
<p>On Wed, May 01, 2013 at 10:06:08AM -0600, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; *&amp;&amp;*$# . Can someone undo this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, May 01, 2013 at 12:01:48PM -0400, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Author: hjelmn (Nathan Hjelm)
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2013-05-01 12:01:48 EDT (Wed, 01 May 2013)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 28435
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/28435">https://svn.open-mpi.org/trac/ompi/changeset/28435</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; import
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Added:
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/README.txt
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/conf/
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/conf/authz
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/conf/passwd
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/conf/svnserve.conf
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/db/
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/db/current
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/db/format
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/db/fs-type
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/db/fsfs.conf
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/db/min-unpacked-rev
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/db/revprops/
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/db/revprops/0/
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/db/revprops/0/0
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/db/revs/
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/db/revs/0/
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/db/revs/0/0
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/db/transactions/
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/db/txn-current
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/db/txn-current-lock
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/db/txn-protorevs/
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/db/uuid
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/db/write-lock
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/format
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/hooks/
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/hooks/post-commit.tmpl
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/hooks/post-lock.tmpl
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/hooks/post-revprop-change.tmpl
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/hooks/post-unlock.tmpl
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/hooks/pre-commit.tmpl
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/hooks/pre-lock.tmpl
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/hooks/pre-revprop-change.tmpl
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/hooks/pre-unlock.tmpl
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/hooks/start-commit.tmpl
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/locks/
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/locks/db-logs.lock
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/locks/db.lock
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Diff not shown due to size (32936 bytes).
</span><br>
<span class="quotelev2">&gt; &gt; To see the diff, run the following command:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 	svn diff -r 28434:28435 --no-diff-deleted
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
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
<li><strong>Next message:</strong> <a href="12339.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12337.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28435 - in trunk: . conf db db/revprops db/revprops/0 db/revs db/revs/0 db/transactions db/txn-protorevs hooks locks"</a>
<li><strong>In reply to:</strong> <a href="12337.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28435 - in trunk: . conf db db/revprops db/revprops/0 db/revs db/revs/0 db/transactions db/txn-protorevs hooks locks"</a>
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
