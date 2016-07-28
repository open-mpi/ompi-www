<?
$subject_val = "Re: [hwloc-devel] hwloc on netBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 04:44:47 2010" -->
<!-- isoreceived="20100826084447" -->
<!-- sent="Thu, 26 Aug 2010 10:44:40 +0200" -->
<!-- isosent="20100826084440" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc on netBSD" -->
<!-- id="20100826084440.GA4944_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="572221e865a37f5976ecfe471202f79b.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc on netBSD<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 04:44:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1282.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2428)"</a>
<li><strong>Previous message:</strong> <a href="1280.php">Kevin.Buckley_at_[hidden]: "[hwloc-devel] hwloc on netBSD"</a>
<li><strong>In reply to:</strong> <a href="1280.php">Kevin.Buckley_at_[hidden]: "[hwloc-devel] hwloc on netBSD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Kevin.Buckley_at_[hidden], le Thu 26 Aug 2010 18:37:31 +1200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Firstly, I should say I am not a NetBSD developer at this (or any)
</span><br>
<span class="quotelev1">&gt; level however, I can usually find my way around a system's internals
</span><br>
<span class="quotelev1">&gt; by judicious use of the man3 content and can type code.
</span><br>
<p>Then it's all good, I'm not a
<br>
{aix,darwin,freebsd,hpux,osf,solaris,windows} developer either :)
<br>
<p><span class="quotelev1">&gt; Jeff Squyres suggested we, ECS VUW, try and come up with a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  src/topology-netbsd.c
</span><br>
<p>Yay! You're welcome!
<br>
<p><span class="quotelev1">&gt; I think I have found most of the system calls needed to duplicate
</span><br>
<span class="quotelev1">&gt; the functionality of say, topology-freebsd.c in NetBSD-land,
</span><br>
<p>That's probably a good start, yes, as netbsd seems to be lacking numa
<br>
and socket/cache information in its kernel.
<br>
<p><span class="quotelev1">&gt; As thing stand, the procedures still have their FreeBSD names but
</span><br>
<span class="quotelev1">&gt; as you only compile one of the sources that's not an issue for now.
</span><br>
<p>Suffice to s/freebsd/netbsd/ anyway.
<br>
<p><span class="quotelev1">&gt; What NetBSD does not seem to have is the CPU_SETSIZE seen in something
</span><br>
<span class="quotelev1">&gt; like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_freebsd_bsd2hwloc(hwloc_cpuset_t hwloc_cpuset, const cpuset_t *cpuset)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   unsigned cpu;
</span><br>
<span class="quotelev1">&gt;   hwloc_cpuset_zero(hwloc_cpuset);
</span><br>
<span class="quotelev1">&gt;   for (cpu = 0; cpu &lt; HWLOC_NBMAXCPUS &amp;&amp; cpu &lt; CPU_SETSIZE; cpu++)
</span><br>
<span class="quotelev1">&gt;     if (CPU_ISSET(cpu, cpuset))
</span><br>
<span class="quotelev1">&gt;       hwloc_cpuset_set(hwloc_cpuset, cpu);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NetBSD does have this macro (rather hidden away as it turned out, in:
</span><br>
<span class="quotelev1">&gt;  common/lib/libc/sys/cpuset.c )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #ifndef __lint__
</span><br>
<span class="quotelev1">&gt; #define CPUSET_SIZE()   sizeof( \
</span><br>
<span class="quotelev1">&gt;         struct {  \
</span><br>
<span class="quotelev1">&gt;                 uint32_t bits[cpuset_nentries]; \
</span><br>
<span class="quotelev1">&gt;         })
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; #define CPUSET_SIZE()   0
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but my code I  don't, currently, have access to anything called
</span><br>
<span class="quotelev1">&gt; &quot;cpuset_nentries&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It also seems as though it only gets used after actually creating
</span><br>
<span class="quotelev1">&gt; a cpuset.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _cpuset_create(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         if (cpuset_size == 0) {
</span><br>
<span class="quotelev1">&gt;                 static int mib[2] = { CTL_HW, HW_NCPU };
</span><br>
<span class="quotelev1">&gt;                 size_t len;
</span><br>
<span class="quotelev1">&gt;                 u_int nc;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 if (sysctl(mib, __arraycount(mib), &amp;nc, &amp;len, NULL, 0) == -1)
</span><br>
<span class="quotelev1">&gt;                         return NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 cpuset_nentries = CPUSET_NENTRIES(nc);
</span><br>
<span class="quotelev1">&gt;                 cpuset_size = CPUSET_SIZE();
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         return calloc(1, cpuset_size);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where we have:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define CPUSET_SHIFT    5
</span><br>
<span class="quotelev1">&gt; #define CPUSET_NENTRIES(nc)     ((nc) &gt; 32 ? ((nc) &gt;&gt; CPUSET_SHIFT) : 1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, before I go pester the people who speak NetBSD-cpusets, my
</span><br>
<span class="quotelev1">&gt; question is, what is the hwloc CPU_SETSIZE actually representing?
</span><br>
<p>It is used to iterate over the cpus of the bsd cpuset. From what I see
<br>
in netbsd's sys/sched.h, there is a cpuset_size() function which you
<br>
should be able to use there.
<br>
<p><span class="quotelev1">&gt; Is it apparant to anyone on here, that what I might be able to get
</span><br>
<span class="quotelev1">&gt; from the above
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  create a cpuset just to get a value for cpuset_nentries so as to be
</span><br>
<span class="quotelev1">&gt;  able to define CPUSET_SIZE/CPUSET_SIZE()
</span><br>
<p>In the case of the function above (bsd2hwloc), you _already_ have a
<br>
cpuset, and can just use cpuset_size().
<br>
<p>In the case of hwloc2bsd, you will need to create it before calling
<br>
cpuset_size() indeed.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1282.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2428)"</a>
<li><strong>Previous message:</strong> <a href="1280.php">Kevin.Buckley_at_[hidden]: "[hwloc-devel] hwloc on netBSD"</a>
<li><strong>In reply to:</strong> <a href="1280.php">Kevin.Buckley_at_[hidden]: "[hwloc-devel] hwloc on netBSD"</a>
<!-- nextthread="start" -->
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
