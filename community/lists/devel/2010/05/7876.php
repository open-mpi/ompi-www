<?
$subject_val = "Re: [OMPI devel] bug with /bin/sh and /bin/ksh";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  3 14:15:06 2010" -->
<!-- isoreceived="20100503181506" -->
<!-- sent="Mon, 3 May 2010 20:13:41 +0200" -->
<!-- isosent="20100503181341" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug with /bin/sh and /bin/ksh" -->
<!-- id="20100503181339.GD5770_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="18DD551E-40BC-4635-98FE-F5C2F25BA7E1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bug with /bin/sh and /bin/ksh<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-03 14:13:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7877.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Previous message:</strong> <a href="7875.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	for	Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7870.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7877.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Reply:</strong> <a href="7877.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>* Jeff Squyres wrote on Mon, May 03, 2010 at 04:04:59PM CEST:
<br>
<span class="quotelev2">&gt; &gt; On Apr 29, 2010, at 11:24 AM, Jonathan Vincent wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sh -c '/usr/bin/env FOO=bar (echo hello)'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ksh -c '/usr/bin/env FOO=bar (echo hello)'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is not valid
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sh -c '/usr/bin/env FOO=bar echo hello'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; works.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Per your later mails, plm_rsh_module.c does this:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;         tmp = opal_argv_split(&quot;( test ! -r ./.profile || . ./.profile;&quot;, ' ');
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (and later adds the closing &quot;)&quot;).  You reported the final line to be:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/env LD_LIBRARY_PATH=/pdc/vol/openmpi/1.4.1/intel/lib:/pdc/vol/icompilers/11.1/icc/lib/intel64:/pdc/vol/i-compilers/11.1/ifort/lib/intel64 ( test ! -r ./.profile || . ./.profile; /pdc/vol/openmpi/1.4.1/intel/bin/orted -mca ess env -mca orte_ess_jobid 284360704 -mca orte_ess_vpid 3 -mca orte_ess_num_procs 5 --hnp-uri &quot;284360704.0;tcp://193.11.170.208:49530&quot; )
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What would the correct syntax be?
</span><br>
<p>Well, after the arguments setting the variables, portable env really
<br>
only takes a command line with arguments, not something that is passed
<br>
to the shell again.  You could work around this by constructing
<br>
something like
<br>
<p>&nbsp;&nbsp;/usr/bin/env var=val ... sh -c 'script ...'
<br>
<p><span class="quotelev2">&gt;&gt; With the || and ;, are the () really unnecessary?
</span><br>
<p>Well, neither the () nor the || nor ; really belong in a command-line
<br>
that is not interpreted by a shell.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7877.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Previous message:</strong> <a href="7875.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	for	Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7870.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7877.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Reply:</strong> <a href="7877.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
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
