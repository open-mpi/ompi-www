<?
$subject_val = "[OMPI devel] how to compile codes in orte/test/system";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 02:58:33 2012" -->
<!-- isoreceived="20121206075833" -->
<!-- sent="Thu, 6 Dec 2012 02:58:01 -0500" -->
<!-- isosent="20121206075801" -->
<!-- name="Cao, Jimmy" -->
<!-- email="Jimmy.Cao_at_[hidden]" -->
<!-- subject="[OMPI devel] how to compile codes in orte/test/system" -->
<!-- id="CCE67109.1E11%jimmy.cao_at_emc.com" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] how to compile codes in orte/test/system<br>
<strong>From:</strong> Cao, Jimmy (<em>Jimmy.Cao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-06 02:58:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11835.php">Ralph Castain: "Re: [OMPI devel] how to compile codes in orte/test/system"</a>
<li><strong>Previous message:</strong> <a href="11833.php">Christopher Samuel: "[OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11835.php">Ralph Castain: "Re: [OMPI devel] how to compile codes in orte/test/system"</a>
<li><strong>Reply:</strong> <a href="11835.php">Ralph Castain: "Re: [OMPI devel] how to compile codes in orte/test/system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>Anyone can tell me how to compile codes in orte/test/system? There is a Makefile under the directory.  When I try to compile these test case with that Makefile, I got the following errors.
<br>
It seems  the header file of hwloc and libevent is missing.
<br>
<p>=========================================
<br>
ortecc -g    sigusr_trap.c   -o sigusr_trap
<br>
In file included from /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc142.h:20,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/opal/mca/hwloc/hwloc.h:148,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/orte/util/proc_info.h:44,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from sigusr_trap.c:13:
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:49:34: error:
<br>
<p>/autogen/config.h: No such file or directory
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:58:26: error: hwloc/rename.h: No such file or directory
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:64:26: error: hwloc/bitmap.h: No such file or directory
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:65:26: error: hwloc/cpuset.h: No such file or directory
<br>
In file included from /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc142.h:20,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/opal/mca/hwloc/hwloc.h:148,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/orte/util/proc_info.h:44,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from sigusr_trap.c:13:
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:81: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;unsigned&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:128: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;hwloc_cpuset_t&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:130: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;hwloc_const_cpuset_t&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:145: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;hwloc_nodeset_t&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:148: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;hwloc_const_nodeset_t&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:292: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
In file included from /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc142.h:20,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/opal/mca/hwloc/hwloc.h:148,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/orte/util/proc_info.h:44,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from sigusr_trap.c:13:
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:310: error: expected specifier-qualifier-list before &#145;hwloc_uint64_t&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:370: error: expected specifier-qualifier-list before &#145;hwloc_cpuset_t&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:476: error: expected specifier-qualifier-list before &#145;hwloc_uint64_t&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:570: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:584: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:590: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;void&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:603: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;void&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:639: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:649: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:658: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:726: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:742: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:768: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:794: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:817: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:840: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:851: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:870: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:954: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;const&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:970: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:981: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:984: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;void&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:997: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;hwloc_obj_t&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1011: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;hwloc_obj_t&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1044: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1063: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;unsigned&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1084: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1098: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;hwloc_obj_type_t&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1102: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;unsigned&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1109: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1111: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1129: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1145: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;hwloc_obj_t&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1153: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;hwloc_obj_t&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1155: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;hwloc_obj_t&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1175: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;const&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1181: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;hwloc_obj_type_t&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1193: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1207: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1230: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1241: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1249: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;const&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1251: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;const&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1268: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;void&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1388: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1395: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1404: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1417: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1427: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1438: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1448: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1466: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1681: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1696: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1738: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1785: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1796: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1807: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1845: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1886: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1894: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1902: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1926: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1952: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1961: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;void&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1972: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;void&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1983: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;void&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1988: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:2020: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:2038: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;hwloc_obj_t&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:2050:26: error: hwloc/helper.h: No such file or directory
<br>
In file included from /usr/local/include/openmpi/orte/util/proc_info.h:44,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from sigusr_trap.c:13:
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc.h:159: error: expected specifier-qualifier-list before &#145;hwloc_cpuset_t&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc.h:177: error: expected specifier-qualifier-list before &#145;hwloc_cpuset_t&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/hwloc.h:221: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;opal_hwloc_my_cpuset&#146;
<br>
In file included from /usr/local/include/openmpi/opal/mca/event/libevent2019/libevent2019.h:57,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/opal/mca/event/event.h:94,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/opal/runtime/opal_cr.h:28,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/opal/threads/condition.h:40,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/opal/threads/threads.h:38,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/opal/class/opal_ring_buffer.h:29,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/orte/runtime/orte_globals.h:41,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from sigusr_trap.c:14:
<br>
/usr/local/include/openmpi/opal/mca/event/libevent2019/libevent/event.h:57:20: error: evutil.h: No such file or directory
<br>
In file included from /usr/local/include/event2/event_struct.h:52,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/opal/mca/event/libevent2019/libevent/event.h:70,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/opal/mca/event/libevent2019/libevent2019.h:57,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/opal/mca/event/event.h:94,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/opal/runtime/opal_cr.h:28,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/opal/threads/condition.h:40,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/opal/threads/threads.h:38,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/opal/class/opal_ring_buffer.h:29,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/include/openmpi/orte/runtime/orte_globals.h:41,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from sigusr_trap.c:14:
<br>
/usr/local/include/event2/util.h:41:25: error: opal_rename.h: No such file or directory
<br>
In file included from /usr/local/include/openmpi/orte/runtime/orte_globals.h:45,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from sigusr_trap.c:14:
<br>
/usr/local/include/openmpi/opal/mca/hwloc/base/base.h:94: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;opal_hwloc_base_given_cpus&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/base/base.h:173: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;opal_hwloc_base_get_available_cpus&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/base/base.h:193: error: expected &#145;)&#146; before &#145;cpus&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/base/base.h:211: error: expected &#145;)&#146; before &#145;cpuset&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/base/base.h:219: error: expected declaration specifiers or &#145;...&#146; before &#145;hwloc_cpuset_t&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/base/base.h:270: error: expected declaration specifiers or &#145;...&#146; before &#145;hwloc_cpuset_t&#146;
<br>
/usr/local/include/openmpi/opal/mca/hwloc/base/base.h:280: error: expected declaration specifiers or &#145;...&#146; before &#145;hwloc_cpuset_t&#146;
<br>
In file included from sigusr_trap.c:14:
<br>
/usr/local/include/openmpi/orte/runtime/orte_globals.h:78: error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;orte_proc_applied_binding&#146;
<br>
make: *** [sigusr_trap] Error 1
<br>
====================================================
<br>
<p>Thanks
<br>
Jimmy
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11834/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11835.php">Ralph Castain: "Re: [OMPI devel] how to compile codes in orte/test/system"</a>
<li><strong>Previous message:</strong> <a href="11833.php">Christopher Samuel: "[OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11835.php">Ralph Castain: "Re: [OMPI devel] how to compile codes in orte/test/system"</a>
<li><strong>Reply:</strong> <a href="11835.php">Ralph Castain: "Re: [OMPI devel] how to compile codes in orte/test/system"</a>
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
