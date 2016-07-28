<?
$subject_val = "Re: [OMPI users] How to get started?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 11:45:33 2008" -->
<!-- isoreceived="20081002154533" -->
<!-- sent="Thu, 02 Oct 2008 11:45:24 -0400" -->
<!-- isosent="20081002154524" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to get started?" -->
<!-- id="48E4EC94.3010900_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="62da47a00810020007t1c5ab472y253ea5a39a8a564c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to get started?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-02 11:45:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6836.php">Shafagh Jafer: "[OMPI users] mpi2c++ map?"</a>
<li><strong>Previous message:</strong> <a href="6834.php">Rolf Vandevaart: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>In reply to:</strong> <a href="6825.php">Anugraha Sankaranarayanan: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6836.php">Shafagh Jafer: "[OMPI users] mpi2c++ map?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Anugraha Sankaranarayananand list
<br>
<p>Most likely your default mpicc is not the OpenMPI  one that you want to use.
<br>
Linux distributions and many commercial compilers come with a variety of
<br>
versions of MPI, which may take precedence in your path.
<br>
This confusion happens all the time.
<br>
<p>I suggest you use full path name for compilation, e.g:
<br>
<p>/my/full/path/to/openmpi/bin/mpicc sample.c -o sample
<br>
<p>Likewise, use full path name to mpirun/mpiexec when you run the 
<br>
executable, e.g.:
<br>
<p>/my/full/path/to/openmpi/bin/mpiexec -n 2 sample
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
&nbsp;
<br>
<p><pre>
-- 
---------------------------------------------------------------------
Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
Lamont-Doherty Earth Observatory - Columbia University
P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
---------------------------------------------------------------------
Anugraha Sankaranarayanan wrote:
&gt;&gt;Thank you, everyone.I have successfully installed the openmpi pkg in
&gt;&gt;my ubuntu hardy heron for gcc( HP Compaq Dual-core notebook) following
&gt;&gt;the instructions in the FAQ page.I still need to install the
&gt;&gt;libopenmpi-dev header file pkg.Will come back after doing that.
&gt;
&gt;&gt;Anugraha.S
&gt;
&gt; I've installed the libopenmpi-dev and also openmpi-bin.I tried to 
&gt; compile a sample program and am getting this error,
&gt; atom_at_atom-laptop:~$ mpicc sample.c -o sample
&gt; sample.c:2:17: error: ompi.h: No such file or directory
&gt; sample.c: In function 'main':
&gt; sample.c:7: error: 'mpi_comm_world' undeclared (first use in this 
&gt; function)
&gt; sample.c:7: error: (Each undeclared identifier is reported only once
&gt; sample.c:7: error: for each function it appears in.)
&gt;
&gt; Am I using the wrong header file? I tried ompic.h too, but the same 
&gt; error.What do i have to do?
&gt;
&gt; Thanking in advance,
&gt; S.Anugraha.
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
<li><strong>Next message:</strong> <a href="6836.php">Shafagh Jafer: "[OMPI users] mpi2c++ map?"</a>
<li><strong>Previous message:</strong> <a href="6834.php">Rolf Vandevaart: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>In reply to:</strong> <a href="6825.php">Anugraha Sankaranarayanan: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6836.php">Shafagh Jafer: "[OMPI users] mpi2c++ map?"</a>
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
