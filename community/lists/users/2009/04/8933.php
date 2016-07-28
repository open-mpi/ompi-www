<?
$subject_val = "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 07:06:09 2009" -->
<!-- isoreceived="20090415110609" -->
<!-- sent="Wed, 15 Apr 2009 07:06:04 -0400" -->
<!-- isosent="20090415110604" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1" -->
<!-- id="364F1E06-95F7-4CE7-80E3-9E440EB9F5C9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1239050487.10076.22.camel_at_quarmall" -->
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
<strong>Subject:</strong> Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-15 07:06:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8934.php">Jeff Squyres: "Re: [OMPI users] openmpi src rpm and message coalesce"</a>
<li><strong>Previous message:</strong> <a href="8932.php">Jeff Squyres: "Re: [OMPI users] libnuma issue"</a>
<li><strong>In reply to:</strong> <a href="8794.php">Yvan Fournier: "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can either of you provide a small example that shows the problem,  
<br>
perchance?
<br>
<p>On Apr 6, 2009, at 4:41 PM, Yvan Fournier wrote:
<br>
<p><span class="quotelev1">&gt; Hello to all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have also encountered a similar bug with MPI-IO
</span><br>
<span class="quotelev1">&gt; with Open MPI 1.3.1, reading a Code_Saturne preprocessed mesh file
</span><br>
<span class="quotelev1">&gt; (www.code-saturne.org). Reading the file can be done using 2 MPI-IO
</span><br>
<span class="quotelev1">&gt; modes, or one non-MPI-IO mode.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first MPI-IO mode uses individual file pointers, and  involves a
</span><br>
<span class="quotelev1">&gt; series of MPI_File_Read_all with all ranks using the same view (for
</span><br>
<span class="quotelev1">&gt; record headers), interlaced with MPI_File_Read_all with ranks using
</span><br>
<span class="quotelev1">&gt; different views (for record data, successive blocks being read by each
</span><br>
<span class="quotelev1">&gt; rank).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The second MPI-IO mode uses explicit file offsets, with
</span><br>
<span class="quotelev1">&gt; MPI_File_read_at_all instead of MPI_File_read_all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both MPI-IO modes seem to work fine with OpenMPI 1.2, MPICH 2,
</span><br>
<span class="quotelev1">&gt; and variants on IBM Blue Gene/L and P, as well as Bull Novascale,
</span><br>
<span class="quotelev1">&gt; but with OpenMPI 1.3.1, data read seems to be corrupt on at least
</span><br>
<span class="quotelev1">&gt; one file using the individual file pointers approach (though it
</span><br>
<span class="quotelev1">&gt; works well using explicit offsets).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bug does not appear in unit tests, and it only appears after  
</span><br>
<span class="quotelev1">&gt; several
</span><br>
<span class="quotelev1">&gt; records are read on the case that does fail (on 2 ranks), so to
</span><br>
<span class="quotelev1">&gt; reproduce it with a simple program, I would have to extract the exact
</span><br>
<span class="quotelev1">&gt; file access patterns from the exact case which fails, which would
</span><br>
<span class="quotelev1">&gt; require a few extra hours of work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the bug is not reproduced in a simpler manner first, I will try
</span><br>
<span class="quotelev1">&gt; to build a simple program reproducing the bug within a week or 2,
</span><br>
<span class="quotelev1">&gt; but In the meantime, I just want to confirm Scott's observation
</span><br>
<span class="quotelev1">&gt; (hoping it is the same bug).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Yvan Fournier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 2009-04-06 at 16:03 -0400, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Mon, 06 Apr 2009 12:16:18 -0600
</span><br>
<span class="quotelev2">&gt; &gt; From: Scott Collis &lt;sscollis_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI users] Incorrect results with MPI-IO under OpenMPI
</span><br>
<span class="quotelev2">&gt; &gt;       v1.3.1
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;B20E6603-EB8C-408F-83EF-B018D8A73660_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have been a user of MPI-IO for 4+ years and have a code that has  
</span><br>
<span class="quotelev1">&gt; run
</span><br>
<span class="quotelev2">&gt; &gt; correctly with MPICH, MPICH2, and OpenMPI 1.2.*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I recently upgraded to OpenMPI 1.3.1 and immediately noticed that my
</span><br>
<span class="quotelev2">&gt; &gt; MPI-IO generated output files are corrupted.  I have not yet had a
</span><br>
<span class="quotelev2">&gt; &gt; chance to debug this in detail, but it appears that
</span><br>
<span class="quotelev2">&gt; &gt; MPI_File_write_all() commands are not placing information  
</span><br>
<span class="quotelev1">&gt; correctly on
</span><br>
<span class="quotelev2">&gt; &gt; their file_view when running with more than 1 processor  
</span><br>
<span class="quotelev1">&gt; (everything is
</span><br>
<span class="quotelev2">&gt; &gt; okay with -np 1).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note that I have observed the same incorrect behavior on both Linux
</span><br>
<span class="quotelev2">&gt; &gt; and OS-X.  I have also gone back and made sure that the same code
</span><br>
<span class="quotelev2">&gt; &gt; works with MPICH, MPICH2, and OpenMPI 1.2.* so I'm fairly confident
</span><br>
<span class="quotelev2">&gt; &gt; that something has been changed or broken as of OpenMPI 1.3.*.  Just
</span><br>
<span class="quotelev2">&gt; &gt; today, I checked out the SVN repository version of OpenMPI and built
</span><br>
<span class="quotelev2">&gt; &gt; and tested my code with that and the results are incorrect just as  
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev2">&gt; &gt; the 1.3.1 tarball.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; While I plan to continue to debug this and will try to put  
</span><br>
<span class="quotelev1">&gt; together a
</span><br>
<span class="quotelev2">&gt; &gt; small test that demonstrates the issue, I thought that I would first
</span><br>
<span class="quotelev2">&gt; &gt; send out this message to see if this might trigger a thought within
</span><br>
<span class="quotelev2">&gt; &gt; the OpenMPI development team as to where this issue might be.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please let me know if you have any ideas as I would very much
</span><br>
<span class="quotelev2">&gt; &gt; appreciate it!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Scott
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Scott Collis
</span><br>
<span class="quotelev2">&gt; &gt; sscollis_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8934.php">Jeff Squyres: "Re: [OMPI users] openmpi src rpm and message coalesce"</a>
<li><strong>Previous message:</strong> <a href="8932.php">Jeff Squyres: "Re: [OMPI users] libnuma issue"</a>
<li><strong>In reply to:</strong> <a href="8794.php">Yvan Fournier: "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
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
