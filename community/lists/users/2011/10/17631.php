<?
$subject_val = "[OMPI users] Want to find LogGP parameters. Please help";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 26 12:48:20 2011" -->
<!-- isoreceived="20111026164820" -->
<!-- sent="Wed, 26 Oct 2011 09:48:14 -0700 (PDT)" -->
<!-- isosent="20111026164814" -->
<!-- name="Mudassar Majeed" -->
<!-- email="mudassarm30_at_[hidden]" -->
<!-- subject="[OMPI users] Want to find LogGP parameters. Please help" -->
<!-- id="1319647694.83233.YahooMailNeo_at_web121701.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="mailman.15.1319644812.22591.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] Want to find LogGP parameters. Please help<br>
<strong>From:</strong> Mudassar Majeed (<em>mudassarm30_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-26 12:48:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17632.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="17630.php">devendra rai: "[OMPI users] Solved:  Visual debugging on the cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17635.php">Edgar Gabriel: "Re: [OMPI users] Want to find LogGP parameters. Please help"</a>
<li><strong>Reply:</strong> <a href="17635.php">Edgar Gabriel: "Re: [OMPI users] Want to find LogGP parameters. Please help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear MPI people, 
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I want to use LogGP model with MPI to find a message with K bytes will take how much time. In this, I need to find Latency L, Overhead o and Gap G. Can somebody tell me how can I measure these three parameters of the underlying network ? and how often should I measure these parameters so that the predication of time for sending a message of K bytes remains accurate.

regards,
Mudassar



________________________________
From: &quot;users-request_at_[hidden]&quot; &lt;users-request_at_[hidden]&gt;
To: users_at_[hidden]
Sent: Wednesday, October 26, 2011 6:00 PM
Subject: users Digest, Vol 2052, Issue 1

Send users mailing list submissions to
&#160;&#160;&#160; users_at_[hidden]

To subscribe or unsubscribe via the World Wide Web, visit
&#160;&#160;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
or, via email, send a message with subject or body 'help' to
&#160;&#160;&#160; users-request_at_[hidden]

You can reach the person managing the list at
&#160;&#160;&#160; users-owner_at_[hidden]

When replying, please edit your Subject line so it is more specific
than &quot;Re: Contents of users digest...&quot;


Today's Topics:

&#160;  1. Re: Problem-Bug with MPI_Intercomm_create() (Ralph Castain)
&#160;  2. Re: Checkpoint from inside MPI program with OpenMPI 1.4.2 ?
&#160; &#160; &#160; (Josh Hursey)
&#160;  3. Subnet routing (1.2.x) not working in 1.4.3 anymore (Mirco Wahab)
&#160;  4. Re: mpirun should run with just the localhost&#160;&#160;&#160; interface on
&#160; &#160; &#160; win? (MM)
&#160;  5. Re: Checkpoint from inside MPI program with OpenMPI 1.4.2 ?
&#160; &#160; &#160; (Nguyen Toan)
&#160;  6. Re: exited on signal 11 (Segmentation fault).
&#160; &#160; &#160; (Mouhamad Al-Sayed-Ali)
&#160;  7. Changing plm_rsh_agent system wide (Patrick Begou)
&#160;  8. Re: Checkpoint from inside MPI program with OpenMPI 1.4.2 ?
&#160; &#160; &#160; (Josh Hursey)
&#160;  9. Re: Changing plm_rsh_agent system wide (Ralph Castain)
&#160; 10. Re: Changing plm_rsh_agent system wide (TERRY DONTJE)
&#160; 11. Re: Changing plm_rsh_agent system wide (TERRY DONTJE)
&#160; 12. Re: Changing plm_rsh_agent system wide (Patrick Begou)


----------------------------------------------------------------------

Message: 1
Date: Tue, 25 Oct 2011 10:08:00 -0600
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
Subject: Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()
To: Open MPI Users &lt;users_at_[hidden]&gt;
Message-ID: &lt;30D41149-6683-41C2-ACE0-776C64E5C83C_at_[hidden]&gt;
Content-Type: text/plain; charset=iso-8859-1

FWIW: I have tracked this problem down. The fix is a little more complicated then I'd like, so I'm going to have to ping some other folks to ensure we concur on the approach before doing something.

On Oct 25, 2011, at 8:20 AM, Ralph Castain wrote:

&gt; I still see it failing the test George provided on the trunk. I'm unaware of anyone looking further into it, though, as the prior discussion seemed to just end.
&gt; 
&gt; On Oct 25, 2011, at 7:01 AM, orel wrote:
&gt; 
&gt;&gt; Dears,
&gt;&gt; 
&gt;&gt; I try from several days to use advanced MPI2 features in the following scenario :
&gt;&gt; 
&gt;&gt; 1) a master code A (of size NPA) spawns (MPI_Comm_spawn()) two slave
&gt;&gt;&#160; &#160; codes B (of size NPB) and C (of size NPC), providing intercomms A-B and A-C ;
&gt;&gt; 2) i create intracomm AB and AC by merging intercomms ;
&gt;&gt; 3) then i create intercomm AB-C by calling MPI_Intercomm_create() by using AC as bridge...
&gt;&gt; 
&gt;&gt;&#160;  MPI_Comm intercommABC; A: MPI_Intercomm_create(intracommAB, 0, intracommAC, NPA, TAG,&amp;intercommABC);
&gt;&gt; B: MPI_Intercomm_create(intracommAB, 0, MPI_COMM_NULL, 0,TAG,&amp;intercommABC);
&gt;&gt; C: MPI_Intercomm_create(intracommC, 0, intracommAC, 0, TAG,&amp;intercommABC);
&gt;&gt; 
&gt;&gt;&#160; &#160;  In these calls, A0 and C0 play the role of local leader for AB and C respectively.
&gt;&gt;&#160; &#160;  C0 and A0 play the roles of remote leader in bridge intracomm AC.
&gt;&gt; 
&gt;&gt; 3)&#160; MPI_Barrier(intercommABC);
&gt;&gt; 4)&#160; i merge intercomm AB-C into intracomm ABC$
&gt;&gt; 5)&#160; MPI_Barrier(intracommABC);
&gt;&gt; 
&gt;&gt; My BUG: These calls success, but when i try to use intracommABC for a collective communication like MPI_Barrier(),
&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; i got the following error :
&gt;&gt; 
&gt;&gt; *** An error occurred in MPI_Barrier
&gt;&gt; *** on communicator
&gt;&gt; *** MPI_ERR_INTERN: internal error
&gt;&gt; *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
&gt;&gt; 
&gt;&gt; 
&gt;&gt; I try with OpenMPI trunk, 1.5.3, 1.5.4 and Mpich2-1.4.1p1
&gt;&gt; 
&gt;&gt; My code works perfectly if intracomm A, B and C are obtained by MPI_Comm_split() instead of MPI_Comm_spawn() !!!!
&gt;&gt; 
&gt;&gt; 
&gt;&gt; I found same problem in a previous thread of the OMPI Users mailing list :
&gt;&gt; 
&gt;&gt; =&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/06/16711.php">http://www.open-mpi.org/community/lists/users/2011/06/16711.php</a>
&gt;&gt; 
&gt;&gt; Is that bug/problem is currently under investigation ? :-)
&gt;&gt; 
&gt;&gt; i can give detailed code, but the one provided by George Bosilca in this previous thread provides same error...
&gt;&gt; 
&gt;&gt; Thank you to help me...
&gt;&gt; 
&gt;&gt; -- 
&gt;&gt; Aur?lien Esnard
&gt;&gt; University Bordeaux 1 / LaBRI / INRIA (France)
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 




------------------------------

Message: 2
Date: Tue, 25 Oct 2011 13:25:27 -0500
From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
Subject: Re: [OMPI users] Checkpoint from inside MPI program with
&#160;&#160;&#160; OpenMPI 1.4.2 ?
To: Open MPI Users &lt;users_at_[hidden]&gt;
Message-ID:
&#160;&#160;&#160; &lt;CAANzjEnOdwva5J4fFBmXtsK6Kj3yGE9j=dKdtaWuZs=wHzGbQg_at_[hidden]&gt;
Content-Type: text/plain; charset=ISO-8859-1

Open MPI (trunk/1.7 - not 1.4 or 1.5) provides an application level
interface to request a checkpoint of an application. This API is
defined on the following website:
&#160; <a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_checkpoint">http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_checkpoint</a>

This will behave the same as if you requested the checkpoint of the
job from the command line.

-- Josh

On Mon, Oct 24, 2011 at 12:37 PM, Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt; wrote:
&gt; Dear all,
&gt; I want to automatically checkpoint an MPI program with OpenMPI ( I'm
&gt; currently using 1.4.2 version with BLCR 0.8.2),
&gt; not by manually typing ompi-checkpoint command line from another terminal.
&gt; So I would like to know if there is a way to call checkpoint function from
&gt; inside an MPI program
&gt; with OpenMPI or how to do that.
&gt; Any ideas are very appreciated.
&gt; Regards,
&gt; Nguyen Toan
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;



-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>


------------------------------

Message: 3
Date: Tue, 25 Oct 2011 22:15:12 +0200
From: Mirco Wahab &lt;mirco.wahab_at_[hidden]&gt;
Subject: [OMPI users] Subnet routing (1.2.x) not working in 1.4.3
&#160;&#160;&#160; anymore
To: users_at_[hidden]
Message-ID: &lt;4EA718D0.5060005_at_[hidden]&gt;
Content-Type: text/plain; charset=ISO-8859-1; format=flowed

In the last few years, it has been very simple to
set up high-performance (GbE) multiple back-to-back
connections between three nodes (triangular topology)
or four nodes (tetrahedral topology).

The only things you had to do was
- use 3 (or 4) cheap compute nodes w/Linux and connect
&#160;  each of them via standard GbE router (onboard GbE NIC)
&#160;  to a file server,
- put 2 (trigonal topol.) or 3 (tetrahedral topol.)
&#160;  $25 PCIe-GbE-NICs into *each* node,
- connect the nodes with 3 (trigonal) or 4 (tetrahedral)
&#160;  short crossover Cat5e cables,
- configure the extra NICs into different subnets
&#160;  according to their &quot;edge index&quot;, eg.
&#160;  for 3 nodes (node10, node11, node12)
&#160; &#160;  node10
&#160; &#160; &#160;  onboard NIC: 192.168.0.10 on eth0 (to router/server)
&#160; &#160; &#160;  extra NIC: 10.0.1.10 on eth1 (edge 1 to 10.0.1.11)
&#160; &#160; &#160;  extra NIC: 10.0.2.10 on eth2 (edge 2 to 10.0.2.12)
&#160; &#160;  node11
&#160; &#160; &#160;  onboard NIC: 192.168.0.11 on eth0 (to router/server)
&#160; &#160; &#160;  extra NIC: 10.0.1.11 on eth1 (edge 1 to 10.0.1.10)
&#160; &#160; &#160;  extra NIC: 10.0.3.11 on eth3 (edge 3 to 10.0.3.12)
&#160; &#160;  node12
&#160; &#160; &#160;  onboard NIC: 192.168.0.12 on eth0 (to router/server)
&#160; &#160; &#160;  extra NIC: 10.0.2.12 on eth2 (edge 2 to 10.0.2.10)
&#160; &#160; &#160;  extra NIC: 10.0.3.12 on eth3 (edge 3 to 10.0.3.11)
- that's it. I mean, that *was* it, with 1.2.x.

OMPI 1.2.x would then ingeniously discover the routable edges
and open communication ports accordingly without any additional
explicit host routing, eg. invoked by

$&gt; mpirun -np 12 --host c10,c11,c12 --mca btl_tcp_if_exclude lo,eth0&#160; my_mpi_app

and (measured by iftop) saturate the available edges with
about 100MB/sec duplex on each of them. It would not stumble
on the fact, that some interfaces are not reacheable by
every NIC directly. And this was very convenient over the years.

With 1.4.3 (which comes out of the box) w/actual Linux distributions,
this won't work. It would hang and complain after timeout about failed
endpoint connects, eg:

[node12][[52378,1],2][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 10.0.1.11 failed: Connection timed out (110)

* Can the intelligent behaviour of 1.2.x be &quot;configured back&quot;?

* How should the topology look like to work with 1,4,x painlessly?

Thanks &amp; regards

M.




------------------------------

Message: 4
Date: Tue, 25 Oct 2011 21:33:54 +0100
From: &quot;MM&quot; &lt;finjulhich_at_[hidden]&gt;
Subject: Re: [OMPI users] mpirun should run with just the localhost
&#160;&#160;&#160; interface on win?
To: &quot;'openmpi mailing list'&quot; &lt;users_at_[hidden]&gt;
Message-ID: &lt;00d601cc9355$6af47290$40dd57b0$@com&gt;
Content-Type: text/plain;&#160;&#160;&#160; charset=&quot;us-ascii&quot;

-----Original Message-----

if the interface is down, should localhost still allow mpirun to run mpi
processes?



------------------------------

Message: 5
Date: Wed, 26 Oct 2011 13:52:17 +0900
From: Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt;
Subject: Re: [OMPI users] Checkpoint from inside MPI program with
&#160;&#160;&#160; OpenMPI 1.4.2 ?
To: Open MPI Users &lt;users_at_[hidden]&gt;
Message-ID:
&#160;&#160;&#160; &lt;CAFiEserJ0U9m9euy1-CA8m=_KihMM5s73qaJiii_N=p7f3Kdug_at_[hidden]&gt;
Content-Type: text/plain; charset=&quot;iso-8859-1&quot;

Dear Josh,

Thank you. I will test the 1.7 trunk as you suggested.
Also I want to ask if we can add this interface to OpenMPI 1.4.2,
because my applications are mainly involved in this version.

Regards,
Nguyen Toan

On Wed, Oct 26, 2011 at 3:25 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:

&gt; Open MPI (trunk/1.7 - not 1.4 or 1.5) provides an application level
&gt; interface to request a checkpoint of an application. This API is
&gt; defined on the following website:
&gt;&#160; <a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_checkpoint">http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_checkpoint</a>
&gt;
&gt; This will behave the same as if you requested the checkpoint of the
&gt; job from the command line.
&gt;
&gt; -- Josh
&gt;
&gt; On Mon, Oct 24, 2011 at 12:37 PM, Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt;
&gt; wrote:
&gt; &gt; Dear all,
&gt; &gt; I want to automatically checkpoint an MPI program with OpenMPI ( I'm
&gt; &gt; currently using 1.4.2 version with BLCR 0.8.2),
&gt; &gt; not by manually typing ompi-checkpoint command line from another
&gt; terminal.
&gt; &gt; So I would like to know if there is a way to call checkpoint function
&gt; from
&gt; &gt; inside an MPI program
&gt; &gt; with OpenMPI or how to do that.
&gt; &gt; Any ideas are very appreciated.
&gt; &gt; Regards,
&gt; &gt; Nguyen Toan
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt;
&gt;
&gt;
&gt; --
&gt; Joshua Hursey
&gt; Postdoctoral Research Associate
&gt; Oak Ridge National Laboratory
&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
-------------- next part --------------
HTML attachment scrubbed and removed

------------------------------

Message: 6
Date: Wed, 26 Oct 2011 09:57:38 +0200
From: Mouhamad Al-Sayed-Ali &lt;Mouhamad.Al-Sayed-Ali_at_[hidden]&gt;
Subject: Re: [OMPI users] exited on signal 11 (Segmentation fault).
To: Gus Correa &lt;gus_at_[hidden]&gt;
Cc: Open MPI Users &lt;users_at_[hidden]&gt;
Message-ID: &lt;20111026095738.119675e8nwvpxhss_at_[hidden]&gt;
Content-Type: text/plain; charset=ISO-8859-1; DelSp=&quot;Yes&quot;;
&#160;&#160;&#160; format=&quot;flowed&quot;

Hi Gus Correa,

&#160; the output of ulimit -a&#160; &#160;  is


----
file(blocks)&#160; &#160; &#160; &#160;  unlimited
coredump(blocks)&#160; &#160;  2048
data(kbytes)&#160; &#160; &#160; &#160;  unlimited
stack(kbytes)&#160; &#160; &#160; &#160; 10240
lockedmem(kbytes)&#160; &#160; unlimited
memory(kbytes)&#160; &#160; &#160;  unlimited
nofiles(descriptors) 1024
processes&#160; &#160; &#160; &#160; &#160; &#160; 256
--------


Thanks

Mouhamad
Gus Correa &lt;gus_at_[hidden]&gt; a ?crit?:

&gt; Hi Mouhamad
&gt;
&gt; The locked memory is set to unlimited, but the lines
&gt; about the stack are commented out.
&gt; Have you tried to add this line:
&gt;
&gt; *&#160;  -&#160;  stack&#160; &#160; &#160;  -1
&gt;
&gt; then run wrf again? [Note no &quot;#&quot; hash character]
&gt;
&gt; Also, if you login to the compute nodes,
&gt; what is the output of 'limit' [csh,tcsh] or 'ulimit -a' [sh,bash]?
&gt; This should tell you what limits are actually set.
&gt;
&gt; I hope this helps,
&gt; Gus Correa
&gt;
&gt; Mouhamad Al-Sayed-Ali wrote:
&gt;&gt; Hi all,
&gt;&gt;
&gt;&gt;&#160;  I've checked the &quot;limits.conf&quot;, and it contains theses lines
&gt;&gt;
&gt;&gt;
&gt;&gt; # Jcb 29.06.2007 : pbs wrf (Siji)
&gt;&gt; #*&#160; &#160; &#160; hard&#160; &#160; stack&#160;  1000000
&gt;&gt; #*&#160; &#160; &#160; soft&#160; &#160; stack&#160;  1000000
&gt;&gt;
&gt;&gt; # Dr 14.02.2008 : pour voltaire mpi
&gt;&gt; *&#160; &#160; &#160; hard&#160; &#160; memlock unlimited
&gt;&gt; *&#160; &#160; &#160; soft&#160; &#160; memlock unlimited
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; Many thanks for your help
&gt;&gt; Mouhamad
&gt;&gt;
&gt;&gt; Gus Correa &lt;gus_at_[hidden]&gt; a ?crit :
&gt;&gt;
&gt;&gt;&gt; Hi Mouhamad, Ralph, Terry
&gt;&gt;&gt;
&gt;&gt;&gt; Very often big programs like wrf crash with segfault because they
&gt;&gt;&gt; can't allocate memory on the stack, and assume the system doesn't
&gt;&gt;&gt; impose any limits for it.&#160; This has nothing to do with MPI.
&gt;&gt;&gt;
&gt;&gt;&gt; Mouhamad:&#160; Check if your stack size is set to unlimited on all compute
&gt;&gt;&gt; nodes.&#160; The easy way to get it done
&gt;&gt;&gt; is to change /etc/security/limits.conf,
&gt;&gt;&gt; where you or your system administrator could add these lines:
&gt;&gt;&gt;
&gt;&gt;&gt; *&#160;  -&#160;  memlock&#160; &#160;  -1
&gt;&gt;&gt; *&#160;  -&#160;  stack&#160; &#160; &#160;  -1
&gt;&gt;&gt; *&#160;  -&#160;  nofile&#160; &#160; &#160; 4096
&gt;&gt;&gt;
&gt;&gt;&gt; My two cents,
&gt;&gt;&gt; Gus Correa
&gt;&gt;&gt;
&gt;&gt;&gt; Ralph Castain wrote:
&gt;&gt;&gt;&gt; Looks like you are crashing in wrf - have you asked them for help?
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; On Oct 25, 2011, at 7:53 AM, Mouhamad Al-Sayed-Ali wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Hi again,
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; This is exactly the error I have:
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; ----
&gt;&gt;&gt;&gt;&gt; taskid: 0 hostname: part034.u-bourgogne.fr
&gt;&gt;&gt;&gt;&gt; [part034:21443] *** Process received signal ***
&gt;&gt;&gt;&gt;&gt; [part034:21443] Signal: Segmentation fault (11)
&gt;&gt;&gt;&gt;&gt; [part034:21443] Signal code: Address not mapped (1)
&gt;&gt;&gt;&gt;&gt; [part034:21443] Failing at address: 0xfffffffe01eeb340
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 0] /lib64/libpthread.so.0 [0x3612c0de70]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 1] wrf.exe(__module_ra_rrtm_MOD_taugb3+0x418)&#160; 
&gt;&gt;&gt;&gt;&gt; [0x11cc9d8]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 2] wrf.exe(__module_ra_rrtm_MOD_gasabs+0x260)&#160; 
&gt;&gt;&gt;&gt;&gt; [0x11cfca0]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 3] wrf.exe(__module_ra_rrtm_MOD_rrtm+0xb31) [0x11e6e41]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 4]&#160; 
&gt;&gt;&gt;&gt;&gt; wrf.exe(__module_ra_rrtm_MOD_rrtmlwrad+0x25ec) [0x11e9bcc]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 5]&#160; 
&gt;&gt;&gt;&gt;&gt; wrf.exe(__module_radiation_driver_MOD_radiation_driver+0xe573)&#160; 
&gt;&gt;&gt;&gt;&gt; [0xcc4ed3]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 6]&#160; 
&gt;&gt;&gt;&gt;&gt; wrf.exe(__module_first_rk_step_part1_MOD_first_rk_step_part1+0x40c5)&#160; 
&gt;&gt;&gt;&gt;&gt; [0xe0e4f5]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 7] wrf.exe(solve_em_+0x22e58) [0x9b45c8]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 8] wrf.exe(solve_interface_+0x80a) [0x902dda]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [ 9]&#160; 
&gt;&gt;&gt;&gt;&gt; wrf.exe(__module_integrate_MOD_integrate+0x236) [0x4b2c4a]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [10] wrf.exe(__module_wrf_top_MOD_wrf_run+0x24)&#160; 
&gt;&gt;&gt;&gt;&gt; [0x47a924]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [11] wrf.exe(main+0x41) [0x4794d1]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [12] /lib64/libc.so.6(__libc_start_main+0xf4)&#160; 
&gt;&gt;&gt;&gt;&gt; [0x361201d8b4]
&gt;&gt;&gt;&gt;&gt; [part034:21443] [13] wrf.exe [0x4793c9]
&gt;&gt;&gt;&gt;&gt; [part034:21443] *** End of error message ***
&gt;&gt;&gt;&gt;&gt; -------
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Mouhamad
&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;




------------------------------

Message: 7
Date: Wed, 26 Oct 2011 11:11:08 +0200
From: Patrick Begou &lt;Patrick.Begou_at_[hidden]&gt;
Subject: [OMPI users] Changing plm_rsh_agent system wide
To: Open MPI Users &lt;users_at_[hidden]&gt;
Message-ID: &lt;4EA7CEAC.3080800_at_[hidden]&gt;
Content-Type: text/plain; charset=ISO-8859-15; format=flowed

I need to change system wide how OpenMPI launch the jobs on the nodes of my cluster.

Setting:
export OMPI_MCA_plm_rsh_agent=oarsh

works fine but I would like this config to be the default with OpenMPI. I've 
read several threads (discussions, FAQ) about this but none of the provided 
solutions seams to work.

I have two files:
/usr/lib/openmpi/1.4-gcc/etc/openmpi-mca-params.conf
/usr/lib64/openmpi/1.4-gcc/etc/openmpi-mca-params.conf

In these files I've set various flavor of the syntax (only one at a time, and 
the same in each file of course!):
test 1) plm_rsh_agent = oarsh
test 2) pls_rsh_agent = oarsh
test 3) orte_rsh_agent = oarsh

But each time when I run &quot;ompi_info --param plm rsh&quot; I get:
MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &quot;ssh : rsh&quot;, data source: 
default value, synonyms:
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  pls_rsh_agent)
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  The command used to launch executables on remote nodes 
(typically either &quot;ssh&quot; or &quot;rsh&quot;)

With the exported variable it works fine.
Any suggestion ?

The rpm package of my linux Rocks Cluster provides:
&#160; &#160; Package: Open MPI root_at_build-x86-64 Distribution
&#160; &#160; Open MPI: 1.4.3
&#160; &#160; Open MPI SVN revision: r23834
&#160; &#160; Open MPI release date: Oct 05, 2010

Thanks

Patrick



&#160; --
===============================================================
|&#160; Equipe M.O.S.T.&#160; &#160; &#160; &#160;  | <a href="http://most.hmg.inpg.fr">http://most.hmg.inpg.fr</a>&#160; &#160; &#160; &#160; &#160; |
|&#160; Patrick BEGOU&#160; &#160; &#160; &#160; &#160;  |&#160; &#160; &#160;  ------------&#160; &#160; &#160; &#160; &#160; &#160; &#160;  |
|&#160; LEGI&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; | mailto:Patrick.Begou_at_[hidden] |
|&#160; BP 53 X&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  | Tel 04 76 82 51 35&#160; &#160; &#160; &#160; &#160; &#160; &#160;  |
|&#160; 38041 GRENOBLE CEDEX&#160; &#160; | Fax 04 76 82 52 71&#160; &#160; &#160; &#160; &#160; &#160; &#160;  |
===============================================================



------------------------------

Message: 8
Date: Wed, 26 Oct 2011 07:20:38 -0500
From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
Subject: Re: [OMPI users] Checkpoint from inside MPI program with
&#160;&#160;&#160; OpenMPI 1.4.2 ?
To: Open MPI Users &lt;users_at_[hidden]&gt;
Message-ID:
&#160;&#160;&#160; &lt;CAANzjEmx=sO_9mtzVM+WiPLWFhPSiM6UxeosxNPgdd8QUZObCw_at_[hidden]&gt;
Content-Type: text/plain; charset=ISO-8859-1

Since this would be a new feature for 1.4, we cannot move it since the
1.4 branch is for bug fixes only. However, we may be able to add it to
1.5. I filed a ticket if you want to track that progress:
&#160; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2895">https://svn.open-mpi.org/trac/ompi/ticket/2895</a>

-- Josh


On Tue, Oct 25, 2011 at 11:52 PM, Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt; wrote:
&gt; Dear Josh,
&gt; Thank you. I will test the 1.7 trunk as you suggested.
&gt; Also I want to ask if we can add this interface to OpenMPI 1.4.2,
&gt; because my applications are mainly involved in this version.
&gt; Regards,
&gt; Nguyen Toan
&gt; On Wed, Oct 26, 2011 at 3:25 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
&gt;&gt;
&gt;&gt; Open MPI (trunk/1.7 - not 1.4 or 1.5) provides an application level
&gt;&gt; interface to request a checkpoint of an application. This API is
&gt;&gt; defined on the following website:
&gt;&gt; ?<a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_checkpoint">http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_checkpoint</a>
&gt;&gt;
&gt;&gt; This will behave the same as if you requested the checkpoint of the
&gt;&gt; job from the command line.
&gt;&gt;
&gt;&gt; -- Josh
&gt;&gt;
&gt;&gt; On Mon, Oct 24, 2011 at 12:37 PM, Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt;
&gt;&gt; wrote:
&gt;&gt; &gt; Dear all,
&gt;&gt; &gt; I want to automatically checkpoint an MPI program with OpenMPI ( I'm
&gt;&gt; &gt; currently using 1.4.2 version with BLCR 0.8.2),
&gt;&gt; &gt; not by manually typing ompi-checkpoint command line from another
&gt;&gt; &gt; terminal.
&gt;&gt; &gt; So I would like to know if there is a way to call checkpoint function
&gt;&gt; &gt; from
&gt;&gt; &gt; inside an MPI program
&gt;&gt; &gt; with OpenMPI or how to do that.
&gt;&gt; &gt; Any ideas are very appreciated.
&gt;&gt; &gt; Regards,
&gt;&gt; &gt; Nguyen Toan
&gt;&gt; &gt; _______________________________________________
&gt;&gt; &gt; users mailing list
&gt;&gt; &gt; users_at_[hidden]
&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; &gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; --
&gt;&gt; Joshua Hursey
&gt;&gt; Postdoctoral Research Associate
&gt;&gt; Oak Ridge National Laboratory
&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;



-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>



------------------------------

Message: 9
Date: Wed, 26 Oct 2011 08:44:45 -0600
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
Subject: Re: [OMPI users] Changing plm_rsh_agent system wide
To: Open MPI Users &lt;users_at_[hidden]&gt;
Message-ID: &lt;F188CF99-9A7A-4327-AF9C-51D578CD54C4_at_[hidden]&gt;
Content-Type: text/plain; charset=us-ascii

Did the version you are running get installed in /usr? Sounds like you are picking up a different version when running a command - i.e., that your PATH is finding a different installation than the one in /usr.


On Oct 26, 2011, at 3:11 AM, Patrick Begou wrote:

&gt; I need to change system wide how OpenMPI launch the jobs on the nodes of my cluster.
&gt; 
&gt; Setting:
&gt; export OMPI_MCA_plm_rsh_agent=oarsh
&gt; 
&gt; works fine but I would like this config to be the default with OpenMPI. I've read several threads (discussions, FAQ) about this but none of the provided solutions seams to work.
&gt; 
&gt; I have two files:
&gt; /usr/lib/openmpi/1.4-gcc/etc/openmpi-mca-params.conf
&gt; /usr/lib64/openmpi/1.4-gcc/etc/openmpi-mca-params.conf
&gt; 
&gt; In these files I've set various flavor of the syntax (only one at a time, and the same in each file of course!):
&gt; test 1) plm_rsh_agent = oarsh
&gt; test 2) pls_rsh_agent = oarsh
&gt; test 3) orte_rsh_agent = oarsh
&gt; 
&gt; But each time when I run &quot;ompi_info --param plm rsh&quot; I get:
&gt; MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &quot;ssh : rsh&quot;, data source: default value, synonyms:
&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; pls_rsh_agent)
&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; The command used to launch executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
&gt; 
&gt; With the exported variable it works fine.
&gt; Any suggestion ?
&gt; 
&gt; The rpm package of my linux Rocks Cluster provides:
&gt;&#160;  Package: Open MPI root_at_build-x86-64 Distribution
&gt;&#160;  Open MPI: 1.4.3
&gt;&#160;  Open MPI SVN revision: r23834
&gt;&#160;  Open MPI release date: Oct 05, 2010
&gt; 
&gt; Thanks
&gt; 
&gt; Patrick
&gt; 
&gt; 
&gt; 
&gt; --
&gt; ===============================================================
&gt; |&#160; Equipe M.O.S.T.&#160; &#160; &#160; &#160;  | <a href="http://most.hmg.inpg.fr">http://most.hmg.inpg.fr</a>&#160; &#160; &#160; &#160; &#160; |
&gt; |&#160; Patrick BEGOU&#160; &#160; &#160; &#160; &#160;  |&#160; &#160; &#160;  ------------&#160; &#160; &#160; &#160; &#160; &#160; &#160;  |
&gt; |&#160; LEGI&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; | mailto:Patrick.Begou_at_[hidden] |
&gt; |&#160; BP 53 X&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  | Tel 04 76 82 51 35&#160; &#160; &#160; &#160; &#160; &#160; &#160;  |
&gt; |&#160; 38041 GRENOBLE CEDEX&#160; &#160; | Fax 04 76 82 52 71&#160; &#160; &#160; &#160; &#160; &#160; &#160;  |
&gt; ===============================================================
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>




------------------------------

Message: 10
Date: Wed, 26 Oct 2011 10:49:38 -0400
From: TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt;
Subject: Re: [OMPI users] Changing plm_rsh_agent system wide
To: Open MPI Users &lt;users_at_[hidden]&gt;
Message-ID: &lt;4EA81E02.6080609_at_[hidden]&gt;
Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;

I am using prefix configuration so no it does not exist in /usr.

--td

On 10/26/2011 10:44 AM, Ralph Castain wrote:
&gt; Did the version you are running get installed in /usr? Sounds like you are picking up a different version when running a command - i.e., that your PATH is finding a different installation than the one in /usr.
&gt;
&gt;
&gt; On Oct 26, 2011, at 3:11 AM, Patrick Begou wrote:
&gt;
&gt;&gt; I need to change system wide how OpenMPI launch the jobs on the nodes of my cluster.
&gt;&gt;
&gt;&gt; Setting:
&gt;&gt; export OMPI_MCA_plm_rsh_agent=oarsh
&gt;&gt;
&gt;&gt; works fine but I would like this config to be the default with OpenMPI. I've read several threads (discussions, FAQ) about this but none of the provided solutions seams to work.
&gt;&gt;
&gt;&gt; I have two files:
&gt;&gt; /usr/lib/openmpi/1.4-gcc/etc/openmpi-mca-params.conf
&gt;&gt; /usr/lib64/openmpi/1.4-gcc/etc/openmpi-mca-params.conf
&gt;&gt;
&gt;&gt; In these files I've set various flavor of the syntax (only one at a time, and the same in each file of course!):
&gt;&gt; test 1) plm_rsh_agent = oarsh
&gt;&gt; test 2) pls_rsh_agent = oarsh
&gt;&gt; test 3) orte_rsh_agent = oarsh
&gt;&gt;
&gt;&gt; But each time when I run &quot;ompi_info --param plm rsh&quot; I get:
&gt;&gt; MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &quot;ssh : rsh&quot;, data source: default value, synonyms:
&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  pls_rsh_agent)
&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  The command used to launch executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
&gt;&gt;
&gt;&gt; With the exported variable it works fine.
&gt;&gt; Any suggestion ?
&gt;&gt;
&gt;&gt; The rpm package of my linux Rocks Cluster provides:
&gt;&gt;&#160; &#160; Package: Open MPI root_at_build-x86-64 Distribution
&gt;&gt;&#160; &#160; Open MPI: 1.4.3
&gt;&gt;&#160; &#160; Open MPI SVN revision: r23834
&gt;&gt;&#160; &#160; Open MPI release date: Oct 05, 2010
&gt;&gt;
&gt;&gt; Thanks
&gt;&gt;
&gt;&gt; Patrick
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; --
&gt;&gt; ===============================================================
&gt;&gt; |&#160; Equipe M.O.S.T.&#160; &#160; &#160; &#160;  | <a href="http://most.hmg.inpg.fr">http://most.hmg.inpg.fr</a>&#160; &#160; &#160; &#160; &#160; |
&gt;&gt; |&#160; Patrick BEGOU&#160; &#160; &#160; &#160; &#160;  |&#160; &#160; &#160;  ------------&#160; &#160; &#160; &#160; &#160; &#160; &#160;  |
&gt;&gt; |&#160; LEGI&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; | mailto:Patrick.Begou_at_[hidden] |
&gt;&gt; |&#160; BP 53 X&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  | Tel 04 76 82 51 35&#160; &#160; &#160; &#160; &#160; &#160; &#160;  |
&gt;&gt; |&#160; 38041 GRENOBLE CEDEX&#160; &#160; | Fax 04 76 82 52 71&#160; &#160; &#160; &#160; &#160; &#160; &#160;  |
&gt;&gt; ===============================================================
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;



-------------- next part --------------
HTML attachment scrubbed and removed
-------------- next part --------------
A non-text attachment was scrubbed...
Name: not available
Type: image/gif
Size: 2059 bytes
Desc: not available
URL: &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20111026/2e811d83/attachment.gif">http://www.open-mpi.org/MailArchives/users/attachments/20111026/2e811d83/attachment.gif</a>&gt;

------------------------------

Message: 11
Date: Wed, 26 Oct 2011 10:51:06 -0400
From: TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt;
Subject: Re: [OMPI users] Changing plm_rsh_agent system wide
To: Open MPI Users &lt;users_at_[hidden]&gt;
Message-ID: &lt;4EA81E5A.3030606_at_[hidden]&gt;
Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;

Sorry please disregard my reply to this email.

:-)

--td

On 10/26/2011 10:44 AM, Ralph Castain wrote:
&gt; Did the version you are running get installed in /usr? Sounds like you are picking up a different version when running a command - i.e., that your PATH is finding a different installation than the one in /usr.
&gt;
&gt;
&gt; On Oct 26, 2011, at 3:11 AM, Patrick Begou wrote:
&gt;
&gt;&gt; I need to change system wide how OpenMPI launch the jobs on the nodes of my cluster.
&gt;&gt;
&gt;&gt; Setting:
&gt;&gt; export OMPI_MCA_plm_rsh_agent=oarsh
&gt;&gt;
&gt;&gt; works fine but I would like this config to be the default with OpenMPI. I've read several threads (discussions, FAQ) about this but none of the provided solutions seams to work.
&gt;&gt;
&gt;&gt; I have two files:
&gt;&gt; /usr/lib/openmpi/1.4-gcc/etc/openmpi-mca-params.conf
&gt;&gt; /usr/lib64/openmpi/1.4-gcc/etc/openmpi-mca-params.conf
&gt;&gt;
&gt;&gt; In these files I've set various flavor of the syntax (only one at a time, and the same in each file of course!):
&gt;&gt; test 1) plm_rsh_agent = oarsh
&gt;&gt; test 2) pls_rsh_agent = oarsh
&gt;&gt; test 3) orte_rsh_agent = oarsh
&gt;&gt;
&gt;&gt; But each time when I run &quot;ompi_info --param plm rsh&quot; I get:
&gt;&gt; MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &quot;ssh : rsh&quot;, data source: default value, synonyms:
&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  pls_rsh_agent)
&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  The command used to launch executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
&gt;&gt;
&gt;&gt; With the exported variable it works fine.
&gt;&gt; Any suggestion ?
&gt;&gt;
&gt;&gt; The rpm package of my linux Rocks Cluster provides:
&gt;&gt;&#160; &#160; Package: Open MPI root_at_build-x86-64 Distribution
&gt;&gt;&#160; &#160; Open MPI: 1.4.3
&gt;&gt;&#160; &#160; Open MPI SVN revision: r23834
&gt;&gt;&#160; &#160; Open MPI release date: Oct 05, 2010
&gt;&gt;
&gt;&gt; Thanks
&gt;&gt;
&gt;&gt; Patrick
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; --
&gt;&gt; ===============================================================
&gt;&gt; |&#160; Equipe M.O.S.T.&#160; &#160; &#160; &#160;  | <a href="http://most.hmg.inpg.fr">http://most.hmg.inpg.fr</a>&#160; &#160; &#160; &#160; &#160; |
&gt;&gt; |&#160; Patrick BEGOU&#160; &#160; &#160; &#160; &#160;  |&#160; &#160; &#160;  ------------&#160; &#160; &#160; &#160; &#160; &#160; &#160;  |
&gt;&gt; |&#160; LEGI&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; | mailto:Patrick.Begou_at_[hidden] |
&gt;&gt; |&#160; BP 53 X&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  | Tel 04 76 82 51 35&#160; &#160; &#160; &#160; &#160; &#160; &#160;  |
&gt;&gt; |&#160; 38041 GRENOBLE CEDEX&#160; &#160; | Fax 04 76 82 52 71&#160; &#160; &#160; &#160; &#160; &#160; &#160;  |
&gt;&gt; ===============================================================
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;



-------------- next part --------------
HTML attachment scrubbed and removed
-------------- next part --------------
A non-text attachment was scrubbed...
Name: not available
Type: image/gif
Size: 2059 bytes
Desc: not available
URL: &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20111026/5d399085/attachment.gif">http://www.open-mpi.org/MailArchives/users/attachments/20111026/5d399085/attachment.gif</a>&gt;

------------------------------

Message: 12
Date: Wed, 26 Oct 2011 17:57:54 +0200
From: Patrick Begou &lt;Patrick.Begou_at_[hidden]&gt;
Subject: Re: [OMPI users] Changing plm_rsh_agent system wide
To: Open MPI Users &lt;users_at_[hidden]&gt;
Message-ID: &lt;4EA82E02.9020107_at_[hidden]&gt;
Content-Type: text/plain; charset=ISO-8859-15; format=flowed

Ralph Castain a ?crit :
&gt; Did the version you are running get installed in /usr? Sounds like you are picking up a different version when running a command - i.e., that your PATH is finding a different installation than the one in /usr.

Right! I'm using OpenMPI with Rocks Cluster distribution. There is:
&#160; openmpi-1.4-4.el5 rpm installed with
/usr/lib*/openmpi/1.4-gcc/etc/openmpi-mca-params.conf

but there is also&#160; rocks-openmpi-1.4.3-1 with
/opt/openmpi/etc/openmpi-mca-params.conf

I never notice this double default install of OpenMPI in this linux distribution.
Thanks a lot for the suggestion, I was fixed on a syntax error in my config...

Patrick
&gt;
&gt;
&gt; On Oct 26, 2011, at 3:11 AM, Patrick Begou wrote:
&gt;
&gt;&gt; I need to change system wide how OpenMPI launch the jobs on the nodes of my cluster.
&gt;&gt;
&gt;&gt; Setting:
&gt;&gt; export OMPI_MCA_plm_rsh_agent=oarsh
&gt;&gt;
&gt;&gt; works fine but I would like this config to be the default with OpenMPI. I've read several threads (discussions, FAQ) about this but none of the provided solutions seams to work.
&gt;&gt;
&gt;&gt; I have two files:
&gt;&gt; /usr/lib/openmpi/1.4-gcc/etc/openmpi-mca-params.conf
&gt;&gt; /usr/lib64/openmpi/1.4-gcc/etc/openmpi-mca-params.conf
&gt;&gt;
&gt;&gt; In these files I've set various flavor of the syntax (only one at a time, and the same in each file of course!):
&gt;&gt; test 1) plm_rsh_agent = oarsh
&gt;&gt; test 2) pls_rsh_agent = oarsh
&gt;&gt; test 3) orte_rsh_agent = oarsh
&gt;&gt;
&gt;&gt; But each time when I run &quot;ompi_info --param plm rsh&quot; I get:
&gt;&gt; MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &quot;ssh : rsh&quot;, data source: default value, synonyms:
&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  pls_rsh_agent)
&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  The command used to launch executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
&gt;&gt;
&gt;&gt; With the exported variable it works fine.
&gt;&gt; Any suggestion ?
&gt;&gt;
&gt;&gt; The rpm package of my linux Rocks Cluster provides:
&gt;&gt;&#160; &#160; Package: Open MPI root_at_build-x86-64 Distribution
&gt;&gt;&#160; &#160; Open MPI: 1.4.3
&gt;&gt;&#160; &#160; Open MPI SVN revision: r23834
&gt;&gt;&#160; &#160; Open MPI release date: Oct 05, 2010
&gt;&gt;
&gt;&gt; Thanks
&gt;&gt;
&gt;&gt; Patrick
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; --
&gt;&gt; ===============================================================
&gt;&gt; |&#160; Equipe M.O.S.T.&#160; &#160; &#160; &#160;  | <a href="http://most.hmg.inpg.fr">http://most.hmg.inpg.fr</a>&#160; &#160; &#160; &#160; &#160; |
&gt;&gt; |&#160; Patrick BEGOU&#160; &#160; &#160; &#160; &#160;  |&#160; &#160; &#160;  ------------&#160; &#160; &#160; &#160; &#160; &#160; &#160;  |
&gt;&gt; |&#160; LEGI&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; | mailto:Patrick.Begou_at_[hidden] |
&gt;&gt; |&#160; BP 53 X&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  | Tel 04 76 82 51 35&#160; &#160; &#160; &#160; &#160; &#160; &#160;  |
&gt;&gt; |&#160; 38041 GRENOBLE CEDEX&#160; &#160; | Fax 04 76 82 52 71&#160; &#160; &#160; &#160; &#160; &#160; &#160;  |
&gt;&gt; ===============================================================
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;


-- 
===============================================================
|&#160; Equipe M.O.S.T.&#160; &#160; &#160; &#160;  | <a href="http://most.hmg.inpg.fr">http://most.hmg.inpg.fr</a>&#160; &#160; &#160; &#160; &#160; |
|&#160; Patrick BEGOU&#160; &#160; &#160; &#160; &#160;  |&#160; &#160; &#160;  ------------&#160; &#160; &#160; &#160; &#160; &#160; &#160;  |
|&#160; LEGI&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; | mailto:Patrick.Begou_at_[hidden] |
|&#160; BP 53 X&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  | Tel 04 76 82 51 35&#160; &#160; &#160; &#160; &#160; &#160; &#160;  |
|&#160; 38041 GRENOBLE CEDEX&#160; &#160; | Fax 04 76 82 52 71&#160; &#160; &#160; &#160; &#160; &#160; &#160;  |
===============================================================





------------------------------

_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

End of users Digest, Vol 2052, Issue 1
**************************************
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17631/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17632.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="17630.php">devendra rai: "[OMPI users] Solved:  Visual debugging on the cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17635.php">Edgar Gabriel: "Re: [OMPI users] Want to find LogGP parameters. Please help"</a>
<li><strong>Reply:</strong> <a href="17635.php">Edgar Gabriel: "Re: [OMPI users] Want to find LogGP parameters. Please help"</a>
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
