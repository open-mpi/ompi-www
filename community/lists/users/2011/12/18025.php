<?
$subject_val = "Re: [OMPI users] UC   Clean install fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 10:13:42 2011" -->
<!-- isoreceived="20111221151342" -->
<!-- sent="Wed, 21 Dec 2011 15:13:27 -0000" -->
<!-- isosent="20111221151327" -->
<!-- name="Rushton Martin" -->
<!-- email="JMRUSHTON_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UC   Clean install fails" -->
<!-- id="201112211513.pBLFDbeq007387_at_milliways.osl.iu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="86B6F1D7-3653-427C-AB2C-FF90211FCC32_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] UC   Clean install fails<br>
<strong>From:</strong> Rushton Martin (<em>JMRUSHTON_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 10:13:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18026.php">Ralph Castain: "Re: [OMPI users] UC   Clean install fails"</a>
<li><strong>Previous message:</strong> <a href="18024.php">Ralph Castain: "Re: [OMPI users] UC  Clean install fails"</a>
<li><strong>In reply to:</strong> <a href="18024.php">Ralph Castain: "Re: [OMPI users] UC  Clean install fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18026.php">Ralph Castain: "Re: [OMPI users] UC   Clean install fails"</a>
<li><strong>Reply:</strong> <a href="18026.php">Ralph Castain: "Re: [OMPI users] UC   Clean install fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree it looks like it, but YaST ought to be able to work out
<br>
dependencies.  Anyhow, here is the listing:
<br>
<p>isis:/usr/lib64/mpi/gcc/openmpi # ls -R lib64
<br>
lib64:
<br>
libmca_common_sm.so.1      libmpi_f77.so.0       libopen-rte.so.0
<br>
libmca_common_sm.so.1.0.0  libmpi_f77.so.0.0.1   libopen-rte.so.0.0.0
<br>
libmpi.so.0                libmpi_f90.so.0       libopenmpi_malloc.so.0
<br>
libmpi.so.0.0.2            libmpi_f90.so.0.0.1
<br>
libopenmpi_malloc.so.0.0.0
<br>
libmpi_cxx.so.0            libopen-pal.so.0      mpi.mod
<br>
libmpi_cxx.so.0.0.1        libopen-pal.so.0.0.0
<br>
isis:/usr/lib64/mpi/gcc/openmpi #
<br>
<p>Thanks all,
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
Behalf Of Ralph Castain
<br>
Sent: 21 December 2011 15:03
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] UC Clean install fails
<br>
<p>How strange - it looks like you are missing a bunch of libraries. What
<br>
do you get if you do
<br>
<p>ls -R /usr/lib64/mpi/gcc/openmpi/lib64
<br>
<p><p>On Dec 21, 2011, at 6:26 AM, Rushton Martin wrote:
<br>
<p><span class="quotelev1">&gt; For run-time problems: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.Check the FAQ first.				DONE.  nothing
</span><br>
obvious.
<br>
<span class="quotelev1">&gt; 2.The version of Open MPI that you're using.	openmpi-1.4.3
</span><br>
<span class="quotelev1">&gt; 3.The config.log file				Installed as binary
</span><br>
<span class="quotelev1">&gt; 4.The output of the &quot;ompi_info --all&quot;		See enclosed gzip
</span><br>
<span class="quotelev1">&gt; 5.If running on more than one node		Not applicable
</span><br>
<span class="quotelev1">&gt; 6.A detailed description of what is failing.	See original posting
</span><br>
<span class="quotelev1">&gt; 	PATH
</span><br>
<span class="quotelev1">&gt; /usr/lib64/mpi/gcc/openmpi/bin:\
</span><br>
<span class="quotelev1">&gt; 						...:\
</span><br>
<span class="quotelev1">&gt; 						/usr/local/bin:\
</span><br>
<span class="quotelev1">&gt; 						/usr/bin:\
</span><br>
<span class="quotelev1">&gt; 						/bin:/usr/bin/X11:\
</span><br>
<span class="quotelev1">&gt; 						/usr/X11R6/bin:\
</span><br>
<span class="quotelev1">&gt; 						/usr/games:\
</span><br>
<span class="quotelev1">&gt; 						/usr/lib64/jvm/jre/bin
</span><br>
<span class="quotelev1">&gt; 	LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /usr/lib64/mpi/gcc/openmpi/lib64
</span><br>
<span class="quotelev1">&gt; 7.Network					Not applicable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this is the correct information you require. 
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
<span class="quotelev1">&gt; On Behalf Of Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: 21 December 2011 12:51
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Clean install fails
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your OMPI install looks busted. Can you send all the info listed in 
</span><br>
<span class="quotelev1">&gt; the &quot;support&quot; section on the OMPI web site?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 21, 2011, at 7:37 AM, &quot;Rushton Martin&quot; &lt;JMRUSHTON_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've just completed installing OpenSuSE 12.1 on a standalone node.
</span><br>
<span class="quotelev2">&gt;&gt; Using the bundled GCC and OpenMPI the user code fails.  I've reduced 
</span><br>
<span class="quotelev2">&gt;&gt; the problem to that below, but without the source I'm not sure what 
</span><br>
<span class="quotelev2">&gt;&gt; orte_init is after.  Using mpirun -np 1 or -np 2 both fail in the 
</span><br>
<span class="quotelev2">&gt;&gt; same
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; way.  Any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ cat test.f
</span><br>
<span class="quotelev2">&gt;&gt;       END
</span><br>
<span class="quotelev2">&gt;&gt; $ gfortran -o test-f test.f
</span><br>
<span class="quotelev2">&gt;&gt; $ ./test-f
</span><br>
<span class="quotelev2">&gt;&gt; $ echo $?
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun ./test-f
</span><br>
<span class="quotelev2">&gt;&gt; [isis:02474] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev2">&gt;&gt; runtime/orte_init.c at line 125
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process
</span><br>
<p><span class="quotelev2">&gt;&gt; is likely to abort.  There are many reasons that a parallel process 
</span><br>
<span class="quotelev2">&gt;&gt; can fail during orte_init; some of which are due to configuration or 
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal 
</span><br>
<span class="quotelev2">&gt;&gt; failure;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; orte_ess_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; [isis:02474] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev2">&gt;&gt; orterun.c at line 543 $
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Martin Rushton
</span><br>
<span class="quotelev2">&gt;&gt; HPC System Manager, Weapons Technologies
</span><br>
<span class="quotelev2">&gt;&gt; Tel: 01959 514777, Mobile: 07939 219057
</span><br>
<span class="quotelev2">&gt;&gt; email: jmrushton_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; www.QinetiQ.com
</span><br>
<span class="quotelev2">&gt;&gt; QinetiQ - Delivering customer-focused solutions
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
<li><strong>Next message:</strong> <a href="18026.php">Ralph Castain: "Re: [OMPI users] UC   Clean install fails"</a>
<li><strong>Previous message:</strong> <a href="18024.php">Ralph Castain: "Re: [OMPI users] UC  Clean install fails"</a>
<li><strong>In reply to:</strong> <a href="18024.php">Ralph Castain: "Re: [OMPI users] UC  Clean install fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18026.php">Ralph Castain: "Re: [OMPI users] UC   Clean install fails"</a>
<li><strong>Reply:</strong> <a href="18026.php">Ralph Castain: "Re: [OMPI users] UC   Clean install fails"</a>
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
