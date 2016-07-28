<?
$subject_val = "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 16:00:19 2009" -->
<!-- isoreceived="20090330200019" -->
<!-- sent="Mon, 30 Mar 2009 21:00:14 +0100" -->
<!-- isosent="20090330200014" -->
<!-- name="Kevin McManus" -->
<!-- email="k.mcmanus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem" -->
<!-- id="20090330200014.GZ13818_at_gre.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20090330190113.GG26929_at_sun.com" -->
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
<strong>From:</strong> Kevin McManus (<em>k.mcmanus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 16:00:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8658.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Critical bug notice"</a>
<li><strong>Previous message:</strong> <a href="8656.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>In reply to:</strong> <a href="8653.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Grasping at straws, I suggest putting /bin before /usr/bin in your
</span><br>
<span class="quotelev1">&gt; PATH (we may be using different versions of grep, gawk, etc.). Try
</span><br>
<span class="quotelev1">&gt; removing Absoft, Intel, and Pathscale compilers from your environment.
</span><br>
<p>I have set .bashrc to give me
<br>
~&gt; echo $PATH
<br>
/bin:/sbin:/usr/bin:/usr/sbin/:/usr/local/bin:/usr/local/SS12/sunstudio12/bin
<br>
~&gt; which cc
<br>
/usr/bin/cc
<br>
~&gt; which gawk
<br>
/bin/gawk
<br>
<p>No change, I still need to pass x86_64, I still get unexpected token `('
<br>
<p><p><p>k.mcmanus_at_[hidden] - <a href="http://staffweb.cms.gre.ac.uk/~k.mcmanus">http://staffweb.cms.gre.ac.uk/~k.mcmanus</a>
<br>
--------------------------------------------------------------
<br>
Dr Kevin McManus                                Queen Mary 413
<br>
School of Computing &amp; Mathematical Sciences,
<br>
University of Greenwich,
<br>
Old Royal Naval College,
<br>
Park Row, Greenwich,                   Tel +44 (0)208 331 8719 
<br>
London, SE10 9LS                       Fax +44 (0)208 331 8665
<br>
--------------------------------------------------------------
<br>
<p>University of Greenwich, a charity and company limited by
<br>
guarantee, registered in England (reg no. 986729)
<br>
Registered Office: Old Royal Naval College
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8658.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Critical bug notice"</a>
<li><strong>Previous message:</strong> <a href="8656.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>In reply to:</strong> <a href="8653.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
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
