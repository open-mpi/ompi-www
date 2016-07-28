<?
$subject_val = "Re: [OMPI users] pml_v question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 16:04:43 2008" -->
<!-- isoreceived="20080305210443" -->
<!-- sent="Wed, 05 Mar 2008 22:04:40 +0100" -->
<!-- isosent="20080305210440" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pml_v question" -->
<!-- id="47CF0AE8.2060306_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="287B8D6A-8CB6-4722-88D4-F37735BE7DB2_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] pml_v question<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-05 16:04:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5144.php">Jeff Squyres: "Re: [OMPI users] General Design Question"</a>
<li><strong>Previous message:</strong> <a href="5142.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] pml_v question"</a>
<li><strong>In reply to:</strong> <a href="5142.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] pml_v question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure! :) Thank you so much!
<br>
<p>Leonardo
<br>
<p>Aur&#233;lien Bouteiller escribi&#243;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to enable the vprotocol pessimist, you have to specify -mca vprotocol  
</span><br>
<span class="quotelev1">&gt; pessimist. This parameter takes precedence on the priority. Let me  
</span><br>
<span class="quotelev1">&gt; know if you hit success :]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 5 mars 08 &#224; 13:55, Leonardo Fialho a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#180;m trying to use the pml_v (pessimist) with FT components, but during
</span><br>
<span class="quotelev2">&gt;&gt; the loading the pml_v closes and close the vprotocol_pessimist too...
</span><br>
<span class="quotelev2">&gt;&gt; according the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (log of only one process...)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 2 -hostfile ../hostfile -am ../ft-enable-cr -v -d ./ 
</span><br>
<span class="quotelev2">&gt;&gt; ping 10 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; opal_cr: init: Verbose Level: 128
</span><br>
<span class="quotelev2">&gt;&gt; opal_cr: init: FT Enabled: 1
</span><br>
<span class="quotelev2">&gt;&gt; opal_cr: init: OPAL CR Allow OPAL Only: 0
</span><br>
<span class="quotelev2">&gt;&gt; opal_cr: init: Is a tool program: 0
</span><br>
<span class="quotelev2">&gt;&gt; opal_cr: init: Checkpoint Signal: 10
</span><br>
<span class="quotelev2">&gt;&gt; opal_cr: init: Temp Directory: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; proc_info: hnp_uri
</span><br>
<span class="quotelev2">&gt;&gt; 1251737600.0;tcp://172.20.5.128:46169;tcp:// 
</span><br>
<span class="quotelev2">&gt;&gt; 158.109.65.178:46169;tcp://10.8.0.1:46169
</span><br>
<span class="quotelev2">&gt;&gt;       daemon uri 1251737600.1;tcp://172.20.5.1:39991
</span><br>
<span class="quotelev2">&gt;&gt; App) Named Pipes (/tmp/opal_cr_prog_read.17352)
</span><br>
<span class="quotelev2">&gt;&gt; (/tmp/opal_cr_prog_write.17352)
</span><br>
<span class="quotelev2">&gt;&gt; orte_cr: init: orte_cr_init()
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: components_open: Looking for pml components
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: components_open: opening pml components
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: components_open: found loaded component cm
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: components_open: component cm open function successful
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: components_open: found loaded component crcpw
</span><br>
<span class="quotelev2">&gt;&gt; pml:crcpw: open()
</span><br>
<span class="quotelev2">&gt;&gt; pml:crcpw: open: priority   = -128
</span><br>
<span class="quotelev2">&gt;&gt; pml:crcpw: open: verbosity  = 128
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: components_open: component crcpw open function successful
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: components_open: found loaded component dr
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: components_open: component dr open function successful
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: components_open: found loaded component ob1
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: components_open: component ob1 open function successful
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: components_open: found loaded component v
</span><br>
<span class="quotelev2">&gt;&gt; pml_v: loaded
</span><br>
<span class="quotelev2">&gt;&gt; pml_v: vprotocol_pessimist: component_open: read priority 120
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: components_open: component v open function successful
</span><br>
<span class="quotelev2">&gt;&gt; select: initializing pml component cm
</span><br>
<span class="quotelev2">&gt;&gt; select: init returned failure for component cm
</span><br>
<span class="quotelev2">&gt;&gt; select: initializing pml component crcpw
</span><br>
<span class="quotelev2">&gt;&gt; pml:crcpw: component_init: Priority -128
</span><br>
<span class="quotelev2">&gt;&gt; select: init returned priority -128
</span><br>
<span class="quotelev2">&gt;&gt; pml:select: Wrapper Component: Component crcpw was determined to be a
</span><br>
<span class="quotelev2">&gt;&gt; Wrapper PML with priority -128
</span><br>
<span class="quotelev2">&gt;&gt; select: component dr not in the include list
</span><br>
<span class="quotelev2">&gt;&gt; select: initializing pml component ob1
</span><br>
<span class="quotelev2">&gt;&gt; select: init returned priority 20
</span><br>
<span class="quotelev2">&gt;&gt; select: component v not in the include list
</span><br>
<span class="quotelev2">&gt;&gt; selected ob1 best priority 20
</span><br>
<span class="quotelev2">&gt;&gt; select: component ob1 selected
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: close: component cm closed
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: close: unloading component cm
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: close: component dr closed
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: close: unloading component dr
</span><br>
<span class="quotelev2">&gt;&gt; pml_v: parasite_close: Ok, I accept to die and let ob1 component  
</span><br>
<span class="quotelev2">&gt;&gt; finish
</span><br>
<span class="quotelev2">&gt;&gt; pml_v: vprotocol_pessimist: component_close
</span><br>
<span class="quotelev2">&gt;&gt; pml_v: mca: base: close: component pessimist closed
</span><br>
<span class="quotelev2">&gt;&gt; pml_v: mca: base: close: unloading component pessimist
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: close: component v closed
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: close: unloading component v
</span><br>
<span class="quotelev2">&gt;&gt; pml:select: Wrapping: Component ob1 [20] is being wrapped by component
</span><br>
<span class="quotelev2">&gt;&gt; crcpw [-128]
</span><br>
<span class="quotelev2">&gt;&gt; pml:crcpw: component_init: Wrap the selected component ob1
</span><br>
<span class="quotelev2">&gt;&gt; pml:crcpw: component_init: Initalize Wrapper
</span><br>
<span class="quotelev2">&gt;&gt; ompi_cr: init: ompi_cr_init()
</span><br>
<span class="quotelev2">&gt;&gt; ompi_cr: finalize: ompi_cr_finalize()
</span><br>
<span class="quotelev2">&gt;&gt; pml:crcpw: component_finalize: Finalize
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: close: component ob1 closed
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: close: unloading component ob1
</span><br>
<span class="quotelev2">&gt;&gt; orte_cr: finalize: orte_cr_finalize()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The MCA parameters are (except the verbose parameters):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_priority=120 (very, very big...?)
</span><br>
<span class="quotelev2">&gt;&gt; snapc_base_global_snapshot_dir=/tmp/checkpoints
</span><br>
<span class="quotelev2">&gt;&gt; snapc_base_store_in_place=0
</span><br>
<span class="quotelev2">&gt;&gt; opal_cr_allow_opal_only=0
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_component_distill_checkpoint_ready=0
</span><br>
<span class="quotelev2">&gt;&gt; ft_cr_enabled=1
</span><br>
<span class="quotelev2">&gt;&gt; crs=
</span><br>
<span class="quotelev2">&gt;&gt; rml_wrapper=ftrm
</span><br>
<span class="quotelev2">&gt;&gt; snapc=single (similar to full but do a checkpoint of only one process)
</span><br>
<span class="quotelev2">&gt;&gt; filem=rsh
</span><br>
<span class="quotelev2">&gt;&gt; pml_wrapper=crcpw
</span><br>
<span class="quotelev2">&gt;&gt; crcp=uncoord (similar to coord but need to do checkpoint of only one
</span><br>
<span class="quotelev2">&gt;&gt; process)
</span><br>
<span class="quotelev2">&gt;&gt; btl=tcp,self
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev2">&gt;&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev2">&gt;&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev2">&gt;&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev2">&gt;&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +34-93-581-2478
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
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev1">&gt; * Sr. Research Associate at Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; * University of Tennessee
</span><br>
<span class="quotelev1">&gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev1">&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev1">&gt; * 865 974 6321
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
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="5144.php">Jeff Squyres: "Re: [OMPI users] General Design Question"</a>
<li><strong>Previous message:</strong> <a href="5142.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] pml_v question"</a>
<li><strong>In reply to:</strong> <a href="5142.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] pml_v question"</a>
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
