<?
$subject_val = "Re: [OMPI users] MPI Spawn terminates application";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 14 16:53:32 2007" -->
<!-- isoreceived="20071114215332" -->
<!-- sent="Wed, 14 Nov 2007 22:53:30 +0100" -->
<!-- isosent="20071114215330" -->
<!-- name="Murat Knecht" -->
<!-- email="murat.knecht_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Spawn terminates application" -->
<!-- id="473B6E5A.1070607_at_student.hpi.uni-potsdam.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="92B4C501-95DE-4208-848D-DBAC0514180E_at_cisco.com" -->
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
<strong>From:</strong> Murat Knecht (<em>murat.knecht_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-14 16:53:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4466.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
<li><strong>Previous message:</strong> <a href="4464.php">Brock Palen: "Re: [OMPI users] OpenMPI - compilation"</a>
<li><strong>In reply to:</strong> <a href="4457.php">Jeff Squyres: "Re: [OMPI users] MPI Spawn terminates application"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, you were right. I did a series of Spawns and consecutive Merges
<br>
and forgot to set the exception handler with the newly created
<br>
intra-communicators. Since these properties obviously are not inherited
<br>
(which would be kind of hard considering that there are multiple
<br>
communicators to be merged), the default non-exception-throwing handler
<br>
was installed.
<br>
<p>Thanks!
<br>
<p>Murat
<br>
<p><p>Jeff Squyres schrieb:
<br>
<span class="quotelev1">&gt; On Nov 7, 2007, at 7:43 PM, Murat Knecht wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; when MPI_Spawn cannot launch an application for whatever reason, the
</span><br>
<span class="quotelev2">&gt;&gt; entire job is cancelled with some message like the following.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is correct; MPI states that the default error handler is  
</span><br>
<span class="quotelev1">&gt; MPI_ERRORS_ABORT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to handle this nicely, e.g. by throwing an exception? I
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure; change the default error handler on the communicator in which  
</span><br>
<span class="quotelev1">&gt; you are using in the call to COMM_SPAWN.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if we have checked this particular code path to ensure  
</span><br>
<span class="quotelev1">&gt; that OMPI will be stable after this, but it might work...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; understand, this does not work, when the job is first started with
</span><br>
<span class="quotelev2">&gt;&gt; mpirun, as there is no application yet to fall back on, but in case  
</span><br>
<span class="quotelev2">&gt;&gt; of a
</span><br>
<span class="quotelev2">&gt;&gt; running application, it should be possible to simply inform it that  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; spawning request failed. Then the application could begin to handle  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; error and terminate gracefully. I did enable C++ Exceptions btw, so I
</span><br>
<span class="quotelev2">&gt;&gt; guess this is not implemented. Is there a technical (e.g.  
</span><br>
<span class="quotelev2">&gt;&gt; architectural)
</span><br>
<span class="quotelev2">&gt;&gt; reason behind this, or simply a yet-to-be-added feature?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI layer is written in C; it will not throw exceptions unless you  
</span><br>
<span class="quotelev1">&gt; use the MPI C++ bindings to enable the MPI::ERRORS_THROW_EXCEPTIONS  
</span><br>
<span class="quotelev1">&gt; error handler.  Also be sure to use the right compiler flags to enable  
</span><br>
<span class="quotelev1">&gt; the C compiler to propagate C++ exceptions when you configure/build  
</span><br>
<span class="quotelev1">&gt; Open MPI via the --enable-cxx-exceptions flag (it's not enabled by  
</span><br>
<span class="quotelev1">&gt; default because it imposes a slight performance penalty).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4465/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4466.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
<li><strong>Previous message:</strong> <a href="4464.php">Brock Palen: "Re: [OMPI users] OpenMPI - compilation"</a>
<li><strong>In reply to:</strong> <a href="4457.php">Jeff Squyres: "Re: [OMPI users] MPI Spawn terminates application"</a>
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
