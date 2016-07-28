<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 29 19:25:04 2007" -->
<!-- isoreceived="20071029232504" -->
<!-- sent="Tue, 30 Oct 2007 01:24:48 +0200 (IST)" -->
<!-- isosent="20071029232448" -->
<!-- name="David Erukhimovich" -->
<!-- email="daviderukh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hostfile param: was Trying to get total procs num in odls framework" -->
<!-- id="Pine.LNX.4.44.0710300115420.21224-100000_at_mos31" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D15A414B-745D-46A3-B6A7-C480D95B0F32_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-29 19:24:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2521.php">Tom Mitchell: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2519.php">Sajjad Tabib: "[OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I was just reviewing my files in order to sent them to Jeff, And fixed the
<br>
problem!!
<br>
I should've written:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_base_param_string_name(&quot;rds_hostfile&quot;, &quot;path&quot; . . . );
<br>
instead if:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_base_param_string(&quot;rds_hostfile&quot;, &quot;path&quot; . . .);
<br>
in the component file, 'open' function.
<br>
<p>But I don't understand how it compiled? The is no function
<br>
mca_base_param_string that takes string as first param (I know it doesn't
<br>
comple in the module file)
<br>
I compile using 'make all install' in the openmpi dir
<br>
<p>Thanks
<br>
--David
<br>
<p>On Mon, 29 Oct 2007, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Sorry guys, I did miss this earlier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see a patch anywhere in the e-mail thread below -- can
</span><br>
<span class="quotelev1">&gt; someone send me the problematic code in question?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: The MCA param space is global, so there's no reason that a new/
</span><br>
<span class="quotelev1">&gt; different RDS shouldn't be able to read the hostfile MCA parameter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 28, 2007, at 2:09 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yo Jeff
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This may have slipped through your inbox (had OMPI devel in
</span><br>
<span class="quotelev2">&gt; &gt; subject, so may
</span><br>
<span class="quotelev2">&gt; &gt; have been caught in some filter) - could you please provide any
</span><br>
<span class="quotelev2">&gt; &gt; thoughts on
</span><br>
<span class="quotelev2">&gt; &gt; why the hostfile isn't getting picked up correctly? As I indicated
</span><br>
<span class="quotelev2">&gt; &gt; on the
</span><br>
<span class="quotelev2">&gt; &gt; prior note, I verified that it is working for the default hostfile
</span><br>
<span class="quotelev2">&gt; &gt; component
</span><br>
<span class="quotelev2">&gt; &gt; - I can't see anything wrong in David's call to cause the problem.
</span><br>
<span class="quotelev2">&gt; &gt; Please
</span><br>
<span class="quotelev2">&gt; &gt; refer to the prior note for that code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 10/28/07 10:31 AM, &quot;David Erukhimovich&quot;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;daviderukh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank you very much for the patch, it helped me a lot (It works!) and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm really appreciate this.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; p.s. Any idea about the rds thing?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --David
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi David
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Here is the promised patch - it passes params just fine, but I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cannot vouch
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; for any unintended consequences. I -think- it will be fine, but
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; it lacks all
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the usual testing for a patch to an official release.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hope it helps
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On 10/20/07 10:10 AM, &quot;David Erukhimovich&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &lt;daviderukh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 2. I do want the user to be able to switch between my way of
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; launching, and the default way. I can do it using an mca flag,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; but I would
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; prefer a new component. If I is not too defficult for you,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; please make the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; patch, if it is, I'll just use an mca flag.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1. Just remmembered another difficulty I had: I've created a new
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; rds
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; component identical to the hostfile one. lets call it mosix.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Now, orterun
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; is saving the hostfile path in the mca parameter -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; rds_hostfile_path or
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; something like that. when I try to retrieve rds_hostfile_path or
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; rds_mosix_path in rds_mosix component I always get the default
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; hostfile path
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (doesn't matter if I gave an hostfile or not). And I tried
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; everything -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; changing names in rds_mosix_component, declaring a new parameter
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; rds_mosix_path in various places etc. So now I'm just altering
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the existing
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; hostfile component.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Do you have any suggestions how to make it work?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Sorry for all the questions and thank you very much for the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; quick answers
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --David
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Date: Oct 20, 2007 5:12 PM
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] Trying to get total procs num in odls
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; framework
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; To: David Erukhimovich &lt;daviderukh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi David
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks for the info - see comments below.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On 10/20/07 6:58 AM, &quot;David Erukhimovich&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; &lt;daviderukh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thank you for your answer.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; First of all, my two questions wasn't connected and they belong to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; different
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; part of my project. and the subject of the mail should have
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; been: Trying
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; get total procs num in rds framework (sorry my mistake).
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Here the parts in the order of the last email
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 1. I've solved the problem about getting total num of procs in
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; rds (just
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; called  some function incorrectly), so sorry for disturbing you
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; about
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; that.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Now a bit more about what I'm trying to do, maybe there is a
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; better way
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; then
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mine:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I have a tool (external application) that given a list of
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; machines and a
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; number n , it chooses the n best ones from the list (least
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; loaded  ones)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; if the list of machines isn't given, it just returns the n best
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; machines
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; from the claster. I am wishing to include this in ompi. hence -
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; given a
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; machinefile, It'll run the process only on the best nodes. If a
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; machinefile
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; isn't given, it'll take the best node that my application returns.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I think the best place to implement it is in rds - after
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; building the list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; of newly discovered nodes: if it is empty, fill it using my tool,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; otherwise
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; filter it using my tool. It seems to me the most logical way to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; do it. Am
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; right? I am asking you because I guess you have a better
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; knowledge in ompi
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; architecture.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; It sounds like the correct place to me. At some point in the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; future, you
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; could migrate that logic to the RAS instead, but I would just
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; continue as
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; you are doing for now.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2. The other thing I am trying to do is to make ompi to run
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; every process,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; not directly, but through external program. e.g: If I want to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; launch the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; program &quot;hostname&quot;,  I want that following to be launched: &quot;&lt;my-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; program&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &lt;my-program's-flags&gt; hostname&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I figured that the best way to do it is in odls framework
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; because there I
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; have the exact executing point.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I guess I wouldn't do it that way if I were doing a project of
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; my own. I
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; would just go into the default odls module and hardcode the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; revised launch.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I can't see this coming back into the production system, so
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; unless you have
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; some reason to want to run both with and without your revision,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; why go
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; through the pain?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I am currently working on the checkpoint 1.2.3. I don't work on
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the trunk
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; because I need the patches to be added on some stable release.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Is there a
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 1.2.* release where the bug is fixed. And if not - when can
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; such fixed
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; version be stable
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I don't think there are any plans to backport that fix, though I
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; imagine it
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; could be done. If not, I could try and create a patch for you
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; next week,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; though I would again suggest you just hardcode your change into
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the existing
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; odls default component to make your life easier.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thank you
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --Davis
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Date: Oct 17, 2007 11:22 PM
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] Trying to get total procs num in odls
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; framework
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; To: daviderukh_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Cc: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi David
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I could probably answer your questions better if I had a better
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; understanding of what you are trying to do. For example,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; looking in the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; hostfile rds for the number of procs to be launched seems
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; strange as the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; functional role of the framework is to simply learn what nodes are
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; available.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; It would also help to have some idea of what environment you
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; are working
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; in,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; and how you configured the beast.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Please see comments below.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On 10/17/07 2:47 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Yo Ralph --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Can you answer these questions?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; From: David Erukhimovich &lt;daviderukh_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Date: October 14, 2007 5:08:45 PM EDT
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: [OMPI devel] Trying to get total procs num in odls
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; framework
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Reply-To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I have 2 questions:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 1. I am trying to get the total number of requested processes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; the job
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; in' hostfile' component in rds. I took the job object that was
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; given as a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; parameter, extracted the application objects and checked how
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; many
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; procs
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; each application has. The result in every run was 0. As I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; understand, this
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; variable is updated before the rds part. So what am I doing
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; wrong?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Do you mean you took the jobid given to the hostfile RDS (which
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; isn't an
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; object, but just a number) and did an orte_rmgr.get_app_context
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; to get the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; array of app_contexts? Is there some reason why you would want
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; to do that
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; there?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Depending upon what the command line looks like, it is possible
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; for the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; number of procs to be zero - we allow that option and then fill
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; in the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; number later. If it was specified, though, we do insert the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; number in the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; app_context object.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Maybe you could tell me what the command line looks like, the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; function
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; call
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; you used to get the &quot;application objects&quot;, and what field you
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; were looking
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; at when you found zero?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 2. I've discovered an undocumented framework - odls.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; It wasn't exactly hidden...we haven't documented it because we
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; are lazy
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the existing components cover every known environment (or so we
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; thought).
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ;-)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Is there some special reason to want to create another one?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I've created a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; new
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; component for it. The problem is that there is no way to switch
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; between
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; the default component and mine (--mca odls &lt;my component&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; doesn't
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; work).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Is there a way to switch between odls components (I saw bprocs
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; there and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I guess it is used)?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Are you working on the trunk? What r level?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Reason I ask: I recently fixed a problem where the command line
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mca params
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; were not getting passed to the orteds. Your description looks
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; like you
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; haven't picked up that change. If you have updated recently,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; and you still
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; can't get it to work, then we likely have a lingering problem.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; If I read your subject line correctly, then I am somewhat
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; puzzled. You can
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; look at the orte/mca/odls/base/odls_base_default_fns.c file, the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; orte_odls_base_default_get_add_procs_data function and see
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; where we get
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; total number of procs in a job and how that is passed to the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; orteds. If
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; you
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; have some new environment that the existing odls components
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; can't handle,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; then I would strongly suggest you at least use the default
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; functions in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; base to provide as much support as possible as this will help
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; you to keep
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; pace with changes in the system.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I would also welcome feedback on what you encountered that
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; required a new
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; odls component - perhaps we can modify the base support
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; functions to make
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; fit within one of the existing components.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; --David
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2521.php">Tom Mitchell: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2519.php">Sajjad Tabib: "[OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
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
