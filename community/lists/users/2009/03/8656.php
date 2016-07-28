<?
$subject_val = "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 15:34:26 2009" -->
<!-- isoreceived="20090330193426" -->
<!-- sent="Mon, 30 Mar 2009 20:34:21 +0100" -->
<!-- isosent="20090330193421" -->
<!-- name="Kevin McManus" -->
<!-- email="k.mcmanus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem" -->
<!-- id="20090330193421.GY13818_at_gre.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49D11A46.5020205_at_sun.com" -->
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
<strong>Date:</strong> 2009-03-30 15:34:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8657.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Previous message:</strong> <a href="8655.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>In reply to:</strong> <a href="8654.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8677.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Mar 30, 2009 at 03:15:18PM -0400, Terry Dontje wrote:
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
&lt;snip&gt;
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;-&gt;ls -l /bin/sh
</span><br>
<span class="quotelev2">&gt; &gt;lrwxrwxrwx 1 root root 4 2008-04-02 02:13 /bin/sh -&gt; bash
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; I am using tcsh it may take me a while to set up bash for myself.
</span><br>
<p>I too run tcsh as a login shell but the scripts are all shebanged to run in bash.
<br>
<p>So even more curous
<br>
<p><span class="quotelev2">&gt; &gt;handle MCA bucket. Ungracefully hacking the offending parentheses
</span><br>
<span class="quotelev2">&gt; &gt;from configure causes some v.strange things to happen. I will continue
</span><br>
<span class="quotelev2">&gt; &gt;hacking but until this bears fruit... do you also need to include
</span><br>
<span class="quotelev2">&gt; &gt;'x86_64' as an argument for configure? 
</span><br>
<span class="quotelev1">&gt; I don't, and pretty sure neither does Ethan.
</span><br>
<span class="quotelev2">&gt; &gt;What happens when you run 'uname -X'?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; Interesting I get &quot;uname: invalid option --X&quot;  but should this always 
</span><br>
<span class="quotelev1">&gt; end up turning into &quot;unknown&quot;?
</span><br>
<p>configure line 2903:
<br>
/bin/uname -X     = `(/bin/uname -X) 2&gt;/dev/null     || echo unknown`
<br>
<p>Hmmm... v.interesting
<br>
Why do I need to provide x86_64 as an argument when nobody else seems to????
<br>
<p>There is something v.vstrange going on with my parentheses.
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
<li><strong>Next message:</strong> <a href="8657.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Previous message:</strong> <a href="8655.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>In reply to:</strong> <a href="8654.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8677.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
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
