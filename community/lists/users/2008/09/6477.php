<?
$subject_val = "Re: [OMPI users] Warnings in Ubuntu Hardy";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  8 13:46:32 2008" -->
<!-- isoreceived="20080908174632" -->
<!-- sent="Mon, 8 Sep 2008 13:46:26 -0400" -->
<!-- isosent="20080908174626" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Warnings in Ubuntu Hardy" -->
<!-- id="2D481116-F94B-4F9D-B3B4-975F416F643E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48C56314.9080304_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Warnings in Ubuntu Hardy<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-08 13:46:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6478.php">Prasanna Ranganathan: "[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6476.php">Eugene Loh: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>In reply to:</strong> <a href="6476.php">Eugene Loh: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The libibverbs message is from libibverbs; you'll need to talk to  
<br>
Roland about that on the OpenFabrics list.  The help message between  
<br>
the lines of ---- is ours, though.
<br>
<p>The real issue is something that came up a month or two on the OMPI  
<br>
devel list: libibverbs is now being included in main-line Linux  
<br>
distros.  Hence, the library is found and used (and OMPI's openib BTL  
<br>
is installed) even though the user has no OpenFabrics devices on their  
<br>
system.  Prior to the wide-spread adoption of libibverbs, we assumed  
<br>
that if you had libibverbs, it was worthy of a warning if we didn't  
<br>
find any devices.  But this assumption is no longer true.  So we now  
<br>
have a better check to see if the kernel has recognized if any  
<br>
OpenFabrics devices are present.  Simply put: neither warning message  
<br>
should now be emitted if you have no OF devices.
<br>
<p>This new test was included in v1.2.7, so hopefully, at least this  
<br>
particular issue will go away for normal users.
<br>
<p>As for better help messages, I'm all for it.  In some places, our help  
<br>
messages are very good.  In other places, they are not.  An audit of  
<br>
our *-help.txt files would be a great start.  Deeper work is also  
<br>
possible (we have some &quot;help message&quot; designs on tap from the recent  
<br>
Louisville OMPI engineering meeting to make things a little better --  
<br>
it's a surprisingly complex problem to know exactly when it is  
<br>
suitable to emit a warning!).
<br>
<p>As for Dirk's specific advice, it's actually Debian-specific (and  
<br>
Debian derivatives, such as Ubuntu).  Dirk is the OMPI package  
<br>
maintainer for Debian; he added the commented-out line in the default  
<br>
params file as a workaround before 1.2.7 was released and we had a  
<br>
better test for devices included in the code itself.
<br>
<p>That was a long answer to a short question; I hope it made sense.  :-)
<br>
<p><p><p>On Sep 8, 2008, at 1:38 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Dirk Eddelbuettel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 6 September 2008 at 22:13, Davi Vercillo C. Garcia (    ) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; | I'm trying to execute some programs in my notebook (Ubuntu 8.04)  
</span><br>
<span class="quotelev2">&gt;&gt; using
</span><br>
<span class="quotelev2">&gt;&gt; | OpenMPI, and I always get a warning message like:
</span><br>
<span class="quotelev2">&gt;&gt; | | libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt; |  
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; | [0,0,0]: OpenIB on host juliana was unable to find any HCAs.
</span><br>
<span class="quotelev2">&gt;&gt; | Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; | lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; |  
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; | | What is this ?!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Uncomment this in /etc/openmpi/openmpi-mca-params.conf:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Disable the use of InfiniBand
</span><br>
<span class="quotelev2">&gt;&gt; btl = ^openib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which is the default in newer packages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Is there some way the message could have been written so users  
</span><br>
<span class="quotelev1">&gt; wouldn't have to solicit the alias for help?  I don't know if the  
</span><br>
<span class="quotelev1">&gt; diagnosibility of error messages has gotten much attention in the  
</span><br>
<span class="quotelev1">&gt; Open MPI community, but I would think messages should be  
</span><br>
<span class="quotelev1">&gt; understandable and suggest user actions in terms that a typical user  
</span><br>
<span class="quotelev1">&gt; would understand.  In this case, the message seems rather readable  
</span><br>
<span class="quotelev1">&gt; to me, but leaves the user far short of the seemingly sensible  
</span><br>
<span class="quotelev1">&gt; advice that Dirk provides.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6478.php">Prasanna Ranganathan: "[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6476.php">Eugene Loh: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>In reply to:</strong> <a href="6476.php">Eugene Loh: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
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
