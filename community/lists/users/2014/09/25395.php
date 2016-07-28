<?
$subject_val = "[OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 26 20:19:17 2014" -->
<!-- isoreceived="20140927001917" -->
<!-- sent="Fri, 26 Sep 2014 17:19:14 -0700" -->
<!-- isosent="20140927001914" -->
<!-- name="Amos Anderson" -->
<!-- email="amos.anderson_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?" -->
<!-- id="582CE1B5-D921-4697-A67D-D25A51AD2E6A_at_protabit.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?<br>
<strong>From:</strong> Amos Anderson (<em>amos.anderson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-26 20:19:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25396.php">Amos Anderson: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<li><strong>Previous message:</strong> <a href="25394.php">Howard Pritchard: "Re: [OMPI users] Application hangs in 1.8.1 related to collective operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25396.php">Amos Anderson: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<li><strong>Reply:</strong> <a href="25396.php">Amos Anderson: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all --
<br>
<p>I'm trying to get a working configuration for my application and I can get OpenMPI 1.6.5 to work, while OpenMPI 1.8.2 segfaults.
<br>
<p><p>Here's how I compile OpenMPI:
<br>
<p>OPENMPI = openmpi-1.8.2
<br>
FLAGS = --enable-static
<br>
cd $(OPENMPI) ; ./configure $(FLAGS) --with-tm=/opt/torque-2.5.9/ --prefix=$(CURDIR)
<br>
<p><p>I'm able to compile openmpi successfully, and I use a bjam instruction like this to compile my program (which uses boost python boost_1_55_0):
<br>
using mpi : ../tools/openmpi/bin/mpic++ ;
<br>
<p>and I run my program in a Torque pbs script like this:
<br>
<p>/bin/rm -rf jobname.nodes
<br>
for i in `cat ${PBS_NODEFILE} | sort -u`
<br>
do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo $i slots \= `grep $i ${PBS_NODEFILE} | wc -l` &gt;&gt; jobname.nodes
<br>
done
<br>
/home/user/myapp/tools/openmpi/bin/mpirun -np 2 -hostfile jobname.nodes /home/user/myapp/myapp.exe
<br>
<p><p><p>which also compiles just fine. But when I run my program I get the segfault I printed below. When I switch to:
<br>
OPENMPI = openmpi-1.6.5
<br>
<p>then everything works as expected. (As a side question, do I need both -hostfile and --with-tm? I asked this question earlier today on this list). That is, I believe that I'm using the exact same setup in both cases, and 1.6.5 works while 1.8.2 fails. Any suggestions what I might be doing wrong?
<br>
<p>I suppose if I have a working setup I can give up even if it's with an older version... but this could be evidence of something I'll have to confront eventually.
<br>
<p>Thanks for any advice!
<br>
Amos.
<br>
<p><p><p><p>[local:27921] *** Process received signal ***
<br>
[local:27921] Signal: Segmentation fault (11)
<br>
[local:27921] Signal code: Address not mapped (1)
<br>
[local:27921] Failing at address: 0x40
<br>
[local:27921] [ 0] /lib64/libpthread.so.0[0x322180e4c0]
<br>
[local:27921] [ 1] /lib64/libc.so.6(strlen+0x30)[0x3220c78d80]
<br>
[local:27921] [ 2] /home/user/myapp/tools/openmpi/lib/libopen-pal.so.6(opal_argv_join+0x95)[0x2b87f5c4e175]
<br>
[local:27921] [ 3] /home/user/myapp/tools/openmpi/lib/libmpi.so.1(ompi_mpi_init+0x82d)[0x2b87f3c9ec0d]
<br>
[local:27921] [ 4] /home/user/myapp/tools/openmpi/lib/libmpi.so.1(MPI_Init+0xf0)[0x2b87f3cbc310]
<br>
[local:27921] [ 5] /home/user/myapp/lib/libboost_mpi.so.1.55.0(_ZN5boost3mpi11environmentC1ERiRPPcb+0x36)[0x2b87f3795826]
<br>
[local:27921] [ 6] /home/user/myapp/lib/mpi.so(_ZN5boost3mpi6python8mpi_initENS_6python4listEb+0x314)[0x2b87f30bc7b4]
<br>
[local:27921] [ 7] /home/user/myapp/lib/mpi.so(_ZN5boost3mpi6python18export_environmentEv+0xcc6)[0x2b87f30bd5f6]
<br>
[local:27921] [ 8] /home/user/myapp/lib/mpi.so(_ZN5boost3mpi6python15init_module_mpiEv+0x547)[0x2b87f30d4967]
<br>
[local:27921] [ 9] /home/user/myapp/lib/libboost_python.so.1.55.0(_ZN5boost6python21handle_exception_implENS_9function0IvEE+0x530)[0x2b87f3558430]
<br>
[local:27921] [10] /home/user/myapp/lib/libboost_python.so.1.55.0(_ZN5boost6python16handle_exceptionIPFvvEEEbT_+0x38)[0x2b87f3559798]
<br>
[local:27921] [11] /home/user/myapp/lib/libboost_python.so.1.55.0(_ZN5boost6python6detail11init_moduleEPKcPFvvE+0x63)[0x2b87f3559463]
<br>
[local:27921] [12] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(_PyImport_LoadDynamicModule+0xc2)[0x2b87e8c79282]
<br>
[local:27921] [13] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0[0x2b87e8c771a9]
<br>
[local:27921] [14] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0[0x2b87e8c776c1]
<br>
[local:27921] [15] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyImport_ImportModuleLevel+0x1b7)[0x2b87e8c77977]
<br>
[local:27921] [16] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0[0x2b87e8c57bcd]
<br>
[local:27921] [17] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyObject_Call+0x68)[0x2b87e8bb7ae8]
<br>
[local:27921] [18] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyEval_CallObjectWithKeywords+0x56)[0x2b87e8c58216]
<br>
[local:27921] [19] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyEval_EvalFrameEx+0x381c)[0x2b87e8c5c79c]
<br>
[local:27921] [20] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyEval_EvalCodeEx+0x8c9)[0x2b87e8c60c89]
<br>
[local:27921] [21] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyEval_EvalCode+0x32)[0x2b87e8c60d02]
<br>
[local:27921] [22] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyImport_ExecCodeModuleEx+0xc2)[0x2b87e8c74432]
<br>
[local:27921] [23] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0[0x2b87e8c769f0]
<br>
[local:27921] [24] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0[0x2b87e8c771a9]
<br>
[local:27921] [25] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0[0x2b87e8c77642]
<br>
[local:27921] [26] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyImport_ImportModuleLevel+0x1b7)[0x2b87e8c77977]
<br>
[local:27921] [27] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0[0x2b87e8c57bcd]
<br>
[local:27921] [28] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyObject_Call+0x68)[0x2b87e8bb7ae8]
<br>
[local:27921] [29] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyEval_CallObjectWithKeywords+0x56)[0x2b87e8c58216]
<br>
[local:27921] *** End of error message ***
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25396.php">Amos Anderson: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<li><strong>Previous message:</strong> <a href="25394.php">Howard Pritchard: "Re: [OMPI users] Application hangs in 1.8.1 related to collective operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25396.php">Amos Anderson: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<li><strong>Reply:</strong> <a href="25396.php">Amos Anderson: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
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
