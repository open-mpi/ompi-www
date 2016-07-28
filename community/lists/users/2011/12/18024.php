<?
$subject_val = "Re: [OMPI users] UC  Clean install fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 10:03:29 2011" -->
<!-- isoreceived="20111221150329" -->
<!-- sent="Wed, 21 Dec 2011 08:03:20 -0700" -->
<!-- isosent="20111221150320" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UC  Clean install fails" -->
<!-- id="86B6F1D7-3653-427C-AB2C-FF90211FCC32_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201112211326.pBLDQhKT027100_at_milliways.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] UC  Clean install fails<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 10:03:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18025.php">Rushton Martin: "Re: [OMPI users] UC   Clean install fails"</a>
<li><strong>Previous message:</strong> <a href="18023.php">Rushton Martin: "Re: [OMPI users] UC  Clean install fails"</a>
<li><strong>In reply to:</strong> <a href="18023.php">Rushton Martin: "Re: [OMPI users] UC  Clean install fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18025.php">Rushton Martin: "Re: [OMPI users] UC   Clean install fails"</a>
<li><strong>Reply:</strong> <a href="18025.php">Rushton Martin: "Re: [OMPI users] UC   Clean install fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How strange - it looks like you are missing a bunch of libraries. What do you get if you do
<br>
<p>ls -R /usr/lib64/mpi/gcc/openmpi/lib64
<br>
<p><p>On Dec 21, 2011, at 6:26 AM, Rushton Martin wrote:
<br>
<p><span class="quotelev1">&gt; For run-time problems: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.Check the FAQ first.				DONE.  nothing obvious.
</span><br>
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
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres (jsquyres)
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
<span class="quotelev1">&gt; Your OMPI install looks busted. Can you send all the info listed in the
</span><br>
<span class="quotelev1">&gt; &quot;support&quot; section on the OMPI web site?
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
<span class="quotelev2">&gt;&gt; orte_init is after.  Using mpirun -np 1 or -np 2 both fail in the same
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
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process 
</span><br>
<span class="quotelev2">&gt;&gt; is likely to abort.  There are many reasons that a parallel process 
</span><br>
<span class="quotelev2">&gt;&gt; can fail during orte_init; some of which are due to configuration or 
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
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
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please consider the environment before printing this email.
</span><br>
<span class="quotelev2">&gt;&gt; This email and any attachments to it may be confidential and are 
</span><br>
<span class="quotelev2">&gt;&gt; intended solely for the use of the individual to whom it is addressed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you are not the intended recipient of this email, you must neither 
</span><br>
<span class="quotelev2">&gt;&gt; take any action based upon its contents, nor copy or show it to 
</span><br>
<span class="quotelev2">&gt;&gt; anyone. Please contact the sender if you believe you have received 
</span><br>
<span class="quotelev2">&gt;&gt; this email in error. QinetiQ may monitor email traffic data and also 
</span><br>
<span class="quotelev2">&gt;&gt; the content of email for the purposes of security. QinetiQ Limited 
</span><br>
<span class="quotelev2">&gt;&gt; (Registered in England &amp; Wales: Company Number: 3796233) Registered 
</span><br>
<span class="quotelev2">&gt;&gt; office: Cody Technology Park, Ively Road, Farnborough, Hampshire, GU14
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The QinetiQ e-mail privacy policy and company information is detailed elsewhere in the body of this email.
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info--all.gz&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="18025.php">Rushton Martin: "Re: [OMPI users] UC   Clean install fails"</a>
<li><strong>Previous message:</strong> <a href="18023.php">Rushton Martin: "Re: [OMPI users] UC  Clean install fails"</a>
<li><strong>In reply to:</strong> <a href="18023.php">Rushton Martin: "Re: [OMPI users] UC  Clean install fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18025.php">Rushton Martin: "Re: [OMPI users] UC   Clean install fails"</a>
<li><strong>Reply:</strong> <a href="18025.php">Rushton Martin: "Re: [OMPI users] UC   Clean install fails"</a>
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
