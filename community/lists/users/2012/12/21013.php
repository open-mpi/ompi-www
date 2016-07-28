<?
$subject_val = "Re: [OMPI users] Possible memory error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 11:26:35 2012" -->
<!-- isoreceived="20121219162635" -->
<!-- sent="Wed, 19 Dec 2012 11:26:23 -0500" -->
<!-- isosent="20121219162623" -->
<!-- name="Handerson, Steven" -->
<!-- email="steven.handerson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible memory error" -->
<!-- id="5B7E19405479894CB319783A4F404E4802B5292742_at_RNUMSEM722.nala.roche.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="01EECFE3-C13B-48C4-9ECD-EB584439EA2C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Possible memory error<br>
<strong>From:</strong> Handerson, Steven (<em>steven.handerson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-19 11:26:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21014.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="21012.php">Yann Droneaud: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>In reply to:</strong> <a href="20963.php">Jeff Squyres: "Re: [OMPI users] Possible memory error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21020.php">Jeff Squyres: "Re: [OMPI users] Possible memory error"</a>
<li><strong>Reply:</strong> <a href="21020.php">Jeff Squyres: "Re: [OMPI users] Possible memory error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, others:
<br>
<p>I fixed the problem we were experiencing by adding a barrier.
<br>
The bug occurred between a piece of code that uses (many, over a loop) SEND (from the leader)
<br>
and RECV (in the worker processes) to ship data to the 
<br>
processing nodes from the head / leader, and I think what might have been happening is
<br>
that this communication was mixed up with the following allreduce, when there's no barrier.
<br>
<p>The bug shows up in Valgrind and dmalloc as a read from freed memory.
<br>
<p>I might spend some time trying to make a small piece of code that reproduces this,
<br>
but maybe this gives you some idea of what might be the issue,
<br>
if it's something that should be fixed.
<br>
Some more info: it happens even as far back as openMPI 1.3.4, and even in the newest 1.6.3.
<br>
<p>Steve
<br>
<p><p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
Sent: Saturday, December 15, 2012 7:34 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Possible memory error
<br>
<p>On Dec 14, 2012, at 4:31 PM, Handerson, Steven wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to track down an instance of openMPI writing to a freed block of memory.
</span><br>
<span class="quotelev1">&gt; This occurs with the most recent release (1.6.3) as well as 1.6, on a 64 bit intel architecture, fedora 14.
</span><br>
<span class="quotelev1">&gt; It occurs with a very simple reduction (allreduce minimum), over a single int value.
</span><br>
<p>Can you send a reproducer program?  The simpler, the better.
<br>
<p><span class="quotelev1">&gt; I'm wondering if the openMPI developers use power tools such as 
</span><br>
<span class="quotelev1">&gt; valgrind / dmalloc / etc on the releases to try to catch these things 
</span><br>
<span class="quotelev1">&gt; via exhaustive testing - but I understand memory problems in C are of 
</span><br>
<span class="quotelev1">&gt; the nature that anyone making a mistake can propogate, so I haven't ruled out problems in our own code.
</span><br>
<span class="quotelev1">&gt; Also, I'm wondering if anyone has suggestions on how to track this down further.
</span><br>
<p>Yes, we do use such tools.
<br>
<p>Can you cite the specific file/line where the problem is occurring?  The all reduce algorithms are fairly self-contained; it should be (relatively) straightforward to examine that code and see if there's a problem with the memory allocation there.
<br>
<p><span class="quotelev1">&gt; I'm using allinea DDT and their builtin dmalloc, which catches the 
</span><br>
<span class="quotelev1">&gt; error, which appears in the second memcpy in  opal_convertor_pack(), but I don't have more details than that at the moment.
</span><br>
<span class="quotelev1">&gt; All I know so far is that one of those values has been freed.
</span><br>
<span class="quotelev1">&gt; Obviously, I haven't seen anything in earlier parts of the code which 
</span><br>
<span class="quotelev1">&gt; might have triggered memory corruption, although both openMPI and intel IPP do things with uninitialized values before this (according to Valgrind).
</span><br>
<p>There's a number of issues that can lead to false positives for using uninitialized values.  Here's two of the most common cases:
<br>
<p>1. When using TCP, one of our data headers has a padding hole in it, but we write the whole struct down a TCP socket file descriptor anyway.  Hence, it will generate a &quot;read from uninit&quot; warning.
<br>
<p>2. When using OpenFabrics-based networks, tool like valgrind don't see the OS-bypass initialization of the memory (Which frequently comes directly from the hardware), and it generates a lot of false &quot;read from uninit&quot; positives.
<br>
<p>One thing you can try is to compile Open MPI --with-valgrind.  This adds a little performance penalty, but we take extra steps to eliminate most false positives.  It could help separate the wheat from the chaff, in your case.
<br>
<p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21014.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="21012.php">Yann Droneaud: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>In reply to:</strong> <a href="20963.php">Jeff Squyres: "Re: [OMPI users] Possible memory error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21020.php">Jeff Squyres: "Re: [OMPI users] Possible memory error"</a>
<li><strong>Reply:</strong> <a href="21020.php">Jeff Squyres: "Re: [OMPI users] Possible memory error"</a>
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
