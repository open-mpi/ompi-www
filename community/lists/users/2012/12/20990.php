<?
$subject_val = "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 10:32:27 2012" -->
<!-- isoreceived="20121218153227" -->
<!-- sent="Tue, 18 Dec 2012 07:32:20 -0800" -->
<!-- isosent="20121218153220" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17" -->
<!-- id="1E2C692C-E022-462F-AD46-D5A386D84A87_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0462F794-E223-4AE8-B53C-F3AF537DADD3_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-18 10:32:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20991.php">Damien: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="20989.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>In reply to:</strong> <a href="20989.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20998.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Reply:</strong> <a href="20998.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, be aware that the Cygwin folks have already released a fully functional port of OMPI to that environment as a package. So if you want OMPI on Cygwin, you can just download and install the Cygwin package - no need to build it yourself.
<br>
<p><p>On Dec 18, 2012, at 7:23 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 18, 2012, at 10:06 AM, JR Cary wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, IMO, OpenMPI would have to turn to a different
</span><br>
<span class="quotelev2">&gt;&gt; group for support.  E.g., Microsoft compatible HPC
</span><br>
<span class="quotelev2">&gt;&gt; application vendors.  And for that one would need a
</span><br>
<span class="quotelev2">&gt;&gt; compelling case of being better in, e.g., performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I doubt that a performance case could be made.  That is, I don't expect modern versions of Windows are any more/less efficient and integer/floating point ops (which are key to HPC apps) than modern versions of Linux or other OS's.  The underlying x86 hardware is the same (in most/commodity cases), after all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Windows also has (effectively) an OS-bypass network stack, like Linux, for network providers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence, I don't want to open the &quot;Windows performance vs. Linux performance&quot; religious debate.  I'm assuming that if someone cared, they could get comparable performance out of Windows and Linux.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps there is another way?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At this point, I think we're up for volunteers.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: I'm still debating these cygwin patches.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The cmake/native build process will likely go if no one steps up to maintain it.  But in our discussions, I don't think we've delineated between &quot;Windows native&quot; and &quot;cygwin&quot;: a major difference is that he cygwin build uses the same Autotools build system that OMPI uses on POSIX systems.  And I don't know how much custom code cygwin requires vs. native Windows code (although I seem to recall that native windows code definitely performs better than its cygwin counterparts -- e.g., Windows SOCKETs are faster then cygwin POSIX sockets).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20991.php">Damien: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="20989.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>In reply to:</strong> <a href="20989.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20998.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Reply:</strong> <a href="20998.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
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
