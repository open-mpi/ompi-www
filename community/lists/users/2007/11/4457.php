<?
$subject_val = "Re: [OMPI users] MPI Spawn terminates application";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 07:22:30 2007" -->
<!-- isoreceived="20071109122230" -->
<!-- sent="Fri, 9 Nov 2007 07:22:23 -0500" -->
<!-- isosent="20071109122223" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Spawn terminates application" -->
<!-- id="92B4C501-95DE-4208-848D-DBAC0514180E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47325B9C.1080600_at_student.hpi.uni-potsdam.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Spawn terminates application<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-09 07:22:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4458.php">Jeff Squyres: "Re: [OMPI users] Double Standard Output for Non-MPI on ItaniumRunning Red Hat Enterprise Linux 4.0"</a>
<li><strong>Previous message:</strong> <a href="4456.php">Jeff Squyres: "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>In reply to:</strong> <a href="4447.php">Murat Knecht: "[OMPI users] MPI Spawn terminates application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4465.php">Murat Knecht: "Re: [OMPI users] MPI Spawn terminates application"</a>
<li><strong>Reply:</strong> <a href="4465.php">Murat Knecht: "Re: [OMPI users] MPI Spawn terminates application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 7, 2007, at 7:43 PM, Murat Knecht wrote:
<br>
<p><span class="quotelev1">&gt; when MPI_Spawn cannot launch an application for whatever reason, the
</span><br>
<span class="quotelev1">&gt; entire job is cancelled with some message like the following.
</span><br>
<p>That is correct; MPI states that the default error handler is  
<br>
MPI_ERRORS_ABORT.
<br>
<p><span class="quotelev1">&gt; Is there a way to handle this nicely, e.g. by throwing an exception? I
</span><br>
<p>Sure; change the default error handler on the communicator in which  
<br>
you are using in the call to COMM_SPAWN.
<br>
<p>I don't know if we have checked this particular code path to ensure  
<br>
that OMPI will be stable after this, but it might work...
<br>
<p><span class="quotelev1">&gt; understand, this does not work, when the job is first started with
</span><br>
<span class="quotelev1">&gt; mpirun, as there is no application yet to fall back on, but in case  
</span><br>
<span class="quotelev1">&gt; of a
</span><br>
<span class="quotelev1">&gt; running application, it should be possible to simply inform it that  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; spawning request failed. Then the application could begin to handle  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; error and terminate gracefully. I did enable C++ Exceptions btw, so I
</span><br>
<span class="quotelev1">&gt; guess this is not implemented. Is there a technical (e.g.  
</span><br>
<span class="quotelev1">&gt; architectural)
</span><br>
<span class="quotelev1">&gt; reason behind this, or simply a yet-to-be-added feature?
</span><br>
<p>The MPI layer is written in C; it will not throw exceptions unless you  
<br>
use the MPI C++ bindings to enable the MPI::ERRORS_THROW_EXCEPTIONS  
<br>
error handler.  Also be sure to use the right compiler flags to enable  
<br>
the C compiler to propagate C++ exceptions when you configure/build  
<br>
Open MPI via the --enable-cxx-exceptions flag (it's not enabled by  
<br>
default because it imposes a slight performance penalty).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4458.php">Jeff Squyres: "Re: [OMPI users] Double Standard Output for Non-MPI on ItaniumRunning Red Hat Enterprise Linux 4.0"</a>
<li><strong>Previous message:</strong> <a href="4456.php">Jeff Squyres: "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>In reply to:</strong> <a href="4447.php">Murat Knecht: "[OMPI users] MPI Spawn terminates application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4465.php">Murat Knecht: "Re: [OMPI users] MPI Spawn terminates application"</a>
<li><strong>Reply:</strong> <a href="4465.php">Murat Knecht: "Re: [OMPI users] MPI Spawn terminates application"</a>
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
