<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 24 08:10:54 2007" -->
<!-- isoreceived="20070424121054" -->
<!-- sent="Tue, 24 Apr 2007 08:10:36 -0400" -->
<!-- isosent="20070424121036" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in orte/mca/pls/rsh/pls_rsh_module.c" -->
<!-- id="E0F7D670-80D1-4EF0-A9ED-A836B58FE08E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.64.0704231732510.4550_at_aragorn.brc.West.Sun.COM" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-24 08:10:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3123.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Previous message:</strong> <a href="3121.php">John Borchardt: "[OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>In reply to:</strong> <a href="3119.php">Mostyn Lewis: "[OMPI users] Bug in orte/mca/pls/rsh/pls_rsh_module.c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent catch -- many thanks!
<br>
<p>(this code was just updated recently, causing this problem)
<br>
<p><p>On Apr 23, 2007, at 8:38 PM, Mostyn Lewis wrote:
<br>
<p><span class="quotelev1">&gt; After 1.3a1r14155 (not sure how much after but certainly currently)  
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev1">&gt; get a SEGV if you use an unknown shell (I use something called ksh93).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error is at lines 576-&gt;580
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          if ( i == ORTE_PLS_RSH_SHELL_UNKNOWN ) {
</span><br>
<span class="quotelev1">&gt;              opal_output(0, &quot;WARNING: local probe returned  
</span><br>
<span class="quotelev1">&gt; unhandled shell:%s assuming bash\n&quot;,
</span><br>
<span class="quotelev1">&gt;                          orte_pls_rsh_shell_name[i]);
</span><br>
<span class="quotelev1">&gt;              local_sh = true;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The lines
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   opal_output(0, &quot;WARNING: local probe returned unhandled shell:%s  
</span><br>
<span class="quotelev1">&gt; assuming bash\n&quot;,
</span><br>
<span class="quotelev1">&gt;               orte_pls_rsh_shell_name[i]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; should be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   opal_output(0, &quot;WARNING: local probe returned unhandled shell:%s  
</span><br>
<span class="quotelev1">&gt; assuming bash\n&quot;,
</span><br>
<span class="quotelev1">&gt;               sh_name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At 1.3a1r14155, when the i index was at ORTE_PLS_RSH_SHELL_UNKNOWN  
</span><br>
<span class="quotelev1">&gt; there was an
</span><br>
<span class="quotelev1">&gt; extra &quot;unknown&quot; shell in orte_pls_rsh_shell_name[]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static const char * orte_pls_rsh_shell_name[] = {
</span><br>
<span class="quotelev1">&gt;      &quot;bash&quot;,
</span><br>
<span class="quotelev1">&gt;      &quot;zsh&quot;,
</span><br>
<span class="quotelev1">&gt;      &quot;tcsh&quot;,       /* tcsh has to be first otherwise strstr finds  
</span><br>
<span class="quotelev1">&gt; csh */
</span><br>
<span class="quotelev1">&gt;      &quot;csh&quot;,
</span><br>
<span class="quotelev1">&gt;      &quot;ksh&quot;,
</span><br>
<span class="quotelev1">&gt;      &quot;sh&quot;,
</span><br>
<span class="quotelev1">&gt;      &quot;unknown&quot;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which prevented the SEGV but you still didn't get your true shell  
</span><br>
<span class="quotelev1">&gt; name.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mostyn
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3123.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Previous message:</strong> <a href="3121.php">John Borchardt: "[OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>In reply to:</strong> <a href="3119.php">Mostyn Lewis: "[OMPI users] Bug in orte/mca/pls/rsh/pls_rsh_module.c"</a>
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
