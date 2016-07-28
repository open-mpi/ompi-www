<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 30 00:00:54 2007" -->
<!-- isoreceived="20070530040054" -->
<!-- sent="Tue, 29 May 2007 20:59:55 -0700" -->
<!-- isosent="20070530035955" -->
<!-- name="Bill Saphir" -->
<!-- email="bsaphir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1" -->
<!-- id="A7315017-5883-4CFA-B819-6CB338D22A2F_at_numenta.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B8FD90C6-878A-41A1-9264-EC7E40D94AB4_at_numenta.com" -->
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
<strong>From:</strong> Bill Saphir (<em>bsaphir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-29 23:59:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3344.php">Brian Barrett: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>Previous message:</strong> <a href="3342.php">George Bosilca: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>In reply to:</strong> <a href="3341.php">Bill Saphir: "[OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3344.php">Brian Barrett: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>Reply:</strong> <a href="3344.php">Brian Barrett: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>This is one of the things I tried, and the setting the oob interface  
<br>
did not work,
<br>
with the error message below.
<br>
<p>Also, per this thread:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2007/05/3319.php">http://www.open-mpi.org/community/lists/users/2007/05/3319.php</a>
<br>
I believe it is oob_tcp_include, not oob_tcp_if_include. The latter  
<br>
is silently
<br>
ignored in 1.2, as far as I can tell.
<br>
<p>Interestingly, telling the MPI layer to use lo0 (or to not use tcp at  
<br>
all) works fine.
<br>
But when I try to do the same for the OOB layer, it complains. The  
<br>
full error is:
<br>
<p>[mymac.local:07001] [0,0,0] mca_oob_tcp_init: invalid address ''  
<br>
returned for selected oob interfaces.
<br>
[mymac.local:07001] [0,0,0] ORTE_ERROR_LOG: Error in file oob_tcp.c  
<br>
at line 1196
<br>
<p>mpirun actually hangs at this point and no processes are spawned. I  
<br>
have to ^C to stop it.
<br>
I see this behavior on both Mac OS and on Linux with 1.2.2.
<br>
<p>Bill
<br>
<p><p>George Bosilica wrote:
<br>
<span class="quotelev1">&gt; There are 2 sets of sockets: one for the oob layer and one for the
</span><br>
<span class="quotelev1">&gt; MPI layer (at least if TCP support is enabled). Therefore, in order
</span><br>
<span class="quotelev1">&gt; to achieve what you're looking for you should add to the command line
</span><br>
<span class="quotelev1">&gt; &quot;--mca oob_tcp_if_include lo0 --mca btl_tcp_if_include lo0&quot;.
</span><br>
<span class="quotelev1">&gt; On May 29, 2007, at 3:58 PM, Bill Saphir wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>----- original message below ---
<br>
<p><span class="quotelev1">&gt; We have run into the following problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - start up Open MPI application on a laptop
</span><br>
<span class="quotelev1">&gt; - disconnect from network
</span><br>
<span class="quotelev1">&gt; - application hangs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that the problem is that all sockets created by Open MPI  
</span><br>
<span class="quotelev1">&gt; are bound to the external network interface.
</span><br>
<span class="quotelev1">&gt; For example, when I start up a 2 process MPI job on my Mac (no  
</span><br>
<span class="quotelev1">&gt; hosts specified), I get the following tcp
</span><br>
<span class="quotelev1">&gt; connections. 192.168.5.2 is an address on my LAN.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tcp4       0      0  192.168.5.2.49459      192.168.5.2.49463       
</span><br>
<span class="quotelev1">&gt; ESTABLISHED
</span><br>
<span class="quotelev1">&gt; tcp4       0      0  192.168.5.2.49463      192.168.5.2.49459       
</span><br>
<span class="quotelev1">&gt; ESTABLISHED
</span><br>
<span class="quotelev1">&gt; tcp4       0      0  192.168.5.2.49456      192.168.5.2.49462       
</span><br>
<span class="quotelev1">&gt; ESTABLISHED
</span><br>
<span class="quotelev1">&gt; tcp4       0      0  192.168.5.2.49462      192.168.5.2.49456       
</span><br>
<span class="quotelev1">&gt; ESTABLISHED
</span><br>
<span class="quotelev1">&gt; tcp4       0      0  192.168.5.2.49456      192.168.5.2.49460       
</span><br>
<span class="quotelev1">&gt; ESTABLISHED
</span><br>
<span class="quotelev1">&gt; tcp4       0      0  192.168.5.2.49460      192.168.5.2.49456       
</span><br>
<span class="quotelev1">&gt; ESTABLISHED
</span><br>
<span class="quotelev1">&gt; tcp4       0      0  192.168.5.2.49456      192.168.5.2.49458       
</span><br>
<span class="quotelev1">&gt; ESTABLISHED
</span><br>
<span class="quotelev1">&gt; tcp4       0      0  192.168.5.2.49458      192.168.5.2.49456       
</span><br>
<span class="quotelev1">&gt; ESTABLISHED
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since this application is confined to a single machine, I would  
</span><br>
<span class="quotelev1">&gt; like it to use 127.0.0.1,
</span><br>
<span class="quotelev1">&gt; which will remain available as the laptop moves around. I am unable  
</span><br>
<span class="quotelev1">&gt; to force it to bind
</span><br>
<span class="quotelev1">&gt; sockets to this address, however.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some of the things I've tried are:
</span><br>
<span class="quotelev1">&gt; - explicitly setting the hostname to 127.0.0.1 (--host 127.0.0.1)
</span><br>
<span class="quotelev1">&gt; - turning off the tcp btl (--mca btl ^tcp) and other variations (-- 
</span><br>
<span class="quotelev1">&gt; mca btl self,sm)
</span><br>
<span class="quotelev1">&gt; - using --mca oob_tcp_include lo0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first two have no effect. The last one results in an error  
</span><br>
<span class="quotelev1">&gt; message of:
</span><br>
<span class="quotelev1">&gt; [myhost.locall:05830] [0,0,0] mca_oob_tcp_init: invalid address ''  
</span><br>
<span class="quotelev1">&gt; returned for selected oob interfaces.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any way to force Open MPI to bind all sockets to 127.0.0.1?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a side question -- I'm curious what all of these tcp connections  
</span><br>
<span class="quotelev1">&gt; are used for.  As I increase the number
</span><br>
<span class="quotelev1">&gt; of processes, it looks like there are 4 sockets created per MPI  
</span><br>
<span class="quotelev1">&gt; process, without using the tcp btl.
</span><br>
<span class="quotelev1">&gt; Perhaps stdin/out/err + control?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bill
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3343/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3344.php">Brian Barrett: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>Previous message:</strong> <a href="3342.php">George Bosilca: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>In reply to:</strong> <a href="3341.php">Bill Saphir: "[OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3344.php">Brian Barrett: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>Reply:</strong> <a href="3344.php">Brian Barrett: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
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
