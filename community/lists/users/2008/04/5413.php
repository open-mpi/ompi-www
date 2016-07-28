<?
$subject_val = "[OMPI users] GDB Debugging - GROMACS(v-3.3.3) Application with OpenMPI(v-1.2.5/v-1.2.6)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 17 13:11:08 2008" -->
<!-- isoreceived="20080417171108" -->
<!-- sent="Thu, 17 Apr 2008 22:40:58 +0530" -->
<!-- isosent="20080417171058" -->
<!-- name="Mukesh K Srivastava" -->
<!-- email="srimks11_at_[hidden]" -->
<!-- subject="[OMPI users] GDB Debugging - GROMACS(v-3.3.3) Application with OpenMPI(v-1.2.5/v-1.2.6)" -->
<!-- id="3efa6bfc0804171010p4c1f4150ja1e0b88725bcf231_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] GDB Debugging - GROMACS(v-3.3.3) Application with OpenMPI(v-1.2.5/v-1.2.6)<br>
<strong>From:</strong> Mukesh K Srivastava (<em>srimks11_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-17 13:10:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5414.php">Tamer: "[OMPI users] How to restart a job twice"</a>
<li><strong>Previous message:</strong> <a href="5412.php">Jeff Squyres: "Re: [OMPI users] fortran90 and c++ wrappers don't work"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi.
<br>
<p>Anyone had performed Gromacs(v3.x - v3.3.3) with FFTW(v3.1) debugging using
<br>
OpenMPI(v-1.2.5 or v-1.2.6). I had properly configured OpenMPI with debug
<br>
option and also configured Gromacs alongwith FFTW succesfully. I can perform
<br>
p2bdbx_mpi, editconf_mpi, genbox_mpi, grompp_mpi compilation and finally
<br>
mdrun_mpi without any error or warning messages. But while executing
<br>
mdrun_mpi w.r.t mprun, I get libmpi.so.0 not found.
<br>
<p>I had tried with LD_LIBRARY_PATH, forcefully mentioning PATH &amp;
<br>
LD_LIBRARY_PATH in etc/bashrc file and also tried with providing softlink to
<br>
libmpi.so.0, but everytime I get same error message of &quot;libmpi.so.0&quot; not
<br>
found.
<br>
<p>I had check ldd and it's dependency of executable mdrun_mpi, checked it's
<br>
symbol table content, and finally all lib's configured for 64 bit with ELF
<br>
format but still getting same error of libmpi.so.0 not found while
<br>
performing GDB serial debugging with single node.
<br>
<p>Note: I had performed GDB debugging for small MPI program(hello world) using
<br>
OpenMPI(v1.2.5/v1.2.6) wthout GROMACS association succesfully.
<br>
<p>Any clue plz?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5413/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5414.php">Tamer: "[OMPI users] How to restart a job twice"</a>
<li><strong>Previous message:</strong> <a href="5412.php">Jeff Squyres: "Re: [OMPI users] fortran90 and c++ wrappers don't work"</a>
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
