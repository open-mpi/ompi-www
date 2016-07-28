<?
$subject_val = "Re: [OMPI users] UC  Clean install fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 08:26:49 2011" -->
<!-- isoreceived="20111221132649" -->
<!-- sent="Wed, 21 Dec 2011 13:26:34 -0000" -->
<!-- isosent="20111221132634" -->
<!-- name="Rushton Martin" -->
<!-- email="JMRUSHTON_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UC  Clean install fails" -->
<!-- id="201112211326.pBLDQhKT027100_at_milliways.osl.iu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="874A8BD5-4BF0-4A8D-90DA-E060DF652DDC_at_cisco.com" -->
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
<strong>From:</strong> Rushton Martin (<em>JMRUSHTON_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 08:26:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18024.php">Ralph Castain: "Re: [OMPI users] UC  Clean install fails"</a>
<li><strong>Previous message:</strong> <a href="18022.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Clean install fails"</a>
<li><strong>In reply to:</strong> <a href="18022.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Clean install fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18024.php">Ralph Castain: "Re: [OMPI users] UC  Clean install fails"</a>
<li><strong>Reply:</strong> <a href="18024.php">Ralph Castain: "Re: [OMPI users] UC  Clean install fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For run-time problems: 
<br>
<p>1.Check the FAQ first.				DONE.  nothing obvious.
<br>
2.The version of Open MPI that you're using.	openmpi-1.4.3
<br>
3.The config.log file				Installed as binary
<br>
4.The output of the &quot;ompi_info --all&quot;		See enclosed gzip
<br>
5.If running on more than one node		Not applicable
<br>
6.A detailed description of what is failing.	See original posting
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PATH
<br>
/usr/lib64/mpi/gcc/openmpi/bin:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/bin:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/bin:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin:/usr/bin/X11:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/X11R6/bin:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/games:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib64/jvm/jre/bin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LD_LIBRARY_PATH
<br>
/usr/lib64/mpi/gcc/openmpi/lib64
<br>
7.Network					Not applicable
<br>
<p>I hope this is the correct information you require. 
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
Sent: 21 December 2011 12:51
<br>
To: Open MPI Users
<br>
Cc: Open MPI Users
<br>
Subject: Re: [OMPI users] Clean install fails
<br>
<p>Your OMPI install looks busted. Can you send all the info listed in the
<br>
&quot;support&quot; section on the OMPI web site?
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Dec 21, 2011, at 7:37 AM, &quot;Rushton Martin&quot; &lt;JMRUSHTON_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I've just completed installing OpenSuSE 12.1 on a standalone node.
</span><br>
<span class="quotelev1">&gt; Using the bundled GCC and OpenMPI the user code fails.  I've reduced 
</span><br>
<span class="quotelev1">&gt; the problem to that below, but without the source I'm not sure what 
</span><br>
<span class="quotelev1">&gt; orte_init is after.  Using mpirun -np 1 or -np 2 both fail in the same
</span><br>
<p><span class="quotelev1">&gt; way.  Any suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat test.f
</span><br>
<span class="quotelev1">&gt;        END
</span><br>
<span class="quotelev1">&gt; $ gfortran -o test-f test.f
</span><br>
<span class="quotelev1">&gt; $ ./test-f
</span><br>
<span class="quotelev1">&gt; $ echo $?
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; $ mpirun ./test-f
</span><br>
<span class="quotelev1">&gt; [isis:02474] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 125
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process 
</span><br>
<span class="quotelev1">&gt; is likely to abort.  There are many reasons that a parallel process 
</span><br>
<span class="quotelev1">&gt; can fail during orte_init; some of which are due to configuration or 
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<p><span class="quotelev1">&gt; here's some additional information (which may only be relevant to an 
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  orte_ess_base_select failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [isis:02474] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev1">&gt; orterun.c at line 543 $
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
<p>The QinetiQ e-mail privacy policy and company information is detailed elsewhere in the body of this email.
<br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18023/ompi_info--all.gz">ompi_info--all.gz</a>
</ul>
<!-- attachment="ompi_info--all.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18024.php">Ralph Castain: "Re: [OMPI users] UC  Clean install fails"</a>
<li><strong>Previous message:</strong> <a href="18022.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Clean install fails"</a>
<li><strong>In reply to:</strong> <a href="18022.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Clean install fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18024.php">Ralph Castain: "Re: [OMPI users] UC  Clean install fails"</a>
<li><strong>Reply:</strong> <a href="18024.php">Ralph Castain: "Re: [OMPI users] UC  Clean install fails"</a>
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
