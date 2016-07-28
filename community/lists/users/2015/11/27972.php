<?
$subject_val = "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 09:59:03 2015" -->
<!-- isoreceived="20151102145903" -->
<!-- sent="Mon, 02 Nov 2015 14:58:59 +0000" -->
<!-- isosent="20151102145859" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel" -->
<!-- id="87ziywqwgc.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="86AB5606-F88D-4CCB-89DE-F184112ECB47_at_fau.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-02 09:58:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27973.php">Dave Love: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Previous message:</strong> <a href="27971.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27966.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27975.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27975.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fabian Wein &lt;fabian.wein_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev2">&gt;&gt; Am 30.10.2015 um 21:45 schrieb Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Oh, that's an interesting idea: perhaps the &quot;bind to numa&quot; is
</span><br>
<span class="quotelev2">&gt;&gt; failing -- but perhaps &quot;bind to socket&quot; would work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you try:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-1.10.0-gcc/bin/mpiexec -bind-to numa -n 4 hostname
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-1.10.0-gcc/bin/mpiexec -bind-to socket -n 4 hostname
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Both report the same error. Interestingly -bind-to-socket works
</span><br>
<p>There's something badly wrong with your build or installation if
<br>
-bind-to socket isn't equivalent to --bind-to-socket (which is the
<br>
default, as you should see if you run hwloc-ps under mpirun).
<br>
<p>I just built 1.10 on Ubuntu 14.04 against the native libhwloc 1.8
<br>
(without libnuma1-dev).  It works as expected on that single-socket
<br>
system and --bind-to numa fails as there's no numanode level.
<br>
<p><span class="quotelev1">&gt; but it does not bring me the performance I expect for the petsc benchmark.
</span><br>
<p>Without a sane installation it's probably irrelevant, but performance
<br>
relative to what?  Anyhow, why don't you want to bind to cores, or at
<br>
least L2 cache, if that's shared?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27973.php">Dave Love: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Previous message:</strong> <a href="27971.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27966.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27975.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27975.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
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
