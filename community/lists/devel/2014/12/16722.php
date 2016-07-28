<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 24 10:05:33 2014" -->
<!-- isoreceived="20141224150533" -->
<!-- sent="Wed, 24 Dec 2014 07:05:28 -0800" -->
<!-- isosent="20141224150528" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b" -->
<!-- id="7F9C29E6-FAB8-427A-87A0-B8002EA0FE9F_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20141224113044.9E1E825F225_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-24 10:05:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16723.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<li><strong>Previous message:</strong> <a href="16721.php">Ralph Castain: "Re: [OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16723.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<li><strong>Reply:</strong> <a href="16723.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nadezhda
<br>
<p>I&#226;&#128;&#153;m afraid this commit is still incorrect as it means that reply can be used without ever being initialized. Somehow, you have to OBJ_NEW reply before you can use it.
<br>
<p>Could you please correct this?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; On Dec 24, 2014, at 3:30 AM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev1">&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev1">&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;       via  05af80b3025dbb95bdd4280087450791291d7219 (commit)
</span><br>
<span class="quotelev1">&gt;      from  b9349d2eb9117c61205c98d5d2d5175d26971d23 (commit)
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
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/05af80b3025dbb95bdd4280087450791291d7219">https://github.com/open-mpi/ompi/commit/05af80b3025dbb95bdd4280087450791291d7219</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 05af80b3025dbb95bdd4280087450791291d7219
</span><br>
<span class="quotelev1">&gt; Author: Nadezhda Kogteva &lt;nadezhda.kogteva_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Wed Dec 24 13:25:23 2014 +0200
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Fix commit bffb2b7a4bb49c9188d942201b8a8f04872ff63c which broke pmix server functionality
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/orted/pmix/pmix_server.c b/orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev1">&gt; index 4f0493c..0f4c816 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev1">&gt; @@ -1241,9 +1241,9 @@ static void pmix_server_dmdx_resp(int status, orte_process_name_t* sender,
</span><br>
<span class="quotelev1">&gt;                     /* pass across any returned blobs */
</span><br>
<span class="quotelev1">&gt;                     opal_dss.copy_payload(reply, buffer);
</span><br>
<span class="quotelev1">&gt;                     stored = true;
</span><br>
<span class="quotelev1">&gt; -                    OBJ_RETAIN(reply);
</span><br>
<span class="quotelev1">&gt; -                    PMIX_SERVER_QUEUE_SEND(req-&gt;peer, req-&gt;tag, reply);
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt; +                OBJ_RETAIN(reply);
</span><br>
<span class="quotelev1">&gt; +                PMIX_SERVER_QUEUE_SEND(req-&gt;peer, req-&gt;tag, reply);
</span><br>
<span class="quotelev1">&gt;             } else {
</span><br>
<span class="quotelev1">&gt;                 /* If peer has an access to shared memory dstore, check
</span><br>
<span class="quotelev1">&gt;                  * if we already stored data for the target process.
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
<span class="quotelev1">&gt; orte/orted/pmix/pmix_server.c | 4 ++--
</span><br>
<span class="quotelev1">&gt; 1 file changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hooks/post-receive
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; open-mpi/ompi
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; ompi-commits mailing list
</span><br>
<span class="quotelev1">&gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16723.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<li><strong>Previous message:</strong> <a href="16721.php">Ralph Castain: "Re: [OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16723.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<li><strong>Reply:</strong> <a href="16723.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
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
