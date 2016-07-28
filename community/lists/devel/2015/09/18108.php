<?
$subject_val = "Re: [OMPI devel] PR 595 busted build of mpi_f08";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 13:46:38 2015" -->
<!-- isoreceived="20150925174638" -->
<!-- sent="Fri, 25 Sep 2015 17:46:35 +0000" -->
<!-- isosent="20150925174635" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PR 595 busted build of mpi_f08" -->
<!-- id="185C1BBF-1C3B-4031-82AD-E47EC70440B5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj4Tz2fkVbok4P+52BJBRAiFa0adRCRmcUZET71oFoph5w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PR 595 busted build of mpi_f08<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-25 13:46:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18109.php">Paul Hargrove: "Re: [OMPI devel] PMIX vs Solaris"</a>
<li><strong>Previous message:</strong> <a href="18107.php">Howard Pritchard: "[OMPI devel] new compiler warning with --enable-picky using UH --disable-dlopen jenkins project"</a>
<li><strong>In reply to:</strong> <a href="18105.php">Howard Pritchard: "[OMPI devel] PR 595 busted build of mpi_f08"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 25, 2015, at 5:41 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, jenkins doesn't lie.
</span><br>
<p>Jenkins actually frequently *does* lie; that's kinda the problem...  :-)
<br>
<p><span class="quotelev1">&gt; <a href="http://jenkins.open-mpi.org/job/ompi_master_cle5.2up02/595/console">http://jenkins.open-mpi.org/job/ompi_master_cle5.2up02/595/console</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like the commits associated with PR 595 busted mpi_f08 build.
</span><br>
<p>PR 595 is a libfabric-related PR from months ago.  I'm guessing you mean <a href="https://github.com/open-mpi/ompi/commit/3698621df0bffd3711be2f2d81afd8e3ae2947e6">https://github.com/open-mpi/ompi/commit/3698621df0bffd3711be2f2d81afd8e3ae2947e6</a>; my commit from this morning.
<br>
<p>The Forum is over for today; sorry I wasn't available to fix it earlier.
<br>
<p>Just to be clear: the build didn't break (i.e., &quot;make all&quot; doesn't fail), meaning that this issue wasn't critical/time-sensitive to fix -- it could have waited until now for me to fix it (admittedly at the cost of several bot:retests for PRs from today).  I tested with gcc and icc before pushing to master, but yes, I did miss that gcc longer built the mpi_f08 module.  And somehow I missed that icc didn't install the mpi_f08 module -- my testing of the user's test program worked, so I must have goofed my testing somehow.  Jet lag...?
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
<li><strong>Next message:</strong> <a href="18109.php">Paul Hargrove: "Re: [OMPI devel] PMIX vs Solaris"</a>
<li><strong>Previous message:</strong> <a href="18107.php">Howard Pritchard: "[OMPI devel] new compiler warning with --enable-picky using UH --disable-dlopen jenkins project"</a>
<li><strong>In reply to:</strong> <a href="18105.php">Howard Pritchard: "[OMPI devel] PR 595 busted build of mpi_f08"</a>
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
