<?
$subject_val = "Re: [OMPI users] Running problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 05:33:09 2009" -->
<!-- isoreceived="20090902093309" -->
<!-- sent="Wed, 2 Sep 2009 14:33:03 +0500" -->
<!-- isosent="20090902093303" -->
<!-- name="amjad ali" -->
<!-- email="amjad11_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running problem" -->
<!-- id="428810f20909020233n1e213564x53574559bec5a64_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A9CDDFA.9010900_at_astro.rug.nl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running problem<br>
<strong>From:</strong> amjad ali (<em>amjad11_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-02 05:33:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10557.php">Lee Amy: "[OMPI users] Help: Infiniband interface hang"</a>
<li><strong>Previous message:</strong> <a href="10555.php">Jeff Squyres: "Re: [OMPI users] explicit routing for multiple network interfaces"</a>
<li><strong>In reply to:</strong> <a href="10532.php">J.S. van Bethlehem: "Re: [OMPI users] Running problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jakob, Thanks for reply.
<br>
Please see below.
<br>
<p>On Tue, Sep 1, 2009 at 1:40 PM, J.S. van Bethlehem &lt;
<br>
j.s.van.bethlehem_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt; &gt;From the look of it, this is not an OMPI problem, but a problem with
</span><br>
<span class="quotelev1">&gt; your paths. You need to make sure that libGLU.so.1 can be found by the
</span><br>
<span class="quotelev1">&gt; system at runtime. This is true for _all_ the systems that are in your
</span><br>
<span class="quotelev1">&gt; machinefile. So make sure that on all systems the path to that library
</span><br>
<span class="quotelev1">&gt; is in the LD_LIBRARY_PATH environment variable. That will fix this. If
</span><br>
<span class="quotelev1">&gt; you need help with this, you'll need to tell more details on your
</span><br>
<span class="quotelev1">&gt; installation, your system and your shell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings, Jakob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>My installation is ROCKS-5 (64 bit), 4-nodes with Xeon3085, bash shell.
<br>
Compilers are GNU 64-bit.
<br>
<p>Next??
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; amjad ali wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt; A simple program at my 4-node ROCKS cluster runs fine with command:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi/bin/mpirun -np 4 -machinefile machines ./mpi-ring
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Another bigger programs runs fine on the head node only with command:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cd ./sphere; /opt/openmpi/bin/mpirun -np 4 ../bin/flo2d
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But with the command:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cd /sphere; /opt/openmpi/bin/mpirun -np 4 -machinefile ../machines
</span><br>
<span class="quotelev2">&gt; &gt; ../bin/flo2d
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It gives output that:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ../bin/flo2d: error while loading shared libraries: libGLU.so.1: cannot
</span><br>
<span class="quotelev2">&gt; &gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt; ../bin/flo2d: error while loading shared libraries: libGLU.so.1: cannot
</span><br>
<span class="quotelev2">&gt; &gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt; ../bin/flo2d: error while loading shared libraries: libGLU.so.1: cannot
</span><br>
<span class="quotelev2">&gt; &gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (cursor blinking here)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ===================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please fix it.
</span><br>
<span class="quotelev2">&gt; &gt; Note that with this bigger code the exe file is in different location
</span><br>
<span class="quotelev2">&gt; &gt; than the ./sphere.
</span><br>
<span class="quotelev2">&gt; &gt; Openmpi is installed with GNU compilers.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Amjad Ali
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10556/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10557.php">Lee Amy: "[OMPI users] Help: Infiniband interface hang"</a>
<li><strong>Previous message:</strong> <a href="10555.php">Jeff Squyres: "Re: [OMPI users] explicit routing for multiple network interfaces"</a>
<li><strong>In reply to:</strong> <a href="10532.php">J.S. van Bethlehem: "Re: [OMPI users] Running problem"</a>
<!-- nextthread="start" -->
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
