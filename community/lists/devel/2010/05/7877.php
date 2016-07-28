<?
$subject_val = "Re: [OMPI devel] bug with /bin/sh and /bin/ksh";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  3 14:32:36 2010" -->
<!-- isoreceived="20100503183236" -->
<!-- sent="Mon, 3 May 2010 12:32:22 -0600" -->
<!-- isosent="20100503183222" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug with /bin/sh and /bin/ksh" -->
<!-- id="530160CE-854B-4414-BD61-51BC76D1E01E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100503181339.GD5770_at_gmx.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-03 14:32:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7878.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Previous message:</strong> <a href="7876.php">Ralf Wildenhues: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>In reply to:</strong> <a href="7876.php">Ralf Wildenhues: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7878.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Reply:</strong> <a href="7878.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe the intent of the (test...) was to see if a .profile existed and execute that if so. This was at the request of users who complained that their remote environment wasn't being setup as expected when we launched their jobs. Might be a better way to do it, though...
<br>
<p><p>On May 3, 2010, at 12:13 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Jeff Squyres wrote on Mon, May 03, 2010 at 04:04:59PM CEST:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 29, 2010, at 11:24 AM, Jonathan Vincent wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sh -c '/usr/bin/env FOO=bar (echo hello)'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ksh -c '/usr/bin/env FOO=bar (echo hello)'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is not valid
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sh -c '/usr/bin/env FOO=bar echo hello'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; works.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Per your later mails, plm_rsh_module.c does this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        tmp = opal_argv_split(&quot;( test ! -r ./.profile || . ./.profile;&quot;, ' ');
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (and later adds the closing &quot;)&quot;).  You reported the final line to be:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/env LD_LIBRARY_PATH=/pdc/vol/openmpi/1.4.1/intel/lib:/pdc/vol/icompilers/11.1/icc/lib/intel64:/pdc/vol/i-compilers/11.1/ifort/lib/intel64 ( test ! -r ./.profile || . ./.profile; /pdc/vol/openmpi/1.4.1/intel/bin/orted -mca ess env -mca orte_ess_jobid 284360704 -mca orte_ess_vpid 3 -mca orte_ess_num_procs 5 --hnp-uri &quot;284360704.0;tcp://193.11.170.208:49530&quot; )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What would the correct syntax be?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, after the arguments setting the variables, portable env really
</span><br>
<span class="quotelev1">&gt; only takes a command line with arguments, not something that is passed
</span><br>
<span class="quotelev1">&gt; to the shell again.  You could work around this by constructing
</span><br>
<span class="quotelev1">&gt; something like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  /usr/bin/env var=val ... sh -c 'script ...'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With the || and ;, are the () really unnecessary?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, neither the () nor the || nor ; really belong in a command-line
</span><br>
<span class="quotelev1">&gt; that is not interpreted by a shell.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7878.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Previous message:</strong> <a href="7876.php">Ralf Wildenhues: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>In reply to:</strong> <a href="7876.php">Ralf Wildenhues: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7878.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Reply:</strong> <a href="7878.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
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
