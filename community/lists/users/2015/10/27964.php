<?
$subject_val = "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 16:46:21 2015" -->
<!-- isoreceived="20151030204621" -->
<!-- sent="Fri, 30 Oct 2015 20:45:50 +0000" -->
<!-- isosent="20151030204550" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel" -->
<!-- id="C87B23EA-94C3-4D53-88B7-9CBCD9CBE2EF_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-30 16:45:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27965.php">Oliver: "[OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Previous message:</strong> <a href="27963.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl	and	libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27959.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27966.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27966.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh, that's an interesting idea: perhaps the &quot;bind to numa&quot; is failing -- but perhaps &quot;bind to socket&quot; would work.
<br>
<p>Can you try:
<br>
<p>/opt/openmpi-1.10.0-gcc/bin/mpiexec -bind-to numa -n 4 hostname
<br>
<p>and
<br>
<p>/opt/openmpi-1.10.0-gcc/bin/mpiexec -bind-to socket -n 4 hostname
<br>
<p><p><p><p><span class="quotelev1">&gt; On Oct 30, 2015, at 12:02 PM, Fabian Wein &lt;fabian.wein_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/30/2015 02:48 PM, Dave Love wrote:
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
<span class="quotelev2">&gt;&gt; before.  Running lstopo might be useful, and checking that you're
</span><br>
<span class="quotelev2">&gt;&gt; picking up the right hwloc dynamic library.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, I don't understand. Where is hwloc dynamically linked? I made now sure I
</span><br>
<span class="quotelev1">&gt; have only one type of libhwloc.so and libnuma.so on the system (there were versions
</span><br>
<span class="quotelev1">&gt; of an older date). Is a a way to check the lib if it has the feature?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec only links libnuma which was actually the old version and is now the one I
</span><br>
<span class="quotelev1">&gt; build from the numactl source by myself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ldd /opt/openmpi-1.10.0-gcc/bin/mpiexec
</span><br>
<span class="quotelev1">&gt; 	linux-vdso.so.1 =&gt;  (0x00007ffffdbaa000)
</span><br>
<span class="quotelev1">&gt; 	libopen-rte.so.12 =&gt; /opt/openmpi-1.10.0-gcc/lib/libopen-rte.so.12 (0x00007fbfdae58000)
</span><br>
<span class="quotelev1">&gt; 	libopen-pal.so.13 =&gt; /opt/openmpi-1.10.0-gcc/lib/libopen-pal.so.13 (0x00007fbfdab78000)
</span><br>
<span class="quotelev1">&gt; 	libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0 (0x00007fbfda958000)
</span><br>
<span class="quotelev1">&gt; 	libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007fbfda590000)
</span><br>
<span class="quotelev1">&gt; 	libnuma.so.1 =&gt; /usr/lib/x86_64-linux-gnu/libnuma.so.1 (0x00007fbfda380000)
</span><br>
<span class="quotelev1">&gt; 	libdl.so.2 =&gt; /lib/x86_64-linux-gnu/libdl.so.2 (0x00007fbfda178000)
</span><br>
<span class="quotelev1">&gt; 	librt.so.1 =&gt; /lib/x86_64-linux-gnu/librt.so.1 (0x00007fbfd9f70000)
</span><br>
<span class="quotelev1">&gt; 	libutil.so.1 =&gt; /lib/x86_64-linux-gnu/libutil.so.1 (0x00007fbfd9d68000)
</span><br>
<span class="quotelev1">&gt; 	/lib64/ld-linux-x86-64.so.2 (0x00007fbfdb0d8000)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What happens if you try to bind to sockets, assuming you don't want to
</span><br>
<span class="quotelev2">&gt;&gt; bind to cores?  [I don't understand why the default isn't to cores when
</span><br>
<span class="quotelev2">&gt;&gt; you have only one process per core.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bind-to cpu and socket bring the same error as bind-to numa.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27959.php">http://www.open-mpi.org/community/lists/users/2015/10/27959.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27965.php">Oliver: "[OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Previous message:</strong> <a href="27963.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl	and	libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27959.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27966.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27966.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
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
