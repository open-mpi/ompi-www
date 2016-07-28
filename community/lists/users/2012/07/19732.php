<?
$subject_val = "[OMPI users] fortran program with integer kind=8 using openmpi&#254;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  3 19:03:57 2012" -->
<!-- isoreceived="20120703230357" -->
<!-- sent="Tue, 3 Jul 2012 16:03:51 -0700" -->
<!-- isosent="20120703230351" -->
<!-- name="William Au" -->
<!-- email="au_wai_chung_at_[hidden]" -->
<!-- subject="[OMPI users] fortran program with integer kind=8 using openmpi&amp;#254;" -->
<!-- id="SNT134-W58C21ABC3A68C44D5A48ADD3E90_at_phx.gbl" -->
<!-- charset="windows-1256" -->
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
<strong>Subject:</strong> [OMPI users] fortran program with integer kind=8 using openmpi&#254;<br>
<strong>From:</strong> William Au (<em>au_wai_chung_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-03 19:03:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19733.php">Steve Kargl: "Re: [OMPI users] fortran program with integer kind=8 using openmpi?"</a>
<li><strong>Previous message:</strong> <a href="19731.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19733.php">Steve Kargl: "Re: [OMPI users] fortran program with integer kind=8 using openmpi?"</a>
<li><strong>Reply:</strong> <a href="19733.php">Steve Kargl: "Re: [OMPI users] fortran program with integer kind=8 using openmpi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>Thank you for all responses. There is another problem using  -fdefault-integer-8.
<br>
I am using 1.6..
<br>
<p>For the i8:
<br>
configure:44650: checking for the value of MPI_STATUS_SIZE
<br>
configure:44674: result: 3 Fortran INTEGERs
<br>
configure:44866: checking if Fortran compiler works
<br>
configure:44895: /usr/bin/gfortran44 -o conftest -m64  -g -fPIC -fdefault-integer-8  -fexceptions  conftest.f  &gt;&amp;5
<br>
configure:44895: $? = 0
<br>
<p>MPI_STATUS_SIZE 3
<br>
<p>For the i4:
<br>
configure:44650: checking for the value of MPI_STATUS_SIZE
<br>
configure:44674: result: 6 Fortran INTEGERs
<br>
configure:44866: checking if Fortran compiler works
<br>
configure:44895: gfortran -o conftest -m64 -g -fPIC  -fexceptions  conftest.f  &gt;&amp;5
<br>
<p>MPI_STATUS_SIZE 6
<br>
<p><p>For i8,  I found out later in   pstatus_c2f.c
<br>
<p>for( i = 0; i &lt; (int)(sizeof(MPI_Status) / sizeof(int)); i++ )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f_status[i] = OMPI_INT_2_FINT(c_ints[i]);
<br>
<p>It will try to write 6 integers to f_status and hence out of array bound.
<br>
<p>We need to change the configure to set MPI_STATUS_SIZE right in this case.
<br>
<p>Thanks.
<br>
<p>Regards,
<br>
<p>William 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19732/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19733.php">Steve Kargl: "Re: [OMPI users] fortran program with integer kind=8 using openmpi?"</a>
<li><strong>Previous message:</strong> <a href="19731.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19733.php">Steve Kargl: "Re: [OMPI users] fortran program with integer kind=8 using openmpi?"</a>
<li><strong>Reply:</strong> <a href="19733.php">Steve Kargl: "Re: [OMPI users] fortran program with integer kind=8 using openmpi?"</a>
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
