<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct  6 12:23:05 2007" -->
<!-- isoreceived="20071006162305" -->
<!-- sent="Sat, 6 Oct 2007 18:22:59 +0200" -->
<!-- isosent="20071006162259" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad performance - OpenIB 1.2.3" -->
<!-- id="8C922F9F-ADAC-4833-BD96-713889C03EAB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200709201720.56743.ttelford.groups_at_gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-06 12:22:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4161.php">Jeff Squyres: "Re: [OMPI users] sed: 33: ...: unescaped newline inside substitute pattern"</a>
<li><strong>Previous message:</strong> <a href="4159.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/09/4051.php">Troy Telford: "[OMPI users] Bad performance - OpenIB 1.2.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying -- you sent this right before many of  
<br>
us left for Europe for a conference and subsequent OMPI engineering  
<br>
meetings.  I'm just now getting to much of the list mail that has  
<br>
piled up since then...
<br>
<p>What you describe is darn weird.  :-(
<br>
<p>I know that this is likely to be an expected answer, but: is there  
<br>
any chance you can try upgrading to a more recent version of OMPI?   
<br>
Also, this may be a dumb question, but just to be sure: did you run  
<br>
ompi_info and ensure that you have an openib BTL component installed?
<br>
<p>FWIW, we do not yet have a &quot;positive ACK&quot; way to know which networks  
<br>
you're using (I have an open ticket about it for v1.3...), meaning  
<br>
that OMPI doesn't show which networks you're using.  It will,  
<br>
however, give you a negative ACK if you're *not* using a high-speed  
<br>
network that OMPI was configured for.  Specifically, if you have an  
<br>
openib BTL installed and it is not used because it can't find any  
<br>
active HCA ports, then the openib BTL will complain.
<br>
<p>You can also force the use of specific networks with the &quot;btl&quot; MCA  
<br>
parameter, such as:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl openib,self ...
<br>
<p>Then, if openib is not able to be used, the run will likely barf  
<br>
because it won't be able to establish MPI communications.
<br>
<p><p>On Sep 21, 2007, at 1:20 AM, Troy Telford wrote:
<br>
<p><span class="quotelev1">&gt; I'm running Intel's IMB benchmark over an InfiniBand cluster;  
</span><br>
<span class="quotelev1">&gt; though other
</span><br>
<span class="quotelev1">&gt; benchmarks that Open MPI has done fine in the past are also performing
</span><br>
<span class="quotelev1">&gt; poorly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The cluster has DDR IB, and the fabric isn't seeing the kind of  
</span><br>
<span class="quotelev1">&gt; symbol errors
</span><br>
<span class="quotelev1">&gt; that indicate a bad fabric; (non-mpi) bandwidth tests over the IB  
</span><br>
<span class="quotelev1">&gt; fabric are
</span><br>
<span class="quotelev1">&gt; in the expected range.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When the number of processes in IMB becomes greater than one node  
</span><br>
<span class="quotelev1">&gt; can handle,
</span><br>
<span class="quotelev1">&gt; the bandwidth reported by IMB's 'Sendrecv',  and 'Exchange'  test  
</span><br>
<span class="quotelev1">&gt; drops from
</span><br>
<span class="quotelev1">&gt; 1.9 GB/sec (4 process - or one process per core in the first node)  
</span><br>
<span class="quotelev1">&gt; to 20
</span><br>
<span class="quotelev1">&gt; MB/sec over 8 processes (and two nodes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In other words, when we move from using shared memory and 'self' to  
</span><br>
<span class="quotelev1">&gt; an actual
</span><br>
<span class="quotelev1">&gt; network interface, IMB reports _really_ lousy performance, lower by  
</span><br>
<span class="quotelev1">&gt; 30x than
</span><br>
<span class="quotelev1">&gt; I've recorded for SDR IB.  (For the same test with a different  
</span><br>
<span class="quotelev1">&gt; cluster using
</span><br>
<span class="quotelev1">&gt; SDR IB &amp; Open MPI, I've clocked ~650 MB/sec - quite a bit higher  
</span><br>
<span class="quotelev1">&gt; than 20
</span><br>
<span class="quotelev1">&gt; MB/sec)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On this cluster, however IMB's reported bandwidth remains the same  
</span><br>
<span class="quotelev1">&gt; from 2-36
</span><br>
<span class="quotelev1">&gt; nodes, over DDR InfiniBand:  ~20 MB/sec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've used the OFED 1.1.1 and 1.2 driver releases so far.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the command line is pretty simple:
</span><br>
<span class="quotelev1">&gt; mpirun -np 128 -machinefile &lt;foo&gt; -mca btl openib,sm,self ./IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as I'm aware, our command-line excludes TCP/IP (and hence  
</span><br>
<span class="quotelev1">&gt; ethernet)
</span><br>
<span class="quotelev1">&gt; from being used; yet we're seeing speeds that are far below the  
</span><br>
<span class="quotelev1">&gt; abilities of
</span><br>
<span class="quotelev1">&gt; InfiniBand.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've used Open MPI quite a bit, since before the 1.0 days; I've  
</span><br>
<span class="quotelev1">&gt; been dealing
</span><br>
<span class="quotelev1">&gt; with IB for even longer.  (And the guy I'm writing in behalf of has  
</span><br>
<span class="quotelev1">&gt; used Open
</span><br>
<span class="quotelev1">&gt; MPI on large IB systems as well).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Even when we specify that only the 'openib' module be used, we are  
</span><br>
<span class="quotelev1">&gt; seeing 20
</span><br>
<span class="quotelev1">&gt; MB/sec.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oddly enough, the management ethernet is 10/100, and 20 MB/sec  
</span><br>
<span class="quotelev1">&gt; seems 'in the
</span><br>
<span class="quotelev1">&gt; same ballpark' as would be reported by IMB when 10/100 ethernet is  
</span><br>
<span class="quotelev1">&gt; used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We aren't receiving any error messages from Open MPI.  (As normally  
</span><br>
<span class="quotelev1">&gt; you would
</span><br>
<span class="quotelev1">&gt; when part of the fabric is down.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So we're left a bit stumped:  We're getting speeds you would expect  
</span><br>
<span class="quotelev1">&gt; from 100
</span><br>
<span class="quotelev1">&gt; Mbit ethernet, but we're specifying the IB interface, and not  
</span><br>
<span class="quotelev1">&gt; receiving any
</span><br>
<span class="quotelev1">&gt; errors from Open MPI.  There isn't an unusual number of symbol  
</span><br>
<span class="quotelev1">&gt; errors (ie.
</span><br>
<span class="quotelev1">&gt; errors are low, not increasing, etc.) on the IB fabric, the SM is  
</span><br>
<span class="quotelev1">&gt; up and
</span><br>
<span class="quotelev1">&gt; operational.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One more tidbit that is probably insignificant, but I'll mention  
</span><br>
<span class="quotelev1">&gt; anyway:  We
</span><br>
<span class="quotelev1">&gt; are running IBM's GPFS via IPoIB, so there is a little bit of IB  
</span><br>
<span class="quotelev1">&gt; traffic from
</span><br>
<span class="quotelev1">&gt; GPFS - which is also a configuration we've used with no problems in  
</span><br>
<span class="quotelev1">&gt; the past.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas on what I can do to verify that OpenMPI is in fact using  
</span><br>
<span class="quotelev1">&gt; the IB
</span><br>
<span class="quotelev1">&gt; fabric?
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Troy Telford
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4161.php">Jeff Squyres: "Re: [OMPI users] sed: 33: ...: unescaped newline inside substitute pattern"</a>
<li><strong>Previous message:</strong> <a href="4159.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/09/4051.php">Troy Telford: "[OMPI users] Bad performance - OpenIB 1.2.3"</a>
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
