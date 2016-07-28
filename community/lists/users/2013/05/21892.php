<?
$subject_val = "Re: [OMPI users] /usr/bin/ld: skipping incompatible ......";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  9 16:27:06 2013" -->
<!-- isoreceived="20130509202706" -->
<!-- sent="Thu, 9 May 2013 16:27:02 -0400" -->
<!-- isosent="20130509202702" -->
<!-- name="Matteo Parsani" -->
<!-- email="parsani.matteo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] /usr/bin/ld: skipping incompatible ......" -->
<!-- id="CAMZtdMvAWhhkd_wYmzOMrp3uH4oKjTMLS2HjWKDqYsmkRwygJg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F6120F7_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] /usr/bin/ld: skipping incompatible ......<br>
<strong>From:</strong> Matteo Parsani (<em>parsani.matteo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-09 16:27:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21893.php">deepak mehta: "[OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>Previous message:</strong> <a href="21891.php">Elken, Tom: "Re: [OMPI users] mpirun error"</a>
<li><strong>In reply to:</strong> <a href="21888.php">Jeff Squyres (jsquyres): "Re: [OMPI users] /usr/bin/ld: skipping incompatible ......"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff,
<br>
thank you for your feedback.
<br>
I have this problem when I compile c, c++ and fortran code with the mpi
<br>
bindings, i.e. mpicc, mpicxx and mpif90. If I compile directly codes with
<br>
gcc, g++ or gfortran I do not have this problem. This is why I think it's
<br>
something related to openmpi.
<br>
<p>Thanks!
<br>
<p><p>On Thu, May 9, 2013 at 8:32 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I think you cited the correct prior thread on the OMPI users list, and I
</span><br>
<span class="quotelev1">&gt; think it correctly identifies the problem: the linker is finding the
</span><br>
<span class="quotelev1">&gt; &quot;wrong&quot; library first, determines that it is wrong, and skips it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You probably should remove the &quot;wrong&quot; library from your LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; (e.g., if you're building for 64 bit, then remove the 32 bit library dir,
</span><br>
<span class="quotelev1">&gt; and vice versa).  You *might* be able to remove both of those directories
</span><br>
<span class="quotelev1">&gt; from your LD_LIBRARY_PATH, because gcc might be searching those directories
</span><br>
<span class="quotelev1">&gt; anyway (because it knows where it built/installed itself, unless you moved
</span><br>
<span class="quotelev1">&gt; the tree after installation).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regardless, this is really more of a gcc question than an Open MPI
</span><br>
<span class="quotelev1">&gt; question, because you probably have this same problem with anything that
</span><br>
<span class="quotelev1">&gt; you compile with this compiler, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 8, 2013, at 3:12 PM, Matteo Parsani &lt;parsani.matteo_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear All,
</span><br>
<span class="quotelev2">&gt; &gt; I have recently installed gcc 4.7.3 on my cent OS 6.4. Moreover, I have
</span><br>
<span class="quotelev1">&gt; compiled openmpi 1.6.4 with the above compiler.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My LD_LIBRARY_PATH is set correctly and it points to both /lib and
</span><br>
<span class="quotelev1">&gt; /lib64 where libgfortran.so and libgcc_s.so for 32 and 64 bits are located.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Every time I compile a Fortran, a C or a C++ source code with the
</span><br>
<span class="quotelev1">&gt; wrapper mpif90, mpicc or mpicx I get this warning:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/ld: skipping incompatible
</span><br>
<span class="quotelev1">&gt; /scratch/home0/pmatteo/research/lib_install/lib/libgfortran.so when
</span><br>
<span class="quotelev1">&gt; searching for -lgfortran
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; or
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/ld: skipping incompatible
</span><br>
<span class="quotelev1">&gt; /scratch/home0/pmatteo/research/lib_install/lib/libgcc_s.so when searching
</span><br>
<span class="quotelev1">&gt; for -lgcc_s
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have switch my LD_LIBRARY_PATH as suggested in this thread:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/02/8067.php">http://www.open-mpi.org/community/lists/users/2009/02/8067.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; but nothing change.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any idea what I am doing wrong?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I know that it is just a warning but I would like to avoid it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Matteo
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
Matteo
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21892/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21893.php">deepak mehta: "[OMPI users] How to Read the Rank from the MPI_TASK"</a>
<li><strong>Previous message:</strong> <a href="21891.php">Elken, Tom: "Re: [OMPI users] mpirun error"</a>
<li><strong>In reply to:</strong> <a href="21888.php">Jeff Squyres (jsquyres): "Re: [OMPI users] /usr/bin/ld: skipping incompatible ......"</a>
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
