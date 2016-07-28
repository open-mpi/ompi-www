<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 30 09:31:24 2006" -->
<!-- isoreceived="20060330143124" -->
<!-- sent="Thu, 30 Mar 2006 09:31:23 -0500" -->
<!-- isosent="20060330143123" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.0.1, CentOS 4.2 and gcc4" -->
<!-- id="D79C1C64-57E7-4C4C-BAED-D4F986E2D9C2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4F5BE74AB02653448520E9692496874101E544_at_fscnbc18.brooks.af.mil" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-30 09:31:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0936.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
<li><strong>Previous message:</strong> <a href="0934.php">Ralph Castain: "Re: [OMPI users] Connecting multiple applications"</a>
<li><strong>Maybe in reply to:</strong> <a href="0929.php">Adams Samuel D Contr AFRL/HEDR: "[OMPI users] OMPI 1.0.1, CentOS 4.2 and gcc4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 30, 2006, at 9:24 AM, Adams Samuel D Contr AFRL/HEDR wrote:
<br>
<p><span class="quotelev1">&gt;  Here is the log.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Sent: 3/29/2006 10:57 AM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OMPI 1.0.1, CentOS 4.2 and gcc4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 29, 2006, at 11:35 AM, Adams Samuel D Contr AFRL/HEDR wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; dIt seems like this should be a simple problem.  I am trying to get
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; to compile on a CentOS 4.2 (like Redhat EL 4.2) box.  It has
</span><br>
<span class="quotelev2">&gt;&gt; installed gcc
</span><br>
<span class="quotelev2">&gt;&gt; 3.4, and gcc 4.0.  I want to compile OMPI with gcc4, but I am
</span><br>
<span class="quotelev2">&gt;&gt; getting this
</span><br>
<span class="quotelev2">&gt;&gt; error.  What am I doing wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking how to run the C preprocessor... gcc4
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: C preprocessor &quot;gcc4&quot; fails sanity check
</span><br>
<span class="quotelev2">&gt;&gt; See `config.log' for more details.
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_Cent01 openmpi-1.0.1]#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you include the config.log file -- it will have the information
</span><br>
<span class="quotelev1">&gt; we need to help you.
</span><br>
<p>It looks like you have the environment variable CPP set to gcc4,  
<br>
which is what is causing the problems.  Without arguments, gcc4 runs  
<br>
both the C preprocessor *and* the compiler.  CPP should be set to  
<br>
something that will run *only* the C preprocessor.  I think you would  
<br>
want to set CPP to either the C preprocessor installed with your gcc4  
<br>
setup (I'll admit I dont' know what it is called when program  
<br>
suffixes are added) or to something like &quot;gcc4 -E&quot;.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0936.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
<li><strong>Previous message:</strong> <a href="0934.php">Ralph Castain: "Re: [OMPI users] Connecting multiple applications"</a>
<li><strong>Maybe in reply to:</strong> <a href="0929.php">Adams Samuel D Contr AFRL/HEDR: "[OMPI users] OMPI 1.0.1, CentOS 4.2 and gcc4"</a>
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
