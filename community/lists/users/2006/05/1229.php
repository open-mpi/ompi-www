<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 10 16:47:02 2006" -->
<!-- isoreceived="20060510204702" -->
<!-- sent="Wed, 10 May 2006 16:46:56 -0400" -->
<!-- isosent="20060510204656" -->
<!-- name="Gurhan Ozen" -->
<!-- email="gurhan.ozen_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI and OpenIB" -->
<!-- id="5849f1820605101346s603085bl790e65ee0ce5e411_at_mail.gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Gurhan Ozen (<em>gurhan.ozen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-10 16:46:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1230.php">Galen M. Shipman: "Re: [OMPI users] Open MPI 1.1a2 w/VAPI RHEL3 4-node Pallas Alltoall fails"</a>
<li><strong>Previous message:</strong> <a href="1228.php">Brock Palen: "[OMPI users] Compiling with NAG f95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1231.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Reply:</strong> <a href="1231.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Maybe reply:</strong> <a href="1240.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and OpenIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Hi Everyone,
<br>
&nbsp;&nbsp;This is going to be a long email, so please bear with me. The example programs
<br>
&nbsp;&nbsp;are obtained from lam-mpi.org site ...
<br>
<p>&nbsp;&nbsp;My ultimate goal is to get Open MPI working with openIB stack. First, I had
<br>
&nbsp;&nbsp;installed lam-mpi , I know it doesn't have support for openIB but it's still
<br>
&nbsp;&nbsp;relevant to some of my questions  I will ask.. Here is the set up I have:
<br>
<p>&nbsp;&nbsp;I have two machines, pe830-01 and pe830-02 .. Both have ethernet interface and
<br>
&nbsp;&nbsp;HCA interface. The IP addresses follow:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;eth0                 ib0
<br>
&nbsp;&nbsp;pe830-01     10.12.4.32      192.168.1.32
<br>
&nbsp;&nbsp;pe830-02     10.12.4.34      192.168.1.34
<br>
<p>&nbsp;&nbsp;When I downloaded, installed lam-mpi, things seemed to work just fine.. For
<br>
&nbsp;&nbsp;example:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$  cat /path/to/lamhostsfile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;192.168.1.34
<br>
&nbsp;&nbsp;&nbsp;&nbsp;192.168.1.32
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ lamboot -v -ssi boot rsh -ssi rsh_agent &quot;ssh -x&quot;  /path/to/lamhostsfile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;LAM 7.1.2/MPI 2 C++/ROMIO - Indiana University
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;n-1&lt;6456&gt; ssi:boot:base:linear: booting n0 (192.168.1.34)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;n-1&lt;6456&gt; ssi:boot:base:linear: booting n1 (192.168.1.32)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;n-1&lt;6456&gt; ssi:boot:base:linear: finished
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ lamnodes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;n0      pe830-02.domain.com:1:origin,this_node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;n1      192.168.1.32:1:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ /usr/local/lam/bin/mpirun C /path/to/hello_world
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Hello, world, I am 0 of 2 and this is on : pe830-02.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Hello, world, I am 1 of 2 and this is on: pe830-01.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$  /usr/local/lam/bin/mpirun C /path/to/broadcast
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Enter the vector length: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;i am: 0 , and i have 2 vector elements
<br>
&nbsp;&nbsp;&nbsp;&nbsp;i am: 1 , and i have 2 vector elements
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[0] 4.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[0] 4.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[0] 4.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[0] 4.000000
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;So this has worked even though it lamhosts file is configured to use ib0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;interfaces. I further verified with tcpdump command that none of this went
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to eth0 ..
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Anyhow, if i change the lamhosts file to use the eth0 IPs, things work just
<br>
&nbsp;&nbsp;&nbsp;&nbsp;as the same with no issues . And in that case i see some traffic on eth0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;with tcpdump.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Now, when i installed and used Open MPI, things didn't work as
<br>
easy.. Here is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;what happens. After recompiling the sources with the mpicc that comes with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;open-mpi:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi --mca
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pls_rsh_agent ssh --mca btl tcp -np 2 --host 10.12.4.34,10.12.4.32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/path/to/hello_world
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Hello, world, I am 0 of 2 and this is on : pe830-02.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Hello, world, I am 1 of 2 and this is on: pe830-01.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;So far so good, using eth0 interfaces.. hello_world works just fine. Now,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;when i try the broadcast program:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi --mca
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pls_rsh_agent ssh --mca btl tcp -np 2 --host 10.12.4.34,10.12.4.32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/path/to/broadcast
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;It just hangs there, it doesn't prompt me the &quot;Enter the vector length:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;string . So i just enter a number anyway since i know the behavior of the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;program:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Enter the vector length: i am: 0 , and i have 5 vector elements
<br>
&nbsp;&nbsp;&nbsp;&nbsp;i am: 1 , and i have 5 vector elements
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[0] 10.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[0] 10.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[0] 10.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[0] 10.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[0] 10.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[0] 10.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[0] 10.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[0] 10.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[0] 10.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[0] 10.000000
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;So, that's the first bump with the openmpi.. Now , if i try to use ib0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;interfaces instead of eth0 ones, i get:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$  /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi --mca
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pls_rsh_agent ssh --mca btl openib -np 2 --host 192.168.1.34,192.168.1.32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/path/to/hello_world
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;No available btl components were found!
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;This means that there are no components of this type installed on your
<br>
&nbsp;&nbsp;&nbsp;&nbsp;system or all the components reported that they could not be used.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;This is a fatal error; your MPI process is likely to abort.  Check the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;output of the &quot;ompi_info&quot; command and ensure that components of this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type are available on your system.  You may also wish to check the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;value of the &quot;component_path&quot; MCA parameter and ensure that it has at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;least one directory that contains valid MCA components.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[pe830-01.domain.com:05942]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I know, it thinks that it doesn't have openib components installed, however,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi_info on both machines say otherwise:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ ompi_info | grep openib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: openib (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: openib (MCA v1.0, API v1.0, Component v1.0.2)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Now the questions are...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1- In the case of using lam/mpi over ib0 interfaces.. Does lam/mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;automatically just use IPoIB ?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2 - Is there a tcpdump-like utility to dump the traffic on Infiniband HCAs?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;3 - In the case of Open MPI, does --mca btl arg option have to be passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;everytime? For example,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi --mca
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pls_rsh_agent ssh --mca btl tcp -np 2 --host 10.12.4.34,10.12.4.32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/path/to/hello_world
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;works just fine, but the same command without the &quot;--mca btl tcp&quot; bit gives
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;It looks like MPI_INIT failed for some reason; your parallel process is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;likely to abort.  There are many reasons that a parallel process can
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fail during MPI_INIT; some of which are due to configuration or environment
<br>
&nbsp;&nbsp;&nbsp;&nbsp;problems.  This failure appears to be an internal failure; here's some
<br>
&nbsp;&nbsp;&nbsp;&nbsp;additional information (which may only be relevant to an Open MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;developer):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&gt; Returned value -2 instead of OMPI_SUCCESS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*** An error occurred in MPI_Init
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*** before MPI was initialized
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;error ...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;4 - How come the behavior of broadcast.c was different on Open MPI
<br>
than it is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;on lam/mpi?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;5 - Any ideas as to why i am getting no btl component error when i want to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;use openib even though ompi_info shows it? If it help any further , I have
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the following openib modules :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ /sbin/lsmod | grep ib_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ib_mthca              125141  0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ib_ipoib               39493  0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ib_uverbs              39145  0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ib_umad                17009  0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ib_ucm                 18373  0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ib_sa                  13429  1 ib_ipoib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ib_cm                  44581  1 ib_ucm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ib_mad                 42345  4 ib_mthca,ib_umad,ib_sa,ib_cm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ib_core                43073  8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ib_mthca,ib_ipoib,ib_uverbs,ib_umad,ib_ucm,ib_sa,ib_cm,ib_mad
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Thanks in advance for all help.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;gurhan
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;PS: In hello_world.c attachment hostnames are hardcoded for each box.
<br>
<p>

<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1229/broadcast.c">broadcast.c</a>
</ul>
<!-- attachment="broadcast.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1229/hello_world.c">hello_world.c</a>
</ul>
<!-- attachment="hello_world.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1230.php">Galen M. Shipman: "Re: [OMPI users] Open MPI 1.1a2 w/VAPI RHEL3 4-node Pallas Alltoall fails"</a>
<li><strong>Previous message:</strong> <a href="1228.php">Brock Palen: "[OMPI users] Compiling with NAG f95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1231.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Reply:</strong> <a href="1231.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Maybe reply:</strong> <a href="1240.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and OpenIB"</a>
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
