<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec 27 09:19:42 2006" -->
<!-- isoreceived="20061227141942" -->
<!-- sent="Wed, 27 Dec 2006 09:19:31 -0500" -->
<!-- isosent="20061227141931" -->
<!-- name="Allen Barnett" -->
<!-- email="allen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Relocating an Installation" -->
<!-- id="1167229171.5151.96.camel_at_capybara.lan" -->
<!-- inreplyto="1BCA5AB8-8741-4483-A57F-B109D0F95728_at_cisco.com" -->
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
<strong>From:</strong> Allen Barnett (<em>allen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-27 09:19:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2406.php">Michael Marti: "[OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<li><strong>Previous message:</strong> <a href="2404.php">Jayanta Roy: "[OMPI users] jumbo frame can create deallock?"</a>
<li><strong>In reply to:</strong> <a href="2375.php">Jeff Squyres: "Re: [OMPI users] Relocating an Installation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Upon reflecting on this more, I guess I see two issues. First, there's
<br>
the issue of allowing the user to install our software on the system
<br>
where ever they like. Some users may want to install it in their home
<br>
directories, others may have a sys admin install it in a common
<br>
location. This seems like a substantial reason to allow an OMPI
<br>
installation to be relocated. So, I would say this was a very important
<br>
capability.
<br>
<p>On the other hand, I don't have access to all the third party headers
<br>
and libraries which are necessary to build some of the more interesting
<br>
OMPI modules, such as the Infiniband and Myrinet drivers and many of the
<br>
batch scheduling drivers (tm? LoadLeveler? PORTALS? Xgrid? [I'm not sure
<br>
what these are]. And maybe a related question: One customer uses NQS
<br>
(NQE?); can this be supported?) So, I would expect the user may want to
<br>
compile at least some of OMPI himself (or herself) in order to activate
<br>
these modules. Thus, perhaps I should supply a partially built
<br>
installation which completes compilation as part of the installation
<br>
process? This seems somewhat impractical since it would require
<br>
compilers, headers and libraries, etc, on every machine on which our
<br>
software is installed.
<br>
<p>I also don't know what distribution restrictions are placed on all the
<br>
3rd party software OMPI can link against. This may limit what can be
<br>
redistributed with our product.
<br>
<p>So, I guess I'm open to suggestions on how best to distribute our
<br>
software. Being able to relocate an installation and being able to build
<br>
specific modules at installation time would appear to be very helpful
<br>
capabilities.
<br>
<p>Many thanks,
<br>
Allen
<br>
<p>On Fri, 2006-12-15 at 19:45 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Greetings Allen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This problem has not yet been resolved, but I'm quite sure we have an  
</span><br>
<span class="quotelev1">&gt; open ticket about this on our bug tracker.  I just replied to Patrick  
</span><br>
<span class="quotelev1">&gt; on-list about a related issue (his use of --prefix); I'd have to  
</span><br>
<span class="quotelev1">&gt; think about this a bit more, but a solution proposed by one of the  
</span><br>
<span class="quotelev1">&gt; other OMPI developers in internal conversations may fix both issues.   
</span><br>
<span class="quotelev1">&gt; It only hasn't been coded up because we didn't prioritize it high.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So my question to you is -- how high of a priority is this for you?   
</span><br>
<span class="quotelev1">&gt; Part of what makes it into each OMPI release is driven by what users  
</span><br>
<span class="quotelev1">&gt; want/need, so input like this helps us prioritize the work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 13, 2006, at 10:37 AM, Allen Barnett wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; There was a thread back in November started by Patrick Jessee about
</span><br>
<span class="quotelev2">&gt; &gt; relocating an installation after it was built (the subject was:  
</span><br>
<span class="quotelev2">&gt; &gt; removing
</span><br>
<span class="quotelev2">&gt; &gt; hard-coded paths from OpenMPI shared libraries). I guess I'm in the  
</span><br>
<span class="quotelev2">&gt; &gt; same
</span><br>
<span class="quotelev2">&gt; &gt; boat now. I would like to distribute our OpenMPI-based parallel  
</span><br>
<span class="quotelev2">&gt; &gt; solver;
</span><br>
<span class="quotelev2">&gt; &gt; but I can't really dictate where a user will install our software. Has
</span><br>
<span class="quotelev2">&gt; &gt; any one succeeded in building a version of OpenMPI which can be
</span><br>
<span class="quotelev2">&gt; &gt; relocated?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<pre>
-- 
Allen Barnett
Transpire, Inc.
E-Mail: allen_at_[hidden]
Ph: 518-887-2930
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2406.php">Michael Marti: "[OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<li><strong>Previous message:</strong> <a href="2404.php">Jayanta Roy: "[OMPI users] jumbo frame can create deallock?"</a>
<li><strong>In reply to:</strong> <a href="2375.php">Jeff Squyres: "Re: [OMPI users] Relocating an Installation"</a>
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
