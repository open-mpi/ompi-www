<?
$subject_val = "Re: [OMPI users] Windows support for OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 14:07:57 2012" -->
<!-- isoreceived="20121206190757" -->
<!-- sent="Thu, 06 Dec 2012 12:07:45 -0700" -->
<!-- isosent="20121206190745" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows support for OpenMPI" -->
<!-- id="50C0ED01.2080507_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHXxYDiQNbcJ=BzwAL1j=KtV+TH6QjRpAyq3a4nCxUo701jo7A_at_mail.gmail.com" -->
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
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-06 14:07:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20888.php">Paul Hatton: "[OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="20886.php">&#213;&#212;&#211;&#161;: "[OMPI users] MPI_WAIT is a non-local operation"</a>
<li><strong>In reply to:</strong> <a href="20873.php">Durga Choudhury: "Re: [OMPI users] Windows support for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20902.php">Jeff Squyres: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>Reply:</strong> <a href="20902.php">Jeff Squyres: "Re: [OMPI users] Windows support for OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So far, I count three people interested in OpenMPI on Windows. That's 
<br>
not a case for ongoing support.
<br>
<p>Damien
<br>
<p>On 04/12/2012 11:32 AM, Durga Choudhury wrote:
<br>
<span class="quotelev1">&gt; All
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since I did not see any Microsoft/other 'official' folks pick up the 
</span><br>
<span class="quotelev1">&gt; ball, let me step up. I have been lurking in this list for quite a 
</span><br>
<span class="quotelev1">&gt; while and I am a generic scientific programmer (i.e. I use many 
</span><br>
<span class="quotelev1">&gt; frameworks such as OpenCL/OpenMP etc, not just MPI)
</span><br>
<span class="quotelev1">&gt; Although I am primarily a Linux user, I do own multiple versions of 
</span><br>
<span class="quotelev1">&gt; Visual Studio licenses and have a small cluster that dual boots to 
</span><br>
<span class="quotelev1">&gt; Windows/Linux (and more nodes can be added on demand). I cannot do any 
</span><br>
<span class="quotelev1">&gt; large scale testing on this, but I can build and run regression tests etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the community needs the Windows support to continue, I can take up 
</span><br>
<span class="quotelev1">&gt; that responsibility, until a more capable person/group is found at least.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 3, 2012 at 12:32 PM, Damien &lt;damien_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:damien_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I completely missed the message about Shiqing departing as the
</span><br>
<span class="quotelev1">&gt;     OpenMPI Windows maintainer.  I'll try and keep Windows builds
</span><br>
<span class="quotelev1">&gt;     going for 1.6 at least, I have 2011 and 2013 Intel licenses and
</span><br>
<span class="quotelev1">&gt;     VS2008 and 2012, but not 2010.  I see that the 1.6.3 code base
</span><br>
<span class="quotelev1">&gt;     already doesn't build on Windows in VS2012  :-(.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     While I can try and keep builds going, I don't have access to a
</span><br>
<span class="quotelev1">&gt;     Windows cluster right now, and I'm flat out on two other projects.
</span><br>
<span class="quotelev1">&gt;     I can test on my workstation, but that will only go so far.
</span><br>
<span class="quotelev1">&gt;     Longer-term, there needs to be a decision made on whether Windows
</span><br>
<span class="quotelev1">&gt;     gets to be a first-class citizen in OpenMPI or not.  Jeff's
</span><br>
<span class="quotelev1">&gt;     already told me that 1.7 is lagging behind on Windows.  It would
</span><br>
<span class="quotelev1">&gt;     be a shame to have all the work Shiqing put in gradually decay
</span><br>
<span class="quotelev1">&gt;     because it can't be supported enough.  If there's any
</span><br>
<span class="quotelev1">&gt;     Microsoft/HPC/Azure folks observing this list, or any other
</span><br>
<span class="quotelev1">&gt;     vendors who run on Windows with OpenMPI, maybe we can see what can
</span><br>
<span class="quotelev1">&gt;     be done if you're interested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Damien
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20887/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20888.php">Paul Hatton: "[OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="20886.php">&#213;&#212;&#211;&#161;: "[OMPI users] MPI_WAIT is a non-local operation"</a>
<li><strong>In reply to:</strong> <a href="20873.php">Durga Choudhury: "Re: [OMPI users] Windows support for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20902.php">Jeff Squyres: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>Reply:</strong> <a href="20902.php">Jeff Squyres: "Re: [OMPI users] Windows support for OpenMPI"</a>
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
