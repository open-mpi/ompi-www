<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 26 13:18:57 2007" -->
<!-- isoreceived="20070226181857" -->
<!-- sent="Mon, 26 Feb 2007 13:18:35 -0500" -->
<!-- isosent="20070226181835" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] [devel-core] Running MTT in developers' SVN checkouts" -->
<!-- id="D83E057D-BF24-4956-B525-B21659E5B124_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3857BB049D83424D9DB82753D37CEA554BFF7D_at_taurus.voltaire.com" -->
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
<strong>Date:</strong> 2007-02-26 13:18:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/03/0277.php">Bill D'amico: "[MTT users] script to resubmit results"</a>
<li><strong>Previous message:</strong> <a href="0275.php">Jeff Squyres: "[MTT users] Running MTT in developers' SVN checkouts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I think that we will be treating these scenarios as the same  
<br>
thing (i.e., running MTT against a developer build will be the same  
<br>
thing as running MTT against an already-installed OMPI.
<br>
<p>At least, that's the intent right now.  We'll see what happens when  
<br>
we start implementing...  :-)
<br>
<p><p>On Feb 26, 2007, at 1:14 PM, Yiftah Shahar wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately we currently do not work with MTT but we are going to  
</span><br>
<span class="quotelev1">&gt; fix
</span><br>
<span class="quotelev1">&gt; this soon.
</span><br>
<span class="quotelev1">&gt; Your suggestions will defiantly make it easy/simple to use MTT and  
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; probably also test the MPI as it is being used in customer's  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; (like with low register memory consumption, no &quot;special&quot; feature  
</span><br>
<span class="quotelev1">&gt; enable,
</span><br>
<span class="quotelev1">&gt; leave-pin ...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One more feature that we are looking for MTT is the ability to test
</span><br>
<span class="quotelev1">&gt; cluster where we already install Open MPI (skip the mpi installation
</span><br>
<span class="quotelev1">&gt; stage and point the test compilation/running to the directory we  
</span><br>
<span class="quotelev1">&gt; want to
</span><br>
<span class="quotelev1">&gt; use).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Yiftah
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-core-bounces_at_[hidden] [mailto:devel-core- 
</span><br>
<span class="quotelev2">&gt;&gt; bounces_at_open-
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Saturday, February 24, 2007 04:33
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Core Developers
</span><br>
<span class="quotelev2">&gt;&gt; Cc: MPI Testing Tool Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [devel-core] Running MTT in developers' SVN checkouts
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At the UTK meeting, a few organizations indicated to me that being
</span><br>
<span class="quotelev2">&gt;&gt; able to run MTT over a developer's tree is getting to be a higher
</span><br>
<span class="quotelev2">&gt;&gt; priority.  So I'd like to ask the developer community exactly what
</span><br>
<span class="quotelev2">&gt;&gt; you want.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MTT is a highly flexible system with lots of available options.  I'm
</span><br>
<span class="quotelev2">&gt;&gt; *guessing* that developers don't really want all that flexibility --
</span><br>
<span class="quotelev2">&gt;&gt; you just want to run a simple thingy against your development tree
</span><br>
<span class="quotelev2">&gt;&gt; and get a simple text report at the end indicating &quot;passed&quot; or
</span><br>
<span class="quotelev1">&gt; &quot;failed&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, at least *some* flexibility is going to be required -- every
</span><br>
<span class="quotelev2">&gt;&gt; developer will need to run the tests a different way (different MCA
</span><br>
<span class="quotelev2">&gt;&gt; parameters, different number of processes, different set of
</span><br>
<span class="quotelev2">&gt;&gt; tests, ...etc.).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It would be most helpful to Ethan and me if the developers could send
</span><br>
<span class="quotelev2">&gt;&gt; us  their thoughts on what you want out of MTT to be able to run
</span><br>
<span class="quotelev2">&gt;&gt; against your local development trees.  Here are some suggestions:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. A list of desired use-case scenarios (the more detailed, the
</span><br>
<span class="quotelev1">&gt; better)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. A list of desired outputs (the more detailed -- to include sample
</span><br>
<span class="quotelev2">&gt;&gt; outputs you'd like to see -- the better)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. How the flexibility should be effected (command line?  text config
</span><br>
<span class="quotelev2">&gt;&gt; file?  ...?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. Suggested [default] list of tests to run (trivial?  and/or intel?
</span><br>
<span class="quotelev2">&gt;&gt; and/or ibm?  and/or ...?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 5. Anything else you can think of.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel-core mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel-core mailing list
</span><br>
<span class="quotelev1">&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/03/0277.php">Bill D'amico: "[MTT users] script to resubmit results"</a>
<li><strong>Previous message:</strong> <a href="0275.php">Jeff Squyres: "[MTT users] Running MTT in developers' SVN checkouts"</a>
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
