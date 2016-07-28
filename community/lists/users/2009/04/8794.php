<?
$subject_val = "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 16:41:57 2009" -->
<!-- isoreceived="20090406204157" -->
<!-- sent="Mon, 06 Apr 2009 22:41:27 +0200" -->
<!-- isosent="20090406204127" -->
<!-- name="Yvan Fournier" -->
<!-- email="yvan.fournier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1" -->
<!-- id="1239050487.10076.22.camel_at_quarmall" -->
<!-- inreplyto="mailman.3087.1239048183.6040.users_at_open-mpi.org" -->
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
<strong>From:</strong> Yvan Fournier (<em>yvan.fournier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 16:41:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8795.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8793.php">Prentice Bisbal: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Maybe in reply to:</strong> <a href="8790.php">Scott Collis: "[OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8933.php">Jeff Squyres: "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
<li><strong>Reply:</strong> <a href="8933.php">Jeff Squyres: "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello to all,
<br>
<p>I have also encountered a similar bug with MPI-IO
<br>
with Open MPI 1.3.1, reading a Code_Saturne preprocessed mesh file
<br>
(www.code-saturne.org). Reading the file can be done using 2 MPI-IO
<br>
modes, or one non-MPI-IO mode.
<br>
<p>The first MPI-IO mode uses individual file pointers, and  involves a
<br>
series of MPI_File_Read_all with all ranks using the same view (for
<br>
record headers), interlaced with MPI_File_Read_all with ranks using
<br>
different views (for record data, successive blocks being read by each
<br>
rank).
<br>
<p>The second MPI-IO mode uses explicit file offsets, with
<br>
MPI_File_read_at_all instead of MPI_File_read_all.
<br>
<p>Both MPI-IO modes seem to work fine with OpenMPI 1.2, MPICH 2,
<br>
and variants on IBM Blue Gene/L and P, as well as Bull Novascale,
<br>
but with OpenMPI 1.3.1, data read seems to be corrupt on at least
<br>
one file using the individual file pointers approach (though it
<br>
works well using explicit offsets).
<br>
<p>The bug does not appear in unit tests, and it only appears after several
<br>
records are read on the case that does fail (on 2 ranks), so to
<br>
reproduce it with a simple program, I would have to extract the exact
<br>
file access patterns from the exact case which fails, which would
<br>
require a few extra hours of work.
<br>
<p>If the bug is not reproduced in a simpler manner first, I will try
<br>
to build a simple program reproducing the bug within a week or 2,
<br>
but In the meantime, I just want to confirm Scott's observation
<br>
(hoping it is the same bug).
<br>
<p>Best regards,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yvan Fournier
<br>
<p>On Mon, 2009-04-06 at 16:03 -0400, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Date: Mon, 06 Apr 2009 12:16:18 -0600
</span><br>
<span class="quotelev1">&gt; From: Scott Collis &lt;sscollis_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Incorrect results with MPI-IO under OpenMPI
</span><br>
<span class="quotelev1">&gt; 	v1.3.1
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;B20E6603-EB8C-408F-83EF-B018D8A73660_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been a user of MPI-IO for 4+ years and have a code that has run  
</span><br>
<span class="quotelev1">&gt; correctly with MPICH, MPICH2, and OpenMPI 1.2.*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I recently upgraded to OpenMPI 1.3.1 and immediately noticed that my  
</span><br>
<span class="quotelev1">&gt; MPI-IO generated output files are corrupted.  I have not yet had a  
</span><br>
<span class="quotelev1">&gt; chance to debug this in detail, but it appears that  
</span><br>
<span class="quotelev1">&gt; MPI_File_write_all() commands are not placing information correctly on  
</span><br>
<span class="quotelev1">&gt; their file_view when running with more than 1 processor (everything is  
</span><br>
<span class="quotelev1">&gt; okay with -np 1).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that I have observed the same incorrect behavior on both Linux  
</span><br>
<span class="quotelev1">&gt; and OS-X.  I have also gone back and made sure that the same code  
</span><br>
<span class="quotelev1">&gt; works with MPICH, MPICH2, and OpenMPI 1.2.* so I'm fairly confident  
</span><br>
<span class="quotelev1">&gt; that something has been changed or broken as of OpenMPI 1.3.*.  Just  
</span><br>
<span class="quotelev1">&gt; today, I checked out the SVN repository version of OpenMPI and built  
</span><br>
<span class="quotelev1">&gt; and tested my code with that and the results are incorrect just as for  
</span><br>
<span class="quotelev1">&gt; the 1.3.1 tarball.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While I plan to continue to debug this and will try to put together a  
</span><br>
<span class="quotelev1">&gt; small test that demonstrates the issue, I thought that I would first  
</span><br>
<span class="quotelev1">&gt; send out this message to see if this might trigger a thought within  
</span><br>
<span class="quotelev1">&gt; the OpenMPI development team as to where this issue might be.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please let me know if you have any ideas as I would very much  
</span><br>
<span class="quotelev1">&gt; appreciate it!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Scott Collis
</span><br>
<span class="quotelev1">&gt; sscollis_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8795.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8793.php">Prentice Bisbal: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Maybe in reply to:</strong> <a href="8790.php">Scott Collis: "[OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8933.php">Jeff Squyres: "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
<li><strong>Reply:</strong> <a href="8933.php">Jeff Squyres: "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
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
