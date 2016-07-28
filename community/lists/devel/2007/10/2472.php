<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct 20 12:22:45 2007" -->
<!-- isoreceived="20071020162245" -->
<!-- sent="Sat, 20 Oct 2007 18:22:40 +0200 (IST)" -->
<!-- isosent="20071020162240" -->
<!-- name="David Erukhimovich" -->
<!-- email="daviderukh_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: Trying to get total procs num in odls framework" -->
<!-- id="Pine.LNX.4.64.0710201821240.1241_at_pita.cs.huji.ac.il" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-10-20 12:22:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2473.php">David Erukhimovich: "[OMPI devel] Fwd: Trying to get total procs num in odls framework"</a>
<li><strong>Previous message:</strong> <a href="2471.php">David Erukhimovich: "Re: [OMPI devel] Trying to get total procs num in odls framework"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>2. I do want the user to be able to switch between my way of process
<br>
launching, and the default way. I can do it using an mca flag, but I would
<br>
prefer a new component. If I is not too defficult for you, please make the
<br>
patch, if it is, I'll just use an mca flag.
<br>
<p>1. Just remmembered another difficulty I had: I've created a new rds
<br>
component identical to the hostfile one. lets call it mosix.  Now, orterun
<br>
is saving the hostfile path in the mca parameter -  rds_hostfile_path or
<br>
something like that. when I try to retrieve rds_hostfile_path or
<br>
rds_mosix_path in rds_mosix component I always get the default hostfile path
<br>
(doesn't matter if I gave an hostfile or not). And I tried everything -
<br>
changing names in rds_mosix_component, declaring a new parameter
<br>
rds_mosix_path in various places etc. So now I'm just altering the existing
<br>
hostfile component.
<br>
Do you have any suggestions how to make it work?
<br>
<p>Sorry for all the questions and thank you very much for the quick answers
<br>
<p>Regards
<br>
--David
<br>
<p>---------- Forwarded message ----------
<br>
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Date: Oct 20, 2007 5:12 PM
<br>
Subject: Re: [OMPI devel] Trying to get total procs num in odls framework
<br>
To: David Erukhimovich &lt;daviderukh_at_[hidden]&gt;
<br>
<p>Hi David
<br>
<p>Thanks for the info - see comments below.
<br>
<p>Ralph
<br>
<p><p>On 10/20/07 6:58 AM, &quot;David Erukhimovich&quot; &lt;daviderukh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; Thank you for your answer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all, my two questions wasn't connected and they belong to
</span><br>
different
<br>
<span class="quotelev1">&gt; part of my project. and the subject of the mail should have been: Trying
</span><br>
to
<br>
<span class="quotelev1">&gt; get total procs num in rds framework (sorry my mistake).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here the parts in the order of the last email
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I've solved the problem about getting total num of procs in rds (just
</span><br>
<span class="quotelev1">&gt; called  some function incorrectly), so sorry for disturbing you about
</span><br>
that.
<br>
<span class="quotelev1">&gt; Now a bit more about what I'm trying to do, maybe there is a better way
</span><br>
then
<br>
<span class="quotelev1">&gt; mine:
</span><br>
<span class="quotelev1">&gt; I have a tool (external application) that given a list of machines and a
</span><br>
<span class="quotelev1">&gt; number n , it chooses the n best ones from the list (least loaded  ones)
</span><br>
and
<br>
<span class="quotelev1">&gt; if the list of machines isn't given, it just returns the n best machines
</span><br>
<span class="quotelev1">&gt; from the claster. I am wishing to include this in ompi. hence - given a
</span><br>
<span class="quotelev1">&gt; machinefile, It'll run the process only on the best nodes. If a
</span><br>
machinefile
<br>
<span class="quotelev1">&gt; isn't given, it'll take the best node that my application returns.
</span><br>
<span class="quotelev1">&gt; I think the best place to implement it is in rds - after building the list
</span><br>
<span class="quotelev1">&gt; of newly discovered nodes: if it is empty, fill it using my tool,
</span><br>
otherwise
<br>
<span class="quotelev1">&gt; filter it using my tool. It seems to me the most logical way to do it. Am
</span><br>
I
<br>
<span class="quotelev1">&gt; right? I am asking you because I guess you have a better knowledge in ompi
</span><br>
<span class="quotelev1">&gt; architecture.
</span><br>
<p>It sounds like the correct place to me. At some point in the future, you
<br>
could migrate that logic to the RAS instead, but I would just continue as
<br>
you are doing for now.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. The other thing I am trying to do is to make ompi to run every process,
</span><br>
<span class="quotelev1">&gt; not directly, but through external program. e.g: If I want to launch the
</span><br>
<span class="quotelev1">&gt; program &quot;hostname&quot;,  I want that following to be launched: &quot;&lt;my-program&gt;
</span><br>
<span class="quotelev1">&gt; &lt;my-program's-flags&gt; hostname&quot;.
</span><br>
<span class="quotelev1">&gt; I figured that the best way to do it is in odls framework because there I
</span><br>
<span class="quotelev1">&gt; have the exact executing point.
</span><br>
<p>I guess I wouldn't do it that way if I were doing a project of my own. I
<br>
would just go into the default odls module and hardcode the revised launch.
<br>
I can't see this coming back into the production system, so unless you have
<br>
some reason to want to run both with and without your revision, why go
<br>
through the pain?
<br>
<p><span class="quotelev1">&gt; I am currently working on the checkpoint 1.2.3. I don't work on the trunk
</span><br>
<span class="quotelev1">&gt; because I need the patches to be added on some stable release. Is there a
</span><br>
<span class="quotelev1">&gt; 1.2.* release where the bug is fixed. And if not - when can such fixed
</span><br>
<span class="quotelev1">&gt; version be stable
</span><br>
<p>I don't think there are any plans to backport that fix, though I imagine it
<br>
could be done. If not, I could try and create a patch for you next week,
<br>
though I would again suggest you just hardcode your change into the existing
<br>
odls default component to make your life easier.
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; --Davis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Oct 17, 2007 11:22 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Trying to get total procs num in odls framework
</span><br>
<span class="quotelev1">&gt; To: daviderukh_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could probably answer your questions better if I had a better
</span><br>
<span class="quotelev1">&gt; understanding of what you are trying to do. For example, looking in the
</span><br>
<span class="quotelev1">&gt; hostfile rds for the number of procs to be launched seems strange as the
</span><br>
<span class="quotelev1">&gt; functional role of the framework is to simply learn what nodes are
</span><br>
<span class="quotelev1">&gt; available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would also help to have some idea of what environment you are working
</span><br>
in,
<br>
<span class="quotelev1">&gt; and how you configured the beast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please see comments below.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/17/07 2:47 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yo Ralph --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you answer these questions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: David Erukhimovich &lt;daviderukh_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: October 14, 2007 5:08:45 PM EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI devel] Trying to get total procs num in odls framework
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reply-To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have 2 questions:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. I am trying to get the total number of requested processes for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in' hostfile' component in rds. I took the job object that was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; given as a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter, extracted the application objects and checked how many
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each application has. The result in every run was 0. As I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; understand, this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variable is updated before the rds part. So what am I doing wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you mean you took the jobid given to the hostfile RDS (which isn't an
</span><br>
<span class="quotelev1">&gt; object, but just a number) and did an orte_rmgr.get_app_context to get the
</span><br>
<span class="quotelev1">&gt; array of app_contexts? Is there some reason why you would want to do that
</span><br>
<span class="quotelev1">&gt; there?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Depending upon what the command line looks like, it is possible for the
</span><br>
<span class="quotelev1">&gt; number of procs to be zero - we allow that option and then fill in the
</span><br>
<span class="quotelev1">&gt; number later. If it was specified, though, we do insert the number in the
</span><br>
<span class="quotelev1">&gt; app_context object.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe you could tell me what the command line looks like, the function
</span><br>
call
<br>
<span class="quotelev1">&gt; you used to get the &quot;application objects&quot;, and what field you were looking
</span><br>
<span class="quotelev1">&gt; at when you found zero?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. I've discovered an undocumented framework - odls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It wasn't exactly hidden...we haven't documented it because we are lazy
</span><br>
and
<br>
<span class="quotelev1">&gt; the existing components cover every known environment (or so we thought).
</span><br>
<span class="quotelev1">&gt; ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there some special reason to want to create another one?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've created a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component for it. The problem is that there is no way to switch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the default component and mine (--mca odls &lt;my component&gt; doesn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a way to switch between odls components (I saw bprocs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess it is used)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you working on the trunk? What r level?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Reason I ask: I recently fixed a problem where the command line mca params
</span><br>
<span class="quotelev1">&gt; were not getting passed to the orteds. Your description looks like you
</span><br>
<span class="quotelev1">&gt; haven't picked up that change. If you have updated recently, and you still
</span><br>
<span class="quotelev1">&gt; can't get it to work, then we likely have a lingering problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I read your subject line correctly, then I am somewhat puzzled. You can
</span><br>
<span class="quotelev1">&gt; look at the orte/mca/odls/base/odls_base_default_fns.c file, the
</span><br>
<span class="quotelev1">&gt; orte_odls_base_default_get_add_procs_data function and see where we get
</span><br>
the
<br>
<span class="quotelev1">&gt; total number of procs in a job and how that is passed to the orteds. If
</span><br>
you
<br>
<span class="quotelev1">&gt; have some new environment that the existing odls components can't handle,
</span><br>
<span class="quotelev1">&gt; then I would strongly suggest you at least use the default functions in
</span><br>
the
<br>
<span class="quotelev1">&gt; base to provide as much support as possible as this will help you to keep
</span><br>
<span class="quotelev1">&gt; pace with changes in the system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would also welcome feedback on what you encountered that required a new
</span><br>
<span class="quotelev1">&gt; odls component - perhaps we can modify the base support functions to make
</span><br>
it
<br>
<span class="quotelev1">&gt; fit within one of the existing components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --David
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2473.php">David Erukhimovich: "[OMPI devel] Fwd: Trying to get total procs num in odls framework"</a>
<li><strong>Previous message:</strong> <a href="2471.php">David Erukhimovich: "Re: [OMPI devel] Trying to get total procs num in odls framework"</a>
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
