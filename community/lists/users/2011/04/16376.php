<?
$subject_val = "Re: [OMPI users] OpenMPI out of band TCP retry exceeded";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 28 09:02:42 2011" -->
<!-- isoreceived="20110428130242" -->
<!-- sent="Thu, 28 Apr 2011 07:01:59 -0600" -->
<!-- isosent="20110428130159" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI out of band TCP retry exceeded" -->
<!-- id="DE9405F3-A36D-475F-A58C-520BA6D15410_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="33AB5DBB-8261-47DB-81EF-C985A3A6979E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI out of band TCP retry exceeded<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-28 09:01:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16377.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Previous message:</strong> <a href="16375.php">Sindhi, Waris             PW: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>In reply to:</strong> <a href="16373.php">Jeff Squyres: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16385.php">Sindhi, Waris             PW: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Reply:</strong> <a href="16385.php">Sindhi, Waris             PW: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 28, 2011, at 6:49 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 28, 2011, at 8:45 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What lead you to conclude 1.2.8?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /opt/openmpi/i386/bin/mpirun -mca btl_openib_verbose 1 --mca btl ^tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --mca pls_ssh_agent ssh -mca oob_tcp_peer_retries 1000 --prefix
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib/openmpi/1.2.8-gcc/bin -np 239 --app procgroup
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; His command line has &quot;1.2.8&quot; in it.
</span><br>
<p>Actually, that isn't totally correct and may point to the problem. The mpirun cmd itself points to a version of OMPI located in /opt/openmpi. The error messages are clearly from a 1.3+ version - they look totally different for 1.2
<br>
<p>However, the prefix passed to the backend nodes points to /usr/lib, and indeed looks like a 1.2.8 version.
<br>
<p>Waris: is this a mistype? Are these two versions actually the same?
<br>
<p>If not, that would explain the problem - you can't mix OMPI versions. As written, the cmd line has the potential to mix one version of mpirun with another version of the daemons.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="16377.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Previous message:</strong> <a href="16375.php">Sindhi, Waris             PW: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>In reply to:</strong> <a href="16373.php">Jeff Squyres: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16385.php">Sindhi, Waris             PW: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Reply:</strong> <a href="16385.php">Sindhi, Waris             PW: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
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
