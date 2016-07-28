<?
$subject_val = "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  4 05:39:06 2009" -->
<!-- isoreceived="20090804093906" -->
<!-- sent="Tue, 4 Aug 2009 10:38:57 +0100" -->
<!-- isosent="20090804093857" -->
<!-- name="Ricardo Fonseca" -->
<!-- email="ricardo.fonseca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE" -->
<!-- id="8AB2B6AA-72EF-461A-A4B1-74FD9C473226_at_ist.utl.pt" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.9.1249142433.26776.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE<br>
<strong>From:</strong> Ricardo Fonseca (<em>ricardo.fonseca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-04 05:38:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10199.php">Jeff Squyres: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in FortranwithMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<li><strong>Previous message:</strong> <a href="10197.php">Pavel Shamis (Pasha): "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/10144.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10199.php">Jeff Squyres: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in FortranwithMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<li><strong>Reply:</strong> <a href="10199.php">Jeff Squyres: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in FortranwithMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>This is a Mac OS X (10.5.7) specific issue, that occurs for all  
<br>
versions &gt; 1.2.9 that I've tested (1.3.0 through the 1.4 nightly),  
<br>
regardless of what fortran compiler you use (ifort / g95 / gfortran).  
<br>
I've been able to replicate this issue on other OS X machines, and I  
<br>
am sure that I am using the correct headers / libraries. Version 1.2.9  
<br>
is working correctly. Here are some system details:
<br>
<p>$ uname -a
<br>
Darwin zamblap.epp.ist.utl.pt 9.7.0 Darwin Kernel Version 9.7.0: Tue  
<br>
Mar 31 22:52:17 PDT 2009; root:xnu-1228.12.14~1/RELEASE_I386 i386
<br>
<p>$ gcc --version
<br>
i686-apple-darwin9-gcc-4.0.1 (GCC) 4.0.1 (Apple Inc. build 5493)
<br>
<p>$ ld -v
<br>
@(#)PROGRAM:ld  PROJECT:ld64-85.2.1
<br>
<p>This might be a (again, Mac OS X specific) libtool issue. If you look  
<br>
at the name list of the generated .dylib libraries for 1.3.3 you get:
<br>
<p>$ nm /opt/openmpi/1.3.3-g95-32/lib/*.dylib | grep -i in_place
<br>
000a4d30 S _MPI_FORTRAN_IN_PLACE
<br>
000a4d34 S _mpi_fortran_in_place
<br>
000a4d38 S _mpi_fortran_in_place_
<br>
000a4d3c S _mpi_fortran_in_place__
<br>
000a4d30 S _MPI_FORTRAN_IN_PLACE
<br>
000a4d34 S _mpi_fortran_in_place
<br>
000a4d38 S _mpi_fortran_in_place_
<br>
000a4d3c S _mpi_fortran_in_place__
<br>
00007328 S __ZN3MPI8IN_PLACEE
<br>
00007328 S __ZN3MPI8IN_PLACEE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U _mpi_fortran_in_place__
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U _mpi_fortran_in_place__
<br>
00036eea D _orte_snapc_base_store_in_place
<br>
00036eea D _orte_snapc_base_store_in_place
<br>
<p>But for 1.2.9 you get:
<br>
<p>$ nm /opt/openmpi/1.2.9-g95-32/lib/*.dylib | grep -i in_place
<br>
00093950 S _MPI_FORTRAN_IN_PLACE
<br>
00093954 S _mpi_fortran_in_place
<br>
00093958 S _mpi_fortran_in_place_
<br>
0009395c S _mpi_fortran_in_place__
<br>
00093950 S _MPI_FORTRAN_IN_PLACE
<br>
00093954 S _mpi_fortran_in_place
<br>
00093958 S _mpi_fortran_in_place_
<br>
0009395c S _mpi_fortran_in_place__
<br>
0000e00c D __ZN3MPI8IN_PLACEE
<br>
0000e00c D __ZN3MPI8IN_PLACEE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U _mpi_fortran_in_place__
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U _mpi_fortran_in_place__
<br>
<p>So the __ZN3MPI8IN_PLACEE symbol, that I guess refers to the Fortran  
<br>
MPI_IN_PLACE constant is being defined incorrectly in the 1.3.3  
<br>
version as a S (symbol in a section other than those above), while it  
<br>
should be defined as a D (data section  symbol) as part of an  
<br>
&quot;external&quot; common block, as it happens in 1.2.9. So when linking the  
<br>
1.3.3 version the MPI_IN_PLACE constant will never have the same  
<br>
address as any of the mpi_fortran_in_place variables, but rather its  
<br>
own address.
<br>
<p>Thanks again for your help,
<br>
Ricardo
<br>
<p><pre>
---
Prof. Ricardo Fonseca
GoLP - Grupo de Lasers e Plasmas
Instituto de Plasmas e Fus&#227;o Nuclear
Instituto Superior T&#233;cnico
Av. Rovisco Pais
1049-001 Lisboa
Portugal
tel: +351 21 8419202
fax: +351 21 8464455
web: <a href="http://cfp.ist.utl.pt/golp/">http://cfp.ist.utl.pt/golp/</a>
On Aug 1, 2009, at 17:00 , users-request_at_[hidden] wrote:
&gt; Message: 2
&gt; Date: Sat, 1 Aug 2009 07:44:47 -0400
&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt; Subject: Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran
&gt; 	withMPI_REDUCE	/ MPI_ALLREDUCE
&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt; Message-ID: &lt;CA25CCF4-C5E7-47C0-A24E-8B05B59A6474_at_[hidden]&gt;
&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
&gt;
&gt; Hmm.  FWIW, I'm unable to replicate your error.  I tried with the OMPI
&gt; SVN trunk and a build of the OMPI 1.3.3 tarball using the GNU compiler
&gt; suite on RHEL4U5.
&gt;
&gt; I've even compiled your sample code with &quot;mpif90&quot; using the &quot;use mpi&quot;
&gt; statement -- I did not get an unclassifiable statement.  What version
&gt; of Open MPI are you using?  Please sent the info listed here:
&gt;
&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
&gt;
&gt; Can you confirm that you're not accidentally mixing and matching
&gt; multiple versions of Open MPI?
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10198/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10199.php">Jeff Squyres: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in FortranwithMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<li><strong>Previous message:</strong> <a href="10197.php">Pavel Shamis (Pasha): "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/10144.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10199.php">Jeff Squyres: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in FortranwithMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<li><strong>Reply:</strong> <a href="10199.php">Jeff Squyres: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in FortranwithMPI_REDUCE	/ MPI_ALLREDUCE"</a>
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
