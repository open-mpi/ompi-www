<?
$subject_val = "Re: [OMPI users] openmpi, stdin and qlogic infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 19 10:21:53 2013" -->
<!-- isoreceived="20130919142153" -->
<!-- sent="Thu, 19 Sep 2013 06:49:43 -0700" -->
<!-- isosent="20130919134943" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi, stdin and qlogic infiniband" -->
<!-- id="FC443BAF-69CD-4EE5-8716-90A489E05113_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAGKz=uLYadCR4h32WxyRh4f8g1jDTQMw8+=0V3AvX+E40grgNA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-19 09:49:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22682.php">Syed Ahsan Ali: "[OMPI users] Fwd: compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Previous message:</strong> <a href="22680.php">Fabrice Boyrie: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<li><strong>In reply to:</strong> <a href="22679.php">Jeff Hammond: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All that's true - use of stdin isn't encouraged by any means. However, we do support it and I've never heard of an interaction between that support and infiniband. They are in totally different sections of the code, and shouldn't have any crossover.
<br>
<p>What the error is saying is that it can't stat the stdin file descriptor, which makes me suspicious that something in the OFED support has tampered with it. Not sure why that would happen.
<br>
<p>I'll have to defer to someone knowledgeable in that area.
<br>
<p><p>On Sep 19, 2013, at 6:37 AM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; See this related post <a href="http://lists.mpich.org/pipermail/discuss/2013-September/001452.html">http://lists.mpich.org/pipermail/discuss/2013-September/001452.html</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only text in the MPI standard I could find related to stdin is &quot;assuming the MPI implementation supports stdin such that this works&quot;, which is not what I'd call a ringing endorsement of the practice of using it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tell the AbInit people that they're wrong for using stdin.  There are lots of cases where it won't work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 19, 2013 at 6:42 AM, Fabrice Boyrie &lt;fboyrie_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have to compile a program (abinit) reading data from stdin and it
</span><br>
<span class="quotelev2">&gt; &gt; doesn't works.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   I made a simplified version of the program
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PROGRAM TESTSTDIN
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   use mpi
</span><br>
<span class="quotelev2">&gt; &gt;   integer ( kind = 4 ) error
</span><br>
<span class="quotelev2">&gt; &gt;   integer ( kind = 4 ) id
</span><br>
<span class="quotelev2">&gt; &gt;   integer ( kind = 4 ) p
</span><br>
<span class="quotelev2">&gt; &gt;   real ( kind = 8 ) wtime
</span><br>
<span class="quotelev2">&gt; &gt;   CHARACTER(LEN=255) a
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_Init ( error )
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_Comm_size ( MPI_COMM_WORLD, p, error )
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_Comm_rank ( MPI_COMM_WORLD, id, error )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if ( id == 0 ) then
</span><br>
<span class="quotelev2">&gt; &gt;     PRINT*, &quot;id0&quot;
</span><br>
<span class="quotelev2">&gt; &gt;     READ(5,'(A)') a
</span><br>
<span class="quotelev2">&gt; &gt;   end if
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   write ( *, '(a)' ) ' '
</span><br>
<span class="quotelev2">&gt; &gt;   write ( *, '(a,i8,a)' ) '  Process ', id, ' says &quot;Hello, world!&quot;'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if ( id == 0 ) then
</span><br>
<span class="quotelev2">&gt; &gt;     write ( *, '(a)' ) 'READ from stdin'
</span><br>
<span class="quotelev2">&gt; &gt;     write ( *, '(a)' ) a
</span><br>
<span class="quotelev2">&gt; &gt;   end if
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_Finalize ( error )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   stop
</span><br>
<span class="quotelev2">&gt; &gt; end
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've tried openmpi 1.6.5 and 1.7.2
</span><br>
<span class="quotelev2">&gt; &gt; The fortran compiler is ifort (tried Version 14.0.0.080 Build 20130728
</span><br>
<span class="quotelev2">&gt; &gt; and Version 11.1    Build 20100806)
</span><br>
<span class="quotelev2">&gt; &gt; (c compiler is gcc, centos 6.x, infiniband stack from qlogic
</span><br>
<span class="quotelev2">&gt; &gt; infinipath-libs-3.1-3420.1122_rhel6_qlc.x86_64)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Trying with and without infiniband (qlogic card)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 8 ./teststdin &lt; /tmp/a
</span><br>
<span class="quotelev2">&gt; &gt; forrtl: Bad file descriptor
</span><br>
<span class="quotelev2">&gt; &gt; forrtl: severe (108): cannot stat file, unit 5, file /proc/43811/fd/0
</span><br>
<span class="quotelev2">&gt; &gt; Image              PC                Routine            Line
</span><br>
<span class="quotelev2">&gt; &gt; Source
</span><br>
<span class="quotelev2">&gt; &gt; teststdin          000000000040BF48  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  mpirun -mca mtl ^psm -mca btl self,sm -np 8 ./teststdin &lt; /tmp/a
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  id0
</span><br>
<span class="quotelev2">&gt; &gt;   Process        0 says &quot;Hello, world!&quot;
</span><br>
<span class="quotelev2">&gt; &gt; READ from stdin
</span><br>
<span class="quotelev2">&gt; &gt; zer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Process        1 says &quot;Hello, world!&quot;
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is it a known problem ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Fabrice BOYRIE
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22681/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22682.php">Syed Ahsan Ali: "[OMPI users] Fwd: compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Previous message:</strong> <a href="22680.php">Fabrice Boyrie: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<li><strong>In reply to:</strong> <a href="22679.php">Jeff Hammond: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
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
