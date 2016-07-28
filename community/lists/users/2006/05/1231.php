<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 11 05:55:19 2006" -->
<!-- isoreceived="20060511095519" -->
<!-- sent="Thu, 11 May 2006 11:54:44 +0200" -->
<!-- isosent="20060511095444" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and OpenIB" -->
<!-- id="76E24A65-A445-4096-811F-5ED4D74F3405_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5849f1820605101346s603085bl790e65ee0ce5e411_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-11 05:54:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1232.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Previous message:</strong> <a href="1230.php">Galen M. Shipman: "Re: [OMPI users] Open MPI 1.1a2 w/VAPI RHEL3 4-node Pallas Alltoall fails"</a>
<li><strong>In reply to:</strong> <a href="1229.php">Gurhan Ozen: "[OMPI users] Open MPI and OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1232.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Reply:</strong> <a href="1232.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 10, 2006, at 10:46 PM, Gurhan Ozen wrote:
<br>
<p><span class="quotelev1">&gt;  My ultimate goal is to get Open MPI working with openIB stack.  
</span><br>
<span class="quotelev1">&gt; First, I had
</span><br>
<span class="quotelev1">&gt;  installed lam-mpi , I know it doesn't have support for openIB but  
</span><br>
<span class="quotelev1">&gt; it's still
</span><br>
<span class="quotelev1">&gt;  relevant to some of my questions  I will ask.. Here is the set up  
</span><br>
<span class="quotelev1">&gt; I have:
</span><br>
<p>Yes, keep in mind throughout that while Open MPI does support MVAPI,  
<br>
LAM/MPI will fall back to using IP over IB for communication.
<br>
<p><span class="quotelev1">&gt;  I have two machines, pe830-01 and pe830-02 .. Both have ethernet  
</span><br>
<span class="quotelev1">&gt; interface and
</span><br>
<span class="quotelev1">&gt;  HCA interface. The IP addresses follow:
</span><br>
<span class="quotelev1">&gt;                          eth0                 ib0
</span><br>
<span class="quotelev1">&gt;  pe830-01     10.12.4.32      192.168.1.32
</span><br>
<span class="quotelev1">&gt;  pe830-02     10.12.4.34      192.168.1.34
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    So this has worked even though it lamhosts file is configured to  
</span><br>
<span class="quotelev1">&gt; use ib0
</span><br>
<span class="quotelev1">&gt;    interfaces. I further verified with tcpdump command that none of  
</span><br>
<span class="quotelev1">&gt; this went
</span><br>
<span class="quotelev1">&gt;    to eth0 ..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Anyhow, if i change the lamhosts file to use the eth0 IPs,  
</span><br>
<span class="quotelev1">&gt; things work just
</span><br>
<span class="quotelev1">&gt;    as the same with no issues . And in that case i see some traffic  
</span><br>
<span class="quotelev1">&gt; on eth0
</span><br>
<span class="quotelev1">&gt;    with tcpdump.
</span><br>
<p>Ok, so at least it sounds like your TCP network is sanely configured.
<br>
<p><span class="quotelev1">&gt;    Now, when i installed and used Open MPI, things didn't work as
</span><br>
<span class="quotelev1">&gt; easy.. Here is
</span><br>
<span class="quotelev1">&gt;    what happens. After recompiling the sources with the mpicc that  
</span><br>
<span class="quotelev1">&gt; comes with
</span><br>
<span class="quotelev1">&gt;    open-mpi:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    $ /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi --mca
</span><br>
<span class="quotelev1">&gt;    pls_rsh_agent ssh --mca btl tcp -np 2 --host 10.12.4.34,10.12.4.32
</span><br>
<span class="quotelev1">&gt;    /path/to/hello_world
</span><br>
<span class="quotelev1">&gt;    Hello, world, I am 0 of 2 and this is on : pe830-02.
</span><br>
<span class="quotelev1">&gt;    Hello, world, I am 1 of 2 and this is on: pe830-01.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    So far so good, using eth0 interfaces.. hello_world works just  
</span><br>
<span class="quotelev1">&gt; fine. Now,
</span><br>
<span class="quotelev1">&gt;    when i try the broadcast program:
</span><br>
<p>In reality, you always need to include two BTLs when specifying.  You  
<br>
need both the one you want to use (mvapi,openib,tcp,etc.) and  
<br>
&quot;self&quot;.  You can run into issues otherwise.
<br>
<p><span class="quotelev1">&gt;    $ /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi --mca
</span><br>
<span class="quotelev1">&gt;    pls_rsh_agent ssh --mca btl tcp -np 2 --host 10.12.4.34,10.12.4.32
</span><br>
<span class="quotelev1">&gt;    /path/to/broadcast
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    It just hangs there, it doesn't prompt me the &quot;Enter the vector  
</span><br>
<span class="quotelev1">&gt; length:&quot;
</span><br>
<span class="quotelev1">&gt;    string . So i just enter a number anyway since i know the  
</span><br>
<span class="quotelev1">&gt; behavior of the
</span><br>
<span class="quotelev1">&gt;    program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    10
</span><br>
<span class="quotelev1">&gt;    Enter the vector length: i am: 0 , and i have 5 vector elements
</span><br>
<span class="quotelev1">&gt;    i am: 1 , and i have 5 vector elements
</span><br>
<span class="quotelev1">&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    So, that's the first bump with the openmpi.. Now , if i try to  
</span><br>
<span class="quotelev1">&gt; use ib0
</span><br>
<span class="quotelev1">&gt;    interfaces instead of eth0 ones, i get:
</span><br>
<p>I'm actually surprised this worked in LAM/MPI, to be honest.  There  
<br>
should be an fflush() after the printf() to make sure that the output  
<br>
is actually sent out of the application.
<br>
<p><span class="quotelev1">&gt;    $  /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi --mca
</span><br>
<span class="quotelev1">&gt;    pls_rsh_agent ssh --mca btl openib -np 2 --host  
</span><br>
<span class="quotelev1">&gt; 192.168.1.34,192.168.1.32
</span><br>
<span class="quotelev1">&gt;    /path/to/hello_world
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;    No available btl components were found!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    This means that there are no components of this type installed  
</span><br>
<span class="quotelev1">&gt; on your
</span><br>
<span class="quotelev1">&gt;    system or all the components reported that they could not be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    This is a fatal error; your MPI process is likely to abort.   
</span><br>
<span class="quotelev1">&gt; Check the
</span><br>
<span class="quotelev1">&gt;    output of the &quot;ompi_info&quot; command and ensure that components of  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt;    type are available on your system.  You may also wish to check the
</span><br>
<span class="quotelev1">&gt;    value of the &quot;component_path&quot; MCA parameter and ensure that it  
</span><br>
<span class="quotelev1">&gt; has at
</span><br>
<span class="quotelev1">&gt;    least one directory that contains valid MCA components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;    [pe830-01.domain.com:05942]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    I know, it thinks that it doesn't have openib components  
</span><br>
<span class="quotelev1">&gt; installed, however,
</span><br>
<span class="quotelev1">&gt;    ompi_info on both machines say otherwise:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    $ ompi_info | grep openib
</span><br>
<span class="quotelev1">&gt;    MCA mpool: openib (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;    MCA btl: openib (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<p>I don't think it will help, but can you try again with --mca btl  
<br>
openib,self?  For some reason, it appears that the openib component  
<br>
is saying that it can't run.
<br>
<p><span class="quotelev1">&gt;    Now the questions are...
</span><br>
<span class="quotelev1">&gt;    1- In the case of using lam/mpi over ib0 interfaces.. Does lam/mpi
</span><br>
<span class="quotelev1">&gt;    automatically just use IPoIB ?
</span><br>
<p>Yes, LAM has no idea what that Open IB thing is -- it just uses the  
<br>
ethernet device.
<br>
<p><span class="quotelev1">&gt;    2 - Is there a tcpdump-like utility to dump the traffic on  
</span><br>
<span class="quotelev1">&gt; Infiniband HCAs?
</span><br>
<p>I'm not aware of any, but that may occur.
<br>
<p><span class="quotelev1">&gt;    3 - In the case of Open MPI, does --mca btl arg option have to  
</span><br>
<span class="quotelev1">&gt; be passed
</span><br>
<span class="quotelev1">&gt;    everytime? For example,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    $ /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi --mca
</span><br>
<span class="quotelev1">&gt;    pls_rsh_agent ssh --mca btl tcp -np 2 --host 10.12.4.34,10.12.4.32
</span><br>
<span class="quotelev1">&gt;    /path/to/hello_world
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    works just fine, but the same command without the &quot;--mca btl  
</span><br>
<span class="quotelev1">&gt; tcp&quot; bit gives
</span><br>
<span class="quotelev1">&gt;    the:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;    It looks like MPI_INIT failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt;    likely to abort.  There are many reasons that a parallel process  
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt;    fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt;    problems.  This failure appears to be an internal failure;  
</span><br>
<span class="quotelev1">&gt; here's some
</span><br>
<span class="quotelev1">&gt;    additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt;    developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      PML add procs failed
</span><br>
<span class="quotelev1">&gt;      --&gt; Returned value -2 instead of OMPI_SUCCESS
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;    *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;    *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt;    *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    error ...
</span><br>
<p>This makes it sound like Open IB is failing to setup properly.  I'm a  
<br>
bit out of my league on this one -- is there any application you can run
<br>
<p><span class="quotelev1">&gt;    4 - How come the behavior of broadcast.c was different on Open MPI
</span><br>
<span class="quotelev1">&gt; than it is
</span><br>
<span class="quotelev1">&gt;    on lam/mpi?
</span><br>
<p>I think I answered this one already.
<br>
<p><span class="quotelev1">&gt;    5 - Any ideas as to why i am getting no btl component error when  
</span><br>
<span class="quotelev1">&gt; i want to
</span><br>
<span class="quotelev1">&gt;    use openib even though ompi_info shows it? If it help any  
</span><br>
<span class="quotelev1">&gt; further , I have
</span><br>
<span class="quotelev1">&gt;    the following openib modules :
</span><br>
<p>This usually (but not always) indicates that something is going wrong  
<br>
with initializing the hardware interface.  ompi_info only tries to  
<br>
load the module, but not initialize the network device.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1232.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Previous message:</strong> <a href="1230.php">Galen M. Shipman: "Re: [OMPI users] Open MPI 1.1a2 w/VAPI RHEL3 4-node Pallas Alltoall fails"</a>
<li><strong>In reply to:</strong> <a href="1229.php">Gurhan Ozen: "[OMPI users] Open MPI and OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1232.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Reply:</strong> <a href="1232.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
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
