<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 16 09:30:06 2005" -->
<!-- isoreceived="20050616143006" -->
<!-- sent="Thu, 16 Jun 2005 10:30:00 -0400" -->
<!-- isosent="20050616143000" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Questions on status" -->
<!-- id="3ff9c86ca09f5a31e4d478ccd5f0de5b_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050616013434.151.qmail_at_web31511.mail.mud.yahoo.com" -->
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
<strong>Date:</strong> 2005-06-16 09:30:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0081.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<li><strong>Previous message:</strong> <a href="0079.php">Larry Stewart: "Re: [O-MPI users] Questions on status"</a>
<li><strong>In reply to:</strong> <a href="0077.php">Jonathan Day: "Re: [O-MPI users] Questions on status"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 15, 2005, at 9:34 PM, Jonathan Day wrote:
<br>
<p><span class="quotelev1">&gt; Phew! I'd no idea my questions would create nearly
</span><br>
<span class="quotelev1">&gt; that kind of level of response on the list. I should
</span><br>
<span class="quotelev1">&gt; post more often! :)
</span><br>
<p>Please do.  :-)
<br>
<p>In all honesty, no one likes getting negative feedback, but hey, if 
<br>
it's on the mark, then it's good feedback -- regardless of whether you 
<br>
like it or not.
<br>
<p><span class="quotelev1">&gt; Anyways, here are a few suggestions that might - just
</span><br>
<span class="quotelev1">&gt; might - work around some of the problems that have
</span><br>
<span class="quotelev1">&gt; been mentioned:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Publish the stable header files early, or fragments
</span><br>
<span class="quotelev1">&gt; thereof
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; People don't need the finished code to start
</span><br>
<span class="quotelev1">&gt; developing against your API, all they really need is a
</span><br>
<span class="quotelev1">&gt; list of prototypes. After all, we were all taught to
</span><br>
<span class="quotelev1">&gt; design first and then implement, right? :)
</span><br>
<span class="quotelev1">&gt; [snipped]
</span><br>
<p>We actually considered doing this.  However, we eventually decided 
<br>
against it for the following reasons:
<br>
<p>1. We actually did design first (yay software engineering!) -- 
<br>
top-level interface header files were written first (even including 
<br>
doxygen comments!) and then implementations were written from that.  
<br>
However, as time went on, those interfaces changed (sometimes wildly, 
<br>
unfortunately) as we realized that we got things wrong in our initial 
<br>
design.  The run-time system is the best example of that -- it took us 
<br>
a *long* time to figure out exactly what we wanted from OMPI's run-time 
<br>
system, and as such, we effectively threw away the first few designs.
<br>
<p>The point is that even the best designs change over time.  That would 
<br>
have been horrible -- to give a design to 3rd parties, and then have 
<br>
them find out that it had been changed (and/or scrapped/restarted) a 
<br>
few months later.  This was one of the major rationale behind our 
<br>
desire to &quot;reach a level of stability&quot; before releasing to the 
<br>
community -- that there would be at least some expected level 
<br>
un-changing-ness in our interfaces (I'm sure they won't be locked in 
<br>
stone when we release, but we at least want to be fairly confident that 
<br>
they're &quot;good enough&quot; and won't have major design changes down the 
<br>
road).
<br>
<p>2. With an entirely new design, expecting a 3rd party to write solely 
<br>
to a design is a difficult (at best) endeavor.  Even with full, precise 
<br>
documentation, there's always the issue of interpretation -- one 
<br>
developer may mean X but someone else reads it as Y.  These types of 
<br>
things only tend to only show up once you have software that you can 
<br>
actually compile and test against.
<br>
<p>Hence, we really wanted to provide software along with the design that 
<br>
could be used for development and testing.
<br>
<p><span class="quotelev1">&gt; 2. Parallel Trees
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I am thinking of here is something akin to Andrew
</span><br>
<span class="quotelev1">&gt; Morton's or Alan Cox' patch series for Linux. You have
</span><br>
<span class="quotelev1">&gt; the &quot;official&quot; Open-MPI, and then you have something
</span><br>
<span class="quotelev1">&gt; that contains all kinds of bits and bobs that aren't
</span><br>
<span class="quotelev1">&gt; stable, aren't validated, and may never be included in
</span><br>
<span class="quotelev1">&gt; the official release, but which would still be of
</span><br>
<span class="quotelev1">&gt; interest to researchers.
</span><br>
<p>Actually, we have in mind something very much like this.  Let me 
<br>
explain a little background first.
<br>
<p>The majority of Open MPI is implemented via components.  So a *lot* of 
<br>
Open MPI's implementation is selectable at run-time, meaning that you 
<br>
can swap in/out different parts (including research-quality parts) at 
<br>
will.  The components are [usually] dynamic shared objects (DSOs), so 
<br>
you can add/subtract .so's or DLLs after Open MPI has been installed.
<br>
<p>I've cited several of Open MPI's goals in posts to this list over the 
<br>
past 24 hours -- another of our goals is to provide a stable platform 
<br>
for parallel / message passing research.  Do you want to have an MPI 
<br>
over a new message passing network architecture?  Simply write a new 
<br>
component.  Do you want to try out some new whiz-bang collective 
<br>
algorithms?  Write a new component.  ...and so on -- we currently have 
<br>
over 20 component types in Open MPI, roughly divided between MPI and 
<br>
the back-end run-time system.
<br>
<p>This allows 3rd parties to explore the areas that they care about 
<br>
without worrying about most of the other junk that you have to have for 
<br>
a full MPI implementation.  For example, I have seen collective 
<br>
algorithm researchers write *an entire MPI implementation* just so that 
<br>
they could play around with new algorithms.
<br>
<p>That may be somewhat of an extreme example, but I think there should 
<br>
never be a need for anything remotely like that.  A proper framework 
<br>
for an MPI implementation should enable 3rd parties to add / extend / 
<br>
modify an existing MPI without nearly that much work.
<br>
<p>So -- the point here is that the majority of Open MPI's functionality 
<br>
is delivered through components.  And you can substitute / add your own 
<br>
functionality by writing your own components.  In short: it's all about 
<br>
components.
<br>
<p>But, as I stated yesterday, it's all about the HPC community.  And some 
<br>
of us are academics, and we know that in academia, it's all about 
<br>
getting the credit for the stuff that you have done.  How can we get 
<br>
the community involved, yet still give credit (and blame ;-) ) to those 
<br>
who deserve it?
<br>
<p>There's actually already a community that has a very similar model -- 
<br>
Perl.  The CPAN system is great for downloading newer versions of 
<br>
components and/or esoteric components for lesser-known functionality.  
<br>
The authors of each component are clearly denoted, so it's quite clear 
<br>
who gets the credit/blame.
<br>
<p>We plan to host a CPAN-like central repository (or, more to the point, 
<br>
the root of a distributed repository) that allows people to post 
<br>
notices of their components and/or download others components.  
<br>
Ramifications of this:
<br>
<p>1. if you write some cool Open MPI components, they do *not* need to be 
<br>
shipped with Open MPI.  We really hope to prevent the project-forking 
<br>
problem that has become quite a problem for MPI implementations.
<br>
<p>2. if you provide some cool Open MPI components, you can distribute 
<br>
them separately from Open MPI, since they can be installed after the 
<br>
fact.   For example, you can put the components on your own web site 
<br>
and register them with the central repository, thereby making them 
<br>
available for download via a simple CPAN-like tool.  **This even 
<br>
applies to vendors.**
<br>
<p>3. components can be distributed in source or binary form (read: as 
<br>
open or closed source).  We're open source [I know, I know], but we 
<br>
recognize that not everyone else is.
<br>
<p>4. components can be installed globally or locally (i.e., in the 
<br>
central Open MPI installation tree or elsewhere, such as under an 
<br>
individual user's $HOME), allowing development work to not interfere 
<br>
with production runs.
<br>
<p>Back to the repository model...
<br>
<p>This all sounds like a Grand Master Plan (and it is!), but it's far 
<br>
less work to implement than you would think.  Other projects have done 
<br>
similar things with command line / menu-driven tools implemented in 
<br>
only a few hundred lines of perl.  So although we haven't implemented 
<br>
this yet, we're quite confident that it won't be difficult.  The most 
<br>
difficult part will be making pretty web pages to reflect this stuff 
<br>
(we're engineers, meaning that we're horrid web designers).
<br>
<p>All this being said, there are currently some limitations to Open MPI's 
<br>
component scheme (e.g., there's only one set of MPI bindings -- they're 
<br>
not component-ized, so to speak).  We do plan on relaxing them over 
<br>
time to make Open MPI be a framework of frameworks; i.e., making Open 
<br>
MPI even more pluggable than it already is.  However, until that time, 
<br>
if you have changes to the non-component parts of Open MPI, we'll be 
<br>
accepting contributions and patches the old-fashioned way.
<br>
<p>Someday, in the hopefully-not-distant-future, we'll have 3rd party 
<br>
contribution forms like the Apache foundation which will facilitate 
<br>
this mechanism for those who want to be actively involved.  But as I 
<br>
mentioned yesterday, this is unfortunately taking far longer to setup 
<br>
than we anticipated.
<br>
<p><span class="quotelev1">&gt; 3. Own Your Code
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is hard to prove ownership, in a digital age, but
</span><br>
<span class="quotelev1">&gt; not completely impossible. For each function, you want
</span><br>
<span class="quotelev1">&gt; to generate a SHA-1 hash of the source and of the
</span><br>
<span class="quotelev1">&gt; binary (using default compiler options). You then do
</span><br>
<span class="quotelev1">&gt; likewise for each source file and object file and then
</span><br>
<span class="quotelev1">&gt; for each compiled program and library.
</span><br>
<p>Not a bad idea -- thanks!
<br>
<p>On a related note, the license on Open MPI will essentially be the BSD 
<br>
license.  We added one paragraph, but the spirit is the same -- you can 
<br>
do whatever you want with the code as long as you preserve our 
<br>
copyrights (academics read: we still get credit).
<br>
<p>This is designed to be vendor-friendly, and even 3rd-party-researcher 
<br>
friendly.  So we don't care if you copy the code, just as long as you 
<br>
properly cite us (I am not a lawyer and this is not legal advice -- if 
<br>
you have questions, please read our LICENSE file and/or discuss it with 
<br>
a lawyer).
<br>
<p>I've attached our current LICENSE file for reference.  It may change 
<br>
slightly in the future to simplify the licensing because there are 
<br>
several different copyright holders.
<br>
<p>Hope this helps clarify even more issues!  :-)
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>

</pre>
<p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="../../att-0080/LICENSE">LICENSE</a>
</ul>
<!-- attachment="LICENSE" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0081.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<li><strong>Previous message:</strong> <a href="0079.php">Larry Stewart: "Re: [O-MPI users] Questions on status"</a>
<li><strong>In reply to:</strong> <a href="0077.php">Jonathan Day: "Re: [O-MPI users] Questions on status"</a>
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
