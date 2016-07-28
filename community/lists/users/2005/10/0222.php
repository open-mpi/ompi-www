<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 15:03:37 2005" -->
<!-- isoreceived="20051021200337" -->
<!-- sent="Fri, 21 Oct 2005 15:59:11 -0400" -->
<!-- isosent="20051021195911" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3" -->
<!-- id="44ABE761-10DA-4DD6-BE97-70B3BCCECA06_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-21 14:59:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0223.php">Andrew Friedley: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Previous message:</strong> <a href="0221.php">Ken Mighell: "[O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>In reply to:</strong> <a href="0221.php">Ken Mighell: "[O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0223.php">Andrew Friedley: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Reply:</strong> <a href="0223.php">Andrew Friedley: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ken,
<br>
<p>Please apply the following patch (from your /home/mighell/pkg/ompi/ 
<br>
openmpi-1.0rc4/ base directory).
<br>
<p>Index: opal/runtime/opal_init.c
<br>
===================================================================
<br>
--- opal/runtime/opal_init.c    (revision 7831)
<br>
+++ opal/runtime/opal_init.c    (working copy)
<br>
@@ -123,7 +123,7 @@
<br>
error:
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
<p>It should solve this issue. I don't know which compiler you use but  
<br>
mine it never catch this up .... as it think that an int is a bool so  
<br>
it manage to match the show_help prototype.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 21, 2005, at 3:37 PM, Ken Mighell wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to build 1.0rc4 on a 3 year old 5-node Beowulf cluster  
</span><br>
<span class="quotelev1">&gt; running RedHat Linux 7.3. The build failed during
</span><br>
<span class="quotelev1">&gt; make all; the last few lines of the log file are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mkdir .libs
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I. -I../../include -I../../include -I../../ 
</span><br>
<span class="quotelev1">&gt; src/event -I../../include -I../.. -I../.. -I../../include -I../../ 
</span><br>
<span class="quotelev1">&gt; opal -I../../orte -I../../ompi -O3 -DNDEBUG -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -MT opal_progress.lo -MD -MP -MF .deps/opal_progress.Tpo -c  
</span><br>
<span class="quotelev1">&gt; opal_progress.c  -fPIC -DPIC -o .libs/opal_progress.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo opal_finalize.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`; \
</span><br>
<span class="quotelev1">&gt; if /bin/sh ../../libtool --tag=CC --mode=compile gcc - 
</span><br>
<span class="quotelev1">&gt; DHAVE_CONFIG_H -I. -I. -I../../include -I../../include  -I../../src/ 
</span><br>
<span class="quotelev1">&gt; event -I../../include -I../.. -I../.. -I../../include -I../../opal - 
</span><br>
<span class="quotelev1">&gt; I../../orte -I../../ompi    -O3 -DNDEBUG -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -MT opal_finalize.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o  
</span><br>
<span class="quotelev1">&gt; opal_finalize.lo opal_finalize.c; \
</span><br>
<span class="quotelev1">&gt; then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f  
</span><br>
<span class="quotelev1">&gt; &quot;$depbase.Tpo&quot;; exit 1; fi
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I. -I../../include -I../../include -I../../ 
</span><br>
<span class="quotelev1">&gt; src/event -I../../include -I../.. -I../.. -I../../include -I../../ 
</span><br>
<span class="quotelev1">&gt; opal -I../../orte -I../../ompi -O3 -DNDEBUG -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -MT opal_finalize.lo -MD -MP -MF .deps/opal_finalize.Tpo -c  
</span><br>
<span class="quotelev1">&gt; opal_finalize.c  -fPIC -DPIC -o .libs/opal_finalize.o
</span><br>
<span class="quotelev1">&gt; depbase=`echo opal_init.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`; \
</span><br>
<span class="quotelev1">&gt; if /bin/sh ../../libtool --tag=CC --mode=compile gcc - 
</span><br>
<span class="quotelev1">&gt; DHAVE_CONFIG_H -I. -I. -I../../include -I../../include  -I../../src/ 
</span><br>
<span class="quotelev1">&gt; event -I../../include -I../.. -I../.. -I../../include -I../../opal - 
</span><br>
<span class="quotelev1">&gt; I../../orte -I../../ompi    -O3 -DNDEBUG -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -MT opal_init.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o  
</span><br>
<span class="quotelev1">&gt; opal_init.lo opal_init.c; \
</span><br>
<span class="quotelev1">&gt; then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f  
</span><br>
<span class="quotelev1">&gt; &quot;$depbase.Tpo&quot;; exit 1; fi
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I. -I../../include -I../../include -I../../ 
</span><br>
<span class="quotelev1">&gt; src/event -I../../include -I../.. -I../.. -I../../include -I../../ 
</span><br>
<span class="quotelev1">&gt; opal -I../../orte -I../../ompi -O3 -DNDEBUG -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -MT opal_init.lo -MD -MP -MF .deps/opal_init.Tpo -c  
</span><br>
<span class="quotelev1">&gt; opal_init.c  -fPIC -DPIC -o .libs/opal_init.o
</span><br>
<span class="quotelev1">&gt; opal_init.c: In function `opal_init':
</span><br>
<span class="quotelev1">&gt; opal_init.c:127: incompatible type for argument 3 of `opal_show_help'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_init.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mighell/pkg/ompi/openmpi-1.0rc4/ 
</span><br>
<span class="quotelev1">&gt; opal/runtime'
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mighell/pkg/ompi/openmpi-1.0rc4/ 
</span><br>
<span class="quotelev1">&gt; opal'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have included gzipped versions of config.log and the result of  
</span><br>
<span class="quotelev1">&gt; make all:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;config.log.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;make_all.log.gz&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was able to build this same package on my Apple dual G5 tower  
</span><br>
<span class="quotelev1">&gt; today without any problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Keep up the good work!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ken Mighell
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ---------
</span><br>
<span class="quotelev1">&gt; Kenneth Mighell, Associate Scientist     E-mail: .............  
</span><br>
<span class="quotelev1">&gt; mighell_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Kitt Peak National Observatory           Phone: ..................  
</span><br>
<span class="quotelev1">&gt; 520-318-8391
</span><br>
<span class="quotelev1">&gt; National Optical Astronomy Observatory   Fax: ....................  
</span><br>
<span class="quotelev1">&gt; 520-318-8360
</span><br>
<span class="quotelev1">&gt; P.O. Box 26732, Tucson, AZ  85726-6732   URL: <a href="http://www.noao.edu/">http://www.noao.edu/</a> 
</span><br>
<span class="quotelev1">&gt; staff/mighell
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
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0223.php">Andrew Friedley: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Previous message:</strong> <a href="0221.php">Ken Mighell: "[O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>In reply to:</strong> <a href="0221.php">Ken Mighell: "[O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0223.php">Andrew Friedley: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Reply:</strong> <a href="0223.php">Andrew Friedley: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
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
