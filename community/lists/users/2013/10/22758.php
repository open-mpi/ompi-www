<?
$subject_val = "Re: [OMPI users] Deprecated parameter: orte_rsh_agent";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  2 21:03:49 2013" -->
<!-- isoreceived="20131003010349" -->
<!-- sent="Wed, 2 Oct 2013 17:03:46 -0800" -->
<!-- isosent="20131003010346" -->
<!-- name="Oralee Nudson" -->
<!-- email="onudson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deprecated parameter: orte_rsh_agent" -->
<!-- id="35102461-8F43-485E-A598-3110C6C0818F_at_alaska.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F9184AD_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Oralee Nudson (<em>onudson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-02 21:03:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22759.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Previous message:</strong> <a href="22757.php">Panos Labropoulos: "Re: [OMPI users] CPU binding"</a>
<li><strong>In reply to:</strong> <a href="22754.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deprecated parameter: orte_rsh_agent"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes,  that is handy!
<br>
Thank you!
<br>
<p>Oralee
<br>
<p><p>On Oct 2, 2013, at 2:14 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; For even more ompi_info tricks, note that there's a &quot;parsable&quot; output mode, where you can grep/cut/awk/etc.  For example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; $ ompi_info --all --parsable | grep orte_rsh
</span><br>
<span class="quotelev1">&gt; mca:orte:base:param:orte_rsh_agent:value:ssh : rsh
</span><br>
<span class="quotelev1">&gt; mca:orte:base:param:orte_rsh_agent:source:default
</span><br>
<span class="quotelev1">&gt; mca:orte:base:param:orte_rsh_agent:status:writeable
</span><br>
<span class="quotelev1">&gt; mca:orte:base:param:orte_rsh_agent:level:9
</span><br>
<span class="quotelev1">&gt; mca:orte:base:param:orte_rsh_agent:help:The command used to launch executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev1">&gt; mca:orte:base:param:orte_rsh_agent:deprecated:yes
</span><br>
<span class="quotelev1">&gt; mca:orte:base:param:orte_rsh_agent:type:string
</span><br>
<span class="quotelev1">&gt; mca:orte:base:param:orte_rsh_agent:synonym_of:name:plm_rsh_agent
</span><br>
<span class="quotelev1">&gt; mca:orte:base:param:orte_rsh_agent:disabled:false
</span><br>
<span class="quotelev1">&gt; mca:plm:rsh:param:plm_rsh_agent:synonym:name:orte_rsh_agent
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note the &quot;deprecated&quot; flag, and then see the one that has orte_rsh_agent as a synonym.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 2, 2013, at 5:57 PM, Oralee Nudson &lt;onudson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Okay.  Thank you for the information.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 2, 2013, at 12:30 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 2, 2013, at 4:11 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &quot;ssh :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                       rsh&quot;, data source: default, level: 9 dev/all, type:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                       string, synonyms: pls_rsh_agent, orte_rsh_agent)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                       The command used to launch executables on remote
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                       nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just in case you got lost in the output -- you can see here that plm_rsh_agent is what replaced orte_rsh_agent.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="22759.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Previous message:</strong> <a href="22757.php">Panos Labropoulos: "Re: [OMPI users] CPU binding"</a>
<li><strong>In reply to:</strong> <a href="22754.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deprecated parameter: orte_rsh_agent"</a>
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
