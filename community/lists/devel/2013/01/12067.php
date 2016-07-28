<?
$subject_val = "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 10:48:14 2013" -->
<!-- isoreceived="20130129154814" -->
<!-- sent="Tue, 29 Jan 2013 08:48:09 -0700" -->
<!-- isosent="20130129154809" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury" -->
<!-- id="20130129154809.GE99519_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="294F3910-002C-483E-B7B8-CF5876C5CA46_at_open-mpi.org" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-29 10:48:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12068.php">Nathan Hjelm: "[OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Previous message:</strong> <a href="12066.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>In reply to:</strong> <a href="12055.php">Ralph Castain: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Opps, that was my mistake. I wrote a fix for the CLE5 and --with-alps=&lt;dir&gt; code but I never pushed it. r27962 should fix the issue.
<br>
<p>-Nathan
<br>
<p>On Mon, Jan 28, 2013 at 09:05:32PM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Thanks Paul - appreciate the help! I chatted with Nathan this evening and now have a much better understanding of the problem driving the code. We are going to review it tomorrow. Hope to have a fix shortly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2013, at 9:01 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It looks now like the very first line of ORTE_CHECK_ALPS is actually the one that is preventing $1_CPPFLAGS from getting set for any caller other than the first:
</span><br>
<span class="quotelev2">&gt; &gt;     if test -z &quot;$orte_check_alps_happy&quot;; then
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So, my previous patch (tested by editing configure directly) didn't do the job.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Again, this probably slipped past Nathan because under CLE4 the alps headers are under /usr/include and therefore the missing CPPFLAGS were not actually required.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Jan 28, 2013 at 7:05 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Ralph and Nathan,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As I said, the results I see fail to match the actual ALPS header locations on both CLE4 and CLE5 systems at NERSC.
</span><br>
<span class="quotelev2">&gt; &gt; However, the CLE4 system &quot;just works&quot; because the actual location (/usr/include) gets searched no matter what value configure picks for $orte_check_alps_dir.  I suspect that this is why you didn't see any errors on LANL's system.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regardless of the defaults, there is still an additional issue with orte_check_alps.m4 that occurs when I give an explicit with-alps=/opt/cray/alps/default in the platform file, which the following bit of config.log confirms:
</span><br>
<span class="quotelev2">&gt; &gt; configure:99227: checking --with-alps value
</span><br>
<span class="quotelev2">&gt; &gt; configure:99247: result: sanity check ok (/opt/cray/alps/default)
</span><br>
<span class="quotelev2">&gt; &gt; configure:99329: checking for alps libraries in &quot;/opt/cray/alps/default/lib64&quot;
</span><br>
<span class="quotelev2">&gt; &gt; configure:99334: result: found
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; However, when trying to configure the ras:alps component, the value of ras_alps_CPPFLAGS does not contain &quot;-I/opt/cray/alps/default/include&quot; as I would have expected from reading the relevant .m4 files and the generated configure script:
</span><br>
<span class="quotelev2">&gt; &gt; configure:113697: checking for MCA component ras:alps compile mode
</span><br>
<span class="quotelev2">&gt; &gt; configure:113703: result: static
</span><br>
<span class="quotelev2">&gt; &gt; configure:113871: checking alps/apInfo.h usability
</span><br>
<span class="quotelev2">&gt; &gt; configure:113871: gcc -std=gnu99 -c -O3 -DNDEBUG -march=amdfam10 -finline-functions -fno-strict-aliasing -fexceptions -pthread   -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.9a1r27905/opal/mca/hwloc/hwloc151/hwloc/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.9a1r27905/BUILD-edison-gcc/opal/mca/hwloc/hwloc151/hwloc/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.9a1r27905/opal/mca/event/libevent2019/libevent -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.9a1r27905/opal/mca/event/libevent2019/libevent/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.9a1r27905/BUILD-edison-gcc/opal/mca/event/libevent2019/libevent/include -I/opt/cray/pmi/default/include -I/opt/cray/pmi/default/include -I/opt/cray/pmi/default/include -I/opt/cray/pmi/default/include  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev2">&gt; &gt; conftest.c:640:25: fatal error: alps/apInfo.h: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt; compilation terminated.
</span><br>
<span class="quotelev2">&gt; &gt; configure:113871: $? = 1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; While only 95% certain, I think that this logic in config/orte_check_alps.m4 is to blame:
</span><br>
<span class="quotelev2">&gt; &gt;         if test &quot;$with_alps&quot; = &quot;no&quot; -o -z &quot;$with_alps&quot; ; then
</span><br>
<span class="quotelev2">&gt; &gt;             orte_check_alps_happy=&quot;no&quot;
</span><br>
<span class="quotelev2">&gt; &gt;         else
</span><br>
<span class="quotelev2">&gt; &gt;            # Only need to do these tests once (this macro is invoked
</span><br>
<span class="quotelev2">&gt; &gt;            # from multiple different components' configure.m4 scripts
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Specifically, the setting of &quot;$1_CPPFLAGS&quot; appears to be ERRONEOUSLY placed within the else-clause of the logic above.  So, when orte/mca/ess/alps/configure.m4 is run BEFORE orte/mca/ras/alps/configure.m4, the variable &quot;with_alps&quot; gets set and the &quot;$1_CPPFLAGS=...&quot; is then unreachable when the ORTE_CHECK_ALPS macro is run later from config/orte_check_alps.m4.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Though it leaves the indentation sloppy, I believe the following might fix the problem, but I lack the autotools versions to test this myself:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --- config/orte_check_alps.m4   (revision 27954)
</span><br>
<span class="quotelev2">&gt; &gt; +++ config/orte_check_alps.m4   (working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -80,6 +80,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;                          [orte_check_alps_dir=&quot;/opt/cray/alps/default&quot;],
</span><br>
<span class="quotelev2">&gt; &gt;                          [orte_check_alps_dir=&quot;$with_alps&quot;])
</span><br>
<span class="quotelev2">&gt; &gt;             fi
</span><br>
<span class="quotelev2">&gt; &gt; +        fi
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;             $1_CPPFLAGS=&quot;-I$orte_check_alps_dir/include&quot;
</span><br>
<span class="quotelev2">&gt; &gt;             $1_LDFLAGS=&quot;-L$orte_check_alps_libdir&quot;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -106,7 +107,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;                            AC_MSG_ERROR([Cannot continue])])
</span><br>
<span class="quotelev2">&gt; &gt;                 fi
</span><br>
<span class="quotelev2">&gt; &gt;             fi
</span><br>
<span class="quotelev2">&gt; &gt; -        fi
</span><br>
<span class="quotelev2">&gt; &gt;      fi
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;      AS_IF([test &quot;$orte_check_alps_happy&quot; = &quot;yes&quot;], 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Jan 28, 2013 at 6:30 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Like I said, I didn't write this code - all I can say for certain is that it gets the right answer on the LANL Crays. I'll talk to Nathan (the author) about it tomorrow.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 28, 2013, at 6:23 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph writes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ?? It looks correct to me - if with_alps is &quot;yes&quot;, then no path was given and we have to look at a default location. If it isn't yes, then a path was given and we use it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Am I missing something?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Maybe *I* am the one missing something, but the way I read it the following defaults are applied
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; CLE4:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    orte_check_alps_libdir=&quot;/usr/lib/alps&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    orte_check_alps_dir=&quot;/opt/cray/alps/default&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; CLE5:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    orte_check_alps_libdir=&quot;/opt/cray/alps/default/lib64&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    orte_check_alps_dir=&quot;/usr&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Unless I am mistaken, the defaults for orte_check_alps_dir should be exchanged to yield:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; CLE4:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    orte_check_alps_libdir=&quot;/usr/lib/alps&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    orte_check_alps_dir=&quot;/usr&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; CLE5:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    orte_check_alps_libdir=&quot;/opt/cray/alps/default/lib64&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    orte_check_alps_dir=&quot;/opt/cray/alps/default&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mon, Jan 28, 2013 at 6:14 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 28, 2013, at 6:10 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The following 2 fragment from config/orte_check_alps.m4 appear to be contradictory.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; By that I mean the first appears to mean that &quot;--with-alps&quot; with no argument means /opt/cray/alps/default/... for CLE5 and /usr/... for CLE4, while the second fragment appears to be doing the opposite:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                    if test &quot;$using_cle5_install&quot; = &quot;yes&quot;; then
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                        orte_check_alps_libdir=&quot;/opt/cray/alps/default/lib64&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                    else
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                        orte_check_alps_libdir=&quot;/usr/lib/alps&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                    fi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            if test &quot;$using_cle5_install&quot; = &quot;yes&quot; ; then
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                   AS_IF([test &quot;$with_alps&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                         [orte_check_alps_dir=&quot;/usr&quot;],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                         [orte_check_alps_dir=&quot;$with_alps&quot;])
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            else   
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                   AS_IF([test &quot;$with_alps&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                         [orte_check_alps_dir=&quot;/opt/cray/alps/default&quot;],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                         [orte_check_alps_dir=&quot;$with_alps&quot;])
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            fi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; At least based on header and lib locations on NERSC's XC30 (CLE 5.0.15) and XE6 (CLE 4.1.40), the first fragment is correctwhile the second fragment is &quot;backwards&quot; (the two calls to AS_IF should be exchanged, or the initial &quot;test&quot; should be inverted).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ?? It looks correct to me - if with_alps is &quot;yes&quot;, then no path was given and we have to look at a default location. If it isn't yes, then a path was given and we use it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Am I missing something?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Note this same logic is present in both trunk and v1.7 (in SVN - I am not looking at tarballs this time).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12068.php">Nathan Hjelm: "[OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Previous message:</strong> <a href="12066.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>In reply to:</strong> <a href="12055.php">Ralph Castain: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
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
