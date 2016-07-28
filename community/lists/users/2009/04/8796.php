<?
$subject_val = "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 17:04:49 2009" -->
<!-- isoreceived="20090406210449" -->
<!-- sent="Mon, 06 Apr 2009 14:04:16 -0700" -->
<!-- isosent="20090406210416" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Factor of 10 loss in performance with 1.3.x" -->
<!-- id="49DA6E50.4030906_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090406163346.GA84785_at_troutmask.apl.washington.edu" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 17:04:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8797.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8795.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>In reply to:</strong> <a href="8787.php">Steve Kargl: "[OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8797.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8797.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Steve Kargl wrote:
<br>
<p><span class="quotelev1">&gt;I recently upgraded OpenMPI from 1.2.9 to 1.3 and then 1.3.1.
</span><br>
<span class="quotelev1">&gt;One of my colleagues reported a dramatic drop in performance
</span><br>
<span class="quotelev1">&gt;with one of his applications.  My investigation shows a factor
</span><br>
<span class="quotelev1">&gt;of 10 drop in communication over the memory bus.  I've placed
</span><br>
<span class="quotelev1">&gt;a figure that iilustrates the problem at 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;<a href="http://troutmask.apl.washington.edu/~kargl/ompi_cmp.jpg">http://troutmask.apl.washington.edu/~kargl/ompi_cmp.jpg</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The legend in the figure has 'ver. 1.2.9  11 &lt;--&gt; 18'.  This
</span><br>
<span class="quotelev1">&gt;means communication between node 11 and node 18 over GigE 
</span><br>
<span class="quotelev1">&gt;ethernet in my cluster.  'ver. 1.2.9  20 &lt;--&gt; 20' means
</span><br>
<span class="quotelev1">&gt;communication between processes on node 20 where node 20 has
</span><br>
<span class="quotelev1">&gt;8 processors.  The image clearly shows
</span><br>
<span class="quotelev1">&gt;
</span><br>
Not so clearly in my mind since I have trouble discriminating between 
<br>
the colors and the overlapping lines and so on.  But I'll take your word 
<br>
for it that the plot illustrates the point you are reporting.
<br>
<p>It appears that you used to have just better than 1-usec latency (which 
<br>
is reasonable), but then it skyrocketed just over 10x with 1.3.  I did 
<br>
some sm work, but that first appears in 1.3.2.  The huge sm latencies 
<br>
are, so far as I know, inconsistent with everyone else's experience with 
<br>
1.3.  Is there any chance you could rebuild all three versions and 
<br>
really confirm that the observed difference can actually be attributed 
<br>
to differences in the OMPI source code?  And/or run with &quot;--mca btl 
<br>
self,sm&quot; to make sure that the on-node message passing is indeed using sm?
<br>
<p><span class="quotelev1">&gt;that communication over
</span><br>
<span class="quotelev1">&gt;GigE is consistent among the versions of OpenMPI.  However, some
</span><br>
<span class="quotelev1">&gt;change in going from 1.2.9 to 1.3.x is causing a drop in
</span><br>
<span class="quotelev1">&gt;communication between processes on a single node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Things to note.  Nodes 11, 18, and 20 are essentially idle
</span><br>
<span class="quotelev1">&gt;before and after a test.  configure was run with the same set
</span><br>
<span class="quotelev1">&gt;of options except with 1.3 and 1.3.1 I needed to disable ipv6:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./configure --prefix=/usr/local/openmpi-1.2.9 \
</span><br>
<span class="quotelev1">&gt;   --enable-orterun-prefix-by-default --enable-static
</span><br>
<span class="quotelev1">&gt;   --disable-shared
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./configure --prefix=/usr/local/openmpi-1.3.1 \
</span><br>
<span class="quotelev1">&gt;   --enable-orterun-prefix-by-default --enable-static
</span><br>
<span class="quotelev1">&gt;   --disable-shared --disable-ipv6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./configure --prefix=/usr/local/openmpi-1.3.1 \
</span><br>
<span class="quotelev1">&gt;   --enable-orterun-prefix-by-default --enable-static
</span><br>
<span class="quotelev1">&gt;   --disable-shared --disable-ipv6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The operating system is FreeBSD 8.0 where nodes 18 and 20
</span><br>
<span class="quotelev1">&gt;are quad-core, dual-cpu opteron based systems and node 11
</span><br>
<span class="quotelev1">&gt;is a dual-core, dual-cpu opteron based system.  For additional
</span><br>
<span class="quotelev1">&gt;information, I've placed the output of ompi_info at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;<a href="http://troutmask.apl.washington.edu/~kargl/ompi_info-1.2.9">http://troutmask.apl.washington.edu/~kargl/ompi_info-1.2.9</a>
</span><br>
<span class="quotelev1">&gt;<a href="http://troutmask.apl.washington.edu/~kargl/ompi_info-1.3.0">http://troutmask.apl.washington.edu/~kargl/ompi_info-1.3.0</a>
</span><br>
<span class="quotelev1">&gt;<a href="http://troutmask.apl.washington.edu/~kargl/ompi_info-1.3.1">http://troutmask.apl.washington.edu/~kargl/ompi_info-1.3.1</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Any hints on tuning 1.3.1 would be appreciated?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8797.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8795.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>In reply to:</strong> <a href="8787.php">Steve Kargl: "[OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8797.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8797.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
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
