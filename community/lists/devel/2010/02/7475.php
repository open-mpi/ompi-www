<?
$subject_val = "Re: [OMPI devel] Vprotocol pessimist - Open MPI 1.4.1 and 1.4.2a1r22558";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 04:54:58 2010" -->
<!-- isoreceived="20100224095458" -->
<!-- sent="Wed, 24 Feb 2010 04:54:48 -0500" -->
<!-- isosent="20100224095448" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Vprotocol pessimist - Open MPI 1.4.1 and 1.4.2a1r22558" -->
<!-- id="FF509EEC-CF14-4010-A653-F20EE2BFB20B_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4226a8f1002060721s2006fbc0q4d46af05f8244d3c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Vprotocol pessimist - Open MPI 1.4.1 and 1.4.2a1r22558<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-24 04:54:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7476.php">hu yaohui: "[OMPI devel] what's the relationship between proc, endpoint and btl?"</a>
<li><strong>Previous message:</strong> <a href="7474.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7379.php">Caciano Machado: "[OMPI devel] Vprotocol pessimist - Open MPI 1.4.1 and 1.4.2a1r22558"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>The instructions you found are now obsolete. I'll update them, thank you for pointing out.
<br>
<p>The new procedure to use uncoordinated checkpoint is now 
<br>
mpirun -mca vprotocol pessimist -mca pml ob1,v [regular arguments]. 
<br>
<p>The version available in trunk does not support actual restart due to lack of runtime support, and is limited to performance evaluation of FT cost without failures. There is an ongoing proposal to include such support in the main branch. However, we do have a branched version of Open MPI including all the necessary support that I can be provided on request. Please also consider that this is an ongoing research effort that has not yet matured enough to be used in a production environment. 
<br>
<p>Aurelien Bouteiller
<br>
<pre>
--
Dr. Aurelien Bouteiller
Innovative Computing Laboratory at the University of Tennessee
Le 6 f&#233;vr. 2010 &#224; 10:21, Caciano Machado a &#233;crit :
&gt; Hi,
&gt; 
&gt; I'm following the instructions found at
&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/EventLog_CR">https://svn.open-mpi.org/trac/ompi/wiki/EventLog_CR</a> to run an
&gt; application with the vprotocol pessimist enabled. I believe that I'm
&gt; doing something wrong but I can't figure out the problem.
&gt; 
&gt; I have compiled Open MPI 1.4.1 and 1.4.2a1r22558 with the parameters:
&gt; ./configure --prefix=/usr/local/openmpi-v/ --with-ft=cr
&gt; --with-blcr=/usr/local/blcr/
&gt; 
&gt; Here is my configuration file:
&gt; vprotocol_pessimist_priority=10
&gt; pml_base_verbose=10
&gt; pbl_v_verbose=500
&gt; 
&gt; The command line:
&gt; mpirun -am /etc/v -np 2 -machinefile /etc/machinefile ep.B.8
&gt; 
&gt; And the mpirun output:
&gt; ##############################################################################3
&gt; [xiru-10:03440] mca: base: components_open: Looking for pml components
&gt; [xiru-10:03440] mca: base: components_open: opening pml components
&gt; [xiru-10:03440] mca: base: components_open: found loaded component cm
&gt; [xiru-10:03440] mca: base: components_open: component cm has no
&gt; register function
&gt; [xiru-10:03440] mca: base: component_find: unable to open
&gt; /usr/local/openmpi-v/lib/openmpi/mca_mtl_mx: perhaps a missing symbol,
&gt; or compiled for a different version of Open MPI? (ignored)
&gt; 
&gt; [xiru-10:03440] mca: base: components_open: component cm open function
&gt; successful
&gt; [xiru-10:03440] mca: base: components_open: found loaded component crcpw
&gt; [xiru-10:03440] mca: base: components_open: component crcpw has no
&gt; register function
&gt; [xiru-10:03440] mca: base: components_open: component crcpw open
&gt; function successful
&gt; [xiru-10:03440] mca: base: components_open: found loaded component csum
&gt; [xiru-10:03440] mca: base: components_open: component csum has no
&gt; register function
&gt; [xiru-10:03440] mca: base: component_find: unable to open
&gt; /usr/local/openmpi-v/lib/openmpi/mca_btl_mx: perhaps a missing symbol,
&gt; or compiled for a different version of Open MPI? (ignored)
&gt; [xiru-10:03440] mca: base: components_open: component csum open
&gt; function successful
&gt; [xiru-10:03440] mca: base: components_open: found loaded component ob1
&gt; [xiru-10:03440] mca: base: components_open: component ob1 has no
&gt; register function
&gt; [xiru-10:03440] mca: base: components_open: component ob1 open
&gt; function successful
&gt; [xiru-10:03440] mca: base: components_open: found loaded component v
&gt; [xiru-10:03440] mca: base: components_open: component v has no register function
&gt; [xiru-10:03440] mca: base: components_open: component v open function successful
&gt; --------------------------------------------------------------------------
&gt; [[65326,1],0]: A high-performance Open MPI point-to-point messaging module
&gt; was unable to find any relevant network interfaces:
&gt; 
&gt; Module: OpenFabrics (openib)
&gt;  Host: xiru-10.portoalegre.grenoble.grid5000.fr
&gt; 
&gt; Another transport will be used instead, although this may result in
&gt; lower performance.
&gt; --------------------------------------------------------------------------
&gt; [xiru-10:03440] select: initializing pml component cm
&gt; [xiru-10:03440] select: init returned failure for component cm
&gt; [xiru-10:03440] select: component crcpw not in the include list
&gt; [xiru-10:03440] select: component csum not in the include list
&gt; [xiru-10:03440] select: initializing pml component ob1
&gt; [xiru-10:03440] select: init returned priority 20
&gt; [xiru-10:03440] select: component v not in the include list
&gt; [xiru-10:03440] selected ob1 best priority 20
&gt; [xiru-10:03440] select: component ob1 selected
&gt; [xiru-10:03440] mca: base: close: component cm closed
&gt; [xiru-10:03440] mca: base: close: unloading component cm
&gt; [xiru-10:03440] mca: base: close: component crcpw closed
&gt; [xiru-10:03440] mca: base: close: unloading component crcpw
&gt; [xiru-10:03440] mca: base: close: component csum closed
&gt; [xiru-10:03440] mca: base: close: unloading component csum
&gt; [xiru-10:03440] mca: base: close: component v closed
&gt; [xiru-10:03440] mca: base: close: unloading component v
&gt; ...
&gt; 
&gt; #########################################################3
&gt; 
&gt; It seems that the vprotocol module is not loading properly. Does
&gt; anyone have a solution to run Open MPI with this module?
&gt; 
&gt; Regards,
&gt; Caciano Machado
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7476.php">hu yaohui: "[OMPI devel] what's the relationship between proc, endpoint and btl?"</a>
<li><strong>Previous message:</strong> <a href="7474.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7379.php">Caciano Machado: "[OMPI devel] Vprotocol pessimist - Open MPI 1.4.1 and 1.4.2a1r22558"</a>
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
