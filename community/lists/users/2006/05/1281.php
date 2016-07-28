<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 18:53:10 2006" -->
<!-- isoreceived="20060524225310" -->
<!-- sent="Wed, 24 May 2006 18:53:02 -0400" -->
<!-- isosent="20060524225302" -->
<!-- name="Paul" -->
<!-- email="paul.lundin_at_[hidden]" -->
<!-- subject="[OMPI users] pallas assistance ?" -->
<!-- id="d2403b0605241553q4f63321ane44343603145d996_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul (<em>paul.lundin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-24 18:53:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1282.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Previous message:</strong> <a href="1280.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Compile issue on ppc64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1282.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Maybe reply:</strong> <a href="1282.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Maybe reply:</strong> <a href="1292.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Maybe reply:</strong> <a href="1302.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I have 64bit ppc versions of openmpi, openib and the pallas files
<br>
(IMB_MP1 being the important one). ldd checks out okay and shows nothing
<br>
missing. However when I try to execute the pallas run it dies like so:
<br>
<p><p><p>[root_at_thing ompi]# /opt/ompi/bin/mpirun -np 2 -machinefile
<br>
machine.list./IMB-MPI1
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x3000100a819d
<br>
[0] func:/opt/ompi/lib/libopal.so.0 [0x80001c6e18]
<br>
[1] func:[0x1ffffffdfd0]
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
<p>are there any special things that need to be done with pallas, open-ib,
<br>
open-mpi ? Pallas compiled fine and linked okay with the needed libraries.
<br>
Currently machine.list is just localhost twice.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1281/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1282.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Previous message:</strong> <a href="1280.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Compile issue on ppc64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1282.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Maybe reply:</strong> <a href="1282.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Maybe reply:</strong> <a href="1292.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Maybe reply:</strong> <a href="1302.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
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
