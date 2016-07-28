<?
$subject_val = "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 20:42:23 2012" -->
<!-- isoreceived="20120215014223" -->
<!-- sent="Tue, 14 Feb 2012 17:42:10 -0800" -->
<!-- isosent="20120215014210" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failed when configured with --disable-hwloc" -->
<!-- id="4F3B0D72.1030008_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F3B0606.1080900_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk build failed when configured with --disable-hwloc<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-14 20:42:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10416.php">Paul H. Hargrove: "[OMPI devel] Fixes for MIPS assembly [w/ PATCHES]"</a>
<li><strong>Previous message:</strong> <a href="10414.php">Paul H. Hargrove: "[OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>In reply to:</strong> <a href="10414.php">Paul H. Hargrove: "[OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10423.php">Ralph Castain: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>Reply:</strong> <a href="10423.php">Ralph Castain: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/14/2012 5:10 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; I have configured the ompi-trunk (from last night's tarball: 
</span><br>
<span class="quotelev1">&gt; 1.7a1r25913) with --without-hwloc.
</span><br>
<span class="quotelev1">&gt; Having done so, I see the following failure at build time:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   CC     rmaps_rank_file_component.lo
</span><br>
<span class="quotelev2">&gt;&gt; /home/hargrove/OMPI/openmpi-trunk-linux-mips64el//openmpi-trunk/orte/mca/rmaps/rank_file/rmaps_rank_file_compo 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; nent.c: In function 'orte_rmaps_rank_file_open':
</span><br>
<span class="quotelev2">&gt;&gt; /home/hargrove/OMPI/openmpi-trunk-linux-mips64el//openmpi-trunk/orte/mca/rmaps/rank_file/rmaps_rank_file_compo 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; nent.c:111: error: 'opal_hwloc_binding_policy' undeclared (first use 
</span><br>
<span class="quotelev2">&gt;&gt; in this function)
</span><br>
<span class="quotelev2">&gt;&gt; /home/hargrove/OMPI/openmpi-trunk-linux-mips64el//openmpi-trunk/orte/mca/rmaps/rank_file/rmaps_rank_file_compo 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; nent.c:111: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev2">&gt;&gt; /home/hargrove/OMPI/openmpi-trunk-linux-mips64el//openmpi-trunk/orte/mca/rmaps/rank_file/rmaps_rank_file_compo 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; nent.c:111: error: for each function it appears in.)
</span><br>
<span class="quotelev2">&gt;&gt; /home/hargrove/OMPI/openmpi-trunk-linux-mips64el//openmpi-trunk/orte/mca/rmaps/rank_file/rmaps_rank_file_component.c:111: 
</span><br>
<span class="quotelev2">&gt;&gt; error: 'OPAL_BIND_TO_CPUSET' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like this code is not &quot;aware&quot; that hwloc has been configured out.
</span><br>
<span class="quotelev1">&gt; This is not present in the 1.5 branch configured with identical 
</span><br>
<span class="quotelev1">&gt; arguments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The following appears to &quot;fix&quot; that, but I am uncertain if this is the 
<br>
desired fix.
<br>
<span class="quotelev1">&gt; --- orte/mca/rmaps/rank_file/rmaps_rank_file_component.c~       
</span><br>
<span class="quotelev1">&gt; 2012-02-14 17:25:07.653483222 -0800
</span><br>
<span class="quotelev1">&gt; +++ orte/mca/rmaps/rank_file/rmaps_rank_file_component.c        
</span><br>
<span class="quotelev1">&gt; 2012-02-14 17:25:28.803483261 -0800
</span><br>
<span class="quotelev1">&gt; @@ -107,8 +107,10 @@
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          ORTE_SET_MAPPING_POLICY(orte_rmaps_base.mapping, 
</span><br>
<span class="quotelev1">&gt; ORTE_MAPPING_BYUSER);
</span><br>
<span class="quotelev1">&gt;          ORTE_SET_MAPPING_DIRECTIVE(orte_rmaps_base.mapping, 
</span><br>
<span class="quotelev1">&gt; ORTE_MAPPING_GIVEN);
</span><br>
<span class="quotelev1">&gt; +#if OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev1">&gt;          /* we are going to bind to cpuset since the user is 
</span><br>
<span class="quotelev1">&gt; specifying the cpus */
</span><br>
<span class="quotelev1">&gt;          OPAL_SET_BINDING_POLICY(opal_hwloc_binding_policy, 
</span><br>
<span class="quotelev1">&gt; OPAL_BIND_TO_CPUSET);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;          /* make us first */
</span><br>
<span class="quotelev1">&gt;          my_priority = 10000;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<p><p>HOWEVER, I am now also seeing the following occurring ONLY when 
<br>
configured with --disable-hwloc:
<br>
<span class="quotelev1">&gt; make[1]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/home/phargrov/openmpi-1.7a1r25913/BLD2/opal/mca/event/libevent2013'
</span><br>
<span class="quotelev1">&gt;   CC     libevent2013_module.lo
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/event/libevent2013/libevent2013_module.c:7:20: 
</span><br>
<span class="quotelev1">&gt; error: config.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/event/libevent2013/libevent2013_module.c: In 
</span><br>
<span class="quotelev1">&gt; function 'opal_event_init':
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/event/libevent2013/libevent2013_module.c:243: 
</span><br>
<span class="quotelev1">&gt; warning: ignoring return value of 'asprintf', declared with attribute 
</span><br>
<span class="quotelev1">&gt; warn_unused_result
</span><br>
<span class="quotelev1">&gt; make[1]: *** [libevent2013_module.lo] Error 1
</span><br>
<p>It seems VERY odd to me that disabling hwloc should have that effect.
<br>
Looking deeper it appears that '#include &quot;config.h&quot;' in 
<br>
libevent2013_module.c has been including the config.h from HWLOC, 
<br>
instead of the one from libevent2013.  If one examines the -I options 
<br>
carefully, you will see that $(builddr)/libevent is NOT in the include 
<br>
path, but that is the location of the config.h generated by libevent's 
<br>
configure script!
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10416.php">Paul H. Hargrove: "[OMPI devel] Fixes for MIPS assembly [w/ PATCHES]"</a>
<li><strong>Previous message:</strong> <a href="10414.php">Paul H. Hargrove: "[OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>In reply to:</strong> <a href="10414.php">Paul H. Hargrove: "[OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10423.php">Ralph Castain: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>Reply:</strong> <a href="10423.php">Ralph Castain: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
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
