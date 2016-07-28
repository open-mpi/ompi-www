<?
$subject_val = "Re: [OMPI users] low CPU utilization with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 22:12:56 2014" -->
<!-- isoreceived="20141023021256" -->
<!-- sent="Thu, 23 Oct 2014 10:12:54 +0800" -->
<!-- isosent="20141023021254" -->
<!-- name="Vinson Leung" -->
<!-- email="lwhvinson1990_at_[hidden]" -->
<!-- subject="Re: [OMPI users] low CPU utilization with OpenMPI" -->
<!-- id="CAAvvnSpqnH6SxSFP3rPMiSNcX3ZeU1zL6p=aSkJGV3SVfWoEfw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] low CPU utilization with OpenMPI" -->
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
<strong>Subject:</strong> Re: [OMPI users] low CPU utilization with OpenMPI<br>
<strong>From:</strong> Vinson Leung (<em>lwhvinson1990_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-22 22:12:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25556.php">Ralph Castain: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="25554.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Maybe in reply to:</strong> <a href="25548.php">Vinson Leung: "[OMPI users] low CPU utilization with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25556.php">Ralph Castain: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="25556.php">Ralph Castain: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your reply:)
<br>
Follow your advice I tried to set the TMPDIR to /var/tmp and /dev/shm and
<br>
even reset to /tmp (I get the system permission), the problem still occur
<br>
(CPU utilization still lower than 20%). I have no idea why and ready to
<br>
give up OpenMPI instead of using other MPI library.
<br>
<p>--------Old Message-------------
<br>
<p>Date: Tue, 21 Oct 2014 22:21:31 -0400
<br>
From: Brock Palen &lt;brockp_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] low CPU utilization with OpenMPI
<br>
Message-ID: &lt;CC54135D-0CFE-440A-8DF2-06B587E172D2_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=us-ascii
<br>
<p>Doing special files on NFS can be weird,  try the other /tmp/ locations:
<br>
<p>/var/tmp/
<br>
/dev/shm  (ram disk careful!)
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p><span class="quotelev1">&gt; On Oct 21, 2014, at 10:18 PM, Vinson Leung &lt;lwhvinson1990_at_[hidden]&gt;
</span><br>
wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because of permission reason (OpenMPI can not write temporary file to the
</span><br>
default /tmp directory), I change the TMPDIR to my local directory (export
<br>
TMPDIR=/home/user/tmp ) and then the MPI program can run. But the CPU
<br>
utilization is very low under 20% (8 MPI rank running in Intel Xeon 8-core
<br>
CPU).
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And I also got some message when I run with OpenMPI:
</span><br>
<span class="quotelev1">&gt; [cn3:28072] 9 more processes have sent help message
</span><br>
help-opal-shmem-mmap.txt / mmap on nfs
<br>
<span class="quotelev1">&gt; [cn3:28072] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all
</span><br>
help / error messages
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea?
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; VIncent
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2014/10/25548.php">http://www.open-mpi.org/community/lists/users/2014/10/25548.php</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25555/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25556.php">Ralph Castain: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="25554.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Maybe in reply to:</strong> <a href="25548.php">Vinson Leung: "[OMPI users] low CPU utilization with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25556.php">Ralph Castain: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="25556.php">Ralph Castain: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
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
