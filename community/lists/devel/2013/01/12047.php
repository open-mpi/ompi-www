<?
$subject_val = "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 21:23:46 2013" -->
<!-- isoreceived="20130129022346" -->
<!-- sent="Mon, 28 Jan 2013 18:23:41 -0800" -->
<!-- isosent="20130129022341" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury" -->
<!-- id="CAAvDA16qGs8O9_OG3vm1UMxjXbe+CXuHJsARhhnkNL7oyJQdgw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2BC659D7-5546-4CF1-8547-29CC4FC37413_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-01-28 21:23:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12048.php">Ralph Castain: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<li><strong>Previous message:</strong> <a href="12046.php">George Bosilca: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>In reply to:</strong> <a href="12044.php">Ralph Castain: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12050.php">Ralph Castain: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>Reply:</strong> <a href="12050.php">Ralph Castain: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph writes
<br>
<p><span class="quotelev1">&gt; ?? It looks correct to me - if with_alps is &quot;yes&quot;, then no path was given
</span><br>
<span class="quotelev1">&gt; and we have to look at a default location. If it isn't yes, then a path was
</span><br>
<span class="quotelev1">&gt; given and we use it.
</span><br>
<span class="quotelev1">&gt; Am I missing something?
</span><br>
<p><p>Maybe *I* am the one missing something, but the way I read it the following
<br>
defaults are applied
<br>
<p>CLE4:
<br>
&nbsp;&nbsp;&nbsp;orte_check_alps_libdir=&quot;/usr/lib/alps&quot;
<br>
&nbsp;&nbsp;&nbsp;orte_check_alps_dir=&quot;/opt/cray/alps/default&quot;
<br>
CLE5:
<br>
&nbsp;&nbsp;&nbsp;orte_check_alps_libdir=&quot;/opt/cray/alps/default/lib64&quot;
<br>
&nbsp;&nbsp;&nbsp;orte_check_alps_dir=&quot;/usr&quot;
<br>
<p>Unless I am mistaken, the defaults for orte_check_alps_dir should be
<br>
exchanged to yield:
<br>
<p>CLE4:
<br>
&nbsp;&nbsp;&nbsp;orte_check_alps_libdir=&quot;/usr/lib/alps&quot;
<br>
&nbsp;&nbsp;&nbsp;orte_check_alps_dir=&quot;/usr&quot;
<br>
CLE5:
<br>
&nbsp;&nbsp;&nbsp;orte_check_alps_libdir=&quot;/opt/cray/alps/default/lib64&quot;
<br>
&nbsp;&nbsp;&nbsp;orte_check_alps_dir=&quot;/opt/cray/alps/default&quot;
<br>
<p>-Paul
<br>
<p><p>On Mon, Jan 28, 2013 at 6:14 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2013, at 6:10 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following 2 fragment from config/orte_check_alps.m4 appear to be
</span><br>
<span class="quotelev1">&gt; contradictory.
</span><br>
<span class="quotelev1">&gt; By that I mean the first appears to mean that &quot;--with-alps&quot; with no
</span><br>
<span class="quotelev1">&gt; argument means /opt/cray/alps/default/... for CLE5 and /usr/... for CLE4,
</span><br>
<span class="quotelev1">&gt; while the second fragment appears to be doing the opposite:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    if test &quot;$using_cle5_install&quot; = &quot;yes&quot;; then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_check_alps_libdir=&quot;/opt/cray/alps/default/lib64&quot;
</span><br>
<span class="quotelev1">&gt;                    else
</span><br>
<span class="quotelev1">&gt;                        orte_check_alps_libdir=&quot;/usr/lib/alps&quot;
</span><br>
<span class="quotelev1">&gt;                    fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            if test &quot;$using_cle5_install&quot; = &quot;yes&quot; ; then
</span><br>
<span class="quotelev1">&gt;                   AS_IF([test &quot;$with_alps&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt;                         [orte_check_alps_dir=&quot;/usr&quot;],
</span><br>
<span class="quotelev1">&gt;                         [orte_check_alps_dir=&quot;$with_alps&quot;])
</span><br>
<span class="quotelev1">&gt;            else
</span><br>
<span class="quotelev1">&gt;                   AS_IF([test &quot;$with_alps&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt;                         [orte_check_alps_dir=&quot;/opt/cray/alps/default&quot;],
</span><br>
<span class="quotelev1">&gt;                         [orte_check_alps_dir=&quot;$with_alps&quot;])
</span><br>
<span class="quotelev1">&gt;            fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At least based on header and lib locations on NERSC's XC30 (CLE 5.0.15)
</span><br>
<span class="quotelev1">&gt; and XE6 (CLE 4.1.40), the first fragment is correctwhile the second
</span><br>
<span class="quotelev1">&gt; fragment is &quot;backwards&quot; (the two calls to AS_IF should be exchanged, or the
</span><br>
<span class="quotelev1">&gt; initial &quot;test&quot; should be inverted).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ?? It looks correct to me - if with_alps is &quot;yes&quot;, then no path was given
</span><br>
<span class="quotelev1">&gt; and we have to look at a default location. If it isn't yes, then a path was
</span><br>
<span class="quotelev1">&gt; given and we use it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I missing something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note this same logic is present in both trunk and v1.7 (in SVN - I am not
</span><br>
<span class="quotelev1">&gt; looking at tarballs this time).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12047/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12048.php">Ralph Castain: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<li><strong>Previous message:</strong> <a href="12046.php">George Bosilca: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>In reply to:</strong> <a href="12044.php">Ralph Castain: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12050.php">Ralph Castain: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>Reply:</strong> <a href="12050.php">Ralph Castain: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
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
