<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 11 17:30:23 2006" -->
<!-- isoreceived="20060511213023" -->
<!-- sent="Thu, 11 May 2006 17:30:19 -0400" -->
<!-- isosent="20060511213019" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and OpenIB" -->
<!-- id="D64D64C9-0374-4873-8741-E16914CE4DC2_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5849f1820605111406lc235939i92731204063d044e_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-11 17:30:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1236.php">W. Bryan Smith: "[OMPI users] ParaView runtime problem with openmpi 1.0.2"</a>
<li><strong>Previous message:</strong> <a href="1234.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>In reply to:</strong> <a href="1234.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1240.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and OpenIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This message indicate that one of the nodes is not able to setup a  
<br>
route to the peer using the openib device. Did you run any openib  
<br>
tests on your cluster ? I mean any tests which do not involve MPI ?
<br>
<p>Otherwise if you compile in mode debug there are 2 parameters you can  
<br>
use to get more information out of the system. You should use &quot;--mca  
<br>
btl_base_debug 1&quot; and &quot;--mca btl_base_verbose 100&quot;. If you don't have  
<br>
a debug mode open mpi, it might happens that nothing will be printed.
<br>
<p>Personally I would do these 2 things before anything else:
<br>
1. make sure that all (or some) of the openib basic tests succeed on  
<br>
your cluster.
<br>
2. use these 2 mca parameters to get more information from the system.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 11, 2006, at 5:06 PM, Gurhan Ozen wrote:
<br>
<p><span class="quotelev1">&gt; Dagnabbit.. I was specifying ib, not openib .. When i specified
</span><br>
<span class="quotelev1">&gt; openib, I got this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -2 instead of OMPI_SUCCESS
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can run it with openib,self locally, even multi processes with -np
</span><br>
<span class="quotelev1">&gt; greater than one.. But once the other node is in the picture , i got
</span><br>
<span class="quotelev1">&gt; this error.. Humm does error message help to troubleshoot?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; gurhan
</span><br>
<span class="quotelev1">&gt; On 5/11/06, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On May 11, 2006, at 10:10 PM, Gurhan Ozen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the very clear answers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did change my code to include fflush() calls after printf() ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And I did try with --mca btl ib,self . Interesting result, with -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl ib,self it hello_world works fine, but broadcast hangs after i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enter the vector length.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At any rate though, --mca btl ib,self looks like the traffic goes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; over
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ethernet device .. I couldn't find any documentation on the &quot;self&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument of mca, does it mean to explore alternatives if the desired
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl (in this case ib) doesn't work?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No, self is the loopback device, for sending messages to self.  It is
</span><br>
<span class="quotelev2">&gt;&gt; never used for message routing outside of the current process, but is
</span><br>
<span class="quotelev2">&gt;&gt; required for almost all transports, as send to self can be a sticky
</span><br>
<span class="quotelev2">&gt;&gt; issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You are specifying openib, not ib, as the argument to mpirun,
</span><br>
<span class="quotelev2">&gt;&gt; correct?  Either way, I'm not really sure how data could be going
</span><br>
<span class="quotelev2">&gt;&gt; over TCP -- the TCP transport would definitely be disabled in that
</span><br>
<span class="quotelev2">&gt;&gt; case.  At this point, I don't know enough about the Open IB driver to
</span><br>
<span class="quotelev2">&gt;&gt; be of help -- one of the other developers is going to have to jump in
</span><br>
<span class="quotelev2">&gt;&gt; and provide assistance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Speaking of documentation, it looks like open-mpi didn't come with a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; man for mpirun, i thought i had seen in one of the slides of Open  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; developer's workshop that it did have mpirun.1 . Do i need to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; check it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out from svn?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's one option, or wait for us to release Open MPI 1.0.3 / 1.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 5/11/06, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 10, 2006, at 10:46 PM, Gurhan Ozen wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  My ultimate goal is to get Open MPI working with openIB stack.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; First, I had
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  installed lam-mpi , I know it doesn't have support for openIB but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it's still
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  relevant to some of my questions  I will ask.. Here is the set up
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, keep in mind throughout that while Open MPI does support  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MVAPI,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LAM/MPI will fall back to using IP over IB for communication.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  I have two machines, pe830-01 and pe830-02 .. Both have ethernet
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; interface and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  HCA interface. The IP addresses follow:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                          eth0                 ib0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  pe830-01     10.12.4.32      192.168.1.32
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  pe830-02     10.12.4.34      192.168.1.34
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    So this has worked even though it lamhosts file is  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configured to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; use ib0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    interfaces. I further verified with tcpdump command that  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; none of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this went
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    to eth0 ..
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Anyhow, if i change the lamhosts file to use the eth0 IPs,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; things work just
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    as the same with no issues . And in that case i see some  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; traffic
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on eth0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    with tcpdump.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ok, so at least it sounds like your TCP network is sanely  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configured.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Now, when i installed and used Open MPI, things didn't work as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; easy.. Here is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    what happens. After recompiling the sources with the mpicc that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; comes with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    open-mpi:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $ /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    pls_rsh_agent ssh --mca btl tcp -np 2 --host
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 10.12.4.34,10.12.4.32
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    /path/to/hello_world
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Hello, world, I am 0 of 2 and this is on : pe830-02.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Hello, world, I am 1 of 2 and this is on: pe830-01.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    So far so good, using eth0 interfaces.. hello_world works just
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fine. Now,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    when i try the broadcast program:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In reality, you always need to include two BTLs when  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specifying.  You
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; need both the one you want to use (mvapi,openib,tcp,etc.) and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;self&quot;.  You can run into issues otherwise.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $ /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    pls_rsh_agent ssh --mca btl tcp -np 2 --host
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 10.12.4.34,10.12.4.32
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    /path/to/broadcast
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    It just hangs there, it doesn't prompt me the &quot;Enter the vector
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; length:&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    string . So i just enter a number anyway since i know the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; behavior of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    program:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    10
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Enter the vector length: i am: 0 , and i have 5 vector elements
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    i am: 1 , and i have 5 vector elements
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [0] 10.000000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    So, that's the first bump with the openmpi.. Now , if i try to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; use ib0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    interfaces instead of eth0 ones, i get:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm actually surprised this worked in LAM/MPI, to be honest.  There
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should be an fflush() after the printf() to make sure that the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; output
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is actually sent out of the application.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $  /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    pls_rsh_agent ssh --mca btl openib -np 2 --host
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 192.168.1.34,192.168.1.32
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    /path/to/hello_world
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    No available btl components were found!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    This means that there are no components of this type installed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on your
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    system or all the components reported that they could not be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; used.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    This is a fatal error; your MPI process is likely to abort.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Check the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    output of the &quot;ompi_info&quot; command and ensure that components of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    type are available on your system.  You may also wish to check
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    value of the &quot;component_path&quot; MCA parameter and ensure that it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; has at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    least one directory that contains valid MCA components.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    [pe830-01.domain.com:05942]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    I know, it thinks that it doesn't have openib components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; installed, however,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    ompi_info on both machines say otherwise:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $ ompi_info | grep openib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MCA mpool: openib (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MCA btl: openib (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't think it will help, but can you try again with --mca btl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openib,self?  For some reason, it appears that the openib component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is saying that it can't run.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Now the questions are...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    1- In the case of using lam/mpi over ib0 interfaces.. Does lam/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    automatically just use IPoIB ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, LAM has no idea what that Open IB thing is -- it just uses the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ethernet device.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    2 - Is there a tcpdump-like utility to dump the traffic on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Infiniband HCAs?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not aware of any, but that may occur.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    3 - In the case of Open MPI, does --mca btl arg option have to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be passed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    everytime? For example,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $ /usr/local/openmpi/bin/mpirun  --prefix /usr/local/openmpi --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    pls_rsh_agent ssh --mca btl tcp -np 2 --host
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 10.12.4.34,10.12.4.32
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    /path/to/hello_world
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    works just fine, but the same command without the &quot;--mca btl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tcp&quot; bit gives
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    the:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    It looks like MPI_INIT failed for some reason; your parallel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    likely to abort.  There are many reasons that a parallel  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; environment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; here's some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    additional information (which may only be relevant to an  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    developer):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      PML add procs failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      --&gt; Returned value -2 instead of OMPI_SUCCESS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    error ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This makes it sound like Open IB is failing to setup properly.   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bit out of my league on this one -- is there any application you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    4 - How come the behavior of broadcast.c was different on Open
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; than it is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    on lam/mpi?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think I answered this one already.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    5 - Any ideas as to why i am getting no btl component error  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i want to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    use openib even though ompi_info shows it? If it help any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; further , I have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    the following openib modules :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This usually (but not always) indicates that something is going  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrong
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with initializing the hardware interface.  ompi_info only tries to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; load the module, but not initialize the network device.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Brian Barrett
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Open MPI developer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="1236.php">W. Bryan Smith: "[OMPI users] ParaView runtime problem with openmpi 1.0.2"</a>
<li><strong>Previous message:</strong> <a href="1234.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>In reply to:</strong> <a href="1234.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1240.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and OpenIB"</a>
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
