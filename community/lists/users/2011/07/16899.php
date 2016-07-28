<?
$subject_val = "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 15:26:35 2011" -->
<!-- isoreceived="20110712192635" -->
<!-- sent="Tue, 12 Jul 2011 12:26:30 -0700" -->
<!-- isosent="20110712192630" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD" -->
<!-- id="20110712192630.GA4850_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110712180342.GA4298_at_troutmask.apl.washington.edu" -->
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
<strong>Date:</strong> 2011-07-12 15:26:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16900.php">Paul Kapinos: "[OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>Previous message:</strong> <a href="16898.php">Peter Thompson: "[OMPI users] Open MPI job not joining up under TotalView."</a>
<li><strong>In reply to:</strong> <a href="16897.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16914.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16914.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 12, 2011 at 11:03:42AM -0700, Steve Kargl wrote:
<br>
<span class="quotelev1">&gt; On Tue, Jul 12, 2011 at 10:37:14AM -0700, Steve Kargl wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Jul 08, 2011 at 07:03:13PM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sorry -- I got distracted all afternoon...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In addition to what Ralph said (i.e., I'm not sure if the CIDR
</span><br>
<span class="quotelev3">&gt; &gt; &gt; notation stuff made it over to the v1.5 branch or not, but it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is available from the nightly SVN trunk tarballs:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>), here's a few points
</span><br>
<span class="quotelev3">&gt; &gt; &gt; from other mails in this thread...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; trunk does not appear to be an option. :-(
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; % svn co <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a> ompi
</span><br>
<span class="quotelev2">&gt; &gt; % cd ompi
</span><br>
<span class="quotelev2">&gt; &gt; % ./autogen.pl
</span><br>
<span class="quotelev2">&gt; &gt; % ./configure --enable-mpirun-prefix-by-default --prefix=/usr/local/ompi \
</span><br>
<span class="quotelev2">&gt; &gt;    --disable-shared --enable-static
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (many lines removed)
</span><br>
<span class="quotelev2">&gt; &gt; checking prefix for function in .type... @
</span><br>
<span class="quotelev2">&gt; &gt; checking if .size is needed... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking if .align directive takes logarithmic value... no
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: No atomic primitives available for amd64-unknown-freebsd9.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems the configure script does not recognize amd64.  If I add
</span><br>
<span class="quotelev1">&gt; --build='x86_64-*-freebsd' to the configure line, then everything
</span><br>
<span class="quotelev1">&gt; appears to work.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll report back after I've had a chance to work with ompi built
</span><br>
<span class="quotelev1">&gt; from trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>There's good news and some bad news.
<br>
<p>I got trunk to build and install.  I compile the netpipe
<br>
code with
<br>
<p>% /usr/local/ompi/bin/mpicc -o z -O GetOpt.c netmpi.c
<br>
<p><p>Bad news:
<br>
<p>I can then run
<br>
<p>% /usr/local/ompi/bin/mpiexec -machinefile mf --mca btl self,tcp \
<br>
&nbsp;&nbsp;--mca btl_base_verbose 30 ./z
<br>
<p>with mf containing 
<br>
<p>node11 slots=1   (node11 contains a single bge0=168.192.0.11)
<br>
node16 slots=1   (node16 contains a single bge0=168.192.0.16)
<br>
<p>or
<br>
<p>node11 slots=2   (communication on memory bus)
<br>
<p>However, if mf contains
<br>
<p>node10 slots=1   (node10 contains bge0=10.208.xx and bge1=192.168.0.10)
<br>
node16 slots=1   (node16 contains a single bge0=192.168.0.16)
<br>
<p>I see the same problem where node10 cannot communicate with node16.
<br>
<p>Good News:
<br>
<p>Adding 'btl_tcp_if_include=192.168.0.0/16' to my ~/.openmpi/mca-params.conf
<br>
file seems to cure the communication problem.
<br>
<p>Thanks for the help.  If I run into any other problems with trunk,
<br>
I'll report those here.
<br>
<p><pre>
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16900.php">Paul Kapinos: "[OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>Previous message:</strong> <a href="16898.php">Peter Thompson: "[OMPI users] Open MPI job not joining up under TotalView."</a>
<li><strong>In reply to:</strong> <a href="16897.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16914.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16914.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
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
