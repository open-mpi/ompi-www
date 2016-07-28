<?
$subject_val = "[OMPI devel] Open MPI on Cray XC30 status";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 03:04:41 2013" -->
<!-- isoreceived="20130129080441" -->
<!-- sent="Tue, 29 Jan 2013 00:04:36 -0800" -->
<!-- isosent="20130129080436" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI on Cray XC30 status" -->
<!-- id="CAAvDA15CG-6EEg5XZyQTzQXUDC-T-80iscq8wWEboVWv6sg7tw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI on Cray XC30 status<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-29 03:04:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12059.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Previous message:</strong> <a href="12057.php">Joshua Ladd: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, I am now on the openmpi-1.9a1r27954 tarball.
<br>
In order to build OMPI and compile apps on this machine I must
<br>
<p>1) edit the xe6 platform to --disable-shared/--enable-static (site-specific)
<br>
<p>2) edit the xe6 platform file to provide a full path to the alps headers
<br>
because the logic in orte_check_alps.m4 for default values is wrong
<br>
<p>3) edit the xe6 platform file to remove with_devel_headers=yes because
<br>
--with-devel-headers breaks &quot;make install&quot;
<br>
<p>4) edit configure (!!!) to allow ras_alps_CPPFLAGS (and other vars) to get
<br>
set at configure time
<br>
<p>5) edit orte/mca/ras/alps/ras_alps_component.c and/or
<br>
orte/mca/ras/alps/ras-alps-command.sh with the proper path to apstat
<br>
(perhaps only one needs to be edited?)
<br>
<p>Item (1) is due to site differences, and is not an OMPI bug.
<br>
The other 4 have all been reported in one form or another on this list.
<br>
<p>Now, the *next* bug is the following:
<br>
<p><span class="quotelev1">&gt; $ ./INSTALL/bin/mpirun -mca ras_base_verbose 1 -mca orte_debug_verbose 1
</span><br>
<span class="quotelev1">&gt; -np 2 ./ring_c 2&gt;&amp;1 | tee -a log
</span><br>
<span class="quotelev1">&gt; [nid00704:21984] ras:alps:allocate: Trying ALPS configuration file:
</span><br>
<span class="quotelev1">&gt; &quot;/etc/sysconfig/alps&quot;
</span><br>
<span class="quotelev1">&gt; [nid00704:21984] ras:alps:allocate: parser_ini
</span><br>
<span class="quotelev1">&gt; [nid00704:21984] ras:alps:allocate: Trying ALPS configuration file:
</span><br>
<span class="quotelev1">&gt; &quot;/etc/alps.conf&quot;
</span><br>
<span class="quotelev1">&gt; [nid00704:21984] ras:alps:allocate: Skipping ALPS configuration file:
</span><br>
<span class="quotelev1">&gt; &quot;/etc/alps.conf&quot; (No such file or directory).
</span><br>
<span class="quotelev1">&gt; [nid00704:21984] ras:alps:allocate: Could not locate ALPS scheduler file.
</span><br>
<span class="quotelev1">&gt; [nid00704:21984] [[8668,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ../../../../orte/mca/ras/base/ras_base_allocate.c at line 178
</span><br>
<p><p><p>My best guess is that this is related to something Ralph said in
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2013/01/11989.php">http://www.open-mpi.org/community/lists/devel/2013/01/11989.php</a>
<br>
<p><span class="quotelev1">&gt; I'm currently tracking down a problem on the Cray XE6 - it appears that
</span><br>
<span class="quotelev1">&gt; recent OS release changed the way alps stores allocation info :-(
</span><br>
<p><p>Looking at the debug output prior to the error, and examining the system, I
<br>
made the following 1-line addition:
<br>
--- openmpi-1.9a1r27954/orte/mca/ras/alps/ras_alps_module.c~    2013-01-28
<br>
23:54:31.443749000 -0800
<br>
+++ openmpi-1.9a1r27954/orte/mca/ras/alps/ras_alps_module.c     2013-01-28
<br>
23:54:34.770766635 -0800
<br>
@@ -74,6 +74,7 @@ static int parser_separated_columns(char
<br>
&nbsp;static const orte_ras_alps_sysconfig_t sysconfigs[] = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{&quot;/etc/sysconfig/alps&quot;, &quot;ALPS_SHARED_DIR_PATH&quot;, parser_ini},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{&quot;/etc/alps.conf&quot;     , &quot;sharedDir&quot;           ,
<br>
parser_separated_columns},
<br>
+    {&quot;/etc/opt/cray/alps/alps.conf&quot;, &quot;sharedDir&quot;  ,
<br>
parser_separated_columns},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* must be last element */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{NULL                 , NULL                  , NULL}
<br>
&nbsp;};
<br>
<p>That appears to work for locating the allocation:
<br>
<p><span class="quotelev1">&gt; $ ./INSTALL/bin/mpirun -mca ras_base_verbose 1 -mca orte_debug_verbose 1
</span><br>
<span class="quotelev1">&gt; -np 2 ./ring_c 2&gt;&amp;1 | tee -a log
</span><br>
<span class="quotelev1">&gt; [nid00320:22990] ras:alps:allocate: Trying ALPS configuration file:
</span><br>
<span class="quotelev1">&gt; &quot;/etc/sysconfig/alps&quot;
</span><br>
<span class="quotelev1">&gt; [nid00320:22990] ras:alps:allocate: parser_ini
</span><br>
<span class="quotelev1">&gt; [nid00320:22990] ras:alps:allocate: Trying ALPS configuration file:
</span><br>
<span class="quotelev1">&gt; &quot;/etc/alps.conf&quot;
</span><br>
<span class="quotelev1">&gt; [nid00320:22990] ras:alps:allocate: Skipping ALPS configuration file:
</span><br>
<span class="quotelev1">&gt; &quot;/etc/alps.conf&quot; (No such file or directory).
</span><br>
<span class="quotelev1">&gt; [nid00320:22990] ras:alps:allocate: Trying ALPS configuration file:
</span><br>
<span class="quotelev1">&gt; &quot;/etc/opt/cray/alps/alps.conf&quot;
</span><br>
<span class="quotelev1">&gt; [nid00320:22990] ras:alps:allocate: parser_separated_columns
</span><br>
<span class="quotelev1">&gt; [nid00320:22990] ras:alps:allocate: Located ALPS scheduler file:
</span><br>
<span class="quotelev1">&gt; &quot;/ufs/alps_shared/appinfo&quot;
</span><br>
<span class="quotelev1">&gt; [nid00320:22990] ras:alps:allocate: begin processing appinfo file
</span><br>
<span class="quotelev1">&gt; [nid00320:22990] ras:alps:allocate: file /ufs/alps_shared/appinfo read
</span><br>
<span class="quotelev1">&gt; [nid00320:22990] ras:alps:allocate: 3 entries in file
</span><br>
<span class="quotelev1">&gt; [nid00320:22990] ras:alps:allocate: read data for resId 26 - myId 41
</span><br>
<span class="quotelev1">&gt; [nid00320:22990] ras:alps:allocate: read data for resId 26 - myId 41
</span><br>
<span class="quotelev1">&gt; [nid00320:22990] ras:alps:allocate: read data for resId 41 - myId 41
</span><br>
<span class="quotelev1">&gt; [nid00320:22990] ras:alps:allocate: success
</span><br>
<p><p>But wait, where is the application output?
<br>
Did anything even run?
<br>
I honestly don't know where to go from here.
<br>
<p>Please let me know what I can do to help move forward on any of these
<br>
issues.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12058/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12059.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Previous message:</strong> <a href="12057.php">Joshua Ladd: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
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
