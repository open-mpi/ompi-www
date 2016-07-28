<?
$subject_val = "Re: [OMPI users] &quot;-library=stlport4&quot; neccessary for Sun C";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  6 06:01:59 2012" -->
<!-- isoreceived="20120606100159" -->
<!-- sent="Wed, 06 Jun 2012 06:01:59 -0400" -->
<!-- isosent="20120606100159" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;-library=stlport4&amp;quot; neccessary for Sun C" -->
<!-- id="4FCF2A97.5080905_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201206060838.q568cLUj021546_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;-library=stlport4&quot; neccessary for Sun C<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-06 06:01:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19458.php">Ziaul Haque Olive: "[OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
<li><strong>Previous message:</strong> <a href="19456.php">Siegmar Gross: "[OMPI users] &quot;-library=stlport4&quot; neccessary for Sun C"</a>
<li><strong>In reply to:</strong> <a href="19456.php">Siegmar Gross: "[OMPI users] &quot;-library=stlport4&quot; neccessary for Sun C"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/6/2012 4:38 AM, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled &quot;openmpi-1.6&quot; on &quot;Solaris 10 sparc&quot;, &quot;Solaris 10 x86&quot;,
</span><br>
<span class="quotelev1">&gt; and Linux (openSuSE 12.1) with &quot;Sun C 5.12&quot;. Today I searched my
</span><br>
<span class="quotelev1">&gt; log-files for &quot;WARNING&quot; and found the following message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING: **************************************************************
</span><br>
<span class="quotelev1">&gt; WARNING: *** VampirTrace cannot be built due to your STL appears to
</span><br>
<span class="quotelev1">&gt; WARNING: *** be broken.
</span><br>
<span class="quotelev1">&gt; WARNING: *** Please try again re-configuring Open MPI with using
</span><br>
<span class="quotelev1">&gt; WARNING: *** the STLport4 by adding the compiler flag -library=stlport4
</span><br>
<span class="quotelev1">&gt; WARNING: *** to CXXFLAGS.
</span><br>
<span class="quotelev1">&gt; WARNING: *** Pausing to give you time to read this message...
</span><br>
<span class="quotelev1">&gt; WARNING: **************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With this recommendation I could configure and build VampirTrace
</span><br>
<span class="quotelev1">&gt; support. Perhaps somebody can add this option as default to
</span><br>
<span class="quotelev1">&gt; &quot;configure&quot; for &quot;Sun C 5.12&quot; on Solaris and Linux.
</span><br>
STLport4 should *not* be the default in cases that VT is not built for 
<br>
OMPI with Oracle compilers.  I imagine that the configure code can be 
<br>
bent to detect that VT is going to be built and default to STLport4 but 
<br>
I vaguely recollect this is easier said than done.
<br>
<p>I'll open a ticket on this issue but I am not going to promise this will 
<br>
be addressed anytime soon unless someone else decides to take a crack at 
<br>
this issue.
<br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19457/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19458.php">Ziaul Haque Olive: "[OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
<li><strong>Previous message:</strong> <a href="19456.php">Siegmar Gross: "[OMPI users] &quot;-library=stlport4&quot; neccessary for Sun C"</a>
<li><strong>In reply to:</strong> <a href="19456.php">Siegmar Gross: "[OMPI users] &quot;-library=stlport4&quot; neccessary for Sun C"</a>
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
