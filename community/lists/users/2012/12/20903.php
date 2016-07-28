<?
$subject_val = "Re: [OMPI users] Windows support for OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  7 10:48:21 2012" -->
<!-- isoreceived="20121207154821" -->
<!-- sent="Fri, 07 Dec 2012 08:48:04 -0700" -->
<!-- isosent="20121207154804" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows support for OpenMPI" -->
<!-- id="50C20FB4.5040402_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E150A0C5-CA00-40C2-A9F6-D7C700072458_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Windows support for OpenMPI<br>
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-07 10:48:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20904.php">Durga Choudhury: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20902.php">Jeff Squyres: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20902.php">Jeff Squyres: "Re: [OMPI users] Windows support for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20904.php">Durga Choudhury: "Re: [OMPI users] Windows support for OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can probably fix the 1.6.3 build.  I think it's just bumping CMake 
<br>
support and tweaks so that VS2012 works.  But yeah, it looks a bit grim 
<br>
going forward.
<br>
<p>Damien
<br>
<p>On 07/12/2012 8:28 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Sorry for my late reply; I've been in the MPI Forum and Open MPI engineering meetings all week.  Some points:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Yes, it would be a shame to lose all the Windows support that Shiqing did.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Microsoft has told me that they're of the mindset &quot;the more, the merrier&quot; for their platform (i.e., they'd love to have more than one MPI on Windows, but probably can't help develop/support Open MPI on windows).  Makes perfect sense to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. I see that we have 2 volunteers to keep the build support going for the v1.6 series, and another volunteer to do continued development for v1.7 and beyond.  But all of these would need good reasons to go forward (active Open MPI Windows users, financial support, etc.).  It doesn't look like there is much support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. I'm bummed to hear that Windows building is broken in 1.6.x.  $%#$%#@!!  If anyone wants to take a gander at fixing it, I'd love to see your patches, for nothing other than just maintaining Windows support for the remainder of the 1.6.x series.  But per #3, it may not be worth it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. Based on this feedback, it seems like we should remove the Windows support from the OMPI SVN trunk and all future versions.  It can always be resurrected from SVN history if someone wants to pick up this effort again in the future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 6, 2012, at 11:07 AM, Damien wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So far, I count three people interested in OpenMPI on Windows.  That's not a case for ongoing support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 04/12/2012 11:32 AM, Durga Choudhury wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since I did not see any Microsoft/other 'official' folks pick up the ball, let me step up. I have been lurking in this list for quite a while and I am a generic scientific programmer (i.e. I use many frameworks such as OpenCL/OpenMP etc, not just MPI)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Although I am primarily a Linux user, I do own multiple versions of Visual Studio licenses and have a small cluster that dual boots to Windows/Linux (and more nodes can be added on demand). I cannot do any large scale testing on this, but I can build and run regression tests etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the community needs the Windows support to continue, I can take up that responsibility, until a more capable person/group is found at least.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Durga
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Dec 3, 2012 at 12:32 PM, Damien &lt;damien_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I completely missed the message about Shiqing departing as the OpenMPI Windows maintainer.  I'll try and keep Windows builds going for 1.6 at least, I have 2011 and 2013 Intel licenses and VS2008 and 2012, but not 2010.  I see that the 1.6.3 code base already doesn't build on Windows in VS2012  :-(.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While I can try and keep builds going, I don't have access to a Windows cluster right now, and I'm flat out on two other projects. I can test on my workstation, but that will only go so far. Longer-term, there needs to be a decision made on whether Windows gets to be a first-class citizen in OpenMPI or not.  Jeff's already told me that 1.7 is lagging behind on Windows.  It would be a shame to have all the work Shiqing put in gradually decay because it can't be supported enough.  If there's any Microsoft/HPC/Azure folks observing this list, or any other vendors who run on Windows with OpenMPI, maybe we can see what can be done if you're interested.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Damien
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20904.php">Durga Choudhury: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20902.php">Jeff Squyres: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20902.php">Jeff Squyres: "Re: [OMPI users] Windows support for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20904.php">Durga Choudhury: "Re: [OMPI users] Windows support for OpenMPI"</a>
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
