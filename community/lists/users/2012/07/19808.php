<?
$subject_val = "Re: [OMPI users] issue with addresses";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 23 07:18:38 2012" -->
<!-- isoreceived="20120723111838" -->
<!-- sent="Mon, 23 Jul 2012 11:18:32 +0000" -->
<!-- isosent="20120723111832" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] issue with addresses" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC9030E21BF_at_rz-mbx2.win.rz.rwth-aachen.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CALXD7G6XenAk-bW8xrKa5D83-NN+9rzRTdoX3gqu026F5FuAxA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] issue with addresses<br>
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-23 07:18:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19809.php">Priyesh Srivastava: "Re: [OMPI users] issue with addresses"</a>
<li><strong>Previous message:</strong> <a href="19807.php">Paul Kapinos: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<li><strong>In reply to:</strong> <a href="19802.php">Priyesh Srivastava: "[OMPI users] issue with addresses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19809.php">Priyesh Srivastava: "Re: [OMPI users] issue with addresses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Placement of data in memory is highly implementation dependent. I assume you
<br>
are running on Linux. This OS&#146; libc (glibc) provides two different methods
<br>
for dynamic allocation of memory &#150; heap allocation and anonymous mappings.
<br>
Heap allocation is used for small data up to MMAP_TRESHOLD bytes in length
<br>
(128 KiB by default, controllable by calls to &#147;mallopt(3)&#148;). Such
<br>
allocations end up at predictable memory addresses as long as all processes
<br>
in your MPI job allocate memory following exactly the same pattern. For
<br>
larger memory blocks malloc() uses private anonymous mappings which might
<br>
end at different locations in the virtual address space depending on how it
<br>
is being used.
<br>
<p>What this has to do with your Fortran code? Fortran runtimes use malloc()
<br>
behind the scenes to allocate automatic heap arrays as well as ALLOCATABLE
<br>
ones. Small arrays are allocated on the stack usually and will mostly have
<br>
the same addresses unless some stack placement randomisation is in effect.
<br>
<p>Hope that helps.
<br>
<p>Kind regards,
<br>
Hristo
<br>
<p><span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
Behalf Of Priyesh Srivastava
<br>
<span class="quotelev1">&gt; Sent: Saturday, July 21, 2012 10:00 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] issue with addresses
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am working on a mpi program. I have been printing&#160;the&#160;addresses of
</span><br>
different variables and arrays using the MPI_GET_ADDRESS command. What I
<br>
have &gt; noticed is that all the processors are giving the same address of a
<br>
particular variable as long as the address is less than 2 GB size. When the
<br>
address of a &gt; variable/ array&#160;is&#160;more than 2GB size different processors
<br>
are giving different addresses for the same variable. (I am working on a 64
<br>
bit system and am using &gt; the new MPI Functions and MPI_ADDRESS_KIND
<br>
integers for getting&#160;the&#160;addresses).
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my question is that should&#160;all&#160;the processors give the same address for
</span><br>
same variables? If so then why is this not happening for variables with
<br>
larger addresses.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; priyesh
</span><br>
<p><pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19808/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19809.php">Priyesh Srivastava: "Re: [OMPI users] issue with addresses"</a>
<li><strong>Previous message:</strong> <a href="19807.php">Paul Kapinos: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<li><strong>In reply to:</strong> <a href="19802.php">Priyesh Srivastava: "[OMPI users] issue with addresses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19809.php">Priyesh Srivastava: "Re: [OMPI users] issue with addresses"</a>
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
