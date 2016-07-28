<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2300";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 10 05:51:50 2010" -->
<!-- isoreceived="20100710095150" -->
<!-- sent="Sat, 10 Jul 2010 11:49:48 +0200" -->
<!-- isosent="20100710094948" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2300" -->
<!-- id="4C38423C.7050307_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201007100949.o6A9n2wt021488_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2300<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-10 05:49:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1147.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2301)"</a>
<li><strong>Previous message:</strong> <a href="1145.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If this looks ok, I'll backport it in the 1.0 branch.
<br>
<p>Brice
<br>
<p><p><p>Le 10/07/2010 11:49, bgoglin_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2010-07-10 05:49:02 EDT (Sat, 10 Jul 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 2300
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2300">https://svn.open-mpi.org/trac/hwloc/changeset/2300</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Stop defining HWLOC_BITS_PER_* and HWLOC_SIZEOF_* in public header,
</span><br>
<span class="quotelev1">&gt; only have them in private headers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (should fix <a href="https://bugzilla.redhat.com/show_bug.cgi?id=606498#c6">https://bugzilla.redhat.com/show_bug.cgi?id=606498#c6</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/include/hwloc/config.h.in |    18 ------------------                      
</span><br>
<span class="quotelev1">&gt;    trunk/include/private/misc.h    |    13 +++++++++++++                           
</span><br>
<span class="quotelev1">&gt;    2 files changed, 13 insertions(+), 18 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/include/hwloc/config.h.in
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/include/hwloc/config.h.in	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/include/hwloc/config.h.in	2010-07-10 05:49:02 EDT (Sat, 10 Jul 2010)
</span><br>
<span class="quotelev1">&gt; @@ -95,27 +95,9 @@
</span><br>
<span class="quotelev1">&gt;  /* Defined to 1 if the CPU_SET macro works */
</span><br>
<span class="quotelev1">&gt;  #undef HWLOC_HAVE_CPU_SET
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -/* The size of `unsigned long', as computed by sizeof */
</span><br>
<span class="quotelev1">&gt; -#undef HWLOC_SIZEOF_UNSIGNED_LONG
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -/* The size of `unsigned int', as computed by sizeof */
</span><br>
<span class="quotelev1">&gt; -#undef HWLOC_SIZEOF_UNSIGNED_INT
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  /* Defined to 1 if you have the &lt;stdint.h&gt; header file. */
</span><br>
<span class="quotelev1">&gt;  #undef HWLOC_HAVE_STDINT_H
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -#define HWLOC_BITS_PER_LONG (HWLOC_SIZEOF_UNSIGNED_LONG * 8)
</span><br>
<span class="quotelev1">&gt; -#define HWLOC_BITS_PER_INT (HWLOC_SIZEOF_UNSIGNED_INT * 8)
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#if (HWLOC_BITS_PER_LONG != 32) &amp;&amp; (HWLOC_BITS_PER_LONG != 64)
</span><br>
<span class="quotelev1">&gt; -#error &quot;unknown size for unsigned long.&quot;
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#if (HWLOC_BITS_PER_INT != 16) &amp;&amp; (HWLOC_BITS_PER_INT != 32) &amp;&amp; (HWLOC_BITS_PER_INT != 64)
</span><br>
<span class="quotelev1">&gt; -#error &quot;unknown size for unsigned int.&quot;
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  /* Defined to 1 if you have the `windows.h' header. */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/include/private/misc.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/include/private/misc.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/include/private/misc.h	2010-07-10 05:49:02 EDT (Sat, 10 Jul 2010)
</span><br>
<span class="quotelev1">&gt; @@ -26,6 +26,19 @@
</span><br>
<span class="quotelev1">&gt;  #define HWLOC_BUILD_ASSERT(condition) ((void)sizeof(char[1 - 2*!(condition)]))
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#define HWLOC_BITS_PER_LONG (HWLOC_SIZEOF_UNSIGNED_LONG * 8)
</span><br>
<span class="quotelev1">&gt; +#define HWLOC_BITS_PER_INT (HWLOC_SIZEOF_UNSIGNED_INT * 8)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#if (HWLOC_BITS_PER_LONG != 32) &amp;&amp; (HWLOC_BITS_PER_LONG != 64)
</span><br>
<span class="quotelev1">&gt; +#error &quot;unknown size for unsigned long.&quot;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#if (HWLOC_BITS_PER_INT != 16) &amp;&amp; (HWLOC_BITS_PER_INT != 32) &amp;&amp; (HWLOC_BITS_PER_INT != 64)
</span><br>
<span class="quotelev1">&gt; +#error &quot;unknown size for unsigned int.&quot;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  /**
</span><br>
<span class="quotelev1">&gt;   * ffsl helpers.
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1147.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2301)"</a>
<li><strong>Previous message:</strong> <a href="1145.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
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
