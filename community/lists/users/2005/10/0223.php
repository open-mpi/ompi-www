<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 16:08:33 2005" -->
<!-- isoreceived="20051021210833" -->
<!-- sent="Fri, 21 Oct 2005 16:08:31 -0500" -->
<!-- isosent="20051021210831" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3" -->
<!-- id="4e0deb9e09223fda485075940b56d184_at_indiana.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44ABE761-10DA-4DD6-BE97-70B3BCCECA06_at_cs.utk.edu" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-21 16:08:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0224.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Previous message:</strong> <a href="0222.php">George Bosilca: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>In reply to:</strong> <a href="0222.php">George Bosilca: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0224.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just committed another fix to the trunk for a problem you are going 
<br>
to run into next - the same problem comes up again in two more places.  
<br>
I'll ask Tim/Jeff to apply this fix to the v1.0 branch, here are 
<br>
patches:
<br>
<p><p>Index: orte/runtime/orte_init_stage1.c
<br>
===================================================================
<br>
--- orte/runtime/orte_init_stage1.c     (revision 7832)
<br>
+++ orte/runtime/orte_init_stage1.c     (working copy)
<br>
@@ -537,7 +537,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ret != ORTE_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_show_help(&quot;help-orte-runtime&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;orte_init:startup:internal-failure&quot;,
<br>
-                       error, ret);
<br>
+                       true, error, ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ret;
<br>
Index: orte/runtime/orte_init_stage2.c
<br>
===================================================================
<br>
--- orte/runtime/orte_init_stage2.c     (revision 7832)
<br>
+++ orte/runtime/orte_init_stage2.c     (working copy)
<br>
@@ -82,7 +82,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ret != ORTE_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_show_help(&quot;help-orte-runtime&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;orte_init:startup:internal-failure&quot;,
<br>
-                       error, ret);
<br>
+                       true, error, ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ret;
<br>
<p><p>Andrew
<br>
<p>On Oct 21, 2005, at 2:59 PM, George Bosilca wrote:
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
<span class="quotelev1">&gt; --- opal/runtime/opal_init.c    (revision 7831)
</span><br>
<span class="quotelev1">&gt; +++ opal/runtime/opal_init.c    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -123,7 +123,7 @@
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt;       if (ret != OPAL_SUCCESS) {
</span><br>
<span class="quotelev1">&gt;           opal_show_help(&quot;help-opal-runtime&quot;,
</span><br>
<span class="quotelev1">&gt; -                       &quot;opal_init:startup:internal-failure&quot;,
</span><br>
<span class="quotelev1">&gt; +                       &quot;opal_init:startup:internal-failure&quot;, true,
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
<span class="quotelev2">&gt;&gt; Dear OpenMPI,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to build 1.0rc4 on a 3 year old 5-node Beowulf cluster
</span><br>
<span class="quotelev2">&gt;&gt; running RedHat Linux 7.3. The build failed during
</span><br>
<span class="quotelev2">&gt;&gt; make all; the last few lines of the log file are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mkdir .libs
</span><br>
<span class="quotelev2">&gt;&gt; gcc -DHAVE_CONFIG_H -I. -I. -I../../include -I../../include -I../../
</span><br>
<span class="quotelev2">&gt;&gt; src/event -I../../include -I../.. -I../.. -I../../include -I../../
</span><br>
<span class="quotelev2">&gt;&gt; opal -I../../orte -I../../ompi -O3 -DNDEBUG -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -MT opal_progress.lo -MD -MP -MF .deps/opal_progress.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress.c  -fPIC -DPIC -o .libs/opal_progress.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo opal_finalize.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../include -I../../include  -I../../src/
</span><br>
<span class="quotelev2">&gt;&gt; event -I../../include -I../.. -I../.. -I../../include -I../../opal -
</span><br>
<span class="quotelev2">&gt;&gt; I../../orte -I../../ompi    -O3 -DNDEBUG -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -MT opal_finalize.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_finalize.lo opal_finalize.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f
</span><br>
<span class="quotelev2">&gt;&gt; &quot;$depbase.Tpo&quot;; exit 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; gcc -DHAVE_CONFIG_H -I. -I. -I../../include -I../../include -I../../
</span><br>
<span class="quotelev2">&gt;&gt; src/event -I../../include -I../.. -I../.. -I../../include -I../../
</span><br>
<span class="quotelev2">&gt;&gt; opal -I../../orte -I../../ompi -O3 -DNDEBUG -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -MT opal_finalize.lo -MD -MP -MF .deps/opal_finalize.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; opal_finalize.c  -fPIC -DPIC -o .libs/opal_finalize.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo opal_init.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../include -I../../include  -I../../src/
</span><br>
<span class="quotelev2">&gt;&gt; event -I../../include -I../.. -I../.. -I../../include -I../../opal -
</span><br>
<span class="quotelev2">&gt;&gt; I../../orte -I../../ompi    -O3 -DNDEBUG -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -MT opal_init.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_init.lo opal_init.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f
</span><br>
<span class="quotelev2">&gt;&gt; &quot;$depbase.Tpo&quot;; exit 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; gcc -DHAVE_CONFIG_H -I. -I. -I../../include -I../../include -I../../
</span><br>
<span class="quotelev2">&gt;&gt; src/event -I../../include -I../.. -I../.. -I../../include -I../../
</span><br>
<span class="quotelev2">&gt;&gt; opal -I../../orte -I../../ompi -O3 -DNDEBUG -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -MT opal_init.lo -MD -MP -MF .deps/opal_init.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; opal_init.c  -fPIC -DPIC -o .libs/opal_init.o
</span><br>
<span class="quotelev2">&gt;&gt; opal_init.c: In function `opal_init':
</span><br>
<span class="quotelev2">&gt;&gt; opal_init.c:127: incompatible type for argument 3 of `opal_show_help'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [opal_init.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/mighell/pkg/ompi/openmpi-1.0rc4/
</span><br>
<span class="quotelev2">&gt;&gt; opal/runtime'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/mighell/pkg/ompi/openmpi-1.0rc4/
</span><br>
<span class="quotelev2">&gt;&gt; opal'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have included gzipped versions of config.log and the result of
</span><br>
<span class="quotelev2">&gt;&gt; make all:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config.log.gz&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;make_all.log.gz&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was able to build this same package on my Apple dual G5 tower
</span><br>
<span class="quotelev2">&gt;&gt; today without any problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Keep up the good work!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ken Mighell
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ---------
</span><br>
<span class="quotelev2">&gt;&gt; Kenneth Mighell, Associate Scientist     E-mail: .............
</span><br>
<span class="quotelev2">&gt;&gt; mighell_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Kitt Peak National Observatory           Phone: ..................
</span><br>
<span class="quotelev2">&gt;&gt; 520-318-8391
</span><br>
<span class="quotelev2">&gt;&gt; National Optical Astronomy Observatory   Fax: ....................
</span><br>
<span class="quotelev2">&gt;&gt; 520-318-8360
</span><br>
<span class="quotelev2">&gt;&gt; P.O. Box 26732, Tucson, AZ  85726-6732   URL: <a href="http://www.noao.edu/">http://www.noao.edu/</a>
</span><br>
<span class="quotelev2">&gt;&gt; staff/mighell
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Half of what I say is meaningless; but I say it so that the other
</span><br>
<span class="quotelev1">&gt; half may reach you&quot;
</span><br>
<span class="quotelev1">&gt;                                    Kahlil Gibran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0224.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Previous message:</strong> <a href="0222.php">George Bosilca: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>In reply to:</strong> <a href="0222.php">George Bosilca: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0224.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
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
