<?
$subject_val = "Re: [MTT devel] [MTT commits] Git: open-mpi/mtt branch master updated.	f846c3c2bb57155c2123f8ea4fc6b608a2c37655";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  9 06:44:31 2015" -->
<!-- isoreceived="20150209114431" -->
<!-- sent="Mon, 9 Feb 2015 11:44:30 +0000" -->
<!-- isosent="20150209114430" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT commits] Git: open-mpi/mtt branch master updated.	f846c3c2bb57155c2123f8ea4fc6b608a2c37655" -->
<!-- id="1CB1003E-E13F-4E42-8886-BDE10C8F9922_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150208151141.C6F102608A5_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT commits] Git: open-mpi/mtt branch master updated.	f846c3c2bb57155c2123f8ea4fc6b608a2c37655<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-09 06:44:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2015/08/0650.php">Geoffrey Paulsen: "[MTT devel] Detail link error"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/09/0648.php">Jeff Squyres (jsquyres): "[MTT devel] Migrating Trac wiki and tickets to Github"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike --
<br>
<p>If you're going to change the behavior, please also change the comment.
<br>
<p><p><p><span class="quotelev1">&gt; On Feb 8, 2015, at 10:11 AM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev1">&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev1">&gt; the project &quot;open-mpi/mtt&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;       via  f846c3c2bb57155c2123f8ea4fc6b608a2c37655 (commit)
</span><br>
<span class="quotelev1">&gt;      from  97b8fae04192bcb6732bc473664b1d0828c481f8 (commit)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev1">&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev1">&gt; revisions in full, below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/mtt/commit/f846c3c2bb57155c2123f8ea4fc6b608a2c37655">https://github.com/open-mpi/mtt/commit/f846c3c2bb57155c2123f8ea4fc6b608a2c37655</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit f846c3c2bb57155c2123f8ea4fc6b608a2c37655
</span><br>
<span class="quotelev1">&gt; Author: Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Sun Feb 8 17:09:54 2015 +0200
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    fix: allow use of relative mtt.ini path from -f /path/to/mtt.ini location
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    current behave is to look for include file only in the same dir as supplied mtt.ini file
</span><br>
<span class="quotelev1">&gt;    allow use relative path from supplied mxm.ini location
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/lib/MTT/INI.pm b/lib/MTT/INI.pm
</span><br>
<span class="quotelev1">&gt; index 915535d..7a1f129 100644
</span><br>
<span class="quotelev1">&gt; --- a/lib/MTT/INI.pm
</span><br>
<span class="quotelev1">&gt; +++ b/lib/MTT/INI.pm
</span><br>
<span class="quotelev1">&gt; @@ -389,7 +389,11 @@ sub _expand_include_files {
</span><br>
<span class="quotelev1">&gt;             # If an absolute path is not used, then the file is assumed to be
</span><br>
<span class="quotelev1">&gt;             # relative to the main --file|f option
</span><br>
<span class="quotelev1">&gt;             if ($file !~ /^\s*\//) {
</span><br>
<span class="quotelev1">&gt; -                $file = &quot;$dirname/&quot; . basename($file);
</span><br>
<span class="quotelev1">&gt; +                if (-f &quot;$dirname/$file&quot;) {
</span><br>
<span class="quotelev1">&gt; +                    $file = &quot;$dirname/$file&quot;;
</span><br>
<span class="quotelev1">&gt; +                } else {
</span><br>
<span class="quotelev1">&gt; +                    $file = &quot;$dirname/&quot; . basename($file);
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             if (! -r $file) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Summary of changes:
</span><br>
<span class="quotelev1">&gt; lib/MTT/INI.pm | 6 +++++-
</span><br>
<span class="quotelev1">&gt; 1 file changed, 5 insertions(+), 1 deletion(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hooks/post-receive
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; open-mpi/mtt
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-commits mailing list
</span><br>
<span class="quotelev1">&gt; mtt-commits_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-commits">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-commits</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2015/08/0650.php">Geoffrey Paulsen: "[MTT devel] Detail link error"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/09/0648.php">Jeff Squyres (jsquyres): "[MTT devel] Migrating Trac wiki and tickets to Github"</a>
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
