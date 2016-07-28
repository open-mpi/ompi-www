<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 16 10:03:45 2006" -->
<!-- isoreceived="20060616140345" -->
<!-- sent="Fri, 16 Jun 2006 10:03:44 -0400" -->
<!-- isosent="20060616140344" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTMinterface" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFA433FD_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTMinterface" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-16 10:03:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1434.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI C++ examples of user defined MPI types(inherited classes)?"</a>
<li><strong>Previous message:</strong> <a href="1432.php">Eric Thibodeau: "[OMPI users] pls:rsh: execv failed with errno=2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1436.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTMinterface"</a>
<li><strong>Reply:</strong> <a href="1436.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTMinterface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Martin Schaff&#246;ner
</span><br>
<span class="quotelev1">&gt; Sent: Friday, June 16, 2006 9:50 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Openmpi 1.0.3svn10374 not launching 
</span><br>
<span class="quotelev1">&gt; apps throughTMinterface
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (inside a PBS job)
</span><br>
<span class="quotelev2">&gt; &gt; pbsdsh -&lt;N&gt; -v hostname
</span><br>
<p>As you indicated, this seems to work for you.  Good.
<br>
<p><span class="quotelev2">&gt; &gt; (inside a PBS job)
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np &lt;N&gt; -d --mca pls_tm_debug 1 hostname
</span><br>
<p><span class="quotelev1">&gt; So, #1 works (I know because we're constantly using pbsdsh 
</span><br>
<span class="quotelev1">&gt; and OSC's mpiexec 
</span><br>
<span class="quotelev1">&gt; for mpich-type implementations). #2 doesn't work; I'll repeat 
</span><br>
<span class="quotelev1">&gt; the session log 
</span><br>
<span class="quotelev1">&gt; from my first post, this time (hopefully!!!) with linebreaks 
</span><br>
<p>Can you repeat this and run a non-MPI executable such as &quot;hostname&quot;?  I want to take MPI out of the equation and just test the launching system.
<br>
<p>Can you also verify that you are correctly matching your OMPI installations on all nodes?  I.e., that you've got Open MPI installed in the same location on all nodes in your cluster, and your PATH and LD_LIBRARY_PATH are pointing to the version of Open MPI that you intend to use.
<br>
<p><span class="quotelev1">&gt; (could it be 
</span><br>
<span class="quotelev1">&gt; that the mailing list has problems with utf8 posts?):
</span><br>
<p>I actually got both your session logs ok...?
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
<li><strong>Next message:</strong> <a href="1434.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI C++ examples of user defined MPI types(inherited classes)?"</a>
<li><strong>Previous message:</strong> <a href="1432.php">Eric Thibodeau: "[OMPI users] pls:rsh: execv failed with errno=2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1436.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTMinterface"</a>
<li><strong>Reply:</strong> <a href="1436.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTMinterface"</a>
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
