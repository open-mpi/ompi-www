<?
$subject_val = "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 31 18:03:45 2013" -->
<!-- isoreceived="20131031220345" -->
<!-- sent="Thu, 31 Oct 2013 17:03:24 -0500" -->
<!-- isosent="20131031220324" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing" -->
<!-- id="CAGKz=uKR4KYFPQYapsfGmk5LnPsQktE2foangu6-DyFYDdUj8g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F9A11C3_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-31 18:03:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22892.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc"</a>
<li><strong>Previous message:</strong> <a href="22890.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>In reply to:</strong> <a href="22889.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Stupid question:
<br>
<p>Why not just make your first level internal API equivalent to the MPI
<br>
public API except for s/int/size_t/g and have the Fortran bindings
<br>
drop directly into that?  Going through the C int-erface seems like a
<br>
recipe for endless pain...
<br>
<p>Jeff
<br>
<p>On Thu, Oct 31, 2013 at 4:05 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Oct 30, 2013, at 11:55 PM, Jim Parker &lt;jimparker96313_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps I should start with the most pressing issue for me.  I need 64-bit indexing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @Martin,
</span><br>
<span class="quotelev2">&gt;&gt;    you indicated that even if I get this up and running, the MPI library still uses signed 32-bit ints to count (your term), or index (my term) the recvbuffer lengths.  More concretely,
</span><br>
<span class="quotelev2">&gt;&gt; in a call to MPI_Allgatherv( buffer, count, MPI_Integer, recvbuf, recv-count, displ, MPI_integer, MPI_COMM_WORLD, status, mpierr): count, recvcounts, and displs must be  32-bit integers, not 64-bit.  Actually, all I need is displs to hold 64-bit values...
</span><br>
<span class="quotelev2">&gt;&gt; If this is true, then compiling OpenMPI this way is not a solution.  I'll have to restructure my code to collect 31-bit chunks...
</span><br>
<span class="quotelev2">&gt;&gt; Not that it matters, but I'm not using DIRAC, but a custom code to compute circuit analyses.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, that is correct -- the MPI specification makes us use C &quot;int&quot; for outer level count specifications.  We do use larger than that internally, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The common workaround for this is to make your own MPI datatype -- perhaps an MPI_TYPE_VECTOR -- that strings together N contiguous datatypes, and then send M of those.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, say you need to send 8B (billion) contiguous INTEGERs.  You obviously can't represent 8B with a C int (or a 4 byte Fortran INTEGER).  So what you would do is something like this (forgive me -- I'm a C guy):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; int my_buffer[8 billion];
</span><br>
<span class="quotelev1">&gt; MPI_Datatype my_type;
</span><br>
<span class="quotelev1">&gt; // This makes a datatype of 8 contiguous int's
</span><br>
<span class="quotelev1">&gt; MPI_Type_vector(1, 8, 0, MPI_INT, &amp;my_type);
</span><br>
<span class="quotelev1">&gt; MPI_Type_commit(&amp;my_type);
</span><br>
<span class="quotelev1">&gt; MPI_Send(my_buffer, 1048576, my_type, ...);
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This basically sends 1B types that are 8 int's long, and is therefore an 8B int message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;   Interesting, your runtime behavior has a different error than mine.  You have problems with the passed variable tempInt, which would make sense for the reasons you gave.  However, my problem involves the fact that the local variable &quot;rank&quot; gets overwritten by a memory corruption after MPI_RECV is called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Odd.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Re: config.log. I will try to have the admin guy recompile tomorrow and see if I can get the log for you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW, I'm using the gcc 4.7.2 compiler suite on a Rocks 5.4 HPC cluster.  I use the options -m64 and -fdefault-integer-8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok.  I was using icc/ifort with -m64 and -i8.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22892.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc"</a>
<li><strong>Previous message:</strong> <a href="22890.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>In reply to:</strong> <a href="22889.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
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
