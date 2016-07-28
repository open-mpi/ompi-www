<?
$subject_val = "Re: [OMPI users] UC  Permission denied, please try again.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  1 05:03:03 2012" -->
<!-- isoreceived="20120801090303" -->
<!-- sent="Wed, 1 Aug 2012 10:02:45 +0100" -->
<!-- isosent="20120801090245" -->
<!-- name="Rushton Martin" -->
<!-- email="JMRUSHTON_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UC  Permission denied, please try again." -->
<!-- id="201208010903.q7192w3T017698_at_milliways.osl.iu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] UC  Permission denied, please try again." -->
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
<strong>From:</strong> Rushton Martin (<em>JMRUSHTON_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-01 05:02:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19872.php">Dmitry N. Mikushin: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
<li><strong>Previous message:</strong> <a href="19870.php">Syed Ahsan Ali: "[OMPI users] Permission denied, please try again."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19874.php">Syed Ahsan Ali: "Re: [OMPI users] UC Permission denied, please try again."</a>
<li><strong>Reply:</strong> <a href="19874.php">Syed Ahsan Ali: "Re: [OMPI users] UC Permission denied, please try again."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That looks like a login issue to compute-02-02, -00 and -03.  Can you
<br>
ssh to them?
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Syed Ahsan Ali
<br>
Sent: 01 August 2012 08:45
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] Permission denied, please try again.
<br>
<p>&nbsp;
<br>
<p><p>Dear All
<br>
<p>&nbsp;
<br>
<p>I am having problem while running an application on cluster. The
<br>
application was working fine but now this error has arised . we used to
<br>
run the application the same way with user pmdtest and there was no
<br>
error. I dont know which permission it is asking for. Please help!
<br>
<p>&nbsp;
<br>
<p>[pmdtest_at_pmd02 d00_dayfiles]$ less *_hrm
<br>
<p>mpirun -np 32 /home/MET/hrm/bin/hrm
<br>
<p>Permission denied, please try again.
<br>
<p>Permission denied, please try again.
<br>
<p>Permission denied (publickey,gssapi-with-mic,password).
<br>
<p>Permission denied, please try again.
<br>
<p>Permission denied, please try again.
<br>
<p>Permission denied (publickey,gssapi-with-mic,password).
<br>
<p>------------------------------------------------------------------------
<br>
<pre>
--
A daemon (pid 25164) died unexpectedly with status 255 while attempting
to launch so we are aborting.
 
There may be more information reported by the environment (see above).
 
This may be because the daemon was unable to find all the needed shared
libraries on the remote node. You may set your LD_LIBRARY_PATH to have
the
location of the shared libraries on the remote nodes and this will
automatically be forwarded to the remote nodes.
------------------------------------------------------------------------
--
------------------------------------------------------------------------
--
mpirun noticed that the job aborted, but has no info as to the process
that caused that situation.
------------------------------------------------------------------------
--
------------------------------------------------------------------------
--
mpirun was unable to cleanly terminate the daemons on the nodes shown
below. Additional manual cleanup may be required - please refer to
the &quot;orte-clean&quot; tool for assistance.
------------------------------------------------------------------------
--
        compute-02-02 - daemon did not report back when launched
        compute-02-00 - daemon did not report back when launched
        compute-02-03 - daemon did not report back when launched
 
Best Regards
Ahsan
 
 
This email and any attachments to it may be confidential and are
intended solely for the use of the individual to whom it is 
addressed. If you are not the intended recipient of this email,
you must neither take any action based upon its contents, nor 
copy or show it to anyone. Please contact the sender if you 
believe you have received this email in error. QinetiQ may 
monitor email traffic data and also the content of email for 
the purposes of security. QinetiQ Limited (Registered in England
&amp; Wales: Company Number: 3796233) Registered office: Cody Technology 
Park, Ively Road, Farnborough, Hampshire, GU14 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-19871/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19872.php">Dmitry N. Mikushin: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
<li><strong>Previous message:</strong> <a href="19870.php">Syed Ahsan Ali: "[OMPI users] Permission denied, please try again."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19874.php">Syed Ahsan Ali: "Re: [OMPI users] UC Permission denied, please try again."</a>
<li><strong>Reply:</strong> <a href="19874.php">Syed Ahsan Ali: "Re: [OMPI users] UC Permission denied, please try again."</a>
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
