<?
$subject_val = "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 06:13:42 2012" -->
<!-- isoreceived="20120215111342" -->
<!-- sent="Wed, 15 Feb 2012 03:13:37 -0800" -->
<!-- isosent="20120215111337" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failed when configured with --disable-hwloc" -->
<!-- id="CAMD57ofRV1HkV8=+Cz=mBjfoSRB8K+TbOfshSGW5Bp-bSduPOg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F3B0D72.1030008_at_lbl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 06:13:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10424.php">Ralph Castain: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>Previous message:</strong> <a href="10422.php">Paul Hargrove: "[OMPI devel] 1.5 branch build failure on Altix"</a>
<li><strong>In reply to:</strong> <a href="10415.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10424.php">Ralph Castain: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>Reply:</strong> <a href="10424.php">Ralph Castain: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul
<br>
<p>The rank_file component should not attempt to build if --without-hwloc is
<br>
given - I've fixed that now. Thanks for reporting it.
<br>
<p>With that fix, I was able to build the trunk on Mac - testing Linux now. I
<br>
haven't checked for the config.h confusion you report, though - just noting
<br>
that it built.
<br>
<p>On Tue, Feb 14, 2012 at 5:42 PM, Paul H. Hargrove &lt;PHHargrove_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/14/2012 5:10 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have configured the ompi-trunk (from last night's tarball: 1.7a1r25913)
</span><br>
<span class="quotelev2">&gt;&gt; with --without-hwloc.
</span><br>
<span class="quotelev2">&gt;&gt; Having done so, I see the following failure at build time:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   CC     rmaps_rank_file_component.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrove/OMPI/openmpi-**trunk-linux-mips64el//openmpi-**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/orte/mca/rmaps/rank_**file/rmaps_rank_file_compo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nent.c: In function 'orte_rmaps_rank_file_open':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrove/OMPI/openmpi-**trunk-linux-mips64el//openmpi-**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/orte/mca/rmaps/rank_**file/rmaps_rank_file_compo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nent.c:111: error: 'opal_hwloc_binding_policy' undeclared (first use in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrove/OMPI/openmpi-**trunk-linux-mips64el//openmpi-**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/orte/mca/rmaps/rank_**file/rmaps_rank_file_compo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nent.c:111: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrove/OMPI/openmpi-**trunk-linux-mips64el//openmpi-**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/orte/mca/rmaps/rank_**file/rmaps_rank_file_compo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nent.c:111: error: for each function it appears in.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrove/OMPI/openmpi-**trunk-linux-mips64el//openmpi-**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/orte/mca/rmaps/rank_**file/rmaps_rank_file_**component.c:111:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error: 'OPAL_BIND_TO_CPUSET' undeclared (first use in this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like this code is not &quot;aware&quot; that hwloc has been configured out.
</span><br>
<span class="quotelev2">&gt;&gt; This is not present in the 1.5 branch configured with identical arguments.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; The following appears to &quot;fix&quot; that, but I am uncertain if this is the
</span><br>
<span class="quotelev1">&gt; desired fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- orte/mca/rmaps/rank_file/**rmaps_rank_file_component.c~
</span><br>
<span class="quotelev2">&gt;&gt; 2012-02-14 17:25:07.653483222 -0800
</span><br>
<span class="quotelev2">&gt;&gt; +++ orte/mca/rmaps/rank_file/**rmaps_rank_file_component.c
</span><br>
<span class="quotelev2">&gt;&gt;  2012-02-14 17:25:28.803483261 -0800
</span><br>
<span class="quotelev2">&gt;&gt; @@ -107,8 +107,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;         ORTE_SET_MAPPING_POLICY(orte_**rmaps_base.mapping,
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_MAPPING_BYUSER);
</span><br>
<span class="quotelev2">&gt;&gt;         ORTE_SET_MAPPING_DIRECTIVE(**orte_rmaps_base.mapping,
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_MAPPING_GIVEN);
</span><br>
<span class="quotelev2">&gt;&gt; +#if OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev2">&gt;&gt;         /* we are going to bind to cpuset since the user is specifying
</span><br>
<span class="quotelev2">&gt;&gt; the cpus */
</span><br>
<span class="quotelev2">&gt;&gt;         OPAL_SET_BINDING_POLICY(opal_**hwloc_binding_policy,
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_BIND_TO_CPUSET);
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;         /* make us first */
</span><br>
<span class="quotelev2">&gt;&gt;         my_priority = 10000;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HOWEVER, I am now also seeing the following occurring ONLY when configured
</span><br>
<span class="quotelev1">&gt; with --disable-hwloc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Entering directory `/home/phargrov/openmpi-1.**
</span><br>
<span class="quotelev2">&gt;&gt; 7a1r25913/BLD2/opal/mca/event/**libevent2013'
</span><br>
<span class="quotelev2">&gt;&gt;  CC     libevent2013_module.lo
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../opal/mca/event/**libevent2013/libevent2013_**module.c:7:20:
</span><br>
<span class="quotelev2">&gt;&gt; error: config.h: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../opal/mca/event/**libevent2013/libevent2013_**module.c: In
</span><br>
<span class="quotelev2">&gt;&gt; function 'opal_event_init':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../opal/mca/event/**libevent2013/libevent2013_**module.c:243:
</span><br>
<span class="quotelev2">&gt;&gt; warning: ignoring return value of 'asprintf', declared with attribute
</span><br>
<span class="quotelev2">&gt;&gt; warn_unused_result
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [libevent2013_module.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems VERY odd to me that disabling hwloc should have that effect.
</span><br>
<span class="quotelev1">&gt; Looking deeper it appears that '#include &quot;config.h&quot;' in
</span><br>
<span class="quotelev1">&gt; libevent2013_module.c has been including the config.h from HWLOC, instead
</span><br>
<span class="quotelev1">&gt; of the one from libevent2013.  If one examines the -I options carefully,
</span><br>
<span class="quotelev1">&gt; you will see that $(builddr)/libevent is NOT in the include path, but that
</span><br>
<span class="quotelev1">&gt; is the location of the config.h generated by libevent's configure script!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10423/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10424.php">Ralph Castain: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>Previous message:</strong> <a href="10422.php">Paul Hargrove: "[OMPI devel] 1.5 branch build failure on Altix"</a>
<li><strong>In reply to:</strong> <a href="10415.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10424.php">Ralph Castain: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>Reply:</strong> <a href="10424.php">Ralph Castain: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
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
