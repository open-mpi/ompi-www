<?
$subject_val = "Re: [OMPI devel] OpenIB/usNIC errors";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  1 03:01:08 2014" -->
<!-- isoreceived="20140601070108" -->
<!-- sent="Sun, 1 Jun 2014 14:01:08 +0700" -->
<!-- isosent="20140601070108" -->
<!-- name="Artem Polyakov" -->
<!-- email="artpol84_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB/usNIC errors" -->
<!-- id="CAJ2Qj5rY=O3hfrpcmxfDm_b+KJH-negSMgMHrKptENHSw2U48g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJ2Qj5rWAJZoqKR-e8MW04nnPKuyhxicoyF4k9XKciNrguLciA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenIB/usNIC errors<br>
<strong>From:</strong> Artem Polyakov (<em>artpol84_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-01 03:01:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14924.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Previous message:</strong> <a href="14922.php">Artem Polyakov: "[OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>In reply to:</strong> <a href="14922.php">Artem Polyakov: "[OMPI devel] OpenIB/usNIC errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14924.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
P.S.
<br>
<p>1. Just to make sure I tried the same program with old ompi-1.6.5 that is
<br>
installed on our cluster without any problem.
<br>
2. My testing program just sends data through the ring.
<br>
<p><p>2014-06-01 13:57 GMT+07:00 Artem Polyakov &lt;artpol84_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hello, while testing new PMI implementation I faced a problem with OpenIB
</span><br>
<span class="quotelev1">&gt; and/or usNIC support.
</span><br>
<span class="quotelev1">&gt; The cluster I use is build on Mellanox QDR. We don't use Cisco hardware,
</span><br>
<span class="quotelev1">&gt; thus no Cisco Virtual Interface Card. To exclude possibility of new PMI
</span><br>
<span class="quotelev1">&gt; code influence I used mpirun to launch the job. Slurm job script is
</span><br>
<span class="quotelev1">&gt; attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While investigating the problem I found the following:
</span><br>
<span class="quotelev1">&gt; 1. With TCP btl everything works without errors (add export
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl=&quot;tcp,self&quot; in attached batch script).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. With fixed OpenIB  support  (add export OMPI_MCA_btl=&quot;openib,self&quot; in
</span><br>
<span class="quotelev1">&gt; attached batch script) I get followint error:
</span><br>
<span class="quotelev1">&gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev1">&gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev1">&gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev1">&gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev1">&gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev1">&gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev1">&gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev1">&gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev1">&gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev1">&gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Complete logs are tar-ed, check &quot;openib-failure&quot; directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. If I do not fix the BTL component (no OMPI_MCA_btl is exported) I can
</span><br>
<span class="quotelev1">&gt; get either immediate fail talking about usNIC/OpenIB problems OR programs
</span><br>
<span class="quotelev1">&gt; hangs.
</span><br>
<span class="quotelev1">&gt; For both cases I'm attaching complete tar-ed logs. Check &quot;auto-failure&quot;
</span><br>
<span class="quotelev1">&gt; dir for ompi stdout and stderr and &quot;auto-hang&quot; for the hang case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am ready to provide additional info or help with testing but I have no
</span><br>
<span class="quotelev1">&gt; time to track the problem myself in near several days.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev1">&gt; Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
&#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
Best regards, Artem Y. Polyakov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14923/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14924.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Previous message:</strong> <a href="14922.php">Artem Polyakov: "[OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>In reply to:</strong> <a href="14922.php">Artem Polyakov: "[OMPI devel] OpenIB/usNIC errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14924.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
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
