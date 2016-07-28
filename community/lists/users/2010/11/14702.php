<?
$subject_val = "Re: [OMPI users] Deprecated parameter: plm_rsh_agent";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  5 14:54:58 2010" -->
<!-- isoreceived="20101105185458" -->
<!-- sent="Fri, 5 Nov 2010 12:54:53 -0600" -->
<!-- isosent="20101105185453" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deprecated parameter: plm_rsh_agent" -->
<!-- id="ABDB6C70-267C-40D9-A20D-6E3ADE08214C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4CD44FCC.7030509_at_penguincomputing.com" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-05 14:54:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14703.php">Joshua Bernstein: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<li><strong>Previous message:</strong> <a href="14701.php">Joshua Bernstein: "[OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<li><strong>In reply to:</strong> <a href="14701.php">Joshua Bernstein: "[OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14703.php">Joshua Bernstein: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<li><strong>Reply:</strong> <a href="14703.php">Joshua Bernstein: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
<p>I -think- the new name is orte_rsh_agent.  At least according to  
<br>
ompi_info.
<br>
<p>$ ompi_info -a --parsable | grep orte_rsh_agent
<br>
mca:orte:base:param:orte_rsh_agent:value:ssh : rsh
<br>
mca:orte:base:param:orte_rsh_agent:data_source:default value
<br>
mca:orte:base:param:orte_rsh_agent:status:writable
<br>
mca:orte:base:param:orte_rsh_agent:help:The command used to launch  
<br>
executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
<br>
mca:orte:base:param:orte_rsh_agent:deprecated:no
<br>
mca:orte:base:param:orte_rsh_agent:synonym:name:pls_rsh_agent
<br>
mca:orte:base:param:orte_rsh_agent:synonym:name:plm_rsh_agent
<br>
mca:plm:base:param:plm_rsh_agent:synonym_of:name:orte_rsh_agent
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Nov 5, 2010, at 12:41 PM, Joshua Bernstein wrote:
&gt; Hello All,
&gt;
&gt; When building the examples included with OpenMPI version 1.5 I see a  
&gt; message printed as follows:
&gt;
&gt; --------------------------------------------------------------------------
&gt; A deprecated MCA parameter value was specified in an MCA parameter
&gt; file.  Deprecated MCA parameters should be avoided; they may disappear
&gt; in future releases.
&gt;
&gt;  Deprecated parameter: plm_rsh_agent
&gt; --------------------------------------------------------------------------
&gt;
&gt; While I know that in pre 1.3.x releases the variable was  
&gt; pls_rsh_agent, plm_rsh_agent worked all the way through at least  
&gt; 1.4.3. What is the new keyword name? I can't seem to find it in the  
&gt; FAQ located here:
&gt;
&gt; <a href="http://www.open-mpi.org/faq/?category=rsh">http://www.open-mpi.org/faq/?category=rsh</a>
&gt;
&gt; -Josh
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14703.php">Joshua Bernstein: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<li><strong>Previous message:</strong> <a href="14701.php">Joshua Bernstein: "[OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<li><strong>In reply to:</strong> <a href="14701.php">Joshua Bernstein: "[OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14703.php">Joshua Bernstein: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<li><strong>Reply:</strong> <a href="14703.php">Joshua Bernstein: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
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
