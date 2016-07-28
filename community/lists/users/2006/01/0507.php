<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 17 03:12:14 2006" -->
<!-- isoreceived="20060117081214" -->
<!-- sent="Tue, 17 Jan 2006 09:17:16 +0100" -->
<!-- isosent="20060117081716" -->
<!-- name="Yves Reymen" -->
<!-- email="yves.reymen_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS" -->
<!-- id="43CCA80C.1020202_at_mech.kuleuven.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F97A5B57-8864-4A25-8660-54E8816A2A63_at_open-mpi.org" -->
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
<strong>From:</strong> Yves Reymen (<em>yves.reymen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-17 03:17:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0508.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="0506.php">Brian Barrett: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<li><strong>In reply to:</strong> <a href="0506.php">Brian Barrett: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0516.php">Brian Barrett: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<li><strong>Reply:</strong> <a href="0516.php">Brian Barrett: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Jan 16, 2006, at 11:32 AM, Yves Reymen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;Recently openmpi v1.0.1 was installed on our cluster. It contains all
</span><br>
<span class="quotelev2">&gt;&gt;parameters of ompi_config.h within a #ifndef OMPI_CONFIG_H. I am
</span><br>
<span class="quotelev2">&gt;&gt;wondering how it is possible to give one of these parameters an other
</span><br>
<span class="quotelev2">&gt;&gt;value after everthing is configured and installed, given the fact that
</span><br>
<span class="quotelev2">&gt;&gt;no ompi_config.h is present in the installation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Take for instance the OMPI_WANT_CXX_BINDINGS that decides if you  
</span><br>
<span class="quotelev2">&gt;&gt;want to
</span><br>
<span class="quotelev2">&gt;&gt;include de C++ bindings in mpicxx.h or not. If I set it on my compile
</span><br>
<span class="quotelev2">&gt;&gt;line as -DOMPI_WANT_CXX_BINDINGS=0. It will always be redefined to the
</span><br>
<span class="quotelev2">&gt;&gt;value in mpi.h, which for our installation is 1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Is there a way of getting rid of this redefinition?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your only options are to live with the defaults installed or re- 
</span><br>
<span class="quotelev1">&gt; configure with the values you want.  For this one value, you could  
</span><br>
<span class="quotelev1">&gt; probably safely edit the #define for OMPI_WANT_CXX_BINDINGS in mpi.h,  
</span><br>
<span class="quotelev1">&gt; but that would only work in this one scenario, and even then, would  
</span><br>
<span class="quotelev1">&gt; prevent the use of the C++ bindings with that install.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We generally don't allow for overriding those configure options  
</span><br>
<span class="quotelev1">&gt; because in almost all cases, it won't result in what the user  
</span><br>
<span class="quotelev1">&gt; expects.  For instance, if the value for WANT_CXX_BINDINGS is set to  
</span><br>
<span class="quotelev1">&gt; 0 by configure, and the user tries to set it to 1, the headers and  
</span><br>
<span class="quotelev1">&gt; libraries required for the C++ bindings won't be present.  Or if you  
</span><br>
<span class="quotelev1">&gt; tried to change the WANT_EXCEPTIONS value from 0 to 1, code not built  
</span><br>
<span class="quotelev1">&gt; to handle exceptions might suddenly be expected to do so, resulting  
</span><br>
<span class="quotelev1">&gt; in very bad things.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a reason that you want to disable the C++ bindings after  
</span><br>
<span class="quotelev1">&gt; installation?  They should be absolutely harmless if you aren't using  
</span><br>
<span class="quotelev1">&gt; them.  If that isn't the case, then we need to fix whatever is  
</span><br>
<span class="quotelev1">&gt; causing your problems.
</span><br>
<p>The problem is that I am using libraries written in C but intended also 
<br>
for use in C++. The problem occurs with autopack, which is a 
<br>
message-passing library which transparently packs small messages into 
<br>
fewer larger ones for more efficient transport by MPI.
<br>
<a href="http://www-unix.mcs.anl.gov/autopack/">http://www-unix.mcs.anl.gov/autopack/</a>
<br>
The last release is 1.3 and dates back to May 2000. Now it seems 
<br>
development has started on version 1.4.
<br>
In the main header, autopack.h, mpi.h is included in a Extern C block if 
<br>
a C++ compiler is used:
<br>
#ifdef __cplusplus
<br>
extern &quot;C&quot; {
<br>
#endif  /* __cplusplus */
<br>
...
<br>
#include mpi.h&gt;
<br>
...
<br>
#ifdef __cplusplus
<br>
}
<br>
#endif  /* __cplusplus */
<br>
<p>The problem can be solved by taking the #include out of the extern C 
<br>
block, the C bindings will still be available. But that would mean I 
<br>
have to edit third party software, which I like to avoid if possible.
<br>
<p>Kind regards,
<br>
Yves
<br>
<p><pre>
-- 
Yves Reymen
K.U.Leuven - Department of Mechanical Engineering
PMA - Noise &amp; Vibration Research Group            Phone: +32-16-322523
Celestijnenlaan 300B, B-3001 Heverlee, Belgium      Fax: +32-16-322987
Disclaimer: <a href="http://www.kuleuven.be/cwis/email_disclaimer.htm">http://www.kuleuven.be/cwis/email_disclaimer.htm</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0508.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="0506.php">Brian Barrett: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<li><strong>In reply to:</strong> <a href="0506.php">Brian Barrett: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0516.php">Brian Barrett: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<li><strong>Reply:</strong> <a href="0516.php">Brian Barrett: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
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
