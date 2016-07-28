<?
$subject_val = "Re: [OMPI devel] bug in mca framework?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  3 11:59:23 2013" -->
<!-- isoreceived="20131203165923" -->
<!-- sent="Tue, 3 Dec 2013 09:59:21 -0700" -->
<!-- isosent="20131203165921" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in mca framework?" -->
<!-- id="20131203165921.GH12354_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1Kybp=2F_91bG1e5NLWqKn0Mx2cn-NroEx5=sCNFc0P9oyg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bug in mca framework?<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-03 11:59:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13344.php">Mike Dubman: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13342.php">Mike Dubman: "[OMPI devel] bug in mca framework?"</a>
<li><strong>In reply to:</strong> <a href="13342.php">Mike Dubman: "[OMPI devel] bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13344.php">Mike Dubman: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13344.php">Mike Dubman: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This usually happens when a string that belongs to the MCA system is freed
<br>
elsewhere. Can you find out the name of the variable that is being destructed
<br>
in frame 2.
<br>
<p>-Nathan Hjelm
<br>
Application Readiness, HPC-5, LANL
<br>
<p>On Tue, Dec 03, 2013 at 02:53:29PM +0200, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt;    Hi,
</span><br>
<span class="quotelev1">&gt;    We observe crash during shmem_finalize()  (in trunk) with new MCA
</span><br>
<span class="quotelev1">&gt;    framework.
</span><br>
<span class="quotelev1">&gt;    After investigation, found that  MCA tears-down process can access
</span><br>
<span class="quotelev1">&gt;    previously released memory. (reproduced with oshmem_hello_c.c test)
</span><br>
<span class="quotelev1">&gt;    0 0x00007fffed3d51d0 in ?? ()
</span><br>
<span class="quotelev1">&gt;    #1 &lt;signal handler called&gt;
</span><br>
<span class="quotelev1">&gt;    #2 0x00007ffff710e21e in var_destructor (var=0x6fa7e0) at
</span><br>
<span class="quotelev1">&gt;    mca_base_var.c:1605
</span><br>
<span class="quotelev1">&gt;    #3 0x00007ffff710ae99 in opal_obj_run_destructors (object=0x6fa7e0) at
</span><br>
<span class="quotelev1">&gt;    ../../../opal/class/opal_object.h:448
</span><br>
<span class="quotelev1">&gt;    #4 0x00007ffff710ca18 in mca_base_var_finalize () at mca_base_var.c:954
</span><br>
<span class="quotelev1">&gt;    #5 0x00007ffff710a7e2 in mca_base_param_finalize () at
</span><br>
<span class="quotelev1">&gt;    mca_base_param.c:643
</span><br>
<span class="quotelev1">&gt;    #6 0x00007ffff70e08e2 in opal_finalize_util () at
</span><br>
<span class="quotelev1">&gt;    runtime/opal_finalize.c:77
</span><br>
<span class="quotelev1">&gt;    #7 0x00007ffff7aa5319 in ompi_mpi_finalize () at
</span><br>
<span class="quotelev1">&gt;    runtime/ompi_mpi_finalize.c:407
</span><br>
<span class="quotelev1">&gt;    #8 0x00007ffff7d900cc in oshmem_shmem_finalize () at
</span><br>
<span class="quotelev1">&gt;    runtime/oshmem_shmem_finalize.c:75
</span><br>
<span class="quotelev1">&gt;    #9 0x00007ffff7d91119 in shmem_finalize () at shmem_finalize.c:24
</span><br>
<span class="quotelev1">&gt;    #10 0x00007ffff7d89b8f in __do_global_dtors_aux () from
</span><br>
<span class="quotelev1">&gt;    /install/lib/libshmem.so.0
</span><br>
<span class="quotelev1">&gt;    #11 0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt;    The crash can be resolved by following patch:
</span><br>
<span class="quotelev1">&gt;    diff --git a/opal/mca/base/mca_base_var.c b/opal/mca/base/mca_base_var.c
</span><br>
<span class="quotelev1">&gt;    index 9966627..48028d8 100644
</span><br>
<span class="quotelev1">&gt;    --- a/opal/mca/base/mca_base_var.c
</span><br>
<span class="quotelev1">&gt;    +++ b/opal/mca/base/mca_base_var.c
</span><br>
<span class="quotelev1">&gt;    @@ -773,7 +773,7 @@ static int var_find_by_name (const char *full_name,
</span><br>
<span class="quotelev1">&gt;    int *index, bool invalidok)
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;         (void) var_get ((int)(uintptr_t) tmp, &amp;var, false);
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;    -    if (invalidok || VAR_IS_VALID(var[0])) {
</span><br>
<span class="quotelev1">&gt;    +    if (VAR_IS_VALID(var[0])) {
</span><br>
<span class="quotelev1">&gt;             *index = (int)(uintptr_t) tmp;
</span><br>
<span class="quotelev1">&gt;             return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;    I`m not sure we understand yet why it fixes the problem and what is a
</span><br>
<span class="quotelev1">&gt;    race.
</span><br>
<span class="quotelev1">&gt;    Could some` with knowledge of MCA flows look at it and comment?
</span><br>
<span class="quotelev1">&gt;    The &quot;invalidok&quot; was introduced by Jeff`s commit.
</span><br>
<span class="quotelev1">&gt;    Thanks
</span><br>
<span class="quotelev1">&gt;    M
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13343/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13344.php">Mike Dubman: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13342.php">Mike Dubman: "[OMPI devel] bug in mca framework?"</a>
<li><strong>In reply to:</strong> <a href="13342.php">Mike Dubman: "[OMPI devel] bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13344.php">Mike Dubman: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13344.php">Mike Dubman: "Re: [OMPI devel] bug in mca framework?"</a>
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
