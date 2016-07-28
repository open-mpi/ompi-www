<?
$subject_val = "Re: [OMPI users] UC   Clean install fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 10:18:05 2011" -->
<!-- isoreceived="20111221151805" -->
<!-- sent="Wed, 21 Dec 2011 08:17:57 -0700" -->
<!-- isosent="20111221151757" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UC   Clean install fails" -->
<!-- id="5FF9168F-8B7D-4D6C-A558-A88D61E66DFF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201112211513.pBLFDbeq007387_at_milliways.osl.iu.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 10:17:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18027.php">Rushton Martin: "Re: [OMPI users] UC  UC   Clean install fails"</a>
<li><strong>Previous message:</strong> <a href="18025.php">Rushton Martin: "Re: [OMPI users] UC   Clean install fails"</a>
<li><strong>In reply to:</strong> <a href="18025.php">Rushton Martin: "Re: [OMPI users] UC   Clean install fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18027.php">Rushton Martin: "Re: [OMPI users] UC  UC   Clean install fails"</a>
<li><strong>Reply:</strong> <a href="18027.php">Rushton Martin: "Re: [OMPI users] UC  UC   Clean install fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, you are missing all the component libraries - there should be a couple of subdirectories under there. I would suggest either reinstalling or grabbing a tarball and installing by hand.
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
<span class="quotelev1">&gt; libmpi.so.0                libmpi_f90.so.0       libopenmpi_malloc.so.0
</span><br>
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
<span class="quotelev1">&gt; Sent: 21 December 2011 15:03
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] UC Clean install fails
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How strange - it looks like you are missing a bunch of libraries. What
</span><br>
<span class="quotelev1">&gt; do you get if you do
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ls -R /usr/lib64/mpi/gcc/openmpi/lib64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 21, 2011, at 6:26 AM, Rushton Martin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For run-time problems: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1.Check the FAQ first.				DONE.  nothing
</span><br>
<span class="quotelev1">&gt; obvious.
</span><br>
<span class="quotelev2">&gt;&gt; 2.The version of Open MPI that you're using.	openmpi-1.4.3
</span><br>
<span class="quotelev2">&gt;&gt; 3.The config.log file				Installed as binary
</span><br>
<span class="quotelev2">&gt;&gt; 4.The output of the &quot;ompi_info --all&quot;		See enclosed gzip
</span><br>
<span class="quotelev2">&gt;&gt; 5.If running on more than one node		Not applicable
</span><br>
<span class="quotelev2">&gt;&gt; 6.A detailed description of what is failing.	See original posting
</span><br>
<span class="quotelev2">&gt;&gt; 	PATH
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/mpi/gcc/openmpi/bin:\
</span><br>
<span class="quotelev2">&gt;&gt; 						...:\
</span><br>
<span class="quotelev2">&gt;&gt; 						/usr/local/bin:\
</span><br>
<span class="quotelev2">&gt;&gt; 						/usr/bin:\
</span><br>
<span class="quotelev2">&gt;&gt; 						/bin:/usr/bin/X11:\
</span><br>
<span class="quotelev2">&gt;&gt; 						/usr/X11R6/bin:\
</span><br>
<span class="quotelev2">&gt;&gt; 						/usr/games:\
</span><br>
<span class="quotelev2">&gt;&gt; 						/usr/lib64/jvm/jre/bin
</span><br>
<span class="quotelev2">&gt;&gt; 	LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/mpi/gcc/openmpi/lib64
</span><br>
<span class="quotelev2">&gt;&gt; 7.Network					Not applicable
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I hope this is the correct information you require. 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please consider the environment before printing this email.
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt; Sent: 21 December 2011 12:51
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Clean install fails
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Your OMPI install looks busted. Can you send all the info listed in 
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;support&quot; section on the OMPI web site?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 21, 2011, at 7:37 AM, &quot;Rushton Martin&quot; &lt;JMRUSHTON_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've just completed installing OpenSuSE 12.1 on a standalone node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using the bundled GCC and OpenMPI the user code fails.  I've reduced 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the problem to that below, but without the source I'm not sure what 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_init is after.  Using mpirun -np 1 or -np 2 both fail in the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; way.  Any suggestions?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cat test.f
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      END
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ gfortran -o test-f test.f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ./test-f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ echo $?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun ./test-f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [isis:02474] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runtime/orte_init.c at line 125
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is likely to abort.  There are many reasons that a parallel process 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can fail during orte_init; some of which are due to configuration or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment problems.  This failure appears to be an internal 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some additional information (which may only be relevant to an 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_ess_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [isis:02474] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orterun.c at line 543 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Martin Rushton
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC System Manager, Weapons Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: 01959 514777, Mobile: 07939 219057
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email: jmrushton_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.QinetiQ.com
</span><br>
<span class="quotelev3">&gt;&gt;&gt; QinetiQ - Delivering customer-focused solutions
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
<li><strong>Next message:</strong> <a href="18027.php">Rushton Martin: "Re: [OMPI users] UC  UC   Clean install fails"</a>
<li><strong>Previous message:</strong> <a href="18025.php">Rushton Martin: "Re: [OMPI users] UC   Clean install fails"</a>
<li><strong>In reply to:</strong> <a href="18025.php">Rushton Martin: "Re: [OMPI users] UC   Clean install fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18027.php">Rushton Martin: "Re: [OMPI users] UC  UC   Clean install fails"</a>
<li><strong>Reply:</strong> <a href="18027.php">Rushton Martin: "Re: [OMPI users] UC  UC   Clean install fails"</a>
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
