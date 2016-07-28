<?
$subject_val = "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 21:28:22 2013" -->
<!-- isoreceived="20130129022822" -->
<!-- sent="Mon, 28 Jan 2013 18:28:15 -0800" -->
<!-- isosent="20130129022815" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury" -->
<!-- id="41AECC07-8019-454C-B661-09E37322082F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkVnOLHufpaOuYS-sp-cX-CTT9-p+vvgHYmLGSz601G0mw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 21:28:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12050.php">Ralph Castain: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>Previous message:</strong> <a href="12048.php">Ralph Castain: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<li><strong>In reply to:</strong> <a href="12046.php">George Bosilca: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12047.php">Paul Hargrove: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 28, 2013, at 6:23 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What Paul is saying is that there is a path mismatch between the two
</span><br>
<span class="quotelev1">&gt; cases. Few lines above using_cle5_install is only set to yes if
</span><br>
<span class="quotelev1">&gt; /usr/lib/alps/libalps.a exist. Then in the snippet pasted in Paul's
</span><br>
<span class="quotelev1">&gt; email if using_cle5_install is yes then you set the
</span><br>
<span class="quotelev1">&gt; orte_check_alps_libdir to something in /opt/cray/.
</span><br>
<p>Good question - I'll leave that to Nathan.
<br>
<p><span class="quotelev1">&gt; Why not to /usr/ as
</span><br>
<span class="quotelev1">&gt; in the test few lines above?
</span><br>
<p>Because the default path at LANL is /opt/cray/alps/default, and they wrote this code! :-)
<br>
<p>I will talk to them and see if they are comfortable about making a change, putting their path in their platform files, and resolving the apparent conflict. All I can say for sure is that it works on their Crays.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 28, 2013 at 9:14 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
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
<span class="quotelev2">&gt;&gt; By that I mean the first appears to mean that &quot;--with-alps&quot; with no argument
</span><br>
<span class="quotelev2">&gt;&gt; means /opt/cray/alps/default/... for CLE5 and /usr/... for CLE4, while the
</span><br>
<span class="quotelev2">&gt;&gt; second fragment appears to be doing the opposite:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                   if test &quot;$using_cle5_install&quot; = &quot;yes&quot;; then
</span><br>
<span class="quotelev2">&gt;&gt;                       orte_check_alps_libdir=&quot;/opt/cray/alps/default/lib64&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                   else
</span><br>
<span class="quotelev2">&gt;&gt;                       orte_check_alps_libdir=&quot;/usr/lib/alps&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                   fi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;           if test &quot;$using_cle5_install&quot; = &quot;yes&quot; ; then
</span><br>
<span class="quotelev2">&gt;&gt;                  AS_IF([test &quot;$with_alps&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev2">&gt;&gt;                        [orte_check_alps_dir=&quot;/usr&quot;],
</span><br>
<span class="quotelev2">&gt;&gt;                        [orte_check_alps_dir=&quot;$with_alps&quot;])
</span><br>
<span class="quotelev2">&gt;&gt;           else
</span><br>
<span class="quotelev2">&gt;&gt;                  AS_IF([test &quot;$with_alps&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev2">&gt;&gt;                        [orte_check_alps_dir=&quot;/opt/cray/alps/default&quot;],
</span><br>
<span class="quotelev2">&gt;&gt;                        [orte_check_alps_dir=&quot;$with_alps&quot;])
</span><br>
<span class="quotelev2">&gt;&gt;           fi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At least based on header and lib locations on NERSC's XC30 (CLE 5.0.15) and
</span><br>
<span class="quotelev2">&gt;&gt; XE6 (CLE 4.1.40), the first fragment is correctwhile the second fragment is
</span><br>
<span class="quotelev2">&gt;&gt; &quot;backwards&quot; (the two calls to AS_IF should be exchanged, or the initial
</span><br>
<span class="quotelev2">&gt;&gt; &quot;test&quot; should be inverted).
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
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="12050.php">Ralph Castain: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>Previous message:</strong> <a href="12048.php">Ralph Castain: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<li><strong>In reply to:</strong> <a href="12046.php">George Bosilca: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12047.php">Paul Hargrove: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
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
