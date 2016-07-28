<?
$subject_val = "[OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 29 18:15:41 2009" -->
<!-- isoreceived="20091129231541" -->
<!-- sent="Mon, 30 Nov 2009 12:15:35 +1300" -->
<!-- isosent="20091129231535" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="[OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="6156f1e43e69078ee96878fb10a2b60b.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Pointers for understanding failure messages on NetBSD<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Pointers%20for%20understanding%20failure%20messages%20on%20NetBSD"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-11-29 18:15:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11290.php">Ondrej Glembek: "[OMPI users] Trouble with SGE integration"</a>
<li><strong>Previous message:</strong> <a href="11288.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11344.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11344.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11459.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I recently compiled OpenMPI 1.3.3 for a NetBSD platform
<br>
as part of an attempt to get some MPI-based codes running
<br>
on the SGE cycle stealing grid we have in the School here.
<br>
<p>I should point out that this has not been done within the
<br>
pkgsrc build system as yet but that I found I was able to
<br>
get a working environment by starting out with:
<br>
<p>./configure --prefix=/vol/grid/pkg/openmpi-1.3.3 \
<br>
&nbsp;&nbsp;--with-sge --disable-dlopen  --enable-contrib-no-build=vt
<br>
<p><p><p>OK, following a recent rebuild of the underlying NetBSD OS
<br>
on the machines which participate in our grid, I am now seeing
<br>
the following error message when trying to run a simple mpirun
<br>
on a single box:
<br>
<p>$ mpirun -n 4 hello_f77
<br>
[somebox.ecs.vuw.ac.nz:04414] opal_ifinit: ioctl(SIOCGIFFLAGS) failed with
<br>
errno=6
<br>
&nbsp;Hello, world, I am  0 of  4
<br>
&nbsp;Hello, world, I am  1 of  4
<br>
&nbsp;Hello, world, I am  2 of  4
<br>
&nbsp;Hello, world, I am  3 of  4
<br>
<p>Whilst this runs, I was not seeing the error before the OS rebuild.
<br>
<p><p>When running on a &quot;server&quot; machine within the grid, a machine I am told
<br>
should not be any different to the workstation I was using above in
<br>
respect of user environment, I get a different error and find that the
<br>
job does not run at all.
<br>
<p>This case seems to producean error message that is oft reported within
<br>
the OpenMPI community:
<br>
<p>$ mpirun -n 4 hello_f77
<br>
[somebox2.ecs.vuw.ac.nz:25244] [[51186,0],0] ORTE_ERROR_LOG: Error in file
<br>
ess_hnp_module.c at line 150
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
...
<br>
<p>&nbsp;&nbsp;orte_rml_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[somebox2.ecs.vuw.ac.nz:25244] [[51186,0],0] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_init.c at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
...
<br>
<p><p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[somebox2.ecs.vuw.ac.nz:25244] [[51186,0],0] ORTE_ERROR_LOG: Error in file
<br>
orterun.c at line 473
<br>
<p><p><p>Anyone like to suggest what I might do to better understand and so
<br>
possibly correct these issues?
<br>
<p>Kevin
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11290.php">Ondrej Glembek: "[OMPI users] Trouble with SGE integration"</a>
<li><strong>Previous message:</strong> <a href="11288.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11344.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11344.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11459.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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
