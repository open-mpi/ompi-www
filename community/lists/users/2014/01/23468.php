<?
$subject_val = "[OMPI users] openmpi 1.7.4rc1 and f08 interface";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 09:28:36 2014" -->
<!-- isoreceived="20140127142836" -->
<!-- sent="Mon, 27 Jan 2014 15:28:33 +0100" -->
<!-- isosent="20140127142833" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.7.4rc1 and f08 interface" -->
<!-- id="52E66D11.5090602_at_hpc2n.umu.se" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.7.4rc1 and f08 interface<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-27 09:28:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23469.php">흆e Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Previous message:</strong> <a href="23467.php">Reuti: "Re: [OMPI users] Open MPI and multiple Torque versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23469.php">흆e Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Reply:</strong> <a href="23469.php">흆e Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Reply:</strong> <a href="23470.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I just started trying to build 1.7.4rc1 with the new Pathscale EkoPath5 
<br>
compiler and stumbled onto this.
<br>
<p>When building without --enable-mpi-f08-subarray-prototype i get into 
<br>
problems with ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h
<br>
<p>It defines
<br>
subroutine 
<br>
ompi_comm_create_keyval_f(comm_copy_attr_fn,comm_delete_attr_fn, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm_keyval,extra_state,ierror) &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;BIND(C, name=&quot;ompi_comm_create_keyval_f&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;use :: mpi_f08_types, only : MPI_ADDRESS_KIND
<br>
&nbsp;&nbsp;&nbsp;&nbsp;use :: mpi_f08_interfaces_callbacks, only : MPI_Comm_copy_attr_function
<br>
&nbsp;&nbsp;&nbsp;&nbsp;use :: mpi_f08_interfaces_callbacks, only : 
<br>
MPI_Comm_delete_attr_function
<br>
&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OMPI_PROCEDURE(MPI_Comm_copy_attr_function) :: comm_copy_attr_fn
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OMPI_PROCEDURE(MPI_Comm_delete_attr_function) :: comm_delete_attr_fn
<br>
&nbsp;&nbsp;&nbsp;&nbsp;INTEGER, INTENT(OUT) :: comm_keyval
<br>
&nbsp;&nbsp;&nbsp;&nbsp;INTEGER(MPI_ADDRESS_KIND), INTENT(IN) :: extra_state
<br>
&nbsp;&nbsp;&nbsp;&nbsp;INTEGER, INTENT(OUT) :: ierror
<br>
end subroutine ompi_comm_create_keyval_f
<br>
<p>But at least the F2k3 specs says that
<br>
&quot;Each dummy argument of an interoperable procedure or interface must be 
<br>
an interoperable variable or an interoperable procedure.&quot;
<br>
<p>The code above violates that since comm_copy_attr_fn is not 
<br>
interoperable as far as i can see.
<br>
If I'm reading this wrong then please let me know...
<br>
<p>The only definition of OMPI_PROCEDURE i can find is this one in 
<br>
ompi/mpi/fortran/configure-fortran-output-bottom.h
<br>
<p>#if OMPI_FORTRAN_HAVE_PROCEDURE
<br>
#define OMPI_PROCEDURE(name) PROCEDURE(name)
<br>
#else
<br>
#define OMPI_PROCEDURE(name) EXTERNAL
<br>
#endif
<br>
<p>I currently don't have any F2k8 specs to check so if this is changed 
<br>
there I'll try to get this sorted in the compiler.
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
<li><strong>Next message:</strong> <a href="23469.php">흆e Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Previous message:</strong> <a href="23467.php">Reuti: "Re: [OMPI users] Open MPI and multiple Torque versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23469.php">흆e Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Reply:</strong> <a href="23469.php">흆e Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Reply:</strong> <a href="23470.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
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
