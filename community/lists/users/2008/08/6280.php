<?
$subject_val = "Re: [OMPI users] Failure to include Myrinet MX in install";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  6 11:25:02 2008" -->
<!-- isoreceived="20080806152502" -->
<!-- sent="Wed, 6 Aug 2008 17:24:49 +0200" -->
<!-- isosent="20080806152449" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Failure to include Myrinet MX in install" -->
<!-- id="A56D6B98-5548-45DF-B329-34CA5D1148FE_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="s899ce11.012_at_tungsten.whl.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Failure to include Myrinet MX in install<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-06 11:24:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6281.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6279.php">STUART PURVES: "[OMPI users] Failure to include Myrinet MX in install"</a>
<li><strong>In reply to:</strong> <a href="6279.php">STUART PURVES: "[OMPI users] Failure to include Myrinet MX in install"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We decided not to use rpath when we generate the shared libraries for  
<br>
Open MPI. When you specify the --with-mx=*something* it's just for the  
<br>
compilation (and it's a path on the compile node).
<br>
<p>This simply means that you have to add the /opt/mx/lib or /opt/mx/ 
<br>
lib64 to your LD_LIBRARY_PATH. And this has to be done on all nodes  
<br>
that belong to the run.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 6, 2008, at 5:15 PM, STUART PURVES wrote:
<br>
<p><span class="quotelev1">&gt; *** Before acting on this email or opening any attachment you are  
</span><br>
<span class="quotelev1">&gt; advised to read the disclaimer at the end of this email ***
</span><br>
<span class="quotelev1">&gt; ompi_info reports
</span><br>
<span class="quotelev1">&gt; Open MPI: 1.2.6
</span><br>
<span class="quotelev1">&gt; Open MPI SVN revision: r17946
</span><br>
<span class="quotelev1">&gt; Open RTE: 1.2.6
</span><br>
<span class="quotelev1">&gt; Open RTE SVN revision: r17946
</span><br>
<span class="quotelev1">&gt; OPAL: 1.2.6
</span><br>
<span class="quotelev1">&gt; OPAL SVN revision: r17946
</span><br>
<span class="quotelev1">&gt; Prefix: /usr/local
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;  &lt; .... more output ... &gt;
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt; [sparenode:15092] mca: base: component_find: unable to open mtl mx:  
</span><br>
<span class="quotelev1">&gt; file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [sparenode:15092] mca: base: component_find: unable to open btl mx:  
</span><br>
<span class="quotelev1">&gt; file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [sparenode:15092] mca: base: component_find: unable to open mtl mx:  
</span><br>
<span class="quotelev1">&gt; file not found (ignored)
</span><br>
<span class="quotelev1">&gt; MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.6)
</span><br>
<span class="quotelev1">&gt;  &lt; ... more output .... &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The system is  HP DL145 with RHEL5 (2.6.18-92.el5xen), with   
</span><br>
<span class="quotelev1">&gt; Myrinet-2000 PCIX-based NIC
</span><br>
<span class="quotelev1">&gt; using mx2g_1.2.6 installed to /opt/mx. The last attempt at an  
</span><br>
<span class="quotelev1">&gt; install on the system was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --with-mx=/opt/mx
</span><br>
<span class="quotelev1">&gt; make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was in conjunction with the good folks at Myrinet tech support  
</span><br>
<span class="quotelev1">&gt; who have now directed me here
</span><br>
<span class="quotelev1">&gt; as we cannot see why there is a problem. My previous attempts have  
</span><br>
<span class="quotelev1">&gt; also used the --with-mx-libdir to
</span><br>
<span class="quotelev1">&gt; point to /opt/mx/lib , /opt/mx/lib64 , to no good effect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kinda stumped on this build, what's my mistake or next move ?
</span><br>
<span class="quotelev1">&gt; *** Disclaimer ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The information contained in this E-Mail and any subsequent  
</span><br>
<span class="quotelev1">&gt; correspondence may be subject to the Export Control Act (ECA) 2002.  
</span><br>
<span class="quotelev1">&gt; The content is private and is intended solely for the recipient(s).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For those other than the recipient any disclosure, copying,  
</span><br>
<span class="quotelev1">&gt; distribution, or action taken, or omitted to be taken, in reliance  
</span><br>
<span class="quotelev1">&gt; on such information is prohibited and may be unlawful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If received in error please return to sender immediately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Under the laws of England misuse of information that is subject to  
</span><br>
<span class="quotelev1">&gt; the ECA 2002, is a criminal offence.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Westland Helicopters Ltd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lysander Road
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeovil BA20 2YB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; England
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Registered in England under No 604352
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6280/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6281.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6279.php">STUART PURVES: "[OMPI users] Failure to include Myrinet MX in install"</a>
<li><strong>In reply to:</strong> <a href="6279.php">STUART PURVES: "[OMPI users] Failure to include Myrinet MX in install"</a>
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
