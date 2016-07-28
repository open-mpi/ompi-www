<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 17 04:35:33 2012" -->
<!-- isoreceived="20120317083533" -->
<!-- sent="Sat, 17 Mar 2012 08:35:28 +0000" -->
<!-- isosent="20120317083528" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="CAPqNE2VVuJ9VEOfg4c9ZYfZNMJWrDw99o-5akA6MTrEWzgp0+w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D3560B72-13DC-4350-81A1-F5DA543E1A8C_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-17 04:35:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18799.php">Toufik: "[OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="18797.php">Gustavo Correa: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="18797.php">Gustavo Correa: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Harini,
<br>
you can install OpenMPI which is packaged for your distribution of Linux,
<br>
for examply on SuSE use   zypper install openmpi
<br>
or the equivalent on Redhat/Ubuntu
<br>
<p>You probably will not get the most up to date Openmpi version,
<br>
but you will get the library paths set up in /etc/ld.so.conf.d/ and
<br>
the mpi chooser installed
<br>
<p>Once you have this version of OpenMPI working properly you should
<br>
compile and install your own latest version.
<br>
<p>I just checked - the latest version for SuSE 12.1 in the repository
<br>
science/openSUSE
<br>
is 1.4.5
<br>
<p><p>On 16/03/2012, Gustavo Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 16, 2012, at 8:51 AM, Addepalli, Srirangam V wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This usually means you library path is not updated to find mpilibrarues.
</span><br>
<span class="quotelev2">&gt;&gt; You can fix this many ways,  basic two steps are
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Identify location of your libraries (use locate, find )
</span><br>
<span class="quotelev2">&gt;&gt; 2. Add it to your Library path. ( export LD_LIBRARY_PATH or make changes
</span><br>
<span class="quotelev2">&gt;&gt; in .bashrc or /etc/ld.so.conf)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rangam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Harini
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rangam is right.
</span><br>
<span class="quotelev1">&gt; Indeed there is even an FAQ specific for this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, the FAQ are the best documentation around.
</span><br>
<span class="quotelev1">&gt; The README file is also helpful.
</span><br>
<span class="quotelev1">&gt; Worth reading both, to avoid mistakes and waste of time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If using bash on .profile or equivalent, add these lines:
</span><br>
<span class="quotelev1">&gt; export PATH=/my/path/to/openmpi/bin:$PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/my/path/to/openmpi/lib:$PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If using [t]csh on .[t]cshrc add these lines:
</span><br>
<span class="quotelev1">&gt; setenv  PATH   /my/path/to/openmpi/bin:$PATH
</span><br>
<span class="quotelev1">&gt; setenv LD_LIBRARY_PATH /my/path/to/openmpi/lib:$PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with your actual path to openmpi replaced above, of course.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev2">&gt;&gt; jody [jody.xha_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, March 16, 2012 4:04 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] (no subject)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you run your program with mpirun?
</span><br>
<span class="quotelev2">&gt;&gt; For example:
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun -np 4 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Mar 16, 2012 at 7:24 AM, harini.s .. &lt;hharinis8_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi ,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am very new to openMPI and I just installed openMPI 4.1.5 on Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; platform. Now am trying to run the examples in the folder got
</span><br>
<span class="quotelev3">&gt;&gt;&gt; downloaded. But when i run , I got this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a.out: error while loading shared libraries: libmpi.so.0: cannot open
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got a.out when I compile hello_c.c using mpicc command.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; please help me to resolve this problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18799.php">Toufik: "[OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="18797.php">Gustavo Correa: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="18797.php">Gustavo Correa: "Re: [OMPI users] (no subject)"</a>
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
