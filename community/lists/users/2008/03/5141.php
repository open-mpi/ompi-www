<?
$subject_val = "[OMPI users] pml_v question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 13:55:04 2008" -->
<!-- isoreceived="20080305185504" -->
<!-- sent="Wed, 05 Mar 2008 19:55:01 +0100" -->
<!-- isosent="20080305185501" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="[OMPI users] pml_v question" -->
<!-- id="47CEEC85.6030009_at_aomail.uab.es" -->
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
<strong>Subject:</strong> [OMPI users] pml_v question<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-05 13:55:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5142.php">Aurélien Bouteiller: "Re: [OMPI users] pml_v question"</a>
<li><strong>Previous message:</strong> <a href="5140.php">Frank Tabakin: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5142.php">Aurélien Bouteiller: "Re: [OMPI users] pml_v question"</a>
<li><strong>Reply:</strong> <a href="5142.php">Aurélien Bouteiller: "Re: [OMPI users] pml_v question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I&#180;m trying to use the pml_v (pessimist) with FT components, but during
<br>
the loading the pml_v closes and close the vprotocol_pessimist too...
<br>
according the following:
<br>
<p>(log of only one process...)
<br>
<p>$ mpirun -np 2 -hostfile ../hostfile -am ../ft-enable-cr -v -d ./ping 10 1
<br>
<p>opal_cr: init: Verbose Level: 128
<br>
opal_cr: init: FT Enabled: 1
<br>
opal_cr: init: OPAL CR Allow OPAL Only: 0
<br>
opal_cr: init: Is a tool program: 0
<br>
opal_cr: init: Checkpoint Signal: 10
<br>
opal_cr: init: Temp Directory: /tmp
<br>
proc_info: hnp_uri
<br>
1251737600.0;tcp://172.20.5.128:46169;tcp://158.109.65.178:46169;tcp://10.8.0.1:46169
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;daemon uri 1251737600.1;tcp://172.20.5.1:39991
<br>
App) Named Pipes (/tmp/opal_cr_prog_read.17352) 
<br>
(/tmp/opal_cr_prog_write.17352)
<br>
orte_cr: init: orte_cr_init()
<br>
mca: base: components_open: Looking for pml components
<br>
mca: base: components_open: opening pml components
<br>
mca: base: components_open: found loaded component cm
<br>
mca: base: components_open: component cm open function successful
<br>
mca: base: components_open: found loaded component crcpw
<br>
pml:crcpw: open()
<br>
pml:crcpw: open: priority   = -128
<br>
pml:crcpw: open: verbosity  = 128
<br>
mca: base: components_open: component crcpw open function successful
<br>
mca: base: components_open: found loaded component dr
<br>
mca: base: components_open: component dr open function successful
<br>
mca: base: components_open: found loaded component ob1
<br>
mca: base: components_open: component ob1 open function successful
<br>
mca: base: components_open: found loaded component v
<br>
pml_v: loaded
<br>
pml_v: vprotocol_pessimist: component_open: read priority 120
<br>
mca: base: components_open: component v open function successful
<br>
select: initializing pml component cm
<br>
select: init returned failure for component cm
<br>
select: initializing pml component crcpw
<br>
pml:crcpw: component_init: Priority -128
<br>
select: init returned priority -128
<br>
pml:select: Wrapper Component: Component crcpw was determined to be a
<br>
Wrapper PML with priority -128
<br>
select: component dr not in the include list
<br>
select: initializing pml component ob1
<br>
select: init returned priority 20
<br>
select: component v not in the include list
<br>
selected ob1 best priority 20
<br>
select: component ob1 selected
<br>
mca: base: close: component cm closed
<br>
mca: base: close: unloading component cm
<br>
mca: base: close: component dr closed
<br>
mca: base: close: unloading component dr
<br>
pml_v: parasite_close: Ok, I accept to die and let ob1 component finish
<br>
pml_v: vprotocol_pessimist: component_close
<br>
pml_v: mca: base: close: component pessimist closed
<br>
pml_v: mca: base: close: unloading component pessimist
<br>
mca: base: close: component v closed
<br>
mca: base: close: unloading component v
<br>
pml:select: Wrapping: Component ob1 [20] is being wrapped by component
<br>
crcpw [-128]
<br>
pml:crcpw: component_init: Wrap the selected component ob1
<br>
pml:crcpw: component_init: Initalize Wrapper
<br>
ompi_cr: init: ompi_cr_init()
<br>
ompi_cr: finalize: ompi_cr_finalize()
<br>
pml:crcpw: component_finalize: Finalize
<br>
mca: base: close: component ob1 closed
<br>
mca: base: close: unloading component ob1
<br>
orte_cr: finalize: orte_cr_finalize()
<br>
<p>The MCA parameters are (except the verbose parameters):
<br>
<p>vprotocol_pessimist_priority=120 (very, very big...?)
<br>
snapc_base_global_snapshot_dir=/tmp/checkpoints
<br>
snapc_base_store_in_place=0
<br>
opal_cr_allow_opal_only=0
<br>
mca_base_component_distill_checkpoint_ready=0
<br>
ft_cr_enabled=1
<br>
crs=
<br>
rml_wrapper=ftrm
<br>
snapc=single (similar to full but do a checkpoint of only one process)
<br>
filem=rsh
<br>
pml_wrapper=crcpw
<br>
crcp=uncoord (similar to coord but need to do checkpoint of only one 
<br>
process)
<br>
btl=tcp,self
<br>
<p>Thanks,
<br>
Leonardo Fialho
<br>
<p><pre>
-- 
Leonardo Fialho
Computer Architecture and Operating Systems Department - CAOS
Universidad Autonoma de Barcelona - UAB
ETSE, Edifcio Q, QC/3088
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
Phone: +34-93-581-2888
Fax: +34-93-581-2478
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5142.php">Aurélien Bouteiller: "Re: [OMPI users] pml_v question"</a>
<li><strong>Previous message:</strong> <a href="5140.php">Frank Tabakin: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5142.php">Aurélien Bouteiller: "Re: [OMPI users] pml_v question"</a>
<li><strong>Reply:</strong> <a href="5142.php">Aurélien Bouteiller: "Re: [OMPI users] pml_v question"</a>
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
