<?
$subject_val = "Re: [OMPI users] Using openmpi within python and crashes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 10 01:03:31 2009" -->
<!-- isoreceived="20090710050331" -->
<!-- sent="Fri, 10 Jul 2009 02:03:26 -0300" -->
<!-- isosent="20090710050326" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using openmpi within python and crashes" -->
<!-- id="e7ba66e40907092203g7bc990a0jba03906106730ef_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A562E8D.4020706_at_txcorp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using openmpi within python and crashes<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-10 01:03:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9906.php">Ashley Pittman: "Re: [OMPI users] Problems in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9904.php">John Phillips: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>In reply to:</strong> <a href="9902.php">John R. Cary: "[OMPI users] Using openmpi within python and crashes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What Python version are you using?
<br>
<p>I would use 'ctypes' modules (available in recent Python's stdlib) in
<br>
order do open the MPI shared library, next call MPI_Init() from Python
<br>
code... Of couse, I'm assuming you Fortran code can manage the case of
<br>
MPI being initialized (by using MPI_Initialized()).
<br>
<p>Regarding argc,argv, you just should pass NULL. OpenMPI is MPI-2
<br>
compiant, so it does not require the actuall cmd line args.
<br>
<p>BTW, you should use ctypes.RTLD_GLOBAL flag when opening libmpi.so.
<br>
<p>If you have trouble, feel free to mail me directly for futher help.
<br>
<p><p>BTW: Do you know about mpi4py <a href="http://mpi4py.scipy.org/">http://mpi4py.scipy.org/</a> ? It has
<br>
support for interoperate with Fortran codes. You can even use dynamic
<br>
process management, and build a python script that &quot;chats&quot; with a
<br>
Fortran program lauched by using MPI_Comm_spawn()... See for example
<br>
the master/worker Mandelbrot example at
<br>
<a href="http://mpi4py.googlecode.com/svn/trunk/demo/mandelbrot/">http://mpi4py.googlecode.com/svn/trunk/demo/mandelbrot/</a>
<br>
<p><p>On Thu, Jul 9, 2009 at 2:53 PM, John R. Cary&lt;cary_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Our scenario is that we are running python, then importing a module written
</span><br>
<span class="quotelev1">&gt; in Fortran.
</span><br>
<span class="quotelev1">&gt; We run via:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -n 8 -x PYTHONPATH -x SIDL_DLL_PATH python tokHsmNP8.py
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where the script calls into Fortran to call MPI_Init.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8 procs (but not one) we get hangs in the code (on some machines but not
</span><br>
<span class="quotelev1">&gt; others!). Hard to tell precisely where, because it is in a PETSc method.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running with valgrind
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -n 8 -x PYTHONPATH -x SIDL_DLL_PATH valgrind python tokHsmNP8.py
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gives a crash, with some salient output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==936==
</span><br>
<span class="quotelev1">&gt; ==936== Syscall param sched_setaffinity(mask) points to unaddressable
</span><br>
<span class="quotelev1">&gt; byte(s)
</span><br>
<span class="quotelev1">&gt; ==936== &#160; &#160;at 0x39336DAA79: syscall (in /lib64/libc-2.10.1.so)
</span><br>
<span class="quotelev1">&gt; ==936== &#160; &#160;by 0x10BCBD58: opal_paffinity_linux_plpa_api_probe_init (in
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.2-notorque/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==936== &#160; &#160;by 0x10BCE054: opal_paffinity_linux_plpa_init (in
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.2-notorque/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==936== &#160; &#160;by 0x10BCC9F9:
</span><br>
<span class="quotelev1">&gt; opal_paffinity_linux_plpa_have_topology_information (in
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.2-notorque/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==936== &#160; &#160;by 0x10BCBBFF: linux_module_init (in
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.2-notorque/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==936== &#160; &#160;by 0x10BC99C3: opal_paffinity_base_select (in
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.2-notorque/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==936== &#160; &#160;by 0x10B9DB83: opal_init (in
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.2-notorque/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==936== &#160; &#160;by 0x10920C6C: orte_init (in
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.2-notorque/lib/libopen-rte.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==936== &#160; &#160;by 0x10579D06: ompi_mpi_init (in
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.2-notorque/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==936== &#160; &#160;by 0x10599175: PMPI_Init (in
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.2-notorque/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==936== &#160; &#160;by 0x10E2BDF4: mpi_init (in
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.2-notorque/lib/libmpi_f77.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==936== &#160; &#160;by 0xDF30A1F: uedge_mpiinit_ (in
</span><br>
<span class="quotelev1">&gt; /home/research/cary/projects/facetsall-iter/physics/uedge/par/build/uedgeC.so)
</span><br>
<span class="quotelev1">&gt; ==936== &#160;Address 0x0 is not stack'd, malloc'd or (recently) free'd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This makes me think that our call to mpi_init is wrong. &#160;At
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;<a href="http://www.mcs.anl.gov/research/projects/mpi/www/www3/MPI_Init.html">http://www.mcs.anl.gov/research/projects/mpi/www/www3/MPI_Init.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it says
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;Because the Fortran and C versions of MPI_Init
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.mpi-forum.org/docs/mpi-11-html/node151.html#node151">http://www.mpi-forum.org/docs/mpi-11-html/node151.html#node151</a>&gt; are
</span><br>
<span class="quotelev1">&gt; different, there is a restriction on who can call MPI_Init
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.mpi-forum.org/docs/mpi-11-html/node151.html#node151">http://www.mpi-forum.org/docs/mpi-11-html/node151.html#node151</a>&gt;. The
</span><br>
<span class="quotelev1">&gt; version (Fortran or C) must match the main
</span><br>
<span class="quotelev1">&gt; &#160;program. That is, if the main program is in C, then the C version of
</span><br>
<span class="quotelev1">&gt; MPI_Init &lt;<a href="http://www.mpi-forum.org/docs/mpi-11-html/node151.html#node151">http://www.mpi-forum.org/docs/mpi-11-html/node151.html#node151</a>&gt;
</span><br>
<span class="quotelev1">&gt; must be called. If the main program is in Fortran, the Fortran version must
</span><br>
<span class="quotelev1">&gt; be called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should I infer from this that since python is a C code, one must call the C
</span><br>
<span class="quotelev1">&gt; version of MPI_Init (with argc, argv)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or since the module is written mostly in Fortran with mpi calls of only the
</span><br>
<span class="quotelev1">&gt; Fortran variety, I can initialize
</span><br>
<span class="quotelev1">&gt; with the Fortran MPI_Init?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.....John Cary
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9906.php">Ashley Pittman: "Re: [OMPI users] Problems in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9904.php">John Phillips: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>In reply to:</strong> <a href="9902.php">John R. Cary: "[OMPI users] Using openmpi within python and crashes"</a>
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
