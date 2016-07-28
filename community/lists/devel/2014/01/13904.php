<?
$subject_val = "Re: [OMPI devel] out-of-date or missing manpages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 12:34:25 2014" -->
<!-- isoreceived="20140124173425" -->
<!-- sent="Fri, 24 Jan 2014 09:33:32 -0800" -->
<!-- isosent="20140124173332" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] out-of-date or missing manpages" -->
<!-- id="7BB85680-927A-4DB3-8B8D-EFA8FE63768C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16-YAwJx6F-hvjrNYT7czMhC8+dyLWShVir5QGDepgHPA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] out-of-date or missing manpages<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 12:33:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13905.php">Adrian Reber: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>Previous message:</strong> <a href="13903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] yet another fortran (documentation) issue"</a>
<li><strong>In reply to:</strong> <a href="13896.php">Paul Hargrove: "Re: [OMPI devel] out-of-date or missing manpages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13912.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] out-of-date or missing manpages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well....yeah, kinda sorta...i guess :-/
<br>
<p>I went ahead and updated the Makefile.am to remove all references to orteCC. Thanks!
<br>
<p>On Jan 23, 2014, at 10:50 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 23, 2014 at 4:17 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Note also the last line out output is due to an orteCC.1 which is a dangling symlink:
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 hargrove PARTS     9 Jan 23 21:53 orteCC.1 -&gt; ortec++.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is no manpage for ortec++ (nor otrecc).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like r22350 changed orte/tools/wrappers/Makefile.am to remove installation of ortecc.1 and ortec++.1.
</span><br>
<span class="quotelev1">&gt; However, it missed removing the install-data-hook rule for the orteCC.1 symlink.
</span><br>
<span class="quotelev1">&gt; Has this really gone unnoticed for 4 years !?!
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13904/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13905.php">Adrian Reber: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>Previous message:</strong> <a href="13903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] yet another fortran (documentation) issue"</a>
<li><strong>In reply to:</strong> <a href="13896.php">Paul Hargrove: "Re: [OMPI devel] out-of-date or missing manpages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13912.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] out-of-date or missing manpages"</a>
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
