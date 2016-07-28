<?
$subject_val = "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 14:03:47 2011" -->
<!-- isoreceived="20110712180347" -->
<!-- sent="Tue, 12 Jul 2011 11:03:42 -0700" -->
<!-- isosent="20110712180342" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD" -->
<!-- id="20110712180342.GA4298_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110712173714.GA4280_at_troutmask.apl.washington.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD<br>
<strong>From:</strong> Steve Kargl (<em>sgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-12 14:03:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16898.php">Peter Thompson: "[OMPI users] Open MPI job not joining up under TotalView."</a>
<li><strong>Previous message:</strong> <a href="16896.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16896.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16899.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16899.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 12, 2011 at 10:37:14AM -0700, Steve Kargl wrote:
<br>
<span class="quotelev1">&gt; On Fri, Jul 08, 2011 at 07:03:13PM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Sorry -- I got distracted all afternoon...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In addition to what Ralph said (i.e., I'm not sure if the CIDR
</span><br>
<span class="quotelev2">&gt; &gt; notation stuff made it over to the v1.5 branch or not, but it
</span><br>
<span class="quotelev2">&gt; &gt; is available from the nightly SVN trunk tarballs:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>), here's a few points
</span><br>
<span class="quotelev2">&gt; &gt; from other mails in this thread...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; trunk does not appear to be an option. :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % svn co <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a> ompi
</span><br>
<span class="quotelev1">&gt; % cd ompi
</span><br>
<span class="quotelev1">&gt; % ./autogen.pl
</span><br>
<span class="quotelev1">&gt; % ./configure --enable-mpirun-prefix-by-default --prefix=/usr/local/ompi \
</span><br>
<span class="quotelev1">&gt;    --disable-shared --enable-static
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (many lines removed)
</span><br>
<span class="quotelev1">&gt; checking prefix for function in .type... @
</span><br>
<span class="quotelev1">&gt; checking if .size is needed... yes
</span><br>
<span class="quotelev1">&gt; checking if .align directive takes logarithmic value... no
</span><br>
<span class="quotelev1">&gt; configure: error: No atomic primitives available for amd64-unknown-freebsd9.0
</span><br>
<p>It seems the configure script does not recognize amd64.  If I add
<br>
--build='x86_64-*-freebsd' to the configure line, then everything
<br>
appears to work.  
<br>
<p>I'll report back after I've had a chance to work with ompi built
<br>
from trunk.
<br>
<p><pre>
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16898.php">Peter Thompson: "[OMPI users] Open MPI job not joining up under TotalView."</a>
<li><strong>Previous message:</strong> <a href="16896.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16896.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16899.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16899.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
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
