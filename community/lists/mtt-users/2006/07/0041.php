<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 17 10:45:16 2006" -->
<!-- isoreceived="20060717144516" -->
<!-- sent="Mon, 17 Jul 2006 10:45:14 -0400" -->
<!-- isosent="20060717144514" -->
<!-- name="Ethan Mallove" -->
<!-- email="Ethan.Mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] adding LWP::UserAgent to MTT repository" -->
<!-- id="44BBA27A.1090900_at_Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFBB47FA_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>Ethan.Mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-17 10:45:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0042.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>Previous message:</strong> <a href="0040.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>In reply to:</strong> <a href="0040.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0042.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres (jsquyres) wrote On 07/17/06 10:13,:
<br>
<span class="quotelev1">&gt; It might be ok to adapt the module to try to &quot;include&quot; it (vs. requiring
</span><br>
<span class="quotelev1">&gt; it) and if it's not there, fail over.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Make sense? 
</span><br>
<p><p>Do you mean adapt Perfbase.pm fail over if it can't find LWP::UserAgent?  Or
<br>
adapt LWP::UserAgent to failover if it can't find HTML::HeadParser (which I
<br>
think needs Parser.so). Or both?
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;From: mtt-users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;[mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
</span><br>
<span class="quotelev2">&gt;&gt;Sent: Monday, July 17, 2006 9:46 AM
</span><br>
<span class="quotelev2">&gt;&gt;To: mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;Subject: [MTT users] adding LWP::UserAgent to MTT repository
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I thought it would be nice to not require users to have 
</span><br>
<span class="quotelev2">&gt;&gt;LWP::UserAgent installed
</span><br>
<span class="quotelev2">&gt;&gt; (like we don't require them to have Config::IniFiles - it's 
</span><br>
<span class="quotelev2">&gt;&gt;part of the MTT
</span><br>
<span class="quotelev2">&gt;&gt;repository), since LWP::UserAgent isn't listed as a standard module
</span><br>
<span class="quotelev2">&gt;&gt;(<a href="https://www.linuxnotes.net/perlcd/prog/ch32_01.htm">https://www.linuxnotes.net/perlcd/prog/ch32_01.htm</a>). 
</span><br>
<span class="quotelev2">&gt;&gt;However, LWP::UserAgent
</span><br>
<span class="quotelev2">&gt;&gt;uses a platform dependent binary called Parser.so which makes 
</span><br>
<span class="quotelev2">&gt;&gt;the addition of
</span><br>
<span class="quotelev2">&gt;&gt;LWP::UserAgent to the repos slightly more involved. E.g., 
</span><br>
<span class="quotelev2">&gt;&gt;putting Parser.so in
</span><br>
<span class="quotelev2">&gt;&gt;sparc, i386, etc. directories and getting UserAgent to look 
</span><br>
<span class="quotelev2">&gt;&gt;for them in the
</span><br>
<span class="quotelev2">&gt;&gt;right place. For now, LWP::UserAgent can be put in a 
</span><br>
<span class="quotelev2">&gt;&gt;centralized location that
</span><br>
<span class="quotelev2">&gt;&gt;the PERLLIB env var can point to.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0042.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>Previous message:</strong> <a href="0040.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>In reply to:</strong> <a href="0040.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0042.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
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
