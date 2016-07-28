<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 11 16:34:12 2006" -->
<!-- isoreceived="20060511203412" -->
<!-- sent="Thu, 11 May 2006 22:33:41 +0200" -->
<!-- isosent="20060511203341" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and OpenIB" -->
<!-- id="A7582FC3-2419-4561-83C5-2EBAE3FB4DE3_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5849f1820605111310o61f4fdb6n97dd3ccbe196550c_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-05-11 16:33:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1234.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Previous message:</strong> <a href="1232.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>In reply to:</strong> <a href="1232.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1234.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Reply:</strong> <a href="1234.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 11, 2006, at 10:10 PM, Gurhan Ozen wrote:
<br>
<p><span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt; Thanks for the very clear answers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did change my code to include fflush() calls after printf() ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And I did try with --mca btl ib,self . Interesting result, with --mca
</span><br>
<span class="quotelev1">&gt; btl ib,self it hello_world works fine, but broadcast hangs after i
</span><br>
<span class="quotelev1">&gt; enter the vector length.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At any rate though, --mca btl ib,self looks like the traffic goes over
</span><br>
<span class="quotelev1">&gt; ethernet device .. I couldn't find any documentation on the &quot;self&quot;
</span><br>
<span class="quotelev1">&gt; argument of mca, does it mean to explore alternatives if the desired
</span><br>
<span class="quotelev1">&gt; btl (in this case ib) doesn't work?
</span><br>
<p>No, self is the loopback device, for sending messages to self.  It is  
<br>
never used for message routing outside of the current process, but is  
<br>
required for almost all transports, as send to self can be a sticky  
<br>
issue.
<br>
<p>You are specifying openib, not ib, as the argument to mpirun,  
<br>
correct?  Either way, I'm not really sure how data could be going  
<br>
over TCP -- the TCP transport would definitely be disabled in that  
<br>
case.  At this point, I don't know enough about the Open IB driver to  
<br>
be of help -- one of the other developers is going to have to jump in  
<br>
and provide assistance.
<br>
<p><span class="quotelev1">&gt; Speaking of documentation, it looks like open-mpi didn't come with a
</span><br>
<span class="quotelev1">&gt; man for mpirun, i thought i had seen in one of the slides of Open MPI
</span><br>
<span class="quotelev1">&gt; developer's workshop that it did have mpirun.1 . Do i need to check it
</span><br>
<span class="quotelev1">&gt; out from svn?
</span><br>
<p>That's one option, or wait for us to release Open MPI 1.0.3 / 1.1.
<br>
<p>Brian
<br>
<p><p><span class="quotelev1">&gt; On 5/11/06, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On May 10, 2006, at 10:46 PM, Gurhan Ozen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  My ultimate goal is to get Open MPI working with openIB stack.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First, I had
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  installed lam-mpi , I know it doesn't have support for openIB but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it's still
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  relevant to some of my questions  I will ask.. Here is the set up
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, keep in mind throughout that while Open MPI does support MVAPI,
</span><br>
<span class="quotelev2">&gt;&gt; LAM/MPI will fall back to using IP over IB for communication.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I have two machines, pe830-01 and pe830-02 .. Both have ethernet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  HCA interface. The IP addresses follow:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          eth0                 ib0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  pe830-01     10.12.4.32      192.168.1.32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  pe830-02     10.12.4.34      192.168.1.34
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    So this has worked even though it lamhosts file is configured to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use ib0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    interfaces. I further verified with tcpdump command that none of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this went
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    to eth0 ..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Anyhow, if i change the lamhosts file to use the eth0 IPs,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things work just
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    as the same with no issues . And in that case i see some traffic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on eth0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    with tcpdump.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, so at least it sounds like your TCP network is sanely configured.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Now, when i installed and used Open MPI, things didn't work as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; easy.. Here is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    what happens. After recompiling the sources with the mpicc that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comes with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    open-mpi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    pls_rsh_agent ssh --mca btl tcp -np 2 --host  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10.12.4.34,10.12.4.32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /path/to/hello_world
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Hello, world, I am 0 of 2 and this is on : pe830-02.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Hello, world, I am 1 of 2 and this is on: pe830-01.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    So far so good, using eth0 interfaces.. hello_world works just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fine. Now,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    when i try the broadcast program:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In reality, you always need to include two BTLs when specifying.  You
</span><br>
<span class="quotelev2">&gt;&gt; need both the one you want to use (mvapi,openib,tcp,etc.) and
</span><br>
<span class="quotelev2">&gt;&gt; &quot;self&quot;.  You can run into issues otherwise.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    pls_rsh_agent ssh --mca btl tcp -np 2 --host  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10.12.4.34,10.12.4.32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /path/to/broadcast
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    It just hangs there, it doesn't prompt me the &quot;Enter the vector
</span><br>
<span class="quotelev3">&gt;&gt;&gt; length:&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    string . So i just enter a number anyway since i know the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behavior of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    program:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Enter the vector length: i am: 0 , and i have 5 vector elements
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    i am: 1 , and i have 5 vector elements
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    So, that's the first bump with the openmpi.. Now , if i try to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use ib0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    interfaces instead of eth0 ones, i get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm actually surprised this worked in LAM/MPI, to be honest.  There
</span><br>
<span class="quotelev2">&gt;&gt; should be an fflush() after the printf() to make sure that the output
</span><br>
<span class="quotelev2">&gt;&gt; is actually sent out of the application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $  /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    pls_rsh_agent ssh --mca btl openib -np 2 --host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 192.168.1.34,192.168.1.32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /path/to/hello_world
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    No available btl components were found!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    This means that there are no components of this type installed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on your
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    system or all the components reported that they could not be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    This is a fatal error; your MPI process is likely to abort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Check the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    output of the &quot;ompi_info&quot; command and ensure that components of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    type are available on your system.  You may also wish to check  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    value of the &quot;component_path&quot; MCA parameter and ensure that it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    least one directory that contains valid MCA components.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [pe830-01.domain.com:05942]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    I know, it thinks that it doesn't have openib components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed, however,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ompi_info on both machines say otherwise:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ ompi_info | grep openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MCA mpool: openib (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MCA btl: openib (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't think it will help, but can you try again with --mca btl
</span><br>
<span class="quotelev2">&gt;&gt; openib,self?  For some reason, it appears that the openib component
</span><br>
<span class="quotelev2">&gt;&gt; is saying that it can't run.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Now the questions are...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    1- In the case of using lam/mpi over ib0 interfaces.. Does lam/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    automatically just use IPoIB ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, LAM has no idea what that Open IB thing is -- it just uses the
</span><br>
<span class="quotelev2">&gt;&gt; ethernet device.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    2 - Is there a tcpdump-like utility to dump the traffic on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Infiniband HCAs?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not aware of any, but that may occur.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    3 - In the case of Open MPI, does --mca btl arg option have to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be passed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    everytime? For example,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    pls_rsh_agent ssh --mca btl tcp -np 2 --host  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10.12.4.34,10.12.4.32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /path/to/hello_world
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    works just fine, but the same command without the &quot;--mca btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tcp&quot; bit gives
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    the:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    It looks like MPI_INIT failed for some reason; your parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    likely to abort.  There are many reasons that a parallel process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      PML add procs failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      --&gt; Returned value -2 instead of OMPI_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    *** before MPI was initialized
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    error ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This makes it sound like Open IB is failing to setup properly.  I'm a
</span><br>
<span class="quotelev2">&gt;&gt; bit out of my league on this one -- is there any application you  
</span><br>
<span class="quotelev2">&gt;&gt; can run
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    4 - How come the behavior of broadcast.c was different on Open  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    on lam/mpi?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think I answered this one already.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    5 - Any ideas as to why i am getting no btl component error when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i want to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    use openib even though ompi_info shows it? If it help any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; further , I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    the following openib modules :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This usually (but not always) indicates that something is going wrong
</span><br>
<span class="quotelev2">&gt;&gt; with initializing the hardware interface.  ompi_info only tries to
</span><br>
<span class="quotelev2">&gt;&gt; load the module, but not initialize the network device.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;    Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI developer
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="1234.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Previous message:</strong> <a href="1232.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>In reply to:</strong> <a href="1232.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1234.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Reply:</strong> <a href="1234.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
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
