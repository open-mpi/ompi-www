<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  8 12:51:58 2006" -->
<!-- isoreceived="20060908165158" -->
<!-- sent="Fri, 8 Sep 2006 10:51:24 -0600" -->
<!-- isosent="20060908165124" -->
<!-- name="Brian E Granger" -->
<!-- email="bgranger_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X" -->
<!-- id="66D300F3-4B1D-4C82-A514-17CEB09B90AB_at_txcorp.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1157554825.22686.28.camel_at_boxtop.lanl.gov" -->
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
<strong>From:</strong> Brian E Granger (<em>bgranger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-08 12:51:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1847.php">Nuno Sucena Almeida: "[OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="1845.php">Marcelo Souza: "[OMPI users] Slackware Package for openmpi 1.1.1 and mpich2 1.0.4p1"</a>
<li><strong>In reply to:</strong> <a href="1828.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1891.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>Reply:</strong> <a href="1891.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>I think I have figured this one out.  By default ctypes calls dlopen  
<br>
with mode = RTLD_LOCAL (except on Mac OS 10.3).  When I instruct  
<br>
ctypes to set mode = RTLD_GLOBAL it works fine on 10.4.  Based on the  
<br>
dlopen man page:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RTLD_GLOBAL   Symbols exported from this image (dynamic library  
<br>
or bun-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dle) will be available to any images build with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-flat_namespace option to ld(1) or to calls to  
<br>
dlsym() when
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;using a special handle.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RTLD_LOCAL    Symbols exported from this image (dynamic library  
<br>
or bun-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dle) are generally hidden and only availble to  
<br>
dlsym() when
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;directly using the handle returned by this call to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dlopen().  If neither RTLD_GLOBAL nor RTLD_LOCAL  
<br>
is speci-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fied, the default is RTLD_GLOBAL
<br>
<p>This behavior makes sense.  Thus the following works on 10.4:
<br>
<p>from ctypes import *
<br>
mpi = CDLL('libmpi.0.dylib', RTLD_GLOBAL)
<br>
f = pythonapi.Py_GetArgcArgv
<br>
argc = c_int()
<br>
argv = POINTER(c_char_p)()
<br>
f(byref(argc), byref(argv))
<br>
mpi.MPI_Init(byref(argc), byref(argv))
<br>
mpi.MPI_Finalize()
<br>
<p>So I am not sure this is a defect in OpenMPI, but it sure is a subtle  
<br>
aspect of using it.  I will probably document this somewhere in the  
<br>
package I am creating.
<br>
<p>Thanks
<br>
<p>Brian
<br>
<p><p><p><p><p><p><p>On Sep 6, 2006, at 9:00 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the information.  I've filed a bug in our bug tracker on  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; issue.  It appears that for some reason, when libmpi is dlopened() by
</span><br>
<span class="quotelev1">&gt; python, that objects it then dlopens are not able to find symbols  
</span><br>
<span class="quotelev1">&gt; in the
</span><br>
<span class="quotelev1">&gt; libmpi.  It will probably take me a bit of time to track this issue
</span><br>
<span class="quotelev1">&gt; down, but you will be notified by the bug tracker when the issue is
</span><br>
<span class="quotelev1">&gt; resolved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 2006-08-31 at 17:27 -0600, Brian E Granger wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Brian,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sure, but my example will probably seem a little odd.  I am calling
</span><br>
<span class="quotelev2">&gt;&gt; the mpi shared library from Python using ctypes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The dependencies for doing things this way are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Python built with --enable-shared
</span><br>
<span class="quotelev2">&gt;&gt; 2. The ctypes python package
</span><br>
<span class="quotelev2">&gt;&gt; 3. OpenMPI configured with --enable-shared
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Once you have this, the following python script will cause the  
</span><br>
<span class="quotelev2">&gt;&gt; problem
</span><br>
<span class="quotelev2">&gt;&gt; on Mac OS X:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; from ctypes import *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; f = pythonapi.Py_GetArgcArgv
</span><br>
<span class="quotelev2">&gt;&gt; argc = c_int()
</span><br>
<span class="quotelev2">&gt;&gt; argv = POINTER(c_char_p)()
</span><br>
<span class="quotelev2">&gt;&gt; f(byref(argc), byref(argv))
</span><br>
<span class="quotelev2">&gt;&gt; mpi = cdll.LoadLibrary('libmpi.0.dylib')
</span><br>
<span class="quotelev2">&gt;&gt; mpi.MPI_Init(byref(argc), byref(argv))
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will try this on Linux as well to see if I get the same error.  One
</span><br>
<span class="quotelev2">&gt;&gt; important piece of the puzzle is that if I configure openmpi with the
</span><br>
<span class="quotelev2">&gt;&gt; --disable-dlopen flag, I don't have the problem.  I will do some
</span><br>
<span class="quotelev2">&gt;&gt; further testing on different systems and get back to you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for looking at this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 31, 2006, at 4:20 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is quite strange, and we're having some trouble figuring out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exactly why the opening is failing.  Do you have a (somewhat?) easy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of instructions so that I can try to reproduce this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, 2006-08-22 at 20:58 -0600, Brian Granger wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HI,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to dynamically load mpi.dylib on Mac OS X (using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ctypes in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; python).  It seems to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; load fine, but when I call MPI_Init(), I get the error shown
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; below.  I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can call other functions just fine (like MPI_Initialized).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, my mpi install is seeing all the needed components and I can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; load them myself without error using dlopen.  I can also compile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run mpi programs and I build openmpi with shared library support.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_allocator_basic.so,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 9):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Symbol not found: _ompi_free_list_item_t_class
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Referenced from:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/local/openmpi-1.1/lib/openmpi/mca_allocator_basic.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   (ignored)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_rcache_rb.so, 9):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Symbol
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not found: _ompi_free_list_item_t_class
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Referenced
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from: /usr/local/openmpi-1.1/lib/openmpi/mca_rcache_rb.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   (ignored)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_mpool_sm.so, 9):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Symbol
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not found: _mca_allocator_base_components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Referenced
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from: /usr/local/openmpi-1.1/lib/openmpi/mca_mpool_sm.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   (ignored)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_pml_ob1.so, 9):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Symbol
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not found: _ompi_free_list_item_t_class
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Referenced
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from: /usr/local/openmpi-1.1/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   (ignored)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_basic.so, 9):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Symbol not found: _mca_pml
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Referenced
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from: /usr/local/openmpi-1.1/lib/openmpi/mca_coll_basic.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   (ignored)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_hierarch.so,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 9):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Symbol not found: _ompi_mpi_op_max
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Referenced
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from: /usr/local/openmpi-1.1/lib/openmpi/mca_coll_hierarch.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   (ignored)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_sm.so, 9):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Symbol
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not found: _ompi_mpi_local_convertor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Referenced
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from: /usr/local/openmpi-1.1/lib/openmpi/mca_coll_sm.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   (ignored)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_tuned.so, 9):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Symbol not found: _mca_pml
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Referenced
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from: /usr/local/openmpi-1.1/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   (ignored)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_osc_pt2pt.so, 9):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Symbol
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not found: _ompi_request_t_class
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Referenced
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from: /usr/local/openmpi-1.1/lib/openmpi/mca_osc_pt2pt.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   (ignored)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No available pml components were found!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This means that there are no components of this type installed on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; system or all the components reported that they could not be used.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is a fatal error; your MPI process is likely to abort.  Check
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; output of the &quot;ompi_info&quot; command and ensure that components of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; type are available on your system.  You may also wish to check the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; value of the &quot;component_path&quot; MCA parameter and ensure that it has
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; least one directory that contains valid MCA components.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost:00973] PML ob1 cannot be selected
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any Ideas?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian Granger
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian E Granger, Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt; Research Scientist
</span><br>
<span class="quotelev2">&gt;&gt; Tech-X Corporation
</span><br>
<span class="quotelev2">&gt;&gt; phone:  720-974-1850
</span><br>
<span class="quotelev2">&gt;&gt; bgranger_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p>Brian E Granger, Ph.D.
<br>
Research Scientist
<br>
Tech-X Corporation
<br>
phone:  720-974-1850
<br>
bgranger_at_[hidden]
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1846/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1847.php">Nuno Sucena Almeida: "[OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="1845.php">Marcelo Souza: "[OMPI users] Slackware Package for openmpi 1.1.1 and mpich2 1.0.4p1"</a>
<li><strong>In reply to:</strong> <a href="1828.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1891.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>Reply:</strong> <a href="1891.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
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
