<?
$subject_val = "Re: [hwloc-devel] 0.9.3rc2 out";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 08:41:46 2009" -->
<!-- isoreceived="20091201134146" -->
<!-- sent="Tue, 1 Dec 2009 08:41:42 -0500" -->
<!-- isosent="20091201134142" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 0.9.3rc2 out" -->
<!-- id="C259E67A-949A-4E8A-8A0F-68641C890061_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="18229643.631259209728129.JavaMail.csamuel_at_sys26" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 0.9.3rc2 out<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 08:41:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0448.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.3rc2 out"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/11/0446.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1406)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/11/0438.php">Chris Samuel: "Re: [hwloc-devel] 0.9.3rc2 out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0448.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.3rc2 out"</a>
<li><strong>Reply:</strong> <a href="0448.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.3rc2 out"</a>
<li><strong>Reply:</strong> <a href="0452.php">Chris Samuel: "Re: [hwloc-devel] 0.9.3rc2 out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 25, 2009, at 11:28 PM, Chris Samuel wrote:
<br>
<p><span class="quotelev1">&gt; Compiles fine with PGI 10.0 and GCC 4.4.2, but we are getting
</span><br>
<span class="quotelev1">&gt; warnings with Intel 11.1 for all files saying:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; icc: command line warning #10121: overriding '-stdc99' with '- 
</span><br>
<span class="quotelev1">&gt; stdgnu99'
</span><br>
<span class="quotelev1">&gt; icc: command line warning #10156: ignoring option '-W'; no argument  
</span><br>
<span class="quotelev1">&gt; required
</span><br>
<span class="quotelev1">&gt; icc: command line warning #10156: ignoring option '-W'; no argument  
</span><br>
<span class="quotelev1">&gt; required
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are also lots of specific warnings for a number of other
</span><br>
<span class="quotelev1">&gt; files, so I've attached the complete makelog for it as some of
</span><br>
<span class="quotelev1">&gt; them are quite long.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>A lot of these are &quot;unreferenced parameters&quot; which I think we should  
<br>
clean up someday, but not today.  ;-)
<br>
<p>The stdc99/stgnu99 one is worth looking at -- probably not for this  
<br>
release, but it does seem like we should straighten it out.  The  
<br>
compile line is:
<br>
<p>icc -std=c99 -DHAVE_CONFIG_H -I. -I../include/private -I../include/ 
<br>
hwloc -I../include -I../include -std=gnu99 -Wall -Wmissing-prototypes - 
<br>
Wundef -Wpointer-arith -Wcast-align -I/usr/include/libxml2 -g -O2 -MT  
<br>
cpuset.lo -MD -MP -MF .deps/cpuset.Tpo -c cpuset.c  -fPIC -DPIC - 
<br>
o .libs/cpuset.o
<br>
<p>in which I see both &quot;-std=c99&quot; and &quot;-std=gnu99&quot;, which doesn't seem  
<br>
right.
<br>
<p>I'll file tickets for this stuff.
<br>
<p>Does everything seem to work properly for you with the rc?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0448.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.3rc2 out"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/11/0446.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1406)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/11/0438.php">Chris Samuel: "Re: [hwloc-devel] 0.9.3rc2 out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0448.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.3rc2 out"</a>
<li><strong>Reply:</strong> <a href="0448.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.3rc2 out"</a>
<li><strong>Reply:</strong> <a href="0452.php">Chris Samuel: "Re: [hwloc-devel] 0.9.3rc2 out"</a>
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
