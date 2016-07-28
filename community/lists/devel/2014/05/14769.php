<?
$subject_val = "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 10 13:17:47 2014" -->
<!-- isoreceived="20140510171747" -->
<!-- sent="Sat, 10 May 2014 20:17:45 +0300" -->
<!-- isosent="20140510171745" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] shmem_collect32 does not work with nlong == 0" -->
<!-- id="CAAO1KyYrXFX9MCELgowZFeF6Kg8hXUt_Z5ntCKurLpXJ6_KyqA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="536E4F18.4020006_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] shmem_collect32 does not work with nlong == 0<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-10 13:17:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14770.php">Gilles Gouaillardet: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>Previous message:</strong> <a href="14768.php">Bert Wesarg: "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<li><strong>In reply to:</strong> <a href="14768.php">Bert Wesarg: "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15305.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks for patch, we will review it next week.
<br>
<p>Also, you can select different shmem collectives at runtime:
<br>
<p>-mca scoll_mpi_enable 1 (to select MPI collectives for shmem)
<br>
<p><p><p>On Sat, May 10, 2014 at 7:08 PM, Bert Wesarg &lt;Bert.Wesarg_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On 05/10/2014 02:46 PM, Bert Wesarg wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get a deadlock when using the shmem_collect32() routine and any of the
</span><br>
<span class="quotelev2">&gt;&gt; non-root PEs pass 0 as the number of elements. It looks like the
</span><br>
<span class="quotelev2">&gt;&gt; algorithm in _algorithm_central_collector() does use 0 as a special
</span><br>
<span class="quotelev2">&gt;&gt; value, and thus does not break out of the loop.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to fix it for me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git i/oshmem/mca/scoll/basic/scoll_basic_collect.c
</span><br>
<span class="quotelev1">&gt; w/oshmem/mca/scoll/basic/scoll_basic_collect.c
</span><br>
<span class="quotelev1">&gt; index aa81fac..6bba7d1 100644 oshmem/mca/scoll/basic/scoll_basic_collect.c
</span><br>
<span class="quotelev1">&gt; --- i/oshmem/mca/scoll/basic/scoll_basic_collect.c
</span><br>
<span class="quotelev1">&gt; +++ w/oshmem/mca/scoll/basic/scoll_basic_collect.c
</span><br>
<span class="quotelev1">&gt; @@ -553,7 +553,7 @@ static int _algorithm_central_collector(struct
</span><br>
<span class="quotelev1">&gt; oshmem_group_t *group,
</span><br>
<span class="quotelev1">&gt;          wait_pe_array = malloc(sizeof(*wait_pe_array) * wait_pe_count);
</span><br>
<span class="quotelev1">&gt;          if (wait_pe_array) {
</span><br>
<span class="quotelev1">&gt;              memset((void*) wait_pe_array,
</span><br>
<span class="quotelev1">&gt; -                   0,
</span><br>
<span class="quotelev1">&gt; +                   0xff,
</span><br>
<span class="quotelev1">&gt;                     sizeof(*wait_pe_array) * wait_pe_count);
</span><br>
<span class="quotelev1">&gt;              wait_pe_array[0] = nlong;
</span><br>
<span class="quotelev1">&gt;              wait_pe_count--;
</span><br>
<span class="quotelev1">&gt; @@ -564,13 +564,13 @@ static int _algorithm_central_collector(struct
</span><br>
<span class="quotelev1">&gt; oshmem_group_t *group,
</span><br>
<span class="quotelev1">&gt;                                group-&gt;my_pe);
</span><br>
<span class="quotelev1">&gt;                  for (i = 1; (i &lt; group-&gt;proc_count) &amp;&amp; (rc ==
</span><br>
<span class="quotelev1">&gt; OSHMEM_SUCCESS);
</span><br>
<span class="quotelev1">&gt;                          i++) {
</span><br>
<span class="quotelev1">&gt; -                    if (wait_pe_array[i] == 0) {
</span><br>
<span class="quotelev1">&gt; +                    if (wait_pe_array[i] == (size_t)-1) {
</span><br>
<span class="quotelev1">&gt;                          pe_cur = oshmem_proc_pe(group-&gt;proc_array[i]);
</span><br>
<span class="quotelev1">&gt;                          value = 0;
</span><br>
<span class="quotelev1">&gt;                          rc = MCA_SPML_CALL(get((void*)pSync,
</span><br>
<span class="quotelev1">&gt; sizeof(value), (void*)&amp;value, pe_cur));
</span><br>
<span class="quotelev1">&gt;                          if ((rc == OSHMEM_SUCCESS)
</span><br>
<span class="quotelev1">&gt;                                  &amp;&amp; (value != _SHMEM_SYNC_VALUE)
</span><br>
<span class="quotelev1">&gt; -                                &amp;&amp; (value &gt; 0)) {
</span><br>
<span class="quotelev1">&gt; +                                &amp;&amp; (value &gt;= 0)) {
</span><br>
<span class="quotelev1">&gt;                              wait_pe_array[i] = (size_t) value;
</span><br>
<span class="quotelev1">&gt;                              wait_pe_count--;
</span><br>
<span class="quotelev1">&gt;                              SCOLL_VERBOSE(14,
</span><br>
<span class="quotelev1">&gt; @@ -588,6 +588,9 @@ static int _algorithm_central_collector(struct
</span><br>
<span class="quotelev1">&gt; oshmem_group_t *group,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              for (i = 1; (i &lt; group-&gt;proc_count) &amp;&amp; (rc == OSHMEM_SUCCESS);
</span><br>
<span class="quotelev1">&gt;                      i++) {
</span><br>
<span class="quotelev1">&gt; +                if (!wait_pe_array[i])
</span><br>
<span class="quotelev1">&gt; +                    continue;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;                  /* Get PE ID of a peer from the group */
</span><br>
<span class="quotelev1">&gt;                  pe_cur = oshmem_proc_pe(group-&gt;proc_array[i]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards,
</span><br>
<span class="quotelev2">&gt;&gt; Bert Wesarg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Bert Wesarg
</span><br>
<span class="quotelev1">&gt; wiss. Mitarbeiter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Technische Universit&#195;&#164;t Dresden
</span><br>
<span class="quotelev1">&gt; Zentrum f&#195;&#188;r Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev1">&gt; 01062 Dresden
</span><br>
<span class="quotelev1">&gt; Tel.: +49 (351) 463-42451
</span><br>
<span class="quotelev1">&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev1">&gt; E-Mail: Bert.Wesarg_at_[hidden]
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14768.php">http://www.open-mpi.org/community/lists/devel/2014/05/14768.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14769/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14770.php">Gilles Gouaillardet: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>Previous message:</strong> <a href="14768.php">Bert Wesarg: "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<li><strong>In reply to:</strong> <a href="14768.php">Bert Wesarg: "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15305.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
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
