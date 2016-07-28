<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 14:02:27 2009" -->
<!-- isoreceived="20090817180227" -->
<!-- sent="Mon, 17 Aug 2009 14:02:21 -0400" -->
<!-- isosent="20090817180221" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="7BE8B614-27FE-49E6-A8EC-F4C9EB8EC054_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Prayer.1.3.1.0908171711490.11182_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Heads up on new feature to 1.3.4<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 14:02:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6656.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6654.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6654.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6656.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6656.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6660.php">Patrick Geoffray: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 17, 2009, at 12:11 PM, N.M. Maclaren wrote:
<br>
<p><span class="quotelev1">&gt;     1) To have a mandatory configuration option setting the default,  
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev1">&gt; would have a name like 'performance' for the binding option.  YOU  
</span><br>
<span class="quotelev1">&gt; could then
</span><br>
<span class="quotelev1">&gt; beat up anyone who benchmarkets without it for being biassed.  This  
</span><br>
<span class="quotelev1">&gt; is a
</span><br>
<span class="quotelev1">&gt; better solution, but the &quot;I shouldn't need to have to think just  
</span><br>
<span class="quotelev1">&gt; because I
</span><br>
<span class="quotelev1">&gt; am doing something complicated&quot; brigade would object.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, BUT...  We had a similar option to this for a long, long time.   
<br>
Marketing departments from other organizations / companies willfully  
<br>
ignored it whenever presenting competitive data.  The 1,000,000th time  
<br>
I saw this, I gave up arguing that our competitors were not being fair  
<br>
and simply changed our defaults to always leave memory pinned for  
<br>
OpenFabrics-based networks.
<br>
<p>To be clear: the option was &quot;--mca mpi_leave_pinned 1&quot; -- granted, the  
<br>
name wasn't as obvious as &quot;--performance&quot;, but this option was widely  
<br>
publicized and easy to know that you should do for benchmarks (with a  
<br>
name like --performance, the natural question will be &quot;why don't you  
<br>
enable [--]performance by default?  This means that OMPI has --no- 
<br>
performance by default...?&quot;).  I would tell person/marketer X at a  
<br>
conference, &quot;Hey, you didn't run with leave_pinned; our numbers are  
<br>
much better than that.&quot;  &quot;Oh, sorry&quot; they would inevitably say; &quot;I'll  
<br>
fix it next time I make new slides.&quot;
<br>
<p>There are several problems that arise from this scenario:
<br>
<p>1. The competitors aren't interested in being fair.  Spin is  
<br>
everything.  HPC is highly competitive.
<br>
<p>2. Even if you tag someone in public for not being fair, they always  
<br>
say the same thing, &quot;Oh sorry, my mistake&quot; (regardless of whether they  
<br>
actually forgot or did it intentionally).  I told several competitors  
<br>
*many times* that they had to use leave_pinned, but in all public  
<br>
comparison numbers, they never did.  Hence, they always looked better.
<br>
<p>(/me takes a moment to calm down after venturing down memory lane of  
<br>
all the unfair comparisons made against OMPI... :-) )
<br>
<p>3. To some degree, &quot;out of the box performance&quot; *is* a compelling  
<br>
reason.  Sure, I would hope that marketers and competitors to be  
<br>
ethical (they aren't, but you can hope anyway), but the naive / new  
<br>
user shouldn't need to know a million switches to get good performance.
<br>
<p>Having good / simple switches to optimize for different workloads is a  
<br>
good thing (e.g., Platform MPI has some nice options for this kind of  
<br>
stuff).  But the bottom line is that you can't rely on someone running  
<br>
anything other &quot;mpirun -np x my_favorite_benchmark&quot;.
<br>
<p>-----
<br>
<p>Also, as an aside to many of the other posts, yes, this is a complex  
<br>
issue.  But:
<br>
<p>- We're only talking about defaults, not absolute behavior.  If you  
<br>
want or need to disable/change this behavior, you certainly can.
<br>
<p>- It's been stated a few times, but I feel that this is important:  
<br>
most other MPI's bind by default.  They're deriving performance  
<br>
benefits from this.  We're not.  Open MPI has to be competitive (or my  
<br>
management will ask me, &quot;Why are you working on that crappy MPI?&quot;).
<br>
<p>- The Linux scheduler does no/cannot optimize well for many HPC apps;  
<br>
binding definitely helps in many scenarios (not just benchmarks).
<br>
<p>- Of course you can construct scenarios where things break / perform  
<br>
badly.  Particularly if you do Wrong Things.  If you do Wrong Things,  
<br>
you should be punished (e.g., via bad performance).  It's not the  
<br>
software's fault if you choose to bind 10 threads to 1 core.  It's not  
<br>
the software's fault if you're on a large SMP and you choose to  
<br>
dedicate all of the processors to HPC apps and don't leave any for the  
<br>
OS (particularly if you have a lot of OS activity).  And so on.  Of  
<br>
course, we should do a good job of trying to do reasonable things by  
<br>
default (e.g., not binding 10 threads to one core by default), and we  
<br>
should provide options (sometimes automatic) for disabling those  
<br>
reasonable things if we can't do them well.  But sometimes we *do*  
<br>
have to rely on the user telling us things.
<br>
<p>- I took Ralph's previous remarks as a general statement about  
<br>
threading being problematic to any form of binding.  I talked to him  
<br>
on the phone -- he actually had a specific case in mind (what I would  
<br>
consider Wrong Behavior: binding N threads to 1 core).
<br>
<p>-----
<br>
<p>Ralph and I chatted earlier; I would be ok to wait for the other 2  
<br>
pieces of functionality to come in before we make binding occur by  
<br>
default:
<br>
<p>1. coordinate between multiple OMPI jobs on the same node to ensure  
<br>
not to bind to the same cores (or at least print a warning)
<br>
<p>2. follow the binding directives of resource managers (SLURM, Torque,  
<br>
etc.)
<br>
<p>Sun is free to make binding-by-default in the ClusterTools  
<br>
distribution if/whenever they want, of course.  I fully understand  
<br>
their reasoning for doing so.  They're also in a better position to  
<br>
coach their users when to use which options, etc. because they have  
<br>
direct contact with their users (vs. the community Open MPI, where  
<br>
hundreds of people download Open MPI a day and we never hear from  
<br>
them).  I *believe* that this option is also ok with Sun (I'm pretty  
<br>
sure Terry told me this last week), but I don't want to speak for them.
<br>
<p>My $0.02.
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
<li><strong>Next message:</strong> <a href="6656.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6654.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6654.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6656.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6656.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6660.php">Patrick Geoffray: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
