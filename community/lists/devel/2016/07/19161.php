<?
$subject_val = "[OMPI devel] Caught ibv_create_ah error in executing multi-node MPI program with openmpi-1.10.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 07:07:03 2016" -->
<!-- isoreceived="20160707110703" -->
<!-- sent="Thu, 7 Jul 2016 11:06:24 +0000" -->
<!-- isosent="20160707110624" -->
<!-- name="Takashi Sato" -->
<!-- email="t-sato_at_[hidden]" -->
<!-- subject="[OMPI devel] Caught ibv_create_ah error in executing multi-node MPI program with openmpi-1.10.3" -->
<!-- id="47C583EE86DD9948B54B114FC930AE6103198751_at_BPXM20GP.gisp.nec.co.jp" -->
<!-- charset="iso-2022-jp" -->
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
<strong>Subject:</strong> [OMPI devel] Caught ibv_create_ah error in executing multi-node MPI program with openmpi-1.10.3<br>
<strong>From:</strong> Takashi Sato (<em>t-sato_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-07 07:06:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19162.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>Previous message:</strong> <a href="19160.php">tmishima_at_[hidden]: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
<p>I have a problem regarding the subject. The detail is below.
<br>
Is there anybody who can answer this behavior is a restriction of
<br>
openmpi or something?
<br>
<p>I executed an mpi program and caught the following error related to ibv_create_ah.
<br>
<p>[sho_at_host0 ~]$ /opt/openmpi1103_debug/bin/mpirun -host host0,host1 -npernode 1 -np 2 ./sample
<br>
PROC(0): senddata = 10
<br>
libibverbs: ibv_create_ah failed to query port.
<br>
[host1:4395] *** An error occurred in MPI_Send
<br>
[host1:4395] *** reported by process [139776618004481,0]
<br>
[host1:4395] *** on communicator MPI_COMM_WORLD
<br>
[host1:4395] *** MPI_ERR_OTHER: known error not in list
<br>
[host1:4395] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
[host1:4395] ***    and potentially your MPI job)
<br>
<p>host0 has a ConnectX-3 HCA with 2 ports and a cable is connected with the port 2.
<br>
host1 has a ConnectX-4 HCA with 1 port and a cable is connected with the port 1.
<br>
<p>The function udcm_endpoint_init_data seems to pass a remote port number to ibv_create_ah.
<br>
I added a printf to output remote_msg-&gt;mm_port_num and found it output 1 on host0,
<br>
output 2 on host1.
<br>
Is this correct? I think a local port number should be specified to ibv_create_ah.
<br>
<p>static int udcm_endpoint_init_data (mca_btl_base_endpoint_t *lcl_ep)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:                                  :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ah_attr.dlid          = lcl_ep-&gt;rem_info.rem_lid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ah_attr.port_num      = remote_msg-&gt;mm_port_num; &lt;****** It's a remote port.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ah_attr.sl            = mca_btl_openib_component.ib_service_level;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ah_attr.src_path_bits = lcl_ep-&gt;endpoint_btl-&gt;src_path_bits;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;udep-&gt;ah = ibv_create_ah (lcl_ep-&gt;endpoint_btl-&gt;device-&gt;ib_pd, &amp;ah_attr);
<br>
<p>I modified the above code to specify a local port directly.  The sample code was
<br>
executed correctly on host0 and host1.
<br>
<p>With best regards,
<br>
Takashi Sato
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19162.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>Previous message:</strong> <a href="19160.php">tmishima_at_[hidden]: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
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
