<?
$subject_val = "Re: [OMPI users] Deprecated parameter: orte_rsh_agent";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  2 18:14:04 2013" -->
<!-- isoreceived="20131002221404" -->
<!-- sent="Wed, 2 Oct 2013 22:14:02 +0000" -->
<!-- isosent="20131002221402" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deprecated parameter: orte_rsh_agent" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9184AD_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6F4C7B29-4928-459B-A1B1-E34F5A4246FA_at_alaska.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deprecated parameter: orte_rsh_agent<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-02 18:14:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22755.php">Panos Labropoulos: "[OMPI users] CPU binding"</a>
<li><strong>Previous message:</strong> <a href="22753.php">Oralee Nudson: "Re: [OMPI users] Deprecated parameter: orte_rsh_agent"</a>
<li><strong>In reply to:</strong> <a href="22753.php">Oralee Nudson: "Re: [OMPI users] Deprecated parameter: orte_rsh_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22758.php">Oralee Nudson: "Re: [OMPI users] Deprecated parameter: orte_rsh_agent"</a>
<li><strong>Reply:</strong> <a href="22758.php">Oralee Nudson: "Re: [OMPI users] Deprecated parameter: orte_rsh_agent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For even more ompi_info tricks, note that there's a &quot;parsable&quot; output mode, where you can grep/cut/awk/etc.  For example:
<br>
<p>-----
<br>
$ ompi_info --all --parsable | grep orte_rsh
<br>
mca:orte:base:param:orte_rsh_agent:value:ssh : rsh
<br>
mca:orte:base:param:orte_rsh_agent:source:default
<br>
mca:orte:base:param:orte_rsh_agent:status:writeable
<br>
mca:orte:base:param:orte_rsh_agent:level:9
<br>
mca:orte:base:param:orte_rsh_agent:help:The command used to launch executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
<br>
mca:orte:base:param:orte_rsh_agent:deprecated:yes
<br>
mca:orte:base:param:orte_rsh_agent:type:string
<br>
mca:orte:base:param:orte_rsh_agent:synonym_of:name:plm_rsh_agent
<br>
mca:orte:base:param:orte_rsh_agent:disabled:false
<br>
mca:plm:rsh:param:plm_rsh_agent:synonym:name:orte_rsh_agent
<br>
-----
<br>
<p>Note the &quot;deprecated&quot; flag, and then see the one that has orte_rsh_agent as a synonym.
<br>
<p>Make sense?
<br>
<p><p><p>On Oct 2, 2013, at 5:57 PM, Oralee Nudson &lt;onudson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Okay.  Thank you for the information.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 2, 2013, at 12:30 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 2, 2013, at 4:11 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &quot;ssh :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        rsh&quot;, data source: default, level: 9 dev/all, type:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        string, synonyms: pls_rsh_agent, orte_rsh_agent)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        The command used to launch executables on remote
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just in case you got lost in the output -- you can see here that plm_rsh_agent is what replaced orte_rsh_agent.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22755.php">Panos Labropoulos: "[OMPI users] CPU binding"</a>
<li><strong>Previous message:</strong> <a href="22753.php">Oralee Nudson: "Re: [OMPI users] Deprecated parameter: orte_rsh_agent"</a>
<li><strong>In reply to:</strong> <a href="22753.php">Oralee Nudson: "Re: [OMPI users] Deprecated parameter: orte_rsh_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22758.php">Oralee Nudson: "Re: [OMPI users] Deprecated parameter: orte_rsh_agent"</a>
<li><strong>Reply:</strong> <a href="22758.php">Oralee Nudson: "Re: [OMPI users] Deprecated parameter: orte_rsh_agent"</a>
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
