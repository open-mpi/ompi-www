<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan  8 15:08:05 2007" -->
<!-- isoreceived="20070108200805" -->
<!-- sent="Mon, 8 Jan 2007 15:07:57 -0500" -->
<!-- isosent="20070108200757" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi failing on mx only" -->
<!-- id="06FEC5A0-A74B-4DDF-8531-8489187CAEAC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="559847D38F12F742B0EE27727596F42901AB8D34_at_NDJSEVS14.ndc.nasa.gov" -->
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
<strong>Date:</strong> 2007-01-08 15:07:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2441.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2439.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2439.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2441.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2441.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2442.php">Adrian Knoth: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2444.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2446.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 8, 2007, at 2:52 PM, Grobe, Gary L. ((JSC-EV))[ESCG] wrote:
<br>
<p><span class="quotelev1">&gt; I was wondering if someone could send me the HACKING file so I can  
</span><br>
<span class="quotelev1">&gt; do a
</span><br>
<span class="quotelev1">&gt; bit more with debugging on the snapshots. Our web proxy has webdav
</span><br>
<span class="quotelev1">&gt; methods turned off (request methods fail) so that I can't get to the
</span><br>
<span class="quotelev1">&gt; latest of the svn repos.
</span><br>
<p>Bummer.  :-(  You are definitely falling victim to the fact that or  
<br>
nightly snapshots have been less-than-stable recently.  Sorry [again]  
<br>
about that!
<br>
<p>FWIW, there's two ways to browse the source in the repository without  
<br>
an SVN checkout:
<br>
<p>- you can just point a normal web browser to our SVN repository (I'm  
<br>
pretty sure that doesn't use DAV, but I'm not 100% sure...), e.g.:  
<br>
<a href="https://svn.open-mpi.org/svn/ompi/trunk/HACKING">https://svn.open-mpi.org/svn/ompi/trunk/HACKING</a>
<br>
<p>- you can use our Trac SVN browser, e.g.: <a href="https://svn.open-mpi.org/">https://svn.open-mpi.org/</a> 
<br>
trac/ompi/browser/trunk/HACKING (there's a link at the bottom to  
<br>
download each file without all the HTML markup).
<br>
<p><span class="quotelev2">&gt;&gt; Second thing. From one of your previous emails, I see that MX
</span><br>
<span class="quotelev2">&gt;&gt; is configured with 4 instance by node. Your running with
</span><br>
<span class="quotelev2">&gt;&gt; exactly 4 processes on the first 2 nodes. Weirds things might
</span><br>
<span class="quotelev2">&gt;&gt; happens ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just curious about this comment. Are you referring to over  
</span><br>
<span class="quotelev1">&gt; subscribing?
</span><br>
<span class="quotelev1">&gt; We run 4 processes on each node because we have 2 dual core cpu's on
</span><br>
<span class="quotelev1">&gt; each node. Am I not understanding processor counts correctly?
</span><br>
<p>I'll have to defer to Reese on this one...
<br>
<p><span class="quotelev2">&gt;&gt; PS: Is there any way you can attach to the processes with gdb
</span><br>
<span class="quotelev2">&gt;&gt; ? I would like to see the backtrace as showed by gdb in order
</span><br>
<span class="quotelev2">&gt;&gt; to be able to figure out what's wrong there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I can get more detailed dbg, I'll send. Though I'm not clear on
</span><br>
<span class="quotelev1">&gt; what executable is being searched for below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -dbg=gdb --prefix /usr/local/openmpi-1.2b3r13030 -x
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=${LD_LIBRARY_PATH} --hostfile ./h1-3 -np 5 --mca  
</span><br>
<span class="quotelev1">&gt; pml cm
</span><br>
<span class="quotelev1">&gt; --mca mtl mx ./cpi
</span><br>
<p>FWIW, note that &quot;-dbg&quot; is not a recognized Open MPI mpirun command  
<br>
line switch -- after all the debugging information, Open MPI finally  
<br>
gets to telling you:
<br>
<p><span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Failed to find the following executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:       juggernaut
</span><br>
<span class="quotelev1">&gt; Executable: -b
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cannot continue.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<p>So nothing actually ran in this instance.
<br>
<p>Our debugging entries on the FAQ (<a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>? 
<br>
category=debugging) are fairly inadequate at the moment, but if  
<br>
you're running in an ssh environment, you generally have 2 choices to  
<br>
attach serial debuggers:
<br>
<p>1. Put a loop in your app that pauses until you can attach a  
<br>
debugger.  Perhaps something like this:
<br>
<p>{ int i = 0; printf(&quot;pid %d ready\n&quot;, getpid()); while (0 == i) sleep  
<br>
(5); }
<br>
<p>Kludgey and horrible, but it works.
<br>
<p>2. mpirun an xterm with gdb.  You'll need to specifically use the -d  
<br>
option to mpirun in order to keep the ssh sessions alive to relay  
<br>
back your X information, or separately setup your X channels yourself  
<br>
(e.g., if you're on a closed network, it may be acceptable to &quot;xhost  
<br>
+&quot; the nodes that you're running on and just manually setup the  
<br>
DISPLAY variable for the target nodes, perhaps via the -x option to  
<br>
mpirun) -- in which case you would not need to use the -d option to  
<br>
mpirun.
<br>
<p>Make sense?
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2441.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2439.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2439.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2441.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2441.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2442.php">Adrian Knoth: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2444.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2446.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
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
