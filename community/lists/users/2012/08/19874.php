<?
$subject_val = "Re: [OMPI users] UC Permission denied, please try again.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  2 03:57:08 2012" -->
<!-- isoreceived="20120802075708" -->
<!-- sent="Thu, 2 Aug 2012 12:57:02 +0500" -->
<!-- isosent="20120802075702" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UC Permission denied, please try again." -->
<!-- id="CAMvdAs+rpuTjnknjdXR8wpXCYJ6SH-JoowLDty0cwJycCGmVLA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201208010903.q7192w3T017698_at_milliways.osl.iu.edu" -->
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
<strong>Date:</strong> 2012-08-02 03:57:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19875.php">John Hearns: "Re: [OMPI users] UC Permission denied, please try again."</a>
<li><strong>Previous message:</strong> <a href="19873.php">tmishima_at_[hidden]: "Re: [OMPI users] Mpi_leave_pinned=1 is thread safe?"</a>
<li><strong>In reply to:</strong> <a href="19871.php">Rushton Martin: "Re: [OMPI users] UC  Permission denied, please try again."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19875.php">John Hearns: "Re: [OMPI users] UC Permission denied, please try again."</a>
<li><strong>Reply:</strong> <a href="19875.php">John Hearns: "Re: [OMPI users] UC Permission denied, please try again."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes the issue has been diagnosed. I can ssh them but they are asking for
<br>
passwords
<br>
<p><p><p>On Wed, Aug 1, 2012 at 2:02 PM, Rushton Martin &lt;JMRUSHTON_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;  That looks like a login issue to compute-02-02, -00 and -03.  Can you
</span><br>
<span class="quotelev1">&gt; ssh to them?****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Syed Ahsan Ali
</span><br>
<span class="quotelev1">&gt; *Sent:* 01 August 2012 08:45
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI users] Permission denied, please try again.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear All****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am having problem while running an application on cluster. The
</span><br>
<span class="quotelev1">&gt; application was working fine but now this error has arised . we used to run
</span><br>
<span class="quotelev1">&gt; the application the same way with user pmdtest and there was no error. I
</span><br>
<span class="quotelev1">&gt; dont know which permission it is asking for. Please help!****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_pmd02 d00_dayfiles]$ less *_hrm****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 32 /home/MET/hrm/bin/hrm****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Permission denied (publickey,gssapi-with-mic,password).****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Permission denied (publickey,gssapi-with-mic,password).****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A daemon (pid 25164) died unexpectedly with status 255 while attempting***
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared***
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that caused that situation.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         compute-02-02 - daemon did not report back when launched****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         compute-02-00 - daemon did not report back when launched****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         compute-02-03 - daemon did not report back when launched****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ahsan
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This email and any attachments to it may be confidential and are intended
</span><br>
<span class="quotelev1">&gt; solely for the use of the individual to whom it is addressed. If you are
</span><br>
<span class="quotelev1">&gt; not the intended recipient of this email, you must neither take any action
</span><br>
<span class="quotelev1">&gt; based upon its contents, nor copy or show it to anyone. Please contact the
</span><br>
<span class="quotelev1">&gt; sender if you believe you have received this email in error. QinetiQ may
</span><br>
<span class="quotelev1">&gt; monitor email traffic data and also the content of email for the purposes
</span><br>
<span class="quotelev1">&gt; of security. QinetiQ Limited (Registered in England &amp; Wales: Company
</span><br>
<span class="quotelev1">&gt; Number: 3796233) Registered office: Cody Technology Park, Ively Road,
</span><br>
<span class="quotelev1">&gt; Farnborough, Hampshire, GU14 0LX <a href="http://www.qinetiq.com<http://www.qinetiq.com/">http://www.qinetiq.com<http://www.qinetiq.com/</a>&gt;
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
<p><p><p><pre>
-- 
Syed Ahsan Ali Bokhari
Electronic Engineer (EE)
Research &amp; Development Division
Pakistan Meteorological Department H-8/4, Islamabad.
Phone # off  +92518358714
Cell # +923155145014
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-19874/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19875.php">John Hearns: "Re: [OMPI users] UC Permission denied, please try again."</a>
<li><strong>Previous message:</strong> <a href="19873.php">tmishima_at_[hidden]: "Re: [OMPI users] Mpi_leave_pinned=1 is thread safe?"</a>
<li><strong>In reply to:</strong> <a href="19871.php">Rushton Martin: "Re: [OMPI users] UC  Permission denied, please try again."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19875.php">John Hearns: "Re: [OMPI users] UC Permission denied, please try again."</a>
<li><strong>Reply:</strong> <a href="19875.php">John Hearns: "Re: [OMPI users] UC Permission denied, please try again."</a>
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
