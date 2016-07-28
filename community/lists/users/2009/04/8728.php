<?
$subject_val = "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  2 03:41:02 2009" -->
<!-- isoreceived="20090402074102" -->
<!-- sent="Thu, 2 Apr 2009 15:40:57 +0800" -->
<!-- isosent="20090402074057" -->
<!-- name="Guanyinzhu" -->
<!-- email="buptzhugy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?" -->
<!-- id="BLU114-W37D4E26296F1971E1D5FC0A5880_at_phx.gbl" -->
<!-- charset="gb2312" -->
<!-- inreplyto="BLU114-W35A610F9F522EFC745C465A5880_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?<br>
<strong>From:</strong> Guanyinzhu (<em>buptzhugy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-02 03:40:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8729.php">Nicolas Deladerriere: "Re: [OMPI users] Open MPI 2009 released"</a>
<li><strong>Previous message:</strong> <a href="8727.php">Guanyinzhu: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>In reply to:</strong> <a href="8727.php">Guanyinzhu: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Problem resolved,  I set ConnectTimeout N in /etc/ssh/ssd_config ,  mpirun exit after N seconds.
<br>
<p>&nbsp;
<br>
<p>thanks a lot!
<br>
&nbsp;
<br>
<p><p>From: buptzhugy_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Date: Thu, 2 Apr 2009 11:05:25 +0800
<br>
Subject: Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?
<br>
<p><p><p>thank you very much!
<br>
&nbsp;
<br>
The option -mca orte_heartbeat_rate N is very usefull do detect failures like host or network failed or orted deamon killed for the running mpi job.
<br>
&nbsp;
<br>
I have another question:
<br>
I use ssh for openmpi remote connect, but sometimes a host doesn't answer ssh login request,  but answer ping, maybe because of os . If this &quot;error&quot; host in the hostfile, the &quot;mpirun -hostfile...&quot; command would hang even I set -mca orte_heartbeat_rate 5 , are there any other options to avoid this? 
<br>
&nbsp;
<br>
&nbsp;
<br>
thanks a lot!
<br>
&nbsp;
<br>
<p><p>From: rhc_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Date: Wed, 1 Apr 2009 07:34:46 -0600
<br>
Subject: Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?
<br>
<p>There is indeed a heartbeat mechanism you can use - it is &quot;off&quot; by default. You can set it to check every N seconds with: 
<br>
<p><p>-mca orte_heartbeat_rate N
<br>
<p><p>on your command line. Or if you want it to always run, add &quot;orte_heartbeat_rate = N&quot; to your default MCA param file. OMPI will declare the orted &quot;dead&quot; if two consecutive heartbeats are not seen.
<br>
<p><p>Let me know how it works for you - it hasn't been extensively tested, but has worked so far.
<br>
Ralph
<br>
<p><p><p>On Apr 1, 2009, at 6:07 AM, Guanyinzhu wrote:
<br>
<p>I mean killed the orted deamon process during the mpi job running , but the mpi job hang and could't notice one of it's rank failed.
<br>
&nbsp;
<br>
&nbsp;
<br>
<p>&nbsp;
<br>
<span class="quotelev1">&gt; Date: Wed, 1 Apr 2009 19:09:34 +0800
</span><br>
<span class="quotelev1">&gt; From: ml.jgmbenoit_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a firewall somewhere ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jerome
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Guanyinzhu wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi! 
</span><br>
<span class="quotelev2">&gt; &gt; I'm using OpenMPI 1.3 on ten nodes connected with Gigabit Ethernet on 
</span><br>
<span class="quotelev2">&gt; &gt; Redhat Linux x86_64. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I run a test like this: just killed the orted process and the job hung 
</span><br>
<span class="quotelev2">&gt; &gt; for a long time (hang for 2~3 hours then I killed the job).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have the follow questions:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; when network failed or host failed or orted deamon was killed by 
</span><br>
<span class="quotelev2">&gt; &gt; accident, How long would the running mpi job notice and exit? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Does OpenMPI support a heartbeat me chanism or how c! ould I fast 
</span><br>
<span class="quotelev2">&gt; &gt; detect the failture to avoid the mpi job hang?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; thanks a lot!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ?MSN????,??????????! ????! &lt;<a href="http://mobile.msn.com.cn/">http://mobile.msn.com.cn/</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p>&#184;&#252;&#182;&#224;&#200;&#200;&#192;&#177;&#215;&#202;&#209;&#182;&#190;&#161;&#212;&#218;&#208;&#194;&#176;&#230;MSN&#202;&#215;&#210;&#179;&#163;&#161; &#193;&#162;&#191;&#204;&#183;&#195;&#206;&#202;&#163;&#161; _______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p>&#184;&#252;&#182;&#224;&#200;&#200;&#192;&#177;&#215;&#202;&#209;&#182;&#190;&#161;&#212;&#218;&#208;&#194;&#176;&#230;MSN&#202;&#215;&#210;&#179;&#163;&#161; &#193;&#162;&#191;&#204;&#183;&#195;&#206;&#202;&#163;&#161;
<br>
_________________________________________________________________
<br>
&#180;&#242;&#185;&#164;&#163;&#172;&#213;&#245;&#199;&#174;&#163;&#172;&#194;&#242;&#183;&#191;&#215;&#211;&#163;&#172;&#191;&#236;&#192;&#180;MClub&#210;&#187;&#198;&#240;&#161;&#177;&#189;&#240;&#206;&#221;&#178;&#216;&#189;&#191;&#161;&#177;&#163;&#161;
<br>
<a href="http://club.msn.cn/?from=10">http://club.msn.cn/?from=10</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8728/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8729.php">Nicolas Deladerriere: "Re: [OMPI users] Open MPI 2009 released"</a>
<li><strong>Previous message:</strong> <a href="8727.php">Guanyinzhu: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>In reply to:</strong> <a href="8727.php">Guanyinzhu: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
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
