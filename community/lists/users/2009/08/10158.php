<?
$subject_val = "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  1 07:44:53 2009" -->
<!-- isoreceived="20090801114453" -->
<!-- sent="Sat, 1 Aug 2009 07:44:47 -0400" -->
<!-- isosent="20090801114447" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE" -->
<!-- id="CA25CCF4-C5E7-47C0-A24E-8B05B59A6474_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5F76734D-5DB4-4766-BC5F-C765EBCEBA63_at_ist.utl.pt" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-01 07:44:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10159.php">Tomislav Maric: "[OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="../../2009/07/10157.php">W.Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="../../2009/07/10138.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10192.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  FWIW, I'm unable to replicate your error.  I tried with the OMPI  
<br>
SVN trunk and a build of the OMPI 1.3.3 tarball using the GNU compiler  
<br>
suite on RHEL4U5.
<br>
<p>I've even compiled your sample code with &quot;mpif90&quot; using the &quot;use mpi&quot;  
<br>
statement -- I did not get an unclassifiable statement.  What version  
<br>
of Open MPI are you using?  Please sent the info listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>Can you confirm that you're not accidentally mixing and matching  
<br>
multiple versions of Open MPI?
<br>
<p><p><p>On Jul 30, 2009, at 10:41 AM, Ricardo Fonseca wrote:
<br>
<p><span class="quotelev1">&gt; (I just realized I had the wrong subject line, here it goes again)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I am using the right one. I've installed the freshly compiled  
</span><br>
<span class="quotelev1">&gt; openmpi into /opt/openmpi/1.3.3-g95-32. If I edit the mpif.h file by  
</span><br>
<span class="quotelev1">&gt; hand and put &quot;error!&quot; in the first line I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; zamblap:sandbox zamb$ edit /opt/openmpi/1.3.3-g95-32/include/mpif.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; zamblap:sandbox zamb$ mpif77 inplace_test.f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In file mpif.h:1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Included at inplace_test.f90:7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; error!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error: Unclassifiable statement at (1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (btw, if I use the F90 bindings instead I get a similar problem,  
</span><br>
<span class="quotelev1">&gt; except the address for the MPI_IN_PLACE fortran constant is slightly  
</span><br>
<span class="quotelev1">&gt; different from the F77 binding, i.e. instead of 0x50920 I get 0x508e0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ricardo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 29, 2009, at 17:00 , users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 2
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 29 Jul 2009 07:54:38 -0500
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran
</span><br>
<span class="quotelev2">&gt;&gt; 	withMPI_REDUCE	/ MPI_ALLREDUCE
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;986510B6-7103-4D7B-B7D6-9D8AFDC19E71_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed;  
</span><br>
<span class="quotelev2">&gt;&gt; delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you confirm that you're using the right mpif.h?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Keep in mind that each MPI implementation's mpif.h is different --
</span><br>
<span class="quotelev2">&gt;&gt; it's a common mistake to assume that the mpif.h from one MPI
</span><br>
<span class="quotelev2">&gt;&gt; implementation should work with another implementation (e.g., someone
</span><br>
<span class="quotelev2">&gt;&gt; copied mpif.h from one MPI to your software's source tree, so the
</span><br>
<span class="quotelev2">&gt;&gt; compiler always finds that one instead of the MPI-implementation-
</span><br>
<span class="quotelev2">&gt;&gt; provided mpif.h.).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 28, 2009, at 1:17 PM, Ricardo Fonseca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi George
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did some extra digging and found that (for some reason) the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_IN_PLACE parameter is not being recognized as such by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_reduce_f (reduce_f.c:61). I added a couple of printfs:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    printf(&quot; sendbuf = %p \n&quot;, sendbuf );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    printf(&quot; MPI_FORTRAN_IN_PLACE = %p \n&quot;, &amp;MPI_FORTRAN_IN_PLACE );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    printf(&quot; mpi_fortran_in_place = %p \n&quot;, &amp;mpi_fortran_in_place );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    printf(&quot; mpi_fortran_in_place_ = %p \n&quot;,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;mpi_fortran_in_place_ );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    printf(&quot; mpi_fortran_in_place__ = %p \n&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;mpi_fortran_in_place__ );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And this is what I get on node 0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sendbuf = 0x50920
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_FORTRAN_IN_PLACE = 0x17cd30
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_fortran_in_place = 0x17cd34
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_fortran_in_place_ = 0x17cd38
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_fortran_in_place__ = 0x17cd3c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This makes OMPI_F2C_IN_PLACE(sendbuf) fail. If I replace the line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sendbuf = OMPI_F2C_IN_PLACE(sendbuf);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if ( sendbuf == 0x50920 ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      printf(&quot;sendbuf is MPI_IN_PLACE!\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      sendbuf = MPI_IN_PLACE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then the code works and gives the correct result:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sendbuf is MPI_IN_PLACE!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Result:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. 3. 3. 3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So my guess is that somehow the MPI_IN_PLACE constant for fortran is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; getting the wrong address. Could this be related to the fortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers I'm using (ifort / g95)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ricardo
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10159.php">Tomislav Maric: "[OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="../../2009/07/10157.php">W.Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="../../2009/07/10138.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10192.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
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
