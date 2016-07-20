<?
$subject_val = "Re: [hwloc-users] hwloc on Blue Gene/Q?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 10 20:17:01 2013" -->
<!-- isoreceived="20130211011701" -->
<!-- sent="Mon, 11 Feb 2013 12:16:51 +1100" -->
<!-- isosent="20130211011651" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc on Blue Gene/Q?" -->
<!-- id="51184683.2070103_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5116D1B4.6090501_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc on Blue Gene/Q?<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-10 20:16:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0859.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Previous message:</strong> <a href="0857.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>In reply to:</strong> <a href="0856.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/02/13 09:46, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; The new &quot;bgq&quot; branch now contains proper topology for BG/Q nodes
</span><br>
<span class="quotelev1">&gt; (including cores and caches, except the prefetching cache) as well as
</span><br>
<span class="quotelev1">&gt; support for set/get binding of the current thread or of another thread.
</span><br>
<p>Great!  Is there a canonical way to build it?
<br>
<p>I'm trying:
<br>
<p>CC=mpicc CXX=mpicxx LD=mpicc ./configure
<br>
<p>which compiles and links but only seems to discover the cores:
<br>
<p><p>[samuel_at_avoca utils]$ srun ./lstopo-no-graphics -v
<br>
Machine (P#0 Backend=Linux OSName=CNK 
<br>
OSRelease=2.6.32-279.14.1.bgq.el6_V1R2M0_3.ppc64 OSVersion=1 
<br>
HostName=r01-id-j03.pcf.vlsci.unimelb.edu.au Architecture=BGQ)
<br>
&nbsp;&nbsp;&nbsp;PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;PU L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;PU L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;PU L#4 (P#4)
<br>
&nbsp;&nbsp;&nbsp;PU L#5 (P#5)
<br>
&nbsp;&nbsp;&nbsp;PU L#6 (P#6)
<br>
&nbsp;&nbsp;&nbsp;PU L#7 (P#7)
<br>
&nbsp;&nbsp;&nbsp;PU L#8 (P#8)
<br>
&nbsp;&nbsp;&nbsp;PU L#9 (P#9)
<br>
&nbsp;&nbsp;&nbsp;PU L#10 (P#10)
<br>
&nbsp;&nbsp;&nbsp;PU L#11 (P#11)
<br>
&nbsp;&nbsp;&nbsp;PU L#12 (P#12)
<br>
&nbsp;&nbsp;&nbsp;PU L#13 (P#13)
<br>
&nbsp;&nbsp;&nbsp;PU L#14 (P#14)
<br>
&nbsp;&nbsp;&nbsp;PU L#15 (P#15)
<br>
&nbsp;&nbsp;&nbsp;PU L#16 (P#16)
<br>
&nbsp;&nbsp;&nbsp;PU L#17 (P#17)
<br>
&nbsp;&nbsp;&nbsp;PU L#18 (P#18)
<br>
&nbsp;&nbsp;&nbsp;PU L#19 (P#19)
<br>
&nbsp;&nbsp;&nbsp;PU L#20 (P#20)
<br>
&nbsp;&nbsp;&nbsp;PU L#21 (P#21)
<br>
&nbsp;&nbsp;&nbsp;PU L#22 (P#22)
<br>
&nbsp;&nbsp;&nbsp;PU L#23 (P#23)
<br>
&nbsp;&nbsp;&nbsp;PU L#24 (P#24)
<br>
&nbsp;&nbsp;&nbsp;PU L#25 (P#25)
<br>
&nbsp;&nbsp;&nbsp;PU L#26 (P#26)
<br>
&nbsp;&nbsp;&nbsp;PU L#27 (P#27)
<br>
&nbsp;&nbsp;&nbsp;PU L#28 (P#28)
<br>
&nbsp;&nbsp;&nbsp;PU L#29 (P#29)
<br>
&nbsp;&nbsp;&nbsp;PU L#30 (P#30)
<br>
&nbsp;&nbsp;&nbsp;PU L#31 (P#31)
<br>
&nbsp;&nbsp;&nbsp;PU L#32 (P#32)
<br>
&nbsp;&nbsp;&nbsp;PU L#33 (P#33)
<br>
&nbsp;&nbsp;&nbsp;PU L#34 (P#34)
<br>
&nbsp;&nbsp;&nbsp;PU L#35 (P#35)
<br>
&nbsp;&nbsp;&nbsp;PU L#36 (P#36)
<br>
&nbsp;&nbsp;&nbsp;PU L#37 (P#37)
<br>
&nbsp;&nbsp;&nbsp;PU L#38 (P#38)
<br>
&nbsp;&nbsp;&nbsp;PU L#39 (P#39)
<br>
&nbsp;&nbsp;&nbsp;PU L#40 (P#40)
<br>
&nbsp;&nbsp;&nbsp;PU L#41 (P#41)
<br>
&nbsp;&nbsp;&nbsp;PU L#42 (P#42)
<br>
&nbsp;&nbsp;&nbsp;PU L#43 (P#43)
<br>
&nbsp;&nbsp;&nbsp;PU L#44 (P#44)
<br>
&nbsp;&nbsp;&nbsp;PU L#45 (P#45)
<br>
&nbsp;&nbsp;&nbsp;PU L#46 (P#46)
<br>
&nbsp;&nbsp;&nbsp;PU L#47 (P#47)
<br>
&nbsp;&nbsp;&nbsp;PU L#48 (P#48)
<br>
&nbsp;&nbsp;&nbsp;PU L#49 (P#49)
<br>
&nbsp;&nbsp;&nbsp;PU L#50 (P#50)
<br>
&nbsp;&nbsp;&nbsp;PU L#51 (P#51)
<br>
&nbsp;&nbsp;&nbsp;PU L#52 (P#52)
<br>
&nbsp;&nbsp;&nbsp;PU L#53 (P#53)
<br>
&nbsp;&nbsp;&nbsp;PU L#54 (P#54)
<br>
&nbsp;&nbsp;&nbsp;PU L#55 (P#55)
<br>
&nbsp;&nbsp;&nbsp;PU L#56 (P#56)
<br>
&nbsp;&nbsp;&nbsp;PU L#57 (P#57)
<br>
&nbsp;&nbsp;&nbsp;PU L#58 (P#58)
<br>
&nbsp;&nbsp;&nbsp;PU L#59 (P#59)
<br>
&nbsp;&nbsp;&nbsp;PU L#60 (P#60)
<br>
&nbsp;&nbsp;&nbsp;PU L#61 (P#61)
<br>
&nbsp;&nbsp;&nbsp;PU L#62 (P#62)
<br>
&nbsp;&nbsp;&nbsp;PU L#63 (P#63)
<br>
depth 0:        1 Machine (type #1)
<br>
&nbsp;&nbsp;depth 1:       64 PU (type #6)
<br>
<p><p>cheers,
<br>
Chris
<br>
<pre>
-- 
  Christopher Samuel        Senior Systems Administrator
  VLSCI - Victorian Life Sciences Computation Initiative
  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
  <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0859.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Previous message:</strong> <a href="0857.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>In reply to:</strong> <a href="0856.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
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
