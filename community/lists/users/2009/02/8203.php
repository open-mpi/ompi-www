<?
$subject_val = "Re: [OMPI users] 3.5 seconds before application launches";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 16:03:48 2009" -->
<!-- isoreceived="20090225210348" -->
<!-- sent="Wed, 25 Feb 2009 22:01:55 +0100" -->
<!-- isosent="20090225210155" -->
<!-- name="doriankrause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 3.5 seconds before application launches" -->
<!-- id="49A5B1C3.3050504_at_web.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4de51c660902241642w63fb0235x998bb89ffbae641e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 3.5 seconds before application launches<br>
<strong>From:</strong> doriankrause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-25 16:01:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8204.php">George Bosilca: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="8202.php">Brian W. Barrett: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>In reply to:</strong> <a href="8190.php">Vittorio: "[OMPI users] 3.5 seconds before application launches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8206.php">Jeff Squyres: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<li><strong>Reply:</strong> <a href="8206.php">Jeff Squyres: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Vittorio wrote:
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.3 on two nodes connected with Infiniband; i'm using
</span><br>
<span class="quotelev1">&gt; Gentoo Linux x86_64.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've noticed that before any application starts there is a variable amount
</span><br>
<span class="quotelev1">&gt; of time (around 3.5 seconds) in which the terminal just hangs with no output
</span><br>
<span class="quotelev1">&gt; and then the application starts and works well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I imagined that there might have been some initialization routine somewhere
</span><br>
<span class="quotelev1">&gt; in the Infiniband layer or in the software stack, but as i continued my
</span><br>
<span class="quotelev1">&gt; tests i observed that this &quot;latency&quot; time is not present in other MPI
</span><br>
<span class="quotelev1">&gt; implementations (like mvapich2) where my application starts immediately (but
</span><br>
<span class="quotelev1">&gt; performs worse).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is my MPI configuration/installation broken or is this expected behaviour?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Hi,
<br>
<p>I'm not really qualified to answer this question, but I know that in 
<br>
contrast
<br>
to other MPI implementations (MPICH) the modular structure of Open MPI 
<br>
is based
<br>
on shared libs that are dlopened at the startup. As symbol relocation can be
<br>
costly this might be a reason why the startup time is higher.
<br>
<p>Have you checked wether this is an mpiexec start issue or the MPI_Init call?
<br>
<p>Regards,
<br>
Dorian
<br>
<p><span class="quotelev1">&gt; thanks a lot!
</span><br>
<span class="quotelev1">&gt; Vittorio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="8204.php">George Bosilca: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="8202.php">Brian W. Barrett: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>In reply to:</strong> <a href="8190.php">Vittorio: "[OMPI users] 3.5 seconds before application launches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8206.php">Jeff Squyres: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<li><strong>Reply:</strong> <a href="8206.php">Jeff Squyres: "Re: [OMPI users] 3.5 seconds before application launches"</a>
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
