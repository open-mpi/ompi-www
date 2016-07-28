<?
$subject_val = "[OMPI devel] OpenIB/usNIC errors";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  1 02:57:24 2014" -->
<!-- isoreceived="20140601065724" -->
<!-- sent="Sun, 1 Jun 2014 13:57:23 +0700" -->
<!-- isosent="20140601065723" -->
<!-- name="Artem Polyakov" -->
<!-- email="artpol84_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenIB/usNIC errors" -->
<!-- id="CAJ2Qj5rWAJZoqKR-e8MW04nnPKuyhxicoyF4k9XKciNrguLciA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] OpenIB/usNIC errors<br>
<strong>From:</strong> Artem Polyakov (<em>artpol84_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-01 02:57:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14923.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Previous message:</strong> <a href="14921.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14923.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Reply:</strong> <a href="14923.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Reply:</strong> <a href="14924.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Reply:</strong> <a href="14926.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, while testing new PMI implementation I faced a problem with OpenIB
<br>
and/or usNIC support.
<br>
The cluster I use is build on Mellanox QDR. We don't use Cisco hardware,
<br>
thus no Cisco Virtual Interface Card. To exclude possibility of new PMI
<br>
code influence I used mpirun to launch the job. Slurm job script is
<br>
attached.
<br>
<p>While investigating the problem I found the following:
<br>
1. With TCP btl everything works without errors (add export
<br>
OMPI_MCA_btl=&quot;tcp,self&quot; in attached batch script).
<br>
<p>2. With fixed OpenIB  support  (add export OMPI_MCA_btl=&quot;openib,self&quot; in
<br>
attached batch script) I get followint error:
<br>
hellompi:
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
<br>
mca_btl_openib_del_procs: Assertion
<br>
`((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
<br>
hellompi:
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
<br>
mca_btl_openib_del_procs: Assertion
<br>
`((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
<br>
hellompi:
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
<br>
mca_btl_openib_del_procs: Assertion
<br>
`((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
<br>
hellompi:
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
<br>
mca_btl_openib_del_procs: Assertion
<br>
`((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
<br>
hellompi:
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
<br>
mca_btl_openib_del_procs: Assertion
<br>
`((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
<br>
hellompi:
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
<br>
mca_btl_openib_del_procs: Assertion
<br>
`((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
<br>
hellompi:
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
<br>
mca_btl_openib_del_procs: Assertion
<br>
`((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
<br>
hellompi:
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
<br>
mca_btl_openib_del_procs: Assertion
<br>
`((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
<br>
hellompi:
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
<br>
mca_btl_openib_del_procs: Assertion
<br>
`((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
<br>
hellompi:
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
<br>
mca_btl_openib_del_procs: Assertion
<br>
`((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
<br>
<p>Complete logs are tar-ed, check &quot;openib-failure&quot; directory.
<br>
<p>3. If I do not fix the BTL component (no OMPI_MCA_btl is exported) I can
<br>
get either immediate fail talking about usNIC/OpenIB problems OR programs
<br>
hangs.
<br>
For both cases I'm attaching complete tar-ed logs. Check &quot;auto-failure&quot; dir
<br>
for ompi stdout and stderr and &quot;auto-hang&quot; for the hang case.
<br>
<p>I am ready to provide additional info or help with testing but I have no
<br>
time to track the problem myself in near several days.
<br>
<p><pre>
-- 
&#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
Best regards, Artem Y. Polyakov


</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14922/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14922/task_mpirun.job">task_mpirun.job</a>
</ul>
<!-- attachment="task_mpirun.job" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14922/usnic-openib-faults.tar.bz2">usnic-openib-faults.tar.bz2</a>
</ul>
<!-- attachment="usnic-openib-faults.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14923.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Previous message:</strong> <a href="14921.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14923.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Reply:</strong> <a href="14923.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Reply:</strong> <a href="14924.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Reply:</strong> <a href="14926.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenIB/usNIC errors"</a>
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
