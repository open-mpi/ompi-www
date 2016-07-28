<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  4 23:35:04 2007" -->
<!-- isoreceived="20070705033504" -->
<!-- sent="Wed, 4 Jul 2007 21:34:52 -0600" -->
<!-- isosent="20070705033452" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to find any HCAs .." -->
<!-- id="9F3A2360-E2C6-4839-A7E0-6A42EA993BDD_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="468C55B2.70102_at_its.monash.edu.au" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-04 23:34:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3573.php">Graham Jenkins: "Re: [OMPI users] Unable to find any HCAs .."</a>
<li><strong>Previous message:</strong> <a href="3571.php">Graham Jenkins: "[OMPI users] Unable to find any HCAs .."</a>
<li><strong>In reply to:</strong> <a href="3571.php">Graham Jenkins: "[OMPI users] Unable to find any HCAs .."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3573.php">Graham Jenkins: "Re: [OMPI users] Unable to find any HCAs .."</a>
<li><strong>Reply:</strong> <a href="3573.php">Graham Jenkins: "Re: [OMPI users] Unable to find any HCAs .."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 4, 2007, at 8:21 PM, Graham Jenkins wrote:
<br>
<p><span class="quotelev1">&gt; I'm using the openmpi-1.1.1-5.el5.x86_64 RPM on a Scientific Linux 5
</span><br>
<span class="quotelev1">&gt; cluster, with no installed HCAs. And a simple MPI job submitted to  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; cluster runs OK .. except that it issues messages for each node  
</span><br>
<span class="quotelev1">&gt; like the
</span><br>
<span class="quotelev1">&gt; one shown below.  Is there some way I can supress these, perhaps by an
</span><br>
<span class="quotelev1">&gt; appropriate entry in /etc/openmpi-mca-params.conf ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't open sysfs class 'infiniband_verbs'.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; [0,1,0]: OpenIB on host localhost was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<p>Yes, there is a line you can add to /etc/openmpi-mca-params.conf:
<br>
<p>btl=^openib
<br>
<p>will tell Open MPI to use any available btls (our network transport  
<br>
layer) except openib.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian W. Barrett
   Networking Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3573.php">Graham Jenkins: "Re: [OMPI users] Unable to find any HCAs .."</a>
<li><strong>Previous message:</strong> <a href="3571.php">Graham Jenkins: "[OMPI users] Unable to find any HCAs .."</a>
<li><strong>In reply to:</strong> <a href="3571.php">Graham Jenkins: "[OMPI users] Unable to find any HCAs .."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3573.php">Graham Jenkins: "Re: [OMPI users] Unable to find any HCAs .."</a>
<li><strong>Reply:</strong> <a href="3573.php">Graham Jenkins: "Re: [OMPI users] Unable to find any HCAs .."</a>
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
