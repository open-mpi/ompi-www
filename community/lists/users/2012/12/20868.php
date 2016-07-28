<?
$subject_val = "Re: [OMPI users] Windows support for OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  3 14:42:42 2012" -->
<!-- isoreceived="20121203194242" -->
<!-- sent="Mon, 03 Dec 2012 12:42:23 -0700" -->
<!-- isosent="20121203194223" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows support for OpenMPI" -->
<!-- id="50BD009F.4060305_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50BCF681.40200_at_txcorp.com" -->
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
<strong>Date:</strong> 2012-12-03 14:42:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20869.php">Brock Palen: "[OMPI users] Romio and OpenMPI builds"</a>
<li><strong>Previous message:</strong> <a href="20867.php">John R. Cary: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20867.php">John R. Cary: "Re: [OMPI users] Windows support for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20873.php">Durga Choudhury: "Re: [OMPI users] Windows support for OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a good start.  Stepping up a level and without wanting to start 
<br>
a bunfight with other MPI implementations, what are the advantages of 
<br>
OpenMPI over those other various MPI implementations, irrespective of 
<br>
platform?  There must be some advantages, or OpenMPI wouldn't exist.  Do 
<br>
those advantages apply on Windows and would they justify ongoing Windows 
<br>
support?
<br>
<p>Damien
<br>
<p><p>On 03/12/2012 11:59 AM, John R. Cary wrote:
<br>
<span class="quotelev1">&gt; Dear OpenMPI community,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This email is about whether a commercial version of OpenMPI for Windows
</span><br>
<span class="quotelev1">&gt; could be successful.  I hesitated before sending this, but upon asking
</span><br>
<span class="quotelev1">&gt; some others (notably Jeff) on this list, it seemed appropriate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We at Tech-X have been asking whether a commercial/freemium support 
</span><br>
<span class="quotelev1">&gt; model for a Windows
</span><br>
<span class="quotelev1">&gt; version of OpenMPI would work.  We are currently working on this for some
</span><br>
<span class="quotelev1">&gt; other products, notably PETSc, which is discussed at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.txcorp.com/home/cosml">http://www.txcorp.com/home/cosml</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We see some downsides - in particular, with Microsoft's HPC Pack, 
</span><br>
<span class="quotelev1">&gt; Windows users
</span><br>
<span class="quotelev1">&gt; have free access to an MPI solution.  This has to be balanced by some
</span><br>
<span class="quotelev1">&gt; particular advantages of OpenMPI such that there would be a group of
</span><br>
<span class="quotelev1">&gt; users who would pay for it for anyone to make this work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We would be very interested in hearing from folks on this list who either
</span><br>
<span class="quotelev1">&gt; (1) help define the competitive advantage of having OpenMPI on Windows or
</span><br>
<span class="quotelev1">&gt; (2) would be interested in a commercial solution, were it available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Naturally, any solution should benefit the OpenMPI community as well to
</span><br>
<span class="quotelev1">&gt; be a success.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would be glad to hear from folks on list or off.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thx....John Cary
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/3/2012 10:32 AM, Damien wrote:
</span><br>
<span class="quotelev2">&gt;&gt; All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I completely missed the message about Shiqing departing as the 
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI Windows maintainer.  I'll try and keep Windows builds going 
</span><br>
<span class="quotelev2">&gt;&gt; for 1.6 at least, I have 2011 and 2013 Intel licenses and VS2008 and 
</span><br>
<span class="quotelev2">&gt;&gt; 2012, but not 2010.  I see that the 1.6.3 code base already doesn't 
</span><br>
<span class="quotelev2">&gt;&gt; build on Windows in VS2012  :-(.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While I can try and keep builds going, I don't have access to a 
</span><br>
<span class="quotelev2">&gt;&gt; Windows cluster right now, and I'm flat out on two other projects. I 
</span><br>
<span class="quotelev2">&gt;&gt; can test on my workstation, but that will only go so far. 
</span><br>
<span class="quotelev2">&gt;&gt; Longer-term, there needs to be a decision made on whether Windows 
</span><br>
<span class="quotelev2">&gt;&gt; gets to be a first-class citizen in OpenMPI or not. Jeff's already 
</span><br>
<span class="quotelev2">&gt;&gt; told me that 1.7 is lagging behind on Windows. It would be a shame to 
</span><br>
<span class="quotelev2">&gt;&gt; have all the work Shiqing put in gradually decay because it can't be 
</span><br>
<span class="quotelev2">&gt;&gt; supported enough.  If there's any Microsoft/HPC/Azure folks observing 
</span><br>
<span class="quotelev2">&gt;&gt; this list, or any other vendors who run on Windows with OpenMPI, 
</span><br>
<span class="quotelev2">&gt;&gt; maybe we can see what can be done if you're interested.
</span><br>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20869.php">Brock Palen: "[OMPI users] Romio and OpenMPI builds"</a>
<li><strong>Previous message:</strong> <a href="20867.php">John R. Cary: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20867.php">John R. Cary: "Re: [OMPI users] Windows support for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20873.php">Durga Choudhury: "Re: [OMPI users] Windows support for OpenMPI"</a>
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
