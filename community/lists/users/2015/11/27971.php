<?
$subject_val = "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 09:57:49 2015" -->
<!-- isoreceived="20151102145749" -->
<!-- sent="Mon, 02 Nov 2015 14:57:43 +0000" -->
<!-- isosent="20151102145743" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel" -->
<!-- id="871tc8sb2w.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="56339484.6010706_at_fau.de" -->
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
<strong>Date:</strong> 2015-11-02 09:57:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27972.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27970.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27959.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27950.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fabian Wein &lt;fabian.wein_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; On 10/30/2015 02:48 PM, Dave Love wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Fabian Wein &lt;fabian.wein_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this a valid test?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-1.10.0-gcc/bin/mpiexec -n 4 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, unless you turned off the default binding -- to socket? check the
</span><br>
<span class="quotelev2">&gt;&gt; mpirun man page -- it worked, but the &quot;numa&quot; level failed.  I don't know
</span><br>
<span class="quotelev2">&gt;&gt; if that level has to exist, and there have been bugs in that area
</span><br>
<span class="quotelev2">&gt;&gt; before.  Running lstopo might be useful,
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
<br>
<p><span class="quotelev2">&gt;&gt; and checking that you're
</span><br>
<span class="quotelev2">&gt;&gt; picking up the right hwloc dynamic library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, I don't understand. Where is hwloc dynamically linked?
</span><br>
<p>In the hwloc MCA object, as with the ldd run.
<br>
<p><span class="quotelev1">&gt; I made
</span><br>
<span class="quotelev1">&gt; now sure I
</span><br>
<span class="quotelev1">&gt; have only one type of libhwloc.so and libnuma.so on the system (there
</span><br>
<span class="quotelev1">&gt; were versions
</span><br>
<span class="quotelev1">&gt; of an older date). Is a a way to check the lib if it has the feature?
</span><br>
<p>What feature?
<br>
<p><span class="quotelev1">&gt; mpiexec only links libnuma which was actually the old version and is
</span><br>
<span class="quotelev1">&gt; now the one I
</span><br>
<span class="quotelev1">&gt; build from the numactl source by myself.
</span><br>
<p>That must be spurious, but it's irrelevant; mpiexec doesn't do the binding.
<br>
<p>Why not use the system version of openmpi and save this trouble?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27972.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27970.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27959.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27950.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
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
