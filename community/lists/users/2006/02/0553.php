<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  1 13:16:19 2006" -->
<!-- isoreceived="20060201181619" -->
<!-- sent="Wed, 1 Feb 2006 10:16:09 -0800 (PST)" -->
<!-- isosent="20060201181609" -->
<!-- name="Konstantin Kudin" -->
<!-- email="konstantin_kudin_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2" -->
<!-- id="20060201181610.76758.qmail_at_web52009.mail.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20060131232353.57005.qmail_at_web52001.mail.yahoo.com" -->
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
<strong>From:</strong> Konstantin Kudin (<em>konstantin_kudin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-01 13:16:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0554.php">Glenn Morris: "[O-MPI users] tcsh 'Unmatched &quot;.' error on localhost"</a>
<li><strong>Previous message:</strong> <a href="0552.php">Brian Barrett: "Re: [O-MPI users] Bug in C++ bindings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0549.php">Konstantin Kudin: "[O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0572.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>Reply:</strong> <a href="0572.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Hi,
<br>
<p>&nbsp;Here is an update. The code crashes only when it is launched by
<br>
mpirun, and the actual piece of code where it happens is this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;IF ( ionode ) THEN
<br>
30     READ (parse_unit, fmt='(A256)', END=10) line
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF( line == ' ' .OR. line(1:1) == '#' ) GO TO 30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tend = .FALSE.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GO TO 20
<br>
10     tend = .TRUE.
<br>
20     CONTINUE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
<p>&nbsp;Basically, the 1st node is supposed to reach the end of file while
<br>
reading in a file, and jump to line &quot;10&quot;. Instead, it crashes at line
<br>
30 with the message &quot;forrtl: severe (39): error during read, unit 5,
<br>
file /dev/ptmx&quot;.
<br>
<p>&nbsp;If I add a keyword to the end of the file &quot;END&quot;, and then never let
<br>
the program see the end of file, it works fine.
<br>
<p>&nbsp;Is there a patch for Open-MPI that would fix that?
<br>
<p>&nbsp;Thanks!
<br>
&nbsp;Konstantin
<br>
<p>--- Konstantin Kudin &lt;konstantin_kudin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  The package Quantum Espresso (QE) 3.0 from www.pwscf.org works fine
</span><br>
<span class="quotelev1">&gt; with MPICH 1.2.7 and these versions of Intel compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  QE also compiles fine with Open-MPI. However, when trying to run the
</span><br>
<span class="quotelev1">&gt; CP program from the package with either Open-MPI v1.0.1, or the
</span><br>
<span class="quotelev1">&gt; latest
</span><br>
<span class="quotelev1">&gt; nightly build [ 1.0.2a4r8848 ], the following error is produced (also
</span><br>
<span class="quotelev1">&gt; in the *.tar.gz file):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ./wat01.j
</span><br>
<span class="quotelev1">&gt; forrtl: Input/output error
</span><br>
<span class="quotelev1">&gt; forrtl: severe (39): error during read, unit 5, file /dev/ptmx
</span><br>
<span class="quotelev1">&gt; Image              PC                Routine            Line       
</span><br>
<span class="quotelev1">&gt; Source
</span><br>
<span class="quotelev1">&gt; cp.x               000000000084931F  Unknown               Unknown 
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  The program cp.x reads its data from the std. input, and writes to
</span><br>
<span class="quotelev1">&gt; std. output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  The files config.log, ompi_info.log, and a slightly more detailed
</span><br>
<span class="quotelev1">&gt; output of the error are in the attached file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Any ideas what might be wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Thanks!
</span><br>
<span class="quotelev1">&gt;  Konstantin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; __________________________________________________
</span><br>
<span class="quotelev1">&gt; Do You Yahoo!?
</span><br>
<span class="quotelev1">&gt; Tired of spam?  Yahoo! Mail has the best spam protection around 
</span><br>
<span class="quotelev1">&gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a> &gt;
</span><br>
_______________________________________________
<br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0554.php">Glenn Morris: "[O-MPI users] tcsh 'Unmatched &quot;.' error on localhost"</a>
<li><strong>Previous message:</strong> <a href="0552.php">Brian Barrett: "Re: [O-MPI users] Bug in C++ bindings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0549.php">Konstantin Kudin: "[O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0572.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>Reply:</strong> <a href="0572.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
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
