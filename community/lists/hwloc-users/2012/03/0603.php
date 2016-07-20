<?
$subject_val = "Re: [hwloc-users] Problems on SMP with 48 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 07:33:41 2012" -->
<!-- isoreceived="20120315113341" -->
<!-- sent="Thu, 15 Mar 2012 06:33:31 -0500" -->
<!-- isosent="20120315113331" -->
<!-- name="Hartmut Kaiser" -->
<!-- email="hartmut.kaiser_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problems on SMP with 48 cores" -->
<!-- id="00cf01cd029f$746cb7b0$5d462710$_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120315065957.GA4749_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Problems on SMP with 48 cores<br>
<strong>From:</strong> Hartmut Kaiser (<em>hartmut.kaiser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-15 07:33:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0604.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0602.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0602.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0604.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Samuel Thibault, le Thu 15 Mar 2012 07:42:40 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Brice Goglin, le Wed 14 Mar 2012 22:32:07 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; We debugged this in private emails with Hartmut. His 48-core
</span><br>
<span class="quotelev3">&gt; &gt; &gt; platform is now detected properly. Everything got fixed with a patch
</span><br>
<span class="quotelev3">&gt; &gt; &gt; functionnally-identical to what Samuel sent earlier.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is the 32bit-on-64bit build fixed too?
</span><br>
<p>That does not work (see attached), but this could be a Windows problem - see
<br>
here:
<br>
<a href="http://msdn.microsoft.com/en-us/library/windows/desktop/dd405488(v=vs.85">http://msdn.microsoft.com/en-us/library/windows/desktop/dd405488(v=vs.85</a>).as
<br>
px, there is lengthy remarks section.
<br>
<p><span class="quotelev1">&gt; It'd also be good to test 32-on-32, where there would be two groups,
</span><br>
<span class="quotelev1">&gt; because binding on groups has not been implemented at all due to lacking
</span><br>
<span class="quotelev1">&gt; access to a machine with several groups.
</span><br>
<p>Sorry, I'm not able to do this test. 32bit on WOW64 should give you the same
<br>
results as 'native' 32 bits, though.
<br>
<p>Regards Hartmut
<br>
---------------
<br>
<a href="http://boost-spirit.com">http://boost-spirit.com</a>
<br>
<a href="http://stellar.cct.lsu.edu">http://stellar.cct.lsu.edu</a>
<br>
<p><p><p><p>

<br><p>
<p><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0603/lstopo-smp-48core-winx86.txt">lstopo-smp-48core-winx86.txt</a>
</ul>
<!-- attachment="lstopo-smp-48core-winx86.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0603/lstopo-smp-48core-winx86-output.txt">lstopo-smp-48core-winx86-output.txt</a>
</ul>
<!-- attachment="lstopo-smp-48core-winx86-output.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0604.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0602.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0602.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0604.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
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
