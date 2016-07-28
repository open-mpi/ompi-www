<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 22 14:23:42 2007" -->
<!-- isoreceived="20071022182342" -->
<!-- sent="Mon, 22 Oct 2007 14:23:20 -0400" -->
<!-- isosent="20071022182320" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [WARNING : A/V UNSCANNABLE] [PMX:VIRUS] RE: issue with --without-tm in configure?" -->
<!-- id="DC8CE9AF-7D23-4AA1-8433-1F78C8497EEC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="002701c8128e$734de580$bcf3a580_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-22 14:23:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2478.php">Jeff Squyres: "Re: [OMPI devel] issue with --without-tm in configure?"</a>
<li><strong>Previous message:</strong> <a href="2476.php">Shipman, Galen M.: "Re: [OMPI devel] issue with --without-tm in configure?"</a>
<li><strong>In reply to:</strong> <a href="2470.php">Jennis Pruett: "[OMPI devel] [PMX:VIRUS] RE: issue with --without-tm in configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2475.php">Jennis Pruett: "Re: [OMPI devel] issue with --without-tm in configure?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 19, 2007, at 4:27 PM, Jennis Pruett wrote:
<br>
<p><span class="quotelev1">&gt; Here are the needed output files
</span><br>
<span class="quotelev1">&gt; ompi124...gz is the output from the configure and make,
</span><br>
<p>This file was ok.  You didn't include the output from &quot;ompi_info -- 
<br>
all&quot;, but I think that I can infer most of what it would have said  
<br>
(but not all -- see below).
<br>
<p><span class="quotelev1">&gt; the imb..tar contains output from the trial run.
</span><br>
<p>This file appeared to be corrupted.  But don't worry about it -- the  
<br>
first file may have been enough for this issue.
<br>
<p><span class="quotelev1">&gt; The main focus is the same error as listed here below with tm.
</span><br>
<p>&nbsp;From your build output, it looks like Open MPI did not configure,  
<br>
build, or install the TM support as you requested.  Is there a  
<br>
problem with the TM support that you don't want to use it?
<br>
<p>Regardless, what I'm guessing you're seeing is remnants of a prior  
<br>
Open MPI installation that is causing a problem.  You typically see  
<br>
the warning message that you're seeing when there is an incompatible  
<br>
plugin in the directory where Open MPI stores its components (e.g.,  
<br>
left over from a prior build/install).  In this case, I'm guessing  
<br>
there's a TM plugin in the installation there that is refusing to  
<br>
open for some reason (e.g., built for a different architecture, a  
<br>
shared library dependency can't be found, etc.).
<br>
<p>To confirm this you can probably run:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ls &lt;prefix&gt;/lib/openmpi/*tm*
<br>
<p>where &lt;prefix&gt; is wherever you installed OMPI (possibly /usr/projects/ 
<br>
hpctools/jennyp/openmpi124flash/openmpi-1.2.4?).  If you see any *tm*  
<br>
files in that directory, there's a good chance that they're left over  
<br>
from a prior install.
<br>
<p>The easiest thing to do is probably to wipe out the entire  
<br>
installation directory and install again.  I can suggest less drastic  
<br>
things to do if you care, but I'm guessing this simple solution will  
<br>
be good enough.
<br>
<p><span class="quotelev1">&gt; The system is gm, but I can't get the version right away.
</span><br>
<span class="quotelev1">&gt; I don't have permissions. It is coming as soon as the systems people
</span><br>
<span class="quotelev1">&gt; tell me what it is.  This issue doesn't seem to be gm related.
</span><br>
<p>I can't help you with gm networks...  Others may be able to.  But I  
<br>
agree that it doesn't look like a gm issue; more of a startup issue.
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jenny
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; Jennis (Jenny)
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; 505-667-1955
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Jennis Pruett
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, October 17, 2007 1:49 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] issue with --without-tm in configure?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello, All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm new to this forum, but I'm told this is where I'm to ask
</span><br>
<span class="quotelev2">&gt;&gt; questions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a linux cluster, bproc, gm, and am trying to configure
</span><br>
<span class="quotelev2">&gt;&gt; version 1.2.4. This is my configure command line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ./configure
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/usr/projects/hpctools/jennyp/openmpi124flash/openmpi-1.2.4
</span><br>
<span class="quotelev2">&gt;&gt; --libdir=/usr/projects/hpctools/jennyp/openmpi124flash/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; -1.2.4/lib64
</span><br>
<span class="quotelev2">&gt;&gt; --with-bproc --without-tm --enable-shared
</span><br>
<span class="quotelev2">&gt;&gt; --with-io_romio_flags=--with-file-system=ufs+nfs+panfs
</span><br>
<span class="quotelev2">&gt;&gt; --without-pty_support
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ( I threw in the --without-pty-support just to see if it would make a
</span><br>
<span class="quotelev2">&gt;&gt; difference.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The make and install seem to proced ok.
</span><br>
<span class="quotelev2">&gt;&gt; The test I have is an IMB-MPI1 test, and I am getting these
</span><br>
<span class="quotelev2">&gt;&gt; warnings, no matter what compiler I m using.:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -n 6 ./IMB-MPI1
</span><br>
<span class="quotelev2">&gt;&gt; [n110:26208] mca: base: component_find: unable to open ras
</span><br>
<span class="quotelev2">&gt;&gt; tm: file not found
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [n110:26208] mca: base: component_find: unable to open pls
</span><br>
<span class="quotelev2">&gt;&gt; tm: file not found
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [n111:26215] mca: base: component_find: unable to open ras
</span><br>
<span class="quotelev2">&gt;&gt; tm: file not found
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [n111:26212] mca: base: component_find: unable to open ras
</span><br>
<span class="quotelev2">&gt;&gt; tm: file not found
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [n112:26216] mca: base: component_find: unable to open ras
</span><br>
<span class="quotelev2">&gt;&gt; tm: file not found
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [n112:26213] mca: base: component_find: unable to open ras
</span><br>
<span class="quotelev2">&gt;&gt; tm: file not found
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [n110:26211] mca: base: component_find: unable to open ras
</span><br>
<span class="quotelev2">&gt;&gt; tm: file not found
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [n110:26214] mca: base: component_find: unable to open ras
</span><br>
<span class="quotelev2">&gt;&gt; tm: file not found
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [n111:26212] mca: base: component_find: unable to open pls
</span><br>
<span class="quotelev2">&gt;&gt; tm: file not found
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [n111:26215] mca: base: component_find: unable to open pls
</span><br>
<span class="quotelev2">&gt;&gt; tm: file not found
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [n112:26213] mca: base: component_find: unable to open pls
</span><br>
<span class="quotelev2">&gt;&gt; tm: file not found
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [n110:26211] mca: base: component_find: unable to open pls
</span><br>
<span class="quotelev2">&gt;&gt; tm: file not found
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [n110:26214] mca: base: component_find: unable to open pls
</span><br>
<span class="quotelev2">&gt;&gt; tm: file not found
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [n112:26216] mca: base: component_find: unable to open pls
</span><br>
<span class="quotelev2">&gt;&gt; tm: file not found
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was told today that the --without-tm parameter  is being
</span><br>
<span class="quotelev2">&gt;&gt; ignored in the configure statement.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyone know what is going on?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ---------
</span><br>
<span class="quotelev2">&gt;&gt; Jennis (Jenny)
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; 505-667-1955
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi124-output.tar.gz&gt;
</span><br>
<span class="quotelev1">&gt; WARNING: The virus scanner was unable to scan the next
</span><br>
<span class="quotelev1">&gt; attachment.  This attachment could possibly contain viruses
</span><br>
<span class="quotelev1">&gt; or other malicious programs.  The attachment could not be
</span><br>
<span class="quotelev1">&gt; scanned for the following reasons:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The file was corrupt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are advised NOT to open this attachment unless you are
</span><br>
<span class="quotelev1">&gt; completely sure of its contents.  If in doubt, please
</span><br>
<span class="quotelev1">&gt; contact your system administrator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The identifier for this message is 'l9JKRV1V010512'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Management
</span><br>
<span class="quotelev1">&gt; PureMessage Admin &lt;pmx-admin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;imb-imp1-run.tar&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2478.php">Jeff Squyres: "Re: [OMPI devel] issue with --without-tm in configure?"</a>
<li><strong>Previous message:</strong> <a href="2476.php">Shipman, Galen M.: "Re: [OMPI devel] issue with --without-tm in configure?"</a>
<li><strong>In reply to:</strong> <a href="2470.php">Jennis Pruett: "[OMPI devel] [PMX:VIRUS] RE: issue with --without-tm in configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2475.php">Jennis Pruett: "Re: [OMPI devel] issue with --without-tm in configure?"</a>
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
