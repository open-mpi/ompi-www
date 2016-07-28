<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Oct 21 09:39:37 2007" -->
<!-- isoreceived="20071021133937" -->
<!-- sent="Sun, 21 Oct 2007 09:39:24 -0400" -->
<!-- isosent="20071021133924" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: Trying to get total procs num in odls framework" -->
<!-- id="C9B55C38-E73E-431A-B351-738216FA183B_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.44.0710211221500.25515-100000_at_mos31.cs.huji.ac.il" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-21 09:39:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2475.php">Jennis Pruett: "Re: [OMPI devel] issue with --without-tm in configure?"</a>
<li><strong>Previous message:</strong> <a href="2473.php">David Erukhimovich: "[OMPI devel] Fwd: Trying to get total procs num in odls framework"</a>
<li><strong>In reply to:</strong> <a href="2473.php">David Erukhimovich: "[OMPI devel] Fwd: Trying to get total procs num in odls framework"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I fail to understand how do you expect it to work. You create an MCA  
<br>
parameter called &quot;rds_hostfile_path&quot; and you expect it to get the  
<br>
value specified on the command line by &quot;--hostfile&quot; ? Use &quot;--mca  
<br>
rds_hostfile_path $MOSHOME/4hosts&quot; on your command line, and your  
<br>
problem should be solved.
<br>
<p>However, having a MCA parameter called rds_hostfile_path that belong  
<br>
to the mosix rds is really confusing. In general, we try to follow  
<br>
some strict rules when we define the names of the MCA parameters, and  
<br>
these rules clearly state that the name of the component that will  
<br>
use the MCA parameter is supposed to reflect in the name of the  
<br>
parameter. rds_hostfile_path should therefore be named rds_mosix_path.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 21, 2007, at 6:24 AM, David Erukhimovich wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry to bother you again but adding the new component to rds  
</span><br>
<span class="quotelev1">&gt; still
</span><br>
<span class="quotelev1">&gt; doesn't work as expected.
</span><br>
<span class="quotelev1">&gt; I've created a new component rds_mosix. it is identical to  
</span><br>
<span class="quotelev1">&gt; rds_hostfile
</span><br>
<span class="quotelev1">&gt; (with all parameters names changed) except:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in rds/mosix/rds_mosix_component.c/orte_rds_mosix_open:
</span><br>
<span class="quotelev1">&gt;    mca_base_param_reg_string(&quot;rds_hostfile&quot;, &quot;path&quot;,
</span><br>
<span class="quotelev1">&gt;                               &quot;ORTE Host filename&quot;,
</span><br>
<span class="quotelev1">&gt;                               false, false, path,
</span><br>
<span class="quotelev1">&gt;                               &amp;mca_rds_mosix_component.path);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in rds/mosix/rds_mosix.c/orte_rds_mosix_query:
</span><br>
<span class="quotelev1">&gt;   rc = mca_base_param_find(&quot;rds&quot;, &quot;hostfile&quot;, &quot;path&quot;);
</span><br>
<span class="quotelev1">&gt;   mca_base_param_lookup_string(rc, &amp;mca_rds_mosix_component.path);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;got hostfile: %s\n&quot;, mca_rds_mosix_component.path);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I'm running:
</span><br>
<span class="quotelev1">&gt;    mpirun --mca rmaps round_robin --mca rds mosix --hostfile  
</span><br>
<span class="quotelev1">&gt; $MOSHOME/4hosts -np 2 hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and getting the output: &quot;got hostfile: &lt;default_hostfile_path&gt;&quot;
</span><br>
<span class="quotelev1">&gt; and not the given path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What am I doing wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; --David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Oct 20, 2007 6:52 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Trying to get total procs num in odls  
</span><br>
<span class="quotelev1">&gt; framework
</span><br>
<span class="quotelev1">&gt; To: David Erukhimovich &lt;daviderukh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/20/07 10:10 AM, &quot;David Erukhimovich&quot;  
</span><br>
<span class="quotelev1">&gt; &lt;daviderukh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. I do want the user to be able to switch between my way of process
</span><br>
<span class="quotelev2">&gt;&gt; launching, and the default way. I can do it using an mca flag, but  
</span><br>
<span class="quotelev2">&gt;&gt; I would
</span><br>
<span class="quotelev2">&gt;&gt; prefer a new component. If I is not too defficult for you, please  
</span><br>
<span class="quotelev2">&gt;&gt; make the
</span><br>
<span class="quotelev2">&gt;&gt; patch, if it is, I'll just use an mca flag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can make it next week - shouldn't be too big a deal. I'll let you  
</span><br>
<span class="quotelev1">&gt; know if
</span><br>
<span class="quotelev1">&gt; otherwise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Just remmembered another difficulty I had: I've created a new rds
</span><br>
<span class="quotelev2">&gt;&gt; component identical to the hostfile one. lets call it mosix.  Now,  
</span><br>
<span class="quotelev2">&gt;&gt; orterun
</span><br>
<span class="quotelev2">&gt;&gt; is saving the hostfile path in the mca parameter -   
</span><br>
<span class="quotelev2">&gt;&gt; rds_hostfile_path or
</span><br>
<span class="quotelev2">&gt;&gt; something like that. when I try to retrieve rds_hostfile_path or
</span><br>
<span class="quotelev2">&gt;&gt; rds_mosix_path in rds_mosix component I always get the default  
</span><br>
<span class="quotelev2">&gt;&gt; hostfile
</span><br>
<span class="quotelev1">&gt; path
</span><br>
<span class="quotelev2">&gt;&gt; (doesn't matter if I gave an hostfile or not). And I tried  
</span><br>
<span class="quotelev2">&gt;&gt; everything -
</span><br>
<span class="quotelev2">&gt;&gt; changing names in rds_mosix_component, declaring a new parameter
</span><br>
<span class="quotelev2">&gt;&gt; rds_mosix_path in various places etc. So now I'm just altering the
</span><br>
<span class="quotelev1">&gt; existing
</span><br>
<span class="quotelev2">&gt;&gt; hostfile component.
</span><br>
<span class="quotelev2">&gt;&gt; Do you have any suggestions how to make it work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How are you retrieving the path? Here is the code from hostfile:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mca_base_param_reg_string 
</span><br>
<span class="quotelev1">&gt; (&amp;mca_rds_hostfile_component.super.rds_version,
</span><br>
<span class="quotelev1">&gt; &quot;path&quot;,
</span><br>
<span class="quotelev1">&gt;                               &quot;ORTE Host filename&quot;,
</span><br>
<span class="quotelev1">&gt;                               false, false, path,
</span><br>
<span class="quotelev1">&gt;                               &amp;mca_rds_hostfile_component.path);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you look at that, it is actually looking for an mca param of
</span><br>
<span class="quotelev1">&gt; &quot;rds_hostfile_path&quot;. If you just copied this code, though, using your
</span><br>
<span class="quotelev1">&gt; component's name, then you would be looking for the mca param
</span><br>
<span class="quotelev1">&gt; &quot;rds_&lt;your-components-name&gt;_path&quot;. What you probably need to do is  
</span><br>
<span class="quotelev1">&gt; hardwire
</span><br>
<span class="quotelev1">&gt; it to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mca_base_param_reg_string(&quot;rds_hostfile&quot;, &quot;path&quot;,
</span><br>
<span class="quotelev1">&gt;                               &quot;ORTE Host filename&quot;,
</span><br>
<span class="quotelev1">&gt;                               false, false, path,
</span><br>
<span class="quotelev1">&gt;                               &amp;default_path);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, you may be encountering a problem in that the rds_hostfile  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt; is going to try and run as well as your component, and thus may  
</span><br>
<span class="quotelev1">&gt; overwrite
</span><br>
<span class="quotelev1">&gt; what you do. You might want to try -mca rds my_component to ensure  
</span><br>
<span class="quotelev1">&gt; that only
</span><br>
<span class="quotelev1">&gt; your component gets executed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for all the questions and thank you very much for the quick  
</span><br>
<span class="quotelev2">&gt;&gt; answers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not a problem - hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; --David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Oct 20, 2007 5:12 PM
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Trying to get total procs num in odls  
</span><br>
<span class="quotelev2">&gt;&gt; framework
</span><br>
<span class="quotelev2">&gt;&gt; To: David Erukhimovich &lt;daviderukh_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the info - see comments below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/20/07 6:58 AM, &quot;David Erukhimovich&quot; &lt;daviderukh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you for your answer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First of all, my two questions wasn't connected and they belong to
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; part of my project. and the subject of the mail should have been:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Trying
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get total procs num in rds framework (sorry my mistake).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here the parts in the order of the last email
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. I've solved the problem about getting total num of procs in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rds (just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; called  some function incorrectly), so sorry for disturbing you  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about
</span><br>
<span class="quotelev2">&gt;&gt; that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now a bit more about what I'm trying to do, maybe there is a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; better way
</span><br>
<span class="quotelev2">&gt;&gt; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mine:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a tool (external application) that given a list of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines and a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number n , it chooses the n best ones from the list (least  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loaded  ones)
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if the list of machines isn't given, it just returns the n best  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the claster. I am wishing to include this in ompi. hence -  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; given a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machinefile, It'll run the process only on the best nodes. If a
</span><br>
<span class="quotelev2">&gt;&gt; machinefile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; isn't given, it'll take the best node that my application returns.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think the best place to implement it is in rds - after building  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt; list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of newly discovered nodes: if it is empty, fill it using my tool,
</span><br>
<span class="quotelev2">&gt;&gt; otherwise
</span><br>
<span class="quotelev3">&gt;&gt;&gt; filter it using my tool. It seems to me the most logical way to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do it. Am
</span><br>
<span class="quotelev2">&gt;&gt; I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; right? I am asking you because I guess you have a better  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; knowledge in
</span><br>
<span class="quotelev1">&gt; ompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; architecture.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It sounds like the correct place to me. At some point in the  
</span><br>
<span class="quotelev2">&gt;&gt; future, you
</span><br>
<span class="quotelev2">&gt;&gt; could migrate that logic to the RAS instead, but I would just  
</span><br>
<span class="quotelev2">&gt;&gt; continue as
</span><br>
<span class="quotelev2">&gt;&gt; you are doing for now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. The other thing I am trying to do is to make ompi to run every
</span><br>
<span class="quotelev1">&gt; process,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not directly, but through external program. e.g: If I want to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program &quot;hostname&quot;,  I want that following to be launched: &quot;&lt;my- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;my-program's-flags&gt; hostname&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I figured that the best way to do it is in odls framework because  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have the exact executing point.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess I wouldn't do it that way if I were doing a project of my  
</span><br>
<span class="quotelev2">&gt;&gt; own. I
</span><br>
<span class="quotelev2">&gt;&gt; would just go into the default odls module and hardcode the revised
</span><br>
<span class="quotelev1">&gt; launch.
</span><br>
<span class="quotelev2">&gt;&gt; I can't see this coming back into the production system, so unless  
</span><br>
<span class="quotelev2">&gt;&gt; you
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev2">&gt;&gt; some reason to want to run both with and without your revision,  
</span><br>
<span class="quotelev2">&gt;&gt; why go
</span><br>
<span class="quotelev2">&gt;&gt; through the pain?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am currently working on the checkpoint 1.2.3. I don't work on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the trunk
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because I need the patches to be added on some stable release. Is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.2.* release where the bug is fixed. And if not - when can such  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fixed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version be stable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't think there are any plans to backport that fix, though I  
</span><br>
<span class="quotelev2">&gt;&gt; imagine
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev2">&gt;&gt; could be done. If not, I could try and create a patch for you next  
</span><br>
<span class="quotelev2">&gt;&gt; week,
</span><br>
<span class="quotelev2">&gt;&gt; though I would again suggest you just hardcode your change into the
</span><br>
<span class="quotelev1">&gt; existing
</span><br>
<span class="quotelev2">&gt;&gt; odls default component to make your life easier.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --Davis
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Oct 17, 2007 11:22 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] Trying to get total procs num in odls  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; framework
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: daviderukh_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cc: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi David
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I could probably answer your questions better if I had a better
</span><br>
<span class="quotelev3">&gt;&gt;&gt; understanding of what you are trying to do. For example, looking  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostfile rds for the number of procs to be launched seems strange  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functional role of the framework is to simply learn what nodes are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It would also help to have some idea of what environment you are  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; working
</span><br>
<span class="quotelev2">&gt;&gt; in,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and how you configured the beast.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please see comments below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 10/17/07 2:47 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yo Ralph --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you answer these questions?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: David Erukhimovich &lt;daviderukh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: October 14, 2007 5:08:45 PM EDT
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: [OMPI devel] Trying to get total procs num in odls  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Reply-To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have 2 questions:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. I am trying to get the total number of requested processes for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the job
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in' hostfile' component in rds. I took the job object that was
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; given as a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parameter, extracted the application objects and checked how many
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; procs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; each application has. The result in every run was 0. As I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; understand, this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; variable is updated before the rds part. So what am I doing wrong?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you mean you took the jobid given to the hostfile RDS (which  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; isn't an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; object, but just a number) and did an orte_rmgr.get_app_context  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to get
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; array of app_contexts? Is there some reason why you would want to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Depending upon what the command line looks like, it is possible  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number of procs to be zero - we allow that option and then fill  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number later. If it was specified, though, we do insert the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; app_context object.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe you could tell me what the command line looks like, the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function
</span><br>
<span class="quotelev2">&gt;&gt; call
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you used to get the &quot;application objects&quot;, and what field you were
</span><br>
<span class="quotelev1">&gt; looking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at when you found zero?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. I've discovered an undocumented framework - odls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It wasn't exactly hidden...we haven't documented it because we  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are lazy
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the existing components cover every known environment (or so we  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thought).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ;-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there some special reason to want to create another one?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've created a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; new
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; component for it. The problem is that there is no way to switch
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; between
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the default component and mine (--mca odls &lt;my component&gt; doesn't
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; work).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is there a way to switch between odls components (I saw bprocs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; there and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I guess it is used)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you working on the trunk? What r level?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reason I ask: I recently fixed a problem where the command line mca
</span><br>
<span class="quotelev1">&gt; params
</span><br>
<span class="quotelev3">&gt;&gt;&gt; were not getting passed to the orteds. Your description looks  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; haven't picked up that change. If you have updated recently, and you
</span><br>
<span class="quotelev1">&gt; still
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can't get it to work, then we likely have a lingering problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I read your subject line correctly, then I am somewhat  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; puzzled. You
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; look at the orte/mca/odls/base/odls_base_default_fns.c file, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_odls_base_default_get_add_procs_data function and see where  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we get
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; total number of procs in a job and how that is passed to the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orteds. If
</span><br>
<span class="quotelev2">&gt;&gt; you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have some new environment that the existing odls components can't  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; handle,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then I would strongly suggest you at least use the default  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functions in
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base to provide as much support as possible as this will help you  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to keep
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pace with changes in the system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would also welcome feedback on what you encountered that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; required a new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; odls component - perhaps we can modify the base support functions  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to make
</span><br>
<span class="quotelev2">&gt;&gt; it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fit within one of the existing components.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --David
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2474/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2475.php">Jennis Pruett: "Re: [OMPI devel] issue with --without-tm in configure?"</a>
<li><strong>Previous message:</strong> <a href="2473.php">David Erukhimovich: "[OMPI devel] Fwd: Trying to get total procs num in odls framework"</a>
<li><strong>In reply to:</strong> <a href="2473.php">David Erukhimovich: "[OMPI devel] Fwd: Trying to get total procs num in odls framework"</a>
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
