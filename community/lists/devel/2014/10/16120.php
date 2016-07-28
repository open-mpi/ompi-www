<?
$subject_val = "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 16:14:49 2014" -->
<!-- isoreceived="20141028201449" -->
<!-- sent="Tue, 28 Oct 2014 13:14:45 -0700" -->
<!-- isosent="20141028201445" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question" -->
<!-- id="FF37739E-25EC-42FF-ACF1-32564FE63614_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj6ghgEVg6j1MVH3pyWBoicTmQq6cy=e0iPJeBTP1UKzkQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 16:14:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16121.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Previous message:</strong> <a href="16119.php">Paul Hargrove: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>In reply to:</strong> <a href="16118.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16122.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Reply:</strong> <a href="16122.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Oct 28, 2014, at 1:05 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The simplest and best way on cray is to use the pkg-config command.
</span><br>
<span class="quotelev1">&gt; No looking for odd header file names, etc.  There is a minor issue
</span><br>
<span class="quotelev1">&gt; with external login nodes running very old (like CLE 4.X) that one has
</span><br>
<span class="quotelev1">&gt; to workaround, but otherwise works well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pkg-config --cflags cray-pmi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; etc. etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The pc files for the various cray software packages are suppose to include
</span><br>
<span class="quotelev1">&gt; all dependencies on headers files, libs, etc. from other cay packages.
</span><br>
<p>Given that difference, perhaps you should just add a &#226;&#128;&#148;with flag that specifically addresses Cray? We can&#226;&#128;&#153;t use that method for Slurm or any other PMI-based system, and I&#226;&#128;&#153;m not sure how you can generalize things adequately.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2014-10-28 13:20 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 28, 2014, at 12:17 PM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The Cray's at NERSC have *both* pmi_cray.h and pmi.h (and pmi2.h as well).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand that - I was questioning if that is universally true or not. IF we are guaranteed that nobody with a Cray ever renames pmi_cray.h to pmi.h, THEN your check will be fine. Otherwise, we can&#226;&#128;&#153;t trust it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And I seem to recall that the earlier Crays, at least, didn&#226;&#128;&#153;t have this naming distinction - or at least, not at LANL. Hence my question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That is why I said our configure logic checks for pmi_cray.h *first*.
</span><br>
<span class="quotelev2">&gt;&gt; Sorry if that wasn't clear.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On NERSC's XE6:
</span><br>
<span class="quotelev2">&gt;&gt; {hargrove_at_hopper06 ~}$ ls /opt/cray/pmi/default/include/
</span><br>
<span class="quotelev2">&gt;&gt; pmi2.h  pmi_cray_ext.h  pmi_cray.h  pmi.h  pmi_version.h
</span><br>
<span class="quotelev2">&gt;&gt; {hargrove_at_hopper06 ~}$ rpm -qf /opt/cray/pmi/default/include/pmi_cray.h
</span><br>
<span class="quotelev2">&gt;&gt; cray-libpmi-devel-4.0.1-1.0000.9753.86.3.gem
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On NERSC's XC30:
</span><br>
<span class="quotelev2">&gt;&gt; {hargrove_at_edison08 ~}$ ls /opt/cray/pmi/default/include/
</span><br>
<span class="quotelev2">&gt;&gt; pmi.h  pmi2.h  pmi_cray.h  pmi_cray_ext.h  pmi_version.h
</span><br>
<span class="quotelev2">&gt;&gt; {hargrove_at_edison08 ~}$ rpm -qf /opt/cray/pmi/default/include/pmi_cray.h
</span><br>
<span class="quotelev2">&gt;&gt; cray-libpmi-devel-5.0.5-1.0000.10300.134.8.ari
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Oct 28, 2014 at 12:02 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 28, 2014, at 11:59 AM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Oct 28, 2014 at 11:53 AM, Howard Pritchard &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We may no longer require those as you have separated the Cray check out, but the original problem is that we would pickup the Slurm components on the Cray because we would find pmi.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oh,  I forgot about that . 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In GASNet's configure logic we look for &quot;pmi_cray.h&quot; before &quot;pmi.h&#226;&#128;&#157;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm&#226;&#128;&#166;on LANL&#226;&#128;&#153;s Cray systems, it was still labeled &#226;&#128;&#156;pmi.h&#226;&#128;&#157;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So far that has been sufficient to disambiguate the implementations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One might also try checking libpmi for Cray's extensions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16114.php">http://www.open-mpi.org/community/lists/devel/2014/10/16114.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16114.php">http://www.open-mpi.org/community/lists/devel/2014/10/16114.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16115.php">http://www.open-mpi.org/community/lists/devel/2014/10/16115.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16115.php">http://www.open-mpi.org/community/lists/devel/2014/10/16115.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16116.php">http://www.open-mpi.org/community/lists/devel/2014/10/16116.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16116.php">http://www.open-mpi.org/community/lists/devel/2014/10/16116.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16117.php">http://www.open-mpi.org/community/lists/devel/2014/10/16117.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16117.php">http://www.open-mpi.org/community/lists/devel/2014/10/16117.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16118.php">http://www.open-mpi.org/community/lists/devel/2014/10/16118.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16120/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16121.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Previous message:</strong> <a href="16119.php">Paul Hargrove: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>In reply to:</strong> <a href="16118.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16122.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Reply:</strong> <a href="16122.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
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
