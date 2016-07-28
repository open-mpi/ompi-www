<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Oct 21 06:24:47 2007" -->
<!-- isoreceived="20071021102447" -->
<!-- sent="Sun, 21 Oct 2007 12:24:41 +0200 (IST)" -->
<!-- isosent="20071021102441" -->
<!-- name="David Erukhimovich" -->
<!-- email="daviderukh_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: Trying to get total procs num in odls framework" -->
<!-- id="Pine.LNX.4.44.0710211221500.25515-100000_at_mos31.cs.huji.ac.il" -->
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
<strong>Date:</strong> 2007-10-21 06:24:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2474.php">George Bosilca: "Re: [OMPI devel] Fwd: Trying to get total procs num in odls framework"</a>
<li><strong>Previous message:</strong> <a href="2472.php">David Erukhimovich: "[OMPI devel] Fwd: Trying to get total procs num in odls framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2474.php">George Bosilca: "Re: [OMPI devel] Fwd: Trying to get total procs num in odls framework"</a>
<li><strong>Reply:</strong> <a href="2474.php">George Bosilca: "Re: [OMPI devel] Fwd: Trying to get total procs num in odls framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I'm sorry to bother you again but adding the new component to rds still
<br>
doesn't work as expected.
<br>
I've created a new component rds_mosix. it is identical to rds_hostfile
<br>
(with all parameters names changed) except:
<br>
<p>in rds/mosix/rds_mosix_component.c/orte_rds_mosix_open:
<br>
&nbsp;&nbsp;&nbsp;mca_base_param_reg_string(&quot;rds_hostfile&quot;, &quot;path&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;ORTE Host filename&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;false, false, path,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;mca_rds_mosix_component.path);
<br>
<p>in rds/mosix/rds_mosix.c/orte_rds_mosix_query:
<br>
&nbsp;&nbsp;rc = mca_base_param_find(&quot;rds&quot;, &quot;hostfile&quot;, &quot;path&quot;);
<br>
&nbsp;&nbsp;mca_base_param_lookup_string(rc, &amp;mca_rds_mosix_component.path);
<br>
&nbsp;&nbsp;printf(&quot;got hostfile: %s\n&quot;, mca_rds_mosix_component.path);
<br>
<p>So I'm running:
<br>
&nbsp;&nbsp;&nbsp;mpirun --mca rmaps round_robin --mca rds mosix --hostfile $MOSHOME/4hosts -np 2 hostname
<br>
<p>and getting the output: &quot;got hostfile: &lt;default_hostfile_path&gt;&quot;
<br>
and not the given path.
<br>
<p>What am I doing wrong?
<br>
<p>Thank you
<br>
--David
<br>
<p><p><p>---------- Forwarded message ----------
<br>
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Date: Oct 20, 2007 6:52 PM
<br>
Subject: Re: [OMPI devel] Trying to get total procs num in odls framework
<br>
To: David Erukhimovich &lt;daviderukh_at_[hidden]&gt;
<br>
<p><p><p><p>On 10/20/07 10:10 AM, &quot;David Erukhimovich&quot; &lt;daviderukh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. I do want the user to be able to switch between my way of process
</span><br>
<span class="quotelev1">&gt; launching, and the default way. I can do it using an mca flag, but I would
</span><br>
<span class="quotelev1">&gt; prefer a new component. If I is not too defficult for you, please make the
</span><br>
<span class="quotelev1">&gt; patch, if it is, I'll just use an mca flag.
</span><br>
<p>I can make it next week - shouldn't be too big a deal. I'll let you know if
<br>
otherwise.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Just remmembered another difficulty I had: I've created a new rds
</span><br>
<span class="quotelev1">&gt; component identical to the hostfile one. lets call it mosix.  Now, orterun
</span><br>
<span class="quotelev1">&gt; is saving the hostfile path in the mca parameter -  rds_hostfile_path or
</span><br>
<span class="quotelev1">&gt; something like that. when I try to retrieve rds_hostfile_path or
</span><br>
<span class="quotelev1">&gt; rds_mosix_path in rds_mosix component I always get the default hostfile
</span><br>
path
<br>
<span class="quotelev1">&gt; (doesn't matter if I gave an hostfile or not). And I tried everything -
</span><br>
<span class="quotelev1">&gt; changing names in rds_mosix_component, declaring a new parameter
</span><br>
<span class="quotelev1">&gt; rds_mosix_path in various places etc. So now I'm just altering the
</span><br>
existing
<br>
<span class="quotelev1">&gt; hostfile component.
</span><br>
<span class="quotelev1">&gt; Do you have any suggestions how to make it work?
</span><br>
<p>How are you retrieving the path? Here is the code from hostfile:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mca_base_param_reg_string(&amp;mca_rds_hostfile_component.super.rds_version,
<br>
&quot;path&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;ORTE Host filename&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;false, false, path,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;mca_rds_hostfile_component.path);
<br>
<p>If you look at that, it is actually looking for an mca param of
<br>
&quot;rds_hostfile_path&quot;. If you just copied this code, though, using your
<br>
component's name, then you would be looking for the mca param
<br>
&quot;rds_&lt;your-components-name&gt;_path&quot;. What you probably need to do is hardwire
<br>
it to:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mca_base_param_reg_string(&quot;rds_hostfile&quot;, &quot;path&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;ORTE Host filename&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;false, false, path,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;default_path);
<br>
<p>Also, you may be encountering a problem in that the rds_hostfile component
<br>
is going to try and run as well as your component, and thus may overwrite
<br>
what you do. You might want to try -mca rds my_component to ensure that only
<br>
your component gets executed.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for all the questions and thank you very much for the quick answers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Not a problem - hope this helps.
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; --David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Oct 20, 2007 5:12 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Trying to get total procs num in odls framework
</span><br>
<span class="quotelev1">&gt; To: David Erukhimovich &lt;daviderukh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the info - see comments below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/20/07 6:58 AM, &quot;David Erukhimovich&quot; &lt;daviderukh_at_[hidden]&gt;
</span><br>
wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your answer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First of all, my two questions wasn't connected and they belong to
</span><br>
<span class="quotelev1">&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; part of my project. and the subject of the mail should have been: Trying
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; get total procs num in rds framework (sorry my mistake).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here the parts in the order of the last email
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. I've solved the problem about getting total num of procs in rds (just
</span><br>
<span class="quotelev2">&gt;&gt; called  some function incorrectly), so sorry for disturbing you about
</span><br>
<span class="quotelev1">&gt; that.
</span><br>
<span class="quotelev2">&gt;&gt; Now a bit more about what I'm trying to do, maybe there is a better way
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev2">&gt;&gt; mine:
</span><br>
<span class="quotelev2">&gt;&gt; I have a tool (external application) that given a list of machines and a
</span><br>
<span class="quotelev2">&gt;&gt; number n , it chooses the n best ones from the list (least loaded  ones)
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; if the list of machines isn't given, it just returns the n best machines
</span><br>
<span class="quotelev2">&gt;&gt; from the claster. I am wishing to include this in ompi. hence - given a
</span><br>
<span class="quotelev2">&gt;&gt; machinefile, It'll run the process only on the best nodes. If a
</span><br>
<span class="quotelev1">&gt; machinefile
</span><br>
<span class="quotelev2">&gt;&gt; isn't given, it'll take the best node that my application returns.
</span><br>
<span class="quotelev2">&gt;&gt; I think the best place to implement it is in rds - after building the
</span><br>
list
<br>
<span class="quotelev2">&gt;&gt; of newly discovered nodes: if it is empty, fill it using my tool,
</span><br>
<span class="quotelev1">&gt; otherwise
</span><br>
<span class="quotelev2">&gt;&gt; filter it using my tool. It seems to me the most logical way to do it. Am
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev2">&gt;&gt; right? I am asking you because I guess you have a better knowledge in
</span><br>
ompi
<br>
<span class="quotelev2">&gt;&gt; architecture.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It sounds like the correct place to me. At some point in the future, you
</span><br>
<span class="quotelev1">&gt; could migrate that logic to the RAS instead, but I would just continue as
</span><br>
<span class="quotelev1">&gt; you are doing for now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. The other thing I am trying to do is to make ompi to run every
</span><br>
process,
<br>
<span class="quotelev2">&gt;&gt; not directly, but through external program. e.g: If I want to launch the
</span><br>
<span class="quotelev2">&gt;&gt; program &quot;hostname&quot;,  I want that following to be launched: &quot;&lt;my-program&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;my-program's-flags&gt; hostname&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; I figured that the best way to do it is in odls framework because there I
</span><br>
<span class="quotelev2">&gt;&gt; have the exact executing point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess I wouldn't do it that way if I were doing a project of my own. I
</span><br>
<span class="quotelev1">&gt; would just go into the default odls module and hardcode the revised
</span><br>
launch.
<br>
<span class="quotelev1">&gt; I can't see this coming back into the production system, so unless you
</span><br>
have
<br>
<span class="quotelev1">&gt; some reason to want to run both with and without your revision, why go
</span><br>
<span class="quotelev1">&gt; through the pain?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am currently working on the checkpoint 1.2.3. I don't work on the trunk
</span><br>
<span class="quotelev2">&gt;&gt; because I need the patches to be added on some stable release. Is there a
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.* release where the bug is fixed. And if not - when can such fixed
</span><br>
<span class="quotelev2">&gt;&gt; version be stable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think there are any plans to backport that fix, though I imagine
</span><br>
it
<br>
<span class="quotelev1">&gt; could be done. If not, I could try and create a patch for you next week,
</span><br>
<span class="quotelev1">&gt; though I would again suggest you just hardcode your change into the
</span><br>
existing
<br>
<span class="quotelev1">&gt; odls default component to make your life easier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you
</span><br>
<span class="quotelev2">&gt;&gt; --Davis
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Oct 17, 2007 11:22 PM
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Trying to get total procs num in odls framework
</span><br>
<span class="quotelev2">&gt;&gt; To: daviderukh_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cc: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I could probably answer your questions better if I had a better
</span><br>
<span class="quotelev2">&gt;&gt; understanding of what you are trying to do. For example, looking in the
</span><br>
<span class="quotelev2">&gt;&gt; hostfile rds for the number of procs to be launched seems strange as the
</span><br>
<span class="quotelev2">&gt;&gt; functional role of the framework is to simply learn what nodes are
</span><br>
<span class="quotelev2">&gt;&gt; available.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It would also help to have some idea of what environment you are working
</span><br>
<span class="quotelev1">&gt; in,
</span><br>
<span class="quotelev2">&gt;&gt; and how you configured the beast.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please see comments below.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/17/07 2:47 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yo Ralph --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you answer these questions?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: David Erukhimovich &lt;daviderukh_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: October 14, 2007 5:08:45 PM EDT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: [OMPI devel] Trying to get total procs num in odls framework
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reply-To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have 2 questions:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. I am trying to get the total number of requested processes for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in' hostfile' component in rds. I took the job object that was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; given as a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parameter, extracted the application objects and checked how many
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; each application has. The result in every run was 0. As I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; understand, this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; variable is updated before the rds part. So what am I doing wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you mean you took the jobid given to the hostfile RDS (which isn't an
</span><br>
<span class="quotelev2">&gt;&gt; object, but just a number) and did an orte_rmgr.get_app_context to get
</span><br>
the
<br>
<span class="quotelev2">&gt;&gt; array of app_contexts? Is there some reason why you would want to do that
</span><br>
<span class="quotelev2">&gt;&gt; there?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Depending upon what the command line looks like, it is possible for the
</span><br>
<span class="quotelev2">&gt;&gt; number of procs to be zero - we allow that option and then fill in the
</span><br>
<span class="quotelev2">&gt;&gt; number later. If it was specified, though, we do insert the number in the
</span><br>
<span class="quotelev2">&gt;&gt; app_context object.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe you could tell me what the command line looks like, the function
</span><br>
<span class="quotelev1">&gt; call
</span><br>
<span class="quotelev2">&gt;&gt; you used to get the &quot;application objects&quot;, and what field you were
</span><br>
looking
<br>
<span class="quotelev2">&gt;&gt; at when you found zero?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. I've discovered an undocumented framework - odls.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It wasn't exactly hidden...we haven't documented it because we are lazy
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; the existing components cover every known environment (or so we thought).
</span><br>
<span class="quotelev2">&gt;&gt; ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there some special reason to want to create another one?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've created a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; new
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component for it. The problem is that there is no way to switch
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; between
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the default component and mine (--mca odls &lt;my component&gt; doesn't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; work).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there a way to switch between odls components (I saw bprocs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I guess it is used)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you working on the trunk? What r level?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reason I ask: I recently fixed a problem where the command line mca
</span><br>
params
<br>
<span class="quotelev2">&gt;&gt; were not getting passed to the orteds. Your description looks like you
</span><br>
<span class="quotelev2">&gt;&gt; haven't picked up that change. If you have updated recently, and you
</span><br>
still
<br>
<span class="quotelev2">&gt;&gt; can't get it to work, then we likely have a lingering problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I read your subject line correctly, then I am somewhat puzzled. You
</span><br>
can
<br>
<span class="quotelev2">&gt;&gt; look at the orte/mca/odls/base/odls_base_default_fns.c file, the
</span><br>
<span class="quotelev2">&gt;&gt; orte_odls_base_default_get_add_procs_data function and see where we get
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; total number of procs in a job and how that is passed to the orteds. If
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev2">&gt;&gt; have some new environment that the existing odls components can't handle,
</span><br>
<span class="quotelev2">&gt;&gt; then I would strongly suggest you at least use the default functions in
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; base to provide as much support as possible as this will help you to keep
</span><br>
<span class="quotelev2">&gt;&gt; pace with changes in the system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would also welcome feedback on what you encountered that required a new
</span><br>
<span class="quotelev2">&gt;&gt; odls component - perhaps we can modify the base support functions to make
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev2">&gt;&gt; fit within one of the existing components.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --David
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2474.php">George Bosilca: "Re: [OMPI devel] Fwd: Trying to get total procs num in odls framework"</a>
<li><strong>Previous message:</strong> <a href="2472.php">David Erukhimovich: "[OMPI devel] Fwd: Trying to get total procs num in odls framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2474.php">George Bosilca: "Re: [OMPI devel] Fwd: Trying to get total procs num in odls framework"</a>
<li><strong>Reply:</strong> <a href="2474.php">George Bosilca: "Re: [OMPI devel] Fwd: Trying to get total procs num in odls framework"</a>
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
