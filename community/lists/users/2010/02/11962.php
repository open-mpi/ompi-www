<?
$subject_val = "[OMPI users] Parallel file write in fortran (+mpi)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 10:27:18 2010" -->
<!-- isoreceived="20100202152718" -->
<!-- sent="Tue, 2 Feb 2010 09:27:13 -0600" -->
<!-- isosent="20100202152713" -->
<!-- name="Laurence Marks" -->
<!-- email="L-marks_at_[hidden]" -->
<!-- subject="[OMPI users] Parallel file write in fortran (+mpi)" -->
<!-- id="876512661002020727s4dceb7c8t4d7bb21f7437c817_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Parallel file write in fortran (+mpi)<br>
<strong>From:</strong> Laurence Marks (<em>L-marks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-02 10:27:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11963.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="11961.php">Terry Dontje: "Re: [OMPI users] totalview and message queue, empty windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11976.php">Nicolas Bock: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Reply:</strong> <a href="11976.php">Nicolas Bock: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Maybe reply:</strong> <a href="11980.php">David Singleton: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a question concerning having many processors in a mpi job all
<br>
write to the same file -- not using mpi calls but with standard
<br>
fortran I/O. I know that this can lead to consistency issues, but it
<br>
can also lead to OS issues with some flavors of nfs.
<br>
<p>At least in fortran, there is nothing &quot;wrong&quot; with doing this. My
<br>
question is whether this is &quot;One of the Seven Deadly Sins&quot; of mpi
<br>
programming, or just frowned on. (That is, it should be OK even if it
<br>
leads to nonsense files, and not lead to OS issues.) If it is a sin, I
<br>
would appreciate a link to where this is spelt out in some &quot;official&quot;
<br>
document or similar.
<br>
<p><pre>
-- 
Laurence Marks
Department of Materials Science and Engineering
MSE Rm 2036 Cook Hall
2220 N Campus Drive
Northwestern University
Evanston, IL 60208, USA
Tel: (847) 491-3996 Fax: (847) 491-7820
email: L-marks at northwestern dot edu
Web: www.numis.northwestern.edu
Chair, Commission on Electron Crystallography of IUCR
www.numis.northwestern.edu/
Electron crystallography is the branch of science that uses electron
scattering and imaging to study the structure of matter.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11963.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="11961.php">Terry Dontje: "Re: [OMPI users] totalview and message queue, empty windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11976.php">Nicolas Bock: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Reply:</strong> <a href="11976.php">Nicolas Bock: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Maybe reply:</strong> <a href="11980.php">David Singleton: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
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
