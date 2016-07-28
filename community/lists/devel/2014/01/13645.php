<?
$subject_val = "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 17:51:58 2014" -->
<!-- isoreceived="20140109225158" -->
<!-- sent="Thu, 9 Jan 2014 14:51:56 -0800" -->
<!-- isosent="20140109225156" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD" -->
<!-- id="CAAvDA17tr3AxVjVm_Uj_XOV7fawfLG5+eu5Xu1o63XSLaLCYYw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA169Du0kNxnOoyRzM-3kYnYnQNB94DSnY43pSW33yXXdyg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 17:51:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13646.php">Ralph Castain: "Re: [OMPI devel] orte_barrier: Assertion `0 == item-&gt;opal_list_item_refcount' failed."</a>
<li><strong>Previous message:</strong> <a href="13644.php">Adrian Reber: "Re: [OMPI devel] orte_barrier: Assertion `0 == item-&gt;opal_list_item_refcount' failed."</a>
<li><strong>In reply to:</strong> <a href="13641.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13649.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13649.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jan 9, 2014 at 2:08 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; However, only my Solaris (10/SPARC and 11/x86-64) systems have NFS-mounted
</span><br>
<span class="quotelev1">&gt; filesystems.  So, I don't have any means to ensure that the &quot;newly active&quot;
</span><br>
<span class="quotelev1">&gt; code performs correctly on the BSD systems.  In other words,
</span><br>
<span class="quotelev1">&gt; opal_path_nfs() might continue to always return false on BSD systems and
</span><br>
<span class="quotelev1">&gt; I'd not know the difference.
</span><br>
<p><p><p>Nevermind that - I just recalled that test/util/opal_path_nfs.c is
<br>
Linux-specific.  So, there won't be any testing coverage of the new code on
<br>
any of my Solaris or BSD systems.  Nor will Mac OSX get any &quot;real&quot; testing.
<br>
<p>Does anybody have suggestions (assuming I can mount an NFS dir on each of
<br>
my systems) as to how one might verify that the revised opal_path_nfs() is
<br>
*correct* on the BSDs and Solaris?  If there is no validation possible,
<br>
then it might be safer for 1.7.4 to leave the no-op behavior.  However, as
<br>
far as I can tell opal_path_nfs() is currently used ONLY for by shmem/mmap
<br>
to *warn* about mapping files on network filesystems.  So, maybe this isn't
<br>
critical at all.
<br>
<p>I *will* make a point of NOT
<br>
setting OMPI_MCA_shmem_mmap_enable_nfs_warning=0 as I normally do in my
<br>
testing (thought I can't remember why I added that to my testing scripts in
<br>
the first place).  Then at least I might be able to tell if opal_path_nfs()
<br>
is returning false positives.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13645/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13646.php">Ralph Castain: "Re: [OMPI devel] orte_barrier: Assertion `0 == item-&gt;opal_list_item_refcount' failed."</a>
<li><strong>Previous message:</strong> <a href="13644.php">Adrian Reber: "Re: [OMPI devel] orte_barrier: Assertion `0 == item-&gt;opal_list_item_refcount' failed."</a>
<li><strong>In reply to:</strong> <a href="13641.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13649.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13649.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
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
