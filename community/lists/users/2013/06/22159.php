<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 20 05:30:07 2013" -->
<!-- isoreceived="20130620093007" -->
<!-- sent="Thu, 20 Jun 2013 11:29:42 +0200" -->
<!-- isosent="20130620092942" -->
<!-- name="Riccardo Murri" -->
<!-- email="riccardo.murri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1" -->
<!-- id="CAJGE3zU+9kim+9+Pf+Y-nywSz_xiDP0xiRxCp-LM2xQ01iZLkQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A00079D3-94FC-4B4C-9C94-A135F6AE67A7_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1<br>
<strong>From:</strong> Riccardo Murri (<em>riccardo.murri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-20 05:29:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22160.php">Lorenzo Donà: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22158.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>In reply to:</strong> <a href="22156.php">Reuti: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22192.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22192.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 19 June 2013 23:52, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Am 19.06.2013 um 22:14 schrieb Riccardo Murri:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 19 June 2013 20:42, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 19.06.2013 um 19:43 schrieb Riccardo Murri &lt;riccardo.murri_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 19 June 2013 16:01, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; How is OMPI picking up this hostfile? It isn't being specified on the cmd line - are you running under some resource manager?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Via the environment variable `OMPI_MCA_orte_default_hostfile`.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We're running under SGE, but disable the OMPI/SGE integration (rather
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW: Which version of SGE?
</span><br>
<p>SGE6.2u4 running under Rocks 5.3:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ qstat -h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;GE 6.2u4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ cat /etc/rocks-release
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Rocks release 5.3 (Rolled Tacos)
<br>
<p><p><span class="quotelev2">&gt;&gt; It's enabled but (IIRC) the problem is that OpenMPI detects the
</span><br>
<span class="quotelev2">&gt;&gt; presence of SGE from some environment variable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; , which, in our version
</span><br>
<span class="quotelev2">&gt;&gt; of SGE, simply isn't there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you use a custom &quot;starter_method&quot; in the queue definition?
</span><br>
<p>No custom starter_method.
<br>
<p><p><span class="quotelev1">&gt; Does a submitted script with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; env
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; list at least some of the SGE* environment variables - or none at all?
</span><br>
<p>Quite some SGE_* variables are in the environment:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ cat env.sh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;env | sort
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ qsub -pe mpi 2 env.sh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Your job 29590 (&quot;env.sh&quot;) has been submitted
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ egrep ^SGE_ env.sh.o29590
<br>
&nbsp;&nbsp;&nbsp;&nbsp;SGE_ACCOUNT=sge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;SGE_ARCH=lx26-amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>However, I cannot reproduce the issue now -- it's quite possible that
<br>
it originated on a older cluster (now decommisioned) and we just kept
<br>
the submission
<br>
script on newer hardware without checking.
<br>
<p>Thanks for the help,
<br>
Riccardo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22160.php">Lorenzo Donà: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22158.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>In reply to:</strong> <a href="22156.php">Reuti: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22192.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22192.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
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
