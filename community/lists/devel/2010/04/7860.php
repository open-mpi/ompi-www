<?
$subject_val = "Re: [OMPI devel] bug with /bin/sh and /bin/ksh";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 30 19:14:28 2010" -->
<!-- isoreceived="20100430231428" -->
<!-- sent="Fri, 30 Apr 2010 17:14:19 -0600" -->
<!-- isosent="20100430231419" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug with /bin/sh and /bin/ksh" -->
<!-- id="5F927A33-3099-4CBC-A279-AB4CE8963BB4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="k2p522fad9c1004301415l49922248sc10995ba0ee55476_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-04-30 19:14:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7861.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7859.php">Jonathan Vincent: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>In reply to:</strong> <a href="7859.php">Jonathan Vincent: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7869.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jon.
<br>
<p>I fear this falls into the &quot;won't fix until I have some spare time&quot; category - probably won't get to it myself until Aug/Sept due to priorities.
<br>
<p>In the interim, perhaps someone who has more priority in this area will step in to fix it.
<br>
<p><p>On Apr 30, 2010, at 3:15 PM, Jonathan Vincent wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code path is used when the user has /bin/sh as their login shell.
</span><br>
<span class="quotelev1">&gt; There seemed to be seperate code paths depending on the login shell. I
</span><br>
<span class="quotelev1">&gt; guess it is not suprising noone has looked at this part for a long
</span><br>
<span class="quotelev1">&gt; time, /bin/sh is not a popular choice :D. It *should* be easily
</span><br>
<span class="quotelev1">&gt; reproduceable if you made an account with a /bin/sh login shell.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The opening parens is generated at line 472 of
</span><br>
<span class="quotelev1">&gt; openmpi-1.4.1/orte/mca/plm/rsh/plm_rsh_module.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tmp = opal_arg_split(&quot; ( test ! -r ./.profile || . ./.profile;&quot;, ' '):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as can be seen from the comments above it and the lines 468 and 469
</span><br>
<span class="quotelev1">&gt; this logic only gets called if teh remote shell is SH or KSH, which I
</span><br>
<span class="quotelev1">&gt; guess is pretty rare. Where the closing one comes from we are not
</span><br>
<span class="quotelev1">&gt; sure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure how important this is, as you said it has been around for a
</span><br>
<span class="quotelev1">&gt; long time (we checked the 1.3 code), and there is a simple workaround
</span><br>
<span class="quotelev1">&gt; (tell users to swap to bash). We thought it would be good to at least
</span><br>
<span class="quotelev1">&gt; make a bug report
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jon
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you pinpoint where you think the logic is incorrect? I can't
</span><br>
<span class="quotelev1">&gt; easily see where the parens are being added, and don't know anyone who
</span><br>
<span class="quotelev1">&gt; checks/uses that code path.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This hasn't been touched in a very long time, which makes me a tad
</span><br>
<span class="quotelev1">&gt; cautious in how this gets changed. Would need someone to either
</span><br>
<span class="quotelev1">&gt; provide a patch, or at least provide a means to test the result.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 29, 2010, at 9:24 AM, Jonathan Vincent wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We had some trouble with a user using /bin/sh together with
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/1.4.1 (Centos 5 on amd64 processors, intel compiler 11.1)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When spawning MPI processes on a different machine it gave errors such as
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh: -c: line 0: `/usr/bin/env
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=/pdc/vol/openmpi/1.4.1/intel/lib:/pdc/vol/i-compilers/11.1/icc/lib/intel64:/pdc/vol/i-compilers/11.1/ifort/lib/intel64
</span><br>
<span class="quotelev2">&gt;&gt; ( test ! -r ./.profile || . ./.profile;
</span><br>
<span class="quotelev2">&gt;&gt; /pdc/vol/openmpi/1.4.1/intel/bin/orted -mca ess env -mca
</span><br>
<span class="quotelev2">&gt;&gt; orte_ess_jobid 284360704 -mca orte_ess_vpid 3 -mca orte_ess_num_procs
</span><br>
<span class="quotelev2">&gt;&gt; 5 --hnp-uri &quot;284360704.0;tcp://193.11.170.208:49530&quot; )'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; openMPI is making a malformed statement
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; i.e. a simpler version such as
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; sh -c '/usr/bin/env FOO=bar (echo hello)'
</span><br>
<span class="quotelev2">&gt;&gt; ksh -c '/usr/bin/env FOO=bar (echo hello)'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; is not valid
</span><br>
<span class="quotelev2">&gt;&gt; sh -c '/usr/bin/env FOO=bar echo hello'
</span><br>
<span class="quotelev2">&gt;&gt; works.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This problem seems to be confined to the sh and ksh logic in
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.4.1/orte/mca/plm/rsh/plm_rsh_module.c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jon
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7861.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7859.php">Jonathan Vincent: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>In reply to:</strong> <a href="7859.php">Jonathan Vincent: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7869.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
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
