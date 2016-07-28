<?
$subject_val = "Re: [OMPI devel] 1.7rc8 is posted";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 13:39:55 2013" -->
<!-- isoreceived="20130228183955" -->
<!-- sent="Thu, 28 Feb 2013 18:39:50 +0000" -->
<!-- isosent="20130228183950" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7rc8 is posted" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F641C9_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFamD4Xj=XXBpP_oKjqO2KdWZyjWdSzdLgH8diHGiDNeCyn4pg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7rc8 is posted<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-28 13:39:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12181.php">Pavel Mezentsev: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>Previous message:</strong> <a href="12179.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove pml/csum"</a>
<li><strong>In reply to:</strong> <a href="12178.php">Pavel Mezentsev: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12181.php">Pavel Mezentsev: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>Reply:</strong> <a href="12181.php">Pavel Mezentsev: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 28, 2013, at 12:04 PM, Pavel Mezentsev &lt;pavel.mezentsev_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Do you mean the logs from failed attempts? They are enclosed. If you need the successful logs I'll need to make them again since the files from successful builds are deleted.
</span><br>
<p>You guessed right; I need the logs from the failed builds.
<br>
<p>It looks like your openf95 compiler is generating borked executables:
<br>
<p>-----
<br>
configure:31019: checking KIND value of Fortran C_SIGNED_CHAR
<br>
configure:31046: openf95 -o conftest    conftest.f90  &gt;&amp;5
<br>
configure:31046: $? = 0
<br>
configure:31046: ./conftest
<br>
./configure: line 4343:  1234 Illegal instruction     (core dumped) ./conftest$ac_exeext
<br>
configure:31046: $? = 132
<br>
configure: program exited with status 132
<br>
configure: failed program was:
<br>
|       program main
<br>
| 
<br>
|         use, intrinsic :: ISO_C_BINDING
<br>
|         open(unit = 7, file = &quot;conftest.out&quot;)
<br>
|         write(7, *) C_SIGNED_CHAR
<br>
|         close(7)
<br>
| 
<br>
|       end
<br>
-----
<br>
<p>There's no reason the above Fortran program should fail with &quot;illegal instruction&quot;.
<br>
<p><span class="quotelev1">&gt; I am not using  MXM. The results with the option you suggested are the same as before:
</span><br>
<p>We're investigating the latency issue.
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
<li><strong>Next message:</strong> <a href="12181.php">Pavel Mezentsev: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>Previous message:</strong> <a href="12179.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove pml/csum"</a>
<li><strong>In reply to:</strong> <a href="12178.php">Pavel Mezentsev: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12181.php">Pavel Mezentsev: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>Reply:</strong> <a href="12181.php">Pavel Mezentsev: "Re: [OMPI devel] 1.7rc8 is posted"</a>
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
