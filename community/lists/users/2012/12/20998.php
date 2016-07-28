<?
$subject_val = "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 12:55:30 2012" -->
<!-- isoreceived="20121218175530" -->
<!-- sent="Tue, 18 Dec 2012 12:55:24 -0500" -->
<!-- isosent="20121218175524" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17" -->
<!-- id="F058F284-8250-4F53-8587-271C5C28C85B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1E2C692C-E022-462F-AD46-D5A386D84A87_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-12-18 12:55:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20999.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="20997.php">Damien: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>In reply to:</strong> <a href="20990.php">Ralph Castain: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20999.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Reply:</strong> <a href="20999.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
...but only of v1.6.x.
<br>
<p>On Dec 18, 2012, at 10:32 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Also, be aware that the Cygwin folks have already released a fully functional port of OMPI to that environment as a package. So if you want OMPI on Cygwin, you can just download and install the Cygwin package - no need to build it yourself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 18, 2012, at 7:23 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 18, 2012, at 10:06 AM, JR Cary wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, IMO, OpenMPI would have to turn to a different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; group for support.  E.g., Microsoft compatible HPC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application vendors.  And for that one would need a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compelling case of being better in, e.g., performance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I doubt that a performance case could be made.  That is, I don't expect modern versions of Windows are any more/less efficient and integer/floating point ops (which are key to HPC apps) than modern versions of Linux or other OS's.  The underlying x86 hardware is the same (in most/commodity cases), after all.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Windows also has (effectively) an OS-bypass network stack, like Linux, for network providers.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hence, I don't want to open the &quot;Windows performance vs. Linux performance&quot; religious debate.  I'm assuming that if someone cared, they could get comparable performance out of Windows and Linux.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Perhaps there is another way?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At this point, I think we're up for volunteers.  :-\
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: I'm still debating these cygwin patches.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The cmake/native build process will likely go if no one steps up to maintain it.  But in our discussions, I don't think we've delineated between &quot;Windows native&quot; and &quot;cygwin&quot;: a major difference is that he cygwin build uses the same Autotools build system that OMPI uses on POSIX systems.  And I don't know how much custom code cygwin requires vs. native Windows code (although I seem to recall that native windows code definitely performs better than its cygwin counterparts -- e.g., Windows SOCKETs are faster then cygwin POSIX sockets).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20999.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="20997.php">Damien: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>In reply to:</strong> <a href="20990.php">Ralph Castain: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20999.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Reply:</strong> <a href="20999.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
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
