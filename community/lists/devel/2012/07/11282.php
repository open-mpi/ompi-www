<?
$subject_val = "[OMPI devel] Still bothered / cannot run an application";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 12 12:04:12 2012" -->
<!-- isoreceived="20120712160412" -->
<!-- sent="Thu, 12 Jul 2012 18:04:07 +0200" -->
<!-- isosent="20120712160407" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI devel] Still bothered / cannot run an application" -->
<!-- id="4FFEF577.9090708_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Still bothered / cannot run an application<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-12 12:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11283.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI_Ireduce_scatter_block hangs"</a>
<li><strong>Previous message:</strong> <a href="11281.php">Mikhail Kurnosov: "[OMPI devel] MPI_Ireduce_scatter_block hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11292.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
<li><strong>Reply:</strong> <a href="11292.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
<li><strong>Reply:</strong> <a href="11293.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(cross-post to 'users' and 'devel' mailing lists)
<br>
<p>Dear Open MPI developer,
<br>
a long time ago, I reported about an error in Open MPI:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2012/02/18565.php">http://www.open-mpi.org/community/lists/users/2012/02/18565.php</a>
<br>
<p>Well, in the 1.6 the behaviour has changed: the test case don't hang forever and 
<br>
block an InfiniBand interface, but seem to run through, and now this error 
<br>
message is printed:
<br>
--------------------------------------------------------------------------
<br>
The OpenFabrics (openib) BTL failed to register memory in the driver.
<br>
Please check /var/log/messages or dmesg for driver specific failure
<br>
reason.
<br>
The failure occured here:
<br>
<p>&nbsp;&nbsp;&nbsp;Local host:    mlx4_0
<br>
&nbsp;&nbsp;&nbsp;Device:        openib_reg_mr
<br>
&nbsp;&nbsp;&nbsp;Function:      Cannot allocate memory()
<br>
&nbsp;&nbsp;&nbsp;Errno says:
<br>
<p>You may need to consult with your system administrator to get this
<br>
problem fixed.
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>Looking into FAQ
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
deliver us no hint about what is bad. The locked memory is unlimited:
<br>
--------------------------------------------------------------------------
<br>
pk224850_at_linuxbdc02:~[502]$ cat /etc/security/limits.conf | grep memlock
<br>
#        - memlock - max locked-in-memory address space (KB)
<br>
*               hard    memlock         unlimited
<br>
*               soft    memlock         unlimited
<br>
--------------------------------------------------------------------------
<br>
<p><p>Could it still be an Open MPI issue? Are you interested in reproduce this?
<br>
<p>Best,
<br>
Paul Kapinos
<br>
<p>P.S: The same test with Intel MPI cannot run using DAPL, but run very fine opef 
<br>
'ofa' (= native verbs as Open MPI use it). So I believe the problem is rooted in 
<br>
the communication pattern of the program; it send very LARGE messages to a lot 
<br>
of/all other processes. (The program perform an matrix transposition of a 
<br>
distributed matrix).
<br>
<p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11282/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11283.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI_Ireduce_scatter_block hangs"</a>
<li><strong>Previous message:</strong> <a href="11281.php">Mikhail Kurnosov: "[OMPI devel] MPI_Ireduce_scatter_block hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11292.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
<li><strong>Reply:</strong> <a href="11292.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
<li><strong>Reply:</strong> <a href="11293.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
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
