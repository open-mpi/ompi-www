<?
$subject_val = "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 16 18:09:19 2012" -->
<!-- isoreceived="20120716220919" -->
<!-- sent="Mon, 16 Jul 2012 22:09:13 +0000" -->
<!-- isosent="20120716220913" -->
<!-- name="Elken, Tom" -->
<!-- email="tom.elken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2" -->
<!-- id="1182FB2B5679CE4B8BAD97725F014BB710DCF191_at_FMSMSX108.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="878FC672-FEA3-40DD-84C9-32DFF5E4BC6C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2<br>
<strong>From:</strong> Elken, Tom (<em>tom.elken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-16 18:09:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19775.php">Anne M. Hammond: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Previous message:</strong> <a href="19773.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>In reply to:</strong> <a href="19773.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19775.php">Anne M. Hammond: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Reply:</strong> <a href="19775.php">Anne M. Hammond: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Anne,
<br>
<p>output from &quot;cat /proc/cpuinfo&quot; on your node &quot;hostname&quot;  may help those trying to answer.
<br>
<p>-Tom
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Monday, July 16, 2012 2:47 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I gather there are two sockets on this node? So the second cmd line is equivalent
</span><br>
<span class="quotelev1">&gt; to leaving &quot;num-sockets&quot; off of the cmd line?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't tried what you are doing, so it is quite possible this is a bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 16, 2012, at 1:49 PM, Anne M. Hammond wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Built the latest snapshot.  Still getting an error when trying to run
</span><br>
<span class="quotelev2">&gt; &gt; on only one socket (see below):  Is there a workaround?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [hammond_at_node65 bin]$ ./mpirun -np 4 --num-sockets 1 --npersocket 4
</span><br>
<span class="quotelev2">&gt; &gt; hostname
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ---- An invalid physical processor ID was returned when attempting to
</span><br>
<span class="quotelev2">&gt; &gt; bind an MPI process to a unique processor.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This usually means that you requested binding to more processors than
</span><br>
<span class="quotelev2">&gt; &gt; exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
</span><br>
<span class="quotelev2">&gt; &gt; M).  Double check that you have enough unique processors for all the
</span><br>
<span class="quotelev2">&gt; &gt; MPI processes that you are launching on this host.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You job will now abort.
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ---- mpirun was unable to start the specified application as it
</span><br>
<span class="quotelev2">&gt; &gt; encountered an error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Error name: Fatal
</span><br>
<span class="quotelev2">&gt; &gt; Node: node65.cl.corp.com
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; 4 total processes failed to start
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [hammond_at_node65 bin]$ ./mpirun -np 4 --num-sockets 2 --npersocket 4
</span><br>
<span class="quotelev2">&gt; &gt; hostname node65.cl.corp.com node65.cl.corp.com node65.cl.corp.com
</span><br>
<span class="quotelev2">&gt; &gt; node65.cl.corp.com
</span><br>
<span class="quotelev2">&gt; &gt; [hammond_at_node65 bin]$
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 16, 2012, at 12:56 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff is at the MPI Forum this week, so his answers will be delayed. Last I
</span><br>
<span class="quotelev1">&gt; heard, it was close, but no specific date has been set.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jul 16, 2012, at 11:49 AM, Michael E. Thomadakis wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; When is the expected date for the official 1.6.1 (or 1.6.2 ?) to be available ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mike
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On 07/16/2012 01:44 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; You can get it here:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/v1.6/">http://www.open-mpi.org/nightly/v1.6/</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Jul 16, 2012, at 10:22 AM, Anne M. Hammond wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; For benchmarking, we would like to use openmpi with
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --num-sockets 1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; This fails in 1.6, but Bug Report #3119 indicates it is changed in
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 1.6.1.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Is 1.6.1 or 1.6.2 available in tar.gz form?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Anne
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anne M. Hammond - Systems / Network Administration - Tech-X Corp
</span><br>
<span class="quotelev2">&gt; &gt;                  hammond_at_txcorp.com 720-974-1840
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="19775.php">Anne M. Hammond: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Previous message:</strong> <a href="19773.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>In reply to:</strong> <a href="19773.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19775.php">Anne M. Hammond: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Reply:</strong> <a href="19775.php">Anne M. Hammond: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
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
