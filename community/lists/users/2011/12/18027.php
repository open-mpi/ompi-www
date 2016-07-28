<?
$subject_val = "Re: [OMPI users] UC  UC   Clean install fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 11:13:48 2011" -->
<!-- isoreceived="20111221161348" -->
<!-- sent="Wed, 21 Dec 2011 16:13:33 -0000" -->
<!-- isosent="20111221161333" -->
<!-- name="Rushton Martin" -->
<!-- email="JMRUSHTON_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UC  UC   Clean install fails" -->
<!-- id="201112211613.pBLGDiq2016338_at_milliways.osl.iu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5FF9168F-8B7D-4D6C-A558-A88D61E66DFF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] UC  UC   Clean install fails<br>
<strong>From:</strong> Rushton Martin (<em>JMRUSHTON_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 11:13:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18028.php">Jeff Squyres (jsquyres): "Re: [OMPI users] UC  UC   Clean install fails"</a>
<li><strong>Previous message:</strong> <a href="18026.php">Ralph Castain: "Re: [OMPI users] UC   Clean install fails"</a>
<li><strong>In reply to:</strong> <a href="18026.php">Ralph Castain: "Re: [OMPI users] UC   Clean install fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18028.php">Jeff Squyres (jsquyres): "Re: [OMPI users] UC  UC   Clean install fails"</a>
<li><strong>Reply:</strong> <a href="18028.php">Jeff Squyres (jsquyres): "Re: [OMPI users] UC  UC   Clean install fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, this is starting to look like a SuSE problem  I've downgraded the
<br>
1.4.3 version to 1.2.8 from SuSE 11.4.  There are no subdirectories
<br>
under .../openmpi/lib64.  I checked the file list in YaST, but that may
<br>
be reflecting the disk rather than the RPM.
<br>
<p>I ripped all of OpenMPI out and reinstalled afresh from 11.4, still no
<br>
subdirectories, and the file list doesn't show anything up.  I've got an
<br>
old 1.3 RPM available, so I'll try building from that.  Failing all else
<br>
I'll try downloading the latest tarball from OpenMPI directly tomorrow.
<br>
<p><p>Martin Rushton
<br>
HPC System Manager, Weapons Technologies
<br>
Tel: 01959 514777, Mobile: 07939 219057
<br>
email: jmrushton_at_[hidden]
<br>
www.QinetiQ.com
<br>
QinetiQ - Delivering customer-focused solutions
<br>
<p>Please consider the environment before printing this email.
<br>
-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Ralph Castain
<br>
Sent: 21 December 2011 15:18
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] UC Clean install fails
<br>
<p>Yeah, you are missing all the component libraries - there should be a
<br>
couple of subdirectories under there. I would suggest either
<br>
reinstalling or grabbing a tarball and installing by hand.
<br>
<p><p>On Dec 21, 2011, at 8:13 AM, Rushton Martin wrote:
<br>
<p><span class="quotelev1">&gt; I agree it looks like it, but YaST ought to be able to work out 
</span><br>
<span class="quotelev1">&gt; dependencies.  Anyhow, here is the listing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; isis:/usr/lib64/mpi/gcc/openmpi # ls -R lib64
</span><br>
<span class="quotelev1">&gt; lib64:
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.so.1      libmpi_f77.so.0       libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.so.1.0.0  libmpi_f77.so.0.0.1   libopen-rte.so.0.0.0
</span><br>
<span class="quotelev1">&gt; libmpi.so.0                libmpi_f90.so.0
</span><br>
libopenmpi_malloc.so.0
<br>
<span class="quotelev1">&gt; libmpi.so.0.0.2            libmpi_f90.so.0.0.1
</span><br>
<span class="quotelev1">&gt; libopenmpi_malloc.so.0.0.0
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.so.0            libopen-pal.so.0      mpi.mod
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.so.0.0.1        libopen-pal.so.0.0.0
</span><br>
<span class="quotelev1">&gt; isis:/usr/lib64/mpi/gcc/openmpi #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Martin Rushton
</span><br>
This email and any attachments to it may be confidential and are
<br>
intended solely for the use of the individual to whom it is 
<br>
addressed. If you are not the intended recipient of this email,
<br>
you must neither take any action based upon its contents, nor 
<br>
copy or show it to anyone. Please contact the sender if you 
<br>
believe you have received this email in error. QinetiQ may 
<br>
monitor email traffic data and also the content of email for 
<br>
the purposes of security. QinetiQ Limited (Registered in England
<br>
&amp; Wales: Company Number: 3796233) Registered office: Cody Technology 
<br>
Park, Ively Road, Farnborough, Hampshire, GU14 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18028.php">Jeff Squyres (jsquyres): "Re: [OMPI users] UC  UC   Clean install fails"</a>
<li><strong>Previous message:</strong> <a href="18026.php">Ralph Castain: "Re: [OMPI users] UC   Clean install fails"</a>
<li><strong>In reply to:</strong> <a href="18026.php">Ralph Castain: "Re: [OMPI users] UC   Clean install fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18028.php">Jeff Squyres (jsquyres): "Re: [OMPI users] UC  UC   Clean install fails"</a>
<li><strong>Reply:</strong> <a href="18028.php">Jeff Squyres (jsquyres): "Re: [OMPI users] UC  UC   Clean install fails"</a>
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
