<?
$subject_val = "Re: [OMPI users] Parallel file write in fortran (+mpi)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 20:19:15 2010" -->
<!-- isoreceived="20100203011915" -->
<!-- sent="Wed, 03 Feb 2010 12:19:09 +1100" -->
<!-- isosent="20100203011909" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel file write in fortran (+mpi)" -->
<!-- id="4B68CF0D.6000908_at_anu.edu.au" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="876512661002021637yf9897betf618f3649d48aa70_at_mail.gmail.com" -->
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
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-02 20:19:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11983.php">Andreea Costea: "[OMPI users] OpenMPI Suspend/Resume"</a>
<li><strong>Previous message:</strong> <a href="11981.php">Laurence Marks: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>In reply to:</strong> <a href="11981.php">Laurence Marks: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Its definitely not a bug in Lustre - its an essential part of any
<br>
&quot;coherent&quot; cluster filesystem (CXFS, QFS, GFS, GPFS, ....).  The
<br>
whole point is that some people actually want to have meaningful
<br>
(non-garbage) files accessed using properly managed parallel IO
<br>
techniques.  The locking is necessary in this case.  You would see
<br>
the same issues on any of those filesystems.
<br>
<p>David
<br>
<p>On 02/03/2010 11:37 AM, Laurence Marks wrote:
<br>
<span class="quotelev1">&gt; Agreed that it is not good (and I am recoding some programs to avoid
</span><br>
<span class="quotelev1">&gt; this), but (and here life gets interesting) is this a &quot;bug&quot; in Lustre?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 2, 2010 at 5:59 PM, David Singleton
</span><br>
<span class="quotelev1">&gt; &lt;David.Singleton_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But its a very bad idea on a &quot;coherent&quot;, &quot;POSIX&quot; filesystem like Lustre.
</span><br>
<span class="quotelev2">&gt;&gt; Locks have to bounce around between the nodes for every write.  This can
</span><br>
<span class="quotelev2">&gt;&gt; be VERY slow (even for trivial amounts of &quot;logging&quot; IO) and thrash the
</span><br>
<span class="quotelev2">&gt;&gt; filesystem for other users.   So, yes, at our site, we include this sort
</span><br>
<span class="quotelev2">&gt;&gt; of &quot;parallel IO&quot; on our list of disallowed behaviour.  Not a good practice
</span><br>
<span class="quotelev2">&gt;&gt; to adopt in general.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 02/03/2010 10:40 AM, Laurence Marks wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know it's wrong, but I don't think it is forbidden.... (which I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; guess is what you are saying).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Feb 2, 2010 at 5:31 PM, Jeff Squyres&lt;jsquyres_at_[hidden]&gt;    wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +1 on Nick's responses.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; AFAIK, if you don't mind getting garbage in the output file, it should be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fine to do.  Specifically: it should not cause OS issues (crash, reboot,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; corrupted filesystem, etc.) to do this -- but the file contents will likely
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be garbage.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That being said, this situation likely falls into the &quot;Doc, it hurts when
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I do this...&quot; category.  Meaning: you know it's wrong, so you probably
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shouldn't be doing it anyway.  :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 2, 2010, at 4:50 PM, Nicolas Bock wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Laurence,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I don't know whether it's as bad as a deadly sin, but for us parallel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; writes are a huge problem and we get complete garbage in the file. Take a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; look at:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Implementing MPI-IO Atomic Mode and Shared File Pointers Using MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; One-Sided Communication, Robert Latham,Robert Ross, Rajeev Thakur,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; International Journal of High Performance Computing Applications, 21, 132
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (2007).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; They describe an implemenation of a &quot;mutex&quot; like object in MPI. If you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; protect writes to the file with an exclusive lock you can serialize the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; writes and make use of NFS's close to open cache coherence.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nick
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Feb 2, 2010 at 08:27, Laurence Marks&lt;L-marks_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have a question concerning having many processors in a mpi job all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; write to the same file -- not using mpi calls but with standard
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fortran I/O. I know that this can lead to consistency issues, but it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; can also lead to OS issues with some flavors of nfs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; At least in fortran, there is nothing &quot;wrong&quot; with doing this. My
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; question is whether this is &quot;One of the Seven Deadly Sins&quot; of mpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; programming, or just frowned on. (That is, it should be OK even if it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; leads to nonsense files, and not lead to OS issues.) If it is a sin, I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would appreciate a link to where this is spelt out in some &quot;official&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; document or similar.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Laurence Marks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Department of Materials Science and Engineering
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MSE Rm 2036 Cook Hall
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2220 N Campus Drive
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Northwestern University
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Evanston, IL 60208, USA
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tel: (847) 491-3996 Fax: (847) 491-7820
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; email: L-marks at northwestern dot edu
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Web: www.numis.northwestern.edu
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Chair, Commission on Electron Crystallography of IUCR
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; www.numis.northwestern.edu/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Electron crystallography is the branch of science that uses electron
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; scattering and imaging to study the structure of matter.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11983.php">Andreea Costea: "[OMPI users] OpenMPI Suspend/Resume"</a>
<li><strong>Previous message:</strong> <a href="11981.php">Laurence Marks: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>In reply to:</strong> <a href="11981.php">Laurence Marks: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
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
