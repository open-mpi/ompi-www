<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 09:08:52 2007" -->
<!-- isoreceived="20070710130852" -->
<!-- sent="Tue, 10 Jul 2007 07:08:45 -0600" -->
<!-- isosent="20070710130845" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-environment builds" -->
<!-- id="C2B8E0FD.9D98%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0707101354020.1196_at_kenzo.iwr.uni-heidelberg.de" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 09:08:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1829.php">Tim Prins: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1827.php">Bogdan Costescu: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1827.php">Bogdan Costescu: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1838.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1838.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, I was talking specifically about configuration at build time. I
<br>
realize there are trade-offs here, and suspect we can find a common ground.
<br>
The problem with using the options Jeff described is that they require
<br>
knowledge on the part of the builder as to what environments have had their
<br>
include files/libraries installed on the file system of this particular
<br>
machine. And unfortunately, not every component is protected by these
<br>
&quot;sentinel&quot; variables, nor does it appear possible to do so in a &quot;guaranteed
<br>
safe&quot; manner.
<br>
<p>Note that I didn't say &quot;installed on their machine&quot;. In most cases, these
<br>
alternative environments are not currently installed at all - they are stale
<br>
files, or were placed on the file system by someone that wanted to look at
<br>
their documentation, or whatever. The problem is that Open MPI blindly picks
<br>
them up and attempts to use them, with sometimes disastrous and frequently
<br>
unpredictable ways.
<br>
<p>Hence, the user can be &quot;astonished&quot; to find that an application that worked
<br>
perfectly yesterday suddenly segfaults today - because someone decided one
<br>
day, for example, to un-tar the bproc files in a public place where we pick
<br>
them up, and then someone else (perhaps a sys admin or the user themselves)
<br>
at some later time rebuilt Open MPI to bring in an update.
<br>
<p>Now imagine being a software provider who gets the call about a problem with
<br>
Open MPI and has to figure out what the heck happened....
<br>
<p>My suggested solution may not be the best, which is why I put it out there
<br>
for discussion. One alternative might be for us to instruct sys admins to
<br>
put MCA params in their default param file that force selection of the
<br>
proper components for each framework. Thus, someone with an lsf system would
<br>
enter:  pls=lsf ras=lsf sds=lsf in their config file to ensure that only lsf
<br>
was used.
<br>
<p>The negative to that approach is that we would have to warn everyone any
<br>
time that list changed (e.g., a new component for a new framework). Another
<br>
option to help that problem, of course, would be to set one mca param (say
<br>
something like &quot;enviro=lsf&quot;) that we would use internal to Open MPI to set
<br>
the individual components correctly - i.e., we would hold the list of
<br>
relevant frameworks internally since (hopefully) we know what they should be
<br>
for a given environment.
<br>
<p>Anyway, I'm glad people are looking at this and suggesting solutions. It is
<br>
a problem that seems to be biting us recently and may become a bigger issue
<br>
as the user community grows.
<br>
<p>Ralph
<br>
<p><p>On 7/10/07 6:12 AM, &quot;Bogdan Costescu&quot;
<br>
&lt;Bogdan.Costescu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 10 Jul 2007, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do either of these work for you?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will report back in a bit, I'm now in the middle of an OS upgrade on
</span><br>
<span class="quotelev1">&gt; the cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But my question was more like: is this a configuration that should
</span><br>
<span class="quotelev1">&gt; theoretically work ? Or in other words, are there known dependencies
</span><br>
<span class="quotelev1">&gt; on rsh that would make a rsh-less build not work or work with reduced
</span><br>
<span class="quotelev1">&gt; functionality ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Most batch systems today set a sentinel environment variable that we
</span><br>
<span class="quotelev2">&gt;&gt; check for.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that we talk about slightly different things - my impression
</span><br>
<span class="quotelev1">&gt; was that the OP was asking about detection at config time, while your
</span><br>
<span class="quotelev1">&gt; statements make perfect sense to me if they are relative to detection
</span><br>
<span class="quotelev1">&gt; at run-time. If the OP was indeed asking about run-time detection,
</span><br>
<span class="quotelev1">&gt; then I apologize for the time you wasted on reading and replying to my
</span><br>
<span class="quotelev1">&gt; questions...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's what the compile-time vs. run-time detection and selection is
</span><br>
<span class="quotelev2">&gt;&gt; supposed to be for.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I understand that, it's the same type of mechanism as in LAM/MPI
</span><br>
<span class="quotelev1">&gt; which it's not that foreign to me ;-)
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1829.php">Tim Prins: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1827.php">Bogdan Costescu: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1827.php">Bogdan Costescu: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1838.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1838.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
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
