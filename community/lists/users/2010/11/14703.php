<?
$subject_val = "Re: [OMPI users] Deprecated parameter: plm_rsh_agent";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  5 15:52:28 2010" -->
<!-- isoreceived="20101105195228" -->
<!-- sent="Fri, 05 Nov 2010 12:52:19 -0700" -->
<!-- isosent="20101105195219" -->
<!-- name="Joshua Bernstein" -->
<!-- email="jbernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deprecated parameter: plm_rsh_agent" -->
<!-- id="4CD46073.80806_at_penguincomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ABDB6C70-267C-40D9-A20D-6E3ADE08214C_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deprecated parameter: plm_rsh_agent<br>
<strong>From:</strong> Joshua Bernstein (<em>jbernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-05 15:52:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14704.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14702.php">Samuel K. Gutierrez: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<li><strong>In reply to:</strong> <a href="14702.php">Samuel K. Gutierrez: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14743.php">Jeff Squyres: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<li><strong>Reply:</strong> <a href="14743.php">Jeff Squyres: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Samuel,
<br>
<p>I should have checked ompi_info myself.
<br>
<p>The FAQ on the website should probably be updated to reflect this 
<br>
function change.
<br>
<p>-Joshua Bernstein
<br>
Software Development Manager
<br>
Penguin Computing
<br>
<p>Samuel K. Gutierrez wrote:
<br>
<span class="quotelev1">&gt; Hi Josh,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I -think- the new name is orte_rsh_agent.  At least according to ompi_info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ompi_info -a --parsable | grep orte_rsh_agent
</span><br>
<span class="quotelev1">&gt; mca:orte:base:param:orte_rsh_agent:value:ssh : rsh
</span><br>
<span class="quotelev1">&gt; mca:orte:base:param:orte_rsh_agent:data_source:default value
</span><br>
<span class="quotelev1">&gt; mca:orte:base:param:orte_rsh_agent:status:writable
</span><br>
<span class="quotelev1">&gt; mca:orte:base:param:orte_rsh_agent:help:The command used to launch 
</span><br>
<span class="quotelev1">&gt; executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev1">&gt; mca:orte:base:param:orte_rsh_agent:deprecated:no
</span><br>
<span class="quotelev1">&gt; mca:orte:base:param:orte_rsh_agent:synonym:name:pls_rsh_agent
</span><br>
<span class="quotelev1">&gt; mca:orte:base:param:orte_rsh_agent:synonym:name:plm_rsh_agent
</span><br>
<span class="quotelev1">&gt; mca:plm:base:param:plm_rsh_agent:synonym_of:name:orte_rsh_agent
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 5, 2010, at 12:41 PM, Joshua Bernstein wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When building the examples included with OpenMPI version 1.5 I see a 
</span><br>
<span class="quotelev2">&gt;&gt; message printed as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A deprecated MCA parameter value was specified in an MCA parameter
</span><br>
<span class="quotelev2">&gt;&gt; file.  Deprecated MCA parameters should be avoided; they may disappear
</span><br>
<span class="quotelev2">&gt;&gt; in future releases.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Deprecated parameter: plm_rsh_agent
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While I know that in pre 1.3.x releases the variable was 
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_agent, plm_rsh_agent worked all the way through at least 
</span><br>
<span class="quotelev2">&gt;&gt; 1.4.3. What is the new keyword name? I can't seem to find it in the 
</span><br>
<span class="quotelev2">&gt;&gt; FAQ located here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=rsh">http://www.open-mpi.org/faq/?category=rsh</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Josh
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14704.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14702.php">Samuel K. Gutierrez: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<li><strong>In reply to:</strong> <a href="14702.php">Samuel K. Gutierrez: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14743.php">Jeff Squyres: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<li><strong>Reply:</strong> <a href="14743.php">Jeff Squyres: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
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
