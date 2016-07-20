<?
$subject_val = "Re: [hwloc-users] Problems on SMP with 48 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 08:55:55 2012" -->
<!-- isoreceived="20120315125555" -->
<!-- sent="Thu, 15 Mar 2012 13:55:50 +0100" -->
<!-- isosent="20120315125550" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problems on SMP with 48 cores" -->
<!-- id="20120315125550.GF4749_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2032172090.94259.1331811307543.JavaMail.root_at_zmbs5.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-15 08:55:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0605.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0603.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe in reply to:</strong> <a href="0573.php">Hartmut Kaiser: "[hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0605.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hartmut Kaiser, le Thu 15 Mar 2012 12:35:07 +0100, a &#233;crit :
<br>
<span class="quotelev3">&gt; &gt; &gt; Is the 32bit-on-64bit build fixed too?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That does not work (see attached), but this could be a Windows problem - see
</span><br>
<span class="quotelev1">&gt; here:
</span><br>
<span class="quotelev1">&gt; <a href="http://msdn.microsoft.com/en-us/library/windows/desktop/dd405488(v=vs.85">http://msdn.microsoft.com/en-us/library/windows/desktop/dd405488(v=vs.85</a>).as
</span><br>
<span class="quotelev1">&gt; px, there is lengthy remarks section.
</span><br>
<p>Urgl. That's what I was afraid of. hwloc should however still take a
<br>
sensible behavior in such case, such as ignoring the processors whose
<br>
location is thus indetermined.
<br>
<p><span class="quotelev2">&gt; &gt; It'd also be good to test 32-on-32, where there would be two groups,
</span><br>
<span class="quotelev2">&gt; &gt; because binding on groups has not been implemented at all due to lacking
</span><br>
<span class="quotelev2">&gt; &gt; access to a machine with several groups.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, I'm not able to do this test. 32bit on WOW64 should give you the same
</span><br>
<span class="quotelev1">&gt; results as 'native' 32 bits, though.
</span><br>
<p>Well, I don't think so. AIUI, on 32bit systems, groups are restricted to
<br>
at most 32 processors, and thus in the case of your system, there would
<br>
be two groups.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0605.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0603.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe in reply to:</strong> <a href="0573.php">Hartmut Kaiser: "[hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0605.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
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
