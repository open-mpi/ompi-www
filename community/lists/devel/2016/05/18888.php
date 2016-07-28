<?
$subject_val = "Re: [OMPI devel] [2.0.0rc2] xlc build failure (pmix)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 20:51:31 2016" -->
<!-- isoreceived="20160503005131" -->
<!-- sent="Mon, 2 May 2016 17:51:27 -0700" -->
<!-- isosent="20160503005127" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc2] xlc build failure (pmix)" -->
<!-- id="1567026E-5A44-4BD3-9E01-3A282853C697_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA15vfoswOdXfRKG_2KxZr1fhmU6LujEmghrZEtoKS6_6mw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc2] xlc build failure (pmix)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 20:51:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18889.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] misleading error message from configure"</a>
<li><strong>Previous message:</strong> <a href="18887.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] xlc build failure (pmix)"</a>
<li><strong>In reply to:</strong> <a href="18887.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] xlc build failure (pmix)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fix setup here: <a href="https://github.com/open-mpi/ompi-release/pull/1129">https://github.com/open-mpi/ompi-release/pull/1129</a> &lt;<a href="https://github.com/open-mpi/ompi-release/pull/1129">https://github.com/open-mpi/ompi-release/pull/1129</a>&gt;
<br>
<p><p><span class="quotelev1">&gt; On May 2, 2016, at 5:13 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AFTER fixing the inline asm problem detailed in <a href="https://www.open-mpi.org/community/lists/devel/2016/05/18886.php">https://www.open-mpi.org/community/lists/devel/2016/05/18886.php</a> &lt;<a href="https://www.open-mpi.org/community/lists/devel/2016/05/18886.php">https://www.open-mpi.org/community/lists/devel/2016/05/18886.php</a>&gt;, I still cannot build with xlc.
</span><br>
<span class="quotelev1">&gt; The issue arises in the pmix code and originates from a disagreement between pmix_hash_table.h and pmix_hash_table.c.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The header declares 8 functions with a return type of &quot;pmix_status_t&quot; (which is an enum), while pmix_hash_table.c defines the same functions with a return type of &quot;int&quot;.  Meanwhile 1 function has the &quot;opposite&quot; problem (integer decl vs enum defn).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The errors seen:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libtool: compile:  xlc -DHAVE_CONFIG_H -I. -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix -I./include/private/autogen -I./include/pmix/autogen -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/BLD/opal/mca/pmix/pmix112/pmix -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/include -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/BLD/opal/mca/pmix/pmix112/pmix/include -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2 -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/BLD -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/include -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/BLD/opal/include -D_REENTRANT -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/BLD/opal/mca/hwloc/hwloc1112/hwloc/include -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/BLD/opal/mca/event/libevent2022/libevent/include -q64 -g -c /home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c -Wp,-qmakedep=gcc,-MFsrc/class/.deps/pmix_hash_table.TPlo  -qpic -DPIC -o src/class/.libs/pmix_hash_table.o
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;, line 73.15: 1506-343 (S) Redeclaration of opal_pmix_pmix112_pmix_hash_table_init differs from previous declaration on line 73 of &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.h&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;, line 73.15: 1506-050 (I) Return type &quot;enum {...}&quot; in redeclaration is not compatible with the previous return type &quot;int&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;, line 299.5: 1506-343 (S) Redeclaration of opal_pmix_pmix112_pmix_hash_table_remove_value_uint64 differs from previous declaration on line 181 of &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.h&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;, line 299.5: 1506-050 (I) Return type &quot;int&quot; in redeclaration is not compatible with the previous return type &quot;enum {...}&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;, line 365.5: 1506-343 (S) Redeclaration of opal_pmix_pmix112_pmix_hash_table_get_value_ptr differs from previous declaration on line 196 of &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.h&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;, line 365.5: 1506-050 (I) Return type &quot;int&quot; in redeclaration is not compatible with the previous return type &quot;enum {...}&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;, line 392.5: 1506-343 (S) Redeclaration of opal_pmix_pmix112_pmix_hash_table_set_value_ptr differs from previous declaration on line 209 of &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.h&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;, line 392.5: 1506-050 (I) Return type &quot;int&quot; in redeclaration is not compatible with the previous return type &quot;enum {...}&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;, line 433.5: 1506-343 (S) Redeclaration of opal_pmix_pmix112_pmix_hash_table_remove_value_ptr differs from previous declaration on line 220 of &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.h&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;, line 433.5: 1506-050 (I) Return type &quot;int&quot; in redeclaration is not compatible with the previous return type &quot;enum {...}&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;, line 466.1: 1506-343 (S) Redeclaration of opal_pmix_pmix112_pmix_hash_table_get_first_key_uint32 differs from previous declaration on line 245 of &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.h&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;, line 466.1: 1506-050 (I) Return type &quot;int&quot; in redeclaration is not compatible with the previous return type &quot;enum {...}&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;, line 493.1: 1506-343 (S) Redeclaration of opal_pmix_pmix112_pmix_hash_table_get_next_key_uint32 differs from previous declaration on line 263 of &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.h&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;, line 493.1: 1506-050 (I) Return type &quot;int&quot; in redeclaration is not compatible with the previous return type &quot;enum {...}&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;, line 538.1: 1506-343 (S) Redeclaration of opal_pmix_pmix112_pmix_hash_table_get_first_key_uint64 differs from previous declaration on line 281 of &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.h&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;, line 538.1: 1506-050 (I) Return type &quot;int&quot; in redeclaration is not compatible with the previous return type &quot;enum {...}&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;, line 565.1: 1506-343 (S) Redeclaration of opal_pmix_pmix112_pmix_hash_table_get_next_key_uint64 differs from previous declaration on line 299 of &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.h&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;, line 565.1: 1506-050 (I) Return type &quot;int&quot; in redeclaration is not compatible with the previous return type &quot;enum {...}&quot;.
</span><br>
<span class="quotelev1">&gt; make[4]: *** [src/class/pmix_hash_table.lo] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect that all of these functions should be returning the enum type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18887.php">http://www.open-mpi.org/community/lists/devel/2016/05/18887.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18888/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18889.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] misleading error message from configure"</a>
<li><strong>Previous message:</strong> <a href="18887.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] xlc build failure (pmix)"</a>
<li><strong>In reply to:</strong> <a href="18887.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] xlc build failure (pmix)"</a>
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
