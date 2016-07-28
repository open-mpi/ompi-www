<?
$subject_val = "Re: [OMPI users] Parallel file write in fortran (+mpi)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 18:31:54 2010" -->
<!-- isoreceived="20100202233154" -->
<!-- sent="Tue, 2 Feb 2010 18:31:49 -0500" -->
<!-- isosent="20100202233149" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel file write in fortran (+mpi)" -->
<!-- id="E9CEE3A4-57A1-40EE-A657-0CDB53D86042_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="dcf611bd1002021350t53e51bedpca0c51f43ecc9c39_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-02 18:31:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11979.php">Laurence Marks: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Previous message:</strong> <a href="11977.php">Jeff Squyres: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<li><strong>In reply to:</strong> <a href="11976.php">Nicolas Bock: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11979.php">Laurence Marks: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Reply:</strong> <a href="11979.php">Laurence Marks: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 on Nick's responses.
<br>
<p>AFAIK, if you don't mind getting garbage in the output file, it should be fine to do.  Specifically: it should not cause OS issues (crash, reboot, corrupted filesystem, etc.) to do this -- but the file contents will likely be garbage.
<br>
<p>That being said, this situation likely falls into the &quot;Doc, it hurts when I do this...&quot; category.  Meaning: you know it's wrong, so you probably shouldn't be doing it anyway.  :-)
<br>
<p><p>On Feb 2, 2010, at 4:50 PM, Nicolas Bock wrote:
<br>
<p><span class="quotelev1">&gt; Hi Laurence,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know whether it's as bad as a deadly sin, but for us parallel writes are a huge problem and we get complete garbage in the file. Take a look at:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Implementing MPI-IO Atomic Mode and Shared File Pointers Using MPI One-Sided Communication, Robert Latham,Robert Ross, Rajeev Thakur, International Journal of High Performance Computing Applications, 21, 132 (2007).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They describe an implemenation of a &quot;mutex&quot; like object in MPI. If you protect writes to the file with an exclusive lock you can serialize the writes and make use of NFS's close to open cache coherence.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 2, 2010 at 08:27, Laurence Marks &lt;L-marks_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I have a question concerning having many processors in a mpi job all
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11979.php">Laurence Marks: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Previous message:</strong> <a href="11977.php">Jeff Squyres: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<li><strong>In reply to:</strong> <a href="11976.php">Nicolas Bock: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11979.php">Laurence Marks: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Reply:</strong> <a href="11979.php">Laurence Marks: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
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
