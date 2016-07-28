<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 19:22:03 2006" -->
<!-- isoreceived="20060524232203" -->
<!-- sent="Wed, 24 May 2006 19:22:00 -0400" -->
<!-- isosent="20060524232200" -->
<!-- name="Paul" -->
<!-- email="paul.lundin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pallas assistance ?" -->
<!-- id="d2403b0605241622g48c81048wcf71d55b61d02138_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF8C4159_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Paul (<em>paul.lundin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-24 19:22:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1284.php">Tom Rosmond: "[OMPI users] Wont run with 1.0.2"</a>
<li><strong>Previous message:</strong> <a href="1282.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>In reply to:</strong> <a href="1282.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1285.php">Andrew Friedley: "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Reply:</strong> <a href="1285.php">Andrew Friedley: "Re: [OMPI users] pallas assistance ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Somebody call orkin. ;-P
<br>
Well I tried running it with things set as noted in the bug report. However
<br>
it doesnt change anything on my end. I am willing to do any verification you
<br>
guys need (time permitting and all). Anything special needed to get
<br>
mpi_latency to compile ? I can run that to verify that things are actually
<br>
working on my end.
<br>
<p>[root_at_something ompi]# /opt/ompi/bin/mpirun --mca btl_openmpi_use_eager_rdma
<br>
0 -np 2 -hostfile machine.list ./IMB-MPI1
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x3000100a819d
<br>
[0] func:/opt/ompi/lib/libopal.so.0 [0x80001c6e18]
<br>
[1] func:[0x1ffffffdfa0]
<br>
[2] func:/opt/ompi/lib/libmpi.so.0 [0x800006516c]
<br>
[3] func:/opt/ompi/lib/libmpi.so.0 [0x80000652b4]
<br>
[4] func:/opt/ompi/lib/openmpi/mca_btl_openib.so [0x800056f2f0]
<br>
[5] func:/opt/ompi/lib/libmpi.so.0 [0x80000d0540]
<br>
[6] func:/opt/ompi/lib/openmpi/mca_bml_r2.so [0x80005548a8]
<br>
[7] func:/opt/ompi/lib/libmpi.so.0 [0x80000cfc8c]
<br>
[8] func:/opt/ompi/lib/openmpi/mca_pml_ob1.so [0x8000533d9c]
<br>
[9] func:/opt/ompi/lib/libmpi.so.0 [0x80000d9988]
<br>
[10] func:/opt/ompi/lib/libmpi.so.0 [0x8000087a80]
<br>
[11] func:/opt/ompi/lib/libmpi.so.0 [0x80000b09ac]
<br>
[12] func:./IMB-MPI1 [0x10003328]
<br>
[13] func:/lib64/tls/libc.so.6 [0x8064e9415c]
<br>
[14] func:/lib64/tls/libc.so.6 [0x8064e942e4]
<br>
*** End of error message ***
<br>
<p>[root_at_something ompi]# /opt/ompi/bin/mpirun --mca btl_openmpi_use_srq 1 -np
<br>
2 -hostfile machine.list ./IMB-MPI1
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x3000100a819d
<br>
[0] func:/opt/ompi/lib/libopal.so.0 [0x80001c6e18]
<br>
[1] func:[0x1ffffffdfa0]
<br>
[2] func:/opt/ompi/lib/libmpi.so.0 [0x800006516c]
<br>
[3] func:/opt/ompi/lib/libmpi.so.0 [0x80000652b4]
<br>
[4] func:/opt/ompi/lib/openmpi/mca_btl_openib.so [0x800056f2f0]
<br>
[5] func:/opt/ompi/lib/libmpi.so.0 [0x80000d0540]
<br>
[6] func:/opt/ompi/lib/openmpi/mca_bml_r2.so [0x80005548a8]
<br>
[7] func:/opt/ompi/lib/libmpi.so.0 [0x80000cfc8c]
<br>
[8] func:/opt/ompi/lib/openmpi/mca_pml_ob1.so [0x8000533d9c]
<br>
[9] func:/opt/ompi/lib/libmpi.so.0 [0x80000d9988]
<br>
[10] func:/opt/ompi/lib/libmpi.so.0 [0x8000087a80]
<br>
[11] func:/opt/ompi/lib/libmpi.so.0 [0x80000b09ac]
<br>
[12] func:./IMB-MPI1 [0x10003328]
<br>
[13] func:/lib64/tls/libc.so.6 [0x8064e9415c]
<br>
[14] func:/lib64/tls/libc.so.6 [0x8064e942e4]
<br>
*** End of error message ***
<br>
<p><p><p><p>On 5/24/06, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  There is a known issue with OpenIB on PPC machines at the moment -- see:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/ticket/23<https://svn.open-mpi.org/trac/ompi/ticket/23">https://svn.open-mpi.org/trac/ompi/ticket/23<https://svn.open-mpi.org/trac/ompi/ticket/23</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A temporary workaround is to either use the SRQ or disable eager RDMA.
</span><br>
<span class="quotelev1">&gt; See the bug for the details of both of these options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Paul
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, May 24, 2006 6:53 PM
</span><br>
<span class="quotelev1">&gt; *To:* users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI users] pallas assistance ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I have 64bit ppc versions of openmpi, openib and the pallas files
</span><br>
<span class="quotelev1">&gt; (IMB_MP1 being the important one). ldd checks out okay and shows nothing
</span><br>
<span class="quotelev1">&gt; missing. However when I try to execute the pallas run it dies like so:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_thing ompi]# /opt/ompi/bin/mpirun -np 2 -machinefile machine.list./IMB-MPI1
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x3000100a819d
</span><br>
<span class="quotelev1">&gt; [0] func:/opt/ompi/lib/libopal.so.0 [0x80001c6e18]
</span><br>
<span class="quotelev1">&gt; [1] func:[0x1ffffffdfd0]
</span><br>
<span class="quotelev1">&gt; [2] func:/opt/ompi/lib/libmpi.so.0 [0x800006516c]
</span><br>
<span class="quotelev1">&gt; [3] func:/opt/ompi/lib/libmpi.so.0 [0x80000652b4]
</span><br>
<span class="quotelev1">&gt; [4] func:/opt/ompi/lib/openmpi/mca_btl_openib.so [0x800056f2f0]
</span><br>
<span class="quotelev1">&gt; [5] func:/opt/ompi/lib/libmpi.so.0 [0x80000d0540]
</span><br>
<span class="quotelev1">&gt; [6] func:/opt/ompi/lib/openmpi/mca_bml_r2.so [0x80005548a8]
</span><br>
<span class="quotelev1">&gt; [7] func:/opt/ompi/lib/libmpi.so.0 [0x80000cfc8c]
</span><br>
<span class="quotelev1">&gt; [8] func:/opt/ompi/lib/openmpi/mca_pml_ob1.so [0x8000533d9c]
</span><br>
<span class="quotelev1">&gt; [9] func:/opt/ompi/lib/libmpi.so.0 [0x80000d9988]
</span><br>
<span class="quotelev1">&gt; [10] func:/opt/ompi/lib/libmpi.so.0 [0x8000087a80]
</span><br>
<span class="quotelev1">&gt; [11] func:/opt/ompi/lib/libmpi.so.0 [0x80000b09ac]
</span><br>
<span class="quotelev1">&gt; [12] func:./IMB-MPI1 [0x10003328]
</span><br>
<span class="quotelev1">&gt; [13] func:/lib64/tls/libc.so.6 [0x8064e9415c]
</span><br>
<span class="quotelev1">&gt; [14] func:/lib64/tls/libc.so.6 [0x8064e942e4]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; are there any special things that need to be done with pallas, open-ib,
</span><br>
<span class="quotelev1">&gt; open-mpi ? Pallas compiled fine and linked okay with the needed libraries.
</span><br>
<span class="quotelev1">&gt; Currently machine.list is just localhost twice.
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1283/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1284.php">Tom Rosmond: "[OMPI users] Wont run with 1.0.2"</a>
<li><strong>Previous message:</strong> <a href="1282.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>In reply to:</strong> <a href="1282.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1285.php">Andrew Friedley: "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Reply:</strong> <a href="1285.php">Andrew Friedley: "Re: [OMPI users] pallas assistance ?"</a>
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
