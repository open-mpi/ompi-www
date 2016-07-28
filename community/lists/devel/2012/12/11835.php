<?
$subject_val = "Re: [OMPI devel] how to compile codes in orte/test/system";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 05:13:43 2012" -->
<!-- isoreceived="20121206101343" -->
<!-- sent="Thu, 6 Dec 2012 02:13:37 -0800" -->
<!-- isosent="20121206101337" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] how to compile codes in orte/test/system" -->
<!-- id="CAMD57oeRC-RvLWkaUJhyQy0Xo874oTWKHUzRi8GF+vTMhjo_xQ_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CCE67109.1E11%jimmy.cao_at_emc.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] how to compile codes in orte/test/system<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-06 05:13:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11836.php">George Bosilca: "Re: [OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="11834.php">Cao, Jimmy: "[OMPI devel] how to compile codes in orte/test/system"</a>
<li><strong>In reply to:</strong> <a href="11834.php">Cao, Jimmy: "[OMPI devel] how to compile codes in orte/test/system"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jimmy
<br>
<p>You need to configure --with-devel-headers to install the necessary headers.
<br>
Ralph
<br>
<p><p><p>On Wed, Dec 5, 2012 at 11:58 PM, Cao, Jimmy &lt;Jimmy.Cao_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone can tell me how to compile codes in orte/test/system? There is a
</span><br>
<span class="quotelev1">&gt; Makefile under the directory.  When I try to compile these test case with
</span><br>
<span class="quotelev1">&gt; that Makefile, I got the following errors.
</span><br>
<span class="quotelev1">&gt; It seems  the header file of hwloc and libevent is missing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================================
</span><br>
<span class="quotelev1">&gt; ortecc -g    sigusr_trap.c   -o sigusr_trap
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc142.h:20,
</span><br>
<span class="quotelev1">&gt;                  from
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc.h:148,
</span><br>
<span class="quotelev1">&gt;                  from /usr/local/include/openmpi/orte/util/proc_info.h:44,
</span><br>
<span class="quotelev1">&gt;                  from sigusr_trap.c:13:
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:49:34:
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /autogen/config.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:58:26:
</span><br>
<span class="quotelev1">&gt; error: hwloc/rename.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:64:26:
</span><br>
<span class="quotelev1">&gt; error: hwloc/bitmap.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:65:26:
</span><br>
<span class="quotelev1">&gt; error: hwloc/cpuset.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc142.h:20,
</span><br>
<span class="quotelev1">&gt;                  from
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc.h:148,
</span><br>
<span class="quotelev1">&gt;                  from /usr/local/include/openmpi/orte/util/proc_info.h:44,
</span><br>
<span class="quotelev1">&gt;                  from sigusr_trap.c:13:
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:81:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;unsigned&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:128:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before
</span><br>
<span class="quotelev1">&gt; &#145;hwloc_cpuset_t&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:130:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before
</span><br>
<span class="quotelev1">&gt; &#145;hwloc_const_cpuset_t&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:145:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before
</span><br>
<span class="quotelev1">&gt; &#145;hwloc_nodeset_t&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:148:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before
</span><br>
<span class="quotelev1">&gt; &#145;hwloc_const_nodeset_t&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:292:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc142.h:20,
</span><br>
<span class="quotelev1">&gt;                  from
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc.h:148,
</span><br>
<span class="quotelev1">&gt;                  from /usr/local/include/openmpi/orte/util/proc_info.h:44,
</span><br>
<span class="quotelev1">&gt;                  from sigusr_trap.c:13:
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:310:
</span><br>
<span class="quotelev1">&gt; error: expected specifier-qualifier-list before &#145;hwloc_uint64_t&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:370:
</span><br>
<span class="quotelev1">&gt; error: expected specifier-qualifier-list before &#145;hwloc_cpuset_t&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:476:
</span><br>
<span class="quotelev1">&gt; error: expected specifier-qualifier-list before &#145;hwloc_uint64_t&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:570:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:584:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:590:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;void&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:603:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;void&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:639:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:649:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:658:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:726:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:742:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:768:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:794:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:817:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:840:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:851:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:870:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:954:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;const&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:970:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:981:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:984:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;void&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:997:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;hwloc_obj_t&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1011:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;hwloc_obj_t&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1044:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1063:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;unsigned&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1084:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1098:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before
</span><br>
<span class="quotelev1">&gt; &#145;hwloc_obj_type_t&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1102:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;unsigned&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1109:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1111:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1129:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1145:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;hwloc_obj_t&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1153:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;hwloc_obj_t&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1155:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;hwloc_obj_t&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1175:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;const&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1181:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before
</span><br>
<span class="quotelev1">&gt; &#145;hwloc_obj_type_t&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1193:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1207:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1230:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1241:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1249:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;const&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1251:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;const&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1268:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;void&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1388:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1395:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1404:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1417:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1427:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1438:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1448:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1466:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1681:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1696:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1738:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1785:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1796:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1807:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1845:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1886:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1894:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1902:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1926:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1952:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1961:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;void&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1972:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;void&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1983:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;void&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:1988:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:2020:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:2038:
</span><br>
<span class="quotelev1">&gt; error: expected &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;hwloc_obj_t&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc142/hwloc/include/hwloc.h:2050:26:
</span><br>
<span class="quotelev1">&gt; error: hwloc/helper.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; In file included from /usr/local/include/openmpi/orte/util/proc_info.h:44,
</span><br>
<span class="quotelev1">&gt;                  from sigusr_trap.c:13:
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc.h:159: error: expected
</span><br>
<span class="quotelev1">&gt; specifier-qualifier-list before &#145;hwloc_cpuset_t&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc.h:177: error: expected
</span><br>
<span class="quotelev1">&gt; specifier-qualifier-list before &#145;hwloc_cpuset_t&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/hwloc.h:221: error: expected
</span><br>
<span class="quotelev1">&gt; &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;opal_hwloc_my_cpuset&#146;
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/event/libevent2019/libevent2019.h:57,
</span><br>
<span class="quotelev1">&gt;                  from /usr/local/include/openmpi/opal/mca/event/event.h:94,
</span><br>
<span class="quotelev1">&gt;                  from /usr/local/include/openmpi/opal/runtime/opal_cr.h:28,
</span><br>
<span class="quotelev1">&gt;                  from
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/threads/condition.h:40,
</span><br>
<span class="quotelev1">&gt;                  from /usr/local/include/openmpi/opal/threads/threads.h:38,
</span><br>
<span class="quotelev1">&gt;                  from
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/class/opal_ring_buffer.h:29,
</span><br>
<span class="quotelev1">&gt;                  from
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/orte/runtime/orte_globals.h:41,
</span><br>
<span class="quotelev1">&gt;                  from sigusr_trap.c:14:
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/event/libevent2019/libevent/event.h:57:20:
</span><br>
<span class="quotelev1">&gt; error: evutil.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; In file included from /usr/local/include/event2/event_struct.h:52,
</span><br>
<span class="quotelev1">&gt;                  from
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/event/libevent2019/libevent/event.h:70,
</span><br>
<span class="quotelev1">&gt;                  from
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/event/libevent2019/libevent2019.h:57,
</span><br>
<span class="quotelev1">&gt;                  from /usr/local/include/openmpi/opal/mca/event/event.h:94,
</span><br>
<span class="quotelev1">&gt;                  from /usr/local/include/openmpi/opal/runtime/opal_cr.h:28,
</span><br>
<span class="quotelev1">&gt;                  from
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/threads/condition.h:40,
</span><br>
<span class="quotelev1">&gt;                  from /usr/local/include/openmpi/opal/threads/threads.h:38,
</span><br>
<span class="quotelev1">&gt;                  from
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/class/opal_ring_buffer.h:29,
</span><br>
<span class="quotelev1">&gt;                  from
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/orte/runtime/orte_globals.h:41,
</span><br>
<span class="quotelev1">&gt;                  from sigusr_trap.c:14:
</span><br>
<span class="quotelev1">&gt; /usr/local/include/event2/util.h:41:25: error: opal_rename.h: No such file
</span><br>
<span class="quotelev1">&gt; or directory
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/orte/runtime/orte_globals.h:45,
</span><br>
<span class="quotelev1">&gt;                  from sigusr_trap.c:14:
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/base/base.h:94: error: expected
</span><br>
<span class="quotelev1">&gt; &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;opal_hwloc_base_given_cpus&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/base/base.h:173: error: expected
</span><br>
<span class="quotelev1">&gt; &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before
</span><br>
<span class="quotelev1">&gt; &#145;opal_hwloc_base_get_available_cpus&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/base/base.h:193: error: expected
</span><br>
<span class="quotelev1">&gt; &#145;)&#146; before &#145;cpus&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/base/base.h:211: error: expected
</span><br>
<span class="quotelev1">&gt; &#145;)&#146; before &#145;cpuset&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/base/base.h:219: error: expected
</span><br>
<span class="quotelev1">&gt; declaration specifiers or &#145;...&#146; before &#145;hwloc_cpuset_t&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/base/base.h:270: error: expected
</span><br>
<span class="quotelev1">&gt; declaration specifiers or &#145;...&#146; before &#145;hwloc_cpuset_t&#146;
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/opal/mca/hwloc/base/base.h:280: error: expected
</span><br>
<span class="quotelev1">&gt; declaration specifiers or &#145;...&#146; before &#145;hwloc_cpuset_t&#146;
</span><br>
<span class="quotelev1">&gt; In file included from sigusr_trap.c:14:
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/orte/runtime/orte_globals.h:78: error: expected
</span><br>
<span class="quotelev1">&gt; &#145;=&#146;, &#145;,&#146;, &#145;;&#146;, &#145;asm&#146; or &#145;__attribute__&#146; before &#145;orte_proc_applied_binding&#146;
</span><br>
<span class="quotelev1">&gt; make: *** [sigusr_trap] Error 1
</span><br>
<span class="quotelev1">&gt; ====================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Jimmy
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11835/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11836.php">George Bosilca: "Re: [OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="11834.php">Cao, Jimmy: "[OMPI devel] how to compile codes in orte/test/system"</a>
<li><strong>In reply to:</strong> <a href="11834.php">Cao, Jimmy: "[OMPI devel] how to compile codes in orte/test/system"</a>
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
