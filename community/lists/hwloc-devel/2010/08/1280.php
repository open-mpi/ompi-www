<?
$subject_val = "[hwloc-devel] hwloc on netBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 02:37:38 2010" -->
<!-- isoreceived="20100826063738" -->
<!-- sent="Thu, 26 Aug 2010 18:37:31 +1200" -->
<!-- isosent="20100826063731" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc on netBSD" -->
<!-- id="572221e865a37f5976ecfe471202f79b.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc on netBSD<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[hwloc-devel]%20hwloc%20on%20netBSD"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-08-26 02:37:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1281.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on netBSD"</a>
<li><strong>Previous message:</strong> <a href="1279.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.3a1r2425)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1281.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on netBSD"</a>
<li><strong>Reply:</strong> <a href="1281.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on netBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>Firstly, I should say I am not a NetBSD developer at this (or any)
<br>
level however, I can usually find my way around a system's internals
<br>
by judicious use of the man3 content and can type code.
<br>
<p>Jeff Squyres suggested we, ECS VUW, try and come up with a
<br>
<p>&nbsp;src/topology-netbsd.c
<br>
<p>as we seem to be one of the few places running OpenMPI on a NetBSD
<br>
platform and Jeff thinks it'd be useful to have a NetBSD version of
<br>
hwloc for when we do.
<br>
<p>I think I have found most of the system calls needed to duplicate
<br>
the functionality of say, topology-freebsd.c in NetBSD-land, although
<br>
NetBSD may be missing one piece.
<br>
<p>What I have done so far is to patch hwloc-1.0.1 so that it recognises
<br>
and looks to then compile a src/topology-netbsd.c
<br>
<p>As thing stand, the procedures still have their FreeBSD names but
<br>
as you only compile one of the sources that's not an issue for now.
<br>
<p>Suffice to say things configure and start to compile under PkgSrc.
<br>
<p>What NetBSD does not seem to have is the CPU_SETSIZE seen in something
<br>
like:
<br>
<p>hwloc_freebsd_bsd2hwloc(hwloc_cpuset_t hwloc_cpuset, const cpuset_t *cpuset)
<br>
{
<br>
&nbsp;&nbsp;unsigned cpu;
<br>
&nbsp;&nbsp;hwloc_cpuset_zero(hwloc_cpuset);
<br>
&nbsp;&nbsp;for (cpu = 0; cpu &lt; HWLOC_NBMAXCPUS &amp;&amp; cpu &lt; CPU_SETSIZE; cpu++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (CPU_ISSET(cpu, cpuset))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_cpuset_set(hwloc_cpuset, cpu);
<br>
}
<br>
<p>NetBSD does have this macro (rather hidden away as it turned out, in:
<br>
&nbsp;common/lib/libc/sys/cpuset.c )
<br>
<p>#ifndef __lint__
<br>
#define CPUSET_SIZE()   sizeof( \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct {  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint32_t bits[cpuset_nentries]; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;})
<br>
#else
<br>
#define CPUSET_SIZE()   0
<br>
#endif
<br>
<p><p>but my code I  don't, currently, have access to anything called
<br>
&quot;cpuset_nentries&quot;.
<br>
<p>It also seems as though it only gets used after actually creating
<br>
a cpuset.
<br>
<p>_cpuset_create(void)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (cpuset_size == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static int mib[2] = { CTL_HW, HW_NCPU };
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t len;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;u_int nc;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (sysctl(mib, __arraycount(mib), &amp;nc, &amp;len, NULL, 0) == -1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cpuset_nentries = CPUSET_NENTRIES(nc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cpuset_size = CPUSET_SIZE();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return calloc(1, cpuset_size);
<br>
}
<br>
<p><p>where we have:
<br>
<p>#define CPUSET_SHIFT    5
<br>
#define CPUSET_NENTRIES(nc)     ((nc) &gt; 32 ? ((nc) &gt;&gt; CPUSET_SHIFT) : 1)
<br>
<p><p>So, before I go pester the people who speak NetBSD-cpusets, my
<br>
question is, what is the hwloc CPU_SETSIZE actually representing?
<br>
<p><p>Is it apparant to anyone on here, that what I might be able to get
<br>
from the above
<br>
<p>&nbsp;create a cpuset just to get a value for cpuset_nentries so as to be
<br>
&nbsp;able to define CPUSET_SIZE/CPUSET_SIZE()
<br>
<p>will give me what hwloc wants, or am I barking up the wrong tree
<br>
entirely?
<br>
<p>Kevin
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1281.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on netBSD"</a>
<li><strong>Previous message:</strong> <a href="1279.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.3a1r2425)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1281.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on netBSD"</a>
<li><strong>Reply:</strong> <a href="1281.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on netBSD"</a>
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
