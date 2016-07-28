<?
$subject_val = "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 30 00:38:13 2014" -->
<!-- isoreceived="20140430043813" -->
<!-- sent="Wed, 30 Apr 2014 13:38:16 +0900" -->
<!-- isosent="20140430043816" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation" -->
<!-- id="53607E38.40102_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="535FA8B4.7050105_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-30 00:38:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14658.php">Gilles Gouaillardet: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
<li><strong>Previous message:</strong> <a href="14656.php">Mike Dubman: "Re: [OMPI devel] OSHMEM svn ignores missing"</a>
<li><strong>In reply to:</strong> <a href="14650.php">Edgar Gabriel: "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Edgar and Christoph,
<br>
<p>i do not think ROMIO supports this yet.
<br>
<p>from ompi/mca/io/romio/romio/README
<br>
&quot;This version of ROMIO includes everything defined in the MPI I/O
<br>
chapter except support for file interoperability [...]&quot;
<br>
<p>i also ran ompi/mca/io/romio/romio/test/external32.c :
<br>
<p>on a x86_64 box (little endian)
<br>
$ ./external32
<br>
native datarep is LITTLE ENDIAN
<br>
external32 datarep is LITTLE ENDIAN
<br>
internal datarep is LITTLE ENDIAN
<br>
<p>on a ppc64 box (big endian)
<br>
$ ./external32
<br>
native datarep is BIG ENDIAN
<br>
external32 datarep is BIG ENDIAN
<br>
internal datarep is BIG ENDIAN
<br>
<p><p>that being said :
<br>
with mpich (trunk), on a x86_64 box :
<br>
$ ./external32.mpich
<br>
native datarep is LITTLE ENDIAN
<br>
external32 datarep is BIG ENDIAN
<br>
internal datarep is LITTLE ENDIAN
<br>
<p>here is the output of mpi-io-external32 (with mpich) :
<br>
$ ./mpi-io-external32.mpich
<br>
Output file: mpi-io-external32.dat
<br>
[-1] Block at address 0x0000000000c6f0e8 is corrupted (probably write
<br>
past end)
<br>
[-1] Block being freed allocated in
<br>
rc/mpich/src/mpi/romio/mpi-io/mpiu_external32.c[159]
<br>
[-1] Block cookie should be f0e0d0c9 but was e2ffffff4c054000
<br>
<p>$ od -t x1 ./mpi-io-external32.dat
<br>
0000000 ff ff ff e2 00 00 00 00 40 30 40 00
<br>
<p>MPI_INT was written big endian (good)
<br>
but
<br>
MPI_DOUBLE was written little endian (bad)
<br>
<p><p>my conclusion is that the ROMIO included in OpenMPI is a few steps
<br>
behind the one provided with MPICH
<br>
and/but MPICH ROMIO does not fully support file interoperability
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/04/29 22:27, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; the way you launch the app, you will be using ROMIO, and I am not 100%
</span><br>
<span class="quotelev1">&gt; sure about how the data representation stuff is integrated with OMPI. I
</span><br>
<span class="quotelev1">&gt; am pretty sure that we are not doing the right thing for OMPIO, but I
</span><br>
<span class="quotelev1">&gt; will look into later this week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/29/2014 7:03 AM, Christoph Niethammer wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems for me that the endianness is wrong in Open MPI's I/O for the external32 data representation. :O
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Find attached my test programs which write the integer -30 and the double 16.25 into a file.
</span><br>
<span class="quotelev2">&gt;&gt; Here the output on my Linux system:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpicc     c-xdr.c   -o c-xdr
</span><br>
<span class="quotelev2">&gt;&gt; mpicc     mpi-io-external32.c   -o mpi-io-external32
</span><br>
<span class="quotelev2">&gt;&gt; ./c-xdr
</span><br>
<span class="quotelev2">&gt;&gt; Output file: c-xdr.dat
</span><br>
<span class="quotelev2">&gt;&gt; hexdump c-xdr.dat
</span><br>
<span class="quotelev2">&gt;&gt; 0000000 ffff e2ff 3040 0040 0000 0000          
</span><br>
<span class="quotelev2">&gt;&gt; 000000c
</span><br>
<span class="quotelev2">&gt;&gt; ./mpi-io-external32
</span><br>
<span class="quotelev2">&gt;&gt; Output file: mpi-io-external32.dat
</span><br>
<span class="quotelev2">&gt;&gt; hexdump mpi-io-external32.dat
</span><br>
<span class="quotelev2">&gt;&gt; 0000000 ffe2 ffff 0000 0000 4000 4030          
</span><br>
<span class="quotelev2">&gt;&gt; 000000c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt; Christoph Niethammer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Christoph Niethammer
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev2">&gt;&gt; Nobelstrasse 19
</span><br>
<span class="quotelev2">&gt;&gt; 70569 Stuttgart
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tel: ++49(0)711-685-87203
</span><br>
<span class="quotelev2">&gt;&gt; email: niethammer_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14658.php">Gilles Gouaillardet: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
<li><strong>Previous message:</strong> <a href="14656.php">Mike Dubman: "Re: [OMPI devel] OSHMEM svn ignores missing"</a>
<li><strong>In reply to:</strong> <a href="14650.php">Edgar Gabriel: "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
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
