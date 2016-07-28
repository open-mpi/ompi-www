<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 17 17:43:09 2006" -->
<!-- isoreceived="20060717214309" -->
<!-- sent="Mon, 17 Jul 2006 17:43:12 -0400" -->
<!-- isosent="20060717214312" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] adding LWP::UserAgent to MTT repository" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFBB4B27_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[MTT users] adding LWP::UserAgent to MTT repository" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-17 17:43:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0043.php">Ethan Mallove: "[MTT users] perfbase.php not slurping test run data"</a>
<li><strong>Previous message:</strong> <a href="0041.php">Ethan Mallove: "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>Maybe in reply to:</strong> <a href="0039.php">Ethan Mallove: "[MTT users] adding LWP::UserAgent to MTT repository"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would think it be acceptable that if LWP is not found, try to fail
<br>
over to some other mechanism (wget, etc.).
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: mtt-users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
</span><br>
<span class="quotelev1">&gt; Sent: Monday, July 17, 2006 10:45 AM
</span><br>
<span class="quotelev1">&gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev1">&gt; Subject: Re: [MTT users] adding LWP::UserAgent to MTT repository
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres (jsquyres) wrote On 07/17/06 10:13,:
</span><br>
<span class="quotelev2">&gt; &gt; It might be ok to adapt the module to try to &quot;include&quot; it 
</span><br>
<span class="quotelev1">&gt; (vs. requiring
</span><br>
<span class="quotelev2">&gt; &gt; it) and if it's not there, fail over.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Make sense? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you mean adapt Perfbase.pm fail over if it can't find 
</span><br>
<span class="quotelev1">&gt; LWP::UserAgent?  Or
</span><br>
<span class="quotelev1">&gt; adapt LWP::UserAgent to failover if it can't find 
</span><br>
<span class="quotelev1">&gt; HTML::HeadParser (which I
</span><br>
<span class="quotelev1">&gt; think needs Parser.so). Or both?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt;From: mtt-users-bounces_at_[hidden] 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;[mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Sent: Monday, July 17, 2006 9:46 AM
</span><br>
<span class="quotelev3">&gt; &gt;&gt;To: mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Subject: [MTT users] adding LWP::UserAgent to MTT repository
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I thought it would be nice to not require users to have 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;LWP::UserAgent installed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (like we don't require them to have Config::IniFiles - it's 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;part of the MTT
</span><br>
<span class="quotelev3">&gt; &gt;&gt;repository), since LWP::UserAgent isn't listed as a standard module
</span><br>
<span class="quotelev3">&gt; &gt;&gt;(<a href="https://www.linuxnotes.net/perlcd/prog/ch32_01.htm">https://www.linuxnotes.net/perlcd/prog/ch32_01.htm</a>). 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;However, LWP::UserAgent
</span><br>
<span class="quotelev3">&gt; &gt;&gt;uses a platform dependent binary called Parser.so which makes 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;the addition of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;LWP::UserAgent to the repos slightly more involved. E.g., 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;putting Parser.so in
</span><br>
<span class="quotelev3">&gt; &gt;&gt;sparc, i386, etc. directories and getting UserAgent to look 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;for them in the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;right place. For now, LWP::UserAgent can be put in a 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;centralized location that
</span><br>
<span class="quotelev3">&gt; &gt;&gt;the PERLLIB env var can point to.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-Ethan
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0043.php">Ethan Mallove: "[MTT users] perfbase.php not slurping test run data"</a>
<li><strong>Previous message:</strong> <a href="0041.php">Ethan Mallove: "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>Maybe in reply to:</strong> <a href="0039.php">Ethan Mallove: "[MTT users] adding LWP::UserAgent to MTT repository"</a>
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
