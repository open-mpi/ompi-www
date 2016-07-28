<?
$subject_val = "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 21:14:58 2013" -->
<!-- isoreceived="20130129021458" -->
<!-- sent="Mon, 28 Jan 2013 18:14:51 -0800" -->
<!-- isosent="20130129021451" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury" -->
<!-- id="2BC659D7-5546-4CF1-8547-29CC4FC37413_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16iU0UQ6n=d9y9wV8N2KGhD9-wZN9mWjxBBv_XPq3zTyw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-01-28 21:14:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12045.php">Paul Hargrove: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<li><strong>Previous message:</strong> <a href="12043.php">Paul Hargrove: "[OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>In reply to:</strong> <a href="12043.php">Paul Hargrove: "[OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12046.php">George Bosilca: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>Reply:</strong> <a href="12046.php">George Bosilca: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>Reply:</strong> <a href="12047.php">Paul Hargrove: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 28, 2013, at 6:10 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The following 2 fragment from config/orte_check_alps.m4 appear to be contradictory.
</span><br>
<span class="quotelev1">&gt; By that I mean the first appears to mean that &quot;--with-alps&quot; with no argument means /opt/cray/alps/default/... for CLE5 and /usr/... for CLE4, while the second fragment appears to be doing the opposite:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    if test &quot;$using_cle5_install&quot; = &quot;yes&quot;; then
</span><br>
<span class="quotelev1">&gt;                        orte_check_alps_libdir=&quot;/opt/cray/alps/default/lib64&quot;
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
<span class="quotelev1">&gt; At least based on header and lib locations on NERSC's XC30 (CLE 5.0.15) and XE6 (CLE 4.1.40), the first fragment is correctwhile the second fragment is &quot;backwards&quot; (the two calls to AS_IF should be exchanged, or the initial &quot;test&quot; should be inverted).
</span><br>
<p>?? It looks correct to me - if with_alps is &quot;yes&quot;, then no path was given and we have to look at a default location. If it isn't yes, then a path was given and we use it.
<br>
<p>Am I missing something?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note this same logic is present in both trunk and v1.7 (in SVN - I am not looking at tarballs this time).
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12044/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12045.php">Paul Hargrove: "Re: [OMPI devel] 1.7rc6 build failure: bogus errmgr code"</a>
<li><strong>Previous message:</strong> <a href="12043.php">Paul Hargrove: "[OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>In reply to:</strong> <a href="12043.php">Paul Hargrove: "[OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12046.php">George Bosilca: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>Reply:</strong> <a href="12046.php">George Bosilca: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>Reply:</strong> <a href="12047.php">Paul Hargrove: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
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
