<?
$subject_val = "[OMPI devel] [2.0.0rc2] xlc build failure (pmix)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 20:13:31 2016" -->
<!-- isoreceived="20160503001331" -->
<!-- sent="Mon, 2 May 2016 17:13:17 -0700" -->
<!-- isosent="20160503001317" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc2] xlc build failure (pmix)" -->
<!-- id="CAAvDA15vfoswOdXfRKG_2KxZr1fhmU6LujEmghrZEtoKS6_6mw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc2] xlc build failure (pmix)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 20:13:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18888.php">Ralph Castain: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (pmix)"</a>
<li><strong>Previous message:</strong> <a href="18886.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18888.php">Ralph Castain: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (pmix)"</a>
<li><strong>Reply:</strong> <a href="18888.php">Ralph Castain: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (pmix)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
AFTER fixing the inline asm problem detailed in
<br>
<a href="https://www.open-mpi.org/community/lists/devel/2016/05/18886.php">https://www.open-mpi.org/community/lists/devel/2016/05/18886.php</a>, I still
<br>
cannot build with xlc.
<br>
The issue arises in the pmix code and originates from a disagreement
<br>
between pmix_hash_table.h and pmix_hash_table.c.
<br>
<p>The header declares 8 functions with a return type of &quot;pmix_status_t&quot;
<br>
(which is an enum), while pmix_hash_table.c defines the same functions with
<br>
a return type of &quot;int&quot;.  Meanwhile 1 function has the &quot;opposite&quot; problem
<br>
(integer decl vs enum defn).
<br>
<p>The errors seen:
<br>
<p>libtool: compile:  xlc -DHAVE_CONFIG_H -I.
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix
<br>
-I./include/private/autogen -I./include/pmix/autogen
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/BLD/opal/mca/pmix/pmix112/pmix
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/include
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/BLD/opal/mca/pmix/pmix112/pmix/include
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/BLD
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/include
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/BLD/opal/include
<br>
-D_REENTRANT
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include
<br>
-I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/BLD/opal/mca/event/libevent2022/libevent/include
<br>
-q64 -g -c
<br>
/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c
<br>
-Wp,-qmakedep=gcc,-MFsrc/class/.deps/pmix_hash_table.TPlo  -qpic -DPIC -o
<br>
src/class/.libs/pmix_hash_table.o
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;,
<br>
line 73.15: 1506-343 (S) Redeclaration of
<br>
opal_pmix_pmix112_pmix_hash_table_init differs from previous declaration on
<br>
line 73 of
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.h&quot;.
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;,
<br>
line 73.15: 1506-050 (I) Return type &quot;enum {...}&quot; in redeclaration is not
<br>
compatible with the previous return type &quot;int&quot;.
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;,
<br>
line 299.5: 1506-343 (S) Redeclaration of
<br>
opal_pmix_pmix112_pmix_hash_table_remove_value_uint64 differs from previous
<br>
declaration on line 181 of
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.h&quot;.
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;,
<br>
line 299.5: 1506-050 (I) Return type &quot;int&quot; in redeclaration is not
<br>
compatible with the previous return type &quot;enum {...}&quot;.
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;,
<br>
line 365.5: 1506-343 (S) Redeclaration of
<br>
opal_pmix_pmix112_pmix_hash_table_get_value_ptr differs from previous
<br>
declaration on line 196 of
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.h&quot;.
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;,
<br>
line 365.5: 1506-050 (I) Return type &quot;int&quot; in redeclaration is not
<br>
compatible with the previous return type &quot;enum {...}&quot;.
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;,
<br>
line 392.5: 1506-343 (S) Redeclaration of
<br>
opal_pmix_pmix112_pmix_hash_table_set_value_ptr differs from previous
<br>
declaration on line 209 of
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.h&quot;.
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;,
<br>
line 392.5: 1506-050 (I) Return type &quot;int&quot; in redeclaration is not
<br>
compatible with the previous return type &quot;enum {...}&quot;.
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;,
<br>
line 433.5: 1506-343 (S) Redeclaration of
<br>
opal_pmix_pmix112_pmix_hash_table_remove_value_ptr differs from previous
<br>
declaration on line 220 of
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.h&quot;.
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;,
<br>
line 433.5: 1506-050 (I) Return type &quot;int&quot; in redeclaration is not
<br>
compatible with the previous return type &quot;enum {...}&quot;.
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;,
<br>
line 466.1: 1506-343 (S) Redeclaration of
<br>
opal_pmix_pmix112_pmix_hash_table_get_first_key_uint32 differs from
<br>
previous declaration on line 245 of
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.h&quot;.
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;,
<br>
line 466.1: 1506-050 (I) Return type &quot;int&quot; in redeclaration is not
<br>
compatible with the previous return type &quot;enum {...}&quot;.
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;,
<br>
line 493.1: 1506-343 (S) Redeclaration of
<br>
opal_pmix_pmix112_pmix_hash_table_get_next_key_uint32 differs from previous
<br>
declaration on line 263 of
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.h&quot;.
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;,
<br>
line 493.1: 1506-050 (I) Return type &quot;int&quot; in redeclaration is not
<br>
compatible with the previous return type &quot;enum {...}&quot;.
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;,
<br>
line 538.1: 1506-343 (S) Redeclaration of
<br>
opal_pmix_pmix112_pmix_hash_table_get_first_key_uint64 differs from
<br>
previous declaration on line 281 of
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.h&quot;.
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;,
<br>
line 538.1: 1506-050 (I) Return type &quot;int&quot; in redeclaration is not
<br>
compatible with the previous return type &quot;enum {...}&quot;.
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;,
<br>
line 565.1: 1506-343 (S) Redeclaration of
<br>
opal_pmix_pmix112_pmix_hash_table_get_next_key_uint64 differs from previous
<br>
declaration on line 299 of
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.h&quot;.
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/pmix/pmix112/pmix/src/class/pmix_hash_table.c&quot;,
<br>
line 565.1: 1506-050 (I) Return type &quot;int&quot; in redeclaration is not
<br>
compatible with the previous return type &quot;enum {...}&quot;.
<br>
make[4]: *** [src/class/pmix_hash_table.lo] Error 1
<br>
<p><p>I suspect that all of these functions should be returning the enum type.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18887/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18888.php">Ralph Castain: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (pmix)"</a>
<li><strong>Previous message:</strong> <a href="18886.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18888.php">Ralph Castain: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (pmix)"</a>
<li><strong>Reply:</strong> <a href="18888.php">Ralph Castain: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (pmix)"</a>
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
