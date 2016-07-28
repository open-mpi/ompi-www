<?
$subject_val = "Re: [OMPI users] Shared Memory Performance Problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 27 09:38:05 2011" -->
<!-- isoreceived="20110327133805" -->
<!-- sent="Sun, 27 Mar 2011 06:37:53 -0700" -->
<!-- isosent="20110327133753" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory Performance Problem." -->
<!-- id="4D8F3DB1.3080201_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimzDW1XOOd8b_t_hP-98shiQGX6PNddweKaXdkZ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared Memory Performance Problem.<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-27 09:37:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16015.php">Ralph Castain: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Previous message:</strong> <a href="16013.php">Michele Marena: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>In reply to:</strong> <a href="16012.php">Michele Marena: "[OMPI users] Shared Memory Performance Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16015.php">Ralph Castain: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Reply:</strong> <a href="16015.php">Ralph Castain: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/27/2011 2:26 AM, Michele Marena wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; My application performs good without shared memory utilization, but with
</span><br>
<span class="quotelev1">&gt; shared memory I get performance worst than without of it.
</span><br>
<span class="quotelev1">&gt; Do I make a mistake? Don't I pay attention to something?
</span><br>
<span class="quotelev1">&gt; I know OpenMPI uses /tmp directory to allocate shared memory and it is
</span><br>
<span class="quotelev1">&gt; in the local filesystem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I guess you mean shared memory message passing.   Among relevant 
<br>
parameters may be the message size where your implementation switches 
<br>
from cached copy to non-temporal (if you are on a platform where that 
<br>
terminology is used).  If built with Intel compilers, for example, the 
<br>
copy may be performed by intel_fast_memcpy, with a default setting which 
<br>
uses non-temporal when the message exceeds about some preset size, e.g. 
<br>
50% of smallest L2 cache for that architecture.
<br>
A quick search for past posts seems to indicate that OpenMPI doesn't 
<br>
itself invoke non-temporal, but there appear to be several useful 
<br>
articles not connected with OpenMPI.
<br>
In case guesses aren't sufficient, it's often necessary to profile 
<br>
(gprof, oprofile, Vtune, ....) to pin this down.
<br>
If shared message slows your application down, the question is whether 
<br>
this is due to excessive eviction of data from cache; not a simple 
<br>
question, as most recent CPUs have 3 levels of cache, and your 
<br>
application may require more or less data which was in use prior to the 
<br>
message receipt, and may use immediately only a small piece of a large 
<br>
message.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16015.php">Ralph Castain: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Previous message:</strong> <a href="16013.php">Michele Marena: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>In reply to:</strong> <a href="16012.php">Michele Marena: "[OMPI users] Shared Memory Performance Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16015.php">Ralph Castain: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Reply:</strong> <a href="16015.php">Ralph Castain: "Re: [OMPI users] Shared Memory Performance Problem."</a>
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
