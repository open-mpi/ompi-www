<?
$subject_val = "Re: [OMPI users] ifort and gfortran module";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 20 13:47:40 2009" -->
<!-- isoreceived="20090720174740" -->
<!-- sent="Mon, 20 Jul 2009 10:47:35 -0700" -->
<!-- isosent="20090720174735" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ifort and gfortran module" -->
<!-- id="20090720174735.GB24042_at_stikine.its.sfu.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6296685.80571247898830323.JavaMail.root_at_mta.iut.ac.ir" -->
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
<strong>Subject:</strong> Re: [OMPI users] ifort and gfortran module<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-20 13:47:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10018.php">Nifty Tom Mitchell: "[OMPI users] Profiling performance by forcing transport choice."</a>
<li><strong>Previous message:</strong> <a href="10016.php">Jed Brown: "[OMPI users] MPI_Barrier called late within ompi_mpi_finalize when MPIIO fd not closed"</a>
<li><strong>In reply to:</strong> <a href="10008.php">rahmani: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10042.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Reply:</strong> <a href="10042.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Reply:</strong> <a href="10047.php">rahmani: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I want to avoid separate MPI distributions since we compile many
<br>
MPI software packages. Having more than one MPI distribution
<br>
(at least) doubles the amount of work.
<br>
<p>For now I came up with the following solution:
<br>
<p>1. compile openmpi using gfortran as the Fortran compiler
<br>
&nbsp;&nbsp;&nbsp;and install it in /usr/local/openmpi
<br>
2. move the Fortran module to the directory
<br>
&nbsp;&nbsp;&nbsp;/usr/local/openmpi/include/gfortran. In that directory
<br>
&nbsp;&nbsp;&nbsp;create softlinks to the files in /usr/local/openmpi/include.
<br>
3. compile openmpi using ifort and install the Fortran module in
<br>
&nbsp;&nbsp;&nbsp;/usr/local/openmpi/include.
<br>
4. in /usr/local/openmpi/bin create softlinks mpif90.ifort
<br>
&nbsp;&nbsp;&nbsp;and mpif90.gfortran pointing to opal_wrapper. Remove the
<br>
&nbsp;&nbsp;&nbsp;mpif90 softlink.
<br>
5. Move /usr/local/openmpi/share/openmpi/mpif90-wrapper-data.txt
<br>
&nbsp;&nbsp;&nbsp;to /usr/local/openmpi/share/openmpi/mpif90.ifort-wrapper-data.txt.
<br>
&nbsp;&nbsp;&nbsp;Copy the file to
<br>
&nbsp;&nbsp;&nbsp;/usr/local/openmpi/share/openmpi/mpif90.gfortran-wrapper-data.txt
<br>
&nbsp;&nbsp;&nbsp;and change the line includedir=${includedir} to
<br>
&nbsp;&nbsp;&nbsp;includedir=${includedir}/gfortran
<br>
6. Create a wrapper script /usr/local/openmpi/bin/mpif90:
<br>
<p>#!/bin/bash
<br>
OMPI_WRAPPER_FC=`basename $OMPI_FC 2&gt; /dev/null`
<br>
if [ &quot;$OMPI_WRAPPER_FC&quot; = 'gfortran' ]; then
<br>
&nbsp;&nbsp;&nbsp;exec $0.gfortran &quot;$@&quot;
<br>
else
<br>
&nbsp;&nbsp;&nbsp;exec $0.ifort &quot;$@&quot;
<br>
fi
<br>
<p>The reason we use gfortran in step 1 is that otherwise you get those
<br>
irritating error messages from the Intel libraries, cf.
<br>
<a href="http://www.open-mpi.org/faq/?category=building#intel-compiler-wrapper-compiler-warnings">http://www.open-mpi.org/faq/?category=building#intel-compiler-wrapper-compiler-warnings</a>
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
Head, Research Computing
WestGrid Site Lead
IT Services                                phone: 778 782-4691
Simon Fraser University                    fax:   778 782-4242
Burnaby, British Columbia                  email: siegert_at_[hidden]
Canada  V5A 1S6
On Sat, Jul 18, 2009 at 10:03:50AM +0330, rahmani wrote:
&gt; Hi,
&gt; you should compile openmpi with each pf intel and gfortran seperatly and install each of them in a separate location, and use mpi-selector to select one.
&gt; if don't use mpi selector, use full path of the compiler (for example /usr/local/openmpi/intel/bin/mpif90) and add the corresponding library to your LD_LIBRARY_PATH
&gt; Mahdi Rahmani
&gt; 
&gt; ----- Original Message -----
&gt; From: &quot;Jim Kress&quot; &lt;jimkress_58_at_[hidden]&gt;
&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
&gt; Sent: Saturday, July 18, 2009 5:43:20 AM (GMT+0330) Asia/Tehran
&gt; Subject: Re: [OMPI users] ifort and gfortran module
&gt; 
&gt; Why not generate an ifort version with a prefix of &lt;directory you want for
&gt; openmpi&gt;_intel
&gt; And the gfortran version with a prefix of &lt;directory you want for
&gt; openmpi&gt;_gcc
&gt; 
&gt; ?
&gt; 
&gt; That's what I do and then use mpi-selector to switch between versions as
&gt; required.
&gt; 
&gt; Jim
&gt; 
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
&gt; Behalf Of Martin Siegert
&gt; Sent: Friday, July 17, 2009 3:29 PM
&gt; To: Open MPI Users
&gt; Subject: [OMPI users] ifort and gfortran module
&gt; 
&gt; Hi,
&gt; 
&gt; I am wondering whether it is possible to support both the Intel
&gt; compiler ifort and gfortran within a single compiled version of
&gt; openmpi.
&gt; E.g.,
&gt; 1. compile openmpi ifort as the Fortran compiler and install it
&gt;    in /usr/local/openmpi-1.3.3
&gt; 2. compile openmpi using gfortran, but do not install it; only
&gt;    copy mpi.mod to /usr/local/openmpi-1.3.3/include/gfortran
&gt; 
&gt; Is there a way to cause mpif90 to include
&gt; /usr/local/openmpi-1.3.3/include/gfortran
&gt; before including /usr/local/openmpi-1.3.3/include if OMPI_FC is
&gt; set to gfortran (more precisely if `basename $OMPI_FC` = gfortran)?
&gt; 
&gt; Or is there another way of accomplishing this?
&gt; 
&gt; Cheers,
&gt; Martin
&gt; 
&gt; -- 
&gt; Martin Siegert
&gt; Head, Research Computing
&gt; WestGrid Site Lead
&gt; IT Services                                phone: 778 782-4691
&gt; Simon Fraser University                    fax:   778 782-4242
&gt; Burnaby, British Columbia                  email: siegert_at_[hidden]
&gt; Canada  V5A 1S6
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10018.php">Nifty Tom Mitchell: "[OMPI users] Profiling performance by forcing transport choice."</a>
<li><strong>Previous message:</strong> <a href="10016.php">Jed Brown: "[OMPI users] MPI_Barrier called late within ompi_mpi_finalize when MPIIO fd not closed"</a>
<li><strong>In reply to:</strong> <a href="10008.php">rahmani: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10042.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Reply:</strong> <a href="10042.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Reply:</strong> <a href="10047.php">rahmani: "Re: [OMPI users] ifort and gfortran module"</a>
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
