<?
$subject_val = "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 15:01:18 2009" -->
<!-- isoreceived="20090330190118" -->
<!-- sent="Mon, 30 Mar 2009 14:01:13 -0500" -->
<!-- isosent="20090330190113" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem" -->
<!-- id="20090330190113.GG26929_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20090330182628.GW13818_at_gre.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 15:01:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8654.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8652.php">Jeff Squyres: "Re: [OMPI users] Possible regression from 1.2 to 1.3 when BLACS isinvolved"</a>
<li><strong>In reply to:</strong> <a href="8650.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8655.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Reply:</strong> <a href="8655.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Reply:</strong> <a href="8657.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Mar/30/2009 07:26:28PM, Kevin McManus wrote:
<br>
<span class="quotelev3">&gt; &gt; &gt; you run 'uname -X'?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; uname -X gives me &quot;invalid option&quot; on RHEL {4,5} and SLES {9,10}.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which is what I would expect
</span><br>
<span class="quotelev1">&gt; do you also need to supply a platform identity/type as an argument?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Post your config.log file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; attached to previous relpy
</span><br>
<span class="quotelev1">&gt; let me know if you need it re-sending
</span><br>
<p>Grasping at straws, I suggest putting /bin before /usr/bin in your
<br>
PATH (we may be using different versions of grep, gawk, etc.). Try
<br>
removing Absoft, Intel, and Pathscale compilers from your environment.
<br>
<p>Does a plain configure (using no options) work?  Maybe you could try
<br>
removing configure options, to isolate which option is causing the
<br>
problem.
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; k.mcmanus_at_[hidden] - <a href="http://staffweb.cms.gre.ac.uk/~k.mcmanus">http://staffweb.cms.gre.ac.uk/~k.mcmanus</a>
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr Kevin McManus                                Queen Mary 413
</span><br>
<span class="quotelev1">&gt; School of Computing &amp; Mathematical Sciences,
</span><br>
<span class="quotelev1">&gt; University of Greenwich,
</span><br>
<span class="quotelev1">&gt; Old Royal Naval College,
</span><br>
<span class="quotelev1">&gt; Park Row, Greenwich,                   Tel +44 (0)208 331 8719 
</span><br>
<span class="quotelev1">&gt; London, SE10 9LS                       Fax +44 (0)208 331 8665
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; University of Greenwich, a charity and company limited by
</span><br>
<span class="quotelev1">&gt; guarantee, registered in England (reg no. 986729)
</span><br>
<span class="quotelev1">&gt; Registered Office: Old Royal Naval College
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
<li><strong>Next message:</strong> <a href="8654.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8652.php">Jeff Squyres: "Re: [OMPI users] Possible regression from 1.2 to 1.3 when BLACS isinvolved"</a>
<li><strong>In reply to:</strong> <a href="8650.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8655.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Reply:</strong> <a href="8655.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Reply:</strong> <a href="8657.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
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
