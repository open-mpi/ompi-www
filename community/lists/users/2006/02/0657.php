<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 14 13:54:24 2006" -->
<!-- isoreceived="20060214185424" -->
<!-- sent="Tue, 14 Feb 2006 13:54:21 -0500" -->
<!-- isosent="20060214185421" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installing OpenMPI on a solaris" -->
<!-- id="88BFD880-D6CE-4567-B93D-DE6792C7C606_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C0175A03.8B39%xyang_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-14 13:54:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0658.php">Mike Haskell: "[OMPI users] Problem:  MPI_Comm_rank always returns 0"</a>
<li><strong>Previous message:</strong> <a href="0656.php">Xiaoning (David) Yang: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>In reply to:</strong> <a href="0656.php">Xiaoning (David) Yang: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0660.php">Xiaoning (David) Yang: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Reply:</strong> <a href="0660.php">Xiaoning (David) Yang: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 14, 2006, at 11:57 AM, Xiaoning (David) Yang wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the info. I tried to compile the simple code in your  
</span><br>
<span class="quotelev1">&gt; email with
</span><br>
<span class="quotelev1">&gt; 'c++ -c foo.c' and got the similar error. Does it mean that my  
</span><br>
<span class="quotelev1">&gt; compiler was
</span><br>
<span class="quotelev1">&gt; not configured correctly? Thanks.
</span><br>
<p>Yes, it points to a configuration issue with your C++ compiler.   
<br>
Until that issue is resolved, it will be impossible to compile Open  
<br>
MPI on that machine.
<br>
<p>Brian
<br>
<p><p><span class="quotelev1">&gt; ***** Correspondence *****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 14 Feb 2006 08:48:49 -0500
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Installing OpenMPI on a solaris
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 13, 2006, at 12:29 PM, Xiaoning (David) Yang wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm installing OpenMPI on a solaris system and got the following  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message when running make:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/gcc-lib/sparc-sun-solaris2.6/2.95/../../../../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; include/g++-3/s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tl_config.h:151: _G_config.h: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What does it mean and how to solve the problem. Thanks for any help!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is hard to tell without seeing the surrounding output, but it
</span><br>
<span class="quotelev2">&gt;&gt; appears that your C++ compiler is configured incorrectly and not able
</span><br>
<span class="quotelev2">&gt;&gt; to compile STL code.  You might want to try building a simple Hello,
</span><br>
<span class="quotelev2">&gt;&gt; World example using the IOStreams (like the one below) -- if that
</span><br>
<span class="quotelev2">&gt;&gt; doesn't work, you need to talk to your sysadmin or the supplier of
</span><br>
<span class="quotelev2">&gt;&gt; the GCC binaries you are using and figure out how to get simple
</span><br>
<span class="quotelev2">&gt;&gt; applications to compile.  If the simple example compiles, please send
</span><br>
<span class="quotelev2">&gt;&gt; us the config.log from your Open MPI source tree and a bit more of
</span><br>
<span class="quotelev2">&gt;&gt; the output from make.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;    Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI developer
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int
</span><br>
<span class="quotelev2">&gt;&gt; main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;      std::cout &lt;&lt; &quot;Hello, World&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev2">&gt;&gt;      return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
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
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0658.php">Mike Haskell: "[OMPI users] Problem:  MPI_Comm_rank always returns 0"</a>
<li><strong>Previous message:</strong> <a href="0656.php">Xiaoning (David) Yang: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>In reply to:</strong> <a href="0656.php">Xiaoning (David) Yang: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0660.php">Xiaoning (David) Yang: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Reply:</strong> <a href="0660.php">Xiaoning (David) Yang: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
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
