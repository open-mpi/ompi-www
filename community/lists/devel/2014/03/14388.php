<?
$subject_val = "Re: [OMPI devel] common_verbs fix";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 11:05:18 2014" -->
<!-- isoreceived="20140325150518" -->
<!-- sent="Tue, 25 Mar 2014 17:05:16 +0200" -->
<!-- isosent="20140325150516" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] common_verbs fix" -->
<!-- id="CAAO1Kya1P0qHAhZx30kPupqniiqdL7x9bry3sNDSpqnrPXD8ug_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B8CFA3B5-375C-458C-A1A7-84CEF5A9D072_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] common_verbs fix<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-25 11:05:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14389.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI developer meeting: Chicago, June"</a>
<li><strong>Previous message:</strong> <a href="14387.php">Jeff Squyres (jsquyres): "[OMPI devel] common_verbs fix"</a>
<li><strong>In reply to:</strong> <a href="14387.php">Jeff Squyres (jsquyres): "[OMPI devel] common_verbs fix"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
We are working on &quot;mxm&quot; btl and plan to use some &quot;common&quot; verbs APIs from
<br>
it.
<br>
<p>Regards
<br>
<p><p><p><p>On Tue, Mar 25, 2014 at 5:01 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Mike / Vasily / Alina --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you guys using ompi_common_verbs_find_ports() somewhere?  I don't see
</span><br>
<span class="quotelev1">&gt; it being used anyhere other than the usnnic btl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ask because I was planning to consolidate this part of common verbs up
</span><br>
<span class="quotelev1">&gt; into the usnic BTL in the not-distant future because no one else was using
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But if you're actually using it somewhere, I won't do that...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; From: &lt;svn-commit-mailer_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI svn-full] svn:open-mpi r31200 -
</span><br>
<span class="quotelev1">&gt; trunk/ompi/mca/common/verbs
</span><br>
<span class="quotelev2">&gt; &gt; Date: March 25, 2014 10:41:09 AM EDT
</span><br>
<span class="quotelev2">&gt; &gt; To: &lt;svn-full_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Reply-To: &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Author: alinas (Alina Sklarevich)
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2014-03-25 10:41:09 EDT (Tue, 25 Mar 2014)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 31200
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31200">https://svn.open-mpi.org/trac/ompi/changeset/31200</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; common/verbs: added a call to ompi_ibv_free_device_list.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the ompi_common_verbs_find_ports function had a call to
</span><br>
<span class="quotelev2">&gt; &gt; ompi_ibv_get_device_list, but not to ompi_ibv_free_device_list.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; fixed by Alina, reviewed by Vasily/Mike.
</span><br>
<span class="quotelev2">&gt; &gt; cmr=v1.8:reviewer=ompi-rm1.8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/mca/common/verbs/common_verbs_find_ports.c |     2 ++
</span><br>
<span class="quotelev2">&gt; &gt;   1 files changed, 2 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/mca/common/verbs/common_verbs_find_ports.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/mca/common/verbs/common_verbs_find_ports.c     Tue Mar 25
</span><br>
<span class="quotelev1">&gt; 10:27:09 2014        (r31199)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/common/verbs/common_verbs_find_ports.c     2014-03-25
</span><br>
<span class="quotelev1">&gt; 10:41:09 EDT (Tue, 25 Mar 2014)      (r31200)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -638,6 +638,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* All done! */
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_ibv_free_device_list(devices);
</span><br>
<span class="quotelev2">&gt; &gt;     return port_list;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  err_free_port_list:
</span><br>
<span class="quotelev2">&gt; &gt; @@ -646,6 +647,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;          item = opal_list_remove_first(port_list)) {
</span><br>
<span class="quotelev2">&gt; &gt;         OBJ_RELEASE(item);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_ibv_free_device_list(devices);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  err_free_argv:
</span><br>
<span class="quotelev2">&gt; &gt;     if (NULL != if_sanity_list) {
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14387.php">http://www.open-mpi.org/community/lists/devel/2014/03/14387.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14388/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14389.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI developer meeting: Chicago, June"</a>
<li><strong>Previous message:</strong> <a href="14387.php">Jeff Squyres (jsquyres): "[OMPI devel] common_verbs fix"</a>
<li><strong>In reply to:</strong> <a href="14387.php">Jeff Squyres (jsquyres): "[OMPI devel] common_verbs fix"</a>
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
