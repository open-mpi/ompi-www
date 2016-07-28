<?
$subject_val = "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 18:26:00 2015" -->
<!-- isoreceived="20151103232600" -->
<!-- sent="Wed, 4 Nov 2015 00:26:23 +0100" -->
<!-- isosent="20151103232623" -->
<!-- name="Fabian Wein" -->
<!-- email="fabian.wein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel" -->
<!-- id="5639429F.6080202_at_fau.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="87mvuvovkt.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Fabian Wein (<em>fabian.wein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-03 18:26:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27985.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="27983.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>In reply to:</strong> <a href="27980.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28004.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="28004.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/03/2015 06:13 PM, Dave Love wrote:
<br>
<span class="quotelev1">&gt; Fabian Wein &lt;fabian.wein_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is an old OpenFOAM installation which includes and old open-mpi,
</span><br>
<span class="quotelev2">&gt;&gt; this might
</span><br>
<span class="quotelev2">&gt;&gt; cause the trouble.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenFOAM should definitely be built against the system MPI (and, in
</span><br>
<span class="quotelev1">&gt; general, you should avoid bundled libraries wherever possible IMHO).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I don't use OpenFOAM at the moment, it was just still sourced in my 
<br>
.bashrc
<br>
<p><span class="quotelev2">&gt;&gt; I also suspect that sourcing the Intel 2016
</span><br>
<span class="quotelev2">&gt;&gt; compilers somehow disturbs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know, but the Intel compiler is a definite source of trouble,
</span><br>
<span class="quotelev1">&gt; particularly because of the myths around it.  I've fixed a fair number
</span><br>
<span class="quotelev1">&gt; of problems for the users who will listen with &quot;Use GCC and Open MPI&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I build against gcc, and meanwhile I don't source the intel compilers 
<br>
any more.
<br>
<p><span class="quotelev2">&gt;&gt; I don&#226;&#128;&#153;t know how to check if hwloc supports numa, sockets, &#226;&#128;&#166; But if I
</span><br>
<span class="quotelev2">&gt;&gt; configure 1.11.1 I see on in the configure output. Therefore I build
</span><br>
<span class="quotelev2">&gt;&gt; it manually.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know what the bundled version builds, but if it builds the
</span><br>
<span class="quotelev1">&gt; utilities, running the hwloc-ps program under hwloc-bind is a way to
</span><br>
<span class="quotelev1">&gt; test it.  That doesn't verify the mpi installation, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    # hwloc-bind node1:1 hwloc-ps | grep hwloc
</span><br>
<span class="quotelev1">&gt;    13425	NUMANode:1		hwloc-ps
</span><br>
<p>I don't understand what you mean:
<br>
<p>opt/hwloc-1.11.1/bin/hwloc-bind
<br>
/opt/hwloc-1.11.1/bin/hwloc-bind: nothing to do!
<br>
<p>/opt/hwloc-1.11.1/bin/hwloc-bind node1:1
<br>
/opt/hwloc-1.11.1/bin/hwloc-bind: nothing to do!
<br>
<p>/opt/hwloc-1.11.1/bin/hwloc-bind node1:1 hwloc-ps
<br>
-&gt; no output
<br>
<p>therefore nothing to grep. I have no idea what hwloc-ps does. There is 
<br>
no man page and --help doesn't help.
<br>
<p><p><span class="quotelev1">&gt;    # grep -m1 model\ name /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt;    model name	: AMD Opteron(TM) Processor 6276
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running hwloc-ps under mpirun should show the default binding anyway.
</span><br>
<p>I don't understand what you man with tha.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but it does not bring me the performance I expect for the petsc benchmark.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Without a sane installation it's probably irrelevant, but performance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; relative to what?  Anyhow, why don't you want to bind to cores, or at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; least L2 cache, if that&#226;&#128;&#153;s shared?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I compare the performance of the petsc stream benchmark with a similar but older
</span><br>
<span class="quotelev2">&gt;&gt; 4 packages 24 cores opteron system and there -bind-to numa results in
</span><br>
<span class="quotelev2">&gt;&gt; a significant
</span><br>
<span class="quotelev2">&gt;&gt; increase in performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know what that benchmark is, but if it's like the canonical
</span><br>
<span class="quotelev1">&gt; Stream benchmark, that's surprising.  I still don't understand why you
</span><br>
<span class="quotelev1">&gt; wouldn't want to bind to the lowest level possible.  (lstopo shows that
</span><br>
<span class="quotelev1">&gt; the system above has 2MB L2 for pairs of cores and 6M L3 for four pairs
</span><br>
<span class="quotelev1">&gt; on the NUMAnode.)
</span><br>
<p>with open-mpi I cannot bind-to numa, socket, core and cpu.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyhow, I finally managed to compile mpich (there were issues with the
</span><br>
<span class="quotelev2">&gt;&gt; intel compilers) and mpich allows bindings on my system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [I think it also uses hwloc.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I still have
</span><br>
<span class="quotelev2">&gt;&gt; to find out the optimal binding/ mapping, simply binding to numa as in
</span><br>
<span class="quotelev2">&gt;&gt; the other system doesn&#226;&#128;&#153;t work but the topology is different. I&#226;&#128;&#153;m a
</span><br>
<span class="quotelev2">&gt;&gt; user and new to MPI, I still have to learn a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is tutorial material on locality and hwloc under
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://www.open-mpi.org/projects/hwloc/">https://www.open-mpi.org/projects/hwloc/</a>&gt; that looks as good as I'd
</span><br>
<span class="quotelev1">&gt; expect.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/27980.php">http://www.open-mpi.org/community/lists/users/2015/11/27980.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Dr. Fabian Wein, University of Erlangen-Nuremberg
Department of Mathematics/ Excellence Cluster for Engineering of 
Advanced Materials
phone: +49 9131 85 20849
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27985.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="27983.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>In reply to:</strong> <a href="27980.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28004.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="28004.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
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
