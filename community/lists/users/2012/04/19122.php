<?
$subject_val = "Re: [OMPI users] regarding the problem occurred while running an mpi programs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 10:45:23 2012" -->
<!-- isoreceived="20120425144523" -->
<!-- sent="Wed, 25 Apr 2012 08:45:16 -0600" -->
<!-- isosent="20120425144516" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] regarding the problem occurred while running an mpi programs" -->
<!-- id="C3D4D043-A062-4F78-80F9-C6252E11A152_at_cox.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJ_xm3AB0LqC2Qy6CqB-g8g9MW+hj6D7B_SXZ8p_4X+b_QRLXw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] regarding the problem occurred while running an mpi programs<br>
<strong>From:</strong> Doug Reeder (<em>dlr1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 10:45:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19123.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<li><strong>Previous message:</strong> <a href="19121.php">Jeff Squyres: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>In reply to:</strong> <a href="19119.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19123.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<li><strong>Reply:</strong> <a href="19123.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is well documented as a BAD idea.
<br>
<p>On Apr 25, 2012, at 8:23 AM, seshendra seshu wrote:
<br>
<p><span class="quotelev1">&gt; Hi 
</span><br>
<span class="quotelev1">&gt; Yes i run in root. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 25, 2012 at 4:20 PM, tyler.balson_at_[hidden] &lt;tyler.balson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Seshendra, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you always run in root? If not your root bash file may not have the correct path settings, but that is a shot in the dark..
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of seshendra seshu [seshu199_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, April 25, 2012 9:16 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] regarding the problem occurred while running an mpi programs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I have got the following error while running mpi programs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here for running an mpi program i used hostfile which specifies all the nodes in my cluster and out is my output file generated after &quot;mpicc -o out basic.c&quot;. then i have got the following error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_ip-10-80-106-70 openmpi-1.4.5]# mpirun --hostfile hostfile out
</span><br>
<span class="quotelev1">&gt; out: error while loading shared libraries: libmpi_cxx.so.0: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could not find an executable:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Executable: out
</span><br>
<span class="quotelev1">&gt; Node: ip-10-85-134-176.example.com
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so kindly provide me  solution iam lagging of time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  WITH REGARDS
</span><br>
<span class="quotelev1">&gt; M.L.N.Seshendra
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  WITH REGARDS
</span><br>
<span class="quotelev1">&gt; M.L.N.Seshendra
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19122/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19123.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<li><strong>Previous message:</strong> <a href="19121.php">Jeff Squyres: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>In reply to:</strong> <a href="19119.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19123.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<li><strong>Reply:</strong> <a href="19123.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
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
