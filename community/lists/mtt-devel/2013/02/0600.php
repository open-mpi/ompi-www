<?
$subject_val = "Re: [MTT devel] fix zombie commit";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 24 06:59:31 2013" -->
<!-- isoreceived="20130224115931" -->
<!-- sent="Sun, 24 Feb 2013 13:59:24 +0200" -->
<!-- isosent="20130224115924" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [MTT devel] fix zombie commit" -->
<!-- id="CAAO1KyYLvCQmXsr-yeD5iKWMG7cAKLUrbxrLbK254wrv40euRg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F55CD3_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] fix zombie commit<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-24 06:59:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0601.php">Jeff Squyres (jsquyres): "Re: [MTT devel] fix zombie commit"</a>
<li><strong>Previous message:</strong> <a href="0599.php">Jeff Squyres (jsquyres): "[MTT devel] fix zombie commit"</a>
<li><strong>In reply to:</strong> <a href="0599.php">Jeff Squyres (jsquyres): "[MTT devel] fix zombie commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0601.php">Jeff Squyres (jsquyres): "Re: [MTT devel] fix zombie commit"</a>
<li><strong>Reply:</strong> <a href="0601.php">Jeff Squyres (jsquyres): "Re: [MTT devel] fix zombie commit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>What protection do you mean? Check that /proc/pid/status exists? It is done
<br>
in Grep()
<br>
<p><p><p>We observe that process which was launched by mtt and hangs (mtt detect
<br>
timeout and starts do_command procedure), later enters into &quot;defunct&quot; state.
<br>
<p><p><p>The mtt sends email that process hangs and when we check the reason, it
<br>
appears that process basically finished and mtt monitoring &quot;defunct&quot;
<br>
process which is an only left.
<br>
<p><p><p>This fix will let mtt detect that it is monitoring such process and proceed
<br>
to the next test.
<br>
<p><p><p>I don`t know yet what mtt part caused &quot;defunct&quot; but looking into it.
<br>
<p>After some googling found that fork from perl (used in mtt) can have such
<br>
side-effect.
<br>
<p><p><p>This is an example, based on true story:
<br>
<p><p><p>miked     1362  0.0  0.0      0     0 ?        Z    13:36   0:00 [sh]
<br>
&lt;defunct&gt;
<br>
<p><p><p>My guess, inside mtt.ini we use mpi details like this, which calls &quot;sh&quot;
<br>
from shebang. Somehow and sometimes it can become zombie.
<br>
<p><p><p>exec      =&lt;&lt;EOF
<br>
<p>#!/bin/sh
<br>
<p>#SBATCH --job-name=&amp;get_ini_val(mtt, description)_mtt_case
<br>
<p>#SBATCH --nodes=&amp;getenv('SLURM_NNODES')
<br>
--ntasks-per-node=&amp;getenv('SLURM_NTASKS_PER_NODE')
<br>
--partition=&amp;shell('squeue -h -j $SLURM_JOB_ID -o %P') --time=01:00:00
<br>
<p>#
<br>
<p># To run interactive, copy paste command below:
<br>
<p>#
<br>
<p><p><p><p><p>export OMPI_HOME=&amp;test_prefix()
<br>
<p>export EXE=&amp;test_executable_abspath()
<br>
<p><p><p>PPN=$SLURM_NTASKS_PER_NODE
<br>
<p>NP=$SLURM_NPROCS
<br>
<p>NNODES=$SLURM_NNODES
<br>
<p>HOSTS=$(hostlist -e -s , $SLURM_NODELIST)
<br>
<p><p><p><p><p>set -x
<br>
<p><p><p>$OMPI_HOME/bin/mpirun @tag@ -np &amp;test_np() -H $HOSTS -bind-to-core -bynode
<br>
-display-map &amp;if(&amp;get_ini_val(mtt,pkg) eq codecov,@codecov_params@,'')
<br>
&amp;get_ini_val(&quot;mtt&quot;,&quot;mpi_args&quot;) @mca@ &amp;test_extra_mpi_argv() $EXE
<br>
&amp;test_argv()
<br>
<p>EOF
<br>
<p><p><p><p><p>Regards
<br>
<p>M
<br>
<p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<p><span class="quotelev1">&gt; From: Jeff Squyres (jsquyres) [mailto:jsquyres_at_[hidden]&lt;jsquyres_at_[hidden]&gt;
</span><br>
]
<br>
<p><span class="quotelev1">&gt; Sent: Sunday, February 24, 2013 13:10
</span><br>
<p><span class="quotelev1">&gt; To: &lt;mtt-devel_at_[hidden]&gt;
</span><br>
<p><span class="quotelev1">&gt; Cc: Mike Dubman
</span><br>
<p><span class="quotelev1">&gt; Subject: fix zombie commit
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; Mike --
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; Please protect this code better; MTT is also run on Solaris and OS X.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; Also, can you describe more fully the case where zombies are being left
</span><br>
<p><span class="quotelev1">&gt; behind by MTT?
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; On Feb 24, 2013, at 1:44 AM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; Author: miked (Mike Dubman)
</span><br>
<p><span class="quotelev2">&gt; &gt; Date: 2013-02-24 01:44:31 EST (Sun, 24 Feb 2013) New Revision: 1589
</span><br>
<p><span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1589">https://svn.open-mpi.org/trac/mtt/changeset/1589</a>
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; Log:
</span><br>
<p><span class="quotelev2">&gt; &gt; * fix: fork leaves zombie processes sometimes. temp fix: detect zombie
</span><br>
<p><span class="quotelev1">&gt; and proceed with tests.
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<p><span class="quotelev2">&gt; &gt;   trunk/lib/MTT/DoCommand.pm |     6 ++++++
</span><br>
<p><span class="quotelev2">&gt; &gt;   1 files changed, 6 insertions(+), 0 deletions(-)
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; Modified: trunk/lib/MTT/DoCommand.pm
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev1">&gt; ==========================================================
</span><br>
<p><span class="quotelev1">&gt; ====================
</span><br>
<p><span class="quotelev2">&gt; &gt; --- trunk/lib/MTT/DoCommand.pm      Wed Feb 20 12:41:12 2013
</span><br>
<p><span class="quotelev1">&gt;        (r1588)
</span><br>
<p><span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/DoCommand.pm      2013-02-24 01:44:31 EST (Sun, 24 Feb
</span><br>
<p><span class="quotelev1">&gt; 2013) (r1589)
</span><br>
<p><span class="quotelev2">&gt; &gt; @@ -641,6 +641,12 @@
</span><br>
<p><span class="quotelev2">&gt; &gt;         if (!$pid_exists) {
</span><br>
<p><span class="quotelev2">&gt; &gt;             Verbose(&quot;--&gt; Process completed somehow at &quot; . time() . &quot;,
</span><br>
<p><span class="quotelev1">&gt; proceeding with tests\n&quot;);
</span><br>
<p><span class="quotelev2">&gt; &gt;             $resume_tests++;
</span><br>
<p><span class="quotelev2">&gt; &gt; +        } else {
</span><br>
<p><span class="quotelev2">&gt; &gt; +            my $matches = MTT::Files::Grep(&quot;zombie&quot;,
</span><br>
&quot;/proc/$pid/status&quot;);
<br>
<p><span class="quotelev2">&gt; &gt; +            if (@$matches) {
</span><br>
<p><span class="quotelev2">&gt; &gt; +                Verbose(&quot;--&gt; Process become Zombie at &quot; . time() . &quot;,
</span><br>
proceeding
<br>
<p><span class="quotelev1">&gt; with tests\n&quot;);
</span><br>
<p><span class="quotelev2">&gt; &gt; +                $resume_tests++;
</span><br>
<p><span class="quotelev2">&gt; &gt; +            }
</span><br>
<p><span class="quotelev2">&gt; &gt;         }
</span><br>
<p><span class="quotelev2">&gt; &gt;         # Remove the timeout sentinel file, if a timeout notify timeout
</span><br>
value is
<br>
<p><span class="quotelev1">&gt; set
</span><br>
<p><span class="quotelev2">&gt; &gt;         if (defined($end_time) and time() &gt; $end_time) {
</span><br>
<p><span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<p><span class="quotelev2">&gt; &gt; mtt-svn mailing list
</span><br>
<p><span class="quotelev2">&gt; &gt; mtt-svn_at_[hidden]
</span><br>
<p><span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; --
</span><br>
<p><span class="quotelev1">&gt; Jeff Squyres
</span><br>
<p><span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<p><span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<p><span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<p><p><p><p><p>On Sun, Feb 24, 2013 at 1:09 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Mike --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please protect this code better; MTT is also run on Solaris and OS X.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, can you describe more fully the case where zombies are being left
</span><br>
<span class="quotelev1">&gt; behind by MTT?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 24, 2013, at 1:44 AM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2013-02-24 01:44:31 EST (Sun, 24 Feb 2013)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 1589
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1589">https://svn.open-mpi.org/trac/mtt/changeset/1589</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; * fix: fork leaves zombie processes sometimes. temp fix: detect zombie
</span><br>
<span class="quotelev1">&gt; and proceed with tests.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/lib/MTT/DoCommand.pm |     6 ++++++
</span><br>
<span class="quotelev2">&gt; &gt;   1 files changed, 6 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/lib/MTT/DoCommand.pm        Wed Feb 20 12:41:12 2013
</span><br>
<span class="quotelev1">&gt;  (r1588)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/DoCommand.pm        2013-02-24 01:44:31 EST (Sun, 24
</span><br>
<span class="quotelev1">&gt; Feb 2013)      (r1589)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -641,6 +641,12 @@
</span><br>
<span class="quotelev2">&gt; &gt;         if (!$pid_exists) {
</span><br>
<span class="quotelev2">&gt; &gt;             Verbose(&quot;--&gt; Process completed somehow at &quot; . time() . &quot;,
</span><br>
<span class="quotelev1">&gt; proceeding with tests\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;             $resume_tests++;
</span><br>
<span class="quotelev2">&gt; &gt; +        } else {
</span><br>
<span class="quotelev2">&gt; &gt; +            my $matches = MTT::Files::Grep(&quot;zombie&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;/proc/$pid/status&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +            if (@$matches) {
</span><br>
<span class="quotelev2">&gt; &gt; +                Verbose(&quot;--&gt; Process become Zombie at &quot; . time() . &quot;,
</span><br>
<span class="quotelev1">&gt; proceeding with tests\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +                $resume_tests++;
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;         # Remove the timeout sentinel file, if a timeout notify timeout
</span><br>
<span class="quotelev1">&gt; value is set
</span><br>
<span class="quotelev2">&gt; &gt;         if (defined($end_time) and time() &gt; $end_time) {
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
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
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0600/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0601.php">Jeff Squyres (jsquyres): "Re: [MTT devel] fix zombie commit"</a>
<li><strong>Previous message:</strong> <a href="0599.php">Jeff Squyres (jsquyres): "[MTT devel] fix zombie commit"</a>
<li><strong>In reply to:</strong> <a href="0599.php">Jeff Squyres (jsquyres): "[MTT devel] fix zombie commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0601.php">Jeff Squyres (jsquyres): "Re: [MTT devel] fix zombie commit"</a>
<li><strong>Reply:</strong> <a href="0601.php">Jeff Squyres (jsquyres): "Re: [MTT devel] fix zombie commit"</a>
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
