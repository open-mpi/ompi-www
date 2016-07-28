<?
$subject_val = "Re: [OMPI users] orted: error while loading shared libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  8 09:31:43 2010" -->
<!-- isoreceived="20100408133143" -->
<!-- sent="Thu, 8 Apr 2010 09:31:26 -0400" -->
<!-- isosent="20100408133126" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted: error while loading shared libraries" -->
<!-- id="C13343D3-26C6-4563-85D9-197C9FCD5C43_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5504C1518E7EAE4C912A724C518C07929309F4_at_DURMAIL1.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted: error while loading shared libraries<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-08 09:31:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12589.php">Fernando Lemos: "Re: [OMPI users] orted: error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="12587.php">SLIM H.A.: "[OMPI users] orted: error while loading shared libraries"</a>
<li><strong>In reply to:</strong> <a href="12587.php">SLIM H.A.: "[OMPI users] orted: error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12589.php">Fernando Lemos: "Re: [OMPI users] orted: error while loading shared libraries"</a>
<li><strong>Reply:</strong> <a href="12589.php">Fernando Lemos: "Re: [OMPI users] orted: error while loading shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes.  There is usually a difference between interactive logins and non-interactive logins on which paths, etc. get set.  Look in your shell startup and see if there is somewhere that it exits early (or otherwise doesn't process) for non-interactive logins.
<br>
<p>In short: you need to ensure that your paths (etc.) are setup properly for both interactive and non-interactive logins.
<br>
<p><p><p>On Apr 8, 2010, at 9:06 AM, SLIM H.A. wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI users
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; We built OpenMPI 1.4.1 on a new cluster and get the following error message when starting a test job from the master node:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ham4#mpirun -np 4 --host cn001 /path/hello
</span><br>
<span class="quotelev1">&gt; orted: error while loading shared libraries: libimf.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I found this advice for the intel compiler
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#intel-compilers-static">http://www.open-mpi.org/faq/?category=running#intel-compilers-static</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; but for example
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ham4#ssh cn001 /path/hello
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; works. I think this suggests something of the set up is still missing?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I would be grateful for any advice
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Henk
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12589.php">Fernando Lemos: "Re: [OMPI users] orted: error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="12587.php">SLIM H.A.: "[OMPI users] orted: error while loading shared libraries"</a>
<li><strong>In reply to:</strong> <a href="12587.php">SLIM H.A.: "[OMPI users] orted: error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12589.php">Fernando Lemos: "Re: [OMPI users] orted: error while loading shared libraries"</a>
<li><strong>Reply:</strong> <a href="12589.php">Fernando Lemos: "Re: [OMPI users] orted: error while loading shared libraries"</a>
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
