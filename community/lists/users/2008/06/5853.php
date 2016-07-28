<?
$subject_val = "Re: [OMPI users] Problem with X forwarding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 13:27:10 2008" -->
<!-- isoreceived="20080609172710" -->
<!-- sent="Mon, 9 Jun 2008 19:26:53 +0200" -->
<!-- isosent="20080609172653" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with X forwarding" -->
<!-- id="89491326-61FA-4701-B9AC-AEFCBECC4CB2_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="484D56C2.7040903_at_lbl.gov" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-09 13:26:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5854.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Previous message:</strong> <a href="5852.php">Dave Grote: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>In reply to:</strong> <a href="5852.php">Dave Grote: "Re: [OMPI users] Problem with X forwarding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 09.06.2008 um 18:13 schrieb Dave Grote:
<br>
<p><span class="quotelev1">&gt; I have this same issue from a while ago. Search for &quot;x11  
</span><br>
<span class="quotelev1">&gt; forwarding&quot; in
</span><br>
<span class="quotelev1">&gt; the archives. The solution I settled on is to use the -d option, the
</span><br>
<span class="quotelev1">&gt; debug option. With this option, mpirun will keep the ssh sessions  
</span><br>
<span class="quotelev1">&gt; open,
</span><br>
<span class="quotelev1">&gt; and so the X forwarding stays active. Note that you do get lots of
</span><br>
<span class="quotelev1">&gt; debugging output at the start of the run, but after that, there's no
</span><br>
<span class="quotelev1">&gt; extra output. An enhancement ticket was going to be added to add a
</span><br>
<span class="quotelev1">&gt; command line option to keep the ssh sessions open (without having to
</span><br>
<span class="quotelev1">&gt; turn debugging on). I never heard anything more on it, so apparently
</span><br>
<span class="quotelev1">&gt; nothing happened. But using the -d option does work well and doesn't
</span><br>
<span class="quotelev1">&gt; require any extra fiddling.
</span><br>
<p>maybe an additional line (the last one here) in your ~/.ssh/config  
<br>
can do a similar thing. Usually I have therein:
<br>
<p>Host *
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ForwardAgent yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ForwardX11 yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ForwardX11Trusted yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Compression yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NoHostAuthenticationForLocalhost yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ServerAliveInterval 900
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt;    Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Allen Barnett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; If you are using a recent version of Linux (as machine A), the X  
</span><br>
<span class="quotelev2">&gt;&gt; server
</span><br>
<span class="quotelev2">&gt;&gt; is probably started with its TCP network connection turned off. For
</span><br>
<span class="quotelev2">&gt;&gt; example, if you do:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ps auxw | grep X
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/Xorg :0 -br -audit 0 -auth /var/gdm/:0.Xauth -nolisten  
</span><br>
<span class="quotelev2">&gt;&gt; tcp vt7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;-nolisten tcp&quot; option turns off the X server's remote connection
</span><br>
<span class="quotelev2">&gt;&gt; socket. Also, &quot;netstat -atp&quot; on A will show that nothing is  
</span><br>
<span class="quotelev2">&gt;&gt; listening on
</span><br>
<span class="quotelev2">&gt;&gt; port 6000. So, for example, from machine B:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [B]$ xlogo -display A:0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; doesn't work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The trick I've used: Before you run your MPI application, you can  
</span><br>
<span class="quotelev2">&gt;&gt; ssh to
</span><br>
<span class="quotelev2">&gt;&gt; the remote node with X forwarding enabled (&quot;ssh -Y&quot;). On the remote
</span><br>
<span class="quotelev2">&gt;&gt; system, do &quot;echo $DISPLAY&quot; to see what DISPLAY environment  
</span><br>
<span class="quotelev2">&gt;&gt; variable ssh
</span><br>
<span class="quotelev2">&gt;&gt; created. For example, it might be something like &quot;localhost:10.0&quot;.  
</span><br>
<span class="quotelev2">&gt;&gt; Leave
</span><br>
<span class="quotelev2">&gt;&gt; this ssh connection open and then run your OMPI application in  
</span><br>
<span class="quotelev2">&gt;&gt; another
</span><br>
<span class="quotelev2">&gt;&gt; window and pass &quot;-x DISPLAY=localhost:10.0&quot; through MPI. X  
</span><br>
<span class="quotelev2">&gt;&gt; applications
</span><br>
<span class="quotelev2">&gt;&gt; on the remote node *should* now be able to connect back through  
</span><br>
<span class="quotelev2">&gt;&gt; the open
</span><br>
<span class="quotelev2">&gt;&gt; ssh connection. This probably won't scale very well, though.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 2008-06-04 at 14:36 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In general, Open MPI doesn't have anything to do with X forwarding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, if you're using ssh to startup your processes, ssh may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure X forwarding for you (depending on your local system
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setup).  But OMPI closes down ssh channels once applications have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launched (there's no need to keep them open), so any X forwarding  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may have been setup will be closed down.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The *easiest* way to setup X forwarding is simply to allow X
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connections to your local host from the node(s) that will be running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your application.  E.g., use the &quot;xhost&quot; command to add the target
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes into the access list.  And then have mpirun export a suitable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DISPLAY variable, such as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export DISPLAY=my_hostname:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -x DISPLAY ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The &quot;-x DISPLAY&quot; clause tells Open MPI to export the value of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DISPLAY variable to all nodes when running your application.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hope this helps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 30, 2008, at 1:24 PM, Cally K wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hi, I have some problem running DistributedData.cxx ( it is a VTK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file ) , I need to be able to see the rendering from my computer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I, however have problem running the executable, I loaded both the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; executabe into 2 machines
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and I am accesing it from my computer( DHCP enabled )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; after running the following command - I use OpenMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -hostfile myhostfile -np 2 -bynode ./DistributedData
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and I keep getting these errors
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ERROR: In /home/kalpanak/Installation_Files/VTKProject/VTK/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rendering/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; vtkXOpenGLRenderWindow.cxx, line 326
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; vtkXOpenGLRenderWindow (0x8664438): bad X server connection.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ERROR: In /home/kalpanak/Installation_Files/VTKProject/VTK/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rendering/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; vtkXOpenGLRenderWindow.cxx, line 169
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; vtkXOpenGLRenderWindow (0x8664438): bad X server connection.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] Failing at address: 0x84
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] [ 0] [0xffffe440]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] [ 1] ./
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DistributedData(_ZN22vtkXOpenGLRenderWindow20GetDesiredVisualInfoEv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +0x229) [0x8227e7d]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] [ 2] ./
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DistributedData(_ZN22vtkXOpenGLRenderWindow16WindowInitializeEv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +0x340) [0x8226812]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] [ 3] ./
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DistributedData(_ZN22vtkXOpenGLRenderWindow10InitializeEv+0x29)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x82234f9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] [ 4] ./
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DistributedData(_ZN22vtkXOpenGLRenderWindow5StartEv+0x29)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x82235eb]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] [ 5] ./
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DistributedData(_ZN15vtkRenderWindow14DoStereoRenderEv+0x1a)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x82342ac]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] [ 6] ./
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DistributedData(_ZN15vtkRenderWindow10DoFDRenderEv+0x427)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x8234757]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] [ 7] ./
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DistributedData(_ZN15vtkRenderWindow10DoAARenderEv+0x5b7)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x8234d19]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] [ 8] ./DistributedData(_ZN15vtkRenderWindow6RenderEv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +0x690) [0x82353b4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] [ 9] ./
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DistributedData(_ZN22vtkXOpenGLRenderWindow6RenderEv+0x52)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x82245e2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] [10] ./DistributedData [0x819e355]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] [11] ./
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DistributedData(_ZN16vtkMPIController19SingleMethodExecuteEv+0x1ab)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x837a447]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] [12] ./DistributedData(main+0x180) [0x819de78]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] [13] /lib/libc.so.6(__libc_start_main+0xe0)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0xb79c0fe0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] [14] ./DistributedData [0x819dc21]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vrc1:27394] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 27394 on node ....  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exited on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Maybe I am not doing the xforwading properly, but has anyone ever
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; encountered the same problem, it works fine on one pc, and I read
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the mailing list but I just don't know if my prob is similiar to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; their, I even tried changing the DISPLAY env
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is what I want to do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; my mpirun should run on 2 machines ( A and B ) and I should be able
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to view the output ( on my PC ),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are there any specfic commands to use.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5854.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Previous message:</strong> <a href="5852.php">Dave Grote: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>In reply to:</strong> <a href="5852.php">Dave Grote: "Re: [OMPI users] Problem with X forwarding"</a>
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
