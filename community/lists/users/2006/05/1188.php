<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  2 00:24:50 2006" -->
<!-- isoreceived="20060502042450" -->
<!-- sent="Tue, 2 May 2006 00:24:41 -0400" -->
<!-- isosent="20060502042441" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] C++ problem with ./configure using Intel version 9.0" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF7A796D_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] C++ problem with ./configure using Intel version 9.0" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-02 00:24:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1189.php">Rolf Vandevaart: "[OMPI users] tcp and sm btl parameters"</a>
<li><strong>Previous message:</strong> <a href="1187.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Maybe in reply to:</strong> <a href="1174.php">Douglas Kojetin: "[OMPI users] C++ problem with ./configure using Intel version 9.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1192.php">Douglas Kojetin: "Re: [OMPI users] C++ problem with ./configure using Intel version 9.0"</a>
<li><strong>Reply:</strong> <a href="1192.php">Douglas Kojetin: "Re: [OMPI users] C++ problem with ./configure using Intel version 9.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send the config.log file as well?  (please compress)
<br>
<p>That file contains a bunch of data we need to see to verify the problem.
<br>
<p><span class="quotelev1">&gt;From a quick glance at your config.out, we typically see this kind of
</span><br>
output when the C++ compiler is not installed properly or is otherwise
<br>
unable to compile C++ applications properly.  You might want to ensure
<br>
that your C++ compiler is installed properly and is able to compile
<br>
simple C++ applications (e.g., something like the following:
<br>
<p>#include &lt;stdio.h&gt;
<br>
int main(int argc, char* argv[]) { printf(&quot;Hello, world!\n&quot;); return 0;
<br>
}
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Douglas Kojetin
</span><br>
<span class="quotelev1">&gt; Sent: Monday, May 01, 2006 12:52 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] C++ problem with ./configure using 
</span><br>
<span class="quotelev1">&gt; Intel version 9.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello All-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am having a problem running ./configure for the OpenMPI 1.02  
</span><br>
<span class="quotelev1">&gt; install.  It is a problem with the Intel C++ compiler (icpc) -- I am  
</span><br>
<span class="quotelev1">&gt; using Intel compilers:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Intel(R) C++ Compiler for 32-bit applications, Version 9.0    Build  
</span><br>
<span class="quotelev1">&gt; 20051201Z Package ID: l_cc_c_9.0.030
</span><br>
<span class="quotelev1">&gt; Intel(R) C Compiler for 32-bit applications, Version 9.0    Build  
</span><br>
<span class="quotelev1">&gt; 20051201Z Package ID: l_cc_c_9.0.030
</span><br>
<span class="quotelev1">&gt; Intel(R) Fortran Compiler for 32-bit applications, Version 9.0     
</span><br>
<span class="quotelev1">&gt; Build 20051201Z Package ID: l_fc_c_9.0.031
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for the input,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1189.php">Rolf Vandevaart: "[OMPI users] tcp and sm btl parameters"</a>
<li><strong>Previous message:</strong> <a href="1187.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Maybe in reply to:</strong> <a href="1174.php">Douglas Kojetin: "[OMPI users] C++ problem with ./configure using Intel version 9.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1192.php">Douglas Kojetin: "Re: [OMPI users] C++ problem with ./configure using Intel version 9.0"</a>
<li><strong>Reply:</strong> <a href="1192.php">Douglas Kojetin: "Re: [OMPI users] C++ problem with ./configure using Intel version 9.0"</a>
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
