<?
$subject_val = "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict	compiler flags";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 13:45:09 2009" -->
<!-- isoreceived="20091021174509" -->
<!-- sent="Wed, 21 Oct 2009 12:45:00 -0500" -->
<!-- isosent="20091021174500" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict	compiler flags" -->
<!-- id="4ADF489C.1090801_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0C03258C-2A53-4577-B116-5C2FF4CEC5F7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict	compiler flags<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 13:45:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0214.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0212.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>In reply to:</strong> <a href="0209.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict compiler flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0216.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict	compiler flags"</a>
<li><strong>Reply:</strong> <a href="0216.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict	compiler flags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/21/2009 11:59 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Can you send a copy of your stderr?  I don't get the warnings about
</span><br>
<span class="quotelev1">&gt; fgets output not getting checked.
</span><br>
<p>Here you go:
<br>
<p>libtool: compile:  gcc -DHAVE_CONFIG_H -I.
<br>
-I/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src
<br>
-I../include/private -I../include/hwloc
<br>
-I/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/include
<br>
-I../include -std=c99 -Wall -Wmissing-prototypes -Wundef -Wpointer-arith
<br>
-Wcast-align -O2 -Wall -Wextra -Wno-missing-field-initializers
<br>
-Wstrict-prototypes -Wmissing-prototypes -DGCC_WALL
<br>
-Wno-unused-parameter -Wno-unused-label -Wshadow -Wmissing-declarations
<br>
-Wno-long-long -Wfloat-equal -Wdeclaration-after-statement -Wundef
<br>
-Wno-endif-labels -Wpointer-arith -Wbad-function-cast -Wcast-align
<br>
-Wwrite-strings -Wno-sign-compare -Waggregate-return
<br>
-Wold-style-definition -Wno-multichar -Wno-deprecated-declarations
<br>
-Wpacked -Wnested-externs -Winvalid-pch -Wno-pointer-sign
<br>
-Wvariadic-macros -std=c89 -Wno-format-zero-length -Wno-type-limits
<br>
-D_POSIX_C_SOURCE=199506L -MT cpuset.lo -MD -MP -MF .deps/cpuset.Tpo -c
<br>
/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/cpuset.c
<br>
-o cpuset.o &gt;/dev/null 2&gt;&amp;1
<br>
/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/cpuset.c:
<br>
In function 'hwloc_snprintf':
<br>
/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/cpuset.c:37:
<br>
warning: implicit declaration of function 'vsnprintf'
<br>
/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/cpuset.c:37:
<br>
warning: nested extern declaration of 'vsnprintf'
<br>
/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/topology-linux.c:
<br>
In function 'hwloc_linux_set_thread_cpubind':
<br>
/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/topology-linux.c:170:
<br>
warning: ISO C90 forbids mixed declarations and code
<br>
/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/topology-linux.c:
<br>
In function 'hwloc_parse_sysfs_unsigned':
<br>
/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/topology-linux.c:241:
<br>
warning: ignoring return value of 'fgets', declared with attribute
<br>
warn_unused_result
<br>
/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/topology-linux.c:
<br>
In function 'hwloc_read_cpuset_mask':
<br>
/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/topology-linux.c:326:
<br>
warning: ignoring return value of 'fgets', declared with attribute
<br>
warn_unused_result
<br>
/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/topology-linux.c:346:
<br>
warning: ignoring return value of 'fgets', declared with attribute
<br>
warn_unused_result
<br>
/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/topology-linux.c:
<br>
In function 'look_cpuinfo':
<br>
/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/topology-linux.c:863:
<br>
warning: ignoring return value of 'fscanf', declared with attribute
<br>
warn_unused_result
<br>
/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/topology-linux.c:
<br>
In function 'hwloc__get_dmi_info':
<br>
/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/topology-linux.c:917:
<br>
warning: ignoring return value of 'fgets', declared with attribute
<br>
warn_unused_result
<br>
/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/topology-linux.c:931:
<br>
warning: ignoring return value of 'fgets', declared with attribute
<br>
warn_unused_result
<br>
<p>&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0214.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0212.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>In reply to:</strong> <a href="0209.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict compiler flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0216.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict	compiler flags"</a>
<li><strong>Reply:</strong> <a href="0216.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict	compiler flags"</a>
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
