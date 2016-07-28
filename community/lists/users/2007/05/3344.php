<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 30 10:14:13 2007" -->
<!-- isoreceived="20070530141413" -->
<!-- sent="Wed, 30 May 2007 08:14:04 -0600" -->
<!-- isosent="20070530141404" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1" -->
<!-- id="4A7BCB50-2F64-483B-8F1E-FD2A6B9D3AD6_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A7315017-5883-4CFA-B819-6CB338D22A2F_at_numenta.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-30 10:14:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3345.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] segmentation fault in MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="3343.php">Bill Saphir: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>In reply to:</strong> <a href="3343.php">Bill Saphir: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3346.php">smairal_at_[hidden]: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>Reply:</strong> <a href="3346.php">smairal_at_[hidden]: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bill -
<br>
<p>This is a known issue in all released versions of Open MPI.  I have a  
<br>
patch that hopefully will fix this issue in 1.2.3.  It's currently  
<br>
waiting on people in the OPen MPI team to verify I didn't do  
<br>
something stupid.
<br>
<p>Brian
<br>
<p>On May 29, 2007, at 9:59 PM, Bill Saphir wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is one of the things I tried, and the setting the oob  
</span><br>
<span class="quotelev1">&gt; interface did not work,
</span><br>
<span class="quotelev1">&gt; with the error message below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, per this thread:
</span><br>
<span class="quotelev1">&gt; 	<a href="http://www.open-mpi.org/community/lists/users/2007/05/3319.php">http://www.open-mpi.org/community/lists/users/2007/05/3319.php</a>
</span><br>
<span class="quotelev1">&gt; I believe it is oob_tcp_include, not oob_tcp_if_include. The latter  
</span><br>
<span class="quotelev1">&gt; is silently
</span><br>
<span class="quotelev1">&gt; ignored in 1.2, as far as I can tell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interestingly, telling the MPI layer to use lo0 (or to not use tcp  
</span><br>
<span class="quotelev1">&gt; at all) works fine.
</span><br>
<span class="quotelev1">&gt; But when I try to do the same for the OOB layer, it complains. The  
</span><br>
<span class="quotelev1">&gt; full error is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mymac.local:07001] [0,0,0] mca_oob_tcp_init: invalid address ''  
</span><br>
<span class="quotelev1">&gt; returned for selected oob interfaces.
</span><br>
<span class="quotelev1">&gt; [mymac.local:07001] [0,0,0] ORTE_ERROR_LOG: Error in file oob_tcp.c  
</span><br>
<span class="quotelev1">&gt; at line 1196
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun actually hangs at this point and no processes are spawned. I  
</span><br>
<span class="quotelev1">&gt; have to ^C to stop it.
</span><br>
<span class="quotelev1">&gt; I see this behavior on both Mac OS and on Linux with 1.2.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bill
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilica wrote:
</span><br>
<span class="quotelev2">&gt;&gt; There are 2 sets of sockets: one for the oob layer and one for the
</span><br>
<span class="quotelev2">&gt;&gt; MPI layer (at least if TCP support is enabled). Therefore, in order
</span><br>
<span class="quotelev2">&gt;&gt; to achieve what you're looking for you should add to the command line
</span><br>
<span class="quotelev2">&gt;&gt; &quot;--mca oob_tcp_if_include lo0 --mca btl_tcp_if_include lo0&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; On May 29, 2007, at 3:58 PM, Bill Saphir wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- original message below ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have run into the following problem:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - start up Open MPI application on a laptop
</span><br>
<span class="quotelev2">&gt;&gt; - disconnect from network
</span><br>
<span class="quotelev2">&gt;&gt; - application hangs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe that the problem is that all sockets created by Open MPI  
</span><br>
<span class="quotelev2">&gt;&gt; are bound to the external network interface.
</span><br>
<span class="quotelev2">&gt;&gt; For example, when I start up a 2 process MPI job on my Mac (no  
</span><br>
<span class="quotelev2">&gt;&gt; hosts specified), I get the following tcp
</span><br>
<span class="quotelev2">&gt;&gt; connections. 192.168.5.2 is an address on my LAN.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tcp4       0      0  192.168.5.2.49459      192.168.5.2.49463       
</span><br>
<span class="quotelev2">&gt;&gt; ESTABLISHED
</span><br>
<span class="quotelev2">&gt;&gt; tcp4       0      0  192.168.5.2.49463      192.168.5.2.49459       
</span><br>
<span class="quotelev2">&gt;&gt; ESTABLISHED
</span><br>
<span class="quotelev2">&gt;&gt; tcp4       0      0  192.168.5.2.49456      192.168.5.2.49462       
</span><br>
<span class="quotelev2">&gt;&gt; ESTABLISHED
</span><br>
<span class="quotelev2">&gt;&gt; tcp4       0      0  192.168.5.2.49462      192.168.5.2.49456       
</span><br>
<span class="quotelev2">&gt;&gt; ESTABLISHED
</span><br>
<span class="quotelev2">&gt;&gt; tcp4       0      0  192.168.5.2.49456      192.168.5.2.49460       
</span><br>
<span class="quotelev2">&gt;&gt; ESTABLISHED
</span><br>
<span class="quotelev2">&gt;&gt; tcp4       0      0  192.168.5.2.49460      192.168.5.2.49456       
</span><br>
<span class="quotelev2">&gt;&gt; ESTABLISHED
</span><br>
<span class="quotelev2">&gt;&gt; tcp4       0      0  192.168.5.2.49456      192.168.5.2.49458       
</span><br>
<span class="quotelev2">&gt;&gt; ESTABLISHED
</span><br>
<span class="quotelev2">&gt;&gt; tcp4       0      0  192.168.5.2.49458      192.168.5.2.49456       
</span><br>
<span class="quotelev2">&gt;&gt; ESTABLISHED
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since this application is confined to a single machine, I would  
</span><br>
<span class="quotelev2">&gt;&gt; like it to use 127.0.0.1,
</span><br>
<span class="quotelev2">&gt;&gt; which will remain available as the laptop moves around. I am  
</span><br>
<span class="quotelev2">&gt;&gt; unable to force it to bind
</span><br>
<span class="quotelev2">&gt;&gt; sockets to this address, however.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some of the things I've tried are:
</span><br>
<span class="quotelev2">&gt;&gt; - explicitly setting the hostname to 127.0.0.1 (--host 127.0.0.1)
</span><br>
<span class="quotelev2">&gt;&gt; - turning off the tcp btl (--mca btl ^tcp) and other variations (-- 
</span><br>
<span class="quotelev2">&gt;&gt; mca btl self,sm)
</span><br>
<span class="quotelev2">&gt;&gt; - using --mca oob_tcp_include lo0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The first two have no effect. The last one results in an error  
</span><br>
<span class="quotelev2">&gt;&gt; message of:
</span><br>
<span class="quotelev2">&gt;&gt; [myhost.locall:05830] [0,0,0] mca_oob_tcp_init: invalid address ''  
</span><br>
<span class="quotelev2">&gt;&gt; returned for selected oob interfaces.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any way to force Open MPI to bind all sockets to 127.0.0.1?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As a side question -- I'm curious what all of these tcp  
</span><br>
<span class="quotelev2">&gt;&gt; connections are used for.  As I increase the number
</span><br>
<span class="quotelev2">&gt;&gt; of processes, it looks like there are 4 sockets created per MPI  
</span><br>
<span class="quotelev2">&gt;&gt; process, without using the tcp btl.
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps stdin/out/err + control?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bill
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3345.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] segmentation fault in MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="3343.php">Bill Saphir: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>In reply to:</strong> <a href="3343.php">Bill Saphir: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3346.php">smairal_at_[hidden]: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>Reply:</strong> <a href="3346.php">smairal_at_[hidden]: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
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
