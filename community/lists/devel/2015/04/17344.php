<?
$subject_val = "Re: [OMPI devel] Minor error in distscript.csh";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 09:40:35 2015" -->
<!-- isoreceived="20150423134035" -->
<!-- sent="Thu, 23 Apr 2015 13:40:34 +0000" -->
<!-- isosent="20150423134034" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Minor error in distscript.csh" -->
<!-- id="CA6176B6-A707-4F29-A6D8-7E9F0894DBC8_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16qvQK9For7B1B4wG46CaCGDr0fVSZHdvdShAGyUq24Xw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Minor error in distscript.csh<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-23 09:40:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17345.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI developer meeting"</a>
<li><strong>Previous message:</strong> <a href="17343.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] binding output error"</a>
<li><strong>In reply to:</strong> <a href="17337.php">Paul Hargrove: "[OMPI devel] Minor error in distscript.csh"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.
<br>
<p><a href="https://github.com/open-mpi/ompi-release/pull/256">https://github.com/open-mpi/ompi-release/pull/256</a>
<br>
<p><p><span class="quotelev1">&gt; On Apr 23, 2015, at 1:06 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When running &quot;make dist&quot; (several times) today, I noticed the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - WARNING: Got bad config.guess from ftp.gnu.org (non-existent or empty)
</span><br>
<span class="quotelev1">&gt;  - WARNING: using included versions for both config.sub and config.guess
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nevermind for the moment that the wget is NOT from ftp.gnu.org any longer.
</span><br>
<span class="quotelev1">&gt; The part that worried me is the &quot;non-existent or empty&quot; claim.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A quick look shows that logic in distscript.csh uses the non-portable &quot;-s&quot; operator[1].
</span><br>
<span class="quotelev1">&gt; One should be using &quot;-z&quot; instead of &quot;! -s&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- a/config/distscript.csh
</span><br>
<span class="quotelev1">&gt; +++ b/config/distscript.csh
</span><br>
<span class="quotelev1">&gt; @@ -108,14 +108,14 @@ chmod +x config.guess config.sub
</span><br>
<span class="quotelev1">&gt;  # unreleased software...
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  set happy=0
</span><br>
<span class="quotelev1">&gt; -if (! -f config.guess || ! -s config.guess) then
</span><br>
<span class="quotelev1">&gt; +if (! -f config.guess || -z config.guess) then
</span><br>
<span class="quotelev1">&gt;      echo &quot; - WARNING: Got bad config.guess from ftp.gnu.org (non-existent or empty)&quot;
</span><br>
<span class="quotelev1">&gt;  else
</span><br>
<span class="quotelev1">&gt;      ./config.guess &gt;&amp; /dev/null
</span><br>
<span class="quotelev1">&gt;      if ($status != 0) then
</span><br>
<span class="quotelev1">&gt;          echo &quot; - WARNING: Got bad config.guess from ftp.gnu.org (not executable)&quot;
</span><br>
<span class="quotelev1">&gt;      else
</span><br>
<span class="quotelev1">&gt; -        if (! -f config.sub || ! -s config.sub) then
</span><br>
<span class="quotelev1">&gt; +        if (! -f config.sub || -z config.sub) then
</span><br>
<span class="quotelev1">&gt;              echo &quot; - WARNING: Got bad config.sub from ftp.gnu.org (non-existent or empty)&quot;
</span><br>
<span class="quotelev1">&gt;          else
</span><br>
<span class="quotelev1">&gt;              ./config.sub `./config.guess` &gt;&amp; /dev/null
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] Two key excerpts from &quot;man 1 tcsh&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Throughout  this  manual,  features  of  tcsh  not found in most csh(1)
</span><br>
<span class="quotelev1">&gt;  implementations (specifically, the 4.4BSD csh) are labeled with  `(+)',
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  File inquiry operators
</span><br>
<span class="quotelev1">&gt;   [...]
</span><br>
<span class="quotelev1">&gt;            z   Zero size
</span><br>
<span class="quotelev1">&gt;            s   Non-zero size (+)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17337.php">http://www.open-mpi.org/community/lists/devel/2015/04/17337.php</a>
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
<li><strong>Next message:</strong> <a href="17345.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI developer meeting"</a>
<li><strong>Previous message:</strong> <a href="17343.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] binding output error"</a>
<li><strong>In reply to:</strong> <a href="17337.php">Paul Hargrove: "[OMPI devel] Minor error in distscript.csh"</a>
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
