<?
$subject_val = "[OMPI devel] [v2.x] Harmless type conversion warnings from Clang";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 12:41:14 2016" -->
<!-- isoreceived="20160506164114" -->
<!-- sent="Fri, 6 May 2016 09:41:11 -0700" -->
<!-- isosent="20160506164111" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [v2.x] Harmless type conversion warnings from Clang" -->
<!-- id="CAAvDA14jBjQC37NrLAM=Bb1s=RRF_tW-yqp7xcABXmcyUCbNMg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [v2.x] Harmless type conversion warnings from Clang<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 12:41:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18932.php">Paul Hargrove: "[OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
<li><strong>Previous message:</strong> <a href="18930.php">Paul Hargrove: "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think any of the warnings below indicate errors.
<br>
However, each could probably be suppressed with an appropriate cast.
<br>
<p>-Paul
<br>
<p>/scratch/phargrov/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-x86_64-clang/openmpi-gitclone/opal/mca/memory/patcher/memory_patcher_component.c:370:34:
<br>
warning: passing 'const void *' to parameter of type 'void *' discards
<br>
qualifiers [-Wincompatible-pointer-types-discards-qualifiers]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_mem_hooks_release_hook (shmaddr, memory_patcher_get_shm_seg_size
<br>
(shmaddr), false);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^~~~~~~
<br>
<pre>
--
/scratch/phargrov/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-x86_64-clang/openmpi-gitclone/opal/mca/btl/openib/btl_openib_component.c:2124:21:
warning: implicit conversion from enumeration type
'btl_openib_receive_queues_source_t' to different enumeration type
'mca_base_var_source_t' [-Wenum-conversion]
                    BTL_OPENIB_RQ_SOURCE_DEVICE_INI;
                    ^~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
--
/scratch/phargrov/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-x86_64-clang/openmpi-gitclone/opal/mca/pmix/pmix112/pmix1_client.c:406:19:
warning: implicit conversion from enumeration type 'opal_pmix_scope_t' to
different enumeration type 'pmix_scope_t' [-Wenum-conversion]
    rc = PMIx_Put(scope, val-&gt;key, &amp;kv);
         ~~~~~~~~ ^~~~~
--
/scratch/phargrov/OMPI/openmpi-v2.x-dev-1410-g81e0924-linux-x86_64-clang/openmpi-gitclone/ompi/mca/io/romio314/romio/adio/common/utils.c:97:3:
warning: passing 'const MPI_Aint *' (aka 'const long *') to parameter of
type 'MPI_Aint *' (aka 'long *') discards qualifiers
[-Wincompatible-pointer-types-discards-qualifiers]
                array_of_displacements, oldtype, newtype);
                ^~~~~~~~~~~~~~~~~~~~~~
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18931/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18932.php">Paul Hargrove: "[OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
<li><strong>Previous message:</strong> <a href="18930.php">Paul Hargrove: "Re: [OMPI devel] [v2.x] more &quot;patcher&quot; issues"</a>
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
