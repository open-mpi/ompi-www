<?
$subject_val = "Re: [OMPI users] OpenMPI and Valgrind";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 17:08:15 2009" -->
<!-- isoreceived="20090212220815" -->
<!-- sent="Thu, 12 Feb 2009 17:08:06 -0500" -->
<!-- isosent="20090212220806" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and Valgrind" -->
<!-- id="200902121708.07261.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E88D2D46-18AF-41EB-833A-5D337D71A741_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and Valgrind<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 17:08:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8050.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Previous message:</strong> <a href="8048.php">jody: "[OMPI users] MPI_PROC_NULL"</a>
<li><strong>In reply to:</strong> <a href="8046.php">George Bosilca: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8071.php">RDB: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
please note, that for plain standard valgrind runs (without ompi-internal 
<br>
checks), You will not need to turn on the v1.3 options --enable-memchecker.
<br>
<p>However, if You do, access to buffers, some MPI-standard conformance and (if 
<br>
You select so) defined-ness checks of ompi-structures will be enabled.
<br>
<p>With best regards,
<br>
Rainer
<br>
<p>On Thursday 12 February 2009 04:30:27 pm George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Some of the configure options changed their name for the 1.3. Here is
</span><br>
<span class="quotelev1">&gt; the updated list you should use in order to get valgrind support for
</span><br>
<span class="quotelev1">&gt; the 1.3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --enable-memchecker --with-valgrind --with-memory-manager=none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 12, 2009, at 16:23 , Reuben D. Budiardja wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Thursday 12 February 2009 11:50:07 am Ashley Pittman wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I am using OpenMPI-1.2.8 with all the default configure option. What
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; should I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; do to be able use Valgrind with program compiled by OpenMPI ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From memory and reading the above links (i.e. untested advice):
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1) Use OpenMPI 1.3 where the default is not to include this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried it with OpenMPI 1.3, I didn't give any configure option
</span><br>
<span class="quotelev2">&gt; &gt; except --prefix, and Valgrind still does not work as expected.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2) Configure Open MPI 1.2.8 with the --disable-memory-manager option
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tried this, no luck either. The option doesn't seem to be doing
</span><br>
<span class="quotelev2">&gt; &gt; anything, and
</span><br>
<span class="quotelev2">&gt; &gt; it's not even listed as option with &quot;./configure --help&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 3) Compile you application without the -lopen-pal otion.  In practice
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this means running &quot;mpicc --show&quot; and cut-and pasting the underlying
</span><br>
<span class="quotelev3">&gt; &gt;&gt; compile line without the -lopen-pal into your application build
</span><br>
<span class="quotelev3">&gt; &gt;&gt; procedure.  I was able to do this for hello world but I can image
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it'll
</span><br>
<span class="quotelev3">&gt; &gt;&gt; be a real PITA for anything larger.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, I tried this before, and for a very small test program this
</span><br>
<span class="quotelev2">&gt; &gt; seems to
</span><br>
<span class="quotelev2">&gt; &gt; work. But as you said, this would a real pain to do..
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt; RDB
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Reuben D. Budiardja
</span><br>
<span class="quotelev2">&gt; &gt; Dept. Physics and Astronomy
</span><br>
<span class="quotelev2">&gt; &gt; University of Tennessee, Knoxville, TN
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: (865) 241-6293
Oak Ridge National Lab          Fax: (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8050.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Previous message:</strong> <a href="8048.php">jody: "[OMPI users] MPI_PROC_NULL"</a>
<li><strong>In reply to:</strong> <a href="8046.php">George Bosilca: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8071.php">RDB: "Re: [OMPI users] OpenMPI and Valgrind"</a>
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
