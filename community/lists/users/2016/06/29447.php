<?
$subject_val = "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 22:44:07 2016" -->
<!-- isoreceived="20160615024407" -->
<!-- sent="Tue, 14 Jun 2016 22:44:07 -0400" -->
<!-- isosent="20160615024407" -->
<!-- name="Mehmet Belgin" -->
<!-- email="mehmet.belgin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Big jump from OFED 1.5.4.1 -&amp;gt; recent (stable). Any suggestions?" -->
<!-- id="ead31e45-8eb2-3037-2771-30f20da80115_at_oit.gatech.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="001401d1c5e8$754a6770$5fdf3650$_at_soft-forge.com" -->
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
<strong>From:</strong> Mehmet Belgin (<em>mehmet.belgin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-14 22:44:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29448.php">Peter Kjellström: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Previous message:</strong> <a href="29446.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>In reply to:</strong> <a href="29429.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any	suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29454.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Reply:</strong> <a href="29454.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Llolsten,
<br>
<p>We are trying to keep up with the latest Open MPI as we can and keep a 
<br>
few old versions around (oldest is 1.6), with RHEL 6.5. The OFED upgrade 
<br>
will complement planned OS upgrades to the latest stable RHEL 6.x  
<br>
(probably 6.7, not sure if we will go with 6.8).
<br>
<p>Did you have to recompile Open MPI stacks or any of the existing MPI 
<br>
software?
<br>
<p>Thank you for your input!
<br>
<p>-Memo
<br>
<p><p><p>On 6/13/16 10:57 PM, Llolsten Kaonga wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Mehmet,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OFED is now around 3.18.2-rc2 and there is talk of an rc3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have used many different versions of OFED, and we are now running 
</span><br>
<span class="quotelev1">&gt; OFED 3.18.1 rc2 with the latest version of Open MPI with no trouble 
</span><br>
<span class="quotelev1">&gt; (OS is CentOS 7.2). What version of Open MPI are you planning to use? 
</span><br>
<span class="quotelev1">&gt; What OS, and version?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good luck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Llolsten
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*users [mailto:users-bounces_at_[hidden]] *On Behalf Of *Mehmet 
</span><br>
<span class="quotelev1">&gt; Belgin
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, June 13, 2016 7:05 PM
</span><br>
<span class="quotelev1">&gt; *To:* users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). 
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have not upgraded our OFED stack for a very long time, and still 
</span><br>
<span class="quotelev1">&gt; running on an ancient version (1.5.4.1, yeah we know). We are now 
</span><br>
<span class="quotelev1">&gt; considering a big jump from this version to a tested and stable recent 
</span><br>
<span class="quotelev1">&gt; version and would really appreciate any suggestions from the community.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In particular, is there a particular recent OFED version that's known 
</span><br>
<span class="quotelev1">&gt; to work well with Open MPI? Any versions we need to avoid? Do we need 
</span><br>
<span class="quotelev1">&gt; to recompile existing Open MPI stacks? How about existing scientific 
</span><br>
<span class="quotelev1">&gt; software that are compiled with it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We will appreciate *any* suggestions/warnings (horror stories?) that 
</span><br>
<span class="quotelev1">&gt; you won't mind sharing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much in advance!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Mehmet
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================================
</span><br>
<span class="quotelev1">&gt; Mehmet Belgin, Ph.D. (mehmet.belgin_at_[hidden] &lt;mailto:mehmet.belgin_at_[hidden]&gt;)
</span><br>
<span class="quotelev1">&gt; Scientific Computing Consultant | OIT - Academic and Research Technologies
</span><br>
<span class="quotelev1">&gt; Georgia Institute of Technology
</span><br>
<span class="quotelev1">&gt; 258 4th Str NW, Rich Building, Room 326
</span><br>
<span class="quotelev1">&gt; Atlanta, GA  30332-0700
</span><br>
<span class="quotelev1">&gt; Office: (404) 385-0665
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29429.php">http://www.open-mpi.org/community/lists/users/2016/06/29429.php</a>
</span><br>
<p><pre>
-- 
=========================================
Mehmet Belgin, Ph.D. (mehmet.belgin_at_[hidden])
Scientific Computing Consultant | OIT - Academic and Research Technologies
Georgia Institute of Technology
258 4th St NW, Rich Building, Room 326
Atlanta, GA  30332-0700
Office: (404) 385-0665
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29447/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29448.php">Peter Kjellström: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Previous message:</strong> <a href="29446.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>In reply to:</strong> <a href="29429.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any	suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29454.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Reply:</strong> <a href="29454.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
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
