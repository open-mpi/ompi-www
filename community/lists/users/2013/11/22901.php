<?
$subject_val = "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  3 09:44:40 2013" -->
<!-- isoreceived="20131103144440" -->
<!-- sent="Sun, 3 Nov 2013 06:43:56 -0800" -->
<!-- isosent="20131103144356" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent" -->
<!-- id="E22400D3-0801-4C8A-850E-7362BD10DD31_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="etPan.527657ea.795194ee.c7be_at_Aragorn" -->
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
<strong>Subject:</strong> Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-03 09:43:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22902.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Previous message:</strong> <a href="22900.php">Dominique Orban: "[OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>In reply to:</strong> <a href="22900.php">Dominique Orban: "[OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22902.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Reply:</strong> <a href="22902.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm unfamiliar with Homebrew, but it sounds like they created the OMPI package --with-devel-headers for some reason. That doesn't make a lot of sense for a distribution as it is only used by OMPI developers who want access to OMPI internal functions from inside a test suite.
<br>
<p>We unfortunately have no control over how 3rd party packagers decide to build OMPI, which is why we generally advise building it from source instead. In this case, nothing changed between 1.6 and 1.7 - except that the packager decided to build it with a different configure option.
<br>
<p>We include libevent in a completely &quot;hidden&quot; manner for one simple reason - OMPI uses functions in libevent that are not present in older versions of libevent that are typically the ones provided by quite a few packagers (e.g., CentOS and Mac). Users of those systems would find them unable to execute OMPI if we didn't, or we'd have bizarre levels of code protection/branches throughout OMPI to resolve all the use-cases for the wide range of libevent versions out there.
<br>
<p>I'd suggest you &quot;uninstall&quot; the Homebrew package, and simply download/build OMPI from the source code tarball. The problem will then disappear.
<br>
<p><p>On Nov 3, 2013, at 6:03 AM, Dominique Orban &lt;dominique.orban_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm a humble indirect user of Open-MPI. On OSX, my Open-MPI installation is supplied by the Homebrew package manager [1]. Another package supplied by Homebrew is libevent.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I recently read on the dev list [2] a discussion about libevent having always been part of Open-MPI but being more apparent in 1.7.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At least on OSX, this causes unfortunate header file conflicts. If a user were to install both libevent and Open-MPI by hand to /usr/local (which is essentially what Homebrew does), one of the two would obliterate the 'event2' header files of the other. As far as I can tell, the 'event2' header files in Open-MPI differ from those in libevent 2.0.21 (the version currently distributed in Homebrew). This kind of conflict was absent from Open-MPI 1.6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Homebrew supplies Open-MPI 1.7.3 by default because the compilers shipped with the latest OSX development environment (Xcode 5.0) fail to build Open-MPI 1.6.5 correctly (I do not use those compilers myself, but I am told `make check` fails) [3]. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In view of the header file conflict, I'm wondering if there is a strong argument for not keeping the libevent-related header files of Open-MPI private. Stashing libevent-related stuff to a private location could probably be done more easily than adding logic to build Open-MPI against an external libevent. It's unfortunate for Open-MPI to conflict in this way with seemingly unrelated software packages that rely on libevent (e.g., tmux).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dominique
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://brew.sh">http://brew.sh</a>
</span><br>
<span class="quotelev1">&gt; [2] <a href="http://www.open-mpi.org/community/lists/devel/2013/04/12273.php">http://www.open-mpi.org/community/lists/devel/2013/04/12273.php</a>
</span><br>
<span class="quotelev1">&gt; [3] <a href="https://github.com/mxcl/homebrew/issues/23642">https://github.com/mxcl/homebrew/issues/23642</a>
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
<li><strong>Next message:</strong> <a href="22902.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Previous message:</strong> <a href="22900.php">Dominique Orban: "[OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>In reply to:</strong> <a href="22900.php">Dominique Orban: "[OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22902.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Reply:</strong> <a href="22902.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
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
