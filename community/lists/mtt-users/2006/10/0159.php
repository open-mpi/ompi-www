<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 27 07:39:24 2006" -->
<!-- isoreceived="20061027113924" -->
<!-- sent="Fri, 27 Oct 2006 07:39:08 -0400" -->
<!-- isosent="20061027113908" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Discussion on teleconf yesterday?" -->
<!-- id="B344F29C-2052-4BFE-A440-A9E75D414582_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="74B0ACE1-FB93-40BF-89A1-D2F4E09BBED6_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-10-27 07:39:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0160.php">Josh Hursey: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>Previous message:</strong> <a href="0158.php">Ethan Mallove: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>In reply to:</strong> <a href="0157.php">Josh Hursey: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0161.php">Josh Hursey: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>Reply:</strong> <a href="0161.php">Josh Hursey: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 25, 2006, at 10:37 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; The discussion started with the bug characteristics of v1.2 versus  
</span><br>
<span class="quotelev1">&gt; the trunk.
</span><br>
<p>Gotcha.
<br>
<p><span class="quotelev1">&gt; It seemed from the call that IU was the only institution that can  
</span><br>
<span class="quotelev1">&gt; asses this via MTT as noone else spoke up. Since people were  
</span><br>
<span class="quotelev1">&gt; interested in seeing things that were breaking I suggested that I  
</span><br>
<span class="quotelev1">&gt; start forwarding the IU internal MTT reports (run nightly and  
</span><br>
<span class="quotelev1">&gt; weekly) to the testing_at_open-mpi.org. This was meet by Brain  
</span><br>
<span class="quotelev1">&gt; insisting that it would result in &quot;thousands&quot; of emails to the  
</span><br>
<span class="quotelev1">&gt; development list. I clarified that it is only 3 - 4 messages a day  
</span><br>
<span class="quotelev1">&gt; from IU. However if all other institutions do this then it would be  
</span><br>
<span class="quotelev1">&gt; a bunch of email (where 'a bunch' would still be less than  
</span><br>
<span class="quotelev1">&gt; 'thousands'). That's how we got to a 'we need a single summary  
</span><br>
<span class="quotelev1">&gt; presented to the group' comment. It should be noted that we brought  
</span><br>
<span class="quotelev1">&gt; up IU sending to the 'testing_at_[hidden]' list as a bandaid until  
</span><br>
<span class="quotelev1">&gt; MTT could do it better.
</span><br>
<p>How about sending them to me and Ethan?
<br>
<p><span class="quotelev1">&gt; This single summary can be email or a webpage that people can  
</span><br>
<span class="quotelev1">&gt; check. Rich said that he would prefer a webpage, and noone else  
</span><br>
<span class="quotelev1">&gt; really had a comment. That got us talking about the current summary  
</span><br>
<span class="quotelev1">&gt; page that MTT generates. Tim M mentioned that the current website  
</span><br>
<span class="quotelev1">&gt; is difficult to figure out how to get the answers you need. I  
</span><br>
<span class="quotelev1">&gt; agree, it is hard [usability] for someone to go to the summary page  
</span><br>
<span class="quotelev1">&gt; and answer the question &quot;So what failed from IU last night, and how  
</span><br>
<span class="quotelev1">&gt; does that differ from Yesterday -- e.g., what regressed and  
</span><br>
<span class="quotelev1">&gt; progressed yesterday at IU?&quot;. The website is flexible enough to due  
</span><br>
<span class="quotelev1">&gt; it, but having a couple of basic summary pages would be nice for  
</span><br>
<span class="quotelev1">&gt; basic users. What that should look like we can discuss further.
</span><br>
<p>Agreed; we aren't super-fond of the current web page, either.  Do you  
<br>
guys want to have a teleconf to go over the current status of MTT,  
<br>
where you want it to go, etc.?  I consider IU's input here quite  
<br>
important, since you're the ones pushing the boundaries, flexing  
<br>
MTT's muscles, etc.
<br>
<p><span class="quotelev1">&gt; The IU group really likes the emails that we currently generate. A  
</span><br>
<span class="quotelev1">&gt; plain-text summary of the previous run. I posted copies on the MTT  
</span><br>
<span class="quotelev1">&gt; bug tracker here:
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/trac/mtt/ticket/61">http://svn.open-mpi.org/trac/mtt/ticket/61</a>
</span><br>
<span class="quotelev1">&gt; Currently we have not put the work in to aggregate the runs, so for  
</span><br>
<span class="quotelev1">&gt; each ini file that we run we get 1 email to the IU group. This is  
</span><br>
<span class="quotelev1">&gt; fine for the moment, but as we add the rest of the clusters and  
</span><br>
<span class="quotelev1">&gt; dimensions in the testing matrix we will need MTT to aggregate the  
</span><br>
<span class="quotelev1">&gt; results for us and generate such an email.
</span><br>
<p>Ok.
<br>
<p>We created another ticket yesterday to make a new MTT Reporter (our  
<br>
internal plugins) that duplicates this output format.  It actually  
<br>
shouldn't be that hard -- we don't have to do parsing to get the  
<br>
numbers that you're reporting; we have access to the actual data.  So  
<br>
it's mostly caching the data, calculating the totals that you're  
<br>
calculating, and printing in your output format.
<br>
<p>Ethan has some other short tasks to do before he gets to this, but  
<br>
its near the top of the priority list.  You can see the current  
<br>
workflow on the wiki (this is a living document; it keeps changing as  
<br>
requirements, etc. change):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://svn.open-mpi.org/trac/mtt/wiki/TaskPlan">http://svn.open-mpi.org/trac/mtt/wiki/TaskPlan</a>
<br>
<p><span class="quotelev1">&gt; So I think the general feel of the discussion is that we need the  
</span><br>
<span class="quotelev1">&gt; following from MTT:
</span><br>
<span class="quotelev1">&gt;  - A 'basic' summary page providing answers to some general  
</span><br>
<span class="quotelev1">&gt; frequently asked queries. The current interface is too advanced for  
</span><br>
<span class="quotelev1">&gt; the current users.
</span><br>
<p>We have the summary.php page, but I personally have never found it  
<br>
too useful.  :-)
<br>
<p>We're getting towards a full revamp of reporter.php (got some other  
<br>
tasks to complete first, but we're definitely starting to think about  
<br>
it) -- got any ideas / input?  Our &quot;haven't thought about it much  
<br>
yet&quot; idea is to be more menu/Q-A driven with a few common queries  
<br>
easily available (rather than a huge, complicated single screen).
<br>
<p><span class="quotelev1">&gt;  - A summary email [in plain-text preferably] similar to the one  
</span><br>
<span class="quotelev1">&gt; that IU generated showing an aggregation of the previous nights  
</span><br>
<span class="quotelev1">&gt; results for (a) all reporters (b) my institution [so I can track  
</span><br>
<span class="quotelev1">&gt; them down and file bugs].
</span><br>
<p>For the moment, we don't have the dynamic capability for you to login  
<br>
to the web page, create a report, and say &quot;mail this to me nightly&quot;.   
<br>
However, Ethan can make up custom reports on the server quite easily  
<br>
-- if you want some IU-specific reports, just file a ticket and Ethan  
<br>
can Make It So.
<br>
<p><span class="quotelev1">&gt;  - 1 email a day on the previous nights testing results.
</span><br>
<p>That's what we intended for the mails that are coming today, but it  
<br>
seemed to not be sufficient -- we ended up with 4 nightly mails, one  
<br>
for each relevant phase failures and a 4th for showing stderr of mpi  
<br>
installs.
<br>
<p><span class="quotelev1">&gt; Some relevant bugs currently in existence:
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/trac/mtt/ticket/92">http://svn.open-mpi.org/trac/mtt/ticket/92</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/trac/mtt/ticket/61">http://svn.open-mpi.org/trac/mtt/ticket/61</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/trac/mtt/ticket/94">http://svn.open-mpi.org/trac/mtt/ticket/94</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The other concern is that given the frequency of testing as bugs  
</span><br>
<span class="quotelev1">&gt; appear from the testing someone needs to make sure the bug tracker  
</span><br>
<span class="quotelev1">&gt; is updated. I think the group is unclear about how this is done.  
</span><br>
<span class="quotelev1">&gt; Meaning when a MTT identifies a test as failed whom is responsible  
</span><br>
<span class="quotelev1">&gt; for putting the bug in the bug tracker?
</span><br>
<p>At the moment, I've been manually examining the mails every day and  
<br>
firing off e-mails to those responsible.  However, due to travel last  
<br>
week and this week, I've gotten quite behind.  :-(
<br>
<p><span class="quotelev1">&gt; The obvious solution is the institution that identified the bug.  
</span><br>
<span class="quotelev1">&gt; [Warning: My opinion] But then that becomes unwieldy for IU since  
</span><br>
<span class="quotelev1">&gt; we have a large testing matrix, and would need to commit someone to  
</span><br>
<span class="quotelev1">&gt; doing this everyday (and it may take all day to properly track a  
</span><br>
<span class="quotelev1">&gt; set of bugs). Also this kind of punishes an institution for testing  
</span><br>
<span class="quotelev1">&gt; more instead of providing incentive to test.
</span><br>
<p>True.  I don't know the proper answer to this, either -- I know the  
<br>
&quot;Jeff look at e-mail&quot; solution doesn't scale well.
<br>
<p><span class="quotelev1">&gt; ------ Page Break -- Context switch ------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In case you all want to know what we are doing here at IU. I  
</span><br>
<span class="quotelev1">&gt; attached to this email our planed MTT testing matrix. Currently we  
</span><br>
<span class="quotelev1">&gt; have BigRed and Odin running the complete matrix less the BLACS  
</span><br>
<span class="quotelev1">&gt; tests. Wotan and Thor will come online as we get more resources to  
</span><br>
<span class="quotelev1">&gt; support them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to do such a complex testing matrix we have various .ini  
</span><br>
<span class="quotelev1">&gt; files that we use. And since some of the dimensions in the matrix  
</span><br>
<span class="quotelev1">&gt; are large we break some of the tests into a couple .ini files that  
</span><br>
<span class="quotelev1">&gt; are submitted concurrently to have them run in a reasonable time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;MTT-testing-matrix.txt&gt;
</span><br>
<p>Awesome.
<br>
<p>I would like to schedule some phone time with you guys and Ethan and  
<br>
me to talk about what's working, what's not working, etc.  One  
<br>
obvious question I have is: is the INI config file format suitable?   
<br>
Do we need to do something more complex that would allow  
<br>
consolidation of your various configurations?  ...etc.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0160.php">Josh Hursey: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>Previous message:</strong> <a href="0158.php">Ethan Mallove: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>In reply to:</strong> <a href="0157.php">Josh Hursey: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0161.php">Josh Hursey: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>Reply:</strong> <a href="0161.php">Josh Hursey: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
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
