<?
$subject_val = "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 12:13:11 2015" -->
<!-- isoreceived="20151103171311" -->
<!-- sent="Tue, 03 Nov 2015 17:13:06 +0000" -->
<!-- isosent="20151103171306" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel" -->
<!-- id="87mvuvovkt.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="524DEB12-D209-4228-97CD-4BBBB490A3E0_at_fau.de" -->
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
<strong>Date:</strong> 2015-11-03 12:13:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27981.php">Dave Love: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>Previous message:</strong> <a href="27979.php">Lloyd Brown: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>In reply to:</strong> <a href="27975.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27984.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27984.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fabian Wein &lt;fabian.wein_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; There is an old OpenFOAM installation which includes and old open-mpi,
</span><br>
<span class="quotelev1">&gt; this might
</span><br>
<span class="quotelev1">&gt; cause the trouble.
</span><br>
<p>OpenFOAM should definitely be built against the system MPI (and, in
<br>
general, you should avoid bundled libraries wherever possible IMHO).
<br>
<p><span class="quotelev1">&gt; I also suspect that sourcing the Intel 2016
</span><br>
<span class="quotelev1">&gt; compilers somehow disturbs.
</span><br>
<p>I don't know, but the Intel compiler is a definite source of trouble,
<br>
particularly because of the myths around it.  I've fixed a fair number
<br>
of problems for the users who will listen with &quot;Use GCC and Open MPI&quot;.
<br>
<p><span class="quotelev1">&gt; I don&#226;&#128;&#153;t know how to check if hwloc supports numa, sockets, &#226;&#128;&#166; But if I 
</span><br>
<span class="quotelev1">&gt; configure 1.11.1 I see on in the configure output. Therefore I build
</span><br>
<span class="quotelev1">&gt; it manually.
</span><br>
<p>I don't know what the bundled version builds, but if it builds the
<br>
utilities, running the hwloc-ps program under hwloc-bind is a way to
<br>
test it.  That doesn't verify the mpi installation, though.
<br>
<p>&nbsp;&nbsp;# hwloc-bind node1:1 hwloc-ps | grep hwloc
<br>
&nbsp;&nbsp;13425	NUMANode:1		hwloc-ps
<br>
&nbsp;&nbsp;# grep -m1 model\ name /proc/cpuinfo
<br>
&nbsp;&nbsp;model name	: AMD Opteron(TM) Processor 6276
<br>
<p>Running hwloc-ps under mpirun should show the default binding anyway.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; but it does not bring me the performance I expect for the petsc benchmark.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Without a sane installation it's probably irrelevant, but performance
</span><br>
<span class="quotelev2">&gt;&gt; relative to what?  Anyhow, why don't you want to bind to cores, or at
</span><br>
<span class="quotelev2">&gt;&gt; least L2 cache, if that&#226;&#128;&#153;s shared?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compare the performance of the petsc stream benchmark with a similar but older
</span><br>
<span class="quotelev1">&gt; 4 packages 24 cores opteron system and there -bind-to numa results in
</span><br>
<span class="quotelev1">&gt; a significant
</span><br>
<span class="quotelev1">&gt; increase in performance.
</span><br>
<p>I don't know what that benchmark is, but if it's like the canonical
<br>
Stream benchmark, that's surprising.  I still don't understand why you
<br>
wouldn't want to bind to the lowest level possible.  (lstopo shows that
<br>
the system above has 2MB L2 for pairs of cores and 6M L3 for four pairs
<br>
on the NUMAnode.)
<br>
<p><span class="quotelev1">&gt; Anyhow, I finally managed to compile mpich (there were issues with the
</span><br>
<span class="quotelev1">&gt; intel compilers) and mpich allows bindings on my system.
</span><br>
<p>[I think it also uses hwloc.]
<br>
<p><span class="quotelev1">&gt; I still have
</span><br>
<span class="quotelev1">&gt; to find out the optimal binding/ mapping, simply binding to numa as in
</span><br>
<span class="quotelev1">&gt; the other system doesn&#226;&#128;&#153;t work but the topology is different. I&#226;&#128;&#153;m a
</span><br>
<span class="quotelev1">&gt; user and new to MPI, I still have to learn a lot.
</span><br>
<p>There is tutorial material on locality and hwloc under
<br>
&lt;<a href="https://www.open-mpi.org/projects/hwloc/">https://www.open-mpi.org/projects/hwloc/</a>&gt; that looks as good as I'd
<br>
expect.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27981.php">Dave Love: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>Previous message:</strong> <a href="27979.php">Lloyd Brown: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>In reply to:</strong> <a href="27975.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27984.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27984.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
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
