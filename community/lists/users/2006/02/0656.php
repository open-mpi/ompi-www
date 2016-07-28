<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 14 11:57:27 2006" -->
<!-- isoreceived="20060214165727" -->
<!-- sent="Tue, 14 Feb 2006 09:57:23 -0700" -->
<!-- isosent="20060214165723" -->
<!-- name="Xiaoning (David) Yang" -->
<!-- email="xyang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installing OpenMPI on a solaris" -->
<!-- id="C0175A03.8B39%xyang_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1D681645-56C3-48FE-AF9B-1248E5FF2DCC_at_open-mpi.org" -->
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
<strong>From:</strong> Xiaoning (David) Yang (<em>xyang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-14 11:57:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0657.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Previous message:</strong> <a href="0655.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<li><strong>In reply to:</strong> <a href="0654.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0657.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Reply:</strong> <a href="0657.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>Thanks for the info. I tried to compile the simple code in your email with
<br>
'c++ -c foo.c' and got the similar error. Does it mean that my compiler was
<br>
not configured correctly? Thanks.
<br>
<p>David
<br>
<p>***** Correspondence *****
<br>
<p><p><p><span class="quotelev1">&gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tue, 14 Feb 2006 08:48:49 -0500
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Installing OpenMPI on a solaris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 13, 2006, at 12:29 PM, Xiaoning (David) Yang wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm installing OpenMPI on a solaris system and got the following error
</span><br>
<span class="quotelev2">&gt;&gt; message when running make:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/gcc-lib/sparc-sun-solaris2.6/2.95/../../../../
</span><br>
<span class="quotelev2">&gt;&gt; include/g++-3/s
</span><br>
<span class="quotelev2">&gt;&gt; tl_config.h:151: _G_config.h: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What does it mean and how to solve the problem. Thanks for any help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is hard to tell without seeing the surrounding output, but it
</span><br>
<span class="quotelev1">&gt; appears that your C++ compiler is configured incorrectly and not able
</span><br>
<span class="quotelev1">&gt; to compile STL code.  You might want to try building a simple Hello,
</span><br>
<span class="quotelev1">&gt; World example using the IOStreams (like the one below) -- if that
</span><br>
<span class="quotelev1">&gt; doesn't work, you need to talk to your sysadmin or the supplier of
</span><br>
<span class="quotelev1">&gt; the GCC binaries you are using and figure out how to get simple
</span><br>
<span class="quotelev1">&gt; applications to compile.  If the simple example compiles, please send
</span><br>
<span class="quotelev1">&gt; us the config.log from your Open MPI source tree and a bit more of
</span><br>
<span class="quotelev1">&gt; the output from make.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;      std::cout &lt;&lt; &quot;Hello, World&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;      return 0;
</span><br>
<span class="quotelev1">&gt; }
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
<li><strong>Next message:</strong> <a href="0657.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Previous message:</strong> <a href="0655.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<li><strong>In reply to:</strong> <a href="0654.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0657.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Reply:</strong> <a href="0657.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
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
