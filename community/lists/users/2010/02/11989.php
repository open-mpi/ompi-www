<?
$subject_val = "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  3 09:28:06 2010" -->
<!-- isoreceived="20100203142806" -->
<!-- sent="Wed, 3 Feb 2010 14:25:57 -0000" -->
<!-- isosent="20100203142557" -->
<!-- name="Conboy, James" -->
<!-- email="Jim.Conboy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0" -->
<!-- id="4663A30C7056FE4E8EBD7BD0AB9E6B8665D915_at_ntsrv-exch02.jetnet.jet.efda.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="038DF3CD-85DE-4DA9-B8A5-115EFF8F412F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0<br>
<strong>From:</strong> Conboy, James (<em>Jim.Conboy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-03 09:25:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11990.php">Jeff Squyres: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<li><strong>Previous message:</strong> <a href="11988.php">Lionel Chailan: "Re: [OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<li><strong>In reply to:</strong> <a href="11977.php">Jeff Squyres: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11990.php">Jeff Squyres: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<li><strong>Reply:</strong> <a href="11990.php">Jeff Squyres: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thats correct, I set with-valgrind to point to the source directory..
<br>
Initially, I intended to use the valgrind distributed with Fedora 10,
<br>
but that has no header files included - so after Id downloaded the
<br>
valgrind source, it seemed like the next thing to try. 
<br>
<p>It works fine with the installation directory . Now for the tricky bit,
<br>
finding the leak(s)..
<br>
<p>Thanks for the rapid reply -
<br>
Jim 
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: 02 February 2010 23:06
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Configuring OpenMPI 1.3.3,1.4 --with-valgrind
<br>
3.5.0
<br>
<p><p>Thanks for the bug report!
<br>
<p>I puzzled over your text for a while before I figured out what I think
<br>
the problem is -- I think the argument you've given to --with-valgrind
<br>
is the *source* tree for Valgrind.  You actually want to give the
<br>
*installation* directory as the argument to --with-valgrind.
<br>
<p>Indeed, I downloaded Valgrind 3.5.0 and installed it to
<br>
/opt/valgrind/3.5.0 and was able to build Open MPI
<br>
--with-valgrind=/opt/valgrind/3.5.0 --enable-memchecker with no
<br>
problems.
<br>
<p>Can you could check that your --with-valgrind argument is actually the
<br>
installation directory, not the source directory?
<br>
<p><p><p>On Feb 2, 2010, at 6:23 AM, Conboy, James wrote:
<br>
<p><span class="quotelev1">&gt; Hi - 
</span><br>
<span class="quotelev1">&gt;         configure failed the VALGRIND_CHECK_MEM_IS_ADDRESSABLE test, 
</span><br>
<span class="quotelev1">&gt; for openmpi-1.3.3 or -1.4 with Valgrind 3.5.0 -
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11990.php">Jeff Squyres: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<li><strong>Previous message:</strong> <a href="11988.php">Lionel Chailan: "Re: [OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<li><strong>In reply to:</strong> <a href="11977.php">Jeff Squyres: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11990.php">Jeff Squyres: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<li><strong>Reply:</strong> <a href="11990.php">Jeff Squyres: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
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
