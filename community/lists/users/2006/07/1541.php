<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul  4 09:22:41 2006" -->
<!-- isoreceived="20060704132241" -->
<!-- sent="Tue, 4 Jul 2006 15:24:47 +0200 (CEST)" -->
<!-- isosent="20060704132447" -->
<!-- name="Dani&#235;l Mantione" -->
<!-- email="daniel.mantione_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.1 backward compatible?" -->
<!-- id="Pine.LNX.4.63.0607041446380.29132_at_druifje.clustervision.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9D79_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Dani&#235;l Mantione (<em>daniel.mantione_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-04 09:24:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1542.php">Brian Barrett: "Re: [OMPI users] Compilation problem"</a>
<li><strong>Previous message:</strong> <a href="1540.php">Terry D. Dontje: "Re: [OMPI users] OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:0), si_code:1(BUS_ADRALN) (Terry D., Dontje)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1501.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1502.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 29 Jun 2006, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; I think you may have caught us in an unintentional breakage.  If your 
</span><br>
<span class="quotelev1">&gt; Open MPI was compiled as shared libraries and dynamic shared objects (the 
</span><br>
<span class="quotelev1">&gt; default), this error should not have happened since we did not change 
</span><br>
<span class="quotelev1">&gt; mpi.h.
</span><br>
<p>Sure, I simply use the default.
<br>
<p><span class="quotelev1">&gt; So there must be a second-order effect going on here (somehow the 
</span><br>
<span class="quotelev1">&gt; size of a back-end data structure caused a problem.  Hrm.). 
</span><br>
<p><span class="quotelev1">&gt; We'll look into this, because for where all of OMPI's functionality is 
</span><br>
<span class="quotelev1">&gt; in shared libraries and components, the user's application should be 
</span><br>
<span class="quotelev1">&gt; isolated from internal changes like this (i.e., and we can provide 
</span><br>
<span class="quotelev1">&gt; forward compatibility).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect that something deeper is going on, so let us go investigate 
</span><br>
<span class="quotelev1">&gt; and come back with a more definitive statement.
</span><br>
<p>Well, following the warnings, I check the size of the ompi_mpi_comm_null 
<br>
and ompi_mpi_comm_world symbols in both the library and the executable 
<br>
with objdump -T:
<br>
<p>OpenMPI 1.1 library:
<br>
00000000001e8140 g    DO .bss   00000000000001c8  Base        ompi_mpi_comm_null
<br>
00000000001e83a0 g    DO .bss   00000000000001c8  Base        ompi_mpi_comm_world
<br>
<p><p>OpenMPI 1.0.2 executable:
<br>
000000000058f3d0 g    DO .bss   00000000000001c0              ompi_mpi_comm_world
<br>
000000000058ef00 g    DO .bss   00000000000001c0              ompi_mpi_comm_null
<br>
<p>So, the size indeed does have changed. Now, MPI_COMM_WORLD is an opaque 
<br>
pointer, so if the internal data structure changes, this should have no 
<br>
effect on the functioning of executable.
<br>
<p>However, note that ompi_mpi_comm_* are not referenced in the 1.0.2 
<br>
executable, but declared! The most likely cause of this is that they were 
<br>
declared in the assembler file using .comm.
<br>
<p>The dynamic linker will merge both declarations. Now, merging two symbols 
<br>
with a different size is hard, the linker will have to make a choice. 
<br>
Suppose it chooses the declaration in the executable. Then the image in 
<br>
memory will contain ompi_mpi_comm_* datastructures of $1c0 bytes, while 
<br>
the library expects them to be $1c8 bytes.
<br>
<p>Conclusion: Opaque pointers should not be declared with .comm, they should 
<br>
just be referenced.
<br>
<p>I didn't tell my system details yet: I'm using OpenSuSE 10 on the x86_64 
<br>
architecture. The compiler does not seem to be of any influence: the 
<br>
result is the same with Gcc, Intel C and Pathscale.
<br>
<p>Dani&#235;l mantione
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1542.php">Brian Barrett: "Re: [OMPI users] Compilation problem"</a>
<li><strong>Previous message:</strong> <a href="1540.php">Terry D. Dontje: "Re: [OMPI users] OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:0), si_code:1(BUS_ADRALN) (Terry D., Dontje)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1501.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1502.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
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
