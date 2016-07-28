<?
$subject_val = "Re: [OMPI users] openmpi fails to terminate for errors/signals on	some but not all processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 10:04:44 2010" -->
<!-- isoreceived="20100210150444" -->
<!-- sent="Wed, 10 Feb 2010 10:26:54 -0400" -->
<!-- isosent="20100210142654" -->
<!-- name="Douglas Guptill" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi fails to terminate for errors/signals on	some but not all processes" -->
<!-- id="20100210142654.GA6825_at_sopalepc" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="876512661002081129t7c92aa9ud0371a5beef767b0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi fails to terminate for errors/signals on	some but not all processes<br>
<strong>From:</strong> Douglas Guptill (<em>douglas.guptill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 09:26:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12071.php">Barrett, Brian W: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="12069.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="12043.php">Laurence Marks: "[OMPI users] openmpi fails to terminate for errors/signals on some but not all processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Lawrence:
<br>
<p>If I correctly remember your code which created this problem, perhaps
<br>
you could solve it by using the iostatus parameter:
<br>
<p>&nbsp;&nbsp;&nbsp;read(unit,*,iostatus=ierror) some_variable
<br>
&nbsp;&nbsp;&nbsp;if (ierror.ne.0) then
<br>
c  handle error
<br>
&nbsp;&nbsp;&nbsp;endif
<br>
<p>Hope that helps,
<br>
Douglas.
<br>
<p>On Mon, Feb 08, 2010 at 01:29:38PM -0600, Laurence Marks wrote:
<br>
<span class="quotelev1">&gt; This was &quot;Re: [OMPI users] Trapping fortran I/O errors leaving zombie
</span><br>
<span class="quotelev1">&gt; mpi processes&quot;, but it is more severe than this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, but it appears that at least with ifort most run-time errors
</span><br>
<span class="quotelev1">&gt; and signals will leave zombie processes behind with openmpi if they
</span><br>
<span class="quotelev1">&gt; only occur on some of the processors and not all. You can test this
</span><br>
<span class="quotelev1">&gt; with the attached using (for instance)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc -c doraise.c
</span><br>
<span class="quotelev1">&gt; mpif90 -o crash_test crash_test.F doraise.o -FR -xHost -O3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, as appropriate mpirun -np 8 crash_test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output is self explanatory, and has an option to both try and
</span><br>
<span class="quotelev1">&gt; simulate common fortran problems as well as to send fortran or C
</span><br>
<span class="quotelev1">&gt; signals to the process. Please note that the results can be dependent
</span><br>
<span class="quotelev1">&gt; upon the level of optimization, and with other compilers there could
</span><br>
<span class="quotelev1">&gt; be problems where the compiler complains about SIGSEV or other errors
</span><br>
<span class="quotelev1">&gt; since the code deliberately tries to create these.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Laurence Marks
</span><br>
<span class="quotelev1">&gt; Department of Materials Science and Engineering
</span><br>
<span class="quotelev1">&gt; MSE Rm 2036 Cook Hall
</span><br>
<span class="quotelev1">&gt; 2220 N Campus Drive
</span><br>
<span class="quotelev1">&gt; Northwestern University
</span><br>
<span class="quotelev1">&gt; Evanston, IL 60208, USA
</span><br>
<span class="quotelev1">&gt; Tel: (847) 491-3996 Fax: (847) 491-7820
</span><br>
<span class="quotelev1">&gt; email: L-marks at northwestern dot edu
</span><br>
<span class="quotelev1">&gt; Web: www.numis.northwestern.edu
</span><br>
<span class="quotelev1">&gt; Chair, Commission on Electron Crystallography of IUCR
</span><br>
<span class="quotelev1">&gt; www.numis.northwestern.edu/
</span><br>
<span class="quotelev1">&gt; Electron crystallography is the branch of science that uses electron
</span><br>
<span class="quotelev1">&gt; scattering and imaging to study the structure of matter.
</span><br>
<p><span class="quotelev1">&gt; #include &lt;signal.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void doraise(isig)
</span><br>
<span class="quotelev1">&gt; long isig[1] ;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; int i, j ;
</span><br>
<span class="quotelev1">&gt;    i = isig[0];
</span><br>
<span class="quotelev1">&gt;    raise( i );   /* signal i is raised */
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void doraise_(isig)
</span><br>
<span class="quotelev1">&gt; long isig[1] ;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;      doraise(isig) ;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void whatsig(isig)
</span><br>
<span class="quotelev1">&gt; long isig[1] ;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         int i ;
</span><br>
<span class="quotelev1">&gt;         i = isig[0];
</span><br>
<span class="quotelev1">&gt;         psignal( i , &quot;Testing Signal&quot;);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void whatsig_(isig)
</span><br>
<span class="quotelev1">&gt; long isig[1] ;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;      whatsig(isig) ;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void showallsignals()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         int i ;
</span><br>
<span class="quotelev1">&gt;         char buf[15];
</span><br>
<span class="quotelev1">&gt;         for ( i = 1; i &lt; 32; i++ ) {
</span><br>
<span class="quotelev1">&gt;            sprintf(buf, &quot;Signal code %d &quot;, i);
</span><br>
<span class="quotelev1">&gt;            psignal( i , buf );
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void showallsignals_()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;      showallsignals() ;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12071.php">Barrett, Brian W: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="12069.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="12043.php">Laurence Marks: "[OMPI users] openmpi fails to terminate for errors/signals on some but not all processes"</a>
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
