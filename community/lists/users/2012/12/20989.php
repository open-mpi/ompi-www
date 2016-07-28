<?
$subject_val = "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 10:23:44 2012" -->
<!-- isoreceived="20121218152344" -->
<!-- sent="Tue, 18 Dec 2012 10:23:39 -0500" -->
<!-- isosent="20121218152339" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17" -->
<!-- id="0462F794-E223-4AE8-B53C-F3AF537DADD3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50D08688.4050203_at_txcorp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-18 10:23:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20990.php">Ralph Castain: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="20988.php">JR Cary: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>In reply to:</strong> <a href="20988.php">JR Cary: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20990.php">Ralph Castain: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Reply:</strong> <a href="20990.php">Ralph Castain: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 18, 2012, at 10:06 AM, JR Cary wrote:
<br>
<p><span class="quotelev1">&gt; So, IMO, OpenMPI would have to turn to a different
</span><br>
<span class="quotelev1">&gt; group for support.  E.g., Microsoft compatible HPC
</span><br>
<span class="quotelev1">&gt; application vendors.  And for that one would need a
</span><br>
<span class="quotelev1">&gt; compelling case of being better in, e.g., performance.
</span><br>
<p>I doubt that a performance case could be made.  That is, I don't expect modern versions of Windows are any more/less efficient and integer/floating point ops (which are key to HPC apps) than modern versions of Linux or other OS's.  The underlying x86 hardware is the same (in most/commodity cases), after all.
<br>
<p>Windows also has (effectively) an OS-bypass network stack, like Linux, for network providers.
<br>
<p>Hence, I don't want to open the &quot;Windows performance vs. Linux performance&quot; religious debate.  I'm assuming that if someone cared, they could get comparable performance out of Windows and Linux.
<br>
<p><span class="quotelev1">&gt; Perhaps there is another way?
</span><br>
<p><p>At this point, I think we're up for volunteers.  :-\
<br>
<p>FWIW: I'm still debating these cygwin patches.  
<br>
<p>The cmake/native build process will likely go if no one steps up to maintain it.  But in our discussions, I don't think we've delineated between &quot;Windows native&quot; and &quot;cygwin&quot;: a major difference is that he cygwin build uses the same Autotools build system that OMPI uses on POSIX systems.  And I don't know how much custom code cygwin requires vs. native Windows code (although I seem to recall that native windows code definitely performs better than its cygwin counterparts -- e.g., Windows SOCKETs are faster then cygwin POSIX sockets).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20990.php">Ralph Castain: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="20988.php">JR Cary: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>In reply to:</strong> <a href="20988.php">JR Cary: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20990.php">Ralph Castain: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Reply:</strong> <a href="20990.php">Ralph Castain: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
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
