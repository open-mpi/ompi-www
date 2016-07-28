<?
$subject_val = "[OMPI users] Permission denied, please try again.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  1 03:45:22 2012" -->
<!-- isoreceived="20120801074522" -->
<!-- sent="Wed, 1 Aug 2012 12:45:17 +0500" -->
<!-- isosent="20120801074517" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="[OMPI users] Permission denied, please try again." -->
<!-- id="CAMvdAsLRS21KHONbjEfZD71pBC_PsVqUqnZMm5DBVd8_LKW9gA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-01 03:45:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19871.php">Rushton Martin: "Re: [OMPI users] UC  Permission denied, please try again."</a>
<li><strong>Previous message:</strong> <a href="../../2012/07/19869.php">Zbigniew Koza: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All
<br>
<p>I am having problem while running an application on cluster. The
<br>
application was working fine but now this error has arised . we used to run
<br>
the application the same way with user pmdtest and there was no error. I
<br>
dont know which permission it is asking for. Please help!
<br>
<p>&nbsp;[pmdtest_at_pmd02 d00_dayfiles]$ less *_hrm
<br>
mpirun -np 32 /home/MET/hrm/bin/hrm
<br>
Permission denied, please try again.
<br>
Permission denied, please try again.
<br>
Permission denied (publickey,gssapi-with-mic,password).
<br>
Permission denied, please try again.
<br>
Permission denied, please try again.
<br>
Permission denied (publickey,gssapi-with-mic,password).
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 25164) died unexpectedly with status 255 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons on the nodes shown
<br>
below. Additional manual cleanup may be required - please refer to
<br>
the &quot;orte-clean&quot; tool for assistance.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-02-02 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-02-00 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-02-03 - daemon did not report back when launched
<br>
<p>Best Regards
<br>
Ahsan
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-19870/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19871.php">Rushton Martin: "Re: [OMPI users] UC  Permission denied, please try again."</a>
<li><strong>Previous message:</strong> <a href="../../2012/07/19869.php">Zbigniew Koza: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
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
