<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 13:28:19 2014" -->
<!-- isoreceived="20140929172819" -->
<!-- sent="Mon, 29 Sep 2014 10:28:15 -0700" -->
<!-- isosent="20140929172815" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?" -->
<!-- id="5178C48E-7825-4230-A63B-D7FCF1D768AC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AF1AA1A7-C1DE-4259-8A1A-38506F044FCD_at_protabit.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-29 13:28:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25402.php">Ralph Castain: "Re: [OMPI users] --prefix, segfaulting"</a>
<li><strong>Previous message:</strong> <a href="25400.php">Gustavo Correa: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>In reply to:</strong> <a href="25396.php">Amos Anderson: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25403.php">Amos Anderson: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<li><strong>Reply:</strong> <a href="25403.php">Amos Anderson: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you pass us the actual mpirun command line being executed? Especially need to see the argv being passed to your application.
<br>
<p><p>On Sep 27, 2014, at 7:09 PM, Amos Anderson &lt;amos.anderson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, I've confirmed that the segfault also happens with OpenMPI 1.7.5. Also, I have some gdb output (from 1.7.5) for your perusal, including a printout of some of the variables' values.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Starting program: /home/user/myapp/tools/python/bin/python test/regression/regression-test.py test/regression/regression-jobs
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 0x00002aaaabc8df1e in opal_argv_join (argv=0xa39398, delimiter=32) at argv.c:299
</span><br>
<span class="quotelev1">&gt; 299	    str_len += strlen(*p) + 1;
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x00002aaaabc8df1e in opal_argv_join (argv=0xa39398, delimiter=32) at argv.c:299
</span><br>
<span class="quotelev1">&gt; #1  0x00002aaaaab2ce4e in ompi_mpi_init (argc=2, argv=0xa39390, requested=0, provided=0x7fffffffba98) at runtime/ompi_mpi_init.c:450
</span><br>
<span class="quotelev1">&gt; #2  0x00002aaaaab63e39 in PMPI_Init (argc=0x7fffffffbb8c, argv=0x7fffffffbb80) at pinit.c:84
</span><br>
<span class="quotelev1">&gt; #3  0x00002aaab7b965d6 in boost::mpi::environment::environment (this=0xa3a1d0, argc=@0x7fffffffbb8c, argv=@0x7fffffffbb80, abort_on_exception=true)
</span><br>
<span class="quotelev1">&gt;    at ../tools/boost/libs/mpi/src/environment.cpp:98
</span><br>
<span class="quotelev1">&gt; #4  0x00002aaabc7b311d in boost::mpi::python::mpi_init (python_argv=..., abort_on_exception=true) at ../tools/boost/libs/mpi/src/python/py_environment.cpp:60
</span><br>
<span class="quotelev1">&gt; #5  0x00002aaabc7b33fb in boost::mpi::python::export_environment () at ../tools/boost/libs/mpi/src/python/py_environment.cpp:94
</span><br>
<span class="quotelev1">&gt; #6  0x00002aaabc7d5ab5 in boost::mpi::python::init_module_mpi () at ../tools/boost/libs/mpi/src/python/module.cpp:44
</span><br>
<span class="quotelev1">&gt; #7  0x00002aaab792a2f2 in boost::detail::function::void_function_ref_invoker0&lt;void (*)(), void&gt;::invoke (function_obj_ptr=...)
</span><br>
<span class="quotelev1">&gt;    at ../tools/boost/boost/function/function_template.hpp:188
</span><br>
<span class="quotelev1">&gt; #8  0x00002aaab7929e6b in boost::function0&lt;void&gt;::operator() (this=0x7fffffffc110) at ../tools/boost/boost/function/function_template.hpp:767
</span><br>
<span class="quotelev1">&gt; #9  0x00002aaab7928f11 in boost::python::handle_exception_impl (f=...) at ../tools/boost/libs/python/src/errors.cpp:25
</span><br>
<span class="quotelev1">&gt; #10 0x00002aaab792a54f in boost::python::handle_exception&lt;void (*)()&gt; (f=0x2aaabc7d5746 &lt;boost::mpi::python::init_module_mpi()&gt;) at ../tools/boost/boost/python/errors.hpp:29
</span><br>
<span class="quotelev1">&gt; #11 0x00002aaab792a1d9 in boost::python::detail::(anonymous namespace)::init_module_in_scope (m=0x2aaabc617f68, 
</span><br>
<span class="quotelev1">&gt;    init_function=0x2aaabc7d5746 &lt;boost::mpi::python::init_module_mpi()&gt;) at ../tools/boost/libs/python/src/module.cpp:24
</span><br>
<span class="quotelev1">&gt; #12 0x00002aaab792a26c in boost::python::detail::init_module (name=0x2aaabc7f7f4d &quot;mpi&quot;, init_function=0x2aaabc7d5746 &lt;boost::mpi::python::init_module_mpi()&gt;)
</span><br>
<span class="quotelev1">&gt;    at ../tools/boost/libs/python/src/module.cpp:59
</span><br>
<span class="quotelev1">&gt; #13 0x00002aaabc7d5b2b in boost::mpi::python::initmpi () at ../tools/boost/libs/mpi/src/python/module.cpp:34
</span><br>
<span class="quotelev1">&gt; #14 0x00002aaaab27e095 in _PyImport_LoadDynamicModule (name=0xac9435 &quot;mpi&quot;, pathname=0xb08c60 &quot;/home/user/myapp/lib/mpi.so&quot;, fp=0xaca450) at ./Python/importdl.c:53
</span><br>
<span class="quotelev1">&gt; #15 0x00002aaaab279fd4 in load_module (name=0xac9435 &quot;mpi&quot;, fp=0xaca450, pathname=0xb08c60 &quot;/home/user/myapp/lib/mpi.so&quot;, type=3, loader=0x0) at Python/import.c:1915
</span><br>
<span class="quotelev1">&gt; #16 0x00002aaaab27c2e8 in import_submodule (mod=0x2aaaab533a20, subname=0xac9435 &quot;mpi&quot;, fullname=0xac9435 &quot;mpi&quot;) at Python/import.c:2700
</span><br>
<span class="quotelev1">&gt; #17 0x00002aaaab27b8fa in load_next (mod=0x2aaab0f075a8, altmod=0x2aaaab533a20, p_name=0x7fffffffc3f8, buf=0xac9430 &quot;util.mpi&quot;, p_buflen=0x7fffffffc408)
</span><br>
<span class="quotelev1">&gt;    at Python/import.c:2519
</span><br>
<span class="quotelev1">&gt; #18 0x00002aaaab27a98d in import_module_level (name=0x0, globals=0xe95a70, locals=0xe95a70, fromlist=0x2aaaab533a20, level=-1) at Python/import.c:2224
</span><br>
<span class="quotelev1">&gt; #19 0x00002aaaab27aeda in PyImport_ImportModuleLevel (name=0x2aaab0f00964 &quot;mpi&quot;, globals=0xe95a70, locals=0xe95a70, fromlist=0x2aaaab533a20, level=-1) at Python/import.c:2288
</span><br>
<span class="quotelev1">&gt; #20 0x00002aaaab2419c4 in builtin___import__ (self=0x0, args=0x2aaabc6211f8, kwds=0x0) at Python/bltinmodule.c:49
</span><br>
<span class="quotelev1">&gt; #21 0x00002aaaab1b19c7 in PyCFunction_Call (func=0x2aaaabf85510, arg=0x2aaabc6211f8, kw=0x0) at Objects/methodobject.c:85
</span><br>
<span class="quotelev1">&gt; #22 0x00002aaaab14d673 in PyObject_Call (func=0x2aaaabf85510, arg=0x2aaabc6211f8, kw=0x0) at Objects/abstract.c:2529
</span><br>
<span class="quotelev1">&gt; #23 0x00002aaaab25ad03 in PyEval_CallObjectWithKeywords (func=0x2aaaabf85510, arg=0x2aaabc6211f8, kw=0x0) at Python/ceval.c:3890
</span><br>
<span class="quotelev1">&gt; #24 0x00002aaaab2543e5 in PyEval_EvalFrameEx (f=0xe8aef0, throwflag=0) at Python/ceval.c:2333
</span><br>
<span class="quotelev1">&gt; #25 0x00002aaaab258b7e in PyEval_EvalCodeEx (co=0x2aaabc61ce00, globals=0xe95a70, locals=0xe95a70, args=0x0, argcount=0, kws=0x0, kwcount=0, defs=0x0, defcount=0, 
</span><br>
<span class="quotelev1">&gt;    closure=0x0) at Python/ceval.c:3253
</span><br>
<span class="quotelev1">&gt; #26 0x00002aaaab24b5ce in PyEval_EvalCode (co=0x2aaabc61ce00, globals=0xe95a70, locals=0xe95a70) at Python/ceval.c:667
</span><br>
<span class="quotelev1">&gt; #27 0x00002aaaab2779e2 in PyImport_ExecCodeModuleEx (name=0xaa9080 &quot;util.myappMPI&quot;, co=0x2aaabc61ce00, pathname=0xe7d380 &quot;/home/user/myapp/src/util/myappMPI.pyc&quot;)
</span><br>
<span class="quotelev1">&gt;    at Python/import.c:709
</span><br>
<span class="quotelev1">&gt; #28 0x00002aaaab278629 in load_source_module (name=0xaa9080 &quot;util.myappMPI&quot;, pathname=0xe7d380 &quot;/home/user/myapp/src/util/myappMPI.pyc&quot;, fp=0x76eb00)
</span><br>
<span class="quotelev1">&gt;    at Python/import.c:1099
</span><br>
<span class="quotelev1">&gt; #29 0x00002aaaab279fa0 in load_module (name=0xaa9080 &quot;util.myappMPI&quot;, fp=0x76eb00, pathname=0x80fe00 &quot;/home/user/myapp/src/util/myappMPI.py&quot;, type=1, loader=0x0)
</span><br>
<span class="quotelev1">&gt;    at Python/import.c:1906
</span><br>
<span class="quotelev1">&gt; #30 0x00002aaaab27c2e8 in import_submodule (mod=0x2aaab0f075a8, subname=0xaa9085 &quot;myappMPI&quot;, fullname=0xaa9080 &quot;util.myappMPI&quot;) at Python/import.c:2700
</span><br>
<span class="quotelev1">&gt; #31 0x00002aaaab27b860 in load_next (mod=0x2aaab0f075a8, altmod=0x2aaaab533a20, p_name=0x7fffffffcd98, buf=0xaa9080 &quot;util.myappMPI&quot;, p_buflen=0x7fffffffcda8)
</span><br>
<span class="quotelev1">&gt;    at Python/import.c:2515
</span><br>
<span class="quotelev1">&gt; #32 0x00002aaaab27a98d in import_module_level (name=0x0, globals=0x7a3c70, locals=0x7a3c70, fromlist=0x2aaaaf6f53e0, level=-1) at Python/import.c:2224
</span><br>
<span class="quotelev1">&gt; #33 0x00002aaaab27aeda in PyImport_ImportModuleLevel (name=0x2aaaaf6e8854 &quot;myappMPI&quot;, globals=0x7a3c70, locals=0x7a3c70, fromlist=0x2aaaaf6f53e0, level=-1)
</span><br>
<span class="quotelev1">&gt;    at Python/import.c:2288
</span><br>
<span class="quotelev1">&gt; #34 0x00002aaaab2419c4 in builtin___import__ (self=0x0, args=0x2aaab0a9f7d0, kwds=0x0) at Python/bltinmodule.c:49
</span><br>
<span class="quotelev1">&gt; #35 0x00002aaaab1b19c7 in PyCFunction_Call (func=0x2aaaabf85510, arg=0x2aaab0a9f7d0, kw=0x0) at Objects/methodobject.c:85
</span><br>
<span class="quotelev1">&gt; #36 0x00002aaaab14d673 in PyObject_Call (func=0x2aaaabf85510, arg=0x2aaab0a9f7d0, kw=0x0) at Objects/abstract.c:2529
</span><br>
<span class="quotelev1">&gt; #37 0x00002aaaab25ad03 in PyEval_CallObjectWithKeywords (func=0x2aaaabf85510, arg=0x2aaab0a9f7d0, kw=0x0) at Python/ceval.c:3890
</span><br>
<span class="quotelev1">&gt; #38 0x00002aaaab2543e5 in PyEval_EvalFrameEx (f=0x79d000, throwflag=0) at Python/ceval.c:2333
</span><br>
<span class="quotelev1">&gt; #39 0x00002aaaab258b7e in PyEval_EvalCodeEx (co=0x2aaab0253880, globals=0x7a3c70, locals=0x7a3c70, args=0x0, argcount=0, kws=0x0, kwcount=0, defs=0x0, defcount=0, 
</span><br>
<span class="quotelev1">&gt;    closure=0x0) at Python/ceval.c:3253
</span><br>
<span class="quotelev1">&gt; #40 0x00002aaaab24b5ce in PyEval_EvalCode (co=0x2aaab0253880, globals=0x7a3c70, locals=0x7a3c70) at Python/ceval.c:667
</span><br>
<span class="quotelev1">&gt; #41 0x00002aaaab2779e2 in PyImport_ExecCodeModuleEx (name=0x7153a0 &quot;util&quot;, co=0x2aaab0253880, pathname=0x7e98a0 &quot;/home/user/myapp/src/util/__init__.pyc&quot;)
</span><br>
<span class="quotelev1">&gt;    at Python/import.c:709
</span><br>
<span class="quotelev1">&gt; #42 0x00002aaaab278629 in load_source_module (name=0x7153a0 &quot;util&quot;, pathname=0x7e98a0 &quot;/home/user/myapp/src/util/__init__.pyc&quot;, fp=0x6fe020) at Python/import.c:1099
</span><br>
<span class="quotelev1">&gt; #43 0x00002aaaab279fa0 in load_module (name=0x7153a0 &quot;util&quot;, fp=0x6fe020, pathname=0x755e40 &quot;/home/user/myapp/src/util/__init__.py&quot;, type=1, loader=0x0)
</span><br>
<span class="quotelev1">&gt;    at Python/import.c:1906
</span><br>
<span class="quotelev1">&gt; ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
</span><br>
<span class="quotelev1">&gt; #44 0x00002aaaab2788ef in load_package (name=0x7153a0 &quot;util&quot;, pathname=0x703390 &quot;/home/user/myapp/src/util&quot;) at Python/import.c:1166
</span><br>
<span class="quotelev1">&gt; #45 0x00002aaaab279fea in load_module (name=0x7153a0 &quot;util&quot;, fp=0x0, pathname=0x703390 &quot;/home/user/myapp/src/util&quot;, type=5, loader=0x0) at Python/import.c:1920
</span><br>
<span class="quotelev1">&gt; #46 0x00002aaaab27c2e8 in import_submodule (mod=0x2aaaab533a20, subname=0x7153a0 &quot;util&quot;, fullname=0x7153a0 &quot;util&quot;) at Python/import.c:2700
</span><br>
<span class="quotelev1">&gt; #47 0x00002aaaab27b860 in load_next (mod=0x2aaaab533a20, altmod=0x2aaaab533a20, p_name=0x7fffffffd818, buf=0x7153a0 &quot;util&quot;, p_buflen=0x7fffffffd828) at Python/import.c:2515
</span><br>
<span class="quotelev1">&gt; #48 0x00002aaaab27a98d in import_module_level (name=0x2aaaac0e0f59 &quot;myappSubmission&quot;, globals=0x6443c0, locals=0x6443c0, fromlist=0x2aaaac0f1760, level=-1)
</span><br>
<span class="quotelev1">&gt;    at Python/import.c:2224
</span><br>
<span class="quotelev1">&gt; #49 0x00002aaaab27aeda in PyImport_ImportModuleLevel (name=0x2aaaac0e0f54 &quot;util.myappSubmission&quot;, globals=0x6443c0, locals=0x6443c0, fromlist=0x2aaaac0f1760, level=-1)
</span><br>
<span class="quotelev1">&gt;    at Python/import.c:2288
</span><br>
<span class="quotelev1">&gt; #50 0x00002aaaab2419c4 in builtin___import__ (self=0x0, args=0x2aaaac0dbb00, kwds=0x0) at Python/bltinmodule.c:49
</span><br>
<span class="quotelev1">&gt; #51 0x00002aaaab1b19c7 in PyCFunction_Call (func=0x2aaaabf85510, arg=0x2aaaac0dbb00, kw=0x0) at Objects/methodobject.c:85
</span><br>
<span class="quotelev1">&gt; #52 0x00002aaaab14d673 in PyObject_Call (func=0x2aaaabf85510, arg=0x2aaaac0dbb00, kw=0x0) at Objects/abstract.c:2529
</span><br>
<span class="quotelev1">&gt; #53 0x00002aaaab25ad03 in PyEval_CallObjectWithKeywords (func=0x2aaaabf85510, arg=0x2aaaac0dbb00, kw=0x0) at Python/ceval.c:3890
</span><br>
<span class="quotelev1">&gt; #54 0x00002aaaab2543e5 in PyEval_EvalFrameEx (f=0x71a1a0, throwflag=0) at Python/ceval.c:2333
</span><br>
<span class="quotelev1">&gt; #55 0x00002aaaab258b7e in PyEval_EvalCodeEx (co=0x2aaaac0dd720, globals=0x6443c0, locals=0x6443c0, args=0x0, argcount=0, kws=0x0, kwcount=0, defs=0x0, defcount=0, 
</span><br>
<span class="quotelev1">&gt;    closure=0x0) at Python/ceval.c:3253
</span><br>
<span class="quotelev1">&gt; #56 0x00002aaaab24b5ce in PyEval_EvalCode (co=0x2aaaac0dd720, globals=0x6443c0, locals=0x6443c0) at Python/ceval.c:667
</span><br>
<span class="quotelev1">&gt; #57 0x00002aaaab28d492 in run_mod (mod=0x720960, filename=0x7fffffffe6bf &quot;test/regression/regression-test.py&quot;, globals=0x6443c0, locals=0x6443c0, flags=0x7fffffffe220, 
</span><br>
<span class="quotelev1">&gt;    arena=0x6707d0) at Python/pythonrun.c:1370
</span><br>
<span class="quotelev1">&gt; #58 0x00002aaaab28d41c in PyRun_FileExFlags (fp=0x6cb7c0, filename=0x7fffffffe6bf &quot;test/regression/regression-test.py&quot;, start=257, globals=0x6443c0, locals=0x6443c0, 
</span><br>
<span class="quotelev1">&gt;    closeit=1, flags=0x7fffffffe220) at Python/pythonrun.c:1356
</span><br>
<span class="quotelev1">&gt; #59 0x00002aaaab28bbfe in PyRun_SimpleFileExFlags (fp=0x6cb7c0, filename=0x7fffffffe6bf &quot;test/regression/regression-test.py&quot;, closeit=1, flags=0x7fffffffe220)
</span><br>
<span class="quotelev1">&gt;    at Python/pythonrun.c:948
</span><br>
<span class="quotelev1">&gt; #60 0x00002aaaab28b1be in PyRun_AnyFileExFlags (fp=0x6cb7c0, filename=0x7fffffffe6bf &quot;test/regression/regression-test.py&quot;, closeit=1, flags=0x7fffffffe220)
</span><br>
<span class="quotelev1">&gt;    at Python/pythonrun.c:752
</span><br>
<span class="quotelev1">&gt; #61 0x00002aaaab2a7497 in Py_Main (argc=3, argv=0x7fffffffe3a8) at Modules/main.c:640
</span><br>
<span class="quotelev1">&gt; #62 0x00000000004006f3 in main (argc=3, argv=0x7fffffffe3a8) at ./Modules/python.c:23
</span><br>
<span class="quotelev1">&gt; (gdb) p argv
</span><br>
<span class="quotelev1">&gt; $1 = (char **) 0xa39398
</span><br>
<span class="quotelev1">&gt; (gdb) p *argv
</span><br>
<span class="quotelev1">&gt; $2 = 0xa26390 &quot;test/regression/regression-jobs&quot;
</span><br>
<span class="quotelev1">&gt; (gdb) p **argv
</span><br>
<span class="quotelev1">&gt; $3 = 116 't'
</span><br>
<span class="quotelev1">&gt; (gdb) p p
</span><br>
<span class="quotelev1">&gt; $4 = (char **) 0xa393a0
</span><br>
<span class="quotelev1">&gt; (gdb) p *p
</span><br>
<span class="quotelev1">&gt; $5 = 0x20 &lt;Address 0x20 out of bounds&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) p str_len
</span><br>
<span class="quotelev1">&gt; $6 = 32
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
<span class="quotelev1">&gt; On Sep 26, 2014, at 5:19 PM, Amos Anderson &lt;amos.anderson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello all --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to get a working configuration for my application and I can get OpenMPI 1.6.5 to work, while OpenMPI 1.8.2 segfaults.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's how I compile OpenMPI:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OPENMPI = openmpi-1.8.2
</span><br>
<span class="quotelev2">&gt;&gt; FLAGS = --enable-static
</span><br>
<span class="quotelev2">&gt;&gt; cd $(OPENMPI) ; ./configure $(FLAGS) --with-tm=/opt/torque-2.5.9/ --prefix=$(CURDIR)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm able to compile openmpi successfully, and I use a bjam instruction like this to compile my program (which uses boost python boost_1_55_0):
</span><br>
<span class="quotelev2">&gt;&gt; using mpi : ../tools/openmpi/bin/mpic++ ;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and I run my program in a Torque pbs script like this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /bin/rm -rf jobname.nodes
</span><br>
<span class="quotelev2">&gt;&gt; for i in `cat ${PBS_NODEFILE} | sort -u`
</span><br>
<span class="quotelev2">&gt;&gt; do
</span><br>
<span class="quotelev2">&gt;&gt; 	 echo $i slots \= `grep $i ${PBS_NODEFILE} | wc -l` &gt;&gt; jobname.nodes
</span><br>
<span class="quotelev2">&gt;&gt; done
</span><br>
<span class="quotelev2">&gt;&gt; /home/user/myapp/tools/openmpi/bin/mpirun -np 2 -hostfile jobname.nodes /home/user/myapp/myapp.exe
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; which also compiles just fine. But when I run my program I get the segfault I printed below. When I switch to:
</span><br>
<span class="quotelev2">&gt;&gt; OPENMPI = openmpi-1.6.5
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; then everything works as expected. (As a side question, do I need both -hostfile and --with-tm? I asked this question earlier today on this list). That is, I believe that I'm using the exact same setup in both cases, and 1.6.5 works while 1.8.2 fails. Any suggestions what I might be doing wrong?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I suppose if I have a working setup I can give up even if it's with an older version... but this could be evidence of something I'll have to confront eventually.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any advice!
</span><br>
<span class="quotelev2">&gt;&gt; Amos.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] Failing at address: 0x40
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [ 0] /lib64/libpthread.so.0[0x322180e4c0]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [ 1] /lib64/libc.so.6(strlen+0x30)[0x3220c78d80]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [ 2] /home/user/myapp/tools/openmpi/lib/libopen-pal.so.6(opal_argv_join+0x95)[0x2b87f5c4e175]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [ 3] /home/user/myapp/tools/openmpi/lib/libmpi.so.1(ompi_mpi_init+0x82d)[0x2b87f3c9ec0d]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [ 4] /home/user/myapp/tools/openmpi/lib/libmpi.so.1(MPI_Init+0xf0)[0x2b87f3cbc310]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [ 5] /home/user/myapp/lib/libboost_mpi.so.1.55.0(_ZN5boost3mpi11environmentC1ERiRPPcb+0x36)[0x2b87f3795826]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [ 6] /home/user/myapp/lib/mpi.so(_ZN5boost3mpi6python8mpi_initENS_6python4listEb+0x314)[0x2b87f30bc7b4]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [ 7] /home/user/myapp/lib/mpi.so(_ZN5boost3mpi6python18export_environmentEv+0xcc6)[0x2b87f30bd5f6]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [ 8] /home/user/myapp/lib/mpi.so(_ZN5boost3mpi6python15init_module_mpiEv+0x547)[0x2b87f30d4967]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [ 9] /home/user/myapp/lib/libboost_python.so.1.55.0(_ZN5boost6python21handle_exception_implENS_9function0IvEE+0x530)[0x2b87f3558430]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [10] /home/user/myapp/lib/libboost_python.so.1.55.0(_ZN5boost6python16handle_exceptionIPFvvEEEbT_+0x38)[0x2b87f3559798]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [11] /home/user/myapp/lib/libboost_python.so.1.55.0(_ZN5boost6python6detail11init_moduleEPKcPFvvE+0x63)[0x2b87f3559463]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [12] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(_PyImport_LoadDynamicModule+0xc2)[0x2b87e8c79282]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [13] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0[0x2b87e8c771a9]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [14] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0[0x2b87e8c776c1]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [15] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyImport_ImportModuleLevel+0x1b7)[0x2b87e8c77977]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [16] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0[0x2b87e8c57bcd]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [17] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyObject_Call+0x68)[0x2b87e8bb7ae8]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [18] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyEval_CallObjectWithKeywords+0x56)[0x2b87e8c58216]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [19] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyEval_EvalFrameEx+0x381c)[0x2b87e8c5c79c]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [20] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyEval_EvalCodeEx+0x8c9)[0x2b87e8c60c89]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [21] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyEval_EvalCode+0x32)[0x2b87e8c60d02]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [22] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyImport_ExecCodeModuleEx+0xc2)[0x2b87e8c74432]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [23] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0[0x2b87e8c769f0]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [24] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0[0x2b87e8c771a9]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [25] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0[0x2b87e8c77642]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [26] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyImport_ImportModuleLevel+0x1b7)[0x2b87e8c77977]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [27] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0[0x2b87e8c57bcd]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [28] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyObject_Call+0x68)[0x2b87e8bb7ae8]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] [29] /home/user/myapp/tools/python/lib/libpython2.7.so.1.0(PyEval_CallObjectWithKeywords+0x56)[0x2b87e8c58216]
</span><br>
<span class="quotelev2">&gt;&gt; [local:27921] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25396.php">http://www.open-mpi.org/community/lists/users/2014/09/25396.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25401/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25402.php">Ralph Castain: "Re: [OMPI users] --prefix, segfaulting"</a>
<li><strong>Previous message:</strong> <a href="25400.php">Gustavo Correa: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>In reply to:</strong> <a href="25396.php">Amos Anderson: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25403.php">Amos Anderson: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<li><strong>Reply:</strong> <a href="25403.php">Amos Anderson: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
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
