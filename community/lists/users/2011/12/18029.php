<?
$subject_val = "Re: [OMPI users] UC  UC  UC   Clean install fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 13:11:31 2011" -->
<!-- isoreceived="20111221181131" -->
<!-- sent="Wed, 21 Dec 2011 18:11:15 -0000" -->
<!-- isosent="20111221181115" -->
<!-- name="Rushton Martin" -->
<!-- email="JMRUSHTON_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UC  UC  UC   Clean install fails" -->
<!-- id="201112211811.pBLIBR3k031489_at_milliways.osl.iu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5D783FD4-6A8C-4744-B6E5-E05773E63FD9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] UC  UC  UC   Clean install fails<br>
<strong>From:</strong> Rushton Martin (<em>JMRUSHTON_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 13:11:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18030.php">amosleff_at_[hidden]: "[OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Previous message:</strong> <a href="18028.php">Jeff Squyres (jsquyres): "Re: [OMPI users] UC  UC   Clean install fails"</a>
<li><strong>In reply to:</strong> <a href="18028.php">Jeff Squyres (jsquyres): "Re: [OMPI users] UC  UC   Clean install fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll feed back to them tomorrow.  The 1.3 OpenMPI tarball configured and
<br>
made OK.  The &quot;noddy&quot; test case runs, I'll see what the users say later.
<br>
<p><p>Thanks all for you assistance.
<br>
<p>Martin Rushton
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
Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: 21 December 2011 16:37
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] UC UC Clean install fails
<br>
<p>We don't really have any contacts at SUSE. Can you query to fid out who
<br>
te upstream provider is and send them a note that their OMPI package is
<br>
broken?
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Dec 21, 2011, at 11:15 AM, &quot;Rushton Martin&quot; &lt;JMRUSHTON_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; OK, this is starting to look like a SuSE problem  I've downgraded the
</span><br>
<span class="quotelev1">&gt; 1.4.3 version to 1.2.8 from SuSE 11.4.  There are no subdirectories 
</span><br>
<span class="quotelev1">&gt; under .../openmpi/lib64.  I checked the file list in YaST, but that 
</span><br>
<span class="quotelev1">&gt; may be reflecting the disk rather than the RPM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ripped all of OpenMPI out and reinstalled afresh from 11.4, still no
</span><br>
<p><span class="quotelev1">&gt; subdirectories, and the file list doesn't show anything up.  I've got 
</span><br>
<span class="quotelev1">&gt; an old 1.3 RPM available, so I'll try building from that.  Failing all
</span><br>
<p><span class="quotelev1">&gt; else I'll try downloading the latest tarball from OpenMPI directly
</span><br>
tomorrow.
<br>
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
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; On Behalf Of Ralph Castain
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
<span class="quotelev1">&gt; intended solely for the use of the individual to whom it is addressed.
</span><br>
<p><span class="quotelev1">&gt; If you are not the intended recipient of this email, you must neither 
</span><br>
<span class="quotelev1">&gt; take any action based upon its contents, nor copy or show it to 
</span><br>
<span class="quotelev1">&gt; anyone. Please contact the sender if you believe you have received 
</span><br>
<span class="quotelev1">&gt; this email in error. QinetiQ may monitor email traffic data and also 
</span><br>
<span class="quotelev1">&gt; the content of email for the purposes of security. QinetiQ Limited 
</span><br>
<span class="quotelev1">&gt; (Registered in England &amp; Wales: Company Number: 3796233) Registered 
</span><br>
<span class="quotelev1">&gt; office: Cody Technology Park, Ively Road, Farnborough, Hampshire, GU14
</span><br>
<p><span class="quotelev1">&gt; 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
The QinetiQ e-mail privacy policy and company information is detailed elsewhere in the body of this email.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18030.php">amosleff_at_[hidden]: "[OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Previous message:</strong> <a href="18028.php">Jeff Squyres (jsquyres): "Re: [OMPI users] UC  UC   Clean install fails"</a>
<li><strong>In reply to:</strong> <a href="18028.php">Jeff Squyres (jsquyres): "Re: [OMPI users] UC  UC   Clean install fails"</a>
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
