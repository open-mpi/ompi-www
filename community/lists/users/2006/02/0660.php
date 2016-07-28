<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 14 15:48:42 2006" -->
<!-- isoreceived="20060214204842" -->
<!-- sent="Tue, 14 Feb 2006 13:48:39 -0700" -->
<!-- isosent="20060214204839" -->
<!-- name="Xiaoning (David) Yang" -->
<!-- email="xyang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installing OpenMPI on a solaris" -->
<!-- id="C0179037.8B60%xyang_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="88BFD880-D6CE-4567-B93D-DE6792C7C606_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-02-14 15:48:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0661.php">Zhao, Yongsheng: "[OMPI users] Dynamic process question"</a>
<li><strong>Previous message:</strong> <a href="0659.php">Jeff Squyres: "Re: [OMPI users] Problem:  MPI_Comm_rank always returns 0"</a>
<li><strong>In reply to:</strong> <a href="0657.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0664.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Reply:</strong> <a href="0664.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>Thank you for your help. It turned out that my path pointed to an older
<br>
version of gcc. After correcting that, I no longer get the same error. But
<br>
now the error becomes, after I issued &quot;make all install&quot;,
<br>
<p>......
<br>
gcc -DHAVE_CONFIG_H -I. -I. -I../../include -I../../include -I../../include
<br>
-I../.. -I../.. -I../../include -I../../opal -I../../orte -I../../ompi
<br>
-D_REENTRANT -O3 -DNDEBUG -fno-strict-aliasing -c req_test.c
<br>
-Wp,-MD,.deps/req_test.TPlo  -fPIC -DPIC -o .libs/req_test.o
<br>
/usr/ccs/bin/as: &quot;/var/tmp//cc5lFbCH.s&quot;, line 17: error: cannot use v8plus
<br>
instructions in a non-v8plus target binary
<br>
/usr/ccs/bin/as: &quot;/var/tmp//cc5lFbCH.s&quot;, line 155: error: cannot use v8plus
<br>
instructions in a non-v8plus target binary
<br>
*** Error code 1
<br>
make: Fatal error: Command failed for target `req_test.lo'
<br>
Current working directory /home/xyang/openmpi/openmpi-1.0.1/ompi/request
<br>
*** Error code 1
<br>
make: Fatal error: Command failed for target `all-recursive'
<br>
Current working directory /home/xyang/openmpi/openmpi-1.0.1/ompi
<br>
*** Error code 1
<br>
make: Fatal error: Command failed for target `all-recursive'
<br>
<p>Any clue what went wrong this time? Thanks a lot!
<br>
<p>David
<br>
<p>***** Correspondence *****
<br>
<p><p><p><span class="quotelev1">&gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tue, 14 Feb 2006 13:54:21 -0500
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Installing OpenMPI on a solaris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 14, 2006, at 11:57 AM, Xiaoning (David) Yang wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the info. I tried to compile the simple code in your
</span><br>
<span class="quotelev2">&gt;&gt; email with
</span><br>
<span class="quotelev2">&gt;&gt; 'c++ -c foo.c' and got the similar error. Does it mean that my
</span><br>
<span class="quotelev2">&gt;&gt; compiler was
</span><br>
<span class="quotelev2">&gt;&gt; not configured correctly? Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, it points to a configuration issue with your C++ compiler.
</span><br>
<span class="quotelev1">&gt; Until that issue is resolved, it will be impossible to compile Open
</span><br>
<span class="quotelev1">&gt; MPI on that machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ***** Correspondence *****
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Tue, 14 Feb 2006 08:48:49 -0500
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Installing OpenMPI on a solaris
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 13, 2006, at 12:29 PM, Xiaoning (David) Yang wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm installing OpenMPI on a solaris system and got the following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message when running make:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/local/lib/gcc-lib/sparc-sun-solaris2.6/2.95/../../../../
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; include/g++-3/s
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tl_config.h:151: _G_config.h: No such file or directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What does it mean and how to solve the problem. Thanks for any help!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is hard to tell without seeing the surrounding output, but it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appears that your C++ compiler is configured incorrectly and not able
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to compile STL code.  You might want to try building a simple Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; World example using the IOStreams (like the one below) -- if that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't work, you need to talk to your sysadmin or the supplier of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the GCC binaries you are using and figure out how to get simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt; applications to compile.  If the simple example compiles, please send
</span><br>
<span class="quotelev3">&gt;&gt;&gt; us the config.log from your Open MPI source tree and a bit more of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the output from make.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Brian Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open MPI developer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main(int argc, char *argv[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      std::cout &lt;&lt; &quot;Hello, World&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="0661.php">Zhao, Yongsheng: "[OMPI users] Dynamic process question"</a>
<li><strong>Previous message:</strong> <a href="0659.php">Jeff Squyres: "Re: [OMPI users] Problem:  MPI_Comm_rank always returns 0"</a>
<li><strong>In reply to:</strong> <a href="0657.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0664.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Reply:</strong> <a href="0664.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
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
