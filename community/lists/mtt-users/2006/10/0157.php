<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 25 10:37:40 2006" -->
<!-- isoreceived="20061025143740" -->
<!-- sent="Wed, 25 Oct 2006 10:37:31 -0400" -->
<!-- isosent="20061025143731" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT users] Discussion on teleconf yesterday?" -->
<!-- id="74B0ACE1-FB93-40BF-89A1-D2F4E09BBED6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7B71866D-6A68-42AB-9A1C-AD5C8F3D6C56_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-25 10:37:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0158.php">Ethan Mallove: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>Previous message:</strong> <a href="0156.php">Jeff Squyres: "[MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>In reply to:</strong> <a href="0156.php">Jeff Squyres: "[MTT users] Discussion on teleconf yesterday?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0158.php">Ethan Mallove: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>Reply:</strong> <a href="0158.php">Ethan Mallove: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>Reply:</strong> <a href="0159.php">Jeff Squyres: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The discussion started with the bug characteristics of v1.2 versus  
<br>
the trunk.
<br>
<p>It seemed from the call that IU was the only institution that can  
<br>
asses this via MTT as noone else spoke up. Since people were  
<br>
interested in seeing things that were breaking I suggested that I  
<br>
start forwarding the IU internal MTT reports (run nightly and weekly)  
<br>
to the testing_at_open-mpi.org. This was meet by Brain insisting that it  
<br>
would result in &quot;thousands&quot; of emails to the development list. I  
<br>
clarified that it is only 3 - 4 messages a day from IU. However if  
<br>
all other institutions do this then it would be a bunch of email  
<br>
(where 'a bunch' would still be less than 'thousands'). That's how we  
<br>
got to a 'we need a single summary presented to the group' comment.  
<br>
It should be noted that we brought up IU sending to the 'testing_at_open- 
<br>
mpi.org' list as a bandaid until MTT could do it better.
<br>
<p>This single summary can be email or a webpage that people can check.  
<br>
Rich said that he would prefer a webpage, and noone else really had a  
<br>
comment. That got us talking about the current summary page that MTT  
<br>
generates. Tim M mentioned that the current website is difficult to  
<br>
figure out how to get the answers you need. I agree, it is hard  
<br>
[usability] for someone to go to the summary page and answer the  
<br>
question &quot;So what failed from IU last night, and how does that differ  
<br>
from Yesterday -- e.g., what regressed and progressed yesterday at  
<br>
IU?&quot;. The website is flexible enough to due it, but having a couple  
<br>
of basic summary pages would be nice for basic users. What that  
<br>
should look like we can discuss further.
<br>
<p>The IU group really likes the emails that we currently generate. A  
<br>
plain-text summary of the previous run. I posted copies on the MTT  
<br>
bug tracker here:
<br>
<a href="http://svn.open-mpi.org/trac/mtt/ticket/61">http://svn.open-mpi.org/trac/mtt/ticket/61</a>
<br>
Currently we have not put the work in to aggregate the runs, so for  
<br>
each ini file that we run we get 1 email to the IU group. This is  
<br>
fine for the moment, but as we add the rest of the clusters and  
<br>
dimensions in the testing matrix we will need MTT to aggregate the  
<br>
results for us and generate such an email.
<br>
<p>So I think the general feel of the discussion is that we need the  
<br>
following from MTT:
<br>
&nbsp;&nbsp;- A 'basic' summary page providing answers to some general  
<br>
frequently asked queries. The current interface is too advanced for  
<br>
the current users.
<br>
&nbsp;&nbsp;- A summary email [in plain-text preferably] similar to the one  
<br>
that IU generated showing an aggregation of the previous nights  
<br>
results for (a) all reporters (b) my institution [so I can track them  
<br>
down and file bugs].
<br>
&nbsp;&nbsp;- 1 email a day on the previous nights testing results.
<br>
<p>Some relevant bugs currently in existence:
<br>
<a href="http://svn.open-mpi.org/trac/mtt/ticket/92">http://svn.open-mpi.org/trac/mtt/ticket/92</a>
<br>
<a href="http://svn.open-mpi.org/trac/mtt/ticket/61">http://svn.open-mpi.org/trac/mtt/ticket/61</a>
<br>
<a href="http://svn.open-mpi.org/trac/mtt/ticket/94">http://svn.open-mpi.org/trac/mtt/ticket/94</a>
<br>
<p><p>The other concern is that given the frequency of testing as bugs  
<br>
appear from the testing someone needs to make sure the bug tracker is  
<br>
updated. I think the group is unclear about how this is done. Meaning  
<br>
when a MTT identifies a test as failed whom is responsible for  
<br>
putting the bug in the bug tracker?
<br>
The obvious solution is the institution that identified the bug.  
<br>
[Warning: My opinion] But then that becomes unwieldy for IU since we  
<br>
have a large testing matrix, and would need to commit someone to  
<br>
doing this everyday (and it may take all day to properly track a set  
<br>
of bugs). Also this kind of punishes an institution for testing more  
<br>
instead of providing incentive to test.
<br>
<p>------ Page Break -- Context switch ------
<br>
<p>In case you all want to know what we are doing here at IU. I attached  
<br>
to this email our planed MTT testing matrix. Currently we have BigRed  
<br>
and Odin running the complete matrix less the BLACS tests. Wotan and  
<br>
Thor will come online as we get more resources to support them.
<br>
<p>In order to do such a complex testing matrix we have various .ini  
<br>
files that we use. And since some of the dimensions in the matrix are  
<br>
large we break some of the tests into a couple .ini files that are  
<br>
submitted concurrently to have them run in a reasonable time.
<br>
<p><p>

<br><p>
<p>Questions? Thoughts?
<br>
<p>-- Josh
<br>
<p>On Oct 25, 2006, at 8:37 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Looking over Len's minutes from yesterday, I see that there was a
</span><br>
<span class="quotelev1">&gt; bunch of discussion about MTT on the OMPI teleconf yesterday, but
</span><br>
<span class="quotelev1">&gt; neither Ethan nor I were there to be a part of it.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I couldn't make much sense from Len's minutes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; - having some trouble with MTT config, so will try to look more
</span><br>
<span class="quotelev1">&gt;    closely at some of these failures
</span><br>
<span class="quotelev1">&gt; - instead of e-mails sending them to the testing at MTT list
</span><br>
<span class="quotelev1">&gt; - plenty of internal IU e-mail, better to have one summary e-mail
</span><br>
<span class="quotelev1">&gt;    each day
</span><br>
<span class="quotelev1">&gt; - cannot send a summary
</span><br>
<span class="quotelev1">&gt; - send to mtt list and digest it
</span><br>
<span class="quotelev1">&gt; - or you can just file bugs
</span><br>
<span class="quotelev1">&gt; - can't use mtt web site to get the info
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is IU requesting?  Who can't use the MTT web site to get info?
</span><br>
<span class="quotelev1">&gt; What info are you trying to get / why can't you get it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should we have a teleconf about MTT stuff?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm on travel and unavailable all today, but have time tomorrow  
</span><br>
<span class="quotelev1">&gt; (Thurs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0157/MTT-testing-matrix.txt">MTT-testing-matrix.txt</a>
</ul>
<!-- attachment="MTT-testing-matrix.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0158.php">Ethan Mallove: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>Previous message:</strong> <a href="0156.php">Jeff Squyres: "[MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>In reply to:</strong> <a href="0156.php">Jeff Squyres: "[MTT users] Discussion on teleconf yesterday?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0158.php">Ethan Mallove: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>Reply:</strong> <a href="0158.php">Ethan Mallove: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>Reply:</strong> <a href="0159.php">Jeff Squyres: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
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
