<?
$subject_val = "Re: [OMPI users] openmpi, stdin and qlogic infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 19 09:37:39 2013" -->
<!-- isoreceived="20130919133739" -->
<!-- sent="Thu, 19 Sep 2013 08:37:18 -0500" -->
<!-- isosent="20130919133718" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi, stdin and qlogic infiniband" -->
<!-- id="CAGKz=uLYadCR4h32WxyRh4f8g1jDTQMw8+=0V3AvX+E40grgNA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20130919114233.GA13313_at_lapinou2.lsd.univ-montp2.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi, stdin and qlogic infiniband<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-19 09:37:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22680.php">Fabrice Boyrie: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<li><strong>Previous message:</strong> <a href="22678.php">Reuti: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<li><strong>In reply to:</strong> <a href="22676.php">Fabrice Boyrie: "[OMPI users] openmpi, stdin and qlogic infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22680.php">Fabrice Boyrie: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<li><strong>Reply:</strong> <a href="22680.php">Fabrice Boyrie: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<li><strong>Reply:</strong> <a href="22681.php">Ralph Castain: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See this related post
<br>
<a href="http://lists.mpich.org/pipermail/discuss/2013-September/001452.html">http://lists.mpich.org/pipermail/discuss/2013-September/001452.html</a>.
<br>
<p>The only text in the MPI standard I could find related to stdin is
<br>
&quot;assuming the MPI implementation supports stdin such that this works&quot;,
<br>
which is not what I'd call a ringing endorsement of the practice of using
<br>
it.
<br>
<p>Tell the AbInit people that they're wrong for using stdin.  There are lots
<br>
of cases where it won't work.
<br>
<p>Jeff
<br>
<p><p>On Thu, Sep 19, 2013 at 6:42 AM, Fabrice Boyrie &lt;fboyrie_at_[hidden]&gt;
<br>
wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have to compile a program (abinit) reading data from stdin and it
</span><br>
<span class="quotelev1">&gt; doesn't works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I made a simplified version of the program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PROGRAM TESTSTDIN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   use mpi
</span><br>
<span class="quotelev1">&gt;   integer ( kind = 4 ) error
</span><br>
<span class="quotelev1">&gt;   integer ( kind = 4 ) id
</span><br>
<span class="quotelev1">&gt;   integer ( kind = 4 ) p
</span><br>
<span class="quotelev1">&gt;   real ( kind = 8 ) wtime
</span><br>
<span class="quotelev1">&gt;   CHARACTER(LEN=255) a
</span><br>
<span class="quotelev1">&gt;   call MPI_Init ( error )
</span><br>
<span class="quotelev1">&gt;   call MPI_Comm_size ( MPI_COMM_WORLD, p, error )
</span><br>
<span class="quotelev1">&gt;   call MPI_Comm_rank ( MPI_COMM_WORLD, id, error )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if ( id == 0 ) then
</span><br>
<span class="quotelev1">&gt;     PRINT*, &quot;id0&quot;
</span><br>
<span class="quotelev1">&gt;     READ(5,'(A)') a
</span><br>
<span class="quotelev1">&gt;   end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   write ( *, '(a)' ) ' '
</span><br>
<span class="quotelev1">&gt;   write ( *, '(a,i8,a)' ) '  Process ', id, ' says &quot;Hello, world!&quot;'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if ( id == 0 ) then
</span><br>
<span class="quotelev1">&gt;     write ( *, '(a)' ) 'READ from stdin'
</span><br>
<span class="quotelev1">&gt;     write ( *, '(a)' ) a
</span><br>
<span class="quotelev1">&gt;   end if
</span><br>
<span class="quotelev1">&gt;   call MPI_Finalize ( error )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   stop
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried openmpi 1.6.5 and 1.7.2
</span><br>
<span class="quotelev1">&gt; The fortran compiler is ifort (tried Version 14.0.0.080 Build 20130728
</span><br>
<span class="quotelev1">&gt; and Version 11.1    Build 20100806)
</span><br>
<span class="quotelev1">&gt; (c compiler is gcc, centos 6.x, infiniband stack from qlogic
</span><br>
<span class="quotelev1">&gt; infinipath-libs-3.1-3420.1122_rhel6_qlc.x86_64)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Trying with and without infiniband (qlogic card)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 ./teststdin &lt; /tmp/a
</span><br>
<span class="quotelev1">&gt; forrtl: Bad file descriptor
</span><br>
<span class="quotelev1">&gt; forrtl: severe (108): cannot stat file, unit 5, file /proc/43811/fd/0
</span><br>
<span class="quotelev1">&gt; Image              PC                Routine            Line
</span><br>
<span class="quotelev1">&gt; Source
</span><br>
<span class="quotelev1">&gt; teststdin          000000000040BF48  Unknown               Unknown
</span><br>
&nbsp;Unknown
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpirun -mca mtl ^psm -mca btl self,sm -np 8 ./teststdin &lt; /tmp/a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  id0
</span><br>
<span class="quotelev1">&gt;   Process        0 says &quot;Hello, world!&quot;
</span><br>
<span class="quotelev1">&gt; READ from stdin
</span><br>
<span class="quotelev1">&gt; zer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process        1 says &quot;Hello, world!&quot;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it a known problem ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Fabrice BOYRIE
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
<p><p><p><p><pre>
--
Jeff Hammond
jeff.science_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22679/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22680.php">Fabrice Boyrie: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<li><strong>Previous message:</strong> <a href="22678.php">Reuti: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<li><strong>In reply to:</strong> <a href="22676.php">Fabrice Boyrie: "[OMPI users] openmpi, stdin and qlogic infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22680.php">Fabrice Boyrie: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<li><strong>Reply:</strong> <a href="22680.php">Fabrice Boyrie: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<li><strong>Reply:</strong> <a href="22681.php">Ralph Castain: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
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
