<?
$subject_val = "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 14:27:17 2009" -->
<!-- isoreceived="20090331182717" -->
<!-- sent="Tue, 31 Mar 2009 19:27:12 +0100" -->
<!-- isosent="20090331182712" -->
<!-- name="Kevin McManus" -->
<!-- email="k.mcmanus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem" -->
<!-- id="20090331182712.GO23981_at_gre.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E789A34D-6B3B-4540-9CEE-2B5BF1005FA3_at_cisco.com" -->
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
<strong>From:</strong> Kevin McManus (<em>k.mcmanus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 14:27:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8682.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Previous message:</strong> <a href="8680.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>In reply to:</strong> <a href="8679.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8685.php">Bogdan Costescu: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 31, 2009 at 01:37:22PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 31, 2009, at 1:31 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Can you manually run UNAME_REL=`(/bin/uname -X|grep Release|sed -e
</span><br>
<span class="quotelev2">&gt; &gt;'s/.*= //')` in your shell without error?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Better would be to put this small script by itself:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #! /bin/sh
</span><br>
<span class="quotelev1">&gt; UNAME_REL=`(/bin/uname -X|grep Release|sed -e 's/.*= //')`
</span><br>
<span class="quotelev1">&gt; echo got $UNAME_REL
</span><br>
<span class="quotelev1">&gt; exit 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>-&gt;cat zeb.sh
<br>
#! /bin/sh
<br>
UNAME_REL=`(/bin/uname -X|grep Release|sed -e 's/.*= //')`
<br>
echo got $UNAME_REL
<br>
exit 0
<br>
<p>-&gt;./zeb.sh
<br>
/bin/uname: invalid option -- X
<br>
Try `/bin/uname --help' for more information.
<br>
got
<br>
-&gt;
<br>
<p>I think this is the right line of investigation but I don't know enough
<br>
about how config works. It seems to me that something upsets that
<br>
parser and the parentheses no longer match. If I copy hack config chasing
<br>
out the reported unexpected `)' I reach further instances of unexpected `)' 
<br>
and eventually having hacked out all it reports unexpected EOF.
<br>
<p>I feel that we should start at the beginning, why does config not extract
<br>
x86_64 for itself from uname -m???
<br>
<p>Thanks for your help
<br>
<p><p>k.mcmanus_at_[hidden] - <a href="http://staffweb.cms.gre.ac.uk/~k.mcmanus">http://staffweb.cms.gre.ac.uk/~k.mcmanus</a>
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
<li><strong>Next message:</strong> <a href="8682.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Previous message:</strong> <a href="8680.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>In reply to:</strong> <a href="8679.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8685.php">Bogdan Costescu: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
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
