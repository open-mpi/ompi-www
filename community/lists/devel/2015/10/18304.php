<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 02:01:46 2015" -->
<!-- isoreceived="20151028060146" -->
<!-- sent="Wed, 28 Oct 2015 15:01:41 +0900" -->
<!-- isosent="20151028060141" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307" -->
<!-- id="563064C5.9040903_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMJJpkXshRsvz2FGY76aPGrtmBB0tUc9A+T5=K3Ghvk=VAj-6Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-28 02:01:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18305.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>Previous message:</strong> <a href="18303.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>In reply to:</strong> <a href="18303.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18305.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>Reply:</strong> <a href="18305.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>as i wrote, i cannot reproduce the issue so i just had to guess.
<br>
my best guess is the wrong pmix_server.h is #include'd so pmix_common.h 
<br>
is not even #include'd at all
<br>
<p>i checked the include path
<br>
cd opal/mca/pmix/pmix1xx/pmix &amp;&amp; make clean &amp;&amp; make -n 
<br>
src/server/pmix_server_get.lo
<br>
if you can reproduce the issue without your patch, can you post the output ?
<br>
<p>in my environment, all paths are correct and in the right order, so it 
<br>
does not make any difference if
<br>
pmix_common.h or pmix/pmix_common.h is #include'd
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 10/28/2015 2:22 PM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supposing that pmix_common.h has been already included, by adding it 
</span><br>
<span class="quotelev1">&gt; again I should have obtained nothing new. I don't know which one is 
</span><br>
<span class="quotelev1">&gt; picked up, but now there is at least one pmix_common.h to be included.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you look carrefully you will notice that the pmix_server.h 
</span><br>
<span class="quotelev1">&gt; includes pmix/pmix_common.h and not pmix_common.h. If you want to 
</span><br>
<span class="quotelev1">&gt; figure this one, that a good starting point. Btw, why do we have 3 
</span><br>
<span class="quotelev1">&gt; headers with the same name (it's soooo confusing) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Oct 28, 2015 at 1:08 AM, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     pmix_common.h is #include'd by pmix_server.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     well ...
</span><br>
<span class="quotelev1">&gt;     pmix_common.h is #include'd by
</span><br>
<span class="quotelev1">&gt;     opal/mca/pmix/pmix1xx/pmix/include/pmix_server.h
</span><br>
<span class="quotelev1">&gt;     and there are total 3 pmix_server.h
</span><br>
<span class="quotelev1">&gt;     find . -name pmix_server.h
</span><br>
<span class="quotelev1">&gt;     ./opal/mca/pmix/pmix1xx/pmix/include/pmix_server.h
</span><br>
<span class="quotelev1">&gt;     ./opal/mca/pmix/pmix_server.h
</span><br>
<span class="quotelev1">&gt;     ./orte/orted/pmix/pmix_server.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     i am using VPATH, i will give it an other try without VPATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     so maybe the wrong pmix_server.h was #include'd ... and your fix
</span><br>
<span class="quotelev1">&gt;     hides the real issue,
</span><br>
<span class="quotelev1">&gt;     i will check this from now
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 10/28/2015 1:52 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Interesting, I wonder how your compiler gets to know the
</span><br>
<span class="quotelev2">&gt;&gt;     definition of the PMIX_ERR_SILENT without the pmix_common.h. I
</span><br>
<span class="quotelev2">&gt;&gt;     just pushed a fix.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Wed, Oct 28, 2015 at 12:43 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         George,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         i am unable to reproduce the issue.
</span><br>
<span class="quotelev2">&gt;&gt;         if build still breaks for you, could you send me your
</span><br>
<span class="quotelev2">&gt;&gt;         configure command line ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On 10/28/2015 1:04 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         George,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         PMIX_ERR_SILENT is defined in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         opal/mca/pmix/pmix1xx/pmix/include/pmix/pmix_common.h.in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;<a href="http://pmix_common.h.in">http://pmix_common.h.in</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         i ll have a look at it from now
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         On 10/28/2015 12:02 PM, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         We get a nice compiler complaint:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         In function 'pmix_server_get':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:131:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         error: 'PMIX_ERR_SILENT' undeclared (first use in this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         function)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:131:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:131:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         error: for each function it appears in.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:117:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         warning: unused variable 'cd'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         In function '_process_dmdx_reply':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:478:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         error: 'PMIX_ERR_SILENT' undeclared (first use in this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         function)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:460:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         warning: unused variable 'xptr'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:460:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         warning: unused variable 'pbkt'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:460:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         warning: unused variable 'xfer'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         And he is right:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         $find . -name &quot;*.h&quot; -exec grep -Hn PMIX_ERR_SILENT {} +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ./opal/mca/pmix/pmix1xx/pmix/src/util/error.h:33:        if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (PMIX_ERR_SILENT != (r)) {           \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ---------- Forwarded message ----------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         From: &lt;gitdub_at_[hidden] &lt;mailto:gitdub_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Date: Tue, Oct 27, 2015 at 10:39 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Subject: [OMPI commits] Git: open-mpi/ompi branch master
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         updated. dev-2921-gb603307
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         To: ompi-commits_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &lt;mailto:ompi-commits_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         This is an automated email from the git hooks/post-receive
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         script. It was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         generated because a ref change was pushed to the repository
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         containing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         The branch, master has been updated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                via b603307f7d33663ef6fe5941bb0d94bd2be017cb (commit)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                via 267ca8fcd3a59b780491d80d29e870061d8dac56 (commit)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               from 3035e140511b082c51ad66e116dd381a083a191d (commit)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Those revisions listed above that are new to this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         repository have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         revisions in full, below.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - Log
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -----------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         <a href="https://github.com/open-mpi/ompi/commit/b603307f7d33663ef6fe5941bb0d94bd2be017cb">https://github.com/open-mpi/ompi/commit/b603307f7d33663ef6fe5941bb0d94bd2be017cb</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         commit b603307f7d33663ef6fe5941bb0d94bd2be017cb
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Merge: 3035e14 267ca8f
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Author: rhc54 &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Date:   Tue Oct 27 19:39:10 2015 -0700
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Merge pull request #1073 from rhc54/topic/pmix
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Cleanup the PMIx direct modex support.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         <a href="https://github.com/open-mpi/ompi/commit/267ca8fcd3a59b780491d80d29e870061d8dac56">https://github.com/open-mpi/ompi/commit/267ca8fcd3a59b780491d80d29e870061d8dac56</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         commit 267ca8fcd3a59b780491d80d29e870061d8dac56
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Author: Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Date:   Tue Oct 27 11:01:49 2015 -0700
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Cleanup the PMIx direct modex support. Add an MCA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         parameter pmix_base_async_modex that will cause the async
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         modex to be used when set to 1. Default it to 0 for now
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              to continue current default behavior.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Also add an MCA param pmix_base_collect_data to direct
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         that the blocking fence shall return all data to each
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         process. Obviously, this param has no effect if async_
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             modex is used.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         diff --git a/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         b/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         index 4c0391d..d0eebb2 100644
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         --- a/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +++ b/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -639,10 +639,9 @@ int ompi_mpi_init(int argc, char
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         **argv, int requested, int *provided)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              /* exchange connection info - this function may also
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         act as a barrier
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               * if data exchange is required. The modex occurs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         solely across procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -     * in our job, so no proc array is passed. If a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         barrier is required,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -     * the &quot;modex&quot; function will perform it internally
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -     */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    OPAL_MODEX(NULL, 1);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * in our job. If a barrier is required, the &quot;modex&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         function will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * perform it internally */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    OPAL_MODEX();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          OPAL_TIMING_MNEXT((&amp;tm,&quot;time from modex to first barrier&quot;));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         diff --git a/opal/mca/pmix/base/pmix_base_frame.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         b/opal/mca/pmix/base/pmix_base_frame.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         index e1ab766..6e8a347 100644
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         --- a/opal/mca/pmix/base/pmix_base_frame.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +++ b/opal/mca/pmix/base/pmix_base_frame.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -31,12 +31,21 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          /* Note that this initializer is important -- do not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         remove it!  See
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         <a href="https://github.com/open-mpi/ompi/issues/375">https://github.com/open-mpi/ompi/issues/375</a> for details. */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          opal_pmix_base_module_t opal_pmix = { 0 };
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -bool opal_pmix_collect_all_data = false;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +bool opal_pmix_collect_all_data = true;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          bool opal_pmix_base_allow_delayed_server = false;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          int opal_pmix_verbose_output = -1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +bool opal_pmix_base_async_modex = false;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          static int
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         opal_pmix_base_frame_register(mca_base_register_flag_t flags)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    opal_pmix_base_async_modex = false;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    (void) mca_base_var_register(&quot;opal&quot;, &quot;pmix&quot;, &quot;base&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &quot;async_modex&quot;, &quot;Use asynchronous modex mode&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +  MCA_BASE_VAR_TYPE_BOOL, NULL, 0, 0, OPAL_INFO_LVL_9,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +  MCA_BASE_VAR_SCOPE_READONLY, &amp;opal_pmix_base_async_modex);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    opal_pmix_collect_all_data = true;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    (void) mca_base_var_register(&quot;opal&quot;, &quot;pmix&quot;, &quot;base&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &quot;collect_data&quot;, &quot;Collect all data during modex&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +  MCA_BASE_VAR_TYPE_BOOL, NULL, 0, 0, OPAL_INFO_LVL_9,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +  MCA_BASE_VAR_SCOPE_READONLY, &amp;opal_pmix_collect_all_data);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              return OPAL_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         diff --git a/opal/mca/pmix/pmix.h b/opal/mca/pmix/pmix.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         index f265e01..7223529 100644
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         --- a/opal/mca/pmix/pmix.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +++ b/opal/mca/pmix/pmix.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -36,6 +36,8 @@ BEGIN_C_DECLS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          /* provide access to the framework verbose output without
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           * exposing the entire base */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          extern int opal_pmix_verbose_output;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +extern bool opal_pmix_collect_all_data;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +extern bool opal_pmix_base_async_modex;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          extern int opal_pmix_base_exchange(opal_value_t *info,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             opal_pmix_pdata_t *pdat,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             int timeout);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -254,10 +256,13 @@ extern int
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         opal_pmix_base_exchange(opal_value_t *info,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           * that takes into account directives and availability of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           * non-blocking operations
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -#define OPAL_MODEX(p, s)       \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    do {       \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        opal_pmix.commit();        \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        opal_pmix.fence((p), (s));    \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#define OPAL_MODEX()                         \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    do {                         \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        opal_pmix.commit();                          \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        if (!opal_pmix_base_async_modex) {             \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + opal_pmix.fence(NULL,            \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + opal_pmix_collect_all_data);         \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        }                          \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              } while(0);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          /**
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         diff --git
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         a/opal/mca/pmix/pmix1xx/pmix/include/pmix/pmix_common.h.in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &lt;<a href="http://pmix_common.h.in">http://pmix_common.h.in</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         b/opal/mca/pmix/pmix1xx/pmix/include/pmix/pmix_common.h.in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &lt;<a href="http://pmix_common.h.in">http://pmix_common.h.in</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         index 0216e34..5a111a1 100644
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ---
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         a/opal/mca/pmix/pmix1xx/pmix/include/pmix/pmix_common.h.in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &lt;<a href="http://pmix_common.h.in">http://pmix_common.h.in</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         b/opal/mca/pmix/pmix1xx/pmix/include/pmix/pmix_common.h.in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &lt;<a href="http://pmix_common.h.in">http://pmix_common.h.in</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -183,7 +183,7 @@ BEGIN_C_DECLS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          /****    PMIX ERROR CONSTANTS   ****/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          /* PMIx errors are always negative, with 0 reserved for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         success */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -#define PMIX_ERROR_MIN  -41  // set equal to number of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         non-zero entries in enum
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#define PMIX_ERROR_MIN  -42  // set equal to number of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         non-zero entries in enum
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          typedef enum {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          PMIX_ERR_UNPACK_READ_PAST_END_OF_BUFFER = PMIX_ERROR_MIN,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -230,6 +230,7 @@ typedef enum {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              PMIX_ERR_INVALID_CRED,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              PMIX_EXISTS,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    PMIX_ERR_SILENT,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              PMIX_ERROR,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              PMIX_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          } pmix_status_t;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         diff --git
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         a/opal/mca/pmix/pmix1xx/pmix/src/client/pmix_client_get.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         b/opal/mca/pmix/pmix1xx/pmix/src/client/pmix_client_get.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         index d41be9c..b93ca6d 100644
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         --- a/opal/mca/pmix/pmix1xx/pmix/src/client/pmix_client_get.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +++ b/opal/mca/pmix/pmix1xx/pmix/src/client/pmix_client_get.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -458,6 +458,7 @@ static void getnb_cbfunc(struct
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_peer_t *pr, pmix_usock_hdr_t *hdr,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  PMIX_RELEASE(bptr);  // free's the data region
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  if (PMIX_ERR_UNPACK_READ_PAST_END_OF_BUFFER != rc) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                      PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            rc = PMIX_ERR_SILENT; // avoid error-logging twice
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                      break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         diff --git
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         a/opal/mca/pmix/pmix1xx/pmix/src/server/Makefile.am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         b/opal/mca/pmix/pmix1xx/pmix/src/server/Makefile.am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         index 5422b78..88b0468 100644
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         --- a/opal/mca/pmix/pmix1xx/pmix/src/server/Makefile.am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +++ b/opal/mca/pmix/pmix1xx/pmix/src/server/Makefile.am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -16,4 +16,5 @@ sources += \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          src/server/pmix_server.c \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          src/server/pmix_server_ops.c \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          src/server/pmix_server_regex.c \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - src/server/pmix_server_listener.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + src/server/pmix_server_listener.c \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + src/server/pmix_server_get.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         diff --git
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         index d16ae16..85f9e17 100644
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         --- a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +++ b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -141,8 +141,7 @@ static void _queue_message(int fd,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         short args, void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              pmix_usock_queue_t *queue = (pmix_usock_queue_t*)cbdata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              pmix_usock_send_t *snd;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              pmix_output_verbose(2, pmix_globals.debug_output,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - &quot;[%s:%d] queue callback called: reply to %s:%d on tag %d,&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - &quot;event_is_active=%d&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + &quot;[%s:%d] queue callback called: reply to %s:%d on tag %d&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          __FILE__, __LINE__,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          (queue-&gt;peer)-&gt;info-&gt;nptr-&gt;nspace,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          (queue-&gt;peer)-&gt;info-&gt;rank, (queue-&gt;tag),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -179,12 +178,10 @@ static void _queue_message(int fd,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         short args, void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  queue-&gt;buf  = (b);             \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  queue-&gt;tag  = (t);             \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  pmix_output_verbose(2, pmix_globals.debug_output,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - &quot;[%s:%d] queue reply to %s:%d on tag %d,&quot;       \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - &quot;event_is_active=%d&quot;,                \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + &quot;[%s:%d] queue reply to %s:%d on tag %d&quot;,       \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          __FILE__, __LINE__,                  \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          (queue-&gt;peer)-&gt;info-&gt;nptr-&gt;nspace,             \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - (queue-&gt;peer)-&gt;info-&gt;rank, (queue-&gt;tag),        \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - (queue-&gt;peer)-&gt;send_ev_active);                \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + (queue-&gt;peer)-&gt;info-&gt;rank, (queue-&gt;tag));       \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          event_assign(&amp;queue-&gt;ev, pmix_globals.evbase, -1,        \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         EV_WRITE, _queue_message, queue);                \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          event_priority_set(&amp;queue-&gt;ev, 0); \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -723,7 +720,7 @@ static void _register_client(int sd,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         short args, void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   * someone has been waiting for a request on a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         remote proc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   * in one of our nspaces, but we didn't know all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         the local procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   * and so couldn't determine the proc was remote */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - pmix_pending_nspace_fix(nptr);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + pmix_pending_nspace_requests(nptr);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              /* let the caller know we are done */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              if (NULL != cd-&gt;opcbfunc) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         diff --git
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         new file mode 100644
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         index 0000000..2cb75cf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         --- /dev/null
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +++ b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -0,0 +1,552 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +/* -*- Mode: C; c-basic-offset:4 ; indent-tabs-mode:nil -*- */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +/*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + * Copyright (c) 2014-2015 Intel, Inc.  All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + * Copyright (c) 2014-2015 Research Organization for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Information Science
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + *                         and Technology (RIST). All
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + * Copyright (c) 2014-2015 Artem Y. Polyakov
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &lt;artpol84_at_[hidden] &lt;mailto:artpol84_at_[hidden]&gt;&gt;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + *                         All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + * Copyright (c) 2015 Mellanox Technologies, Inc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + *                         All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + * $COPYRIGHT$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + * Additional copyrights may follow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + * $HEADER$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &lt;private/autogen/config.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &lt;pmix/rename.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &lt;private/types.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &lt;private/pmix_stdint.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &lt;private/pmix_socket_errno.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &lt;pmix_server.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &quot;src/include/pmix_globals.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#ifdef HAVE_STRING_H
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &lt;string.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &lt;fcntl.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &lt;unistd.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#ifdef HAVE_SYS_SOCKET_H
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &lt;sys/socket.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#ifdef HAVE_SYS_UN_H
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &lt;sys/un.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#ifdef HAVE_SYS_UIO_H
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &lt;sys/uio.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#ifdef HAVE_SYS_TYPES_H
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include PMIX_EVENT_HEADER
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &quot;src/class/pmix_list.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &quot;src/buffer_ops/buffer_ops.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &quot;src/util/argv.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &quot;src/util/error.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &quot;src/util/output.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &quot;src/util/pmix_environ.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &quot;src/util/progress_threads.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &quot;src/usock/usock.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &quot;src/sec/pmix_sec.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#include &quot;pmix_server_ops.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +extern pmix_server_module_t pmix_host_server;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +typedef struct {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_object_t super;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_event_t ev;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_status_t status;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    const char *data;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    size_t ndata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_dmdx_local_t *lcd;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_release_cbfunc_t relcbfunc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    void *cbdata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +} pmix_dmdx_reply_caddy_t;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +static void dcd_con(pmix_dmdx_reply_caddy_t *p)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    p-&gt;status = PMIX_ERROR;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    p-&gt;ndata = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    p-&gt;lcd = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    p-&gt;relcbfunc = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    p-&gt;cbdata = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +PMIX_CLASS_INSTANCE(pmix_dmdx_reply_caddy_t,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +  pmix_object_t, dcd_con, NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +static void dmdx_cbfunc(pmix_status_t status, const char
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         *data,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                        size_t ndata, void *cbdata,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + pmix_release_cbfunc_t relfn, void *relcbdata);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +static pmix_status_t _satisfy_request(pmix_hash_table_t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         *ht, int rank,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +       pmix_modex_cbfunc_t cbfunc, void *cbdata);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +static pmix_status_t create_local_tracker(char nspace[],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         int rank,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +           pmix_info_t info[], size_t ninfo,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +           pmix_modex_cbfunc_t cbfunc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +           void *cbdata,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +           pmix_dmdx_local_t **lcd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +/* declare a function whose sole purpose is to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + * free data that we provided to our host server
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + * when servicing dmodex requests */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +static void relfn(void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    char *data = (char*)cbdata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    free(data);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +pmix_status_t pmix_server_get(pmix_buffer_t *buf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + pmix_modex_cbfunc_t cbfunc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    int32_t cnt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_status_t rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    int rank;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    char *cptr;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    char nspace[PMIX_MAX_NSLEN+1];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_nspace_t *ns, *nptr;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_info_t *info=NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    size_t ninfo=0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_dmdx_local_t *lcd, *cd;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_rank_info_t *iptr;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_hash_table_t *ht;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    bool local;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_output_verbose(2, pmix_globals.debug_output,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                        &quot;recvd GET&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* setup */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    memset(nspace, 0, sizeof(nspace));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* retrieve the nspace and rank of the requested proc */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    cnt = 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &amp;cptr, &amp;cnt, PMIX_STRING))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    (void)strncpy(nspace, cptr, PMIX_MAX_NSLEN);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    free(cptr);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    cnt = 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &amp;rank, &amp;cnt, PMIX_INT))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* retrieve any provided info structs */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    cnt = 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &amp;ninfo, &amp;cnt, PMIX_SIZE))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    if (0 &lt; ninfo) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        PMIX_INFO_CREATE(info, ninfo);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        cnt = ninfo;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         info, &amp;cnt, PMIX_INFO))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + PMIX_INFO_FREE(info, ninfo);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* find the nspace object for this client */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    nptr = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    PMIX_LIST_FOREACH(ns, &amp;pmix_globals.nspaces,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_nspace_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        if (0 == strcmp(nspace, ns-&gt;nspace)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            nptr = ns;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_output_verbose(2, pmix_globals.debug_output,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                        &quot;%s:%d EXECUTE GET FOR %s:%d&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + pmix_globals.myid.nspace,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + pmix_globals.myid.rank, nspace, rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    if (NULL == nptr || NULL == nptr-&gt;server) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        /* this is for an nspace we don't know about yet, so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +         * record the request for data from this process and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +         * give the host server a chance to tell us about
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         it */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        rc = create_local_tracker(nspace, rank, info, ninfo,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +   cbfunc, cbdata, &amp;lcd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* We have to wait for all local clients to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         registered before
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * we can know whether this request is for data from a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         local or a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * remote client because one client might ask for data
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         about another
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * client that the host RM hasn't told us about yet.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Fortunately,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * we do know how many clients to expect, so first
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         check to see if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * all clients have been registered with us */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     if (!nptr-&gt;server-&gt;all_registered) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        /* we cannot do anything further, so just track
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         this request
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +         * for now */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        rc = create_local_tracker(nspace, rank, info, ninfo,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +   cbfunc, cbdata, &amp;lcd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* Since we know about all the local clients in this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         nspace,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * let's first try to satisfy the request with any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         available data.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * By default, we assume we are looking for data from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         a remote
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * client, and then check to see if this is one of my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * clients - if so, then we look in that hash table */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    ht = &amp;nptr-&gt;server-&gt;remote;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    local = false;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    PMIX_LIST_FOREACH(iptr, &amp;nptr-&gt;server-&gt;ranks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_rank_info_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        if (iptr-&gt;rank == rank) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            /* it is known local client - check the local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         table */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            ht = &amp;nptr-&gt;server-&gt;mylocal;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            local = true;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* see if we already have this data */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    rc = _satisfy_request(ht, rank, cbfunc, cbdata);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    if( PMIX_SUCCESS == rc ){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        /* request was successfully satisfied */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        PMIX_INFO_FREE(info, ninfo);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* If we get here, then we don't have the data at this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         time. Check
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * to see if we already have a pending request for the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         data - if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * we do, then we can just wait for it to arrive */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    rc = create_local_tracker(nspace, rank, info, ninfo,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + cbfunc, cbdata, &amp;lcd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    if (PMIX_SUCCESS == rc) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +       /* we are already waiting for the data - nothing more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        * for us to do as the function added the new request
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        * to the tracker for us */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +       return PMIX_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    if (PMIX_ERR_NOT_FOUND != rc || NULL == lcd) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +       /* we have a problem - e.g., out of memory */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +       return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* Getting here means that we didn't already have a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         request for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * for data pending, and so we created a new tracker
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         for this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * request. We know the identity of all our local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         clients, so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * if this is one, then we have nothing further to do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - we will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * fulfill the request once the process commits its
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         data */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    if (local) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        return PMIX_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* this isn't a local client of ours, so we need to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ask the host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * resource manager server to please get the info for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         us from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * whomever is hosting the target process */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    if (NULL != pmix_host_server.direct_modex) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        rc = pmix_host_server.direct_modex(&amp;lcd-&gt;proc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         info, ninfo, dmdx_cbfunc, lcd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    } else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        /* if we don't have direct modex feature, just
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         respond with &quot;not found&quot; */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + cbfunc(PMIX_ERR_NOT_FOUND, NULL, 0, cbdata, NULL, NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        PMIX_INFO_FREE(info, ninfo);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + pmix_list_remove_item(&amp;pmix_server_globals.local_reqs,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &amp;lcd-&gt;super);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + PMIX_LIST_DESTRUCT(&amp;lcd-&gt;loc_reqs);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        PMIX_RELEASE(lcd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        rc = PMIX_ERR_NOT_FOUND;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +static pmix_status_t create_local_tracker(char nspace[],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         int rank,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +           pmix_info_t info[], size_t ninfo,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +           pmix_modex_cbfunc_t cbfunc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +           void *cbdata,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +           pmix_dmdx_local_t **ld)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_dmdx_local_t *lcd, *cd;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_dmdx_request_t *req;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_status_t rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* define default */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    *ld = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* see if we already have an existing request for data
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * from this namespace/rank */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    lcd = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    PMIX_LIST_FOREACH(cd, &amp;pmix_server_globals.local_reqs,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_dmdx_local_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        if (0 != strncmp(nspace, cd-&gt;proc.nspace,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         PMIX_MAX_NSLEN) ||
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                rank != cd-&gt;proc.rank ) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        lcd = cd;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    if (NULL != lcd) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        /* we already have a request, so just track that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         someone
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +         * else wants data from the same target */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        rc = PMIX_SUCCESS; // indicates we found an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         existing request
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        goto complete;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* we do not have an existing request, so let's create
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * one and add it to our list */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    lcd = PMIX_NEW(pmix_dmdx_local_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    if (NULL == lcd){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        PMIX_INFO_FREE(info, ninfo);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        return PMIX_ERR_NOMEM;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + strncpy(lcd-&gt;proc.nspace, nspace, PMIX_MAX_NSLEN);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    lcd-&gt;proc.rank = rank;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    lcd-&gt;info = info;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    lcd-&gt;ninfo = ninfo;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + pmix_list_append(&amp;pmix_server_globals.local_reqs,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &amp;lcd-&gt;super);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    rc = PMIX_ERR_NOT_FOUND; // indicates that we created
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         a new request tracker
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +  complete:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* track this specific requestor so we return the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * data to them */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    req = PMIX_NEW(pmix_dmdx_request_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    req-&gt;cbfunc = cbfunc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    req-&gt;cbdata = cbdata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + pmix_list_append(&amp;lcd-&gt;loc_reqs, &amp;req-&gt;super);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    *ld = lcd;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +void pmix_pending_nspace_requests(pmix_nspace_t *nptr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_dmdx_local_t *cd, *cd_next;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* Now that we know all local ranks, go along request
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         list and ask for remote data
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * for the non-local ranks, and resolve all pending
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         requests for local procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * that were waiting for registration to complete
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    PMIX_LIST_FOREACH_SAFE(cd, cd_next,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &amp;pmix_server_globals.local_reqs, pmix_dmdx_local_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        pmix_rank_info_t *info;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        bool found = false;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        if (0 != strncmp(nptr-&gt;nspace, cd-&gt;proc.nspace,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         PMIX_MAX_NSLEN) ) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        PMIX_LIST_FOREACH(info, &amp;nptr-&gt;server-&gt;ranks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_rank_info_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            if (info-&gt;rank == cd-&gt;proc.rank) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                found = true; // we will satisy this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         request upon commit from new proc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        /* if not found - this is remote process and we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         need to send
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +         * corresponding direct modex request */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        if( !found ){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            if( NULL != pmix_host_server.direct_modex ){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + pmix_host_server.direct_modex(&amp;cd-&gt;proc, cd-&gt;info,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         cd-&gt;ninfo, dmdx_cbfunc, cd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            } else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + pmix_dmdx_request_t *req, *req_next;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + PMIX_LIST_FOREACH_SAFE(req, req_next, &amp;cd-&gt;loc_reqs,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_dmdx_request_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + req-&gt;cbfunc(PMIX_ERR_NOT_FOUND, NULL, 0, req-&gt;cbdata,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         NULL, NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + pmix_list_remove_item(&amp;cd-&gt;loc_reqs, &amp;req-&gt;super);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + PMIX_RELEASE(req);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + pmix_list_remove_item(&amp;pmix_server_globals.local_reqs,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &amp;cd-&gt;super);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + PMIX_RELEASE(cd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +static pmix_status_t _satisfy_request(pmix_hash_table_t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         *ht, int rank,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +       pmix_modex_cbfunc_t cbfunc, void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_status_t rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_value_t *val;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    char *data;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    size_t sz;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_buffer_t xfer, pbkt, *xptr;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* check to see if this data already has been
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * obtained as a result of a prior direct modex
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         request from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * a remote peer, or due to data from a local client
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * having been committed */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    rc = pmix_hash_fetch(ht, rank, &quot;modex&quot;, &amp;val);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    if (PMIX_SUCCESS == rc &amp;&amp; NULL != val) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        /* the client is expecting this to arrive as a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         byte object
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +         * containing a buffer, so package it accordingly */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + PMIX_CONSTRUCT(&amp;pbkt, pmix_buffer_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + PMIX_CONSTRUCT(&amp;xfer, pmix_buffer_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        xptr = &amp;xfer;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + PMIX_LOAD_BUFFER(&amp;xfer, val-&gt;data.bo.bytes,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         val-&gt;data.bo.size);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + pmix_bfrop.pack(&amp;pbkt, &amp;xptr, 1, PMIX_BUFFER);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        xfer.base_ptr = NULL; // protect the passed data
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        xfer.bytes_used = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + PMIX_DESTRUCT(&amp;xfer);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + PMIX_UNLOAD_BUFFER(&amp;pbkt, data, sz);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + PMIX_DESTRUCT(&amp;pbkt);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + PMIX_VALUE_RELEASE(val);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        /* pass it back */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        cbfunc(rc, data, sz, cbdata, relfn, data);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    return PMIX_ERR_NOT_FOUND;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +/* Resolve pending requests to this namespace/rank */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +pmix_status_t pmix_pending_resolve(pmix_nspace_t *nptr,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         int rank,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_status_t status, pmix_dmdx_local_t *lcd)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_dmdx_local_t *cd;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* find corresponding request (if exists) */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    if (NULL == lcd &amp;&amp; NULL != nptr) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        PMIX_LIST_FOREACH(cd,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &amp;pmix_server_globals.local_reqs, pmix_dmdx_local_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            if (0 != strncmp(nptr-&gt;nspace,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         cd-&gt;proc.nspace, PMIX_MAX_NSLEN) ||
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                    rank != cd-&gt;proc.rank) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            lcd = cd;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* If somebody was interested in this rank */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    if (NULL != lcd) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        pmix_dmdx_request_t *req;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        if (PMIX_SUCCESS != status){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            /* if we've got an error for this request -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         just forward it*/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + PMIX_LIST_FOREACH(req, &amp;lcd-&gt;loc_reqs, pmix_dmdx_request_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                /* if we can't satisfy this request -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         respond with error */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + req-&gt;cbfunc(status, NULL, 0, req-&gt;cbdata, NULL, NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        } else if (NULL != nptr) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            /* if we've got the blob - try to satisfy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         requests */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            pmix_hash_table_t *ht;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            pmix_rank_info_t *iptr;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            /* by default we are looking for the remote
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         data */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            ht = &amp;nptr-&gt;server-&gt;remote;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            /* check if this rank is local */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + PMIX_LIST_FOREACH(iptr, &amp;nptr-&gt;server-&gt;ranks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_rank_info_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                if (iptr-&gt;rank == rank) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                    ht = &amp;nptr-&gt;server-&gt;mylocal;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                    break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            /* run through all the requests to this rank */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + PMIX_LIST_FOREACH(req, &amp;lcd-&gt;loc_reqs, pmix_dmdx_request_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                pmix_status_t rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                rc = _satisfy_request(ht, rank,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         req-&gt;cbfunc, req-&gt;cbdata);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                if( PMIX_SUCCESS != rc ){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                    /* if we can't satisfy this particular
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         request (missing key?) */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + req-&gt;cbfunc(rc, NULL, 0, req-&gt;cbdata, NULL, NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        /* remove all requests to this rank and cleanup
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         the corresponding structure */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + pmix_list_remove_item(&amp;pmix_server_globals.local_reqs,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (pmix_list_item_t*)lcd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        PMIX_RELEASE(lcd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    return PMIX_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +/* process the returned data from the host RM server */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +static void _process_dmdx_reply(int fd, short args, void
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_dmdx_reply_caddy_t *caddy =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (pmix_dmdx_reply_caddy_t *)cbdata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_kval_t *kp;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_nspace_t *ns, *nptr;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_status_t rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_buffer_t xfer, pbkt, *xptr;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_output_verbose(2, pmix_globals.debug_output,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                    &quot;[%s:%d] process dmdx reply from %s:%d&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                    __FILE__, __LINE__,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + caddy-&gt;lcd-&gt;proc.nspace, caddy-&gt;lcd-&gt;proc.rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* find the nspace object for this client */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    nptr = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    PMIX_LIST_FOREACH(ns, &amp;pmix_globals.nspaces,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_nspace_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        if (0 == strcmp(caddy-&gt;lcd-&gt;proc.nspace,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ns-&gt;nspace)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            nptr = ns;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    if (NULL == nptr) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        /* should be impossible */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + PMIX_ERROR_LOG(PMIX_ERR_NOT_FOUND);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        caddy-&gt;status = PMIX_ERR_NOT_FOUND;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        goto cleanup;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* if the request was successfully satisfied, then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         store the data
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * in our hash table for remote procs. Although we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         could immediately
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * resolve any outstanding requests on our tracking
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         list, we instead
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * store the data first so we can immediately satisfy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         any future
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * requests. Then, rather than duplicate the resolve
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         code here, we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * will let the pmix_pending_resolve function go ahead
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         and retrieve
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * it from the hash table */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    if (PMIX_SUCCESS == caddy-&gt;status) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        kp = PMIX_NEW(pmix_kval_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        kp-&gt;key = strdup(&quot;modex&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + PMIX_VALUE_CREATE(kp-&gt;value, 1);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        kp-&gt;value-&gt;type = PMIX_BYTE_OBJECT;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        /* we don't know if the host is going to save this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         data
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +         * or not, so we have to copy it - the client is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         expecting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +         * this to arrive as a byte object containing a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         buffer, so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +         * package it accordingly */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + kp-&gt;value-&gt;data.bo.bytes = malloc(caddy-&gt;ndata);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + memcpy(kp-&gt;value-&gt;data.bo.bytes, caddy-&gt;data, caddy-&gt;ndata);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + kp-&gt;value-&gt;data.bo.size = caddy-&gt;ndata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        /* store it in the appropriate hash */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        if (PMIX_SUCCESS != (rc =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_hash_store(&amp;nptr-&gt;server-&gt;remote,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         caddy-&gt;lcd-&gt;proc.rank, kp))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        PMIX_RELEASE(kp);  // maintain acctg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* always execute the callback to avoid having the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         client hang */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_pending_resolve(nptr, caddy-&gt;lcd-&gt;proc.rank,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         caddy-&gt;status, caddy-&gt;lcd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +cleanup:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* now call the release function so the host server
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * knows it can release the data */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    if (NULL != caddy-&gt;relcbfunc) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + caddy-&gt;relcbfunc(caddy-&gt;cbdata);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    PMIX_RELEASE(caddy);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +/* this is the callback function that the host RM server
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         will call
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + * when it gets requested info back from a remote server */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +static void dmdx_cbfunc(pmix_status_t status,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +                        const char *data, size_t ndata,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         void *cbdata,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + pmix_release_cbfunc_t release_fn, void *release_cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_dmdx_reply_caddy_t *caddy;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* because the host RM is calling us from their own
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         thread, we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * need to thread-shift into our local progress thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         before
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * accessing any global info */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    caddy = PMIX_NEW(pmix_dmdx_reply_caddy_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    caddy-&gt;status = status;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* point to the callers cbfunc */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    caddy-&gt;relcbfunc = release_fn;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    caddy-&gt;cbdata = release_cbdata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* point to the returned data and our own internal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * tracker */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    caddy-&gt;data   = data;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    caddy-&gt;ndata  = ndata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    caddy-&gt;lcd    = (pmix_dmdx_local_t *)cbdata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    pmix_output_verbose(2, pmix_globals.debug_output,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + &quot;[%s:%d] queue dmdx reply for %s:%d&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + __FILE__, __LINE__,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + caddy-&gt;lcd-&gt;proc.nspace, caddy-&gt;lcd-&gt;proc.rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + event_assign(&amp;caddy-&gt;ev, pmix_globals.evbase, -1, EV_WRITE,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +  _process_dmdx_reply, caddy);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + event_priority_set(&amp;caddy-&gt;ev, 0);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + event_active(&amp;caddy-&gt;ev, EV_WRITE, 1);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         diff --git
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         index 4a4abd1..43d35b5 100644
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         --- a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +++ b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -58,246 +58,6 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          pmix_server_module_t pmix_host_server = {0};
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -static void dmdx_cbfunc(pmix_status_t status, const char
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         *data,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                        size_t ndata, void *cbdata,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - pmix_release_cbfunc_t relfn, void *relcbdata);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -typedef struct {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_object_t super;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_event_t ev;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_status_t status;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    const char *data;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    size_t ndata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_dmdx_local_t *lcd;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_release_cbfunc_t relcbfunc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    void *cbdata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -} pmix_dmdx_reply_caddy_t;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -PMIX_CLASS_INSTANCE(pmix_dmdx_reply_caddy_t,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -  pmix_object_t, NULL, NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -static void relfn(void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    char *data = (char*)cbdata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    free(data);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -static pmix_status_t _satisfy_request(pmix_nspace_t *nptr,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         int rank,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -          pmix_hash_table_t *ht,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -          pmix_modex_cbfunc_t cbfunc, void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_status_t rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_buffer_t pbkt, xfer;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_value_t *val;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    char *data;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    size_t sz;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    /* check to see if this data already has been
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -     * obtained as a result of a prior direct modex
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         request from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -     * another local peer */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    rc = pmix_hash_fetch(ht, rank, &quot;modex&quot;, &amp;val);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    if (PMIX_SUCCESS == rc &amp;&amp; NULL != val) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_CONSTRUCT(&amp;pbkt, pmix_buffer_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_CONSTRUCT(&amp;xfer, pmix_buffer_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        pmix_buffer_t *pxfer = &amp;xfer;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_LOAD_BUFFER(&amp;xfer, val-&gt;data.bo.bytes,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         val-&gt;data.bo.size);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - pmix_bfrop.pack(&amp;pbkt, &amp;pxfer, 1, PMIX_BUFFER);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        xfer.base_ptr = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        xfer.bytes_used = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_DESTRUCT(&amp;xfer);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_VALUE_RELEASE(val);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_UNLOAD_BUFFER(&amp;pbkt, data, sz);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_DESTRUCT(&amp;pbkt);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        /* pass it back */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        cbfunc(rc, data, sz, cbdata, relfn, data);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    return PMIX_ERR_NOT_FOUND;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -pmix_status_t pmix_pending_request(pmix_nspace_t *nptr,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         int rank,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_info_t *info, size_t ninfo,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_modex_cbfunc_t cbfunc, void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_dmdx_local_t *lcd = NULL, *cd;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_rank_info_t *iptr;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_hash_table_t *ht;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_status_t rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    /* 1. Try to satisfy the request right now */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    /* by default we are looking for the remote data */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    ht = &amp;nptr-&gt;server-&gt;remote;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    PMIX_LIST_FOREACH(iptr, &amp;nptr-&gt;server-&gt;ranks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_rank_info_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        if (iptr-&gt;rank == rank) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            /* in case it is known local rank - check
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         local table */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            ht = &amp;nptr-&gt;server-&gt;mylocal;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    rc = _satisfy_request(nptr, rank, ht, cbfunc, cbdata);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    if( PMIX_SUCCESS == rc ){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        /* request was successfully satisfied */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        PMIX_INFO_FREE(info, ninfo);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    /* 2. We were unable to satisfy request right now.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -     * Look for existing requests to this namespace/rank */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    PMIX_LIST_FOREACH(cd, &amp;pmix_server_globals.local_reqs,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_dmdx_local_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        if (0 != strncmp(nptr-&gt;nspace, cd-&gt;proc.nspace,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         PMIX_MAX_NSLEN) ||
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                rank != cd-&gt;proc.rank ) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        lcd = cd;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    /* 3. If no requests exists then:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -     * - if all local clients are registered then we were
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         called because
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -     * the remote data was requested. Create request and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         call direct modex
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -     * to retrieve the data
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -     * - if not all local ranks were registered, we need
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         to wait untill
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -     * pmix_pending_localy_fin would be called to resolve
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         this. Just add the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -     * request for now.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -     */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    if (NULL == lcd) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        lcd = PMIX_NEW(pmix_dmdx_local_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        if (NULL == lcd){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_INFO_FREE(info, ninfo);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            return PMIX_ERR_NOMEM;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - strncpy(lcd-&gt;proc.nspace, nptr-&gt;nspace, PMIX_MAX_NSLEN);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        lcd-&gt;proc.rank = rank;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        lcd-&gt;info = info;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        lcd-&gt;ninfo = ninfo;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - pmix_list_append(&amp;pmix_server_globals.local_reqs,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &amp;lcd-&gt;super);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        /* check &amp; send request if need/possible */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        if (nptr-&gt;server-&gt;all_registered &amp;&amp; NULL == info) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            if (NULL != pmix_host_server.direct_modex) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - pmix_host_server.direct_modex(&amp;lcd-&gt;proc, info, ninfo,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         dmdx_cbfunc, lcd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            } else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                /* if we don't have direct modex feature,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         just respond with &quot;not found&quot; */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - cbfunc(PMIX_ERR_NOT_FOUND, NULL, 0, cbdata, NULL, NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_INFO_FREE(info, ninfo);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - pmix_list_remove_item(&amp;pmix_server_globals.local_reqs,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &amp;lcd-&gt;super);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_LIST_DESTRUCT(&amp;lcd-&gt;loc_reqs);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_RELEASE(lcd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                return PMIX_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_dmdx_request_t *req = PMIX_NEW(pmix_dmdx_request_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    req-&gt;cbfunc = cbfunc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    req-&gt;cbdata = cbdata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - pmix_list_append(&amp;lcd-&gt;loc_reqs, &amp;req-&gt;super);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    return PMIX_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -void pmix_pending_nspace_fix(pmix_nspace_t *nptr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_dmdx_local_t *cd, *cd_next;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    /* Now when we know all local ranks, go along request
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         list and ask for remote data
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -     * for the non-local ranks, and resolve all pending
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         requests for local procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -     * that were waiting for registration to complete
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -     */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    PMIX_LIST_FOREACH_SAFE(cd, cd_next,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &amp;pmix_server_globals.local_reqs, pmix_dmdx_local_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        pmix_rank_info_t *info;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        bool found = false;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        if (0 != strncmp(nptr-&gt;nspace, cd-&gt;proc.nspace,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         PMIX_MAX_NSLEN) ) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        PMIX_LIST_FOREACH(info, &amp;nptr-&gt;server-&gt;ranks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_rank_info_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            if (info-&gt;rank == cd-&gt;proc.rank) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                found = true;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        /* if not found - this is remote process and we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         need to send
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -         * corresponding direct modex request */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        if( !found ){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            if( NULL != pmix_host_server.direct_modex ){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - pmix_host_server.direct_modex(&amp;cd-&gt;proc, cd-&gt;info,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         cd-&gt;ninfo, dmdx_cbfunc, cd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            } else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - pmix_dmdx_request_t *req, *req_next;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_LIST_FOREACH_SAFE(req, req_next, &amp;cd-&gt;loc_reqs,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_dmdx_request_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - req-&gt;cbfunc(PMIX_ERR_NOT_FOUND, NULL, 0, req-&gt;cbdata,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         NULL, NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - pmix_list_remove_item(&amp;cd-&gt;loc_reqs, &amp;req-&gt;super);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_RELEASE(req);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - pmix_list_remove_item(&amp;pmix_server_globals.local_reqs,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &amp;cd-&gt;super);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_RELEASE(cd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -/* Resolve pending requests to this namespace/rank */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -pmix_status_t pmix_pending_resolve(pmix_nspace_t *nptr,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         int rank,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_status_t status, pmix_dmdx_local_t *lcd)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_dmdx_local_t *cd;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    /* find corresponding request (if exists) */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    if( NULL == lcd ){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        PMIX_LIST_FOREACH(cd,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &amp;pmix_server_globals.local_reqs, pmix_dmdx_local_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            if (0 != strncmp(nptr-&gt;nspace,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         cd-&gt;proc.nspace, PMIX_MAX_NSLEN) ||
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                    rank != cd-&gt;proc.rank) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            lcd = cd;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    /* If somebody was interested in this rank */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    if( NULL != lcd ){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        pmix_dmdx_request_t *req;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        if (PMIX_SUCCESS != status){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            /* if we've got an error for this request -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         just forward it*/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_LIST_FOREACH(req, &amp;lcd-&gt;loc_reqs, pmix_dmdx_request_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                /* if we can't satisfy this request -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         respond with error */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - req-&gt;cbfunc(status, NULL, 0, req-&gt;cbdata, NULL, NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        } else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            /* if we've got the blob - try to satisfy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         requests */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            pmix_hash_table_t *ht;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            pmix_rank_info_t *iptr;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            /* by default we are looking for the remote
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         data */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            ht = &amp;nptr-&gt;server-&gt;remote;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            /* check if this rank is local */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_LIST_FOREACH(iptr, &amp;nptr-&gt;server-&gt;ranks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_rank_info_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                if (iptr-&gt;rank == rank) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                    ht = &amp;nptr-&gt;server-&gt;mylocal;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                    break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            /* run through all the requests to this rank */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_LIST_FOREACH(req, &amp;lcd-&gt;loc_reqs, pmix_dmdx_request_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                pmix_status_t rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                rc = _satisfy_request(nptr, rank, ht,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         req-&gt;cbfunc, req-&gt;cbdata);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                if( PMIX_SUCCESS != rc ){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                    /* if we can't satisfy this particular
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         request (missing key?) */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - req-&gt;cbfunc(rc, NULL, 0, req-&gt;cbdata, NULL, NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        /* remove all requests to this rank and cleanup
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         the corresponding structure */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - pmix_list_remove_item(&amp;pmix_server_globals.local_reqs,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (pmix_list_item_t*)lcd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        PMIX_RELEASE(lcd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    return PMIX_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          pmix_status_t pmix_server_abort(pmix_peer_t *peer,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_buffer_t *buf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          pmix_op_cbfunc_t cbfunc, void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -436,13 +196,7 @@ pmix_status_t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_server_commit(pmix_peer_t *peer, pmix_buffer_t *buf)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                       * may not be a contribution */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                      if (PMIX_SUCCESS ==
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_hash_fetch(&amp;nptr-&gt;server-&gt;myremote, info-&gt;rank,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &quot;modex&quot;, &amp;val) &amp;&amp;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                          NULL != val) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_CONSTRUCT(&amp;xfer, pmix_buffer_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_LOAD_BUFFER(&amp;xfer, val-&gt;data.bo.bytes,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         val-&gt;data.bo.size);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                pmix_buffer_t *pxfer = &amp;xfer;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - pmix_bfrop.pack(&amp;pbkt, &amp;pxfer, 1, PMIX_BUFFER);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                xfer.base_ptr = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                xfer.bytes_used = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_DESTRUCT(&amp;xfer);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + PMIX_LOAD_BUFFER(&amp;pbkt, val-&gt;data.bo.bytes,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         val-&gt;data.bo.size);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          PMIX_VALUE_RELEASE(val);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                      }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          PMIX_UNLOAD_BUFFER(&amp;pbkt, data, sz);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -457,7 +211,7 @@ pmix_status_t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_server_commit(pmix_peer_t *peer, pmix_buffer_t *buf)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                      PMIX_RELEASE(dcd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    /* see if anyone local is waiting on this data- could
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         be more than one */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* see if anyone local is waiting on this data - could
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         be more than one */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              return pmix_pending_resolve(nptr, info-&gt;rank,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         PMIX_SUCCESS, NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -826,163 +580,6 @@ pmix_status_t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_server_fence(pmix_server_caddy_t *cd,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -static void _process_dmdx_reply(int fd, short args, void
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_dmdx_reply_caddy_t *caddy =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (pmix_dmdx_reply_caddy_t *)cbdata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_kval_t *kp;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_nspace_t *ns, *nptr;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_status_t rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_output_verbose(2, pmix_globals.debug_output,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                    &quot;[%s:%d] queue dmdx reply from %s:%d&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                    __FILE__, __LINE__,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - caddy-&gt;lcd-&gt;proc.nspace, caddy-&gt;lcd-&gt;proc.rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    /* find the nspace object for this client */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    nptr = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    PMIX_LIST_FOREACH(ns, &amp;pmix_globals.nspaces,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_nspace_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        if (0 == strcmp(caddy-&gt;lcd-&gt;proc.nspace,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ns-&gt;nspace)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            nptr = ns;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    if (NULL == nptr) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        /* should be impossible */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_ERROR_LOG(PMIX_ERR_NOT_FOUND);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        caddy-&gt;status = PMIX_ERR_NOT_FOUND;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        goto cleanup;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    if (PMIX_SUCCESS == caddy-&gt;status) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        kp = PMIX_NEW(pmix_kval_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        kp-&gt;key = strdup(&quot;modex&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_VALUE_CREATE(kp-&gt;value, 1);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        kp-&gt;value-&gt;type = PMIX_BYTE_OBJECT;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        /* we don't know if the host is going to save this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         data
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -         * or not, so we have to copy it */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - kp-&gt;value-&gt;data.bo.bytes = (char*)malloc(caddy-&gt;ndata);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - memcpy(kp-&gt;value-&gt;data.bo.bytes, caddy-&gt;data, caddy-&gt;ndata);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - kp-&gt;value-&gt;data.bo.size = caddy-&gt;ndata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        /* store it in the appropriate hash */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        if (PMIX_SUCCESS != (rc =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_hash_store(&amp;nptr-&gt;server-&gt;remote,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         caddy-&gt;lcd-&gt;proc.rank, kp))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        PMIX_RELEASE(kp);  // maintain acctg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -cleanup:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    /* always execute the callback to avoid having the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         client hang */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_pending_resolve(nptr, caddy-&gt;lcd-&gt;proc.rank,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         caddy-&gt;status, caddy-&gt;lcd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    /* now call the release function so the host server
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -     * knows it can release the data */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    if (NULL != caddy-&gt;relcbfunc) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - caddy-&gt;relcbfunc(caddy-&gt;cbdata);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    PMIX_RELEASE(caddy);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -static void dmdx_cbfunc(pmix_status_t status,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                        const char *data, size_t ndata,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         void *cbdata,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - pmix_release_cbfunc_t release_fn, void *release_cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_dmdx_reply_caddy_t *caddy;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    caddy = PMIX_NEW(pmix_dmdx_reply_caddy_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    caddy-&gt;status = status;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    /* point to the callers cbfunc */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    caddy-&gt;relcbfunc = release_fn;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    caddy-&gt;cbdata = release_cbdata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    caddy-&gt;data   = data;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    caddy-&gt;ndata  = ndata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    caddy-&gt;lcd    = (pmix_dmdx_local_t *)cbdata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_output_verbose(2, pmix_globals.debug_output,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &quot;[%s:%d] queue dmdx reply %s:%d&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - __FILE__, __LINE__,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - caddy-&gt;lcd-&gt;proc.nspace, caddy-&gt;lcd-&gt;proc.rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - event_assign(&amp;caddy-&gt;ev, pmix_globals.evbase, -1, EV_WRITE,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -  _process_dmdx_reply, caddy);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - event_priority_set(&amp;caddy-&gt;ev, 0);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - event_active(&amp;caddy-&gt;ev, EV_WRITE, 1);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -pmix_status_t pmix_server_get(pmix_buffer_t *buf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - pmix_modex_cbfunc_t cbfunc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    int32_t cnt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_status_t rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    int rank;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    char *cptr;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    char nspace[PMIX_MAX_NSLEN+1];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_nspace_t *ns, *nptr;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_info_t *info=NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    size_t ninfo=0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_output_verbose(2, pmix_globals.debug_output,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                        &quot;recvd GET&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    /* setup */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    memset(nspace, 0, sizeof(nspace));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    /* retrieve the nspace and rank of the requested proc */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    cnt = 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &amp;cptr, &amp;cnt, PMIX_STRING))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    (void)strncpy(nspace, cptr, PMIX_MAX_NSLEN);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    free(cptr);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    cnt = 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &amp;rank, &amp;cnt, PMIX_INT))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    /* find the nspace object for this client */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    nptr = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    PMIX_LIST_FOREACH(ns, &amp;pmix_globals.nspaces,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix_nspace_t) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        if (0 == strcmp(nspace, ns-&gt;nspace)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            nptr = ns;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_output_verbose(2, pmix_globals.debug_output,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -                        &quot;%s:%d EXECUTE GET FOR %s:%d&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - pmix_globals.myid.nspace,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - pmix_globals.myid.rank, nspace, rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    /* retrieve any provided info structs */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    cnt = 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &amp;ninfo, &amp;cnt, PMIX_SIZE))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    if (0 &lt; ninfo) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        PMIX_INFO_CREATE(info, ninfo);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        cnt = ninfo;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         info, &amp;cnt, PMIX_INFO))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIX_INFO_FREE(info, ninfo);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    if (NULL == nptr) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        /* this is for an nspace we don't know about yet, so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -         * give the host server a chance to tell us about
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         it */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        nptr = PMIX_NEW(pmix_nspace_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - (void)strncpy(nptr-&gt;nspace, nspace, PMIX_MAX_NSLEN);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - pmix_list_append(&amp;pmix_globals.nspaces, &amp;nptr-&gt;super);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    /* if we don't have any ranks for this job, protect
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ourselves here */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    if (NULL == nptr-&gt;server) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        nptr-&gt;server = PMIX_NEW(pmix_server_nspace_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    return pmix_pending_request(nptr, rank, info, ninfo,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         cbfunc, cbdata);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          pmix_status_t pmix_server_publish(pmix_peer_t *peer,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            pmix_buffer_t *buf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            pmix_op_cbfunc_t cbfunc, void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         diff --git
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         index c6279d5..9129b6b 100644
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         --- a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +++ b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -183,10 +183,7 @@ void pmix_stop_listening(void);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          bool pmix_server_trk_update(pmix_server_trkr_t *trk);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -pmix_status_t pmix_pending_request(pmix_nspace_t *nptr,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         int rank,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_info_t *info, size_t ninfo,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_modex_cbfunc_t cbfunc, void *cbdata);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -void pmix_pending_nspace_fix(pmix_nspace_t *nptr);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +void pmix_pending_nspace_requests(pmix_nspace_t *nptr);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          pmix_status_t pmix_pending_resolve(pmix_nspace_t *nptr,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         int rank,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             pmix_status_t status, pmix_dmdx_local_t *lcd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         diff --git a/opal/mca/pmix/pmix1xx/pmix/src/util/error.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         b/opal/mca/pmix/pmix1xx/pmix/src/util/error.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         index 8cc4bcd..90c42ed 100644
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         --- a/opal/mca/pmix/pmix1xx/pmix/src/util/error.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +++ b/opal/mca/pmix/pmix1xx/pmix/src/util/error.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -123,6 +123,8 @@ const char*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         PMIx_Error_string(pmix_status_t errnum)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              case PMIX_EXISTS:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  return &quot;EXISTS&quot;;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    case PMIX_ERR_SILENT:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        return &quot;SILENT&quot;;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              case PMIX_ERROR:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  return &quot;ERROR&quot;;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              case PMIX_SUCCESS:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         diff --git a/opal/mca/pmix/pmix1xx/pmix/src/util/error.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         b/opal/mca/pmix/pmix1xx/pmix/src/util/error.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         index f72227a..e43ac47 100644
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         --- a/opal/mca/pmix/pmix1xx/pmix/src/util/error.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +++ b/opal/mca/pmix/pmix1xx/pmix/src/util/error.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -28,9 +28,13 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          BEGIN_C_DECLS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -#define PMIX_ERROR_LOG(r)  \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    pmix_output(0, &quot;PMIX ERROR: %s in file %s at line %d&quot;, \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - PMIx_Error_string((r)), __FILE__, __LINE__);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +#define PMIX_ERROR_LOG(r)          \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    do {         \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        if (PMIX_ERR_SILENT != (r)) {          \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            pmix_output(0, &quot;PMIX ERROR: %s in file %s at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         line %d&quot;,      \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + PMIx_Error_string((r)), __FILE__, __LINE__);    \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        }          \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }while(0);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          #define PMIX_REPORT_ERROR(e)                         \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              do {                         \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         diff --git a/opal/mca/pmix/pmix1xx/pmix1_client.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         b/opal/mca/pmix/pmix1xx/pmix1_client.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         index f1ba0d5..e9c50b7 100644
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         --- a/opal/mca/pmix/pmix1xx/pmix1_client.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +++ b/opal/mca/pmix/pmix1xx/pmix1_client.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -217,6 +217,7 @@ int pmix1_store_local(const
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         opal_process_name_t *proc, opal_value_t *val)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                      }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  if (NULL == job) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + OPAL_ERROR_LOG(OPAL_ERR_NOT_FOUND);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                      return OPAL_ERR_NOT_FOUND;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  (void)strncpy(p.nspace, job-&gt;nspace, PMIX_MAX_NSLEN);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         diff --git a/opal/mca/pmix/pmix1xx/pmix1_server_south.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         b/opal/mca/pmix/pmix1xx/pmix1_server_south.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         index ae42de0..f0d0f11 100644
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         --- a/opal/mca/pmix/pmix1xx/pmix1_server_south.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +++ b/opal/mca/pmix/pmix1xx/pmix1_server_south.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -156,10 +156,10 @@ static void opcbfunc(pmix_status_t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         status, void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          int pmix1_server_register_nspace(opal_jobid_t jobid,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    int nlocalprocs,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    opal_list_t *info,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    opal_pmix_op_cbfunc_t cbfunc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +  int nlocalprocs,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +  opal_list_t *info,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +  opal_pmix_op_cbfunc_t cbfunc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +  void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              opal_value_t *kv, *k2;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              pmix_info_t *pinfo, *pmap;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -168,10 +168,17 @@ int
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix1_server_register_nspace(opal_jobid_t jobid,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              pmix_status_t rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              pmix1_opcaddy_t *op;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              opal_list_t *pmapinfo;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    opal_pmix1_jobid_trkr_t *job;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              /* convert the jobid */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              (void)snprintf(nspace, PMIX_MAX_NSLEN,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         opal_convert_jobid_to_string(jobid));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* store this job in our list of known nspaces */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    job = OBJ_NEW(opal_pmix1_jobid_trkr_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + (void)strncpy(job-&gt;nspace, nspace, PMIX_MAX_NSLEN);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    job-&gt;jobid = jobid;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + opal_list_append(&amp;mca_pmix_pmix1xx_component.jobids,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &amp;job-&gt;super);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              /* convert the list to an array of pmix_info_t */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              if (NULL != info) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  sz = opal_list_get_size(info);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -220,10 +227,10 @@ int
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         pmix1_server_register_nspace(opal_jobid_t jobid,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          int pmix1_server_register_client(const opal_process_name_t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         *proc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    uid_t uid, gid_t gid,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    void *server_object,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    opal_pmix_op_cbfunc_t cbfunc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +  uid_t uid, gid_t gid,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +  void *server_object,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +  opal_pmix_op_cbfunc_t cbfunc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +  void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              pmix_status_t rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              pmix1_opcaddy_t *op;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -275,7 +282,7 @@ static void dmdx_response(pmix_status_t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         status, char *data, size_t sz, void *cbd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          int pmix1_server_dmodex(const opal_process_name_t *proc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         - opal_pmix_modex_cbfunc_t cbfunc, void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         + opal_pmix_modex_cbfunc_t cbfunc, void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              pmix1_opcaddy_t *op;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              pmix_status_t rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         diff --git a/orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         b/orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         index 953145d..ee5582c 100644
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         --- a/orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +++ b/orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -505,7 +505,6 @@ static void pmix_server_dmdx_resp(int
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         status, orte_process_name_t* sender,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              int rc, ret, room_num;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              int32_t cnt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              opal_process_name_t target;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    opal_value_t kv;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              pmix_server_req_t *req;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              uint8_t *data = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              int32_t ndata = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -542,29 +541,14 @@ static void pmix_server_dmdx_resp(int
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         status, orte_process_name_t* sender,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  return;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    /* if we got something, store the blobs locally so we can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -     * meet any further requests without doing a remote fetch.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -     * This must be done as a single blob for later
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         retrieval */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    if (ORTE_SUCCESS == ret &amp;&amp; NULL != data) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        OBJ_CONSTRUCT(&amp;kv, opal_value_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        kv.key = strdup(&quot;modex&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        kv.type = OPAL_BYTE_OBJECT;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        kv.data.bo.bytes = data;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        kv.data.bo.size = ndata;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        if (OPAL_SUCCESS != (rc =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         opal_pmix.store_local(&amp;target, &amp;kv))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        kv.data.bo.bytes = NULL;  // protect the data
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        kv.data.bo.size = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -        OBJ_DESTRUCT(&amp;kv);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              /* check the request out of the tracking hotel */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          opal_hotel_checkout_and_return_occupant(&amp;orte_pmix_server_globals.reqs,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         room_num, (void**)&amp;req);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              /* return the returned data to the requestor */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              if (NULL != req) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  if (NULL != req-&gt;mdxcbfunc) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          req-&gt;mdxcbfunc(ret, (char*)data, ndata, req-&gt;cbdata,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         relcbfunc, data);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        } else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +            free(data);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  OBJ_RELEASE(req);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         diff --git a/orte/orted/pmix/pmix_server_fence.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         b/orte/orted/pmix/pmix_server_fence.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         index b3b0e33..765c1c2 100644
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         --- a/orte/orted/pmix/pmix_server_fence.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +++ b/orte/orted/pmix/pmix_server_fence.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         @@ -197,6 +197,12 @@ static void dmodex_req(int sd, short
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         args, void *cbdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  goto callback;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    /* if we are the host daemon, then this is a local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         request, so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +     * just wait for the data to come in */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    if (ORTE_PROC_MY_NAME-&gt;vpid == dmn-&gt;name.vpid) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +        return;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              /* construct a request message */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              buf = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              if (OPAL_SUCCESS != (rc = opal_dss.pack(buf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &amp;req-&gt;target, 1, OPAL_NAME))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         -----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Summary of changes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          ompi/runtime/ompi_mpi_init.c                    |   7 +-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          opal/mca/pmix/base/pmix_base_frame.c              |  11 +-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          opal/mca/pmix/pmix.h                    |  13 +-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          .../pmix1xx/pmix/include/pmix/pmix_common.h.in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &lt;<a href="http://pmix_common.h.in">http://pmix_common.h.in</a>&gt;    |   3 +-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          .../pmix/pmix1xx/pmix/src/client/pmix_client_get.c |   1 +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          opal/mca/pmix/pmix1xx/pmix/src/server/Makefile.am |   3 +-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          .../mca/pmix/pmix1xx/pmix/src/server/pmix_server.c |  11 +-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          .../pmix/pmix1xx/pmix/src/server/pmix_server_get.c | 552
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +++++++++++++++++++++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          .../pmix/pmix1xx/pmix/src/server/pmix_server_ops.c | 407
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         +--------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          .../pmix/pmix1xx/pmix/src/server/pmix_server_ops.h |   5 +-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          opal/mca/pmix/pmix1xx/pmix/src/util/error.c       |   2 +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          opal/mca/pmix/pmix1xx/pmix/src/util/error.h       |  10 +-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          opal/mca/pmix/pmix1xx/pmix1_client.c              |   1 +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          opal/mca/pmix/pmix1xx/pmix1_server_south.c        |  25 +-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          orte/orted/pmix/pmix_server.c                     |  20 +-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          orte/orted/pmix/pmix_server_fence.c               |   6 +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          16 files changed, 620 insertions(+), 457 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          create mode 100644
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         hooks/post-receive
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         open-mpi/ompi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ompi-commits mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ompi-commits_at_[hidden] &lt;mailto:ompi-commits_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2015/10/18297.php">http://www.open-mpi.org/community/lists/devel/2015/10/18297.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18299.php">http://www.open-mpi.org/community/lists/devel/2015/10/18299.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2015/10/18300.php">http://www.open-mpi.org/community/lists/devel/2015/10/18300.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18301.php">http://www.open-mpi.org/community/lists/devel/2015/10/18301.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18303.php">http://www.open-mpi.org/community/lists/devel/2015/10/18303.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18304/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18305.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>Previous message:</strong> <a href="18303.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>In reply to:</strong> <a href="18303.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18305.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>Reply:</strong> <a href="18305.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
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
