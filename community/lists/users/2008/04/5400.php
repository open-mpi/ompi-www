<?
$subject_val = "Re: [OMPI users] mpicc -showme:compile output (possible bug report)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 08:18:45 2008" -->
<!-- isoreceived="20080416121845" -->
<!-- sent="Wed, 16 Apr 2008 08:18:33 -0400" -->
<!-- isosent="20080416121833" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc -showme:compile output (possible bug report)" -->
<!-- id="90F3790B-4871-4365-9C26-1AE91D547D90_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c02b565a0804160457r332beb10j4aa9944ae850cf8a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpicc -showme:compile output (possible bug report)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-16 08:18:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5401.php">Jozef K·Ëer: "Re: [OMPI users] open mpi on smp"</a>
<li><strong>Previous message:</strong> <a href="5399.php">Crni Gorac: "[OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>In reply to:</strong> <a href="5399.php">Crni Gorac: "[OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5402.php">Crni Gorac: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Reply:</strong> <a href="5402.php">Crni Gorac: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What exactly does mpicc --showme:compile output?
<br>
<p>mpicc (and friends) typically do not output -I only for &quot;special&quot;  
<br>
directories, such as /usr/include, because adding -I/usr/include may  
<br>
subvert the compiler's normal include directory search order.
<br>
<p><p>On Apr 16, 2008, at 7:57 AM, Crni Gorac wrote:
<br>
<span class="quotelev1">&gt; Am using CMake build system along with an OpenMPI based project.
</span><br>
<span class="quotelev1">&gt; CMake is using mpicc's -showme:compile and -showme:link output to
</span><br>
<span class="quotelev1">&gt; build compile and link flags; however, it is expecting -showme:compile
</span><br>
<span class="quotelev1">&gt; to dump at least some &quot;-I&quot; flags, that it is further parsing in order
</span><br>
<span class="quotelev1">&gt; to build the list of include directories.  As OpenMPI's mpicc (OpenMPI
</span><br>
<span class="quotelev1">&gt; compiled from source on a Slackware Linux 12.0 installation) is not
</span><br>
<span class="quotelev1">&gt; printing alike flags, CMake is unable to utilize OpenMPI.  So, I'm
</span><br>
<span class="quotelev1">&gt; wondering would it be possible to change OpenMPI to dump the path to
</span><br>
<span class="quotelev1">&gt; the directory where mpi.h installed in an &quot;-I&quot; flag, when mpicc
</span><br>
<span class="quotelev1">&gt; -showme:compile command run?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5401.php">Jozef K·Ëer: "Re: [OMPI users] open mpi on smp"</a>
<li><strong>Previous message:</strong> <a href="5399.php">Crni Gorac: "[OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>In reply to:</strong> <a href="5399.php">Crni Gorac: "[OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5402.php">Crni Gorac: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Reply:</strong> <a href="5402.php">Crni Gorac: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
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
