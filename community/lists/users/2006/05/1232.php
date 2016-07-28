<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 11 16:10:38 2006" -->
<!-- isoreceived="20060511201038" -->
<!-- sent="Thu, 11 May 2006 16:10:32 -0400" -->
<!-- isosent="20060511201032" -->
<!-- name="Gurhan Ozen" -->
<!-- email="gurhan.ozen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and OpenIB" -->
<!-- id="5849f1820605111310o61f4fdb6n97dd3ccbe196550c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="76E24A65-A445-4096-811F-5ED4D74F3405_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-05-11 16:10:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1233.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Previous message:</strong> <a href="1231.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>In reply to:</strong> <a href="1231.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1233.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Reply:</strong> <a href="1233.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
Thanks for the very clear answers.
<br>
<p>I did change my code to include fflush() calls after printf() ...
<br>
<p>And I did try with --mca btl ib,self . Interesting result, with --mca
<br>
btl ib,self it hello_world works fine, but broadcast hangs after i
<br>
enter the vector length.
<br>
<p>At any rate though, --mca btl ib,self looks like the traffic goes over
<br>
ethernet device .. I couldn't find any documentation on the &quot;self&quot;
<br>
argument of mca, does it mean to explore alternatives if the desired
<br>
btl (in this case ib) doesn't work?
<br>
<p>Speaking of documentation, it looks like open-mpi didn't come with a
<br>
man for mpirun, i thought i had seen in one of the slides of Open MPI
<br>
developer's workshop that it did have mpirun.1 . Do i need to check it
<br>
out from svn?
<br>
<p>No I don't have any application to run, other than what I might run.
<br>
This is all for testing purposes.
<br>
<p>Thanks,
<br>
Gurhan
<br>
<p>On 5/11/06, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On May 10, 2006, at 10:46 PM, Gurhan Ozen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  My ultimate goal is to get Open MPI working with openIB stack.
</span><br>
<span class="quotelev2">&gt; &gt; First, I had
</span><br>
<span class="quotelev2">&gt; &gt;  installed lam-mpi , I know it doesn't have support for openIB but
</span><br>
<span class="quotelev2">&gt; &gt; it's still
</span><br>
<span class="quotelev2">&gt; &gt;  relevant to some of my questions  I will ask.. Here is the set up
</span><br>
<span class="quotelev2">&gt; &gt; I have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, keep in mind throughout that while Open MPI does support MVAPI,
</span><br>
<span class="quotelev1">&gt; LAM/MPI will fall back to using IP over IB for communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  I have two machines, pe830-01 and pe830-02 .. Both have ethernet
</span><br>
<span class="quotelev2">&gt; &gt; interface and
</span><br>
<span class="quotelev2">&gt; &gt;  HCA interface. The IP addresses follow:
</span><br>
<span class="quotelev2">&gt; &gt;                          eth0                 ib0
</span><br>
<span class="quotelev2">&gt; &gt;  pe830-01     10.12.4.32      192.168.1.32
</span><br>
<span class="quotelev2">&gt; &gt;  pe830-02     10.12.4.34      192.168.1.34
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    So this has worked even though it lamhosts file is configured to
</span><br>
<span class="quotelev2">&gt; &gt; use ib0
</span><br>
<span class="quotelev2">&gt; &gt;    interfaces. I further verified with tcpdump command that none of
</span><br>
<span class="quotelev2">&gt; &gt; this went
</span><br>
<span class="quotelev2">&gt; &gt;    to eth0 ..
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Anyhow, if i change the lamhosts file to use the eth0 IPs,
</span><br>
<span class="quotelev2">&gt; &gt; things work just
</span><br>
<span class="quotelev2">&gt; &gt;    as the same with no issues . And in that case i see some traffic
</span><br>
<span class="quotelev2">&gt; &gt; on eth0
</span><br>
<span class="quotelev2">&gt; &gt;    with tcpdump.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, so at least it sounds like your TCP network is sanely configured.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Now, when i installed and used Open MPI, things didn't work as
</span><br>
<span class="quotelev2">&gt; &gt; easy.. Here is
</span><br>
<span class="quotelev2">&gt; &gt;    what happens. After recompiling the sources with the mpicc that
</span><br>
<span class="quotelev2">&gt; &gt; comes with
</span><br>
<span class="quotelev2">&gt; &gt;    open-mpi:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    $ /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi --mca
</span><br>
<span class="quotelev2">&gt; &gt;    pls_rsh_agent ssh --mca btl tcp -np 2 --host 10.12.4.34,10.12.4.32
</span><br>
<span class="quotelev2">&gt; &gt;    /path/to/hello_world
</span><br>
<span class="quotelev2">&gt; &gt;    Hello, world, I am 0 of 2 and this is on : pe830-02.
</span><br>
<span class="quotelev2">&gt; &gt;    Hello, world, I am 1 of 2 and this is on: pe830-01.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    So far so good, using eth0 interfaces.. hello_world works just
</span><br>
<span class="quotelev2">&gt; &gt; fine. Now,
</span><br>
<span class="quotelev2">&gt; &gt;    when i try the broadcast program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In reality, you always need to include two BTLs when specifying.  You
</span><br>
<span class="quotelev1">&gt; need both the one you want to use (mvapi,openib,tcp,etc.) and
</span><br>
<span class="quotelev1">&gt; &quot;self&quot;.  You can run into issues otherwise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    $ /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi --mca
</span><br>
<span class="quotelev2">&gt; &gt;    pls_rsh_agent ssh --mca btl tcp -np 2 --host 10.12.4.34,10.12.4.32
</span><br>
<span class="quotelev2">&gt; &gt;    /path/to/broadcast
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    It just hangs there, it doesn't prompt me the &quot;Enter the vector
</span><br>
<span class="quotelev2">&gt; &gt; length:&quot;
</span><br>
<span class="quotelev2">&gt; &gt;    string . So i just enter a number anyway since i know the
</span><br>
<span class="quotelev2">&gt; &gt; behavior of the
</span><br>
<span class="quotelev2">&gt; &gt;    program:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    10
</span><br>
<span class="quotelev2">&gt; &gt;    Enter the vector length: i am: 0 , and i have 5 vector elements
</span><br>
<span class="quotelev2">&gt; &gt;    i am: 1 , and i have 5 vector elements
</span><br>
<span class="quotelev2">&gt; &gt;    [0] 10.000000
</span><br>
<span class="quotelev2">&gt; &gt;    [0] 10.000000
</span><br>
<span class="quotelev2">&gt; &gt;    [0] 10.000000
</span><br>
<span class="quotelev2">&gt; &gt;    [0] 10.000000
</span><br>
<span class="quotelev2">&gt; &gt;    [0] 10.000000
</span><br>
<span class="quotelev2">&gt; &gt;    [0] 10.000000
</span><br>
<span class="quotelev2">&gt; &gt;    [0] 10.000000
</span><br>
<span class="quotelev2">&gt; &gt;    [0] 10.000000
</span><br>
<span class="quotelev2">&gt; &gt;    [0] 10.000000
</span><br>
<span class="quotelev2">&gt; &gt;    [0] 10.000000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    So, that's the first bump with the openmpi.. Now , if i try to
</span><br>
<span class="quotelev2">&gt; &gt; use ib0
</span><br>
<span class="quotelev2">&gt; &gt;    interfaces instead of eth0 ones, i get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm actually surprised this worked in LAM/MPI, to be honest.  There
</span><br>
<span class="quotelev1">&gt; should be an fflush() after the printf() to make sure that the output
</span><br>
<span class="quotelev1">&gt; is actually sent out of the application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    $  /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi --mca
</span><br>
<span class="quotelev2">&gt; &gt;    pls_rsh_agent ssh --mca btl openib -np 2 --host
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.1.34,192.168.1.32
</span><br>
<span class="quotelev2">&gt; &gt;    /path/to/hello_world
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt;    No available btl components were found!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    This means that there are no components of this type installed
</span><br>
<span class="quotelev2">&gt; &gt; on your
</span><br>
<span class="quotelev2">&gt; &gt;    system or all the components reported that they could not be used.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    This is a fatal error; your MPI process is likely to abort.
</span><br>
<span class="quotelev2">&gt; &gt; Check the
</span><br>
<span class="quotelev2">&gt; &gt;    output of the &quot;ompi_info&quot; command and ensure that components of
</span><br>
<span class="quotelev2">&gt; &gt; this
</span><br>
<span class="quotelev2">&gt; &gt;    type are available on your system.  You may also wish to check the
</span><br>
<span class="quotelev2">&gt; &gt;    value of the &quot;component_path&quot; MCA parameter and ensure that it
</span><br>
<span class="quotelev2">&gt; &gt; has at
</span><br>
<span class="quotelev2">&gt; &gt;    least one directory that contains valid MCA components.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt;    [pe830-01.domain.com:05942]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I know, it thinks that it doesn't have openib components
</span><br>
<span class="quotelev2">&gt; &gt; installed, however,
</span><br>
<span class="quotelev2">&gt; &gt;    ompi_info on both machines say otherwise:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    $ ompi_info | grep openib
</span><br>
<span class="quotelev2">&gt; &gt;    MCA mpool: openib (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt; &gt;    MCA btl: openib (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think it will help, but can you try again with --mca btl
</span><br>
<span class="quotelev1">&gt; openib,self?  For some reason, it appears that the openib component
</span><br>
<span class="quotelev1">&gt; is saying that it can't run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Now the questions are...
</span><br>
<span class="quotelev2">&gt; &gt;    1- In the case of using lam/mpi over ib0 interfaces.. Does lam/mpi
</span><br>
<span class="quotelev2">&gt; &gt;    automatically just use IPoIB ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, LAM has no idea what that Open IB thing is -- it just uses the
</span><br>
<span class="quotelev1">&gt; ethernet device.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    2 - Is there a tcpdump-like utility to dump the traffic on
</span><br>
<span class="quotelev2">&gt; &gt; Infiniband HCAs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not aware of any, but that may occur.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    3 - In the case of Open MPI, does --mca btl arg option have to
</span><br>
<span class="quotelev2">&gt; &gt; be passed
</span><br>
<span class="quotelev2">&gt; &gt;    everytime? For example,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    $ /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi --mca
</span><br>
<span class="quotelev2">&gt; &gt;    pls_rsh_agent ssh --mca btl tcp -np 2 --host 10.12.4.34,10.12.4.32
</span><br>
<span class="quotelev2">&gt; &gt;    /path/to/hello_world
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    works just fine, but the same command without the &quot;--mca btl
</span><br>
<span class="quotelev2">&gt; &gt; tcp&quot; bit gives
</span><br>
<span class="quotelev2">&gt; &gt;    the:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt;    It looks like MPI_INIT failed for some reason; your parallel
</span><br>
<span class="quotelev2">&gt; &gt; process is
</span><br>
<span class="quotelev2">&gt; &gt;    likely to abort.  There are many reasons that a parallel process
</span><br>
<span class="quotelev2">&gt; &gt; can
</span><br>
<span class="quotelev2">&gt; &gt;    fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment
</span><br>
<span class="quotelev2">&gt; &gt;    problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt; here's some
</span><br>
<span class="quotelev2">&gt; &gt;    additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt; &gt;    developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      PML add procs failed
</span><br>
<span class="quotelev2">&gt; &gt;      --&gt; Returned value -2 instead of OMPI_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt;    *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt;    *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt; &gt;    *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    error ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This makes it sound like Open IB is failing to setup properly.  I'm a
</span><br>
<span class="quotelev1">&gt; bit out of my league on this one -- is there any application you can run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    4 - How come the behavior of broadcast.c was different on Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; than it is
</span><br>
<span class="quotelev2">&gt; &gt;    on lam/mpi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think I answered this one already.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    5 - Any ideas as to why i am getting no btl component error when
</span><br>
<span class="quotelev2">&gt; &gt; i want to
</span><br>
<span class="quotelev2">&gt; &gt;    use openib even though ompi_info shows it? If it help any
</span><br>
<span class="quotelev2">&gt; &gt; further , I have
</span><br>
<span class="quotelev2">&gt; &gt;    the following openib modules :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This usually (but not always) indicates that something is going wrong
</span><br>
<span class="quotelev1">&gt; with initializing the hardware interface.  ompi_info only tries to
</span><br>
<span class="quotelev1">&gt; load the module, but not initialize the network device.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1233.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Previous message:</strong> <a href="1231.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>In reply to:</strong> <a href="1231.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1233.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Reply:</strong> <a href="1233.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
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
