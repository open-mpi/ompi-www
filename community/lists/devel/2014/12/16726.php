<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 24 10:58:28 2014" -->
<!-- isoreceived="20141224155828" -->
<!-- sent="Wed, 24 Dec 2014 07:58:25 -0800" -->
<!-- isosent="20141224155825" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b" -->
<!-- id="74EABD0A-3DAF-4F64-AFCC-AE923F7D7B77_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CANhOtjb8UtpRNWbFVoEn_PAYG8TO-dmsYCp6f7N+=oMkG1bCFA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-12-24 10:58:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16727.php">Edgar Gabriel: "[OMPI devel] problem running jobs on ompi-master"</a>
<li><strong>Previous message:</strong> <a href="16725.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<li><strong>In reply to:</strong> <a href="16723.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks - as per the other note on the thread, I&#226;&#128;&#153;ve been working to refactor things anyway and will try to make the code a little more readable so this is clearer.
<br>
<p><span class="quotelev1">&gt; On Dec 24, 2014, at 7:28 AM, Elena Elkina &lt;elena.elkina_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I remember the idea of this code was to create a reply once (and set flag stored to true) but send this reply multiple times (to each process from the list of requests). Flag stored is set to false earlier in the code. It means that once (for the first request in the loop pmix_server_pending_dmx_reqs) it will create the object.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Elena
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 24, 2014 at 7:05 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Nadezhda
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m afraid this commit is still incorrect as it means that reply can be used without ever being initialized. Somehow, you have to OBJ_NEW reply before you can use it.
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
<span class="quotelev2">&gt; &gt; On Dec 24, 2014, at 3:30 AM, gitdub_at_[hidden] &lt;mailto:gitdub_at_[hidden]&gt; wrote:
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
<span class="quotelev2">&gt; &gt; <a href="https://github.com/open-mpi/ompi/commit/05af80b3025dbb95bdd4280087450791291d7219">https://github.com/open-mpi/ompi/commit/05af80b3025dbb95bdd4280087450791291d7219</a> &lt;<a href="https://github.com/open-mpi/ompi/commit/05af80b3025dbb95bdd4280087450791291d7219">https://github.com/open-mpi/ompi/commit/05af80b3025dbb95bdd4280087450791291d7219</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; commit 05af80b3025dbb95bdd4280087450791291d7219
</span><br>
<span class="quotelev2">&gt; &gt; Author: Nadezhda Kogteva &lt;nadezhda.kogteva_at_[hidden] &lt;mailto:nadezhda.kogteva_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date:   Wed Dec 24 13:25:23 2014 +0200
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Fix commit bffb2b7a4bb49c9188d942201b8a8f04872ff63c which broke pmix server functionality
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/orted/pmix/pmix_server.c b/orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev2">&gt; &gt; index 4f0493c..0f4c816 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1241,9 +1241,9 @@ static void pmix_server_dmdx_resp(int status, orte_process_name_t* sender,
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
<span class="quotelev2">&gt; &gt; ompi-commits_at_[hidden] &lt;mailto:ompi-commits_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16722.php">http://www.open-mpi.org/community/lists/devel/2014/12/16722.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16722.php">http://www.open-mpi.org/community/lists/devel/2014/12/16722.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16723.php">http://www.open-mpi.org/community/lists/devel/2014/12/16723.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16726/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16727.php">Edgar Gabriel: "[OMPI devel] problem running jobs on ompi-master"</a>
<li><strong>Previous message:</strong> <a href="16725.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
<li><strong>In reply to:</strong> <a href="16723.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-612-g05af80b"</a>
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
