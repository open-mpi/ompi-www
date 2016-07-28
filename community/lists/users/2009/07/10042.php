<?
$subject_val = "Re: [OMPI users] ifort and gfortran module";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 13:37:20 2009" -->
<!-- isoreceived="20090722173720" -->
<!-- sent="Wed, 22 Jul 2009 13:37:14 -0400" -->
<!-- isosent="20090722173714" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ifort and gfortran module" -->
<!-- id="4C86ACA6-DDA6-40C7-B05A-9324D9547BAB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090720174735.GB24042_at_stikine.its.sfu.ca" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 13:37:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10043.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Previous message:</strong> <a href="10041.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>In reply to:</strong> <a href="10017.php">Martin Siegert: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10043.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Reply:</strong> <a href="10043.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep, that works.
<br>
<p>I'm glad that our txt files and &quot;look at argv[0]&quot; scheme was useful in  
<br>
the real world!  (we designed it with uses almost exactly like this in  
<br>
mind)
<br>
<p><p>On Jul 20, 2009, at 1:47 PM, Martin Siegert wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to avoid separate MPI distributions since we compile many
</span><br>
<span class="quotelev1">&gt; MPI software packages. Having more than one MPI distribution
</span><br>
<span class="quotelev1">&gt; (at least) doubles the amount of work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For now I came up with the following solution:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. compile openmpi using gfortran as the Fortran compiler
</span><br>
<span class="quotelev1">&gt;    and install it in /usr/local/openmpi
</span><br>
<span class="quotelev1">&gt; 2. move the Fortran module to the directory
</span><br>
<span class="quotelev1">&gt;    /usr/local/openmpi/include/gfortran. In that directory
</span><br>
<span class="quotelev1">&gt;    create softlinks to the files in /usr/local/openmpi/include.
</span><br>
<span class="quotelev1">&gt; 3. compile openmpi using ifort and install the Fortran module in
</span><br>
<span class="quotelev1">&gt;    /usr/local/openmpi/include.
</span><br>
<span class="quotelev1">&gt; 4. in /usr/local/openmpi/bin create softlinks mpif90.ifort
</span><br>
<span class="quotelev1">&gt;    and mpif90.gfortran pointing to opal_wrapper. Remove the
</span><br>
<span class="quotelev1">&gt;    mpif90 softlink.
</span><br>
<span class="quotelev1">&gt; 5. Move /usr/local/openmpi/share/openmpi/mpif90-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt;    to /usr/local/openmpi/share/openmpi/mpif90.ifort-wrapper-data.txt.
</span><br>
<span class="quotelev1">&gt;    Copy the file to
</span><br>
<span class="quotelev1">&gt;    /usr/local/openmpi/share/openmpi/mpif90.gfortran-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt;    and change the line includedir=${includedir} to
</span><br>
<span class="quotelev1">&gt;    includedir=${includedir}/gfortran
</span><br>
<span class="quotelev1">&gt; 6. Create a wrapper script /usr/local/openmpi/bin/mpif90:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_FC=`basename $OMPI_FC 2&gt; /dev/null`
</span><br>
<span class="quotelev1">&gt; if [ &quot;$OMPI_WRAPPER_FC&quot; = 'gfortran' ]; then
</span><br>
<span class="quotelev1">&gt;    exec $0.gfortran &quot;$@&quot;
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;    exec $0.ifort &quot;$@&quot;
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason we use gfortran in step 1 is that otherwise you get those
</span><br>
<span class="quotelev1">&gt; irritating error messages from the Intel libraries, cf.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#intel-compiler-wrapper-compiler-warnings">http://www.open-mpi.org/faq/?category=building#intel-compiler-wrapper-compiler-warnings</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Martin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Martin Siegert
</span><br>
<span class="quotelev1">&gt; Head, Research Computing
</span><br>
<span class="quotelev1">&gt; WestGrid Site Lead
</span><br>
<span class="quotelev1">&gt; IT Services                                phone: 778 782-4691
</span><br>
<span class="quotelev1">&gt; Simon Fraser University                    fax:   778 782-4242
</span><br>
<span class="quotelev1">&gt; Burnaby, British Columbia                  email: siegert_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Canada  V5A 1S6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Jul 18, 2009 at 10:03:50AM +0330, rahmani wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; you should compile openmpi with each pf intel and gfortran  
</span><br>
<span class="quotelev1">&gt; seperatly and install each of them in a separate location, and use  
</span><br>
<span class="quotelev1">&gt; mpi-selector to select one.
</span><br>
<span class="quotelev2">&gt; &gt; if don't use mpi selector, use full path of the compiler (for  
</span><br>
<span class="quotelev1">&gt; example /usr/local/openmpi/intel/bin/mpif90) and add the  
</span><br>
<span class="quotelev1">&gt; corresponding library to your LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt; Mahdi Rahmani
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt; &gt; From: &quot;Jim Kress&quot; &lt;jimkress_58_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Saturday, July 18, 2009 5:43:20 AM (GMT+0330) Asia/Tehran
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] ifort and gfortran module
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Why not generate an ifort version with a prefix of &lt;directory you  
</span><br>
<span class="quotelev1">&gt; want for
</span><br>
<span class="quotelev2">&gt; &gt; openmpi&gt;_intel
</span><br>
<span class="quotelev2">&gt; &gt; And the gfortran version with a prefix of &lt;directory you want for
</span><br>
<span class="quotelev2">&gt; &gt; openmpi&gt;_gcc
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That's what I do and then use mpi-selector to switch between  
</span><br>
<span class="quotelev1">&gt; versions as
</span><br>
<span class="quotelev2">&gt; &gt; required.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org] On
</span><br>
<span class="quotelev2">&gt; &gt; Behalf Of Martin Siegert
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Friday, July 17, 2009 3:29 PM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI users] ifort and gfortran module
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am wondering whether it is possible to support both the Intel
</span><br>
<span class="quotelev2">&gt; &gt; compiler ifort and gfortran within a single compiled version of
</span><br>
<span class="quotelev2">&gt; &gt; openmpi.
</span><br>
<span class="quotelev2">&gt; &gt; E.g.,
</span><br>
<span class="quotelev2">&gt; &gt; 1. compile openmpi ifort as the Fortran compiler and install it
</span><br>
<span class="quotelev2">&gt; &gt;    in /usr/local/openmpi-1.3.3
</span><br>
<span class="quotelev2">&gt; &gt; 2. compile openmpi using gfortran, but do not install it; only
</span><br>
<span class="quotelev2">&gt; &gt;    copy mpi.mod to /usr/local/openmpi-1.3.3/include/gfortran
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to cause mpif90 to include
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmpi-1.3.3/include/gfortran
</span><br>
<span class="quotelev2">&gt; &gt; before including /usr/local/openmpi-1.3.3/include if OMPI_FC is
</span><br>
<span class="quotelev2">&gt; &gt; set to gfortran (more precisely if `basename $OMPI_FC` = gfortran)?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Or is there another way of accomplishing this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt; Martin
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Martin Siegert
</span><br>
<span class="quotelev2">&gt; &gt; Head, Research Computing
</span><br>
<span class="quotelev2">&gt; &gt; WestGrid Site Lead
</span><br>
<span class="quotelev2">&gt; &gt; IT Services                                phone: 778 782-4691
</span><br>
<span class="quotelev2">&gt; &gt; Simon Fraser University                    fax:   778 782-4242
</span><br>
<span class="quotelev2">&gt; &gt; Burnaby, British Columbia                  email: siegert_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Canada  V5A 1S6
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="10043.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Previous message:</strong> <a href="10041.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>In reply to:</strong> <a href="10017.php">Martin Siegert: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10043.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Reply:</strong> <a href="10043.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
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
