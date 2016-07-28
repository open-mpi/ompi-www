<?
$subject_val = "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 10 12:09:10 2014" -->
<!-- isoreceived="20140510160910" -->
<!-- sent="Sat, 10 May 2014 18:08:56 +0200" -->
<!-- isosent="20140510160856" -->
<!-- name="Bert Wesarg" -->
<!-- email="Bert.Wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] shmem_collect32 does not work with nlong == 0" -->
<!-- id="536E4F18.4020006_at_tu-dresden.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="536E1FC2.5090903_at_tu-dresden.de" -->
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
<strong>From:</strong> Bert Wesarg (<em>Bert.Wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-10 12:08:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14769.php">Mike Dubman: "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<li><strong>Previous message:</strong> <a href="14767.php">Bert Wesarg: "[OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<li><strong>In reply to:</strong> <a href="14767.php">Bert Wesarg: "[OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14769.php">Mike Dubman: "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<li><strong>Reply:</strong> <a href="14769.php">Mike Dubman: "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/10/2014 02:46 PM, Bert Wesarg wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get a deadlock when using the shmem_collect32() routine and any of the
</span><br>
<span class="quotelev1">&gt; non-root PEs pass 0 as the number of elements. It looks like the
</span><br>
<span class="quotelev1">&gt; algorithm in _algorithm_central_collector() does use 0 as a special
</span><br>
<span class="quotelev1">&gt; value, and thus does not break out of the loop.
</span><br>
<p>This seems to fix it for me:
<br>
<p>diff --git i/oshmem/mca/scoll/basic/scoll_basic_collect.c 
<br>
w/oshmem/mca/scoll/basic/scoll_basic_collect.c
<br>
index aa81fac..6bba7d1 100644 oshmem/mca/scoll/basic/scoll_basic_collect.c
<br>
--- i/oshmem/mca/scoll/basic/scoll_basic_collect.c
<br>
+++ w/oshmem/mca/scoll/basic/scoll_basic_collect.c
<br>
@@ -553,7 +553,7 @@ static int _algorithm_central_collector(struct 
<br>
oshmem_group_t *group,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wait_pe_array = malloc(sizeof(*wait_pe_array) * wait_pe_count);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (wait_pe_array) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memset((void*) wait_pe_array,
<br>
-                   0,
<br>
+                   0xff,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sizeof(*wait_pe_array) * wait_pe_count);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wait_pe_array[0] = nlong;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wait_pe_count--;
<br>
@@ -564,13 +564,13 @@ static int _algorithm_central_collector(struct 
<br>
oshmem_group_t *group,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;group-&gt;my_pe);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 1; (i &lt; group-&gt;proc_count) &amp;&amp; (rc == 
<br>
OSHMEM_SUCCESS);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i++) {
<br>
-                    if (wait_pe_array[i] == 0) {
<br>
+                    if (wait_pe_array[i] == (size_t)-1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pe_cur = oshmem_proc_pe(group-&gt;proc_array[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;value = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MCA_SPML_CALL(get((void*)pSync, 
<br>
sizeof(value), (void*)&amp;value, pe_cur));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ((rc == OSHMEM_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp; (value != _SHMEM_SYNC_VALUE)
<br>
-                                &amp;&amp; (value &gt; 0)) {
<br>
+                                &amp;&amp; (value &gt;= 0)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wait_pe_array[i] = (size_t) value;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wait_pe_count--;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SCOLL_VERBOSE(14,
<br>
@@ -588,6 +588,9 @@ static int _algorithm_central_collector(struct 
<br>
oshmem_group_t *group,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 1; (i &lt; group-&gt;proc_count) &amp;&amp; (rc == OSHMEM_SUCCESS);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i++) {
<br>
+                if (!wait_pe_array[i])
<br>
+                    continue;
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Get PE ID of a peer from the group */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pe_cur = oshmem_proc_pe(group-&gt;proc_array[i]);
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Bert Wesarg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#228;t Dresden
Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: Bert.Wesarg_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14768/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14769.php">Mike Dubman: "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<li><strong>Previous message:</strong> <a href="14767.php">Bert Wesarg: "[OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<li><strong>In reply to:</strong> <a href="14767.php">Bert Wesarg: "[OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14769.php">Mike Dubman: "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<li><strong>Reply:</strong> <a href="14769.php">Mike Dubman: "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
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
