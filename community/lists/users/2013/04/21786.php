<?
$subject_val = "Re: [OMPI users] QLogic HCA random crash after prolonged use";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 12:53:31 2013" -->
<!-- isoreceived="20130424165331" -->
<!-- sent="Wed, 24 Apr 2013 16:52:52 +0000" -->
<!-- isosent="20130424165252" -->
<!-- name="Elken, Tom" -->
<!-- email="tom.elken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] QLogic HCA random crash after prolonged use" -->
<!-- id="1182FB2B5679CE4B8BAD97725F014BB7327DB1C5_at_ORSMSX154.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87haivrkd8.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] QLogic HCA random crash after prolonged use<br>
<strong>From:</strong> Elken, Tom (<em>tom.elken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-24 12:52:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21787.php">W Spector: "[OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="21785.php">Ralph Castain: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>In reply to:</strong> <a href="21784.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21794.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Reply:</strong> <a href="21794.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt; &gt; Intel has acquired the InfiniBand assets of QLogic
</span><br>
<span class="quotelev2">&gt; &gt; about a year ago.  These SDR HCAs are no longer supported, but should
</span><br>
<span class="quotelev2">&gt; &gt; still work.
</span><br>
[Tom] 
<br>
I guess the more important part of what I wrote is that &quot; These SDR HCAs are no longer supported&quot; :)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you mean they should work with the latest infinipath libraries
</span><br>
<span class="quotelev1">&gt; (despite what it said or implied in the notes for last version I got
</span><br>
<span class="quotelev1">&gt; from QLogic?) or possibly what's in RHEL?  I thought I'd actually tried
</span><br>
<span class="quotelev1">&gt; and failed with later stuff, but may just have gone by the release notes.
</span><br>
[Tom] 
<br>
Some testing from an Intel group who had these QLE7140 HCAs revealed to me that they do _not_ work with our recent software stack such as IFS 7.1.1 (which includes OFED 1.5.4.1) .
<br>
<p>They were able to get them to work with the QLogic OFED+ 6.0.2 stack.  That corresponds to OFED 1.5.2 -- that was the first OFED to include PSM.  
<br>
I am providing this info as a courtesy, but not making any guarantees that it will work.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You can get the driver (ib_qib) and PSM library from OFED 1.5.4.1 or
</span><br>
<span class="quotelev2">&gt; &gt; the current release OFED 3.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if there's a version of the driver that's known to work in a
</span><br>
<span class="quotelev1">&gt; current RHEL5 system with QLE7140.  We get frequent qib-related kernel
</span><br>
<span class="quotelev1">&gt; panics from a vanilla RHEL5.9 kernel
</span><br>
[Tom] 
<br>
The older QLogic and OFED stacks mentioned above were not ported to nor tested with RHEL 5.9, which did not exist at the time.  Sorry.
<br>
<p>&nbsp;-- after running OK under test for
<br>
<span class="quotelev1">&gt; a few weeks, and nothing relevant appearing to have changed to cause
</span><br>
<span class="quotelev1">&gt; it...  (There's a trace on the redhat bugzilla with qib in the issue
</span><br>
<span class="quotelev1">&gt; title, for what it's worth.)  I'm currently reverting to old stuff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's good if Infinipath-land is taking an interest in OMPI again, and
</span><br>
<span class="quotelev1">&gt; that the libraries are now under a free licence.
</span><br>
[Tom] 
<br>
Thanks,
<br>
Tom
<br>
<p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="21787.php">W Spector: "[OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="21785.php">Ralph Castain: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>In reply to:</strong> <a href="21784.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21794.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Reply:</strong> <a href="21794.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
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
