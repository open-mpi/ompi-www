<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 31 19:27:50 2006" -->
<!-- isoreceived="20060831232750" -->
<!-- sent="Thu, 31 Aug 2006 17:27:29 -0600" -->
<!-- isosent="20060831232729" -->
<!-- name="Brian E Granger" -->
<!-- email="bgranger_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X" -->
<!-- id="9BFC8A5D-0FF7-447E-B385-75C823A5D277_at_txcorp.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1157062833.17883.46.camel_at_boxtop.lanl.gov" -->
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
<strong>Date:</strong> 2006-08-31 19:27:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1809.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<li><strong>Previous message:</strong> <a href="1807.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="1807.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1828.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1828.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>Sure, but my example will probably seem a little odd.  I am calling  
<br>
the mpi shared library from Python using ctypes.
<br>
<p>The dependencies for doing things this way are:
<br>
<p>1. Python built with --enable-shared
<br>
2. The ctypes python package
<br>
3. OpenMPI configured with --enable-shared
<br>
<p>Once you have this, the following python script will cause the  
<br>
problem on Mac OS X:
<br>
<p>from ctypes import *
<br>
<p>f = pythonapi.Py_GetArgcArgv
<br>
argc = c_int()
<br>
argv = POINTER(c_char_p)()
<br>
f(byref(argc), byref(argv))
<br>
mpi = cdll.LoadLibrary('libmpi.0.dylib')
<br>
mpi.MPI_Init(byref(argc), byref(argv))
<br>
<p>I will try this on Linux as well to see if I get the same error.  One  
<br>
important piece of the puzzle is that if I configure openmpi with the  
<br>
--disable-dlopen flag, I don't have the problem.  I will do some  
<br>
further testing on different systems and get back to you.
<br>
<p>Thanks for looking at this.
<br>
<p>Brian
<br>
<p><p>On Aug 31, 2006, at 4:20 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; This is quite strange, and we're having some trouble figuring out
</span><br>
<span class="quotelev1">&gt; exactly why the opening is failing.  Do you have a (somewhat?) easy  
</span><br>
<span class="quotelev1">&gt; list
</span><br>
<span class="quotelev1">&gt; of instructions so that I can try to reproduce this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 2006-08-22 at 20:58 -0600, Brian Granger wrote:
</span><br>
<span class="quotelev2">&gt;&gt; HI,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to dynamically load mpi.dylib on Mac OS X (using  
</span><br>
<span class="quotelev2">&gt;&gt; ctypes in
</span><br>
<span class="quotelev2">&gt;&gt; python).  It seems to
</span><br>
<span class="quotelev2">&gt;&gt; load fine, but when I call MPI_Init(), I get the error shown  
</span><br>
<span class="quotelev2">&gt;&gt; below.  I
</span><br>
<span class="quotelev2">&gt;&gt; can call other functions just fine (like MPI_Initialized).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, my mpi install is seeing all the needed components and I can
</span><br>
<span class="quotelev2">&gt;&gt; load them myself without error using dlopen.  I can also compile and
</span><br>
<span class="quotelev2">&gt;&gt; run mpi programs and I build openmpi with shared library support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev2">&gt;&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_allocator_basic.so, 9):
</span><br>
<span class="quotelev2">&gt;&gt; Symbol not found: _ompi_free_list_item_t_class
</span><br>
<span class="quotelev2">&gt;&gt;   Referenced from:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.1/lib/openmpi/mca_allocator_basic.so
</span><br>
<span class="quotelev2">&gt;&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev2">&gt;&gt;   (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev2">&gt;&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_rcache_rb.so, 9):  
</span><br>
<span class="quotelev2">&gt;&gt; Symbol
</span><br>
<span class="quotelev2">&gt;&gt; not found: _ompi_free_list_item_t_class
</span><br>
<span class="quotelev2">&gt;&gt;   Referenced from: /usr/local/openmpi-1.1/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_rcache_rb.so
</span><br>
<span class="quotelev2">&gt;&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev2">&gt;&gt;   (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev2">&gt;&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_mpool_sm.so, 9): Symbol
</span><br>
<span class="quotelev2">&gt;&gt; not found: _mca_allocator_base_components
</span><br>
<span class="quotelev2">&gt;&gt;   Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_mpool_sm.so
</span><br>
<span class="quotelev2">&gt;&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev2">&gt;&gt;   (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev2">&gt;&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_pml_ob1.so, 9): Symbol
</span><br>
<span class="quotelev2">&gt;&gt; not found: _ompi_free_list_item_t_class
</span><br>
<span class="quotelev2">&gt;&gt;   Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev2">&gt;&gt;   (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev2">&gt;&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_basic.so, 9):
</span><br>
<span class="quotelev2">&gt;&gt; Symbol not found: _mca_pml
</span><br>
<span class="quotelev2">&gt;&gt;   Referenced from: /usr/local/openmpi-1.1/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_coll_basic.so
</span><br>
<span class="quotelev2">&gt;&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev2">&gt;&gt;   (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev2">&gt;&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_hierarch.so, 9):
</span><br>
<span class="quotelev2">&gt;&gt; Symbol not found: _ompi_mpi_op_max
</span><br>
<span class="quotelev2">&gt;&gt;   Referenced from: /usr/local/openmpi-1.1/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_coll_hierarch.so
</span><br>
<span class="quotelev2">&gt;&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev2">&gt;&gt;   (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev2">&gt;&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_sm.so, 9): Symbol
</span><br>
<span class="quotelev2">&gt;&gt; not found: _ompi_mpi_local_convertor
</span><br>
<span class="quotelev2">&gt;&gt;   Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_coll_sm.so
</span><br>
<span class="quotelev2">&gt;&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev2">&gt;&gt;   (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev2">&gt;&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_tuned.so, 9):
</span><br>
<span class="quotelev2">&gt;&gt; Symbol not found: _mca_pml
</span><br>
<span class="quotelev2">&gt;&gt;   Referenced from: /usr/local/openmpi-1.1/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt;&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev2">&gt;&gt;   (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev2">&gt;&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_osc_pt2pt.so, 9):  
</span><br>
<span class="quotelev2">&gt;&gt; Symbol
</span><br>
<span class="quotelev2">&gt;&gt; not found: _ompi_request_t_class
</span><br>
<span class="quotelev2">&gt;&gt;   Referenced from: /usr/local/openmpi-1.1/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_osc_pt2pt.so
</span><br>
<span class="quotelev2">&gt;&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev2">&gt;&gt;   (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; No available pml components were found!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This means that there are no components of this type installed on  
</span><br>
<span class="quotelev2">&gt;&gt; your
</span><br>
<span class="quotelev2">&gt;&gt; system or all the components reported that they could not be used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a fatal error; your MPI process is likely to abort.  Check  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; output of the &quot;ompi_info&quot; command and ensure that components of this
</span><br>
<span class="quotelev2">&gt;&gt; type are available on your system.  You may also wish to check the
</span><br>
<span class="quotelev2">&gt;&gt; value of the &quot;component_path&quot; MCA parameter and ensure that it has at
</span><br>
<span class="quotelev2">&gt;&gt; least one directory that contains valid MCA components.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; [localhost:00973] PML ob1 cannot be selected
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any Ideas?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian Granger
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1808/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1809.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<li><strong>Previous message:</strong> <a href="1807.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="1807.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1828.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1828.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
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
