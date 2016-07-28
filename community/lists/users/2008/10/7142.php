<?
$subject_val = "Re: [OMPI users] Equivalent .h files";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 10:56:07 2008" -->
<!-- isoreceived="20081030145607" -->
<!-- sent="Thu, 30 Oct 2008 10:55:50 -0400" -->
<!-- isosent="20081030145550" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Equivalent .h files" -->
<!-- id="4909CAF6.9000400_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71ec5a370810300733h5920d577hffaea987b7120378_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Equivalent .h files<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-30 10:55:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7143.php">Benjamin Lamptey: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>Previous message:</strong> <a href="7141.php">Eugene Loh: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>In reply to:</strong> <a href="7138.php">Benjamin Lamptey: "[OMPI users] Equivalent .h files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7150.php">Benjamin Lamptey: "Re: [OMPI users] Equivalent .h files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Benjamin Lamptey wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I am new at using open-mpi and will like to know something basic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the equivalent of the &quot;mpif.h&quot; in open-mpi which is normally 
</span><br>
<span class="quotelev1">&gt; &quot;included&quot; at
</span><br>
<span class="quotelev1">&gt; the beginning of mpi codes (fortran in this case).
</span><br>
<p>Hello Benjamin and List
<br>
<p>As far as I know, it is just the same old &quot;mpif.h&quot;.  :)
<br>
<p>Make sure you point to the right (OpenMPI) mpif77 or mpif90 wrapper when 
<br>
you compile
<br>
your code, so as to get the correct mpif.h.
<br>
Use a full path name, if needed.
<br>
A common mistake is to inadvertently use another wrapper (say from 
<br>
MPICH, or LAM),
<br>
since some Linux distributions come with tons of MPI versions, compiler 
<br>
wrappers, and include files.
<br>
<p>For most cases mpif77/mpif90 will do the pre-compiler phase too,
<br>
if your source file names have the correct suffix (.F or .F90, instead 
<br>
of .f or .f90).
<br>
Using the mpif77/mpif90 compiler wrappers is probably your best choice.
<br>
However, if your Makefile has a separate pre-compiler phase with cpp,
<br>
you need to add the corresponding &quot;-I/my/path/to/openmpi/include&quot; clause 
<br>
to it,
<br>
otherwise it may not find the correct mpif.h file and use a wrong one.
<br>
<p>Works for me.
<br>
I hope it helps you.
<br>
<p>Gus Correa
<br>
<p><pre>
-- 
---------------------------------------------------------------------
Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
Lamont-Doherty Earth Observatory - Columbia University
P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
---------------------------------------------------------------------
&gt;
&gt; I shall appreciate that for cpp as well.
&gt;
&gt; Thanks
&gt; Ben
&gt;
&gt;------------------------------------------------------------------------
&gt;
&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7143.php">Benjamin Lamptey: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>Previous message:</strong> <a href="7141.php">Eugene Loh: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>In reply to:</strong> <a href="7138.php">Benjamin Lamptey: "[OMPI users] Equivalent .h files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7150.php">Benjamin Lamptey: "Re: [OMPI users] Equivalent .h files"</a>
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
