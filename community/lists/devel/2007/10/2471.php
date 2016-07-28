<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct 20 08:58:45 2007" -->
<!-- isoreceived="20071020125845" -->
<!-- sent="Sat, 20 Oct 2007 14:58:38 +0200 (IST)" -->
<!-- isosent="20071020125838" -->
<!-- name="David Erukhimovich" -->
<!-- email="daviderukh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trying to get total procs num in odls framework" -->
<!-- id="Pine.LNX.4.64.0710201455580.723_at_pita.cs.huji.ac.il" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI devel] Trying to get total procs num in odls framework" -->
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
<strong>From:</strong> David Erukhimovich (<em>daviderukh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-20 08:58:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2472.php">David Erukhimovich: "[OMPI devel] Fwd: Trying to get total procs num in odls framework"</a>
<li><strong>Previous message:</strong> <a href="2470.php">Jennis Pruett: "[OMPI devel] [PMX:VIRUS] RE: issue with --without-tm in configure?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2441.php">David Erukhimovich: "[OMPI devel] Trying to get total procs num in odls framework"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
Thank you for your answer.
<br>
<p>First of all, my two questions wasn't connected and they belong to different
<br>
part of my project. and the subject of the mail should have been: Trying to
<br>
get total procs num in rds framework (sorry my mistake).
<br>
<p>Here the parts in the order of the last email
<br>
<p>1. I've solved the problem about getting total num of procs in rds (just
<br>
called  some function incorrectly), so sorry for disturbing you about that.
<br>
Now a bit more about what I'm trying to do, maybe there is a better way then
<br>
mine:
<br>
I have a tool (external application) that given a list of machines and a
<br>
number n , it chooses the n best ones from the list (least loaded  ones) and
<br>
if the list of machines isn't given, it just returns the n best machines
<br>
from the claster. I am wishing to include this in ompi. hence - given a
<br>
machinefile, It'll run the process only on the best nodes. If a machinefile
<br>
isn't given, it'll take the best node that my application returns.
<br>
I think the best place to implement it is in rds - after building the list
<br>
of newly discovered nodes: if it is empty, fill it using my tool, otherwise
<br>
filter it using my tool. It seems to me the most logical way to do it. Am I
<br>
right? I am asking you because I guess you have a better knowledge in ompi
<br>
architecture.
<br>
<p>2. The other thing I am trying to do is to make ompi to run every process,
<br>
not directly, but through external program. e.g: If I want to launch the
<br>
program &quot;hostname&quot;,  I want that following to be launched: &quot;&lt;my-program&gt;
<br>
&lt;my-program's-flags&gt; hostname&quot;.
<br>
I figured that the best way to do it is in odls framework because there I
<br>
have the exact executing point.
<br>
I am currently working on the checkpoint 1.2.3. I don't work on the trunk
<br>
because I need the patches to be added on some stable release. Is there a
<br>
1.2.* release where the bug is fixed. And if not - when can such fixed
<br>
version be stable
<br>
<p>Thank you
<br>
--Davis
<br>
<p>---------- Forwarded message ----------
<br>
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Date: Oct 17, 2007 11:22 PM
<br>
Subject: Re: [OMPI devel] Trying to get total procs num in odls framework
<br>
To: daviderukh_at_[hidden]
<br>
Cc: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
<p>Hi David
<br>
<p>I could probably answer your questions better if I had a better
<br>
understanding of what you are trying to do. For example, looking in the
<br>
hostfile rds for the number of procs to be launched seems strange as the
<br>
functional role of the framework is to simply learn what nodes are
<br>
available.
<br>
<p>It would also help to have some idea of what environment you are working in,
<br>
and how you configured the beast.
<br>
<p>Please see comments below.
<br>
Ralph
<br>
<p><p>On 10/17/07 2:47 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yo Ralph --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you answer these questions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: David Erukhimovich &lt;daviderukh_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: October 14, 2007 5:08:45 PM EDT
</span><br>
<span class="quotelev2">&gt;&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] Trying to get total procs num in odls framework
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; I have 2 questions:
</span><br>
<span class="quotelev2">&gt;&gt; 1. I am trying to get the total number of requested processes for
</span><br>
<span class="quotelev2">&gt;&gt; the job
</span><br>
<span class="quotelev2">&gt;&gt; in' hostfile' component in rds. I took the job object that was
</span><br>
<span class="quotelev2">&gt;&gt; given as a
</span><br>
<span class="quotelev2">&gt;&gt; parameter, extracted the application objects and checked how many
</span><br>
<span class="quotelev2">&gt;&gt; procs
</span><br>
<span class="quotelev2">&gt;&gt; each application has. The result in every run was 0. As I
</span><br>
<span class="quotelev2">&gt;&gt; understand, this
</span><br>
<span class="quotelev2">&gt;&gt; variable is updated before the rds part. So what am I doing wrong?
</span><br>
<p>Do you mean you took the jobid given to the hostfile RDS (which isn't an
<br>
object, but just a number) and did an orte_rmgr.get_app_context to get the
<br>
array of app_contexts? Is there some reason why you would want to do that
<br>
there?
<br>
<p>Depending upon what the command line looks like, it is possible for the
<br>
number of procs to be zero - we allow that option and then fill in the
<br>
number later. If it was specified, though, we do insert the number in the
<br>
app_context object.
<br>
<p>Maybe you could tell me what the command line looks like, the function call
<br>
you used to get the &quot;application objects&quot;, and what field you were looking
<br>
at when you found zero?
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. I've discovered an undocumented framework - odls.
</span><br>
<p>It wasn't exactly hidden...we haven't documented it because we are lazy and
<br>
the existing components cover every known environment (or so we thought).
<br>
;-)
<br>
<p>Is there some special reason to want to create another one?
<br>
<p><span class="quotelev2">&gt;&gt; I've created a
</span><br>
<span class="quotelev2">&gt;&gt; new
</span><br>
<span class="quotelev2">&gt;&gt; component for it. The problem is that there is no way to switch
</span><br>
<span class="quotelev2">&gt;&gt; between
</span><br>
<span class="quotelev2">&gt;&gt; the default component and mine (--mca odls &lt;my component&gt; doesn't
</span><br>
<span class="quotelev2">&gt;&gt; work).
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to switch between odls components (I saw bprocs
</span><br>
<span class="quotelev2">&gt;&gt; there and
</span><br>
<span class="quotelev2">&gt;&gt; I guess it is used)?
</span><br>
<p>Are you working on the trunk? What r level?
<br>
<p>Reason I ask: I recently fixed a problem where the command line mca params
<br>
were not getting passed to the orteds. Your description looks like you
<br>
haven't picked up that change. If you have updated recently, and you still
<br>
can't get it to work, then we likely have a lingering problem.
<br>
<p><p>If I read your subject line correctly, then I am somewhat puzzled. You can
<br>
look at the orte/mca/odls/base/odls_base_default_fns.c file, the
<br>
orte_odls_base_default_get_add_procs_data function and see where we get the
<br>
total number of procs in a job and how that is passed to the orteds. If you
<br>
have some new environment that the existing odls components can't handle,
<br>
then I would strongly suggest you at least use the default functions in the
<br>
base to provide as much support as possible as this will help you to keep
<br>
pace with changes in the system.
<br>
<p>I would also welcome feedback on what you encountered that required a new
<br>
odls component - perhaps we can modify the base support functions to make it
<br>
fit within one of the existing components.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; --David
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2472.php">David Erukhimovich: "[OMPI devel] Fwd: Trying to get total procs num in odls framework"</a>
<li><strong>Previous message:</strong> <a href="2470.php">Jennis Pruett: "[OMPI devel] [PMX:VIRUS] RE: issue with --without-tm in configure?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2441.php">David Erukhimovich: "[OMPI devel] Trying to get total procs num in odls framework"</a>
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
