<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb  3 03:05:53 2006" -->
<!-- isoreceived="20060203080553" -->
<!-- sent="Fri, 3 Feb 2006 02:05:45 -0600" -->
<!-- isosent="20060203080545" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2" -->
<!-- id="A8052EE7-B494-4ACA-AB20-C20E327C8428_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060201181610.76758.qmail_at_web52009.mail.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-03 03:05:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0573.php">Andy Vierstraete: "[O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>Previous message:</strong> <a href="0571.php">Jeff Squyres: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>In reply to:</strong> <a href="0553.php">Konstantin Kudin: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0577.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>Reply:</strong> <a href="0577.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>Reply:</strong> <a href="0599.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Konstantin --
<br>
<p>I am able to replicate your error.  Let me look into it and get back  
<br>
to you.
<br>
<p><p>On Feb 1, 2006, at 12:16 PM, Konstantin Kudin wrote:
<br>
<p><span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Here is an update. The code crashes only when it is launched by
</span><br>
<span class="quotelev1">&gt; mpirun, and the actual piece of code where it happens is this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     IF ( ionode ) THEN
</span><br>
<span class="quotelev1">&gt; 30     READ (parse_unit, fmt='(A256)', END=10) line
</span><br>
<span class="quotelev1">&gt;        IF( line == ' ' .OR. line(1:1) == '#' ) GO TO 30
</span><br>
<span class="quotelev1">&gt;        tend = .FALSE.
</span><br>
<span class="quotelev1">&gt;        GO TO 20
</span><br>
<span class="quotelev1">&gt; 10     tend = .TRUE.
</span><br>
<span class="quotelev1">&gt; 20     CONTINUE
</span><br>
<span class="quotelev1">&gt;     END IF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Basically, the 1st node is supposed to reach the end of file while
</span><br>
<span class="quotelev1">&gt; reading in a file, and jump to line &quot;10&quot;. Instead, it crashes at line
</span><br>
<span class="quotelev1">&gt; 30 with the message &quot;forrtl: severe (39): error during read, unit 5,
</span><br>
<span class="quotelev1">&gt; file /dev/ptmx&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If I add a keyword to the end of the file &quot;END&quot;, and then never let
</span><br>
<span class="quotelev1">&gt; the program see the end of file, it works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Is there a patch for Open-MPI that would fix that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks!
</span><br>
<span class="quotelev1">&gt;  Konstantin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- Konstantin Kudin &lt;konstantin_kudin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  The package Quantum Espresso (QE) 3.0 from www.pwscf.org works fine
</span><br>
<span class="quotelev2">&gt;&gt; with MPICH 1.2.7 and these versions of Intel compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  QE also compiles fine with Open-MPI. However, when trying to run the
</span><br>
<span class="quotelev2">&gt;&gt; CP program from the package with either Open-MPI v1.0.1, or the
</span><br>
<span class="quotelev2">&gt;&gt; latest
</span><br>
<span class="quotelev2">&gt;&gt; nightly build [ 1.0.2a4r8848 ], the following error is produced (also
</span><br>
<span class="quotelev2">&gt;&gt; in the *.tar.gz file):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./wat01.j
</span><br>
<span class="quotelev2">&gt;&gt; forrtl: Input/output error
</span><br>
<span class="quotelev2">&gt;&gt; forrtl: severe (39): error during read, unit 5, file /dev/ptmx
</span><br>
<span class="quotelev2">&gt;&gt; Image              PC                Routine            Line
</span><br>
<span class="quotelev2">&gt;&gt; Source
</span><br>
<span class="quotelev2">&gt;&gt; cp.x               000000000084931F  Unknown               Unknown
</span><br>
<span class="quotelev2">&gt;&gt; Unknown
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  The program cp.x reads its data from the std. input, and writes to
</span><br>
<span class="quotelev2">&gt;&gt; std. output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  The files config.log, ompi_info.log, and a slightly more detailed
</span><br>
<span class="quotelev2">&gt;&gt; output of the error are in the attached file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Any ideas what might be wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;  Konstantin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; __________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; Do You Yahoo!?
</span><br>
<span class="quotelev2">&gt;&gt; Tired of spam?  Yahoo! Mail has the best spam protection around
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a> &gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __________________________________________________
</span><br>
<span class="quotelev1">&gt; Do You Yahoo!?
</span><br>
<span class="quotelev1">&gt; Tired of spam?  Yahoo! Mail has the best spam protection around
</span><br>
<span class="quotelev1">&gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
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
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0573.php">Andy Vierstraete: "[O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>Previous message:</strong> <a href="0571.php">Jeff Squyres: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>In reply to:</strong> <a href="0553.php">Konstantin Kudin: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0577.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>Reply:</strong> <a href="0577.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>Reply:</strong> <a href="0599.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
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
