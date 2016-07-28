<?
$subject_val = "Re: [OMPI users] Problem with X forwarding";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 14:36:13 2008" -->
<!-- isoreceived="20080604183613" -->
<!-- sent="Wed, 4 Jun 2008 14:36:00 -0400" -->
<!-- isosent="20080604183600" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with X forwarding" -->
<!-- id="815F58EA-3FC5-446B-954D-0BE25F51DD1D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b05971d10805301024w16aa497fy31a4647c333ecbef_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 14:36:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5811.php">Scott Shaw: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Previous message:</strong> <a href="5809.php">Jeff Squyres: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5772.php">Cally K: "[OMPI users] Problem with X forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5817.php">Allen Barnett: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>Reply:</strong> <a href="5817.php">Allen Barnett: "Re: [OMPI users] Problem with X forwarding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In general, Open MPI doesn't have anything to do with X forwarding.   
<br>
However, if you're using ssh to startup your processes, ssh may  
<br>
configure X forwarding for you (depending on your local system  
<br>
setup).  But OMPI closes down ssh channels once applications have  
<br>
launched (there's no need to keep them open), so any X forwarding that  
<br>
may have been setup will be closed down.
<br>
<p>The *easiest* way to setup X forwarding is simply to allow X  
<br>
connections to your local host from the node(s) that will be running  
<br>
your application.  E.g., use the &quot;xhost&quot; command to add the target  
<br>
nodes into the access list.  And then have mpirun export a suitable  
<br>
DISPLAY variable, such as:
<br>
<p>export DISPLAY=my_hostname:0
<br>
mpirun -x DISPLAY ...
<br>
<p>The &quot;-x DISPLAY&quot; clause tells Open MPI to export the value of the  
<br>
DISPLAY variable to all nodes when running your application.
<br>
<p>Hope this helps.
<br>
<p><p>On May 30, 2008, at 1:24 PM, Cally K wrote:
<br>
<p><span class="quotelev1">&gt; hi, I have some problem running DistributedData.cxx ( it is a VTK  
</span><br>
<span class="quotelev1">&gt; file ) , I need to be able to see the rendering from my computer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I, however have problem running the executable, I loaded both the  
</span><br>
<span class="quotelev1">&gt; executabe into 2 machines
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and I am accesing it from my computer( DHCP enabled )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; after running the following command - I use OpenMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -hostfile myhostfile -np 2 -bynode ./DistributedData
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and I keep getting these errors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR: In /home/kalpanak/Installation_Files/VTKProject/VTK/Rendering/ 
</span><br>
<span class="quotelev1">&gt; vtkXOpenGLRenderWindow.cxx, line 326
</span><br>
<span class="quotelev1">&gt; vtkXOpenGLRenderWindow (0x8664438): bad X server connection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR: In /home/kalpanak/Installation_Files/VTKProject/VTK/Rendering/ 
</span><br>
<span class="quotelev1">&gt; vtkXOpenGLRenderWindow.cxx, line 169
</span><br>
<span class="quotelev1">&gt; vtkXOpenGLRenderWindow (0x8664438): bad X server connection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] Failing at address: 0x84
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] [ 0] [0xffffe440]
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] [ 1] ./ 
</span><br>
<span class="quotelev1">&gt; DistributedData(_ZN22vtkXOpenGLRenderWindow20GetDesiredVisualInfoEv 
</span><br>
<span class="quotelev1">&gt; +0x229) [0x8227e7d]
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] [ 2] ./ 
</span><br>
<span class="quotelev1">&gt; DistributedData(_ZN22vtkXOpenGLRenderWindow16WindowInitializeEv 
</span><br>
<span class="quotelev1">&gt; +0x340) [0x8226812]
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] [ 3] ./ 
</span><br>
<span class="quotelev1">&gt; DistributedData(_ZN22vtkXOpenGLRenderWindow10InitializeEv+0x29)  
</span><br>
<span class="quotelev1">&gt; [0x82234f9]
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] [ 4] ./ 
</span><br>
<span class="quotelev1">&gt; DistributedData(_ZN22vtkXOpenGLRenderWindow5StartEv+0x29) [0x82235eb]
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] [ 5] ./ 
</span><br>
<span class="quotelev1">&gt; DistributedData(_ZN15vtkRenderWindow14DoStereoRenderEv+0x1a)  
</span><br>
<span class="quotelev1">&gt; [0x82342ac]
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] [ 6] ./ 
</span><br>
<span class="quotelev1">&gt; DistributedData(_ZN15vtkRenderWindow10DoFDRenderEv+0x427) [0x8234757]
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] [ 7] ./ 
</span><br>
<span class="quotelev1">&gt; DistributedData(_ZN15vtkRenderWindow10DoAARenderEv+0x5b7) [0x8234d19]
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] [ 8] ./DistributedData(_ZN15vtkRenderWindow6RenderEv 
</span><br>
<span class="quotelev1">&gt; +0x690) [0x82353b4]
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] [ 9] ./ 
</span><br>
<span class="quotelev1">&gt; DistributedData(_ZN22vtkXOpenGLRenderWindow6RenderEv+0x52) [0x82245e2]
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] [10] ./DistributedData [0x819e355]
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] [11] ./ 
</span><br>
<span class="quotelev1">&gt; DistributedData(_ZN16vtkMPIController19SingleMethodExecuteEv+0x1ab)  
</span><br>
<span class="quotelev1">&gt; [0x837a447]
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] [12] ./DistributedData(main+0x180) [0x819de78]
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] [13] /lib/libc.so.6(__libc_start_main+0xe0) [0xb79c0fe0]
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] [14] ./DistributedData [0x819dc21]
</span><br>
<span class="quotelev1">&gt; [vrc1:27394] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 27394 on node .... exited on  
</span><br>
<span class="quotelev1">&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe I am not doing the xforwading properly, but has anyone ever  
</span><br>
<span class="quotelev1">&gt; encountered the same problem, it works fine on one pc, and I read  
</span><br>
<span class="quotelev1">&gt; the mailing list but I just don't know if my prob is similiar to  
</span><br>
<span class="quotelev1">&gt; their, I even tried changing the DISPLAY env
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is what I want to do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my mpirun should run on 2 machines ( A and B ) and I should be able  
</span><br>
<span class="quotelev1">&gt; to view the output ( on my PC ),
</span><br>
<span class="quotelev1">&gt; are there any specfic commands to use.
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5811.php">Scott Shaw: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Previous message:</strong> <a href="5809.php">Jeff Squyres: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5772.php">Cally K: "[OMPI users] Problem with X forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5817.php">Allen Barnett: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>Reply:</strong> <a href="5817.php">Allen Barnett: "Re: [OMPI users] Problem with X forwarding"</a>
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
