<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul  6 05:35:01 2007" -->
<!-- isoreceived="20070706093501" -->
<!-- sent="Fri, 6 Jul 2007 10:34:35 +0100" -->
<!-- isosent="20070706093435" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi fails on mx endpoint busy" -->
<!-- id="BDDB7C5009659447B2F1747B53854FE83AC3BD_at_EXDUR1.mds.ad.dur.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="468D273A.4080609_at_open-mpi.org" -->
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
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-06 05:34:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3591.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Previous message:</strong> <a href="3589.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>In reply to:</strong> <a href="3582.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3594.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Reply:</strong> <a href="3594.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Tim
<br>
<p>I followed the use of &quot;--mca btl mx,self&quot; as suggested in the FAQ
<br>
<p><a href="http://www.open-mpi.org/faq/?category=myrinet#myri-btl">http://www.open-mpi.org/faq/?category=myrinet#myri-btl</a>
<br>
<p>&nbsp;
<br>
When I use your extra mca value I get:
<br>
<p><span class="quotelev1">&gt;mpirun --mca btl mx,self --mca btl_mx_shared_mem 1 -np 4 ./cpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
------------------------------------------------------------------------
<br>
<pre>
--
&gt; WARNING: A user-supplied value attempted to override the read-only MCA
&gt; parameter named &quot;btl_mx_shared_mem&quot;.
&gt; The user-supplied value was ignored.
followed by the same error messages as before.
Note that although I add &quot;self&quot; the error messages complain about it
missing:
&gt; &gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
&gt; &gt; If you specified the use of a BTL component, you may have 
&gt; forgotten a 
&gt; &gt; component (such as &quot;self&quot;) in the list of usable components.
I checked the output from mx_info for both the current node and another,
there seems not to be a problem.
I attch the output from ompi_info --all
Also
&gt;ompi_info | grep mx
                  Prefix:
/usr/local/Cluster-Apps/openmpi/mx/gcc/64/1.2.3
                 MCA btl: mx (MCA v1.0, API v1.0.1, Component v1.2.3)
                 MCA mtl: mx (MCA v1.0, API v1.0, Component v1.2.3)
As a further check, I rebuild the exe with mpich and that works fine on
the same node over myrinet. I wonder whether mx is properly include in
my openmpi build.
Use of ldd -v on the mpich exe gives references to libmyriexpress.so,
which is not the case for the ompi built exe, suggesting something is
missing?
I used --with-mx=/usr/local/Cluster-Apps/mx/mx-1.1.1
and a listing of that directory is
&gt;ls /usr/local/Cluster-Apps/mx/mx-1.1.1
bin  etc  include  lib  lib32  lib64  sbin
This should be sufficient, I don't need --with-mx-libdir?
Thanks
Henk
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] 
&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Tim Prins
&gt; Sent: 05 July 2007 18:16
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] openmpi fails on mx endpoint busy
&gt; 
&gt; Hi Henk,
&gt; 
&gt; By specifying '--mca btl mx,self' you are telling Open MPI 
&gt; not to use its shared memory support. If you want to use Open 
&gt; MPI's shared memory support, you must add 'sm' to the list. 
&gt; I.e. '--mca btl mx,self'. If you would rather use MX's shared 
&gt; memory support, instead use '--mca btl mx,self --mca 
&gt; btl_mx_shared_mem 1'. However, in most cases I believe Open 
&gt; MPI's shared memory support is a bit better.
&gt; 
&gt; Alternatively, if you don't specify any btls, Open MPI should 
&gt; figure out what to use automatically.
&gt; 
&gt; Hope this helps,
&gt; 
&gt; Tim
&gt; 
&gt; SLIM H.A. wrote:
&gt; &gt; Hello
&gt; &gt; 
&gt; &gt; I have compiled openmpi-1.2.3 with the --with-mx=&lt;directory&gt; 
&gt; &gt; configuration and gcc compiler. On testing with 4-8 slots I get an 
&gt; &gt; error message, the mx ports are busy:
&gt; &gt; 
&gt; &gt;&gt; mpirun --mca btl mx,self -np 4 ./cpi
&gt; &gt; [node001:10071] mca_btl_mx_init: mx_open_endpoint() failed with 
&gt; &gt; status=20 [node001:10074] mca_btl_mx_init: 
&gt; mx_open_endpoint() failed 
&gt; &gt; with status=20 [node001:10073] mca_btl_mx_init: mx_open_endpoint() 
&gt; &gt; failed with status=20
&gt; &gt; 
&gt; ----------------------------------------------------------------------
&gt; &gt; --
&gt; &gt; --
&gt; &gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
&gt; &gt; If you specified the use of a BTL component, you may have 
&gt; forgotten a 
&gt; &gt; component (such as &quot;self&quot;) in the list of usable components.
&gt; &gt; ... snipped
&gt; &gt; It looks like MPI_INIT failed for some reason; your 
&gt; parallel process 
&gt; &gt; is likely to abort.  There are many reasons that a parallel process 
&gt; &gt; can fail during MPI_INIT; some of which are due to configuration or 
&gt; &gt; environment problems.  This failure appears to be an 
&gt; internal failure; 
&gt; &gt; here's some additional information (which may only be 
&gt; relevant to an 
&gt; &gt; Open MPI
&gt; &gt; developer):
&gt; &gt; 
&gt; &gt;   PML add procs failed
&gt; &gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
&gt; &gt; 
&gt; ----------------------------------------------------------------------
&gt; &gt; --
&gt; &gt; --
&gt; &gt; *** An error occurred in MPI_Init
&gt; &gt; *** before MPI was initialized
&gt; &gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
&gt; &gt; mpirun noticed that job rank 0 with PID 10071 on node 
&gt; node001 exited 
&gt; &gt; on signal 1 (Hangup).
&gt; &gt; 
&gt; &gt; 
&gt; &gt; I would not expect mx messages as communication should not 
&gt; go through 
&gt; &gt; the mx card? (This is a twin dual core  shared memory node) 
&gt; The same 
&gt; &gt; happens when testing on 2 nodes, using a hostfile.
&gt; &gt; I checked the state of the mx card with mx_endpoint_info 
&gt; and mx_info, 
&gt; &gt; they are healthy and free.
&gt; &gt; What is missing here?
&gt; &gt; 
&gt; &gt; Thanks
&gt; &gt; 
&gt; &gt; Henk
&gt; &gt; 
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 

</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3590/ompi_info--all.txt">ompi_info--all.txt</a>
</ul>
<!-- attachment="ompi_info--all.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3591.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Previous message:</strong> <a href="3589.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>In reply to:</strong> <a href="3582.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3594.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Reply:</strong> <a href="3594.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
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
