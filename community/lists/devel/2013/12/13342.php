<?
$subject_val = "[OMPI devel] bug in mca framework?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  3 07:53:30 2013" -->
<!-- isoreceived="20131203125330" -->
<!-- sent="Tue, 3 Dec 2013 14:53:29 +0200" -->
<!-- isosent="20131203125329" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="[OMPI devel] bug in mca framework?" -->
<!-- id="CAAO1Kybp=2F_91bG1e5NLWqKn0Mx2cn-NroEx5=sCNFc0P9oyg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] bug in mca framework?<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-03 07:53:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13343.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13341.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13343.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13343.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
We observe crash during shmem_finalize()  (in trunk) with new MCA framework.
<br>
After investigation, found that  MCA tears-down process can access
<br>
previously released memory. (reproduced with oshmem_hello_c.c test)
<br>
<p><p><p>0 0x00007fffed3d51d0 in ?? ()
<br>
#1 &lt;signal handler called&gt;
<br>
#2 &lt;<a href="http://bgate.mellanox.com/redmine/issues/2">http://bgate.mellanox.com/redmine/issues/2</a>&gt; 0x00007ffff710e21e in
<br>
var_destructor (var=0x6fa7e0) at mca_base_var.c:1605
<br>
#3 &lt;<a href="http://bgate.mellanox.com/redmine/issues/3">http://bgate.mellanox.com/redmine/issues/3</a>&gt; 0x00007ffff710ae99 in
<br>
opal_obj_run_destructors (object=0x6fa7e0) at
<br>
../../../opal/class/opal_object.h:448
<br>
#4 0x00007ffff710ca18 in mca_base_var_finalize () at mca_base_var.c:954
<br>
#5 &lt;<a href="http://bgate.mellanox.com/redmine/issues/5">http://bgate.mellanox.com/redmine/issues/5</a>&gt; 0x00007ffff710a7e2 in
<br>
mca_base_param_finalize () at mca_base_param.c:643
<br>
#6 &lt;<a href="http://bgate.mellanox.com/redmine/issues/6">http://bgate.mellanox.com/redmine/issues/6</a>&gt; 0x00007ffff70e08e2 in
<br>
opal_finalize_util () at runtime/opal_finalize.c:77
<br>
#7 &lt;<a href="http://bgate.mellanox.com/redmine/issues/7">http://bgate.mellanox.com/redmine/issues/7</a>&gt; 0x00007ffff7aa5319 in
<br>
ompi_mpi_finalize () at runtime/ompi_mpi_finalize.c:407
<br>
#8 &lt;<a href="http://bgate.mellanox.com/redmine/issues/8">http://bgate.mellanox.com/redmine/issues/8</a>&gt; 0x00007ffff7d900cc in
<br>
oshmem_shmem_finalize () at runtime/oshmem_shmem_finalize.c:75
<br>
#9 &lt;<a href="http://bgate.mellanox.com/redmine/issues/9">http://bgate.mellanox.com/redmine/issues/9</a>&gt; 0x00007ffff7d91119 in
<br>
shmem_finalize () at shmem_finalize.c:24
<br>
#10 &lt;<a href="http://bgate.mellanox.com/redmine/issues/10">http://bgate.mellanox.com/redmine/issues/10</a>&gt; 0x00007ffff7d89b8f in
<br>
__do_global_dtors_aux () from /install/lib/libshmem.so.0
<br>
#11 &lt;<a href="http://bgate.mellanox.com/redmine/issues/11">http://bgate.mellanox.com/redmine/issues/11</a>&gt; 0x0000000000000000 in ??
<br>
()
<br>
<p>The crash can be resolved by following patch:
<br>
<p>diff --git a/opal/mca/base/mca_base_var.c b/opal/mca/base/mca_base_var.c
<br>
index 9966627..48028d8 100644
<br>
--- a/opal/mca/base/mca_base_var.c
<br>
+++ b/opal/mca/base/mca_base_var.c
<br>
@@ -773,7 +773,7 @@ static int var_find_by_name (const char *full_name, int
<br>
*index, bool invalidok)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void) var_get ((int)(uintptr_t) tmp, &amp;var, false);
<br>
<p>-    if (invalidok || VAR_IS_VALID(var[0])) {
<br>
+    if (VAR_IS_VALID(var[0])) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*index = (int)(uintptr_t) tmp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>I`m not sure we understand yet why it fixes the problem and what is a race.
<br>
Could some` with knowledge of MCA flows look at it and comment?
<br>
The &quot;invalidok&quot; was introduced by Jeff`s commit.
<br>
<p>Thanks
<br>
<p>M
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13342/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13343.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13341.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13343.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13343.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
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
