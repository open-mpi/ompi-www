<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 23 20:38:54 2007" -->
<!-- isoreceived="20070424003854" -->
<!-- sent="Mon, 23 Apr 2007 17:38:38 -0700 (PDT)" -->
<!-- isosent="20070424003838" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="[OMPI users] Bug in orte/mca/pls/rsh/pls_rsh_module.c" -->
<!-- id="Pine.GSO.4.64.0704231732510.4550_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-23 20:38:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3120.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Previous message:</strong> <a href="3118.php">Bert Wesarg: "[OMPI users] Call for Help: CPU topology needed!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3122.php">Jeff Squyres: "Re: [OMPI users] Bug in orte/mca/pls/rsh/pls_rsh_module.c"</a>
<li><strong>Reply:</strong> <a href="3122.php">Jeff Squyres: "Re: [OMPI users] Bug in orte/mca/pls/rsh/pls_rsh_module.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After 1.3a1r14155 (not sure how much after but certainly currently) you
<br>
get a SEGV if you use an unknown shell (I use something called ksh93).
<br>
<p>Error is at lines 576-&gt;580
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( i == ORTE_PLS_RSH_SHELL_UNKNOWN ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;WARNING: local probe returned unhandled shell:%s assuming bash\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_pls_rsh_shell_name[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local_sh = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>The lines
<br>
<p>&nbsp;&nbsp;opal_output(0, &quot;WARNING: local probe returned unhandled shell:%s assuming bash\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_pls_rsh_shell_name[i]);
<br>
<p>should be
<br>
<p>&nbsp;&nbsp;opal_output(0, &quot;WARNING: local probe returned unhandled shell:%s assuming bash\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sh_name);
<br>
<p>At 1.3a1r14155, when the i index was at ORTE_PLS_RSH_SHELL_UNKNOWN there was an
<br>
extra &quot;unknown&quot; shell in orte_pls_rsh_shell_name[]
<br>
<p>static const char * orte_pls_rsh_shell_name[] = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;bash&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;zsh&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;tcsh&quot;,       /* tcsh has to be first otherwise strstr finds csh */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;csh&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;ksh&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;sh&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;unknown&quot;
<br>
};
<br>
<p>which prevented the SEGV but you still didn't get your true shell name.
<br>
<p><p>Regards,
<br>
Mostyn
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3120.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Previous message:</strong> <a href="3118.php">Bert Wesarg: "[OMPI users] Call for Help: CPU topology needed!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3122.php">Jeff Squyres: "Re: [OMPI users] Bug in orte/mca/pls/rsh/pls_rsh_module.c"</a>
<li><strong>Reply:</strong> <a href="3122.php">Jeff Squyres: "Re: [OMPI users] Bug in orte/mca/pls/rsh/pls_rsh_module.c"</a>
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
