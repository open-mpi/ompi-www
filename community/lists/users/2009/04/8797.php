<?
$subject_val = "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 17:39:40 2009" -->
<!-- isoreceived="20090406213940" -->
<!-- sent="Mon, 6 Apr 2009 14:39:37 -0700" -->
<!-- isosent="20090406213937" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Factor of 10 loss in performance with 1.3.x" -->
<!-- id="20090406213937.GA71151_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49DA6E50.4030906_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Factor of 10 loss in performance with 1.3.x<br>
<strong>From:</strong> Steve Kargl (<em>sgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 17:39:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8798.php">Steve Lowder: "[OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<li><strong>Previous message:</strong> <a href="8796.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8796.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8810.php">Iain Bason: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8810.php">Iain Bason: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8816.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Apr 06, 2009 at 02:04:16PM -0700, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Steve Kargl wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;I recently upgraded OpenMPI from 1.2.9 to 1.3 and then 1.3.1.
</span><br>
<span class="quotelev2">&gt; &gt;One of my colleagues reported a dramatic drop in performance
</span><br>
<span class="quotelev2">&gt; &gt;with one of his applications.  My investigation shows a factor
</span><br>
<span class="quotelev2">&gt; &gt;of 10 drop in communication over the memory bus.  I've placed
</span><br>
<span class="quotelev2">&gt; &gt;a figure that iilustrates the problem at 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://troutmask.apl.washington.edu/~kargl/ompi_cmp.jpg">http://troutmask.apl.washington.edu/~kargl/ompi_cmp.jpg</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;The legend in the figure has 'ver. 1.2.9  11 &lt;--&gt; 18'.  This
</span><br>
<span class="quotelev2">&gt; &gt;means communication between node 11 and node 18 over GigE 
</span><br>
<span class="quotelev2">&gt; &gt;ethernet in my cluster.  'ver. 1.2.9  20 &lt;--&gt; 20' means
</span><br>
<span class="quotelev2">&gt; &gt;communication between processes on node 20 where node 20 has
</span><br>
<span class="quotelev2">&gt; &gt;8 processors.  The image clearly shows
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Not so clearly in my mind since I have trouble discriminating between 
</span><br>
<span class="quotelev1">&gt; the colors and the overlapping lines and so on.  But I'll take your word 
</span><br>
<span class="quotelev1">&gt; for it that the plot illustrates the point you are reporting.
</span><br>
<p>OK.  I've removed the GigE results in the graph and plotted with
<br>
points as well as lines.  You'll see a red line by itself.  The
<br>
green and blue lines overlap.  The original data is now 
<br>
<p><a href="http://troutmask.apl.washington.edu/~kargl/ompi_cmp_new.jpg">http://troutmask.apl.washington.edu/~kargl/ompi_cmp_new.jpg</a>
<br>
<p><span class="quotelev1">&gt; It appears that you used to have just better than 1-usec latency (which 
</span><br>
<span class="quotelev1">&gt; is reasonable), but then it skyrocketed just over 10x with 1.3.  I did 
</span><br>
<span class="quotelev1">&gt; some sm work, but that first appears in 1.3.2.
</span><br>
<p>According to netpipe, I have
<br>
<p>version 1.3.1
<br>
0: node20.cimu.org
<br>
1: node20.cimu.org
<br>
Latency: 0.000009131
<br>
Sync Time: 0.000018241
<br>
Now starting main loop
<br>
<p>version 1.2.9
<br>
0: node20.cimu.org
<br>
1: node20.cimu.org
<br>
Latency: 0.000000669
<br>
Sync Time: 0.000001811
<br>
<p>So, the latency has indeed gone up.
<br>
<p><span class="quotelev1">&gt; The huge sm latencies are, so far as I know, inconsistent with
</span><br>
<span class="quotelev1">&gt; everyone else's experience with 1.3.  Is there any chance you
</span><br>
<span class="quotelev1">&gt; could rebuild all three versions and really confirm that the
</span><br>
<span class="quotelev1">&gt; observed difference can actually be attributed to differences
</span><br>
<span class="quotelev1">&gt; in the OMPI source code?  And/or run with &quot;--mca btl 
</span><br>
<span class="quotelev1">&gt; self,sm&quot; to make sure that the on-node message passing is indeed using sm?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The command lines I used are
<br>
<p>/usr/local/openmpi-1.2.9/bin/mpicc -o z -O -static GetOpt.c netmpi.c
<br>
/usr/local/openmpi-1.2.9/bin/mpiexec -machinefile mf_ompi_2 -n 2 ./z
<br>
<p>/usr/local/openmpi-1.3.1/bin/mpicc -o z -O -static GetOpt.c netmpi.c
<br>
/usr/local/openmpi-1.3.1/bin/mpiexec --mca btl self,sm -machinefile \
<br>
&nbsp;&nbsp;&nbsp;mf_ompi_2 -n 2 ./z
<br>
<p>There is no change in the results as can be seen at
<br>
<p><a href="http://troutmask.apl.washington.edu/~kargl/ompi_cmp_self.sm.jpg">http://troutmask.apl.washington.edu/~kargl/ompi_cmp_self.sm.jpg</a>
<br>
<p>The machinefile contains the single line 'node20.cimu.org slots=2'.
<br>
<p><p>I can rebuild 1.2.9 and 1.3.1.  Is there any particular configure
<br>
options that I should enable/disable?
<br>
<p><pre>
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8798.php">Steve Lowder: "[OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<li><strong>Previous message:</strong> <a href="8796.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8796.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8810.php">Iain Bason: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8810.php">Iain Bason: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8816.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
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
