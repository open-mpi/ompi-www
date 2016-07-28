<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 14:33:33 2010" -->
<!-- isoreceived="20100506183333" -->
<!-- sent="Thu, 6 May 2010 12:33:22 -0600" -->
<!-- isosent="20100506183322" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?" -->
<!-- id="E0ECAD05-2BFE-4242-86E1-47F4C710DE91_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BE30620.1050701_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 14:33:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12937.php">Ralph Castain: "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
<li><strong>Previous message:</strong> <a href="12935.php">Addepalli, Srirangam V: "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
<li><strong>In reply to:</strong> <a href="12933.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12939.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on aNehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know a few national labs that run OMPI w/Fedora 9, but that isn't on Nehalem hardware and is using gcc 4.3.x.
<br>
<p>However, I think the key issue really is the compiler. I have seen similar problems on multiple platforms and OS's whenever I use GCC 4.4.x - I -think- it has to do with the automatic vectorization in that compiler, but I can't swear to it.
<br>
<p>You can always install a personal copy of gcc for your own use on the system and see if that solves the problem. Just download a version like 4.3.x from the gnu site.
<br>
<p>I know 4.3.x doesn't have a problem, though again I haven't tried it on Nehalem.
<br>
<p><p>On May 6, 2010, at 12:10 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your testimony.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So now I have two important data points (you and Douglas Guptill)
</span><br>
<span class="quotelev1">&gt; to support the argument here that installing Fedora
</span><br>
<span class="quotelev1">&gt; on machines meant to do scientific and parallel computation
</span><br>
<span class="quotelev1">&gt; is to ask for trouble.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use CentOS in our cluster, but this is a standalone machine
</span><br>
<span class="quotelev1">&gt; I don't have control of.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anybody out there using Open MPI + Fedora Core + Nehalem ?
</span><br>
<span class="quotelev1">&gt; Happy?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On May 6, 2010, at 1:11 PM, Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just for the record, I am using:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI 1.4.2 (released 2 days ago), gcc 4.4.3  (g++, gfortran).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All on Fedora Core 12, kernel 2.6.32.11-99.fc12.x86_64 #1 SMP.
</span><br>
<span class="quotelev2">&gt;&gt; Someone asked earlier in this thread -- I've used RHEL4.4 and RHEL5.4 on my Nehalem EP boxen.  I used the default gcc on those RHELs for compiling everything (OMPI + apps).  I don't remember what it was on RHEL 4.4, but on RHEL 5.4, it's GCC 4.1.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You and Jeff reported that your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nehalems get along with Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would guess other people have functional Open MPI + Nehalem systems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All I can think of is that some mess with the OS/gcc is causing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the trouble here.
</span><br>
<span class="quotelev2">&gt;&gt; I don't have much experience with kernels outside 
</span><br>
<span class="quotelev1">&gt; of the RHEL kernels,
</span><br>
<span class="quotelev1">&gt; so I don't know if 2.6.32 is problematic or not.  :-(
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
<li><strong>Next message:</strong> <a href="12937.php">Ralph Castain: "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
<li><strong>Previous message:</strong> <a href="12935.php">Addepalli, Srirangam V: "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand interconnect ... ??"</a>
<li><strong>In reply to:</strong> <a href="12933.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12939.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on aNehalem	standalone machine?"</a>
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
