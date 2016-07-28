<?
$subject_val = "Re: [OMPI devel] bug with /bin/sh and /bin/ksh";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 30 17:15:51 2010" -->
<!-- isoreceived="20100430211551" -->
<!-- sent="Fri, 30 Apr 2010 23:15:45 +0200" -->
<!-- isosent="20100430211545" -->
<!-- name="Jonathan Vincent" -->
<!-- email="jonathan.k.vincent_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug with /bin/sh and /bin/ksh" -->
<!-- id="k2p522fad9c1004301415l49922248sc10995ba0ee55476_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] bug with /bin/sh and /bin/ksh" -->
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
<strong>From:</strong> Jonathan Vincent (<em>jonathan.k.vincent_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-30 17:15:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7860.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Previous message:</strong> <a href="7858.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Maybe in reply to:</strong> <a href="7841.php">Jonathan Vincent: "[OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7860.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Reply:</strong> <a href="7860.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The code path is used when the user has /bin/sh as their login shell.
<br>
There seemed to be seperate code paths depending on the login shell. I
<br>
guess it is not suprising noone has looked at this part for a long
<br>
time, /bin/sh is not a popular choice :D. It *should* be easily
<br>
reproduceable if you made an account with a /bin/sh login shell.
<br>
<p>The opening parens is generated at line 472 of
<br>
openmpi-1.4.1/orte/mca/plm/rsh/plm_rsh_module.c
<br>
<p>tmp = opal_arg_split(&quot; ( test ! -r ./.profile || . ./.profile;&quot;, ' '):
<br>
<p>as can be seen from the comments above it and the lines 468 and 469
<br>
this logic only gets called if teh remote shell is SH or KSH, which I
<br>
guess is pretty rare. Where the closing one comes from we are not
<br>
sure.
<br>
<p>Not sure how important this is, as you said it has been around for a
<br>
long time (we checked the 1.3 code), and there is a simple workaround
<br>
(tell users to swap to bash). We thought it would be good to at least
<br>
make a bug report
<br>
<p>Jon
<br>
<p>Ralph Castain wrote :
<br>
<p>Can you pinpoint where you think the logic is incorrect? I can't
<br>
easily see where the parens are being added, and don't know anyone who
<br>
checks/uses that code path.
<br>
<p>This hasn't been touched in a very long time, which makes me a tad
<br>
cautious in how this gets changed. Would need someone to either
<br>
provide a patch, or at least provide a means to test the result.
<br>
<p><p><p>On Apr 29, 2010, at 9:24 AM, Jonathan Vincent wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We had some trouble with a user using /bin/sh together with
</span><br>
<span class="quotelev1">&gt; openmpi/1.4.1 (Centos 5 on amd64 processors, intel compiler 11.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When spawning MPI processes on a different machine it gave errors such as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev1">&gt; /bin/sh: -c: line 0: `/usr/bin/env
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/pdc/vol/openmpi/1.4.1/intel/lib:/pdc/vol/i-compilers/11.1/icc/lib/intel64:/pdc/vol/i-compilers/11.1/ifort/lib/intel64
</span><br>
<span class="quotelev1">&gt; ( test ! -r ./.profile || . ./.profile;
</span><br>
<span class="quotelev1">&gt; /pdc/vol/openmpi/1.4.1/intel/bin/orted -mca ess env -mca
</span><br>
<span class="quotelev1">&gt; orte_ess_jobid 284360704 -mca orte_ess_vpid 3 -mca orte_ess_num_procs
</span><br>
<span class="quotelev1">&gt; 5 --hnp-uri &quot;284360704.0;tcp://193.11.170.208:49530&quot; )'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openMPI is making a malformed statement
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i.e. a simpler version such as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sh -c '/usr/bin/env FOO=bar (echo hello)'
</span><br>
<span class="quotelev1">&gt; ksh -c '/usr/bin/env FOO=bar (echo hello)'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is not valid
</span><br>
<span class="quotelev1">&gt; sh -c '/usr/bin/env FOO=bar echo hello'
</span><br>
<span class="quotelev1">&gt; works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This problem seems to be confined to the sh and ksh logic in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.4.1/orte/mca/plm/rsh/plm_rsh_module.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jon
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7860.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Previous message:</strong> <a href="7858.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Maybe in reply to:</strong> <a href="7841.php">Jonathan Vincent: "[OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7860.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Reply:</strong> <a href="7860.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
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
