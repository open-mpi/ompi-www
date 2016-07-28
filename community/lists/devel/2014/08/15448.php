<?
$subject_val = "Re: [OMPI devel] [1.8.2rc3] Build failure on FreeBSD (missing header)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 09:38:39 2014" -->
<!-- isoreceived="20140801133839" -->
<!-- sent="Fri, 1 Aug 2014 06:38:30 -0700" -->
<!-- isosent="20140801133830" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.2rc3] Build failure on FreeBSD (missing header)" -->
<!-- id="3B608ECC-20AF-4C15-A9AE-93D9FD0014EE_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17qomqh-gaKJ4QbVF3ZtXmPabgqz-_E0sp3_9VXTRh3LA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.8.2rc3] Build failure on FreeBSD (missing header)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-01 09:38:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15449.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>Previous message:</strong> <a href="15447.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>In reply to:</strong> <a href="15435.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] Build failure on FreeBSD (missing header)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul - added and cmr'd
<br>
<p><p>On Jul 31, 2014, at 11:23 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.8.2rc3-freebsd10-amd64/openmpi-1.8.2rc3/orte/mca/ess/base/ess_base_std_app.c:412:36: error: use of undeclared identifier 'S_IRUSR'
</span><br>
<span class="quotelev1">&gt;         fd = open(myfile, O_CREAT, S_IRUSR);
</span><br>
<span class="quotelev1">&gt;                                    ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To fix this it was sufficient to add the following 3 lines in the obvious place in ess_base_std_app.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_SYS_STAT_H
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/stat.h&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15435.php">http://www.open-mpi.org/community/lists/devel/2014/08/15435.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15448/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15449.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>Previous message:</strong> <a href="15447.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>In reply to:</strong> <a href="15435.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] Build failure on FreeBSD (missing header)"</a>
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
