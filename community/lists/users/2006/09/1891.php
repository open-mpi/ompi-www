<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 22 11:28:47 2006" -->
<!-- isoreceived="20060922152847" -->
<!-- sent="Fri, 22 Sep 2006 09:28:43 -0600" -->
<!-- isosent="20060922152843" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X" -->
<!-- id="1158938923.1825.19.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="66D300F3-4B1D-4C82-A514-17CEB09B90AB_at_txcorp.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-22 11:28:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1892.php">Renato Golin: "Re: [OMPI users] Boost bindings to MPI"</a>
<li><strong>Previous message:</strong> <a href="1890.php">Nuno Sucena Almeida: "Re: [OMPI users] Boost bindings to MPI"</a>
<li><strong>In reply to:</strong> <a href="1846.php">Brian E Granger: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian -
<br>
<p>Sorry for the slow reply, I've been on vacation for a while and am still
<br>
digging out from all the back e-mail.
<br>
<p>Anyway, that makes sense.  Open MPI's default build mode is to dlopen()
<br>
the driver components needed for things like the various interconnects
<br>
and process starters we support.  Since libmpi was dlopen()'ed with
<br>
RTLD_LOCAL, the symbols needed in libmpi were not available to those
<br>
components when OMPI tried to dlopen() them.
<br>
<p>I was a little confused initially by why the symbols in our other
<br>
support libraries were found (everything seemed to work until the
<br>
MPI-level -- the run-time stuff initialized properly).  But apparently
<br>
this makes sense as well, as there's something about how shared
<br>
libraries that are dependencies on the dlopen()'ed object are loaded
<br>
that puts those symbols in the global namespace.
<br>
<p>One solution, of course, is to specify RTLD_GLOBAL when opening libmpi.
<br>
The other possibility is to build Open MPI with the --disable-dlopen
<br>
option, which will cause all the components to be built into libmpi,
<br>
avoiding the whole namespacing issue.
<br>
<p>We'll add some information to the FAQ on this issue.  Thanks for
<br>
bringing it to our attention.
<br>
<p>Brian
<br>
<p>On Fri, 2006-09-08 at 10:51 -0600, Brian E Granger wrote:
<br>
<span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I have figured this one out.  By default ctypes calls dlopen
</span><br>
<span class="quotelev1">&gt; with mode = RTLD_LOCAL (except on Mac OS 10.3).  When I instruct
</span><br>
<span class="quotelev1">&gt; ctypes to set mode = RTLD_GLOBAL it works fine on 10.4.  Based on the
</span><br>
<span class="quotelev1">&gt; dlopen man page:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      RTLD_GLOBAL   Symbols exported from this image (dynamic library
</span><br>
<span class="quotelev1">&gt; or bun-
</span><br>
<span class="quotelev1">&gt;                    dle) will be available to any images build with
</span><br>
<span class="quotelev1">&gt;                    -flat_namespace option to ld(1) or to calls to
</span><br>
<span class="quotelev1">&gt; dlsym() when
</span><br>
<span class="quotelev1">&gt;                    using a special handle.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      RTLD_LOCAL    Symbols exported from this image (dynamic library
</span><br>
<span class="quotelev1">&gt; or bun-
</span><br>
<span class="quotelev1">&gt;                    dle) are generally hidden and only availble to
</span><br>
<span class="quotelev1">&gt; dlsym() when
</span><br>
<span class="quotelev1">&gt;                    directly using the handle returned by this call to
</span><br>
<span class="quotelev1">&gt;                    dlopen().  If neither RTLD_GLOBAL nor RTLD_LOCAL is
</span><br>
<span class="quotelev1">&gt; speci-
</span><br>
<span class="quotelev1">&gt;                    fied, the default is RTLD_GLOBAL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This behavior makes sense.  Thus the following works on 10.4:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from ctypes import *
</span><br>
<span class="quotelev1">&gt; mpi = CDLL('libmpi.0.dylib', RTLD_GLOBAL)
</span><br>
<span class="quotelev1">&gt; f = pythonapi.Py_GetArgcArgv
</span><br>
<span class="quotelev1">&gt; argc = c_int()
</span><br>
<span class="quotelev1">&gt; argv = POINTER(c_char_p)()
</span><br>
<span class="quotelev1">&gt; f(byref(argc), byref(argv))
</span><br>
<span class="quotelev1">&gt; mpi.MPI_Init(byref(argc), byref(argv))
</span><br>
<span class="quotelev1">&gt; mpi.MPI_Finalize()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I am not sure this is a defect in OpenMPI, but it sure is a subtle
</span><br>
<span class="quotelev1">&gt; aspect of using it.  I will probably document this somewhere in the
</span><br>
<span class="quotelev1">&gt; package I am creating.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 6, 2006, at 9:00 AM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the information.  I've filed a bug in our bug tracker on
</span><br>
<span class="quotelev2">&gt; &gt; this
</span><br>
<span class="quotelev2">&gt; &gt; issue.  It appears that for some reason, when libmpi is dlopened()
</span><br>
<span class="quotelev2">&gt; &gt; by
</span><br>
<span class="quotelev2">&gt; &gt; python, that objects it then dlopens are not able to find symbols in
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; libmpi.  It will probably take me a bit of time to track this issue
</span><br>
<span class="quotelev2">&gt; &gt; down, but you will be notified by the bug tracker when the issue is
</span><br>
<span class="quotelev2">&gt; &gt; resolved.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, 2006-08-31 at 17:27 -0600, Brian E Granger wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Brian,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sure, but my example will probably seem a little odd.  I am
</span><br>
<span class="quotelev3">&gt; &gt; &gt; calling
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the mpi shared library from Python using ctypes.  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The dependencies for doing things this way are:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1. Python built with --enable-shared
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2. The ctypes python package
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 3. OpenMPI configured with --enable-shared
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Once you have this, the following python script will cause the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; problem
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on Mac OS X:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; from ctypes import *
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; f = pythonapi.Py_GetArgcArgv
</span><br>
<span class="quotelev3">&gt; &gt; &gt; argc = c_int()
</span><br>
<span class="quotelev3">&gt; &gt; &gt; argv = POINTER(c_char_p)()
</span><br>
<span class="quotelev3">&gt; &gt; &gt; f(byref(argc), byref(argv))
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpi = cdll.LoadLibrary('libmpi.0.dylib')
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpi.MPI_Init(byref(argc), byref(argv))
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I will try this on Linux as well to see if I get the same error.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; One
</span><br>
<span class="quotelev3">&gt; &gt; &gt; important piece of the puzzle is that if I configure openmpi with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --disable-dlopen flag, I don't have the problem.  I will do some
</span><br>
<span class="quotelev3">&gt; &gt; &gt; further testing on different systems and get back to you.  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks for looking at this.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Brian
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Aug 31, 2006, at 4:20 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; This is quite strange, and we're having some trouble figuring
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; out
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; exactly why the opening is failing.  Do you have a (somewhat?)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; easy
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; of instructions so that I can try to reproduce this?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Brian
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Tue, 2006-08-22 at 20:58 -0600, Brian Granger wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; HI,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I am trying to dynamically load mpi.dylib on Mac OS X (using
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ctypes in 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; python).  It seems to
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; load fine, but when I call MPI_Init(), I get the error shown
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; below.  I
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; can call other functions just fine (like MPI_Initialized).
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Also, my mpi install is seeing all the needed components and I
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; can
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; load them myself without error using dlopen.  I can also
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; compile
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; and
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; run mpi programs and I build openmpi with shared library
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; support.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_allocator_basic.so,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 9):
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Symbol not found: _ompi_free_list_item_t_class
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Referenced from: 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; /usr/local/openmpi-1.1/lib/openmpi/mca_allocator_basic.so
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   (ignored)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_rcache_rb.so,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 9):
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Symbol
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; not found: _ompi_free_list_item_t_class
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Referenced
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; from: /usr/local/openmpi-1.1/lib/openmpi/mca_rcache_rb.so
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   (ignored)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_mpool_sm.so, 9):
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Symbol
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; not found: _mca_allocator_base_components
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Referenced
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; from: /usr/local/openmpi-1.1/lib/openmpi/mca_mpool_sm.so
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   (ignored)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_pml_ob1.so, 9):
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Symbol
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; not found: _ompi_free_list_item_t_class
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Referenced
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; from: /usr/local/openmpi-1.1/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   (ignored)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_basic.so,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 9):
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Symbol not found: _mca_pml
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Referenced
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; from: /usr/local/openmpi-1.1/lib/openmpi/mca_coll_basic.so
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   (ignored)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_hierarch.so,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 9):
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Symbol not found: _ompi_mpi_op_max
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Referenced
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; from: /usr/local/openmpi-1.1/lib/openmpi/mca_coll_hierarch.so
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   (ignored)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_sm.so, 9):
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Symbol
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; not found: _ompi_mpi_local_convertor
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Referenced
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; from: /usr/local/openmpi-1.1/lib/openmpi/mca_coll_sm.so
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   (ignored)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_tuned.so,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 9):
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Symbol not found: _mca_pml
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Referenced
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; from: /usr/local/openmpi-1.1/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   (ignored)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_osc_pt2pt.so,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 9):
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Symbol
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; not found: _ompi_request_t_class
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Referenced
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; from: /usr/local/openmpi-1.1/lib/openmpi/mca_osc_pt2pt.so
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   (ignored)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; No available pml components were found!
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; This means that there are no components of this type installed
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; on
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; your
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; system or all the components reported that they could not be
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; used.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; This is a fatal error; your MPI process is likely to abort.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Check
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; the
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; output of the &quot;ompi_info&quot; command and ensure that components
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; of
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; this
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; type are available on your system.  You may also wish to check
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; the
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; value of the &quot;component_path&quot; MCA parameter and ensure that it
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; has
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; at
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; least one directory that contains valid MCA components.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [localhost:00973] PML ob1 cannot be selected
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Any Ideas?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Thanks
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Brian Granger
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Brian E Granger, Ph.D.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Research Scientist
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Tech-X Corporation
</span><br>
<span class="quotelev3">&gt; &gt; &gt; phone:  720-974-1850
</span><br>
<span class="quotelev3">&gt; &gt; &gt; bgranger_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian E Granger, Ph.D.
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; Tech-X Corporation
</span><br>
<span class="quotelev1">&gt; phone:  720-974-1850
</span><br>
<span class="quotelev1">&gt; bgranger_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1892.php">Renato Golin: "Re: [OMPI users] Boost bindings to MPI"</a>
<li><strong>Previous message:</strong> <a href="1890.php">Nuno Sucena Almeida: "Re: [OMPI users] Boost bindings to MPI"</a>
<li><strong>In reply to:</strong> <a href="1846.php">Brian E Granger: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
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
