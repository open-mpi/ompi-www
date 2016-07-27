<?
$subject_val = "Re: [MTT devel] GSOC application";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 11:06:59 2009" -->
<!-- isoreceived="20090319150659" -->
<!-- sent="Thu, 19 Mar 2009 11:06:39 -0400" -->
<!-- isosent="20090319150639" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] GSOC application" -->
<!-- id="D9DD5BA3-A64B-49BF-BEBB-798D6DB4BC6E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b20b52800903190751m4fc1c797ycb3119a57c42eec2_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 11:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0362.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0360.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0360.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0362.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0362.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0368.php">Josh Hursey: "Re: [MTT devel] GSOC application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 19, 2009, at 10:51 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; I think we can switch to desired framework (datastore+mapreduce)  
</span><br>
<span class="quotelev1">&gt; gradually in the background:
</span><br>
<span class="quotelev1">&gt; Here is a short battle plan:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. create datastore (google`s or similar)
</span><br>
<span class="quotelev1">&gt; 2. design datastore layout (what to keep, how to keep, objects &amp;  
</span><br>
<span class="quotelev1">&gt; attributes)
</span><br>
<span class="quotelev1">&gt; 3. create cmd line tool to submit results into datastore
</span><br>
<span class="quotelev1">&gt; 4. integrate (3) into mtt
</span><br>
<span class="quotelev1">&gt; 5. Milestone: we have tool to submit run results into two DBs  
</span><br>
<span class="quotelev1">&gt; (currents &amp; datastore)
</span><br>
<p>Agreed -- this is very do-able.
<br>
<p><span class="quotelev1">&gt; 6. Create mpi-aware cmd line tool to query submitted results. Tool  
</span><br>
<span class="quotelev1">&gt; should allow query and fetch selected results.
</span><br>
<span class="quotelev1">&gt; 7. Milestone: we have cmd line tool to query performance results.  
</span><br>
<span class="quotelev1">&gt; This tool can be used by community to play with custom scripts for  
</span><br>
<span class="quotelev1">&gt; fetching results and generating custom reports.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 8. here we can collect 3rd party/contributed scripts to create  
</span><br>
<span class="quotelev1">&gt; various visual reports based on perf results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what do you think?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think we can provide some dark forces here to perform most of the  
</span><br>
<span class="quotelev1">&gt; steps.
</span><br>
<p>Awesome!  I can say that if this stuff becomes available, Cisco will  
<br>
start &quot;double submitting&quot; -- do the currently-official postgres db  
<br>
(i.e., same as today), and to the new/experimental datastore.
<br>
<p><span class="quotelev1">&gt; Will it be possible to host datastore on openmpi.org and open access  
</span><br>
<span class="quotelev1">&gt; to it?
</span><br>
<p><p>I think we have 2 options here:
<br>
<p>1. Google's datastore/app engine.  That requires signing up for a  
<br>
Google Apps account with Google Engine access.  Josh has one of these  
<br>
(anyone can get a Google Apps account; as I understand it, you have to  
<br>
apply for Google Engine access and approval can take a looooong time  
<br>
-- Josh just got approved after nearly a year).  Josh -- could we use  
<br>
your account, perchance?  (I'm not sure if this is Josh's main/ 
<br>
personal Google account, or a generic account he created)
<br>
<p>2. Hadoop.  This is the open source project that is modeled off  
<br>
Google's papers that they published about map/reduce.  We'd have to  
<br>
host the hadoop data store somewhere (e.g., IU), but it benefits from  
<br>
having multiple machines to store data, such as a data farm.  I do not  
<br>
believe that IU has such a resource.
<br>
<p>There are definite similarities between the two choices, but I believe  
<br>
the APIs are different -- so we have to code for one or the other.
<br>
<p>I think I would prefer #1 in order to take care of the hosting issue.   
<br>
If we get past the proof-of-concept stage, I'm guessing it'll be  
<br>
pretty easy to get the funding to get a real Google Apps account (it's  
<br>
$50/user/year -- darn cheap).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0362.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0360.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0360.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0362.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0362.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0368.php">Josh Hursey: "Re: [MTT devel] GSOC application"</a>
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
