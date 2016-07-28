<?
$subject_val = "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 09:01:25 2016" -->
<!-- isoreceived="20160615130125" -->
<!-- sent="Wed, 15 Jun 2016 09:01:07 -0400" -->
<!-- isosent="20160615130107" -->
<!-- name="Llolsten Kaonga" -->
<!-- email="llk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Big jump from OFED 1.5.4.1 -&amp;gt; recent (stable). Any suggestions?" -->
<!-- id="003001d1c705$fb87f410$f297dc30$_at_soft-forge.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ead31e45-8eb2-3037-2771-30f20da80115_at_oit.gatech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?<br>
<strong>From:</strong> Llolsten Kaonga (<em>llk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 09:01:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29455.php">Sasso, John (GE Power, Non-GE): "[OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Previous message:</strong> <a href="29453.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any	suggestions?"</a>
<li><strong>In reply to:</strong> <a href="29447.php">Mehmet Belgin: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29430.php">Peter Kjellstr&#195;&#182;m: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Mehmet,
<br>
<p>&nbsp;
<br>
<p>When we do OS installs, our lab usually just downloads the latest stable
<br>
version of Open MPI. We try not to move versions of Open MPI we may already
<br>
have lying around - mostly because we don't trust our book-keeping
<br>
abilities. 
<br>
<p>&nbsp;
<br>
<p>We have not had any trouble using this approach but it may not be the best
<br>
one for you or others. Our test clusters are generally quite small (8
<br>
servers or maybe a few more tops).
<br>
<p>&nbsp;
<br>
<p>I thank you.
<br>
<p><pre>
--
Llolsten
 
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Mehmet Belgin
Sent: Tuesday, June 14, 2016 10:44 PM
To: users_at_[hidden]
Subject: Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any
suggestions?
 
Hi Llolsten,
We are trying to keep up with the latest Open MPI as we can and keep a few
old versions around (oldest is 1.6), with RHEL 6.5. The OFED upgrade will
complement planned OS upgrades to the latest stable RHEL 6.x  (probably 6.7,
not sure if we will go with 6.8).
Did you have to recompile Open MPI stacks or any of the existing MPI
software? 
Thank you for your input! 
-Memo
 
 
On 6/13/16 10:57 PM, Llolsten Kaonga wrote:
Hello Mehmet,
 
OFED is now around 3.18.2-rc2 and there is talk of an rc3.
 
We have used many different versions of OFED, and we are now running OFED
3.18.1 rc2 with the latest version of Open MPI with no trouble (OS is CentOS
7.2). What version of Open MPI are you planning to use? What OS, and
version?
 
Good luck.
--
Llolsten
 
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Mehmet Belgin
Sent: Monday, June 13, 2016 7:05 PM
To: users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; 
Subject: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any
suggestions?
 
Greetings! 
We have not upgraded our OFED stack for a very long time, and still running
on an ancient version (1.5.4.1, yeah we know). We are now considering a big
jump from this version to a tested and stable recent version and would
really appreciate any suggestions from the community. 
In particular, is there a particular recent OFED version that's known to
work well with Open MPI? Any versions we need to avoid? Do we need to
recompile existing Open MPI stacks? How about existing scientific software
that are compiled with it? 
We will appreciate *any* suggestions/warnings (horror stories?) that you
won't mind sharing.
Thank you very much in advance!
-Mehmet
 
-- 
=========================================
Mehmet Belgin, Ph.D. (mehmet.belgin_at_[hidden]
&lt;mailto:mehmet.belgin_at_[hidden]&gt; )
Scientific Computing Consultant | OIT - Academic and Research Technologies
Georgia Institute of Technology
258 4th Str NW, Rich Building, Room 326
Atlanta, GA  30332-0700
Office: (404) 385-0665
_______________________________________________
users mailing list
users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; 
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post:
<a href="http://www.open-mpi.org/community/lists/users/2016/06/29429.php">http://www.open-mpi.org/community/lists/users/2016/06/29429.php</a>
-- 
=========================================
Mehmet Belgin, Ph.D. (mehmet.belgin_at_[hidden]
&lt;mailto:mehmet.belgin_at_[hidden]&gt; )
Scientific Computing Consultant | OIT - Academic and Research Technologies
Georgia Institute of Technology
258 4th St NW, Rich Building, Room 326
Atlanta, GA  30332-0700
Office: (404) 385-0665
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29454/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29455.php">Sasso, John (GE Power, Non-GE): "[OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Previous message:</strong> <a href="29453.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any	suggestions?"</a>
<li><strong>In reply to:</strong> <a href="29447.php">Mehmet Belgin: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29430.php">Peter Kjellstr&#195;&#182;m: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
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
