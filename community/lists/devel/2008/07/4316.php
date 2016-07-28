<?
$subject_val = "Re: [OMPI devel] v1.3 RM: need a ruling";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 10:19:58 2008" -->
<!-- isoreceived="20080711141958" -->
<!-- sent="Fri, 11 Jul 2008 10:10:02 -0400" -->
<!-- isosent="20080711141002" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.3 RM: need a ruling" -->
<!-- id="C13C1EAC-0099-45AD-A786-EBDCFA4A2787_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="487764BF.8010501_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.3 RM: need a ruling<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-11 10:10:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4317.php">Terry Dontje: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Previous message:</strong> <a href="4315.php">Ralph H Castain: "[OMPI devel] PLM consistency: launch agent param"</a>
<li><strong>In reply to:</strong> <a href="4313.php">Terry Dontje: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 11, 2008, at 9:48 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Check that -- Ralph and I talked more about #1383 and have come up  
</span><br>
<span class="quotelev2">&gt;&gt; with a decent/better solution that a) is not wonky and b) does not  
</span><br>
<span class="quotelev2">&gt;&gt; involve MCA parameter synonyms.  We're working on it in an hg and  
</span><br>
<span class="quotelev2">&gt;&gt; will put it back when done (probably within a business day or three).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I think the MCA synonym stuff *isn't* needed for v1.3 after all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I am not dead yet!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, there was also the name change of pls_rsh_agent to plm_rsh_agent  
</span><br>
<span class="quotelev1">&gt; because the pls's were sucked into plm's (or so I believe).   
</span><br>
<span class="quotelev1">&gt; Anyways, this seems like another case to support synonyms.  Also are  
</span><br>
<span class="quotelev1">&gt; there other pls mca parameters that have had their names changed to  
</span><br>
<span class="quotelev1">&gt; plm?
</span><br>
<p><p>All of them, right?  The whole pls framework is gone -- replaced by plm.
<br>
<p>There are some OB1 and openib parameters that got renamed, too  
<br>
(probably in other BTLs as well -- the pipeline parameters, etc.).  So  
<br>
if we want to bring this functionality over, we can, but we should  
<br>
then also commit to adding deprecated synonyms for all the old names.   
<br>
It's not hard to do (2 function calls per deprecated name: 1) lookup  
<br>
the index of the new name, 2) register a deprecated synonym for that  
<br>
new name), but it does involve some menial labor.
<br>
<p>Ralph raises a good point -- perhaps we should have a definitive  
<br>
policy (that starts in v1.3) about MCA parameters.  I know that Sun  
<br>
has examples for this stuff.  Is there one that we can implement easily?
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
<li><strong>Next message:</strong> <a href="4317.php">Terry Dontje: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Previous message:</strong> <a href="4315.php">Ralph H Castain: "[OMPI devel] PLM consistency: launch agent param"</a>
<li><strong>In reply to:</strong> <a href="4313.php">Terry Dontje: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
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
