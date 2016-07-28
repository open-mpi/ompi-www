<?
$subject_val = "Re: [OMPI users] Parallel file write in fortran (+mpi)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 16:50:32 2010" -->
<!-- isoreceived="20100202215032" -->
<!-- sent="Tue, 2 Feb 2010 14:50:02 -0700" -->
<!-- isosent="20100202215002" -->
<!-- name="Nicolas Bock" -->
<!-- email="nicolasbock_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel file write in fortran (+mpi)" -->
<!-- id="dcf611bd1002021350t53e51bedpca0c51f43ecc9c39_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="876512661002020727s4dceb7c8t4d7bb21f7437c817_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Parallel file write in fortran (+mpi)<br>
<strong>From:</strong> Nicolas Bock (<em>nicolasbock_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-02 16:50:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11977.php">Jeff Squyres: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<li><strong>Previous message:</strong> <a href="11975.php">Shiqing Fan: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="11962.php">Laurence Marks: "[OMPI users] Parallel file write in fortran (+mpi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11978.php">Jeff Squyres: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Reply:</strong> <a href="11978.php">Jeff Squyres: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Laurence,
<br>
<p>I don't know whether it's as bad as a deadly sin, but for us parallel writes
<br>
are a huge problem and we get complete garbage in the file. Take a look at:
<br>
<p>Implementing MPI-IO Atomic Mode and Shared File Pointers Using MPI One-Sided
<br>
Communication, * Robert Latham,*Robert Ross*, *Rajeev Thakur, *International
<br>
Journal of High Performance Computing Applications*, *21*, 132 (2007).
<br>
<p>They describe an implemenation of a &quot;mutex&quot; like object in MPI. If you
<br>
protect writes to the file with an exclusive lock you can serialize the
<br>
writes and make use of NFS's close to open cache coherence.
<br>
<p>nick
<br>
<p>* *
<br>
On Tue, Feb 2, 2010 at 08:27, Laurence Marks &lt;L-marks_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I have a question concerning having many processors in a mpi job all
</span><br>
<span class="quotelev1">&gt; write to the same file -- not using mpi calls but with standard
</span><br>
<span class="quotelev1">&gt; fortran I/O. I know that this can lead to consistency issues, but it
</span><br>
<span class="quotelev1">&gt; can also lead to OS issues with some flavors of nfs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At least in fortran, there is nothing &quot;wrong&quot; with doing this. My
</span><br>
<span class="quotelev1">&gt; question is whether this is &quot;One of the Seven Deadly Sins&quot; of mpi
</span><br>
<span class="quotelev1">&gt; programming, or just frowned on. (That is, it should be OK even if it
</span><br>
<span class="quotelev1">&gt; leads to nonsense files, and not lead to OS issues.) If it is a sin, I
</span><br>
<span class="quotelev1">&gt; would appreciate a link to where this is spelt out in some &quot;official&quot;
</span><br>
<span class="quotelev1">&gt; document or similar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Laurence Marks
</span><br>
<span class="quotelev1">&gt; Department of Materials Science and Engineering
</span><br>
<span class="quotelev1">&gt; MSE Rm 2036 Cook Hall
</span><br>
<span class="quotelev1">&gt; 2220 N Campus Drive
</span><br>
<span class="quotelev1">&gt; Northwestern University
</span><br>
<span class="quotelev1">&gt; Evanston, IL 60208, USA
</span><br>
<span class="quotelev1">&gt; Tel: (847) 491-3996 Fax: (847) 491-7820
</span><br>
<span class="quotelev1">&gt; email: L-marks at northwestern dot edu
</span><br>
<span class="quotelev1">&gt; Web: www.numis.northwestern.edu
</span><br>
<span class="quotelev1">&gt; Chair, Commission on Electron Crystallography of IUCR
</span><br>
<span class="quotelev1">&gt; www.numis.northwestern.edu/
</span><br>
<span class="quotelev1">&gt; Electron crystallography is the branch of science that uses electron
</span><br>
<span class="quotelev1">&gt; scattering and imaging to study the structure of matter.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11976/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11977.php">Jeff Squyres: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<li><strong>Previous message:</strong> <a href="11975.php">Shiqing Fan: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="11962.php">Laurence Marks: "[OMPI users] Parallel file write in fortran (+mpi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11978.php">Jeff Squyres: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Reply:</strong> <a href="11978.php">Jeff Squyres: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
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
