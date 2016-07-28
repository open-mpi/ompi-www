<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 14 08:48:50 2006" -->
<!-- isoreceived="20060214134850" -->
<!-- sent="Tue, 14 Feb 2006 08:48:49 -0500" -->
<!-- isosent="20060214134849" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installing OpenMPI on a solaris" -->
<!-- id="1D681645-56C3-48FE-AF9B-1248E5FF2DCC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C0161014.8B06%xyang_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-02-14 08:48:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0655.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<li><strong>Previous message:</strong> <a href="0653.php">Xiaoning (David) Yang: "[OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>In reply to:</strong> <a href="0653.php">Xiaoning (David) Yang: "[OMPI users] Installing OpenMPI on a solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0656.php">Xiaoning (David) Yang: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Reply:</strong> <a href="0656.php">Xiaoning (David) Yang: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 13, 2006, at 12:29 PM, Xiaoning (David) Yang wrote:
<br>
<p><span class="quotelev1">&gt; I'm installing OpenMPI on a solaris system and got the following error
</span><br>
<span class="quotelev1">&gt; message when running make:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/gcc-lib/sparc-sun-solaris2.6/2.95/../../../../ 
</span><br>
<span class="quotelev1">&gt; include/g++-3/s
</span><br>
<span class="quotelev1">&gt; tl_config.h:151: _G_config.h: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does it mean and how to solve the problem. Thanks for any help!
</span><br>
<p>It is hard to tell without seeing the surrounding output, but it  
<br>
appears that your C++ compiler is configured incorrectly and not able  
<br>
to compile STL code.  You might want to try building a simple Hello,  
<br>
World example using the IOStreams (like the one below) -- if that  
<br>
doesn't work, you need to talk to your sysadmin or the supplier of  
<br>
the GCC binaries you are using and figure out how to get simple  
<br>
applications to compile.  If the simple example compiles, please send  
<br>
us the config.log from your Open MPI source tree and a bit more of  
<br>
the output from make.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
#include &lt;iostream&gt;
int
main(int argc, char *argv[])
{
     std::cout &lt;&lt; &quot;Hello, World&quot; &lt;&lt; std::endl;
     return 0;
}
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0655.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<li><strong>Previous message:</strong> <a href="0653.php">Xiaoning (David) Yang: "[OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>In reply to:</strong> <a href="0653.php">Xiaoning (David) Yang: "[OMPI users] Installing OpenMPI on a solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0656.php">Xiaoning (David) Yang: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Reply:</strong> <a href="0656.php">Xiaoning (David) Yang: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
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
