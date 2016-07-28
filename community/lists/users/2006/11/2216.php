<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 22 16:24:51 2006" -->
<!-- isoreceived="20061122212451" -->
<!-- sent="Wed, 22 Nov 2006 14:24:35 -0700" -->
<!-- isosent="20061122212435" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi, mx" -->
<!-- id="C18A0E23.804%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4564BE27.8080007_at_Sun.COM" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-22 16:24:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2217.php">Iannetti, Anthony C. \(GRC-RTB0\): "Re: [OMPI users] 1.2b1 make failed on Mac 10.4"</a>
<li><strong>Previous message:</strong> <a href="2215.php">Rolf Vandevaart: "Re: [OMPI users] openmpi, mx"</a>
<li><strong>In reply to:</strong> <a href="2215.php">Rolf Vandevaart: "Re: [OMPI users] openmpi, mx"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2220.php">Mostyn Lewis: "Re: [OMPI users] openmpi, mx"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One of our users/friends has also sent us some example code to do this
<br>
internally - I hope to find the time to include that capability in the code
<br>
base shortly. I'll advise when we do.
<br>
<p><p>On 11/22/06 2:16 PM, &quot;Rolf Vandevaart&quot; &lt;Rolf.Vandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Lydia:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; errno 24 means &quot;Too many open files&quot;.  When we have seen this, I believe
</span><br>
<span class="quotelev1">&gt; we increased the number of file descriptors available to the mpirun process
</span><br>
<span class="quotelev1">&gt; to get past this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my case, my shell (tcsh) defaults to 256.  I increase it with a call
</span><br>
<span class="quotelev1">&gt; to &quot;limit descriptors&quot;
</span><br>
<span class="quotelev1">&gt; as shown below.  I think other shells may have other commands.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  burl-ct-v40z-0 41 =&gt;limit
</span><br>
<span class="quotelev1">&gt; cputime         unlimited
</span><br>
<span class="quotelev1">&gt; filesize        unlimited
</span><br>
<span class="quotelev1">&gt; datasize        unlimited
</span><br>
<span class="quotelev1">&gt; stacksize       10240 kbytes
</span><br>
<span class="quotelev1">&gt; coredumpsize    0 kbytes
</span><br>
<span class="quotelev1">&gt; vmemoryuse      unlimited
</span><br>
<span class="quotelev1">&gt; descriptors     256
</span><br>
<span class="quotelev1">&gt;  burl-ct-v40z-0 42 =&gt;limit descriptors 64000
</span><br>
<span class="quotelev1">&gt;  burl-ct-v40z-0 43 =&gt;limit
</span><br>
<span class="quotelev1">&gt; cputime         unlimited
</span><br>
<span class="quotelev1">&gt; filesize        unlimited
</span><br>
<span class="quotelev1">&gt; datasize        unlimited
</span><br>
<span class="quotelev1">&gt; stacksize       10240 kbytes
</span><br>
<span class="quotelev1">&gt; coredumpsize    0 kbytes
</span><br>
<span class="quotelev1">&gt; vmemoryuse      unlimited
</span><br>
<span class="quotelev1">&gt; descriptors     64000
</span><br>
<span class="quotelev1">&gt;  burl-ct-v40z-0 44 =&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lydia Heck wrote On 11/22/06 15:45,:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have - again - successfully built and installed
</span><br>
<span class="quotelev2">&gt;&gt; mx and openmpi and I can run 64 and 128 cpus jobs on a 256 CPU cluster
</span><br>
<span class="quotelev2">&gt;&gt; version of openmpi is 1.2b1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; compiler used: studio11
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The code is a benchmark b_eff which runs usually fine - I have used
</span><br>
<span class="quotelev2">&gt;&gt; extensively
</span><br>
<span class="quotelev2">&gt;&gt; it for benchmarking
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I try 192 CPUs I get
</span><br>
<span class="quotelev2">&gt;&gt; m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev2">&gt;&gt; ...........
</span><br>
<span class="quotelev2">&gt;&gt; ..............
</span><br>
<span class="quotelev2">&gt;&gt; ..............
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The myrinet ports have been opened and the job is running
</span><br>
<span class="quotelev2">&gt;&gt; as one of the nodes shows ....
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ps -eaf | grep dph0elh
</span><br>
<span class="quotelev2">&gt;&gt; dph0elh  1068     1   0 20:40:00 ??          0:00 /opt/ompi/bin/orted
</span><br>
<span class="quotelev2">&gt;&gt; --bootproxy 1 --name 0.0.64 --num_procs 65 --vpid_start 0 -
</span><br>
<span class="quotelev2">&gt;&gt;    root  1110  1106   0 20:43:46 pts/4       0:00 grep dph0elh
</span><br>
<span class="quotelev2">&gt;&gt; dph0elh  1070  1068   0 20:40:02 ??          0:00 ../b_eff
</span><br>
<span class="quotelev2">&gt;&gt; dph0elh  1074  1068   0 20:40:02 ??          0:00 ../b_eff
</span><br>
<span class="quotelev2">&gt;&gt; dph0elh  1072  1068   0 20:40:02 ??          0:00 ../b_eff
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; any idea ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Lydia
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Dr E L  Heck
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; University of Durham
</span><br>
<span class="quotelev2">&gt;&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev2">&gt;&gt; Ogden Centre
</span><br>
<span class="quotelev2">&gt;&gt; Department of Physics
</span><br>
<span class="quotelev2">&gt;&gt; South Road
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev2">&gt;&gt; United Kingdom
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev2">&gt;&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev2">&gt;&gt; ___________________________________________
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2217.php">Iannetti, Anthony C. \(GRC-RTB0\): "Re: [OMPI users] 1.2b1 make failed on Mac 10.4"</a>
<li><strong>Previous message:</strong> <a href="2215.php">Rolf Vandevaart: "Re: [OMPI users] openmpi, mx"</a>
<li><strong>In reply to:</strong> <a href="2215.php">Rolf Vandevaart: "Re: [OMPI users] openmpi, mx"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2220.php">Mostyn Lewis: "Re: [OMPI users] openmpi, mx"</a>
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
