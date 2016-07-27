<?
$subject_val = "Re: [MTT devel] GSOC application";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 10:42:38 2009" -->
<!-- isoreceived="20090320144238" -->
<!-- sent="Fri, 20 Mar 2009 10:42:23 -0400" -->
<!-- isosent="20090320144223" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] GSOC application" -->
<!-- id="94B34BC1-FA1B-4EAF-9DC4-C354A301ADA8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D9DD5BA3-A64B-49BF-BEBB-798D6DB4BC6E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] GSOC application<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 10:42:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0369.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0367.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performance	plug-ins)"</a>
<li><strong>In reply to:</strong> <a href="0361.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0369.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0369.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah I think this sounds like a good way to move forward with this  
<br>
work. The database schema is pretty complex. If you need help on the  
<br>
database side of things let me know.
<br>
<p>To get started, would it be useful to have a meeting over the phone/ 
<br>
telepresence to design the datastore layout? This gives us an  
<br>
opportunity to start from a blank slate with regards to the  
<br>
datastore, so it may be useful brainstorm a bit beforehand.
<br>
<p>The Google Apps account is under my personal Google account, so I'm  
<br>
reluctant to use it. I think the reason it took so long for me, was  
<br>
because when I originally signed up it was in limited beta. I think  
<br>
the approval time is much shorter now (maybe a day?), and we can make  
<br>
an openmpi or mtt account that we can use.
<br>
<p>With regard to Hadoop, I don't think that IU has a set of machines  
<br>
that would work, but I can ask around. We could always try Hadoop on  
<br>
a single machine if people wanted to play around with data querying/ 
<br>
storage.
<br>
<p>I don't have a strong preference either way, but Google Apps may  
<br>
provide us with a lower overhead solution for the long run even  
<br>
though it costs $$.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Mar 19, 2009, at 11:06 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 19, 2009, at 10:51 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think we can switch to desired framework (datastore+mapreduce)  
</span><br>
<span class="quotelev2">&gt;&gt; gradually in the background:
</span><br>
<span class="quotelev2">&gt;&gt; Here is a short battle plan:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. create datastore (google`s or similar)
</span><br>
<span class="quotelev2">&gt;&gt; 2. design datastore layout (what to keep, how to keep, objects &amp;  
</span><br>
<span class="quotelev2">&gt;&gt; attributes)
</span><br>
<span class="quotelev2">&gt;&gt; 3. create cmd line tool to submit results into datastore
</span><br>
<span class="quotelev2">&gt;&gt; 4. integrate (3) into mtt
</span><br>
<span class="quotelev2">&gt;&gt; 5. Milestone: we have tool to submit run results into two DBs  
</span><br>
<span class="quotelev2">&gt;&gt; (currents &amp; datastore)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed -- this is very do-able.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 6. Create mpi-aware cmd line tool to query submitted results. Tool  
</span><br>
<span class="quotelev2">&gt;&gt; should allow query and fetch selected results.
</span><br>
<span class="quotelev2">&gt;&gt; 7. Milestone: we have cmd line tool to query performance results.  
</span><br>
<span class="quotelev2">&gt;&gt; This tool can be used by community to play with custom scripts for  
</span><br>
<span class="quotelev2">&gt;&gt; fetching results and generating custom reports.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 8. here we can collect 3rd party/contributed scripts to create  
</span><br>
<span class="quotelev2">&gt;&gt; various visual reports based on perf results.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; what do you think?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think we can provide some dark forces here to perform most of  
</span><br>
<span class="quotelev2">&gt;&gt; the steps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Awesome!  I can say that if this stuff becomes available, Cisco  
</span><br>
<span class="quotelev1">&gt; will start &quot;double submitting&quot; -- do the currently-official  
</span><br>
<span class="quotelev1">&gt; postgres db (i.e., same as today), and to the new/experimental  
</span><br>
<span class="quotelev1">&gt; datastore.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Will it be possible to host datastore on openmpi.org and open  
</span><br>
<span class="quotelev2">&gt;&gt; access to it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think we have 2 options here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Google's datastore/app engine.  That requires signing up for a  
</span><br>
<span class="quotelev1">&gt; Google Apps account with Google Engine access.  Josh has one of  
</span><br>
<span class="quotelev1">&gt; these (anyone can get a Google Apps account; as I understand it,  
</span><br>
<span class="quotelev1">&gt; you have to apply for Google Engine access and approval can take a  
</span><br>
<span class="quotelev1">&gt; looooong time -- Josh just got approved after nearly a year).  Josh  
</span><br>
<span class="quotelev1">&gt; -- could we use your account, perchance?  (I'm not sure if this is  
</span><br>
<span class="quotelev1">&gt; Josh's main/personal Google account, or a generic account he created)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Hadoop.  This is the open source project that is modeled off  
</span><br>
<span class="quotelev1">&gt; Google's papers that they published about map/reduce.  We'd have to  
</span><br>
<span class="quotelev1">&gt; host the hadoop data store somewhere (e.g., IU), but it benefits  
</span><br>
<span class="quotelev1">&gt; from having multiple machines to store data, such as a data farm.   
</span><br>
<span class="quotelev1">&gt; I do not believe that IU has such a resource.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are definite similarities between the two choices, but I  
</span><br>
<span class="quotelev1">&gt; believe the APIs are different -- so we have to code for one or the  
</span><br>
<span class="quotelev1">&gt; other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think I would prefer #1 in order to take care of the hosting  
</span><br>
<span class="quotelev1">&gt; issue.  If we get past the proof-of-concept stage, I'm guessing  
</span><br>
<span class="quotelev1">&gt; it'll be pretty easy to get the funding to get a real Google Apps  
</span><br>
<span class="quotelev1">&gt; account (it's $50/user/year -- darn cheap).
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0369.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0367.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1273 (Analyze/Performance	plug-ins)"</a>
<li><strong>In reply to:</strong> <a href="0361.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0369.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0369.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
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
