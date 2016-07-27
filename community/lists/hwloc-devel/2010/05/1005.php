<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2107";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 19 11:07:50 2010" -->
<!-- isoreceived="20100519150750" -->
<!-- sent="Wed, 19 May 2010 17:07:45 +0200" -->
<!-- isosent="20100519150745" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2107" -->
<!-- id="4BF3FEC1.6040609_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201005191501.o4JF1gYk002596_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-19 11:07:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1006.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2107"</a>
<li><strong>Previous message:</strong> <a href="1004.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc-announce archives not working ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1006.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2107"</a>
<li><strong>Reply:</strong> <a href="1006.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2107"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This branch is pretty much ready to merge in trunk for 1.1.
<br>
If somebody doesn't like it, please complain!
<br>
I'll merge by the end of the week otherwise.
<br>
<p>Brice
<br>
<p><p><p><p>On 19/05/2010 17:01, bgoglin_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2010-05-19 11:01:42 EDT (Wed, 19 May 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 2107
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2107">https://svn.open-mpi.org/trac/hwloc/changeset/2107</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Deoptimize many cpuset routines by using HWLOC_CPUSUBSET_READULONG()
</span><br>
<span class="quotelev1">&gt; all the time instead of manually handling the cases where a ulong index
</span><br>
<span class="quotelev1">&gt; is valid in one of the input cpuset and/or the other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The performance gain wasn't so huge (0-20%), and the code was waaaaay
</span><br>
<span class="quotelev1">&gt; harder to read/maintain. And things should be much easier to deal
</span><br>
<span class="quotelev1">&gt; with when we'll add sparse cpuset support.
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    branches/dyncpusets/src/cpuset.c |   127 ++++++--------------------------------- 
</span><br>
<span class="quotelev1">&gt;    1 files changed, 22 insertions(+), 105 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/dyncpusets/src/cpuset.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/dyncpusets/src/cpuset.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ branches/dyncpusets/src/cpuset.c	2010-05-19 11:01:42 EDT (Wed, 19 May 2010)
</span><br>
<span class="quotelev1">&gt; @@ -553,24 +553,13 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  int hwloc_cpuset_isequal (const struct hwloc_cpuset_s *set1, const struct hwloc_cpuset_s *set2)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -	unsigned long val;
</span><br>
<span class="quotelev1">&gt;  	unsigned i;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	HWLOC__CPUSET_CHECK(set1);
</span><br>
<span class="quotelev1">&gt;  	HWLOC__CPUSET_CHECK(set2);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -	for(i=0; i&lt;set1-&gt;ulongs_count &amp;&amp; i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		if (set1-&gt;ulongs[i] != set2-&gt;ulongs[i])
</span><br>
<span class="quotelev1">&gt; -			return 0;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	val = set1-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev1">&gt; -	for(; i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		if (set2-&gt;ulongs[i] != val)
</span><br>
<span class="quotelev1">&gt; -			return 0;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	val = set2-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev1">&gt; -	for(; i&lt;set1-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		if (set1-&gt;ulongs[i] != val)
</span><br>
<span class="quotelev1">&gt; +	for(i=0; i&lt;set1-&gt;ulongs_count || i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; +		if (HWLOC_CPUSUBSET_READULONG(set1, i) != HWLOC_CPUSUBSET_READULONG(set2, i))
</span><br>
<span class="quotelev1">&gt;  			return 0;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	if (set1-&gt;infinite != set2-&gt;infinite)
</span><br>
<span class="quotelev1">&gt; @@ -581,26 +570,15 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  int hwloc_cpuset_intersects (const struct hwloc_cpuset_s *set1, const struct hwloc_cpuset_s *set2)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -	unsigned long val;
</span><br>
<span class="quotelev1">&gt;  	unsigned i;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	HWLOC__CPUSET_CHECK(set1);
</span><br>
<span class="quotelev1">&gt;  	HWLOC__CPUSET_CHECK(set2);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -	for(i=0; i&lt;set1-&gt;ulongs_count &amp;&amp; i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		if ((set1-&gt;ulongs[i] &amp; set2-&gt;ulongs[i]) != HWLOC_CPUSUBSET_ZERO)
</span><br>
<span class="quotelev1">&gt; +	for(i=0; i&lt;set1-&gt;ulongs_count || i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; +		if ((HWLOC_CPUSUBSET_READULONG(set1, i) &amp; HWLOC_CPUSUBSET_READULONG(set2, i)) != HWLOC_CPUSUBSET_ZERO)
</span><br>
<span class="quotelev1">&gt;  			return 1;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -	val = set1-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev1">&gt; -	for(; i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		if ((set2-&gt;ulongs[i] &amp; val) != HWLOC_CPUSUBSET_ZERO)
</span><br>
<span class="quotelev1">&gt; -			return 0;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	val = set2-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev1">&gt; -	for(; i&lt;set1-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		if ((set1-&gt;ulongs[i] &amp; val) != HWLOC_CPUSUBSET_ZERO)
</span><br>
<span class="quotelev1">&gt; -			return 0;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  	if (set1-&gt;infinite &amp;&amp; set2-&gt;infinite)
</span><br>
<span class="quotelev1">&gt;  		return 0;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -614,12 +592,8 @@
</span><br>
<span class="quotelev1">&gt;  	HWLOC__CPUSET_CHECK(sub_set);
</span><br>
<span class="quotelev1">&gt;  	HWLOC__CPUSET_CHECK(super_set);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -	for(i=0; i&lt;sub_set-&gt;ulongs_count &amp;&amp; i&lt;super_set-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -	  if (super_set-&gt;ulongs[i] != (super_set-&gt;ulongs[i] | sub_set-&gt;ulongs[i]))
</span><br>
<span class="quotelev1">&gt; -			return 0;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	for(; i&lt;sub_set-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		if (sub_set-&gt;ulongs[i] != HWLOC_CPUSUBSET_ZERO &amp;&amp; !super_set-&gt;infinite)
</span><br>
<span class="quotelev1">&gt; +	for(i=0; i&lt;sub_set-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; +		if (HWLOC_CPUSUBSET_READULONG(super_set, i) != (HWLOC_CPUSUBSET_READULONG(super_set, i) | HWLOC_CPUSUBSET_READULONG(sub_set, i)))
</span><br>
<span class="quotelev1">&gt;  			return 0;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	if (sub_set-&gt;infinite &amp;&amp; !super_set-&gt;infinite)
</span><br>
<span class="quotelev1">&gt; @@ -631,8 +605,6 @@
</span><br>
<span class="quotelev1">&gt;  void hwloc_cpuset_or (struct hwloc_cpuset_s *res, const struct hwloc_cpuset_s *set1, const struct hwloc_cpuset_s *set2)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;  	const struct hwloc_cpuset_s *largest = set1-&gt;ulongs_count &gt; set2-&gt;ulongs_count ? set1 : set2;
</span><br>
<span class="quotelev1">&gt; -	const struct hwloc_cpuset_s *smallest = set1-&gt;ulongs_count &gt; set2-&gt;ulongs_count ? set2 : set1;
</span><br>
<span class="quotelev1">&gt; -	unsigned long val;
</span><br>
<span class="quotelev1">&gt;  	unsigned i;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	HWLOC__CPUSET_CHECK(res);
</span><br>
<span class="quotelev1">&gt; @@ -641,16 +613,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	hwloc_cpuset_realloc_by_ulongs(res, largest-&gt;ulongs_count); /* cannot reset since the output may also be an input */
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -	for(i=0; i&lt;set1-&gt;ulongs_count &amp;&amp; i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		res-&gt;ulongs[i] = set1-&gt;ulongs[i] | set2-&gt;ulongs[i];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	val = smallest-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev1">&gt; -	for(; i&lt;largest-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		res-&gt;ulongs[i] = val | largest-&gt;ulongs[i];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	val |= largest-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev1">&gt; -	for(; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		res-&gt;ulongs[i] = val;
</span><br>
<span class="quotelev1">&gt; +	for(i=0; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; +		res-&gt;ulongs[i] = HWLOC_CPUSUBSET_READULONG(set1, i) | HWLOC_CPUSUBSET_READULONG(set2, i);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	res-&gt;infinite = set1-&gt;infinite || set2-&gt;infinite;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; @@ -658,8 +622,6 @@
</span><br>
<span class="quotelev1">&gt;  void hwloc_cpuset_and (struct hwloc_cpuset_s *res, const struct hwloc_cpuset_s *set1, const struct hwloc_cpuset_s *set2)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;  	const struct hwloc_cpuset_s *largest = set1-&gt;ulongs_count &gt; set2-&gt;ulongs_count ? set1 : set2;
</span><br>
<span class="quotelev1">&gt; -	const struct hwloc_cpuset_s *smallest = set1-&gt;ulongs_count &gt; set2-&gt;ulongs_count ? set2 : set1;
</span><br>
<span class="quotelev1">&gt; -	unsigned long val;
</span><br>
<span class="quotelev1">&gt;  	unsigned i;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	HWLOC__CPUSET_CHECK(res);
</span><br>
<span class="quotelev1">&gt; @@ -668,16 +630,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	hwloc_cpuset_realloc_by_ulongs(res, largest-&gt;ulongs_count); /* cannot reset since the output may also be an input */
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -	for(i=0; i&lt;set1-&gt;ulongs_count &amp;&amp; i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		res-&gt;ulongs[i] = set1-&gt;ulongs[i] &amp; set2-&gt;ulongs[i];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	val = smallest-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev1">&gt; -	for(; i&lt;largest-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		res-&gt;ulongs[i] = val &amp; largest-&gt;ulongs[i];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	val &amp;= largest-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev1">&gt; -	for(; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		res-&gt;ulongs[i] = val;
</span><br>
<span class="quotelev1">&gt; +	for(i=0; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; +		res-&gt;ulongs[i] = HWLOC_CPUSUBSET_READULONG(set1, i) &amp; HWLOC_CPUSUBSET_READULONG(set2, i);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	res-&gt;infinite = set1-&gt;infinite &amp;&amp; set2-&gt;infinite;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; @@ -685,8 +639,6 @@
</span><br>
<span class="quotelev1">&gt;  void hwloc_cpuset_andnot (struct hwloc_cpuset_s *res, const struct hwloc_cpuset_s *set1, const struct hwloc_cpuset_s *set2)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;  	const struct hwloc_cpuset_s *largest = set1-&gt;ulongs_count &gt; set2-&gt;ulongs_count ? set1 : set2;
</span><br>
<span class="quotelev1">&gt; -	const struct hwloc_cpuset_s *smallest = set1-&gt;ulongs_count &gt; set2-&gt;ulongs_count ? set2 : set1;
</span><br>
<span class="quotelev1">&gt; -	unsigned long val;
</span><br>
<span class="quotelev1">&gt;  	unsigned i;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	HWLOC__CPUSET_CHECK(res);
</span><br>
<span class="quotelev1">&gt; @@ -695,16 +647,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	hwloc_cpuset_realloc_by_ulongs(res, largest-&gt;ulongs_count); /* cannot reset since the output may also be an input */
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -	for(i=0; i&lt;set1-&gt;ulongs_count &amp;&amp; i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		res-&gt;ulongs[i] = set1-&gt;ulongs[i] &amp; ~set2-&gt;ulongs[i];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	val = (!smallest-&gt;infinite) != (smallest != set2) ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev1">&gt; -	for(; i&lt;largest-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		res-&gt;ulongs[i] = val &amp; largest-&gt;ulongs[i];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	val &amp;= (!largest-&gt;infinite) != (largest != set2) ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev1">&gt; -	for(; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		res-&gt;ulongs[i] = val;
</span><br>
<span class="quotelev1">&gt; +	for(i=0; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; +		res-&gt;ulongs[i] = HWLOC_CPUSUBSET_READULONG(set1, i) &amp; ~HWLOC_CPUSUBSET_READULONG(set2, i);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	res-&gt;infinite = set1-&gt;infinite &amp;&amp; !set2-&gt;infinite;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; @@ -712,8 +656,6 @@
</span><br>
<span class="quotelev1">&gt;  void hwloc_cpuset_xor (struct hwloc_cpuset_s *res, const struct hwloc_cpuset_s *set1, const struct hwloc_cpuset_s *set2)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;  	const struct hwloc_cpuset_s *largest = set1-&gt;ulongs_count &gt; set2-&gt;ulongs_count ? set1 : set2;
</span><br>
<span class="quotelev1">&gt; -	const struct hwloc_cpuset_s *smallest = set1-&gt;ulongs_count &gt; set2-&gt;ulongs_count ? set2 : set1;
</span><br>
<span class="quotelev1">&gt; -	unsigned long val;
</span><br>
<span class="quotelev1">&gt;  	unsigned i;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	HWLOC__CPUSET_CHECK(res);
</span><br>
<span class="quotelev1">&gt; @@ -722,23 +664,14 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	hwloc_cpuset_realloc_by_ulongs(res, largest-&gt;ulongs_count); /* cannot reset since the output may also be an input */
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -	for(i=0; i&lt;set1-&gt;ulongs_count &amp;&amp; i&lt;set2-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		res-&gt;ulongs[i] = set1-&gt;ulongs[i] ^ set2-&gt;ulongs[i];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	val = smallest-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev1">&gt; -	for(; i&lt;largest-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		res-&gt;ulongs[i] = val ^ largest-&gt;ulongs[i];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	val ^= largest-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev1">&gt; -	for(; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		res-&gt;ulongs[i] = val;
</span><br>
<span class="quotelev1">&gt; +	for(i=0; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; +		res-&gt;ulongs[i] = HWLOC_CPUSUBSET_READULONG(set1, i) ^ HWLOC_CPUSUBSET_READULONG(set2, i);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	res-&gt;infinite = (!set1-&gt;infinite) != (!set2-&gt;infinite);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  void hwloc_cpuset_not (struct hwloc_cpuset_s *res, const struct hwloc_cpuset_s *set)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -	unsigned long val;
</span><br>
<span class="quotelev1">&gt;  	unsigned i;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	HWLOC__CPUSET_CHECK(res);
</span><br>
<span class="quotelev1">&gt; @@ -746,12 +679,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	hwloc_cpuset_realloc_by_ulongs(res, set-&gt;ulongs_count); /* cannot reset since the output may also be an input */
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -	for(i=0; i&lt;set-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		res-&gt;ulongs[i] = ~set-&gt;ulongs[i];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	val = set-&gt;infinite ? HWLOC_CPUSUBSET_ZERO : HWLOC_CPUSUBSET_FULL;
</span><br>
<span class="quotelev1">&gt; -	for(; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; -		res-&gt;ulongs[i] = val;
</span><br>
<span class="quotelev1">&gt; +	for(i=0; i&lt;res-&gt;ulongs_count; i++)
</span><br>
<span class="quotelev1">&gt; +		res-&gt;ulongs[i] = ~HWLOC_CPUSUBSET_READULONG(set, i);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	res-&gt;infinite = !set-&gt;infinite;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; @@ -884,7 +813,7 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  int hwloc_cpuset_compare(const struct hwloc_cpuset_s * set1, const struct hwloc_cpuset_s * set2)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -	unsigned long val;
</span><br>
<span class="quotelev1">&gt; +	const struct hwloc_cpuset_s *largest = set1-&gt;ulongs_count &gt; set2-&gt;ulongs_count ? set1 : set2;
</span><br>
<span class="quotelev1">&gt;  	int i;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	HWLOC__CPUSET_CHECK(set1);
</span><br>
<span class="quotelev1">&gt; @@ -893,24 +822,12 @@
</span><br>
<span class="quotelev1">&gt;  	if ((!set1-&gt;infinite) != (!set2-&gt;infinite))
</span><br>
<span class="quotelev1">&gt;  		return !!set1-&gt;infinite - !!set2-&gt;infinite;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -	val = set2-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev1">&gt; -	for(i=set1-&gt;ulongs_count-1; (unsigned) i&gt;=set2-&gt;ulongs_count; i--) {
</span><br>
<span class="quotelev1">&gt; -		if (set1-&gt;ulongs[i] == val)
</span><br>
<span class="quotelev1">&gt; -			continue;
</span><br>
<span class="quotelev1">&gt; -		return set1-&gt;ulongs[i] &lt; val ? -1 : 1;
</span><br>
<span class="quotelev1">&gt; -	}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	val = set1-&gt;infinite ? HWLOC_CPUSUBSET_FULL : HWLOC_CPUSUBSET_ZERO;
</span><br>
<span class="quotelev1">&gt; -	for(i=set2-&gt;ulongs_count-1; (unsigned) i&gt;=set1-&gt;ulongs_count; i--) {
</span><br>
<span class="quotelev1">&gt; -		if (val == set2-&gt;ulongs[i])
</span><br>
<span class="quotelev1">&gt; -			continue;
</span><br>
<span class="quotelev1">&gt; -		return val &lt; set2-&gt;ulongs[i] ? -1 : 1;
</span><br>
<span class="quotelev1">&gt; -	}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -	for(i=(set2-&gt;ulongs_count &gt; set1-&gt;ulongs_count ? set1-&gt;ulongs_count : set2-&gt;ulongs_count)-1; i&gt;=0; i--) {
</span><br>
<span class="quotelev1">&gt; -		if (set1-&gt;ulongs[i] == set2-&gt;ulongs[i])
</span><br>
<span class="quotelev1">&gt; +	for(i=largest-&gt;ulongs_count-1; i&gt;=0; i--) {
</span><br>
<span class="quotelev1">&gt; +		unsigned long val1 = HWLOC_CPUSUBSET_READULONG(set1, i);
</span><br>
<span class="quotelev1">&gt; +		unsigned long val2 = HWLOC_CPUSUBSET_READULONG(set2, i);
</span><br>
<span class="quotelev1">&gt; +		if (val1 == val2)
</span><br>
<span class="quotelev1">&gt;  			continue;
</span><br>
<span class="quotelev1">&gt; -		return set1-&gt;ulongs[i] &lt; set2-&gt;ulongs[i] ? -1 : 1;
</span><br>
<span class="quotelev1">&gt; +		return val1 &lt; val2 ? -1 : 1;
</span><br>
<span class="quotelev1">&gt;  	}
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  	return 0;
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
<li><strong>Next message:</strong> <a href="1006.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2107"</a>
<li><strong>Previous message:</strong> <a href="1004.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc-announce archives not working ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1006.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2107"</a>
<li><strong>Reply:</strong> <a href="1006.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2107"</a>
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
