<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 16 08:51:58 2012" -->
<!-- isoreceived="20120316125158" -->
<!-- sent="Fri, 16 Mar 2012 07:51:53 -0500" -->
<!-- isosent="20120316125153" -->
<!-- name="Addepalli, Srirangam V" -->
<!-- email="srirangam.v.addepalli_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="15F71B097D330B42AA606A4AD8CA96400131D1505BE6_at_CRATUS.ttu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKbzMGcxtaf1ALEGCk07TT4tf2x3iN_HONOuFgk_E_PfLVr0Uw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] (no subject)<br>
<strong>From:</strong> Addepalli, Srirangam V (<em>srirangam.v.addepalli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-16 08:51:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18797.php">Gustavo Correa: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="18795.php">jody: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="18795.php">jody: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18797.php">Gustavo Correa: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="18797.php">Gustavo Correa: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This usually means you library path is not updated to find mpilibrarues.  You can fix this many ways,  basic two steps are
<br>
<p>1. Identify location of your libraries (use locate, find )
<br>
2. Add it to your Library path. ( export LD_LIBRARY_PATH or make changes in .bashrc or /etc/ld.so.conf)
<br>
<p><p>Rangam
<br>
________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of jody [jody.xha_at_[hidden]]
<br>
Sent: Friday, March 16, 2012 4:04 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] (no subject)
<br>
<p>Hi
<br>
<p>Did you run your program with mpirun?
<br>
For example:
<br>
&nbsp;&nbsp;&nbsp;mpirun -np 4 ./a.out
<br>
<p>jody
<br>
<p>On Fri, Mar 16, 2012 at 7:24 AM, harini.s .. &lt;hharinis8_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi ,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am very new to openMPI and I just installed openMPI 4.1.5 on Linux
</span><br>
<span class="quotelev1">&gt; platform. Now am trying to run the examples in the folder got
</span><br>
<span class="quotelev1">&gt; downloaded. But when i run , I got this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a.out: error while loading shared libraries: libmpi.so.0: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got a.out when I compile hello_c.c using mpicc command.
</span><br>
<span class="quotelev1">&gt; please help me to resolve this problem.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18797.php">Gustavo Correa: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="18795.php">jody: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="18795.php">jody: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18797.php">Gustavo Correa: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="18797.php">Gustavo Correa: "Re: [OMPI users] (no subject)"</a>
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
