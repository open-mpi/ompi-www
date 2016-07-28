<?
$subject_val = "Re: [OMPI users] Scalability issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 24 09:51:12 2010" -->
<!-- isoreceived="20101224145112" -->
<!-- sent="Fri, 24 Dec 2010 15:50:43 +0100" -->
<!-- isosent="20101224145043" -->
<!-- name="Benjamin Toueg" -->
<!-- email="btoueg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scalability issue" -->
<!-- id="AANLkTi=yUYUgyFOunSobnRA4UF=YSH+EyMs8snnq_tBH_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C188C428-16FF-467E-A2D2-93199DDF8E63_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Scalability issue<br>
<strong>From:</strong> Benjamin Toueg (<em>btoueg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-24 09:50:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15225.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Previous message:</strong> <a href="15223.php">Advanced Computing Group University of Padova: "[OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>In reply to:</strong> <a href="15029.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I did some testing and felt like giving some feeback. When I started this
<br>
discussion I compiled openmpi like that:
<br>
./configure --prefix=/home/toueg/openmpi CXX=g++ CC=gcc F77=gfortran
<br>
FC=gfortran *FLAGS=&quot;-m64 -fdefault-integer-8 -fdefault-real-8
<br>
-fdefault-double-8&quot; FCFLAGS=&quot;-m64 -fdefault-integer-8 -fdefault-real-8
<br>
-fdefault-double-8&quot;* --disable-mpi-f90
<br>
<p>Now I compile openmpi like this:
<br>
./configure --prefix=/home/toueg/openmpi CXX=g++ CC=gcc F77=gfortran
<br>
FC=gfortran --disable-mpi-f90
<br>
<p>I still have the segmentation fault I had:
<br>
*** Process received signal ***
<br>
Signal: Segmentation fault (11)
<br>
Signal code: Address not mapped (1)
<br>
Failing at address: 0x2c2579fc0
<br>
[ 0] /lib/libpthread.so.0 [0x7f52d2930410]
<br>
[ 1] /home/toueg/openmpi/lib/openmpi/mca_pml_ob1.so [0x7f52d153fe03]
<br>
[ 2] /home/toueg/openmpi/lib/libmpi.so.0(PMPI_Recv+0x2d2) [0x7f52d3504a1e]
<br>
[ 3] /home/toueg/openmpi/lib/libmpi_f77.so.0(pmpi_recv_+0x10e)
<br>
[0x7f52d36cf9c6]
<br>
<p>It seems it doesn't change anything to compile openmpi with or without the
<br>
options FLAGS=&quot;-m64 -fdefault-integer-8 -fdefault-real-8 -fdefault-double-8&quot;
<br>
FCFLAGS=&quot;-m64 -fdefault-integer-8 -fdefault-real-8 -fdefault-double-8&quot;.
<br>
I'd like to stress that in both cases MPI_INTEGER size is 4-bytes long.
<br>
<p>I'll follow my own intuition and Jeff's advice that is using the same flags
<br>
for compiling openmpi as compiling DRAGON.
<br>
<p>Thanks,
<br>
Benjamin
<br>
<p>I always recommend using the same flags for compiling OMPI as compiling your
<br>
<span class="quotelev1">&gt; application.  Of course, you can vary some flags that don't matter (e.g.,
</span><br>
<span class="quotelev1">&gt; compiling your app with -g and compiling OMPI with -Ox).  But for
</span><br>
<span class="quotelev1">&gt; &quot;significant&quot; behavior changes (like changing the size of INTEGER), they
</span><br>
<span class="quotelev1">&gt; should definitely match between your app and OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; As per several previous discussions here in the list,
</span><br>
<span class="quotelev2">&gt; &gt; I was persuaded to believe that MPI_INT / MPI_INTEGER is written
</span><br>
<span class="quotelev2">&gt; &gt; in stone to be 4-bytes (perhaps by MPI standard,
</span><br>
<span class="quotelev2">&gt; &gt; perhaps the configure script, maybe by both),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Neither, actually.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI spec is very, very careful not to mandate the size of int or
</span><br>
<span class="quotelev1">&gt; INTEGER at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; and that &quot;counts&quot; in [Open]MPI would also be restricted to that size
</span><br>
<span class="quotelev2">&gt; &gt; i.e., effectively up to 2147483647, if I counted right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Most* commodity systems (excluding the embedded world) have 4 byte int's
</span><br>
<span class="quotelev1">&gt; these days, in part because most systems are this way (i.e., momentum).
</span><br>
<span class="quotelev1">&gt; Hence, when we talk about the 2B count limit, we're referring to the fact
</span><br>
<span class="quotelev1">&gt; that most systems where MPI is used default to 4 byte int's.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I may have inadvertently misled Benjamin, if this perception is wrong.
</span><br>
<span class="quotelev2">&gt; &gt; I will gladly stand corrected, if this is so.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You are the OpenMPI user's oracle (oops, sorry Cisco),
</span><br>
<span class="quotelev2">&gt; &gt; so please speak out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please buy Cisco stuff!  :-p
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15224/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15225.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Previous message:</strong> <a href="15223.php">Advanced Computing Group University of Padova: "[OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>In reply to:</strong> <a href="15029.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
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
