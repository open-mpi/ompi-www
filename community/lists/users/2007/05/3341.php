<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 29 18:58:46 2007" -->
<!-- isoreceived="20070529225846" -->
<!-- sent="Tue, 29 May 2007 15:58:20 -0700" -->
<!-- isosent="20070529225820" -->
<!-- name="Bill Saphir" -->
<!-- email="bsaphir_at_[hidden]" -->
<!-- subject="[OMPI users] forcing MPI to bind all sockets to 127.0.0.1" -->
<!-- id="B8FD90C6-878A-41A1-9264-EC7E40D94AB4_at_numenta.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-05-29 18:58:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3342.php">George Bosilca: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>Previous message:</strong> <a href="3340.php">Brian Barrett: "Re: [OMPI users] OpenMPI on shared memory."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3342.php">George Bosilca: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>Reply:</strong> <a href="3342.php">George Bosilca: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>Reply:</strong> <a href="3343.php">Bill Saphir: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have run into the following problem:
<br>
<p>- start up Open MPI application on a laptop
<br>
- disconnect from network
<br>
- application hangs
<br>
<p>I believe that the problem is that all sockets created by Open MPI  
<br>
are bound to the external network interface.
<br>
For example, when I start up a 2 process MPI job on my Mac (no hosts  
<br>
specified), I get the following tcp
<br>
connections. 192.168.5.2 is an address on my LAN.
<br>
<p>tcp4       0      0  192.168.5.2.49459      192.168.5.2.49463       
<br>
ESTABLISHED
<br>
tcp4       0      0  192.168.5.2.49463      192.168.5.2.49459       
<br>
ESTABLISHED
<br>
tcp4       0      0  192.168.5.2.49456      192.168.5.2.49462       
<br>
ESTABLISHED
<br>
tcp4       0      0  192.168.5.2.49462      192.168.5.2.49456       
<br>
ESTABLISHED
<br>
tcp4       0      0  192.168.5.2.49456      192.168.5.2.49460       
<br>
ESTABLISHED
<br>
tcp4       0      0  192.168.5.2.49460      192.168.5.2.49456       
<br>
ESTABLISHED
<br>
tcp4       0      0  192.168.5.2.49456      192.168.5.2.49458       
<br>
ESTABLISHED
<br>
tcp4       0      0  192.168.5.2.49458      192.168.5.2.49456       
<br>
ESTABLISHED
<br>
<p>Since this application is confined to a single machine, I would like  
<br>
it to use 127.0.0.1,
<br>
which will remain available as the laptop moves around. I am unable  
<br>
to force it to bind
<br>
sockets to this address, however.
<br>
<p>Some of the things I've tried are:
<br>
- explicitly setting the hostname to 127.0.0.1 (--host 127.0.0.1)
<br>
- turning off the tcp btl (--mca btl ^tcp) and other variations (-- 
<br>
mca btl self,sm)
<br>
- using --mca oob_tcp_include lo0
<br>
<p>The first two have no effect. The last one results in an error  
<br>
message of:
<br>
[myhost.locall:05830] [0,0,0] mca_oob_tcp_init: invalid address ''  
<br>
returned for selected oob interfaces.
<br>
<p>Is there any way to force Open MPI to bind all sockets to 127.0.0.1?
<br>
<p>As a side question -- I'm curious what all of these tcp connections  
<br>
are used for.  As I increase the number
<br>
of processes, it looks like there are 4 sockets created per MPI  
<br>
process, without using the tcp btl.
<br>
Perhaps stdin/out/err + control?
<br>
<p>Bill
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3342.php">George Bosilca: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>Previous message:</strong> <a href="3340.php">Brian Barrett: "Re: [OMPI users] OpenMPI on shared memory."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3342.php">George Bosilca: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>Reply:</strong> <a href="3342.php">George Bosilca: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>Reply:</strong> <a href="3343.php">Bill Saphir: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
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
