<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 27 09:39:56 2007" -->
<!-- isoreceived="20070327133956" -->
<!-- sent="Tue, 27 Mar 2007 09:37:43 -0400" -->
<!-- isosent="20070327133743" -->
<!-- name="de Almeida, Valmor F." -->
<!-- email="dealmeidav_at_[hidden]" -->
<!-- subject="Re: [OMPI users] very long linking time with mixed-language libraries" -->
<!-- id="D2D7D9FE2492524A925313E2D82E1B5304D88C23_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="92367675-4D19-48FA-BE20-6D8EA418D6C7_at_cisco.com" -->
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
<strong>From:</strong> de Almeida, Valmor F. (<em>dealmeidav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-27 09:37:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2930.php">Justin Bronder: "[OMPI users] Open-MPI 1.2 and GM"</a>
<li><strong>Previous message:</strong> <a href="2928.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>In reply to:</strong> <a href="2927.php">Jeff Squyres: "Re: [OMPI users] very long linking time with mixed-language libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
On
<br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I notice that you are using the &quot;medium&quot; sized F90 bindings.  Do
</span><br>
<span class="quotelev1">&gt; these FAQ entries help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=mpi-apps#f90-mpi-slow-compiles">http://www.open-mpi.org/faq/?category=mpi-apps#f90-mpi-slow-compiles</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<a href="http://www.open-mpi.org/faq/?category=building#f90-bindings-slow-compile">http://www.open-mpi.org/faq/?category=building#f90-bindings-slow-compile</a>
<br>
<span class="quotelev1">&gt; 
</span><br>
<p>My understanding is that this is a problem with building the mpi library
<br>
and not with compiling a user's code or library. In fact compiling my
<br>
f90 codes is quite fast as compared with the c++ code. The
<br>
time-consuming step is liking them all with mpic++. My application is a
<br>
mix of c++ and f90 parallel codes and the main program is written in
<br>
c++. Therefore mpic++ is used as the last phase to compile main and
<br>
create the application. This last liking phase is very slow and slows
<br>
down debugging incredibly because I don't know about the unresolved
<br>
symbols until I do this final linking.
<br>
<p>Thanks,
<br>
<p><pre>
--
Valmor
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2930.php">Justin Bronder: "[OMPI users] Open-MPI 1.2 and GM"</a>
<li><strong>Previous message:</strong> <a href="2928.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>In reply to:</strong> <a href="2927.php">Jeff Squyres: "Re: [OMPI users] very long linking time with mixed-language libraries"</a>
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
