<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 22 22:58:51 2006" -->
<!-- isoreceived="20060823025851" -->
<!-- sent="Tue, 22 Aug 2006 20:58:49 -0600 (MDT)" -->
<!-- isosent="20060823025849" -->
<!-- name="Brian Granger" -->
<!-- email="bgranger_at_[hidden]" -->
<!-- subject="[OMPI users] Dynamic loading of libmpi.dylib on Mac OS X" -->
<!-- id="Pine.LNX.4.64.0608222056550.9456_at_volt.txcorp.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Brian Granger (<em>bgranger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-22 22:58:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1769.php">Massimiliano Fatica: "[OMPI users] Jumbo frames"</a>
<li><strong>Previous message:</strong> <a href="1767.php">Brian Granger: "[OMPI users] Dynamically loading mpi on Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1807.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>Reply:</strong> <a href="1807.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI,
<br>
<p>I am trying to dynamically load mpi.dylib on Mac OS X (using ctypes in 
<br>
python).  It seems to
<br>
load fine, but when I call MPI_Init(), I get the error shown below.  I
<br>
can call other functions just fine (like MPI_Initialized).
<br>
<p>Also, my mpi install is seeing all the needed components and I can
<br>
load them myself without error using dlopen.  I can also compile and
<br>
run mpi programs and I build openmpi with shared library support.
<br>
<p>[localhost:00973] mca: base: component_find: unable to open:
<br>
dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_allocator_basic.so, 9):
<br>
Symbol not found: _ompi_free_list_item_t_class
<br>
&nbsp;&nbsp;Referenced from: 
<br>
/usr/local/openmpi-1.1/lib/openmpi/mca_allocator_basic.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;&nbsp;(ignored)
<br>
[localhost:00973] mca: base: component_find: unable to open:
<br>
dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_rcache_rb.so, 9): Symbol
<br>
not found: _ompi_free_list_item_t_class
<br>
&nbsp;&nbsp;Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_rcache_rb.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;&nbsp;(ignored)
<br>
[localhost:00973] mca: base: component_find: unable to open:
<br>
dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_mpool_sm.so, 9): Symbol
<br>
not found: _mca_allocator_base_components
<br>
&nbsp;&nbsp;Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_mpool_sm.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;&nbsp;(ignored)
<br>
[localhost:00973] mca: base: component_find: unable to open:
<br>
dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_pml_ob1.so, 9): Symbol
<br>
not found: _ompi_free_list_item_t_class
<br>
&nbsp;&nbsp;Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_pml_ob1.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;&nbsp;(ignored)
<br>
[localhost:00973] mca: base: component_find: unable to open:
<br>
dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_basic.so, 9):
<br>
Symbol not found: _mca_pml
<br>
&nbsp;&nbsp;Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_coll_basic.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;&nbsp;(ignored)
<br>
[localhost:00973] mca: base: component_find: unable to open:
<br>
dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_hierarch.so, 9):
<br>
Symbol not found: _ompi_mpi_op_max
<br>
&nbsp;&nbsp;Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_coll_hierarch.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;&nbsp;(ignored)
<br>
[localhost:00973] mca: base: component_find: unable to open:
<br>
dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_sm.so, 9): Symbol
<br>
not found: _ompi_mpi_local_convertor
<br>
&nbsp;&nbsp;Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_coll_sm.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;&nbsp;(ignored)
<br>
[localhost:00973] mca: base: component_find: unable to open:
<br>
dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_coll_tuned.so, 9):
<br>
Symbol not found: _mca_pml
<br>
&nbsp;&nbsp;Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_coll_tuned.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;&nbsp;(ignored)
<br>
[localhost:00973] mca: base: component_find: unable to open:
<br>
dlopen(/usr/local/openmpi-1.1/lib/openmpi/mca_osc_pt2pt.so, 9): Symbol
<br>
not found: _ompi_request_t_class
<br>
&nbsp;&nbsp;Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_osc_pt2pt.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;&nbsp;(ignored)
<br>
--------------------------------------------------------------------------
<br>
No available pml components were found!
<br>
<p>This means that there are no components of this type installed on your
<br>
system or all the components reported that they could not be used.
<br>
<p>This is a fatal error; your MPI process is likely to abort.  Check the
<br>
output of the &quot;ompi_info&quot; command and ensure that components of this
<br>
type are available on your system.  You may also wish to check the
<br>
value of the &quot;component_path&quot; MCA parameter and ensure that it has at
<br>
least one directory that contains valid MCA components.
<br>
<p>--------------------------------------------------------------------------
<br>
[localhost:00973] PML ob1 cannot be selected
<br>
<p>Any Ideas?
<br>
<p>Thanks
<br>
<p>Brian Granger
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1769.php">Massimiliano Fatica: "[OMPI users] Jumbo frames"</a>
<li><strong>Previous message:</strong> <a href="1767.php">Brian Granger: "[OMPI users] Dynamically loading mpi on Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1807.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>Reply:</strong> <a href="1807.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
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
