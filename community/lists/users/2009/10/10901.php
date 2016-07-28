<?
$subject_val = "[OMPI users] strange performance fluctuations and problems with mpif90-vt";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  9 12:15:14 2009" -->
<!-- isoreceived="20091009161514" -->
<!-- sent="Fri, 9 Oct 2009 12:15:06 -0400" -->
<!-- isosent="20091009161506" -->
<!-- name="Greg Fischer" -->
<!-- email="greg.a.fischer_at_[hidden]" -->
<!-- subject="[OMPI users] strange performance fluctuations and problems with mpif90-vt" -->
<!-- id="c615a6650910090915p4303d321ha2a879d1e1a32cdd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] strange performance fluctuations and problems with mpif90-vt<br>
<strong>From:</strong> Greg Fischer (<em>greg.a.fischer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-09 12:15:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10902.php">ankur pachauri: "[OMPI users] MPI_Send and MPI_Recv not working"</a>
<li><strong>Previous message:</strong> <a href="10900.php">Jeff Squyres: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm seeing some sporadic strange behavior in one of our MPI codes.  Here are
<br>
selected portions of the output:
<br>
<p>-----------------------------------------------------------------------
<br>
|   |   |im |jm |km |  phi0   |         | iter | sync |mcalc |        |
<br>
|grp|itn|loc|loc|loc|Max Error|   NSR   |t(sec)|t(sec)|t(sec)| sysbal |
<br>
-----------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;1   2   1   1   9 1.000E+00 1.000E+00 16.789 15.923  0.079 1.00E+00
<br>
&nbsp;&nbsp;&nbsp;1   3   1   1   5 1.000E+00 1.000E+00 16.800 15.935  0.078 1.00E+00
<br>
&nbsp;&nbsp;&nbsp;1   4   1   1   1 1.000E+00 1.000E+00 17.500 15.906  0.079 1.00E+00
<br>
...
<br>
&nbsp;&nbsp;11   7  18 118  84 1.485E-01 1.117E+00 16.600 15.929  0.077 1.00E+00
<br>
&nbsp;&nbsp;11   8  20 124  84 1.516E-01 1.021E+00 16.600 15.929  0.077 1.00E+00
<br>
&nbsp;&nbsp;11   9  21 127  86 1.596E-01 1.053E+00  1.253  0.450  0.083 1.00E+00
<br>
&nbsp;&nbsp;11  10   7 131  88 1.290E-01 8.083E-01  0.808  0.014  0.272 1.00E+00
<br>
&nbsp;&nbsp;11  11   7 131  85 8.267E-02 6.408E-01  1.000  0.002  0.262 1.00E+00
<br>
...
<br>
&nbsp;101  10  25 111  77 5.690E-02 8.179E-01  0.480  0.023  0.087 1.00E+00
<br>
&nbsp;101  11  32 113  77 4.782E-02 8.404E-01  0.479  0.023  0.087 1.00E+00
<br>
&nbsp;101  12  37 116  79 4.330E-02 9.055E-01  0.479  0.023  0.087 1.00E+00
<br>
<p>This is an iterative calculation.  The critical quantity of interest is
<br>
&quot;iter t(sec)&quot;, which is the time per iteration.  (The other &quot;t(sec)&quot;
<br>
quantities are subsets of &quot;iter t(sec)&quot;.)  Between &quot;grp&quot; 1 and 111, the
<br>
calculation is not becoming appreciably more or less difficult, yet there is
<br>
a factor of ~30 difference in performance between the beginning and the
<br>
end.  This problem does not appear all of the time.  In many cases,
<br>
performance is good throughout the entire calculation.  (&quot;Good&quot;, here, is
<br>
being defined as what is seen in grp 101 above, which is roughly what I
<br>
expect to be seeing.)  However, when the problem does appear, it seems to
<br>
mysteriously go away after grinding through the calculation for a while.
<br>
<p>Has anyone ever seen behavior like this?  Any thoughts as to what could be
<br>
causing it?
<br>
<p>I tried to recompile the code with mpif90-vt and mpicc-vt, in hopes that the
<br>
vampirtrace outputs might shine some light as to the true nature of the
<br>
problem.  After recompiling, the code complains:
<br>
<p>[lx102:15254] *** An error occurred in MPI_Cart_create
<br>
[lx102:15254] *** on communicator MPI_COMM_WORLD
<br>
[lx102:15254] *** MPI_ERR_ARG: invalid argument of some other kind
<br>
[lx102:15254] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>...and then crashes out before doing anything useful.  My understanding is
<br>
that I only need to use the -vt compiler wrappers, and it will automatically
<br>
&quot;instrument&quot; my code.  Is there something else I should be doing?
<br>
<p>Thanks
<br>
Greg
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10901/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10902.php">ankur pachauri: "[OMPI users] MPI_Send and MPI_Recv not working"</a>
<li><strong>Previous message:</strong> <a href="10900.php">Jeff Squyres: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
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
