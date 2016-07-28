<?
$subject_val = "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 22:05:45 2013" -->
<!-- isoreceived="20130129030545" -->
<!-- sent="Mon, 28 Jan 2013 19:05:38 -0800" -->
<!-- isosent="20130129030538" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury" -->
<!-- id="CAAvDA174JTpV59tFxxSS64gfqTgnC4m3V-b94b2UJO5UrGavoA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E1BC6BEE-041E-4CA9-8773-DDAA5203B81E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 22:05:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12052.php">George Bosilca: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3489: Move r27954 to v1.7 branch"</a>
<li><strong>Previous message:</strong> <a href="12050.php">Ralph Castain: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>In reply to:</strong> <a href="12050.php">Ralph Castain: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12054.php">Paul Hargrove: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>Reply:</strong> <a href="12054.php">Paul Hargrove: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and Nathan,
<br>
<p>As I said, the results I see fail to match the actual ALPS header locations
<br>
on both CLE4 and CLE5 systems at NERSC.
<br>
However, the CLE4 system &quot;just works&quot; because the actual location
<br>
(/usr/include) gets searched no matter what value configure picks for
<br>
$orte_check_alps_dir.  I suspect that this is why you didn't see any errors
<br>
on LANL's system.
<br>
<p>Regardless of the defaults, there is still an additional issue with
<br>
orte_check_alps.m4 that occurs when I give an explicit
<br>
with-alps=/opt/cray/alps/default in the platform file, which the following
<br>
bit of config.log confirms:
<br>
<p><span class="quotelev1">&gt; configure:99227: checking --with-alps value
</span><br>
<span class="quotelev1">&gt; configure:99247: result: sanity check ok (/opt/cray/alps/default)
</span><br>
<span class="quotelev1">&gt; configure:99329: checking for alps libraries in
</span><br>
<span class="quotelev1">&gt; &quot;/opt/cray/alps/default/lib64&quot;
</span><br>
<span class="quotelev1">&gt; configure:99334: result: found
</span><br>
<p><p><p>However, when trying to configure the ras:alps component, the value of
<br>
ras_alps_CPPFLAGS does not contain &quot;-I/opt/cray/alps/default/include&quot; as I
<br>
would have expected from reading the relevant .m4 files and the generated
<br>
configure script:
<br>
<p><span class="quotelev1">&gt; configure:113697: checking for MCA component ras:alps compile mode
</span><br>
<span class="quotelev1">&gt; configure:113703: result: static
</span><br>
<span class="quotelev1">&gt; configure:113871: checking alps/apInfo.h usability
</span><br>
<span class="quotelev1">&gt; configure:113871: gcc -std=gnu99 -c -O3 -DNDEBUG -march=amdfam10
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -fexceptions -pthread
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.9a1r27905/opal/mca/hwloc/hwloc151/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.9a1r27905/BUILD-edison-gcc/opal/mca/hwloc/hwloc151/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.9a1r27905/opal/mca/event/libevent2019/libevent
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.9a1r27905/opal/mca/event/libevent2019/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.9a1r27905/BUILD-edison-gcc/opal/mca/event/libevent2019/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/opt/cray/pmi/default/include -I/opt/cray/pmi/default/include
</span><br>
<span class="quotelev1">&gt; -I/opt/cray/pmi/default/include -I/opt/cray/pmi/default/include  conftest.c
</span><br>
<span class="quotelev2">&gt; &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c:640:25: fatal error: alps/apInfo.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt; configure:113871: $? = 1
</span><br>
<p><p>While only 95% certain, I think that this logic
<br>
in config/orte_check_alps.m4 is to blame:
<br>
<p><span class="quotelev1">&gt;         if test &quot;$with_alps&quot; = &quot;no&quot; -o -z &quot;$with_alps&quot; ; then
</span><br>
<span class="quotelev1">&gt;             orte_check_alps_happy=&quot;no&quot;
</span><br>
<span class="quotelev1">&gt;         else
</span><br>
<span class="quotelev1">&gt;            # Only need to do these tests once (this macro is invoked
</span><br>
<span class="quotelev1">&gt;            # from multiple different components' configure.m4 scripts
</span><br>
<p><p>Specifically, the setting of &quot;$1_CPPFLAGS&quot; appears to be ERRONEOUSLY placed
<br>
within the else-clause of the logic above.  So, when
<br>
orte/mca/ess/alps/configure.m4 is run BEFORE
<br>
orte/mca/ras/alps/configure.m4, the variable &quot;with_alps&quot; gets set and the
<br>
&quot;$1_CPPFLAGS=...&quot; is then unreachable when the ORTE_CHECK_ALPS macro is run
<br>
later from config/orte_check_alps.m4.
<br>
<p>Though it leaves the indentation sloppy, I believe the following might fix
<br>
the problem, but I lack the autotools versions to test this myself:
<br>
<p>--- config/orte_check_alps.m4   (revision 27954)
<br>
+++ config/orte_check_alps.m4   (working copy)
<br>
@@ -80,6 +80,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[orte_check_alps_dir=&quot;/opt/cray/alps/default&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[orte_check_alps_dir=&quot;$with_alps&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
+        fi
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$1_CPPFLAGS=&quot;-I$orte_check_alps_dir/include&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$1_LDFLAGS=&quot;-L$orte_check_alps_libdir&quot;
<br>
@@ -106,7 +107,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_ERROR([Cannot continue])])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
-        fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$orte_check_alps_happy&quot; = &quot;yes&quot;],
<br>
<p><p>-Paul
<br>
<p><p><p><p>On Mon, Jan 28, 2013 at 6:30 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Like I said, I didn't write this code - all I can say for certain is that
</span><br>
<span class="quotelev1">&gt; it gets the right answer on the LANL Crays. I'll talk to Nathan (the
</span><br>
<span class="quotelev1">&gt; author) about it tomorrow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2013, at 6:23 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph writes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ?? It looks correct to me - if with_alps is &quot;yes&quot;, then no path was given
</span><br>
<span class="quotelev2">&gt;&gt; and we have to look at a default location. If it isn't yes, then a path was
</span><br>
<span class="quotelev2">&gt;&gt; given and we use it.
</span><br>
<span class="quotelev2">&gt;&gt; Am I missing something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe *I* am the one missing something, but the way I read it the
</span><br>
<span class="quotelev1">&gt; following defaults are applied
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CLE4:
</span><br>
<span class="quotelev1">&gt;    orte_check_alps_libdir=&quot;/usr/lib/alps&quot;
</span><br>
<span class="quotelev1">&gt;    orte_check_alps_dir=&quot;/opt/cray/alps/default&quot;
</span><br>
<span class="quotelev1">&gt; CLE5:
</span><br>
<span class="quotelev1">&gt;    orte_check_alps_libdir=&quot;/opt/cray/alps/default/lib64&quot;
</span><br>
<span class="quotelev1">&gt;    orte_check_alps_dir=&quot;/usr&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unless I am mistaken, the defaults for orte_check_alps_dir should be
</span><br>
<span class="quotelev1">&gt; exchanged to yield:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CLE4:
</span><br>
<span class="quotelev1">&gt;    orte_check_alps_libdir=&quot;/usr/lib/alps&quot;
</span><br>
<span class="quotelev1">&gt;    orte_check_alps_dir=&quot;/usr&quot;
</span><br>
<span class="quotelev1">&gt; CLE5:
</span><br>
<span class="quotelev1">&gt;    orte_check_alps_libdir=&quot;/opt/cray/alps/default/lib64&quot;
</span><br>
<span class="quotelev1">&gt;    orte_check_alps_dir=&quot;/opt/cray/alps/default&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 28, 2013 at 6:14 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 28, 2013, at 6:10 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The following 2 fragment from config/orte_check_alps.m4 appear to be
</span><br>
<span class="quotelev2">&gt;&gt; contradictory.
</span><br>
<span class="quotelev2">&gt;&gt; By that I mean the first appears to mean that &quot;--with-alps&quot; with no
</span><br>
<span class="quotelev2">&gt;&gt; argument means /opt/cray/alps/default/... for CLE5 and /usr/... for CLE4,
</span><br>
<span class="quotelev2">&gt;&gt; while the second fragment appears to be doing the opposite:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                    if test &quot;$using_cle5_install&quot; = &quot;yes&quot;; then
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  orte_check_alps_libdir=&quot;/opt/cray/alps/default/lib64&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                    else
</span><br>
<span class="quotelev2">&gt;&gt;                        orte_check_alps_libdir=&quot;/usr/lib/alps&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                    fi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            if test &quot;$using_cle5_install&quot; = &quot;yes&quot; ; then
</span><br>
<span class="quotelev2">&gt;&gt;                   AS_IF([test &quot;$with_alps&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev2">&gt;&gt;                         [orte_check_alps_dir=&quot;/usr&quot;],
</span><br>
<span class="quotelev2">&gt;&gt;                         [orte_check_alps_dir=&quot;$with_alps&quot;])
</span><br>
<span class="quotelev2">&gt;&gt;            else
</span><br>
<span class="quotelev2">&gt;&gt;                   AS_IF([test &quot;$with_alps&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev2">&gt;&gt;                         [orte_check_alps_dir=&quot;/opt/cray/alps/default&quot;],
</span><br>
<span class="quotelev2">&gt;&gt;                         [orte_check_alps_dir=&quot;$with_alps&quot;])
</span><br>
<span class="quotelev2">&gt;&gt;            fi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At least based on header and lib locations on NERSC's XC30 (CLE 5.0.15)
</span><br>
<span class="quotelev2">&gt;&gt; and XE6 (CLE 4.1.40), the first fragment is correctwhile the second
</span><br>
<span class="quotelev2">&gt;&gt; fragment is &quot;backwards&quot; (the two calls to AS_IF should be exchanged, or the
</span><br>
<span class="quotelev2">&gt;&gt; initial &quot;test&quot; should be inverted).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ?? It looks correct to me - if with_alps is &quot;yes&quot;, then no path was given
</span><br>
<span class="quotelev2">&gt;&gt; and we have to look at a default location. If it isn't yes, then a path was
</span><br>
<span class="quotelev2">&gt;&gt; given and we use it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am I missing something?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note this same logic is present in both trunk and v1.7 (in SVN - I am not
</span><br>
<span class="quotelev2">&gt;&gt; looking at tarballs this time).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12051/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12052.php">George Bosilca: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3489: Move r27954 to v1.7 branch"</a>
<li><strong>Previous message:</strong> <a href="12050.php">Ralph Castain: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>In reply to:</strong> <a href="12050.php">Ralph Castain: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12054.php">Paul Hargrove: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>Reply:</strong> <a href="12054.php">Paul Hargrove: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
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
