<?
$subject_val = "Re: [OMPI users] [Wrf-users] WRF Problem running in Parallel on multiple nodes(cluster)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 23:14:46 2011" -->
<!-- isoreceived="20110504031446" -->
<!-- sent="Wed, 4 May 2011 08:14:41 +0500" -->
<!-- isosent="20110504031441" -->
<!-- name="Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Wrf-users] WRF Problem running in Parallel on multiple nodes(cluster)" -->
<!-- id="BANLkTimc07XcszrpscE4yDwWsn=wtu6uOg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1B8D1B9BF4DCDC4A90A42E312FF3085206FEB0C2_at_irvine01.irvine.environ.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Wrf-users] WRF Problem running in Parallel on multiple nodes(cluster)<br>
<strong>From:</strong> Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-03 23:14:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16440.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>Previous message:</strong> <a href="16438.php">Jeff Squyres: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16441.php">Ralph Castain: "Re: [OMPI users] [Wrf-users] WRF Problem running in Parallel on multiple nodes(cluster)"</a>
<li><strong>Reply:</strong> <a href="16441.php">Ralph Castain: "Re: [OMPI users] [Wrf-users] WRF Problem running in Parallel on multiple nodes(cluster)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Bart,
<br>
<p>I think OpenMPI don't need to be installed on all machines because they are
<br>
NFS shared with the master node. I don't know how to check output of which
<br>
orted, it is running just on the master node. I have another application
<br>
which is running similarly but I am having problem with WRF.
<br>
<p>On Tue, May 3, 2011 at 9:06 PM, Bart Brashers &lt;bbrashers_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; It looks like OpenMPI is not installed on all your execution machines.  You
</span><br>
<span class="quotelev1">&gt; need to install at least the libs on all machines, or on an NFS-shared
</span><br>
<span class="quotelev1">&gt; location.  Check the output of &quot;which orted&quot; on the machine that works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bart
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* wrf-users-bounces_at_[hidden] [mailto:wrf-users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Ahsan Ali
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, May 03, 2011 1:04 AM
</span><br>
<span class="quotelev1">&gt; *To:* users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* [Wrf-users] WRF Problem running in Parallel on multiple
</span><br>
<span class="quotelev1">&gt; nodes(cluster)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am able to run WRFV3.2.1 using mpirun on multiple cores of single
</span><br>
<span class="quotelev1">&gt; machine, but when I want to run it across multiple nodes in cluster using
</span><br>
<span class="quotelev1">&gt; hostlist then I get error, The compute nodes are mounted with the master
</span><br>
<span class="quotelev1">&gt; node during boot using NFS. I get following error. Please help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_pmd02 em_real]# mpirun -np 10 -hostfile /home/pmdtest/hostlist
</span><br>
<span class="quotelev1">&gt; ./real.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A daemon (pid 22006) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev1">&gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Research &amp; Development Division
</span><br>
<span class="quotelev1">&gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev1">&gt; Phone # off  +92518358714
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cell # +923155145014
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; This message contains information that may be confidential, privileged or
</span><br>
<span class="quotelev1">&gt; otherwise protected by law from disclosure. It is intended for the exclusive
</span><br>
<span class="quotelev1">&gt; use of the Addressee(s). Unless you are the addressee or authorized agent of
</span><br>
<span class="quotelev1">&gt; the addressee, you may not review, copy, distribute or disclose to anyone
</span><br>
<span class="quotelev1">&gt; the message or any information contained within. If you have received this
</span><br>
<span class="quotelev1">&gt; message in error, please contact the sender by electronic reply to
</span><br>
<span class="quotelev1">&gt; email_at_[hidden] and immediately delete all copies of the message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Syed Ahsan Ali Bokhari
Electronic Engineer (EE)
Research &amp; Development Division
Pakistan Meteorological Department H-8/4, Islamabad.
Phone # off  +92518358714
Cell # +923155145014
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16439/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16440.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>Previous message:</strong> <a href="16438.php">Jeff Squyres: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16441.php">Ralph Castain: "Re: [OMPI users] [Wrf-users] WRF Problem running in Parallel on multiple nodes(cluster)"</a>
<li><strong>Reply:</strong> <a href="16441.php">Ralph Castain: "Re: [OMPI users] [Wrf-users] WRF Problem running in Parallel on multiple nodes(cluster)"</a>
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
