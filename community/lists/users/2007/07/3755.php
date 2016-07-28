<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 25 03:09:28 2007" -->
<!-- isoreceived="20070725070928" -->
<!-- sent="Wed, 25 Jul 2007 09:09:23 +0200" -->
<!-- isosent="20070725070923" -->
<!-- name="Dirk Clasen" -->
<!-- email="d.clasen_at_[hidden]" -->
<!-- subject="[OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25" -->
<!-- id="46A6F723.6000901_at_tu-bs.de" -->
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
<strong>From:</strong> Dirk Clasen (<em>d.clasen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-25 03:09:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3756.php">Jeff Squyres: "Re: [OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<li><strong>Previous message:</strong> <a href="3754.php">Francesco Pietra: "Re: [OMPI users] openmpi support ignored"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3756.php">Jeff Squyres: "Re: [OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<li><strong>Reply:</strong> <a href="3756.php">Jeff Squyres: "Re: [OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm having trouble to install openmpi 1.2.3 on Linux ia32 using the 
<br>
Intel 10.0.025 compilers.
<br>
<p>There was a similar thread before:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2007/07/3570.php">http://www.open-mpi.org/community/lists/users/2007/07/3570.php</a>
<br>
but I can't install the em64t version to solve the problem ...
<br>
<p>mpicc and all the other tools crash at exactly the same position when I 
<br>
start them in the debugger (gdb as well as idb):
<br>
<p>int
<br>
opal_init_util(void)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int ret;
<br>
&nbsp;&nbsp;&nbsp;char *error = NULL;
<br>
<p>--&gt; if( ++opal_initialized != 1 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( opal_initialized &lt; 1 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;(....)
<br>
}
<br>
<p><p>Regards,
<br>
&nbsp;&nbsp;&nbsp;Dirk
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3756.php">Jeff Squyres: "Re: [OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<li><strong>Previous message:</strong> <a href="3754.php">Francesco Pietra: "Re: [OMPI users] openmpi support ignored"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3756.php">Jeff Squyres: "Re: [OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<li><strong>Reply:</strong> <a href="3756.php">Jeff Squyres: "Re: [OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
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
