<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  5 00:30:58 2007" -->
<!-- isoreceived="20070705043058" -->
<!-- sent="Thu, 05 Jul 2007 14:30:52 +1000" -->
<!-- isosent="20070705043052" -->
<!-- name="Graham Jenkins" -->
<!-- email="Graham.Jenkins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to find any HCAs .." -->
<!-- id="468C73FC.9000405_at_its.monash.edu.au" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9F3A2360-E2C6-4839-A7E0-6A42EA993BDD_at_lanl.gov" -->
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
<strong>From:</strong> Graham Jenkins (<em>Graham.Jenkins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-05 00:30:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3574.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3572.php">Brian Barrett: "Re: [OMPI users] Unable to find any HCAs .."</a>
<li><strong>In reply to:</strong> <a href="3572.php">Brian Barrett: "Re: [OMPI users] Unable to find any HCAs .."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Jul 4, 2007, at 8:21 PM, Graham Jenkins wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I'm using the openmpi-1.1.1-5.el5.x86_64 RPM on a Scientific Linux 5
</span><br>
<span class="quotelev2">&gt;&gt; cluster, with no installed HCAs. And a simple MPI job submitted to  
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; cluster runs OK .. except that it issues messages for each node  
</span><br>
<span class="quotelev2">&gt;&gt; like the
</span><br>
<span class="quotelev2">&gt;&gt; one shown below.  Is there some way I can supress these, perhaps by an
</span><br>
<span class="quotelev2">&gt;&gt; appropriate entry in /etc/openmpi-mca-params.conf ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Fatal: couldn't open sysfs class 'infiniband_verbs'.
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Yes, there is a line you can add to /etc/openmpi-mca-params.conf:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl=^openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; will tell Open MPI to use any available btls (our network transport  
</span><br>
<span class="quotelev1">&gt; layer) except openib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
It works! Thanks for that :)
<br>
<p><p><pre>
-- 
Graham Jenkins
Senior Software Specialist, E-Research
Email: Graham.Jenkins_at_[hidden]
Tel:   +613 9905-5942
Mob:   +614 4850-2491
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3574.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3572.php">Brian Barrett: "Re: [OMPI users] Unable to find any HCAs .."</a>
<li><strong>In reply to:</strong> <a href="3572.php">Brian Barrett: "Re: [OMPI users] Unable to find any HCAs .."</a>
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
