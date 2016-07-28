<?
$subject_val = "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 16:29:16 2015" -->
<!-- isoreceived="20151029202916" -->
<!-- sent="Thu, 29 Oct 2015 20:29:11 +0000" -->
<!-- isosent="20151029202911" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel" -->
<!-- id="87a8r1to4o.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8C13A87D-4B2A-4E24-B6DB-EDDF073911D8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-29 16:29:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27951.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27949.php">Brice Goglin: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27943.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27952.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27952.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you're compiling Open MPI from source, you need the -devel package
</span><br>
<span class="quotelev1">&gt; so that the libnuma header files are installed (and therefore Open MPI
</span><br>
<span class="quotelev1">&gt; [i.e., the hwloc embedded in Open MPI] can include those header files
</span><br>
<span class="quotelev1">&gt; and then compile support for libnuma).
</span><br>
<p><span class="quotelev1">&gt;From the log it appears to have built OK against hwloc.
</span><br>
<p>We've been through this before, and I thought the message had been
<br>
amended.  libnumactl-devel is not an Ubuntu package -- that's
<br>
libnuma-dev -- and it's not necessary.  This is with the native Ubuntu
<br>
openmpi, but I hope libnuma isn't being used by anything other than
<br>
libhwloc these days.  [I assume the -devel business is from some
<br>
pre-hwloc version which dlopen'ed libnuma.so.]
<br>
<p>&nbsp;&nbsp;$ mpirun --bind-to-core --report-bindings -np 2 hostname
<br>
&nbsp;&nbsp;[albion:01052] MCW rank 0 bound to socket 0[core 0]: [B .]
<br>
&nbsp;&nbsp;[albion:01052] MCW rank 1 bound to socket 0[core 1]: [. B]
<br>
&nbsp;&nbsp;albion
<br>
&nbsp;&nbsp;albion
<br>
&nbsp;&nbsp;$ dpkg -l libnuma-dev
<br>
&nbsp;&nbsp;dpkg-query: no packages found matching libnuma-dev
<br>
<p>I guess the problem is not having hwloc/libnuma1 on the compute host, as
<br>
opposed to the build host.  Test like this on the host, though the
<br>
component name may be different in 1.10:
<br>
<p>&nbsp;&nbsp;$ ldd /usr/lib/openmpi/lib/openmpi/mca_paffinity_hwloc.so | egrep 'hwloc|numa'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libhwloc.so.5 =&gt; /usr/lib/x86_64-linux-gnu/libhwloc.so.5 (0x00007f690bba8000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnuma.so.1 =&gt; /usr/lib/x86_64-linux-gnu/libnuma.so.1 (0x00007f690b3b9000)
<br>
<p>Otherwise I guess there's a useful MCA debugging parameter, but I don't
<br>
know what to try in 1.10.
<br>
<p>If you want to replace or supplement the system package, I recommend
<br>
modifying the source package to use the newer source and build a new
<br>
binary package from that; usually the mods are trivial.  Then dpkg or
<br>
rpm manages the dependencies.
<br>
<p><span class="quotelev2">&gt;&gt; On Oct 29, 2015, at 7:01 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You need to also install libnuma-devel, I&#226;&#128;&#153;m afraid - just has to do
</span><br>
<span class="quotelev2">&gt;&gt; with how they chose to split the library
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 29, 2015, at 2:01 AM, Fabian Wein &lt;fabian.wein_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm new to the list, maybe the issue was somewhere else already
</span><br>
<span class="quotelev3">&gt;&gt;&gt; solved. I found a similar question in the mailing list archive but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no solution.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; By comparing to a similar system I found that for my 4 sockets
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Opteron system it is necessary to run mpi with -bind-to numa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On my ubunut 14.04 system I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A request was made to bind a process, but at least one node does NOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support binding processes to cpus.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Node:  leo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This usually is due to not having libnumactl and libnumactl-devel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed on the node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; locate libnuma | grep so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; results in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/x86_64-linux-gnu/libnuma.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/x86_64-linux-gnu/libnuma.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib64/libnuma.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib64/libnuma.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I configure hwloc 1.11.1 it detects numa (it tells me at the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; end of configure)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and &quot;grep numa config.status&quot;  results in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; S[&quot;HWLOC_LIBS&quot;]=&quot;-lm  -lnuma -lxml2  &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; S[&quot;HWLOC_LINUX_LIBNUMA_LIBS&quot;]=&quot;-lnuma&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I configure openmpi-1.10.0 it also finds libnuma
</span><br>
<span class="quotelev3">&gt;&gt;&gt; grep numa config.status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; S[&quot;OMPI_WRAPPER_EXTRA_LIBS&quot;]=&quot;-lm -lnuma -ldl -lutil &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; S[&quot;ORTE_WRAPPER_EXTRA_LIBS&quot;]=&quot;-lm -lnuma -ldl -lutil &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; S[&quot;OPAL_WRAPPER_EXTRA_LIBS&quot;]=&quot;-lm -lnuma -ldl -lutil &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; S[&quot;HWLOC_EMBEDDED_LIBS&quot;]=&quot;-lm  -lnuma&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; S[&quot;HWLOC_LINUX_LIBNUMA_LIBS&quot;]=&quot;-lnuma&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; D[&quot;WRAPPER_EXTRA_LIBS&quot;]=&quot; \&quot;-lm -lnuma -ldl -lutil \&quot;&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However I have no idea how I could install libnumactl and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libnumactl-devel. I cannot google it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I built numactl-2.0.9 manually but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~/tmp/numactl-2.0.9$ ll lib*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only gives libnuma.a and libnuma.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Even the source for open-mpi gives no hint
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-1.10.0$ grep -r numactl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal/mca/hwloc/hwloc191/hwloc/README:  * libnuma for memory binding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and migration support on Linux (numactl-devel or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/mca/rmaps/base/help-orte-rmaps-base.txt:This usually is due to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not having libnumactl and libnumactl-devel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/mca/rmaps/base/help-orte-rmaps-base.txt:contained in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/mca/rmaps/base/help-orte-rmaps-base.txt:contained in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please help, I have no idea what to try next. The only options I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently see are to try with mpich or by intel-mpi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fabian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27941.php">http://www.open-mpi.org/community/lists/users/2015/10/27941.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27942.php">http://www.open-mpi.org/community/lists/users/2015/10/27942.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27951.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27949.php">Brice Goglin: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27943.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27952.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27952.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
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
