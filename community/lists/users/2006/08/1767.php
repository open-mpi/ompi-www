<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 22 19:33:59 2006" -->
<!-- isoreceived="20060822233359" -->
<!-- sent="Tue, 22 Aug 2006 17:33:57 -0600" -->
<!-- isosent="20060822233357" -->
<!-- name="Brian Granger" -->
<!-- email="ellisonbg.net_at_[hidden]" -->
<!-- subject="[OMPI users] Dynamically loading mpi on Mac OS X" -->
<!-- id="6ce0ac130608221633x1e162ab6x4b558b847c5998cf_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Granger (<em>ellisonbg.net_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-22 19:33:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1768.php">Brian Granger: "[OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="1766.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI,
<br>
<p>I am trying to dynamically load mpi.dylib on Mac OS X.  It seems to
<br>
load fine, but when I call MPI_Init(), I get the error shown below.  I
<br>
can call other functions jsut fine (like MPI_Initialized).
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
&nbsp;&nbsp;Referenced from: /usr/local/openmpi-1.1/lib/openmpi/mca_allocator_basic.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;(ignored)
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
&nbsp;(ignored)
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
&nbsp;(ignored)
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
&nbsp;(ignored)
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
&nbsp;(ignored)
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
&nbsp;(ignored)
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
&nbsp;(ignored)
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
&nbsp;(ignored)
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
&nbsp;(ignored)
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
<li><strong>Next message:</strong> <a href="1768.php">Brian Granger: "[OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="1766.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
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
