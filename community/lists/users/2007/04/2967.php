<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr  1 12:00:12 2007" -->
<!-- isoreceived="20070401160012" -->
<!-- sent="Sun, 01 Apr 2007 11:58:59 -0400" -->
<!-- isosent="20070401155859" -->
<!-- name="de Almeida, Valmor F." -->
<!-- email="dealmeidav_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20" -->
<!-- id="D2D7D9FE2492524A925313E2D82E1B5304E9EBE4_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200703302148.55033.tprins_at_open-mpi.org" -->
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
<strong>From:</strong> de Almeida, Valmor F. (<em>dealmeidav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-01 11:58:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2968.php">Barry Evans: "Re: [OMPI users] Torque/OpenMPI[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2966.php">Tim Prins: "Re: [OMPI users] Torque/OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2964.php">Tim Prins: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed with status=20"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2971.php">de Almeida, Valmor F.: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Tim,
<br>
<p>Thanks for the info. I also received this help from Myrinet:
<br>
<p><p>************
<br>
It looks like you are running out of endpoints.
<br>
<p>This discusses what endpoints are:
<br>
&nbsp;<a href="http://www.myri.com/cgi-bin/fom.pl?file=421">http://www.myri.com/cgi-bin/fom.pl?file=421</a> 
<br>
<p>And this explains how to increase the limit:
<br>
&nbsp;<a href="http://www.myri.com/cgi-bin/fom.pl?file=482">http://www.myri.com/cgi-bin/fom.pl?file=482</a>
<br>
<p>Let us know if this doesn't address the problem.
<br>
************
<br>
<p>I haven't had time to look into it.
<br>
<p><pre>
--
Valmor
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
On
&gt; Behalf Of Tim Prins
&gt; Sent: Friday, March 30, 2007 10:49 PM
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed
&gt; withstatus=20
&gt; 
&gt; Hi Valmor,
&gt; 
&gt; What is happening here is that when Open MPI tries to create MX
endpoint
&gt; for
&gt; communication, mx returns code 20, which is MX_BUSY.
&gt; 
&gt; At this point we should gracefully move on, but there is a bug in Open
MPI
&gt; 1.2
&gt; which causes a segmentation fault in case of this type of error. This
will
&gt; be
&gt; fixed in 1.2.1, and the fix is available now in the 1.2 nightly
tarballs.
&gt; 
&gt; Hope this helps,
&gt; 
&gt; Tim
&gt; 
&gt; On Friday 30 March 2007 05:06 pm, de Almeida, Valmor F. wrote:
&gt; &gt; Hello,
&gt; &gt;
&gt; &gt; I am getting this error any time the number of processes requested
per
&gt; &gt; machine is greater than the number of cpus. I suspect it is
something on
&gt; &gt; the configuration of mx / ompi that I am missing since another
machine I
&gt; &gt; have without mx installed runs ompi correctly with oversubscription.
&gt; &gt;
&gt; &gt; Thanks for any help.
&gt; &gt;
&gt; &gt; --
&gt; &gt; Valmor
&gt; &gt;
&gt; &gt;
&gt; &gt; -&gt;mpirun -np 3 --machinefile mymachines-1 a.out
&gt; &gt; [x1:23624] mca_btl_mx_init: mx_open_endpoint() failed with status=20
&gt; &gt; [x1:23624] *** Process received signal *** [x1:23624] Signal:
&gt; &gt; Segmentation fault (11) [x1:23624] Signal code: Address not mapped
(1)
&gt; &gt; [x1:23624] Failing at address: 0x20 [x1:23624] [ 0] [0xb7f7f440]
&gt; &gt; [x1:23624] [ 1]
&gt; &gt; /opt/openmpi-1.2/lib/openmpi/mca_btl_mx.so(mca_btl_mx_finalize+0x25)
&gt; &gt; [0xb7aca825] [x1:23624] [ 2]
&gt; &gt;
/opt/openmpi-1.2/lib/openmpi/mca_btl_mx.so(mca_btl_mx_component_init+0x6
&gt; &gt; f8) [0xb7acc658] [x1:23624] [ 3]
&gt; &gt; /opt/ompi/lib/libmpi.so.0(mca_btl_base_select+0x1a0) [0xb7f41900]
&gt; &gt; [x1:23624] [ 4]
&gt; &gt;
/opt/openmpi-1.2/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x2
&gt; &gt; 6) [0xb7ad1006] [x1:23624] [ 5]
&gt; &gt; /opt/ompi/lib/libmpi.so.0(mca_bml_base_init+0x78) [0xb7f41198]
&gt; &gt; [x1:23624] [ 6]
&gt; &gt;
/opt/openmpi-1.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_component_init+0
&gt; &gt; x7d) [0xb7af866d] [x1:23624] [ 7]
&gt; &gt; /opt/ompi/lib/libmpi.so.0(mca_pml_base_select+0x176) [0xb7f49b56]
&gt; &gt; [x1:23624] [ 8] /opt/ompi/lib/libmpi.so.0(ompi_mpi_init+0x4cf)
&gt; &gt; [0xb7f0fe2f] [x1:23624] [ 9]
/opt/ompi/lib/libmpi.so.0(MPI_Init+0xab)
&gt; &gt; [0xb7f3204b] [x1:23624] [10] a.out(_ZN3MPI4InitERiRPPc+0x18)
[0x8052cbe]
&gt; &gt; [x1:23624] [11] a.out(main+0x21) [0x804f4a7] [x1:23624] [12]
&gt; &gt; /lib/libc.so.6(__libc_start_main+0xdc) [0xb7be9824]
&gt; &gt;
&gt; &gt; content of mymachines-1 file
&gt; &gt;
&gt; &gt; x1  max_slots=4
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2968.php">Barry Evans: "Re: [OMPI users] Torque/OpenMPI[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2966.php">Tim Prins: "Re: [OMPI users] Torque/OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2964.php">Tim Prins: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed with status=20"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2971.php">de Almeida, Valmor F.: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
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
