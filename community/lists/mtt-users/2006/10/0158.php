<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 25 13:30:09 2006" -->
<!-- isoreceived="20061025173009" -->
<!-- sent="Wed, 25 Oct 2006 13:30:00 -0400" -->
<!-- isosent="20061025173000" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Discussion on teleconf yesterday?" -->
<!-- id="20061025172959.GD9751_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-25 13:30:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0159.php">Jeff Squyres: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>Previous message:</strong> <a href="0157.php">Josh Hursey: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>In reply to:</strong> <a href="0157.php">Josh Hursey: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0160.php">Josh Hursey: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>Reply:</strong> <a href="0160.php">Josh Hursey: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct/25/2006 10:37:31AM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; The discussion started with the bug characteristics of v1.2 versus  
</span><br>
<span class="quotelev1">&gt; the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seemed from the call that IU was the only institution that can  
</span><br>
<span class="quotelev1">&gt; asses this via MTT as noone else spoke up. Since people were  
</span><br>
<span class="quotelev1">&gt; interested in seeing things that were breaking I suggested that I  
</span><br>
<span class="quotelev1">&gt; start forwarding the IU internal MTT reports (run nightly and weekly)  
</span><br>
<span class="quotelev1">&gt; to the testing_at_open-mpi.org. This was meet by Brain insisting that it  
</span><br>
<span class="quotelev1">&gt; would result in &quot;thousands&quot; of emails to the development list. I  
</span><br>
<span class="quotelev1">&gt; clarified that it is only 3 - 4 messages a day from IU. However if  
</span><br>
<span class="quotelev1">&gt; all other institutions do this then it would be a bunch of email  
</span><br>
<span class="quotelev1">&gt; (where 'a bunch' would still be less than 'thousands'). That's how we  
</span><br>
<span class="quotelev1">&gt; got to a 'we need a single summary presented to the group' comment.  
</span><br>
<span class="quotelev1">&gt; It should be noted that we brought up IU sending to the 'testing_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org' list as a bandaid until MTT could do it better.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This single summary can be email or a webpage that people can check.  
</span><br>
<span class="quotelev1">&gt; Rich said that he would prefer a webpage, and noone else really had a  
</span><br>
<span class="quotelev1">&gt; comment. That got us talking about the current summary page that MTT  
</span><br>
<span class="quotelev1">&gt; generates. Tim M mentioned that the current website is difficult to  
</span><br>
<span class="quotelev1">&gt; figure out how to get the answers you need. I agree, it is hard  
</span><br>
<span class="quotelev1">&gt; [usability] for someone to go to the summary page and answer the  
</span><br>
<span class="quotelev1">&gt; question &quot;So what failed from IU last night, and how does that differ  
</span><br>
<span class="quotelev1">&gt; from Yesterday -- e.g., what regressed and progressed yesterday at  
</span><br>
<span class="quotelev1">&gt; IU?&quot;. The website is flexible enough to due it, but having a couple  
</span><br>
<span class="quotelev1">&gt; of basic summary pages would be nice for basic users. What that  
</span><br>
<span class="quotelev1">&gt; should look like we can discuss further.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The IU group really likes the emails that we currently generate. A  
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I think the general feel of the discussion is that we need the  
</span><br>
<span class="quotelev1">&gt; following from MTT:
</span><br>
<span class="quotelev1">&gt;  - A 'basic' summary page providing answers to some general  
</span><br>
<span class="quotelev1">&gt; frequently asked queries. The current interface is too advanced for  
</span><br>
<span class="quotelev1">&gt; the current users.
</span><br>
<p>Sounds like summary.php does not suffice.
<br>
<p><a href="http://www.open-mpi.org/mtt/summary.php">http://www.open-mpi.org/mtt/summary.php</a>
<br>
<p>One thought is that we've already iterated on the summary,
<br>
and my understanding was that the summary wasn't intended to
<br>
satisfy any one particular user's needs. By MTT 2.0, I think
<br>
Reporter should be flexible and usable enough to do that. Do
<br>
we need more summary pages? If various folks need more
<br>
specific reports than what summary.php provides, I'd be
<br>
happy to do the cut-n-paste into the nightly emailer to give
<br>
them those reports, while we get custom email alerts going
<br>
(in MTT 2.0 or whenever).
<br>
<p><p><span class="quotelev1">&gt;  - A summary email [in plain-text preferably] similar to the one  
</span><br>
<span class="quotelev1">&gt; that IU generated showing an aggregation of the previous nights  
</span><br>
<span class="quotelev1">&gt; results for (a) all reporters (b) my institution [so I can track them  
</span><br>
<span class="quotelev1">&gt; down and file bugs].
</span><br>
<p><p>Could some or all of print-results.pl (which was attached to
<br>
#61) be inserted into lib/MTT/Reporter/Email.pm, so that all
<br>
mtt users can use what you have (if they need something
<br>
similar to your email reports)? At first glance, it looks
<br>
like a lot of print-results.pl is generalized enough for
<br>
that.
<br>
<p><p><span class="quotelev1">&gt;  - 1 email a day on the previous nights testing results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some relevant bugs currently in existence:
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/trac/mtt/ticket/92">http://svn.open-mpi.org/trac/mtt/ticket/92</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/trac/mtt/ticket/61">http://svn.open-mpi.org/trac/mtt/ticket/61</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/trac/mtt/ticket/94">http://svn.open-mpi.org/trac/mtt/ticket/94</a>
</span><br>
<p><p><a href="http://svn.open-mpi.org/trac/mtt/ticket/70">http://svn.open-mpi.org/trac/mtt/ticket/70</a> (show &quot;new&quot;
<br>
failures) is also relevant for getting a quick and automated
<br>
info on what regressed/progressed last night.
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The other concern is that given the frequency of testing as bugs  
</span><br>
<span class="quotelev1">&gt; appear from the testing someone needs to make sure the bug tracker is  
</span><br>
<span class="quotelev1">&gt; updated. I think the group is unclear about how this is done. Meaning  
</span><br>
<span class="quotelev1">&gt; when a MTT identifies a test as failed whom is responsible for  
</span><br>
<span class="quotelev1">&gt; putting the bug in the bug tracker?
</span><br>
<span class="quotelev1">&gt; The obvious solution is the institution that identified the bug.  
</span><br>
<span class="quotelev1">&gt; [Warning: My opinion] But then that becomes unwieldy for IU since we  
</span><br>
<span class="quotelev1">&gt; have a large testing matrix, and would need to commit someone to  
</span><br>
<span class="quotelev1">&gt; doing this everyday (and it may take all day to properly track a set  
</span><br>
<span class="quotelev1">&gt; of bugs). Also this kind of punishes an institution for testing more  
</span><br>
<span class="quotelev1">&gt; instead of providing incentive to test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------ Page Break -- Context switch ------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In case you all want to know what we are doing here at IU. I attached  
</span><br>
<span class="quotelev1">&gt; to this email our planed MTT testing matrix. Currently we have BigRed  
</span><br>
<span class="quotelev1">&gt; and Odin running the complete matrix less the BLACS tests. Wotan and  
</span><br>
<span class="quotelev1">&gt; Thor will come online as we get more resources to support them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In order to do such a complex testing matrix we have various .ini  
</span><br>
<span class="quotelev1">&gt; files that we use. And since some of the dimensions in the matrix are  
</span><br>
<span class="quotelev1">&gt; large we break some of the tests into a couple .ini files that are  
</span><br>
<span class="quotelev1">&gt; submitted concurrently to have them run in a reasonable time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      | BigRed   | Odin     | Thor   | Wotan
</span><br>
<span class="quotelev1">&gt; -----+----------+----------+--------+------
</span><br>
<span class="quotelev1">&gt; Sun  |N         |N         |  IMB   |  BLACS
</span><br>
<span class="quotelev1">&gt; Mon  |N BLACS   |N         |N       |N
</span><br>
<span class="quotelev1">&gt; Tues |N         |N IMB*    |N       |N
</span><br>
<span class="quotelev1">&gt; Wed  |N IMB*    |N         |N       |N
</span><br>
<span class="quotelev1">&gt; Thur |N         |N BLACS   |N       |N
</span><br>
<span class="quotelev1">&gt; Fri  |N         |N         |N       |N
</span><br>
<span class="quotelev1">&gt; Sat  |N Intel*  |N Intel*  |  BLACS |  IMB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; N = Nightly run
</span><br>
<span class="quotelev1">&gt; * = Large runs
</span><br>
<span class="quotelev1">&gt; All runs start at 2 am on the day listed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =====================
</span><br>
<span class="quotelev1">&gt; BigRed
</span><br>
<span class="quotelev1">&gt; =====================
</span><br>
<span class="quotelev1">&gt; Nightly
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; - Branches: trunk, v1.2
</span><br>
<span class="quotelev1">&gt; - Configurations: All 64 and 32 bit builds
</span><br>
<span class="quotelev1">&gt;   * MX, LoadLeveler, No debug, gcc 3.x
</span><br>
<span class="quotelev1">&gt; - Test Suites
</span><br>
<span class="quotelev1">&gt;   * Trivial
</span><br>
<span class="quotelev1">&gt;   * IBM suite
</span><br>
<span class="quotelev1">&gt; - Processing Elements/tasks/cores/...
</span><br>
<span class="quotelev1">&gt;   * # &lt; 8 hours
</span><br>
<span class="quotelev1">&gt;   * 7 nodes/28 tasks [to start with]
</span><br>
<span class="quotelev1">&gt; - Runtime Parameters
</span><br>
<span class="quotelev1">&gt;   * PML ob1/BTL mx,sm,self
</span><br>
<span class="quotelev1">&gt;   * PML cm /MTL mx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Weekly: Monday 2am Submission
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt; - Branches: trunk, v1.2
</span><br>
<span class="quotelev1">&gt; - Configurations: All 64 and 32 bit builds
</span><br>
<span class="quotelev1">&gt;   * MX, LoadLeveler, No debug, gcc 3.x
</span><br>
<span class="quotelev1">&gt; - Test Suites
</span><br>
<span class="quotelev1">&gt;   * BLACS
</span><br>
<span class="quotelev1">&gt; - Processing Elements/tasks/cores/...
</span><br>
<span class="quotelev1">&gt;   * # &lt; 1 days
</span><br>
<span class="quotelev1">&gt;   * 32 nodes/128 tasks [to start with]
</span><br>
<span class="quotelev1">&gt; - Runtime Parameters
</span><br>
<span class="quotelev1">&gt;   * PML ob1/BTL mx,sm,self
</span><br>
<span class="quotelev1">&gt;   * PML cm /MTL mx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Weekly: Wednesday 2am Submission
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt; - Branches: trunk, v1.2
</span><br>
<span class="quotelev1">&gt; - Configurations: All 64 and 32 bit builds
</span><br>
<span class="quotelev1">&gt;   * MX, LoadLeveler, No debug, gcc 3.x
</span><br>
<span class="quotelev1">&gt; - Test Suites
</span><br>
<span class="quotelev1">&gt;   * IMB
</span><br>
<span class="quotelev1">&gt; - Processing Elements/tasks/cores/...
</span><br>
<span class="quotelev1">&gt;   * # &lt; 1 days
</span><br>
<span class="quotelev1">&gt;   * 32 nodes/128 tasks [to start with]
</span><br>
<span class="quotelev1">&gt; - Runtime Parameters
</span><br>
<span class="quotelev1">&gt;   * PML ob1/BTL mx,sm,self
</span><br>
<span class="quotelev1">&gt;   * PML cm /MTL mx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Weekly: Saturday 2am Submission
</span><br>
<span class="quotelev1">&gt; ----------------------------------
</span><br>
<span class="quotelev1">&gt; - Branches: trunk, v1.2
</span><br>
<span class="quotelev1">&gt; - Configurations: All 64 and 32 bit builds
</span><br>
<span class="quotelev1">&gt;   * MX, LoadLeveler, No debug, gcc 3.x
</span><br>
<span class="quotelev1">&gt;   * MX, LoadLeveler, No debug, gcc 4.x
</span><br>
<span class="quotelev1">&gt;     - Trivial only
</span><br>
<span class="quotelev1">&gt;   * MX, LoadLeveler, No debug, IBM compiler
</span><br>
<span class="quotelev1">&gt;     - Trivial only
</span><br>
<span class="quotelev1">&gt; - Test Suites
</span><br>
<span class="quotelev1">&gt;   * Intel
</span><br>
<span class="quotelev1">&gt; - Processing Elements/tasks/cores/...
</span><br>
<span class="quotelev1">&gt;   * # &lt; 1 days
</span><br>
<span class="quotelev1">&gt;   * 32 nodes/128 tasks [to start with]
</span><br>
<span class="quotelev1">&gt; - Runtime Parameters
</span><br>
<span class="quotelev1">&gt;   * PML ob1/BTL mx,sm,self
</span><br>
<span class="quotelev1">&gt;   * PML cm /MTL mx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =====================
</span><br>
<span class="quotelev1">&gt; Odin (128 dual processor machines)
</span><br>
<span class="quotelev1">&gt; =====================
</span><br>
<span class="quotelev1">&gt; Nightly
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; - Branches: trunk, v1.2
</span><br>
<span class="quotelev1">&gt; - Configurations: All 64 and 32 bit builds
</span><br>
<span class="quotelev1">&gt;   * No debug, gcc 3.x
</span><br>
<span class="quotelev1">&gt; - Test Suites
</span><br>
<span class="quotelev1">&gt;   * Trivial
</span><br>
<span class="quotelev1">&gt;   * IBM suite
</span><br>
<span class="quotelev1">&gt;   * Intel
</span><br>
<span class="quotelev1">&gt; - Processing Elements/tasks/cores/...
</span><br>
<span class="quotelev1">&gt;   * # &lt; 8 hours
</span><br>
<span class="quotelev1">&gt;   * 8 nodes/16 tasks [to start with]
</span><br>
<span class="quotelev1">&gt; - Runtime Parameters
</span><br>
<span class="quotelev1">&gt;   * PML ob1/BTL tcp,sm,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Weekly: Tuesday 2am Submission
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt; - Branches: trunk, v1.2
</span><br>
<span class="quotelev1">&gt; - Configurations: All 64 and 32 bit builds
</span><br>
<span class="quotelev1">&gt;   * No debug, gcc 3.x
</span><br>
<span class="quotelev1">&gt; - Test Suites
</span><br>
<span class="quotelev1">&gt;   * IMB
</span><br>
<span class="quotelev1">&gt; - Processing Elements/tasks/cores/...
</span><br>
<span class="quotelev1">&gt;   * # &lt; 1 day
</span><br>
<span class="quotelev1">&gt;   * 32 nodes/64 tasks
</span><br>
<span class="quotelev1">&gt; - Runtime Parameters
</span><br>
<span class="quotelev1">&gt;   * PML ob1/BTL tcp,sm,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Weekly: Thursday 2am Submission
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt; - Branches: trunk, v1.2
</span><br>
<span class="quotelev1">&gt; - Configurations: All 64 and 32 bit builds
</span><br>
<span class="quotelev1">&gt;   * No debug, gcc 3.x
</span><br>
<span class="quotelev1">&gt; - Test Suites
</span><br>
<span class="quotelev1">&gt;   * BLACS
</span><br>
<span class="quotelev1">&gt; - Processing Elements/tasks/cores/...
</span><br>
<span class="quotelev1">&gt;   * # &lt; 1 day
</span><br>
<span class="quotelev1">&gt;   * 32 nodes/64 tasks
</span><br>
<span class="quotelev1">&gt; - Runtime Parameters
</span><br>
<span class="quotelev1">&gt;   * PML ob1/BTL tcp,sm,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Weekly: Saturday 2am Submission
</span><br>
<span class="quotelev1">&gt; ----------------------------------
</span><br>
<span class="quotelev1">&gt; - Branches: trunk, v1.2
</span><br>
<span class="quotelev1">&gt; - Configurations: All 64 and 32 bit builds
</span><br>
<span class="quotelev1">&gt;   * No debug, gcc 3.x
</span><br>
<span class="quotelev1">&gt; - Test Suites
</span><br>
<span class="quotelev1">&gt;   * Intel
</span><br>
<span class="quotelev1">&gt; - Processing Elements/tasks/cores/...
</span><br>
<span class="quotelev1">&gt;   * # &lt; 1 day
</span><br>
<span class="quotelev1">&gt;   * 32 nodes/64 tasks
</span><br>
<span class="quotelev1">&gt; - Runtime Parameters
</span><br>
<span class="quotelev1">&gt;   * PML ob1/BTL tcp,sm,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =====================
</span><br>
<span class="quotelev1">&gt; Thor (8 dual processor nodes)
</span><br>
<span class="quotelev1">&gt; =====================
</span><br>
<span class="quotelev1">&gt; Nightly
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; - Branches: trunk, v1.2
</span><br>
<span class="quotelev1">&gt; - Configurations: All 32 bit builds
</span><br>
<span class="quotelev1">&gt;   * No debug, gcc 3.x
</span><br>
<span class="quotelev1">&gt;   * No debug, ICC
</span><br>
<span class="quotelev1">&gt; - Test Suites
</span><br>
<span class="quotelev1">&gt;   * Trivial
</span><br>
<span class="quotelev1">&gt;   * IBM suite
</span><br>
<span class="quotelev1">&gt;   * Intel
</span><br>
<span class="quotelev1">&gt; - Processing Elements/tasks/cores/...
</span><br>
<span class="quotelev1">&gt;   * # &lt; 8 hours
</span><br>
<span class="quotelev1">&gt;   * 4 nodes/8 tasks
</span><br>
<span class="quotelev1">&gt; - Runtime Parameters
</span><br>
<span class="quotelev1">&gt;   * PML ob1/BTL mx,mvapi,tcp,sm,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Weekly: Saturday 2am Submission
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt; - Branches: trunk, v1.2
</span><br>
<span class="quotelev1">&gt; - Configurations: All 32 bit builds
</span><br>
<span class="quotelev1">&gt;   * No debug, gcc 3.x
</span><br>
<span class="quotelev1">&gt;   * No debug, ICC
</span><br>
<span class="quotelev1">&gt; - Test Suites
</span><br>
<span class="quotelev1">&gt;   * BLACS
</span><br>
<span class="quotelev1">&gt; - Processing Elements/tasks/cores/...
</span><br>
<span class="quotelev1">&gt;   * # &lt; 1 day
</span><br>
<span class="quotelev1">&gt;   * 4 nodes/8 tasks
</span><br>
<span class="quotelev1">&gt; - Runtime Parameters
</span><br>
<span class="quotelev1">&gt;   * PML ob1/BTL mx,mvapi,tcp,sm,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Weekly: Sunday 2am Submission
</span><br>
<span class="quotelev1">&gt; ----------------------------------
</span><br>
<span class="quotelev1">&gt; - Branches: trunk, v1.2
</span><br>
<span class="quotelev1">&gt; - Configurations: All 32 bit builds
</span><br>
<span class="quotelev1">&gt;   * No debug, gcc 3.x
</span><br>
<span class="quotelev1">&gt;   * No debug, ICC
</span><br>
<span class="quotelev1">&gt; - Test Suites
</span><br>
<span class="quotelev1">&gt;   * IMB
</span><br>
<span class="quotelev1">&gt; - Processing Elements/tasks/cores/...
</span><br>
<span class="quotelev1">&gt;   * # &lt; 1 day
</span><br>
<span class="quotelev1">&gt;   * 4 nodes/8 tasks
</span><br>
<span class="quotelev1">&gt; - Runtime Parameters
</span><br>
<span class="quotelev1">&gt;   * PML ob1/BTL mx,mvapi,tcp,sm,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =====================
</span><br>
<span class="quotelev1">&gt; Wotan (16 dual processor machine)
</span><br>
<span class="quotelev1">&gt; =====================
</span><br>
<span class="quotelev1">&gt; Nightly (Not Sat or Sun)
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; - Branches: trunk, v1.2
</span><br>
<span class="quotelev1">&gt; - Configurations: All 64 and 32 bit builds
</span><br>
<span class="quotelev1">&gt;   * No debug, gcc 3.x
</span><br>
<span class="quotelev1">&gt; - Test Suites
</span><br>
<span class="quotelev1">&gt;   * Trivial
</span><br>
<span class="quotelev1">&gt;   * IBM suite
</span><br>
<span class="quotelev1">&gt;   * Intel
</span><br>
<span class="quotelev1">&gt; - Processing Elements/tasks/cores/...
</span><br>
<span class="quotelev1">&gt;   * # &lt; 8 hours
</span><br>
<span class="quotelev1">&gt;   * 8 nodes/16 tasks
</span><br>
<span class="quotelev1">&gt; - Runtime Parameters
</span><br>
<span class="quotelev1">&gt;   * PML ob1/BTL mvapi,tcp,sm,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Weekly: Saturday 2am Submission
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt; - Branches: trunk, v1.2
</span><br>
<span class="quotelev1">&gt; - Configurations: All 64 and 32 bit builds
</span><br>
<span class="quotelev1">&gt;   * No debug, gcc 3.x
</span><br>
<span class="quotelev1">&gt; - Test Suites
</span><br>
<span class="quotelev1">&gt;   * IMB
</span><br>
<span class="quotelev1">&gt; - Processing Elements/tasks/cores/...
</span><br>
<span class="quotelev1">&gt;   * # &lt; 1 day
</span><br>
<span class="quotelev1">&gt;   * 16 nodes/32 tasks
</span><br>
<span class="quotelev1">&gt; - Runtime Parameters
</span><br>
<span class="quotelev1">&gt;   * PML ob1/BTL mvapi,tcp,sm,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Weekly: Sunday 2am Submission
</span><br>
<span class="quotelev1">&gt; ----------------------------------
</span><br>
<span class="quotelev1">&gt; - Branches: trunk, v1.2
</span><br>
<span class="quotelev1">&gt; - Configurations: All 64 and 32 bit builds
</span><br>
<span class="quotelev1">&gt;   * No debug, gcc 3.x
</span><br>
<span class="quotelev1">&gt; - Test Suites
</span><br>
<span class="quotelev1">&gt;   * BLACS
</span><br>
<span class="quotelev1">&gt; - Processing Elements/tasks/cores/...
</span><br>
<span class="quotelev1">&gt;   * # &lt; 1 day
</span><br>
<span class="quotelev1">&gt;   * 16 nodes/32 tasks
</span><br>
<span class="quotelev1">&gt; - Runtime Parameters
</span><br>
<span class="quotelev1">&gt;   * PML ob1/BTL mvapi,tcp,sm,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Questions? Thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 25, 2006, at 8:37 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Looking over Len's minutes from yesterday, I see that there was a
</span><br>
<span class="quotelev2">&gt; &gt;bunch of discussion about MTT on the OMPI teleconf yesterday, but
</span><br>
<span class="quotelev2">&gt; &gt;neither Ethan nor I were there to be a part of it.  :-\
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I couldn't make much sense from Len's minutes:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;-----
</span><br>
<span class="quotelev2">&gt; &gt;- having some trouble with MTT config, so will try to look more
</span><br>
<span class="quotelev2">&gt; &gt;   closely at some of these failures
</span><br>
<span class="quotelev2">&gt; &gt;- instead of e-mails sending them to the testing at MTT list
</span><br>
<span class="quotelev2">&gt; &gt;- plenty of internal IU e-mail, better to have one summary e-mail
</span><br>
<span class="quotelev2">&gt; &gt;   each day
</span><br>
<span class="quotelev2">&gt; &gt;- cannot send a summary
</span><br>
<span class="quotelev2">&gt; &gt;- send to mtt list and digest it
</span><br>
<span class="quotelev2">&gt; &gt;- or you can just file bugs
</span><br>
<span class="quotelev2">&gt; &gt;- can't use mtt web site to get the info
</span><br>
<span class="quotelev2">&gt; &gt;-----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;What is IU requesting?  Who can't use the MTT web site to get info?
</span><br>
<span class="quotelev2">&gt; &gt;What info are you trying to get / why can't you get it?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Should we have a teleconf about MTT stuff?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I'm on travel and unavailable all today, but have time tomorrow  
</span><br>
<span class="quotelev2">&gt; &gt;(Thurs).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;-- 
</span><br>
<span class="quotelev2">&gt; &gt;Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt;Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt; &gt;Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0159.php">Jeff Squyres: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>Previous message:</strong> <a href="0157.php">Josh Hursey: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>In reply to:</strong> <a href="0157.php">Josh Hursey: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0160.php">Josh Hursey: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>Reply:</strong> <a href="0160.php">Josh Hursey: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
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
