<?
$subject_val = "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 09:31:46 2014" -->
<!-- isoreceived="20140127143146" -->
<!-- sent="Mon, 27 Jan 2014 15:31:44 +0100" -->
<!-- isosent="20140127143144" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface" -->
<!-- id="52E66DD0.3000702_at_hpc2n.umu.se" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="52E66D11.5090602_at_hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-27 09:31:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23470.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Previous message:</strong> <a href="23468.php">&#197;ke Sandgren: "[OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>In reply to:</strong> <a href="23468.php">&#197;ke Sandgren: "[OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23470.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/27/2014 03:28 PM, &#197;ke Sandgren wrote:
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just started trying to build 1.7.4rc1 with the new Pathscale EkoPath5
</span><br>
<span class="quotelev1">&gt; compiler and stumbled onto this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When building without --enable-mpi-f08-subarray-prototype i get into
</span><br>
<span class="quotelev1">&gt; problems with ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It defines
</span><br>
<span class="quotelev1">&gt; subroutine
</span><br>
<span class="quotelev1">&gt; ompi_comm_create_keyval_f(comm_copy_attr_fn,comm_delete_attr_fn, &amp;
</span><br>
<span class="quotelev1">&gt;                                       comm_keyval,extra_state,ierror) &amp;
</span><br>
<span class="quotelev1">&gt;     BIND(C, name=&quot;ompi_comm_create_keyval_f&quot;)
</span><br>
<span class="quotelev1">&gt;     use :: mpi_f08_types, only : MPI_ADDRESS_KIND
</span><br>
<span class="quotelev1">&gt;     use :: mpi_f08_interfaces_callbacks, only : MPI_Comm_copy_attr_function
</span><br>
<span class="quotelev1">&gt;     use :: mpi_f08_interfaces_callbacks, only :
</span><br>
<span class="quotelev1">&gt; MPI_Comm_delete_attr_function
</span><br>
<span class="quotelev1">&gt;     implicit none
</span><br>
<span class="quotelev1">&gt;     OMPI_PROCEDURE(MPI_Comm_copy_attr_function) :: comm_copy_attr_fn
</span><br>
<span class="quotelev1">&gt;     OMPI_PROCEDURE(MPI_Comm_delete_attr_function) :: comm_delete_attr_fn
</span><br>
<span class="quotelev1">&gt;     INTEGER, INTENT(OUT) :: comm_keyval
</span><br>
<span class="quotelev1">&gt;     INTEGER(MPI_ADDRESS_KIND), INTENT(IN) :: extra_state
</span><br>
<span class="quotelev1">&gt;     INTEGER, INTENT(OUT) :: ierror
</span><br>
<span class="quotelev1">&gt; end subroutine ompi_comm_create_keyval_f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But at least the F2k3 specs says that
</span><br>
<span class="quotelev1">&gt; &quot;Each dummy argument of an interoperable procedure or interface must be
</span><br>
<span class="quotelev1">&gt; an interoperable variable or an interoperable procedure.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code above violates that since comm_copy_attr_fn is not
</span><br>
<span class="quotelev1">&gt; interoperable as far as i can see.
</span><br>
<span class="quotelev1">&gt; If I'm reading this wrong then please let me know...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only definition of OMPI_PROCEDURE i can find is this one in
</span><br>
<span class="quotelev1">&gt; ompi/mpi/fortran/configure-fortran-output-bottom.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if OMPI_FORTRAN_HAVE_PROCEDURE
</span><br>
<span class="quotelev1">&gt; #define OMPI_PROCEDURE(name) PROCEDURE(name)
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; #define OMPI_PROCEDURE(name) EXTERNAL
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I currently don't have any F2k8 specs to check so if this is changed
</span><br>
<span class="quotelev1">&gt; there I'll try to get this sorted in the compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>According to people with the specs around F2k8 has the same restriction:
<br>
&quot;C1255 (R1229) If proc-language-binding-spec is specified for a 
<br>
procedure, each of the procedure&#146;s dummy arguments shall be a 
<br>
nonoptional interoperable variable (15.3.5, 15.3.6) or a nonoptional 
<br>
interoperable procedure (15.3.7).&quot;
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23470.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Previous message:</strong> <a href="23468.php">&#197;ke Sandgren: "[OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>In reply to:</strong> <a href="23468.php">&#197;ke Sandgren: "[OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23470.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
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
