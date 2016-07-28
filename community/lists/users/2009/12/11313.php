<?
$subject_val = "Re: [OMPI users] configuration settings for Mac OSX";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 12:20:16 2009" -->
<!-- isoreceived="20091201172016" -->
<!-- sent="Tue, 1 Dec 2009 09:20:12 -0800 (PST)" -->
<!-- isosent="20091201172012" -->
<!-- name="Jurgen Heymann" -->
<!-- email="juheymann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration settings for Mac OSX" -->
<!-- id="521361.87479.qm_at_web54201.mail.re2.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] configuration settings for Mac OSX" -->
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
<strong>Subject:</strong> Re: [OMPI users] configuration settings for Mac OSX<br>
<strong>From:</strong> Jurgen Heymann (<em>juheymann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 12:20:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11314.php">Jeff Squyres: "Re: [OMPI users] configuration settings for Mac OSX"</a>
<li><strong>Previous message:</strong> <a href="11312.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11253.php">Jurgen Heymann: "[OMPI users] configuration settings for Mac OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11314.php">Jeff Squyres: "Re: [OMPI users] configuration settings for Mac OSX"</a>
<li><strong>Reply:</strong> <a href="11314.php">Jeff Squyres: "Re: [OMPI users] configuration settings for Mac OSX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thank you for your feedback. In all cases, I installed it clean. After consulting the mpiBLAST user group, I learned that there is an issue building mpiBLAST with openMPI on Intel platforms and that it is being investigated. Once I learn more about it, I will post it here. I would still try to get mpiBLAST built on PPC (OS 10.4) using openMPI and I would appreciate any hints regarding settings for running ./configure.
<br>
<p>Thanks,
<br>
<p>Jurgen
<br>
<p>On Nov 23, 2009, at 12:51 PM, Jurgen Heymann wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to understand what parameters are essential to include 
</span><br>
<span class="quotelev1">&gt; when running ./configure with openmpi-1.3.3 when working with Mac 
</span><br>
<span class="quotelev1">&gt; using PPC (OS 10.4) or Intel platform (OS 10.5). What compilers and 
</span><br>
<span class="quotelev1">&gt; settings work best for the individual platforms (HFS+) and lead to 
</span><br>
<span class="quotelev1">&gt; robust installations?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fact is that I can build openmpi rather easily using ./configure --
</span><br>
<span class="quotelev1">&gt; prefix=path_to_location on any of the mentioned platforms. Test on 
</span><br>
<span class="quotelev1">&gt; the package-provided examples work without flaw. However, building 
</span><br>
<span class="quotelev1">&gt; mpiblast-1.6 using openmpi fails on either platform (clean, no mpi 
</span><br>
<span class="quotelev1">&gt; alternatives present). Error messages indicate that certain 
</span><br>
<span class="quotelev1">&gt; functions provided within openmpi are not defined e.g., 
</span><br>
<span class="quotelev1">&gt; MPI::Datatype::Free() and MPI::WIN::Free().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Sorry for the delay on replying here.
<br>
<p>Make sure that you are using the Open MPI that you have installed from 
<br>
source and not the Open MPI that is installed by OS X by default.
<br>
<p>Does that help?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
      
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11314.php">Jeff Squyres: "Re: [OMPI users] configuration settings for Mac OSX"</a>
<li><strong>Previous message:</strong> <a href="11312.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11253.php">Jurgen Heymann: "[OMPI users] configuration settings for Mac OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11314.php">Jeff Squyres: "Re: [OMPI users] configuration settings for Mac OSX"</a>
<li><strong>Reply:</strong> <a href="11314.php">Jeff Squyres: "Re: [OMPI users] configuration settings for Mac OSX"</a>
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
