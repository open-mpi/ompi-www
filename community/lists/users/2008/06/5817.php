<?
$subject_val = "Re: [OMPI users] Problem with X forwarding";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 17:04:48 2008" -->
<!-- isoreceived="20080604210448" -->
<!-- sent="Wed, 04 Jun 2008 17:04:37 -0400" -->
<!-- isosent="20080604210437" -->
<!-- name="Allen Barnett" -->
<!-- email="allen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with X forwarding" -->
<!-- id="1212613477.2259.37.camel_at_alpaca.lan" -->
<!-- inreplyto="815F58EA-3FC5-446B-954D-0BE25F51DD1D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with X forwarding<br>
<strong>From:</strong> Allen Barnett (<em>allen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 17:04:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5818.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Previous message:</strong> <a href="5816.php">Jeff Squyres: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>In reply to:</strong> <a href="5810.php">Jeff Squyres: "Re: [OMPI users] Problem with X forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5852.php">Dave Grote: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>Reply:</strong> <a href="5852.php">Dave Grote: "Re: [OMPI users] Problem with X forwarding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are using a recent version of Linux (as machine A), the X server
<br>
is probably started with its TCP network connection turned off. For
<br>
example, if you do:
<br>
<p>$ ps auxw | grep X
<br>
/usr/bin/Xorg :0 -br -audit 0 -auth /var/gdm/:0.Xauth -nolisten tcp vt7
<br>
<p>The &quot;-nolisten tcp&quot; option turns off the X server's remote connection
<br>
socket. Also, &quot;netstat -atp&quot; on A will show that nothing is listening on
<br>
port 6000. So, for example, from machine B:
<br>
<p>[B]$ xlogo -display A:0
<br>
<p>doesn't work.
<br>
<p>The trick I've used: Before you run your MPI application, you can ssh to
<br>
the remote node with X forwarding enabled (&quot;ssh -Y&quot;). On the remote
<br>
system, do &quot;echo $DISPLAY&quot; to see what DISPLAY environment variable ssh
<br>
created. For example, it might be something like &quot;localhost:10.0&quot;. Leave
<br>
this ssh connection open and then run your OMPI application in another
<br>
window and pass &quot;-x DISPLAY=localhost:10.0&quot; through MPI. X applications
<br>
on the remote node *should* now be able to connect back through the open
<br>
ssh connection. This probably won't scale very well, though.
<br>
<p>Allen
<br>
<p>On Wed, 2008-06-04 at 14:36 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; In general, Open MPI doesn't have anything to do with X forwarding.   
</span><br>
<span class="quotelev1">&gt; However, if you're using ssh to startup your processes, ssh may  
</span><br>
<span class="quotelev1">&gt; configure X forwarding for you (depending on your local system  
</span><br>
<span class="quotelev1">&gt; setup).  But OMPI closes down ssh channels once applications have  
</span><br>
<span class="quotelev1">&gt; launched (there's no need to keep them open), so any X forwarding that  
</span><br>
<span class="quotelev1">&gt; may have been setup will be closed down.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The *easiest* way to setup X forwarding is simply to allow X  
</span><br>
<span class="quotelev1">&gt; connections to your local host from the node(s) that will be running  
</span><br>
<span class="quotelev1">&gt; your application.  E.g., use the &quot;xhost&quot; command to add the target  
</span><br>
<span class="quotelev1">&gt; nodes into the access list.  And then have mpirun export a suitable  
</span><br>
<span class="quotelev1">&gt; DISPLAY variable, such as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export DISPLAY=my_hostname:0
</span><br>
<span class="quotelev1">&gt; mpirun -x DISPLAY ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;-x DISPLAY&quot; clause tells Open MPI to export the value of the  
</span><br>
<span class="quotelev1">&gt; DISPLAY variable to all nodes when running your application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 30, 2008, at 1:24 PM, Cally K wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; hi, I have some problem running DistributedData.cxx ( it is a VTK  
</span><br>
<span class="quotelev2">&gt; &gt; file ) , I need to be able to see the rendering from my computer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I, however have problem running the executable, I loaded both the  
</span><br>
<span class="quotelev2">&gt; &gt; executabe into 2 machines
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and I am accesing it from my computer( DHCP enabled )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; after running the following command - I use OpenMPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -hostfile myhostfile -np 2 -bynode ./DistributedData
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and I keep getting these errors
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ERROR: In /home/kalpanak/Installation_Files/VTKProject/VTK/Rendering/ 
</span><br>
<span class="quotelev2">&gt; &gt; vtkXOpenGLRenderWindow.cxx, line 326
</span><br>
<span class="quotelev2">&gt; &gt; vtkXOpenGLRenderWindow (0x8664438): bad X server connection.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ERROR: In /home/kalpanak/Installation_Files/VTKProject/VTK/Rendering/ 
</span><br>
<span class="quotelev2">&gt; &gt; vtkXOpenGLRenderWindow.cxx, line 169
</span><br>
<span class="quotelev2">&gt; &gt; vtkXOpenGLRenderWindow (0x8664438): bad X server connection.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] Failing at address: 0x84
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] [ 0] [0xffffe440]
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] [ 1] ./ 
</span><br>
<span class="quotelev2">&gt; &gt; DistributedData(_ZN22vtkXOpenGLRenderWindow20GetDesiredVisualInfoEv 
</span><br>
<span class="quotelev2">&gt; &gt; +0x229) [0x8227e7d]
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] [ 2] ./ 
</span><br>
<span class="quotelev2">&gt; &gt; DistributedData(_ZN22vtkXOpenGLRenderWindow16WindowInitializeEv 
</span><br>
<span class="quotelev2">&gt; &gt; +0x340) [0x8226812]
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] [ 3] ./ 
</span><br>
<span class="quotelev2">&gt; &gt; DistributedData(_ZN22vtkXOpenGLRenderWindow10InitializeEv+0x29)  
</span><br>
<span class="quotelev2">&gt; &gt; [0x82234f9]
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] [ 4] ./ 
</span><br>
<span class="quotelev2">&gt; &gt; DistributedData(_ZN22vtkXOpenGLRenderWindow5StartEv+0x29) [0x82235eb]
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] [ 5] ./ 
</span><br>
<span class="quotelev2">&gt; &gt; DistributedData(_ZN15vtkRenderWindow14DoStereoRenderEv+0x1a)  
</span><br>
<span class="quotelev2">&gt; &gt; [0x82342ac]
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] [ 6] ./ 
</span><br>
<span class="quotelev2">&gt; &gt; DistributedData(_ZN15vtkRenderWindow10DoFDRenderEv+0x427) [0x8234757]
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] [ 7] ./ 
</span><br>
<span class="quotelev2">&gt; &gt; DistributedData(_ZN15vtkRenderWindow10DoAARenderEv+0x5b7) [0x8234d19]
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] [ 8] ./DistributedData(_ZN15vtkRenderWindow6RenderEv 
</span><br>
<span class="quotelev2">&gt; &gt; +0x690) [0x82353b4]
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] [ 9] ./ 
</span><br>
<span class="quotelev2">&gt; &gt; DistributedData(_ZN22vtkXOpenGLRenderWindow6RenderEv+0x52) [0x82245e2]
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] [10] ./DistributedData [0x819e355]
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] [11] ./ 
</span><br>
<span class="quotelev2">&gt; &gt; DistributedData(_ZN16vtkMPIController19SingleMethodExecuteEv+0x1ab)  
</span><br>
<span class="quotelev2">&gt; &gt; [0x837a447]
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] [12] ./DistributedData(main+0x180) [0x819de78]
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] [13] /lib/libc.so.6(__libc_start_main+0xe0) [0xb79c0fe0]
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] [14] ./DistributedData [0x819dc21]
</span><br>
<span class="quotelev2">&gt; &gt; [vrc1:27394] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that job rank 0 with PID 27394 on node .... exited on  
</span><br>
<span class="quotelev2">&gt; &gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Maybe I am not doing the xforwading properly, but has anyone ever  
</span><br>
<span class="quotelev2">&gt; &gt; encountered the same problem, it works fine on one pc, and I read  
</span><br>
<span class="quotelev2">&gt; &gt; the mailing list but I just don't know if my prob is similiar to  
</span><br>
<span class="quotelev2">&gt; &gt; their, I even tried changing the DISPLAY env
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is what I want to do
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; my mpirun should run on 2 machines ( A and B ) and I should be able  
</span><br>
<span class="quotelev2">&gt; &gt; to view the output ( on my PC ),
</span><br>
<span class="quotelev2">&gt; &gt; are there any specfic commands to use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<pre>
-- 
Allen Barnett
Transpire, Inc.
e-mail: allen_at_[hidden]
Ph: 518-887-2930
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5818.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Previous message:</strong> <a href="5816.php">Jeff Squyres: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>In reply to:</strong> <a href="5810.php">Jeff Squyres: "Re: [OMPI users] Problem with X forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5852.php">Dave Grote: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>Reply:</strong> <a href="5852.php">Dave Grote: "Re: [OMPI users] Problem with X forwarding"</a>
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
