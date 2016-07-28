<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 30 10:36:00 2011" -->
<!-- isoreceived="20110930143600" -->
<!-- sent="Fri, 30 Sep 2011 09:35:38 -0500" -->
<!-- isosent="20110930143538" -->
<!-- name="Ed Blosch" -->
<!-- email="eblosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'" -->
<!-- id="000001cc7f7e$395ee930$ac1cbb90$_at_net" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="27C96DDE-C573-42F1-94A4-9F21FEDD42BD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'<br>
<strong>From:</strong> Ed Blosch (<em>eblosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-30 10:35:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17482.php">Jack Bryan: "[OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster"</a>
<li><strong>Previous message:</strong> <a href="17480.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="17480.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/17914.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/17914.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for all this information.
<br>
<p>Your diagnosis is totally right.  I actually sent e-mail yesterday but
<br>
apparently it never got through :&lt;
<br>
<p>It IS the MPI application that is failing to link, not OpenMPI itself; my
<br>
e-mail was not well written; sorry Brice.
<br>
<p>The situation is this:  I am trying to compile using an OpenMPI 1.5.4 that
<br>
was built to be rooted in /release, but it is not placed there yet
<br>
(testing); it is currently under /builds/release.  I have set OPAL_PREFIX in
<br>
the environment, with the intention of helping the compiler wrappers work
<br>
right. Under /release, I currently have OpenMPI 1.4.3, whereas the OpenMPI
<br>
under /builds/release is 1.5.4.
<br>
<p>What I am getting is this:  The mpif90 wrapper (under
<br>
/builds/release/openmpi/bin) puts -I/release instead of -I/builds/release.
<br>
But it includes -L/builds/release.
<br>
<p>So I'm getting headers from 1.4.3 when compiling, but the libmpi from 1.5.4
<br>
when linking.
<br>
<p>I did a quick &quot;move 1.4.3 out of the way and put 1.5.4 over to /release
<br>
where it belongs&quot; test, and my application did link without errors, so I
<br>
think that confirms the nature of the problem.
<br>
<p>Is it a bug that mpif90 didn't pay attention to OPAL_PREFIX in the -I but
<br>
did use it in the -L ?
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Friday, September 30, 2011 7:04 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and
<br>
'get_mempolicy'
<br>
<p>I think the issue here is that it's linking the *MPI application* that is
<br>
causing the problem.  Is that right?
<br>
<p>If so, can you send your exact application compile line, and the the output
<br>
of that compile line with &quot;--showme&quot; at the end?
<br>
<p><p>On Sep 29, 2011, at 4:24 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 28/09/2011 23:02, Blosch, Edwin L a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've tried it now adding --without-libnuma.  Actually that did NOT fix
</span><br>
the problem, so I can send you the full output from configure if you want,
<br>
to understand why this &quot;hwloc&quot; function is trying to use a function which
<br>
appears to be unavailable.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This function is likely available... in the dynamic version of libnuma
</span><br>
<span class="quotelev1">&gt; (that's why configure is happy), but make is probably trying to link
</span><br>
<span class="quotelev1">&gt; with the static version which isn't available on your machine. That's my
</span><br>
<span class="quotelev1">&gt; guess, at least.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't understand about make V=1. What tree? Somewhere in the OpenMPI
</span><br>
build, or in the application compilation itself? Is &quot;V=1&quot; something in the
<br>
OpenMPI makefile structure?
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Instead of doing
</span><br>
<span class="quotelev1">&gt;  ./configure ...
</span><br>
<span class="quotelev1">&gt;  make
</span><br>
<span class="quotelev1">&gt; do
</span><br>
<span class="quotelev1">&gt;  ./configure &lt;same options&gt;
</span><br>
<span class="quotelev1">&gt;  make V=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It will make the output more verbose. Once you get the failure, please
</span><br>
<span class="quotelev1">&gt; send the last 15 lines or so. We will look at these verbose lines to
</span><br>
<span class="quotelev1">&gt; understand how things are being compiled (which linker flags, which
</span><br>
<span class="quotelev1">&gt; libraries, ...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17482.php">Jack Bryan: "[OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster"</a>
<li><strong>Previous message:</strong> <a href="17480.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="17480.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/17914.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/17914.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'"</a>
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
