<?
$subject_val = "Re: [OMPI devel] Regarding registering openib memory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 31 10:19:52 2013" -->
<!-- isoreceived="20130531141952" -->
<!-- sent="Fri, 31 May 2013 14:19:47 +0000" -->
<!-- isosent="20130531141947" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Regarding registering openib memory" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F650C01_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAGFTm77Vhxa4wPJDF8w9pzQDihMQfmb_bObDJz6rBfA_V03j6g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Regarding registering openib memory<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-31 10:19:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12424.php">Jeff Squyres (jsquyres): "[OMPI devel] Webex: OMPI dev meeting today/tomorrow"</a>
<li><strong>Previous message:</strong> <a href="12422.php">alankrutha reddy: "[OMPI devel] Regarding registering openib memory"</a>
<li><strong>In reply to:</strong> <a href="12422.php">alankrutha reddy: "[OMPI devel] Regarding registering openib memory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perhaps you might want to read the FAQ item cited in the help message.
<br>
<p>:-)
<br>
<p><p>On May 31, 2013, at 9:04 AM, alankrutha reddy &lt;alankruthareddy46_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Whwnever I'm trying to run MPI program it is giving error. I have changed locked memory limits by using
</span><br>
<span class="quotelev1">&gt; ulimit -l unlimited
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But still it is giving below error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: It appears that your OpenFabrics subsystem is configured to only
</span><br>
<span class="quotelev1">&gt; allow registering part of your physical memory.  This can cause MPI jobs to
</span><br>
<span class="quotelev1">&gt; run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be caused by your OpenFabrics vendor limiting the amount of
</span><br>
<span class="quotelev1">&gt; physical memory that can be registered.  You should investigate the
</span><br>
<span class="quotelev1">&gt; relevant Linux kernel module parameters that control how much physical
</span><br>
<span class="quotelev1">&gt; memory can be registered, and increase them to allow registering all
</span><br>
<span class="quotelev1">&gt; physical memory on your machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See this Open MPI FAQ item for more information on these Linux kernel module
</span><br>
<span class="quotelev1">&gt; parameters:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Local host:              abc
</span><br>
<span class="quotelev1">&gt;   Registerable memory:     32768 MiB
</span><br>
<span class="quotelev1">&gt;   Total memory:            131007 MiB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your MPI job will continue, but may be behave poorly and/or hang.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can I resolve it.? Can anyone help me in fixing this bug.?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Alankrutha
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12424.php">Jeff Squyres (jsquyres): "[OMPI devel] Webex: OMPI dev meeting today/tomorrow"</a>
<li><strong>Previous message:</strong> <a href="12422.php">alankrutha reddy: "[OMPI devel] Regarding registering openib memory"</a>
<li><strong>In reply to:</strong> <a href="12422.php">alankrutha reddy: "[OMPI devel] Regarding registering openib memory"</a>
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
