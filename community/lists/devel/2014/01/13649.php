<?
$subject_val = "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 19:15:48 2014" -->
<!-- isoreceived="20140110001548" -->
<!-- sent="Fri, 10 Jan 2014 00:15:46 +0000" -->
<!-- isosent="20140110001546" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD" -->
<!-- id="C1EDB5BC-A83B-4EE7-9708-A6C62C57DD36_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17tr3AxVjVm_Uj_XOV7fawfLG5+eu5Xu1o63XSLaLCYYw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 19:15:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13650.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13648.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<li><strong>In reply to:</strong> <a href="13645.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13650.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13650.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 9, 2014, at 5:51 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Nevermind that - I just recalled that test/util/opal_path_nfs.c is Linux-specific.  So, there won't be any testing coverage of the new code on any of my Solaris or BSD systems.  Nor will Mac OSX get any &quot;real&quot; testing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anybody have suggestions (assuming I can mount an NFS dir on each of my systems) as to how one might verify that the revised opal_path_nfs() is *correct* on the BSDs and Solaris?  
</span><br>
<p>I just updated the test/util/opal_path_nfs.c test as follows:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;On all platforms, if you provide one or more command line options,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;each command line option is given to opal_path_nfs() and the result
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is sent to stdout.
<br>
<p>For example, if you build and run the test like this:
<br>
<p>make check
<br>
./opal_path_nfs . Makefile ~
<br>
<p>It'll report if ., Makefile, and ~ are on network filesystems (i.e., the result of sending each of &quot;.&quot;, &quot;Makefile&quot;, and &quot;your_home_dir&quot; to opal_path_nfs()).
<br>
<p><span class="quotelev1">&gt; If there is no validation possible, then it might be safer for 1.7.4 to leave the no-op behavior.  However, as far as I can tell opal_path_nfs() is currently used ONLY for by shmem/mmap to *warn* about mapping files on network filesystems.  So, maybe this isn't critical at all.
</span><br>
<p>Correct.  Which is why a huge effort wasn't undertaken to automate it on non-Linux platforms.  But I think adding the interactive tests for all platforms is helpful.
<br>
<p><span class="quotelev1">&gt; I *will* make a point of NOT setting OMPI_MCA_shmem_mmap_enable_nfs_warning=0 as I normally do in my testing (thought I can't remember why I added that to my testing scripts in the first place).  Then at least I might be able to tell if opal_path_nfs() is returning false positives.
</span><br>
<p>Cool; thanks.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13650.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13648.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<li><strong>In reply to:</strong> <a href="13645.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13650.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13650.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
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
