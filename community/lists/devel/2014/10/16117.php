<?
$subject_val = "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 15:20:21 2014" -->
<!-- isoreceived="20141028192021" -->
<!-- sent="Tue, 28 Oct 2014 12:20:17 -0700" -->
<!-- isosent="20141028192017" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question" -->
<!-- id="384C7AFA-5113-46AE-97CA-58B98AC2015B_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA14DvnHZ5JGND94S1seqKaAOY683dw8cJPbui+oaRNvmwg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-10-28 15:20:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16118.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Previous message:</strong> <a href="16116.php">Paul Hargrove: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>In reply to:</strong> <a href="16116.php">Paul Hargrove: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16118.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Reply:</strong> <a href="16118.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Reply:</strong> <a href="16119.php">Paul Hargrove: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Oct 28, 2014, at 12:17 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Cray's at NERSC have *both* pmi_cray.h and pmi.h (and pmi2.h as well).
</span><br>
<p>I understand that - I was questioning if that is universally true or not. IF we are guaranteed that nobody with a Cray ever renames pmi_cray.h to pmi.h, THEN your check will be fine. Otherwise, we can&#146;t trust it.
<br>
<p>And I seem to recall that the earlier Crays, at least, didn&#146;t have this naming distinction - or at least, not at LANL. Hence my question.
<br>
<p><p><span class="quotelev1">&gt; That is why I said our configure logic checks for pmi_cray.h *first*.
</span><br>
<span class="quotelev1">&gt; Sorry if that wasn't clear.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On NERSC's XE6:
</span><br>
<span class="quotelev1">&gt; {hargrove_at_hopper06 ~}$ ls /opt/cray/pmi/default/include/
</span><br>
<span class="quotelev1">&gt; pmi2.h  pmi_cray_ext.h  pmi_cray.h  pmi.h  pmi_version.h
</span><br>
<span class="quotelev1">&gt; {hargrove_at_hopper06 ~}$ rpm -qf /opt/cray/pmi/default/include/pmi_cray.h
</span><br>
<span class="quotelev1">&gt; cray-libpmi-devel-4.0.1-1.0000.9753.86.3.gem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On NERSC's XC30:
</span><br>
<span class="quotelev1">&gt; {hargrove_at_edison08 ~}$ ls /opt/cray/pmi/default/include/
</span><br>
<span class="quotelev1">&gt; pmi.h  pmi2.h  pmi_cray.h  pmi_cray_ext.h  pmi_version.h
</span><br>
<span class="quotelev1">&gt; {hargrove_at_edison08 ~}$ rpm -qf /opt/cray/pmi/default/include/pmi_cray.h
</span><br>
<span class="quotelev1">&gt; cray-libpmi-devel-5.0.5-1.0000.10300.134.8.ari
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 28, 2014 at 12:02 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 28, 2014, at 11:59 AM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Oct 28, 2014 at 11:53 AM, Howard Pritchard &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We may no longer require those as you have separated the Cray check out, but the original problem is that we would pickup the Slurm components on the Cray because we would find pmi.h
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Oh,  I forgot about that . 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In GASNet's configure logic we look for &quot;pmi_cray.h&quot; before &quot;pmi.h&#148;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm&#133;on LANL&#146;s Cray systems, it was still labeled &#147;pmi.h&#148;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So far that has been sufficient to disambiguate the implementations.
</span><br>
<span class="quotelev2">&gt;&gt; One might also try checking libpmi for Cray's extensions.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16114.php">http://www.open-mpi.org/community/lists/devel/2014/10/16114.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16114.php">http://www.open-mpi.org/community/lists/devel/2014/10/16114.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16115.php">http://www.open-mpi.org/community/lists/devel/2014/10/16115.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16115.php">http://www.open-mpi.org/community/lists/devel/2014/10/16115.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16116.php">http://www.open-mpi.org/community/lists/devel/2014/10/16116.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16117/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16118.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Previous message:</strong> <a href="16116.php">Paul Hargrove: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>In reply to:</strong> <a href="16116.php">Paul Hargrove: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16118.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Reply:</strong> <a href="16118.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Reply:</strong> <a href="16119.php">Paul Hargrove: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
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
