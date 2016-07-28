<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 16 11:52:25 2012" -->
<!-- isoreceived="20120316155225" -->
<!-- sent="Fri, 16 Mar 2012 11:52:20 -0400" -->
<!-- isosent="20120316155220" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="D3560B72-13DC-4350-81A1-F5DA543E1A8C_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="15F71B097D330B42AA606A4AD8CA96400131D1505BE6_at_CRATUS.ttu.edu" -->
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
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-16 11:52:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18798.php">John Hearns: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="18796.php">Addepalli, Srirangam V: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="18796.php">Addepalli, Srirangam V: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18798.php">John Hearns: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="18798.php">John Hearns: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 16, 2012, at 8:51 AM, Addepalli, Srirangam V wrote:
<br>
<p><span class="quotelev1">&gt; This usually means you library path is not updated to find mpilibrarues.  You can fix this many ways,  basic two steps are
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Identify location of your libraries (use locate, find )
</span><br>
<span class="quotelev1">&gt; 2. Add it to your Library path. ( export LD_LIBRARY_PATH or make changes in .bashrc or /etc/ld.so.conf)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rangam
</span><br>
<p>Hi Harini
<br>
<p>Rangam is right.
<br>
Indeed there is even an FAQ specific for this:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p>By the way, the FAQ are the best documentation around.
<br>
The README file is also helpful.
<br>
Worth reading both, to avoid mistakes and waste of time.
<br>
<p>If using bash on .profile or equivalent, add these lines:
<br>
export PATH=/my/path/to/openmpi/bin:$PATH
<br>
export LD_LIBRARY_PATH=/my/path/to/openmpi/lib:$PATH
<br>
<p>If using [t]csh on .[t]cshrc add these lines:
<br>
setenv  PATH   /my/path/to/openmpi/bin:$PATH
<br>
setenv LD_LIBRARY_PATH /my/path/to/openmpi/lib:$PATH 
<br>
<p>with your actual path to openmpi replaced above, of course.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of jody [jody.xha_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, March 16, 2012 4:04 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] (no subject)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you run your program with mpirun?
</span><br>
<span class="quotelev1">&gt; For example:
</span><br>
<span class="quotelev1">&gt;   mpirun -np 4 ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Mar 16, 2012 at 7:24 AM, harini.s .. &lt;hharinis8_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi ,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am very new to openMPI and I just installed openMPI 4.1.5 on Linux
</span><br>
<span class="quotelev2">&gt;&gt; platform. Now am trying to run the examples in the folder got
</span><br>
<span class="quotelev2">&gt;&gt; downloaded. But when i run , I got this
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a.out: error while loading shared libraries: libmpi.so.0: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I got a.out when I compile hello_c.c using mpicc command.
</span><br>
<span class="quotelev2">&gt;&gt; please help me to resolve this problem.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="18798.php">John Hearns: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="18796.php">Addepalli, Srirangam V: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="18796.php">Addepalli, Srirangam V: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18798.php">John Hearns: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="18798.php">John Hearns: "Re: [OMPI users] (no subject)"</a>
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
