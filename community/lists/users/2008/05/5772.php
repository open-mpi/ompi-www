<?
$subject_val = "[OMPI users] Problem with X forwarding";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 30 13:24:26 2008" -->
<!-- isoreceived="20080530172426" -->
<!-- sent="Sat, 31 May 2008 01:24:19 +0800" -->
<!-- isosent="20080530172419" -->
<!-- name="Cally K" -->
<!-- email="kalpana0611_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with X forwarding" -->
<!-- id="b05971d10805301024w16aa497fy31a4647c333ecbef_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with X forwarding<br>
<strong>From:</strong> Cally K (<em>kalpana0611_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-30 13:24:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5773.php">Bruno Coutinho: "Re: [OMPI users] specifying hosts in mpi_spawn()"</a>
<li><strong>Previous message:</strong> <a href="5771.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5810.php">Jeff Squyres: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5810.php">Jeff Squyres: "Re: [OMPI users] Problem with X forwarding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi, I have some problem running DistributedData.cxx ( it is a VTK file ) , I
<br>
need to be able to see the rendering from my computer
<br>
<p>I, however have problem running the executable, I loaded both the executabe
<br>
into 2 machines
<br>
<p>and I am accesing it from my computer( DHCP enabled )
<br>
<p>after running the following command - I use OpenMPI
<br>
<p>mpirun -hostfile myhostfile -np 2 -bynode ./DistributedData
<br>
<p>and I keep getting these errors
<br>
<p>ERROR: In
<br>
/home/kalpanak/Installation_Files/VTKProject/VTK/Rendering/vtkXOpenGLRenderWindow.cxx,
<br>
line 326
<br>
vtkXOpenGLRenderWindow (0x8664438): bad X server connection.
<br>
<p><p>ERROR: In
<br>
/home/kalpanak/Installation_Files/VTKProject/VTK/Rendering/vtkXOpenGLRenderWindow.cxx,
<br>
line 169
<br>
vtkXOpenGLRenderWindow (0x8664438): bad X server connection.
<br>
<p><p>[vrc1:27394] *** Process received signal ***
<br>
[vrc1:27394] Signal: Segmentation fault (11)
<br>
[vrc1:27394] Signal code: Address not mapped (1)
<br>
[vrc1:27394] Failing at address: 0x84
<br>
[vrc1:27394] [ 0] [0xffffe440]
<br>
[vrc1:27394] [ 1]
<br>
./DistributedData(_ZN22vtkXOpenGLRenderWindow20GetDesiredVisualInfoEv+0x229)
<br>
[0x8227e7d]
<br>
[vrc1:27394] [ 2]
<br>
./DistributedData(_ZN22vtkXOpenGLRenderWindow16WindowInitializeEv+0x340)
<br>
[0x8226812]
<br>
[vrc1:27394] [ 3]
<br>
./DistributedData(_ZN22vtkXOpenGLRenderWindow10InitializeEv+0x29)
<br>
[0x82234f9]
<br>
[vrc1:27394] [ 4]
<br>
./DistributedData(_ZN22vtkXOpenGLRenderWindow5StartEv+0x29) [0x82235eb]
<br>
[vrc1:27394] [ 5]
<br>
./DistributedData(_ZN15vtkRenderWindow14DoStereoRenderEv+0x1a) [0x82342ac]
<br>
[vrc1:27394] [ 6]
<br>
./DistributedData(_ZN15vtkRenderWindow10DoFDRenderEv+0x427) [0x8234757]
<br>
[vrc1:27394] [ 7]
<br>
./DistributedData(_ZN15vtkRenderWindow10DoAARenderEv+0x5b7) [0x8234d19]
<br>
[vrc1:27394] [ 8] ./DistributedData(_ZN15vtkRenderWindow6RenderEv+0x690)
<br>
[0x82353b4]
<br>
[vrc1:27394] [ 9]
<br>
./DistributedData(_ZN22vtkXOpenGLRenderWindow6RenderEv+0x52) [0x82245e2]
<br>
[vrc1:27394] [10] ./DistributedData [0x819e355]
<br>
[vrc1:27394] [11]
<br>
./DistributedData(_ZN16vtkMPIController19SingleMethodExecuteEv+0x1ab)
<br>
[0x837a447]
<br>
[vrc1:27394] [12] ./DistributedData(main+0x180) [0x819de78]
<br>
[vrc1:27394] [13] /lib/libc.so.6(__libc_start_main+0xe0) [0xb79c0fe0]
<br>
[vrc1:27394] [14] ./DistributedData [0x819dc21]
<br>
[vrc1:27394] *** End of error message ***
<br>
mpirun noticed that job rank 0 with PID 27394 on node .... exited on signal
<br>
11 (Segmentation fault).
<br>
<p><p><p>Maybe I am not doing the xforwading properly, but has anyone ever
<br>
encountered the same problem, it works fine on one pc, and I read the
<br>
mailing list but I just don't know if my prob is similiar to their, I even
<br>
tried changing the DISPLAY env
<br>
<p><p>This is what I want to do
<br>
<p>my mpirun should run on 2 machines ( A and B ) and I should be able to view
<br>
the output ( on my PC ),
<br>
are there any specfic commands to use.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5772/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5773.php">Bruno Coutinho: "Re: [OMPI users] specifying hosts in mpi_spawn()"</a>
<li><strong>Previous message:</strong> <a href="5771.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5810.php">Jeff Squyres: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5810.php">Jeff Squyres: "Re: [OMPI users] Problem with X forwarding"</a>
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
