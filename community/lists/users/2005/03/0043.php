<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Mar 26 06:47:44 2005" -->
<!-- isoreceived="20050326114744" -->
<!-- sent="Sat, 26 Mar 2005 06:47:41 -0500" -->
<!-- isosent="20050326114741" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI" -->
<!-- id="5b7d13b355dc65349c7a683439e64e01_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050325232628.GA3781_at_greglaptop.internal.keyresearch.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-03-26 06:47:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0044.php">Greg Lindahl: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0042.php">Jonathan Day: "[O-MPI users] ABI or API?"</a>
<li><strong>In reply to:</strong> <a href="0037.php">Greg Lindahl: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0044.php">Greg Lindahl: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0044.php">Greg Lindahl: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 25, 2005, at 6:26 PM, Greg Lindahl wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Making even 2 MPI implementations agree on an ABI is an enormous 
</span><br>
<span class="quotelev2">&gt;&gt; amount
</span><br>
<span class="quotelev2">&gt;&gt; of work.  Given that two major MPI implementations take opposite sides
</span><br>
<span class="quotelev2">&gt;&gt; on the pointers-vs.integers for MPI handles debate (and I suspect that
</span><br>
<span class="quotelev2">&gt;&gt; neither is willing to change), just getting them to agree on one of
</span><br>
<span class="quotelev2">&gt;&gt; them will be a major amount of work.  Then changing the internals of
</span><br>
<span class="quotelev2">&gt;&gt; one of those MPIs to match the other is another enormous amount of 
</span><br>
<span class="quotelev2">&gt;&gt; work
</span><br>
<span class="quotelev2">&gt;&gt; (death by a million cuts).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You yourself said how MPI implementers would actually implement this
</span><br>
<span class="quotelev1">&gt; without needing to change any internals: Make the C interface routines
</span><br>
<span class="quotelev1">&gt; do the same thing that F77 does today. Elapsed time: a few months,
</span><br>
<span class="quotelev1">&gt; same as MorphMPI. No internals need to be changed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suppose the good news is that if this is your main objection,
</span><br>
<span class="quotelev1">&gt; then it's gone.
</span><br>
<p>Er... no.
<br>
<p>Interesting: it seems that you are assuming that mpi.h should use 
<br>
integers for MPI handles.
<br>
<p>Regardless of which way you choose, your statement &quot;No internals have 
<br>
to change&quot; is inaccurate.   At a minimum, *EVERY* MPI API function in 
<br>
somebody's implementation will have to change.  I'm not splitting hairs 
<br>
on what &quot;internals&quot; means; what I'm saying is that code in the MPI 
<br>
implementations [who have chosen &quot;wrong&quot;] have to change.  It doesn't 
<br>
matter whether it's code in the API calls or down in the progress 
<br>
engine;  a lot of code has to change.  And potentially a bunch of other 
<br>
infrastructure has to be changed to match (depending on how the MPI 
<br>
works).
<br>
<p>And let's not forget that this issue is actually one of the essential 
<br>
elements of the pointers-vs-integers debate.  Some MPI implementations 
<br>
(both of mine included) have very good reasons for not having the C API 
<br>
calls do the same thing as the Fortran API calls.  But that's a 
<br>
different conversation (one that I unfortunately do not have time to 
<br>
have via e-mail).
<br>
<p><span class="quotelev2">&gt;&gt; Also, as I pointed out in my original alternate proposal, with
</span><br>
<span class="quotelev2">&gt;&gt; PatrickMPI, only those who want to use an ABI will use it.  Those who
</span><br>
<span class="quotelev2">&gt;&gt; do *not* want an ABI do not have to have it forced upon them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I missed where anyone was being forced to do anything. MPI
</span><br>
<span class="quotelev1">&gt; implementers can support the ABI alongside their current interface or
</span><br>
<span class="quotelev1">&gt; not, it's their choice.
</span><br>
<p>Er... no.
<br>
<p>Well, let's think about this for a minute.  For an MPI implementation 
<br>
to support two interfaces, it will need 2 mpi.h's, 2 sets of MPI API 
<br>
functions, and 2 corresponding sets of infrastructure to match.  I have 
<br>
difficulty seeing MPI implementors wanting to support this -- the 
<br>
software engineering issues alone are tremendously unattractive (e.g., 
<br>
the testing scenarios have -- at least -- doubled).
<br>
<p>It'll also lead to user confusion.  &quot;Oh, yes, our product supports ABC 
<br>
MPI.&quot; / &quot;But I'm using ABC MPI, and it doesn't work.&quot; / &quot;Oh, you need 
<br>
to use the MPI ABI of ABC MPI...&quot;  To have a single MPI implementation 
<br>
support multiple instances of its API, it [at least effectively] needs 
<br>
to be installed twice.  Users therefore have to choose which to 
<br>
compile/link against, etc.  So from the user's perspective, MPI ABC API 
<br>
is effectively Yet Another MPI (as compared to MPI ABC non-ABI).
<br>
<p>In short: if an MPI implementation wants to support an MPI ABI, I have 
<br>
difficulty believing that it will be anything other than its 
<br>
one-and-only main interface.  So, sure, I guess an MPI implementation 
<br>
isn't *forced* to only support an MPI ABI, it's just *strongly 
<br>
recommended*.  ;-)
<br>
<p>-----
<br>
<p>I guess I don't understand your reluctance to accept a MorphMPI-like 
<br>
solution:
<br>
<p>- it will work
<br>
- it will take far less time to implement
<br>
- it does not require a committee (there's no need to standardize its 
<br>
mpi.h)
<br>
- no MPI implementors have to agree on anything
<br>
- no existing MPI implementations need to change
<br>
- no software engineering issues or practices for existing MPI 
<br>
implementations need to change
<br>
- people who want it will use it (and those who don't, won't)
<br>
<p>Are you trying to jump start MPI-3?
<br>
<p>-----
<br>
<p>Sidenote: I'll try to keep up with this conversation, but I can't 
<br>
promise anything -- it's reaching a frequency that is difficult for me 
<br>
to match.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0044.php">Greg Lindahl: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0042.php">Jonathan Day: "[O-MPI users] ABI or API?"</a>
<li><strong>In reply to:</strong> <a href="0037.php">Greg Lindahl: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0044.php">Greg Lindahl: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0044.php">Greg Lindahl: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
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
