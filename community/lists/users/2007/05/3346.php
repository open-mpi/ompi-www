<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 30 16:04:11 2007" -->
<!-- isoreceived="20070530200411" -->
<!-- sent="Wed, 30 May 2007 15:04:07 -0500" -->
<!-- isosent="20070530200407" -->
<!-- name="smairal_at_[hidden]" -->
<!-- email="smairal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1" -->
<!-- id="1180555447.465dd8b715c85_at_webmail.ksu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A7BCB50-2F64-483B-8F1E-FD2A6B9D3AD6_at_lanl.gov" -->
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
<strong>From:</strong> <a href="mailto:smairal_at_[hidden]?Subject=Re:%20[OMPI%20users]%20forcing%20MPI%20to%20bind%20all%20sockets%20to%20127.0.0.1"><em>smairal_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-05-30 16:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3347.php">Aaron Thompson: "[OMPI users] OpenMPI + GFortran compile issues on Mac OS X 10.4"</a>
<li><strong>Previous message:</strong> <a href="3345.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] segmentation fault in MPI_Barrier"</a>
<li><strong>In reply to:</strong> <a href="3344.php">Brian Barrett: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I use a shared memory system and for my MPI algorithm, I set the
<br>
IP-addresses for all the nodes as 127.0.0.1 in some_hostfile and I
<br>
execute the program using &quot;mpirun --machinefile some_hostfile -np 4
<br>
prog-name&quot;. I think, by default the sm btl switch is ON. Will this help
<br>
in such a case? I am not sure but you may just give it a try, if you
<br>
haven't tried this, Bill.
<br>
<p>-Sarang.
<br>
<p>Quoting Brian Barrett &lt;bbarrett_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Bill -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a known issue in all released versions of Open MPI.  I have a
</span><br>
<span class="quotelev1">&gt; patch that hopefully will fix this issue in 1.2.3.  It's currently
</span><br>
<span class="quotelev1">&gt; waiting on people in the OPen MPI team to verify I didn't do
</span><br>
<span class="quotelev1">&gt; something stupid.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 29, 2007, at 9:59 PM, Bill Saphir wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; George,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is one of the things I tried, and the setting the oob
</span><br>
<span class="quotelev2">&gt; &gt; interface did not work,
</span><br>
<span class="quotelev2">&gt; &gt; with the error message below.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, per this thread:
</span><br>
<span class="quotelev2">&gt; &gt; 	<a href="http://www.open-mpi.org/community/lists/users/2007/05/3319.php">http://www.open-mpi.org/community/lists/users/2007/05/3319.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; I believe it is oob_tcp_include, not oob_tcp_if_include. The latter
</span><br>
<span class="quotelev2">&gt; &gt; is silently
</span><br>
<span class="quotelev2">&gt; &gt; ignored in 1.2, as far as I can tell.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Interestingly, telling the MPI layer to use lo0 (or to not use tcp
</span><br>
<span class="quotelev2">&gt; &gt; at all) works fine.
</span><br>
<span class="quotelev2">&gt; &gt; But when I try to do the same for the OOB layer, it complains. The
</span><br>
<span class="quotelev2">&gt; &gt; full error is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mymac.local:07001] [0,0,0] mca_oob_tcp_init: invalid address ''
</span><br>
<span class="quotelev2">&gt; &gt; returned for selected oob interfaces.
</span><br>
<span class="quotelev2">&gt; &gt; [mymac.local:07001] [0,0,0] ORTE_ERROR_LOG: Error in file oob_tcp.c
</span><br>
<span class="quotelev2">&gt; &gt; at line 1196
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun actually hangs at this point and no processes are spawned. I
</span><br>
<span class="quotelev2">&gt; &gt; have to ^C to stop it.
</span><br>
<span class="quotelev2">&gt; &gt; I see this behavior on both Mac OS and on Linux with 1.2.2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Bill
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; George Bosilica wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There are 2 sets of sockets: one for the oob layer and one for the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI layer (at least if TCP support is enabled). Therefore, in
</span><br>
<span class="quotelev1">&gt; order
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to achieve what you're looking for you should add to the command
</span><br>
<span class="quotelev1">&gt; line
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;--mca oob_tcp_if_include lo0 --mca btl_tcp_if_include lo0&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On May 29, 2007, at 3:58 PM, Bill Saphir wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----- original message below ---
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We have run into the following problem:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - start up Open MPI application on a laptop
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - disconnect from network
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - application hangs
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I believe that the problem is that all sockets created by Open MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; are bound to the external network interface.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For example, when I start up a 2 process MPI job on my Mac (no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hosts specified), I get the following tcp
</span><br>
<span class="quotelev3">&gt; &gt;&gt; connections. 192.168.5.2 is an address on my LAN.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tcp4       0      0  192.168.5.2.49459      192.168.5.2.49463
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ESTABLISHED
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tcp4       0      0  192.168.5.2.49463      192.168.5.2.49459
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ESTABLISHED
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tcp4       0      0  192.168.5.2.49456      192.168.5.2.49462
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ESTABLISHED
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tcp4       0      0  192.168.5.2.49462      192.168.5.2.49456
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ESTABLISHED
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tcp4       0      0  192.168.5.2.49456      192.168.5.2.49460
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ESTABLISHED
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tcp4       0      0  192.168.5.2.49460      192.168.5.2.49456
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ESTABLISHED
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tcp4       0      0  192.168.5.2.49456      192.168.5.2.49458
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ESTABLISHED
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tcp4       0      0  192.168.5.2.49458      192.168.5.2.49456
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ESTABLISHED
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Since this application is confined to a single machine, I would
</span><br>
<span class="quotelev3">&gt; &gt;&gt; like it to use 127.0.0.1,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; which will remain available as the laptop moves around. I am
</span><br>
<span class="quotelev3">&gt; &gt;&gt; unable to force it to bind
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sockets to this address, however.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Some of the things I've tried are:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - explicitly setting the hostname to 127.0.0.1 (--host 127.0.0.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - turning off the tcp btl (--mca btl ^tcp) and other variations
</span><br>
<span class="quotelev1">&gt; (--
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca btl self,sm)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - using --mca oob_tcp_include lo0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The first two have no effect. The last one results in an error
</span><br>
<span class="quotelev3">&gt; &gt;&gt; message of:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [myhost.locall:05830] [0,0,0] mca_oob_tcp_init: invalid address ''
</span><br>
<span class="quotelev3">&gt; &gt;&gt; returned for selected oob interfaces.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is there any way to force Open MPI to bind all sockets to
</span><br>
<span class="quotelev1">&gt; 127.0.0.1?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As a side question -- I'm curious what all of these tcp
</span><br>
<span class="quotelev3">&gt; &gt;&gt; connections are used for.  As I increase the number
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of processes, it looks like there are 4 sockets created per MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; process, without using the tcp btl.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Perhaps stdin/out/err + control?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Bill
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3347.php">Aaron Thompson: "[OMPI users] OpenMPI + GFortran compile issues on Mac OS X 10.4"</a>
<li><strong>Previous message:</strong> <a href="3345.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] segmentation fault in MPI_Barrier"</a>
<li><strong>In reply to:</strong> <a href="3344.php">Brian Barrett: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
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
