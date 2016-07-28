<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 18 14:30:00 2007" -->
<!-- isoreceived="20071018183000" -->
<!-- sent="Thu, 18 Oct 2007 14:29:55 -0400" -->
<!-- isosent="20071018182955" -->
<!-- name="Gurhan" -->
<!-- email="gurhan.ozen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64" -->
<!-- id="5849f1820710181129ta3599e5x7419f17de38a255b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="df8c8a6d0710180942v2ff22ae1s516caac35e71e4cc_at_mail.gmail.com" -->
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
<strong>From:</strong> Gurhan (<em>gurhan.ozen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-18 14:29:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4252.php">Murat Knecht: "[OMPI users] Merging Intracommunicators"</a>
<li><strong>Previous message:</strong> <a href="4250.php">Daniel Rozenbaum: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<li><strong>In reply to:</strong> <a href="4246.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4257.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>Reply:</strong> <a href="4257.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>configure:33918: gcc -DNDEBUG -O2 -g -pipe -m32 -march=i386
<br>
-mtune=pentium4 -fno-strict-aliasing -I. -c conftest.c
<br>
configure:33925: $? = 0
<br>
configure:33935: gfortran   conftestf.f90 conftest.o -o conftest
<br>
/usr/bin/ld: warning: i386 architecture of input file `conftest.o' is
<br>
incompatible with i386:x86-64 output
<br>
configure:33942: $? = 0
<br>
configure:33990: ./conftest
<br>
configure:33997: $? = 139
<br>
configure:34006: error: Could not determine size of LOGICAL
<br>
<p>Is this correct? We are feeding a 32-bit object file to be linked with
<br>
a 64-bit output executable file? When target is i386 shouldn't -m32
<br>
-march=i386 need to be passed on to gfortran as well on above
<br>
instance, unless it's for negative testing?
<br>
<p>Thanks,
<br>
gurhan
<br>
<p><p>On 10/18/07, Jim Kusznir &lt;jkusznir_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Attached is the requested info.  There's not much here, though...it
</span><br>
<span class="quotelev1">&gt; dies pretty early in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Jim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/17/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 17, 2007, at 12:35 PM, Jim Kusznir wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; checking if Fortran 90 compiler supports LOGICAL... yes
</span><br>
<span class="quotelev3">&gt; &gt; &gt; checking size of Fortran 90 LOGICAL... ./configure: line 34070:  7262
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Segmentation fault      ./conftest 1&gt;&amp;5 2&gt;&amp;1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure: error: Could not determine size of LOGICAL
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Awesome!  It looks like gfortran itself is seg faulting.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you send all the information listed on the getting help page?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That will help confirm/deny whether it's gfortran itself that is seg
</span><br>
<span class="quotelev2">&gt; &gt; faulting.  If it's gfortran that's seg faulting, there's not much
</span><br>
<span class="quotelev2">&gt; &gt; that Open MPI can do...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
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
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4252.php">Murat Knecht: "[OMPI users] Merging Intracommunicators"</a>
<li><strong>Previous message:</strong> <a href="4250.php">Daniel Rozenbaum: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<li><strong>In reply to:</strong> <a href="4246.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4257.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>Reply:</strong> <a href="4257.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
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
