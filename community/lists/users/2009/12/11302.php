<?
$subject_val = "Re: [OMPI users] Trouble with SGE integration";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 05:48:07 2009" -->
<!-- isoreceived="20091201104807" -->
<!-- sent="Tue, 1 Dec 2009 11:47:51 +0100" -->
<!-- isosent="20091201104751" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with SGE integration" -->
<!-- id="FF5E7A7B-5800-4D2D-97C8-B1BC0F99D101_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B14DB34.2050409_at_fit.vutbr.cz" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with SGE integration<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 05:47:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11303.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Previous message:</strong> <a href="11301.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>In reply to:</strong> <a href="11300.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11301.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 01.12.2009 um 10:00 schrieb Ondrej Glembek:
<br>
<p><span class="quotelev1">&gt; Reuti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/homes/kazi/glembek/share/openmpi-1.3.3-64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-sge --enable-shared --enable-static --host=x86_64-linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --build=x86_64-linux NM=x86_64-linux-nm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any list of valid values for --host, --build and NM - and  
</span><br>
<span class="quotelev2">&gt;&gt; what
</span><br>
<span class="quotelev2">&gt;&gt; is NM for? From the ./configure --help I would &quot;assume&quot; that one can
</span><br>
<span class="quotelev2">&gt;&gt; tell Open MPI to prepare to BUILD on a PPC platform, although I'm
</span><br>
<span class="quotelev2">&gt;&gt; issuing the command on a x86, and the result of the PPC compile  
</span><br>
<span class="quotelev2">&gt;&gt; should
</span><br>
<span class="quotelev2">&gt;&gt; be to run on x86_64. Maybe you can leave it out, as it's the same in
</span><br>
<span class="quotelev2">&gt;&gt; your case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is not the problem... We have both 32bit and 64bit machines  
</span><br>
<span class="quotelev1">&gt; and the
</span><br>
<span class="quotelev1">&gt; problem occurs on both (i.e. omitting the --host --build, etc)...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there any way to force the ssh before the (...) term???
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using SSH directly would bypass SGE's startup. What are your  
</span><br>
<span class="quotelev2">&gt;&gt; entries for
</span><br>
<span class="quotelev2">&gt;&gt; qrsh_daemon and so on in SGE's configuration? Which version of SGE?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; qstat reports version number as &quot;GE 6.2u4&quot;... Below is qconf -sconf  
</span><br>
<span class="quotelev1">&gt; dump.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I think the real problem is, that Open MPI assumes you are  
</span><br>
<span class="quotelev2">&gt;&gt; outside
</span><br>
<span class="quotelev2">&gt;&gt; of SGE and so uses a different startup. Are you resetting any of  
</span><br>
<span class="quotelev2">&gt;&gt; SGE's
</span><br>
<span class="quotelev2">&gt;&gt; environment variables in your custom starter method (like $JOB_ID)?
</span><br>
<span class="quotelev1">&gt; I don't think that openmpi doesn't know about SGE when it calls the
</span><br>
<span class="quotelev1">&gt; starter.sh...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The starter.sh looks like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $$$
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ulimit -S -c 0
</span><br>
<span class="quotelev1">&gt; ulimit -S -t unlimited
</span><br>
<p>what about setting this in the queue definition (the core size). The  
<br>
runtime will be limited if you request -l s_rt=... in SGE (or define  
<br>
a max in the queue definiton) besides h_rt.
<br>
<p><p><span class="quotelev1">&gt; #echo &quot;$@&quot; &gt;&gt;/pub/tmp/starter.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #start the job in thus shell
</span><br>
<span class="quotelev1">&gt; exec &quot;$@&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; loglevel                     log_warning
</span><br>
<p>loglevel  log_info
<br>
<p>will often give more info (not in this case, but in case of some  
<br>
other issues).
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11303.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Previous message:</strong> <a href="11301.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>In reply to:</strong> <a href="11300.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11301.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
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
