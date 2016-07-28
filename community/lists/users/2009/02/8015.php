<?
$subject_val = "Re: [OMPI users] again on &quot;...mpif90, mpif77 compiler is 	non-functional&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 11 04:00:40 2009" -->
<!-- isoreceived="20090211090040" -->
<!-- sent="Wed, 11 Feb 2009 10:00:35 +0100" -->
<!-- isosent="20090211090035" -->
<!-- name="simone marras" -->
<!-- email="smarras.bsc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] again on &amp;quot;...mpif90, mpif77 compiler is 	non-functional&amp;quot;" -->
<!-- id="2716c4ae0902110100t28ceee43p782609e5b8a2e391_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9B2DEDF5-54C6-44A9-881D-715074F4B87B_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] again on &quot;...mpif90, mpif77 compiler is 	non-functional&quot;<br>
<strong>From:</strong> simone marras (<em>smarras.bsc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-11 04:00:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8016.php">Mr Yann JOBIC: "[OMPI users] strange error, seems inable to launch job"</a>
<li><strong>Previous message:</strong> <a href="8014.php">Champagne, Nathan J. (JSC-EV)[ESCG]: "Re: [OMPI users] Problem redirecting standard input"</a>
<li><strong>In reply to:</strong> <a href="8013.php">George Bosilca: "Re: [OMPI users] again on &quot;...mpif90, mpif77 compiler is non-functional&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb 11, 2009 at 12:11 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; What output do you get if you run /usr/local/bin/mpif77 or
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpif90 ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<p>Hi there George, thanks for replying;  thanks to your question I
<br>
figured what was going wrong and solved it.
<br>
<p>The default mpif90 and mpif77 that were looked for were in /usr/bin
<br>
and were those preinstalled on my mac. Since my new installation with
<br>
fortran support installed the binaries in /usr/local/bin, I needed to
<br>
ln them into /usr/bin instead of the default ones.
<br>
<p>Thanks, it now works with no error.
<br>
<p>Simone
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 10, 2009, at 14:59 , simone marras wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear everyone,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I apologize in advance for coming back with a common issue again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Differently from other threads though, I was able to configure, make
</span><br>
<span class="quotelev2">&gt;&gt; and make install openMPI on my macbook 10.5.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What I used was the fowlling configure call:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/usr/local --enable-mpi-f77 --enable-mpi-f90
</span><br>
<span class="quotelev2">&gt;&gt; F77=ifort FC=ifort FFLAGS=&quot;-m32 -std=legacy&quot;
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-fflags=&quot;-m32 -std=legacy&quot; --with-mpi-f90-size=medium
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpirun-prefix-by-default FCFLAGS=&quot;-m32&quot;
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-fcflags=&quot;-m32&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sudo make install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I verify if the compilation occurred correctly as in being
</span><br>
<span class="quotelev2">&gt;&gt; supporting Fortran, by running
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/bin/ompi_info
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I correctly obtain:
</span><br>
<span class="quotelev2">&gt;&gt; Fortran77 bindings: yes (single underscore)
</span><br>
<span class="quotelev2">&gt;&gt; Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The PROBLEM comes now: when I try to run mpif90 or mpif77 I still get the
</span><br>
<span class="quotelev2">&gt;&gt; error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev2">&gt;&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Woudl anyone be able to help me understand this ? I would really
</span><br>
<span class="quotelev2">&gt;&gt; appreciate your support
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance
</span><br>
<span class="quotelev2">&gt;&gt; S.M.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Simone Marras, Ph.D. candidate
Barcelona Supercomputing Center
Universitat Politecnica de Catalunya
Avd. Diagonal 647,
Edificio H, planta 10
Barcelona, 08028
SPAIN
Tel.: (+34) 93 4011744
web: www.cranfield.ac.uk/~c086030
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8016.php">Mr Yann JOBIC: "[OMPI users] strange error, seems inable to launch job"</a>
<li><strong>Previous message:</strong> <a href="8014.php">Champagne, Nathan J. (JSC-EV)[ESCG]: "Re: [OMPI users] Problem redirecting standard input"</a>
<li><strong>In reply to:</strong> <a href="8013.php">George Bosilca: "Re: [OMPI users] again on &quot;...mpif90, mpif77 compiler is non-functional&quot;"</a>
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
