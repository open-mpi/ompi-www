<?
$subject_val = "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 14:19:56 2009" -->
<!-- isoreceived="20090331181956" -->
<!-- sent="Tue, 31 Mar 2009 19:19:51 +0100" -->
<!-- isosent="20090331181951" -->
<!-- name="Kevin McManus" -->
<!-- email="k.mcmanus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem" -->
<!-- id="20090331181951.GN23981_at_gre.ac.uk" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Kevin McManus (<em>k.mcmanus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 14:19:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8681.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8679.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>In reply to:</strong> <a href="8677.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 31, 2009 at 01:31:12PM -0400, Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; I was talking with Jeff Squyres about your issue and he thinks the 
</span><br>
<span class="quotelev1">&gt; config.guess issue needs to be resolved first, even though your 
</span><br>
<span class="quotelev1">&gt; specification of x86_64 seems to get you by.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, do you still see the unexpected &quot;(&quot; if you try and run 
</span><br>
<span class="quotelev1">&gt; config/config.guess directly?   The original issue IIRC was:
</span><br>
<p>yes
<br>
<p>-&gt;config/config.guess
<br>
config/config.guess: line 1102: syntax error near unexpected token `('
<br>
config/config.guess: line 1102: `               UNAME_REL=`(/bin/uname -X|grep Release|sed -e 's/.*= //')`'
<br>
-&gt;
<br>
<p><p><span class="quotelev1">&gt; Can you manually run UNAME_REL=`(/bin/uname -X|grep Release|sed -e 
</span><br>
<span class="quotelev1">&gt; 's/.*= //')` in your shell without error?
</span><br>
<p>there is no error as such but uname does not return what is wanted
<br>
<p>-&gt;/bin/uname -X|grep Release|sed -e 's/.*= //'
<br>
/bin/uname: invalid option -- X
<br>
Try `/bin/uname --help' for more information.
<br>
-&gt;
<br>
<p>both of the above operate identically in both tcsh and bash
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
<li><strong>Next message:</strong> <a href="8681.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8679.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>In reply to:</strong> <a href="8677.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
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
