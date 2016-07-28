<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 31 18:20:35 2006" -->
<!-- isoreceived="20060831222035" -->
<!-- sent="Thu, 31 Aug 2006 16:20:33 -0600" -->
<!-- isosent="20060831222033" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X" -->
<!-- id="1157062833.17883.46.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="Pine.LNX.4.64.0608222056550.9456_at_volt.txcorp.com" -->
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
<strong>Date:</strong> 2006-08-31 18:20:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1808.php">Brian E Granger: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="1806.php">Robert Latham: "Re: [OMPI users] pvfs2 and romio"</a>
<li><strong>In reply to:</strong> <a href="1768.php">Brian Granger: "[OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1808.php">Brian E Granger: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>Reply:</strong> <a href="1808.php">Brian E Granger: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is quite strange, and we're having some trouble figuring out
<br>
exactly why the opening is failing.  Do you have a (somewhat?) easy list
<br>
of instructions so that I can try to reproduce this?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p>On Tue, 2006-08-22 at 20:58 -0600, Brian Granger wrote:
<br>
<span class="quotelev1">&gt; HI,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to dynamically load mpi.dylib on Mac OS X (using ctypes in 
</span><br>
<span class="quotelev1">&gt; python).  It seems to
</span><br>
<span class="quotelev1">&gt; load fine, but when I call MPI_Init(), I get the error shown below.  I
</span><br>
<span class="quotelev1">&gt; can call other functions just fine (like MPI_Initialized).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, my mpi install is seeing all the needed components and I can
</span><br>
<span class="quotelev1">&gt; load them myself without error using dlopen.  I can also compile and
</span><br>
<span class="quotelev1">&gt; run mpi programs and I build openmpi with shared library support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_allocator_basic.so, 9):
</span><br>
<span class="quotelev1">&gt; Symbol not found: _ompi_free_list_item_t_class
</span><br>
<span class="quotelev1">&gt;   Referenced from: 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.1/lib/openmpi/mca_allocator_basic.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;   (ignored)
</span><br>
<span class="quotelev1">&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_rcache_rb.so, 9): Symbol
</span><br>
<span class="quotelev1">&gt; not found: _ompi_free_list_item_t_class
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_rcache_rb.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;   (ignored)
</span><br>
<span class="quotelev1">&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_mpool_sm.so, 9): Symbol
</span><br>
<span class="quotelev1">&gt; not found: _mca_allocator_base_components
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_mpool_sm.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;   (ignored)
</span><br>
<span class="quotelev1">&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_pml_ob1.so, 9): Symbol
</span><br>
<span class="quotelev1">&gt; not found: _ompi_free_list_item_t_class
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;   (ignored)
</span><br>
<span class="quotelev1">&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_basic.so, 9):
</span><br>
<span class="quotelev1">&gt; Symbol not found: _mca_pml
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_coll_basic.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;   (ignored)
</span><br>
<span class="quotelev1">&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_hierarch.so, 9):
</span><br>
<span class="quotelev1">&gt; Symbol not found: _ompi_mpi_op_max
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_coll_hierarch.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;   (ignored)
</span><br>
<span class="quotelev1">&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_sm.so, 9): Symbol
</span><br>
<span class="quotelev1">&gt; not found: _ompi_mpi_local_convertor
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_coll_sm.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;   (ignored)
</span><br>
<span class="quotelev1">&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_tuned.so, 9):
</span><br>
<span class="quotelev1">&gt; Symbol not found: _mca_pml
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;   (ignored)
</span><br>
<span class="quotelev1">&gt; [localhost:00973] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_osc_pt2pt.so, 9): Symbol
</span><br>
<span class="quotelev1">&gt; not found: _ompi_request_t_class
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_osc_pt2pt.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;   (ignored)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; No available pml components were found!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This means that there are no components of this type installed on your
</span><br>
<span class="quotelev1">&gt; system or all the components reported that they could not be used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a fatal error; your MPI process is likely to abort.  Check the
</span><br>
<span class="quotelev1">&gt; output of the &quot;ompi_info&quot; command and ensure that components of this
</span><br>
<span class="quotelev1">&gt; type are available on your system.  You may also wish to check the
</span><br>
<span class="quotelev1">&gt; value of the &quot;component_path&quot; MCA parameter and ensure that it has at
</span><br>
<span class="quotelev1">&gt; least one directory that contains valid MCA components.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [localhost:00973] PML ob1 cannot be selected
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any Ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian Granger
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1808.php">Brian E Granger: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="1806.php">Robert Latham: "Re: [OMPI users] pvfs2 and romio"</a>
<li><strong>In reply to:</strong> <a href="1768.php">Brian Granger: "[OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1808.php">Brian E Granger: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>Reply:</strong> <a href="1808.php">Brian E Granger: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
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
