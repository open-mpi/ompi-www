<?
$subject_val = "Re: [OMPI users] OpenIB problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 00:04:51 2007" -->
<!-- isoreceived="20071129050451" -->
<!-- sent="29 Nov 2007 05:02:49 -0000" -->
<!-- isosent="20071129050249" -->
<!-- name="Neeraj Chourasia" -->
<!-- email="neeraj_ch1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB problems" -->
<!-- id="20071129050249.17712.qmail_at_webmail74.rediffmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] OpenIB problems" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenIB problems<br>
<strong>From:</strong> Neeraj Chourasia (<em>neeraj_ch1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-29 00:02:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4553.php">Keshetti Mahesh: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<li><strong>Previous message:</strong> <a href="4551.php">Mark Potts: "Re: [OMPI users] Run a process double"</a>
<li><strong>Maybe in reply to:</strong> <a href="4503.php">Brock Palen: "[OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Guys,

   The alternative to THREAD_MULTIPLE problem is to use --mca   mpi_leave_pinned 1 to mpirun option. This will ensure 1 RDMA operation contrary to splitting data in MAX RDMA size (default to 1MB).

If your data size is small say below 1 MB, program will run well with THREAD_MULTIPLE. Problem comes when data size increases and OpenMPI starts splitting it.

I think even with Bigger sizes, Program works if interconnect is TCP, but fails to work on IB. So on IB, you can run your program if you set mca paramter mpi_leave_pinned to 1.

Cheers
Neeraj



On Thu, 29 Nov 2007 Brock Palen wrote :
&gt;Jeff thanks for all the reply's,
&gt;
&gt;Hate to admit but at the moment we can't log onto the switch.
&gt;
&gt;But the ibcheckerrors command returns nothing out of bounds, and i
&gt;think that command also checks the switch ports.
&gt;
&gt;Thanks, we will do some tests
&gt;
&gt;Brock Palen
&gt;Center for Advanced Computing
&gt;brockp_at_[hidden]
&gt;(734)936-1985
&gt;
&gt;
&gt;On Nov 27, 2007, at 4:50 PM, Jeff Squyres wrote:
&gt;
&gt; &gt; Sorry for jumping in late; the holiday and other travel prevented me
&gt; &gt; from getting to all my mail recently...  :-\
&gt; &gt;
&gt; &gt; Have you checked the counters on the subnet manager to see if any
&gt; &gt; other errors are occurring?  It might be good to clear all the
&gt; &gt; counters, run the job, and see if the counters are increasing faster
&gt; &gt; than they should (i.e., any particular counter should advance very
&gt; &gt; very slowly -- perhaps 1 per day or so).
&gt; &gt;
&gt; &gt; I'll ask around the kernel-level guys (i.e., Roland) to see what else
&gt; &gt; could cause this kind of error.
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; On Nov 27, 2007, at 3:35 PM, Brock Palen wrote:
&gt; &gt;
&gt; &gt;&gt; Ok i will open a case with cisco,
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; Brock Palen
&gt; &gt;&gt; Center for Advanced Computing
&gt; &gt;&gt; brockp_at_[hidden]
&gt; &gt;&gt; (734)936-1985
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; On Nov 27, 2007, at 4:19 PM, Andrew Friedley wrote:
&gt; &gt;&gt;
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Brock Palen wrote:
&gt; &gt;&gt;&gt;&gt;&gt;&gt; What would be a place to look?  Should this just be default then
&gt; &gt;&gt;&gt;&gt;&gt;&gt; for
&gt; &gt;&gt;&gt;&gt;&gt;&gt; OMPI?  ompi_info shows the default as 10 seconds?  Is that right
&gt; &gt;&gt;&gt;&gt;&gt;&gt; 'seconds' ?
&gt; &gt;&gt;&gt;&gt;&gt; The other IB guys can probably answer better than I can -- I'm
&gt; &gt;&gt;&gt;&gt;&gt; not an
&gt; &gt;&gt;&gt;&gt;&gt; expert in this part of IB (or really any part I guess :).  Not
&gt; &gt;&gt;&gt;&gt;&gt; sure
&gt; &gt;&gt;&gt;&gt;&gt; why
&gt; &gt;&gt;&gt;&gt;&gt; a larger value isn't the default.  No, its not seconds -- check
&gt; &gt;&gt;&gt;&gt;&gt; the
&gt; &gt;&gt;&gt;&gt;&gt; description of the MCA parameter:
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; 4.096 microseconds * (2^btl_openib_ib_timeout)
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; You sure?
&gt; &gt;&gt;&gt;&gt; ompi_info --param btl openib
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;10&quot;)
&gt; &gt;&gt;&gt;&gt;                           InfiniBand transmit timeout, in seconds
&gt; &gt;&gt;&gt;&gt; (must be &gt;= 1)
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Yeah:
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;10&quot;)
&gt; &gt;&gt;&gt;          InfiniBand transmit timeout, plugged into formula:
&gt; &gt;&gt;&gt;          4.096 microseconds * (2^btl_openib_ib_timeout)(must be
&gt; &gt;&gt;&gt;&gt; = 0 and &lt;= 31)
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Reading earlier in the thread you said OMPI v1.2.0, I got this
&gt; &gt;&gt;&gt; from a
&gt; &gt;&gt;&gt; trunk checkout thats around 3 weeks old.  A quick check shows this
&gt; &gt;&gt;&gt; description was changed between 1.2.0 and 1.2.1.  However the use of
&gt; &gt;&gt;&gt; this parameter hasn't changed -- it's simply passed along to IB
&gt; &gt;&gt;&gt; verbs
&gt; &gt;&gt;&gt; when creating a queue pair (aka a connection).
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Andrew
&gt; &gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt;
&gt; &gt; --
&gt; &gt; Jeff Squyres
&gt; &gt; Cisco Systems
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt;
&gt;
&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4552/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4553.php">Keshetti Mahesh: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<li><strong>Previous message:</strong> <a href="4551.php">Mark Potts: "Re: [OMPI users] Run a process double"</a>
<li><strong>Maybe in reply to:</strong> <a href="4503.php">Brock Palen: "[OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
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
