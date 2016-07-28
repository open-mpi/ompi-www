<?
$subject_val = "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 13 18:55:19 2016" -->
<!-- isoreceived="20160213235519" -->
<!-- sent="Sat, 13 Feb 2016 15:54:59 -0800" -->
<!-- isosent="20160213235459" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program" -->
<!-- id="CAGKz=uLWKmN1uf6+yt7eQe9Hf0z21UFO4wUfCeDzMPF2sbDdVg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAbhqc6Ch4T7cqZThwPi=+HsVc2FW_ccsckvGnsujxEhheQFdw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-13 18:54:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28527.php">dpchoudh .: "[OMPI users] Release vs git trunk directory tree"</a>
<li><strong>Previous message:</strong> <a href="28525.php">Nick Papior: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>In reply to:</strong> <a href="28525.php">Nick Papior: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28532.php">Dave Love: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>Reply:</strong> <a href="28532.php">Dave Love: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Feb 13, 2016 at 2:27 PM, Nick Papior &lt;nickpapior_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-02-13 23:07 GMT+01:00 Kim Walisch &lt;kim.walisch_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; You may be interested in reading:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/software/ompi/versions/">https://www.open-mpi.org/software/ompi/versions/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your answer. I found:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Specifically: v1.10.x is not guaranteed to be backwards
</span><br>
<span class="quotelev2">&gt;&gt; compatible with other v1.x releases.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; However, this definition only applies when the same version of Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI is used with all instances ... If the versions are not exactly the
</span><br>
<span class="quotelev2">&gt;&gt; same everywhere, Open MPI is not guaranteed to work properly in any
</span><br>
<span class="quotelev2">&gt;&gt; scenario.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So statically linking against Open MPI seems to be a bad idea.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What about linking against a rather old shared Open MPI library
</span><br>
<span class="quotelev2">&gt;&gt; from e.g. 3 years ago? Will my program likely run on most systems
</span><br>
<span class="quotelev2">&gt;&gt; which have a more recent Open MPI version installed?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Most probably this will rarely work. If it does, you are lucky... :)
</span><br>
<span class="quotelev1">&gt; The link still applies. As it says, if it works it works, if not you have
</span><br>
<span class="quotelev1">&gt; to do something else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or is it better to not distribute any binaries which link against Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; and instead put compilation instructions on the website?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Yes, and/or provide serial equivalents of your program.
</span><br>
<span class="quotelev1">&gt; Besides, providing binaries for specific MPI-implementations may seem like
</span><br>
<span class="quotelev1">&gt; easing it for users, however in my experience many users do not know that
</span><br>
<span class="quotelev1">&gt; MPI is implementation specific, i.e. OpenMPI and MPICH and hence they will
</span><br>
<span class="quotelev1">&gt; subsequently ask why it doesn't work using an intel-suite of compilers (for
</span><br>
<span class="quotelev1">&gt; instance).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
You can rely upon e.g. <a href="https://www.mpich.org/abi/">https://www.mpich.org/abi/</a> when redistributing MPI
<br>
binaries built with MPICH, but a better option would be to wrap all of your
<br>
MPI code in an implementation-agnostic wrapper and then ship a binary that
<br>
can dlopen a different version wrapper depending on which MPI
<br>
implementation the user has.  That would allow you to ship a single binary
<br>
that could use both MPICH and OpenMPI.
<br>
<p>Jeff
<br>
<p><p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Kim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Feb 13, 2016 at 10:45 PM, Nick Papior &lt;nickpapior_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You may be interested in reading:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://www.open-mpi.org/software/ompi/versions/">https://www.open-mpi.org/software/ompi/versions/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2016-02-13 22:30 GMT+01:00 Kim Walisch &lt;kim.walisch_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In order to make life of my users easier I have built a fully
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; statically linked version of my primecount program. So the program
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; also statically links against Open MPI. I have built this binary on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CentOS-7-x86_64 using gcc. The good news is that the binary runs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; without any issues on Ubuntu 15.10 x64 (uses mpiexec (OpenRTE) 1.10.2).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The bad news is that the binary does not work on Ubuntu 14.04 x64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which uses mpiexec (OpenRTE) 1.6.5. Here is the error message:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun -n 1 ./primecount 1e10 -t1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ip-XXX:02671] [[8243,0],0] mca_oob_tcp_recv_handler: invalid message
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; type: 15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ubuntu_at_ip-XXX:~$ mpiexec --version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec (OpenRTE) 1.6.5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Questions:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) Is this backwards incompatibility issue an Open MPI bug?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) Can I expect that my binary will work with future mpiexec
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; versions &gt;= 1.10 (which it was built with)?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks and best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28522.php">http://www.open-mpi.org/community/lists/users/2016/02/28522.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards Nick
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28525.php">http://www.open-mpi.org/community/lists/users/2016/02/28525.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28526/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28527.php">dpchoudh .: "[OMPI users] Release vs git trunk directory tree"</a>
<li><strong>Previous message:</strong> <a href="28525.php">Nick Papior: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>In reply to:</strong> <a href="28525.php">Nick Papior: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28532.php">Dave Love: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>Reply:</strong> <a href="28532.php">Dave Love: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
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
