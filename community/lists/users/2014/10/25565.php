<?
$subject_val = "Re: [OMPI users] low CPU utilization with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 23 21:27:05 2014" -->
<!-- isoreceived="20141024012705" -->
<!-- sent="Fri, 24 Oct 2014 09:27:02 +0800" -->
<!-- isosent="20141024012702" -->
<!-- name="Vinson Leung" -->
<!-- email="lwhvinson1990_at_[hidden]" -->
<!-- subject="Re: [OMPI users] low CPU utilization with OpenMPI" -->
<!-- id="CAAvvnSpzbumN=MPeaL1Gch=WJq=d4N5i0SdxD_9dhYEV4xXVQw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG4F6z8-LFBDVsAj0z08gzpN42tJT6TOiXfd8h5R_vpKfO87MA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-10-23 21:27:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25566.php">Vinson Leung: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="25564.php">Kawashima, Takahiro: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25560.php">Joshua Ladd: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How can I fix the error if all processes open their backing files for mmap
<br>
on NSF like you said?
<br>
<p>Vincent
<br>
<p>On Thu, Oct 23, 2014 at 10:35 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It's not coming from OSHMEM but from the OPAL &quot;shmem&quot; framework. You are
</span><br>
<span class="quotelev1">&gt; going to get terrible performance - possibly slowing to a crawl having all
</span><br>
<span class="quotelev1">&gt; processes open their backing files for mmap on NSF. I think that's the
</span><br>
<span class="quotelev1">&gt; error that he's getting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 23, 2014 at 6:06 AM, Vinson Leung &lt;lwhvinson1990_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HI, Thanks for your reply:)
</span><br>
<span class="quotelev2">&gt;&gt; I really run an MPI program (compile with OpenMPI and run with &quot;mpirun -n
</span><br>
<span class="quotelev2">&gt;&gt; 8 ......&quot;). My OpenMPI version is 1.8.3 and my program is Gromacs. BTW,
</span><br>
<span class="quotelev2">&gt;&gt; what is OSHMEM ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best
</span><br>
<span class="quotelev2">&gt;&gt; Vincent
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Oct 23, 2014 at 12:21 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From your error message, I gather you are not running an MPI program,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but rather an OSHMEM one? Otherwise, I find the message strange as it only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would be emitted from an OSHMEM program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What version of OMPI are you trying to use?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 22, 2014, at 7:12 PM, Vinson Leung &lt;lwhvinson1990_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your reply:)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Follow your advice I tried to set the TMPDIR to /var/tmp and /dev/shm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and even reset to /tmp (I get the system permission), the problem still
</span><br>
<span class="quotelev3">&gt;&gt;&gt; occur (CPU utilization still lower than 20%). I have no idea why and ready
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to give up OpenMPI instead of using other MPI library.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------Old Message-------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Tue, 21 Oct 2014 22:21:31 -0400
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Brock Palen &lt;brockp_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] low CPU utilization with OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;CC54135D-0CFE-440A-8DF2-06B587E172D2_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Doing special files on NFS can be weird,  try the other /tmp/ locations:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /var/tmp/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /dev/shm  (ram disk careful!)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Oct 21, 2014, at 10:18 PM, Vinson Leung &lt;lwhvinson1990_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Because of permission reason (OpenMPI can not write temporary file to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the default /tmp directory), I change the TMPDIR to my local directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (export TMPDIR=/home/user/tmp ) and then the MPI program can run. But the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU utilization is very low under 20% (8 MPI rank running in Intel Xeon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8-core CPU).
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; And I also got some message when I run with OpenMPI:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [cn3:28072] 9 more processes have sent help message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help-opal-shmem-mmap.txt / mmap on nfs
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [cn3:28072] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all help / error messages
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Any idea?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; VIncent
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25548.php">http://www.open-mpi.org/community/lists/users/2014/10/25548.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25555.php">http://www.open-mpi.org/community/lists/users/2014/10/25555.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25556.php">http://www.open-mpi.org/community/lists/users/2014/10/25556.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25558.php">http://www.open-mpi.org/community/lists/users/2014/10/25558.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25560.php">http://www.open-mpi.org/community/lists/users/2014/10/25560.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25565/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25566.php">Vinson Leung: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="25564.php">Kawashima, Takahiro: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25560.php">Joshua Ladd: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
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
