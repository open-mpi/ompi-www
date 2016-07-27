<?
$subject_val = "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict	compiler flags";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 14:14:21 2009" -->
<!-- isoreceived="20091021181421" -->
<!-- sent="Wed, 21 Oct 2009 14:14:16 -0400" -->
<!-- isosent="20091021181416" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict	compiler flags" -->
<!-- id="7F60265F-4A3B-427F-BAE5-C7466C60621E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ADF489C.1090801_at_mcs.anl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 14:14:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0217.php">Jeff Squyres: "[hwloc-devel] merging to v0.9"</a>
<li><strong>Previous message:</strong> <a href="0215.php">Jeff Squyres: "[hwloc-devel] Trac ticket mails"</a>
<li><strong>In reply to:</strong> <a href="0213.php">Pavan Balaji: "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict	compiler flags"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cool; I filed #18 and #19 about these.  I'll fix the &quot;mixed  
<br>
declarations and code&quot; issue right now.
<br>
<p><p>On Oct 21, 2009, at 1:45 PM, Pavan Balaji wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/21/2009 11:59 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Can you send a copy of your stderr?  I don't get the warnings about
</span><br>
<span class="quotelev2">&gt; &gt; fgets output not getting checked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here you go:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src
</span><br>
<span class="quotelev1">&gt; -I../include/private -I../include/hwloc
</span><br>
<span class="quotelev1">&gt; -I/home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/ 
</span><br>
<span class="quotelev1">&gt; include
</span><br>
<span class="quotelev1">&gt; -I../include -std=c99 -Wall -Wmissing-prototypes -Wundef -Wpointer- 
</span><br>
<span class="quotelev1">&gt; arith
</span><br>
<span class="quotelev1">&gt; -Wcast-align -O2 -Wall -Wextra -Wno-missing-field-initializers
</span><br>
<span class="quotelev1">&gt; -Wstrict-prototypes -Wmissing-prototypes -DGCC_WALL
</span><br>
<span class="quotelev1">&gt; -Wno-unused-parameter -Wno-unused-label -Wshadow -Wmissing- 
</span><br>
<span class="quotelev1">&gt; declarations
</span><br>
<span class="quotelev1">&gt; -Wno-long-long -Wfloat-equal -Wdeclaration-after-statement -Wundef
</span><br>
<span class="quotelev1">&gt; -Wno-endif-labels -Wpointer-arith -Wbad-function-cast -Wcast-align
</span><br>
<span class="quotelev1">&gt; -Wwrite-strings -Wno-sign-compare -Waggregate-return
</span><br>
<span class="quotelev1">&gt; -Wold-style-definition -Wno-multichar -Wno-deprecated-declarations
</span><br>
<span class="quotelev1">&gt; -Wpacked -Wnested-externs -Winvalid-pch -Wno-pointer-sign
</span><br>
<span class="quotelev1">&gt; -Wvariadic-macros -std=c89 -Wno-format-zero-length -Wno-type-limits
</span><br>
<span class="quotelev1">&gt; -D_POSIX_C_SOURCE=199506L -MT cpuset.lo -MD -MP -MF .deps/cpuset.Tpo  
</span><br>
<span class="quotelev1">&gt; -c
</span><br>
<span class="quotelev1">&gt; /home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/ 
</span><br>
<span class="quotelev1">&gt; cpuset.c
</span><br>
<span class="quotelev1">&gt; -o cpuset.o &gt;/dev/null 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; /home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/ 
</span><br>
<span class="quotelev1">&gt; cpuset.c:
</span><br>
<span class="quotelev1">&gt; In function 'hwloc_snprintf':
</span><br>
<span class="quotelev1">&gt; /home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/ 
</span><br>
<span class="quotelev1">&gt; cpuset.c:37:
</span><br>
<span class="quotelev1">&gt; warning: implicit declaration of function 'vsnprintf'
</span><br>
<span class="quotelev1">&gt; /home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/ 
</span><br>
<span class="quotelev1">&gt; cpuset.c:37:
</span><br>
<span class="quotelev1">&gt; warning: nested extern declaration of 'vsnprintf'
</span><br>
<span class="quotelev1">&gt; /home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/ 
</span><br>
<span class="quotelev1">&gt; topology-linux.c:
</span><br>
<span class="quotelev1">&gt; In function 'hwloc_linux_set_thread_cpubind':
</span><br>
<span class="quotelev1">&gt; /home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/ 
</span><br>
<span class="quotelev1">&gt; topology-linux.c:170:
</span><br>
<span class="quotelev1">&gt; warning: ISO C90 forbids mixed declarations and code
</span><br>
<span class="quotelev1">&gt; /home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/ 
</span><br>
<span class="quotelev1">&gt; topology-linux.c:
</span><br>
<span class="quotelev1">&gt; In function 'hwloc_parse_sysfs_unsigned':
</span><br>
<span class="quotelev1">&gt; /home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/ 
</span><br>
<span class="quotelev1">&gt; topology-linux.c:241:
</span><br>
<span class="quotelev1">&gt; warning: ignoring return value of 'fgets', declared with attribute
</span><br>
<span class="quotelev1">&gt; warn_unused_result
</span><br>
<span class="quotelev1">&gt; /home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/ 
</span><br>
<span class="quotelev1">&gt; topology-linux.c:
</span><br>
<span class="quotelev1">&gt; In function 'hwloc_read_cpuset_mask':
</span><br>
<span class="quotelev1">&gt; /home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/ 
</span><br>
<span class="quotelev1">&gt; topology-linux.c:326:
</span><br>
<span class="quotelev1">&gt; warning: ignoring return value of 'fgets', declared with attribute
</span><br>
<span class="quotelev1">&gt; warn_unused_result
</span><br>
<span class="quotelev1">&gt; /home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/ 
</span><br>
<span class="quotelev1">&gt; topology-linux.c:346:
</span><br>
<span class="quotelev1">&gt; warning: ignoring return value of 'fgets', declared with attribute
</span><br>
<span class="quotelev1">&gt; warn_unused_result
</span><br>
<span class="quotelev1">&gt; /home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/ 
</span><br>
<span class="quotelev1">&gt; topology-linux.c:
</span><br>
<span class="quotelev1">&gt; In function 'look_cpuinfo':
</span><br>
<span class="quotelev1">&gt; /home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/ 
</span><br>
<span class="quotelev1">&gt; topology-linux.c:863:
</span><br>
<span class="quotelev1">&gt; warning: ignoring return value of 'fscanf', declared with attribute
</span><br>
<span class="quotelev1">&gt; warn_unused_result
</span><br>
<span class="quotelev1">&gt; /home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/ 
</span><br>
<span class="quotelev1">&gt; topology-linux.c:
</span><br>
<span class="quotelev1">&gt; In function 'hwloc__get_dmi_info':
</span><br>
<span class="quotelev1">&gt; /home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/ 
</span><br>
<span class="quotelev1">&gt; topology-linux.c:917:
</span><br>
<span class="quotelev1">&gt; warning: ignoring return value of 'fgets', declared with attribute
</span><br>
<span class="quotelev1">&gt; warn_unused_result
</span><br>
<span class="quotelev1">&gt; /home/balaji/projects/mpich2/hydra/hydra/tools/bind/hwloc/hwloc/src/ 
</span><br>
<span class="quotelev1">&gt; topology-linux.c:931:
</span><br>
<span class="quotelev1">&gt; warning: ignoring return value of 'fgets', declared with attribute
</span><br>
<span class="quotelev1">&gt; warn_unused_result
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Pavan Balaji
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0217.php">Jeff Squyres: "[hwloc-devel] merging to v0.9"</a>
<li><strong>Previous message:</strong> <a href="0215.php">Jeff Squyres: "[hwloc-devel] Trac ticket mails"</a>
<li><strong>In reply to:</strong> <a href="0213.php">Pavan Balaji: "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict	compiler flags"</a>
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
