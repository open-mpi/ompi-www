<?
$subject_val = "Re: [OMPI users] Windows support for OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  7 12:30:01 2012" -->
<!-- isoreceived="20121207173001" -->
<!-- sent="Fri, 7 Dec 2012 12:29:39 -0500" -->
<!-- isosent="20121207172939" -->
<!-- name="Jeffrey A Cummings" -->
<!-- email="Jeffrey.A.Cummings_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows support for OpenMPI" -->
<!-- id="OFDD38A098.609A05C1-ON85257ACD.005FF615-85257ACD.00601B08_at_notes.aero.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAHXxYDgGgLXL+kVV6DAZCriRKbcoo9OXNSWae88aCPF4fd-p=Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeffrey A Cummings (<em>Jeffrey.A.Cummings_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-07 12:29:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20906.php">Eric Chamberland: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>Previous message:</strong> <a href="20904.php">Durga Choudhury: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20904.php">Durga Choudhury: "Re: [OMPI users] Windows support for OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would be disappointed to see the Windows support go away.  I use it 
<br>
mostly for debugging, but it's valuable to me for that purpose.
<br>
<p>- Jeff Cummings
<br>
<p><p><p>From:   Durga Choudhury &lt;dpchoudh_at_[hidden]&gt;
<br>
To:     Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date:   12/07/2012 11:33 AM
<br>
Subject:        Re: [OMPI users] Windows support for OpenMPI
<br>
Sent by:        users-bounces_at_[hidden]
<br>
<p><p><p>All
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
new entrants to the field of computer programming are starting on a 
<br>
Windows based machine. By providing Windows support for OpenMPI, we will 
<br>
make the project accessible to the younger generation and ensure they 
<br>
adopt it when they enter the work force. That is another reason that makes 
<br>
me think that just because few people asked for it explicitly, few people 
<br>
are actually using it, as the newbie types usually do not make explicit 
<br>
requests.
<br>
<p>Thanks
<br>
Durga
<br>
<p>On Fri, Dec 7, 2012 at 10:28 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
Sorry for my late reply; I've been in the MPI Forum and Open MPI 
<br>
engineering meetings all week.  Some points:
<br>
<p>1. Yes, it would be a shame to lose all the Windows support that Shiqing 
<br>
did.
<br>
<p>2. Microsoft has told me that they're of the mindset &quot;the more, the 
<br>
merrier&quot; for their platform (i.e., they'd love to have more than one MPI 
<br>
on Windows, but probably can't help develop/support Open MPI on windows). 
<br>
&nbsp;Makes perfect sense to me.
<br>
<p>3. I see that we have 2 volunteers to keep the build support going for the 
<br>
v1.6 series, and another volunteer to do continued development for v1.7 
<br>
and beyond.  But all of these would need good reasons to go forward 
<br>
(active Open MPI Windows users, financial support, etc.).  It doesn't look 
<br>
like there is much support.
<br>
<p>4. I'm bummed to hear that Windows building is broken in 1.6.x.  $%#$%#@!! 
<br>
&nbsp;If anyone wants to take a gander at fixing it, I'd love to see your 
<br>
patches, for nothing other than just maintaining Windows support for the 
<br>
remainder of the 1.6.x series.  But per #3, it may not be worth it.
<br>
<p>5. Based on this feedback, it seems like we should remove the Windows 
<br>
support from the OMPI SVN trunk and all future versions.  It can always be 
<br>
resurrected from SVN history if someone wants to pick up this effort again 
<br>
in the future.
<br>
<p><p>On Dec 6, 2012, at 11:07 AM, Damien wrote:
<br>
<p><span class="quotelev1">&gt; So far, I count three people interested in OpenMPI on Windows.  That's 
</span><br>
not a case for ongoing support.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 04/12/2012 11:32 AM, Durga Choudhury wrote:
</span><br>
<span class="quotelev2">&gt;&gt; All
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since I did not see any Microsoft/other 'official' folks pick up the 
</span><br>
ball, let me step up. I have been lurking in this list for quite a while 
<br>
and I am a generic scientific programmer (i.e. I use many frameworks such 
<br>
as OpenCL/OpenMP etc, not just MPI)
<br>
<span class="quotelev2">&gt;&gt; Although I am primarily a Linux user, I do own multiple versions of 
</span><br>
Visual Studio licenses and have a small cluster that dual boots to 
<br>
Windows/Linux (and more nodes can be added on demand). I cannot do any 
<br>
large scale testing on this, but I can build and run regression tests etc.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the community needs the Windows support to continue, I can take up 
</span><br>
that responsibility, until a more capable person/group is found at least.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Dec 3, 2012 at 12:32 PM, Damien &lt;damien_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I completely missed the message about Shiqing departing as the OpenMPI 
</span><br>
Windows maintainer.  I'll try and keep Windows builds going for 1.6 at 
<br>
least, I have 2011 and 2013 Intel licenses and VS2008 and 2012, but not 
<br>
2010.  I see that the 1.6.3 code base already doesn't build on Windows in 
<br>
VS2012  :-(.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While I can try and keep builds going, I don't have access to a Windows 
</span><br>
cluster right now, and I'm flat out on two other projects. I can test on 
<br>
my workstation, but that will only go so far. Longer-term, there needs to 
<br>
be a decision made on whether Windows gets to be a first-class citizen in 
<br>
OpenMPI or not.  Jeff's already told me that 1.7 is lagging behind on 
<br>
Windows.  It would be a shame to have all the work Shiqing put in 
<br>
gradually decay because it can't be supported enough.  If there's any 
<br>
Microsoft/HPC/Azure folks observing this list, or any other vendors who 
<br>
run on Windows with OpenMPI, maybe we can see what can be done if you're 
<br>
interested.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20905/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20906.php">Eric Chamberland: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>Previous message:</strong> <a href="20904.php">Durga Choudhury: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20904.php">Durga Choudhury: "Re: [OMPI users] Windows support for OpenMPI"</a>
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
