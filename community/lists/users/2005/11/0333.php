<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 14 11:43:28 2005" -->
<!-- isoreceived="20051114164328" -->
<!-- sent="Mon, 14 Nov 2005 09:43:04 -0700" -->
<!-- isosent="20051114164304" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] 1.0rc5 is up" -->
<!-- id="op.sz8op2zmies9li_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="a04f8864216a75ee3b7f1844cf524483_at_open-mpi.org" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-14 11:43:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0334.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Previous message:</strong> <a href="0332.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>In reply to:</strong> <a href="0330.php">Jeff Squyres: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0334.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Reply:</strong> <a href="0334.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 13 Nov 2005 17:53:40 -0700, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I can't believe I missed that, sorry.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; None of the btl's are capable of doing loopback communication except
</span><br>
<span class="quotelev1">&gt; &quot;self.&quot;  Hence, you really can't run &quot;--mca btl foo&quot; if your app ever
</span><br>
<span class="quotelev1">&gt; sends to itself -- you really need to run &quot;--mca btl foo,self&quot; at a
</span><br>
<span class="quotelev1">&gt; minimum.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is not so much an optimization as it is a software engineering
</span><br>
<span class="quotelev1">&gt; decision; we didn't have to include the special send-to-self case in
</span><br>
<span class="quotelev1">&gt; any of the other btl components this way (i.e., less code, less complex
</span><br>
<span class="quotelev1">&gt; maintenance).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 13, 2005, at 7:12 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One other thing I noticed...  You specify -mca btl openib.  Try
</span><br>
<span class="quotelev2">&gt;&gt; specifying -mca btl openib,self.  The self component is used for
</span><br>
<span class="quotelev2">&gt;&gt; &quot;send to self&quot; operations.  This could be the cause of your failures.
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 13, 2005, at 3:02 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Troy --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Were you perchance using multiple processes per node?  If so, we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; literally just fixed some sm btl bugs that could have been affecting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you (they could have caused hangs).  They're fixed in the nightly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; snapshots from today (both trunk and v1.0): r8140.  If you were using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the sm btl and multiple processes per node, could you try again?
</span><br>
<p>As a matter of fact, yes; one process per CPU, each node having 2 CPUs.
<br>
<p>If I change my machinefile to only use one process per node (leaving one  
<br>
CPU idle), the problem dissapears.  However, if I use two CPU's per node  
<br>
(but the same number of overall processes -- meaning half the number of  
<br>
nodes), I recieve the same error:
<br>
***
<br>
[0,1,0][btl_openib_endpoint.c:136:mca_btl_openib_endpoint_post_send] error  
<br>
posting send request errno says Resource temporarily unavailable
<br>
[0,1,0][btl_openib_component.c:655:mca_btl_openib_component_progress]  
<br>
error in posting pending send
<br>
***
<br>
<p>This happens on both RC5 and RC6, with '-mca btl openib' or '-mca btl  
<br>
openib,self'
<br>
<p>On a positive note, I've now been able to complete the 'com' Presta  
<br>
benchmark with GM (which I had previously been unable to do)
<br>
<p>And informationally:  I was using MX version 1.0.3.  I have just installed  
<br>
1.1.0, and I'll be checking that out presently.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0334.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Previous message:</strong> <a href="0332.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>In reply to:</strong> <a href="0330.php">Jeff Squyres: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0334.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Reply:</strong> <a href="0334.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
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
