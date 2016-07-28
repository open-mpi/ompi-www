<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 24 10:28:58 2014" -->
<!-- isoreceived="20141224152858" -->
<!-- sent="Wed, 24 Dec 2014 19:28:58 +0400" -->
<!-- isosent="20141224152858" -->
<!-- name="Elena Elkina" -->
<!-- email="elena.elkina_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b" -->
<!-- id="CANhOtjb8UtpRNWbFVoEn_PAYG8TO-dmsYCp6f7N+=oMkG1bCFA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7F9C29E6-FAB8-427A-87A0-B8002EA0FE9F_at_open-mpi.org" -->
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
<strong>From:</strong> Elena Elkina (<em>elena.elkina_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-24 10:28:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16724.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<li><strong>Previous message:</strong> <a href="16722.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<li><strong>In reply to:</strong> <a href="16722.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16726.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<li><strong>Reply:</strong> <a href="16726.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>As I remember the idea of this code was to create a reply once (and set
<br>
flag stored to true) but send this reply multiple times (to each process
<br>
from the list of requests). Flag stored is set to false earlier in the
<br>
code. It means that once (for the first request in the loop
<br>
pmix_server_pending_dmx_reqs) it will create the object.
<br>
<p>Best regards,
<br>
Elena
<br>
<p>On Wed, Dec 24, 2014 at 7:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Nadezhda
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m afraid this commit is still incorrect as it means that reply can be
</span><br>
<span class="quotelev1">&gt; used without ever being initialized. Somehow, you have to OBJ_NEW reply
</span><br>
<span class="quotelev1">&gt; before you can use it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you please correct this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 24, 2014, at 3:30 AM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev2">&gt; &gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev2">&gt; &gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The branch, master has been updated
</span><br>
<span class="quotelev2">&gt; &gt;       via  05af80b3025dbb95bdd4280087450791291d7219 (commit)
</span><br>
<span class="quotelev2">&gt; &gt;      from  b9349d2eb9117c61205c98d5d2d5175d26971d23 (commit)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev2">&gt; &gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev2">&gt; &gt; revisions in full, below.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/05af80b3025dbb95bdd4280087450791291d7219">https://github.com/open-mpi/ompi/commit/05af80b3025dbb95bdd4280087450791291d7219</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; commit 05af80b3025dbb95bdd4280087450791291d7219
</span><br>
<span class="quotelev2">&gt; &gt; Author: Nadezhda Kogteva &lt;nadezhda.kogteva_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date:   Wed Dec 24 13:25:23 2014 +0200
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Fix commit bffb2b7a4bb49c9188d942201b8a8f04872ff63c which broke pmix
</span><br>
<span class="quotelev1">&gt; server functionality
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev1">&gt; b/orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev2">&gt; &gt; index 4f0493c..0f4c816 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1241,9 +1241,9 @@ static void pmix_server_dmdx_resp(int status,
</span><br>
<span class="quotelev1">&gt; orte_process_name_t* sender,
</span><br>
<span class="quotelev2">&gt; &gt;                     /* pass across any returned blobs */
</span><br>
<span class="quotelev2">&gt; &gt;                     opal_dss.copy_payload(reply, buffer);
</span><br>
<span class="quotelev2">&gt; &gt;                     stored = true;
</span><br>
<span class="quotelev2">&gt; &gt; -                    OBJ_RETAIN(reply);
</span><br>
<span class="quotelev2">&gt; &gt; -                    PMIX_SERVER_QUEUE_SEND(req-&gt;peer, req-&gt;tag, reply);
</span><br>
<span class="quotelev2">&gt; &gt;                 }
</span><br>
<span class="quotelev2">&gt; &gt; +                OBJ_RETAIN(reply);
</span><br>
<span class="quotelev2">&gt; &gt; +                PMIX_SERVER_QUEUE_SEND(req-&gt;peer, req-&gt;tag, reply);
</span><br>
<span class="quotelev2">&gt; &gt;             } else {
</span><br>
<span class="quotelev2">&gt; &gt;                 /* If peer has an access to shared memory dstore, check
</span><br>
<span class="quotelev2">&gt; &gt;                  * if we already stored data for the target process.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Summary of changes:
</span><br>
<span class="quotelev2">&gt; &gt; orte/orted/pmix/pmix_server.c | 4 ++--
</span><br>
<span class="quotelev2">&gt; &gt; 1 file changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hooks/post-receive
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; open-mpi/ompi
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; ompi-commits mailing list
</span><br>
<span class="quotelev2">&gt; &gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16722.php">http://www.open-mpi.org/community/lists/devel/2014/12/16722.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16723/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16724.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<li><strong>Previous message:</strong> <a href="16722.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<li><strong>In reply to:</strong> <a href="16722.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16726.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<li><strong>Reply:</strong> <a href="16726.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
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
