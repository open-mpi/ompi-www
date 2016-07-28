<?
$subject_val = "Re: [OMPI users] again on &quot;...mpif90, mpif77 compiler is non-functional&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 10 18:11:44 2009" -->
<!-- isoreceived="20090210231144" -->
<!-- sent="Tue, 10 Feb 2009 15:11:37 -0800" -->
<!-- isosent="20090210231137" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] again on &amp;quot;...mpif90, mpif77 compiler is non-functional&amp;quot;" -->
<!-- id="9B2DEDF5-54C6-44A9-881D-715074F4B87B_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2716c4ae0902101459pfbb6988i9a7196558236e848_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] again on &quot;...mpif90, mpif77 compiler is non-functional&quot;<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-10 18:11:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8014.php">Champagne, Nathan J. (JSC-EV)[ESCG]: "Re: [OMPI users] Problem redirecting standard input"</a>
<li><strong>Previous message:</strong> <a href="8012.php">simone marras: "[OMPI users] again on &quot;...mpif90, mpif77 compiler is non-functional&quot;"</a>
<li><strong>In reply to:</strong> <a href="8012.php">simone marras: "[OMPI users] again on &quot;...mpif90, mpif77 compiler is non-functional&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8015.php">simone marras: "Re: [OMPI users] again on &quot;...mpif90, mpif77 compiler is 	non-functional&quot;"</a>
<li><strong>Reply:</strong> <a href="8015.php">simone marras: "Re: [OMPI users] again on &quot;...mpif90, mpif77 compiler is 	non-functional&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What output do you get if you run /usr/local/bin/mpif77 or /usr/local/ 
<br>
bin/mpif90 ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 10, 2009, at 14:59 , simone marras wrote:
<br>
<p><span class="quotelev1">&gt; Dear everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I apologize in advance for coming back with a common issue again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Differently from other threads though, I was able to configure, make
</span><br>
<span class="quotelev1">&gt; and make install openMPI on my macbook 10.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I used was the fowlling configure call:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local --enable-mpi-f77 --enable-mpi-f90
</span><br>
<span class="quotelev1">&gt; F77=ifort FC=ifort FFLAGS=&quot;-m32 -std=legacy&quot;
</span><br>
<span class="quotelev1">&gt; --with-wrapper-fflags=&quot;-m32 -std=legacy&quot; --with-mpi-f90-size=medium
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default FCFLAGS=&quot;-m32&quot;
</span><br>
<span class="quotelev1">&gt; --with-wrapper-fcflags=&quot;-m32&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sudo make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I verify if the compilation occurred correctly as in being
</span><br>
<span class="quotelev1">&gt; supporting Fortran, by running
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/ompi_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I correctly obtain:
</span><br>
<span class="quotelev1">&gt; Fortran77 bindings: yes (single underscore)
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The PROBLEM comes now: when I try to run mpif90 or mpif77 I still  
</span><br>
<span class="quotelev1">&gt; get the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev1">&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Woudl anyone be able to help me understand this ? I would really
</span><br>
<span class="quotelev1">&gt; appreciate your support
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance
</span><br>
<span class="quotelev1">&gt; S.M.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="8014.php">Champagne, Nathan J. (JSC-EV)[ESCG]: "Re: [OMPI users] Problem redirecting standard input"</a>
<li><strong>Previous message:</strong> <a href="8012.php">simone marras: "[OMPI users] again on &quot;...mpif90, mpif77 compiler is non-functional&quot;"</a>
<li><strong>In reply to:</strong> <a href="8012.php">simone marras: "[OMPI users] again on &quot;...mpif90, mpif77 compiler is non-functional&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8015.php">simone marras: "Re: [OMPI users] again on &quot;...mpif90, mpif77 compiler is 	non-functional&quot;"</a>
<li><strong>Reply:</strong> <a href="8015.php">simone marras: "Re: [OMPI users] again on &quot;...mpif90, mpif77 compiler is 	non-functional&quot;"</a>
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
