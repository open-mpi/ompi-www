<?
$subject_val = "Re: [OMPI devel] bug with /bin/sh and /bin/ksh";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  3 10:05:16 2010" -->
<!-- isoreceived="20100503140516" -->
<!-- sent="Mon, 3 May 2010 10:04:59 -0400" -->
<!-- isosent="20100503140459" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug with /bin/sh and /bin/ksh" -->
<!-- id="18DD551E-40BC-4635-98FE-F5C2F25BA7E1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AFCBC0EB-A7B0-4398-9E97-B5269D5439AD_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-03 10:04:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7871.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7869.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>In reply to:</strong> <a href="7869.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7876.php">Ralf Wildenhues: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Reply:</strong> <a href="7876.php">Ralf Wildenhues: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/2400">https://svn.open-mpi.org/trac/ompi/ticket/2400</a> about this issue.
<br>
<p>On May 3, 2010, at 9:04 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 29, 2010, at 11:24 AM, Jonathan Vincent wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; i.e. a simpler version such as
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; sh -c '/usr/bin/env FOO=bar (echo hello)'
</span><br>
<span class="quotelev2">&gt; &gt; ksh -c '/usr/bin/env FOO=bar (echo hello)'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; is not valid
</span><br>
<span class="quotelev2">&gt; &gt; sh -c '/usr/bin/env FOO=bar echo hello'
</span><br>
<span class="quotelev2">&gt; &gt; works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Per your later mails, plm_rsh_module.c does this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         tmp = opal_argv_split(&quot;( test ! -r ./.profile || . ./.profile;&quot;, ' ');
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (and later adds the closing &quot;)&quot;).  You reported the final line to be:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin/env LD_LIBRARY_PATH=/pdc/vol/openmpi/1.4.1/intel/lib:/pdc/vol/icompilers/11.1/icc/lib/intel64:/pdc/vol/i-compilers/11.1/ifort/lib/intel64 ( test ! -r ./.profile || . ./.profile; /pdc/vol/openmpi/1.4.1/intel/bin/orted -mca ess env -mca orte_ess_jobid 284360704 -mca orte_ess_vpid 3 -mca orte_ess_num_procs 5 --hnp-uri &quot;284360704.0;tcp://193.11.170.208:49530&quot; )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What would the correct syntax be?  With the || and ;, are the () really unnecessary?  I would think that would group things wrong, but I'm a tcsh user, not an sh user....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7871.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7869.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>In reply to:</strong> <a href="7869.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7876.php">Ralf Wildenhues: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Reply:</strong> <a href="7876.php">Ralf Wildenhues: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
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
