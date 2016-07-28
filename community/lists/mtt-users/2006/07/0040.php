<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 17 10:13:21 2006" -->
<!-- isoreceived="20060717141321" -->
<!-- sent="Mon, 17 Jul 2006 10:13:20 -0400" -->
<!-- isosent="20060717141320" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] adding LWP::UserAgent to MTT repository" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFBB47FA_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-07-17 10:13:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0041.php">Ethan Mallove: "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>Previous message:</strong> <a href="0039.php">Ethan Mallove: "[MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>Maybe in reply to:</strong> <a href="0039.php">Ethan Mallove: "[MTT users] adding LWP::UserAgent to MTT repository"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0041.php">Ethan Mallove: "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>Reply:</strong> <a href="0041.php">Ethan Mallove: "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It might be ok to adapt the module to try to &quot;include&quot; it (vs. requiring
<br>
it) and if it's not there, fail over.
<br>
<p>Make sense? 
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: mtt-users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
</span><br>
<span class="quotelev1">&gt; Sent: Monday, July 17, 2006 9:46 AM
</span><br>
<span class="quotelev1">&gt; To: mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [MTT users] adding LWP::UserAgent to MTT repository
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought it would be nice to not require users to have 
</span><br>
<span class="quotelev1">&gt; LWP::UserAgent installed
</span><br>
<span class="quotelev1">&gt;  (like we don't require them to have Config::IniFiles - it's 
</span><br>
<span class="quotelev1">&gt; part of the MTT
</span><br>
<span class="quotelev1">&gt; repository), since LWP::UserAgent isn't listed as a standard module
</span><br>
<span class="quotelev1">&gt; (<a href="https://www.linuxnotes.net/perlcd/prog/ch32_01.htm">https://www.linuxnotes.net/perlcd/prog/ch32_01.htm</a>). 
</span><br>
<span class="quotelev1">&gt; However, LWP::UserAgent
</span><br>
<span class="quotelev1">&gt; uses a platform dependent binary called Parser.so which makes 
</span><br>
<span class="quotelev1">&gt; the addition of
</span><br>
<span class="quotelev1">&gt; LWP::UserAgent to the repos slightly more involved. E.g., 
</span><br>
<span class="quotelev1">&gt; putting Parser.so in
</span><br>
<span class="quotelev1">&gt; sparc, i386, etc. directories and getting UserAgent to look 
</span><br>
<span class="quotelev1">&gt; for them in the
</span><br>
<span class="quotelev1">&gt; right place. For now, LWP::UserAgent can be put in a 
</span><br>
<span class="quotelev1">&gt; centralized location that
</span><br>
<span class="quotelev1">&gt; the PERLLIB env var can point to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
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
<li><strong>Next message:</strong> <a href="0041.php">Ethan Mallove: "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>Previous message:</strong> <a href="0039.php">Ethan Mallove: "[MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>Maybe in reply to:</strong> <a href="0039.php">Ethan Mallove: "[MTT users] adding LWP::UserAgent to MTT repository"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0041.php">Ethan Mallove: "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>Reply:</strong> <a href="0041.php">Ethan Mallove: "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
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
