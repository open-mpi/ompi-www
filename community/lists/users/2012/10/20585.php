<?
$subject_val = "Re: [OMPI users] Performance/stability impact of thread support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 06:03:54 2012" -->
<!-- isoreceived="20121030100354" -->
<!-- sent="Tue, 30 Oct 2012 11:03:47 +0100" -->
<!-- isosent="20121030100347" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance/stability impact of thread support" -->
<!-- id="508FA603.4000401_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="92EEEE34-57B6-46B8-BA3A-D6E4183A80A6_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance/stability impact of thread support<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-30 06:03:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20586.php">Damien Hocking: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Previous message:</strong> <a href="20584.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>In reply to:</strong> <a href="20579.php">Daniel Mitchell: "[OMPI users] Performance/stability impact of thread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20587.php">Jeff Squyres: "Re: [OMPI users] Performance/stability impact of thread support"</a>
<li><strong>Reply:</strong> <a href="20587.php">Jeff Squyres: "Re: [OMPI users] Performance/stability impact of thread support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At least, be aware of silently disabling the usage of InfiniBand if 'multiple'
<br>
threading level is activated:
<br>
<p><a href="http://www.open-mpi.org/community/lists/devel/2012/10/11584.php">http://www.open-mpi.org/community/lists/devel/2012/10/11584.php</a>
<br>
<p><p><p><p>On 10/29/12 19:14, Daniel Mitchell wrote:
<br>
<span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've asked my linux distribution to repackage Open MPI with thread support (meaning configure with --enable-thread-multiple). They are willing to do this if it won't have any performance/stability hit for Open MPI users who don't need thread support (meaning everyone but me, apparently). Does enabling thread support impact performance/stability?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daniel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20585/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20586.php">Damien Hocking: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Previous message:</strong> <a href="20584.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>In reply to:</strong> <a href="20579.php">Daniel Mitchell: "[OMPI users] Performance/stability impact of thread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20587.php">Jeff Squyres: "Re: [OMPI users] Performance/stability impact of thread support"</a>
<li><strong>Reply:</strong> <a href="20587.php">Jeff Squyres: "Re: [OMPI users] Performance/stability impact of thread support"</a>
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
