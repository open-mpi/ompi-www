<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 17:08:54 2005" -->
<!-- isoreceived="20051021220854" -->
<!-- sent="Fri, 21 Oct 2005 15:08:44 -0700" -->
<!-- isosent="20051021220844" -->
<!-- name="Ken Mighell" -->
<!-- email="mighell_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3" -->
<!-- id="17BC352B-B711-400A-A8E3-C1891FCD9FF8_at_noao.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20C3DC72-FFAB-4475-825D-4F25ED946BC8_at_noao.edu" -->
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
<strong>From:</strong> Ken Mighell (<em>mighell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-21 17:08:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0225.php">Troy Telford: "[O-MPI users] HPL &amp; HPCC: Wedged"</a>
<li><strong>Previous message:</strong> <a href="0223.php">Andrew Friedley: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>In reply to:</strong> <a href="0221.php">Ken Mighell: "[O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0226.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Reply:</strong> <a href="0226.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear George,
<br>
<p>The patch got malformed when posted.  But I did figure out what was  
<br>
meant.
<br>
<p>It turns out that 3 files had to be fixed:
<br>
<p>opal/runtime/opal_init.c
<br>
orte/runtime/orte_init_stage1.c
<br>
orte/runtime/orte_init_stage2.c
<br>
<p>in the same way:
<br>
<p>[mighell_at_asterix openmpi-1.0rc4]$ diff -u opal/runtime/ 
<br>
opal_init.c_original opal/runtime/opal_init.c
<br>
--- opal/runtime/opal_init.c_original   Fri Oct 21 13:25:52 2005
<br>
+++ opal/runtime/opal_init.c    Fri Oct 21 13:48:51 2005
<br>
@@ -123,7 +123,7 @@
<br>
&nbsp;&nbsp;error:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ret != OPAL_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_show_help(&quot;help-opal-runtime&quot;,
<br>
-                       &quot;opal_init:startup:internal-failure&quot;,
<br>
+                       &quot;opal_init:startup:internal-failure&quot;, true,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error, ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>[mighell_at_asterix openmpi-1.0rc4]$ diff -u orte/runtime/ 
<br>
orte_init_stage1.c_original orte/runtime/orte_init_stage1.c
<br>
--- orte/runtime/orte_init_stage1.c_original    Fri Oct 21 13:51:41 2005
<br>
+++ orte/runtime/orte_init_stage1.c     Fri Oct 21 13:52:08 2005
<br>
@@ -536,7 +536,7 @@
<br>
&nbsp;&nbsp;error:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ret != ORTE_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_show_help(&quot;help-orte-runtime&quot;,
<br>
-                       &quot;orte_init:startup:internal-failure&quot;,
<br>
+                       &quot;orte_init:startup:internal-failure&quot;, true,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error, ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>[mighell_at_asterix openmpi-1.0rc4]$ diff -u orte/runtime/ 
<br>
orte_init_stage2.c_original orte/runtime/orte_init_stage2.c
<br>
--- orte/runtime/orte_init_stage2.c_original    Fri Oct 21 13:53:15 2005
<br>
+++ orte/runtime/orte_init_stage2.c     Fri Oct 21 13:53:32 2005
<br>
@@ -81,7 +81,7 @@
<br>
&nbsp;&nbsp;error:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ret != ORTE_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_show_help(&quot;help-orte-runtime&quot;,
<br>
-                       &quot;orte_init:startup:internal-failure&quot;,
<br>
+                       &quot;orte_init:startup:internal-failure&quot;, true,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error, ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>The system seems to build.
<br>
<p>However, the run times for my qlwfpc2 job are now very slow. Jobs end  
<br>
with comments like
<br>
<p>mpirun noticed that job rank 0 with PID 10837 on node &quot;localhost&quot;  
<br>
exited on signal 25.
<br>
3 processes killed (possibly by Open MPI)
<br>
<p>-Ken
<br>
<p><span class="quotelev1">&gt; Ken,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please apply the following patch (from your /home/mighell/pkg/ompi/
</span><br>
<span class="quotelev1">&gt; openmpi-1.0rc4/ base directory).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: opal/runtime/opal_init.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/runtime/opal_init.c (revision 7831)
</span><br>
<span class="quotelev1">&gt; +++ opal/runtime/opal_init.c (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -123,7 +123,7 @@
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt;       if (ret != OPAL_SUCCESS) {
</span><br>
<span class="quotelev1">&gt;           opal_show_help(&quot;help-opal-runtime&quot;,
</span><br>
<span class="quotelev1">&gt; - &quot;opal_init:startup:internal-failure&quot;,
</span><br>
<span class="quotelev1">&gt; + &quot;opal_init:startup:internal-failure&quot;, true,
</span><br>
<span class="quotelev1">&gt;                          error, ret);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should solve this issue. I don't know which compiler you use but
</span><br>
<span class="quotelev1">&gt; mine it never catch this up .... as it think that an int is a bool so
</span><br>
<span class="quotelev1">&gt; it manage to match the show_help prototype.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 21, 2005, at 3:37 PM, Ken Mighell wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear OpenMPI,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried to build 1.0rc4 on a 3 year old 5-node Beowulf cluster
</span><br>
<span class="quotelev2">&gt; &gt; running RedHat Linux 7.3. The build failed during
</span><br>
<span class="quotelev2">&gt; &gt; make all; the last few lines of the log file are:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mkdir .libs
</span><br>
<span class="quotelev2">&gt; &gt; gcc -DHAVE_CONFIG_H -I. -I. -I../../include -I../../include -I../../
</span><br>
<span class="quotelev2">&gt; &gt; src/event -I../../include -I../.. -I../.. -I../../include -I../../
</span><br>
<span class="quotelev2">&gt; &gt; opal -I../../orte -I../../ompi -O3 -DNDEBUG -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt; &gt; pthread -MT opal_progress.lo -MD -MP -MF .deps/opal_progress.Tpo -c
</span><br>
<span class="quotelev2">&gt; &gt; opal_progress.c -fPIC -DPIC -o .libs/opal_progress.o
</span><br>
<span class="quotelev2">&gt; &gt; depbase=`echo opal_finalize.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo 
</span><br>
<span class="quotelev1">&gt; $||'`; \
</span><br>
<span class="quotelev2">&gt; &gt; if /bin/sh ../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt; &gt; DHAVE_CONFIG_H -I. -I. -I../../include -I../../include -I../../src/
</span><br>
<span class="quotelev2">&gt; &gt; event -I../../include -I../.. -I../.. -I../../include -I../../opal -
</span><br>
<span class="quotelev2">&gt; &gt; I../../orte -I../../ompi -O3 -DNDEBUG -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt; &gt; pthread -MT opal_finalize.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o
</span><br>
<span class="quotelev2">&gt; &gt; opal_finalize.lo opal_finalize.c; \
</span><br>
<span class="quotelev2">&gt; &gt; then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f
</span><br>
<span class="quotelev2">&gt; &gt; &quot;$depbase.Tpo&quot;; exit 1; fi
</span><br>
<span class="quotelev2">&gt; &gt; gcc -DHAVE_CONFIG_H -I. -I. -I../../include -I../../include -I../../
</span><br>
<span class="quotelev2">&gt; &gt; src/event -I../../include -I../.. -I../.. -I../../include -I../../
</span><br>
<span class="quotelev2">&gt; &gt; opal -I../../orte -I../../ompi -O3 -DNDEBUG -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt; &gt; pthread -MT opal_finalize.lo -MD -MP -MF .deps/opal_finalize.Tpo -c
</span><br>
<span class="quotelev2">&gt; &gt; opal_finalize.c -fPIC -DPIC -o .libs/opal_finalize.o
</span><br>
<span class="quotelev2">&gt; &gt; depbase=`echo opal_init.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`; \
</span><br>
<span class="quotelev2">&gt; &gt; if /bin/sh ../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt; &gt; DHAVE_CONFIG_H -I. -I. -I../../include -I../../include -I../../src/
</span><br>
<span class="quotelev2">&gt; &gt; event -I../../include -I../.. -I../.. -I../../include -I../../opal -
</span><br>
<span class="quotelev2">&gt; &gt; I../../orte -I../../ompi -O3 -DNDEBUG -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt; &gt; pthread -MT opal_init.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o
</span><br>
<span class="quotelev2">&gt; &gt; opal_init.lo opal_init.c; \
</span><br>
<span class="quotelev2">&gt; &gt; then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f
</span><br>
<span class="quotelev2">&gt; &gt; &quot;$depbase.Tpo&quot;; exit 1; fi
</span><br>
<span class="quotelev2">&gt; &gt; gcc -DHAVE_CONFIG_H -I. -I. -I../../include -I../../include -I../../
</span><br>
<span class="quotelev2">&gt; &gt; src/event -I../../include -I../.. -I../.. -I../../include -I../../
</span><br>
<span class="quotelev2">&gt; &gt; opal -I../../orte -I../../ompi -O3 -DNDEBUG -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt; &gt; pthread -MT opal_init.lo -MD -MP -MF .deps/opal_init.Tpo -c
</span><br>
<span class="quotelev2">&gt; &gt; opal_init.c -fPIC -DPIC -o .libs/opal_init.o
</span><br>
<span class="quotelev2">&gt; &gt; opal_init.c: In function `opal_init':
</span><br>
<span class="quotelev2">&gt; &gt; opal_init.c:127: incompatible type for argument 3 of  
</span><br>
<span class="quotelev1">&gt; `opal_show_help'
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [opal_init.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory `/home/mighell/pkg/ompi/openmpi-1.0rc4/
</span><br>
<span class="quotelev2">&gt; &gt; opal/runtime'
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory `/home/mighell/pkg/ompi/openmpi-1.0rc4/
</span><br>
<span class="quotelev2">&gt; &gt; opal'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have included gzipped versions of config.log and the result of
</span><br>
<span class="quotelev2">&gt; &gt; make all:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;config.log.gz&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;make_all.log.gz&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I was able to build this same package on my Apple dual G5 tower
</span><br>
<span class="quotelev2">&gt; &gt; today without any problems.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Keep up the good work!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Ken Mighell
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ---------
</span><br>
<span class="quotelev2">&gt; &gt; Kenneth Mighell, Associate Scientist E-mail: .............
</span><br>
<span class="quotelev2">&gt; &gt; mighell_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Kitt Peak National Observatory Phone: ..................
</span><br>
<span class="quotelev2">&gt; &gt; 520-318-8391
</span><br>
<span class="quotelev2">&gt; &gt; National Optical Astronomy Observatory Fax: ....................
</span><br>
<span class="quotelev2">&gt; &gt; 520-318-8360
</span><br>
<span class="quotelev2">&gt; &gt; P.O. Box 26732, Tucson, AZ 85726-6732 URL: <a href="http://www.noao.edu/">http://www.noao.edu/</a>
</span><br>
<span class="quotelev2">&gt; &gt; staff/mighell
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Half of what I say is meaningless; but I say it so that the other
</span><br>
<span class="quotelev1">&gt; half may reach you&quot;
</span><br>
<span class="quotelev1">&gt;                                    Kahlil Gibran
</span><br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0224/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0225.php">Troy Telford: "[O-MPI users] HPL &amp; HPCC: Wedged"</a>
<li><strong>Previous message:</strong> <a href="0223.php">Andrew Friedley: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>In reply to:</strong> <a href="0221.php">Ken Mighell: "[O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0226.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Reply:</strong> <a href="0226.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
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
