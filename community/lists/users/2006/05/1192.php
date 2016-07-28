<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  2 09:18:23 2006" -->
<!-- isoreceived="20060502131823" -->
<!-- sent="Tue, 2 May 2006 09:18:19 -0400" -->
<!-- isosent="20060502131819" -->
<!-- name="Douglas Kojetin" -->
<!-- email="dkojetin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] C++ problem with ./configure using Intel version 9.0" -->
<!-- id="58D0543A-C864-4ACA-B81C-DBE7145D3167_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF7A796D_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Douglas Kojetin (<em>dkojetin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-02 09:18:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1193.php">Brian Barrett: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Previous message:</strong> <a href="1191.php">Michael Kluskens: "Re: [OMPI users] fortran flags using Absoft compilers"</a>
<li><strong>In reply to:</strong> <a href="1188.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] C++ problem with ./configure using Intel version 9.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the email.  There was a problem with the setup of the  
<br>
Intel C++ compiler.  I had to add the following line to the icpc.cfg  
<br>
file:
<br>
<p>-gcc-version=400
<br>
<p>Doug
<br>
<p><p><p>On May 2, 2006, at 12:24 AM, Jeff Squyres ((jsquyres)) wrote:
<br>
<p><span class="quotelev1">&gt; Can you send the config.log file as well?  (please compress)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That file contains a bunch of data we need to see to verify the  
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From a quick glance at your config.out, we typically see this kind of
</span><br>
<span class="quotelev1">&gt; output when the C++ compiler is not installed properly or is otherwise
</span><br>
<span class="quotelev1">&gt; unable to compile C++ applications properly.  You might want to ensure
</span><br>
<span class="quotelev1">&gt; that your C++ compiler is installed properly and is able to compile
</span><br>
<span class="quotelev1">&gt; simple C++ applications (e.g., something like the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[]) { printf(&quot;Hello, world!\n&quot;);  
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Douglas Kojetin
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, May 01, 2006 12:52 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] C++ problem with ./configure using
</span><br>
<span class="quotelev2">&gt;&gt; Intel version 9.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello All-
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am having a problem running ./configure for the OpenMPI 1.02
</span><br>
<span class="quotelev2">&gt;&gt; install.  It is a problem with the Intel C++ compiler (icpc) -- I am
</span><br>
<span class="quotelev2">&gt;&gt; using Intel compilers:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Intel(R) C++ Compiler for 32-bit applications, Version 9.0    Build
</span><br>
<span class="quotelev2">&gt;&gt; 20051201Z Package ID: l_cc_c_9.0.030
</span><br>
<span class="quotelev2">&gt;&gt; Intel(R) C Compiler for 32-bit applications, Version 9.0    Build
</span><br>
<span class="quotelev2">&gt;&gt; 20051201Z Package ID: l_cc_c_9.0.030
</span><br>
<span class="quotelev2">&gt;&gt; Intel(R) Fortran Compiler for 32-bit applications, Version 9.0
</span><br>
<span class="quotelev2">&gt;&gt; Build 20051201Z Package ID: l_fc_c_9.0.031
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for the input,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doug
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="1193.php">Brian Barrett: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Previous message:</strong> <a href="1191.php">Michael Kluskens: "Re: [OMPI users] fortran flags using Absoft compilers"</a>
<li><strong>In reply to:</strong> <a href="1188.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] C++ problem with ./configure using Intel version 9.0"</a>
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
