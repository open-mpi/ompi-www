<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2107";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 19 11:18:49 2010" -->
<!-- isoreceived="20100519151849" -->
<!-- sent="Wed, 19 May 2010 11:18:41 -0400" -->
<!-- isosent="20100519151841" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2107" -->
<!-- id="D75B2210-8F45-47DD-A75D-911D905483BC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BF3FEC1.6040609_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2107<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-19 11:18:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1007.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2112)"</a>
<li><strong>Previous message:</strong> <a href="1005.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2107"</a>
<li><strong>In reply to:</strong> <a href="1005.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2107"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bring it on!
<br>
:-)
<br>
<p>On May 19, 2010, at 11:07 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; This branch is pretty much ready to merge in trunk for 1.1.
</span><br>
<span class="quotelev1">&gt; If somebody doesn't like it, please complain!
</span><br>
<span class="quotelev1">&gt; I'll merge by the end of the week otherwise.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 19/05/2010 17:01, bgoglin_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Author: bgoglin
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2010-05-19 11:01:42 EDT (Wed, 19 May 2010)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 2107
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2107">https://svn.open-mpi.org/trac/hwloc/changeset/2107</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; Deoptimize many cpuset routines by using HWLOC_CPUSUBSET_READULONG()
</span><br>
<span class="quotelev2">&gt; &gt; all the time instead of manually handling the cases where a ulong index
</span><br>
<span class="quotelev2">&gt; &gt; is valid in one of the input cpuset and/or the other.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The performance gain wasn't so huge (0-20%), and the code was waaaaay
</span><br>
<span class="quotelev2">&gt; &gt; harder to read/maintain. And things should be much easier to deal
</span><br>
<span class="quotelev2">&gt; &gt; with when we'll add sparse cpuset support.
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;    branches/dyncpusets/src/cpuset.c |   127 ++++++---------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;    1 files changed, 22 insertions(+), 105 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: branches/dyncpusets/src/cpuset.c
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- branches/dyncpusets/src/cpuset.c  (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ branches/dyncpusets/src/cpuset.c  2010-05-19 11:01:42 EDT (Wed, 19 May 2010)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -553,24 +553,13 @@
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  int hwloc_cpuset_isequal (const struct hwloc_cpuset_s *set1, const struct hwloc_cpuset_s *set2)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt; -     unsigned long val;
</span><br>
<span class="quotelev2">&gt; &gt;       unsigned i;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       HWLOC__CPUSET_CHECK(set1);
</span><br>
<span class="quotelev2">&gt; &gt;       HWLOC__CPUSET_CHECK(set2);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -     for(i=0; i&lt;set1-&gt;ulongs_count &amp;&amp; i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             if (set1-&gt;ulongs[i] != set2-&gt;ulongs[i])
</span><br>
<span class="quotelev2">&gt; &gt; -                     return 0;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -     val = set1-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev2">&gt; &gt; -     for(; i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             if (set2-&gt;ulongs[i] != val)
</span><br>
<span class="quotelev2">&gt; &gt; -                     return 0;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -     val = set2-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev2">&gt; &gt; -     for(; i&lt;set1-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             if (set1-&gt;ulongs[i] != val)
</span><br>
<span class="quotelev2">&gt; &gt; +     for(i=0; i&lt;set1-&gt;ulongs_count || i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; +             if (HWLOC_CPUSUBSET_READULONG(set1, i) != HWLOC_CPUSUBSET_READULONG(set2, i))
</span><br>
<span class="quotelev2">&gt; &gt;                       return 0;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       if (set1-&gt;infinite != set2-&gt;infinite)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -581,26 +570,15 @@
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  int hwloc_cpuset_intersects (const struct hwloc_cpuset_s *set1, const struct hwloc_cpuset_s *set2)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt; -     unsigned long val;
</span><br>
<span class="quotelev2">&gt; &gt;       unsigned i;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       HWLOC__CPUSET_CHECK(set1);
</span><br>
<span class="quotelev2">&gt; &gt;       HWLOC__CPUSET_CHECK(set2);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -     for(i=0; i&lt;set1-&gt;ulongs_count &amp;&amp; i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             if ((set1-&gt;ulongs[i] &amp; set2-&gt;ulongs[i]) != HWLOC_CPUSUBSET_ZERO)
</span><br>
<span class="quotelev2">&gt; &gt; +     for(i=0; i&lt;set1-&gt;ulongs_count || i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; +             if ((HWLOC_CPUSUBSET_READULONG(set1, i) &amp; HWLOC_CPUSUBSET_READULONG(set2, i)) != HWLOC_CPUSUBSET_ZERO)
</span><br>
<span class="quotelev2">&gt; &gt;                       return 1;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -     val = set1-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev2">&gt; &gt; -     for(; i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             if ((set2-&gt;ulongs[i] &amp; val) != HWLOC_CPUSUBSET_ZERO)
</span><br>
<span class="quotelev2">&gt; &gt; -                     return 0;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -     val = set2-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev2">&gt; &gt; -     for(; i&lt;set1-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             if ((set1-&gt;ulongs[i] &amp; val) != HWLOC_CPUSUBSET_ZERO)
</span><br>
<span class="quotelev2">&gt; &gt; -                     return 0;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;       if (set1-&gt;infinite &amp;&amp; set2-&gt;infinite)
</span><br>
<span class="quotelev2">&gt; &gt;               return 0;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; @@ -614,12 +592,8 @@
</span><br>
<span class="quotelev2">&gt; &gt;       HWLOC__CPUSET_CHECK(sub_set);
</span><br>
<span class="quotelev2">&gt; &gt;       HWLOC__CPUSET_CHECK(super_set);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -     for(i=0; i&lt;sub_set-&gt;ulongs_count &amp;&amp; i&lt;super_set-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -       if (super_set-&gt;ulongs[i] != (super_set-&gt;ulongs[i] | sub_set-&gt;ulongs[i]))
</span><br>
<span class="quotelev2">&gt; &gt; -                     return 0;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -     for(; i&lt;sub_set-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             if (sub_set-&gt;ulongs[i] != HWLOC_CPUSUBSET_ZERO &amp;&amp; !super_set-&gt;infinite)
</span><br>
<span class="quotelev2">&gt; &gt; +     for(i=0; i&lt;sub_set-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; +             if (HWLOC_CPUSUBSET_READULONG(super_set, i) != (HWLOC_CPUSUBSET_READULONG(super_set, i) | HWLOC_CPUSUBSET_READULONG(sub_set, i)))
</span><br>
<span class="quotelev2">&gt; &gt;                       return 0;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       if (sub_set-&gt;infinite &amp;&amp; !super_set-&gt;infinite)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -631,8 +605,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;  void hwloc_cpuset_or (struct hwloc_cpuset_s *res, const struct hwloc_cpuset_s *set1, const struct hwloc_cpuset_s *set2)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt;       const struct hwloc_cpuset_s *largest = set1-&gt;ulongs_count &gt; set2-&gt;ulongs_count ? set1 : set2;
</span><br>
<span class="quotelev2">&gt; &gt; -     const struct hwloc_cpuset_s *smallest = set1-&gt;ulongs_count &gt; set2-&gt;ulongs_count ? set2 : set1;
</span><br>
<span class="quotelev2">&gt; &gt; -     unsigned long val;
</span><br>
<span class="quotelev2">&gt; &gt;       unsigned i;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       HWLOC__CPUSET_CHECK(res);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -641,16 +613,8 @@
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       hwloc_cpuset_realloc_by_ulongs(res, largest-&gt;ulongs_count); /* cannot reset since the output may also be an input */
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -     for(i=0; i&lt;set1-&gt;ulongs_count &amp;&amp; i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             res-&gt;ulongs[i] = set1-&gt;ulongs[i] | set2-&gt;ulongs[i];
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -     val = smallest-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev2">&gt; &gt; -     for(; i&lt;largest-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             res-&gt;ulongs[i] = val | largest-&gt;ulongs[i];
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -     val |= largest-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev2">&gt; &gt; -     for(; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             res-&gt;ulongs[i] = val;
</span><br>
<span class="quotelev2">&gt; &gt; +     for(i=0; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; +             res-&gt;ulongs[i] = HWLOC_CPUSUBSET_READULONG(set1, i) | HWLOC_CPUSUBSET_READULONG(set2, i);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       res-&gt;infinite = set1-&gt;infinite || set2-&gt;infinite;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt; @@ -658,8 +622,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;  void hwloc_cpuset_and (struct hwloc_cpuset_s *res, const struct hwloc_cpuset_s *set1, const struct hwloc_cpuset_s *set2)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt;       const struct hwloc_cpuset_s *largest = set1-&gt;ulongs_count &gt; set2-&gt;ulongs_count ? set1 : set2;
</span><br>
<span class="quotelev2">&gt; &gt; -     const struct hwloc_cpuset_s *smallest = set1-&gt;ulongs_count &gt; set2-&gt;ulongs_count ? set2 : set1;
</span><br>
<span class="quotelev2">&gt; &gt; -     unsigned long val;
</span><br>
<span class="quotelev2">&gt; &gt;       unsigned i;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       HWLOC__CPUSET_CHECK(res);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -668,16 +630,8 @@
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       hwloc_cpuset_realloc_by_ulongs(res, largest-&gt;ulongs_count); /* cannot reset since the output may also be an input */
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -     for(i=0; i&lt;set1-&gt;ulongs_count &amp;&amp; i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             res-&gt;ulongs[i] = set1-&gt;ulongs[i] &amp; set2-&gt;ulongs[i];
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -     val = smallest-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev2">&gt; &gt; -     for(; i&lt;largest-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             res-&gt;ulongs[i] = val &amp; largest-&gt;ulongs[i];
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -     val &amp;= largest-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev2">&gt; &gt; -     for(; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             res-&gt;ulongs[i] = val;
</span><br>
<span class="quotelev2">&gt; &gt; +     for(i=0; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; +             res-&gt;ulongs[i] = HWLOC_CPUSUBSET_READULONG(set1, i) &amp; HWLOC_CPUSUBSET_READULONG(set2, i);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       res-&gt;infinite = set1-&gt;infinite &amp;&amp; set2-&gt;infinite;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt; @@ -685,8 +639,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;  void hwloc_cpuset_andnot (struct hwloc_cpuset_s *res, const struct hwloc_cpuset_s *set1, const struct hwloc_cpuset_s *set2)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt;       const struct hwloc_cpuset_s *largest = set1-&gt;ulongs_count &gt; set2-&gt;ulongs_count ? set1 : set2;
</span><br>
<span class="quotelev2">&gt; &gt; -     const struct hwloc_cpuset_s *smallest = set1-&gt;ulongs_count &gt; set2-&gt;ulongs_count ? set2 : set1;
</span><br>
<span class="quotelev2">&gt; &gt; -     unsigned long val;
</span><br>
<span class="quotelev2">&gt; &gt;       unsigned i;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       HWLOC__CPUSET_CHECK(res);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -695,16 +647,8 @@
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       hwloc_cpuset_realloc_by_ulongs(res, largest-&gt;ulongs_count); /* cannot reset since the output may also be an input */
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -     for(i=0; i&lt;set1-&gt;ulongs_count &amp;&amp; i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             res-&gt;ulongs[i] = set1-&gt;ulongs[i] &amp; ~set2-&gt;ulongs[i];
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -     val = (!smallest-&gt;infinite) != (smallest != set2) ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev2">&gt; &gt; -     for(; i&lt;largest-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             res-&gt;ulongs[i] = val &amp; largest-&gt;ulongs[i];
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -     val &amp;= (!largest-&gt;infinite) != (largest != set2) ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev2">&gt; &gt; -     for(; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             res-&gt;ulongs[i] = val;
</span><br>
<span class="quotelev2">&gt; &gt; +     for(i=0; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; +             res-&gt;ulongs[i] = HWLOC_CPUSUBSET_READULONG(set1, i) &amp; ~HWLOC_CPUSUBSET_READULONG(set2, i);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       res-&gt;infinite = set1-&gt;infinite &amp;&amp; !set2-&gt;infinite;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt; @@ -712,8 +656,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;  void hwloc_cpuset_xor (struct hwloc_cpuset_s *res, const struct hwloc_cpuset_s *set1, const struct hwloc_cpuset_s *set2)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt;       const struct hwloc_cpuset_s *largest = set1-&gt;ulongs_count &gt; set2-&gt;ulongs_count ? set1 : set2;
</span><br>
<span class="quotelev2">&gt; &gt; -     const struct hwloc_cpuset_s *smallest = set1-&gt;ulongs_count &gt; set2-&gt;ulongs_count ? set2 : set1;
</span><br>
<span class="quotelev2">&gt; &gt; -     unsigned long val;
</span><br>
<span class="quotelev2">&gt; &gt;       unsigned i;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       HWLOC__CPUSET_CHECK(res);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -722,23 +664,14 @@
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       hwloc_cpuset_realloc_by_ulongs(res, largest-&gt;ulongs_count); /* cannot reset since the output may also be an input */
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -     for(i=0; i&lt;set1-&gt;ulongs_count &amp;&amp; i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             res-&gt;ulongs[i] = set1-&gt;ulongs[i] ^ set2-&gt;ulongs[i];
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -     val = smallest-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev2">&gt; &gt; -     for(; i&lt;largest-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             res-&gt;ulongs[i] = val ^ largest-&gt;ulongs[i];
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -     val ^= largest-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev2">&gt; &gt; -     for(; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             res-&gt;ulongs[i] = val;
</span><br>
<span class="quotelev2">&gt; &gt; +     for(i=0; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; +             res-&gt;ulongs[i] = HWLOC_CPUSUBSET_READULONG(set1, i) ^ HWLOC_CPUSUBSET_READULONG(set2, i);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       res-&gt;infinite = (!set1-&gt;infinite) != (!set2-&gt;infinite);
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  void hwloc_cpuset_not (struct hwloc_cpuset_s *res, const struct hwloc_cpuset_s *set)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt; -     unsigned long val;
</span><br>
<span class="quotelev2">&gt; &gt;       unsigned i;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       HWLOC__CPUSET_CHECK(res);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -746,12 +679,8 @@
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       hwloc_cpuset_realloc_by_ulongs(res, set-&gt;ulongs_count); /* cannot reset since the output may also be an input */
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -     for(i=0; i&lt;set-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             res-&gt;ulongs[i] = ~set-&gt;ulongs[i];
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -     val = set-&gt;infinite ? HWLOC_CPUSUBSET_ZERO : HWLOC_CPUSUBSET_FULL;
</span><br>
<span class="quotelev2">&gt; &gt; -     for(; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; -             res-&gt;ulongs[i] = val;
</span><br>
<span class="quotelev2">&gt; &gt; +     for(i=0; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev2">&gt; &gt; +             res-&gt;ulongs[i] = ~HWLOC_CPUSUBSET_READULONG(set, i);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       res-&gt;infinite = !set-&gt;infinite;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt; @@ -884,7 +813,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  int hwloc_cpuset_compare(const struct hwloc_cpuset_s * set1, const struct hwloc_cpuset_s * set2)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt; -     unsigned long val;
</span><br>
<span class="quotelev2">&gt; &gt; +     const struct hwloc_cpuset_s *largest = set1-&gt;ulongs_count &gt; set2-&gt;ulongs_count ? set1 : set2;
</span><br>
<span class="quotelev2">&gt; &gt;       int i;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       HWLOC__CPUSET_CHECK(set1);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -893,24 +822,12 @@
</span><br>
<span class="quotelev2">&gt; &gt;       if ((!set1-&gt;infinite) != (!set2-&gt;infinite))
</span><br>
<span class="quotelev2">&gt; &gt;               return !!set1-&gt;infinite - !!set2-&gt;infinite;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -     val = set2-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev2">&gt; &gt; -     for(i=set1-&gt;ulongs_count-1; (unsigned) i&gt;=set2-&gt;ulongs_count; i--) {
</span><br>
<span class="quotelev2">&gt; &gt; -             if (set1-&gt;ulongs[i] == val)
</span><br>
<span class="quotelev2">&gt; &gt; -                     continue;
</span><br>
<span class="quotelev2">&gt; &gt; -             return set1-&gt;ulongs[i] &lt; val ? -1 : 1;
</span><br>
<span class="quotelev2">&gt; &gt; -     }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -     val = set1-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev2">&gt; &gt; -     for(i=set2-&gt;ulongs_count-1; (unsigned) i&gt;=set1-&gt;ulongs_count; i--) {
</span><br>
<span class="quotelev2">&gt; &gt; -             if (val == set2-&gt;ulongs[i])
</span><br>
<span class="quotelev2">&gt; &gt; -                     continue;
</span><br>
<span class="quotelev2">&gt; &gt; -             return val &lt; set2-&gt;ulongs[i] ? -1 : 1;
</span><br>
<span class="quotelev2">&gt; &gt; -     }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -     for(i=(set2-&gt;ulongs_count &gt; set1-&gt;ulongs_count ? set1-&gt;ulongs_count : set2-&gt;ulongs_count)-1; i&gt;=0; i--) {
</span><br>
<span class="quotelev2">&gt; &gt; -             if (set1-&gt;ulongs[i] == set2-&gt;ulongs[i])
</span><br>
<span class="quotelev2">&gt; &gt; +     for(i=largest-&gt;ulongs_count-1; i&gt;=0; i--) {
</span><br>
<span class="quotelev2">&gt; &gt; +             unsigned long val1 = HWLOC_CPUSUBSET_READULONG(set1, i);
</span><br>
<span class="quotelev2">&gt; &gt; +             unsigned long val2 = HWLOC_CPUSUBSET_READULONG(set2, i);
</span><br>
<span class="quotelev2">&gt; &gt; +             if (val1 == val2)
</span><br>
<span class="quotelev2">&gt; &gt;                       continue;
</span><br>
<span class="quotelev2">&gt; &gt; -             return set1-&gt;ulongs[i] &lt; set2-&gt;ulongs[i] ? -1 : 1;
</span><br>
<span class="quotelev2">&gt; &gt; +             return val1 &lt; val2 ? -1 : 1;
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       return 0;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1007.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2112)"</a>
<li><strong>Previous message:</strong> <a href="1005.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2107"</a>
<li><strong>In reply to:</strong> <a href="1005.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2107"</a>
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
