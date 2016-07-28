<?
$subject_val = "Re: [OMPI users] UC  UC   Clean install fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 11:38:05 2011" -->
<!-- isoreceived="20111221163805" -->
<!-- sent="Wed, 21 Dec 2011 11:37:17 -0500" -->
<!-- isosent="20111221163717" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UC  UC   Clean install fails" -->
<!-- id="5D783FD4-6A8C-4744-B6E5-E05773E63FD9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201112211613.pBLGDiq2016338_at_milliways.osl.iu.edu" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 11:37:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18029.php">Rushton Martin: "Re: [OMPI users] UC  UC  UC   Clean install fails"</a>
<li><strong>Previous message:</strong> <a href="18027.php">Rushton Martin: "Re: [OMPI users] UC  UC   Clean install fails"</a>
<li><strong>In reply to:</strong> <a href="18027.php">Rushton Martin: "Re: [OMPI users] UC  UC   Clean install fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18029.php">Rushton Martin: "Re: [OMPI users] UC  UC  UC   Clean install fails"</a>
<li><strong>Reply:</strong> <a href="18029.php">Rushton Martin: "Re: [OMPI users] UC  UC  UC   Clean install fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We don't really have any contacts at SUSE. Can you query to fid out who te upstream provider is and send them a note that their OMPI package is broken?
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Dec 21, 2011, at 11:15 AM, &quot;Rushton Martin&quot; &lt;JMRUSHTON_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; OK, this is starting to look like a SuSE problem  I've downgraded the
</span><br>
<span class="quotelev1">&gt; 1.4.3 version to 1.2.8 from SuSE 11.4.  There are no subdirectories
</span><br>
<span class="quotelev1">&gt; under .../openmpi/lib64.  I checked the file list in YaST, but that may
</span><br>
<span class="quotelev1">&gt; be reflecting the disk rather than the RPM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ripped all of OpenMPI out and reinstalled afresh from 11.4, still no
</span><br>
<span class="quotelev1">&gt; subdirectories, and the file list doesn't show anything up.  I've got an
</span><br>
<span class="quotelev1">&gt; old 1.3 RPM available, so I'll try building from that.  Failing all else
</span><br>
<span class="quotelev1">&gt; I'll try downloading the latest tarball from OpenMPI directly tomorrow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Martin Rushton
</span><br>
<span class="quotelev1">&gt; HPC System Manager, Weapons Technologies
</span><br>
<span class="quotelev1">&gt; Tel: 01959 514777, Mobile: 07939 219057
</span><br>
<span class="quotelev1">&gt; email: jmrushton_at_[hidden]
</span><br>
<span class="quotelev1">&gt; www.QinetiQ.com
</span><br>
<span class="quotelev1">&gt; QinetiQ - Delivering customer-focused solutions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please consider the environment before printing this email.
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: 21 December 2011 15:18
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] UC Clean install fails
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, you are missing all the component libraries - there should be a
</span><br>
<span class="quotelev1">&gt; couple of subdirectories under there. I would suggest either
</span><br>
<span class="quotelev1">&gt; reinstalling or grabbing a tarball and installing by hand.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 21, 2011, at 8:13 AM, Rushton Martin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I agree it looks like it, but YaST ought to be able to work out 
</span><br>
<span class="quotelev2">&gt;&gt; dependencies.  Anyhow, here is the listing:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; isis:/usr/lib64/mpi/gcc/openmpi # ls -R lib64
</span><br>
<span class="quotelev2">&gt;&gt; lib64:
</span><br>
<span class="quotelev2">&gt;&gt; libmca_common_sm.so.1      libmpi_f77.so.0       libopen-rte.so.0
</span><br>
<span class="quotelev2">&gt;&gt; libmca_common_sm.so.1.0.0  libmpi_f77.so.0.0.1   libopen-rte.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.so.0                libmpi_f90.so.0
</span><br>
<span class="quotelev1">&gt; libopenmpi_malloc.so.0
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.so.0.0.2            libmpi_f90.so.0.0.1
</span><br>
<span class="quotelev2">&gt;&gt; libopenmpi_malloc.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_cxx.so.0            libopen-pal.so.0      mpi.mod
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_cxx.so.0.0.1        libopen-pal.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; isis:/usr/lib64/mpi/gcc/openmpi #
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Martin Rushton
</span><br>
<span class="quotelev1">&gt; This email and any attachments to it may be confidential and are
</span><br>
<span class="quotelev1">&gt; intended solely for the use of the individual to whom it is 
</span><br>
<span class="quotelev1">&gt; addressed. If you are not the intended recipient of this email,
</span><br>
<span class="quotelev1">&gt; you must neither take any action based upon its contents, nor 
</span><br>
<span class="quotelev1">&gt; copy or show it to anyone. Please contact the sender if you 
</span><br>
<span class="quotelev1">&gt; believe you have received this email in error. QinetiQ may 
</span><br>
<span class="quotelev1">&gt; monitor email traffic data and also the content of email for 
</span><br>
<span class="quotelev1">&gt; the purposes of security. QinetiQ Limited (Registered in England
</span><br>
<span class="quotelev1">&gt; &amp; Wales: Company Number: 3796233) Registered office: Cody Technology 
</span><br>
<span class="quotelev1">&gt; Park, Ively Road, Farnborough, Hampshire, GU14 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18029.php">Rushton Martin: "Re: [OMPI users] UC  UC  UC   Clean install fails"</a>
<li><strong>Previous message:</strong> <a href="18027.php">Rushton Martin: "Re: [OMPI users] UC  UC   Clean install fails"</a>
<li><strong>In reply to:</strong> <a href="18027.php">Rushton Martin: "Re: [OMPI users] UC  UC   Clean install fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18029.php">Rushton Martin: "Re: [OMPI users] UC  UC  UC   Clean install fails"</a>
<li><strong>Reply:</strong> <a href="18029.php">Rushton Martin: "Re: [OMPI users] UC  UC  UC   Clean install fails"</a>
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
