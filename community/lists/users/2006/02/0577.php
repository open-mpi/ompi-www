<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb  3 23:57:55 2006" -->
<!-- isoreceived="20060204045755" -->
<!-- sent="Fri, 3 Feb 2006 22:57:37 -0600" -->
<!-- isosent="20060204045737" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2" -->
<!-- id="1418061F-E276-482D-842A-24C1360C4B6B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A8052EE7-B494-4ACA-AB20-C20E327C8428_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-02-03 23:57:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0578.php">Brian Barrett: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0576.php">Brian Granger: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<li><strong>In reply to:</strong> <a href="0572.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0599.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Konstantin --
<br>
<p>This problem has been fixed on the trunk; it will probably take us a  
<br>
few days to get it committed on the release branch (v1.0), but it  
<br>
will definitely be included in the upcoming v1.0.2.
<br>
<p>Would you mind trying a nightly trunk snapshot to ensure that we have  
<br>
fixed the problem?  Any r number after 8893 should have the fix:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
<p>Many thanks.
<br>
<p><p>On Feb 3, 2006, at 2:05 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Konstantin --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am able to replicate your error.  Let me look into it and get back
</span><br>
<span class="quotelev1">&gt; to you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 1, 2006, at 12:16 PM, Konstantin Kudin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Here is an update. The code crashes only when it is launched by
</span><br>
<span class="quotelev2">&gt;&gt; mpirun, and the actual piece of code where it happens is this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     IF ( ionode ) THEN
</span><br>
<span class="quotelev2">&gt;&gt; 30     READ (parse_unit, fmt='(A256)', END=10) line
</span><br>
<span class="quotelev2">&gt;&gt;        IF( line == ' ' .OR. line(1:1) == '#' ) GO TO 30
</span><br>
<span class="quotelev2">&gt;&gt;        tend = .FALSE.
</span><br>
<span class="quotelev2">&gt;&gt;        GO TO 20
</span><br>
<span class="quotelev2">&gt;&gt; 10     tend = .TRUE.
</span><br>
<span class="quotelev2">&gt;&gt; 20     CONTINUE
</span><br>
<span class="quotelev2">&gt;&gt;     END IF
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Basically, the 1st node is supposed to reach the end of file while
</span><br>
<span class="quotelev2">&gt;&gt; reading in a file, and jump to line &quot;10&quot;. Instead, it crashes at line
</span><br>
<span class="quotelev2">&gt;&gt; 30 with the message &quot;forrtl: severe (39): error during read, unit 5,
</span><br>
<span class="quotelev2">&gt;&gt; file /dev/ptmx&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  If I add a keyword to the end of the file &quot;END&quot;, and then never let
</span><br>
<span class="quotelev2">&gt;&gt; the program see the end of file, it works fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Is there a patch for Open-MPI that would fix that?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;  Konstantin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- Konstantin Kudin &lt;konstantin_kudin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  The package Quantum Espresso (QE) 3.0 from www.pwscf.org works fine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with MPICH 1.2.7 and these versions of Intel compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  QE also compiles fine with Open-MPI. However, when trying to run  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CP program from the package with either Open-MPI v1.0.1, or the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; latest
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nightly build [ 1.0.2a4r8848 ], the following error is produced  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (also
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the *.tar.gz file):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./wat01.j
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forrtl: Input/output error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forrtl: severe (39): error during read, unit 5, file /dev/ptmx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Image              PC                Routine            Line
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Source
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cp.x               000000000084931F  Unknown               Unknown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unknown
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  The program cp.x reads its data from the std. input, and writes to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std. output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  The files config.log, ompi_info.log, and a slightly more detailed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output of the error are in the attached file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Any ideas what might be wrong?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Konstantin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; __________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do You Yahoo!?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tired of spam?  Yahoo! Mail has the best spam protection around
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a> &gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; __________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; Do You Yahoo!?
</span><br>
<span class="quotelev2">&gt;&gt; Tired of spam?  Yahoo! Mail has the best spam protection around
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0578.php">Brian Barrett: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0576.php">Brian Granger: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<li><strong>In reply to:</strong> <a href="0572.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0599.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
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
