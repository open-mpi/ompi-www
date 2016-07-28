<?
$subject_val = "Re: [OMPI users] Windows support for OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  7 11:32:42 2012" -->
<!-- isoreceived="20121207163242" -->
<!-- sent="Fri, 7 Dec 2012 11:32:37 -0500" -->
<!-- isosent="20121207163237" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows support for OpenMPI" -->
<!-- id="CAHXxYDgGgLXL+kVV6DAZCriRKbcoo9OXNSWae88aCPF4fd-p=Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-07 11:32:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20905.php">Jeffrey A Cummings: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20903.php">Damien Hocking: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20902.php">Jeff Squyres: "Re: [OMPI users] Windows support for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20905.php">Jeffrey A Cummings: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>Reply:</strong> <a href="20905.php">Jeffrey A Cummings: "Re: [OMPI users] Windows support for OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All
<br>
<p>Let me reiterate my (minimal, compared to other developers) support to the
<br>
OpenMPI project. If all it takes is to build and run regression tests on a
<br>
platform to add a feather in the cap, I am willing to do it.
<br>
<p>The low interest in Windows platform does not surprise me; most HPC
<br>
infrastructures use a Unix-like setup, and those few who do use Windows
<br>
likely use Microsoft's own HPC server and MPI stack rather than OpenMPI.
<br>
<p>That said, I believe that we should continue supporting Windows for this
<br>
one reason, if nothing else: since Windows comes preinstalled on all PCs,
<br>
new entrants to the field of computer programming are starting on a Windows
<br>
based machine. By providing Windows support for OpenMPI, we will make the
<br>
project accessible to the younger generation and ensure they adopt it when
<br>
they enter the work force. That is another reason that makes me think that
<br>
just because few people asked for it explicitly, few people are actually
<br>
using it, as the newbie types usually do not make explicit requests.
<br>
<p>Thanks
<br>
Durga
<br>
<p>On Fri, Dec 7, 2012 at 10:28 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for my late reply; I've been in the MPI Forum and Open MPI
</span><br>
<span class="quotelev1">&gt; engineering meetings all week.  Some points:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Yes, it would be a shame to lose all the Windows support that Shiqing
</span><br>
<span class="quotelev1">&gt; did.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Microsoft has told me that they're of the mindset &quot;the more, the
</span><br>
<span class="quotelev1">&gt; merrier&quot; for their platform (i.e., they'd love to have more than one MPI on
</span><br>
<span class="quotelev1">&gt; Windows, but probably can't help develop/support Open MPI on windows).
</span><br>
<span class="quotelev1">&gt;  Makes perfect sense to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. I see that we have 2 volunteers to keep the build support going for the
</span><br>
<span class="quotelev1">&gt; v1.6 series, and another volunteer to do continued development for v1.7 and
</span><br>
<span class="quotelev1">&gt; beyond.  But all of these would need good reasons to go forward (active
</span><br>
<span class="quotelev1">&gt; Open MPI Windows users, financial support, etc.).  It doesn't look like
</span><br>
<span class="quotelev1">&gt; there is much support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. I'm bummed to hear that Windows building is broken in 1.6.x.  $%#$%#@!!
</span><br>
<span class="quotelev1">&gt;  If anyone wants to take a gander at fixing it, I'd love to see your
</span><br>
<span class="quotelev1">&gt; patches, for nothing other than just maintaining Windows support for the
</span><br>
<span class="quotelev1">&gt; remainder of the 1.6.x series.  But per #3, it may not be worth it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. Based on this feedback, it seems like we should remove the Windows
</span><br>
<span class="quotelev1">&gt; support from the OMPI SVN trunk and all future versions.  It can always be
</span><br>
<span class="quotelev1">&gt; resurrected from SVN history if someone wants to pick up this effort again
</span><br>
<span class="quotelev1">&gt; in the future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 6, 2012, at 11:07 AM, Damien wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; So far, I count three people interested in OpenMPI on Windows.  That's
</span><br>
<span class="quotelev1">&gt; not a case for ongoing support.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Damien
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 04/12/2012 11:32 AM, Durga Choudhury wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; All
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Since I did not see any Microsoft/other 'official' folks pick up the
</span><br>
<span class="quotelev1">&gt; ball, let me step up. I have been lurking in this list for quite a while
</span><br>
<span class="quotelev1">&gt; and I am a generic scientific programmer (i.e. I use many frameworks such
</span><br>
<span class="quotelev1">&gt; as OpenCL/OpenMP etc, not just MPI)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Although I am primarily a Linux user, I do own multiple versions of
</span><br>
<span class="quotelev1">&gt; Visual Studio licenses and have a small cluster that dual boots to
</span><br>
<span class="quotelev1">&gt; Windows/Linux (and more nodes can be added on demand). I cannot do any
</span><br>
<span class="quotelev1">&gt; large scale testing on this, but I can build and run regression tests etc.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If the community needs the Windows support to continue, I can take up
</span><br>
<span class="quotelev1">&gt; that responsibility, until a more capable person/group is found at least.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Durga
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mon, Dec 3, 2012 at 12:32 PM, Damien &lt;damien_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; All,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I completely missed the message about Shiqing departing as the OpenMPI
</span><br>
<span class="quotelev1">&gt; Windows maintainer.  I'll try and keep Windows builds going for 1.6 at
</span><br>
<span class="quotelev1">&gt; least, I have 2011 and 2013 Intel licenses and VS2008 and 2012, but not
</span><br>
<span class="quotelev1">&gt; 2010.  I see that the 1.6.3 code base already doesn't build on Windows in
</span><br>
<span class="quotelev1">&gt; VS2012  :-(.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; While I can try and keep builds going, I don't have access to a Windows
</span><br>
<span class="quotelev1">&gt; cluster right now, and I'm flat out on two other projects. I can test on my
</span><br>
<span class="quotelev1">&gt; workstation, but that will only go so far. Longer-term, there needs to be a
</span><br>
<span class="quotelev1">&gt; decision made on whether Windows gets to be a first-class citizen in
</span><br>
<span class="quotelev1">&gt; OpenMPI or not.  Jeff's already told me that 1.7 is lagging behind on
</span><br>
<span class="quotelev1">&gt; Windows.  It would be a shame to have all the work Shiqing put in gradually
</span><br>
<span class="quotelev1">&gt; decay because it can't be supported enough.  If there's any
</span><br>
<span class="quotelev1">&gt; Microsoft/HPC/Azure folks observing this list, or any other vendors who run
</span><br>
<span class="quotelev1">&gt; on Windows with OpenMPI, maybe we can see what can be done if you're
</span><br>
<span class="quotelev1">&gt; interested.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Damien
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20904/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20905.php">Jeffrey A Cummings: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20903.php">Damien Hocking: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20902.php">Jeff Squyres: "Re: [OMPI users] Windows support for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20905.php">Jeffrey A Cummings: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>Reply:</strong> <a href="20905.php">Jeffrey A Cummings: "Re: [OMPI users] Windows support for OpenMPI"</a>
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
