<?
$subject_val = "Re: [OMPI users] Problem with X forwarding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 12:14:06 2008" -->
<!-- isoreceived="20080609161406" -->
<!-- sent="Mon, 09 Jun 2008 09:13:54 -0700" -->
<!-- isosent="20080609161354" -->
<!-- name="Dave Grote" -->
<!-- email="dpgrote_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with X forwarding" -->
<!-- id="484D56C2.7040903_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1212613477.2259.37.camel_at_alpaca.lan" -->
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
<strong>From:</strong> Dave Grote (<em>dpgrote_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-09 12:13:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5853.php">Reuti: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>Previous message:</strong> <a href="5851.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>In reply to:</strong> <a href="5817.php">Allen Barnett: "Re: [OMPI users] Problem with X forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5853.php">Reuti: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>Reply:</strong> <a href="5853.php">Reuti: "Re: [OMPI users] Problem with X forwarding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have this same issue from a while ago. Search for &quot;x11 forwarding&quot; in 
<br>
the archives. The solution I settled on is to use the -d option, the 
<br>
debug option. With this option, mpirun will keep the ssh sessions open, 
<br>
and so the X forwarding stays active. Note that you do get lots of 
<br>
debugging output at the start of the run, but after that, there's no 
<br>
extra output. An enhancement ticket was going to be added to add a 
<br>
command line option to keep the ssh sessions open (without having to 
<br>
turn debugging on). I never heard anything more on it, so apparently 
<br>
nothing happened. But using the -d option does work well and doesn't 
<br>
require any extra fiddling.
<br>
&nbsp;&nbsp;&nbsp;Dave
<br>
<p>Allen Barnett wrote:
<br>
<span class="quotelev1">&gt; If you are using a recent version of Linux (as machine A), the X server
</span><br>
<span class="quotelev1">&gt; is probably started with its TCP network connection turned off. For
</span><br>
<span class="quotelev1">&gt; example, if you do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ps auxw | grep X
</span><br>
<span class="quotelev1">&gt; /usr/bin/Xorg :0 -br -audit 0 -auth /var/gdm/:0.Xauth -nolisten tcp vt7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;-nolisten tcp&quot; option turns off the X server's remote connection
</span><br>
<span class="quotelev1">&gt; socket. Also, &quot;netstat -atp&quot; on A will show that nothing is listening on
</span><br>
<span class="quotelev1">&gt; port 6000. So, for example, from machine B:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [B]$ xlogo -display A:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; doesn't work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The trick I've used: Before you run your MPI application, you can ssh to
</span><br>
<span class="quotelev1">&gt; the remote node with X forwarding enabled (&quot;ssh -Y&quot;). On the remote
</span><br>
<span class="quotelev1">&gt; system, do &quot;echo $DISPLAY&quot; to see what DISPLAY environment variable ssh
</span><br>
<span class="quotelev1">&gt; created. For example, it might be something like &quot;localhost:10.0&quot;. Leave
</span><br>
<span class="quotelev1">&gt; this ssh connection open and then run your OMPI application in another
</span><br>
<span class="quotelev1">&gt; window and pass &quot;-x DISPLAY=localhost:10.0&quot; through MPI. X applications
</span><br>
<span class="quotelev1">&gt; on the remote node *should* now be able to connect back through the open
</span><br>
<span class="quotelev1">&gt; ssh connection. This probably won't scale very well, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Allen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 2008-06-04 at 14:36 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; In general, Open MPI doesn't have anything to do with X forwarding.   
</span><br>
<span class="quotelev2">&gt;&gt; However, if you're using ssh to startup your processes, ssh may  
</span><br>
<span class="quotelev2">&gt;&gt; configure X forwarding for you (depending on your local system  
</span><br>
<span class="quotelev2">&gt;&gt; setup).  But OMPI closes down ssh channels once applications have  
</span><br>
<span class="quotelev2">&gt;&gt; launched (there's no need to keep them open), so any X forwarding that  
</span><br>
<span class="quotelev2">&gt;&gt; may have been setup will be closed down.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The *easiest* way to setup X forwarding is simply to allow X  
</span><br>
<span class="quotelev2">&gt;&gt; connections to your local host from the node(s) that will be running  
</span><br>
<span class="quotelev2">&gt;&gt; your application.  E.g., use the &quot;xhost&quot; command to add the target  
</span><br>
<span class="quotelev2">&gt;&gt; nodes into the access list.  And then have mpirun export a suitable  
</span><br>
<span class="quotelev2">&gt;&gt; DISPLAY variable, such as:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export DISPLAY=my_hostname:0
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -x DISPLAY ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;-x DISPLAY&quot; clause tells Open MPI to export the value of the  
</span><br>
<span class="quotelev2">&gt;&gt; DISPLAY variable to all nodes when running your application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope this helps.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 30, 2008, at 1:24 PM, Cally K wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hi, I have some problem running DistributedData.cxx ( it is a VTK  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file ) , I need to be able to see the rendering from my computer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I, however have problem running the executable, I loaded both the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; executabe into 2 machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I am accesing it from my computer( DHCP enabled )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; after running the following command - I use OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -hostfile myhostfile -np 2 -bynode ./DistributedData
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I keep getting these errors
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ERROR: In /home/kalpanak/Installation_Files/VTKProject/VTK/Rendering/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vtkXOpenGLRenderWindow.cxx, line 326
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vtkXOpenGLRenderWindow (0x8664438): bad X server connection.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ERROR: In /home/kalpanak/Installation_Files/VTKProject/VTK/Rendering/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vtkXOpenGLRenderWindow.cxx, line 169
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vtkXOpenGLRenderWindow (0x8664438): bad X server connection.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] Failing at address: 0x84
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] [ 0] [0xffffe440]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] [ 1] ./ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DistributedData(_ZN22vtkXOpenGLRenderWindow20GetDesiredVisualInfoEv 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +0x229) [0x8227e7d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] [ 2] ./ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DistributedData(_ZN22vtkXOpenGLRenderWindow16WindowInitializeEv 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +0x340) [0x8226812]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] [ 3] ./ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DistributedData(_ZN22vtkXOpenGLRenderWindow10InitializeEv+0x29)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x82234f9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] [ 4] ./ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DistributedData(_ZN22vtkXOpenGLRenderWindow5StartEv+0x29) [0x82235eb]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] [ 5] ./ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DistributedData(_ZN15vtkRenderWindow14DoStereoRenderEv+0x1a)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x82342ac]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] [ 6] ./ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DistributedData(_ZN15vtkRenderWindow10DoFDRenderEv+0x427) [0x8234757]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] [ 7] ./ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DistributedData(_ZN15vtkRenderWindow10DoAARenderEv+0x5b7) [0x8234d19]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] [ 8] ./DistributedData(_ZN15vtkRenderWindow6RenderEv 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +0x690) [0x82353b4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] [ 9] ./ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DistributedData(_ZN22vtkXOpenGLRenderWindow6RenderEv+0x52) [0x82245e2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] [10] ./DistributedData [0x819e355]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] [11] ./ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DistributedData(_ZN16vtkMPIController19SingleMethodExecuteEv+0x1ab)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x837a447]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] [12] ./DistributedData(main+0x180) [0x819de78]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] [13] /lib/libc.so.6(__libc_start_main+0xe0) [0xb79c0fe0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] [14] ./DistributedData [0x819dc21]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vrc1:27394] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 27394 on node .... exited on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe I am not doing the xforwading properly, but has anyone ever  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; encountered the same problem, it works fine on one pc, and I read  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the mailing list but I just don't know if my prob is similiar to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; their, I even tried changing the DISPLAY env
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is what I want to do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my mpirun should run on 2 machines ( A and B ) and I should be able  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to view the output ( on my PC ),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are there any specfic commands to use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5853.php">Reuti: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>Previous message:</strong> <a href="5851.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>In reply to:</strong> <a href="5817.php">Allen Barnett: "Re: [OMPI users] Problem with X forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5853.php">Reuti: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>Reply:</strong> <a href="5853.php">Reuti: "Re: [OMPI users] Problem with X forwarding"</a>
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
