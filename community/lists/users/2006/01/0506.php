<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 16 11:59:44 2006" -->
<!-- isoreceived="20060116165944" -->
<!-- sent="Mon, 16 Jan 2006 11:59:37 -0500" -->
<!-- isosent="20060116165937" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS" -->
<!-- id="F97A5B57-8864-4A25-8660-54E8816A2A63_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43CBCAB1.4010507_at_mech.kuleuven.be" -->
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
<strong>Date:</strong> 2006-01-16 11:59:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0507.php">Yves Reymen: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<li><strong>Previous message:</strong> <a href="0505.php">Yves Reymen: "[O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<li><strong>In reply to:</strong> <a href="0505.php">Yves Reymen: "[O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0507.php">Yves Reymen: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<li><strong>Reply:</strong> <a href="0507.php">Yves Reymen: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 16, 2006, at 11:32 AM, Yves Reymen wrote:
<br>
<p><span class="quotelev1">&gt; Recently openmpi v1.0.1 was installed on our cluster. It contains all
</span><br>
<span class="quotelev1">&gt; parameters of ompi_config.h within a #ifndef OMPI_CONFIG_H. I am
</span><br>
<span class="quotelev1">&gt; wondering how it is possible to give one of these parameters an other
</span><br>
<span class="quotelev1">&gt; value after everthing is configured and installed, given the fact that
</span><br>
<span class="quotelev1">&gt; no ompi_config.h is present in the installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Take for instance the OMPI_WANT_CXX_BINDINGS that decides if you  
</span><br>
<span class="quotelev1">&gt; want to
</span><br>
<span class="quotelev1">&gt; include de C++ bindings in mpicxx.h or not. If I set it on my compile
</span><br>
<span class="quotelev1">&gt; line as -DOMPI_WANT_CXX_BINDINGS=0. It will always be redefined to the
</span><br>
<span class="quotelev1">&gt; value in mpi.h, which for our installation is 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way of getting rid of this redefinition?
</span><br>
<p>Your only options are to live with the defaults installed or re- 
<br>
configure with the values you want.  For this one value, you could  
<br>
probably safely edit the #define for OMPI_WANT_CXX_BINDINGS in mpi.h,  
<br>
but that would only work in this one scenario, and even then, would  
<br>
prevent the use of the C++ bindings with that install.
<br>
<p>We generally don't allow for overriding those configure options  
<br>
because in almost all cases, it won't result in what the user  
<br>
expects.  For instance, if the value for WANT_CXX_BINDINGS is set to  
<br>
0 by configure, and the user tries to set it to 1, the headers and  
<br>
libraries required for the C++ bindings won't be present.  Or if you  
<br>
tried to change the WANT_EXCEPTIONS value from 0 to 1, code not built  
<br>
to handle exceptions might suddenly be expected to do so, resulting  
<br>
in very bad things.
<br>
<p>Is there a reason that you want to disable the C++ bindings after  
<br>
installation?  They should be absolutely harmless if you aren't using  
<br>
them.  If that isn't the case, then we need to fix whatever is  
<br>
causing your problems.
<br>
<p><p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0507.php">Yves Reymen: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<li><strong>Previous message:</strong> <a href="0505.php">Yves Reymen: "[O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<li><strong>In reply to:</strong> <a href="0505.php">Yves Reymen: "[O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0507.php">Yves Reymen: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<li><strong>Reply:</strong> <a href="0507.php">Yves Reymen: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
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
