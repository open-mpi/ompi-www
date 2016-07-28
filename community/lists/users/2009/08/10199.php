<?
$subject_val = "Re: [OMPI users] OMPI users] MPI_IN_PLACE in FortranwithMPI_REDUCE	/ MPI_ALLREDUCE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  4 10:19:11 2009" -->
<!-- isoreceived="20090804141911" -->
<!-- sent="Tue, 4 Aug 2009 10:19:05 -0400" -->
<!-- isosent="20090804141905" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] MPI_IN_PLACE in FortranwithMPI_REDUCE	/ MPI_ALLREDUCE" -->
<!-- id="4855FEEC-9BBA-4E55-9840-BA4F62387AAB_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8AB2B6AA-72EF-461A-A4B1-74FD9C473226_at_ist.utl.pt" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] MPI_IN_PLACE in FortranwithMPI_REDUCE	/ MPI_ALLREDUCE<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-04 10:19:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10200.php">Hoelzlwimmer Andreas - S0810595005: "[OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<li><strong>Previous message:</strong> <a href="10198.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<li><strong>In reply to:</strong> <a href="10198.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  I can now replicate this on OSX as well, but I'm not sure I  
<br>
agree with all of your analysis.  Here's what I get from an OMPI SVN  
<br>
trunk build:
<br>
<p>[9:34] rtp-jsquyres-8718:~/bogus/lib % foreach file (`ls *.0.dylib`)
<br>
foreach? echo ================= $file
<br>
foreach? nm $file | grep in_place
<br>
foreach? end
<br>
================= libmca_common_sm.0.dylib
<br>
================= libmpi.0.dylib
<br>
0011a638 D _MPI_FORTRAN_IN_PLACE
<br>
0011a634 D _mpi_fortran_in_place
<br>
0011a63c D _mpi_fortran_in_place_
<br>
0011a640 D _mpi_fortran_in_place__
<br>
================= libmpi_cxx.0.dylib
<br>
00008144 S __ZN3MPI8IN_PLACEE
<br>
================= libmpi_f77.0.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U _MPI_FORTRAN_IN_PLACE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U _mpi_fortran_in_place
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U _mpi_fortran_in_place_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U _mpi_fortran_in_place__
<br>
================= libopen-pal.0.dylib
<br>
================= libopen-rte.0.dylib
<br>
0007f2b4 D _orte_snapc_base_store_in_place
<br>
<p>The __Z symbol is in libmpi_cxx, so I don't think it's relevant here  
<br>
(that's the part that I disagree about).  But notice that my  
<br>
*fortran_in_place*/i symbols are &quot;D&quot; in libmpi (where they are  
<br>
defined) and U in libmpi_f77.  This is different than your output.
<br>
<p>Here's the output from a 1.3.3 build:
<br>
<p>[9:55] rtp-jsquyres-8718:~/bogus/1.3/lib % !for
<br>
foreach file ( `ls *.0.dylib` )
<br>
foreach? echo =========== $file
<br>
foreach? nm $file | grep in_place
<br>
foreach? end
<br>
=========== libmca_common_sm.0.dylib
<br>
=========== libmpi.0.dylib
<br>
000a4d30 S _MPI_FORTRAN_IN_PLACE
<br>
000a4d34 S _mpi_fortran_in_place
<br>
000a4d38 S _mpi_fortran_in_place_
<br>
000a4d3c S _mpi_fortran_in_place__
<br>
=========== libmpi_cxx.0.dylib
<br>
00007328 S __ZN3MPI8IN_PLACEE
<br>
=========== libmpi_f77.0.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U _mpi_fortran_in_place_
<br>
=========== libopen-pal.0.dylib
<br>
=========== libopen-rte.0.dylib
<br>
00036eea D _orte_snapc_base_store_in_place
<br>
<p>Here's the output from a 1.2.9 build:
<br>
<p>[9:35] rtp-jsquyres-8718:~/bogus/1.2/lib % foreach file ( `ls *. 
<br>
0.dylib` )
<br>
foreach? echo ============= $file
<br>
foreach? nm $file | grep in_place
<br>
foreach? end
<br>
============= libmca_common_sm.0.dylib
<br>
============= libmpi.0.dylib
<br>
00093950 S _MPI_FORTRAN_IN_PLACE
<br>
00093954 S _mpi_fortran_in_place
<br>
00093958 S _mpi_fortran_in_place_
<br>
0009395c S _mpi_fortran_in_place__
<br>
============= libmpi_cxx.0.dylib
<br>
0000e00c D __ZN3MPI8IN_PLACEE
<br>
============= libmpi_f77.0.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U _mpi_fortran_in_place_
<br>
============= libopen-pal.0.dylib
<br>
============= libopen-rte.0.dylib
<br>
<p>Notes:
<br>
<p>1. I can't see lib libmpi_cxx affects anything in the f90 app
<br>
2. The trunk builds have the symbols as D's, but the 1.2 and 1.3  
<br>
builds have them as S's.
<br>
3. Build and run with 1.2 works, build and run with 1.3 fails.   
<br>
Inserting output statements in the runs, I can see that 1.2 correctly  
<br>
detects MPI_IN_PLACE but 1.3 and trunk do not.
<br>
<p>So it's something more than S vs. D, and I don't believe that the  
<br>
libmpi_cxx symbols is involved.  This is definitely a bug.  Doh!  With  
<br>
a *brief* code examination, I don't see any substantive code changes  
<br>
between 1.2.x and the SVN trunk/v1.3, but we definitely did change  
<br>
versions of Libtool.  I wonder if this is involved somehow.
<br>
<p>I don't have the cycles at the moment to investigate, but I've filed a  
<br>
blocker ticket against OMPI 1.3.4:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1982">https://svn.open-mpi.org/trac/ompi/ticket/1982</a>
<br>
<p>I made it a blocker because I assume this also affects all the other  
<br>
&quot;special&quot; constants in Fortran, like MPI_BOTTOM.
<br>
<p><p><p>On Aug 4, 2009, at 5:38 AM, Ricardo Fonseca wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a Mac OS X (10.5.7) specific issue, that occurs for all  
</span><br>
<span class="quotelev1">&gt; versions &gt; 1.2.9 that I've tested (1.3.0 through the 1.4 nightly),  
</span><br>
<span class="quotelev1">&gt; regardless of what fortran compiler you use (ifort / g95 /  
</span><br>
<span class="quotelev1">&gt; gfortran). I've been able to replicate this issue on other OS X  
</span><br>
<span class="quotelev1">&gt; machines, and I am sure that I am using the correct headers /  
</span><br>
<span class="quotelev1">&gt; libraries. Version 1.2.9 is working correctly. Here are some system  
</span><br>
<span class="quotelev1">&gt; details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; Darwin zamblap.epp.ist.utl.pt 9.7.0 Darwin Kernel Version 9.7.0: Tue  
</span><br>
<span class="quotelev1">&gt; Mar 31 22:52:17 PDT 2009; root:xnu-1228.12.14~1/RELEASE_I386 i386
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ gcc --version
</span><br>
<span class="quotelev1">&gt; i686-apple-darwin9-gcc-4.0.1 (GCC) 4.0.1 (Apple Inc. build 5493)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ld -v
</span><br>
<span class="quotelev1">&gt; @(#)PROGRAM:ld  PROJECT:ld64-85.2.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This might be a (again, Mac OS X specific) libtool issue. If you  
</span><br>
<span class="quotelev1">&gt; look at the name list of the generated .dylib libraries for 1.3.3  
</span><br>
<span class="quotelev1">&gt; you get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ nm /opt/openmpi/1.3.3-g95-32/lib/*.dylib | grep -i in_place
</span><br>
<span class="quotelev1">&gt; 000a4d30 S _MPI_FORTRAN_IN_PLACE
</span><br>
<span class="quotelev1">&gt; 000a4d34 S _mpi_fortran_in_place
</span><br>
<span class="quotelev1">&gt; 000a4d38 S _mpi_fortran_in_place_
</span><br>
<span class="quotelev1">&gt; 000a4d3c S _mpi_fortran_in_place__
</span><br>
<span class="quotelev1">&gt; 000a4d30 S _MPI_FORTRAN_IN_PLACE
</span><br>
<span class="quotelev1">&gt; 000a4d34 S _mpi_fortran_in_place
</span><br>
<span class="quotelev1">&gt; 000a4d38 S _mpi_fortran_in_place_
</span><br>
<span class="quotelev1">&gt; 000a4d3c S _mpi_fortran_in_place__
</span><br>
<span class="quotelev1">&gt; 00007328 S __ZN3MPI8IN_PLACEE
</span><br>
<span class="quotelev1">&gt; 00007328 S __ZN3MPI8IN_PLACEE
</span><br>
<span class="quotelev1">&gt;          U _mpi_fortran_in_place__
</span><br>
<span class="quotelev1">&gt;          U _mpi_fortran_in_place__
</span><br>
<span class="quotelev1">&gt; 00036eea D _orte_snapc_base_store_in_place
</span><br>
<span class="quotelev1">&gt; 00036eea D _orte_snapc_base_store_in_place
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But for 1.2.9 you get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ nm /opt/openmpi/1.2.9-g95-32/lib/*.dylib | grep -i in_place
</span><br>
<span class="quotelev1">&gt; 00093950 S _MPI_FORTRAN_IN_PLACE
</span><br>
<span class="quotelev1">&gt; 00093954 S _mpi_fortran_in_place
</span><br>
<span class="quotelev1">&gt; 00093958 S _mpi_fortran_in_place_
</span><br>
<span class="quotelev1">&gt; 0009395c S _mpi_fortran_in_place__
</span><br>
<span class="quotelev1">&gt; 00093950 S _MPI_FORTRAN_IN_PLACE
</span><br>
<span class="quotelev1">&gt; 00093954 S _mpi_fortran_in_place
</span><br>
<span class="quotelev1">&gt; 00093958 S _mpi_fortran_in_place_
</span><br>
<span class="quotelev1">&gt; 0009395c S _mpi_fortran_in_place__
</span><br>
<span class="quotelev1">&gt; 0000e00c D __ZN3MPI8IN_PLACEE
</span><br>
<span class="quotelev1">&gt; 0000e00c D __ZN3MPI8IN_PLACEE
</span><br>
<span class="quotelev1">&gt;          U _mpi_fortran_in_place__
</span><br>
<span class="quotelev1">&gt;          U _mpi_fortran_in_place__
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the __ZN3MPI8IN_PLACEE symbol, that I guess refers to the Fortran  
</span><br>
<span class="quotelev1">&gt; MPI_IN_PLACE constant is being defined incorrectly in the 1.3.3  
</span><br>
<span class="quotelev1">&gt; version as a S (symbol in a section other than those above), while  
</span><br>
<span class="quotelev1">&gt; it should be defined as a D (data section  symbol) as part of an  
</span><br>
<span class="quotelev1">&gt; &quot;external&quot; common block, as it happens in 1.2.9. So when linking the  
</span><br>
<span class="quotelev1">&gt; 1.3.3 version the MPI_IN_PLACE constant will never have the same  
</span><br>
<span class="quotelev1">&gt; address as any of the mpi_fortran_in_place variables, but rather its  
</span><br>
<span class="quotelev1">&gt; own address.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again for your help,
</span><br>
<span class="quotelev1">&gt; Ricardo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Prof. Ricardo Fonseca
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GoLP - Grupo de Lasers e Plasmas
</span><br>
<span class="quotelev1">&gt; Instituto de Plasmas e Fus&#227;o Nuclear
</span><br>
<span class="quotelev1">&gt; Instituto Superior T&#233;cnico
</span><br>
<span class="quotelev1">&gt; Av. Rovisco Pais
</span><br>
<span class="quotelev1">&gt; 1049-001 Lisboa
</span><br>
<span class="quotelev1">&gt; Portugal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tel: +351 21 8419202
</span><br>
<span class="quotelev1">&gt; fax: +351 21 8464455
</span><br>
<span class="quotelev1">&gt; web: <a href="http://cfp.ist.utl.pt/golp/">http://cfp.ist.utl.pt/golp/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 1, 2009, at 17:00 , users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 2
</span><br>
<span class="quotelev2">&gt;&gt; Date: Sat, 1 Aug 2009 07:44:47 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran
</span><br>
<span class="quotelev2">&gt;&gt; 	withMPI_REDUCE	/ MPI_ALLREDUCE
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;CA25CCF4-C5E7-47C0-A24E-8B05B59A6474_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmm.  FWIW, I'm unable to replicate your error.  I tried with the  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI
</span><br>
<span class="quotelev2">&gt;&gt; SVN trunk and a build of the OMPI 1.3.3 tarball using the GNU  
</span><br>
<span class="quotelev2">&gt;&gt; compiler
</span><br>
<span class="quotelev2">&gt;&gt; suite on RHEL4U5.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've even compiled your sample code with &quot;mpif90&quot; using the &quot;use mpi&quot;
</span><br>
<span class="quotelev2">&gt;&gt; statement -- I did not get an unclassifiable statement.  What version
</span><br>
<span class="quotelev2">&gt;&gt; of Open MPI are you using?  Please sent the info listed here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you confirm that you're not accidentally mixing and matching
</span><br>
<span class="quotelev2">&gt;&gt; multiple versions of Open MPI?
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
<li><strong>Next message:</strong> <a href="10200.php">Hoelzlwimmer Andreas - S0810595005: "[OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<li><strong>Previous message:</strong> <a href="10198.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<li><strong>In reply to:</strong> <a href="10198.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
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
