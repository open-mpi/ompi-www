<?
$subject_val = "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 13:37:26 2009" -->
<!-- isoreceived="20090331173726" -->
<!-- sent="Tue, 31 Mar 2009 13:37:22 -0400" -->
<!-- isosent="20090331173722" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem" -->
<!-- id="E789A34D-6B3B-4540-9CEE-2B5BF1005FA3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49D25360.5060403_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 13:37:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8680.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8678.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="8677.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8681.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Reply:</strong> <a href="8681.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Reply:</strong> <a href="8685.php">Bogdan Costescu: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 31, 2009, at 1:31 PM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Can you manually run UNAME_REL=`(/bin/uname -X|grep Release|sed -e
</span><br>
<span class="quotelev1">&gt; 's/.*= //')` in your shell without error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Better would be to put this small script by itself:
<br>
<p>#! /bin/sh
<br>
UNAME_REL=`(/bin/uname -X|grep Release|sed -e 's/.*= //')`
<br>
echo got $UNAME_REL
<br>
exit 0
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8680.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8678.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="8677.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8681.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Reply:</strong> <a href="8681.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Reply:</strong> <a href="8685.php">Bogdan Costescu: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
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
