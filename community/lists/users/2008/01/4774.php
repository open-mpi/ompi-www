<?
$subject_val = "Re: [OMPI users] Tracing the library using gdb and xterm";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  2 10:28:54 2008" -->
<!-- isoreceived="20080102152854" -->
<!-- sent="Wed, 2 Jan 2008 10:28:07 -0500" -->
<!-- isosent="20080102152807" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tracing the library using gdb and xterm" -->
<!-- id="2E189A10-FFA2-4432-8119-E5B8981A2153_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7B4D950B-5D45-40BC-8242-83E2327F90DB_at_rain.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Tracing the library using gdb and xterm<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-02 10:28:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4775.php">Jeff Squyres: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Previous message:</strong> <a href="4773.php">Jeff Squyres: "Re: [OMPI users] No output from mpirun"</a>
<li><strong>In reply to:</strong> <a href="4771.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4776.php">Krishna Chaitanya: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another simpler (but not secure) option would be do run &quot;xhost  
<br>
+hostname&quot; for each machine that you'll be using and then use un- 
<br>
encrypted X connections to pipe back to your display.  This avoids a  
<br>
bunch of issues (e.g., the ssh to launch the MPI job quitting because  
<br>
it successfully launched on the remote node) and is generally simpler.
<br>
<p>On a closed LAN/cluster, it may be ok to do this... but your security  
<br>
administrators may disagree with me.  :-)  I suggest that you check  
<br>
with your admins.
<br>
<p>Specifically, try something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shell$ for host in `cat machines`; do xhost +$host: $host; done
<br>
<p>This tells the X server to accept connections from all the hosts in  
<br>
your machines file.  Then you can mpirun with something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shell$ mpirun --prefix /usr/local -hostfile machines \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-x DISPLAY=yourhost:0.0 -np 2 xterm -e gdb peruse_ex1
<br>
<p>mpirun's -x option exports the environment variable listed, and the  
<br>
&quot;=foo&quot; argument tells it to assign that value on the remote nodes.   
<br>
Hence, the DISPLAY environment variable will be loaded with the value  
<br>
&quot;yourhost:0.0&quot; on the remote nodes.  Obviously, you need to replace  
<br>
&quot;yourhost:0.0&quot; with the hostname and display number of the host that  
<br>
you're launching from.
<br>
<p>Hope that helps.
<br>
<p><p>On Jan 1, 2008, at 1:40 PM, Doug Reeder wrote:
<br>
<p><span class="quotelev1">&gt; Krishna,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are using ssh to connect to the second machine you need to be  
</span><br>
<span class="quotelev1">&gt; sure that ssh X11 forwarding is enabled and you may need to have mpi  
</span><br>
<span class="quotelev1">&gt; use ssh -X or ssh -Y to connect to the second machine. That is how  
</span><br>
<span class="quotelev1">&gt; the DISPLAY gets set using ssh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 1, 2008, at 8:11 AM, Krishna Chaitanya wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;                I have been tracing the interactions between the  
</span><br>
<span class="quotelev2">&gt;&gt; PERUSE and MPI library,on one machine. I have been using gdb along  
</span><br>
<span class="quotelev2">&gt;&gt; with xterm to have two windows open at the same time as I step  
</span><br>
<span class="quotelev2">&gt;&gt; through the code. I wish to get a better glimpse of the working of  
</span><br>
<span class="quotelev2">&gt;&gt; the point to point calls, by launching the job on two machines and  
</span><br>
<span class="quotelev2">&gt;&gt; by tracing the flow in a similar manner. This is where I stand as  
</span><br>
<span class="quotelev2">&gt;&gt; of now :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --prefix /usr/local -hostfile machines  -np 2 xterm -e gdb  
</span><br>
<span class="quotelev2">&gt;&gt; peruse_ex1
</span><br>
<span class="quotelev2">&gt;&gt; xterm Xt error: Can't open display:
</span><br>
<span class="quotelev2">&gt;&gt; xterm:  DISPLAY is not set
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                I tried using the display option for xterm and  
</span><br>
<span class="quotelev2">&gt;&gt; setting the value as 0.0, that was not of much help.
</span><br>
<span class="quotelev2">&gt;&gt;                If someone can guide me as to where the DISPLAY  
</span><br>
<span class="quotelev2">&gt;&gt; parameter has to be set to allow the remote machine to open the  
</span><br>
<span class="quotelev2">&gt;&gt; xterm window, it will be of great help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Krishna
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; In the middle of difficulty, lies opportunity
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="4775.php">Jeff Squyres: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Previous message:</strong> <a href="4773.php">Jeff Squyres: "Re: [OMPI users] No output from mpirun"</a>
<li><strong>In reply to:</strong> <a href="4771.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4776.php">Krishna Chaitanya: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
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
